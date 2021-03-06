<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2016/6/12
 * Time: 22:20
 */
?>
<!DOCTYPE html>
<html lang="en">
<!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="text/javascript" charset="utf-8" async="" src="./js/contains.js"></script>
    <script type="text/javascript" charset="utf-8" async="" src="./js/taskMgr.js"></script>
    <script type="text/javascript" charset="utf-8" async="" src="./js/views.js"></script>
    <title>忘记密码</title>
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
    <link rel="stylesheet" type="text/css" href="./css/m-index.css" />
</head>
<body>
<div id="op-wrap">
    <div id="op-aside"></div>
    <div id="op-wrap-mask"></div>
    <div id="op-content">
        <div class="op-alone op-alone-find">
            <div class="auto-middle">
                <div class="op-find step1">
                    <form action="http://account.oneplus.cn/forgetSendCode" method="post">
                        <h3><span class="titleico">找回密码</span></h3>
                        <div class="userbox">
                            <input type="text" class="userId" name="userName" id="userName" placeholder="手机或邮箱">
                            <span class="tip"></span>
                        </div>
                        <button class="btn next" type="submit"   et-attached="1">下一步</button>
                    </form>
                </div>
            </div>
        </div>

</body></html>
