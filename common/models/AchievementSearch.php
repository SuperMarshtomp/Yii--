<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Achievement;

/**
 * AchievementSearch represents the model behind the search form of `common\models\Achievement`.
 */
class AchievementSearch extends Achievement
{
    public function attributes()
	{
		return array_merge(parent::attributes(),['teacher_name']);
	}
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'student_id', 'teacher_id', 'score'], 'integer'],
            [['teacher_name'], 'safe'],
            [['exam_name'], 'safe'],
            [['subject_name'],'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Achievement::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => ['pageSize'=>10],
        	'sort'=>[
        			'defaultOrder'=>[
        					'id'=>SORT_DESC,        			
        			],
        	],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'student_id' => $this->student_id,
            'teacher_id' => $this->teacher_id,
            'score' => $this->score,
        ]);


        $query->join('INNER JOIN','Teacher','Achievement.teacher_id = Teacher.teacher_id');
        $query->andFilterWhere(['like','Teacher.name',$this->teacher_name]);

        $dataProvider->sort->attributes['teacher_name'] = 
        [
        	'asc'=>['Teacher.name'=>SORT_ASC],
        	'desc'=>['Teacher.name'=>SORT_DESC],
        ];

        $query->andFilterWhere(['like', 'exam_name', $this->exam_name]);

        return $dataProvider;
    }

    public function stusearch($params,$student_id)
    {
        $query = Achievement::find();
        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => ['pageSize'=>8],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        
        $query->where(['student_id' => $student_id])->all();

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'student_id' => $this->student_id,
            'teacher_id' => $this->teacher_id,
            'score' => $this->score,
        ]);


        $query->join('INNER JOIN','Teacher','Achievement.teacher_id = Teacher.teacher_id');
        $query->andFilterWhere(['like','Teacher.name',$this->teacher_name]);

        $dataProvider->sort->attributes['teacher_name'] = 
        [
        	'asc'=>['Teacher.name'=>SORT_ASC],
        	'desc'=>['Teacher.name'=>SORT_DESC],
        ];

        $query->andFilterWhere(['like', 'exam_name', $this->exam_name]);


        return $dataProvider;
    }

    public function tersearch($params,$teacher_id)
    {
        $query = Achievement::find();
        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => ['pageSize'=>10],
        	'sort'=>[
        			'defaultOrder'=>[
        					'id'=>SORT_DESC,        			
        			],
        	],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->where(['Achievement.teacher_id' => $teacher_id])->all();

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'student_id' => $this->student_id,
            'teacher_id' => $this->teacher_id,
            'score' => $this->score,
        ]);


        $query->join('INNER JOIN','Teacher','Achievement.teacher_id = Teacher.teacher_id');
        $query->andFilterWhere(['like','Teacher.name',$this->teacher_name]);

        $dataProvider->sort->attributes['teacher_name'] = 
        [
        	'asc'=>['Teacher.name'=>SORT_ASC],
        	'desc'=>['Teacher.name'=>SORT_DESC],
        ];

        $query->andFilterWhere(['like', 'exam_name', $this->exam_name]);


        return $dataProvider;
    }
}
