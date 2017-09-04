<?php
header('Content-Type: text/html; charset=UTF-8');
if(!isset($_COOKIE['username']) || $_COOKIE['username'] == '' || !isset($_COOKIE['usertoken']) || $_COOKIE['usertoken'] == '') {
    header('Location: login.php?callback='.$_SERVER['REQUEST_URI']);
    exit();
}
echo '您已成功登录，账号：'.$_COOKIE['username'].' <a href="logout.php" target="_self">退出登录</a>';
