<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property integer $id_order_or
 * @property integer $id_client_or
 * @property string $summ_or
 * @property string $annotation_or
 * @property string $date_register_or
 * @property string $date_delivery_or
 * @property string $date_done_or
 * @property integer $id_address_or
 * @property integer $ship_method_or
 * @property string $shipping_price_or
 * @property string $status
 *
 * @property Address $idAddressOr
 * @property Client $idClientOr
 * @property OrderItem[] $orderItems
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_client_or', 'id_address_or', 'ship_method_or'], 'integer'],
            [['summ_or', 'date_register_or'], 'required'],
            [['summ_or', 'shipping_price_or'], 'number'],
            [['date_register_or', 'date_delivery_or', 'date_done_or'], 'safe'],
            [['status'], 'string'],
            [['annotation_or'], 'string', 'max' => 255],
            [['id_address_or'], 'exist', 'skipOnError' => true, 'targetClass' => Address::className(), 'targetAttribute' => ['id_address_or' => 'id_address_ad']],
            [['id_client_or'], 'exist', 'skipOnError' => true, 'targetClass' => Client::className(), 'targetAttribute' => ['id_client_or' => 'id_client_cl']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_order_or' => 'Id Order Or',
            'id_client_or' => 'Id Client Or',
            'summ_or' => 'Summ Or',
            'annotation_or' => 'Annotation Or',
            'date_register_or' => 'Date Register Or',
            'date_delivery_or' => 'Date Delivery Or',
            'date_done_or' => 'Date Done Or',
            'id_address_or' => 'Id Address Or',
            'ship_method_or' => 'Ship Method Or',
            'shipping_price_or' => 'Shipping Price Or',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdAddressOr()
    {
        return $this->hasOne(Address::className(), ['id_address_ad' => 'id_address_or']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdClientOr()
    {
        return $this->hasOne(Client::className(), ['id_client_cl' => 'id_client_or']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderItems()
    {
        return $this->hasMany(OrderItem::className(), ['id_order_io' => 'id_order_or']);
    }

    /**
     * @inheritdoc
     * @return OrderQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OrderQuery(get_called_class());
    }
}
