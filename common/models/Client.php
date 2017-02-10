<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "client".
 *
 * @property int $id_client_cl
 * @property string $first_name_cl
 * @property string $second_name_cl
 * @property string $mob_phone_cl
 * @property string $annotation_cl
 *
 * @property ClientAdddress[] $clientAdddresses
 * @property Address[] $addressCas
 * @property Order[] $orders
 */
class Client extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'client';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name_cl', 'second_name_cl'], 'required'],
            [['first_name_cl', 'second_name_cl'], 'string', 'max' => 50],
            [['mob_phone_cl'], 'string', 'max' => 20],
            [['annotation_cl'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_client_cl' => 'Id',
            'first_name_cl' => 'First name',
            'second_name_cl' => 'Second name',
            'mob_phone_cl' => 'Phone',
            'annotation_cl' => 'Annotation',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClientAdddresses()
    {
        return $this->hasMany(ClientAdddress::className(), ['id_client_ca' => 'id_client_cl']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAddressCas()
    {
        return $this->hasMany(Address::className(), ['id_address_ad' => 'id_address_ca'])->viaTable('client_adddress', ['id_client_ca' => 'id_client_cl']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['id_client_or' => 'id_client_cl']);
    }

    /**
     * @inheritdoc
     * @return ClientQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ClientQuery(get_called_class());
    }
}
