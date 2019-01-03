<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "Theclass".
 *
 * @property int $class_id
 * @property int $grade
 * @property int $teacher_id
 */
class Theclass extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Theclass';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['class_id', 'grade', 'teacher_id'], 'required'],
            [['class_id', 'grade', 'teacher_id'], 'integer'],
            [['class_id'], 'unique'],
            [['teacher_id'], 'exist', 'skipOnError' => true, 'targetClass' => Teacher::className(), 'targetAttribute' => ['teacher_id' => 'teacher_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'class_id' => '班级',
            'grade' => '年级',
            'teacher_id' => '老师ID',
        ];
    }
}
