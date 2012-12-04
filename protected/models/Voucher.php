<?php

/**
 * This is the model class for table "voucher".
 *
 * The followings are the available columns in table 'voucher':
 * @property integer $id
 * @property string $name
 * @property integer $discount
 * @property integer $quantity
 * @property string $validity
 * @property integer $saving
 * @property string $description
 * @property string $conditions
 * @property integer $user_id
 */
class Voucher extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Voucher the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'voucher';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, discount, validity, saving', 'required'),
			array('discount, quantity, saving', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>200),
			array('description, conditions', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, discount, quantity, validity, saving, description, conditions', 'safe', 'on'=>'search'),
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
        'user' => array(self::BELONGS_TO, 'User', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'discount' => 'Discount',
			'quantity' => 'Quantity',
			'validity' => 'Validity',
			'saving' => 'Saving',
			'description' => 'Description',
			'conditions' => 'Conditions',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('discount',$this->discount);
		$criteria->compare('quantity',$this->quantity);
		$criteria->compare('validity',$this->validity,true);
		$criteria->compare('saving',$this->saving);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('conditions',$this->conditions,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}