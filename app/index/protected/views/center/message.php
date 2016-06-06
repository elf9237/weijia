<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2016/6/5
 * Time: 15:19
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
    <title>消息列表</title>
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

                    消息列表
                </dt>
                <dd>
                    <ul class="ui-list ui-list-text ui-border-tb" id="msg">

                    </ul>
                </dd>
            </dl>

<!--            <div class="ui-dialog" id="msgDetail">-->
<!--            </div>-->

        </div>

        <!--  <div class="user-content">
          <div class="logout">
           <a href="#" ><i class="i-icon-logout"></i>退出登入</a>
          </div>
         </div>  -->
</body>
<script src="lib/zepto.min.js"></script>
<script src="js/frozen.js"></script>
<script src="lib/layer/layer.js"></script>
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
                        url:"index.php?r=ajax/querymymess",
                        data:param,
                        type:"POST",
                        dataType:"json",
                        success:function(data){
                            param.totalPage=data.totaPage;//更新总页数
                            param.page=data.currentPage;//更新当前页（js不太可靠）
                            var innerHtml=[];
                            if(data.pageList.length>0){
                                $.each(data.pageList,function(n,value){
                                    var message=value.message;
                                    var infoStatus='new';
                                    var yifuClass="ui-badge";
                                    if(value.read_time!=0){
                                        infoStatus="已读";
                                        yifuClass='ui-badge-muted'
                                    }
                                    innerHtml.push(
                                    '<li class="ui-border-t">'+
                                        '<div class="ui-list-info" onclick="showdetail(this,'+value.id+')" id="show">'+
                                        '<h4 class="ui-nowrap">'+message+'</h4>'+
                                   ' </div>'+
                                    '<div class="'+yifuClass+'" id="readStade" onclick="biaoji(this,'+value.id+')">'+infoStatus+'</div>'+
                                        '</li>'
                                    );
                                });


                            }
                            $("#msg").append(innerHtml.join(""));
                            ajax=!1;
//                pageding($("#turnPageBar"),"queryColl",data);
                        }
                    })
                }}).scroll();
        });
    };
    function biaoji(th,id){
        $.ajax({
            url:"index.php?r=ajax/biaoji/",
            data:{id:id},
            type:"POST",
            dataType:"json",
            success:function(data){
                if(data.status){
                    $(th).text("已读");
                    $(th).addClass('ui-badge-muted').removeClass('ui-badge');
                }
            }
        })
    }
    function showdetail(th,id) {
        $.ajax({
            url:"index.php?r=center/showdetail",
            data:{id:id},
            type:"POST",
            dataType:"json",
            success:function(data){
//            alert(JSON.stringify(data));
               var innerHtml=[];
                if(data.pageList.length>0){
                    var status='系统消息';
                    var value=data.pageList[0];
                    var message=value.message;
                    if(value.message_type==0){
                        status='预约消息';
                    }
                    layer.open({
                        title:status,
                        content:message
                    });
                    $(th).siblings().text("已读");
                    $(th).siblings().addClass('ui-badge-muted').removeClass('ui-badge');
                    biaoji(th,id);
                }
            }
        })
    }
    $(function(){
        queryColl();
    });

</script>
</html>
