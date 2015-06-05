<?php

/**
 * This is the model class for table "horario".
 *
 * The followings are the available columns in table 'horario':
 * @property integer $idHorario
 * @property integer $HoraInicio
 * @property integer $HoraFin
 * @property string $Dia
 * @property integer $Oficina_idOficina
 * @property integer $Oficina_Empresa_RIF
 * @property integer $TrabajadorEmpresa_Cedula
 * @property integer $TrabajadorEmpresa_Oficina_idOficina
 * @property integer $TrabajadorEmpresa_Oficina_Empresa_RIF
 * @property integer $ActaReunion_idActaReunion
 * @property integer $ActaReunion_JuntaCondominio_idJuntaCondominio
 * @property integer $ActaReunion_JuntaCondominio_Edificio_RIF
 * @property integer $ActaReunion_TrabajadorEmpresa_Cedula
 * @property integer $AsambleaOrdinaria_idAsambleaOrdinaria
 * @property integer $AsambleaExtraordinaria_idAsambleaExtraordinaria
 *
 * The followings are the available model relations:
 * @property Oficina $oficinaIdOficina
 * @property Trabajadorempresa $trabajadorEmpresaCedula
 * @property Actareunion $actaReunionIdActaReunion
 * @property Asambleaordinaria $asambleaOrdinariaIdAsambleaOrdinaria
 * @property Asambleaextraordinaria $asambleaExtraordinariaIdAsambleaExtraordinaria
 */
class Horario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'horario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('HoraInicio, HoraFin, Dia', 'required'),
			array('HoraInicio, HoraFin, Oficina_idOficina, Oficina_Empresa_RIF, TrabajadorEmpresa_Cedula, TrabajadorEmpresa_Oficina_idOficina, TrabajadorEmpresa_Oficina_Empresa_RIF, ActaReunion_idActaReunion, ActaReunion_JuntaCondominio_idJuntaCondominio, ActaReunion_JuntaCondominio_Edificio_RIF, ActaReunion_TrabajadorEmpresa_Cedula, AsambleaOrdinaria_idAsambleaOrdinaria, AsambleaExtraordinaria_idAsambleaExtraordinaria', 'numerical', 'integerOnly'=>true),
			array('Dia', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idHorario, HoraInicio, HoraFin, Dia, Oficina_idOficina, Oficina_Empresa_RIF, TrabajadorEmpresa_Cedula, TrabajadorEmpresa_Oficina_idOficina, TrabajadorEmpresa_Oficina_Empresa_RIF, ActaReunion_idActaReunion, ActaReunion_JuntaCondominio_idJuntaCondominio, ActaReunion_JuntaCondominio_Edificio_RIF, ActaReunion_TrabajadorEmpresa_Cedula, AsambleaOrdinaria_idAsambleaOrdinaria, AsambleaExtraordinaria_idAsambleaExtraordinaria', 'safe', 'on'=>'search'),
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
			'oficinaIdOficina' => array(self::BELONGS_TO, 'Oficina', 'Oficina_idOficina'),
			'trabajadorEmpresaCedula' => array(self::BELONGS_TO, 'Trabajadorempresa', 'TrabajadorEmpresa_Cedula'),
			'actaReunionIdActaReunion' => array(self::BELONGS_TO, 'Actareunion', 'ActaReunion_idActaReunion'),
			'asambleaOrdinariaIdAsambleaOrdinaria' => array(self::BELONGS_TO, 'Asambleaordinaria', 'AsambleaOrdinaria_idAsambleaOrdinaria'),
			'asambleaExtraordinariaIdAsambleaExtraordinaria' => array(self::BELONGS_TO, 'Asambleaextraordinaria', 'AsambleaExtraordinaria_idAsambleaExtraordinaria'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idHorario' => 'Id Horario',
			'HoraInicio' => 'Hora Inicio',
			'HoraFin' => 'Hora Fin',
			'Dia' => 'Dia',
			'Oficina_idOficina' => 'Oficina Id Oficina',
			'Oficina_Empresa_RIF' => 'Oficina Empresa Rif',
			'TrabajadorEmpresa_Cedula' => 'Trabajador Empresa Cedula',
			'TrabajadorEmpresa_Oficina_idOficina' => 'Trabajador Empresa Oficina Id Oficina',
			'TrabajadorEmpresa_Oficina_Empresa_RIF' => 'Trabajador Empresa Oficina Empresa Rif',
			'ActaReunion_idActaReunion' => 'Acta Reunion Id Acta Reunion',
			'ActaReunion_JuntaCondominio_idJuntaCondominio' => 'Acta Reunion Junta Condominio Id Junta Condominio',
			'ActaReunion_JuntaCondominio_Edificio_RIF' => 'Acta Reunion Junta Condominio Edificio Rif',
			'ActaReunion_TrabajadorEmpresa_Cedula' => 'Acta Reunion Trabajador Empresa Cedula',
			'AsambleaOrdinaria_idAsambleaOrdinaria' => 'Asamblea Ordinaria Id Asamblea Ordinaria',
			'AsambleaExtraordinaria_idAsambleaExtraordinaria' => 'Asamblea Extraordinaria Id Asamblea Extraordinaria',
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

		$criteria->compare('idHorario',$this->idHorario);
		$criteria->compare('HoraInicio',$this->HoraInicio);
		$criteria->compare('HoraFin',$this->HoraFin);
		$criteria->compare('Dia',$this->Dia,true);
		$criteria->compare('Oficina_idOficina',$this->Oficina_idOficina);
		$criteria->compare('Oficina_Empresa_RIF',$this->Oficina_Empresa_RIF);
		$criteria->compare('TrabajadorEmpresa_Cedula',$this->TrabajadorEmpresa_Cedula);
		$criteria->compare('TrabajadorEmpresa_Oficina_idOficina',$this->TrabajadorEmpresa_Oficina_idOficina);
		$criteria->compare('TrabajadorEmpresa_Oficina_Empresa_RIF',$this->TrabajadorEmpresa_Oficina_Empresa_RIF);
		$criteria->compare('ActaReunion_idActaReunion',$this->ActaReunion_idActaReunion);
		$criteria->compare('ActaReunion_JuntaCondominio_idJuntaCondominio',$this->ActaReunion_JuntaCondominio_idJuntaCondominio);
		$criteria->compare('ActaReunion_JuntaCondominio_Edificio_RIF',$this->ActaReunion_JuntaCondominio_Edificio_RIF);
		$criteria->compare('ActaReunion_TrabajadorEmpresa_Cedula',$this->ActaReunion_TrabajadorEmpresa_Cedula);
		$criteria->compare('AsambleaOrdinaria_idAsambleaOrdinaria',$this->AsambleaOrdinaria_idAsambleaOrdinaria);
		$criteria->compare('AsambleaExtraordinaria_idAsambleaExtraordinaria',$this->AsambleaExtraordinaria_idAsambleaExtraordinaria);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Horario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
