<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Contacts $model */

$this->title = 'Create Announcement';
$this->params['breadcrumbs'][] = ['label' => 'Announcement', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="announcement-create">

	<h1><?= Html::encode($this->title) ?></h1>

	<?= $this->render('_form', [
		'model' => $model,
	]) ?>

</div>
