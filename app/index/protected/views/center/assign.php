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
                        <form action=""  class="modifyform">
                            <h3><span class="titleico">注 册</span></h3>
                            <div class="userbox">
                                <div class=""></div>
                                <input type="text" class="userId" placeholder="请输入用户名" datatype="s5-16" errormsg="昵称至少5个字符,最多16个字符！">
                                <span class="tip Validform_checktip">昵称为6~18个字符</span>
                            </div>
                            <div class="userbox">
                                <div class=""></div>
                                <input type="text" class="userId" placeholder="手机号" name="mobile"  datatype="m" errormsg="手机号码格式不对！">
                                <span class="tip Validform_checktip"></span>
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
                                <input type="password" class="passWord" placeholder="密码6~16位" name="userpassword" placeholder="修改密码" datatype="*6-15" errormsg="密码范围在6~15位之间！"><span class="tip Validform_checktip">密码范围在6~15位之间！</span>
                            </div>
                            <div class="passbox">
                                <input type="password" class="passWord2" placeholder="确认密码" name="userpassword2" datatype="*" recheck="userpassword" errormsg="您两次输入的账号密码不一致！">
                                <span class="tip Validform_checktip"></span>
                            </div>
                            <div class="note">注册微家，就表示您同意微家的<a href="" target="_blank" class="user"  et-attached="1">用户协议</a>。
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


</body>
<script type="text/javascript" src="http://validform.rjboy.cn/wp-content/themes/validform/js/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="http://validform.rjboy.cn/Validform/v5.1/Validform_v5.1_min.js"></script>
<script type="text/javascript">
    $(function(){
        //$(".registerform").Validform();  //就这一行代码！;

        $(".modifyform").Validform({
            tiptype:function(msg,o,cssctl){
                //msg：提示信息;
                //o:{obj:*,type:*,curform:*}, obj指向的是当前验证的表单元素（或表单对象），type指示提示的状态，值为1、2、3、4， 1：正在检测/提交数据，2：通过验证，3：验证失败，4：提示ignore状态, curform为当前form对象;
                //cssctl:内置的提示信息样式控制函数，该函数需传入两个参数：显示提示信息的对象 和 当前提示的状态（既形参o中的type）;
                if(!o.obj.is("form")){//验证表单元素时o.obj为该表单元素，全部验证通过提交表单时o.obj为该表单对象;
                    var objtip=o.obj.siblings(".Validform_checktip");
                    cssctl(objtip,o.type);
                    objtip.text(msg);
                }else{
                    var objtip=o.obj.find("#msgdemo");
                    cssctl(objtip,o.type);
                    objtip.text(msg);
                }
            },
            ajaxPost:true
        });
    })
</script>
</html>
