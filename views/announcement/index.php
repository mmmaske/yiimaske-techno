<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\LinkPager;

$this->title = 'Announcement';
//$this->params['breadcrumbs'][] = ['label' => 'Announcement', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);

// make table headers
$labels = array_keys($announcement[0]);
$table_label_string = "";
foreach($labels as $lctr=>$l) {
	if(in_array($l,$model->doNotDisplay())) continue;
	$table_label_string.="<th>".$l."</th>";
}

// write table data
$table_data_string = "";
$record_count = count($announcement);
foreach ($announcement as $ctr=>$row) {
	$viewlink = "<a href='index.php?r=announcement/view&id=".$row['id']."'>View</a>";
	$editlink = "<a href='index.php?r=announcement/form&id=".$row['id']."'>Edit</a>";
	$deletelink = "<a href='index.php?r=announcement/delete&id=".$row['id']."' data-method='post'>Delete</a>";
	$managelinks = $viewlink . "<br/>". $editlink . "<br/>". $deletelink;
	$table_data_string .= "<tr>";
	$table_data_string .= "<td>".$managelinks."</td>";
	foreach($row as $col=>$d) {
		if(in_array($col,$model->doNotDisplay())) continue;
		$table_data_string .= "<td>".$d."</td>";
	}
	$table_data_string .= "</tr>";
}
?>
	<h1>Announcement</h1><small>(<?php echo $record_count; ?> records)</small> <a href="index.php?r=announcement/form">Add</a>
	<table class="table table-bordered table-striped-columns table-responsive">
		<thead>
		<tr>
			<th colspan="<?php echo $lctr+1; ?>">
				<?php $form = ActiveForm::begin(); ?>
				<?= $form->field($model, 'title')->textInput() ?>
				<?= Html::submitButton('Search', ['class' => 'btn btn-info']) ?>
				<?php ActiveForm::end(); ?>
			</th>
		</tr>
		<tr>
			<th>Manage</th>
			<?php echo $table_label_string; ?>
		</tr>
		</thead>
		<tbody><?php echo $table_data_string; ?></tbody>
		<?php  ?>
	</table>
