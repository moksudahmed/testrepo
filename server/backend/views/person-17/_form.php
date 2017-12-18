<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Person */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="person-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'personID')->textInput() ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'firstName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lastName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dateOfBirth')->textInput() ?>

    <?= $form->field($model, 'gender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'presentAddress')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'presentcity')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parmanentAddress')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'oldcity')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emailAddress')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'maritalStatus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mobileNo')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
