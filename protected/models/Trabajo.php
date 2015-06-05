<?php

/**
 * This is the model class for table "trabajo".
 *
 * The followings are the available columns in table 'trabajo':
 * @property integer $idTrabajo
 * @property integer $Monto
 * @property integer $Aprobado
 * @property integer $AltoValor
 * @property integer $PagoParcial
 * @property integer $Mejora
 * @property integer $AsambleaExtraordinaria_idAsambleaExtraordinaria
 * @property integer $AsambleaExtraordinaria_TrabajadorEmpresa_Cedula
 * @property integer $AsambleaExtraordinaria_TrabajadorEmpresa_Oficina_idOficina
 * @property integer $AsambleaExtraordinaria_TrabajadorEmpresa_Oficina_Empresa_RIF
 * @property integer $CartaConsulta_idCartaConsulta
 * @property integer $Servicio_idServicio
 * @property integer $Servicio_Proveedor_RIF
 *
 * The followings are the available model relations:
 * @property Asambleaextraordinaria $asambleaExtraordinariaIdAsambleaExtraordinaria
 * @property Cartaconsulta $cartaConsultaIdCartaConsulta
 * @property Servicio $servicioIdServicio
 * @property Transaccion[] $transaccions
 */
class Trabajo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'trabajo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Monto, Servicio_idServicio, Servicio_Proveedor_RIF', 'required'),
			array('Monto, Aprobado, AltoValor, PagoParcial, Mejora, AsambleaExtraordinaria_idAsambleaExtraordinaria, AsambleaExtraordinaria_TrabajadorEmpresa_Cedula, AsambleaExtraordinaria_TrabajadorEmpresa_Oficina_idOficina, AsambleaExtraordinaria_TrabajadorEmpresa_Oficina_Empresa_RIF, CartaConsulta_idCartaConsulta, Servicio_idServicio, Servicio_Proveedor_RIF', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idTrabajo, Monto, Aprobado, AltoValor, PagoParcial, Mejora, AsambleaExtraordinaria_idAsambleaExtraordinaria, AsambleaExtraordinaria_TrabajadorEmpresa_Cedula, AsambleaExtraordinaria_TrabajadorEmpresa_Oficina_idOficina, AsambleaExtraordinaria_TrabajadorEmpresa_Oficina_Empresa_RIF, CartaConsulta_idCartaConsulta, Servicio_idServicio, Servicio_Proveedor_RIF', 'safe', 'on'=>'search'),
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
			'asambleaExtraordinariaIdAsambleaExtraordinaria' => array(self::BELONGS_TO, 'Asambleaextraordinaria', 'AsambleaExtraordinaria_idAsambleaExtraordinaria'),
			'cartaConsultaIdCartaConsulta' => array(self::BELONGS_TO, 'Cartaconsulta', 'CartaConsulta_idCartaConsulta'),
			'servicioIdServicio' => array(self::BELONGS_TO, 'Servicio', 'Servicio_idServicio'),
			'transaccions' => array(self::HAS_MANY, 'Transaccion', 'Trabajo_idTrabajo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idTrabajo' => 'Id Trabajo',
			'Monto' => 'Monto',
			'Aprobado' => 'Aprobado',
			'AltoValor' => 'Alto Valor',
			'PagoParcial' => 'Pago Parcial',
			'Mejora' => 'Mejora',
			'AsambleaExtraordinaria_idAsambleaExtraordinaria' => 'Asamblea Extraordinaria Id Asamblea Extraordinaria',
			'AsambleaExtraordinaria_TrabajadorEmpresa_Cedula' => 'Asamblea Extraordinaria Trabajador Empresa Cedula',
			'AsambleaExtraordinaria_TrabajadorEmpresa_Oficina_idOficina' => 'Asamblea Extraordinaria Trabajador Empresa Oficina Id Oficina',
			'AsambleaExtraordinaria_TrabajadorEmpresa_Oficina_Empresa_RIF' => 'Asamblea Extraordinaria Trabajador Empresa Oficina Empresa Rif',
			'CartaConsulta_idCartaConsulta' => 'Carta Consulta Id Carta Consulta',
			'Servicio_idServicio' => 'Servicio Id Servicio',
			'Servicio_Proveedor_RIF' => 'Servicio Proveedor Rif',
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

		$criteria->compare('idTrabajo',$this->idTrabajo);
		$criteria->compare('Monto',$this->Monto);
		$criteria->compare('Aprobado',$this->Aprobado);
		$criteria->compare('AltoValor',$this->AltoValor);
		$criteria->compare('PagoParcial',$this->PagoParcial);
		$criteria->compare('Mejora',$this->Mejora);
		$criteria->compare('AsambleaExtraordinaria_idAsambleaExtraordinaria',$this->AsambleaExtraordinaria_idAsambleaExtraordinaria);
		$criteria->compare('AsambleaExtraordinaria_TrabajadorEmpresa_Cedula',$this->AsambleaExtraordinaria_TrabajadorEmpresa_Cedula);
		$criteria->compare('AsambleaExtraordinaria_TrabajadorEmpresa_Oficina_idOficina',$this->AsambleaExtraordinaria_TrabajadorEmpresa_Oficina_idOficina);
		$criteria->compare('AsambleaExtraordinaria_TrabajadorEmpresa_Oficina_Empresa_RIF',$this->AsambleaExtraordinaria_TrabajadorEmpresa_Oficina_Empresa_RIF);
		$criteria->compare('CartaConsulta_idCartaConsulta',$this->CartaConsulta_idCartaConsulta);
		$criteria->compare('Servicio_idServicio',$this->Servicio_idServicio);
		$criteria->compare('Servicio_Proveedor_RIF',$this->Servicio_Proveedor_RIF);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Trabajo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
