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
			array('Monto, Servicio_idServicio, Servicio_idServicio2,Servicio_idServicio3', 'required'),
			array('Monto, Aprobado, AltoValor, PagoParcial, Mejora, AsambleaExtraordinaria_idAsambleaExtraordinaria, CartaConsulta_idCartaConsulta, Servicio_idServicio, Servicio_idServicio2, Servicio_idServicio3, Servicio_Final', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idTrabajo, Monto, Aprobado, AltoValor, PagoParcial, Mejora, AsambleaExtraordinaria_idAsambleaExtraordinaria, CartaConsulta_idCartaConsulta, Servicio_idServicio, Servicio_idServicio2, Servicio_idServicio3, Servicio_Final', 'safe', 'on'=>'search'),
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
			'CartaConsulta_idCartaConsulta' => 'Carta Consulta Id Carta Consulta',
			'Servicio_idServicio' => 'Servicio Id Servicio',
			'Servicio_idServicio2' => 'Servicio Id Servicio 2',
			'Servicio_idServicio3' => 'Servicio Id Servicio 3',
			'Servicio_Final' => 'Servicio Final',
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
		$criteria->compare('CartaConsulta_idCartaConsulta',$this->CartaConsulta_idCartaConsulta);
		$criteria->compare('Servicio_idServicio',$this->Servicio_idServicio);
		$criteria->compare('Servicio_idServicio2',$this->Servicio_idServicio2);
		$criteria->compare('Servicio_idServicio3',$this->Servicio_idServicio3);
		$criteria->compare('Servicio_Final',$this->Servicio_Final);

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
