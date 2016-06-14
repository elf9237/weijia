<?php
class StoreController extends BaseController
{
	public $layout = '//layouts/main2';
	public function actionJiaMeng(){
	
		$this->render('jiameng');	
	}
	public function actionIndex($info_type){
            
		$this->render('shopstore',array("info_type"=>$info_type));
	}
	public function actionDetial($id){
             $infoModel=  Info::model();
               $userModel= User::model();
            $cyinfo=$infoModel->findByPk($id);
             $useinfo=$userModel->find("id=".$cyinfo->user_id);
		$this->render('detial',array('cyinfo'=>$cyinfo,'useinfo'=>$useinfo));
	}
         public function actionToFuKuang($infoid){
          $infoModel=  Info::model();
          $cyInfo=$infoModel->findByPk($infoid);
	
		$this->render('pay',array("cyInfo"=>$cyInfo));	
	}
        public function actionToFuKuangRi($infoid){
          $infoModel=  Info::model();
          $cyInfo=$infoModel->findByPk($infoid);
	
		$this->render('payri',array("cyInfo"=>$cyInfo));	
	}
        public function actionToFuKuangYong($infoid){
          $infoModel=  Info::model();
          $cyInfo=$infoModel->findByPk($infoid);
	
		$this->render('payyong',array("cyInfo"=>$cyInfo));	
	}
         public function actionToFuKuangDing($infoid){
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
          $rentInfo->sender=123;
           $rentInfo->start_time=time();
           $rentInfo->end_time=strtotime("+1 year");
           $ar->status=$rentInfo->save();
           echo json_encode($ar);
	}
        
        public function actionZufang(){
            $ar=new AjaxReturn();
            $sender=123;
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
            $order_id = $orderModel->attributes['id'];



            $this->redirect(array('pay/index','order_id'=>$order_id));

            //echo json_encode($ar);
            //调用支付接口
            //支付成功后调用PayAfter
        }
        
         public function actionZhiding(){
              $ar=new AjaxReturn();
            $sender=123;
            $days=$_POST['days'];
           
            $infoid=$_POST['infoid'];
            $price=$_POST['price'];
            $orderModel= new Order();
            $orderModel->info_id=$infoid;
            $orderModel->audit_status=0;
             $orderModel->days = $days;
            $orderModel->order_type='置顶';
            $orderModel->pay_type='微信支付';
            $orderModel->create_time=time();
            $orderModel->pay_price=$price;
            $orderModel->user_id=$sender; 
            $orderModel->order_no='zd'.(time()+$infoid);
            $ar->status=$orderModel->save();
             echo json_encode($ar);
            //调用支付接口
            //支付成功后调用PayAfter
        }
        
         public function actionYongjin(){
             $ar=new AjaxReturn();
            $sender=123;
            $infoid=$_POST['infoid'];
            $price=$_POST['price'];
            $orderModel= new Order();
            $orderModel->info_id=$infoid;
            $orderModel->audit_status=0;
            $orderModel->order_type='佣金';
            $orderModel->pay_type='微信支付';
            $orderModel->create_time=time();
            $orderModel->pay_price=$price;
            $orderModel->user_id=$sender; 
            $orderModel->order_no='yj'.(time()+$infoid);
            $ar->status=$orderModel->save();
             echo json_encode($ar);
            //调用支付接口
            //支付成功后调用PayAfter
            //如果ajax方式不行需要跳转 到前台将$.ajax()改成window.location.href  上面的post参数记得传
        }
      
}