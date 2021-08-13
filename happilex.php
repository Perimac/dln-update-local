<?php include "inc/meta.php"; ?>
<?php
$allMemes = $dbfunc->getAllMemes();
$allInfographs = $dbfunc->getAllInfographs();
$allArt = $dbfunc->getAllArt();

?>






<link rel="stylesheet" href="assets/css/bootstrap.min.css%2bowl.carousel.min.css%2bticker-style.css%2bflaticon.css%2bslicknav.css%2banimate.min.css%2bmagnific-popup.css%2bfontawesome-all.min.css%2bthemify-ico" />
<link rel="stylesheet" href="assets/css/style.css" />
<link rel="stylesheet" href="assets/css/categori.css" />
<link rel="stylesheet" type="text/css" href="mytech.css" />
<?php include "inc/header.php"; ?>
<main>
  <section class="bg0">
    <div class="container">
      <div class="row m-rl--1">


        <?php if (count($allMemes) > 0) {?>         
      
        <div class="col-md-6 p-rl-1 p-b-2">
          <div class="bg-img1 size-a-3 how1 pos-relative" style="background-image:url(<?php echo $baseImageUrl.$allMemes[0]['image']; ?>_0.png)">
            <a href="happilex-details/<?php echo $allMemes[0]['id'];?>" class="dis-block how1-child1 trans-03"></a>
            <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
              <a href="happilex-details/<?php echo $allMemes[0]['id'];?>" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                <?php echo $allMemes[0]['category']; ?>
              </a>
              <h3 class="how1-child2 m-t-14 m-b-10">
                <a href="happilex-details/<?php echo $allMemes[0]['id'];?>" class="how-txt1 size-a-6 f1-l-1 cl0 hov-cl10 trans-03">
                  <?php echo $allMemes[0]['title']; ?>
                </a>
              </h3>
              <span class="how1-child2">
                <span class="f1-s-4 cl11">
                  <span class="f1-s-3 cl11">
                    <?php echo  date('M d,Y',strtotime($allMemes[$i]['date_added']));?>
                  </span>
                </span>
            </div>
          </div>
        </div>
        <?php  } ?>

        <?php if (count($allInfographs) > 0) {?>      
        <div class="col-md-6 p-rl-1">
          <div class="row m-rl--1">

            <div class="col-12 p-rl-1 p-b-2">
              <div class="bg-img1 size-a-4 how1 pos-relative" style="background-image:url(<?php echo $baseImageUrl.$allInfographs[0]['image']; ?>_0.png)">
                <a href="happilex-details/<?php echo $allInfographs[0]['id'];?>" class="dis-block how1-child1 trans-03"></a>
                <div class="flex-col-e-s s-full p-rl-25 p-tb-24">
                  <a href="happilex-details/<?php echo $allInfographs[0]['id'];?>" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                    <?php echo $allInfographs[0]['category']; ?>
                  </a>
                  <h3 class="how1-child2 m-t-14">
                    <a href="happilex-details/<?php echo $allInfographs[0]['id'];?>" class="how-txt1 size-a-7 f1-l-2 cl0 hov-cl10 trans-03">
                      <?php echo $allInfographs[0]['title']; ?>
                    </a>
                  </h3>
                </div>
              </div>
            </div>

        <?php  } ?>

        <?php if (count($allArt) > 0) {?>      
            <div class="col-sm-6 p-rl-1 p-b-2">
              <div class="bg-img1 size-a-5 how1 pos-relative" style="background-image:url(<?php echo $baseImageUrl.$allArt[0]['image']; ?>_0.png)">
                <a href="happilex-details/<?php echo $allArt[0]['id'];?>" class="dis-block how1-child1 trans-03"></a>
                <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                  <a href="happilex-details/<?php echo $allArt[0]['id'];?>" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                    <?php echo $allArt[0]['category']; ?>
                  </a>
                  <h3 class="how1-child2 m-t-14">
                    <a href="happilex-details/<?php echo $allArt[0]['id'];?>" class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">
                      <?php echo $allArt[0]['title']; ?>
                    </a>
                  </h3>
                </div>
              </div>
            </div>

        <?php } ?>
        <?php if (count($allArt) > 1) {?>      
            <div class="col-sm-6 p-rl-1 p-b-2">
              <div class="bg-img1 size-a-5 how1 pos-relative" style="background-image:url(<?php echo $baseImageUrl.$allArt[1]['image']; ?>_0.png)">
                <a href="happilex-details/<?php echo $allArt[1]['id'];?>" class="dis-block how1-child1 trans-03"></a>
                <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                  <a href="happilex-details/<?php echo $allArt[1]['id'];?>" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                    <?php echo $allArt[1]['category']; ?>
                  </a>
                  <h3 class="how1-child2 m-t-14">
                    <a href="happilex-details/<?php echo $allArt[1]['id'];?>" class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">
                      <?php echo $allArt[1]['title']; ?>
                    </a>
                  </h3>
                </div>
              </div>
            </div>

        <?php  } ?>

          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="whats-news-area pt-50 pb-20">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="row d-flex justify-content-between">
            <div class="col-lg-3 col-md-3">
              <div class="section-tittle mb-30">
                <h3>Happilex</h3>
              </div>
            </div>
            <div class="col-lg-9 col-md-9">
              <div class="properties__button">
                <nav>
                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <ul>
                      <li><a class="nav-item nav-link active" href="#nav-meme" id="nav-meme-tab" data-toggle="tab" role="tab" aria-controls="nav-meme" aria-selected="true">Memes</a>
                      </li>

                      <li><a class="nav-item nav-link" id="nav-infographs-tab" data-toggle="tab" href="#nav-infographs" role="tab" aria-controls="nav-infographs" aria-selected="false">Infographs</a>
                      </li>

                      <li><a class="nav-item nav-link" id="nav-art-tab" data-toggle="tab" href="#nav-art" role="tab" aria-controls="nav-art" aria-selected="false">Art</a>
                      </li>
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>

          <div class="row ">
            <div class="col-12">
              <div class="tab-content " id="nav-tabContent">

                <div class="tab-pane fade show active" id="nav-meme" role="tabpanel" aria-labelledby="nav-meme-tab">
                  <div class="whats-news-caption">
                    <div class="row">
                      <?php
                      for ($i = 1; $i < count($allMemes); $i++) {
                      ?>
                        <div class="flex-wr-sb-s p-t-40 p-b-15 how-bor2">
                          <a href="happilex-details/<?php echo $allMemes[$i]['id'];?>" class="size-w-8 wrap-pic-w hov1 trans-03 w-full-sr575 m-b-25">
                            <img src="<?php echo $baseImageUrl.$allMemes[$i]['image']; ?>_0.png" alt="IMG">
                          </a>
                          <div class="size-w-9 w-full-sr575 m-b-25">
                            <h5 class="p-b-12">
                              <a href="happilex-details/<?php echo $allMemes[$i]['id'];?>" class="f1-l-1 cl2 hov-cl10 trans-03 respon2">
                                <?php echo $allMemes[$i]['title']; ?>
                              </a>
                            </h5>
                            <div class="cl8 p-b-18">
                              <a class="f1-s-4 cl8 hov-cl10 trans-03">
                                <?php echo date('M d,Y',strtotime($allMemes[$i]['date_added']));?>
                              </a>
                            </div>
                            <a href="happilex-details/<?php echo $allMemes[$i]['id'];?>" class="f1-s-1 cl9 hov-cl10 trans-03">
                              Read More
                              <i class="m-l-2 fa fa-long-arrow-alt-right"></i>
                            </a>
                          </div>
                        </div>
                      <?php
                      } ?>
                    </div>
                  </div>
                </div>

                <div class="tab-pane fade" id="nav-infographs" role="tabpanel" aria-labelledby="nav-infographs-tab">
                  <div class="whats-news-caption">
                    <div class="row">
                      <?php
                      for ($i = 1; $i < count($allInfographs); $i++) {
                      ?>
                        <div class="flex-wr-sb-s p-t-40 p-b-15 how-bor2">
                          <a href="happilex-details/<?php echo $allInfographs[$i]['id'];?>" class="size-w-8 wrap-pic-w hov1 trans-03 w-full-sr575 m-b-25">
                            <img src="<?php echo $baseImageUrl.$allInfographs[$i]['image']; ?>_0.png" alt="IMG">
                          </a>
                          <div class="size-w-9 w-full-sr575 m-b-25">
                            <h5 class="p-b-12">
                              <a href="happilex-details/<?php echo $allInfographs[$i]['id'];?>" class="f1-l-1 cl2 hov-cl10 trans-03 respon2">
                                <?php echo $allInfographs[$i]['title']; ?>
                              </a>
                            </h5>
                            <div class="cl8 p-b-18">
                              <a class="f1-s-4 cl8 hov-cl10 trans-03">
                                <?php echo  date('M d,Y',strtotime($allInfographs[$i]['date_added'])); ?>
                              </a>
                            </div>
                            <a href="happilex-details/<?php echo $allInfographs[$i]['id'];?>" class="f1-s-1 cl9 hov-cl10 trans-03">
                              Read More
                              <i class="m-l-2 fa fa-long-arrow-alt-right"></i>
                            </a>
                          </div>
                        </div>
                      <?php
                      }
                      ?>
                    </div>
                  </div>
                </div>

                <div class="tab-pane fade" id="nav-art" role="tabpanel" aria-labelledby="nav-art-tab">
                  <div class="whats-news-caption">
                    <div class="row">
                      <?php
                      for ($i = 2; $i < count($allArt); $i++) {
                      ?>
                        <div class="flex-wr-sb-s p-t-40 p-b-15 how-bor2">
                        <a href="happilex-details/<?php echo $allArt[$i]['id'];?>" class="size-w-8 wrap-pic-w hov1 trans-03 w-full-sr575 m-b-25">
                          <img src="<?php echo $baseImageUrl.$allArt[$i]['image'];?>_0.png" alt="IMG">
                        </a>
                        <div class="size-w-9 w-full-sr575 m-b-25">
                          <h5 class="p-b-12">
                            <a href="happilex-details/<?php echo $allArt[$i]['id'];?>" class="f1-l-1 cl2 hov-cl10 trans-03 respon2">
                              <?php echo $allArt[$i]['title'];?>
                            </a>
                          </h5>
                          <div class="cl8 p-b-18">
                            <a href="happilex-details/<?php echo $allArt[$i]['id'];?>" class="f1-s-4 cl8 hov-cl10 trans-03">
                              <?php echo  date('M d,Y',strtotime($allArt[$i]['date_added']));?>
                            </a>
                          </div>
                          <a href="happilex-details/<?php echo $allArt[$i]['id'];?>" class="f1-s-1 cl9 hov-cl10 trans-03">
                            Read More
                            <i class="m-l-2 fa fa-long-arrow-alt-right"></i>
                          </a>
                        </div>
                      </div>
                      <?php
                      }
                      ?>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>

        </div>
        <div class="col-lg-4">
          <div class="section-tittle mb-40">
            <h3>Follow Us</h3>
          </div>
          <div class="single-follow mb-45">
            <div class="single-box">
                       <?php 
                      for ($i=0; $i < count($accounts); $i++) { 
                        switch ($accounts[$i]["plattform"]) {
                          case 'Facebook':
                            ?>
                               <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="https://facebook.com/<?php echo $accounts[$i]['account_name'] ?>/" target="_blank"><img src="assets/img/news/icon-fb.png" alt="" /></a>
                                </div>
                                <div class="follow-count">
                                    <span><?php echo $accounts[$i]['followers'] ?></span>
                                    <p>Fans</p>
                                </div>
                            </div>
                           <?php
                            break;
                         case 'Instagram':
                            ?>
                              <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="https://instagram.com/<?php echo $accounts[$i]['account_name'] ?>/" target="_blank"><img src="assets/img/news/icon-ins.png" alt="" /></a>
                                </div>
                                <div class="follow-count">
                                    <span><?php echo $accounts[$i]['followers'] ?></span>
                                    <p>Fans</p>
                                </div>
                            </div>
                           <?php
                            break;
                          case 'Twitter':
                            ?>
                              <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="https://twitter.com/<?php echo $accounts[$i]['account_name'] ?>/" target="_blank"><img src="assets/img/news/icon-tw.png" alt="" /></a>
                                </div>
                                <div class="follow-count">
                                    <span><?php echo $accounts[$i]['followers'] ?></span>
                                    <p>Fans</p>
                                </div>
                            </div>
                           <?php
                            break;
                          case 'Youtube':
                            ?>
                              <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="https://www.youtube.com/channel/<?php echo $accounts[$i]['account_name'] ?>/" target="_blank"><img src="assets/img/news/icon-yo.png" alt="" /></a>
                                </div>
                                <div class="follow-count">
                                    <span><?php echo $accounts[$i]['followers'] ?></span>
                                    <p>Fans</p>
                                </div>
                            </div>
                           <?php
                            break;
                          default:
                            break;
                        }

                      }
                     ?>
            </div>
          </div>
          <div class="news-poster d-none d-lg-block">
            <img src="assets/img/news/xnews_card.jpg.pagespeed.ic.5EdXWkQK-8.png" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>


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
<script defer src="../../../static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"66b946b9ff58da72","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.6.0","si":10}'></script>

<?php include './inc/footer-meta.php' ?>