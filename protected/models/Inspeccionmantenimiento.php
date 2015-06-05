<?php

/**
 * This is the model class for table "inspeccionmantenimiento".
 *
 * The followings are the available columns in table 'inspeccionmantenimiento':
 * @property integer $idInspeccionMantenimiento
 * @property string $Descripcion
 * @property integer $Inspeccion
 * @property integer $Mantenimiento
 * @property string $Fecha
 * @property integer $AreaComun_idAreaComun
 * @property integer $TrabajadorEdificio_Cedula
 *
 * The followings are the available model relations:
 * @property Areacomun $areaComunIdAreaComun
 * @property Trabajadoredificio $trabajadorEdificioCedula
 */
class Inspeccionmantenimiento extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'inspeccionmantenimiento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Descripcion, Inspeccion, Mantenimiento, Fecha, AreaComun_idAreaComun, TrabajadorEdificio_Cedula', 'required'),
			array('Inspeccion, Mantenimiento, AreaComun_idAreaComun, TrabajadorEdificio_Cedula', 'numerical', 'integerOnly'=>true),
			array('Descripcion', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idInspeccionMantenimiento, Descripcion, Inspeccion, Mantenimiento, Fecha, AreaComun_idAreaComun, TrabajadorEdificio_Cedula', 'safe', 'on'=>'search'),
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
			'areaComunIdAreaComun' => array(self::BELONGS_TO, 'Areacomun', 'AreaComun_idAreaComun'),
			'trabajadorEdificioCedula' => array(self::BELONGS_TO, 'Trabajadoredificio', 'TrabajadorEdificio_Cedula'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idInspeccionMantenimiento' => 'Id Inspeccion Mantenimiento',
			'Descripcion' => 'Descripcion',
			'Inspeccion' => 'Inspeccion',
			'Mantenimiento' => 'Mantenimiento',
			'Fecha' => 'Fecha',
			'AreaComun_idAreaComun' => 'Area Comun Id Area Comun',
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

		$criteria->compare('idInspeccionMantenimiento',$this->idInspeccionMantenimiento);
		$criteria->compare('Descripcion',$this->Descripcion,true);
		$criteria->compare('Inspeccion',$this->Inspeccion);
		$criteria->compare('Mantenimiento',$this->Mantenimiento);
		$criteria->compare('Fecha',$this->Fecha,true);
		$criteria->compare('AreaComun_idAreaComun',$this->AreaComun_idAreaComun);
		$criteria->compare('TrabajadorEdificio_Cedula',$this->TrabajadorEdificio_Cedula);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Inspeccionmantenimiento the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
