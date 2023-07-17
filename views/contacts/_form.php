<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Contacts $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="contacts-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deleted')->textInput() ?>

    <?= $form->field($model, 'date_entered')->textInput() ?>

    <?= $form->field($model, 'date_modified')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'assigned_user_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'salutation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'first_name_furigana')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_name_furigana')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lead_source')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lead_source_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'department')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reports_to_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'commission_company_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birthdate')->textInput() ?>

    <?= $form->field($model, 'do_not_call')->textInput() ?>

    <?= $form->field($model, 'phone_home')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone_mobile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone_work')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone_other')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone_fax')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'assistant')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'assistant_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email_opt_out')->textInput() ?>

    <?= $form->field($model, 'primary_address_street')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'primary_address_city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'primary_address_state')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'primary_address_postalcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'primary_address_country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'primary_address_kana')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alt_address_street')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alt_address_city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alt_address_state')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alt_address_postalcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alt_address_country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alt_address_kana')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'portal_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'portal_active')->textInput() ?>

    <?= $form->field($model, 'portal_app')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'invalid_email')->textInput() ?>

    <?= $form->field($model, 'smsgroup')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'picture_filename')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'picture_file_mime_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'school_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vacation_total')->textInput() ?>

    <?= $form->field($model, 'vacation_used')->textInput() ?>

    <?= $form->field($model, 'is_available_strict')->textInput() ?>

    <?= $form->field($model, 'major')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'send_document_home')->textInput() ?>

    <?= $form->field($model, 'send_document_work')->textInput() ?>

    <?= $form->field($model, 'company_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idnumber')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nationality')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'work_school')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_school_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_school_dept')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'study_aim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'transport_fee_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'transportfee')->textInput() ?>

    <?= $form->field($model, 'incometax_rate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'leave_date')->textInput() ?>

    <?= $form->field($model, 'enroll_date')->textInput() ?>

    <?= $form->field($model, 'grade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'grade_entered')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'grade_entrance_date')->textInput() ?>

    <?= $form->field($model, 'application_date')->textInput() ?>

    <?= $form->field($model, 'extra_date')->textInput() ?>

    <?= $form->field($model, 'id_card_field1')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'id_card_field2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_card_field3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_card_field4')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'renmei_label')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'card_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nyutai_mail_notice')->textInput() ?>

    <?= $form->field($model, 'account_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone_mobile_cleaned')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone_home_cleaned')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone_work_cleaned')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone_other_cleaned')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bank_payment_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bank_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bank_branch_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bank_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bank_branch_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bank_account_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bank_account_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bank_account_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'zaigaku1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'zaigaku2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'zaigaku3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shiboukou1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shiboukou2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shiboukou3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'eiken')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bank_customer_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'age_range')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hogosha_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hogosha_relation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'member_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'original_school_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'transfer_date')->textInput() ?>

    <?= $form->field($model, 'transferred_school_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'application_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'application_info')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'newspaper')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'occupation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'transportation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'target_device')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'own_device_pc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'own_device_tablet')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'own_device_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'internet')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'skill_level')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trial_date')->textInput() ?>

    <?= $form->field($model, 'reply_due_date')->textInput() ?>

    <?= $form->field($model, 'not_enroll_reason')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'enroll_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'campaign')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pair_enroll')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gold_member')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ipad_rental')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bank_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bank_registration_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bank_registration_date')->textInput() ?>

    <?= $form->field($model, 'leave_reason')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'payment_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'registration_date')->textInput() ?>

    <?= $form->field($model, 'planned_date')->textInput() ?>

    <?= $form->field($model, 'monthly_total_time')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'daily_total_time')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bank_account_name_kanji')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'premium_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cancel_date')->textInput() ?>

    <?= $form->field($model, 'actual_start_date')->textInput() ?>

    <?= $form->field($model, 'continue_date')->textInput() ?>

    <?= $form->field($model, 'return_date')->textInput() ?>

    <?= $form->field($model, 'restart_date')->textInput() ?>

    <?= $form->field($model, 'single_date')->textInput() ?>

    <?= $form->field($model, 'honnin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'salary_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'salary_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contract_days')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contract_hours')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'social_insurance')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'benefit_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bank_transfer_start')->textInput() ?>

    <?= $form->field($model, 'member_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'restart_registration_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
