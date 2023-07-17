<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "smsevent".
 *
 * @property string $id
 * @property int $deleted
 * @property string $date_entered
 * @property string $date_modified
 * @property string|null $modified_user_id
 * @property string|null $created_by
 * @property string|null $name
 * @property string|null $shortname
 * @property string|null $description
 * @property string|null $parent_id
 * @property string|null $syllabus_id
 * @property string|null $smsdocument_id
 * @property string|null $category
 * @property int|null $status
 * @property string|null $school_id
 * @property int|null $vacation_type
 * @property float|null $vacation_count
 * @property string|null $subtype
 * @property string|null $event_credit
 * @property int|null $schedule_reminder
 * @property string|null $custom_var31
 * @property string|null $custom_var32
 * @property string|null $custom_var33
 * @property string|null $custom_var34
 * @property string|null $custom_var35
 * @property string|null $custom_var36
 * @property string|null $custom_var37
 * @property string|null $custom_var38
 * @property string|null $custom_var39
 * @property string|null $custom_var40
 * @property string|null $common_code
 * @property string|null $assigned_user_id
 * @property string|null $nendo
 * @property string|null $course_category
 * @property string|null $curriculum_id
 * @property string|null $contact_id
 * @property string|null $curriculum_instance_id
 * @property string|null $seat_display
 * @property string|null $teiin
 */
class Smsevent extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'smsevent';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'date_entered', 'date_modified'], 'required'],
            [['deleted', 'status', 'vacation_type', 'schedule_reminder'], 'integer'],
            [['date_entered', 'date_modified'], 'safe'],
            [['description', 'custom_var31', 'custom_var32', 'custom_var33', 'custom_var34', 'custom_var35', 'custom_var36', 'custom_var37', 'custom_var38', 'custom_var39', 'custom_var40'], 'string'],
            [['vacation_count'], 'number'],
            [['id', 'modified_user_id', 'created_by', 'parent_id', 'syllabus_id', 'smsdocument_id', 'school_id', 'common_code', 'assigned_user_id', 'curriculum_id', 'contact_id', 'curriculum_instance_id'], 'string', 'max' => 36],
            [['name'], 'string', 'max' => 50],
            [['shortname'], 'string', 'max' => 12],
            [['category'], 'string', 'max' => 15],
            [['subtype', 'nendo'], 'string', 'max' => 255],
            [['event_credit', 'course_category'], 'string', 'max' => 10],
            [['seat_display'], 'string', 'max' => 1],
            [['teiin'], 'string', 'max' => 3],
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
            'created_by' => 'Created By',
            'name' => 'Name',
            'shortname' => 'Shortname',
            'description' => 'Description',
            'parent_id' => 'Parent ID',
            'syllabus_id' => 'Syllabus ID',
            'smsdocument_id' => 'Smsdocument ID',
            'category' => 'Category',
            'status' => 'Status',
            'school_id' => 'School ID',
            'vacation_type' => 'Vacation Type',
            'vacation_count' => 'Vacation Count',
            'subtype' => 'Subtype',
            'event_credit' => 'Event Credit',
            'schedule_reminder' => 'Schedule Reminder',
            'custom_var31' => 'Custom Var31',
            'custom_var32' => 'Custom Var32',
            'custom_var33' => 'Custom Var33',
            'custom_var34' => 'Custom Var34',
            'custom_var35' => 'Custom Var35',
            'custom_var36' => 'Custom Var36',
            'custom_var37' => 'Custom Var37',
            'custom_var38' => 'Custom Var38',
            'custom_var39' => 'Custom Var39',
            'custom_var40' => 'Custom Var40',
            'common_code' => 'Common Code',
            'assigned_user_id' => 'Assigned User ID',
            'nendo' => 'Nendo',
            'course_category' => 'Course Category',
            'curriculum_id' => 'Curriculum ID',
            'contact_id' => 'Contact ID',
            'curriculum_instance_id' => 'Curriculum Instance ID',
            'seat_display' => 'Seat Display',
            'teiin' => 'Teiin',
        ];
    }

    /**
     * {@inheritdoc}
     * @return SmseventQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SmseventQuery(get_called_class());
    }
}
