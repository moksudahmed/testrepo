<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Person */

$this->title = $model->personID;
$this->params['breadcrumbs'][] = ['label' => 'People', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="person-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->personID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->personID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'personID',
            'per_firstName',
            'per_middleName',
            'per_lastName',
            'per_dateOfBirth',
            'per_bloodGroup',
            'per_title',
            'per_gender',
            'per_maritalStatus',
            'per_nationality',
            'per_fathersName',
            'per_mothersName',
            'per_spouseName',
            'per_permanentAddress',
            'per_city',
            'per_postCode',
            'per_telephone',
            'per_mobileOne',
            'per_mobileTwo',
            'per_email:email',
            'per_presentAddress',
            'per_computerLiteracy',
            'per_otherActivities',
            'per_nationalID',
            'per_entryDate',
            'ex_per_image',
        ],
    ]) ?>

</div>
