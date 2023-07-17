<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Smsevent $model */

$this->title = 'Update Smsevent: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Smsevents', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="smsevent-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
