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
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['subject'], 'safe'],
            [['student_id', 'score'], 'integer'],
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
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'student_id' => $this->student_id,
            'score' => $this->score,
        ]);

        $query->andFilterWhere(['like', 'subject', $this->subject]);

        return $dataProvider;
    }
}
