<?php

/**
 * This is the model class for table "perm".
 *
 * The followings are the available columns in table 'perm':
 * @property string $REGISTRO
 * @property string $FECHA
 * @property integer $COD
 * @property integer $CODT
 * @property string $ESTADO
 * @property integer $CODRAYOSX
 * @property string $ESTADORAYOSX
 *
 * The followings are the available model relations:
 * @property Up $cOD
 * @property Tipos $cODT
 */
class Perm extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Perm the static model class
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
		return 'perm';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('REGISTRO,FECHA, COD, CODT, ESTADO, CODRAYOSX, ESTADORAYOSX', 'required'),
			array('REGISTRO,COD, CODT, CODRAYOSX', 'numerical', 'integerOnly'=>true),
			array('REGISTRO,ESTADO, ESTADORAYOSX', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('REGISTRO, FECHA, COD, CODT, ESTADO, CODRAYOSX, ESTADORAYOSX', 'safe', 'on'=>'search'),
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
			'cODT' => array(self::BELONGS_TO, 'Tipos', 'CODT'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
                        'REGISTRO' => 'REGISTRO',
			'FECHA' => 'Fecha de regitro',
			'COD' => 'Unidad programatica',
			'CODT' => 'Tipo de establecimiento',
			'ESTADO' => 'Estado del permiso',
			'CODRAYOSX' => 'Cantidad de equipos rayos x',
			'ESTADORAYOSX' => 'Estado del esquipo rayos x',
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
                $criteria->compare('REGISTRO',$this->REGISTRO,true);
		$criteria->compare('FECHA',$this->FECHA);
		$criteria->compare('COD',$this->COD);
		$criteria->compare('CODT',$this->CODT);
		$criteria->compare('ESTADO',$this->ESTADO,true);
		$criteria->compare('CODRAYOSX',$this->CODRAYOSX);
		$criteria->compare('ESTADORAYOSX',$this->ESTADORAYOSX,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                         'sort'=>array(
                                'defaultOrder'=>'COD ASC',
                        ),
                        'pagination'=>array(
                                'pageSize'=>5
                        ),
		));
	}
}