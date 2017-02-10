<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "address".
 *
 * @property int $id_address_ad
 * @property string $country_ad
 * @property string $state_ad
 * @property string $city_ad
 * @property string $zip_ad
 * @property string $street_ad
 * @property string $house_ad
 * @property string $apartment_ad
 * @property string $annotation_ad
 * @property string $receiver_name_ad
 *
 * @property Client[] $clients
 * @property ClientAdddress[] $clientAdddresses
 * @property Client[] $clientCas
 * @property Order[] $orders
 */
class Address extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'address';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['country_ad', 'state_ad', 'city_ad', 'zip_ad', 'receiver_name_ad'], 'required'],
            [['country_ad', 'state_ad', 'city_ad', 'street_ad'], 'string', 'max' => 50],
            [['zip_ad'], 'string', 'max' => 10],
            [['house_ad', 'apartment_ad'], 'string', 'max' => 5],
            [['annotation_ad'], 'string', 'max' => 255],
            [['receiver_name_ad'], 'string', 'max' => 70],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_address_ad' => 'Id Address Ad',
            'country_ad' => 'Country Ad',
            'state_ad' => 'State Ad',
            'city_ad' => 'City Ad',
            'zip_ad' => 'Zip Ad',
            'street_ad' => 'Street Ad',
            'house_ad' => 'House Ad',
            'apartment_ad' => 'Apartment Ad',
            'annotation_ad' => 'Annotation Ad',
            'receiver_name_ad' => 'Receiver Name Ad',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClients()
    {
        return $this->hasMany(Client::className(), ['id_address_cl' => 'id_address_ad']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClientAdddresses()
    {
        return $this->hasMany(ClientAdddress::className(), ['id_address_ca' => 'id_address_ad']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClientCas()
    {
        return $this->hasMany(Client::className(), ['id_client_cl' => 'id_client_ca'])->viaTable('client_adddress', ['id_address_ca' => 'id_address_ad']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['id_address_or' => 'id_address_ad']);
    }

    /**
     * @inheritdoc
     * @return AddressQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AddressQuery(get_called_class());
    }
}
