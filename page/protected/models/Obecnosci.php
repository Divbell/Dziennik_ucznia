<?php

/**
 * This is the model class for table "{{obecnosci}}".
 *
 * The followings are the available columns in table '{{obecnosci}}':
 * @property integer $id_obecnosci
 * @property integer $id
 * @property string $obecny
 * @property string $dzien
 *
 * The followings are the available model relations:
 * @property Uczen $id0
 */
class Obecnosci extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{obecnosci}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('dzien', 'required'),
			array('id', 'numerical', 'integerOnly'=>true),
			array('obecny', 'length', 'max'=>1),
            array('dzien', 'date', 'format'=>'yyyy-MM-dd'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_obecnosci, id, obecny, dzien', 'safe', 'on'=>'search'),
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
			'id0' => array(self::HAS_ONE, 'Uczen', 'id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_obecnosci' => 'Id Obecnosci',
			'id' => 'ID',
			'obecny' => 'Obecny',
			'dzien' => 'Dzien',
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

		$criteria->compare('id_obecnosci',$this->id_obecnosci);
		$criteria->compare('id',$this->id);
		$criteria->compare('obecny',$this->obecny,true);
		$criteria->compare('dzien',$this->dzien,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Obecnosci the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
