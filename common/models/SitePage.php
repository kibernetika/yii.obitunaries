<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "site_page".
 *
 * @property integer $id_site_pages_sp
 * @property string $route_sp
 * @property string $title_sp
 * @property string $content_sp
 * @property boolean $active_sp
 * @property integer $order_number_sp
 */
class SitePage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'site_page';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['route_sp', 'title_sp'], 'required'],
            [['content_sp'], 'string'],
            [['active_sp'], 'boolean'],
            [['order_number_sp'], 'integer'],
            [['route_sp'], 'string', 'max' => 250],
            [['title_sp'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_site_pages_sp' => 'Id Site Pages Sp',
            'route_sp' => 'Route Sp',
            'title_sp' => 'Title Sp',
            'content_sp' => 'Content Sp',
            'active_sp' => 'Active Sp',
            'order_number_sp' => 'Order Number Sp',
        ];
    }

    /**
     * @inheritdoc
     * @return SitePageQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SitePageQuery(get_called_class());
    }
}
