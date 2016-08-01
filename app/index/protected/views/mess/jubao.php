
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="format-detection" content="telephone=no">
        <title>微家</title>
        <link rel="stylesheet" href="css/frozen.css">
        <link href="./public/css/iSlider.css" rel="stylesheet">
        <link href="css/house.css" rel="stylesheet">
        <style>
          .ui-form-item-textarea{height: 100%;}
        </style>
    </head>
    <body ontouchstart="">
        
        <footer class="ui-footer ui-footer-btn ui-footer-new" id="footmenu">
            <ul class="ui-tiled ui-border-t">
                <li data-href="index.html" class="ui-border-r ui-house"><div>微家</div></li>
                <li data-href="rent.html" class="ui-border-r ui-rent"><div>我要租房</div></li>
                <li data-href="js.html" class="ui-rentout"><div>我要出租</div></li>
            </ul>
        </footer>
        <section class="ui-container">
          <div class="ui-form ui-border-t">
    <form action="#">
       
        <div class="ui-form-item ui-form-item-textarea ui-border-b">
            <label>
                举报内容
            </label>
            <textarea placeholder="举报内容" name="message"></textarea>
        </div>
        <div class="ui-form-item ui-form-item-l ui-border-b">
            <label class="ui-border-r">
                中国 +86
            </label>
            <input type="text" placeholder="请输入手机号码" name="phone">
            <a href="javascript:saveJu()" class="ui-icon-close jubao">
                举报
            </a>
        </div>
    </form>
</div>
        </section>
        <script src="lib/zepto.min.js"></script>
        <script src="js/frozen.js"></script>
        <script>
        function saveJu(){
            if($("textarea[name='message']").val()==""||$("input[name='phone']").val()=="")
                return;
             $.ajax({
               url:"index.php?r=mess/savejubao&userid="+ <?php echo $userid ; ?>+"&infoid="+<?php echo $infoid ; ?>,
               data:{
                   message:$("textarea[name='message']").val(),
                    phone_no:$("input[name='phone']").val(),
               },
               dataType: "json", 
               type:"POST",
               success:function(data){
                   if(data.status)
                       location.href="index.php?r=store/detial&id="+<?php echo $infoid ; ?>;
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
                        $("#footmenu").html(data);
                    },
                    error: function (data) {
                        alert('请稍等加载中....');},
                })
            });
        </script>
    </body>
</html>
