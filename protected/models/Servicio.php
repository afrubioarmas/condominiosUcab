<?php

/**
 * This is the model class for table "servicio".
 *
 * The followings are the available columns in table 'servicio':
 * @property integer $idServicio
 * @property string $Descripcion
 * @property integer $Monto
 * @property integer $Proveedor_RIF
 *
 * The followings are the available model relations:
 * @property Proveedor $proveedorRIF
 * @property Trabajo[] $trabajos
 */
class Servicio extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'servicio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Descripcion, Monto, Proveedor_RIF', 'required'),
			array('Monto, Proveedor_RIF', 'numerical', 'integerOnly'=>true),
			array('Descripcion', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idServicio, Descripcion, Monto, Proveedor_RIF', 'safe', 'on'=>'search'),
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
			'proveedorRIF' => array(self::BELONGS_TO, 'Proveedor', 'Proveedor_RIF'),
			'trabajos' => array(self::HAS_MANY, 'Trabajo', 'Servicio_idServicio'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idServicio' => 'Id Servicio',
			'Descripcion' => 'Descripcion',
			'Monto' => 'Monto',
			'Proveedor_RIF' => 'Proveedor Rif',
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

		$criteria->compare('idServicio',$this->idServicio);
		$criteria->compare('Descripcion',$this->Descripcion,true);
		$criteria->compare('Monto',$this->Monto);
		$criteria->compare('Proveedor_RIF',$this->Proveedor_RIF);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Servicio the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
