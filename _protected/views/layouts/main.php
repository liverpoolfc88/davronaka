<?php
/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

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
    <link rel="icon" type="image/png" sizes="32x32" href="/themes/assets/img/davronbek.jpg">
    <link rel="icon" type="image/png" sizes="96x96" href="/themes/assets/img/davronbek.jpg">
    <link rel="icon" type="image/png" sizes="16x16" href="/themes/assets/img/davronbek.jpg">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Davronbek">
    <meta property="og:title" content="Davronbek tavsiyalari, dori-darmonlar, tibbiyotga oid ma`lumotlar">
    <meta property="og:description" content="Siz uchun qulay va arzon narxlarda.">
    <meta property="og:url" content="https://davronbek.websar.uz">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:image" content="http://davronbek.websar.uz/themes/assets/img/davronbek.jpg">
    <meta property="og:image:width" content="968">
    <meta property="og:image:height" content="504">
<!--    <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,700' rel='stylesheet' type='text/css'>-->
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

    <div style="padding: 0" class="container-fluid">

        <?= $content ?>
    </div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
