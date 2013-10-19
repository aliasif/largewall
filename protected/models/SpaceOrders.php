<?php

/**
 * This is the model class for table "space_orders".
 *
 * The followings are the available columns in table 'space_orders':
 * @property integer $id_space_order
 * @property integer $order_nr
 * @property integer $fk_customer
 * @property integer $pixel_X1_location
 * @property integer $pixel_X2_location
 * @property integer $pixel_Y1_location
 * @property integer $pixel_Y2_location
 * @property integer $total_pixels
 * @property integer $total_amount
 * @property string $payment_method
 * @property string $payment_status
 * @property string $status
 * @property string $created_by
 * @property string $last_updated
 * @property string $order_date
 * @property string $expiry_date
 *
 * The followings are the available model relations:
 * @property Files[] $files
 * @property SpaceOrderHistory[] $spaceOrderHistories
 * @property Customers $fkCustomer
 */
class SpaceOrders extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'space_orders';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('order_nr, fk_customer, pixel_X1_location, pixel_X2_location, pixel_Y1_location, pixel_Y2_location, total_pixels, total_amount', 'numerical', 'integerOnly'=>true),
			array('payment_method, payment_status, status, created_by', 'length', 'max'=>50),
			array('last_updated, order_date, expiry_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_space_order, order_nr, fk_customer, pixel_X1_location, pixel_X2_location, pixel_Y1_location, pixel_Y2_location, total_pixels, total_amount, payment_method, payment_status, status, created_by, last_updated, order_date, expiry_date', 'safe', 'on'=>'search'),
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
			'files' => array(self::HAS_MANY, 'Files', 'fk_space_order'),
			'spaceOrderHistories' => array(self::HAS_MANY, 'SpaceOrderHistory', 'fk_space_order'),
			'fkCustomer' => array(self::BELONGS_TO, 'Customers', 'fk_customer'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_space_order' => 'Id Space Order',
			'order_nr' => 'Order Nr',
			'fk_customer' => 'Fk Customer',
			'pixel_X1_location' => 'Pixel X1 Location',
			'pixel_X2_location' => 'Pixel X2 Location',
			'pixel_Y1_location' => 'Pixel Y1 Location',
			'pixel_Y2_location' => 'Pixel Y2 Location',
			'total_pixels' => 'Total Pixels',
			'total_amount' => 'Total Amount',
			'payment_method' => 'Payment Method',
			'payment_status' => 'Payment Status',
			'status' => 'Status',
			'created_by' => 'Created By',
			'last_updated' => 'Last Updated',
			'order_date' => 'Order Date',
			'expiry_date' => 'Expiry Date',
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

		$criteria->compare('id_space_order',$this->id_space_order);
		$criteria->compare('order_nr',$this->order_nr);
		$criteria->compare('fk_customer',$this->fk_customer);
		$criteria->compare('pixel_X1_location',$this->pixel_X1_location);
		$criteria->compare('pixel_X2_location',$this->pixel_X2_location);
		$criteria->compare('pixel_Y1_location',$this->pixel_Y1_location);
		$criteria->compare('pixel_Y2_location',$this->pixel_Y2_location);
		$criteria->compare('total_pixels',$this->total_pixels);
		$criteria->compare('total_amount',$this->total_amount);
		$criteria->compare('payment_method',$this->payment_method,true);
		$criteria->compare('payment_status',$this->payment_status,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('created_by',$this->created_by,true);
		$criteria->compare('last_updated',$this->last_updated,true);
		$criteria->compare('order_date',$this->order_date,true);
		$criteria->compare('expiry_date',$this->expiry_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SpaceOrders the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
