<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Propertie */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="propertie-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_category_pr')->textInput() ?>

    <?= $form->field($model, 'name_pr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type_pr')->dropDownList([ 'y\\n' => 'Y\\n', 'check' => 'Check', 'list' => 'List', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'description_pr')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
