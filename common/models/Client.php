<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "client".
 *
 * @property integer $id_client_cl
 * @property string $first_name_cl
 * @property string $second_name_cl
 * @property integer $id_address_cl
 * @property string $mob_phone_cl
 * @property string $annotation_cl
 *
 * @property Address $idAddressCl
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
            [['first_name_cl', 'second_name_cl', 'id_address_cl'], 'required'],
            [['id_address_cl'], 'integer'],
            [['first_name_cl', 'second_name_cl'], 'string', 'max' => 50],
            [['mob_phone_cl'], 'string', 'max' => 20],
            [['annotation_cl'], 'string', 'max' => 255],
            [['id_address_cl'], 'exist', 'skipOnError' => true, 'targetClass' => Address::className(), 'targetAttribute' => ['id_address_cl' => 'id_address_ad']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_client_cl' => 'Id Client Cl',
            'first_name_cl' => 'First Name Cl',
            'second_name_cl' => 'Second Name Cl',
            'id_address_cl' => 'Id Address Cl',
            'mob_phone_cl' => 'Mob Phone Cl',
            'annotation_cl' => 'Annotation Cl',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdAddressCl()
    {
        return $this->hasOne(Address::className(), ['id_address_ad' => 'id_address_cl']);
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
