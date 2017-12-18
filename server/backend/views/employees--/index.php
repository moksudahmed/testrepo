<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EmployeesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Employees';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employees-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Employees', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'employeeid',
            'emp_joiningDate',
            'emp_leaveDate',
            'ex_emp_active:boolean',
            'emp_referenceNo',
            // 'emp_computerLiteracy',
            // 'emp_otherActivities',
            // 'emp_personalStatment:ntext',
            // 'emp_criminalConviction:boolean',
            // 'emp_convictionDetails:ntext',
            // 'emp_passportNo',
            // 'emp_drivingLicenseNo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
