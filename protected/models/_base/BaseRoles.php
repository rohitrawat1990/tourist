<?php

/**
 * This is the model base class for the table "roles".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Roles".
 *
 * Columns in table "roles" available as properties of the model,
 * followed by relations of table "roles" available as properties of the model.
 *
 * @property integer $id
 * @property string $name
 * @property integer $status
 *
 * @property Users[] $users
 */
abstract class BaseRoles extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'roles';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Roles|Roles', $n);
	}

	public static function representingColumn() {
		return 'name';
	}

	public function rules() {
		return array(
			array('status', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>45),
			array('name, status', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, name, status', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'users' => array(self::MANY_MANY, 'Users', 'users_has_roles(roles_id, users_id)'),
		);
	}

	public function pivotModels() {
		return array(
			'users' => 'UsersHasRoles',
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'name' => Yii::t('app', 'Name'),
			'status' => Yii::t('app', 'Status'),
			'users' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('name', $this->name, true);
		$criteria->compare('status', $this->status);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}