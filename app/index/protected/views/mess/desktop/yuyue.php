<!DOCTYPE html>
<!-- saved from url=(0037)http://www.baozupo.com/baozupo/web.do -->
<html lang="zh-cn"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>微家</title>
  
  <meta name="description" content="微家是一家互联网租住生活平台，是一种全新的O2O模式的女性公寓。无中介费、服务费，定期免费保洁，24小时管家服务，WiFi入户，免费使用。微家要为女性打造品质租住，创造真正的家。">
 
  <script src="public/js/jquery-1.9.0.min.js"></script>
  <script src="public/desktop/date/WdatePicker.js"></script>
  <link href="public/desktop/date/skin/WdatePicker.css" rel="stylesheet" type="text/css">
 
  <link rel="stylesheet" href="public/desktop/css/main.css">
  <link rel="stylesheet" href="public/desktop/css/mainweb.css">
  <link rel="stylesheet" href="public/desktop/css/comment.css">

  
  <link rel="stylesheet" href="public/desktop/css/style.css">
<style id="style-1-cropbar-clipper">/* Copyright 2014 Evernote Corporation. All rights reserved. */
.en-markup-crop-options {
    top: 18px !important;
    left: 50% !important;
    margin-left: -100px !important;
    width: 200px !important;
    border: 2px rgba(255,255,255,.38) solid !important;
    border-radius: 4px !important;
}

.en-markup-crop-options div div:first-of-type {
    margin-left: 0px !important;
}
</style></head>
<body class="body-web" style="Overflow-y:scroll" cz-shortcut-listen="true"><div style="position: absolute; z-index: 19700; top: -1970px; left: -1970px; display: none;"></div>

<div class="header">
  <div class="logo"><img src="public/desktop/images/logo.png" alt=""></div>
  <div class="nav">
    <ul>
      <li><a href="index.php" class="active">首页</a></li>
      <li><a href="index.php?r=site/zufang">我要租房</a></li>
      <li><a href="index.php?r=site/guanjia">管家服务</a></li>
      <li><a href="index.php?r=site/myinfo">会员中心</a></li>
      <li><a href="index.php?r=site/jiameng">房东加盟</a></li>
      <li><a href="index.php?r=site/about">关于我们</a></li>
    </ul>
  </div>
  <div class="login">
    <?php
          $user= Yii::app()->session['user'] ;
          if(!empty($user)){
              echo '<span>欢迎回来！'.$user->login_id.'</span>';
          }else{
              echo '<span><a href="index.php?r=site/login">登入</a></span>'; 
          }
        
        ?>
</div>
  
  


  <div style="display: none; background-color: rgb(255, 255, 255);" id="divbananer">
    <div style="height: 400px; width: 100%; opacity: 0.99;" id="divbananerBg">
      <table class="table" cellpadding="0" cellspacing="0" width="100%">
        <tbody><tr>
          <td width="50%" id="tdbananerBg1" style="background-image: url(&quot;/baozupo/images/banbgl5.jpg&quot;); background-color: rgb(245, 209, 177);" onmousemove="showObj(&#39;leftpicTop&#39;)" onmouseout="hiddenObj(&#39;leftpicTop&#39;)" onclick="bananerFade(-1)" align="right">
          <div style="position:relative;">
            <img class="images_nobord" style="display:none;position:absolute;right:10px;top:-30px;" id="leftpicTop" src="public/desktop/images/slideleft.png">
          </div>
        </td>
          <td width="1000px" height="400px">
            <img class="images_nobord" width="1000px" onmouseover="bananerStop()" onmouseout="bananerStart()" id="imgbananer" src="http://www.baozupo.com/baozupo/images/bananer5.jpg">
          </td>
          <td width="50%" id="tdbananerBg2" style="background-image: url(&quot;/baozupo/images/banbgr5.jpg&quot;); background-color: rgb(245, 209, 177);" onmousemove="showObj(&#39;rightpictop&#39;)" onmouseout="hiddenObj(&#39;rightpictop&#39;)" onclick="bananerFade(1)" align="left">
          <div style="position:relative;">
            <img class="images_nobord" style="display:none;position:absolute;left:10px;top:-30px;" id="rightpictop" src="public/desktop/images/slideright.png">
          </div>
        </td>
        </tr>
      </tbody></table>
    </div>
    <div style="text-align:center;margin-top:2px;">
    <img id="banyuan1" src="public/desktop/images/yuan10_hui.png" class="handpoint" onclick="bananerFade(11)">
    <img id="banyuan2" src="public/desktop/images/yuan10_hui.png" class="handpoint" onclick="bananerFade(12)">
    <img id="banyuan3" src="public/desktop/images/yuan10_hui.png" class="handpoint" onclick="bananerFade(13)">
    <img id="banyuan4" src="public/desktop/images/yuan10_he.png" class="handpoint" onclick="bananerFade(14)">
    </div>
  </div>

  
  <div style="height:2px;overflow:hidden;" width="100%"></div>
  
  <div id="contentpar" style="width:100%">
  <div class="div-box" style="min-height: 300px; height: 870px; background-color: rgb(255, 255, 255);" id="content">



<div style="width:100%">
<input type="hidden" id="id" name="id" value="">
<table cellpadding="0" cellspacing="0" class="table" width="100%">
  <tbody><tr><td colspan="3" align="left"><img src="public/desktop/images/prelook.png"></td></tr>
  <tr><td colspan="3">&nbsp;</td></tr>
  <tr>
  <td width="600px" height="370px" style="background-color:#00FF00">
      <div style="width:370px;height:370px;float:left;"><img width="370px" height="370px" src="upload/<?php echo $cyinfo->mian_url ?>"></div>
      <div style="width:230px;height:230px;float:left;"><img width="230px" height="230px" src="public/desktop/images/2015010416480700011.jpg"></div>
      <div style="width:230px;height:140px;float:left;background-color:#FFCC00;color:#FFFFFF;font-size:20px;">
      <div class="priceseaname">微家租房</div>
      <div class="priceseaeng">Sunshine Time</div>
    </div>
  </td>
  <td width="20px">&nbsp;</td>
  <td valign="top">
    <table class="table_find" width="100%">
      <tbody><tr height="8px"><td></td></tr>
      <tr class="td_title_find">
        <td width="28px"><img src="public/desktop/images/hs_name.png"></td>
        <td style="font-size:20px;color:#666666"><strong><?php echo $cyinfo->info_name ?></strong></td>
      </tr>
      <tr height="8px"><td></td></tr>
      <tr>
        <td><img src="public/desktop/images/hs_ad.png"></td>
        <td style="font-size:16px;color:#666666"><strong><?php echo $cyinfo->province.'-'.$cyinfo->city.'-'.$cyinfo->zone.'-'.$cyinfo->district ?></strong></td>
      </tr>
      <tr height="8px"><td></td></tr>
      <tr>
        <td><img src="public/desktop/images/hs_home.png"></td>
        <td class="td_cont_find">
          
          <?php echo $cyinfo->house_type ?>&nbsp;|&nbsp;<?php echo $cyinfo->area ?>平米&nbsp;|&nbsp;&nbsp;|&nbsp;<?php echo $cyinfo->direction ?>
        </td>
      </tr>
      <tr height="10px"><td></td></tr>
      <tr class="td_hsline"><td colspan="2"></td></tr>
      <tr height="24px"><td></td></tr>
      <tr>
        <td><img src="public/desktop/images/hs_y.png"></td>
        <td align="left">
            
            
              
              
              <font style="font-size:18px"><strong><?php echo $cyinfo->price ?></strong></font>元
            
        </td>
      </tr>
      <tr height="8px"><td></td></tr>
      <tr>
        <td><img src="public/desktop/images/hs_hy.png"></td>
        <td class="td_cont_find">
          <table cellpadding="0" cellspacing="0" class="table" align="left">
            <tbody><tr>
              <td>出租状态：&nbsp;&nbsp;</td>
             
              
              <td>
                   <?php
              if($cyinfo->lend_status==0){
               echo   '<img class="images_nobord" src="public/desktop/images/rentno.png">';
              }else{
                   echo   '<img class="images_nobord" src="public/desktop/images/rent.png">';
              }
              
               ?>
                  
                  </td>
              
              
            </tr>
          </tbody></table>
        </td>
      </tr>
      <tr height="8px"><td></td></tr>
      <tr>
        <td><img src="public/desktop/images/hs_ttx.png"></td>
        <td class="td_cont_find">--</td>
      </tr>
      <tr height="8px"><td></td></tr>
      <tr>
        <td><img src="public/desktop/images/hs_dt.png"></td>
        <td class="td_cont_find">公交：<?php echo $cyinfo->bus ?></td>
      </tr>
    </tbody></table>
  </td>
  </tr>
</tbody></table>
</div>
<div style="position:relative;">
  <div style="position:absolute;left:261px;top:20px;">
    <table class="table">
      <tbody><tr><td></td><td class="td_cont_find">&nbsp;&nbsp;&nbsp;&nbsp;看房时间：</td></tr>
      <tr>
        <td id="time_td" class="num_reg">1</td>
        <td><input type="text" id="time" name="time" maxlength="20" title="请输入预约看房时间"  value="" class="input_reg" onclick="WdatePicker({skin:'whyGreen'})"></td>
      </tr>
    </tbody></table>
  </div>
  <div id="time_car" style="position:absolute;left:575px;top:25px;display:none;"><img src="public/desktop/images/cartooninput.gif"></div>
  <div style="position:absolute;left:275px;top:80px;"><img id="time_img" src="public/desktop/images/dline1_h.gif"></div>
  
  <div style="position:absolute;left:350px;top:103px;">
    <table class="table">
      <tbody><tr><td></td><td class="td_cont_find">&nbsp;&nbsp;&nbsp;&nbsp;联系人：</td></tr>
      <tr>
        <td id="name_td" class="num_reg">2</td>
        <td>
          <input type="text" id="name" name="username"  title="请输入您的姓名" value="" class="input_reg" placeholder="请输入您的姓名">
        </td>
      </tr>
    </tbody></table>
  </div>
  <div id="name_car" style="position:absolute;left:665px;top:107px;display:none;"><img src="public/desktop/images/cartooninput.gif"></div>
  <div style="position:absolute;left:275px;top:153px;"><img id="name_img" src="public/desktop/images/dline2_h.gif"></div>
  
  <div style="position:absolute;left:255px;top:182px;">
    <table class="table">
      <tbody><tr><td></td><td class="td_cont_find" >&nbsp;&nbsp;&nbsp;&nbsp;联系电话：</td></tr>
      <tr>
        <td id="phone_td" class="num_reg">3</td>
        <td><input type="text" id="phone" name="phone" title="请输入您的联系电话"  maxlength="20"  value="" class="input_reg" placeholder="请输入您的联系电话"></td>
      </tr>
    </tbody></table>
  </div>
  <div id="phone_car" style="position:absolute;left:570px;top:186px;display:none;"><img src="public/desktop/images/cartooninput.gif"></div>
  <div style="position:absolute;left:275px;top:241px;"><img id="phone_img" src="public/desktop/images/dline1_h.gif"></div>
  
  <div id="divbut" style="position:absolute;left:370px;top:320px;">
    <input id="but" onclick="saveYu()"  class="button_reg" type="button" value="提交">
  </div>
</div>
<div id="tmpdiv"></div>

</div>
  </div>
  
   <div class="content" id="bottom">
    
<table class="table" cellpadding="0" cellspacing="0" width="100%">
  <tbody><tr style="background:url(/baozupo/images/bottom.png);height:4px;"><td colspan="10"></td></tr>
  <tr style="height:20px;"><td colspan="10"></td></tr>
  <tr style="height:86px;color:#FFF">
  <td>&nbsp;</td>
  <td align="center" width="500px">
     <table>
        <tbody><tr height="30px">
           <td style="font-size:14px;width:70px;"><a class="font_a" >关于我们</a>
           </td><td style="font-size:14px;width:70px;"><a class="font_a" >联系我们</a></td>
           <td style="font-size:14px;width:70px;"><a class="font_a" >版权声明</a></td>
           <td style="font-size:14px;width:70px;"><a class="font_a" >加入我们</a></td>
          
         </tr>
         <tr>
           <td colspan="5">
            <a target="_blank" href="#" style="display:inline-block;text-decoration:none;height:20px;line-height:20px; color:#FFF;">
          <p style="float:left;height:20px;line-height:20px;margin: 0px;">榕ICP备35010402350208号</p>
          <img src="public/desktop/images/gongan.png" style="float:left;margin: 0px 0px 0px 26px;">
          <p style="float:left;height:20px;line-height:20px;margin: 0px 0px 0px 5px;">福州公网安备 35010402350208号</p>
        </a>
           </td>
         </tr>
         <tr>
           <td colspan="5">微家租房（福建）房地产经纪有限公司   版权所有</td>
         </tr>
     </tbody></table>
  </td>
  <td width="50px"></td>

  <td width="10px"></td>
  <td width="120px">
    <img src="public/desktop/images/phonebottom.png">
  </td>
  <td width="10px"></td>
  <td width="120px">
    <img src="public/desktop/images/weixin.jpg" width="86px">
  </td>
  <td width="70px"></td>
  <td>&nbsp;</td>
  </tr>
  <tr style="height:20px;color:#FFFFFF">
  <td colspan="3"></td>
  <td></td>
  <td>0591-8855-5353</td>
  <td></td>
  <td>微信扫一扫</td>
  <td colspan="2"></td>
  </tr>
  <tr style="height:5px;"><td colspan="10"></td></tr>
</tbody></table>
  </div>
<!--  <div style="position:fixed;top:200px;right:20px;z-index:18000;"><img class="handpoint" onclick="prefindTop()" src="public/desktop/images/flowright.png"></div>-->


<script type="text/javascript">
  function setContentHeight(height,color){
    $("#content").css("height",height);
    if(color){
      $("#content").css("background-color",color);
      $("#contentpar").css("background-color",color);
    }else{
      $("#content").css("background-color","#FFFFFF");
      $("#contentpar").css("background-color","");
    }
  }
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
                       location.href="index.php?r=ajax/myyuyue";
                   else
                       alert(data.content);

                   
               },
                error:function(data){
                    alert("异常");
                }       
               
           })
            
        }

 
</script></body></html>