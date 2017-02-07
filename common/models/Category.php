<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property integer $id_category_ct
 * @property string $name_ct
 * @property string $description_ct
 * @property string $url_image_ct
 *
 * @property Booklet[] $booklets
 * @property OrderItem[] $orderItems
 * @property Propertie[] $properties
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_ct'], 'required'],
            [['url_image_ct'], 'string'],
            [['name_ct'], 'string', 'max' => 50],
            [['description_ct'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_category_ct' => 'Id Category Ct',
            'name_ct' => 'Name Ct',
            'description_ct' => 'Description Ct',
            'url_image_ct' => 'Url Image Ct',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBooklets()
    {
        return $this->hasMany(Booklet::className(), ['id_cateory_bk' => 'id_category_ct']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderItems()
    {
        return $this->hasMany(OrderItem::className(), ['id_category_io' => 'id_category_ct']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProperties()
    {
        return $this->hasMany(Propertie::className(), ['id_category_pr' => 'id_category_ct']);
    }

    /**
     * @inheritdoc
     * @return CategoryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CategoryQuery(get_called_class());
    }
}
