<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SitePage */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="site-page-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'route_sp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_sp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content_sp')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'active_sp')->checkbox() ?>

    <?= $form->field($model, 'order_number_sp')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
