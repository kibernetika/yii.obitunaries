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
                            'url' => '#',
                            'label' => 'Orders',
                            'icon' => 'usd'
                        ],
                        [
                            'url' => '#',
                            'label' => 'Clients',
                            'icon' => 'user'
                        ],
                        [
                            'label' => 'Templates',
                            'icon' => 'briefcase',
                            'items' => [
                                ['label' => 'Categorys', 'icon'=>'indent-left', 'url'=>'#'],
                                ['label' => 'Booklets', 'icon'=>'align-left', 'url'=>'#'],
                                ['label' => 'Pages', 'icon'=>'credit-card', 'url'=>'#'],
                            ],
                        ],
                        [
                            'url' => '#',
                            'label' => 'Static pages options',
                            'icon' => 'file'
                        ],
                        [
                            'url' => '#',
                            'label' => 'Dynamic pages',
                            'icon' => 'save-file'
                        ],
                        [
                            'url' => '#',
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
                <?= $content ?>
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
