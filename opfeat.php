<?php include "inc/meta.php"; ?>
<?php
$id = "";
if (isset($_GET["id"])) {
    $id = $_GET["id"];
} else {
    die('Page not found');
}

$result = $dbfunc->getOpinFeatPreviewRow($id);

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
                        <a href="#" class="f1-s-10 cl2 hov-cl10 trans-03 text-uppercase">
                            <?php echo $result['prev_category']; ?>
                        </a>
                        <h3 class="f1-l-3 cl2 p-b-16 p-t-33 respon2">
                            <?php echo $result['prev_heading']; ?>
                        </h3>
                        <div class="flex-wr-s-s p-b-40">
                            <span class="f1-s-3 cl8 m-r-15">
                                <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                    by <?php echo $result['prev_source']; ?>
                                </a>
                                <span class="m-rl-3">-</span>
                                <span>
                                    <?php echo  date('m/d/y',$result['prev_datepublished']);?>
                                </span>
                            </span>
                            <!-- <span class="f1-s-3 cl8 m-r-15">
                                  <?php //echo $result['views']; ?> Views
                            </span> -->
                            <!-- <a href="javascript:void(0)" class="f1-s-3 cl8 hov-cl10 trans-03 m-r-15">
                                <?php //echo count($comments); ?> Comment
                            </a> -->
                        </div>
                        <div class="wrap-pic-max-w p-b-30">
                            <img src="<?php echo $baseImageUrl.$result['prev_image']?>_0.png" alt="IMG">
                        </div>
                        <p class="f1-s-11 cl6 p-b-25">
                            <?php echo html_entity_decode($result['prev_body']); ?>
                        </p>
                        
                        <div class="flex-s-s p-t-12 p-b-15">
                            <span class="f1-s-12 cl5 m-r-8">
                                Tags:
                            </span>
                            <div class="flex-wr-s-s size-w-0">
                             <?php
                                // $tags = $result['tags'];
                                // $explode = explode(",", $tags);

                                // foreach ($explode as $key => $val) {
                                //     $url = str_replace(" ", "+", $val);
                                //     $url = str_replace("-", "_", $url);
                                ?>
                                    <!-- <a href="../search/tags-<?php //echo $url ?>" class="f1-s-12 cl8 hov-link1 m-r-15">
                                        <?php //echo $val ?>
                                    </a> -->
                                <!-- <?php
                                // }
                                ?> -->
                            </div>
                        </div>
                        <div class="flex-s-s">
                            <span class="f1-s-12 cl5 p-t-1 m-r-15">
                                Share:
                            </span>

                            <div class="flex-wr-s-s size-w-0">
                                <a href="#" target="_blank" class="dis-block f1-s-13 cl0 bg-facebook borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
                                    <i class="fab fa-facebook-f m-r-7"></i>
                                    Facebook
                                </a>
                                <a href="#" target="_blank"  class="dis-block f1-s-13 cl0 bg-twitter borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
                                    <i class="fab fa-twitter m-r-7"></i>
                                    Twitter
                                </a>

                                <a href="#" target="_blank"  class="dis-block f1-s-13 cl0 bg-pinterest borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
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
                            <input id="commentName"  class="bo-1-rad-3 bocl13 size-a-16 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="text" name="name" placeholder="Name*">
                            <input id="commentEmail" class="bo-1-rad-3 bocl13 size-a-16 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="text" name="email" placeholder="Email*">
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
                           for ($i=0; $i < count($comments); $i++) { 
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