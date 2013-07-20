<?php

/**
 * This is the model class for table "pers".
 *
 * The followings are the available columns in table 'pers':
 * @property string $CED
 * @property string $NOM
 * @property string $TEL
 * @property string $EMA
 *
 * The followings are the available model relations:
 * @property Pla[] $plas
 * @property Upje $upje
 * @property Users[] $users
 */
class Pers extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pers the static model class
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
		return 'pers';
	}
        
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CED', 'required'),
			array('CED, NOM, TEL, EMA', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('CED, NOM, TEL, EMA', 'safe', 'on'=>'search'),
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
			'plas' => array(self::HAS_MANY, 'Pla', 'CED'),
			'upje' => array(self::HAS_ONE, 'Upje', 'CED'),
			'users' => array(self::HAS_MANY, 'Users', 'CED'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'CED' => 'Cedula',
			'NOM' => 'Nombre',
			'TEL' => 'Telelefono',
			'EMA' => 'Email',
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

		$criteria->compare('CED',$this->CED,true);
		$criteria->compare('NOM',$this->NOM,true);
		$criteria->compare('TEL',$this->TEL,true);
		$criteria->compare('EMA',$this->EMA,true);

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