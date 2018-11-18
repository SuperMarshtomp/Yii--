<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "teacher".
 *
 * @property string $tname
 * @property int $teacher_id
 * @property string $subject
 */
class Teacher extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'teacher';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tname', 'teacher_id', 'subject'], 'required'],
            [['teacher_id'], 'integer'],
            [['tname', 'subject'], 'string', 'max' => 255],
            [['teacher_id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tname' => 'Tname',
            'teacher_id' => 'Teacher ID',
            'subject' => 'Subject',
        ];
    }
}
