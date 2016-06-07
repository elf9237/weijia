<?php

class OrderController extends BaseController
{
    public $ret = array('code' => -1, 'msg' => '错误');

    public function actionIndex()
    {
        $this->render('index');
    }

    public function actionAdd()
    {
        $model = new Order();

        $user_info = Yii::app()->user->userdetail;
        $model->attributes = $_POST['Order'];
        $model->user_id = $user_info->id;
        $model->order_no = $this->genOrder();

        if ($model->save())
        {
            $ret['code'] = $model->order_no;
            $ret['msg'] = '订单增加成功';
            echo json_encode($ret);
        }
        else
        {
            echo json_encode($this->ret);
        }
    }

    private function genOrder()
    {
        return date('Ymd') . substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8);
    }

    public function actionAudit()
    {
        if (isset($_POST['id']))
        {
            $model = Order::model()->findByPk($_POST['id']);
            $model->audit_content = $_POST['audit_content'];
            $model->audit_time = time();
            $model->audit_status = $_POST['audit_status'];
            $model->audit_id = Yii::app()->user->userdetail->id;
            if ($model->save())
            {
                //更新user表，这个人的类别为代理
                $order = Order::model()->find("id=?", array('id' => $_POST['id']));
                if ($order->save())
                {
                    $ret['code'] = $_POST['id'];
                    $ret['msg'] = '审核成功';
                    echo json_encode($ret);
                }
            }
        }
        else
        {
            echo json_encode($this->ret);
        }
    }

    public function actionPay()
    {
        $_POST['id'] = 1;
        if (isset($_POST['id']))
        {
            $model = Order::model()->findByPk($_POST['id']);
            $this->render('pay', array('order' => $model));
        }
        else
        {
            echo "无法获取订单号";
        }
    }

    public function actionDoPay()
    {
        //调用支付接口
    }
    // Uncomment the following methods and override them if needed
    /*
    public function filters()
    {
        // return the filter configuration for this controller, e.g.:
        return array(
            'inlineFilterName',
            array(
                'class'=>'path.to.FilterClass',
                'propertyName'=>'propertyValue',
            ),
        );
    }

    public function actions()
    {
        // return external action classes, e.g.:
        return array(
            'action1'=>'path.to.ActionClass',
            'action2'=>array(
                'class'=>'path.to.AnotherActionClass',
                'propertyName'=>'propertyValue',
            ),
        );
    }
    */
    
     
}