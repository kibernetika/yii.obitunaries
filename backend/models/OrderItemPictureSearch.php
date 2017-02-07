<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\OrderItemPicture;

/**
 * OrderItemPictureSearch represents the model behind the search form about `common\models\OrderItemPicture`.
 */
class OrderItemPictureSearch extends OrderItemPicture
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_order_item_picture_op', 'id_order_item_op'], 'integer'],
            [['path_to_file_op', 'description_op'], 'safe'],
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
        $query = OrderItemPicture::find();

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
            'id_order_item_picture_op' => $this->id_order_item_picture_op,
            'id_order_item_op' => $this->id_order_item_op,
        ]);

        $query->andFilterWhere(['like', 'path_to_file_op', $this->path_to_file_op])
            ->andFilterWhere(['like', 'description_op', $this->description_op]);

        return $dataProvider;
    }
}
