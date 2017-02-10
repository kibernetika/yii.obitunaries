<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\OrderItem;

/**
 * OrderItemSearch represents the model behind the search form about `common\models\OrderItem`.
 */
class OrderItemSearch extends OrderItem
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_order_item_oi', 'id_order_io', 'id_booklet_io', 'quantity_oi', 'id_category_io'], 'integer'],
            [['price_io'], 'number'],
            [['comments_io', 'type_io'], 'safe'],
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
        $query = OrderItem::find();

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
            'id_order_item_oi' => $this->id_order_item_oi,
            'id_order_io' => $this->id_order_io,
            'id_booklet_io' => $this->id_booklet_io,
            'quantity_oi' => $this->quantity_oi,
            'price_io' => $this->price_io,
            'id_category_io' => $this->id_category_io,
        ]);

        $query->andFilterWhere(['like', 'comments_io', $this->comments_io])
            ->andFilterWhere(['like', 'type_io', $this->type_io]);

        return $dataProvider;
    }
}
