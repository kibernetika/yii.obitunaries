<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\OrderItemPictureSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-item-picture-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_order_item_picture_op') ?>

    <?= $form->field($model, 'id_order_item_op') ?>

    <?= $form->field($model, 'path_to_file_op') ?>

    <?= $form->field($model, 'description_op') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
