<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "achievement".
 *
 * @property string $subject
 * @property int $student_id
 * @property int $score
 */
class Achievement extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'achievement';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['subject', 'student_id', 'score'], 'required'],
            [['student_id', 'score'], 'integer'],
            [['subject'], 'string', 'max' => 255],
            [['subject', 'student_id'], 'unique', 'targetAttribute' => ['subject', 'student_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'subject' => 'Subject',
            'student_id' => 'Student ID',
            'score' => 'Score',
        ];
    }

    public function getStuid(){
        return $this->hasOne(student::sname(),['student_id'=>'student_id']);
    }
}
