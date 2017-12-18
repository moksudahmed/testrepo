<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EmployeesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employees-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'employeeid') ?>

    <?= $form->field($model, 'emp_joiningDate') ?>

    <?= $form->field($model, 'emp_leaveDate') ?>

    <?= $form->field($model, 'ex_emp_active')->checkbox() ?>

    <?= $form->field($model, 'emp_referenceNo') ?>

    <?php // echo $form->field($model, 'emp_computerLiteracy') ?>

    <?php // echo $form->field($model, 'emp_otherActivities') ?>

    <?php // echo $form->field($model, 'emp_personalStatment') ?>

    <?php // echo $form->field($model, 'emp_criminalConviction')->checkbox() ?>

    <?php // echo $form->field($model, 'emp_convictionDetails') ?>

    <?php // echo $form->field($model, 'emp_passportNo') ?>

    <?php // echo $form->field($model, 'emp_drivingLicenseNo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
