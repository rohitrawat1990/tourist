<?php

define('ACTIVE_STATUS', 1);
class skillConfig {
   
    public static function getUploadDir() {
        return '/upload/';
    }

    public static function getImageDir() {
        return YiiBase::getPathOfAlias('webroot') . '/images';
    }

    public static function getImageUrl() {
        return Yii::app()->getBaseUrl() . '/images';
    }

    public static function getCmsContent($pageid, $descriptionid) {
        $value = CmsPageDescription::model()->findByAttributes(array('cms_page_id' => $pageid, 'id' => $descriptionid));
        return $value;
    }

    public static function getCmsContentAlldata($pageid,$descriptionid) {
        $value = CmsPageDescription::model()->findAll('cms_page_id=' . $pageid . ' AND id!=' . $descriptionid);
        return $value;
    }
    public static function getEmailDir() {
        return Yii::app()->getBasePath() . '/views/email/';
    }


}

?>