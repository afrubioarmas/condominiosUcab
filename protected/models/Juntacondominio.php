<?php

/**
 * This is the model class for table "juntacondominio".
 *
 * The followings are the available columns in table 'juntacondominio':
 * @property integer $idJuntaCondominio
 * @property integer $Edificio_RIF
 *
 * The followings are the available model relations:
 * @property Actareunion[] $actareunions
 * @property Atencion[] $atencions
 * @property Documentocondominio[] $documentocondominios
 * @property Edificio $edificioRIF
 */
class Juntacondominio extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'juntacondominio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Edificio_RIF', 'required'),
			array('Edificio_RIF', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idJuntaCondominio, Edificio_RIF', 'safe', 'on'=>'search'),
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
			'actareunions' => array(self::HAS_MANY, 'Actareunion', 'JuntaCondominio_idJuntaCondominio'),
			'atencions' => array(self::HAS_MANY, 'Atencion', 'JuntaCondominio_idJuntaCondominio'),
			'documentocondominios' => array(self::HAS_MANY, 'Documentocondominio', 'JuntaCondominio_idJuntaCondominio'),
			'edificioRIF' => array(self::BELONGS_TO, 'Edificio', 'Edificio_RIF'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idJuntaCondominio' => 'Id Junta Condominio',
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

		$criteria->compare('idJuntaCondominio',$this->idJuntaCondominio);
		$criteria->compare('Edificio_RIF',$this->Edificio_RIF);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Juntacondominio the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
