<?php

/**
 * This is the model class for table "telefono".
 *
 * The followings are the available columns in table 'telefono':
 * @property integer $numeroTelefono
 * @property integer $Oficina_idOficina
 * @property integer $Oficina_Empresa_RIF
 * @property integer $Propietario_Cedula
 * @property integer $TrabajadorEdificio_Cedula
 * @property integer $TrabajadorEmpresa_Cedula
 * @property integer $TrabajadorEmpresa_Oficina_idOficina
 * @property integer $TrabajadorEmpresa_Oficina_Empresa_RIF
 *
 * The followings are the available model relations:
 * @property Oficina $oficinaIdOficina
 * @property Propietario $propietarioCedula
 * @property Trabajadoredificio $trabajadorEdificioCedula
 * @property Trabajadorempresa $trabajadorEmpresaCedula
 */
class Telefono extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'telefono';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('numeroTelefono, Oficina_idOficina, Oficina_Empresa_RIF, Propietario_Cedula, TrabajadorEdificio_Cedula, TrabajadorEmpresa_Cedula, TrabajadorEmpresa_Oficina_idOficina, TrabajadorEmpresa_Oficina_Empresa_RIF', 'required'),
			array('numeroTelefono, Oficina_idOficina, Oficina_Empresa_RIF, Propietario_Cedula, TrabajadorEdificio_Cedula, TrabajadorEmpresa_Cedula, TrabajadorEmpresa_Oficina_idOficina, TrabajadorEmpresa_Oficina_Empresa_RIF', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('numeroTelefono, Oficina_idOficina, Oficina_Empresa_RIF, Propietario_Cedula, TrabajadorEdificio_Cedula, TrabajadorEmpresa_Cedula, TrabajadorEmpresa_Oficina_idOficina, TrabajadorEmpresa_Oficina_Empresa_RIF', 'safe', 'on'=>'search'),
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
			'oficinaIdOficina' => array(self::BELONGS_TO, 'Oficina', 'Oficina_idOficina'),
			'propietarioCedula' => array(self::BELONGS_TO, 'Propietario', 'Propietario_Cedula'),
			'trabajadorEdificioCedula' => array(self::BELONGS_TO, 'Trabajadoredificio', 'TrabajadorEdificio_Cedula'),
			'trabajadorEmpresaCedula' => array(self::BELONGS_TO, 'Trabajadorempresa', 'TrabajadorEmpresa_Cedula'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'numeroTelefono' => 'Numero Telefono',
			'Oficina_idOficina' => 'Oficina Id Oficina',
			'Oficina_Empresa_RIF' => 'Oficina Empresa Rif',
			'Propietario_Cedula' => 'Propietario Cedula',
			'TrabajadorEdificio_Cedula' => 'Trabajador Edificio Cedula',
			'TrabajadorEmpresa_Cedula' => 'Trabajador Empresa Cedula',
			'TrabajadorEmpresa_Oficina_idOficina' => 'Trabajador Empresa Oficina Id Oficina',
			'TrabajadorEmpresa_Oficina_Empresa_RIF' => 'Trabajador Empresa Oficina Empresa Rif',
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

		$criteria->compare('numeroTelefono',$this->numeroTelefono);
		$criteria->compare('Oficina_idOficina',$this->Oficina_idOficina);
		$criteria->compare('Oficina_Empresa_RIF',$this->Oficina_Empresa_RIF);
		$criteria->compare('Propietario_Cedula',$this->Propietario_Cedula);
		$criteria->compare('TrabajadorEdificio_Cedula',$this->TrabajadorEdificio_Cedula);
		$criteria->compare('TrabajadorEmpresa_Cedula',$this->TrabajadorEmpresa_Cedula);
		$criteria->compare('TrabajadorEmpresa_Oficina_idOficina',$this->TrabajadorEmpresa_Oficina_idOficina);
		$criteria->compare('TrabajadorEmpresa_Oficina_Empresa_RIF',$this->TrabajadorEmpresa_Oficina_Empresa_RIF);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Telefono the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
