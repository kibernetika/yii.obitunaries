<?php


use yii\widgets\ActiveForm;
use common\models\UploadsForm;
use pendalf89\filemanager\widgets\FileInput;
use pendalf89\filemanager\models\Mediafile;

//$model = new UploadsForm();
//
//$form = ActiveForm::begin([
//    'method' => 'post',
//    'action' => ['controller/action'],
//]);
//echo $form->field($model, 'imageFiles')->widget(FileInput::className(), [
//    'buttonTag' => 'button',
//    'buttonName' => 'Browse',
//    'buttonOptions' => ['class' => 'btn btn-default'],
//    'options' => ['class' => 'form-control'],
//    // Widget template
//    'template' => '<div class="input-group">{input}<span class="input-group-btn">{button}</span></div>',
//    // Optional, if set, only this image can be selected by user
//    'thumb' => 'original',
//    // Optional, if set, in container will be inserted selected image
//    'imageContainer' => '.img',
//    // Default to FileInput::DATA_URL. This data will be inserted in input field
//    'pasteData' => FileInput::DATA_URL,
//    // JavaScript function, which will be called before insert file data to input.
//    // Argument data contains file data.
//    // data example: [alt: "Ведьма с кошкой", description: "123", url: "/uploads/2014/12/vedma-100x100.jpeg", id: "45"]
//    'callbackBeforeInsert' => 'function(e, data) {
//        console.log( data );
//    }',
//]);
//ActiveForm::end();
echo 'File manager';
//echo FileInput::widget([
//    'name' => 'mediafile',
//    'buttonTag' => 'button',
//    'buttonName' => 'Browse',
//    'buttonOptions' => ['class' => 'btn btn-default'],
//    'options' => ['class' => 'form-control'],
//    // Widget template
//    'template' => '<div class="input-group">{input}<span class="input-group-btn">{button}</span></div>',
//    // Optional, if set, only this image can be selected by user
//    'thumb' => 'original',
//    // Optional, if set, in container will be inserted selected image
//    'imageContainer' => '.img',
//    // Default to FileInput::DATA_IDL. This data will be inserted in input field
//    'pasteData' => FileInput::DATA_ID,
//    // JavaScript function, which will be called before insert file data to input.
//    // Argument data contains file data.
//    // data example: [alt: "Ведьма с кошкой", description: "123", url: "/uploads/2014/12/vedma-100x100.jpeg", id: "45"]
//    'callbackBeforeInsert' => 'function(e, data) {
//        console.log( data );
//    }',
//]);


