<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Employees */

$this->title = $model->employeeid;
$this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employees-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->employeeid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->employeeid], [
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
            'employeeid',
            'emp_joiningDate',
            'emp_leaveDate',
            'ex_emp_active:boolean',
            'emp_referenceNo',
            'emp_computerLiteracy',
            'emp_otherActivities',
            'emp_personalStatment:ntext',
            'emp_criminalConviction:boolean',
            'emp_convictionDetails:ntext',
            'emp_passportNo',
            'emp_drivingLicenseNo',
        ],
    ]) ?>

</div>
