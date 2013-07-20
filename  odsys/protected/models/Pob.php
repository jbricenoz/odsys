<?php

/**
 * This is the model class for table "pob".
 *
 * The followings are the available columns in table 'pob':
 * @property integer $REGISTRO
 * @property integer $COD
 * @property string $GRU
 * @property integer $HOM
 * @property integer $MUJ
 * @property string $ANO
 *
 * The followings are the available model relations:
 * @property Up $cOD
 */
class Pob extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pob the static model class
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
		return 'pob';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('REGISTRO, COD, GRU, HOM, MUJ, ANO', 'required'),
			array('REGISTRO, COD, HOM, MUJ', 'numerical', 'integerOnly'=>true),
			array('GRU', 'length', 'max'=>20),
			array('ANO', 'length', 'max'=>4),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('REGISTRO, COD, GRU, HOM, MUJ, ANO', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'REGISTRO' => 'Registro',
			'COD' => 'Codigo UP',
			'GRU' => 'Grupo etario',
			'HOM' => 'Hombres',
			'MUJ' => 'Mujeres',
			'ANO' => 'AÑO',
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

		$criteria->compare('REGISTRO',$this->REGISTRO);
		$criteria->compare('COD',$this->COD);
		$criteria->compare('GRU',$this->GRU,true);
		$criteria->compare('HOM',$this->HOM);
		$criteria->compare('MUJ',$this->MUJ);
		$criteria->compare('ANO',$this->ANO,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}