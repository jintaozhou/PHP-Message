<?php
$id = $_GET["id"];
require "connect.php";
$sql_delect = "DELETE FROM mes WHERE id=$id";
$sql_delect_result = mysqli_query($link, $sql_delect);
if ($sql_delect_result) {
    echo "<script>";
    echo "alert('删除成功');";
    echo "window.location.href='adminmessage.php';";
    echo "</script>";
} else {
    echo mysqli_error($link);
}