<?php

//error reports
/*
if (PHP_VERSION_ID >= 50400) {
    error_reporting(E_ALL - E_STRICT - E_DEPRECATED);
} else {
    error_reporting(E_ALL);
}
*/

define('YII_DEBUG', 1);
define('YII_DEV', 1);

// include Yii bootstrap file
require_once(dirname(__FILE__).'/../framework/yii.php');

$config=dirname(__FILE__).'/protected/config/main.php';
//echo '<pre>';
//var_dump($config['basePath']);
//die;
// create a Web application instance and run
Yii::createWebApplication($config)->run();