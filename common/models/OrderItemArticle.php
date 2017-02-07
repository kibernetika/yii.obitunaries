<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "order_item_article".
 *
 * @property integer $id_order_item_oa
 * @property string $article_oa
 *
 * @property OrderItem $idOrderItemOa
 */
class OrderItemArticle extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order_item_article';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_order_item_oa', 'article_oa'], 'required'],
            [['id_order_item_oa'], 'integer'],
            [['article_oa'], 'string'],
            [['id_order_item_oa'], 'unique'],
            [['id_order_item_oa'], 'exist', 'skipOnError' => true, 'targetClass' => OrderItem::className(), 'targetAttribute' => ['id_order_item_oa' => 'id_order_item_oi']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_order_item_oa' => 'Id Order Item Oa',
            'article_oa' => 'Article Oa',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdOrderItemOa()
    {
        return $this->hasOne(OrderItem::className(), ['id_order_item_oi' => 'id_order_item_oa']);
    }

    /**
     * @inheritdoc
     * @return OrderItemArticleQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OrderItemArticleQuery(get_called_class());
    }
}
