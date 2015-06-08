<?php

/**
 * This is the model class for table "asambleaordinaria".
 *
 * The followings are the available columns in table 'asambleaordinaria':
 * @property integer $idAsambleaOrdinaria
 * @property string $Fecha
 * @property string $Motivo
 * @property integer $PeriodoEnDias
 * @property integer $TrabajadorEmpresa_Cedula
 *
 * The followings are the available model relations:
 * @property Trabajadorempresa $trabajadorEmpresaCedula
 * @property Horario[] $horarios
 * @property Notificacionapartamento[] $notificacionapartamentos
 * @property Personaasamblea[] $personaasambleas
 */
class Asambleaordinaria extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'asambleaordinaria';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Fecha, Motivo, PeriodoEnDias, TrabajadorEmpresa_Cedula', 'required'),
			array('PeriodoEnDias, TrabajadorEmpresa_Cedula, llamado', 'numerical', 'integerOnly'=>true),
			array('Motivo', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idAsambleaOrdinaria, Fecha, Motivo, PeriodoEnDias, TrabajadorEmpresa_Cedula, llamado', 'safe', 'on'=>'search'),
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
			'trabajadorEmpresaCedula' => array(self::BELONGS_TO, 'Trabajadorempresa', 'TrabajadorEmpresa_Cedula'),
			'horarios' => array(self::HAS_MANY, 'Horario', 'AsambleaOrdinaria_idAsambleaOrdinaria'),
			'notificacionapartamentos' => array(self::HAS_MANY, 'Notificacionapartamento', 'AsambleaOrdinaria_idAsambleaOrdinaria'),
			'personaasambleas' => array(self::HAS_MANY, 'Personaasamblea', 'AsambleaOrdinaria_idAsambleaOrdinaria'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idAsambleaOrdinaria' => 'Id Asamblea Ordinaria',
			'Fecha' => 'Fecha',
			'Motivo' => 'Motivo',
			'PeriodoEnDias' => 'Periodo En Dias',
			'TrabajadorEmpresa_Cedula' => 'Trabajador Empresa Cedula',
			'llamado' => 'Llamado',
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

		$criteria->compare('idAsambleaOrdinaria',$this->idAsambleaOrdinaria);
		$criteria->compare('Fecha',$this->Fecha,true);
		$criteria->compare('Motivo',$this->Motivo,true);
		$criteria->compare('PeriodoEnDias',$this->PeriodoEnDias);
		$criteria->compare('TrabajadorEmpresa_Cedula',$this->TrabajadorEmpresa_Cedula);
		$criteria->compare('llamado',$this->llamado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Asambleaordinaria the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
