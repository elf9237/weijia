<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2016/6/4
 * Time: 18:27
 */
?>
<!DOCTYPE html>
<html lang="en">
<!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>提现记录</title>
    <meta name="keyword" />
    <meta name="description"/>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="MobileOptimized" content="320" />
    <meta name="screen-orientation" content="portrait" />
    <meta name="x5-orientation" content="portrait" />
    <meta name="full-screen" content="no" />
    <meta name="x5-fullscreen" content="true" />
    <meta name="x5-page-mode" content="app" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="renderer" content="webkit|ie-comp|ie-stand" />
    <!--[if IE 8]><meta http-equiv="X-UA-Compatible" content="IE=8"><![endif]-->
    <link rel="stylesheet" type="text/css" href="./css/common_pc.css" />
    <link rel="stylesheet" type="text/css" href="./css/frozen.css" />
    <link rel="stylesheet" type="text/css" href="./css/house.css" />
    <link rel="stylesheet" type="text/css" href="./css/m-index.css" />
</head>
<body>
<div id="op-wrap">
    <div id="op-aside"></div>
    <div id="op-wrap-mask"></div>

    <div class="user-hd">
        <div class="my-avatar">
            <a href="#"> <img src="./img/avatar-default.png" alt="" /> <span class="update-tip"><i class="i-update-avatar"></i></span> </a>
        </div>
        <div class="my-nickname">
            <span class="my-nickname-txt"> <a href="#"><em>L1437441246887</em></a> </span>
            <span class="my-nickname-txt"> <a href="#"><em>余额(元)：<span class="red">100</span></em></a> <a href="index.php?r=center/forward">提现</a></span>
        </div>

    </div>
    <div class="user-bd">
        <div class="user-aside">
            <dl class="user-menu">
<!--                <dt>-->
<!--                    提现记录-->
<!--                </dt>-->
                <div class="ui-tab">
                    <ul class="ui-tab-nav ui-border-b">
                        <li class="current">全部提现记录</li>

                    </ul>
                    <ul class="ui-tab-content" style="width:300%">
                        <li class="current">
                            <ul class="ui-list ui-border-b">
                                <li>
                                    <div class="ui-avatar-s">
                                        <span style="background-image:url(../img/ava1.png)"></span>
                                    </div>
                                    <div class="ui-list-info ui-border-t"><h4><span class="fl"><span class="red">300</span>元</span> <span class="fr">2016-02-03 05:52</span></h4></div>
                                </li>
                                <li>
                                    <div class="ui-avatar-s">
                                        <span style="background-image:url(../img/ava1.png)"></span>
                                    </div>
                                    <div class="ui-list-info ui-border-t"><h4><span class="fl"><span class="red">300</span>元</span> <span class="fr">2016-02-03 05:52</span></h4></div>
                                </li>
                                <li>
                                    <div class="ui-avatar-s">
                                        <span style="background-image:url(../img/ava1.png)"></span>
                                    </div>
                                    <div class="ui-list-info ui-border-t"><h4><span class="fl"><span class="red">300</span>元</span> <span class="fr">2016-02-03 05:52</span></h4></div>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>

            </dl>
        </div>
        <!--  <div class="user-content">
          <div class="logout">
           <a href="#" ><i class="i-icon-logout"></i>退出登入</a>
          </div>
         </div>  -->
        <script src="./lib/zepto.min.js"></script>
        <script src="./js/frozen.js"></script>
        <script>
            (function() {

                var tab = new fz.Scroll('.ui-tab', {
                    role: 'tab',
                    autoplay: true,
                    interval: 3000
                });

                tab.on('beforeScrollStart', function(from, to) {
                    console.log(from, to);
                });

                tab.on('scrollEnd', function(curPage) {
                    console.log(curPage);
                });

            })();
        </script>
</body></html>
