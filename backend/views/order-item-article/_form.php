<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\OrderItemArticle */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-item-article-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_order_item_oa')->textInput() ?>

    <?= $form->field($model, 'article_oa')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
