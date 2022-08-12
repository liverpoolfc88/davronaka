<?php

use yii\helpers\Url; ?>

<?= Yii::$app->controller->renderPartial("//layouts/header") ?>
<!-- ======= Our Services Section ======= -->
<style>
    .short {
        text-overflow: ellipsis;
        white-space: nowrap;
        width: 450px;
        overflow: hidden;
    }
</style>
<section id="services" class="services">
    <div class="container">

        <div class="section-title">
            <h2>Kitoblar</h2>
            <p><?=$change['name']?></p>
        </div>

        <div class="row">

            <? foreach ($books as $key => $b): ?>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box">
                        <div class="short icon"><i class="bx bx-file"></i></div>
                        <h4 class="short title"><a class="short" href=""><?= $b->name ?></a></h4>
                        <p class="description">
                            <a class="btn btn-success" href="<?=Url::to(['/site/bookread','id'=>$b->id])?>">Batafsil o`qish
                            </a>
                            <a title="ko`chirib olish" style="margin-left: 20px;  background-color: #1bbca3;color: white ; border-radius: 50px; padding: 10px" href="<?=$b->file?>">
                                <i class="bx bx-arrow-from-top"></i>
                            </a>
                        </p>
                    </div>
                </div>
            <? endforeach; ?>

        </div>

    </div>
</section><!-- End Our Services Section -->
