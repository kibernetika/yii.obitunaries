<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "propertie_value".
 *
 * @property integer $id_property_value_vl
 * @property integer $id_property_vl
 * @property string $value_vl
 * @property string $type_price_change_vl
 * @property string $change_on_vl
 *
 * @property OrderPropertieValue[] $orderPropertieValues
 * @property OrderItem[] $idOrderItems
 * @property Propertie $idPropertyVl
 */
class PropertieValue extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'propertie_value';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_property_vl', 'value_vl'], 'required'],
            [['id_property_vl'], 'integer'],
            [['type_price_change_vl'], 'string'],
            [['change_on_vl'], 'number'],
            [['value_vl'], 'string', 'max' => 255],
            [['id_property_vl'], 'exist', 'skipOnError' => true, 'targetClass' => Propertie::className(), 'targetAttribute' => ['id_property_vl' => 'id_propertie_pr']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_property_value_vl' => 'Id Property Value Vl',
            'id_property_vl' => 'Id Property Vl',
            'value_vl' => 'Value Vl',
            'type_price_change_vl' => 'Type Price Change Vl',
            'change_on_vl' => 'Change On Vl',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderPropertieValues()
    {
        return $this->hasMany(OrderPropertieValue::className(), ['id_property_value' => 'id_property_value_vl']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdOrderItems()
    {
        return $this->hasMany(OrderItem::className(), ['id_order_item_oi' => 'id_order_item'])->viaTable('order_propertie_value', ['id_property_value' => 'id_property_value_vl']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPropertyVl()
    {
        return $this->hasOne(Propertie::className(), ['id_propertie_pr' => 'id_property_vl']);
    }

    /**
     * @inheritdoc
     * @return PropertieValueQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PropertieValueQuery(get_called_class());
    }
}
