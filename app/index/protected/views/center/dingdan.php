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
    <title>订单列表</title>
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
            <span> <a href="index.php?r=center/modify"><em>L1437441246887</em></a> </span>
        </div>
    </div>
    <div class="user-bd">
        <div class="user-aside">
            <dl class="user-menu order-list">
                <dt>

                    订单列表
                </dt>
                <dd>
<!--                    <ul class="ui-list ui-list-text ui-border-tb" >-->
<!---->
<!--                    </ul>-->
                    <table class="orderTable">
                        <thead>
                        <tr>
                            <th>订单号</th>
                            <th>类型</th>
                            <th>状态</th>
                            <th>时间</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody id="msg">

                        </tbody>
                    </table>
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
    function getLocalTime(nS) {
        return new Date(parseInt(nS) * 1000).toLocaleString().substr(0,12)}
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
                        url:"index.php?r=ajax/querymyorder",
                        data:param,
                        type:"POST",
                        dataType:"json",
                        success:function(data){
                            param.totalPage=data.totaPage;//更新总页数
                            param.page=data.currentPage;//更新当前页（js不太可靠）
                            var innerHtml=[];
                            if(data.pageList.length>0){
                                $.each(data.pageList,function(n,value){ 
                      
                        var infoStatus="未支付";
                        if(value.audit_status==1){
                            infoStatus="已支付";
                        }
                         if(value.audit_status==2){
                            infoStatus="支付失败";
                        }
                         if(value.audit_status==3){
                            infoStatus="申请退款";
                        }
                         if(value.audit_status==4){
                            infoStatus="退款成功";
                        }
                         if(value.audit_status==5){
                            infoStatus="退款失败";
                        }
                        var strs='<td>不可操作</td>';
                        if(value.order_type=="佣金"&&value.lend_status==0&&value.audit_status==1)
                            strs= '<td class="onCao"><a  onclick="tui('+value.id+')">退款</a></td></tr>';
                        
                         
                    innerHtml.push('<tr>'+
                     
                      '<td>'+value.order_no+'</td>'+
                        '<td>'+value.order_type+'</td>'+
                         '<td>'+infoStatus+'</td>'+
                           '<td>'+getLocalTime(value.create_time) +'</td>'+strs
                           
                       
                      
                                   
            );  });


                            }
                            $("#msg").append(innerHtml.join(""));
                            ajax=!1;
//                pageding($("#turnPageBar"),"queryColl",data);
                        }
                    })
                }}).scroll();
        });
    };
   function tui(id){
        
        $.ajax({
            url:"index.php?r=ajax/applyTui",
            data:{id:id},
            type:'POST',
            dataType:'json',
            success:function(data){
                if(data.status){
                    window.location.reload();
                }else{
                   
                    layer.msg(data.content);
                }
            }
        }); 
    }
    $(function(){
        queryColl();
    });

</script>
</html>
