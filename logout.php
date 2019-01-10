<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/1/10
 * Time: 8:09
 */
session_start();
header('Access-Control-Allow-Origin:http://10.30.29.53:63341');  //支持全域名访问，不安全，部署后需要固定限制为客户端网址
header('Access-Control-Allow-Credentials:true');
header('Access-Control-Allow-Headers:x-requested-with,content-type');
header('Content-type: application/json');
unset($_SESSION["user"]);
$data=array('message'=>'success');
echo json_encode($data);