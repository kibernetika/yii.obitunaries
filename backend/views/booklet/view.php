<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Booklet */

$this->title = $model->id_booklet_bk;
$this->params['breadcrumbs'][] = ['label' => 'Booklets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booklet-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_booklet_bk], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_booklet_bk], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_booklet_bk',
            'title_bk',
            'description_bk',
            'path_to_preview_bk:ntext',
            'path_to_pdf_bk:ntext',
            'id_cateory_bk',
            'price_bk',
            'active_bk:boolean',
        ],
    ]) ?>

</div>
