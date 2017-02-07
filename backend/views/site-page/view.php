<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\SitePage */

$this->title = $model->id_site_pages_sp;
$this->params['breadcrumbs'][] = ['label' => 'Site Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-page-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_site_pages_sp], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_site_pages_sp], [
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
            'id_site_pages_sp',
            'route_sp',
            'title_sp',
            'content_sp:ntext',
            'active_sp:boolean',
            'order_number_sp',
        ],
    ]) ?>

</div>
