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

        if(empty($_POST)){
            $this->render("login");
        }else{

            $loginModel = new LoginForm();
            $loginModel->attributes = $_POST;



            $loginModel->validate();




        }


    }

}
