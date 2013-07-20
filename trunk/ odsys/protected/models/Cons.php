<?php

/**
 * This is the model class for table "cons".
 *
 * The followings are the available columns in table 'cons':
 * @property integer $Registro
 * @property string $FECHA
 * @property integer $COD
 * @property integer $CODT
 * @property integer $C1VESALANO
 * @property integer $CSUBSECUENTE
 * @property integer $APREVENTIVA
 * @property integer $ACURATIVA
 * @property integer $PROMHORAS
 * @property integer $PROMACTIV
 * @property integer $CONS
 *
 * The followings are the available model relations:
 * @property Up $cOD
 * @property Tipos $cODT
 */
class Cons extends CActiveRecord {

    public $D;
    public $A;
    public $C;
    public $P;
    public $TOTAL;
    public $CONS;
    public $CODU;

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Cons the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'cons';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('Registro, FECHA,COD, CODT, C1VESALANO, CSUBSECUENTE, APREVENTIVA, ACURATIVA, PROMHORAS, PROMACTIV', 'required'),
            array('Registro, COD, CODT, C1VESALANO, CSUBSECUENTE, APREVENTIVA, ACURATIVA, PROMHORAS, PROMACTIV', 'numerical', 'integerOnly' => true),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('Registro, FECHA, COD, CODT, C1VESALANO, CSUBSECUENTE, APREVENTIVA, ACURATIVA, PROMHORAS, PROMACTIV,CONS,CODU', 'safe', 'on' => 'search'),
        );
    }

    /**
     * Este metodo devuelve una lista con los datos de sentencia SQL
     * @return List
     */
    public function getRanklist() {
        $sql = "select CODT,DES from tipos where tipo='programa'";
        $rankList = Yii::app()->db->CreateCommand($sql)->queryAll();

        if (!$rankList)
            return array();

        foreach ($rankList as $thisRank) {
            $rankArr[$thisRank['CODT']] = $thisRank['DES'];
        }
        return $rankArr;
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
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
    public function attributeLabels() {
        return array(
            'Registro' => 'Numero de registro',
            'FECHA' => 'Fecha de registro',
            'COD' => 'Unidad programatica',
            'CODT' => 'Programa de atención',
            'C1VESALANO' => 'Consulta 1 Ves al año',
            'CSUBSECUENTE' => 'Consultas subsecuentes',
            'APREVENTIVA' => 'Acciones preventivas',
            'ACURATIVA' => 'Acciones curativas',
            'PROMHORAS' => 'Prevención colectiva actividades',
            'PROMACTIV' => 'Actividades en promoción de la salud',
            'D' => 'Programa de atención',
            'C' => 'Consultas',
            'A' => 'Acciones',
            'P' => 'Promocion',
            'TOTAL' => 'TOTAL',
            'CODU' => 'Unidad Programatica',
            'CONS' => 'Tipo de programa',
        );
    }
  
    
    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;
        $criteria->with = array('cODT','cOD');
        $criteria->addSearchCondition('cODT.DES',$this->CONS, true);
        $criteria->addSearchCondition('cOD.DES',$this->CODU, true);

        $criteria->compare('Registro', $this->Registro);
        $criteria->compare('FECHA', $this->FECHA, true);
        $criteria->compare('COD', $this->COD);
        $criteria->compare('CODT', $this->CODT);
        $criteria->compare('C1VESALANO', $this->C1VESALANO);
        $criteria->compare('CSUBSECUENTE', $this->CSUBSECUENTE);
        $criteria->compare('APREVENTIVA', $this->APREVENTIVA);
        $criteria->compare('ACURATIVA', $this->ACURATIVA);
        $criteria->compare('PROMHORAS', $this->PROMHORAS);
        $criteria->compare('PROMACTIV', $this->PROMACTIV);

        return $_SESSION['datos_filtrados'] = new CActiveDataProvider(get_class($this), array(
           'criteria'=>$criteria,
                        'pagination'=>array(
                            'pageSize'=>3,
//		return new CActiveDataProvider($this, array(
//			'criteria'=>$criteria,
//                        'sort'=>array(
//                                'defaultOrder'=>'COD ASC',
//                        ),
//                        'pagination'=>array(
//                                'pageSize'=>5
//                        ),
        ))
                );
    }

    /**
     * getReportOne
     * Este metodo devuelve una lista con los datos de sentencia SQL
     * la lista contiene las suma de cada columna de consultas.... revisar la logica
     * @return List
     */
    public function getReportOne($cod, $fecha) {

        $criteria = new CDbCriteria;
        $criteria->select = 'DES AS D, SUM(C1VESALANO + CSUBSECUENTE) AS C, SUM(APREVENTIVA + ACURATIVA) AS A, SUM(PROMHORAS + PROMACTIV) AS P, SUM(C1VESALANO + CSUBSECUENTE) + SUM(APREVENTIVA + ACURATIVA) + SUM(PROMHORAS + PROMACTIV) AS TOTAL';
        $criteria->join = 'INNER JOIN tipos ON t.CODT = tipos.CODT';
        $criteria->condition = "COD = '$cod' AND YEAR(FECHA) = YEAR('$fecha')";
        $criteria->group = "t.CODT";
        $criteria->compare('CODT', $this->CODT);
        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Este metodo devuelve el ultimo registro de la tabla
     * @return Last id
     */
    public function getLastId() {
        $sql = "SELECT MAX(`registro`) AS id FROM cons";
        $dataReader = Yii::app()->db->CreateCommand($sql)->queryRow();
        foreach ($dataReader as $row) {
            return $row;
        }
    }

    /**
     * Este metodo devuelve una lista con los datos de sentencia SQL
     * @return List
     */
    public function getProgramlist() {
        $sql = "select CODT,DES from tipos where tipo='programa'";
        $list = Tipos::model()->findAllBySql($sql, $params = array(':TIPO' => 'programa'));

        //$list = Tipos::model()->findAll('TIPO = :TIPO ',array(':TIPO'=>'programa'));
        $lista = CHtml::listData($list, 'CODT', 'DES');
        foreach ($lista as $value => $descripcion) {
            echo CHtml::tag('option', array('value' => $value), CHtml::encode($descripcion), true);
        }
    }

}