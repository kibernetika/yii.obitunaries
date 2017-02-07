<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\SitePage;

/**
 * SitePageSearch represents the model behind the search form about `common\models\SitePage`.
 */
class SitePageSearch extends SitePage
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_site_pages_sp', 'order_number_sp'], 'integer'],
            [['route_sp', 'title_sp', 'content_sp'], 'safe'],
            [['active_sp'], 'boolean'],
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
        $query = SitePage::find();

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
            'id_site_pages_sp' => $this->id_site_pages_sp,
            'active_sp' => $this->active_sp,
            'order_number_sp' => $this->order_number_sp,
        ]);

        $query->andFilterWhere(['like', 'route_sp', $this->route_sp])
            ->andFilterWhere(['like', 'title_sp', $this->title_sp])
            ->andFilterWhere(['like', 'content_sp', $this->content_sp]);

        return $dataProvider;
    }
}
