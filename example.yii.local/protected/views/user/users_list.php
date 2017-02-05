<?php
/**
 * Created by PhpStorm.
 * User: Серега
 * Date: 05.02.2017
 * Time: 21:59
 */
?>
<h1>Registered users</h1>
<?php foreach ($users as $user) :?>
    <span>User name: <?=ucfirst($user->first_name).' '.ucfirst($user->last_name)?><br></span>
    <span>E-mail:<?=$user->email?><br></span>
    <span>Registration date: <?=$user->date_registration?><br></span>
    <hr>
<?php endforeach;?>
