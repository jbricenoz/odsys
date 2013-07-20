<?php

/**
 * This is the model class for table "cont".
 *
 * The followings are the available columns in table 'cont':
 * @property string $PLA
 * @property string $HCONTRATADAS
 * @property string $HCONSULTA
 * @property string $HADMINISTRATIVAS
 * @property string $HPROMOCION
 * @property string $HTRASLADO
 * @property string $HCAPACITACION
 * @property string $HACTACADEMICAS
 * @property string $HOTROS
 * @property string $OBSERVACIONES
 *
 * The followings are the available model relations:
 * @property Pla $pLA
 */
class Cont extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cont the static model class
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
		return 'cont';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PLA, HCONTRATADAS, HCONSULTA, HADMINISTRATIVAS, HPROMOCION, HTRASLADO, HCAPACITACION, HACTACADEMICAS, HOTROS', 'required'),
			array('PLA', 'length', 'max'=>50),
			array('HCONTRATADAS, HCONSULTA, HADMINISTRATIVAS, HPROMOCION, HTRASLADO, HCAPACITACION, HACTACADEMICAS, HOTROS', 'length', 'max'=>10),
			array('OBSERVACIONES', 'length', 'max'=>254),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('PLA, HCONTRATADAS, HCONSULTA, HADMINISTRATIVAS, HPROMOCION, HTRASLADO, HCAPACITACION, HACTACADEMICAS, HOTROS, OBSERVACIONES', 'safe', 'on'=>'search'),
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
			'pLA' => array(self::BELONGS_TO, 'Pla', 'PLA'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'PLA' => 'Plaza',
			'HCONTRATADAS' => 'Horas contratadas',
			'HCONSULTA' => 'Horas consulta',
			'HADMINISTRATIVAS' => 'Horas administrativas',
			'HPROMOCION' => 'Horas promocion',
			'HTRASLADO' => 'Horas traslado',
			'HCAPACITACION' => 'Horas capacitacion',
			'HACTACADEMICAS' => 'Hora act academicas',
			'HOTROS' => 'Horas otros',
			'OBSERVACIONES' => 'Observaciones',
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
		$criteria->compare('HCONTRATADAS',$this->HCONTRATADAS,true);
		$criteria->compare('HCONSULTA',$this->HCONSULTA,true);
		$criteria->compare('HADMINISTRATIVAS',$this->HADMINISTRATIVAS,true);
		$criteria->compare('HPROMOCION',$this->HPROMOCION,true);
		$criteria->compare('HTRASLADO',$this->HTRASLADO,true);
		$criteria->compare('HCAPACITACION',$this->HCAPACITACION,true);
		$criteria->compare('HACTACADEMICAS',$this->HACTACADEMICAS,true);
		$criteria->compare('HOTROS',$this->HOTROS,true);
		$criteria->compare('OBSERVACIONES',$this->OBSERVACIONES,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}