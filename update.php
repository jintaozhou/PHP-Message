<?php
$id = $_GET["id"];
$name = $_POST["name"];
$content = $_POST["content"];
require "connect.php";
$sql_update = "UPDATE mes SET name='$name',content='$content' WHERE id=$id";
$sql_update_result = mysqli_query($link, $sql_update);
if ($sql_update_result) {
    echo "<script>";
    echo "alert('修改成功');";
    echo "window.location.href='adminmessage.php';";
    echo "</script>";
} else {
    echo mysqli_error($link);
}