<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Contacts;

/**
 * ContactsSearch represents the model behind the search form of `app\models\Contacts`.
 */
class ContactsSearch extends Contacts
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'date_entered', 'date_modified', 'modified_user_id', 'assigned_user_id', 'created_by', 'salutation', 'first_name', 'last_name', 'first_name_furigana', 'last_name_furigana', 'lead_source', 'lead_source_description', 'title', 'department', 'reports_to_id', 'commission_company_id', 'birthdate', 'phone_home', 'phone_mobile', 'phone_work', 'phone_other', 'phone_fax', 'email1', 'email2', 'assistant', 'assistant_phone', 'primary_address_street', 'primary_address_city', 'primary_address_state', 'primary_address_postalcode', 'primary_address_country', 'primary_address_kana', 'alt_address_street', 'alt_address_city', 'alt_address_state', 'alt_address_postalcode', 'alt_address_country', 'alt_address_kana', 'description', 'portal_name', 'portal_app', 'smsgroup', 'contact_status', 'picture_filename', 'picture_file_mime_type', 'school_id', 'major', 'company_name', 'idnumber', 'nationality', 'gender', 'work_school', 'last_school_name', 'last_school_dept', 'study_aim', 'transport_fee_type', 'incometax_rate', 'leave_date', 'enroll_date', 'grade', 'grade_entered', 'grade_entrance_date', 'application_date', 'extra_date', 'id_card_field1', 'id_card_field2', 'id_card_field3', 'id_card_field4', 'renmei_label', 'card_id', 'account_id', 'phone_mobile_cleaned', 'phone_home_cleaned', 'phone_work_cleaned', 'phone_other_cleaned', 'bank_payment_type', 'bank_code', 'bank_branch_code', 'bank_name', 'bank_branch_name', 'bank_account_type', 'bank_account_no', 'bank_account_name', 'zaigaku1', 'zaigaku2', 'zaigaku3', 'shiboukou1', 'shiboukou2', 'shiboukou3', 'eiken', 'bank_customer_no', 'age_range', 'hogosha_name', 'hogosha_relation', 'member_status', 'original_school_id', 'transfer_date', 'transferred_school_id', 'application_type', 'application_info', 'newspaper', 'occupation', 'transportation', 'target_device', 'own_device_pc', 'own_device_tablet', 'own_device_phone', 'internet', 'skill_level', 'trial_date', 'reply_due_date', 'not_enroll_reason', 'enroll_type', 'campaign', 'pair_enroll', 'gold_member', 'ipad_rental', 'bank_type', 'bank_registration_type', 'bank_registration_date', 'leave_reason', 'payment_type', 'registration_date', 'planned_date', 'monthly_total_time', 'daily_total_time', 'bank_account_name_kanji', 'premium_id', 'cancel_date', 'actual_start_date', 'continue_date', 'return_date', 'restart_date', 'single_date', 'honnin', 'salary_type', 'salary_amount', 'contract_days', 'contract_hours', 'social_insurance', 'benefit_amount', 'bank_transfer_start', 'member_type', 'restart_registration_date'], 'safe'],
            [['deleted', 'do_not_call', 'email_opt_out', 'portal_active', 'invalid_email', 'is_available_strict', 'send_document_home', 'send_document_work', 'transportfee', 'nyutai_mail_notice'], 'integer'],
            [['vacation_total', 'vacation_used'], 'number'],
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
        $query = Contacts::find();

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
            'birthdate' => $this->birthdate,
            'do_not_call' => $this->do_not_call,
            'email_opt_out' => $this->email_opt_out,
            'portal_active' => $this->portal_active,
            'invalid_email' => $this->invalid_email,
            'vacation_total' => $this->vacation_total,
            'vacation_used' => $this->vacation_used,
            'is_available_strict' => $this->is_available_strict,
            'send_document_home' => $this->send_document_home,
            'send_document_work' => $this->send_document_work,
            'transportfee' => $this->transportfee,
            'leave_date' => $this->leave_date,
            'enroll_date' => $this->enroll_date,
            'grade_entrance_date' => $this->grade_entrance_date,
            'application_date' => $this->application_date,
            'extra_date' => $this->extra_date,
            'nyutai_mail_notice' => $this->nyutai_mail_notice,
            'transfer_date' => $this->transfer_date,
            'trial_date' => $this->trial_date,
            'reply_due_date' => $this->reply_due_date,
            'bank_registration_date' => $this->bank_registration_date,
            'registration_date' => $this->registration_date,
            'planned_date' => $this->planned_date,
            'cancel_date' => $this->cancel_date,
            'actual_start_date' => $this->actual_start_date,
            'continue_date' => $this->continue_date,
            'return_date' => $this->return_date,
            'restart_date' => $this->restart_date,
            'single_date' => $this->single_date,
            'bank_transfer_start' => $this->bank_transfer_start,
            'restart_registration_date' => $this->restart_registration_date,
        ]);

        $query->andFilterWhere(['like', 'id', $this->id])
            ->andFilterWhere(['like', 'modified_user_id', $this->modified_user_id])
            ->andFilterWhere(['like', 'assigned_user_id', $this->assigned_user_id])
            ->andFilterWhere(['like', 'created_by', $this->created_by])
            ->andFilterWhere(['like', 'salutation', $this->salutation])
            ->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'first_name_furigana', $this->first_name_furigana])
            ->andFilterWhere(['like', 'last_name_furigana', $this->last_name_furigana])
            ->andFilterWhere(['like', 'lead_source', $this->lead_source])
            ->andFilterWhere(['like', 'lead_source_description', $this->lead_source_description])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'reports_to_id', $this->reports_to_id])
            ->andFilterWhere(['like', 'commission_company_id', $this->commission_company_id])
            ->andFilterWhere(['like', 'phone_home', $this->phone_home])
            ->andFilterWhere(['like', 'phone_mobile', $this->phone_mobile])
            ->andFilterWhere(['like', 'phone_work', $this->phone_work])
            ->andFilterWhere(['like', 'phone_other', $this->phone_other])
            ->andFilterWhere(['like', 'phone_fax', $this->phone_fax])
            ->andFilterWhere(['like', 'email1', $this->email1])
            ->andFilterWhere(['like', 'email2', $this->email2])
            ->andFilterWhere(['like', 'assistant', $this->assistant])
            ->andFilterWhere(['like', 'assistant_phone', $this->assistant_phone])
            ->andFilterWhere(['like', 'primary_address_street', $this->primary_address_street])
            ->andFilterWhere(['like', 'primary_address_city', $this->primary_address_city])
            ->andFilterWhere(['like', 'primary_address_state', $this->primary_address_state])
            ->andFilterWhere(['like', 'primary_address_postalcode', $this->primary_address_postalcode])
            ->andFilterWhere(['like', 'primary_address_country', $this->primary_address_country])
            ->andFilterWhere(['like', 'primary_address_kana', $this->primary_address_kana])
            ->andFilterWhere(['like', 'alt_address_street', $this->alt_address_street])
            ->andFilterWhere(['like', 'alt_address_city', $this->alt_address_city])
            ->andFilterWhere(['like', 'alt_address_state', $this->alt_address_state])
            ->andFilterWhere(['like', 'alt_address_postalcode', $this->alt_address_postalcode])
            ->andFilterWhere(['like', 'alt_address_country', $this->alt_address_country])
            ->andFilterWhere(['like', 'alt_address_kana', $this->alt_address_kana])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'portal_name', $this->portal_name])
            ->andFilterWhere(['like', 'portal_app', $this->portal_app])
            ->andFilterWhere(['like', 'smsgroup', $this->smsgroup])
            ->andFilterWhere(['like', 'contact_status', $this->contact_status])
            ->andFilterWhere(['like', 'picture_filename', $this->picture_filename])
            ->andFilterWhere(['like', 'picture_file_mime_type', $this->picture_file_mime_type])
            ->andFilterWhere(['like', 'school_id', $this->school_id])
            ->andFilterWhere(['like', 'major', $this->major])
            ->andFilterWhere(['like', 'company_name', $this->company_name])
            ->andFilterWhere(['like', 'idnumber', $this->idnumber])
            ->andFilterWhere(['like', 'nationality', $this->nationality])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'work_school', $this->work_school])
            ->andFilterWhere(['like', 'last_school_name', $this->last_school_name])
            ->andFilterWhere(['like', 'last_school_dept', $this->last_school_dept])
            ->andFilterWhere(['like', 'study_aim', $this->study_aim])
            ->andFilterWhere(['like', 'transport_fee_type', $this->transport_fee_type])
            ->andFilterWhere(['like', 'incometax_rate', $this->incometax_rate])
            ->andFilterWhere(['like', 'grade', $this->grade])
            ->andFilterWhere(['like', 'grade_entered', $this->grade_entered])
            ->andFilterWhere(['like', 'id_card_field1', $this->id_card_field1])
            ->andFilterWhere(['like', 'id_card_field2', $this->id_card_field2])
            ->andFilterWhere(['like', 'id_card_field3', $this->id_card_field3])
            ->andFilterWhere(['like', 'id_card_field4', $this->id_card_field4])
            ->andFilterWhere(['like', 'renmei_label', $this->renmei_label])
            ->andFilterWhere(['like', 'card_id', $this->card_id])
            ->andFilterWhere(['like', 'account_id', $this->account_id])
            ->andFilterWhere(['like', 'phone_mobile_cleaned', $this->phone_mobile_cleaned])
            ->andFilterWhere(['like', 'phone_home_cleaned', $this->phone_home_cleaned])
            ->andFilterWhere(['like', 'phone_work_cleaned', $this->phone_work_cleaned])
            ->andFilterWhere(['like', 'phone_other_cleaned', $this->phone_other_cleaned])
            ->andFilterWhere(['like', 'bank_payment_type', $this->bank_payment_type])
            ->andFilterWhere(['like', 'bank_code', $this->bank_code])
            ->andFilterWhere(['like', 'bank_branch_code', $this->bank_branch_code])
            ->andFilterWhere(['like', 'bank_name', $this->bank_name])
            ->andFilterWhere(['like', 'bank_branch_name', $this->bank_branch_name])
            ->andFilterWhere(['like', 'bank_account_type', $this->bank_account_type])
            ->andFilterWhere(['like', 'bank_account_no', $this->bank_account_no])
            ->andFilterWhere(['like', 'bank_account_name', $this->bank_account_name])
            ->andFilterWhere(['like', 'zaigaku1', $this->zaigaku1])
            ->andFilterWhere(['like', 'zaigaku2', $this->zaigaku2])
            ->andFilterWhere(['like', 'zaigaku3', $this->zaigaku3])
            ->andFilterWhere(['like', 'shiboukou1', $this->shiboukou1])
            ->andFilterWhere(['like', 'shiboukou2', $this->shiboukou2])
            ->andFilterWhere(['like', 'shiboukou3', $this->shiboukou3])
            ->andFilterWhere(['like', 'eiken', $this->eiken])
            ->andFilterWhere(['like', 'bank_customer_no', $this->bank_customer_no])
            ->andFilterWhere(['like', 'age_range', $this->age_range])
            ->andFilterWhere(['like', 'hogosha_name', $this->hogosha_name])
            ->andFilterWhere(['like', 'hogosha_relation', $this->hogosha_relation])
            ->andFilterWhere(['like', 'member_status', $this->member_status])
            ->andFilterWhere(['like', 'original_school_id', $this->original_school_id])
            ->andFilterWhere(['like', 'transferred_school_id', $this->transferred_school_id])
            ->andFilterWhere(['like', 'application_type', $this->application_type])
            ->andFilterWhere(['like', 'application_info', $this->application_info])
            ->andFilterWhere(['like', 'newspaper', $this->newspaper])
            ->andFilterWhere(['like', 'occupation', $this->occupation])
            ->andFilterWhere(['like', 'transportation', $this->transportation])
            ->andFilterWhere(['like', 'target_device', $this->target_device])
            ->andFilterWhere(['like', 'own_device_pc', $this->own_device_pc])
            ->andFilterWhere(['like', 'own_device_tablet', $this->own_device_tablet])
            ->andFilterWhere(['like', 'own_device_phone', $this->own_device_phone])
            ->andFilterWhere(['like', 'internet', $this->internet])
            ->andFilterWhere(['like', 'skill_level', $this->skill_level])
            ->andFilterWhere(['like', 'not_enroll_reason', $this->not_enroll_reason])
            ->andFilterWhere(['like', 'enroll_type', $this->enroll_type])
            ->andFilterWhere(['like', 'campaign', $this->campaign])
            ->andFilterWhere(['like', 'pair_enroll', $this->pair_enroll])
            ->andFilterWhere(['like', 'gold_member', $this->gold_member])
            ->andFilterWhere(['like', 'ipad_rental', $this->ipad_rental])
            ->andFilterWhere(['like', 'bank_type', $this->bank_type])
            ->andFilterWhere(['like', 'bank_registration_type', $this->bank_registration_type])
            ->andFilterWhere(['like', 'leave_reason', $this->leave_reason])
            ->andFilterWhere(['like', 'payment_type', $this->payment_type])
            ->andFilterWhere(['like', 'monthly_total_time', $this->monthly_total_time])
            ->andFilterWhere(['like', 'daily_total_time', $this->daily_total_time])
            ->andFilterWhere(['like', 'bank_account_name_kanji', $this->bank_account_name_kanji])
            ->andFilterWhere(['like', 'premium_id', $this->premium_id])
            ->andFilterWhere(['like', 'honnin', $this->honnin])
            ->andFilterWhere(['like', 'salary_type', $this->salary_type])
            ->andFilterWhere(['like', 'salary_amount', $this->salary_amount])
            ->andFilterWhere(['like', 'contract_days', $this->contract_days])
            ->andFilterWhere(['like', 'contract_hours', $this->contract_hours])
            ->andFilterWhere(['like', 'social_insurance', $this->social_insurance])
            ->andFilterWhere(['like', 'benefit_amount', $this->benefit_amount])
            ->andFilterWhere(['like', 'member_type', $this->member_type]);

        return $dataProvider;
    }
}
