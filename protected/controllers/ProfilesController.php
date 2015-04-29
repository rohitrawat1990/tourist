<?php

class ProfilesController extends GxController {

    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id, 'Profiles'),
        ));
    }

    public function actionSignup() {
        $userModel = new Users;
        $model = new Profiles;
        if (isset($_POST['Profiles']) && isset($_POST['Users'])) {
            $model->setAttributes($_POST['Profiles']);
            $userModel->setAttributes($_POST['Users']);
            $validate = $model->validate();
            $validate = $userModel->validate() && $validate;
            if ($validate) {
                $transaction = Yii::app()->db->beginTransaction();
                try {
                    $userModel->setAttribute('password', md5($_POST['Users']['password']));
                    $userModel->setAttribute('status', ACTIVE_STATUS);
                    $userModel->setAttribute('activation_key', guid());
                    $userModel->setAttribute('last_visit_time', date('Y-m-d H:i:s'));
                    $userModel->setAttribute('create_time', date('Y-m-d H:i:s'));
                    $userModel->setAttribute('ip_address', Yii::app()->request->getUserHostAddress());
                    if ($userModel->save(false)) {
                        $userhasrole = new UsersHasRoles;
                        $userhasrole->setAttribute('users_id', $userModel->id);
                        $userhasrole->setAttribute('roles_id', $_POST['Users']['roles']);
                        $userhasrole->save(false);
                        $model->setAttribute('user_id', $userModel->id);
                        $model->save(false);
                    }
                    $transaction->commit();
                } catch (Exception $e) {
                    $transaction->rollback();
                }
            }
        }

        $this->render('_form', array('model' => $model, 'userModel' => $userModel));
    }

    public function actionUpdateProfile() {
        $model = new Profiles;
        $userModel = new Users;
        $this->render('_form', array('model' => $model, 'userModel' => $userModel));
    }

}
