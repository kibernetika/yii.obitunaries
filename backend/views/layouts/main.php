<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use kartik\sidenav\SideNav;

AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Obituaries',
        'brandUrl' => Yii::$app->homeUrl,
//        'brandUrl' => Yii::$app->urlFrontendManager->createAbsoluteUrl('site/index'),
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>
        <div style="display: flex; flex-direction: row; padding: 2px; margin: 5px;">
            <div style="width: 300px;">
                <?php
                if(( ! Yii::$app->user->isGuest) && (\Yii::$app->user->can('admin')))
                echo SideNav::widget([
                    'type' => SideNav::TYPE_DEFAULT,
                    'heading' => 'Options',
                    'items' => [
                        [
                            'url' => '/order/index',
                            'label' => 'Orders',
                            'icon' => 'usd'
                        ],
                        [
                            'url' => '/client/index',
                            'label' => 'Clients',
                            'icon' => 'user'
                        ],
                        [
                            'label' => 'Templates',
                            'icon' => 'briefcase',
                            'items' => [
                                ['label' => 'Categories', 'icon'=>'indent-left', 'url'=>'/category/index'],
                                ['label' => 'Booklets', 'icon'=>'align-left', 'url'=>'/booklet/index'],
                            ],
                        ],
                        [
                            'url' => '/options/index',
                            'label' => 'Static pages options',
                            'icon' => 'file'
                        ],
                        [
                            'url' => '/site-page/index',
                            'label' => 'Dynamic pages',
                            'icon' => 'save-file'
                        ],
                        [
                            'url' => '/site/uploads',
                            'label' => 'Files',
                            'icon' => 'folder-open'
                        ],
                    ],
                ]);
                ?>
            </div>
            <div style="flex-grow: 1; ">
                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
                <?= Alert::widget() ?>
                <div style="padding: 10px;">
                    <?= $content ?>
                </div>
            </div>
        </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
