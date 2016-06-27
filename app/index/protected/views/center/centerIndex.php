<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2016/6/4
 * Time: 17:42
 */
?>
<!DOCTYPE html>
<html lang="en">
<!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>个人中心</title>
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
            <span> <a href="index.php?r=center/modify"><em><?php echo Yii::app()->session['user']->username;?> ,未读信息：<?php echo $weidu;?>条</em></a> </span>
        </div>
    </div>
    <div class="user-bd">
        <div class="user-aside">
            <dl class="user-menu">
                <dt>
                    个人中心
                </dt>
                <dd>
                    <a href="index.php?r=lease/crent"><i class="i-my-order"></i>发布房源</a>
                </dd>
                <dd>
                    <a href="index.php?r=center/collect"><i class="i-my-order"></i>我的收藏</a>
                </dd>
                <dd>
                    <a href="index.php?r=center/issue"><i class="i-my-address"></i>我的发布</a>
                </dd>
                <dd>
                    <a href="index.php?r=center/myyuyue"><i class="i-my-address"></i>我的预约</a>
                </dd>
                <dd>
                    <a href="index.php?r=center/hasrent"><i class="i-my-prize"></i>已租房子</a>
                </dd>
                <dd>
                    <a href="index.php?r=center/shenhe"><i class="i-my-prize"></i>出租审核</a>
                </dd>
                 <dd>
                    <a href="index.php?r=center/mydingdan"><i class="i-my-prize"></i>我的订单</a>
                </dd>
                <dd>
                    <a href="index.php?r=center/message"><i class="i-my-prize"></i>我的消息</a>
                </dd>
            </dl>
            <dl class="user-menu">
                <dt>
                    账户管理
                </dt>
                <dd>
                    <!--  <a href="#"><i class="i-my-account"></i>我的账户</a> -->
                    <a href="index.php?r=center/mytenant"><i class="i-my-account"></i>提现记录</a>
                    <a href="index.php?r=center/mybroker"><i class="i-my-account"></i>我的佣金</a>
                    <a href="index.php?r=center/myfenxiao"><i class="i-my-account"></i>我的分销商</a>
                </dd>
            </dl>
            <dl class="user-menu">
                <dt>
                    分享中心
                </dt>
                <dd>
                    <a href="index.php?r=center/wmoney"><i class="i-my-insure"></i>我要佣金</a>
                </dd>
            </dl>
        </div>
        <!--  <div class="user-content">
          <div class="logout">
           <a href="#" ><i class="i-icon-logout"></i>退出登入</a>
          </div>
         </div>  -->
</body></html>
