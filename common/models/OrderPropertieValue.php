<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "order_propertie_value".
 *
 * @property integer $id_property_value
 * @property integer $id_order_item
 *
 * @property OrderItem $idOrderItem
 * @property PropertieValue $idPropertyValue
 */
class OrderPropertieValue extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order_propertie_value';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_property_value', 'id_order_item'], 'required'],
            [['id_property_value', 'id_order_item'], 'integer'],
            [['id_property_value', 'id_order_item'], 'unique', 'targetAttribute' => ['id_property_value', 'id_order_item'], 'message' => 'The combination of Id Property Value and Id Order Item has already been taken.'],
            [['id_order_item'], 'exist', 'skipOnError' => true, 'targetClass' => OrderItem::className(), 'targetAttribute' => ['id_order_item' => 'id_order_item_oi']],
            [['id_property_value'], 'exist', 'skipOnError' => true, 'targetClass' => PropertieValue::className(), 'targetAttribute' => ['id_property_value' => 'id_property_value_vl']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_property_value' => 'Id Property Value',
            'id_order_item' => 'Id Order Item',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdOrderItem()
    {
        return $this->hasOne(OrderItem::className(), ['id_order_item_oi' => 'id_order_item']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPropertyValue()
    {
        return $this->hasOne(PropertieValue::className(), ['id_property_value_vl' => 'id_property_value']);
    }

    /**
     * @inheritdoc
     * @return OrderPropertieValueQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OrderPropertieValueQuery(get_called_class());
    }
}
