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
    <title>注册</title>
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
    <div id="op-wrap">
        <div id="op-aside"></div>
        <div id="op-wrap-mask"></div>
        <div id="op-content">

            <div class="op-alone op-alone-register">
                <div class="auto-middle">
                    <div class="op-register">
                        <form action="" onsubmit="return false;">
                            <h3><span class="titleico">注 册</span></h3>
                            <div class="userbox">
                                <div class=""></div>
                                <input type="text" class="userId" placeholder="手机或邮箱">
                                <span class="tip"></span>
                            </div>
                            <div class="codebox">
                                <input type="text" class="verifyCode" placeholder="图片验证码">
                                <img class="codeimg" src="http://account.oneplus.cn/getVerifyImage" data-url="">
                            </div>
                            <div class="codebox getSMS">
                                <input type="text" class="smsCode" placeholder="短信验证码">
                                <span class="getSMSBtn"><i></i>获取验证码</span>
                                <span class="time"><i></i><em>120</em>s</span>
                            </div>
                            <div class="passbox">
                                <input type="password" class="passWord" placeholder="密码6~16位，数字/字母/字符至少两种"><span class="tip"></span>
                            </div>
                            <div class="passbox">
                                <input type="password" class="passWord2" placeholder="确认密码">
                                <span class="tip"></span>
                            </div>
                            <div class="note">注册一加，就表示您同意一加的<a href="" target="_blank" class="user"  et-attached="1">用户协议</a>。
                            </div>
                            <button class="btn registerBtn" type="submit"  et-attached="1">注册</button>
                            <div class="ft-operate"><a href="#" class="link"  et-attached="1"><i class="arrow"></i>登录</a></div>
                        </form>
                        <div class="otherlogin">
                            <a href="#" class="qq-login"   et-attached="1"></a>
                            <a href="#" class="sina-login"  et-attached="1"></a>
                        </div>
                    </div>
                </div>
            </div>


</body></html>
