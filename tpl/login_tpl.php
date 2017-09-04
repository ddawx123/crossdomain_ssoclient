<?php
$config = include(dirname(__FILE__).'/../config.inc.php');
?>
<!doctype html>
<html lang="zh">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="theme-color" content="#3979B9">
<link rel="shortcut icon" href="static/img/favicon.ico">
<link rel="Bookmark" href="static/img/favicon.ico" />
<title>单点登录系统</title>
<link rel="stylesheet" type="text/css" href="static/css/default.css">
<link rel="stylesheet" type="text/css" href="static/css/styles.css">
<!--[if IE]>
	<script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
<![endif]-->
<script type="text/javascript" src="static/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="static/js/stopExecutionOnTimeout.js?t=1"></script>
<script type="text/javascript" src="static/js/jquery-ui.min.js"></script>
</head>
<body id="application">
<div class="login">
<div class="login_title">
<span>单点登录</span>
<br>
<small><?php echo $errtip; ?></small>
</div>
<form method="post" action="">
<?php
if(!isset($_GET['callback']) || $_GET['callback'] == '') {
    $callback = 'index.php';
}
else {
    $callback = $_GET['callback'];
}
?>
<input type="hidden" name="callback" value="<?php echo $callback; ?>">
<div class="login_fields">
<div class="login_fields__user">
<div class="icon">
<img src="static/img/user_icon_copy.png">
</div>
<input id="username" name="username" placeholder="键入账号" type="text">
<div class="validation">
<img src="static/img/tick.png">
</div>
</div>
<div class="login_fields__password">
<div class="icon">
<img src="static/img/lock_icon_copy.png">
</div>
<input id="password" name="password" placeholder="输入密码" type="text">
<div class="validation">
<img src="static/img/tick.png">
</div>
</div>
<div class="login_fields__submit">
<input id="loginbtn" name="loginbtn" type="submit" value="登录">
<div class="forgot">
<a href="<?php echo $config['passport_uc']; ?>" style="color: #48D1CC">关于通行证</a>
</div>
</div>
</div>
</form>
<div class="disclaimer">
<p style="color: #DCDCDC">&copy;2017 <a href="http://www.dingstudio.cn/?ref=kgroup_sys" target="_blank" onclick="return indexDingStudio()">DingStudio</a> All Rights Reserved</p>
</div>
</div>
</body>
</html>