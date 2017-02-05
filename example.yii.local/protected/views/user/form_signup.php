<?php
/**
 * @param $form object
 * @param $user object
 */
echo '<pre>';
var_dump($_POST);
echo '</pre>';
///*
?>
<hr>
<div class="container">


<div class="form">
    <?=CHtml::form();?>
    <?=CHtml::errorSummary($form)?>
<!--    --><?//=$form->getErrors();?>
    <div class="row">
        <?=CHtml::activeLabel($form, 'first_name')?>
        <?=CHtml::activeTextField($form, 'first_name')?>
    </div>
    <div class="row">
        <?=CHtml::activeLabel($form, 'last_name')?>
        <?=CHtml::activeTextField($form, 'last_name')?>
    </div>
    <div class="row">
        <?=CHtml::activeLabel($form, 'email')?>
        <?=CHtml::activeEmailField($form, 'email')?>
    </div>
    <div class="row">
        <?=CHtml::activeLabel($form, 'password')?>
        <?=CHtml::activePasswordField($form, 'password')?>
    </div>
    <div class="row">
        <?=CHtml::activeLabel($form, 'confirm_password')?>
        <?=CHtml::activePasswordField($form, 'confirm_password')?>
    </div>
    <div class="row submit">
        <?=CHtml::submitButton('sign up')?>
    </div>
    <?=CHtml::endForm();?>
</div>

</div>
<hr>

<?php
//*/
/*
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm',[
    'id'=>'horizontalForm',
    'type'=>'horizontal',
    'enableClientValidation'=>false,
    'clientOptions'=>[
        'validateOnSubmit'=>true,
        'hideErrorMessage'=>false,
    ],
]);
?>
<?=$form->errorSummary($user)?>
<?=$form->textField($user,'first_name')?>
<?php $this->endWidget();?>
*/