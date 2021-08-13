<?php error_reporting(E_ERROR | E_PARSE); ?>
<?php
include 'runners/DB_Functions.php';
$dbfunc = new DB_Functions();
$accounts = $dbfunc->getAllSocialMedia();
$baseUrl = "http://dennislawnews.com/";
$shareBase = "google.com/dln-update/";
$baseFileUrl = "http://dennislawnews.com";
$baseImageUrl = $baseFileUrl . "croppedimages/";


$id = "";
if (isset($_GET["techid"])) {
    $id = $_GET["techid"];
} else {
    die('Page not found');
}
$result = $dbfunc->getTableRow($id);
$comments = $dbfunc->getComments($id);
?>

<!DOCTYPE html>
<html class="no-js" lang="en-us">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title><?php echo html_entity_decode($result['heading'], ENT_QUOTES) ?></title>

    <meta name="description" content="<?php echo html_entity_decode($result['short_description'], ENT_QUOTES) ?>">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?php echo html_entity_decode($result['heading'], ENT_QUOTES) ?>">
    <meta property="og:locale" content="en_US">
    <meta property="og:url" content="<?php echo $baseUrl.'interviewdetails/'.$id; ?>">
    <meta property="og:image" content="<?php echo $baseImageUrl . $result['image_url'] ?>_2.png">
    <meta property="og:title" content="<?php echo html_entity_decode($result['heading'], ENT_QUOTES) ?>">
    <meta property="og:description" content="<?php echo html_entity_decode($result['short_description'], ENT_QUOTES) ?>">
    <meta name="keywords" content="<?php echo str_replace(" ", ",", html_entity_decode($result['short_description'], ENT_QUOTES)).",". str_replace(" ", ",", html_entity_decode($result['heading'], ENT_QUOTES)) ?>">
    <meta property="fb:page_id" content="103543418210602">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="">
    <meta name="twitter:domain" content="<?php echo $baseUrl.'interviewdetails/'.$id; ?>">
    <meta name="twitter:app:name:googleplay" content="<?php echo html_entity_decode($result['heading'], ENT_QUOTES) ?>">
    <meta name="twitter:app:id:googleplay" content="">
    <meta name="twitter:app:name:iphone" content="<?php echo html_entity_decode($result['heading'], ENT_QUOTES) ?>">
    <meta name="twitter:app:id:iphone" content="">
    <meta name="twitter:app:name:ipad" content="<?php echo html_entity_decode($result['heading'], ENT_QUOTES) ?>">
    <meta name="twitter:app:id:ipad" content="">
    <link rel="apple-touch-icon" type="image/png" sizes="180x180" href="<?php echo $baseImageUrl . $result['image_url'] ?>_2.png">
    <link rel="icon" type="image/png" sizes="196x196" href="<?php echo $baseImageUrl . $result['image_url'] ?>_2.png">

    <meta name="robots" content="index,follow">

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="manifest" href="site.html" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $baseImageUrl . $result['image_url'] ?>_2.png" />

    <style type="text/css">
        .bg-instagram {
            background-color: #000000;
        }
    </style>

    <link rel="stylesheet" href="../assets/css/bootstrap.min.css%2bowl.carousel.min.css%2bticker-style.css%2bflaticon.css%2bslicknav.css%2banimate.min.css%2bmagnific-popup.css%2bfontawesome-all.min.css%2bthemify-ico" />
    <link rel="stylesheet" href="../assets/css/style.css" />

    <link rel="icon" sizes="180x180" type="image/png" href="<?php echo $baseImageUrl . $result['image_url'] ?>_2.png" />
    <link rel="stylesheet" type="text/css" href="../mytech.css" />

    <?php include "inc/header2.php"; ?>


    <section class="bg0 p-b-70 p-t-5">
        <div class="bg-img1 size-a-18 how-overlay1" style="background-image:url(<?php echo $baseImageUrl . $result['image_url'] ?>_0.png)">
            <div class="container h-full flex-col-e-c p-b-58">
                <a href="./" class="f1-s-10 cl0 hov-cl10 trans-03 text-uppercase txt-center m-b-33">
                    <?php echo $result['categories'] ?>
                </a>
                <h3 class="f1-l-5 cl0 p-b-16 txt-center respon2">
                    <?php echo $result['heading'] ?>
                </h3>
                <div class="flex-wr-c-s">
                    <span class="f1-s-3 cl8 m-rl-7 txt-center">
                        <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                            by <?php echo $result['author'] ?>
                        </a>
                        <span class="m-rl-3">-</span>
                        <span>
                            <?php echo $dbfunc->getDateFromString($result['date_published']); ?>
                        </span>
                    </span>
                    <span class="f1-s-3 cl8 m-rl-7 txt-center">
                        <?php echo $result['views']; ?> Views
                    </span>
                    <a href="javascript:void(0)" class="f1-s-3 cl8 m-rl-7 txt-center hov-cl10 trans-03">
                        <?php echo count($comments); ?> Comment
                    </a>

                </div>
            </div>
        </div>

        <div class="container p-t-82">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8 p-b-100">
                    <div class="p-r-10 p-r-0-sr991">

                        <div class="p-b-70">
                            <p class="f1-s-11 cl6 p-b-25"><?php echo html_entity_decode($result['news_body'], ENT_QUOTES) ?></p>
                            <div class="flex-s-s p-t-12 p-b-15">
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
                            </div>

                            <div class="flex-s-s">
                                <span class="f1-s-12 cl5 p-t-1 m-r-15">
                                    Share:
                                </span>
                                <div class="flex-wr-s-s size-w-0">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $shareBase; ?>interviewdetails/<?php echo $id ?>" target="_blank" class="dis-block f1-s-13 cl0 bg-facebook borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
                                        <i class="fab fa-facebook-f m-r-7"></i>
                                        Facebook
                                    </a>
                                    <a href="https://twitter.com/share?url=<?php echo $shareBase; ?>interviewdetails/<?php echo $id ?>" target="_blank" class="dis-block f1-s-13 cl0 bg-twitter borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
                                        <i class="fab fa-twitter m-r-7"></i>
                                        Twitter
                                    </a>

                                    <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo $shareBase; ?>interviewdetails/<?php echo $id ?>" target="_blank" class="dis-block f1-s-13 cl0 bg-pinterest borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
                                        <i class="fab fa-linkedin m-r-7"></i>
                                        LinkedIn
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h4 class="f1-l-4 cl3 p-b-12">
                                Leave a Comment
                            </h4>
                            <p class="f1-s-13 cl8 p-b-40">
                                Your email address will not be published. Required fields are marked *
                            </p>
                            <form action="javascript:void(0)">
                                <textarea id="commentComment" class="bo-1-rad-3 bocl13 size-a-15 f1-s-13 cl5 plh6 p-rl-18 p-tb-14 m-b-20" name="msg" placeholder="Comment..."></textarea>
                                <input id="commentName" class="bo-1-rad-3 bocl13 size-a-16 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="text" name="name" placeholder="Name*">
                                <input class="bo-1-rad-3 bocl13 size-a-16 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="email" id="commentEmail" name="email" placeholder="Email*">
                                <div class="resInfo"></div>
                                <button onclick="postComment()" class="size-a-17 bg2 borad-3 f1-s-12 cl0 hov-btn1 trans-03 p-rl-15 m-t-10">
                                    Post Comment
                                </button>
                            </form>


                            <br>
                            <h4 class="f1-l-4 cl3 p-b-12">
                                Comments
                            </h4>
                            <ul class="list-group" id="commentList">
                                <?php
                                for ($i = 0; $i < count($comments); $i++) {
                                ?>
                                    <li class="list-group-item">
                                        <strong><?php echo $comments[$i]["name"] ?></strong> <br>
                                        <?php echo $comments[$i]["comment"] ?>
                                    </li>
                                <?php
                                }
                                ?>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 col-lg-4 p-b-100">
                    <div class="p-l-10 p-rl-0-sr991">

                        <div class="flex-c-s">
                            <a href="#">
                                <img class="max-w-full" src="../images/xbanner-02.jpg.pagespeed.ic.SI0M6FaN4k.jpg" alt="IMG">
                            </a>
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