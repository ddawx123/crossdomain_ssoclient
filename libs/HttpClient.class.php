<?php
/**
 * SSO客户端全局通信类库
 * @package DingStudio/Passport
 * @subpackage Passport/CrossDomain
 * @author DingStudio
 * @copyright 2016-2017 All Rights Reserved
 */
$config = include(dirname(__FILE__).'/../config.inc.php');

class Client {

    public static function doLogin($username, $password) {
        global $config;
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $config['passport_srv']);
        curl_setopt($curl, CURLOPT_HEADER, 0);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        $post_data = array(
            "username" => $username,
            "userpwd" => $password
        );
        curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);
        $data = curl_exec($curl);
        curl_close($curl);
        return $data;
    }
}