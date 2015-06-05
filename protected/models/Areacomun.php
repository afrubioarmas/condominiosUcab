<?php

/**
 * This is the model class for table "areacomun".
 *
 * The followings are the available columns in table 'areacomun':
 * @property integer $idAreaComun
 * @property string $Descripcion
 * @property integer $Edificio_RIF
 *
 * The followings are the available model relations:
 * @property Edificio $edificioRIF
 * @property Inspeccionmantenimiento[] $inspeccionmantenimientos
 */
class Areacomun extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'areacomun';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Descripcion, Edificio_RIF', 'required'),
			array('Edificio_RIF', 'numerical', 'integerOnly'=>true),
			array('Descripcion', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idAreaComun, Descripcion, Edificio_RIF', 'safe', 'on'=>'search'),
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
			'inspeccionmantenimientos' => array(self::HAS_MANY, 'Inspeccionmantenimiento', 'AreaComun_idAreaComun'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idAreaComun' => 'Id Area Comun',
			'Descripcion' => 'Descripcion',
			'Edificio_RIF' => 'Edificio Rif',
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

		$criteria->compare('idAreaComun',$this->idAreaComun);
		$criteria->compare('Descripcion',$this->Descripcion,true);
		$criteria->compare('Edificio_RIF',$this->Edificio_RIF);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Areacomun the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
