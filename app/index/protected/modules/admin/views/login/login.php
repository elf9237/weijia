<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>SCT-后台系统</title>
    <link href="public/admin/style/authority/login_css.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="public/admin/scripts/jquery/jquery-1.7.1.js"></script>
    <script type="text/javascript">
    

      
     
    </script>
</head>
<body>
<div id="login_center">
    <div id="login_area">
        <div id="login_box">
            <div id="login_form">
                <form >
                    <div id="login_tip">
                        <span id="login_err" class="sty_txt2"></span>
                    </div>
                    <div>
                        用户名：<input type="text" name="username" class="username" id="name">
                    </div>
                    <div>
                        密&nbsp;&nbsp;&nbsp;&nbsp;码：<input type="password" name="password" class="pwd"
                                                          id="pwd" onkeypress="EnterPress(event)"
                                                          onkeydown="EnterPress()">
                    </div>
                    <span id="cuo" style="display:none">*用户名或密码不正确</span>
                    <span id="kong" style="display:none">*用户名或密码不为空</span>
                   
                </form>
                 <div id="btn_area">
                        <input type="" onclick="login()" class="login_btn" value="登  录">
                        <input type="" class="login_btn" id="login_ret" value="重 置">
                    </div>
            </div>
        </div>
    </div>
</div>
<div style="display:none">
    <script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script>
</div>
    <script>
        function login(){
            var username=$("#name").val();
            var password=$("#pwd").val();
            if(username==""||password==null){
                $("#kong").show();
                return;
            }
             $.ajax({
            type:"POST",
            data:{
                password:password,
                username:username
               
            },
            dataType:"json",
            url:"index.php?r=admin/login/index",
            success:function(data){
                if(data.status){
                    console.log(data);
                    window.location.href="index.php?r=admin/admin/index";
                }else{
                    $("#cuo").show();
                    
                }
            }
        })
            
            
        }
    
    </script>
</body>
</html>