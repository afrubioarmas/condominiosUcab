<?php

/**
 * This is the model class for table "edificio".
 *
 * The followings are the available columns in table 'edificio':
 * @property integer $RIF
 * @property string $Nombre
 * @property string $Tipo
 * @property integer $InteresMora
 * @property integer $Asistencia1Reunion
 * @property integer $Asistencia2Reunion
 * @property integer $DerechoVoto
 * @property integer $Lugar_idLugar
 * @property integer $TrabajadorEmpresa_Cedula
 *
 * The followings are the available model relations:
 * @property Actareunion[] $actareunions
 * @property Areacomun[] $areacomuns
 * @property Contrato[] $contratos
 * @property Lugar $lugarIdLugar
 * @property Trabajadorempresa $trabajadorEmpresaCedula
 * @property Juntacondominio[] $juntacondominios
 * @property Pagosprogramados[] $pagosprogramadoses
 * @property Piso[] $pisos
 * @property Transaccion[] $transaccions
 */
class Edificio extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'edificio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('RIF, Nombre, Tipo, InteresMora, Asistencia1Reunion, Asistencia2Reunion, DerechoVoto, Lugar_idLugar, TrabajadorEmpresa_Cedula', 'required'),
			array('RIF, InteresMora, Asistencia1Reunion, Asistencia2Reunion, DerechoVoto, Lugar_idLugar, TrabajadorEmpresa_Cedula, Pisos, ApartamentosPiso', 'numerical', 'integerOnly'=>true),
			array('Nombre, Tipo', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('RIF, Nombre, Tipo, InteresMora, Asistencia1Reunion, Asistencia2Reunion, DerechoVoto, Lugar_idLugar, TrabajadorEmpresa_Cedula, Pisos, ApartamentosPiso', 'safe', 'on'=>'search'),
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
			'actareunions' => array(self::HAS_MANY, 'Actareunion', 'Edificio_RIF'),
			'areacomuns' => array(self::HAS_MANY, 'Areacomun', 'Edificio_RIF'),
			'contratos' => array(self::HAS_MANY, 'Contrato', 'Edificio_RIF'),
			'lugarIdLugar' => array(self::BELONGS_TO, 'Lugar', 'Lugar_idLugar'),
			'trabajadorEmpresaCedula' => array(self::BELONGS_TO, 'Trabajadorempresa', 'TrabajadorEmpresa_Cedula'),
			'juntacondominios' => array(self::HAS_MANY, 'Juntacondominio', 'Edificio_RIF'),
			'pagosprogramadoses' => array(self::HAS_MANY, 'Pagosprogramados', 'Edificio_RIF'),
			'pisos' => array(self::HAS_MANY, 'Piso', 'Edificio_RIF'),
			'transaccions' => array(self::HAS_MANY, 'Transaccion', 'Edificio_RIF'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'RIF' => 'Rif',
			'Nombre' => 'Nombre',
			'Tipo' => 'Tipo',
			'InteresMora' => 'Interes Mora',
			'Asistencia1Reunion' => 'Asistencia1 Reunion',
			'Asistencia2Reunion' => 'Asistencia2 Reunion',
			'DerechoVoto' => 'Derecho Voto',
			'Lugar_idLugar' => 'Lugar Id Lugar',
			'TrabajadorEmpresa_Cedula' => 'Trabajador Empresa Cedula',
			'Pisos' => 'Pisos',
			'ApartamentosPiso' => 'ApartamentosPiso',

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

		$criteria->compare('RIF',$this->RIF);
		$criteria->compare('Nombre',$this->Nombre,true);
		$criteria->compare('Tipo',$this->Tipo,true);
		$criteria->compare('InteresMora',$this->InteresMora);
		$criteria->compare('Asistencia1Reunion',$this->Asistencia1Reunion);
		$criteria->compare('Asistencia2Reunion',$this->Asistencia2Reunion);
		$criteria->compare('DerechoVoto',$this->DerechoVoto);
		$criteria->compare('Lugar_idLugar',$this->Lugar_idLugar);
		$criteria->compare('TrabajadorEmpresa_Cedula',$this->TrabajadorEmpresa_Cedula);
		$criteria->compare('Pisos',$this->Pisos);
		$criteria->compare('ApartamentosPiso',$this->ApartamentosPiso);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Edificio the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
