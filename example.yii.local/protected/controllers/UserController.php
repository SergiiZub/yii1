<?php

class UserController extends CController
{
    // Действие по умолчанию. Выведем список пользователей.
    public function actionIndex()
    {
        // Получить список всех зарегестрированных пользователей...
        $users = Users::model()->findAll();

        // ...и вывести их
        $this->render('users_list', array('users'=>$users));
    }

    // Действие регистрации
    public function actionSignup()
    {
        // Создать модель и указать ей, что используется сценарий регистрации
        $user = new Users(Users::SCENARIO_SIGNUP);

        // Если пришли данные для сохранения
        if(isset($_POST['Users']))
        {
//            die('here');
            // Безопасное присваивание значений атрибутам
            $user->attributes = $_POST['Users'];

            // Проверка данных
            if($user->validate())
            {
                // Сохранить полученные данные
                // false нужен для того, чтобы не производить повторную проверку
//                $res =
                    $user->save(false);
//                echo '<pre>';
//var_dump($res);die;
                // Перенаправить на список зарегестрированных пользователей
                $this->redirect($this->createUrl('user/'));
            }
        }

        // Вывести форму
        $this->render('form_signup', array('form'=>$user));
//        $this->render('form_signup', array('user'=>$user));
    }
}