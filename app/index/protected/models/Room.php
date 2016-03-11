<?php

/**
 * This is the model class for table "{{room}}".
 *
 * The followings are the available columns in table '{{room}}':
 * @property string $id
 * @property string $info_id
 * @property string $room_id
 * @property string $room
 * @property integer $price
 * @property string $style
 * @property string $image_url
 * @property string $direction
 * @property string $detail
 * @property string $create_time
 * @property string $update_time
 * @property integer $lend_status
 * @property string $audit_time
 * @property integer $audit_status
 * @property string $audit_id
 * @property string $audit_content
 * @property string $delete_time
 */
class Room extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{room}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('info_id, room_id, room, style, image_url, detail, audit_content', 'required'),
			array('price, lend_status, audit_status', 'numerical', 'integerOnly'=>true),
			array('info_id, room_id, style, direction, create_time, update_time, audit_time, delete_time', 'length', 'max'=>10),
			array('room, audit_id', 'length', 'max'=>50),
			array('image_url, detail, audit_content', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, info_id, room_id, room, price, style, image_url, direction, detail, create_time, update_time, lend_status, audit_time, audit_status, audit_id, audit_content, delete_time', 'safe', 'on'=>'search'),
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
			'room' => 'Room',
			'price' => 'Price',
			'style' => 'Style',
			'image_url' => 'Image Url',
			'direction' => 'Direction',
			'detail' => 'Detail',
			'create_time' => 'Create Time',
			'update_time' => 'Update Time',
			'lend_status' => 'Lend Status',
			'audit_time' => 'Audit Time',
			'audit_status' => 'Audit Status',
			'audit_id' => 'Audit',
			'audit_content' => 'Audit Content',
			'delete_time' => 'Delete Time',
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
		$criteria->compare('info_id',$this->info_id,true);
		$criteria->compare('room_id',$this->room_id,true);
		$criteria->compare('room',$this->room,true);
		$criteria->compare('price',$this->price);
		$criteria->compare('style',$this->style,true);
		$criteria->compare('image_url',$this->image_url,true);
		$criteria->compare('direction',$this->direction,true);
		$criteria->compare('detail',$this->detail,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('lend_status',$this->lend_status);
		$criteria->compare('audit_time',$this->audit_time,true);
		$criteria->compare('audit_status',$this->audit_status);
		$criteria->compare('audit_id',$this->audit_id,true);
		$criteria->compare('audit_content',$this->audit_content,true);
		$criteria->compare('delete_time',$this->delete_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Room the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
