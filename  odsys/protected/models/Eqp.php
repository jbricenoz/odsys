<?php

/**
 * This is the model class for table "eqp".
 *
 * The followings are the available columns in table 'eqp':
 * @property integer $PLACA
 * @property integer $CODT
 * @property integer $COD
 * @property string $FECHAREG
 * @property string $ESTADO
 *
 * The followings are the available model relations:
 * @property Up $cOD
 * @property Tipos $cODT
 */
class Eqp extends CActiveRecord
{
	public $D;
	public $TOTAL;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Eqp the static model class
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
		return 'eqp';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PLACA, CODT, COD, ESTADO, FECHAREG', 'required'),
			array('PLACA, CODT, COD', 'numerical', 'integerOnly'=>true),
			array('ESTADO', 'length', 'max'=>50),
			array('FECHAREG', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('PLACA, CODT, COD, FECHAREG, ESTADO', 'safe', 'on'=>'search'),
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
			'PLACA' => 'Placa',
			'CODT' => 'Tipo',
			'COD' => 'Unidad Programatica',
			'FECHAREG' => 'Fecha de registro',
			'ESTADO' => 'Estado',
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

		$criteria->compare('PLACA',$this->PLACA);
		$criteria->compare('CODT',$this->CODT);
		$criteria->compare('COD',$this->COD);
		$criteria->compare('FECHAREG',$this->FECHAREG,true);
		$criteria->compare('ESTADO',$this->ESTADO,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                         'sort'=>array(
                                'defaultOrder'=>'PLACA ASC',
                        ),
                        'pagination'=>array(
                                'pageSize'=>5
                        ),
		));
	}
	
	/**
	 * getReportOne
	 * Este metodo devuelve una lista con los datos de sentencia SQL
	 * la lista contiene las suma de cada columna de consultas.... revisar la logica
	 * @return List
	 */
	public function getReportOne($cod,$fecha) {
	
		$criteria=new CDbCriteria;
		$criteria->select   = 'DES AS D, ESTADO,COUNT(t.CODT) AS TOTAL ';
		$criteria->join = 'INNER JOIN tipos ON t.CODT = tipos.CODT';
		$criteria->condition = "COD = '$cod' AND YEAR(FECHAREG) = '$fecha'";
		$criteria->group = "t.CODT, t.ESTADO";
		$criteria->compare('CODT',$this->CODT);
		return new CActiveDataProvider($this, array(
				'criteria'=>$criteria,
				 
		));
	}
}