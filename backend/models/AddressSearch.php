<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Address;

/**
 * AddressSearch represents the model behind the search form of `common\models\Address`.
 */
class AddressSearch extends Address
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_address_ad'], 'integer'],
            [['country_ad', 'state_ad', 'city_ad', 'zip_ad', 'street_ad', 'house_ad', 'apartment_ad', 'annotation_ad', 'receiver_name_ad'], 'safe'],
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
        $query = Address::find();

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
            'id_address_ad' => $this->id_address_ad,
        ]);

        $query->andFilterWhere(['like', 'country_ad', $this->country_ad])
            ->andFilterWhere(['like', 'state_ad', $this->state_ad])
            ->andFilterWhere(['like', 'city_ad', $this->city_ad])
            ->andFilterWhere(['like', 'zip_ad', $this->zip_ad])
            ->andFilterWhere(['like', 'street_ad', $this->street_ad])
            ->andFilterWhere(['like', 'house_ad', $this->house_ad])
            ->andFilterWhere(['like', 'apartment_ad', $this->apartment_ad])
            ->andFilterWhere(['like', 'annotation_ad', $this->annotation_ad])
            ->andFilterWhere(['like', 'receiver_name_ad', $this->receiver_name_ad]);

        return $dataProvider;
    }
}
