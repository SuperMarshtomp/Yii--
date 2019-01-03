<?php

namespace common\models;

use Yii;

/**
* This is the model class for table "achievement".
*
* @property int $id
* @property int $exam_id 
* @property int $student_id
* @property int $teacher_id
* @property int $score
*
* @property Student $student
* @property Teacher $teacher
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
            [['exam_name','student_id', 'teacher_id'], 'required'],
            [['student_id', 'teacher_id', 'score'], 'integer'],
            [['exam_name'], 'string', 'max' => 255],
            [['student_id'], 'exist', 'skipOnError' => true, 'targetClass' => Student::className(), 'targetAttribute' => ['student_id' => 'student_id']],
            [['teacher_id'], 'exist', 'skipOnError' => true, 'targetClass' => Teacher::className(), 'targetAttribute' => ['teacher_id' => 'teacher_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'exam_name' => '考试名',
            'student_id' => '学号',
            'teacher_id' => '负责老师',
            'score' => '成绩',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(Student::className(), ['student_id' => 'student_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeacher()
    {
        return $this->hasOne(Teacher::className(), ['teacher_id' => 'teacher_id']);
    }	 
 }
 
  