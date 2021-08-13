

<?php include "inc/meta.php"; ?>

<?php
$latestNews = $dbfunc->getLatestNews();
$latestAfrica =$dbfunc->getAllInternationalSub('Africa');
$latestUs = $dbfunc->getAllInternationalSub('Us');
$latestEurope = $dbfunc->getAllInternationalSub('Europe');
$latestUk = $dbfunc->getAllInternationalSub('Uk');
$latestMiddleEast = $dbfunc->getAllInternationalSub('Middle East');
$businessNews = $dbfunc->getBusinessNews();

$trendings = $dbfunc->getTrendingNews();

$courtNews = $dbfunc->getAllGeneralNews("Courts");
$crimeNews = $dbfunc->getAllGeneralNews("Crime");
$elecPetition = $dbfunc->getAllGeneralNews("Election Petition");

$happilex = $dbfunc->getSomeHappilex();

$allJustice = $dbfunc->getAllJustices();
?>

<link rel="stylesheet" href="assets/css/bootstrap.min.css%2bowl.carousel.min.css%2bticker-style.css%2bflaticon.css%2bslicknav.css%2banimate.min.css%2bmagnific-popup.css%2bfontawesome-all.min.css%2bthemify-ico" />

<link rel="stylesheet" href="assets/css/style.css" />
<link rel="stylesheet" type="text/css" href="mytech.css" />

<?php include "inc/header.php"; ?>
<main>
    <!-- FIRST SECTION -->
    <div class="trending-area fix">
        <div class="container">
            <div class="trending-main">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="trending-tittle">
                            <strong>Trending now</strong>
                            <div class="trending-animated">
                                <ul id="js-news" class="js-hidden">
                                    
                                   <?php 
                                        for ($i=0; $i < count($trendings); $i++) { 
                                            ?>
                                            <li class="news-item">
                                               <a href="interviewdetails/<?php echo $trendings[$i]["id"] ?>">
                                                <?php echo $trendings[$i]["heading"] ?>
                                                </a>
                                            </li>
                                            <?php
                                        }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8">
                        <?php if (count($latestNews)> 0) {?>                       
                        <div class="trending-top mb-30">
                            <div class="trend-top-img">
                                <img src="<?php echo $baseImageUrl.$latestNews[0]['image_url'] ?>_0.png" alt="" />
                                <div class="trend-top-cap">
                                    <span><?php echo $latestNews[0]['sub_categories'] ?></span>
                                    <h2>
                                        <a href="interviewdetails/<?php echo $latestNews[$i]['id'] ?>"> <?php echo $latestNews[0]['heading'] ?></a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <?php } ?>

                        <?php if (count($latestNews)> 1) {?>  
                        <div class="trending-bottom">
                            <div class="row">
                                <?php for ($i = 1; $i < 4; $i++) {  ?>
                                    <div class="col-lg-4">
                                        <div class="single-bottom mb-35">
                                            <div class="trend-bottom-img mb-30">
                                                <img src="<?php echo $baseImageUrl.$latestNews[$i]['image_url'] ?>_1.png" alt="" />
                                            </div>
                                            <div class="trend-bottom-cap">
                                                <span class="color1"><?php echo $latestNews[$i]['sub_categories'] ?></span>
                                                <h4>
                                                    <h4>
                                                        <a href="interviewdetails/<?php echo $latestNews[$i]['id'] ?>"><?php echo $latestNews[$i]['heading'] ?></a>
                                                    </h4>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                <?php  } ?>

                            </div>
                        </div>
                        <?php } ?>
                    </div>

                        <?php if (count($latestNews)> 4) {?>  
                    <div class="col-lg-4">

                        <?php 
                            for ($i=4; $i < 8; $i++) { 
                                ?>
                                <div class="trand-right-single d-flex">
                                    <div class="trand-right-img">
                                        <img src="<?php echo $baseImageUrl.$latestNews[$i]['image_url'] ?>_2.png" alt="" />
                                    </div>
                                    <div class="trand-right-cap">
                                        <span class="color1"><?php echo $latestNews[$i]['sub_categories'] ?></span>
                                        <h4>
                                            <a href="interviewdetails/<?php echo $latestNews[$i]['id'] ?>"><?php echo mb_strimwidth( $latestNews[$i]['heading'],0,100) ?>...</a>
                                        </h4>
                                    </div>
                                </div>
                                <?php
                            }
                         ?>

                    </div>
                        <?php } ?>
                </div>
            </div>
        </div>
    </div>


    <!-- SECOND SECTION -->
    
    <section class="bg0 p-t-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <div class="p-b-20">
                        <?php if(count($businessNews) > 0) {?>
                       <div class="p-b-20">
                            <div class="how2 how2-cl1 flex-sb-c m-r-10 m-r-0-sr991">
                                <h3 class="f1-m-2 cl12 tab01-title" id="catId">
                                    Business
                                </h3>
                                <a href="general/<?php echo $businessNews[0]['sub_categories'];?>" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03" onclick="tester()">
                                    View all
                                    <i class="fs-12 m-l-5 fa fa-caret-right"></i>
                                </a>
                            </div>
                            <div class="row p-t-35">
                                <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                    <div class="m-b-30">
                                        <a href="interviewdetails/<?php echo $businessNews[0]['id'];?>" class="wrap-pic-w hov1 trans-03">
                                            <img src="<?php echo $baseImageUrl.$businessNews[0]['image_url'];?>_1.png" alt="IMG">
                                        </a>
                                        <div class="p-t-20">
                                            <h5 class="p-b-5">
                                                <a href="interviewdetails/<?php echo $businessNews[0]['id'];?>" class="f1-m-3 cl2 hov-cl10 trans-03">
                                                    <?php echo $businessNews[0]['heading']; ?>
                                                </a>
                                            </h5>
                                            <span class="cl8">
                                                <a href="interviewdetails/<?php echo $businessNews[0]['id'];?>" class="f1-s-4 cl8 hov-cl10 trans-03">
                                                    <?php echo $businessNews[0]['sub_categories']; ?>
                                                </a>
                                                <span class="f1-s-3 m-rl-3">
                                                    -
                                                </span>
                                                <span class="f1-s-3">
                                                    <?php echo $dbfunc->getDateFromString($businessNews[0]['date_published']); ?>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                    <?php
                                    $len = (count($businessNews) > 4) ? 4: count($businessNews);
                                    for ($i = 1; $i < $len; $i++) {
                                    ?>
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="interviewdetails/<?php echo $businessNews[$i]['id'];?>" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="<?php echo $baseImageUrl.$businessNews[$i]['image_url'];?>_1.png" alt="business image">
                                            </a>
                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="interviewdetails/<?php echo $businessNews[$i]['id'];?>" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        <?php echo $businessNews[$i]['heading']; ?>
                                                    </a>
                                                </h5>
                                                <span class="cl8">
                                                    <a href="interviewdetails/<?php echo $businessNews[$i]['id'];?>" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        <?php echo $businessNews[$i]['sub_categories']; ?>
                                                    </a>
                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>
                                                    <span class="f1-s-3">
                                                        <?php echo $dbfunc->getDateFromString($businessNews[$i]['date_published']); ?>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    <?php
                                    }

                                    ?>
                                </div>
                            </div>
                        </div> 
                         <?php } ?>

                        <div class="row">
                             <?php if (count($courtNews) > 0) { ?>
                            <div class="col-sm-6 p-r-25 p-r-15-sr991 p-b-25">
                                <div class="how2 how2-cl2 flex-sb-c m-b-35">
                                    <h3 class="f1-m-2 cl13 tab01-title" id="catId">
                                        Courts
                                    </h3>
                                    <a href="#" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">
                                        View all
                                        <i class="fs-12 m-l-5 fa fa-caret-right"></i>
                                    </a>
                                </div>

                                <div class="m-b-30">
                                    <a href="interviewdetails/<?php echo $courtNews[0]["id"] ?>" class="wrap-pic-w hov1 trans-03">
                                        <img src="<?php echo $baseImageUrl.$courtNews[0]['image_url'];?>_1.png" alt="IMG">
                                    </a>
                                    <div class="p-t-20">
                                        <h5 class="p-b-5">
                                            <a href="interviewdetails/<?php echo $courtNews[0]["id"] ?>" class="f1-m-3 cl2 hov-cl10 trans-03">
                                                <?php echo  $courtNews[0]["heading"] ?>
                                            </a>
                                        </h5>
                                        <span class="cl8">
                                            <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                                <?php echo  $courtNews[0]["sub_categories"] ?>
                                            </a>
                                            <span class="f1-s-3 m-rl-3">
                                                -
                                            </span>
                                            <span class="f1-s-3">
                                               <?php echo $dbfunc->getDateFromString($courtNews[0]["date_published"]) ?>
                                            </span>
                                        </span>
                                    </div>
                                </div>

                                <?php
                               $len = (count($courtNews) > 3) ? 3: count($courtNews);

                                for ($i = 0; $i < $len; $i++) {?>
                                        <div class="flex-wr-sb-s m-b-30">
                                        <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                          <img src="<?php echo $baseImageUrl.$courtNews[$i]['image_url'];?>_2.png" alt="IMGDonec metus orci, malesuada et lectus vitae">
                                        </a>
                                        <div class="size-w-2">
                                          <h5 class="p-b-5">
                                            <a href="interviewdetails/<?php echo $courtNews[$i]["id"] ?>" class="f1-s-5 cl3 hov-cl10 trans-03">
                                               <?php echo $courtNews[$i]["heading"] ?>
                                            </a>
                                          </h5>
                                          <span class="cl8">
                                            <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                               <?php echo $courtNews[$i]["sub_categories"] ?>
                                            </a>
                                            <span class="f1-s-3 m-rl-3">
                                              -
                                            </span>
                                            <span class="f1-s-3">
                                               <?php echo $dbfunc->getDateFromString($courtNews[$i]["date_published"]) ?>
                                            </span>
                                          </span>
                                        </div>
                                      </div>
                            <?php
                                }

                                ?>
                            </div>
                             <?php } ?>

                             <?php if (count($crimeNews) > 0) { ?>
                            <div class="col-sm-6 p-r-25 p-r-15-sr991 p-b-25">
                                <div class="how2 how2-cl6 flex-sb-c m-b-35">
                                    <h3 class="f1-m-2 cl18 tab01-title" id="catId">
                                        Crime
                                    </h3>
                                    <a href="#" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">
                                        View all
                                        <i class="fs-12 m-l-5 fa fa-caret-right"></i>
                                    </a>
                                </div>

                                <div class="m-b-30">
                                    <a href="interviewdetails/<?php echo $crimeNews[0]["id"] ?>" class="wrap-pic-w hov1 trans-03">
                                        <img src="<?php echo $baseImageUrl.$crimeNews[0]['image_url'];?>_1.png" alt="IMG">
                                    </a>
                                    <div class="p-t-20">
                                        <h5 class="p-b-5">
                                            <a href="interviewdetails/<?php echo $crimeNews[0]["id"] ?>" class="f1-m-3 cl2 hov-cl10 trans-03">
                                               <?php echo $crimeNews[0]["heading"] ?>
                                            </a>
                                        </h5>
                                        <span class="cl8">
                                            <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                                <?php echo $crimeNews[0]["sub_categories"] ?>
                                            </a>
                                            <span class="f1-s-3 m-rl-3">
                                                -
                                            </span>
                                            <span class="f1-s-3">
                                                <?php echo $dbfunc->getDateFromString($crimeNews[0]["date_published"]) ?>
                                            </span>
                                        </span>
                                    </div>
                                </div>

                                <?php

                               $len = (count($crimeNews) > 3) ? 3: count($crimeNews);
                                for ($i = 0; $i < $len; $i++) {
                                    ?>
                                    <div class="flex-wr-sb-s m-b-30">
                                    <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                      <img src="<?php echo $baseImageUrl.$crimeNews[$i]['image_url'];?>_2.png" alt="IMGDonec metus orci, malesuada et lectus vitae">
                                    </a>
                                    <div class="size-w-2">
                                      <h5 class="p-b-5">
                                        <a href="interviewdetails/<?php echo $crimeNews[$i]["id"] ?>" class="f1-s-5 cl3 hov-cl10 trans-03">
                                         <?php echo $crimeNews[$i]["heading"] ?>
                                        </a>
                                      </h5>
                                      <span class="cl8">
                                        <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                         <?php echo $crimeNews[$i]["sub_categories"] ?>
                                        </a>
                                        <span class="f1-s-3 m-rl-3">
                                          -
                                        </span>
                                        <span class="f1-s-3">
                                          <?php echo $dbfunc->getDateFromString($crimeNews[$i]["date_published"]) ?>
                                        </span>
                                      </span>
                                    </div>
                                  </div>
                    
                            
                                 <?php } ?>
                            </div>
                             <?php } ?>
                        </div>
                    </div>
                </div>


                <div class="col-md-10 col-lg-4">
                    <div class="p-l-10 p-rl-0-sr991 p-b-20">
                        <div class="p-b-35">
                            <div class="how2 how2-cl4 flex-s-c">
                                <h3 class="f1-m-2 cl3 tab01-title">
                                    Stay Connected
                                </h3>
                            </div>
                            <ul class="p-t-35">
                    <?php 
                      for ($i=0; $i < count($accounts); $i++) { 
                        switch ($accounts[$i]["plattform"]) {
                          case 'Facebook':
                            ?>
                              <li class="flex-wr-sb-c p-b-20">
                                    <a href="javascript:void(0)" class="size-a-8 flex-c-c borad-3 size-a-8 bg-facebook fs-16 cl0 hov-cl0">
                                        <span class="fab fa-facebook-f"></span>
                                    </a>
                                    <div class="size-w-3 flex-wr-sb-c">
                                        <span class="f1-s-8 cl3 p-r-20">
                                            <?php echo $accounts[$i]['followers'] ?> Fans
                                        </span>
                                        <a href="https://facebook.com/<?php echo $accounts[$i]['account_name'] ?>/" target="_blank"  class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">
                                            Like
                                        </a>
                                    </div>
                                </li>
                           <?php
                            break;
                         case 'Instagram':
                            ?>
                              <li class="flex-wr-sb-c p-b-20">
                                    <a href="javascript:void(0)" class="size-a-8 flex-c-c borad-3 size-a-8 bg-instagram fs-16 cl0 hov-cl0">
                                        <span class="fab fa-instagram"></span>
                                    </a>
                                    <div class="size-w-3 flex-wr-sb-c">
                                        <span class="f1-s-8 cl3 p-r-20">
                                            <?php echo $accounts[$i]['followers'] ?> Followers
                                        </span>
                                        <a href="https://instagram.com/<?php echo $accounts[$i]['account_name'] ?>/" target="_blank"  class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">
                                            Follow
                                        </a>
                                    </div>
                                </li>
                           <?php
                            break;
                          case 'Twitter':
                            ?>
                              <li class="flex-wr-sb-c p-b-20">
                                    <a href="javascript:void(0)" class="size-a-8 flex-c-c borad-3 size-a-8 bg-twitter fs-16 cl0 hov-cl0">
                                        <span class="fab fa-twitter"></span>
                                    </a>
                                    <div class="size-w-3 flex-wr-sb-c">
                                        <span class="f1-s-8 cl3 p-r-20">
                                            <?php echo $accounts[$i]['followers'] ?> Followers
                                        </span>
                                        <a href="https://twitter.com/<?php echo $accounts[$i]['account_name'] ?>/" target="_blank"  class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">
                                            Follow
                                        </a>
                                    </div>
                                </li>
                           <?php
                            break;
                          case 'Youtube':
                            ?>
                              <li class="flex-wr-sb-c p-b-20">
                                    <a href="javascript:void(0)" class="size-a-8 flex-c-c borad-3 size-a-8 bg-youtube fs-16 cl0 hov-cl0">
                                        <span class="fab fa-youtube"></span>
                                    </a>
                                    <div class="size-w-3 flex-wr-sb-c">
                                        <span class="f1-s-8 cl3 p-r-20">
                                            <?php echo $accounts[$i]['followers'] ?> Subscribers
                                        </span>
                                        <a href="https://youtube.com/channel/<?php echo $accounts[$i]['account_name'] ?>/" target="_blank"  class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">
                                            Subscribe
                                        </a>
                                    </div>
                                </li>
                           <?php
                            break;
                          default:
                            break;
                        }

                      }
                     ?>
                            </ul>
                        </div>

                        <div class="flex-c-s p-t-8 p-b-65">
                            <a href="#">
                                <img class="max-w-full" src="images/xbanner-02.jpg.pagespeed.ic.SI0M6FaN4k.jpg" alt="IMG">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php if (count($elecPetition) > 4) {?>
    <div class="weekly-news-area pt-50">
        <div class="container">
            <div class="weekly-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3 id="catId">Election Petition</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="weekly-news-active dot-style d-flex dot-style">
                           
                            <?php 
                                $len = (count($elecPetition) > 12) ? 12: count($elecPetition);
                                for ($i=0; $i < $len; $i++) {
                             ?>
                            <div class="weekly-single">
                                <div class="weekly-img">
                                    <img src="assets/img/news/weeklyNews2.jpg" alt="" />
                                </div>
                                <div class="weekly-caption">
                                    <span class="color1"><?php echo $elecPetition[$i]["sub_categories"] ?></span>
                                    <h4>
                                        <a href="interviewdetails/<?php echo $elecPetition[$i]["id"] ?>"><?php echo mb_strimwidth($elecPetition[$i]["heading"] , 0, 120)?>...

                                        </a>
                                    </h4>
                                </div>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>


    <section class="whats-news-area pt-50 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row d-flex justify-content-between">
                        <div class="col-lg-3 col-md-3">
                            <div class="section-tittle mb-30">
                                <h3 id="catId">International</h3>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <div class="properties__button">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="nav-africa-tab" data-toggle="tab" href="#nav-africa" role="tab" aria-controls="nav-africa" aria-selected="true">Afica</a>
                                        <a class="nav-item nav-link" id="nav-europe-tab" data-toggle="tab" href="#nav-europe" role="tab" aria-controls="nav-europe" aria-selected="false">Europe</a>
                                        <a class="nav-item nav-link" id="nav-us-tab" data-toggle="tab" href="#nav-us" role="tab" aria-controls="nav-us" aria-selected="false">US</a>
                                        <a class="nav-item nav-link" id="nav-uk-tab" data-toggle="tab" href="#nav-uk" role="tab" aria-controls="nav-uk" aria-selected="false">UK</a>
                                        <a class="nav-item nav-link" id="nav-middle-east" data-toggle="tab" href="#nav-nav-middle-east" role="tab" aria-controls="nav-middle-east" aria-selected="false">Middle East</a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-africa" role="tabpanel" aria-labelledby="nav-africa-tab">
                                    <div class="whats-news-caption">
                                        <div class="row">

                                            <?php 
                                            $len = (count($latestAfrica) > 4) ? 4: count($latestAfrica);
                                            for ($i=0; $i < $len; $i++) {
                                         ?>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-what-news mb-100">
                                                    <div class="what-img">
                                                        <img src="<?php echo $baseImageUrl.$latestAfrica[$i]['image_url'];?>_3.png" alt="" />
                                                    </div>
                                                    <div class="what-cap">
                                                        <span class="color1"><?php echo $dbfunc->getDateFromString($latestAfrica[$i]["date_published"]) ?></span>
                                                        <h4>
                                                            <a href="interviewdetails/<?php echo $latestAfrica[$i]["id"] ?>"><?php echo mb_strimwidth($latestAfrica[$i]["heading"], 0 , 100) ?>...</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>

                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-europe" role="tabpanel" aria-labelledby="nav-europe-tab">
                                    <div class="whats-news-caption">
                                        <div class="row">


            
                                            <?php 
                                            $len = (count($latestEurope) > 4) ? 4: count($latestEurope);
                                            for ($i=0; $i < $len; $i++) {
                                         ?>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-what-news mb-100">
                                                    <div class="what-img">
                                                        <img src="<?php echo $baseImageUrl.$latestEurope[$i]['image_url'];?>_3.png" alt="" />
                                                    </div>
                                                    <div class="what-cap">
                                                        <span class="color1"><?php echo $dbfunc->getDateFromString($latestEurope[$i]["date_published"]) ?></span>
                                                        <h4>
                                                            <a href="interviewdetails/<?php echo $latestEurope[$i]["id"] ?>"><?php echo mb_strimwidth($latestEurope[$i]["heading"], 0 , 100) ?>...</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-us" role="tabpanel" aria-labelledby="nav-us-tab">
                                    <div class="whats-news-caption">
                                        <div class="row">
                                           
                                              <?php 
                                            $len = (count($latestUs) > 4) ? 4: count($latestUs);
                                            for ($i=0; $i < $len; $i++) {
                                         ?>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-what-news mb-100">
                                                    <div class="what-img">
                                                        <img src="<?php echo $baseImageUrl.$latestUs[$i]['image_url'];?>_3.png" alt="" />
                                                    </div>
                                                    <div class="what-cap">
                                                        <span class="color1"><?php echo $dbfunc->getDateFromString($latestUs[$i]["date_published"]) ?></span>
                                                        <h4>
                                                            <a href="interviewdetails/<?php echo $latestUs[$i]["id"] ?>"><?php echo mb_strimwidth($latestUs[$i]["heading"], 0 , 100) ?>...</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>

                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-uk" role="tabpanel" aria-labelledby="nav-uk-tab">
                                    <div class="whats-news-caption">
                                        <div class="row">

                                              <?php 
                                            $len = (count($latestUk) > 4) ? 4: count($latestUk);
                                            for ($i=0; $i < $len; $i++) {
                                         ?>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-what-news mb-100">
                                                    <div class="what-img">
                                                        <img src="<?php echo $baseImageUrl.$latestUk[$i]['image_url'];?>_3.png" alt="" />
                                                    </div>
                                                    <div class="what-cap">
                                                        <span class="color1"><?php echo $dbfunc->getDateFromString($latestUk[$i]["date_published"]) ?></span>
                                                        <h4>
                                                            <a href="interviewdetails/<?php echo $latestUk[$i]["id"] ?>"><?php echo mb_strimwidth($latestUk[$i]["heading"], 0 , 100) ?>...</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-nav-middle-east" role="tabpanel" aria-labelledby="nav-middle-east">
                                    <div class="whats-news-caption">
                                        <div class="row">
                                      
                                              <?php 
                                            $len = (count($latestMiddleEast) > 4) ? 4: count($latestMiddleEast);
                                            for ($i=0; $i < $len; $i++) {
                                         ?>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-what-news mb-100">
                                                    <div class="what-img">
                                                        <img src="<?php echo $baseImageUrl.$latestMiddleEast[$i]['image_url'];?>_3.png" alt="" />
                                                    </div>
                                                    <div class="what-cap">
                                                        <span class="color1"><?php echo $dbfunc->getDateFromString($latestMiddleEast[$i]["date_published"]) ?></span>
                                                        <h4>
                                                            <a href="interviewdetails/<?php echo $latestMiddleEast[$i]["id"] ?>"><?php echo mb_strimwidth($latestMiddleEast[$i]["heading"], 0 , 100) ?>...</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
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
                                    <a href="https://facebook.com/<?php echo $accounts[$i]['account_name'] ?>/" target="_blank"><img src="<?php echo $baseImageUrl.$accounts[$i]['image_url'];?>_2.png" alt="" /></a>
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
                                    <a href="https://instagram.com/<?php echo $accounts[$i]['account_name'] ?>/" target="_blank"><img src="<?php echo $baseImageUrl.$accounts[$i]['image_url'];?>_2.png" alt="" /></a>
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
                                    <a href="https://twitter.com/<?php echo $accounts[$i]['account_name'] ?>/" target="_blank"><img src="<?php echo $baseImageUrl.$accounts[$i]['image_url'];?>_2.png" alt="" /></a>
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
                                    <a href="https://www.youtube.com/channel/<?php echo $accounts[$i]['account_name'] ?>/" target="_blank"><img src="<?php echo $baseImageUrl.$accounts[$i]['image_url'];?>_2.png" alt="" /></a>
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
                        <img src="assets/img/news/news_card.jpg" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php if (count($happilex) > 4) {?>
    <div class="weekly2-news-area weekly2-pading gray-bg">
        <div class="container">
            <div class="weekly2-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3 id="catId">Happilex</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="weekly2-news-active dot-style d-flex dot-style">
                            
                            <?php 
                                $len = (count($happilex) > 15) ? 15: count($happilex);
                                for ($i=0; $i < $len; $i++) {
                             ?>
                            <div class="weekly2-single">
                                <div class="weekly2-img">
                                    <img src="<?php echo $baseImageUrl.$happilex[$i]['image_url'];?>_3.png" alt="" />
                                </div>
                                <div class="weekly2-caption">
                                    <span class="color1"><?php echo $happilex[$i]["category"] ?></span>
                                    <p><?php echo $dbfunc->getDateFromString($happilex[$i]["date_published"]) ?></p>
                                    <h4>
                                        <a href="happilex-details/<?php echo $happilex[$i]["id"] ?>">
                                            <?php echo  mb_strimwidth($happilex[$i]["title"], 0,120)?>...
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php } ?>


 <!--   <div class="youtube-area video-padding">
         <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="video-items-active">
                        <div class="video-items text-center">
                            <iframe src="https://www.youtube.com/embed/q1b44PyAfGA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="video-items text-center">
                            <iframe src="https://www.youtube.com/embed/6_f9_oTcrhc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="video-items text-center">
                            <iframe src="https://www.youtube.com/embed/blEDqFceg0o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="video-items text-center">
                            <iframe src="https://www.youtube.com/embed/WzzHdR_9iEk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="video-items text-center">
                            <iframe src="https://www.youtube.com/embed/fphh6QiLM9M" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="video-info">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="video-caption">
                            <div class="top-caption">
                                <span class="color1">Videos</span>
                            </div>
                            <div class="bottom-caption">
                                <h2>
                                    El Savador adopts Bitcoin as legal tender after MPs vote
                                    At Look of the year
                                </h2>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit
                                    sed do eiusmod ipsum dolor sit. Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit sed do eiusmod ipsum dolor
                                    sit. Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit sed do eiusmod ipsum dolor sit lorem ipsum dolor sit.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testmonial-nav text-center">
                            <div class="single-video">
                                <iframe src="https://www.youtube.com/embed/q1b44PyAfGA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <div class="video-intro">
                                    <h4>Welcotme To The Best Model Winner Contest</h4>
                                </div>
                            </div>
                            <div class="single-video">
                                <iframe src="https://www.youtube.com/embed/6_f9_oTcrhc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <div class="video-intro">
                                    <h4>Welcotme To The Best Model Winner Contest</h4>
                                </div>
                            </div>
                            <div class="single-video">
                                <iframe src="https://www.youtube.com/embed/blEDqFceg0o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <div class="video-intro">
                                    <h4>Welcotme To The Best Model Winner Contest</h4>
                                </div>
                            </div>
                            <div class="single-video">
                                <iframe src="https://www.youtube.com/embed/WzzHdR_9iEk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <div class="video-intro">
                                    <h4>Welcotme To The Best Model Winner Contest</h4>
                                </div>
                            </div>
                            <div class="single-video">
                                <iframe src="https://www.youtube.com/embed/fphh6QiLM9M" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <div class="video-intro">
                                    <h4>Welcotme To The Best Model Winner Contest</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
 

    <?php 
        if (count($allJustice) > 3) {?>
    <div class="recent-articles">
        <div class="container">
            <div class="recent-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3 id="catId">Justices</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="recent-active dot-style d-flex dot-style">
                          <?php 
                            $len = (count($allJustice) > 15) ? 15: count($allJustice);
                            for ($i=0; $i < $len; $i++) {
                         ?>
                            <div class="single-recent mb-100">
                                <div class="what-img">
                                    <img src="<?php echo $baseImageUrl.$allJustice[$i]['image_url'];?>_3.png" alt="" />
                                </div>
                                <div class="what-cap">
                                    <span class="color1"><?php echo $allJustice[$i]["justice_name"] ?></span>
                                    <h4>
                                        <a href="javascript:void(0)">
                                            <?php echo mb_strimwidth($allJustice[$i]["justice_info"], 0, 120) ?>...
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php }    ?>

    <!-- INTERNAL ADs -->
    <div class="container" style="margin: 50px 30px;">
        <div class="flex-c-c">
            <a href="#">
                <img class="max-w-full" src="images/xbanner-01.jpg.pagespeed.ic.9gkN7NdpWv.jpg" alt="IMG">
            </a>
        </div>
    </div>


</main>
<?php include "inc/footer.php"; ?>

<script>
    function tester() {
        var genCategories = document.getElementById('catId').value;
        console.log(genCategories);
    }
</script>

<?php include "inc/footer-meta.php"; ?>