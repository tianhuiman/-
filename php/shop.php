<?php
// /* 跨域许可编码 */
// header("Access-Control-Allow-Origin:*");
// header("content-type:text/html;charset=utf-8");
// /* 1  连接数据库*/
// define("HOST","localhost");
// define("USERNAME","root");
// define("PASSWORD","");

// $conn=@mysql_connect(HOST,USERNAME,PASSWORD);
// if(!$conn){
//     die("数据库连接错误：".mysql_error());
// }


// /* 2  选择数据库*/
// mysql_select_db("1903");
// mysql_query("SET NAMES UTF8");
header("Access-Control-Allow-Origin:*");
header("content-type:text/html;charset=utf-8");
    $mysql_conf = array(
        'host'=>'localhost:3306',
        'db_user'=>'root',
        'db_pwd'=>'',
        'db'=>'1903'
    );

    $mysqli = @new mysqli($mysql_conf['host'],$mysql_conf['db_user'],$mysql_conf['db_pwd']);

    if($mysqli->connect_errno){
        die('连接错误'.$mysqli->connect_errno);
    }
    
    $mysqli->query("set names 'utf8';");  //设置编码
    $select_db = $mysqli->select_db($mysql_conf['db']);
    if(!$select_db){
        die('选择数据库错误'.$mysqli->error);
    }


/* 3 选择表单 */
$idList = $_REQUEST['idlist'];
// $res=mysql_query("SELECT * FROM `guowu` WHERE `id` IN ('$idList')");
$sql="SELECT * FROM `guowu` WHERE `id` IN ($idList)";
$res=$mysqli->query($sql);
// echo $res;die;
$arr = array();
    

while($row = $res->fetch_assoc()){
    array_push($arr,$row);
}

$json = json_encode($arr);

echo $json;

$mysqli->close();
?>