<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "booklet".
 *
 * @property integer $id_booklet_bk
 * @property string $title_bk
 * @property string $description_bk
 * @property string $path_to_preview_bk
 * @property string $path_to_pdf_bk
 * @property integer $id_cateory_bk
 * @property string $price_bk
 * @property boolean $active_bk
 *
 * @property Category $idCateoryBk
 * @property OrderItem[] $orderItems
 * @property Page[] $pages
 */
class Booklet extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'booklet';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['path_to_preview_bk', 'id_cateory_bk', 'price_bk'], 'required'],
            [['path_to_preview_bk', 'path_to_pdf_bk'], 'string'],
            [['id_cateory_bk'], 'integer'],
            [['price_bk'], 'number'],
            [['active_bk'], 'boolean'],
            [['title_bk'], 'string', 'max' => 50],
            [['description_bk'], 'string', 'max' => 255],
            [['id_cateory_bk'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['id_cateory_bk' => 'id_category_ct']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_booklet_bk' => 'Id Booklet Bk',
            'title_bk' => 'Title Bk',
            'description_bk' => 'Description Bk',
            'path_to_preview_bk' => 'Path To Preview Bk',
            'path_to_pdf_bk' => 'Path To Pdf Bk',
            'id_cateory_bk' => 'Id Cateory Bk',
            'price_bk' => 'Price Bk',
            'active_bk' => 'Active Bk',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCateoryBk()
    {
        return $this->hasOne(Category::className(), ['id_category_ct' => 'id_cateory_bk']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderItems()
    {
        return $this->hasMany(OrderItem::className(), ['id_booklet_io' => 'id_booklet_bk']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPages()
    {
        return $this->hasMany(Page::className(), ['id_booklet_pg' => 'id_booklet_bk']);
    }

    /**
     * @inheritdoc
     * @return BookletQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new BookletQuery(get_called_class());
    }
}
