<?php

/**
 * This is the model class for table "{{uczen}}".
 *
 * The followings are the available columns in table '{{uczen}}':
 * @property integer $id
 * @property string $imie
 * @property string $nazwisko
 * @property string $pesel
 * @property string $miejscowosc
 * @property string $ulica
 */
class Uczen extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{uczen}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('imie, nazwisko, pesel, miejscowosc, ulica', 'required'),
			array('imie, nazwisko, miejscowosc, ulica', 'length', 'max'=>128),
			array('pesel', 'length', 'max'=>11),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, imie, nazwisko, pesel, miejscowosc, ulica', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'imie' => 'Imie',
			'nazwisko' => 'Nazwisko',
			'pesel' => 'Pesel',
			'miejscowosc' => 'Miejscowosc',
			'ulica' => 'Ulica',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('imie',$this->imie,true);
		$criteria->compare('nazwisko',$this->nazwisko,true);
		$criteria->compare('pesel',$this->pesel,true);
		$criteria->compare('miejscowosc',$this->miejscowosc,true);
		$criteria->compare('ulica',$this->ulica,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Uczen the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
