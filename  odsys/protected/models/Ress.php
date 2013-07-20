<?php

/**
 * This is the model class for table "ress".
 *
 * The followings are the available columns in table 'ress':
 * @property int $Registro
 * @property string $FECHA
 * @property integer $COD
 * @property integer $TOTAL
 * @property integer $R1
 * @property integer $R2
 * @property integer $R3
 * @property string $APROV
 *
 * The followings are the available model relations:
 * @property Up $cOD
 */
class Ress extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Ress the static model class
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
		return 'ress';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Registro, FECHA,COD, TOTAL, R1, R2, R3, APROV', 'required'),
			array('Registro, COD, TOTAL, R1, R2, R3', 'numerical', 'integerOnly'=>true),
			array('APROV', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('FECHA, COD, TOTAL, R1, R2, R3, APROV', 'safe', 'on'=>'search'),
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
                        'Registro' => 'Registro',
			'FECHA' => 'Fecha de registro',
			'COD' => 'Unidad programatica',
			'TOTAL' => 'Total de referencias',
			'R1' => 'Referencia tipo 1',
			'R2' => 'Referencia tipo 2',
			'R3' => 'Referencia tipo 3',
			'APROV' => 'Aprobacion',
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
                $criteria->compare('Registro',$this->Registro,true);
		$criteria->compare('FECHA',$this->FECHA,true);
		$criteria->compare('COD',$this->COD);
		$criteria->compare('TOTAL',$this->TOTAL);
		$criteria->compare('R1',$this->R1);
		$criteria->compare('R2',$this->R2);
		$criteria->compare('R3',$this->R3);
		$criteria->compare('APROV',$this->APROV,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                        'sort'=>array(
                                'defaultOrder'=>'Registro ASC',
                        ),
                        'pagination'=>array(
                                'pageSize'=>5
                        ),
		));
	}
}