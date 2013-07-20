<?php

/**
 * This is the model class for table "infra".
 *
 * The followings are the available columns in table 'infra':
 * @property integer $Registro
 * @property string $FECHA
 * @property integer $CODT
 * @property integer $COD
 * @property string $ESTADO
 *
 * The followings are the available model relations:
 * @property Tipos $cODT
 * @property Up $cOD
 */
class Infra extends CActiveRecord
{
	public $D;
	public $TOTAL;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Infra the static model class
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
		return 'infra';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Registro CODT, COD, ESTADO', 'required'),
			array('Registro, CODT, COD', 'numerical', 'integerOnly'=>true),
			array('ESTADO', 'length', 'max'=>50),
			array('FECHA', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Registro, FECHA, CODT, COD, ESTADO', 'safe', 'on'=>'search'),
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
			'CODT' => 'Ubicación de la infraestructura',
			'COD' => 'Unidad programatica',
			'ESTADO' => 'Estado de la infraestructura',
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

		$criteria->compare('Registro',$this->Registro);
		$criteria->compare('FECHA',$this->FECHA,true);
		$criteria->compare('CODT',$this->CODT);
		$criteria->compare('COD',$this->COD);
		$criteria->compare('ESTADO',$this->ESTADO,true);

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
        
        /**
         * Este metodo devuelve el ultimo registro de la tabla
         * @return last id
         */
        
        public function getLastId()
        {
            $sql = "SELECT MAX(`registro`) AS id FROM infra";
            $dataReader= Yii::app()->db->CreateCommand($sql)->queryRow();
            foreach($dataReader as $row) { 
                return $row;
                }
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
        	$criteria->condition = "COD = '$cod' AND YEAR(FECHA) = '$fecha'";
        	$criteria->group = "t.CODT, t.ESTADO";
        	$criteria->compare('CODT',$this->CODT);
        	return new CActiveDataProvider($this, array(
        			'criteria'=>$criteria,
        				
        	));
        }
}
         