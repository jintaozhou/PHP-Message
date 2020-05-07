
<?php
require "select.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>留言板</title>
    <link href="static/css/index.css" type="text/css" rel="stylesheet">
</head>
<body>
<div id="header">
    <div class="title"><span>欢迎访问在线留言板!</span></div>
    <div class="header_right1"><a href="#"><span>首页</span></a></div>
    <div class="header_right2"><a href="add_mss.html" target="_blank"><span>我要留言</span></a>&nbsp;<span>|</span>&nbsp;<a
                href="login.html" target="_blank"><span>管理员登陆</span></a>
    </div>
</div>
<div id="bg"><img src="static/image/topbg.jpg"></div>
<div id="comment">
    <div class="daohang">所在位置:<a href="http://59.110.157.156/">首页>></a><a href="#">留言板</a></div>
    <div class="ion5"><img src="static/image/icon5.jpg" class="img1"></div>
    <div class="xiabiao"></div>
    <div class="message">
        <?php
        foreach ($rows as $v) :
            ?>
            <div class="pinlun">
                <div class="pname">网友:<?= $v["name"] ?>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= date("Y-m-d h:i:s", $v["inttime"]) ?></div>
                <div class="pno"><p class="p1">#<?= $v["id"] ?>楼</p></div>
                <div class="pc"><p class="p2"><?= $v["content"] ?></p></div>
            </div>
        <?php
        endforeach;
        ?>
    </div>
</div>
<div id="foot">
    <span class="f1"> Copyright© 2020  &nbsp; | &nbsp;Power by ZJT &nbsp;| &nbsp;Blog:www.nowfitness.top</span>
</div>
</body>
</html>