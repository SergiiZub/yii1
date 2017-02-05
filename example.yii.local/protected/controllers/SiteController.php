<?php

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

		echo 'Hello World';
		$this->render('index');
	}

	public function actionLogin()
	{
		echo 'please login';
//		$model = new My;
		$model = My::model();
//		$model=$this->loadModel();
		$this->render('login', $model->loginForm());
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