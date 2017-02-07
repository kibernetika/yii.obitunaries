<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\OrderSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_order_or') ?>

    <?= $form->field($model, 'id_client_or') ?>

    <?= $form->field($model, 'summ_or') ?>

    <?= $form->field($model, 'annotation_or') ?>

    <?= $form->field($model, 'date_register_or') ?>

    <?php // echo $form->field($model, 'date_delivery_or') ?>

    <?php // echo $form->field($model, 'date_done_or') ?>

    <?php // echo $form->field($model, 'id_address_or') ?>

    <?php // echo $form->field($model, 'ship_method_or') ?>

    <?php // echo $form->field($model, 'shipping_price_or') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
