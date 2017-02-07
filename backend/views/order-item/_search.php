<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\OrderItemSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-item-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_order_item_oi') ?>

    <?= $form->field($model, 'id_order_io') ?>

    <?= $form->field($model, 'id_booklet_io') ?>

    <?= $form->field($model, 'quantity_oi') ?>

    <?= $form->field($model, 'price_io') ?>

    <?php // echo $form->field($model, 'comments_io') ?>

    <?php // echo $form->field($model, 'id_category_io') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
