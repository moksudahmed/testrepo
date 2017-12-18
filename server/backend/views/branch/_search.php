<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BranchSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="branch-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'address') ?>

    <?= $form->field($model, 'branchName') ?>

    <?= $form->field($model, 'contactNo') ?>

    <?= $form->field($model, 'emailAddress') ?>

    <?= $form->field($model, 'branchID') ?>

    <?php // echo $form->field($model, 'organizationID') ?>

    <?php // echo $form->field($model, 'employeeID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
