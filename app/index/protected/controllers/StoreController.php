<?php
class StoreController extends BaseController
{
	public $layout = '//layouts/main2';
	public function actionJiaMeng(){
	$loginuserid=-1;
            $userLogin= Yii::app()->session['user'] ;
            if(!empty($userLogin))
		$this->render('jiameng');
            else
                $this->redirect ("index.php?r=site/login");
	}
	public function actionIndex($info_type){
            
		$this->render('shopstore',array("info_type"=>$info_type));
	}
	public function actionDetial($id){
             $infoModel=  Info::model();
               $userModel= User::model();
            $cyinfo=$infoModel->findByPk($id);
             $useinfo=$userModel->find("id=".$cyinfo->user_id);
             $equis=  Equip::model()->findAll();
             $equi_infos=  RoomEquip::model()->findAll('info_id=:info_id',array('info_id'=>$id));
		$this->render('detial',array('cyinfo'=>$cyinfo,'useinfo'=>$useinfo,'equis'=>$equis,'equi_infos'=>$equi_infos));
	}
         public function actionToFuKuang($infoid){
             $loginuserid=-1;
            $userLogin= Yii::app()->session['user'] ;
            if(empty($userLogin))
                $this->redirect ("index.php?r=site/login");
             
          $infoModel=  Info::model();
          $cyInfo=$infoModel->findByPk($infoid);
	
		$this->render('pay',array("cyInfo"=>$cyInfo));	
	}
        public function actionToFuKuangRi($infoid){
                  $loginuserid=-1;
            $userLogin= Yii::app()->session['user'] ;
            if(empty($userLogin))
                $this->redirect ("index.php?r=site/login");
          $infoModel=  Info::model();
          $cyInfo=$infoModel->findByPk($infoid);
	
		$this->render('payri',array("cyInfo"=>$cyInfo));	
	}
        public function actionToFuKuangYong($infoid){
                  $loginuserid=-1;
            $userLogin= Yii::app()->session['user'] ;
            if(empty($userLogin))
                $this->redirect ("index.php?r=site/login");
            
          $infoModel=  Info::model();
          $cyInfo=$infoModel->findByPk($infoid);
	
		$this->render('payyong',array("cyInfo"=>$cyInfo));	
	}
         public function actionToFuKuangDing($infoid){
                   $loginuserid=-1;
            $userLogin= Yii::app()->session['user'] ;
            if(empty($userLogin))
                $this->redirect ("index.php?r=site/login");
             
          $infoModel=  Info::model();
          $cyInfo=$infoModel->findByPk($infoid);
	
		$this->render('payding',array("cyInfo"=>$cyInfo));	
	}
        /**
         * 非平台用户用户租房
         * @param type $infoid
         */
        public function actionRentFang($infoid){
          $infoModel=  Info::model();
          $cyInfo=$infoModel->findByPk($infoid);
          $ar = new AjaxReturn();
          $rentInfo = new Rentinfo();
          $rentInfo->apply_time=time();
          $rentInfo->info_id=$cyInfo->id;
          $rentInfo->status=0;
          /**
           * 请求者id到时候要设置
           */
             $loginuserid=-1;
            $userLogin= Yii::app()->session['user'] ;
            if(!empty($userLogin))
                $loginuserid=$userLogin->id;
          $rentInfo->sender=$loginuserid;
           $rentInfo->start_time=time();
           $rentInfo->end_time=strtotime("+1 year");
           $ar->status=$rentInfo->save();
           echo json_encode($ar);
	}
        
        public function actionZufang(){
                  $loginuserid=-1;
            $userLogin= Yii::app()->session['user'] ;
            if(!empty($userLogin))
                $loginuserid=$userLogin->id;
            $ar=new AjaxReturn();
            $sender=$loginuserid;
            $days=$_GET['days'];
            $type=$_GET['type'];
            $infoid=$_GET['infoid'];
            $price=$_GET['price'];
            $orderModel= new Order();
            $orderModel->info_id=$infoid;
            $orderModel->audit_status=0;
             $orderModel->order_type='房租';
            $orderModel->pay_type='微信支付';
            $orderModel->days = $days;
            $orderModel->type = $type;
            $orderModel->create_time=time();
            $orderModel->pay_price=$price;
            $orderModel->user_id=$sender; 
            $orderModel->order_no='fz'.(time()+$infoid);
            $ar->status=$orderModel->save();
            $order_id = $orderModel->id;



            $this->redirect(array('pay/index','order_id'=>$order_id));

            //echo json_encode($ar);
            //调用支付接口
            //支付成功后调用PayAfter
        }
        
         public function actionZhiding(){
                  $loginuserid=-1;
            $userLogin= Yii::app()->session['user'] ;
            if(!empty($userLogin))
                $loginuserid=$userLogin->id;
             
              $ar=new AjaxReturn();
            $sender=$loginuserid;
            $days=$_GET['days'];
           
            $infoid=$_GET['infoid'];
            $price=$_GET['price'];
            $orderModel= new Order();
            $orderModel->info_id=$infoid;
            $orderModel->audit_status=0;
             $orderModel->days = $days;
            $orderModel->order_type='置顶';
            $orderModel->days = $days;
            $orderModel->type = 0;
            $orderModel->pay_type='微信支付';
            $orderModel->create_time=time();
            $orderModel->pay_price=$price;
            $orderModel->user_id=$sender; 
            $orderModel->order_no='zd'.(time()+$infoid);
            $ar->status=$orderModel->save();
            $order_id = $orderModel->id;



            $this->redirect(array('pay/index','order_id'=>$order_id));

            //调用支付接口
            //支付成功后调用PayAfter
        }
        
         public function actionYongjin(){
                  $loginuserid=-1;
            $userLogin= Yii::app()->session['user'] ;
            if(!empty($userLogin))
                $loginuserid=$userLogin->id;
             
             $ar=new AjaxReturn();
            $sender=$loginuserid;
            $infoid=$_GET['infoid'];
            $price=$_GET['price'];
            $orderModel= new Order();
            $orderModel->info_id=$infoid;
            $orderModel->audit_status=0;
            $orderModel->order_type='佣金';
            $orderModel->pay_type='微信支付';
            $orderModel->create_time=time();
              $orderModel->days = 0;
            $orderModel->type = 0;
            $orderModel->pay_price=$price;
            $orderModel->user_id=$sender; 
            $orderModel->order_no='yj'.(time()+$infoid);
            $ar->status=$orderModel->save();
            $order_id = $orderModel->id;



            $this->redirect(array('pay/index','order_id'=>$order_id));

            //调用支付接口
            //支付成功后调用PayAfter
            //如果ajax方式不行需要跳转 到前台将$.ajax()改成window.location.href  上面的post参数记得传
        }
      
}