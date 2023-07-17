<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Smsevent $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Smsevents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="smsevent-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'deleted',
            'date_entered',
            'date_modified',
            'modified_user_id',
            'created_by',
            'name',
            'shortname',
            'description:ntext',
            'parent_id',
            'syllabus_id',
            'smsdocument_id',
            'category',
            'status',
            'school_id',
            'vacation_type',
            'vacation_count',
            'subtype',
            'event_credit',
            'schedule_reminder',
            'custom_var31:ntext',
            'custom_var32:ntext',
            'custom_var33:ntext',
            'custom_var34:ntext',
            'custom_var35:ntext',
            'custom_var36:ntext',
            'custom_var37:ntext',
            'custom_var38:ntext',
            'custom_var39:ntext',
            'custom_var40:ntext',
            'common_code',
            'assigned_user_id',
            'nendo',
            'course_category',
            'curriculum_id',
            'contact_id',
            'curriculum_instance_id',
            'seat_display',
            'teiin',
        ],
    ]) ?>

</div>
