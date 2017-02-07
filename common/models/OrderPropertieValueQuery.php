<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[OrderPropertieValue]].
 *
 * @see OrderPropertieValue
 */
class OrderPropertieValueQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return OrderPropertieValue[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return OrderPropertieValue|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
