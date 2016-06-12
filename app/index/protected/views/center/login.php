<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2016/6/12
 * Time: 22:19
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
    <title>登入</title>
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
    <link rel="stylesheet" type="text/css" href="./css/common_pc.css" />
    <link rel="stylesheet" type="text/css" href="./css/common2.css" />
    <link rel="stylesheet" type="text/css" href="./css/m-index.css" />
</head>
<body>
<div id="op-wrap">
    <div id="op-aside"></div>
    <div id="op-wrap-mask"></div>

    <div id="op-content">
        <div class="op-alone op-alone-login">
            <div class="auto-middle">
                <div class="op-login">
                    <h3><span class="titleico"></span></h3>
                    <div class="userbox">
                        <input type="text" id="loginName" placeholder="手机、邮箱或用户名">
                        <span class="tip"></span>
                    </div>
                    <div class="passbox">
                        <input type="password" id="passWord" placeholder="密码">
                        <span class="find"></span>
                    </div>
                    <div class="codebox">
                        <input type="text" id="verifyCode" placeholder="验证码">
                        <img class="codeimg" src="http://account.oneplus.cn/getVerifyImage" alt="" data-url="http://account.oneplus.cn/getVerifyImage">
                    </div>
                    <div class="err_message"></div>
                    <div class="underbox"><div class="loginbtn"> 登 录 </div></div>
                    <div class="ft-operate">
                        <a href="#" class="link find-pwd"  et-attached="1"><i class="i-find"></i>忘记密码</a>
                        <a href="#" class="link"  et-attached="1"><i class="arrow"></i>注册</a>
                    </div>
                    、
                </div>
            </div>
        </div>
</body></html>
