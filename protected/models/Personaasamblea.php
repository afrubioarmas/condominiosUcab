<?php

/**
 * This is the model class for table "personaasamblea".
 *
 * The followings are the available columns in table 'personaasamblea':
 * @property integer $idPersonaAsamblea
 * @property integer $Aprobacion
 * @property integer $Asistencia
 * @property integer $AsambleaExtraordinaria_idAsambleaExtraordinaria
 * @property integer $AsambleaOrdinaria_idAsambleaOrdinaria
 * @property integer $Propietario_Cedula
 *
 * The followings are the available model relations:
 * @property Asambleaextraordinaria $asambleaExtraordinariaIdAsambleaExtraordinaria
 * @property Asambleaordinaria $asambleaOrdinariaIdAsambleaOrdinaria
 * @property Propietario $propietarioCedula
 */
class Personaasamblea extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'personaasamblea';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Aprobacion, Asistencia, AsambleaExtraordinaria_idAsambleaExtraordinaria, AsambleaOrdinaria_idAsambleaOrdinaria, Propietario_Cedula', 'required'),
			array('Aprobacion, Asistencia, AsambleaExtraordinaria_idAsambleaExtraordinaria, AsambleaOrdinaria_idAsambleaOrdinaria, Propietario_Cedula', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idPersonaAsamblea, Aprobacion, Asistencia, AsambleaExtraordinaria_idAsambleaExtraordinaria, AsambleaOrdinaria_idAsambleaOrdinaria, Propietario_Cedula', 'safe', 'on'=>'search'),
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
			'asambleaOrdinariaIdAsambleaOrdinaria' => array(self::BELONGS_TO, 'Asambleaordinaria', 'AsambleaOrdinaria_idAsambleaOrdinaria'),
			'propietarioCedula' => array(self::BELONGS_TO, 'Propietario', 'Propietario_Cedula'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idPersonaAsamblea' => 'Id Persona Asamblea',
			'Aprobacion' => 'Aprobacion',
			'Asistencia' => 'Asistencia',
			'AsambleaExtraordinaria_idAsambleaExtraordinaria' => 'Asamblea Extraordinaria Id Asamblea Extraordinaria',
			'AsambleaOrdinaria_idAsambleaOrdinaria' => 'Asamblea Ordinaria Id Asamblea Ordinaria',
			'Propietario_Cedula' => 'Propietario Cedula',
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

		$criteria->compare('idPersonaAsamblea',$this->idPersonaAsamblea);
		$criteria->compare('Aprobacion',$this->Aprobacion);
		$criteria->compare('Asistencia',$this->Asistencia);
		$criteria->compare('AsambleaExtraordinaria_idAsambleaExtraordinaria',$this->AsambleaExtraordinaria_idAsambleaExtraordinaria);
		$criteria->compare('AsambleaOrdinaria_idAsambleaOrdinaria',$this->AsambleaOrdinaria_idAsambleaOrdinaria);
		$criteria->compare('Propietario_Cedula',$this->Propietario_Cedula);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Personaasamblea the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
