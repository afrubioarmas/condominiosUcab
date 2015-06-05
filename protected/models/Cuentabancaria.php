<?php

/**
 * This is the model class for table "cuentabancaria".
 *
 * The followings are the available columns in table 'cuentabancaria':
 * @property integer $NumeroDeCuenta
 * @property string $Banco
 * @property integer $Oficina_idOficina
 *
 * The followings are the available model relations:
 * @property Cheque[] $cheques
 * @property Oficina $oficinaIdOficina
 * @property Transferencia[] $transferencias
 */
class Cuentabancaria extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cuentabancaria';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NumeroDeCuenta, Banco, Oficina_idOficina', 'required'),
			array('NumeroDeCuenta, Oficina_idOficina', 'numerical', 'integerOnly'=>true),
			array('Banco', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('NumeroDeCuenta, Banco, Oficina_idOficina', 'safe', 'on'=>'search'),
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
			'cheques' => array(self::HAS_MANY, 'Cheque', 'CuentaBancaria_NumeroDeCuenta'),
			'oficinaIdOficina' => array(self::BELONGS_TO, 'Oficina', 'Oficina_idOficina'),
			'transferencias' => array(self::HAS_MANY, 'Transferencia', 'CuentaBancaria_NumeroDeCuenta'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'NumeroDeCuenta' => 'Numero De Cuenta',
			'Banco' => 'Banco',
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

		$criteria->compare('NumeroDeCuenta',$this->NumeroDeCuenta);
		$criteria->compare('Banco',$this->Banco,true);
		$criteria->compare('Oficina_idOficina',$this->Oficina_idOficina);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cuentabancaria the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
