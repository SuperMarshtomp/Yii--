<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property int $student_id
 * @property string $name
 * @property int $class_id
 * @property string $teacher_judge
 *
 * @property Achievement[] $achievements
 * @property ClassB $class
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
            [['student_id', 'name', 'class_id'], 'required'],
            [['student_id', 'class_id', 'userid'], 'integer'],
            [['teacher_judge'], 'string'],
            [['name'], 'string', 'max' => 255],
            [['student_id'], 'unique'],
            [['class_id'], 'exist', 'skipOnError' => true, 'targetClass' => Theclass::className(), 'targetAttribute' => ['class_id' => 'class_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'student_id' => '学号',
            'name' => '姓名',
            'class_id' => '班级',
            'teacher_judge' => '老师评价',
            'userid' => '用户ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAchievements()
    {
        return $this->hasMany(Achievement::className(), ['student_id' => 'student_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClass()
    {
        return $this->hasOne(ClassB::className(), ['class_id' => 'class_id']);
    }
}
