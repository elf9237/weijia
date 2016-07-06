<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="format-detection" content="telephone=no">
        <title>微家</title>
        <link rel="stylesheet" href="css/frozen.css">
        <link href="css/house.css" rel="stylesheet">
    </head>
    <body ontouchstart="">
        <!-- <header class="ui-header ui-header-positive ui-border-b">
            <i class="ui-icon-return" onclick="history.back()"></i><h1>微家</h1><button class="ui-btn ui-back-index">回首页</button>
        </header> -->
        <footer class="ui-footer ui-footer-btn ui-footer-new" id="foot">
            <ul class="ui-tiled ui-border-t">
                 <li data-href="introduce.html" class="ui-border-r ui-house"><div>微家</div></li>
                <li data-href="rent.html" class="ui-border-r ui-rent"><div>我要租房</div></li>
                <li data-href="crent.html" class="ui-rentout"><div>我要出租</div></li>
            </ul>
        </footer>
        <section class="ui-container">
            <div class="ui-tab">
                <ul class="ui-tab-nav ui-border-b">
                    <li class="current">我要看房</li>
                    <li>我要加盟</span></li>
                </ul>
                 <ul class="ui-tab-content ui-tab-content-detail" style="width:300%">
                    <li class="current clearfix">
                        <div id="content" ng-controller="ZenMoZuCtrl" ng-init="user=user" class="ng-scope">
                         
                            <form name="form" class="ng-pristine ng-invalid ng-invalid-required">
                                <table border="0" align="center" cellpadding="0" cellspacing="0" width="95%">
                                    <tbody><tr><td colspan="2">
                                        <img src="img/zmz-1.png" width="100%" style="margin-bottom:-7px" align="bottom">
                                        <input type="hidden" ng-model="user.houseid" name="houseid" class="ng-pristine ng-valid">
                                        <input type="hidden" ng-model="user.roomid" name="roomid" class="ng-pristine ng-valid">
                                    </td></tr>
                                    <tr class="bg-zmz">
                                        <td width="20%" align="right" class="link-text">姓名</td>
                                        <td align="left"><input type="text" style="font-size:24px;height:30px;width:80%" maxlength="20" ng-model="user.username" name="username" class="ng-pristine ng-valid" placeholder="请输入您的姓名"></td>
                                    </tr>
                                    <tr class="bg-zmz" height="10px"><td colspan="2"></td></tr>
                                    <tr class="bg-zmz">
                                        <td width="20%" align="right" class="link-text">* 联系电话</td>
                                        <td align="left">
                                            <input type="text" style="font-size:24px;height:30px;width:80%" maxlength="12" ng-model="user.phone" id="phone" name="phone" required="" class="ng-pristine ng-invalid ng-invalid-required" placeholder="请输入您的联系电话">
                                        </td>
                                    </tr>
                                    <tr class="bg-zmz" height="10px"><td colspan="2"></td></tr>
                                    <tr class="bg-zmz">
                                        <td width="20%" align="right" class="link-text">* 看房时间</td>
                                        <td align="left">
                                            <input type="text" style="font-size:24px;height:30px;width:80%" maxlength="12" ng-model="user.time" id="time" name="time" required="" class="ng-pristine ng-invalid ng-invalid-required" onclick="WdatePicker({skin:'whyGreen'})" placeholder="请选择看房时间">
                                        </td>
                                    </tr>
                                    <tr class="bg-zmz"><td colspan="2">&nbsp;</td></tr>
                                    <tr class="bg-zmz"><td colspan="2" style="text-align:center">
                                            <a  onclick="saveYu()">
                                            <img class="noborder" src="img/button-submit.png" width="80%">
                                        </a>
                                    </td></tr>
                                    <tr class="bg-zmz" style="text-align:center"><td colspan="2"><img src="img/zmz-3.png" width="100%"></td></tr>
                                    <tr class="bg-zmz" style="text-align:center;margin-bottom:10px"><td colspan="2"><a href="tel:<?php 
                                    if($cyuser->type=='1'||$cyuser->type=='2'){
                                        echo $cyuser->login_id;
                                    }else{
                                        echo '0591-8855-5353';
                                    }
                                    ?>"><img class="noborder" src="img/button-phone.png" width="80%"></a></td></tr>
                                   
                                </tbody></table>
                            
                            </form>
                        </div>
                    </li>
                    <li>
                        <div id="content" ng-controller="FangDongCtrl" ng-init="user=user" class="ng-scope">
    <div style="background-color:#d80b58;height:50px;color:#fff;font-size:16px;line-height:50px;">
    </div>
    <div id="leasediv"><img class="images" src="img/sumlist.png"></div>
   <div class="ui-notice-btn">
        <button class="ui-btn-primary ui-btn-lg link-btn" data-href="./index.php?r=agent/join">我要加盟</button>
    </div>
</div>
                    </li>
                </ul>
            </div>
        </section>
        <script src="lib/zepto.min.js"></script>
        <script src="js/frozen.js"></script>
        <script src="js/house.js"></script>
        <script src="public/desktop/date/WdatePicker.js"></script>
       <script>
        window.addEventListener('load', function(){

            var tab = new fz.Scroll('.ui-tab', {
                role: 'tab',
                autoplay: false,
                interval: 3000
            });

            /* 滑动开始前 */
            tab.on('beforeScrollStart', function(from, to) {
                // from 为当前页，to 为下一页
            })

            /* 滑动结束 */
            tab.on('scrollEnd', function(curPage) {
                // curPage 当前页
            });

        });
        function saveYu(){
            var time=new Date($("#time").val().replace(/-/g,'/')).getTime()/1000;
            if($("input[name='username']").val()==""||$("input[name='phone']").val()=="")
                return;
             $.ajax({
               url:"index.php?r=mess/saveyu&userid="+ <?php echo $userid ; ?>+"&infoid="+<?php echo $infoid ; ?>,
               data:{
                   real_name:$("input[name='username']").val(),
                    phone_no:$("input[name='phone']").val(),
                   time:time
               },
               dataType: "json", 
               type:"POST",
               success:function(data){
                   if(data.status)
                       location.href="index.php?r=store/detial"+"&id="+<?php echo $infoid ; ?>;
                   else
                       alert(data.content);

                   
               },
                error:function(data){
                    alert("异常");
                }       
               
           })
            
        }

      
        </script>
        <script>
            $(document).ready(function() {
                $.ajax({
                    url: 'index.php?r=basemenu/footmenu',
                    type: 'POST',
                    //data: { id: idValue },
                    //timeout: 3000,
                    success: function (data) {
                        $("#foot").html(data);
                    },
                    error: function (data) {
                        alert('===');},
                })
            });
        </script>
    </body>
</html>