<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class LoginForm extends CFormModel
{
	public $username;
	public $password;

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are required
			array('username, password', 'required'),
		);
	}


	/**
	 * Logs in the user using the given username and password in the model.
	 * @return boolean whether login is successful
	 */
	public function login()
	{
        if($this->isAdmin()){
            return true;
        }else{
            if($this->isManager()){
                return true;
            }
        }
        return false;
	}

    private function isAdmin(){
        if($this->username == 'admin'){
            $usermodel = User::model()->find('username=:username',array(':username'=>$this->username));
            if(!empty($usermodel) && $usermodel->password == md5($this->password)){
                Yii::app()->session['userAdmin'] = $usermodel;
                return true;
            }elseif(empty($usermodel)){
                $this->addError('password','原始密码不正确');
            }
        }
        return false;
    }

    private function isManager(){
        $usermodel = User::model()->find('username=:username',array(':username'=>$this->username));
        if(!empty($usermodel) && $usermodel->type == 2 && $usermodel->password == md5($this->password)){
            Yii::app()->session['userAdmin'] = $usermodel;
            return true;
        }

        return false;
    }
}
