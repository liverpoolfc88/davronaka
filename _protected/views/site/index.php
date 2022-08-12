<?php
/* @var $this yii\web\View */

$this->title = Yii::t('app', Yii::$app->name);

use yii\helpers\Url; ?>

<!-- ======= Hero Section ======= -->

<section style="height: 93vh" id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="carousel-background"><img src="themes/assets/img/slide/slide-1.jpg" alt=""></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 class="animate__animated animate__fadeInDown"><?=$change[0]['name']?></h2>
                            <p class="animate__animated animate__fadeInUp"><?=$change[3]['name']?></p>
                            <a style="text-decoration: none" href="tel:+998943840008" target="_blank"
                               class="btn-get-started animate__animated animate__fadeInUp scrollto"><?=$change[13]['name']?></a>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="carousel-background"><img src="themes/assets/img/slide/slide-2.jpg" alt=""></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 class="animate__animated animate__fadeInDown"><?=$change[1]['name']?></h2>
                            <p class="animate__animated animate__fadeInUp"><?=$change[4]['name']?></p>
                            <a style="text-decoration: none" href="tel:+998943840008" target="_blank"
                               class="btn-get-started animate__animated animate__fadeInUp scrollto"><?=$change[13]['name']?></a>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item">
                    <div class="carousel-background"><img src="themes/assets/img/slide/slide-3.jpg" alt=""></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 class="animate__animated animate__fadeInDown"><?=$change[2]['name']?></h2>
                            <p class="animate__animated animate__fadeInUp"><?=$change[5]['name']?></p>
                            <a style="text-decoration: none" href="tel:+998943840008" target="_blank"
                               class="btn-get-started animate__animated animate__fadeInUp scrollto"><?=$change[13]['name']?></a>
                        </div>
                    </div>
                </div>
            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon icofont-thin-double-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon icofont-thin-double-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
</section><!-- End Hero -->

<?= Yii::$app->controller->renderPartial("//layouts/header") ?>

<main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="section-title">
                <h2>Biz haqimizda</h2>
                <p><?=$change[6]['name']?></p>
            </div>

            <div class="row">
                <div style="text-align: center;  " class="col-lg-6">
                    <div class="preview">
                        <img style="height: 300px; " src="<?=(isset($photo))?$photo->photo:''?> " class="img-fluid" alt="">
                    </div>
                    <? if (!Yii::$app->user->isGuest):?>
                    <form method="post" action="" enctype="multipart/form-data" id="myform">
                        <div style="margin-top: 10px" class="row">
                            <div class="col-md-6">
                                <input type="file" id="file" name="file">
                            </div>
                            <div class="col-md-6">
                                <input type="button" class="button" value="Upload" id="but_upload">
                            </div>
                        </div>
                    </form>
                    <?endif;?>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                    <h3> <strong><?=$change[7]['name']?></strong></h3>
                    <p class="font-italic">
                        <?=$change[8]['name']?>
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->


    <!-- ======= Our Portfolio Section ======= -->
    <section id="allproduct" class="portfolio section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Bizning dorilar</h2>
                <p> <?=$change[9]['name']?></p>
            </div>

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <? foreach ($array as $key => $val): ?>
                            <li data-filter=".My<?= $val['id'] ?>"><?= $val['name'] ?></li>
                        <? endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="row portfolio-container">
                <? foreach ($itemmenu as $k => $v): ?>
                    <div class="col-lg-4 col-md-6 portfolio-item My<?= $v['menu_id'] ?>">
                        <div class="portfolio-wrap">
                            <img src="<?= $v['photo'] ?>" class="img-fluid" alt="<?= $v['names'] ?>">
                            <div class="portfolio-info">
                                <h4><?= $v['names'] ?></h4>
                                <p><?= $v['prices'] ?> sum</p>
                            </div>
                            <div class="portfolio-links">
                                <a href="<?= $v['photo'] ?>" data-gall="portfolioGallery" class="venobox"
                                   title="<?= $v['names'] ?>"><i class="bx bx-plus"></i></a>
                            </div>
                            <div style="height: 30px; background-color: #ff9c00; text-align:center; padding:5px">
                                <p>Narxi: <?=$v['prices'] ?></p>
                            </div>
                            <div style="color: white; background-color: #ff9c00; text-align:center; padding:5px">
                                <p><?=$v['text'] ?></p>
                            </div>
                        </div>
                    </div>
                <? endforeach; ?>
            </div>
        </div>
    </section><!-- End Our Portfolio Section -->
    <!-- ======= Our Team Section ======= -->
    <section id="saleproduct" class="team">
        <div class="container">
            <div class="section-title">
                <h2>Chegirmalar</h2>
                <p><?=$change[10]['name']?></p>
            </div>
            <div class="row">
                <? $i = 0;
                foreach ($saleitem as $key => $val): ?>
                    <? $i = $i + 0.1; ?>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div style="background-color: white" class="member" data-wow-delay="<?= $i ?>s">
                            <img style="height: 250px" src="<?= $val['photo'] ?>" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4><?= $val['names'] ?></h4>
                                    <span>Chegirma: <?= $val['sales'] ?>%</span>
                                </div>
                                <div class="social">
                                    <a style=" text-decoration: line-through;" ><i> <?= $val['prices'] ?> sum</i></a>
                                    <a><i> <?= ($val['prices']) - ($val['prices'] * $val['sales'] / 100) ?>sum</i></a>
                                </div>
                            </div>
                        </div>
                        <style>
                            #hov :hover{
                                background-color: yellow;
                            }
                        </style>
                        <div id="hov" style="text-align: center;">
                            <a  style="text-decoration: none;" ><i> <?= $val['text'] ?></i></a>
                        </div>
                    </div>
                <? endforeach; ?>
            </div>
        </div>
    </section><!-- End Our Team Section -->
    <!-- ======= Cta Section ======= -->
    <section class="cta">
        <div class="container">

            <div class="text-center">
                <h3>Sog'lik muhim!</h3>
                    <p> <?=$change[11]['name']?></p>
                <a style="text-decoration: none" class="cta-btn" href="tel:+998943840008"
                   target="_blank"><?=$change[13]['name']?></a>
            </div>

        </div>
    </section><!-- End Cta Section -->


    <!-- ======= More Services Section ======= -->
    <section id="specialproduct" class="more-services section-bg">
        <div class="container">

            <div class="row">
                <? foreach ($special as $key => $val): ?>
                    <div style="padding-bottom: 20px" class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="card">
                            <img style="height: 200px" src="<?= $val['photo'] ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><a><?= $val['names'] ?></a></h5>
                                <p class="card-text">Narxi: <?=$val['prices']?> sum</p>
                                <p class="card-text">Narxi: <?=$val['text']?></p>
                                <a href="https://t.me/OnlineDoktorADB" class="btn" target="_blank">Buyurtma berish</a>
                            </div>
                        </div>
                    </div>
                <? endforeach; ?>
            </div>

        </div>
    </section><!-- End More Services Section -->


    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact section-bg">

        <div class="container">
            <div class="section-title">
                <h2>Aloqa</h2>
                <p><?=$change[11]['name']?></p>
            </div>
        </div>

        <div class="container-fluid">

            <div class="row">

                <div class="col-lg-6 d-flex align-items-stretch infos">

                    <div class="row">

                        <div class="col-lg-6 info d-flex flex-column align-items-stretch">
                            <i class="bx bx-map"></i>
                            <h4>Manzil</h4>
                            <p>Asaka,<br>Yuqori Bòz, Yoshlik 15</p>
                        </div>
                        <div class="col-lg-6 info info-bg d-flex flex-column align-items-stretch">
                            <i class="bx bx-phone"></i>
                            <h4>Tel</h4>
                            <p><br><?=$change[13]['name']?></p>
                        </div>
                        <div class="col-lg-6 info info-bg d-flex flex-column align-items-stretch">
                            <i class="bx bx-envelope"></i>
                            <h4>Email</h4>
                            <p>davron@mail.ru<br>davronog`a@gmail.com</p>
                        </div>
                        <div class="col-lg-6 info d-flex flex-column align-items-stretch">
                            <i class="bx bx-time-five"></i>
                            <h4>Murojaat vaqti</h4>
                            <p>Dushanba - Juma: 8:00 dan 18:00<br>Shanba: 9:00 dan 14:00</p>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6 d-flex align-items-stretch contact-form-wrap">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7644.880707959812!2d72.210006!3d40.611694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDM2JzQyLjEiTiA3MsKwMTInMzYuMCJF!5e1!3m2!1sru!2s!4v1611204883236!5m2!1sru!2s"
                            width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>

            </div>

        </div>
    </section><!-- End Contact Us Section -->

</main><!-- End #main -->

<div class="btns" id="btns">
    <a href="https://t.me/dorixonaVAdavolashDOKTOR" target="_blank" class="tg" ><img alt="Napa Telegram" src="/themes/telegram.svg" width="60"/></a>
</div>
<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span></span></strong>. Barcha huquqlar ximoyalangan
        </div>
        <div class="credits">
            <?=date('d.m.Y')?> <a href="https://www.websar.com/">websar.uz</a>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<script src="/themes/jquery/jquery.min.js"></script>
<script>
    $(function () {

            $("#but_upload").click(function(){
                var fd = new FormData();
                var files = $('#file')[0].files[0];
                fd.append('file',files);
                $.ajax({
                    url: 'site/photo',
                    type: 'post',
                    data: fd,
                    contentType: false,
                    processData: false,
                    success: function(response){

                        if(response != 0){
                            $("#img").attr("src",response);
                            $(".preview img").show(); // Display image element
                        }else{
                            alert('file not uploaded');
                        }
                    },
                });
                window.location.reload();
            });
        })

</script>