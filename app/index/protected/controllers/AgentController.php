<?php

class AgentController extends BaseController
{
    public function accessRules()
    {
        return array(
            array(
                'allow',
                'action' => 'index,join,save，pay',
                'users' => '@'
            ),
            array(
                'deny',
                'users' => '*'
            ),
        );
    }

    public function actionIndex()
    {
        //显示我的申请
        $this->render('index');
    }
    public function actionPay()
    {
        //支付我的申请
        $this->render('index');
    }
    public function actionAudit()
    {
        $ret = array('code'=>-1,'msg'=>'审核失败');
        //审核的动作
        $user_info = Yii::app()->user->userdetail;
        if (isset($_POST['id']))
        {
            $model = Agentform::model()->findByPk($_POST['id']);
            $model->province = $_POST['province'];
            $model->city = $_POST['city'];
            $model->zone = $_POST['zone'];
            $model->city = $_POST['price'];
            $model->audit_time = time();
            $model->audit_status =  $_POST['audit_status'];
            $model->audit_id = Yii::app()->user->userdetail->id;
            if ($model->save())
            {
                //更新user表，这个人的类别为代理
                $user = User::model()->find("id=?",array('id'=>$user_info->id));
                $user->type=2;
                if($user->save()){
                    $ret['code']=0;
                    $ret['msg']='审核成功';
                    echo json_encode($ret);
                }
            }
        }else{
            echo json_encode($ret);
        }
    }
    public function actionAuditList()
    {
        //待审核列表

//        $user = Yii::app()->db->createCommand()
//            ->select('id, username, profile')
//            ->from('tbl_user u')
//            ->join('tbl_profile p', 'u.id=p.user_id')
//            ->where('id=:id', array(':id'=>$id))
//            ->queryRow();
        $agentform = Agentform::model()->findAll(
            'audit_status=:a',array('a'=>0));
       echo  CJSON::encode($agentform);
    }
    public function actionJoin()
    {
        $model = new Agentform();
//        $user_info = Yii::app()->user->userdetail;
//        $model->cellphone = $user_info->cellphone;
          $model->cellphone ='18559934913';
        if (isset($_POST['Agentform']))
        {
            $model->attributes = $_POST['Agentform'];
//            $model->user_id = $user_info->id;
//            $model->user_name = $user_info->username;
            $model->user_id =1;
            $model->user_name ='admin';

            if ($model->save())
            {
                $this->redirect('index.php?r=agent/save');
            }
        }
        $this->render('join', array('model' => $model));
    }

    public function actionSave()
    {
        $this->render('save');
    }
}