<?php

/**
 * This is the model class for table "pla".
 *
 * The followings are the available columns in table 'pla':
 * @property string $PLA
 * @property string $CED
 * @property integer $COD
 * @property integer $CODT
 * @property integer $FEI
 *
 * The followings are the available model relations:
 * @property Con[] $cons
 * @property Up $cOD
 * @property Pers $cED
 * @property Tipos $cODT
 */
class Pla extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pla the static model class
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
		return 'pla';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PLA, CED, COD, CODT, FEI', 'required'),
			array('COD, CODT, ', 'numerical', 'integerOnly'=>true),
			array('PLA', 'length', 'max'=>100),
			array('CED, FEI', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('PLA, CED, COD, CODT, FEI', 'safe', 'on'=>'search'),
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
			'cons' => array(self::HAS_MANY, 'Con', 'PLA'),
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
			'PLA' => 'Codigo de plaza',
			'CED' => 'Odontologo',
			'COD' => 'Unidad Programatica',
			'CODT' => 'Perfil de plaza',
                        'FEI' => 'Fecha de ingreso',
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

		$criteria->compare('PLA',$this->PLA,true);
		$criteria->compare('CED',$this->CED,true);
		$criteria->compare('COD',$this->COD);
		$criteria->compare('CODT',$this->CODT);
                $criteria->compare('FEI',$this->FEI);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                        'sort'=>array(
                                'defaultOrder'=>'CED ASC',
                        ),
                        'pagination'=>array(
                                'pageSize'=>5
                        ),
		));
	}
}