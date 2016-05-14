<?php

/**
 * This is the model class for table "{{zding}}".
 *
 * The followings are the available columns in table '{{zding}}':
 * @property integer $id
 * @property string $zd_name
 * @property double $price
 * @property integer $order_no
 * @property string $detail
 */
class Zding extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{zding}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id', 'required'),
			array('id, order_no', 'numerical', 'integerOnly'=>true),
			array('price', 'numerical'),
			array('zd_name, detail', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, zd_name, price, order_no, detail', 'safe', 'on'=>'search'),
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
			'zd_name' => 'Zd Name',
			'price' => 'Price',
			'order_no' => 'Order No',
			'detail' => 'Detail',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('zd_name',$this->zd_name,true);
		$criteria->compare('price',$this->price);
		$criteria->compare('order_no',$this->order_no);
		$criteria->compare('detail',$this->detail,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Zding the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
