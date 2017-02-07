<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\OrderItemFile;

/**
 * OrderItemFileSearch represents the model behind the search form about `common\models\OrderItemFile`.
 */
class OrderItemFileSearch extends OrderItemFile
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_order_item_of'], 'integer'],
            [['path_to_file_of'], 'safe'],
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
        $query = OrderItemFile::find();

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
            'id_order_item_of' => $this->id_order_item_of,
        ]);

        $query->andFilterWhere(['like', 'path_to_file_of', $this->path_to_file_of]);

        return $dataProvider;
    }
}
