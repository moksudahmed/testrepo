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

    <?= $form->field($model, 'personID') ?>

    <?= $form->field($model, 'per_firstName') ?>

    <?= $form->field($model, 'per_middleName') ?>

    <?= $form->field($model, 'per_lastName') ?>

    <?= $form->field($model, 'per_dateOfBirth') ?>

    <?php // echo $form->field($model, 'per_bloodGroup') ?>

    <?php // echo $form->field($model, 'per_title') ?>

    <?php // echo $form->field($model, 'per_gender') ?>

    <?php // echo $form->field($model, 'per_maritalStatus') ?>

    <?php // echo $form->field($model, 'per_nationality') ?>

    <?php // echo $form->field($model, 'per_fathersName') ?>

    <?php // echo $form->field($model, 'per_mothersName') ?>

    <?php // echo $form->field($model, 'per_spouseName') ?>

    <?php // echo $form->field($model, 'per_permanentAddress') ?>

    <?php // echo $form->field($model, 'per_city') ?>

    <?php // echo $form->field($model, 'per_postCode') ?>

    <?php // echo $form->field($model, 'per_telephone') ?>

    <?php // echo $form->field($model, 'per_mobileOne') ?>

    <?php // echo $form->field($model, 'per_mobileTwo') ?>

    <?php // echo $form->field($model, 'per_email') ?>

    <?php // echo $form->field($model, 'per_presentAddress') ?>

    <?php // echo $form->field($model, 'per_computerLiteracy') ?>

    <?php // echo $form->field($model, 'per_otherActivities') ?>

    <?php // echo $form->field($model, 'per_nationalID') ?>

    <?php // echo $form->field($model, 'per_entryDate') ?>

    <?php // echo $form->field($model, 'ex_per_image') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
