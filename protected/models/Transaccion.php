<?php

/**
 * This is the model class for table "transaccion".
 *
 * The followings are the available columns in table 'transaccion':
 * @property integer $idTransaccion
 * @property integer $Monto
 * @property string $Fecha
 * @property integer $Aprobado
 * @property string $Descripcion
 * @property integer $Ingreso
 * @property integer $TDC_NumeroTDC
 * @property integer $Transferencia_idTransferencia
 * @property integer $Efectivo_idEfectivo
 * @property integer $Cheque_numeroCheque
 * @property integer $Fondo_idFondo
 * @property integer $PagosProgramados_idPagosProgramados
 * @property integer $Edificio_RIF
 * @property integer $Propietario_Cedula
 * @property integer $Trabajo_idTrabajo
 *
 * The followings are the available model relations:
 * @property Notificacionapartamento[] $notificacionapartamentos
 * @property Tdc $tDCNumeroTDC
 * @property Transferencia $transferenciaIdTransferencia
 * @property Efectivo $efectivoIdEfectivo
 * @property Cheque $chequeNumeroCheque
 * @property Fondo $fondoIdFondo
 * @property Pagosprogramados $pagosProgramadosIdPagosProgramados
 * @property Edificio $edificioRIF
 * @property Propietario $propietarioCedula
 * @property Trabajo $trabajoIdTrabajo
 */
class Transaccion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'transaccion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Monto, Fecha, Aprobado, Descripcion, Ingreso, Fondo_idFondo, Edificio_RIF, Propietario_Cedula, Trabajo_idTrabajo', 'required'),
			array('Monto, Aprobado, Ingreso, TDC_NumeroTDC, Transferencia_idTransferencia, Efectivo_idEfectivo, Cheque_numeroCheque, Fondo_idFondo, PagosProgramados_idPagosProgramados, Edificio_RIF, Propietario_Cedula, Trabajo_idTrabajo', 'numerical', 'integerOnly'=>true),
			array('Descripcion', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idTransaccion, Monto, Fecha, Aprobado, Descripcion, Ingreso, TDC_NumeroTDC, Transferencia_idTransferencia, Efectivo_idEfectivo, Cheque_numeroCheque, Fondo_idFondo, PagosProgramados_idPagosProgramados, Edificio_RIF, Propietario_Cedula, Trabajo_idTrabajo', 'safe', 'on'=>'search'),
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
			'notificacionapartamentos' => array(self::HAS_MANY, 'Notificacionapartamento', 'Transaccion_idTransaccion'),
			'tDCNumeroTDC' => array(self::BELONGS_TO, 'Tdc', 'TDC_NumeroTDC'),
			'transferenciaIdTransferencia' => array(self::BELONGS_TO, 'Transferencia', 'Transferencia_idTransferencia'),
			'efectivoIdEfectivo' => array(self::BELONGS_TO, 'Efectivo', 'Efectivo_idEfectivo'),
			'chequeNumeroCheque' => array(self::BELONGS_TO, 'Cheque', 'Cheque_numeroCheque'),
			'fondoIdFondo' => array(self::BELONGS_TO, 'Fondo', 'Fondo_idFondo'),
			'pagosProgramadosIdPagosProgramados' => array(self::BELONGS_TO, 'Pagosprogramados', 'PagosProgramados_idPagosProgramados'),
			'edificioRIF' => array(self::BELONGS_TO, 'Edificio', 'Edificio_RIF'),
			'propietarioCedula' => array(self::BELONGS_TO, 'Propietario', 'Propietario_Cedula'),
			'trabajoIdTrabajo' => array(self::BELONGS_TO, 'Trabajo', 'Trabajo_idTrabajo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idTransaccion' => 'Id Transaccion',
			'Monto' => 'Monto',
			'Fecha' => 'Fecha',
			'Aprobado' => 'Aprobado',
			'Descripcion' => 'Descripcion',
			'Ingreso' => 'Ingreso',
			'TDC_NumeroTDC' => 'Tdc Numero Tdc',
			'Transferencia_idTransferencia' => 'Transferencia Id Transferencia',
			'Efectivo_idEfectivo' => 'Efectivo Id Efectivo',
			'Cheque_numeroCheque' => 'Cheque Numero Cheque',
			'Fondo_idFondo' => 'Fondo Id Fondo',
			'PagosProgramados_idPagosProgramados' => 'Pagos Programados Id Pagos Programados',
			'Edificio_RIF' => 'Edificio Rif',
			'Propietario_Cedula' => 'Propietario Cedula',
			'Trabajo_idTrabajo' => 'Trabajo Id Trabajo',
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

		$criteria->compare('idTransaccion',$this->idTransaccion);
		$criteria->compare('Monto',$this->Monto);
		$criteria->compare('Fecha',$this->Fecha,true);
		$criteria->compare('Aprobado',$this->Aprobado);
		$criteria->compare('Descripcion',$this->Descripcion,true);
		$criteria->compare('Ingreso',$this->Ingreso);
		$criteria->compare('TDC_NumeroTDC',$this->TDC_NumeroTDC);
		$criteria->compare('Transferencia_idTransferencia',$this->Transferencia_idTransferencia);
		$criteria->compare('Efectivo_idEfectivo',$this->Efectivo_idEfectivo);
		$criteria->compare('Cheque_numeroCheque',$this->Cheque_numeroCheque);
		$criteria->compare('Fondo_idFondo',$this->Fondo_idFondo);
		$criteria->compare('PagosProgramados_idPagosProgramados',$this->PagosProgramados_idPagosProgramados);
		$criteria->compare('Edificio_RIF',$this->Edificio_RIF);
		$criteria->compare('Propietario_Cedula',$this->Propietario_Cedula);
		$criteria->compare('Trabajo_idTrabajo',$this->Trabajo_idTrabajo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Transaccion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
