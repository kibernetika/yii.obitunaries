<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\OrderItem */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-item-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_order_io')->textInput() ?>

    <?= $form->field($model, 'id_booklet_io')->textInput() ?>

    <?= $form->field($model, 'quantity_oi')->textInput() ?>

    <?= $form->field($model, 'price_io')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comments_io')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'id_category_io')->textInput() ?>

    <?= $form->field($model, 'type_io')->dropDownList([ 'Template' => 'Template', 'File' => 'File', 'Text and image' => 'Text and image', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
