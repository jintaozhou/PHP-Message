<?php
require "select.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="static/css/admin.css">
</head>
<body>
<div id="header">
    <div class="title"><span>欢迎登陆在线留言板后台管理页面!</span></div>
    <div class="header_right1"><a href="index.php"><span>返回首页</span></a></div>
</div>
<div id="admin">
    <h1>所有留言</h1>
    <table>
        <tr>
            <th>序号</th>
            <th>姓名</th>
            <th>留言时间</th>
            <th>留言内容</th>
            <th>操作</th>
        </tr>
        <?php
        foreach ($rows as $k => $v) :
            ?>
            <tr>
                <td><?= $k + 1 ?></td>
                <td><?= $v["name"] ?></td>
                <td><?= date("Y-m-d h:i:s", $v["inttime"]) ?></td>
                <td><?= $v["content"] ?></td>
                <td><a href="delect.php?id=<?= $v["id"] ?>">删除</a><a href="update_mes.php?id=<?= $v["id"] ?>">|修改</a>
                </td>
            </tr>
        <?php
        endforeach;
        ?>
    </table>
</div>
<div id="foot">
    <span class="f1"> © 2020 ZJT &nbsp; | &nbsp;Power by ZJT &nbsp;| &nbsp;Blog:www.nowfitness.top</span>
</div>
</body>
</html>