<?php
require "connect.php";
$sql_select = "select * from mes order by id desc ";
//4.执行sql语句
$result_select = mysqli_query($link, $sql_select);
$rows = array();
while ($result_select_arr = mysqli_fetch_assoc($result_select)) {
    $rows[] = $result_select_arr;
}
