<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "client_adddress".
 *
 * @property int $id_client_ca
 * @property int $id_address_ca
 *
 * @property Address $addressCa
 * @property Client $clientCa
 */
class ClientAdddress extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'client_adddress';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_client_ca', 'id_address_ca'], 'required'],
            [['id_client_ca', 'id_address_ca'], 'integer'],
            [['id_client_ca', 'id_address_ca'], 'unique', 'targetAttribute' => ['id_client_ca', 'id_address_ca']],
            [['id_address_ca'], 'exist', 'skipOnError' => true, 'targetClass' => Address::className(), 'targetAttribute' => ['id_address_ca' => 'id_address_ad']],
            [['id_client_ca'], 'exist', 'skipOnError' => true, 'targetClass' => Client::className(), 'targetAttribute' => ['id_client_ca' => 'id_client_cl']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_client_ca' => 'Id Client Ca',
            'id_address_ca' => 'Id Address Ca',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAddressCa()
    {
        return $this->hasOne(Address::className(), ['id_address_ad' => 'id_address_ca']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClientCa()
    {
        return $this->hasOne(Client::className(), ['id_client_cl' => 'id_client_ca']);
    }

    /**
     * @inheritdoc
     * @return ClientAdddressQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ClientAdddressQuery(get_called_class());
    }
}
