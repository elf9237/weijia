<?php
/**
微家	首页	我要租房
 */
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <title>商铺出租</title>
    <link rel="stylesheet" href="css/frozen.css">
    <link href="css/house.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="lib/pullTo/pullToRefresh.css"/>
     <script src="lib/pullTo/iscroll.js"></script>
     <script src="lib/pullTo/pullToRefresh.js"></script> -->
    <script type="text/javascript" src="lib/area/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="lib/area/area.js"></script>
    <link href="lib/area/area.css" rel="stylesheet" type="text/css"/>

</head>
<body ontouchstart="">
<footer class="ui-footer ui-footer-btn ui-footer-new">
    <ul class="ui-tiled ui-border-t">
        <li data-href="introduce.html" class="ui-border-r ui-house"><div>微家</div></li>
        <li data-href="index.html" class="ui-border-r ui-rent"><div>首页</div></li>
        <li data-href="crent.html" class="ui-rentout"><div>我要出租</div></li>
    </ul>
</footer>
<section class="ui-container">
    <?php echo $content;?>
</section>
<script src="lib/zepto.min.js"></script>
<script src="js/frozen.js"></script>
<script src="js/house.js"></script>
</body>

</html>
