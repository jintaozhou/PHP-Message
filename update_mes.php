<?php
$id = $_GET["id"];
require "connect.php";
$sql1 = "SELECT * FROM mes WHERE id=$id";
$sql1_result = mysqli_query($link, $sql1);
$sql1_arr = mysqli_fetch_assoc($sql1_result);
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>修改留言</title>
    <link rel="stylesheet" type="text/css" href="static/css/update.css">
</head>
<body>
<div id="header">
    <div class="title"><span>欢迎登陆在线留言板后台管理页面!</span></div>
    <div class="header_right1"><a href="index.php"><span>返回首页</span></a></div>
</div>
<div id="update_box">
    <h1>留言修改</h1>
    <div class="form">
        <form action="update.php?id=<?= $sql1_arr["id"] ?>" method="post">
            <div class="item">
                <img src="static/image/name.png"><input type="text" name="name" value="<?= $sql1_arr['name'] ?>">
            </div>
            <div class="item">
                <img src="static/image/neirong.png"><input type="text" name="content"
                                                           value="<?= $sql1_arr['content'] ?>">
            </div>
            <input type="submit" value="提交" class="sub">
        </form>
    </div>
</div>
</body>
</html>