<?php

/**
 * This is the model class for table "piso".
 *
 * The followings are the available columns in table 'piso':
 * @property integer $idPiso
 * @property integer $Edificio_RIF
 * @property integer $NumeroDePiso
 *
 * The followings are the available model relations:
 * @property Apartamento[] $apartamentos
 * @property Edificio $edificioRIF
 */
class Piso extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'piso';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idPiso, Edificio_RIF', 'required'),
			array('idPiso, Edificio_RIF, NumeroDePiso', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idPiso, Edificio_RIF, NumeroDePiso', 'safe', 'on'=>'search'),
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
			'apartamentos' => array(self::HAS_MANY, 'Apartamento', 'Piso_idPiso'),
			'edificioRIF' => array(self::BELONGS_TO, 'Edificio', 'Edificio_RIF'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idPiso' => 'Id Piso',
			'Edificio_RIF' => 'Edificio Rif',
			'NumeroDePiso' => 'Numero De Piso',
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

		$criteria->compare('idPiso',$this->idPiso);
		$criteria->compare('Edificio_RIF',$this->Edificio_RIF);
		$criteria->compare('NumeroDePiso',$this->NumeroDePiso);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Piso the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
