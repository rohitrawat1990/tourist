<?php

Yii::import('application.models._base.BaseUsersHasRoles');

class UsersHasRoles extends BaseUsersHasRoles
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}