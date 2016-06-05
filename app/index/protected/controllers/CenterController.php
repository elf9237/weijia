<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2016/6/4
 * Time: 17:35
 */
class CenterController extends BaseController{
//    个人中心首页
    public function actionCenterIndex(){
        $this -> renderPartial('centerIndex');
    }
//    我的发布
    public function actionIssue(){
        $this -> renderPartial('issue');
    }
//    我的收藏
    public function actionCollect(){
        
        $this -> renderPartial('collect');
    }
//    我的预定
    public function actionReverse(){
        $this -> renderPartial('reverse');
    }
//    已租房源
    public function actionHasrent(){
        $this-> renderPartial('hasrent');
    }
//    我的租客
    public function actionMytenant(){
        $this -> renderPartial('mytenant');
    }
//    我的佣金
    public function actionMybroker(){
        $this -> renderPartial('mybroker');
    }
//    提现申请
    public function actionForward(){
        $this -> renderPartial('forward');
    }
//    我要佣金
    public function actionWmoney(){
        $this -> renderPartial('wmoney');
    }
//    出租审核
    public function actionShenhe(){
        $this -> renderPartial('shenhe');
    }
    //    我的消息
    public function actionMessage(){

        $this -> renderPartial('message');
    }
    //    我的消息详情
//    public function actionMessagedetail(){
//        $this -> renderPartial('messagedetail');
//    }
//消息详情展示
    public function actionShowdetail(){
        $id=$_POST['id'];
        $sql="select t.* from cy_message t where t.id=".$id ." ";

        $pagelist=new PageList($sql, 1, 1);

        echo json_encode($pagelist->pageAjax);
       /* $msgModel=Message::model();
        $msgInfo=$msgModel->findByPk($id);
        $msgInfo->read_time=time();
        $ar=new AjaxReturn();
        $ar->status=$msgInfo->save();
        $ar->params=array('msginfo'=>$msgInfo->message);
        echo json_encode($ar);*/


    }
}