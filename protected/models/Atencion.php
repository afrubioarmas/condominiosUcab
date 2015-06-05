<?php

/**
 * This is the model class for table "atencion".
 *
 * The followings are the available columns in table 'atencion':
 * @property integer $idAtencion
 * @property string $Descripcion
 * @property integer $Estatus
 * @property string $Razon
 * @property integer $Telefono
 * @property integer $Correo
 * @property integer $Oficina
 * @property integer $JuntaCondominio_idJuntaCondominio
 * @property integer $JuntaCondominio_Edificio_RIF
 * @property integer $Propietario_Cedula
 * @property integer $Oficina_idOficina
 *
 * The followings are the available model relations:
 * @property Juntacondominio $juntaCondominioIdJuntaCondominio
 * @property Propietario $propietarioCedula
 * @property Oficina $oficinaIdOficina
 */
class Atencion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'atencion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Descripcion, JuntaCondominio_idJuntaCondominio, JuntaCondominio_Edificio_RIF, Propietario_Cedula, Oficina_idOficina', 'required'),
			array('Estatus, Telefono, Correo, Oficina, JuntaCondominio_idJuntaCondominio, JuntaCondominio_Edificio_RIF, Propietario_Cedula, Oficina_idOficina', 'numerical', 'integerOnly'=>true),
			array('Descripcion, Razon', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idAtencion, Descripcion, Estatus, Razon, Telefono, Correo, Oficina, JuntaCondominio_idJuntaCondominio, JuntaCondominio_Edificio_RIF, Propietario_Cedula, Oficina_idOficina', 'safe', 'on'=>'search'),
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
			'juntaCondominioIdJuntaCondominio' => array(self::BELONGS_TO, 'Juntacondominio', 'JuntaCondominio_idJuntaCondominio'),
			'propietarioCedula' => array(self::BELONGS_TO, 'Propietario', 'Propietario_Cedula'),
			'oficinaIdOficina' => array(self::BELONGS_TO, 'Oficina', 'Oficina_idOficina'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idAtencion' => 'Id Atencion',
			'Descripcion' => 'Descripcion',
			'Estatus' => 'Estatus',
			'Razon' => 'Razon',
			'Telefono' => 'Telefono',
			'Correo' => 'Correo',
			'Oficina' => 'Oficina',
			'JuntaCondominio_idJuntaCondominio' => 'Junta Condominio Id Junta Condominio',
			'JuntaCondominio_Edificio_RIF' => 'Junta Condominio Edificio Rif',
			'Propietario_Cedula' => 'Propietario Cedula',
			'Oficina_idOficina' => 'Oficina Id Oficina',
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

		$criteria->compare('idAtencion',$this->idAtencion);
		$criteria->compare('Descripcion',$this->Descripcion,true);
		$criteria->compare('Estatus',$this->Estatus);
		$criteria->compare('Razon',$this->Razon,true);
		$criteria->compare('Telefono',$this->Telefono);
		$criteria->compare('Correo',$this->Correo);
		$criteria->compare('Oficina',$this->Oficina);
		$criteria->compare('JuntaCondominio_idJuntaCondominio',$this->JuntaCondominio_idJuntaCondominio);
		$criteria->compare('JuntaCondominio_Edificio_RIF',$this->JuntaCondominio_Edificio_RIF);
		$criteria->compare('Propietario_Cedula',$this->Propietario_Cedula);
		$criteria->compare('Oficina_idOficina',$this->Oficina_idOficina);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Atencion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
