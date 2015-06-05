<?php

/**
 * This is the model class for table "apartamento".
 *
 * The followings are the available columns in table 'apartamento':
 * @property integer $idApartamento
 * @property integer $Saldo
 * @property string $Estatus
 * @property integer $Alicuota
 * @property integer $Venta
 * @property integer $Piso_idPiso
 *
 * The followings are the available model relations:
 * @property Piso $pisoIdPiso
 * @property Apartamentopersona[] $apartamentopersonas
 * @property Notificacionapartamento[] $notificacionapartamentos
 * @property Ventaapartamento[] $ventaapartamentos
 */
class Apartamento extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'apartamento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idApartamento, Saldo, Estatus, Piso_idPiso', 'required'),
			array('idApartamento, Saldo, Alicuota, Venta, Piso_idPiso', 'numerical', 'integerOnly'=>true),
			array('Estatus', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idApartamento, Saldo, Estatus, Alicuota, Venta, Piso_idPiso', 'safe', 'on'=>'search'),
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
			'pisoIdPiso' => array(self::BELONGS_TO, 'Piso', 'Piso_idPiso'),
			'apartamentopersonas' => array(self::HAS_MANY, 'Apartamentopersona', 'Apartamento_idApartamento'),
			'notificacionapartamentos' => array(self::HAS_MANY, 'Notificacionapartamento', 'Apartamento_idApartamento'),
			'ventaapartamentos' => array(self::HAS_MANY, 'Ventaapartamento', 'Apartamento_idApartamento'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idApartamento' => 'Id Apartamento',
			'Saldo' => 'Saldo',
			'Estatus' => 'Estatus',
			'Alicuota' => 'Alicuota',
			'Venta' => 'Venta',
			'Piso_idPiso' => 'Piso Id Piso',
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

		$criteria->compare('idApartamento',$this->idApartamento);
		$criteria->compare('Saldo',$this->Saldo);
		$criteria->compare('Estatus',$this->Estatus,true);
		$criteria->compare('Alicuota',$this->Alicuota);
		$criteria->compare('Venta',$this->Venta);
		$criteria->compare('Piso_idPiso',$this->Piso_idPiso);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Apartamento the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
