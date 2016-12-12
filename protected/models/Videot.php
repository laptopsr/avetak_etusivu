<?php

/**
 * This is the model class for table "videot".
 *
 * The followings are the available columns in table 'videot':
 * @property integer $id
 * @property string $time
 * @property string $embed_code
 * @property string $kuvaus
 */
class Videot extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Videot the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'videot';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('embed_code, kuvaus', 'required'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, time, embed_code, kuvaus', 'safe', 'on'=>'search'),
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
			'time' => 'Time',
			'embed_code' => 'Embed Code',
			'kuvaus' => 'Kuvaus',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('time',$this->time,true);
		$criteria->compare('embed_code',$this->embed_code,true);
		$criteria->compare('kuvaus',$this->kuvaus,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
