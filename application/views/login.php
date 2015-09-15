<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YCYU</title>
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>skin/css/ckstyle.css">
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>skin/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>skin/js/comm.js"></script>
    <script src="//cdn.bootcss.com/sweetalert/1.1.0/sweetalert.min.js"></script>
    <link href="//cdn.bootcss.com/sweetalert/1.1.0/sweetalert.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
   <![endif]-->
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                <h3><span class="glyphicon glyphicon-signal"></span>&nbsp;&nbsp;<a class="cklogo" href="/t6">YCYU</a></h3>
            </div>
        </div>

        <div id="login" class="row">
            <div class="col-xs-10 col-md-6 col-md-offset-3 col-xs-offset-1">
                <form action="<?php echo base_url(); ?>clogin/userlogin" method="POST" role="form" >
                    <div class="form-group">
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" class="form-control" id="cname" name="cname" placeholder="用户名" required >
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" class="form-control" id="ckey" name="ckey" placeholder="密  码" minLength="6" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">登 录</button>&nbsp;&nbsp;&nbsp;<button id="regBtn" type="button" class="btn btn-info">注册</button>
                </form>
            </div>
        </div>
        
        <div id="regist" class="row" style="display: none">
            <div class="col-xs-10 col-md-6 col-md-offset-3 col-xs-offset-1">
                <form action="<?php echo base_url(); ?>clogin/regist" method="POST" role="form" onsubmit="return regCheck()">
                    <div class="form-group">
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" class="form-control" id="rname" name="cname" placeholder="用户名" required>
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" class="form-control" id="rkey" name="ckey" placeholder="密  码" required>
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" class="form-control" id="rckey" name="cckey" placeholder="确认密码" required>
                        </div>
                        <br>
                        
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                            <input type="email" class="form-control" id="remail" name="cemail" placeholder="邮  箱" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">提交</button>
                </form>
            </div>
        </div>

    </div>
</body>

</html>
