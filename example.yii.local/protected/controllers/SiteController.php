<?php

//use \app\models;

/**
 * SiteController is the default controller to handle user requests.
 */
class SiteController extends CController
{
	/**
	 * Index action is the default action in a controller.
	 */
	public function actionIndex()
	{

//        Yii::import('application.models.Users');
        $model = new Users;
/*
        $model->first_name = 'admin';
        $model->email = 'admin@admin';
        $model->last_name = 'admin';
        $model->password = md5('admin');
        $model->role = 1;
        $model->is_active = 1;
        $model->save();
*/
        $users=$model->findAll();

		$this->render('index', ['data'=>$model->loginForm(), 'users'=>$users]);

	}

	public function actionLogin()
	{

        $this->layout = 'login';
		$this->render('login');
	}

	public function actionRegistration()
	{
		echo 'registration';
	}

//	public function actionList()
//	{
//		$models=note::model()->findAll();
//
//		$this->render("list",array(
//			"model"=>$models,
//		));
//	}
}