<?php

/**
 * This is the model class for table "customers".
 *
 * The followings are the available columns in table 'customers':
 * @property integer $id_customer
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $facebook_id
 * @property string $password
 * @property string $referal_key
 * @property string $last_updated
 * @property integer $is_active
 *
 * The followings are the available model relations:
 * @property CustomerReferalAccounts[] $customerReferalAccounts
 * @property SpaceOrders[] $spaceOrders
 */
class Customers extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'customers';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('is_active', 'numerical', 'integerOnly'=>true),
			array('first_name, last_name, email, facebook_id, password, referal_key', 'length', 'max'=>255),
			array('last_updated', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_customer, first_name, last_name, email, facebook_id, password, referal_key, last_updated, is_active', 'safe', 'on'=>'search'),
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
			'customerReferalAccounts' => array(self::HAS_MANY, 'CustomerReferalAccounts', 'fk_customer'),
			'spaceOrders' => array(self::HAS_MANY, 'SpaceOrders', 'fk_customer'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_customer' => 'Id Customer',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'email' => 'Email',
			'facebook_id' => 'Facebook',
			'password' => 'Password',
			'referal_key' => 'Referal Key',
			'last_updated' => 'Last Updated',
			'is_active' => 'Is Active',
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

		$criteria->compare('id_customer',$this->id_customer);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('facebook_id',$this->facebook_id,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('referal_key',$this->referal_key,true);
		$criteria->compare('last_updated',$this->last_updated,true);
		$criteria->compare('is_active',$this->is_active);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Customers the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
