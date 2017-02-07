<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\OrderItemPicture */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-item-picture-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_order_item_op')->textInput() ?>

    <?= $form->field($model, 'path_to_file_op')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'description_op')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
