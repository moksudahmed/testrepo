<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Employees */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employees-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'employeeid')->textInput() ?>

    <?= $form->field($model, 'emp_joiningDate')->textInput() ?>

    <?= $form->field($model, 'emp_leaveDate')->textInput() ?>

    <?= $form->field($model, 'ex_emp_active')->checkbox() ?>

    <?= $form->field($model, 'emp_referenceNo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emp_computerLiteracy')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emp_otherActivities')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emp_personalStatment')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'emp_criminalConviction')->checkbox() ?>

    <?= $form->field($model, 'emp_convictionDetails')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'emp_passportNo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emp_drivingLicenseNo')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
