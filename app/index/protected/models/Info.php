<?php

/**
 * This is the model class for table "{{info}}".
 *
 * The followings are the available columns in table '{{info}}':
 * @property string $id
 * @property string $province
 * @property string $city
 * @property string $zone
 * @property integer $price
 * @property string $style
 * @property string $lend_type
 * @property string $rooms
 * @property string $area
 * @property string $floors
 * @property string $nfloor
 * @property string $direction
 * @property string $house_type
 * @property string $district
 * @property string $detail
 * @property string $map
 * @property string $bus
 * @property string $market
 * @property string $public_url
 * @property string $create_time
 * @property string $update_time
 * @property string $user_id
 * @property integer $lend_status
 * @property string $audit_time
 * @property integer $audit_status
 * @property string $audit_id
 * @property string $audit_content
 * @property string $delete_time
 * @property string $info_name
 *  @property string $mian_url
 * @property string $room_url
 * @property string $yong_jin
 */
class Info extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{info}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('province, city, zone, style,  house_type, district, detail, map, market, audit_content,info_name', 'required'),
			array('price, lend_status, audit_status,user_id', 'numerical', 'integerOnly'=>true),
			array('province, city, district,  audit_id', 'length', 'max'=>50),
			array('zone, detail, map, market, public_url,mian_url,room_url, audit_content', 'length', 'max'=>255),
			array('style, lend_type, rooms, area, floors, nfloor, direction, house_type, create_time, update_time, audit_time, delete_time', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, province, city, zone, price, style, lend_type, rooms, area, floors, nfloor, direction, house_type, district, detail, map, bus, market, public_url, create_time, update_time, user_id, lend_status, audit_time, audit_status, audit_id, audit_content, delete_time,info_name,room_url,mian_url,yong_jin', 'safe', 'on'=>'search'),
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
			'province' => 'Province',
			'city' => 'City',
			'zone' => 'Zone',
			'price' => 'Price',
			'style' => 'Style',
			'lend_type' => 'Lend Type',
			'rooms' => 'Rooms',
			'area' => 'Area',
			'floors' => 'Floors',
			'nfloor' => 'Nfloor',
			'direction' => 'Direction',
			'house_type' => 'House Type',
			'district' => 'District',
			'detail' => 'Detail',
			'map' => 'Map',
			'bus' => 'Bus',
			'market' => 'Market',
			'public_url' => 'Public Url',
                    'room_url' => 'Room Url',
                    'mian_url' => 'Mian Url',
                     'yong_jin' => 'Yong_jin',
			'create_time' => 'Create Time',
			'update_time' => 'Update Time',
			'user_id' => 'User',
			'lend_status' => 'Lend Status',
			'audit_time' => 'Audit Time',
			'audit_status' => 'Audit Status',
			'audit_id' => 'Audit',
			'audit_content' => 'Audit Content',
			'delete_time' => 'Delete Time',
                       'info_name' => 'Info Name',
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
		$criteria->compare('province',$this->province,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('zone',$this->zone,true);
		$criteria->compare('price',$this->price);
		$criteria->compare('style',$this->style,true);
		$criteria->compare('lend_type',$this->lend_type,true);
		$criteria->compare('rooms',$this->rooms,true);
		$criteria->compare('area',$this->area,true);
		$criteria->compare('floors',$this->floors,true);
		$criteria->compare('nfloor',$this->nfloor,true);
		$criteria->compare('direction',$this->direction,true);
		$criteria->compare('house_type',$this->house_type,true);
		$criteria->compare('district',$this->district,true);
		$criteria->compare('detail',$this->detail,true);
		$criteria->compare('map',$this->map,true);
		$criteria->compare('bus',$this->bus,true);
		$criteria->compare('market',$this->market,true);
		$criteria->compare('public_url',$this->public_url,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('user_id',$this->user_id,true);
		$criteria->compare('lend_status',$this->lend_status);
		$criteria->compare('audit_time',$this->audit_time,true);
		$criteria->compare('audit_status',$this->audit_status);
		$criteria->compare('audit_id',$this->audit_id,true);
		$criteria->compare('audit_content',$this->audit_content,true);
		$criteria->compare('delete_time',$this->delete_time,true);
                $criteria->compare('info_name',$this->info_name,true);
                $criteria->compare('room_url',$this->room_url,true);
                $criteria->compare('yong_jin',$this->yong_jin,true);
                $criteria->compare('mianc_url',$this->mian_url,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Info the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
