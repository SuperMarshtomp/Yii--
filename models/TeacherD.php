<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "teacher_d".
 *
 * @property int $teacher_id
 * @property int $class_id
 * @property string $subject
 */
class TeacherD extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'teacher_d';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['teacher_id', 'class_id'], 'required'],
            [['teacher_id', 'class_id'], 'integer'],
            [['subject'], 'string', 'max' => 255],
            [['teacher_id', 'class_id'], 'unique', 'targetAttribute' => ['teacher_id', 'class_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'teacher_id' => 'Teacher ID',
            'class_id' => 'Class ID',
            'subject' => 'Subject',
        ];
    }
}
