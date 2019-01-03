<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "teacher".
 *
 * @property int $teacher_id
 * @property string $name
 * @property int $subject
 * @property string $email
 *
 * @property Achievement[] $achievements
 * @property ClassB[] $classBs
 * @property Subjects $subject0
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
            [['teacher_id', 'name', 'subject', 'email','adminuserid'], 'required'],
            [['teacher_id', 'subject','adminuserid'], 'integer'],
            [['name', 'email'], 'string', 'max' => 255],
            [['teacher_id'], 'unique'],
            [['subject'], 'exist', 'skipOnError' => true, 'targetClass' => Subjects::className(), 'targetAttribute' => ['subject' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'teacher_id' => '老师ID',
            'name' => '姓名',
            'subject' => '科目',
            'email' => 'Email',
            'adminuserid' => '管理员ID'
        ];
    }

   /**
     * @return \yii\db\ActiveQuery
     */
    public function getAchievements()
    {
        return $this->hasMany(Achievement::className(), ['teacher_id' => 'teacher_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubject0()
    {
        return $this->hasOne(Subjects::className(), ['id' => 'subject']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTheclasses()
    {
        return $this->hasMany(Theclass::className(), ['teacher_id' => 'teacher_id']);
    }
}
