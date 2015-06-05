<?php

/**
 * This is the model class for table "contrato".
 *
 * The followings are the available columns in table 'contrato':
 * @property integer $idContrato
 * @property string $FechaInicio
 * @property string $FechaFin
 * @property integer $Sueldo
 * @property integer $Edificio_RIF
 * @property integer $TrabajadorEdificio_Cedula
 *
 * The followings are the available model relations:
 * @property Edificio $edificioRIF
 * @property Trabajadoredificio $trabajadorEdificioCedula
 */
class Contrato extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'contrato';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('FechaInicio, FechaFin, Sueldo, Edificio_RIF, TrabajadorEdificio_Cedula', 'required'),
			array('Sueldo, Edificio_RIF, TrabajadorEdificio_Cedula', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idContrato, FechaInicio, FechaFin, Sueldo, Edificio_RIF, TrabajadorEdificio_Cedula', 'safe', 'on'=>'search'),
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
			'edificioRIF' => array(self::BELONGS_TO, 'Edificio', 'Edificio_RIF'),
			'trabajadorEdificioCedula' => array(self::BELONGS_TO, 'Trabajadoredificio', 'TrabajadorEdificio_Cedula'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idContrato' => 'Id Contrato',
			'FechaInicio' => 'Fecha Inicio',
			'FechaFin' => 'Fecha Fin',
			'Sueldo' => 'Sueldo',
			'Edificio_RIF' => 'Edificio Rif',
			'TrabajadorEdificio_Cedula' => 'Trabajador Edificio Cedula',
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

		$criteria->compare('idContrato',$this->idContrato);
		$criteria->compare('FechaInicio',$this->FechaInicio,true);
		$criteria->compare('FechaFin',$this->FechaFin,true);
		$criteria->compare('Sueldo',$this->Sueldo);
		$criteria->compare('Edificio_RIF',$this->Edificio_RIF);
		$criteria->compare('TrabajadorEdificio_Cedula',$this->TrabajadorEdificio_Cedula);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Contrato the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
