<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Address */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="address-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'country_ad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'state_ad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city_ad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'zip_ad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'street_ad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'house_ad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apartment_ad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'annotation_ad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'receiver_name_ad')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
