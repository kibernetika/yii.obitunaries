<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\OptionsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="options-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_options_op') ?>

    <?= $form->field($model, 'pages_title_op') ?>

    <?= $form->field($model, 'value_op') ?>

    <?= $form->field($model, 'description_op') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
