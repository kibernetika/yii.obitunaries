<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Propertie;

/**
 * PropertieSearch represents the model behind the search form about `common\models\Propertie`.
 */
class PropertieSearch extends Propertie
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_propertie_pr', 'id_category_pr'], 'integer'],
            [['name_pr', 'type_pr', 'description_pr'], 'safe'],
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
        $query = Propertie::find();

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
            'id_propertie_pr' => $this->id_propertie_pr,
            'id_category_pr' => $this->id_category_pr,
        ]);

        $query->andFilterWhere(['like', 'name_pr', $this->name_pr])
            ->andFilterWhere(['like', 'type_pr', $this->type_pr])
            ->andFilterWhere(['like', 'description_pr', $this->description_pr]);

        return $dataProvider;
    }
}
