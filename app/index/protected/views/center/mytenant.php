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
            <span class="my-nickname-txt"> <a href="#"><em><?php echo Yii::app()->session['user']->login_id ?></em></a> </span>
            <span class="my-nickname-txt"> <a href="#"><em>余额(元)：<span class="red"><?php echo Yii::app()->session['user']->yue ?></span></em></a> </span>
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
                            <ul id="tixian" class="ui-list ui-border-b">
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
            
            

    var ajax=!1;//是否加载中
    var param={

        page:0,
        totalPage:1,
    };
    function queryColl(){

        Zepto(function($){
            $(window).scroll(function(){
                if(($(window).scrollTop() + $(window).height() > $(document).height()-30) && !ajax && param.totalPage >= param.page){
                    //滚动条拉到离底40像素内，而且没ajax中，而且没超过总页数
                    //json_ajax(cla,++page);
                    param.page++;//当前页增加1
                    ajax=!0;//注明开始ajax加载中

                    $.ajax({
                        url:"index.php?r=center/queryTixian",
                        data:param,
                        type:"POST",
                        dataType:"json",
                        success:function(data){
                            param.totalPage=data.totaPage;//更新总页数
                            param.page=data.currentPage;//更新当前页（js不太可靠）
                            var innerHtml=[];
                            if(data.pageList.length>0){
                                $.each(data.pageList,function(n,value){ 
                      
                        var infoStatus="待审核";
                        if(value.audit_status==1){
                            infoStatus="成功";
                        }
                         if(value.audit_status==2){
                            infoStatus="失败";
                        }
                    innerHtml.push('<li>'+
                                    '<div class="ui-avatar-s">'+
                                        '<span style="background-image:url(../img/ava1.png)"></span>'+
                                    '</div>'+
                                    '<div class="ui-list-info ui-border-t"><h4><span class="fl"><span class="red">'+value.jine+'</span>元</span> <span class="fr">'+new Date(parseInt(value.create_time) * 1000).toLocaleString().replace(/:\d{1,2}$/,"") +'</span><span class="fr">'+ infoStatus+'</span></h4></div>'+
                                '</li>'
                      
                                   
            );  });


                            }
                            $("#tixian").append(innerHtml.join(""));
                            ajax=!1;
//                pageding($("#turnPageBar"),"queryColl",data);
                        }
                    })
                }}).scroll();
        });
    };
  
    $(function(){
        queryColl();
    });
            
            
            
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
