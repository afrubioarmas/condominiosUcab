<?php

/**
 * This is the model class for table "ventaapartamento".
 *
 * The followings are the available columns in table 'ventaapartamento':
 * @property integer $idVentaApartamento
 * @property integer $Monto
 * @property string $Fecha
 * @property integer $Comision
 * @property integer $Apartamento_idApartamento
 * @property integer $TrabajadorEmpresa_Cedula
 *
 * The followings are the available model relations:
 * @property Apartamento $apartamentoIdApartamento
 * @property Trabajadorempresa $trabajadorEmpresaCedula
 */
class Ventaapartamento extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ventaapartamento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Monto, Fecha, Comision, Apartamento_idApartamento, TrabajadorEmpresa_Cedula', 'required'),
			array('Monto, Comision, Apartamento_idApartamento, TrabajadorEmpresa_Cedula', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idVentaApartamento, Monto, Fecha, Comision, Apartamento_idApartamento, TrabajadorEmpresa_Cedula', 'safe', 'on'=>'search'),
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
			'apartamentoIdApartamento' => array(self::BELONGS_TO, 'Apartamento', 'Apartamento_idApartamento'),
			'trabajadorEmpresaCedula' => array(self::BELONGS_TO, 'Trabajadorempresa', 'TrabajadorEmpresa_Cedula'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idVentaApartamento' => 'Id Venta Apartamento',
			'Monto' => 'Monto',
			'Fecha' => 'Fecha',
			'Comision' => 'Comision',
			'Apartamento_idApartamento' => 'Apartamento Id Apartamento',
			'TrabajadorEmpresa_Cedula' => 'Trabajador Empresa Cedula',
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

		$criteria->compare('idVentaApartamento',$this->idVentaApartamento);
		$criteria->compare('Monto',$this->Monto);
		$criteria->compare('Fecha',$this->Fecha,true);
		$criteria->compare('Comision',$this->Comision);
		$criteria->compare('Apartamento_idApartamento',$this->Apartamento_idApartamento);
		$criteria->compare('TrabajadorEmpresa_Cedula',$this->TrabajadorEmpresa_Cedula);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ventaapartamento the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
