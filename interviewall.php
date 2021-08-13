<?php include "inc/meta.php"; ?>
<?php
$subCat = "";
$allSubCat = array();

if (isset($_GET["subcat"])) {
    $subCat = str_replace("+", " ", $_GET["subcat"]);
} else {
    die("ERROR: Page Not Found");
}

$allSubCat = $dbfunc->getAllInternationalSub($subCat);
  

?>


<link rel="stylesheet" href="../assets/css/bootstrap.min.css%2bowl.carousel.min.css%2bticker-style.css%2bflaticon.css%2bslicknav.css%2banimate.min.css%2bmagnific-popup.css%2bfontawesome-all.min.css%2bthemify-ico" />
<link rel="stylesheet" href="../assets/css/style.css" />

<link rel="icon" type="image/png" href="../images/icons/xfavicon.png.pagespeed.ic.0zk7TR-Xxr.png" />
<link rel="stylesheet" type="text/css" href="../mytech.css" />

<?php include "inc/header2.php"; ?>


<div class="container p-t-4 p-b-40" style="margin-top: 40px;">
    <h2 class="f1-l-1 cl2">
        <?php 
            if(count($allSubCat) > 0) {
                echo $allSubCat[0]['sub_categories'];
            } else {
                echo "There is no news under this category.";
            }
        ?>
    </h2>
</div>

<section class="bg0 p-b-55">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-10 col-lg-8 p-b-80">
                <div class="p-r-10 p-r-0-sr991">
                    <div class="m-t--65 p-b-40">
                        <?php
                        for ($i = 0; $i < count($allSubCat); $i++) {
                        ?>
                            <div class="flex-col-s-c how-bor2 p-t-65 p-b-40">
                                <a href="../interviewdetails/<?php echo $allSubCat[$i]['id'];?>" class="f1-s-10 cl2 text-uppercase txt-center hov-cl10 trans-03 p-b-40">
                                    <!-- <?php echo $allSubCat[$i]['sub_categories'];?> -->
                                </a>
                                <h5 class="p-b-17 txt-center">
                                    <a href="../interviewdetails/<?php echo $allSubCat[$i]['id'];?>" class="f1-l-1 cl2 hov-cl10 trans-03 respon2">
                                    <?php echo $allSubCat[$i]['heading'];?>
                                    </a>
                                </h5>
                                <div class="cl8 txt-center p-b-24">
                                    <a href="../interviewdetails/<?php echo $allSubCat[$i]['id'];?>" class="f1-s-4 cl8 hov-cl10 trans-03">
                                        by <?php echo $allSubCat[$i]['author'];?>
                                    </a>
                                    <span class="f1-s-3 m-rl-3">
                                        -
                                    </span>
                                    <span class="f1-s-3">
                                    <?php echo $dbfunc->getDateFromString($allSubCat[$i]['date_published']);?>
                                    </span>
                                </div>
                                <a href="../interviewdetails/<?php echo $allSubCat[$i]['id'];?>" class="wrap-pic-w hov1 trans-03 m-b-30">
                                    <img src="<?php echo $baseImageUrl.$allSubCat[$i]['image_url'];?>_0.png" alt="IMG">
                                </a>
                                <p class="f1-s-11 cl6 txt-center p-b-22">
                                    <?php echo $allSubCat[$i]['short_description'];?>
                                </p>
                                <a href="../interviewdetails/<?php echo $allSubCat[$i]['id'];?>" class="f1-s-1 cl9 hov-cl10 trans-03">
                                    Read More
                                    <i class="m-l-2 fa fa-long-arrow-alt-right"></i>
                                </a>
                            </div>
                        <?php

                        } ?>

                    </div>
                </div>
            </div>


            <div class="col-md-10 col-lg-4 p-b-80">
                <div class="p-l-10 p-rl-0-sr991">
                    <div class="how2 how2-cl4 flex-s-c m-b-30">
                            <h3 class="f1-m-2 cl3 tab01-title">
                                Other Categories
                            </h3>
                        </div>
                        <div class="flex-wr-s-s m-rl--5">
                            <?php 
                                $allCats = ["Africa","Europe", "US", "UK", "Middle East"];


                                foreach ($allCats as $key => $value) {
                                    if($value != $subCat ){
                                        ?>
                                            <a href="<?php echo $baseUrl; ?>interviewall/<?php echo str_replace(" ", "+", $value); ?>" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                                                <?php echo $value ?>
                                            </a>
                                        <?php
                                    }
                                }
                             ?>
                        </div>

                    <div class="flex-c-s p-b-50" style="margin-top: 40px;">
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