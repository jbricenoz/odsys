<?php

/**
 * This is the model class for table "tipos".
 *
 * The followings are the available columns in table 'tipos':
 * @property integer $CODT
 * @property string $TIPO
 * @property string $DES
 *
 * The followings are the available model relations:
 * @property Cons[] $cons
 * @property Eqp[] $eqps
 * @property Infra[] $infras
 * @property Perm[] $perms
 * @property Pla[] $plas
 * @property Siveo[] $siveos
 * @property Upje[] $upjes
 */
class Tipos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Tipos the static model class
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
		return 'tipos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CODT', 'required'),
			array('CODT', 'numerical', 'integerOnly'=>true),
			array('TIPO, DES', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('CODT, TIPO, DES', 'safe', 'on'=>'search'),
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
			'cons' => array(self::HAS_MANY, 'Cons', 'CODT'),
			'eqps' => array(self::HAS_MANY, 'Eqp', 'CODT'),
			'infras' => array(self::HAS_MANY, 'Infra', 'CODT'),
			'perms' => array(self::HAS_MANY, 'Perm', 'CODT'),
			'plas' => array(self::HAS_MANY, 'Pla', 'CODT'),
			'siveos' => array(self::HAS_MANY, 'Siveo', 'CODT'),
			'upjes' => array(self::HAS_MANY, 'Upje', 'CODT'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'CODT' => 'Codigo',
			'TIPO' => 'Tipo',
			'DES' => 'Descripción',
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

		$criteria->compare('CODT',$this->CODT);
		$criteria->compare('TIPO',$this->TIPO,true);
		$criteria->compare('DES',$this->DES,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}