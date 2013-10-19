<?php

/**
 * This is the model class for table "customer__referal_accounts".
 *
 * The followings are the available columns in table 'customer__referal_accounts':
 * @property integer $id_accounts
 * @property integer $fk_customer
 * @property string $transaction_details
 * @property integer $amount
 * @property integer $type
 * @property string $last_updated
 *
 * The followings are the available model relations:
 * @property Customers $fkCustomer
 */
class CustomerReferalAccounts extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'customer__referal_accounts';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fk_customer, amount, type', 'numerical', 'integerOnly'=>true),
			array('transaction_details, last_updated', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_accounts, fk_customer, transaction_details, amount, type, last_updated', 'safe', 'on'=>'search'),
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
			'fkCustomer' => array(self::BELONGS_TO, 'Customers', 'fk_customer'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_accounts' => 'Id Accounts',
			'fk_customer' => 'Fk Customer',
			'transaction_details' => 'Transaction Details',
			'amount' => 'Amount',
			'type' => 'Type',
			'last_updated' => 'Last Updated',
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

		$criteria->compare('id_accounts',$this->id_accounts);
		$criteria->compare('fk_customer',$this->fk_customer);
		$criteria->compare('transaction_details',$this->transaction_details,true);
		$criteria->compare('amount',$this->amount);
		$criteria->compare('type',$this->type);
		$criteria->compare('last_updated',$this->last_updated,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CustomerReferalAccounts the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
