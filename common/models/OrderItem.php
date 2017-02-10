<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "order_item".
 *
 * @property integer $id_order_item_oi
 * @property integer $id_order_io
 * @property integer $id_booklet_io
 * @property integer $quantity_oi
 * @property string $price_io
 * @property string $comments_io
 * @property integer $id_category_io
 * @property string $type_io
 *
 * @property Booklet $idBookletIo
 * @property Category $idCategoryIo
 * @property Order $idOrderIo
 * @property OrderItemArticle $orderItemArticle
 * @property OrderItemFile $orderItemFile
 * @property OrderItemPicture[] $orderItemPictures
 * @property OrderPropertieValue[] $orderPropertieValues
 * @property PropertieValue[] $idPropertyValues
 */
class OrderItem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order_item';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_order_io', 'quantity_oi', 'price_io', 'id_category_io'], 'required'],
            [['id_order_io', 'id_booklet_io', 'quantity_oi', 'id_category_io'], 'integer'],
            [['price_io'], 'number'],
            [['comments_io', 'type_io'], 'string'],
            [['id_booklet_io'], 'exist', 'skipOnError' => true, 'targetClass' => Booklet::className(), 'targetAttribute' => ['id_booklet_io' => 'id_booklet_bk']],
            [['id_category_io'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['id_category_io' => 'id_category_ct']],
            [['id_order_io'], 'exist', 'skipOnError' => true, 'targetClass' => Order::className(), 'targetAttribute' => ['id_order_io' => 'id_order_or']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_order_item_oi' => 'Id Order Item Oi',
            'id_order_io' => 'Id Order Io',
            'id_booklet_io' => 'Id Booklet Io',
            'quantity_oi' => 'Quantity Oi',
            'price_io' => 'Price Io',
            'comments_io' => 'Comments Io',
            'id_category_io' => 'Id Category Io',
            'type_io' => 'Type Io',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdBookletIo()
    {
        return $this->hasOne(Booklet::className(), ['id_booklet_bk' => 'id_booklet_io']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCategoryIo()
    {
        return $this->hasOne(Category::className(), ['id_category_ct' => 'id_category_io']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdOrderIo()
    {
        return $this->hasOne(Order::className(), ['id_order_or' => 'id_order_io']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderItemArticle()
    {
        return $this->hasOne(OrderItemArticle::className(), ['id_order_item_oa' => 'id_order_item_oi']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderItemFile()
    {
        return $this->hasOne(OrderItemFile::className(), ['id_order_item_of' => 'id_order_item_oi']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderItemPictures()
    {
        return $this->hasMany(OrderItemPicture::className(), ['id_order_item_op' => 'id_order_item_oi']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderPropertieValues()
    {
        return $this->hasMany(OrderPropertieValue::className(), ['id_order_item' => 'id_order_item_oi']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPropertyValues()
    {
        return $this->hasMany(PropertieValue::className(), ['id_property_value_vl' => 'id_property_value'])->viaTable('order_propertie_value', ['id_order_item' => 'id_order_item_oi']);
    }
}
