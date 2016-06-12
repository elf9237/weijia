<!DOCTYPE html>
<html>
<head>
    <title>注册页面</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <link href="css/register.css" type="text/css" rel="stylesheet">
    <link href="css/global.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="js/register.js"></script>
</head>
<body>
<div id="layout">
    <span>微家账号注册</span>
    <form  method="post">
        <ul>
            <?php $form=$this->beginWidget('CActiveForm', array(
                'id'=>'user-input-form',
                'enableAjaxValidation'=>false,
            )); ?>
            <p id="err_msg">
                <?php echo $form->error($model,'password',array('separator' =>'')); ?>
                <?php echo $form->error($model,'cellphone',array()); ?>
            </p>
            <li><i class="un"><img src="images/user_name.png"></i>
<!--                <input class="username" type="text" placeholder="请输入用户名" />-->
                <?php echo $form->textField($model,'cellphone',array('placeholder'=>"请输入手机号码",'class'=>"username")); ?>

            </li>
            <!--<li><i class="yz"><img src="images/msg.png"></i><input class="yzm" type="text" placeholder="请输入手机验证码" /><input type="button" id="send" value="获取验证码" /></li>-->
            <li><i class="pw"><img src="images/pwd.png"></i>
<!--                <input class="pwd" type="password" placeholder="请输入密码" />-->
                <?php echo $form->passwordField($model,'password',array('class'=>"pwd", 'placeholder'=>"请输入密码" )); ?>
            </li>
            <li><i class="pw2"><img src="images/pwd.png"></i>
                <input class="pwd2" type="password" name="password2" placeholder="请输入确认密码" />
            </li>
            <div class="queren"><input class="fx" type="checkbox" checked="checked" /><p>我已阅读并同意《用户协议》</p></div>

        </ul>
        <div class="reg_btn">
<!--            <button class="submit" type="submit">注册</button>-->
            <?php echo CHtml::submitButton('注册',array('class'=>"submit")); ?>
            <a href="./index.php?r=site/login"><div class="reg-login"><p>已有帐号，立即登陆</p></div></a>
            <?php echo $form->errorSummary($model); ?>
            <?php $this->endWidget(); ?>
        </div>
    </form>
</div>
</body>
</html>