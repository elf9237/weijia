<?php
/**
微家	我要租房	我要出租
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="format-detection" content="telephone=no">
        <title>租房详情</title>
        <link rel="stylesheet" href="css/frozen.css">
       <!-- <link rel="stylesheet" href="lib/pullTo/pullToRefresh.css"/>
        <script src="lib/pullTo/iscroll.js"></script>
        <script src="lib/pullTo/pullToRefresh.js"></script> -->
        <script type="text/javascript" src="lib/area/jquery-1.9.1.js"></script>
       <script type="text/javascript" src="js/jquery.bxslider.js"></script>
       <link href="css/jquery.bxslider.css" rel="stylesheet" type="text/css">
       <link href="css/house.css" rel="stylesheet">
    </head>
    <body ontouchstart="">
        <!-- <header class="ui-header ui-header-positive ui-border-b">
            <i class="ui-icon-return" onclick="history.back()"></i><h1>租房详情</h1><button class="ui-btn ui-back-index">回首页</button>
        </header> -->
        <footer class="ui-footer ui-footer-btn ui-footer-new">
            <ul class="ui-tiled ui-border-t">
                <li data-href="index.html" class="ui-border-r ui-house"><div>微家</div></li>
                <li data-href="ui.html" class="ui-border-r ui-rent"><div>我要租房</div></li>
                <li data-href="js.html" class="ui-rentout"><div>我要出租</div></li>
            </ul>
        </footer>
        <section class="ui-container">
            <?php echo $content;?>
        </section>
        <script src="lib/zepto.min.js"></script>
        <script src="js/frozen.js"></script>
         <script>
window.addEventListener('load', function(){

    var tab = new fz.Scroll('.ui-tab', {
                role: 'tab',
                autoplay: false,
                interval: 3000
            });

            /* 滑动开始前 */
            tab.on('beforeScrollStart', function(from, to) {
                // from 为当前页，to 为下一页
            })

            /* 滑动结束 */
            tab.on('scrollEnd', function(curPage) {
                // curPage 当前页
            });

        })
        </script>
        <script type="text/javascript">
    $(document).ready(function(){
        $('.slider6').bxSlider({
            mode: 'fade',
            slideWidth: 600,
            slideMargin: 10
          });
        });
    </script>
    </body>

</html>