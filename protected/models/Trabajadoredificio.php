<?php

/**
 * This is the model class for table "trabajadoredificio".
 *
 * The followings are the available columns in table 'trabajadoredificio':
 * @property integer $Cedula
 * @property string $Nombre
 * @property string $Apellido
 * @property string $ClaveLogueo
 * @property string $Rol
 *
 * The followings are the available model relations:
 * @property Contrato[] $contratos
 * @property Correoelectronico[] $correoelectronicos
 * @property Inspeccionmantenimiento[] $inspeccionmantenimientos
 * @property Supervicionevaluacion[] $supervicionevaluacions
 * @property Telefono[] $telefonos
 */
class Trabajadoredificio extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'trabajadoredificio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Cedula, Nombre, Apellido, ClaveLogueo, Rol', 'required'),
			array('Cedula', 'numerical', 'integerOnly'=>true),
			array('Nombre, Apellido, ClaveLogueo, Rol', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Cedula, Nombre, Apellido, ClaveLogueo, Rol', 'safe', 'on'=>'search'),
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
			'contratos' => array(self::HAS_MANY, 'Contrato', 'TrabajadorEdificio_Cedula'),
			'correoelectronicos' => array(self::HAS_MANY, 'Correoelectronico', 'TrabajadorEdificio_Cedula'),
			'inspeccionmantenimientos' => array(self::HAS_MANY, 'Inspeccionmantenimiento', 'TrabajadorEdificio_Cedula'),
			'supervicionevaluacions' => array(self::HAS_MANY, 'Supervicionevaluacion', 'TrabajadorEdificio_Cedula'),
			'telefonos' => array(self::HAS_MANY, 'Telefono', 'TrabajadorEdificio_Cedula'),
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
			'Rol' => 'Rol',
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
		$criteria->compare('Rol',$this->Rol,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Trabajadoredificio the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
