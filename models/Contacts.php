<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contacts".
 *
 * @property string $id
 * @property int $deleted
 * @property string $date_entered
 * @property string $date_modified
 * @property string|null $modified_user_id
 * @property string|null $assigned_user_id
 * @property string|null $created_by
 * @property string|null $salutation
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $first_name_furigana
 * @property string|null $last_name_furigana
 * @property string|null $lead_source
 * @property string|null $lead_source_description
 * @property string|null $title
 * @property string|null $department
 * @property string|null $reports_to_id
 * @property string|null $commission_company_id
 * @property string|null $birthdate
 * @property int|null $do_not_call
 * @property string|null $phone_home
 * @property string|null $phone_mobile
 * @property string|null $phone_work
 * @property string|null $phone_other
 * @property string|null $phone_fax
 * @property string|null $email1
 * @property string|null $email2
 * @property string|null $assistant
 * @property string|null $assistant_phone
 * @property int|null $email_opt_out
 * @property string|null $primary_address_street
 * @property string|null $primary_address_city
 * @property string|null $primary_address_state
 * @property string|null $primary_address_postalcode
 * @property string|null $primary_address_country
 * @property string|null $primary_address_kana
 * @property string|null $alt_address_street
 * @property string|null $alt_address_city
 * @property string|null $alt_address_state
 * @property string|null $alt_address_postalcode
 * @property string|null $alt_address_country
 * @property string|null $alt_address_kana
 * @property string|null $description
 * @property string|null $portal_name
 * @property int|null $portal_active
 * @property string|null $portal_app
 * @property int|null $invalid_email
 * @property string|null $smsgroup
 * @property string|null $contact_status
 * @property string|null $picture_filename
 * @property string|null $picture_file_mime_type
 * @property string|null $school_id
 * @property float|null $vacation_total
 * @property float|null $vacation_used
 * @property int|null $is_available_strict
 * @property string|null $major
 * @property int|null $send_document_home
 * @property int|null $send_document_work
 * @property string|null $company_name
 * @property string|null $idnumber
 * @property string|null $nationality
 * @property string|null $gender
 * @property string|null $work_school
 * @property string|null $last_school_name
 * @property string|null $last_school_dept
 * @property string|null $study_aim
 * @property string|null $transport_fee_type
 * @property int|null $transportfee
 * @property string|null $incometax_rate
 * @property string|null $leave_date
 * @property string|null $enroll_date
 * @property string|null $grade
 * @property string|null $grade_entered
 * @property string|null $grade_entrance_date
 * @property string|null $application_date
 * @property string|null $extra_date
 * @property string|null $id_card_field1
 * @property string|null $id_card_field2
 * @property string|null $id_card_field3
 * @property string|null $id_card_field4
 * @property string|null $renmei_label
 * @property string|null $card_id
 * @property int|null $nyutai_mail_notice
 * @property string|null $account_id
 * @property string|null $phone_mobile_cleaned
 * @property string|null $phone_home_cleaned
 * @property string|null $phone_work_cleaned
 * @property string|null $phone_other_cleaned
 * @property string|null $bank_payment_type
 * @property string|null $bank_code
 * @property string|null $bank_branch_code
 * @property string|null $bank_name
 * @property string|null $bank_branch_name
 * @property string|null $bank_account_type
 * @property string|null $bank_account_no
 * @property string|null $bank_account_name
 * @property string|null $zaigaku1
 * @property string|null $zaigaku2
 * @property string|null $zaigaku3
 * @property string|null $shiboukou1
 * @property string|null $shiboukou2
 * @property string|null $shiboukou3
 * @property string|null $eiken
 * @property string|null $bank_customer_no
 * @property string|null $age_range
 * @property string|null $hogosha_name
 * @property string|null $hogosha_relation
 * @property string|null $member_status
 * @property string|null $original_school_id
 * @property string|null $transfer_date
 * @property string|null $transferred_school_id
 * @property string|null $application_type
 * @property string|null $application_info
 * @property string|null $newspaper
 * @property string|null $occupation
 * @property string|null $transportation
 * @property string|null $target_device
 * @property string|null $own_device_pc
 * @property string|null $own_device_tablet
 * @property string|null $own_device_phone
 * @property string|null $internet
 * @property string|null $skill_level
 * @property string|null $trial_date
 * @property string|null $reply_due_date
 * @property string|null $not_enroll_reason
 * @property string|null $enroll_type
 * @property string|null $campaign
 * @property string|null $pair_enroll
 * @property string|null $gold_member
 * @property string|null $ipad_rental
 * @property string|null $bank_type
 * @property string|null $bank_registration_type
 * @property string|null $bank_registration_date
 * @property string|null $leave_reason
 * @property string|null $payment_type
 * @property string|null $registration_date
 * @property string|null $planned_date
 * @property string|null $monthly_total_time
 * @property string|null $daily_total_time
 * @property string|null $bank_account_name_kanji
 * @property string|null $premium_id
 * @property string|null $cancel_date
 * @property string|null $actual_start_date
 * @property string|null $continue_date
 * @property string|null $return_date
 * @property string|null $restart_date
 * @property string|null $single_date
 * @property string|null $honnin
 * @property string|null $salary_type
 * @property string|null $salary_amount
 * @property string|null $contract_days
 * @property string|null $contract_hours
 * @property string|null $social_insurance
 * @property string|null $benefit_amount
 * @property string|null $bank_transfer_start
 * @property string|null $member_type
 * @property string|null $restart_registration_date
 */
class Contacts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contacts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'date_entered', 'date_modified'], 'required'],
            [['deleted', 'do_not_call', 'email_opt_out', 'portal_active', 'invalid_email', 'is_available_strict', 'send_document_home', 'send_document_work', 'transportfee', 'nyutai_mail_notice'], 'integer'],
            [['date_entered', 'date_modified', 'birthdate', 'leave_date', 'enroll_date', 'grade_entrance_date', 'application_date', 'extra_date', 'transfer_date', 'trial_date', 'reply_due_date', 'bank_registration_date', 'registration_date', 'planned_date', 'cancel_date', 'actual_start_date', 'continue_date', 'return_date', 'restart_date', 'single_date', 'bank_transfer_start', 'restart_registration_date'], 'safe'],
            [['description', 'id_card_field1', 'id_card_field4', 'renmei_label'], 'string'],
            [['vacation_total', 'vacation_used'], 'number'],
            [['id', 'modified_user_id', 'assigned_user_id', 'created_by', 'reports_to_id', 'commission_company_id', 'school_id', 'card_id', 'account_id', 'original_school_id', 'transferred_school_id'], 'string', 'max' => 36],
            [['salutation', 'bank_type'], 'string', 'max' => 5],
            [['first_name', 'last_name', 'first_name_furigana', 'last_name_furigana', 'company_name', 'hogosha_name'], 'string', 'max' => 40],
            [['lead_source', 'lead_source_description', 'department', 'email1', 'email2', 'primary_address_city', 'primary_address_state', 'primary_address_country', 'alt_address_city', 'alt_address_state', 'alt_address_country', 'payment_type'], 'string', 'max' => 100],
            [['title', 'id_card_field2', 'id_card_field3'], 'string', 'max' => 50],
            [['phone_home', 'phone_mobile', 'phone_work', 'phone_other', 'phone_fax', 'assistant_phone', 'phone_mobile_cleaned', 'phone_home_cleaned', 'phone_work_cleaned', 'phone_other_cleaned'], 'string', 'max' => 25],
            [['assistant'], 'string', 'max' => 75],
            [['primary_address_street', 'alt_address_street'], 'string', 'max' => 150],
            [['primary_address_postalcode', 'alt_address_postalcode', 'bank_name', 'bank_branch_name', 'bank_account_no', 'bank_customer_no'], 'string', 'max' => 20],
            [['primary_address_kana', 'alt_address_kana'], 'string', 'max' => 250],
            [['portal_name', 'portal_app', 'picture_filename', 'zaigaku1', 'zaigaku2', 'zaigaku3', 'shiboukou1', 'shiboukou2', 'shiboukou3', 'eiken'], 'string', 'max' => 255],
            [['smsgroup'], 'string', 'max' => 15],
            [['contact_status', 'bank_branch_code', 'newspaper', 'occupation', 'salary_type', 'contract_days', 'contract_hours'], 'string', 'max' => 3],
            [['picture_file_mime_type'], 'string', 'max' => 24],
            [['major', 'idnumber'], 'string', 'max' => 32],
            [['nationality', 'transport_fee_type'], 'string', 'max' => 16],
            [['gender', 'age_range', 'member_status', 'salary_amount', 'social_insurance', 'benefit_amount'], 'string', 'max' => 8],
            [['work_school', 'last_school_name', 'last_school_dept', 'study_aim'], 'string', 'max' => 64],
            [['incometax_rate', 'bank_code', 'monthly_total_time', 'daily_total_time'], 'string', 'max' => 4],
            [['grade', 'grade_entered'], 'string', 'max' => 10],
            [['bank_payment_type', 'bank_account_type', 'application_type', 'transportation', 'target_device', 'own_device_phone', 'internet', 'enroll_type', 'pair_enroll', 'gold_member', 'ipad_rental', 'bank_registration_type', 'leave_reason', 'honnin'], 'string', 'max' => 1],
            [['bank_account_name', 'hogosha_relation', 'bank_account_name_kanji'], 'string', 'max' => 30],
            [['application_info', 'own_device_pc', 'own_device_tablet', 'skill_level', 'not_enroll_reason', 'campaign', 'member_type'], 'string', 'max' => 2],
            [['premium_id'], 'string', 'max' => 7],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'deleted' => 'Deleted',
            'date_entered' => 'Date Entered',
            'date_modified' => 'Date Modified',
            'modified_user_id' => 'Modified User ID',
            'assigned_user_id' => 'Assigned User ID',
            'created_by' => 'Created By',
            'salutation' => 'Salutation',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'first_name_furigana' => 'First Name Furigana',
            'last_name_furigana' => 'Last Name Furigana',
            'lead_source' => 'Lead Source',
            'lead_source_description' => 'Lead Source Description',
            'title' => 'Title',
            'department' => 'Department',
            'reports_to_id' => 'Reports To ID',
            'commission_company_id' => 'Commission Company ID',
            'birthdate' => 'Birthdate',
            'do_not_call' => 'Do Not Call',
            'phone_home' => 'Phone Home',
            'phone_mobile' => 'Phone Mobile',
            'phone_work' => 'Phone Work',
            'phone_other' => 'Phone Other',
            'phone_fax' => 'Phone Fax',
            'email1' => 'Email1',
            'email2' => 'Email2',
            'assistant' => 'Assistant',
            'assistant_phone' => 'Assistant Phone',
            'email_opt_out' => 'Email Opt Out',
            'primary_address_street' => 'Primary Address Street',
            'primary_address_city' => 'Primary Address City',
            'primary_address_state' => 'Primary Address State',
            'primary_address_postalcode' => 'Primary Address Postalcode',
            'primary_address_country' => 'Primary Address Country',
            'primary_address_kana' => 'Primary Address Kana',
            'alt_address_street' => 'Alt Address Street',
            'alt_address_city' => 'Alt Address City',
            'alt_address_state' => 'Alt Address State',
            'alt_address_postalcode' => 'Alt Address Postalcode',
            'alt_address_country' => 'Alt Address Country',
            'alt_address_kana' => 'Alt Address Kana',
            'description' => 'Description',
            'portal_name' => 'Portal Name',
            'portal_active' => 'Portal Active',
            'portal_app' => 'Portal App',
            'invalid_email' => 'Invalid Email',
            'smsgroup' => 'Smsgroup',
            'contact_status' => 'Contact Status',
            'picture_filename' => 'Picture Filename',
            'picture_file_mime_type' => 'Picture File Mime Type',
            'school_id' => 'School ID',
            'vacation_total' => 'Vacation Total',
            'vacation_used' => 'Vacation Used',
            'is_available_strict' => 'Is Available Strict',
            'major' => 'Major',
            'send_document_home' => 'Send Document Home',
            'send_document_work' => 'Send Document Work',
            'company_name' => 'Company Name',
            'idnumber' => 'Idnumber',
            'nationality' => 'Nationality',
            'gender' => 'Gender',
            'work_school' => 'Work School',
            'last_school_name' => 'Last School Name',
            'last_school_dept' => 'Last School Dept',
            'study_aim' => 'Study Aim',
            'transport_fee_type' => 'Transport Fee Type',
            'transportfee' => 'Transportfee',
            'incometax_rate' => 'Incometax Rate',
            'leave_date' => 'Leave Date',
            'enroll_date' => 'Enroll Date',
            'grade' => 'Grade',
            'grade_entered' => 'Grade Entered',
            'grade_entrance_date' => 'Grade Entrance Date',
            'application_date' => 'Application Date',
            'extra_date' => 'Extra Date',
            'id_card_field1' => 'Id Card Field1',
            'id_card_field2' => 'Id Card Field2',
            'id_card_field3' => 'Id Card Field3',
            'id_card_field4' => 'Id Card Field4',
            'renmei_label' => 'Renmei Label',
            'card_id' => 'Card ID',
            'nyutai_mail_notice' => 'Nyutai Mail Notice',
            'account_id' => 'Account ID',
            'phone_mobile_cleaned' => 'Phone Mobile Cleaned',
            'phone_home_cleaned' => 'Phone Home Cleaned',
            'phone_work_cleaned' => 'Phone Work Cleaned',
            'phone_other_cleaned' => 'Phone Other Cleaned',
            'bank_payment_type' => 'Bank Payment Type',
            'bank_code' => 'Bank Code',
            'bank_branch_code' => 'Bank Branch Code',
            'bank_name' => 'Bank Name',
            'bank_branch_name' => 'Bank Branch Name',
            'bank_account_type' => 'Bank Account Type',
            'bank_account_no' => 'Bank Account No',
            'bank_account_name' => 'Bank Account Name',
            'zaigaku1' => 'Zaigaku1',
            'zaigaku2' => 'Zaigaku2',
            'zaigaku3' => 'Zaigaku3',
            'shiboukou1' => 'Shiboukou1',
            'shiboukou2' => 'Shiboukou2',
            'shiboukou3' => 'Shiboukou3',
            'eiken' => 'Eiken',
            'bank_customer_no' => 'Bank Customer No',
            'age_range' => 'Age Range',
            'hogosha_name' => 'Hogosha Name',
            'hogosha_relation' => 'Hogosha Relation',
            'member_status' => 'Member Status',
            'original_school_id' => 'Original School ID',
            'transfer_date' => 'Transfer Date',
            'transferred_school_id' => 'Transferred School ID',
            'application_type' => 'Application Type',
            'application_info' => 'Application Info',
            'newspaper' => 'Newspaper',
            'occupation' => 'Occupation',
            'transportation' => 'Transportation',
            'target_device' => 'Target Device',
            'own_device_pc' => 'Own Device Pc',
            'own_device_tablet' => 'Own Device Tablet',
            'own_device_phone' => 'Own Device Phone',
            'internet' => 'Internet',
            'skill_level' => 'Skill Level',
            'trial_date' => 'Trial Date',
            'reply_due_date' => 'Reply Due Date',
            'not_enroll_reason' => 'Not Enroll Reason',
            'enroll_type' => 'Enroll Type',
            'campaign' => 'Campaign',
            'pair_enroll' => 'Pair Enroll',
            'gold_member' => 'Gold Member',
            'ipad_rental' => 'Ipad Rental',
            'bank_type' => 'Bank Type',
            'bank_registration_type' => 'Bank Registration Type',
            'bank_registration_date' => 'Bank Registration Date',
            'leave_reason' => 'Leave Reason',
            'payment_type' => 'Payment Type',
            'registration_date' => 'Registration Date',
            'planned_date' => 'Planned Date',
            'monthly_total_time' => 'Monthly Total Time',
            'daily_total_time' => 'Daily Total Time',
            'bank_account_name_kanji' => 'Bank Account Name Kanji',
            'premium_id' => 'Premium ID',
            'cancel_date' => 'Cancel Date',
            'actual_start_date' => 'Actual Start Date',
            'continue_date' => 'Continue Date',
            'return_date' => 'Return Date',
            'restart_date' => 'Restart Date',
            'single_date' => 'Single Date',
            'honnin' => 'Honnin',
            'salary_type' => 'Salary Type',
            'salary_amount' => 'Salary Amount',
            'contract_days' => 'Contract Days',
            'contract_hours' => 'Contract Hours',
            'social_insurance' => 'Social Insurance',
            'benefit_amount' => 'Benefit Amount',
            'bank_transfer_start' => 'Bank Transfer Start',
            'member_type' => 'Member Type',
            'restart_registration_date' => 'Restart Registration Date',
        ];
    }
}
