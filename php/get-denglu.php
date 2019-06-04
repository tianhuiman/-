<?php
include('./get-shuju.php');

$username=$_REQUEST["username"];
$password=$_REQUEST["password"];

$sql="select * from users where user='$username' and user_pwd='$password'";

$result=$myaqli->query($sql);
if($result->num_rows>0){
    echo "<script> alert('登录成功，点击进入主页面'); location.href='../html/蘑菇街~.html';</script>";    
}else{
    echo "<script> alert('登陆失败,点击进入注册页面');location.href='../html/注册.html';</script>";
}

?>