<?php
/**
 * Created by PhpStorm.
 * User: Серега
 * Date: 04.02.2017
 * Time: 15:49
 */
?>
<!--<div>-->
<!--    <h5>--><?//=$model?><!--</h5>-->
<!--</div>-->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8" />
    <title>BCORE Admin Dashboard Template | Login Page</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <!-- GLOBAL STYLES -->
    <!-- PAGE LEVEL STYLES -->
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/css/login.css" />
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/plugins/magic/magic.css" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body >

<!-- PAGE CONTENT -->
<div class="container">
    <div class="text-center">
        <img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/img/logo.png" id="logoimg" alt=" Logo" />
    </div>
<?=$content;?>
    <div class="text-center">
        <ul class="list-inline">
            <li><a class="text-muted" href="#login" data-toggle="tab">Login</a></li>
            <li><a class="text-muted" href="#forgot" data-toggle="tab">Forgot Password</a></li>
            <li><a class="text-muted" href="#signup" data-toggle="tab">Signup</a></li>
        </ul>
    </div>


</div>

<!--END PAGE CONTENT -->

<!-- PAGE LEVEL SCRIPTS -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/plugins/jquery-2.0.3.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/plugins/bootstrap/js/bootstrap.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/login.js"></script>
<!--END PAGE LEVEL SCRIPTS -->

</body>
<!-- END BODY -->
</html>
