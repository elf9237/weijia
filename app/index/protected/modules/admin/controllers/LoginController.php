<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdminController
 *
 * @author fanyouyong
 */
class LoginController extends CController{


    public function actionIndex(){
        //echo 1111;die;
       $ar=new AjaxReturn();
        if(empty($_POST)){
            $this->render("login");
        }else{

            $loginModel = new LoginFormAdmin();
            $loginModel->password = $_POST['password'];
            $loginModel->username=$_POST['username'];
            
           $ar->status= $loginModel->login();
           echo json_encode($ar);
        }


    }

}
