<?php

/**
 * This is the model class for table "{{room_equip}}".
 *
 * The followings are the available columns in table '{{room_equip}}':
 * @property string $id
 * @property integer $info_id
 * @property integer $room_id
 * @property integer $equip_id
 * @property string $equiped
 */
class RoomEquip extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{room_equip}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('info_id, room_id, equip_id', 'required'),
			array('info_id, room_id, equip_id', 'numerical', 'integerOnly'=>true),
			array('equiped', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, info_id, room_id, equip_id, equiped', 'safe', 'on'=>'search'),
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
			'equiped' => 'Equiped',
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
		$criteria->compare('equiped',$this->equiped,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return RoomEquip the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
