<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PerosnSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="person-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'personID') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'firstName') ?>

    <?= $form->field($model, 'lastName') ?>

    <?= $form->field($model, 'dateOfBirth') ?>

    <?php // echo $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'presentAddress') ?>

    <?php // echo $form->field($model, 'presentcity') ?>

    <?php // echo $form->field($model, 'parmanentAddress') ?>

    <?php // echo $form->field($model, 'oldcity') ?>

    <?php // echo $form->field($model, 'emailAddress') ?>

    <?php // echo $form->field($model, 'maritalStatus') ?>

    <?php // echo $form->field($model, 'mobileNo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
