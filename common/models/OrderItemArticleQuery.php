<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[OrderItemArticle]].
 *
 * @see OrderItemArticle
 */
class OrderItemArticleQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return OrderItemArticle[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return OrderItemArticle|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
