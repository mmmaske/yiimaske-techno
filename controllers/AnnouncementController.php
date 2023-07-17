<?php

namespace app\controllers;

use app\models\Announcement;
use yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\Pagination;


class AnnouncementController extends Controller
{
	public function behaviors(){
		return array_merge(
			parent::behaviors(),
			[
				'verbs' => [
					'class' => VerbFilter::className(),
					'actions' => [
						'delete' => ['POST'],
					],
				],
			]
		);
	}
	public function actionIndex(){
		$model = new Announcement();

		if ($this->request->isPost) {
			$post_data = Yii::$app->request->post();
		}

		$rows = (new \yii\db\Query())
			->select(['*'])
			->from('announcement')
			->all();

		return $this->render('index', [
			'model' => $model,
			'announcement' => $rows,
		]);
	}
	public function actionView($id){
		return $this->render('view', [
			'model' => $this->findModel($id),
		]);
	}
	public function actionForm() {
		$model = new Announcement();

		if(isset($_GET['id'])) {
			$data['record'] = $this->findModel($_GET['id']);
			$model = $data['record'];
			$model->date_modified = date("Y-m-d H:i:s");
			$model->modified_user_id = "69";
		}
		else {
			$model->id = Yii::$app->security->generateRandomString(32);
			$model->date_entered = date("Y-m-d H:i:s");
			$model->created_by = "69";
		}

		if ($this->request->isPost) {
			echo "<hr/><pre>MODEL BEFORE LOAD";
			print_r($model);
			echo "</pre>";


			 $model->load(\Yii::$app->request->post()); // why does this not work >:(
			// instead of above, lets force post data into model variable
//			$post_data = Yii::$app->request->post();
//			foreach($post_data['Announcement'] as $column=>$announcement_data) {
//				$model->$column = $announcement_data;
//			}

			echo "<hr/><pre>MODEL AFTER LOAD";
			print_r($model);
			echo "</pre>";
			die();

			if($model->save()) {
				$saved = $this->findModel($model->id);
				return $this->redirect(['view', 'id' => $saved->id]);
			}
		}

		$data = array();
		$data['action'] = "create";
		$data['model'] = $model;
		if(isset($_GET['id'])) {
			$data['action'] = "update";
			$data['record'] = $this->findModel($_GET['id']);
		}
		return $this->render('form',$data);

		$record_data = array();
		if(!empty($_GET['id'])) {
			$record_data = array('model' => $this->findModel($_GET['id']));
		}
		return $this->render('form',$record_data);
	}
	public function actionCreate(){
		$model = new Announcement();

		if ($this->request->isPost) {
			if ($model->load($this->request->post()) && $model->save()) {
				return $this->redirect(['view', 'id' => $model->id]);
			}
		} else {
			$model->loadDefaultValues();
		}

		return $this->render('create', [
			'model' => $model,
		]);
	}
	public function actionUpdate($id){
		$model = $this->findModel($id);

		if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
			return $this->redirect(['view', 'id' => $model->id]);
		}

		return $this->render('update', [
			'model' => $model,
		]);
	}
	public function actionDelete($id) {
		$this->findModel($id)->delete();

		return $this->redirect(['index']);
	}
	protected function findModel($id) {
		if (($model = Announcement::findOne(['id' => $id])) !== null) {
			return $model;
		}

		throw new NotFoundHttpException('The requested page does not exist.');
	}
}
