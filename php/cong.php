<?php
/* 跨域许可编码 */
header("Access-Control-Allow-Origin:*");
header("content-type:text/html;charset=utf-8");
/* 1  连接数据库*/
define("HOST","localhost");
define("USERNAME","root");
define("PASSWORD","");

$conn=@mysql_connect(HOST,USERNAME,PASSWORD);
if(!$conn){
    die("数据库连接错误：".mysql_error());
}


/* 2  选择数据库*/
mysql_select_db("1903");
mysql_query("SET NAMES UTF8");


/* 3 选择表单 */
$result=mysql_query("select * from guowu");

$arr=array();
for($i=0;$i<mysql_num_rows($result);$i++){
    $arr[$i]=mysql_fetch_array($result,MYSQL_ASSOC);
}
    echo json_encode($arr);//[{"id":"1","title":"\u9001\u8...},..{}]

?>