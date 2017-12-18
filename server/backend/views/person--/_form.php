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

    <?= $form->field($model, 'per_firstName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'per_middleName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'per_lastName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'per_dateOfBirth')->textInput() ?>

    <?= $form->field($model, 'per_bloodGroup')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'per_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'per_gender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'per_maritalStatus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'per_nationality')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'per_fathersName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'per_mothersName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'per_spouseName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'per_permanentAddress')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'per_city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'per_postCode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'per_telephone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'per_mobileOne')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'per_mobileTwo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'per_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'per_presentAddress')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'per_computerLiteracy')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'per_otherActivities')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'per_nationalID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'per_entryDate')->textInput() ?>

    <?= $form->field($model, 'ex_per_image')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
