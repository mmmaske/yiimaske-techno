<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Smsevent;

/**
 * SmseventSearch represents the model behind the search form of `app\models\Smsevent`.
 */
class SmseventSearch extends Smsevent
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'date_entered', 'date_modified', 'modified_user_id', 'created_by', 'name', 'shortname', 'description', 'parent_id', 'syllabus_id', 'smsdocument_id', 'category', 'school_id', 'subtype', 'event_credit', 'custom_var31', 'custom_var32', 'custom_var33', 'custom_var34', 'custom_var35', 'custom_var36', 'custom_var37', 'custom_var38', 'custom_var39', 'custom_var40', 'common_code', 'assigned_user_id', 'nendo', 'course_category', 'curriculum_id', 'contact_id', 'curriculum_instance_id', 'seat_display', 'teiin'], 'safe'],
            [['deleted', 'status', 'vacation_type', 'schedule_reminder'], 'integer'],
            [['vacation_count'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Smsevent::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'deleted' => $this->deleted,
            'date_entered' => $this->date_entered,
            'date_modified' => $this->date_modified,
            'status' => $this->status,
            'vacation_type' => $this->vacation_type,
            'vacation_count' => $this->vacation_count,
            'schedule_reminder' => $this->schedule_reminder,
        ]);

        $query->andFilterWhere(['like', 'id', $this->id])
            ->andFilterWhere(['like', 'modified_user_id', $this->modified_user_id])
            ->andFilterWhere(['like', 'created_by', $this->created_by])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'shortname', $this->shortname])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'parent_id', $this->parent_id])
            ->andFilterWhere(['like', 'syllabus_id', $this->syllabus_id])
            ->andFilterWhere(['like', 'smsdocument_id', $this->smsdocument_id])
            ->andFilterWhere(['like', 'category', $this->category])
            ->andFilterWhere(['like', 'school_id', $this->school_id])
            ->andFilterWhere(['like', 'subtype', $this->subtype])
            ->andFilterWhere(['like', 'event_credit', $this->event_credit])
            ->andFilterWhere(['like', 'custom_var31', $this->custom_var31])
            ->andFilterWhere(['like', 'custom_var32', $this->custom_var32])
            ->andFilterWhere(['like', 'custom_var33', $this->custom_var33])
            ->andFilterWhere(['like', 'custom_var34', $this->custom_var34])
            ->andFilterWhere(['like', 'custom_var35', $this->custom_var35])
            ->andFilterWhere(['like', 'custom_var36', $this->custom_var36])
            ->andFilterWhere(['like', 'custom_var37', $this->custom_var37])
            ->andFilterWhere(['like', 'custom_var38', $this->custom_var38])
            ->andFilterWhere(['like', 'custom_var39', $this->custom_var39])
            ->andFilterWhere(['like', 'custom_var40', $this->custom_var40])
            ->andFilterWhere(['like', 'common_code', $this->common_code])
            ->andFilterWhere(['like', 'assigned_user_id', $this->assigned_user_id])
            ->andFilterWhere(['like', 'nendo', $this->nendo])
            ->andFilterWhere(['like', 'course_category', $this->course_category])
            ->andFilterWhere(['like', 'curriculum_id', $this->curriculum_id])
            ->andFilterWhere(['like', 'contact_id', $this->contact_id])
            ->andFilterWhere(['like', 'curriculum_instance_id', $this->curriculum_instance_id])
            ->andFilterWhere(['like', 'seat_display', $this->seat_display])
            ->andFilterWhere(['like', 'teiin', $this->teiin]);

        return $dataProvider;
    }
}
