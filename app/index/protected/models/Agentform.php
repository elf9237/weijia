<?php

/**
 * This is the model class for table "{{agentform}}".
 *
 * The followings are the available columns in table '{{agentform}}':
 * @property string $id
 * @property integer $user_id
 * @property string $user_name
 * @property string $user_idno
 * @property string $province
 * @property string $city
 * @property string $zone
 * @property string $create_time
 * @property string $audit_time
 * @property integer $audit_status
 * @property string $audit_id
 */
class Agentform extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{agentform}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_idno', 'required','message'=>'身份证号码不能为空'),
			array('user_idno', 'length','is'=>18,'message'=>'身份证号码必须是18位'),
			array('user_id, audit_status', 'numerical', 'integerOnly'=>true),
			array('user_name, audit_id', 'length', 'max'=>50),
			array('user_idno, province, city, zone', 'length', 'max'=>18),
			array('create_time, audit_time', 'length', 'max'=>10),
			array('create_time, audit_time', 'length', 'max'=>10),
			array('jiamengzone', 'length', 'max'=>400),
			array('jiamengzone', 'required', 'message'=>'请输入加盟区域'),
			array('cellphone','match', 'pattern'=>"/^1[3-5,8]{1}[0-9]{9}$/",'message'=>'电话格式不正确'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, user_id, user_name, user_idno, province, city, zone, create_time, audit_time, audit_status, audit_id', 'safe', 'on'=>'search'),
		);
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
			'user_id' => 'User',
			'user_name' => 'User Name',
			'user_idno' => '身份证号',
			'jiamengzone' => '加盟区域',
			'cellphone' => '手机号码',
			'province' => '省',
			'city' => '城市',
			'zone' => '区',
			'create_time' => 'Create Time',
			'audit_time' => 'Audit Time',
			'audit_status' => 'Audit Status',
			'audit_id' => 'Audit',
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
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('user_name',$this->user_name,true);
		$criteria->compare('user_idno',$this->user_idno,true);
		$criteria->compare('province',$this->province,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('zone',$this->zone,true);
		$criteria->compare('jiamentzone',$this->jiamentzone,true);
		$criteria->compare('cellphone',$this->cellphone,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('audit_time',$this->audit_time,true);
		$criteria->compare('audit_status',$this->audit_status);
		$criteria->compare('audit_id',$this->audit_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Agentform the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
