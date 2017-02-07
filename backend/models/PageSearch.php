<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Page;

/**
 * PageSearch represents the model behind the search form about `common\models\Page`.
 */
class PageSearch extends Page
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_page_pg', 'number_pg', 'temlate_pg', 'id_booklet_pg'], 'integer'],
            [['html_pg', 'description_pg'], 'safe'],
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
        $query = Page::find();

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
            'id_page_pg' => $this->id_page_pg,
            'number_pg' => $this->number_pg,
            'temlate_pg' => $this->temlate_pg,
            'id_booklet_pg' => $this->id_booklet_pg,
        ]);

        $query->andFilterWhere(['like', 'html_pg', $this->html_pg])
            ->andFilterWhere(['like', 'description_pg', $this->description_pg]);

        return $dataProvider;
    }
}
