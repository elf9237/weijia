<?php

class BaseAdminController extends CController
{
	
	public function init(){

        if(!$this->is_login()){
            $this->redirect(array('Admin/login'));
        }
    }

    public function is_login(){


        $session = Yii::app()->session;
        $adminUser = $session['userAdmin'];
        if($adminUser){
            return true;
        }else{
            return false;
        }

    }
}	