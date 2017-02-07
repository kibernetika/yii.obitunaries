<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "options".
 *
 * @property integer $id_options_op
 * @property string $pages_title_op
 * @property string $value_op
 * @property string $description_op
 */
class Options extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'options';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pages_title_op', 'value_op', 'description_op'], 'required'],
            [['value_op'], 'string'],
            [['pages_title_op', 'description_op'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_options_op' => 'Id Options Op',
            'pages_title_op' => 'Pages Title Op',
            'value_op' => 'Value Op',
            'description_op' => 'Description Op',
        ];
    }

    /**
     * @inheritdoc
     * @return OptionsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OptionsQuery(get_called_class());
    }
}
