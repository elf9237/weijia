<?php

/**
 * This is the model class for table "{{room_comment}}".
 *
 * The followings are the available columns in table '{{room_comment}}':
 * @property string $id
 * @property integer $info_id
 * @property integer $room_id
 * @property integer $equip_id
 * @property string $comment
 * @property string $user_id
 * @property string $create_time
 * @property string $audit_time
 * @property integer $audit_status
 * @property string $audit_id
 */
class RoomComment extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{room_comment}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('info_id, room_id, equip_id, comment', 'required'),
			array('info_id, room_id, equip_id, audit_status', 'numerical', 'integerOnly'=>true),
			array('comment', 'length', 'max'=>255),
			array('user_id, audit_id', 'length', 'max'=>50),
			array('create_time, audit_time', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, info_id, room_id, equip_id, comment, user_id, create_time, audit_time, audit_status, audit_id', 'safe', 'on'=>'search'),
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
			'equip_id' => 'Equip',
			'comment' => 'Comment',
			'user_id' => 'User',
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
		$criteria->compare('info_id',$this->info_id);
		$criteria->compare('room_id',$this->room_id);
		$criteria->compare('equip_id',$this->equip_id);
		$criteria->compare('comment',$this->comment,true);
		$criteria->compare('user_id',$this->user_id,true);
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
	 * @return RoomComment the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
