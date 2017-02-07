<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "order_item_picture".
 *
 * @property integer $id_order_item_picture_op
 * @property integer $id_order_item_op
 * @property string $path_to_file_op
 * @property string $description_op
 *
 * @property OrderItem $idOrderItemOp
 */
class OrderItemPicture extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order_item_picture';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_order_item_op', 'path_to_file_op'], 'required'],
            [['id_order_item_op'], 'integer'],
            [['path_to_file_op'], 'string'],
            [['description_op'], 'string', 'max' => 255],
            [['id_order_item_op'], 'exist', 'skipOnError' => true, 'targetClass' => OrderItem::className(), 'targetAttribute' => ['id_order_item_op' => 'id_order_item_oi']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_order_item_picture_op' => 'Id Order Item Picture Op',
            'id_order_item_op' => 'Id Order Item Op',
            'path_to_file_op' => 'Path To File Op',
            'description_op' => 'Description Op',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdOrderItemOp()
    {
        return $this->hasOne(OrderItem::className(), ['id_order_item_oi' => 'id_order_item_op']);
    }

    /**
     * @inheritdoc
     * @return OrderItemPictureQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OrderItemPictureQuery(get_called_class());
    }
}
