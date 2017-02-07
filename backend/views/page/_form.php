<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Page */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="page-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'html_pg')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'description_pg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'number_pg')->textInput() ?>

    <?= $form->field($model, 'temlate_pg')->textInput() ?>

    <?= $form->field($model, 'id_booklet_pg')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
