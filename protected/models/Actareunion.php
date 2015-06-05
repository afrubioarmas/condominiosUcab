<?php

/**
 * This is the model class for table "actareunion".
 *
 * The followings are the available columns in table 'actareunion':
 * @property integer $idActaReunion
 * @property string $Fecha
 * @property string $Tipo
 * @property string $Motivo
 * @property integer $Llamado
 * @property integer $Edificio_RIF
 * @property integer $Oficina_idOficina
 * @property integer $JuntaCondominio_idJuntaCondominio
 * @property integer $TrabajadorEmpresa_Cedula
 *
 * The followings are the available model relations:
 * @property Edificio $edificioRIF
 * @property Oficina $oficinaIdOficina
 * @property Juntacondominio $juntaCondominioIdJuntaCondominio
 * @property Trabajadorempresa $trabajadorEmpresaCedula
 * @property Horario[] $horarios
 */
class Actareunion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'actareunion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Fecha, Tipo, Motivo, Llamado, Edificio_RIF, Oficina_idOficina,  JuntaCondominio_idJuntaCondominio, TrabajadorEmpresa_Cedula', 'required'),
			array('Llamado, Edificio_RIF, Oficina_idOficina,  JuntaCondominio_idJuntaCondominio, TrabajadorEmpresa_Cedula', 'numerical', 'integerOnly'=>true),
			array('Tipo, Motivo', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idActaReunion, Fecha, Tipo, Motivo, Llamado, Edificio_RIF, Oficina_idOficina, JuntaCondominio_idJuntaCondominio, TrabajadorEmpresa_Cedula', 'safe', 'on'=>'search'),
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
			'oficinaIdOficina' => array(self::BELONGS_TO, 'Oficina', 'Oficina_idOficina'),
			'juntaCondominioIdJuntaCondominio' => array(self::BELONGS_TO, 'Juntacondominio', 'JuntaCondominio_idJuntaCondominio'),
			'trabajadorEmpresaCedula' => array(self::BELONGS_TO, 'Trabajadorempresa', 'TrabajadorEmpresa_Cedula'),
			'horarios' => array(self::HAS_MANY, 'Horario', 'ActaReunion_idActaReunion'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idActaReunion' => 'Id Acta Reunion',
			'Fecha' => 'Fecha',
			'Tipo' => 'Tipo',
			'Motivo' => 'Motivo',
			'Llamado' => 'Llamado',
			'Edificio_RIF' => 'Edificio Rif',
			'Oficina_idOficina' => 'Oficina Id Oficina',
			'JuntaCondominio_idJuntaCondominio' => 'Junta Condominio Id Junta Condominio',
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

		$criteria->compare('idActaReunion',$this->idActaReunion);
		$criteria->compare('Fecha',$this->Fecha,true);
		$criteria->compare('Tipo',$this->Tipo,true);
		$criteria->compare('Motivo',$this->Motivo,true);
		$criteria->compare('Llamado',$this->Llamado);
		$criteria->compare('Edificio_RIF',$this->Edificio_RIF);
		$criteria->compare('Oficina_idOficina',$this->Oficina_idOficina);
		$criteria->compare('JuntaCondominio_idJuntaCondominio',$this->JuntaCondominio_idJuntaCondominio);
		$criteria->compare('TrabajadorEmpresa_Cedula',$this->TrabajadorEmpresa_Cedula);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Actareunion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
