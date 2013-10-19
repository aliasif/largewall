<?php

/**
 * This is the model class for table "space_order_history".
 *
 * The followings are the available columns in table 'space_order_history':
 * @property integer $id_order_history
 * @property integer $fk_space_order
 * @property string $status
 * @property integer $fk_user
 * @property string $last_updated
 *
 * The followings are the available model relations:
 * @property Admin $fkUser
 * @property SpaceOrders $fkSpaceOrder
 */
class SpaceOrderHistory extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'space_order_history';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_order_history, fk_space_order, fk_user', 'numerical', 'integerOnly'=>true),
			array('status', 'length', 'max'=>50),
			array('last_updated', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_order_history, fk_space_order, status, fk_user, last_updated', 'safe', 'on'=>'search'),
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
			'fkUser' => array(self::BELONGS_TO, 'Admin', 'fk_user'),
			'fkSpaceOrder' => array(self::BELONGS_TO, 'SpaceOrders', 'fk_space_order'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_order_history' => 'Id Order History',
			'fk_space_order' => 'Fk Space Order',
			'status' => 'Status',
			'fk_user' => 'Fk User',
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

		$criteria->compare('id_order_history',$this->id_order_history);
		$criteria->compare('fk_space_order',$this->fk_space_order);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('fk_user',$this->fk_user);
		$criteria->compare('last_updated',$this->last_updated,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SpaceOrderHistory the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
