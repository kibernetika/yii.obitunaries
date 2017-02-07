<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "propertie".
 *
 * @property integer $id_propertie_pr
 * @property integer $id_category_pr
 * @property string $name_pr
 * @property string $type_pr
 * @property string $description_pr
 *
 * @property Category $idCategoryPr
 * @property PropertieValue[] $propertieValues
 */
class Propertie extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'propertie';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_category_pr', 'name_pr', 'type_pr'], 'required'],
            [['id_category_pr'], 'integer'],
            [['type_pr'], 'string'],
            [['name_pr'], 'string', 'max' => 20],
            [['description_pr'], 'string', 'max' => 255],
            [['id_category_pr'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['id_category_pr' => 'id_category_ct']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_propertie_pr' => 'Id Propertie Pr',
            'id_category_pr' => 'Id Category Pr',
            'name_pr' => 'Name Pr',
            'type_pr' => 'Type Pr',
            'description_pr' => 'Description Pr',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCategoryPr()
    {
        return $this->hasOne(Category::className(), ['id_category_ct' => 'id_category_pr']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPropertieValues()
    {
        return $this->hasMany(PropertieValue::className(), ['id_property_vl' => 'id_propertie_pr']);
    }

    /**
     * @inheritdoc
     * @return PropertieQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PropertieQuery(get_called_class());
    }
}
