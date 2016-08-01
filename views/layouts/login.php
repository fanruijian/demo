<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\LoginAsset;
LoginAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <?= Html::csrfMetaTags() ?> -->
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <style type="text/css">
    body {
        width: 100%;
        height: 100%;
        margin:0;
        padding: 0;
        background: #292a2f;
        color:#62687e;
    }
    .wrap{
        width: 100%;
        height: 100%;
    }

    .login{
        position: relative;
        margin: 0 auto;
        top:500px;
        width:450px;
        height: 412px;
        background: white; 
    }

    .footer{
        position: fixed;
        bottom: 0px;
    }
    </style>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrap">
    <div class="container">
        <div class="login">
            <?= $content ?>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; company vamaker design by xiaofan @2016-2017 <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
