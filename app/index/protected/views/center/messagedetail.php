<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2016/6/5
 * Time: 15:33
 */
?>
<!DOCTYPE html>
<html lang="en">
<!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--[if lte IE 7]>
    <meta http-equiv="refresh" content="0;url=#upgrade/browser">
    <script>location.href="#upgrade/browser";</script>
    <![endif]-->
    <title>消息列表详情</title>
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
            <span> <a href="http://account.oneplus.cn/"><em>L1437441246887</em></a> </span>
        </div>
    </div>
    <div class="user-bd">
        <div class="user-aside">
            <dl class="user-menu">
                <dt>
                    消息列表详情
                </dt>
                <dd>
                    <ul class="ui-list ui-list-pure ui-border-tb" id="msgDetail">

                    </ul>
                </dd>
            </dl>
        </div>
        <!--  <div class="user-content">
          <div class="logout">
           <a href="#" ><i class="i-icon-logout"></i>退出登入</a>
          </div>
         </div>  -->
</body>
<script src="lib/zepto.min.js"></script>
<script>
    function queryMymess(){
        $.ajax({
            url:"index.php?r=ajax/querymymess",
            data:{page:page},
            type:"POST",
            dataType:"json",
            success:function(data){
                var innerHtml=[];
                if(data.pageList.length>0){
                    $.each(data.pageList,function(n,value){
                        var status='系统消息';
                        var message=value.message;
                        if(value.message_type==0){
                            status='预约消息';
                            message="我对你发布的--"+value.info_name+"感兴趣--"+message;
                        }
                        innerHtml.push('<li class="ui-border-t">'+
                            '<p><span>'+status+'</span><span class="date"> 2月12日</span></p>'
                        '<h4>'+message+'</h4>'+
                        '</li>');
                    });
                }
                $("#mymess").html(innerHtml.join(""));
                pageding($("#turnPageBarmess"),"queryMymess",data);

            }})
    }

    $(function(){
        queryMymess();
    })
</script>
</html>
