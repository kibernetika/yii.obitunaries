<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PropertieValue */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="propertie-value-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_property_vl')->textInput() ?>

    <?= $form->field($model, 'value_vl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type_price_change_vl')->dropDownList([ 'none' => 'None', 'percent' => 'Percent', 'fixed' => 'Fixed', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'change_on_vl')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
