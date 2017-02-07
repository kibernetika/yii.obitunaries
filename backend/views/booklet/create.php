<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Booklet */

$this->title = 'Create Booklet';
$this->params['breadcrumbs'][] = ['label' => 'Booklets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booklet-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
