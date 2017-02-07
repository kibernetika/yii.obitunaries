<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Booklet;

/**
 * BookletSearch represents the model behind the search form about `common\models\Booklet`.
 */
class BookletSearch extends Booklet
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_booklet_bk', 'id_cateory_bk'], 'integer'],
            [['title_bk', 'description_bk', 'path_to_preview_bk', 'path_to_pdf_bk'], 'safe'],
            [['price_bk'], 'number'],
            [['active_bk'], 'boolean'],
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
        $query = Booklet::find();

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
            'id_booklet_bk' => $this->id_booklet_bk,
            'id_cateory_bk' => $this->id_cateory_bk,
            'price_bk' => $this->price_bk,
            'active_bk' => $this->active_bk,
        ]);

        $query->andFilterWhere(['like', 'title_bk', $this->title_bk])
            ->andFilterWhere(['like', 'description_bk', $this->description_bk])
            ->andFilterWhere(['like', 'path_to_preview_bk', $this->path_to_preview_bk])
            ->andFilterWhere(['like', 'path_to_pdf_bk', $this->path_to_pdf_bk]);

        return $dataProvider;
    }
}
