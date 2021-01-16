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
                            <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Shuffle</span></h2>
                            <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui
                                aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                                mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti
                                vel. Minus et tempore modi architecto.</p>
                            <a style="text-decoration: none" href="tel:+998979933632" target="_blank"
                               class="btn-get-started animate__animated animate__fadeInUp scrollto">+998979933632</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="carousel-background"><img src="themes/assets/img/slide/slide-2.jpg" alt=""></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
                            <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui
                                aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                                mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti
                                vel. Minus et tempore modi architecto.</p>
                            <a style="text-decoration: none" href="tel:+998979933632" target="_blank"
                               class="btn-get-started animate__animated animate__fadeInUp scrollto">+998979933632</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item">
                    <div class="carousel-background"><img src="themes/assets/img/slide/slide-3.jpg" alt=""></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
                            <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui
                                aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                                mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti
                                vel. Minus et tempore modi architecto.</p>
                            <a style="text-decoration: none" href="tel:+998979933632" target="_blank"
                               class="btn-get-started animate__animated animate__fadeInUp scrollto">+998979933632</a>
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
                <h2>About Us</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <img src="themes/assets/img/davronbek.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                    <h3>Voluptatem dignissimos <strong>provident quasi corporis voluptates</strong></h3>
                    <p class="font-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore
                        magna aliqua.
                    </p>
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                        in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident.
                    </p>

                    <div class="skills-content">

                        <div class="progress">
                            <span class="skill">HTML <i class="val">100%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                     aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">CSS <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                     aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">JavaScript <i class="val">75%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                     aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Photoshop <i class="val">55%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                     aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->


    <!-- ======= Our Portfolio Section ======= -->
    <section id="allproduct" class="portfolio section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Our Portfolio</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit in iste officiis commodi quidem hic quas.</p>
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
                <? foreach ($itemarray as $k => $v): ?>
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
                <h2>Our Team</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit in iste officiis commodi quidem hic quas.</p>
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
                                    <a style=" text-decoration: line-through;" href=""><i> <?= $val['prices'] ?> sum</i></a>
                                    <a href=""><i> <?= ($val['prices']) - ($val['prices'] * $val['sales'] / 100) ?>
                                            sum</i></a>
                                </div>
                            </div>
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
                <h3>Call To Action</h3>
                <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                    anim id est laborum.</p>
                <a style="text-decoration: none" class="cta-btn" href="tel:+998979933632"
                   target="_blank">+998979933632</a>
            </div>

        </div>
    </section><!-- End Cta Section -->


    <!-- ======= More Services Section ======= -->
    <section id="specialproduct" class="more-services section-bg">
        <div class="container">

            <div class="row">
                <? foreach ($special as $key => $val): ?>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="card">
                            <img style="height: 200px" src="<?= $val['photo'] ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><a href=""><?= $val['names'] ?></a></h5>
                                <p class="card-text">Et architecto provident deleniti facere repellat nobis iste. Id
                                    facere quia quae dolores dolorem tempore</p>
                                <a href="https://t.me/Liverpoolfc_88" class="btn" target="_blank">Buyurtma berish</a>
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
                <h2>Contact Us</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>
        </div>

        <div class="container-fluid">

            <div class="row">

                <div class="col-lg-6 d-flex align-items-stretch infos">

                    <div class="row">

                        <div class="col-lg-6 info d-flex flex-column align-items-stretch">
                            <i class="bx bx-map"></i>
                            <h4>Manzil</h4>
                            <p>Asaka,<br>Yu.Tuvadoq, 257</p>
                        </div>
                        <div class="col-lg-6 info info-bg d-flex flex-column align-items-stretch">
                            <i class="bx bx-phone"></i>
                            <h4>Tel</h4>
                            <p>+998979933632<br>+998941073632</p>
                        </div>
                        <div class="col-lg-6 info info-bg d-flex flex-column align-items-stretch">
                            <i class="bx bx-envelope"></i>
                            <h4>Email</h4>
                            <p>sardor88.88@mail.ru<br>liverpool88@gmail.com</p>
                        </div>
                        <div class="col-lg-6 info d-flex flex-column align-items-stretch">
                            <i class="bx bx-time-five"></i>
                            <h4>Murojaat vaqti</h4>
                            <p>Dushanba - Juma: 8:00 dan 18:00<br>Shanba: 9:00 dan 14:00</p>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6 d-flex align-items-stretch contact-form-wrap">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1208.0969460163776!2d72.22123656131726!3d40.66293128531802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDM5JzQ2LjYiTiA3MsKwMTMnMTguOSJF!5e1!3m2!1sru!2s!4v1610707509796!5m2!1sru!2s"
                            width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0"></iframe>
                </div>

            </div>

        </div>
    </section><!-- End Contact Us Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span></span></strong>. Barcha huquqlar ximoyalangan
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bootstrap-3-one-page-template-free-shuffle/ -->
            <?=date('d.m.Y')?> <a href="https://www.websar.com/">websar.uz</a>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

