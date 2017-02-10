<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AddressSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="address-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_address_ad') ?>

    <?= $form->field($model, 'country_ad') ?>

    <?= $form->field($model, 'state_ad') ?>

    <?= $form->field($model, 'city_ad') ?>

    <?= $form->field($model, 'zip_ad') ?>

    <?php // echo $form->field($model, 'street_ad') ?>

    <?php // echo $form->field($model, 'house_ad') ?>

    <?php // echo $form->field($model, 'apartment_ad') ?>

    <?php // echo $form->field($model, 'annotation_ad') ?>

    <?php // echo $form->field($model, 'receiver_name_ad') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
