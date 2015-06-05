<?php

/**
 * This is the model class for table "tdc".
 *
 * The followings are the available columns in table 'tdc':
 * @property integer $NumeroTDC
 * @property string $Marca
 * @property string $FechaVencimiento
 * @property string $FechaExpedicion
 * @property integer $CodigoSeguridad
 *
 * The followings are the available model relations:
 * @property Transaccion[] $transaccions
 */
class Tdc extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tdc';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NumeroTDC, Marca, FechaVencimiento, FechaExpedicion, CodigoSeguridad', 'required'),
			array('NumeroTDC, CodigoSeguridad', 'numerical', 'integerOnly'=>true),
			array('Marca', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('NumeroTDC, Marca, FechaVencimiento, FechaExpedicion, CodigoSeguridad', 'safe', 'on'=>'search'),
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
			'transaccions' => array(self::HAS_MANY, 'Transaccion', 'TDC_NumeroTDC'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'NumeroTDC' => 'Numero Tdc',
			'Marca' => 'Marca',
			'FechaVencimiento' => 'Fecha Vencimiento',
			'FechaExpedicion' => 'Fecha Expedicion',
			'CodigoSeguridad' => 'Codigo Seguridad',
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

		$criteria->compare('NumeroTDC',$this->NumeroTDC);
		$criteria->compare('Marca',$this->Marca,true);
		$criteria->compare('FechaVencimiento',$this->FechaVencimiento,true);
		$criteria->compare('FechaExpedicion',$this->FechaExpedicion,true);
		$criteria->compare('CodigoSeguridad',$this->CodigoSeguridad);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tdc the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
