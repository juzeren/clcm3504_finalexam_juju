<?php
$MYSQL_HOST = 'localhost';  // MYSQL服务器主机地址
$MYSQL_USERNAME = 'admin';  // 数据库用户名
$MYSQL_PASSWORD = '12345678';  // 数据库登陆密码
$MYSQL_DBNAME = 'calgary_wellness';  // 数据库1名
$MYSQL_PORT = '3306';  // MYSQL服务器连接端口

//connect to subscribe DB
$conn = mysqli_connect($MYSQL_HOST, $MYSQL_USERNAME, $MYSQL_PASSWORD, $MYSQL_DBNAME, $MYSQL_PORT); 
if(! $conn){  // if failed
    die('ERROR: Could not connect.' . mysqli_connect_error());
} 
?>