<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "class_".
 *
 * @property int $grade
 * @property int $class_id
 * @property int $teacher_id
 */
class Class_ extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'class_';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['grade', 'class_id', 'teacher_id'], 'required'],
            [['grade', 'class_id', 'teacher_id'], 'integer'],
            [['class_id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'grade' => 'Grade',
            'class_id' => 'Class ID',
            'teacher_id' => 'Teacher ID',
        ];
    }
}
