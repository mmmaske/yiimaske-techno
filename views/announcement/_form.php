<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, 'id')->textInput() ?>
<?= $form->field($model, 'title')->textInput() ?>
<?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
<?php ActiveForm::end(); ?>