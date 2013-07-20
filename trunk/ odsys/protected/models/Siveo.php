<?php

/**
 * This is the model class for table "siveo".
 *
 * The followings are the available columns in table 'siveo':
 * @property integer $REGISTRO
 * @property string $FECHA
 * @property integer $CODT
 * @property integer $GRUPO
 * @property string $VALOR
 *
 * The followings are the available model relations:
 * @property Tipos $cODT
 * @property Tipos $cODT2
 */
class Siveo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Siveo the static model class
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
		return 'siveo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('REGISTRO, FECHA, VALOR', 'required'),
			array('REGISTRO, CODT, GRUPO', 'numerical', 'integerOnly'=>true),
			array('FECHA', 'length', 'max'=>4),
			array('VALOR', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('REGISTRO, FECHA, CODT, GRUPO, VALOR', 'safe', 'on'=>'search'),
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
			'cODT' => array(self::BELONGS_TO, 'Tipos', 'CODT'),
                        'cODT2' => array(self::BELONGS_TO, 'Tipos', 'GRUPO'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'REGISTRO' => 'Registro',
			'FECHA' => 'Año de registro',
			'CODT' => 'Codigo tipo',
			'GRUPO' => 'Grupo etario',
			'VALOR' => 'Valor asignado',
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
		$criteria->compare('FECHA',$this->FECHA,true);
		$criteria->compare('CODT',$this->CODT);
		$criteria->compare('GRUPO',$this->GRUPO);
		$criteria->compare('VALOR',$this->VALOR,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                    'sort'=>array(
                                'defaultOrder'=>'CODT ASC',
                        ),
                        'pagination'=>array(
                                'pageSize'=>5
                        ),
		));
	}
}