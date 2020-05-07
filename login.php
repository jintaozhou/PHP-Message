<?php
require "connect.php";
$user = $_POST["user"];
$pwd = $_POST["pwd"];
$sql_admin = "select * from admin  ";
//4.执行sql语句
$result_admin = mysqli_query($link, $sql_admin);
$admins = array();
while ($result_admin_arr = mysqli_fetch_assoc($result_admin)) {
    $admins[] = $result_admin_arr;
}
foreach ($admins as $v) {
    if ($v["user"] == $user && $v["pwd"] == $pwd) {
        echo "<script>";
        echo "alert('登陆成功!');";
        echo "window.location.href='adminmessage.php';";
        echo "</script>";
    }
}
echo "<script>";
echo "alert('登陆失败!如您忘记密码请联系周先生1786396****');";
echo "window.location.href='login.html';";
echo "</script>";
