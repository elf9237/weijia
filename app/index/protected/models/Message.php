<?php

/**
 * This is the model class for table "{{message}}".
 *
 * The followings are the available columns in table '{{message}}':
 * @property string $id
 * @property integer $info_id
 * @property integer $room_id
 * @property integer $sender
 * @property integer $receiver
 * @property string $message
 * @property string $create_time
 * @property string $read_time
 * @property string $order_time
 * @property integer $message_type
 */
class Message extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{message}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('info_id, sender, receiver, message', 'required'),
			array('info_id, room_id, sender, receiver, message_type', 'numerical', 'integerOnly'=>true),
			array('message', 'length', 'max'=>255),
			array('create_time, read_time, order_time', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, info_id, room_id, sender, receiver, message, create_time, read_time, order_time, message_type', 'safe', 'on'=>'search'),
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
			'info_id' => 'Info',
			'room_id' => 'Room',
			'sender' => 'Sender',
			'receiver' => 'Receiver',
			'message' => 'Message',
			'create_time' => 'Create Time',
			'read_time' => 'Read Time',
			'order_time' => 'Order Time',
			'message_type' => 'Message Type',
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
		$criteria->compare('info_id',$this->info_id);
		$criteria->compare('room_id',$this->room_id);
		$criteria->compare('sender',$this->sender);
		$criteria->compare('receiver',$this->receiver);
		$criteria->compare('message',$this->message,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('read_time',$this->read_time,true);
		$criteria->compare('order_time',$this->order_time,true);
		$criteria->compare('message_type',$this->message_type);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Message the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
