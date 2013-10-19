<?php

/**
 * This is the model class for table "files".
 *
 * The followings are the available columns in table 'files':
 * @property integer $fid
 * @property integer $fk_space_order
 * @property string $file_path
 * @property string $filemime
 * @property string $filename
 * @property string $thumbnail
 * @property integer $status
 * @property string $timestamp
 * @property string $type
 * @property integer $primary
 *
 * The followings are the available model relations:
 * @property SpaceOrders $fkSpaceOrder
 */
class Files extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'files';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fk_space_order, status, primary', 'numerical', 'integerOnly'=>true),
			array('file_path, filemime, filename, thumbnail', 'length', 'max'=>255),
			array('type', 'length', 'max'=>9),
			array('timestamp', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('fid, fk_space_order, file_path, filemime, filename, thumbnail, status, timestamp, type, primary', 'safe', 'on'=>'search'),
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
			'fkSpaceOrder' => array(self::BELONGS_TO, 'SpaceOrders', 'fk_space_order'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'fid' => 'Fid',
			'fk_space_order' => 'Fk Space Order',
			'file_path' => 'File Path',
			'filemime' => 'Filemime',
			'filename' => 'Filename',
			'thumbnail' => 'Thumbnail',
			'status' => 'Status',
			'timestamp' => 'Timestamp',
			'type' => 'Type',
			'primary' => 'Primary',
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

		$criteria->compare('fid',$this->fid);
		$criteria->compare('fk_space_order',$this->fk_space_order);
		$criteria->compare('file_path',$this->file_path,true);
		$criteria->compare('filemime',$this->filemime,true);
		$criteria->compare('filename',$this->filename,true);
		$criteria->compare('thumbnail',$this->thumbnail,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('timestamp',$this->timestamp,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('primary',$this->primary);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Files the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
