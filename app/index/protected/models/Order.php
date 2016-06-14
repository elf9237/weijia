<?php

/**
 * This is the model class for table "{{order}}".
 *
 * The followings are the available columns in table '{{order}}':
 * @property string $id
 * @property string $order_no
 * @property integer $user_id
 * @property integer $info_id
 * @property integer $room_id
 * @property string $order_type
 * @property string $pay_type
 * @property integer $pay_price
 * @property string $create_time
 * @property string $begin_time
 * @property string $expire_time
 * @property string $pay_time
 * @property string $audit_time
 * @property integer $audit_status
 * @property string $audit_id
 * @property string $audit_content
 * @property string $days
 * @property string $type
 */
class Order extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{order}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('order_no, user_id, info_id', 'required'),
			array('user_id, info_id, room_id, pay_price, audit_status', 'numerical', 'integerOnly'=>true),
			array('order_no, audit_id', 'length', 'max'=>50),
			array('order_type, pay_type, create_time, begin_time, expire_time, pay_time, audit_time', 'length', 'max'=>10),
			array('audit_content', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, order_no, user_id, info_id, room_id, order_type, pay_type, pay_price, create_time, begin_time, expire_time, pay_time, audit_time, audit_status, audit_id, audit_content,days,type', 'safe', 'on'=>'search'),
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
			'order_no' => 'Order No',
			'user_id' => 'User',
			'info_id' => 'Info',
			'room_id' => 'Room',
			'order_type' => 'Order Type',
			'pay_type' => 'Pay Type',
			'pay_price' => 'Pay Price',
			'create_time' => 'Create Time',
			'begin_time' => 'Begin Time',
			'expire_time' => 'Expire Time',
			'pay_time' => 'Pay Time',
			'audit_time' => 'Audit Time',
			'audit_status' => 'Audit Status',
			'audit_id' => 'Audit',
			'audit_content' => 'Audit Content',
                    'days' => 'Days',
			'type' => 'Type',
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
		$criteria->compare('order_no',$this->order_no,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('info_id',$this->info_id);
		$criteria->compare('room_id',$this->room_id);
		$criteria->compare('order_type',$this->order_type,true);
		$criteria->compare('pay_type',$this->pay_type,true);
		$criteria->compare('pay_price',$this->pay_price);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('begin_time',$this->begin_time,true);
		$criteria->compare('expire_time',$this->expire_time,true);
		$criteria->compare('pay_time',$this->pay_time,true);
		$criteria->compare('audit_time',$this->audit_time,true);
		$criteria->compare('audit_status',$this->audit_status);
		$criteria->compare('audit_id',$this->audit_id,true);
		$criteria->compare('audit_content',$this->audit_content,true);
                
                $criteria->compare('days',$this->days,true);
		$criteria->compare('type',$this->type,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Order the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
