<?php
header('Content-Type: text/html; charset=UTF-8');
$errtip = '请使用站群通行证登录';
if($_SERVER['REQUEST_METHOD']=='POST') {
    if(!isset($_POST['username']) || $_POST['username'] == '' || !isset($_POST['password']) || $_POST['password'] == '') {
        $errtip = '用户名或密码缺一不可，请重试。';
        require_once(dirname(__FILE__).'/tpl/login_tpl.php');
        exit();
    }
    require_once(dirname(__FILE__).'/libs/HttpClient.class.php');
    $client = new Client();
    $result = $client->doLogin($_POST['username'],$_POST['password']);
    $result = json_decode($result);
    if($result->code != 200) {
        $errtip = '用户名或密码不正确，请重试。';
    }
    else {
        setcookie("username", $_POST['username'], time() + 3600,  "/", $_SERVER['HTTP_HOST']);
        setcookie("usertoken", $result->requestID, time() + 3600,  "/", $_SERVER['HTTP_HOST']);
        header('Location: '.$_POST['callback']);
        die();
    }
}
require_once(dirname(__FILE__).'/tpl/login_tpl.php');
?>


