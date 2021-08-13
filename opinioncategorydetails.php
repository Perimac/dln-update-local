<?php include "inc/meta.php"; ?>


<link rel="stylesheet" href="../assets/css/bootstrap.min.css%2bowl.carousel.min.css%2bticker-style.css%2bflaticon.css%2bslicknav.css%2banimate.min.css%2bmagnific-popup.css%2bfontawesome-all.min.css%2bthemify-ico" />
<link rel="stylesheet" href="../assets/css/style.css" />
<link rel="icon" type="image/png" href="../images/icons/xfavicon.png.pagespeed.ic.0zk7TR-Xxr.png" />
<link rel="stylesheet" type="text/css" href="../mytech.css" />

<?php include "inc/header2.php"; ?>
<?php

$ofCatid = "";
$response = array();

if (isset($_GET["ofcatid"])) {
    $ofCatid = str_replace("+", " ", $_GET["ofcatid"]);
} else {
    die("ERROR: Page Not Found");
}

$response = $dbfunc->geGenRow('opinions_features', 'id', $ofCatid);

?>
<section class="bg0 p-b-140 p-t-10" style="margin-top: 30px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 p-b-30">
                <div class="p-r-10 p-r-0-sr991">
                    <div class="p-b-70">
                        <a href="#" class="f1-s-10 cl2 hov-cl10 trans-03 text-uppercase">
                            <?php echo $response['category']; ?>
                        </a>
                        <h3 class="f1-l-3 cl2 p-b-16 p-t-33 respon2">
                            <?php echo $response['heading']; ?>
                        </h3>
                        <div class="flex-wr-s-s p-b-40">
                            <span class="f1-s-3 cl8 m-r-15">
                                <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                    by <?php echo $response['source']; ?>
                                </a>
                                <span class="m-rl-3">-</span>
                                <span>
                                    <?php echo $dbfunc->getDateFromString($response['date_published']); ?>
                                </span>
                            </span>
                            <span class="f1-s-3 cl8 m-r-15">
                                <?php echo $response['views']; ?> Views
                            </span>
                            <a href="javascript:void(0)" class="f1-s-3 cl8 hov-cl10 trans-03 m-r-15">
                                <?php // echo count($comments); 
                                ?> Comment
                            </a>
                        </div>
                        <div class="wrap-pic-max-w p-b-30">
                            <img src="<?php echo $baseImageUrl . $response['image'] ?>_0.png" alt="IMG">
                        </div>
                        <p class="f1-s-11 cl6 p-b-25">
                            <?php echo html_entity_decode($response['article_body']); ?>
                        </p><br><br>

                        <!-- <div class="flex-s-s p-t-12 p-b-15">
                            <span class="f1-s-12 cl5 m-r-8">
                                Tags:
                            </span>
                            <div class="flex-wr-s-s size-w-0">
                             <?php
                                $tags = $result['tags'];
                                $explode = explode(",", $tags);

                                foreach ($explode as $key => $val) {
                                    $url = str_replace(" ", "+", $val);
                                    $url = str_replace("-", "_", $url);
                                ?>
                                    <a href="../search/tags-<?php echo $url ?>" class="f1-s-12 cl8 hov-link1 m-r-15">
                                        <?php echo $val ?>
                                    </a>
                                <?php
                                }
                                ?>
                            </div>
                        </div> -->
                        <div class="flex-s-s">
                            <span class="f1-s-12 cl5 p-t-1 m-r-15">
                                Share:
                            </span>

                            <div class="flex-wr-s-s size-w-0">
                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $shareBase; ?>opinion-category-details/<?php echo $id ?>" target="_blank" class="dis-block f1-s-13 cl0 bg-facebook borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
                                    <i class="fab fa-facebook-f m-r-7"></i>
                                    Facebook
                                </a>
                                <a href="https://twitter.com/share?url=<?php echo $shareBase; ?>opinion-category-details/<?php echo $id ?>" target="_blank" class="dis-block f1-s-13 cl0 bg-twitter borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
                                    <i class="fab fa-twitter m-r-7"></i>
                                    Twitter
                                </a>

                                <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo $shareBase; ?>opinion-category-details/<?php echo $id ?>" target="_blank" class="dis-block f1-s-13 cl0 bg-pinterest borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
                                    <i class="fab fa-linkedin m-r-7"></i>
                                    LinkedIn
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-10 col-lg-4 p-b-30">
                <div class="p-l-10 p-rl-0-sr991 p-t-70">

                    <div class="p-b-30">
                        <div class="how2 how2-cl4 flex-s-c">
                            <h3 class="f1-m-2 cl3 tab01-title">
                                Related Articles
                            </h3>
                        </div>
                        <ul class="p-t-35">
                            <?php
                            $relatedcategory = $dbfunc->getOpinionsFeaturesCategory($response['category'],6,0);
                            for ($i = 0; $i < count($relatedcategory); $i++) {
                            if ($relatedcategory[$i]['id'] != $ofCatid ) {
                            ?>
                                <li class="flex-wr-sb-s p-b-30">
                                    <a href="<?php echo $relatedcategory[$i]['id'] ?>" class="size-w-10 wrap-pic-w hov1 trans-03">
                                        <img src="<?php echo $baseImageUrl . $relatedcategory[$i]['image']; ?>_0.png" alt="IMG">
                                    </a>
                                    <div class="size-w-11">
                                        <h6 class="p-b-4">
                                            <a href="<?php echo $relatedcategory[$i]['id'] ?>" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                <?php echo $relatedcategory[$i]["heading"] ?>
                                            </a>
                                        </h6>
                                        <span class="cl8 txt-center p-b-24">
                                            <a class="f1-s-6 cl8 hov-cl10 trans-03">
                                                <?php echo $relatedcategory[$i]["sub_categories"] ?>
                                            </a>
                                            <span class="f1-s-3 m-rl-3">
                                                -
                                            </span>
                                            <span class="f1-s-3">
                                                <?php
                                                echo $dbfunc->getDateFromString($relatedcategory[$i]['date_published']);
                                                ?>
                                            </span>
                                        </span>
                                    </div>
                                </li>

                            <?php
                            } }

                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




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
<script defer src="../../../../static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"66b946b9ff58da72","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.6.0","si":10}'></script>


<?php include './inc/footer-meta2.php' ?>