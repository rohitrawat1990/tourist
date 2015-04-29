<?php

Yii::import('application.models._base.BasePhotos');

class Photos extends BasePhotos
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}