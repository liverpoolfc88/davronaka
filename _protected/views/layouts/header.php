<?php
use yii\helpers\Url;
use app\models\Menu;
use yii\helpers\Html;
$menu = Menu::find()->all();

$controlleraction = Yii::$app->controller->action->id;
$action = Yii::$app->controller->id;
?>
<!-- ======= Header ======= -->
<header id="header">
    <div class="container d-flex">

        <div class="logo mr-auto">
            <h1 class="text-light"><a href="index.html"><span>MedDoc</span></a></h1>
            <!-- Uncomment below if you prefer to use anuse yii\helpers\Url; image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="<?=Url::to(['/site/index'])?>">Asosiy</a></li>
                <? if (($controlleraction != 'book') && ($controlleraction != 'login')): ?>
                <li><a href="#about">Biz haqimizda</a></li>
                <li><a href="#allproduct">Maxsulotlar</a></li>
                <li><a href="#specialproduct">Maxsus</a></li>
                <li><a href="#saleproduct">Chegirma</a></li>
                <li><a href="#contact">Aloqa</a></li>
                <? endif; ?>
                <? if ($controlleraction != 'login'): ?>
                <li><a href="<?=Url::to(['/site/book'])?>">Kitoblar</a></li>
                <? endif; ?>
                <? if (!Yii::$app->user->isGuest):?>
                <li><a href="<?=Url::to(['/menu/index'])?>">Admin</a></li>
                <li > <?= Html::a('Chiqish', ['/site/logout'], ['data' => ['method' => 'post']]) ?></li>
                <? endif;?>
                <? if (Yii::$app->user->isGuest):?>
                <li><a href="<?=Url::to(['/site/login'])?>">Kirish</a></li>
                <? endif;?>


            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->