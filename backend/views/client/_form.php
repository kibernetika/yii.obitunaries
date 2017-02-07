<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Client */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="client-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'first_name_cl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'second_name_cl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_address_cl')->textInput() ?>

    <?= $form->field($model, 'mob_phone_cl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'annotation_cl')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
