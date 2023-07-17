<?php

namespace app\models;

use yii\data\ActiveDataProvider;
use yii\db\ActiveRecord;

class Announcement extends ActiveRecord {
	public function search($params) {
		$query = Announcement::find();
		$dataProvider = new ActiveDataProvider([
			'query' => $query,
		]);
		$this->load($params);
		if (!$this->validate()) {
			// uncomment the following line if you do not want to return any records when validation fails
			// $query->where('0=1');
			return $dataProvider;
		}

		return $dataProvider;
	}
	public static function tableName() {
		return 'announcement';
	}
	/**
	 * @return array primary key of the table
	 **/
	public static function primaryKey() {
		return array('id');
	}
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels() {
		return array(
			'id' => 'ID',
			'title' => 'Title',
		);
	}

	/**
	 * @return array list of columns that will not be displayed on screen
	 */
	public function doNotDisplay() {
		return array(
			'id',
			'deleted',
			'shohin_id',
			'kamoku_level_sitei',
			'class_kbn',
			'target_voter',
			'target_voter_type',
			'mail_delivered',
			'approval_user_id',
		);
	}
}