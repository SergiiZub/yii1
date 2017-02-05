<?php


class ProfileController extends CController
{
	/**
	 * Index action is the default action in a controller.
	 */
	public function actionIndex()
	{
		echo 'Hello World';
	}

	public function actionUser($id)
	{
        $userInfo = $id;
		$this->render('profile', ['userInfo'=>$userInfo]);
//		echo 'profile';
	}

	public function actionEdit()
	{
		echo 'edit profile';
	}
}