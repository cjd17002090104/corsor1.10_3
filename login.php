<?php
//10.30.29.53
session_start();
header('Access-Control-Allow-Origin:http://10.30.29.53:63341');  //支持全域名访问，不安全，部署后需要固定限制为客户端网址
header('Access-Control-Allow-Credentials:true');
header('Access-Control-Allow-Headers:x-requested-with,content-type');
header('Content-type: application/json');

$json = file_get_contents("php://input");
$post=json_decode($json);

if($post->userName==123&&$post->passWord==123){
    $_SESSION["user"]=$post->userName;
    $data=array('message'=>'success');
}else{
    $data=array('message'=>'error');
}
echo json_encode($data);