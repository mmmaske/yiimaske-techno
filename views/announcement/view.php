<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Contacts $model */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Announcement', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
$table_content = "";
foreach($model as $lbl=>$d) {
	if(in_array($lbl,$model->doNotDisplay())) continue;
$table_content .= "
	<tr>
		<td>".$lbl."</td><td>".$d."</td>
	</tr>
";
}
//echo "<pre>";print_r($model);echo "</pre>";
?>
<a href='index.php?r=announcement/form&id=<?php echo $model->id; ?>' class="btn btn-info">Edit</a>
<a href='index.php?r=announcement/delete&id=<?php echo $model->id; ?>' class="btn btn-danger" data-method='post'>Delete</a>
<table class="table table-responsive table-striped table-bordered">
	<?php echo $table_content; ?>
</table>