<?php

/**
 * This is the model class for table "notificacionapartamento".
 *
 * The followings are the available columns in table 'notificacionapartamento':
 * @property integer $idNotificacionApartamento
 * @property string $Fecha
 * @property integer $AsambleaOrdinaria_idAsambleaOrdinaria
 * @property integer $AsambleaExtraordinaria_idAsambleaExtraordinaria
 * @property integer $Transaccion_idTransaccion
 * @property integer $Apartamento_idApartamento
 *
 * The followings are the available model relations:
 * @property Asambleaordinaria $asambleaOrdinariaIdAsambleaOrdinaria
 * @property Asambleaextraordinaria $asambleaExtraordinariaIdAsambleaExtraordinaria
 * @property Transaccion $transaccionIdTransaccion
 * @property Apartamento $apartamentoIdApartamento
 */
class Notificacionapartamento extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'notificacionapartamento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Fecha, Apartamento_idApartamento', 'required'),
			array('AsambleaOrdinaria_idAsambleaOrdinaria, AsambleaExtraordinaria_idAsambleaExtraordinaria, Transaccion_idTransaccion, Apartamento_idApartamento', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idNotificacionApartamento, Fecha, AsambleaOrdinaria_idAsambleaOrdinaria, AsambleaExtraordinaria_idAsambleaExtraordinaria, Transaccion_idTransaccion, Apartamento_idApartamento', 'safe', 'on'=>'search'),
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
			'asambleaOrdinariaIdAsambleaOrdinaria' => array(self::BELONGS_TO, 'Asambleaordinaria', 'AsambleaOrdinaria_idAsambleaOrdinaria'),
			'asambleaExtraordinariaIdAsambleaExtraordinaria' => array(self::BELONGS_TO, 'Asambleaextraordinaria', 'AsambleaExtraordinaria_idAsambleaExtraordinaria'),
			'transaccionIdTransaccion' => array(self::BELONGS_TO, 'Transaccion', 'Transaccion_idTransaccion'),
			'apartamentoIdApartamento' => array(self::BELONGS_TO, 'Apartamento', 'Apartamento_idApartamento'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idNotificacionApartamento' => 'Id Notificacion Apartamento',
			'Fecha' => 'Fecha',
			'AsambleaOrdinaria_idAsambleaOrdinaria' => 'Asamblea Ordinaria Id Asamblea Ordinaria',
			'AsambleaExtraordinaria_idAsambleaExtraordinaria' => 'Asamblea Extraordinaria Id Asamblea Extraordinaria',
			'Transaccion_idTransaccion' => 'Transaccion Id Transaccion',
			'Apartamento_idApartamento' => 'Apartamento Id Apartamento',
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

		$criteria->compare('idNotificacionApartamento',$this->idNotificacionApartamento);
		$criteria->compare('Fecha',$this->Fecha,true);
		$criteria->compare('AsambleaOrdinaria_idAsambleaOrdinaria',$this->AsambleaOrdinaria_idAsambleaOrdinaria);
		$criteria->compare('AsambleaExtraordinaria_idAsambleaExtraordinaria',$this->AsambleaExtraordinaria_idAsambleaExtraordinaria);
		$criteria->compare('Transaccion_idTransaccion',$this->Transaccion_idTransaccion);
		$criteria->compare('Apartamento_idApartamento',$this->Apartamento_idApartamento);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Notificacionapartamento the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
