<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Booklet */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="booklet-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title_bk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description_bk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'path_to_preview_bk')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'path_to_pdf_bk')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'id_cateory_bk')->textInput() ?>

    <?= $form->field($model, 'price_bk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'active_bk')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
