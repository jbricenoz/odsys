<?php

/**
 * This is the model class for table "upje".
 *
 * The followings are the available columns in table 'upje':
 * @property string $CED
 * @property integer $COD
 * @property integer $CODT
 * @property integer $POB
 *
 * The followings are the available model relations:
 * @property Up $cOD
 * @property Pers $cED
 * @property Tipos $cODT
 */
class Upje extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Upje the static model class
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
		return 'upje';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CED, COD, CODT, POB', 'required'),
			array('COD, CODT, POB', 'numerical', 'integerOnly'=>true),
			array('CED', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('CED, COD, CODT, POB', 'safe', 'on'=>'search'),
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
			'cOD' => array(self::BELONGS_TO, 'Up', 'COD'),
			'cED' => array(self::BELONGS_TO, 'Pers', 'CED'),
			'cODT' => array(self::BELONGS_TO, 'Tipos', 'CODT'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'CED' => 'Odontologo',
			'COD' => 'Unidad Programatica',
			'CODT' => 'Perfil',
			'POB' => 'Poblacion',
                        'DES' => 'Unidad Programatica',
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

		$criteria->compare('CED',$this->CED,true);
		$criteria->compare('COD',$this->COD);
		$criteria->compare('CODT',$this->CODT);
		$criteria->compare('POB',$this->POB);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}