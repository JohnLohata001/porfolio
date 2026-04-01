
<?php include('includes/header.php'); ?>

<section class="slider">

    <div class="container">

        <h1 class="text-center title-slider text-shadow text-light" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500"><?php echo $top_nav[$language]['5'] ?></h1>
        <p class="text-center text-white" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="500"> Tech Deve Info <?php echo $top_nav[$language]['6'] ?></p>
        <div class="row">
            <div class="col-lg-12 text-center">
                <a href="index.php?767013ce0ee0f6d7a07587912eba3104cfaabc15=about" class="btn btn-outline-info px-5" id="btn-1" data-aos="zoom-in-left" data-aos-easing="linear" data-aos-duration="2500"><?php echo $top_nav[$language]['1'] ?></a>
                <a href="index.php?767013ce0ee0f6d7a07587912eba3104cfaabc15=contact" class="btn btn-outline-info px-5" id="btn-2" data-aos="zoom-in-right" data-aos-easing="linear" data-aos-duration="2500"><?php echo $top_nav[$language]['4'] ?></a>
            </div>
        </div>
        <div class="video_container"><video autoplay loop muted class="video_entete">
            <source src="assets/images/img/video-bg.mp4" type="video/mp4" class="video">
        </video></div>
    </div>

</section>
<!-- ===============x======== slider ============x=========== -->
<!-- ================ content ========================= -->
<!-- ================ section 1 ========================= -->
<main>


    <section class="section-about">
        <div class="container">
            <p class="text-danger" style="font-style: italic;">I<?php echo $website_content[$language]['5'] ?></p>
            <hr class="py-1">
            <div class="row">
                <div class="col-lg-4 box box1 w3-animate-zoom">

                    <p data-aos="flip-up">
                        <img src="assets/images/img/john.jpg" class="img-thumbnail d-block w-100" alt="Cinque Terre" width="100%" height="236">
                    </p>
                    <h5 class="MyFont2" data-aos="flip-up" data-aos-delay="100">John Kalonda</h5>
                    <p align="center" data-aos="flip-up" data-aos-delay="200">
                        <?php echo $website_content[$language]['3'] ?>
                        <br>
                    </p>
                </div>
                <div class="col-lg-8 box box2 w3-animate-zoom" data-aos="zoom-in-left">
                    <h3 align="center" class="text-info"><?php echo $website_content[$language]['0'] ?></h3>
                    <hr class="pt-0">
                    <p>
                        <?php echo $website_content[$language]['1'] ?>
                    </p>
                    <p align="center" class="text-info">
                        <?php echo $website_content[$language]['2'] ?>
                    </p>
                    <h5 class="MyFont"><a href="index.php?767013ce0ee0f6d7a07587912eba3104cfaabc15=about" class="btn btn-outline-info" id="bouton">Read More</a></h5><br>
                    <h4 class="text-secondary" style="text-align:center;font-size:13px;padding:0 20px;font-family: 'Roboto', cursive;">
                        <?php echo $website_content[$language]['4'] ?>
                    </h4>
                    <br>
                </div>
            </div>
    </section>

    <!-- =======x========= section 1 ============x============= -->
    <section class="serviceoffert" id="servicediv">
        <div class="container headings text-center">
            <h1 class="text-center font-weight-bold" data-aos="zoom-in"><?php echo $website_ability[$language]['0'] ?></h1>
            <P class="text-center" data-aos="zoom-in-left" data-aos-delay="200">
                <?php echo $website_ability[$language]['1'] ?>
            </P>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-10 offset-1 offset-lg-0" data-aos="zoom-in-left" data-aos-delay="300">
                    <div class="names my-1">
                        <h1>HTML</h1>
                        <div class="progress w-75">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:100%">100%</div>
                        </div>
                    </div>
                    <div class="names my-3">
                        <h1>CSS & BOOTSTRAP</h1>
                        <div class="progress w-75">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width:90%">90%</div>
                        </div>
                    </div>
                    <div class="names my-3">
                        <h1>JAVASCRIPT (jQuery)</h1>
                        <div class="progress w-75">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width:60%">60%</div>
                        </div>
                    </div>
                    <div class="names my-3">
                        <h1>PHP</h1>
                        <div class="progress w-75">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" style="width:85%">85%</div>
                        </div>
                    </div>
                    <div class="names my-3">
                        <h1>MYSQL</h1>
                        <div class="progress w-75">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width:85%">85%</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12 servicediv" data-aos="zoom-in-right" data-aos-delay="300">
                    <div class="row">
                        <div class="col-lg-2 col-2 service-icons">
                            <i class="fa-3x fa fa-desktop" aria-hidden="true"></i>
                        </div>
                        <div class="col-lg-10 col-10">
                            <h2><?php echo $website_ability[$language]['2'] ?></h2>
                            <p>
                                <?php echo $website_ability[$language]['3'] ?>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-2 service-icons">
                            <i class="fa-3x fa fa-edit" aria-hidden="true"></i>
                        </div>
                        <div class="col-lg-10 col-10">
                            <h2><?php echo $website_ability[$language]['4'] ?></h2>
                            <p>
                                <?php echo $website_ability[$language]['5'] ?>
                            </p>
                        </div>
                    </div>
                    <!-- <div class="row">
                    <div class="col-lg-2 col-2 service-icons">
                        <i class="fa-3x fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <div class="col-lg-10 col-10">
                        <h2>Supoort 24/7</h2>
                        Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Animi, saepe! Et alias
                          quos earum corporis!
                    </div>
                </div> -->
                </div>
            </div>
        </div>
    </section>

    <!-- ================ section 2 ========================= -->

    <section class=" text-light line_2 section-2 box-1">
        <div class="container-about">
            <div class="img-about box-about" data-aos="fade-right" data-aos-delay="300">
                <img src="assets/images/about_john.png" class="img-aboute" style="border-radius:50%;max-width:80%;padding:.5rem;border:solid 1px white">
            </div>
            <div class="text-about box-about" data-aos="fade-left" data-aos-delay="300">
                <h2><?=$website_about[$language][0]?></h2>
                <p>
                <?=$website_about[$language][1]?>
                </p><br><br>
                <a href="about.phpt" class="a_about_btn"><?=$website_about[$language][3]?></a>
            </div>
        </div>

    </section><br><br>

    <!-- ==========x====== section 2 =========x================ -->
    <!-- ================ section 3 ========================= -->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 w3-animate-left" data-aos="fade-right" data-aos-delay="300">
                    <h5 class="MyFont1"><?php echo $website_sha[$language]['0'] ?></h5>
                    <p style="text-align: justify !important;">
                        <?php echo $website_sha[$language]['1'] ?>
                    </p>
                    <p align="center">
                        <a href="https://socialhackersacademy.org/" class="text-info"><?php echo $website_sha[$language]['2'] ?></a>
                    </p>
                </div>
                <div class="col-lg-4 w3-animate-left" data-aos="fade-down" data-aos-delay="200">
                    <h5 class="MyFont1">Social Hacker Academic 2018</h5>
                    <p>
                        <img src="assets/images/sha1.jpg" class="img-thumbnail img-photo" alt="">
                </div>
                <div class="col-lg-4 w3-animate-right" data-aos="fade-left" data-aos-delay="300">
                    <h5 class="MyFont1"><?php echo $website_sha[$language]['3'] ?></h5>
                    <p style="text-align:left !important;">
                        <?php echo $website_sha[$language]['4'] ?>

                    </p>
                    <br>
                    <p align="center">
                        <a href="https://socialhackersacademy.org/" class="text-info"><?php echo $website_sha[$language]['5'] ?></a>
                    </p>

                </div>

            </div>
    </section>
    <div class="container">
        <hr>
    </div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <h3><?php echo $website_sha[$language]['6'] ?></h3>
                    <hr>
                    <p>
                        <?php echo $website_sha[$language]['7'] ?>

                    </p>
                    <p>
                        <?php echo $website_sha[$language]['8'] ?>
                    </p>
                    <br>
                    <p>
                        <a href="contact.php" class="btn btn-outline-danger px-5"><?php echo $website_sha[$language]['9'] ?></a>

                    </p>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                    <h3><?php echo $website_sha[$language]['10'] ?></h3>
                    <hr>
                    <p>
                        <img src="assets/images/img/programmers.jpg" class="img-thumbnail img-photo" width="100%">
                    </p>
                </div>
            </div>
        </div>
        <hr>
    </section>
</main>

<div>
<?php include('includes/footer.php'); ?>
<script src="js/main.js"></script>