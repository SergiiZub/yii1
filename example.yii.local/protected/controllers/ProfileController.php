<?php

/**
 * SiteController is the default controller to handle user requests.
 */
class ProfileController extends CController
{
	/**
	 * Index action is the default action in a controller.
	 */
	public function actionIndex()
	{
		echo 'Hello World';
	}

	public function actionUser()
	{
		echo 'profile';
	}

	public function actionEdit()
	{
		echo 'edit profile';
	}
}