<?php

/**
 * This is the model base class for the table "photos".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Photos".
 *
 * Columns in table "photos" available as properties of the model,
 * followed by relations of table "photos" available as properties of the model.
 *
 * @property integer $id
 * @property integer $status
 * @property string $create_time
 * @property string $photo_name
 *
 * @property Guides[] $guides
 */
abstract class BasePhotos extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'photos';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Photos|Photoses', $n);
	}

	public static function representingColumn() {
		return 'create_time';
	}

	public function rules() {
		return array(
			array('status', 'numerical', 'integerOnly'=>true),
			array('photo_name', 'length', 'max'=>100),
			array('create_time', 'safe'),
			array('status, create_time, photo_name', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, status, create_time, photo_name', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'guides' => array(self::HAS_MANY, 'Guides', 'photo_id'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'status' => Yii::t('app', 'Status'),
			'create_time' => Yii::t('app', 'Create Time'),
			'photo_name' => Yii::t('app', 'Photo Name'),
			'guides' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('status', $this->status);
		$criteria->compare('create_time', $this->create_time, true);
		$criteria->compare('photo_name', $this->photo_name, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}