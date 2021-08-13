<?php 
include "inc/meta.php"; 
$allSubCat = $dbfunc->getAllInternationalSub("Supreme Court");
?>
<link rel="stylesheet" href="assets/css/bootstrap.min.css%2bowl.carousel.min.css%2bticker-style.css%2bflaticon.css%2bslicknav.css%2banimate.min.css%2bmagnific-popup.css%2bfontawesome-all.min.css%2bthemify-ico" />
<link rel="stylesheet" href="assets/css/style.css" />

<link rel="icon" type="image/png" href="images/icons/xfavicon.png.pagespeed.ic.0zk7TR-Xxr.png" />
<link rel="stylesheet" type="text/css" href="mytech.css" />

<?php include "inc/header.php"; ?>




  <?php if (count($allSubCat) > 0) { ?>
  <section class="bg0">
      <div class="container">
        <div class="row m-rl--1">
          <div class="col-12 p-rl-1 p-b-2">
            <div class="bg-img1 size-a-3 how1 pos-relative"
              style="background-image:url(<?php echo $baseImageUrl.$allSubCat[0]['image_url'];?>_0.png)">
              <a href="interviewdetails/<?php echo $allSubCat[0]["id"] ?>" class="dis-block how1-child1 trans-03"></a>
              <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                <a href="#" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                    <?php echo $allSubCat[0]["sub_categories"] ?>
                </a>
                <h3 class="how1-child2 m-t-14 m-b-10">
                  <a href="interviewdetails/<?php echo $allSubCat[0]["id"] ?>" class="how-txt1 size-a-6 f1-l-1 cl0 hov-cl10 trans-03">
                    <?php echo $allSubCat[0]["heading"] ?>
                  </a>
                </h3>
                <span class="how1-child2">
                  <span class="f1-s-4 cl11">
                    <?php echo $allSubCat[0]["author"] ?>
                  </span>
                  <span class="f1-s-3 cl11 m-rl-3">
                    -
                  </span>
                  <span class="f1-s-3 cl11">
                    <?php echo $dbfunc->getDateFromString($allSubCat[0]["date_published"]); ?>
                  </span>
                </span>
              </div>
            </div>
          </div>
          <?php if (count($allSubCat) > 1) {?>           
          <div class="col-sm-6 col-md-3 p-rl-1 p-b-2">
            <div class="bg-img1 size-a-14 how1 pos-relative"
              style="background-image:url(<?php echo $baseImageUrl.$allSubCat[1]['image_url'];?>_0.png)">
              <a href="interviewdetails/<?php echo $allSubCat[1]["id"] ?>" class="dis-block how1-child1 trans-03"></a>
              <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                <a href="#" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                   <?php echo $allSubCat[1]["sub_categories"] ?>
                </a>
                <h3 class="how1-child2 m-t-14">
                  <a href="interviewdetails/<?php echo $allSubCat[1]["id"] ?>" class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">
                     <?php echo $allSubCat[1]["heading"] ?>
                  </a>
                </h3>
              </div>
            </div>
          </div>
          <?php } ?>

          <?php if (count($allSubCat) > 2) {?>
          <div class="col-sm-6 col-md-3 p-rl-1 p-b-2">
            <div class="bg-img1 size-a-14 how1 pos-relative"
              style="background-image:url(<?php echo $baseImageUrl.$allSubCat[2]['image_url'];?>_0.png)">
              <a href="interviewdetails/<?php echo $allSubCat[2]["id"] ?>" class="dis-block how1-child1 trans-03"></a>
              <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                <a href="#" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                   <?php echo $allSubCat[2]["sub_categories"] ?>
                </a>
                <h3 class="how1-child2 m-t-14">
                  <a href="interviewdetails/<?php echo $allSubCat[2]["id"] ?>" class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">
                     <?php echo $allSubCat[2]["heading"] ?>
                  </a>
                </h3>
              </div>
            </div>
          </div>
          <?php } ?>

          <?php if (count($allSubCat) > 3) {?>
          <div class="col-sm-6 col-md-3 p-rl-1 p-b-2">
            <div class="bg-img1 size-a-14 how1 pos-relative"
              style="background-image:url(<?php echo $baseImageUrl.$allSubCat[3]['image_url'];?>_0.png)">
              <a href="interviewdetails/<?php echo $allSubCat[3]["id"] ?>" class="dis-block how1-child1 trans-03"></a>
              <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                <a href="#" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                   <?php echo $allSubCat[3]["sub_categories"] ?>
                </a>
                <h3 class="how1-child2 m-t-14">
                  <a href="interviewdetails/<?php echo $allSubCat[3]["id"] ?>" class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">
                     <?php echo $allSubCat[3]["heading"] ?>
                  </a>
                </h3>
              </div>
            </div>
          </div>
          <?php } ?>

          <?php if (count($allSubCat) > 4) {?>
          <div class="col-sm-6 col-md-3 p-rl-1 p-b-2">
            <div class="bg-img1 size-a-14 how1 pos-relative"
              style="background-image:url(<?php echo $baseImageUrl.$allSubCat[4]['image_url'];?>_0.png)">
              <a href="interviewdetails/<?php echo $allSubCat[4]["id"] ?>" class="dis-block how1-child1 trans-03"></a>
              <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                <a href="#" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                   <?php echo $allSubCat[4]["sub_categories"] ?>
                </a>
                <h3 class="how1-child2 m-t-14">
                  <a href="interviewdetails/<?php echo $allSubCat[4]["id"] ?>" class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">
                     <?php echo $allSubCat[4]["heading

                     "] ?>
                  </a>
                </h3>
              </div>
            </div>
          </div>
          <?php } ?>

        </div>
      </div>
  </section> 
  <?php }?>


  <section class="bg0 p-t-110 p-b-25">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8 p-b-80">
          <div class="row">
            <div class="col-sm-6 p-r-25 p-r-15-sr991">

              <?php if(count($allSubCat) > 5){ 

               for ($i=5; $i < count($allSubCat); $i++) { 
                if($i%2 == 0) {

                ?>
                    <div class="p-b-53">
                      <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                        <img src="<?php echo $baseImageUrl.$allSubCat[$i]['image_url'];?>_1.png" alt="IMG">
                      </a>
                      <div class="flex-col-s-c p-t-16">
                        <h5 class="p-b-5 txt-center">
                          <a href="interviewdetails/<?php echo $allSubCat[$i]["id"] ?>" class="f1-m-3 cl2 hov-cl10 trans-03">
                             <?php echo mb_strimwidth($allSubCat[$i]["short_description"], 0, 60) ?>...
                          </a>
                        </h5>
                        <div class="cl8 txt-center p-b-17">
                          <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                             <?php echo $allSubCat[$i]["author"] ?>
                          </a>
                          <span class="f1-s-3 m-rl-3">
                            -
                          </span>
                          <span class="f1-s-3">
                            <?php echo $dbfunc->getDateFromString($allSubCat[$i]["date_published"]) ?>
                          </span>
                        </div>
                        <p class="f1-s-11 cl6 txt-center p-b-16">
                             <?php echo mb_strimwidth($allSubCat[$i]["short_description"], 0, 100) ?>...
                        </p>
                        <a href="interviewdetails/<?php echo $allSubCat[$i]["id"] ?>" class="f1-s-1 cl9 hov-cl10 trans-03">
                          Read More
                          <i class="m-l-2 fa fa-long-arrow-alt-right"></i>
                        </a>
                      </div>
                    </div>
                  <?php
                      }
                 }
              } ?>

            </div>
            <div class="col-sm-6 p-r-25 p-r-15-sr991">
              <?php if(count($allSubCat) > 5){ 

               for ($i=5; $i < count($allSubCat); $i++) { 
                if($i%2 > 0) {
                ?>
                    <div class="p-b-53">
                      <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                        <img src="<?php echo $baseImageUrl.$allSubCat[$i]['image_url'];?>_1.png" alt="IMG">
                      </a>
                      <div class="flex-col-s-c p-t-16">
                        <h5 class="p-b-5 txt-center">
                          <a href="interviewdetails/<?php echo $allSubCat[$i]["id"] ?>" class="f1-m-3 cl2 hov-cl10 trans-03">
                             <?php echo mb_strimwidth($allSubCat[$i]["short_description"], 0, 60) ?>...
                          </a>
                        </h5>
                        <div class="cl8 txt-center p-b-17">
                          <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                             <?php echo $allSubCat[$i]["author"] ?>
                          </a>
                          <span class="f1-s-3 m-rl-3">
                            -
                          </span>
                          <span class="f1-s-3">
                            <?php echo $dbfunc->getDateFromString($allSubCat[$i]["date_published"]) ?>
                          </span>
                        </div>
                        <p class="f1-s-11 cl6 txt-center p-b-16">
                             <?php echo mb_strimwidth($allSubCat[$i]["short_description"], 0, 100) ?>...
                        </p>
                        <a href="interviewdetails/<?php echo $allSubCat[$i]["id"] ?>" class="f1-s-1 cl9 hov-cl10 trans-03">
                          Read More
                          <i class="m-l-2 fa fa-long-arrow-alt-right"></i>
                        </a>
                      </div>
                    </div>
                  <?php
                      }
                    }
                 }
              ?>
            </div>
          </div>

         
        </div>
        <div class="col-md-10 col-lg-4 p-b-80">
          <div class="p-l-10 p-rl-0-sr991">

            <div class="flex-c-s">
              <a href="#">
                <img class="max-w-full" src="assets/img/news/news_card.jpg" alt="IMG">
              </a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
























<?php include './inc/footer.php' ?>

<?php include './inc/footer-meta.php' ?>