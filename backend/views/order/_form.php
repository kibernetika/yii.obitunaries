<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Order */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_client_or')->textInput() ?>

    <?= $form->field($model, 'summ_or')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'annotation_or')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_register_or')->textInput() ?>

    <?= $form->field($model, 'date_delivery_or')->textInput() ?>

    <?= $form->field($model, 'date_done_or')->textInput() ?>

    <?= $form->field($model, 'id_address_or')->textInput() ?>

    <?= $form->field($model, 'ship_method_or')->textInput() ?>

    <?= $form->field($model, 'shipping_price_or')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'order' => 'Order', 'payment' => 'Payment', 'processing' => 'Processing', 'shipping' => 'Shipping', 'successfull' => 'Successfull', 'cancelled' => 'Cancelled', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
