<?php

/**
 * This is the model class for table "{{complaint}}".
 *
 * The followings are the available columns in table '{{complaint}}':
 * @property string $id
 * @property integer $user_id
 * @property integer $compl_id
 * @property string $complaint
 * @property string $create_time
 * @property string $deal_time
 * @property integer $deal_status
 * @property string $deal_id
 */
class Complaint extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{complaint}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, compl_id, complaint', 'required'),
			array('user_id, compl_id, deal_status', 'numerical', 'integerOnly'=>true),
			array('complaint', 'length', 'max'=>255),
			array('create_time, deal_time', 'length', 'max'=>10),
			array('deal_id', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, user_id, compl_id, complaint, create_time, deal_time, deal_status, deal_id', 'safe', 'on'=>'search'),
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
			'compl_id' => 'Compl',
			'complaint' => 'Complaint',
			'create_time' => 'Create Time',
			'deal_time' => 'Deal Time',
			'deal_status' => 'Deal Status',
			'deal_id' => 'Deal',
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
		$criteria->compare('compl_id',$this->compl_id);
		$criteria->compare('complaint',$this->complaint,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('deal_time',$this->deal_time,true);
		$criteria->compare('deal_status',$this->deal_status);
		$criteria->compare('deal_id',$this->deal_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Complaint the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
