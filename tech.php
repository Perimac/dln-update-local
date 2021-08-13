

<?php include "inc/meta.php"; ?>

<?php
$respo = $dbfunc->getTechNews();
?>

    <link rel="stylesheet"
          href="assets/css/bootstrap.min.css%2bowl.carousel.min.css%2bticker-style.css%2bflaticon.css%2bslicknav.css%2banimate.min.css%2bmagnific-popup.css%2bfontawesome-all.min.css%2bthemify-ico"/>
    <link rel="stylesheet" href="assets/css/style.css"/>


    <link rel="stylesheet" type="text/css" href="mytech.css"/>

<?php include "inc/header.php"; ?>


    <main>
        <div class="container">
            <div class="bg0 flex-wr-sb-c p-rl-20 p-tb-8">
            </div>
        </div>

        <div class="container p-t-4 p-b-40">
            <h2 class="f1-l-1 cl2">
                Tech
            </h2>
        </div>

        <?php if(count($respo) > 0){ ?>

        <section class="bg0">
            <div class="container">
                <div class="row m-rl--1">

                    <div class="col-12 p-rl-1 p-b-2">
                        <div class="bg-img1 size-a-3 how1 pos-relative"
                             style="background-image:url(<?php echo $baseImageUrl.$respo[0]['image_url']; ?>_0.png)">
                            <a href="detail/<?php echo $respo[0]['id'] ?>" class="dis-block how1-child1 trans-03"></a>
                            <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                                <a href="#"
                                   class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                                    Technology
                                </a>
                                <h3 class="how1-child2 m-t-14 m-b-10">
                                    <a href="detail/<?php echo $respo[0]['id'] ?>"
                                       class="how-txt1 size-a-6 f1-l-1 cl0 hov-cl10 trans-03">
                                        <?php echo $respo[0]['heading']; ?>
                                    </a>
                                </h3>
                                <span class="how1-child2">
                                <span class="f1-s-4 cl11">
                                    <?php echo $respo[0]['author'] ?>
                                </span>
                                <span class="f1-s-3 cl11 m-rl-3">
                                    -
                                </span>
                                <span class="f1-s-3 cl11">
                                    <?php
                                    echo $dbfunc->getDateFromString($respo[0]['date_published']);
                                    ?>
                                </span>
                            </span>
                            </div>
                        </div>
                    </div>

                    <?php if(count($respo) > 1){ ?>
                    <div class="col-sm-6 col-md-3 p-rl-1 p-b-2">
                        <div class="bg-img1 size-a-14 how1 pos-relative"
                             style="background-image:url(<?php echo $baseImageUrl.$respo[1]['image_url'] ?>_1.png)">
                            <a href="detail/<?php echo $respo[1]['id'] ?>" class="dis-block how1-child1 trans-03"></a>
                            <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                                <a href="#"
                                   class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                                    Tech
                                </a>
                                <h3 class="how1-child2 m-t-14">
                                    <a href="detail/<?php echo $respo[1]['id'] ?>"
                                       class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">
                                        <?php echo $respo[1]['heading'] ?>
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                <?php
                     }

                    if(count($respo) > 2){
                 ?>

                    <div class="col-sm-6 col-md-3 p-rl-1 p-b-2">
                        <div class="bg-img1 size-a-14 how1 pos-relative"
                             style="background-image:url(<?php echo $baseImageUrl.$respo[1]['image_url'] ?>_1.png)">
                            <a href="detail/<?php echo $respo[2]['id'] ?>" class="dis-block how1-child1 trans-03"></a>
                            <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                                <a href="#"
                                   class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                                    Tech
                                </a>
                                <h3 class="how1-child2 m-t-14">
                                    <a href="detail/<?php echo $respo[2]['id'] ?>"
                                       class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">
                                        <?php echo $respo[2]['heading'] ?>
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <?php
                     }

                        if(count($respo) > 3){
                    ?>

                    <div class="col-sm-6 col-md-3 p-rl-1 p-b-2">
                        <div class="bg-img1 size-a-14 how1 pos-relative"
                             style="background-image:url(<?php echo $baseImageUrl.$respo[1]['image_url'] ?>_1.png)">
                            <a href="detail/<?php echo $respo[3]['id'] ?>" class="dis-block how1-child1 trans-03"></a>
                            <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                                <a href="#"
                                   class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                                    Tech
                                </a>
                                <h3 class="how1-child2 m-t-14">
                                    <a href="detail/<?php echo $respo[3]['id'] ?>"
                                       class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">
                                        <?php echo $respo[3]['heading'] ?>
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <?php
                     }

                        if(count($respo) > 4){
                     ?>
                    <div class="col-sm-6 col-md-3 p-rl-1 p-b-2">
                        <div class="bg-img1 size-a-14 how1 pos-relative"
                             style="background-image:url(<?php echo $baseImageUrl.$respo[1]['image_url'] ?>_1.png)">
                            <a href="detail/<?php echo $respo[4]['id'] ?>" class="dis-block how1-child1 trans-03"></a>
                            <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                                <a href="#"
                                   class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                                    Tech
                                </a>
                                <h3 class="how1-child2 m-t-14">
                                    <a href="detail/<?php echo $respo[4]['id'] ?>"
                                       class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">
                                        <?php echo $respo[4]['heading'] ?>
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>

        <?php } ?>

        <?php if(count($respo) > 5){ ?>
        <section class="bg0 p-t-70 p-b-55">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8 p-b-80">
                        <div class="row">
                            <?php
                            for ($i = 5; $i < count($respo); $i++) {
                                ?>
                                <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                    <div class="m-b-45">
                                        <a href="detail/<?php echo $respo[$i]['id'] ?>"
                                           class="wrap-pic-w hov1 trans-03">
                                            <img src="<?php echo $baseImageUrl.$respo[1]['image_url'] ?>_1.png" alt="IMG">
                                        </a>
                                        <div class="p-t-16">
                                            <h5 class="p-b-5">
                                                <a href="detail/<?php echo $respo[$i]['id'] ?>" class="f1-m-3 cl2 hov-cl10 trans-03">
                                                    <?php echo $respo[$i]['heading']; ?>
                                                </a>
                                            </h5>
                                            <span class="cl8">
                                        <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                            by <?php echo $respo[$i]['author'] ?>
                                        </a>
                                        <span class="f1-s-3 m-rl-3">
                                            -
                                        </span>
                                        <span class="f1-s-3">
                                            <?php
                                            echo $dbfunc->getDateFromString($respo[$i]['date_published']);
                                            ?>
                                        </span>
                                    </span>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>

                        </div>
                    </div>

                    <div class="col-md-10 col-lg-4 p-b-80">
                        <div class="p-l-10 p-rl-0-sr991">

                            <div class="bg10 p-rl-35 p-t-28 p-b-35 m-b-50">
                                <h5 class="f1-m-5 cl0 p-b-10">
                                    Subscribe
                                </h5>
                                <p class="f1-s-1 cl0 p-b-25">
                                    Get all of our news letter content delivered for notification to your email.
                                </p>
                                    <form action="javascript:void(0)" class="size-a-9 pos-relative">
                                        <input class="s-full f1-m-6 cl6 plh9 p-l-20 p-r-55" type="text" id="email-to-post-to-subscribe" placeholder="Email">
                                        <button onclick="postNewsLetter2()" class="size-a-10 flex-c-c ab-t-r fs-16 cl9 hov-cl10 trans-03">
                                            <i class="fa fa-arrow-right"></i>
                                        </button>
                                    </form>
                                  <div class="mt-10 info2"></div>
                            </div>

                            <div class="flex-c-s p-b-50">
                                <a href="#">
                                    <img class="max-w-full" src="images/xbanner-02.jpg.pagespeed.ic.SI0M6FaN4k.jpg"
                                         alt="IMG">
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <?php } ?>
    </main>


<?php include './inc/footer.php' ?>

    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/animsition%2c_js%2c_animsition.min.js%2bbootstrap%2c_js%2c_popper.js.pagespeed.jc.gropUTGViT.js"></script>
    <script>
        eval(mod_pagespeed_zs7_gvO72X);
    </script>

    <script>
        eval(mod_pagespeed_jNZzcCb7VS);
    </script>
    <script src="vendor%2c_bootstrap%2c_js%2c_bootstrap.min.js%2bjs%2c_main.js.pagespeed.jc.VpS9-GaWKs.js"></script>
    <script>
        eval(mod_pagespeed_h8ROCwW8Hn);
    </script>

    <script>
        eval(mod_pagespeed_MMc2ZSknve);
    </script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="../../../static.cloudflareinsights.com/beacon.min.js"
            data-cf-beacon='{"rayId":"66b946b9ff58da72","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.6.0","si":10}'></script>


<?php include './inc/footer-meta.php' ?>