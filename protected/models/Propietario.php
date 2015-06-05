<?php

/**
 * This is the model class for table "propietario".
 *
 * The followings are the available columns in table 'propietario':
 * @property integer $Cedula
 * @property string $Nombre
 * @property string $Apellido
 * @property string $ClaveLogueo
 *
 * The followings are the available model relations:
 * @property Apartamentopersona[] $apartamentopersonas
 * @property Atencion[] $atencions
 * @property Correoelectronico[] $correoelectronicos
 * @property Documentocondominio[] $documentocondominios
 * @property Personaasamblea[] $personaasambleas
 * @property Telefono[] $telefonos
 * @property Transaccion[] $transaccions
 */
class Propietario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'propietario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Cedula, Nombre, Apellido, ClaveLogueo', 'required'),
			array('Cedula', 'numerical', 'integerOnly'=>true),
			array('Nombre, Apellido, ClaveLogueo', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Cedula, Nombre, Apellido, ClaveLogueo', 'safe', 'on'=>'search'),
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
			'apartamentopersonas' => array(self::HAS_MANY, 'Apartamentopersona', 'Propietario_Cedula'),
			'atencions' => array(self::HAS_MANY, 'Atencion', 'Propietario_Cedula'),
			'correoelectronicos' => array(self::HAS_MANY, 'Correoelectronico', 'Propietario_Cedula'),
			'documentocondominios' => array(self::HAS_MANY, 'Documentocondominio', 'Propietario_Cedula'),
			'personaasambleas' => array(self::HAS_MANY, 'Personaasamblea', 'Propietario_Cedula'),
			'telefonos' => array(self::HAS_MANY, 'Telefono', 'Propietario_Cedula'),
			'transaccions' => array(self::HAS_MANY, 'Transaccion', 'Propietario_Cedula'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Cedula' => 'Cedula',
			'Nombre' => 'Nombre',
			'Apellido' => 'Apellido',
			'ClaveLogueo' => 'Clave Logueo',
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

		$criteria->compare('Cedula',$this->Cedula);
		$criteria->compare('Nombre',$this->Nombre,true);
		$criteria->compare('Apellido',$this->Apellido,true);
		$criteria->compare('ClaveLogueo',$this->ClaveLogueo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Propietario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
