<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PersonSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="person-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'firstName') ?>

    <?= $form->field($model, 'lastName') ?>

    <?= $form->field($model, 'dateOfBirth') ?>

    <?= $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'emailAddress') ?>

    <?php // echo $form->field($model, 'mobileNo') ?>

    <?php // echo $form->field($model, 'parmanentAddress') ?>

    <?php // echo $form->field($model, 'parmamentCity') ?>

    <?php // echo $form->field($model, 'maritalStatus') ?>

    <?php // echo $form->field($model, 'type') ?>

    <?php // echo $form->field($model, 'personID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
