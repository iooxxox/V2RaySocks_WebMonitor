<?php
    $json_string = file_get_contents('config.json');
    $servers = json_decode($json_string, true);
    if(isset($_GET['action'])){
        switch($_GET['action']){
            case 'getThread':
                echo(count($servers['servers']));
                break;
            case 'checkServer':
                if(isset($_GET['server']) && is_numeric($_GET['server']) && isset($servers['servers'][$_GET['server']])){
                    $server = $servers['servers'][$_GET['server']];
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, $server['url']);
                    curl_setopt($ch, CURLOPT_HEADER, 1);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                    $response = curl_exec($ch);
                    if(curl_getinfo($ch, CURLINFO_HTTP_CODE) == '200') {
                        $headerSize = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
                        $header = substr($response, 0, $headerSize);
                        $body = substr($response, $headerSize);
                        $resArr = json_decode($body, true);
                        curl_close($ch);
                        $name = $server['name'];
                        $RX = floor($resArr['RX'] / 1024 / 1024 * 100) / 100;
                        $TX = floor($resArr['TX'] / 1024 / 1024 * 100) / 100;
                        $loadaverage = $resArr['LoadMin1'] . '/' . $resArr['LoadMin5'] . '/' .  $resArr['LoadMin15'];
                        $uptime = $resArr['Uptime'];
                        echo('<tr><td>' . $name . '</td><td>正常</td><td>' . $RX . ' Mb/s</td><td>' . $TX . ' Mb/s</td><td>' . $loadaverage . '</td><td>' . $uptime . '</td></tr>');
                    }else{
                        curl_close($ch);
                        echo('<tr><td>' . $server['name'] . '</td><td>超时</td><td>/</td><td>/</td><td>/</td><td>/</td></tr>');
                    }
                }
                break;
            default:
                echo('<tr><td>异常访问</td><td>/</td><td>/</td><td>/</td><td>/</td><td>/</td></tr>');
                break;
        }
    }
?>