<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "order_item_file".
 *
 * @property integer $id_order_item_of
 * @property string $path_to_file_of
 *
 * @property OrderItem $idOrderItemOf
 */
class OrderItemFile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order_item_file';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_order_item_of', 'path_to_file_of'], 'required'],
            [['id_order_item_of'], 'integer'],
            [['path_to_file_of'], 'string'],
            [['id_order_item_of'], 'unique'],
            [['id_order_item_of'], 'exist', 'skipOnError' => true, 'targetClass' => OrderItem::className(), 'targetAttribute' => ['id_order_item_of' => 'id_order_item_oi']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_order_item_of' => 'Id Order Item Of',
            'path_to_file_of' => 'Path To File Of',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdOrderItemOf()
    {
        return $this->hasOne(OrderItem::className(), ['id_order_item_oi' => 'id_order_item_of']);
    }

    /**
     * @inheritdoc
     * @return OrderItemFileQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OrderItemFileQuery(get_called_class());
    }
}
