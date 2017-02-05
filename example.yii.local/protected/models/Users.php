<?php


class Users extends CActiveRecord
{

    const SCENARIO_SIGNUP = 'signup';
    public $first_name;
    public $last_name;
    public $email;
    public $password;
    public $confirm_password;
    public $role;
    public $is_active;

    public function attributeNames() {
        return [
            'id' => 'ID',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'E-mail',
            'password' => 'Password',
            'confirm_password' => 'Confirm password',
        ];
    }


    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return '{{users}}';   // название нашей таблицы в базе данных
    }

    public function rules(){
        return [
            ['first_name, last_name, password, confirm_password', 'required', 'on'=>self::SCENARIO_SIGNUP, ],
            ['first_name, last_name', 'length', 'min'=>3, 'max'=>50],
            ['first_name, last_name', 'match', 'pattern'=>'/^[A-z][\w]+$/', ],
            ['email, password', 'required'],
            ['email', 'email'],
            ['email', 'unique'],
            ['email', 'filter', 'filter'=>'mb_strtolower'],
            ['password, confirm_password', 'length', 'min'=>6, 'max'=>30],
            ['password', 'compare', 'compareAttribute'=>'confirm_password', 'on'=>self::SCENARIO_SIGNUP ],
        ];
    }

    public function attributeLabels(){
        return [
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'E-mail',
            'password' => 'Password',
            'confirm_password' => 'Confirm password',
        ];
    }

    protected function beforeSave(){
//var_dump($insert);die;
        if (parent::onBeforeSave('save')){

            if ($this->isNewRecord){
                $this->password = $this->hashPassword($this->password);
            }
            return true;
        }
//        die(__FILE__);
        return false;
    }

    public function hashPassword($password){
        return md5($password);
    }
//
//    public function loginForm(){
//        return 'form login';
//    }
//
//    public function registrationForm(){
//        return 'registration';
//    }

}