<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Smsevent $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="smsevent-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deleted')->textInput() ?>

    <?= $form->field($model, 'date_entered')->textInput() ?>

    <?= $form->field($model, 'date_modified')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shortname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'parent_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'syllabus_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'smsdocument_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'category')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'school_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vacation_type')->textInput() ?>

    <?= $form->field($model, 'vacation_count')->textInput() ?>

    <?= $form->field($model, 'subtype')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'event_credit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'schedule_reminder')->textInput() ?>

    <?= $form->field($model, 'custom_var31')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'custom_var32')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'custom_var33')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'custom_var34')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'custom_var35')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'custom_var36')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'custom_var37')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'custom_var38')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'custom_var39')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'custom_var40')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'common_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'assigned_user_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nendo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'course_category')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'curriculum_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'curriculum_instance_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'seat_display')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'teiin')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
