<?php
    // header("content-type:text/html;charset=utf-8");
   
    include("./get-shuju.php");//链接数据库

    echo "<script>alert(1);</script>";die;
    $username = $_GET['username'];  //接收get发送的数据
    $password = $_GET['password']; // 接收前端提交数据
    $email = $_GET['email'];
    $phone = $_GET['phone'];
  
    $sql = "select * from users where user_name='$username'";
    $result = $mysqli->query($sql); 
    echo $sql;die;
    if($result->num_rows>0){         //num_rows 记录有几个,0是没有
        die('用户名已存在');
    }
    $insertSql = "insert into users(user_name,user_email,user_pwd,user_sex)values('$username','$email','$password',$phone)";
    /* 数据库 执行  插入代码 */
        $res = $mysqli->query($insertSql);
        if($res){                                   /* 弹框，跳转网页 */
            echo '<script>alert("注册成功");location.href="../html/蘑菇街~.html";</script>';
        }

        $mysqli->close(); 


?>