<?php
require "connect.php";
$name = $_POST["name"];
$content = $_POST["content"];
$inttime = time();
if (isset($name) && !empty($name)) {
    $sql_add = "INSERT INTO mes(name,content,inttime) VALUES ('$name','$content','$inttime')";
//4.执行sql语句
    $result_add_arr = mysqli_query($link, $sql_add);
    if ($result_add_arr) {
        echo "<script>";
        echo "alert('操作成功');";
        echo "window.location.href='index.php';";
        echo "</script>";
    } else {
        echo "fail" . mysqli_error($link);
    }
} else {
    echo "<script>";
    echo "alert('请至少输入名字！');";
    echo "window.location.href='add_mss.html';";
    echo "</script>";
}
