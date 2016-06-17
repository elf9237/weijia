<?php

class SiteController extends BaseController
{

	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
            $cyinfoModel=  Info::model();
            $newInfos=$cyinfoModel->findAllBySql("select * from {{info}} order by create_time desc limit 10");
            $starInfos=$cyinfoModel->findAllBySql("select * from {{info}} order by create_time desc limit 5");

		if( $this->wechat){
			$this->render('index');
            //$this->render('desktop/index',array("starInfos"=>$starInfos,"newInfos"=>$newInfos));
		}else{
			$this->render('desktop/index',array("starInfos"=>$starInfos,"newInfos"=>$newInfos));
		}
	}
	public function actionAbout()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		if( $this->wechat){
			$this->render('index');
		}else{
			$this->render('desktop/aboutus');
		}
	}
	public function actionJiameng()
	{
            $user= Yii::app()->session['user'] ;
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		if( $this->wechat){
                    if(!empty($user))
			$this->render('index');
                    else  
                        $this->render('login');
		}else{
                          if(!empty($user))
			$this->render('desktop/fangdongjiameng');
                          else
                        $this->render('desktop/login');      
		}
	}
	public function actionMyinfo()
	{
            $user= Yii::app()->session['user'] ;
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		if( $this->wechat){
			 if(!empty($user))
			$this->render('index');
                    else  
                        $this->render('login');
		}else{
                     if(!empty($user))
			$this->render('desktop/myinfo');
                         else
                        $this->render('desktop/login');    
		}
	}
	public function actionYuyue()
	{
             $user= Yii::app()->session['user'] ;
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		if( $this->wechat){
                     if(!empty($user))
			$this->render('index');
                     else  
                        $this->render('login'); 
		}else{
                        if(!empty($user))
			$this->render('desktop/yuyue');
                          else
                        $this->render('desktop/login');   
		}
	}
	public function actionZufangdetail($id)
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
            $infoModel=  Info::model();
            $cyinfo=$infoModel->findByPk($id);
            
		if( $this->wechat){
			$this->render('index');
		}else{
			$this->render('desktop/zufangdetail',array('cyinfo'=>$cyinfo));
		}
	}
	public function actionGuanjia()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		if( $this->wechat){
			$this->render('index');
		}else{
			$this->render('desktop/guanjiafuwu');
		}
	}
	public function actionZufang()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		if( $this->wechat){
			$this->render('index');
		}else{
			$this->render('desktop/woyaozufang');
		}
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;
                 if( !$this->wechat){
                if(isset($_POST['username'])){
                     $ar =new AjaxReturn();
                     $newUser = User::model()->find('login_id=:openid', array(':openid'=>$_POST['username']));
                     if(!empty($newUser) && md5($_POST['password'])==$newUser->password && $newUser->status!=1){
                        
                         $ar->status=true;
                           Yii::app()->session['user']=$newUser;
                         echo json_encode($ar);
                         
                     }else{
                          $ar->status=false;
                         echo json_encode($ar); 
                     }
                     return;
                 }
                 
                }

        if( $this->wechat){
            $openid = $this->getOpenID();
            $usermodel = new User();
            $newUser = $usermodel::model()->find('openid=:openid', array(':openid'=>$openid));
            if(!empty($newUser)){
                Yii::app()->session['user'] = $newUser;
                $this->redirect(Yii::app()->user->returnUrl);
            }
        }

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login()){

                if( $this->wechat){
                    $user = Yii::app()->session['user'];
                    if(!empty($user)){
                        $openid = $this->getOpenID();
                        $usermodel = new User();
                        $newUser = $usermodel::model()->find('login_id=:login_id', array(':login_id'=>$user['login_id']));
                        $newUser->openid = $openid;
                        $newUser->save();
                    }
                }

                $this->redirect(Yii::app()->user->returnUrl);

            }



		}
		// display the login form
		if( $this->wechat)
		{
			$this->render('login', array('model' => $model));
		}else{
			$this->render('desktop/login');
		}
	}
	public function actionLoginUser(){

		$model = new User("login");
		if($_POST['User']){
			$model->attributes = $_POST['User'];
			$model->validate();
		}
		$this->render('loginUser',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
	public function actionKanfang(){
		$model=new Message();
		$user_info =  Yii::app()->user->userdetail;
		$model->cellphone = $user_info->cellphone;
		$model->user_id = $user_info->id;
		$model->user_name = $user_info->user_name;
		if(isset($_POST['Message'])){
			$model->attributes=$_POST['Message'];
			$model->cellphone = $user_info->cellphone;
			$model->user_id = $user_info->id;
			$model->user_name = $user_info->user_name;

			if($model->save()){
				$this->redirect('index.php?r=site/kanfangsave');
			}
		}
        if( $this->wechat){
        $this->render('kanfang',array('model'=>$model));

        }else{
            $this->render('yuyue');
        }
	}
	public function actionKanfangsave(){
		$this->render('kanfangsave');
	}
	public function actionRegister(){
		$model=new User();
		if(isset($_POST['User'])){
			$model->attributes=$_POST['User'];
			$model->login_id =$model->cellphone;
			$password = $model->password;
            $password2 = Yii::app()->request->getParam('password2');
            if($password !== $password2){
                $this->redirect('index.php?r=site/error');
            }

			$model->username = $model->login_id;
			$model->password = md5($password);
			$model->type =0;
			$model->pid = $_SESSION['share_user_id'];
			if($model->save()){
				$this->redirect('index.php?r=site/regsuccess');
			}
			$model->password = $password;
		}

		$pid = $this->getUserIdByShareUrl();
		$_SESSION['share_user_id'] = 100;
		if( $this->wechat)
		{
			$this->render('register', array('model' => $model));
		}else{
			$this->render('desktop/register', array('model' => $model));
		}
	}
	public  function  actionRegSuccess(){
		$this->render('success');
	}
}