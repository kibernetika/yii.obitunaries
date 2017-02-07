<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Order;

/**
 * OrderSearch represents the model behind the search form about `common\models\Order`.
 */
class OrderSearch extends Order
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_order_or', 'id_client_or', 'id_address_or', 'ship_method_or'], 'integer'],
            [['summ_or', 'shipping_price_or'], 'number'],
            [['annotation_or', 'date_register_or', 'date_delivery_or', 'date_done_or', 'status'], 'safe'],
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
        $query = Order::find();

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
            'id_order_or' => $this->id_order_or,
            'id_client_or' => $this->id_client_or,
            'summ_or' => $this->summ_or,
            'date_register_or' => $this->date_register_or,
            'date_delivery_or' => $this->date_delivery_or,
            'date_done_or' => $this->date_done_or,
            'id_address_or' => $this->id_address_or,
            'ship_method_or' => $this->ship_method_or,
            'shipping_price_or' => $this->shipping_price_or,
        ]);

        $query->andFilterWhere(['like', 'annotation_or', $this->annotation_or])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
