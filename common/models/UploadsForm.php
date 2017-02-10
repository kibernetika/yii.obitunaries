<?php
namespace common\models;

use yii\base\Model;
use yii\web\UploadedFile;
use pendalf89\filemanager\behaviors\MediafileBehavior;

class UploadsForm extends Model
{
    /**
     * @var UploadedFile[]
     */
    public $imageFiles;

    public function rules()
    {
        return [
            [['imageFiles'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg', 'maxFiles' => 3],
        ];
    }

    public function behaviors()
    {
        return [
            'mediafile' => [
                'class' => MediafileBehavior::className(),
                'name' => 'post',
                'attributes' => [
                    'thumbnail',
                ],
            ]
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            foreach ($this->imageFiles as $file) {
                $file->saveAs('uploads/' . $file->baseName . '.' . $file->extension);
            }
            return true;
        } else {
            return false;
        }
    }
}