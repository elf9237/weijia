<?php

/**
 * This is the model class for table "{{user}}".
 *
 * The followings are the available columns in table '{{user}}':
 * @property string $id
 * @property string $username
 * @property string $password
 * @property string $gender
 * @property string $image_url
 * @property string $birthday
 * @property string $cellphone
 * @property string $type
 * @property string $create_time
 * @property string $update_time
 * @property string $inviter
 * @property string $status
 * @property string $openid
 * @property string $yue
 * @property string $province
 * @property string $city
 * @property string $zone
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{user}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
//			array('openid','required','message'=>'微信id格式不正确'),
			array('openid','unique','message'=>'微信id已存在'),
			array('login_id','unique','message'=>'账号已存在'),
			array('login_id','required','message'=>'账号不能为空'),
			array('login_id','length', 'max'=>32,'message'=>'账号过长'),
			array('type','required','message'=>'用户类型不能为空'),
			array('cellphone','match', 'pattern'=>"/^1[3-5,8]{1}[0-9]{9}$/",'message'=>'电话格式不正确'),
			array('cellphone','unique','message'=>'电话号码已存在'),
			array('image_url','url','message'=>'头像格式不正确'),
			array('password', 'required', 'on'=>'register','message'=>'密码不能为空'),
            array('password', 'authenticate','on'=>'login','message'=>'不能为空'),
			array('username, password, inviter, openid', 'length', 'max'=>50,'message'=>'您输入的长度过大'),
			array('gender', 'length', 'max'=>64,'message'=>'您输入的用户名不符合标准'),
			array('image_url', 'length', 'max'=>255),
			array('birthday, type, create_time, update_time, status', 'length', 'max'=>10),
			array('cellphone', 'length', 'max'=>13,'on'=>'register,update'),
			array('id, username, password, gender, image_url, birthday, cellphone, type, create_time, update_time, inviter, status, openid,province,city,zone','safe', 'on'=>'search'),
		);
	}
	public function authenticate($attribute,$params)
    {
        if(!$this->hasErrors())
        {
            $this->_identity=new UserIdentity($this->gender,$this->password);
            if(!$this->_identity->authenticate())
                $this->addError('password','Incorrect username or password.');
        }
    }
	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => '姓名',
			'login_id' => '登陆账号',
			'password' => '密 码',
			'gender' => '性别',
			'image_url' => '头 像',
			'birthday' => '生 日',
			'cellphone' => '电 话',
			'type' => '用户类型',
			'create_time' => '创建时间',
			'update_time' => '更新时间',
			'inviter' => '推荐者',
			'status' => '状 态',
			'openid' => 'Openid',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('image_url',$this->image_url,true);
		$criteria->compare('birthday',$this->birthday,true);
		$criteria->compare('cellphone',$this->cellphone,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('inviter',$this->inviter,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('openid',$this->openid,true);
                $criteria->compare('yue',$this->yue,true);
                
                
                $criteria->compare('zone',$this->zone,true);
		$criteria->compare('city',$this->city,true);
                $criteria->compare('province',$this->province,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
