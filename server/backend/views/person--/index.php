<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PersonSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'People';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="person-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Person', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'personID',
            'per_firstName',
            'per_middleName',
            'per_lastName',
            'per_dateOfBirth',
            // 'per_bloodGroup',
            // 'per_title',
            // 'per_gender',
            // 'per_maritalStatus',
            // 'per_nationality',
            // 'per_fathersName',
            // 'per_mothersName',
            // 'per_spouseName',
            // 'per_permanentAddress',
            // 'per_city',
            // 'per_postCode',
            // 'per_telephone',
            // 'per_mobileOne',
            // 'per_mobileTwo',
            // 'per_email:email',
            // 'per_presentAddress',
            // 'per_computerLiteracy',
            // 'per_otherActivities',
            // 'per_nationalID',
            // 'per_entryDate',
            // 'ex_per_image',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
