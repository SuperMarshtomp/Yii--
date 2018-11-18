<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property int $student_id
 * @property string $sname
 * @property int $class_id
 * @property string $judgement
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id', 'sname', 'class_id'], 'required'],
            [['student_id', 'class_id'], 'integer'],
            [['judgement'], 'string'],
            [['sname'], 'string', 'max' => 255],
            [['student_id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'student_id' => 'Student ID',
            'sname' => 'Sname',
            'class_id' => 'Class ID',
            'judgement' => 'Judgement',
        ];
    }
}
