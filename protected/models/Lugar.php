<?php

/**
 * This is the model class for table "lugar".
 *
 * The followings are the available columns in table 'lugar':
 * @property integer $idLugar
 * @property string $Tipo
 * @property string $Nombre
 * @property integer $Lugar_idLugar
 *
 * The followings are the available model relations:
 * @property Edificio[] $edificios
 * @property Lugar $lugarIdLugar
 * @property Lugar[] $lugars
 * @property Oficina[] $oficinas
 */
class Lugar extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'lugar';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Tipo, Nombre, Lugar_idLugar', 'required'),
			array('Lugar_idLugar', 'numerical', 'integerOnly'=>true),
			array('Tipo, Nombre', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idLugar, Tipo, Nombre, Lugar_idLugar', 'safe', 'on'=>'search'),
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
			'edificios' => array(self::HAS_MANY, 'Edificio', 'Lugar_idLugar'),
			'lugarIdLugar' => array(self::BELONGS_TO, 'Lugar', 'Lugar_idLugar'),
			'lugars' => array(self::HAS_MANY, 'Lugar', 'Lugar_idLugar'),
			'oficinas' => array(self::HAS_MANY, 'Oficina', 'Lugar_idLugar'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idLugar' => 'Id Lugar',
			'Tipo' => 'Tipo',
			'Nombre' => 'Nombre',
			'Lugar_idLugar' => 'Lugar Id Lugar',
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

		$criteria->compare('idLugar',$this->idLugar);
		$criteria->compare('Tipo',$this->Tipo,true);
		$criteria->compare('Nombre',$this->Nombre,true);
		$criteria->compare('Lugar_idLugar',$this->Lugar_idLugar);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Lugar the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
