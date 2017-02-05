<?php

/**
 * Created by PhpStorm.
 * User: Серега
 * Date: 04.02.2017
 * Time: 15:45
 * extends CActiveRecord
 */
class My extends CActiveRecord
{

public $id;
    public $first_name;
    public $last_name;
    public $email;
    public $password;
    public $role;
    public $is_active;

    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
    public function tableName()
    {
        return '{{users}}';   // название нашей таблицы в базе данных
    }


    public function loginForm(){
        return 'form login';
    }
    
    public function registrationForm(){
        return 'registration';
    }

}