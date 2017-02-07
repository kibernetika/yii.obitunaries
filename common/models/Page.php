<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "page".
 *
 * @property integer $id_page_pg
 * @property string $html_pg
 * @property string $description_pg
 * @property integer $number_pg
 * @property integer $temlate_pg
 * @property integer $id_booklet_pg
 *
 * @property Booklet $idBookletPg
 */
class Page extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'page';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['html_pg', 'number_pg'], 'required'],
            [['html_pg'], 'string'],
            [['number_pg', 'temlate_pg', 'id_booklet_pg'], 'integer'],
            [['description_pg'], 'string', 'max' => 255],
            [['id_booklet_pg'], 'exist', 'skipOnError' => true, 'targetClass' => Booklet::className(), 'targetAttribute' => ['id_booklet_pg' => 'id_booklet_bk']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_page_pg' => 'Id Page Pg',
            'html_pg' => 'Html Pg',
            'description_pg' => 'Description Pg',
            'number_pg' => 'Number Pg',
            'temlate_pg' => 'Template booklet - one, two or three pages.',
            'id_booklet_pg' => 'Id Booklet Pg',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdBookletPg()
    {
        return $this->hasOne(Booklet::className(), ['id_booklet_bk' => 'id_booklet_pg']);
    }

    /**
     * @inheritdoc
     * @return PageQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PageQuery(get_called_class());
    }
}
