<?php
///* @var $this SiteController */
///* @var $model LoginForm */
///* @var $form CActiveForm  */
//
//$this->pageTitle=Yii::app()->name . ' - Login';
//$this->breadcrumbs=array(
//	'Login',
//);
//?>
<!---->
<!--<h1>Login</h1>-->
<!---->
<!--<p>Please fill out the following form with your login credentials:</p>-->
<!---->
<!--<div class="form">-->
<?php //$form=$this->beginWidget('CActiveForm', array(
//	'id'=>'login-form',
//	'enableClientValidation'=>true,
//	'clientOptions'=>array(
//		'validateOnSubmit'=>true,
//	),
//)); ?>
<!---->
<!--	<p class="note">Fields with <span class="required">*</span> are required.</p>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model,'username'); ?>
<!--		--><?php //echo $form->textField($model,'username'); ?>
<!--		--><?php //echo $form->error($model,'username'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model,'password'); ?>
<!--		--><?php //echo $form->passwordField($model,'password'); ?>
<!--		--><?php //echo $form->error($model,'password'); ?>
<!--		<p class="hint">-->
<!--			Hint: You may login with <kbd>demo</kbd>/<kbd>demo</kbd> or <kbd>admin</kbd>/<kbd>admin</kbd>.-->
<!--		</p>-->
<!--	</div>-->
<!---->
<!--	<div class="row rememberMe">-->
<!--		--><?php //echo $form->checkBox($model,'rememberMe'); ?>
<!--		--><?php //echo $form->label($model,'rememberMe'); ?>
<!--		--><?php //echo $form->error($model,'rememberMe'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row buttons">-->
<!--		--><?php //echo CHtml::submitButton('Login'); ?>
<!--	</div>-->
<!---->
<?php //$this->endWidget(); ?>
<!--</div><!-- form -->

<!DOCTYPE html>
<html>
<head>
	<title>登陆页面</title>
	<meta charset="utf-8">
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-touch-fullscreen" content="yes">
	<meta http-equiv="Access-Control-Allow-Origin" content="*">
	<link href="css/login.css" type="text/css" rel="stylesheet">
	<link href="css/global.css" type="text/css" rel="stylesheet">
<!--	<script type="text/javascript" src="js/login.js"></script>-->
</head>
<body>
<div class="login">
	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'login-form',
		'enableClientValidation'=>true,
		'clientOptions'=>array(
			'validateOnSubmit'=>true,
		),
	)); ?>
	<div class="login-title"><p>微家登录</p>
		<i></i>
	</div>
		<div class="login-bar">
			<ul>
				<li><img src="images/login_user.png">
					<?php echo $form->textField($model,'username',array('class'=>"text", 'placeholder'=>"请输入用户名")); ?>
					<?php echo $form->error($model,'username'); ?>
				</li>
				<li><img src="images/login_pwd.png">
					<?php echo $form->passwordField($model,'password',array('class'=>"text" ,'placeholder'=>"请输入确认密码")); ?>
					<?php echo $form->error($model,'password'); ?>
				</li>
			</ul>
		</div>
		<div class="login-btn">
			<?php echo CHtml::submitButton('登陆',array('class'=>'submit')); ?>
			<a href="./index.php?r=site/register"><div class="login-reg"><p>注册</p></div></a>
<!--			<a href="register.html"><div class="login-reg"><p>微信一键登入</p></div></a>-->
		</div>
	<?php $this->endWidget(); ?>
</div>
</body>
</html>
