<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cases".
 *
 * @property string $id
 * @property int|null $case_number
 * @property string|null $date_entered
 * @property string|null $date_modified
 * @property string|null $modified_user_id
 * @property string|null $assigned_user_id
 * @property string|null $created_by
 * @property int|null $deleted
 * @property string|null $name
 * @property string|null $account_name
 * @property string|null $account_id
 * @property string|null $status
 * @property string|null $priority
 * @property string|null $description
 * @property string|null $resolution
 */
class Cases extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cases';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['case_number', 'deleted'], 'integer'],
            [['date_entered', 'date_modified'], 'safe'],
            [['description', 'resolution'], 'string'],
            [['id', 'modified_user_id', 'assigned_user_id', 'created_by', 'account_id'], 'string', 'max' => 36],
            [['name'], 'string', 'max' => 255],
            [['account_name'], 'string', 'max' => 100],
            [['status', 'priority'], 'string', 'max' => 25],
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
            'case_number' => 'Case Number',
            'date_entered' => 'Date Entered',
            'date_modified' => 'Date Modified',
            'modified_user_id' => 'Modified User ID',
            'assigned_user_id' => 'Assigned User ID',
            'created_by' => 'Created By',
            'deleted' => 'Deleted',
            'name' => 'Name',
            'account_name' => 'Account Name',
            'account_id' => 'Account ID',
            'status' => 'Status',
            'priority' => 'Priority',
            'description' => 'Description',
            'resolution' => 'Resolution',
        ];
    }

    /**
     * {@inheritdoc}
     * @return CasesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CasesQuery(get_called_class());
    }
}
