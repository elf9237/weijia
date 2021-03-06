<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2016/6/5
 * Time: 15:02
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
    <title>我的发布</title>
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
            <span> <a href="http://account.oneplus.cn/"><em></em></a> </span>
        </div>
    </div>
    <div class="user-bd">
        <div class="user-aside">
            <dl class="user-menu">
                <dt>
                    审核房源
                </dt>
            </dl>
            <section>
                <div id="wrapper">
                    <ul class="infoList" id="infoList">

                    </ul>
                </div>
            </section>

        </div>
        <!--  <div class="user-content">
          <div class="logout">
           <a href="#" ><i class="i-icon-logout"></i>退出登入</a>
          </div>
         </div>  -->
</body>
<script src="lib/zepto.min.js"></script>
<script src="lib/layer/layer.js"></script>
<script>
         function getLocalTime(nS) {
                return new Date(parseInt(nS) * 1000).toLocaleString().substr(0,12)
}
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
                        url:"index.php?r=ajax/querymyshenhehome",
                        data:param,
                        type:"POST",
                        dataType:"json",
                        success:function(data){
                            param.totalPage=data.totaPage;//更新总页数
                            param.page=data.currentPage;//更新当前页（js不太可靠）
                            var innerHtml=[];
                            if(data.pageList.length>0){
                                $.each(data.pageList,function(n,value){
                                    var status='未租';
                                    if(value.lend_status==1)
                                        status='已租';
                                    var infoStatus="月租房";
                                    if(value.info_type==1){
                                        infoStatus="日租房";
                                    }
                                    if(value.info_type==2){
                                        infoStatus="商铺";
                                    }
                                    var date = new Date(value.create_time);
                                    Y = date.getFullYear() + '-';
                                    M = (date.getMonth()+1 < 10 ? '0'+(date.getMonth()+1) : date.getMonth()+1) + '-';
                                    D = date.getDate() + ' ';
                                    var time=Y+M+D;
                                    innerHtml.push( '<li class="item">'+
                                        '<a href="rent-detail.html">'+
                                        '<img src="upload/'+value.mian_url+'" alt="" class="item-thumb">'+
                                        '<dl class="item-info">'+
                                        ' <dt class="info-title"><strong>'+value.info_name+'</strong></dt>'+
                                        '<dd class="info-desc">'+
                                        '<span class="info-desc-detail">'+value.city+'-'+value.zone+'-'+value.district+'</span>'+
                                        '<span class="info-desc-tag info-desc-tag--right"> <em class="biz">'+value.username+'</em> </span>'+
                                        '</dd>'+
                                        '<dd class="info-desc">'+
                                        '<span class="info-desc-price"> '+value.price+'<em class="priceunit"> 元</em></span><span class="info-desc-tag">'+
                                        '<em class="time">'+getLocalTime(value.apply_time)+'</em></span><span class="info-desc-tag--right">  <em class="personal">'+status+'</em>'+
                                        '</span>'+
                                        '</dd>'+
                                        '</dl>'+
                                        '</a>');
                                        innerHtml.push( '<span class="toDo clearfix"><a href="javascript:void(0)"  onclick="check(1,'+value.rentid+')">通过</a><a  onclick="check(2,'+value.rentid+')">不通过</a></span>')
                                  
                                    innerHtml.push('</li>');
                                });
                            }
                            $("#infoList").append(innerHtml.join(""));
                            ajax=!1;
//                pageding($("#turnPageBar"),"queryColl",data);
                        }
                    })
                }}).scroll();
        });
    };
    function check(type,id){
    
    layer.open({
                        content: '审核通过？',
                        btn: ['确认', '取消'],
                        shadeClose: true,
                        yes: function(index){
                           $.ajax({
            url:"index.php?r=center/check",
            data:{id:id,type:type},
            type:'POST',
            dataType:'json',
            success:function(data){
                if(data.status){
                    layer.close(index);
                    window.location.reload();
                }else{
                    layer.close(index);
                    layer.msg("审核失败！！");
                }
            }
        }); 
                        },
                        cancel: function(index){
                            layer.close(index);
                        }
    });
        
    }
    $(function(){
        queryColl();
    })
</script>
</html>
