<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\OrderPropertieValue */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-propertie-value-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_property_value')->textInput() ?>

    <?= $form->field($model, 'id_order_item')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
