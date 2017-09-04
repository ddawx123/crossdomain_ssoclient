<?php
if(!isset($_COOKIE['username']) || $_COOKIE['username'] == '' || !isset($_COOKIE['usertoken']) || $_COOKIE['usertoken'] == '') {
    header('Location: index.php');
}
else {
    setcookie("username", "", time()-3600, "/", $_SERVER['HTTP_HOST']);
    setcookie("usertoken", "", time()-3600, "/", $_SERVER['HTTP_HOST']);
    header('Location: index.php');
}
