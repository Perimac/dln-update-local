<?php include "inc/meta.php"; ?>
<?php
$id = "";
if (isset($_GET["firm"])) {
    $id = $_GET["firm"];
} else {
    die('Page not found');
}

$result = $dbfunc->geGenRow('law_firms', 'id', $id);


?>

<link rel="stylesheet" href="../assets/css/bootstrap.min.css%2bowl.carousel.min.css%2bticker-style.css%2bflaticon.css%2bslicknav.css%2banimate.min.css%2bmagnific-popup.css%2bfontawesome-all.min.css%2bthemify-ico" />
<link rel="stylesheet" href="../assets/css/style.css" />

<link rel="icon" type="image/png" href="../images/icons/xfavicon.png.pagespeed.ic.0zk7TR-Xxr.png" />
<link rel="stylesheet" type="text/css" href="../mytech.css" />

<?php include "inc/header2.php"; ?>

<section class="bg0 p-b-140 p-t-10" style="margin-top: 30px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 p-b-30">
                <div class="p-r-10 p-r-0-sr991">
                    <div class="p-b-70">
                        <h3 class="f1-l-3 cl2 p-b-16 p-t-33 respon2">
                            <?php echo $result['law_firm']; ?>
                        </h3>
                        <div class="flex-wr-s-s p-b-40">
                            <span class="f1-s-3 cl8 m-r-15">
                                <span>
                                    <?php echo $result['date_added']; ?>
                                </span>
                            </span>
                                                    </div>
                        <div class="wrap-pic-max-w p-b-30">
                            <img src="<?php echo $baseImageUrl.$result['firm_image']?>_0.png" alt="IMG">
                        </div>
                        <p class="f1-s-11 cl6 p-b-25">
                            <?php echo html_entity_decode($result['firm_info']); ?>
                        </p>
                        
                        <br>
                        <br>
                        <div class="flex-s-s">
                            <span class="f1-s-12 cl5 p-t-1 m-r-15">
                                Share:
                            </span>

                            <div class="flex-wr-s-s size-w-0">
                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $shareBase; ?>lawfirms/<?php echo $id ?>" target="_blank" class="dis-block f1-s-13 cl0 bg-facebook borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
                                    <i class="fab fa-facebook-f m-r-7"></i>
                                    Facebook
                                </a>
                                <a href="https://twitter.com/share?url=<?php echo $shareBase; ?>lawfirms/<?php echo $id ?>" target="_blank"  class="dis-block f1-s-13 cl0 bg-twitter borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
                                    <i class="fab fa-twitter m-r-7"></i>
                                    Twitter
                                </a>

                                <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo $shareBase; ?>lawfirms/<?php echo $id ?>" target="_blank"  class="dis-block f1-s-13 cl0 bg-pinterest borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
                                    <i class="fab fa-linkedin m-r-7"></i>
                                    LinkedIn
                                </a>
                            </div>
                        </div>
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