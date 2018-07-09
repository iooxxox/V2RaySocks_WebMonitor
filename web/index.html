<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>V2Ray服务器监测</title>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/app.css">
    <style>
        .loader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: #F5F8FA;
            z-index: 9998;
            text-align: center;
        }

        .plane-container {
            position: absolute;
            top: 50%;
            left: 50%;
        }
    </style>
</head>
<body class="light">
<!-- Pre loader -->
<div id="loader" class="loader">
    <div class="plane-container">
        <div class="preloader-wrapper small active">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>
        </div>
    </div>
</div>
<div id="app">
<aside class="main-sidebar fixed offcanvas shadow">
    <section class="sidebar">
        <div class="w-80px mt-3 mb-3 ml-3">
            <img src="assets/img/basic/logo.png" alt="">
        </div>
        <div class="relative">
            <p>
            <div class="user-panel p-3 light mb-2">
                <div class="clearfix">
                    <div class="float-left image">
                        <img id="userImageF" class="user_avatar" src="assets/img/dummy/u2.png" alt="User Image">
                    </div>
                    <div class="float-left info">
                        <h6 id="usernameF" class="font-weight-light mt-2 mb-1">请登录</h6>
                            <i id="useronlineT" class="icon-circle text-danger blink"></i><a id="useronlineF" href="#"> Offline</a>
                    </div>
                </div>
            </div>
        </div>

        <ul class="sidebar-menu">
            <li class="header"><strong>主选单</strong></li>
            <li class="treeview active">
                <ul class="treeview-menu">
                    <li id="loginButtonF"><a href="javascript:void(0)"><i class="icon icon-folder5"></i>登陆</a>
                    </li>
                    <li id="registerButtonF"><a href="javascript:void(0)"><i class="icon icon-folder5"></i>注册</a>
                    </li>
                </ul>
            </li>
        </ul>
    </section>
</aside>

<div class="has-sidebar-left">
    <div class="sticky">
        <div class="navbar navbar-expand navbar-dark d-flex justify-content-between bd-navbar blue accent-3">
            <div class="relative">
                <a href="#" data-toggle="offcanvas" class="paper-nav-toggle pp-nav-toggle">
                    <i></i>
                </a>
            </div>
            <div class="navbar-custom-menu p-t-10">
                <ul class="nav navbar-nav">
                    <li class="dropdown custom-dropdown messages-menu">
                        <a href="#" class="nav-link" data-toggle="dropdown">
                            <i class="icon-message "></i>
                            <span class="badge badge-success badge-mini rounded-circle">0</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <ul class="menu pl-2 pr-2">
                                    <li>
                                        <a href="#">
                                            <div class="avatar float-left">
                                                <img src="assets/img/dummy/u4.png" alt="">
                                                <span class="avatar-badge busy"></span>
                                            </div>
                                            <h4>
                                                测试
                                                <small><i class="icon icon-clock-o"></i>测试消息</small>
                                            </h4>
                                            <p>这是测试消息</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer s-12 p-2 text-center"><a href="#">查看全部消息</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="page has-sidebar-left height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-box"></i>
                        Dashboard
                    </h4>
                </div>
            </div>
            <div class="row">
                <ul class="nav responsive-tab nav-material nav-material-white" id="v-pills-tab">
                    <li>
                        <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1">
                            <i class="icon icon-home2"></i>节点列表</a>
                    </li>
                    <li>
                        <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3"><i class="icon icon-question"></i>关于我们</a>
                    </li>
                </ul>
                <a class="btn-fab fab-right btn-primary" ">
                    <i class="icon icon-refresh" onclick="refreshServer()"></i>
                </a>
            </div>
        </div>
    </header>
    <div class="container-fluid relative animatedParent animateOnce">
        <div class="tab-content pb-3" id="v-pills-tabContent">
            <div class="tab-pane animated fadeInUpShort show active" id="v-pills-1">
                <div class="row my-3">
                    <div class="col-md-12">
                        <div class="white p-5 r-5">
                            <div class="card-title">
                                <h5>节点详情</h5>
                            </div>
                            <div class="row my-3">
                                 <div class="col-md-12">
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>节点名称</th>
                                                        <th>节点状态</th>
                                                        <th>节点当前上传</th>
                                                        <th>节点当前下载</th>
                                                        <th>节点负载(1分钟/5分钟/15分钟)</th>
                                                        <th>节点运行天数</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="routePackages">
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane animated fadeInUpShort go" id="v-pills-3">
                <div class="row">
                    <div class="col-md-12 mx-md-auto m-5">
                        <div class="card no-b shadow">
                            <div class="card-body p-4">
                                <p id="aboutUs">这是一个测试Demo～～～</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="assets/js/app.js"></script>
<script>
    $(document).ready(function(){
        $.get("getStatus.php?action=getThread", function(data){
            for (var i = 0; i < data; i++)
                start(i);
        });
        //setInterval("refreshAll()", 10000);
    });

    function refreshAll(){
        refreshServer();
    }

    function refreshServer(){
        document.getElementById('routePackages').innerHTML = ""
        $.get("getStatus.php?action=getThread", function(data){
            for (var i = 0; i < data; i++)
                start(i);
        });
    }

    function start(id){
        $.get("getStatus.php?action=checkServer&server=" + id, function(data){
            document.getElementById('routePackages').innerHTML = document.getElementById('routePackages').innerHTML + data
        });
    }
</script>
</body>
</html>