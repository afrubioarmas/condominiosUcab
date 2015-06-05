<?php

/**
 * This is the model class for table "apartamentopersona".
 *
 * The followings are the available columns in table 'apartamentopersona':
 * @property integer $idApartamentoPersona
 * @property integer $Apartamento_idApartamento
 * @property integer $Propietario_Cedula
 *
 * The followings are the available model relations:
 * @property Apartamento $apartamentoIdApartamento
 * @property Propietario $propietarioCedula
 */
class Apartamentopersona extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'apartamentopersona';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Apartamento_idApartamento, Propietario_Cedula', 'required'),
			array('Apartamento_idApartamento, Propietario_Cedula', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idApartamentoPersona, Apartamento_idApartamento, Propietario_Cedula', 'safe', 'on'=>'search'),
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
			'apartamentoIdApartamento' => array(self::BELONGS_TO, 'Apartamento', 'Apartamento_idApartamento'),
			'propietarioCedula' => array(self::BELONGS_TO, 'Propietario', 'Propietario_Cedula'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idApartamentoPersona' => 'Id Apartamento Persona',
			'Apartamento_idApartamento' => 'Apartamento Id Apartamento',
			'Propietario_Cedula' => 'Propietario Cedula',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idApartamentoPersona',$this->idApartamentoPersona);
		$criteria->compare('Apartamento_idApartamento',$this->Apartamento_idApartamento);
		$criteria->compare('Propietario_Cedula',$this->Propietario_Cedula);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Apartamentopersona the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
