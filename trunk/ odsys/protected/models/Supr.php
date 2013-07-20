<?php

/**
 * This is the model class for table "supr".
 *
 * The followings are the available columns in table 'supr':
 * @property integer $REGISTRO
 * @property string $FECHA
 * @property integer $COD
 * @property string $HUA
 * @property string $HUC
 * @property string $HUCE
 * @property string $HUPS
 * @property string $HUT
 * @property string $HUO
 * @property string $HUAC
 *
 * The followings are the available model relations:
 * @property Up $cOD
 */
class Supr extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Supr the static model class
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
		return 'supr';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('REGISTRO, FECHA, COD, HUA, HUC, HUCE, HUPS, HUT, HUO, HUAC', 'required'),
			array('REGISTRO, COD', 'numerical', 'integerOnly'=>true),
			array('HUA, HUC, HUCE, HUPS, HUT, HUO, HUAC', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('REGISTRO, FECHA, COD, HUA, HUC, HUCE, HUPS, HUT, HUO, HUAC', 'safe', 'on'=>'search'),
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
			'FECHA' => 'Fecha de registro',
			'COD' => 'Unidad Programatica',
			'HUA' => 'Horas atencion',
			'HUC' => 'Horas curacion',
			'HUCE' => 'Horas ce',
			'HUPS' => 'Horas promocion',
			'HUT' => 'Horas tralado',
			'HUO' => 'Horas o',
			'HUAC' => 'Horas ac',
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
		$criteria->compare('COD',$this->COD);
		$criteria->compare('HUA',$this->HUA,true);
		$criteria->compare('HUC',$this->HUC,true);
		$criteria->compare('HUCE',$this->HUCE,true);
		$criteria->compare('HUPS',$this->HUPS,true);
		$criteria->compare('HUT',$this->HUT,true);
		$criteria->compare('HUO',$this->HUO,true);
		$criteria->compare('HUAC',$this->HUAC,true);

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