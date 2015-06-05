<?php

/**
 * This is the model class for table "cartaconsulta".
 *
 * The followings are the available columns in table 'cartaconsulta':
 * @property integer $idCartaConsulta
 * @property string $Fecha
 * @property string $Motivo
 * @property string $Propuesta
 *
 * The followings are the available model relations:
 * @property Trabajo[] $trabajos
 */
class Cartaconsulta extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cartaconsulta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Fecha, Motivo, Propuesta', 'required'),
			array('Motivo, Propuesta', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idCartaConsulta, Fecha, Motivo, Propuesta', 'safe', 'on'=>'search'),
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
			'trabajos' => array(self::HAS_MANY, 'Trabajo', 'CartaConsulta_idCartaConsulta'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idCartaConsulta' => 'Id Carta Consulta',
			'Fecha' => 'Fecha',
			'Motivo' => 'Motivo',
			'Propuesta' => 'Propuesta',
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

		$criteria->compare('idCartaConsulta',$this->idCartaConsulta);
		$criteria->compare('Fecha',$this->Fecha,true);
		$criteria->compare('Motivo',$this->Motivo,true);
		$criteria->compare('Propuesta',$this->Propuesta,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cartaconsulta the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
