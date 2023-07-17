<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\SmseventSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="smsevent-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'deleted') ?>

    <?= $form->field($model, 'date_entered') ?>

    <?= $form->field($model, 'date_modified') ?>

    <?= $form->field($model, 'modified_user_id') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'name') ?>

    <?php // echo $form->field($model, 'shortname') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'parent_id') ?>

    <?php // echo $form->field($model, 'syllabus_id') ?>

    <?php // echo $form->field($model, 'smsdocument_id') ?>

    <?php // echo $form->field($model, 'category') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'school_id') ?>

    <?php // echo $form->field($model, 'vacation_type') ?>

    <?php // echo $form->field($model, 'vacation_count') ?>

    <?php // echo $form->field($model, 'subtype') ?>

    <?php // echo $form->field($model, 'event_credit') ?>

    <?php // echo $form->field($model, 'schedule_reminder') ?>

    <?php // echo $form->field($model, 'custom_var31') ?>

    <?php // echo $form->field($model, 'custom_var32') ?>

    <?php // echo $form->field($model, 'custom_var33') ?>

    <?php // echo $form->field($model, 'custom_var34') ?>

    <?php // echo $form->field($model, 'custom_var35') ?>

    <?php // echo $form->field($model, 'custom_var36') ?>

    <?php // echo $form->field($model, 'custom_var37') ?>

    <?php // echo $form->field($model, 'custom_var38') ?>

    <?php // echo $form->field($model, 'custom_var39') ?>

    <?php // echo $form->field($model, 'custom_var40') ?>

    <?php // echo $form->field($model, 'common_code') ?>

    <?php // echo $form->field($model, 'assigned_user_id') ?>

    <?php // echo $form->field($model, 'nendo') ?>

    <?php // echo $form->field($model, 'course_category') ?>

    <?php // echo $form->field($model, 'curriculum_id') ?>

    <?php // echo $form->field($model, 'contact_id') ?>

    <?php // echo $form->field($model, 'curriculum_instance_id') ?>

    <?php // echo $form->field($model, 'seat_display') ?>

    <?php // echo $form->field($model, 'teiin') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
