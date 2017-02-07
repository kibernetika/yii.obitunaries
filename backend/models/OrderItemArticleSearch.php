<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\OrderItemArticle;

/**
 * OrderItemArticleSearch represents the model behind the search form about `common\models\OrderItemArticle`.
 */
class OrderItemArticleSearch extends OrderItemArticle
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_order_item_oa'], 'integer'],
            [['article_oa'], 'safe'],
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
        $query = OrderItemArticle::find();

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
            'id_order_item_oa' => $this->id_order_item_oa,
        ]);

        $query->andFilterWhere(['like', 'article_oa', $this->article_oa]);

        return $dataProvider;
    }
}
