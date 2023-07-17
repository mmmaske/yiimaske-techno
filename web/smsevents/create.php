<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Smsevent $model */

$this->title = 'Create Smsevent';
$this->params['breadcrumbs'][] = ['label' => 'Smsevents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="smsevent-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
