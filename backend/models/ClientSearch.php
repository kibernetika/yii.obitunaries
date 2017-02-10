<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Client;

/**
 * ClientSearch represents the model behind the search form of `common\models\Client`.
 */
class ClientSearch extends Client
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_client_cl'], 'integer'],
            [['first_name_cl', 'second_name_cl', 'mob_phone_cl', 'annotation_cl'], 'safe'],
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
        $query = Client::find();

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
            'id_client_cl' => $this->id_client_cl,
        ]);

        $query->andFilterWhere(['like', 'first_name_cl', $this->first_name_cl])
            ->andFilterWhere(['like', 'second_name_cl', $this->second_name_cl])
            ->andFilterWhere(['like', 'mob_phone_cl', $this->mob_phone_cl])
            ->andFilterWhere(['like', 'annotation_cl', $this->annotation_cl]);

        return $dataProvider;
    }
}
