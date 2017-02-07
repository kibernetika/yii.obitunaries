<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[OrderItemFile]].
 *
 * @see OrderItemFile
 */
class OrderItemFileQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return OrderItemFile[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return OrderItemFile|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
