<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Theclass;

/**
 * TheclassSearch represents the model behind the search form of `common\models\Theclass`.
 */
class TheclassSearch extends Theclass
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['class_id', 'grade', 'teacher_id'], 'integer'],
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
        $query = Theclass::find();

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

        // grid filtering conditions
        $query->andFilterWhere([
            'class_id' => $this->class_id,
            'grade' => $this->grade,
            'teacher_id' => $this->teacher_id,
        ]);

        return $dataProvider;
    }
}
