<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\PropertieValue;

/**
 * PropertieValueSearch represents the model behind the search form about `common\models\PropertieValue`.
 */
class PropertieValueSearch extends PropertieValue
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_property_value_vl', 'id_property_vl'], 'integer'],
            [['value_vl', 'type_price_change_vl'], 'safe'],
            [['change_on_vl'], 'number'],
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
        $query = PropertieValue::find();

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
            'id_property_value_vl' => $this->id_property_value_vl,
            'id_property_vl' => $this->id_property_vl,
            'change_on_vl' => $this->change_on_vl,
        ]);

        $query->andFilterWhere(['like', 'value_vl', $this->value_vl])
            ->andFilterWhere(['like', 'type_price_change_vl', $this->type_price_change_vl]);

        return $dataProvider;
    }
}
