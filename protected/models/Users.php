<?php

Yii::import('application.models._base.BaseUsers');

class Users extends BaseUsers {

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public $confirm_password;

    public function rules() {
        return array(
            array('user_name,confirm_password,password', 'required'),
            array('confirm_password', 'compare', 'compareAttribute' => 'password', 'message' => "Passwords don't match"),
            array("user_name", 'email'),
            array('user_name', 'unique', 'message' => 'Email already exists!'),
            array('status', 'numerical', 'integerOnly' => true),
            array('user_name, activation_key', 'length', 'max' => 150),
            array('last_visit_time, create_time', 'safe'),
            array('user_name, password, activation_key, last_visit_time, ip_address, create_time, status', 'default', 'setOnEmpty' => true, 'value' => null),
            array('id, user_name, password, activation_key, last_visit_time, ip_address, create_time, status', 'safe', 'on' => 'search'),
        );
    }

}
