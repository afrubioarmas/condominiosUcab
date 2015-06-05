<?php

/**
 * This is the model class for table "transferencia".
 *
 * The followings are the available columns in table 'transferencia':
 * @property integer $idTransferencia
 * @property integer $CuentaBancaria_NumeroDeCuenta
 *
 * The followings are the available model relations:
 * @property Transaccion[] $transaccions
 * @property Cuentabancaria $cuentaBancariaNumeroDeCuenta
 */
class Transferencia extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'transferencia';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CuentaBancaria_NumeroDeCuenta', 'required'),
			array('CuentaBancaria_NumeroDeCuenta', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idTransferencia, CuentaBancaria_NumeroDeCuenta', 'safe', 'on'=>'search'),
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
			'transaccions' => array(self::HAS_MANY, 'Transaccion', 'Transferencia_idTransferencia'),
			'cuentaBancariaNumeroDeCuenta' => array(self::BELONGS_TO, 'Cuentabancaria', 'CuentaBancaria_NumeroDeCuenta'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idTransferencia' => 'Id Transferencia',
			'CuentaBancaria_NumeroDeCuenta' => 'Cuenta Bancaria Numero De Cuenta',
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

		$criteria->compare('idTransferencia',$this->idTransferencia);
		$criteria->compare('CuentaBancaria_NumeroDeCuenta',$this->CuentaBancaria_NumeroDeCuenta);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Transferencia the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
