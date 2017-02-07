<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[Propertie]].
 *
 * @see Propertie
 */
class PropertieQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Propertie[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Propertie|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
