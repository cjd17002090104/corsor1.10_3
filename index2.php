<?php
//10.30.29.53
session_start();
header('Access-Control-Allow-Origin:http://10.30.29.53:63341');  //支持全域名访问，不安全，部署后需要固定限制为客户端网址
header('Access-Control-Allow-Credentials:true');

if(isset($_SESSION["user"])){
    $user=array('userName'=>$_SESSION["user"]);
    $user["message"]="success";
}else{
    $user=array('message'=>"error");
};
echo json_encode($user) ;