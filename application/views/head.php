<!DOCTYPE html>
<html lang="zh-CN" ng-app="ycyu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YCYU</title>

    <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>skin/css/ckstyle.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <header>
        <!--  logo search login 注册 个人面板 -->
        <div class="container">
            <div class="row">
                <div class="col-xs-5 col-sm-3 col-md-3 col-lg-3">
                   <h3><span class="glyphicon glyphicon-signal cklogo"></span>&nbsp;&nbsp;<a class="cklogo" href="/t6">YCYU</a></h3>
                </div>
                <div class="col-xs-7 col-sm-6 col-md-6 col-lg-6 text-right">
                    <form class="form-inline" action="" method="POST" role="form">
                        <div class="form-group cksearch">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                                <button type="submit" class="btn btn-primary" type="button">Go!</button>
                              </span>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 text-right">
                    <ol class="breadcrumb ckHeadNav">
                        <li class="active"><a href="<?php echo base_url(); ?>clogin">登录</a></li>
                        <li><a href="<?php echo base_url(); ?>clogin">注册</a></li>
                        <li><a href="<?php echo base_url(); ?>cusercenter">个人中心</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <hr>