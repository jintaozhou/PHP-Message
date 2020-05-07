<?php
//1.连接数据库
$db_host = "localhost";
$db_name = "root";
$db_pwd = "123456";
$db = "message";
$link = mysqli_connect($db_host, $db_name, $db_pwd, $db) or die("fail");
//2.设置字符集
mysqli_set_charset($link, "utf8");