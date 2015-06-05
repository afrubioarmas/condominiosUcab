<?php

/**
 * This is the model class for table "oficina".
 *
 * The followings are the available columns in table 'oficina':
 * @property integer $idOficina
 * @property integer $Lugar_idLugar
 * @property integer $Empresa_RIF
 *
 * The followings are the available model relations:
 * @property Actareunion[] $actareunions
 * @property Atencion[] $atencions
 * @property Correoelectronico[] $correoelectronicos
 * @property Cuentabancaria[] $cuentabancarias
 * @property Horario[] $horarios
 * @property Lugar $lugarIdLugar
 * @property Empresa $empresaRIF
 * @property Telefono[] $telefonos
 * @property Trabajadorempresa[] $trabajadorempresas
 */
class Oficina extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'oficina';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Lugar_idLugar, Empresa_RIF', 'required'),
			array('Lugar_idLugar, Empresa_RIF', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idOficina, Lugar_idLugar, Empresa_RIF', 'safe', 'on'=>'search'),
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
			'actareunions' => array(self::HAS_MANY, 'Actareunion', 'Oficina_idOficina'),
			'atencions' => array(self::HAS_MANY, 'Atencion', 'Oficina_idOficina'),
			'correoelectronicos' => array(self::HAS_MANY, 'Correoelectronico', 'Oficina_idOficina'),
			'cuentabancarias' => array(self::HAS_MANY, 'Cuentabancaria', 'Oficina_idOficina'),
			'horarios' => array(self::HAS_MANY, 'Horario', 'Oficina_idOficina'),
			'lugarIdLugar' => array(self::BELONGS_TO, 'Lugar', 'Lugar_idLugar'),
			'empresaRIF' => array(self::BELONGS_TO, 'Empresa', 'Empresa_RIF'),
			'telefonos' => array(self::HAS_MANY, 'Telefono', 'Oficina_idOficina'),
			'trabajadorempresas' => array(self::HAS_MANY, 'Trabajadorempresa', 'Oficina_idOficina'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idOficina' => 'Id Oficina',
			'Lugar_idLugar' => 'Lugar Id Lugar',
			'Empresa_RIF' => 'Empresa Rif',
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

		$criteria->compare('idOficina',$this->idOficina);
		$criteria->compare('Lugar_idLugar',$this->Lugar_idLugar);
		$criteria->compare('Empresa_RIF',$this->Empresa_RIF);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Oficina the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
