<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[Booklet]].
 *
 * @see Booklet
 */
class BookletQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Booklet[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Booklet|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
