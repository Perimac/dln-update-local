<?php
$fromBrowser = "";
if (isset($_GET["value"])) {
    $fromBrowser = $_GET["value"];
} else {
    die('Page not found');
}

$explode = explode("-",$fromBrowser);
$first = $explode[0];
$value = $explode[1];
$searchValue = str_replace("+"," ",$value);
$searchValue = str_replace("_","-",$searchValue);

include 'runners/DB_Functions.php';
$dbfunction = new DB_Functions();
$searchresponse = $dbfunction->searchResponse($first,$searchValue);
echo count($searchresponse);
?>



<?php include "inc/meta.php"; ?>
    <link rel="stylesheet"
          href="../assets/css/bootstrap.min.css%2bowl.carousel.min.css%2bticker-style.css%2bflaticon.css%2bslicknav.css%2banimate.min.css%2bmagnific-popup.css%2bfontawesome-all.min.css%2bthemify-ico"/>
    <link rel="stylesheet" href="../assets/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="../mytech.css"/>

<?php include "inc/header2.php"; ?>


    <main>
        <div class="container">
            <div class="bg0 flex-wr-sb-c p-rl-20 p-tb-8">
            </div>
        </div>

        <div class="container p-t-4 p-b-40">
            <h2 class="f1-l-1 cl2">
                Tag: <?php echo $searchValue?>
            </h2>
        </div>

        <section class="bg0 p-t-70 p-b-55">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8 p-b-80">
                        <div class="row">
                            <?php
                            for ($i = 5; $i < count($searchresponse); $i++) {
                                ?>
                                <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                    <div class="m-b-45">
                                        <a href="detail/<?php echo $searchresponse[$i]['id'] ?>"
                                           class="wrap-pic-w hov1 trans-03">
                                            <img src="<?php echo $searchresponse[$i]['image_url'] ?>" alt="IMG">
                                        </a>
                                        <div class="p-t-16">
                                            <h5 class="p-b-5">
                                                <a href="details.php" class="f1-m-3 cl2 hov-cl10 trans-03">
                                                    <?php echo $searchresponse[$i]['heading']; ?>
                                                </a>
                                            </h5>
                                            <span class="cl8">
                                        <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                            by <?php echo $searchresponse[$i]['author'] ?>
                                        </a>
                                        <span class="f1-s-3 m-rl-3">
                                            -
                                        </span>
                                        <span class="f1-s-3">
                                            <?php
                                            echo $dbfunction->getDateFromString($searchresponse[$i]['date_published']);
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
                                <form class="size-a-9 pos-relative">
                                    <input class="s-full f1-m-6 cl6 plh9 p-l-20 p-r-55" type="text" name="email"
                                           placeholder="Email">
                                    <button class="size-a-10 flex-c-c ab-t-r fs-16 cl9 hov-cl10 trans-03">
                                        <i class="fa fa-arrow-right"></i>
                                    </button>
                                </form>
                            </div>

                            <!-- <div class="p-b-23">
                                <div class="how2 how2-cl4 flex-s-c">
                                    <h3 class="f1-m-2 cl3 tab01-title">
                                        Most Popular
                                    </h3>
                                </div>
                                <ul class="p-t-35">
                                    <li class="flex-wr-sb-s p-b-22">
                                        <div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
                                            1
                                        </div>
                                        <a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                        </a>
                                    </li>
                                    <li class="flex-wr-sb-s p-b-22">
                                        <div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
                                            2
                                        </div>
                                        <a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
                                            Proin velit consectetur non neque
                                        </a>
                                    </li>
                                    <li class="flex-wr-sb-s p-b-22">
                                        <div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
                                            3
                                        </div>
                                        <a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
                                            Nunc vestibulum, enim vitae condimentum volutpat lobortis ante
                                        </a>
                                    </li>
                                    <li class="flex-wr-sb-s p-b-22">
                                        <div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
                                            4
                                        </div>
                                        <a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
                                            Proin velit justo consectetur non neque elementum
                                        </a>
                                    </li>
                                    <li class="flex-wr-sb-s p-b-22">
                                        <div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0">
                                            5
                                        </div>
                                        <a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
                                            Proin velit consectetur non neque
                                        </a>
                                    </li>
                                </ul>
                            </div> -->

                            <div class="flex-c-s p-b-50">
                                <a href="#">
                                    <img class="max-w-full" src="../images/xbanner-02.jpg.pagespeed.ic.SI0M6FaN4k.jpg"
                                         alt="IMG">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>


<?php include './inc/footer2.php' ?>

    <script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="../vendor/animsition%2c_js%2c_animsition.min.js%2bbootstrap%2c_js%2c_popper.js.pagespeed.jc.gropUTGViT.js"></script>
    <script>
        eval(mod_pagespeed_zs7_gvO72X);
    </script>

    <script>
        eval(mod_pagespeed_jNZzcCb7VS);
    </script>
    <script src="../vendor%2c_bootstrap%2c_js%2c_bootstrap.min.js%2bjs%2c_main.js.pagespeed.jc.VpS9-GaWKs.js"></script>
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
    <script defer src="../../../../static.cloudflareinsights.com/beacon.min.js"
            data-cf-beacon='{"rayId":"66b946b9ff58da72","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.6.0","si":10}'></script>


<?php include './inc/footer-meta2.php' ?>