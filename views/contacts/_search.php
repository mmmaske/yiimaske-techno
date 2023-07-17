<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ContactsSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="contacts-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'deleted') ?>

    <?= $form->field($model, 'date_entered') ?>

    <?= $form->field($model, 'date_modified') ?>

    <?= $form->field($model, 'modified_user_id') ?>

    <?php // echo $form->field($model, 'assigned_user_id') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'salutation') ?>

    <?php // echo $form->field($model, 'first_name') ?>

    <?php // echo $form->field($model, 'last_name') ?>

    <?php // echo $form->field($model, 'first_name_furigana') ?>

    <?php // echo $form->field($model, 'last_name_furigana') ?>

    <?php // echo $form->field($model, 'lead_source') ?>

    <?php // echo $form->field($model, 'lead_source_description') ?>

    <?php // echo $form->field($model, 'title') ?>

    <?php // echo $form->field($model, 'department') ?>

    <?php // echo $form->field($model, 'reports_to_id') ?>

    <?php // echo $form->field($model, 'commission_company_id') ?>

    <?php // echo $form->field($model, 'birthdate') ?>

    <?php // echo $form->field($model, 'do_not_call') ?>

    <?php // echo $form->field($model, 'phone_home') ?>

    <?php // echo $form->field($model, 'phone_mobile') ?>

    <?php // echo $form->field($model, 'phone_work') ?>

    <?php // echo $form->field($model, 'phone_other') ?>

    <?php // echo $form->field($model, 'phone_fax') ?>

    <?php // echo $form->field($model, 'email1') ?>

    <?php // echo $form->field($model, 'email2') ?>

    <?php // echo $form->field($model, 'assistant') ?>

    <?php // echo $form->field($model, 'assistant_phone') ?>

    <?php // echo $form->field($model, 'email_opt_out') ?>

    <?php // echo $form->field($model, 'primary_address_street') ?>

    <?php // echo $form->field($model, 'primary_address_city') ?>

    <?php // echo $form->field($model, 'primary_address_state') ?>

    <?php // echo $form->field($model, 'primary_address_postalcode') ?>

    <?php // echo $form->field($model, 'primary_address_country') ?>

    <?php // echo $form->field($model, 'primary_address_kana') ?>

    <?php // echo $form->field($model, 'alt_address_street') ?>

    <?php // echo $form->field($model, 'alt_address_city') ?>

    <?php // echo $form->field($model, 'alt_address_state') ?>

    <?php // echo $form->field($model, 'alt_address_postalcode') ?>

    <?php // echo $form->field($model, 'alt_address_country') ?>

    <?php // echo $form->field($model, 'alt_address_kana') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'portal_name') ?>

    <?php // echo $form->field($model, 'portal_active') ?>

    <?php // echo $form->field($model, 'portal_app') ?>

    <?php // echo $form->field($model, 'invalid_email') ?>

    <?php // echo $form->field($model, 'smsgroup') ?>

    <?php // echo $form->field($model, 'contact_status') ?>

    <?php // echo $form->field($model, 'picture_filename') ?>

    <?php // echo $form->field($model, 'picture_file_mime_type') ?>

    <?php // echo $form->field($model, 'school_id') ?>

    <?php // echo $form->field($model, 'vacation_total') ?>

    <?php // echo $form->field($model, 'vacation_used') ?>

    <?php // echo $form->field($model, 'is_available_strict') ?>

    <?php // echo $form->field($model, 'major') ?>

    <?php // echo $form->field($model, 'send_document_home') ?>

    <?php // echo $form->field($model, 'send_document_work') ?>

    <?php // echo $form->field($model, 'company_name') ?>

    <?php // echo $form->field($model, 'idnumber') ?>

    <?php // echo $form->field($model, 'nationality') ?>

    <?php // echo $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'work_school') ?>

    <?php // echo $form->field($model, 'last_school_name') ?>

    <?php // echo $form->field($model, 'last_school_dept') ?>

    <?php // echo $form->field($model, 'study_aim') ?>

    <?php // echo $form->field($model, 'transport_fee_type') ?>

    <?php // echo $form->field($model, 'transportfee') ?>

    <?php // echo $form->field($model, 'incometax_rate') ?>

    <?php // echo $form->field($model, 'leave_date') ?>

    <?php // echo $form->field($model, 'enroll_date') ?>

    <?php // echo $form->field($model, 'grade') ?>

    <?php // echo $form->field($model, 'grade_entered') ?>

    <?php // echo $form->field($model, 'grade_entrance_date') ?>

    <?php // echo $form->field($model, 'application_date') ?>

    <?php // echo $form->field($model, 'extra_date') ?>

    <?php // echo $form->field($model, 'id_card_field1') ?>

    <?php // echo $form->field($model, 'id_card_field2') ?>

    <?php // echo $form->field($model, 'id_card_field3') ?>

    <?php // echo $form->field($model, 'id_card_field4') ?>

    <?php // echo $form->field($model, 'renmei_label') ?>

    <?php // echo $form->field($model, 'card_id') ?>

    <?php // echo $form->field($model, 'nyutai_mail_notice') ?>

    <?php // echo $form->field($model, 'account_id') ?>

    <?php // echo $form->field($model, 'phone_mobile_cleaned') ?>

    <?php // echo $form->field($model, 'phone_home_cleaned') ?>

    <?php // echo $form->field($model, 'phone_work_cleaned') ?>

    <?php // echo $form->field($model, 'phone_other_cleaned') ?>

    <?php // echo $form->field($model, 'bank_payment_type') ?>

    <?php // echo $form->field($model, 'bank_code') ?>

    <?php // echo $form->field($model, 'bank_branch_code') ?>

    <?php // echo $form->field($model, 'bank_name') ?>

    <?php // echo $form->field($model, 'bank_branch_name') ?>

    <?php // echo $form->field($model, 'bank_account_type') ?>

    <?php // echo $form->field($model, 'bank_account_no') ?>

    <?php // echo $form->field($model, 'bank_account_name') ?>

    <?php // echo $form->field($model, 'zaigaku1') ?>

    <?php // echo $form->field($model, 'zaigaku2') ?>

    <?php // echo $form->field($model, 'zaigaku3') ?>

    <?php // echo $form->field($model, 'shiboukou1') ?>

    <?php // echo $form->field($model, 'shiboukou2') ?>

    <?php // echo $form->field($model, 'shiboukou3') ?>

    <?php // echo $form->field($model, 'eiken') ?>

    <?php // echo $form->field($model, 'bank_customer_no') ?>

    <?php // echo $form->field($model, 'age_range') ?>

    <?php // echo $form->field($model, 'hogosha_name') ?>

    <?php // echo $form->field($model, 'hogosha_relation') ?>

    <?php // echo $form->field($model, 'member_status') ?>

    <?php // echo $form->field($model, 'original_school_id') ?>

    <?php // echo $form->field($model, 'transfer_date') ?>

    <?php // echo $form->field($model, 'transferred_school_id') ?>

    <?php // echo $form->field($model, 'application_type') ?>

    <?php // echo $form->field($model, 'application_info') ?>

    <?php // echo $form->field($model, 'newspaper') ?>

    <?php // echo $form->field($model, 'occupation') ?>

    <?php // echo $form->field($model, 'transportation') ?>

    <?php // echo $form->field($model, 'target_device') ?>

    <?php // echo $form->field($model, 'own_device_pc') ?>

    <?php // echo $form->field($model, 'own_device_tablet') ?>

    <?php // echo $form->field($model, 'own_device_phone') ?>

    <?php // echo $form->field($model, 'internet') ?>

    <?php // echo $form->field($model, 'skill_level') ?>

    <?php // echo $form->field($model, 'trial_date') ?>

    <?php // echo $form->field($model, 'reply_due_date') ?>

    <?php // echo $form->field($model, 'not_enroll_reason') ?>

    <?php // echo $form->field($model, 'enroll_type') ?>

    <?php // echo $form->field($model, 'campaign') ?>

    <?php // echo $form->field($model, 'pair_enroll') ?>

    <?php // echo $form->field($model, 'gold_member') ?>

    <?php // echo $form->field($model, 'ipad_rental') ?>

    <?php // echo $form->field($model, 'bank_type') ?>

    <?php // echo $form->field($model, 'bank_registration_type') ?>

    <?php // echo $form->field($model, 'bank_registration_date') ?>

    <?php // echo $form->field($model, 'leave_reason') ?>

    <?php // echo $form->field($model, 'payment_type') ?>

    <?php // echo $form->field($model, 'registration_date') ?>

    <?php // echo $form->field($model, 'planned_date') ?>

    <?php // echo $form->field($model, 'monthly_total_time') ?>

    <?php // echo $form->field($model, 'daily_total_time') ?>

    <?php // echo $form->field($model, 'bank_account_name_kanji') ?>

    <?php // echo $form->field($model, 'premium_id') ?>

    <?php // echo $form->field($model, 'cancel_date') ?>

    <?php // echo $form->field($model, 'actual_start_date') ?>

    <?php // echo $form->field($model, 'continue_date') ?>

    <?php // echo $form->field($model, 'return_date') ?>

    <?php // echo $form->field($model, 'restart_date') ?>

    <?php // echo $form->field($model, 'single_date') ?>

    <?php // echo $form->field($model, 'honnin') ?>

    <?php // echo $form->field($model, 'salary_type') ?>

    <?php // echo $form->field($model, 'salary_amount') ?>

    <?php // echo $form->field($model, 'contract_days') ?>

    <?php // echo $form->field($model, 'contract_hours') ?>

    <?php // echo $form->field($model, 'social_insurance') ?>

    <?php // echo $form->field($model, 'benefit_amount') ?>

    <?php // echo $form->field($model, 'bank_transfer_start') ?>

    <?php // echo $form->field($model, 'member_type') ?>

    <?php // echo $form->field($model, 'restart_registration_date') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
