<?php

use app\models\Smsevent;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\SmseventSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Smsevents';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="smsevent-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Smsevent', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'deleted',
            'date_entered',
            'date_modified',
            'modified_user_id',
            //'created_by',
            //'name',
            //'shortname',
            //'description:ntext',
            //'parent_id',
            //'syllabus_id',
            //'smsdocument_id',
            //'category',
            //'status',
            //'school_id',
            //'vacation_type',
            //'vacation_count',
            //'subtype',
            //'event_credit',
            //'schedule_reminder',
            //'custom_var31:ntext',
            //'custom_var32:ntext',
            //'custom_var33:ntext',
            //'custom_var34:ntext',
            //'custom_var35:ntext',
            //'custom_var36:ntext',
            //'custom_var37:ntext',
            //'custom_var38:ntext',
            //'custom_var39:ntext',
            //'custom_var40:ntext',
            //'common_code',
            //'assigned_user_id',
            //'nendo',
            //'course_category',
            //'curriculum_id',
            //'contact_id',
            //'curriculum_instance_id',
            //'seat_display',
            //'teiin',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Smsevent $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
