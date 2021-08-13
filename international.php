<?php include "inc/meta.php"; ?>

<?php
$afriresponse = $dbfunc->getAllInternationalSub('Africa');
$usresponse = $dbfunc->getAllInternationalSub('Us');
$euroresponse = $dbfunc->getAllInternationalSub('Europe');
$ukresponse = $dbfunc->getAllInternationalSub('Uk');
$midEastresponse = $dbfunc->getAllInternationalSub('Middle East');

?>


<link rel="stylesheet" href="assets/css/bootstrap.min.css%2bowl.carousel.min.css%2bticker-style.css%2bflaticon.css%2bslicknav.css%2banimate.min.css%2bmagnific-popup.css%2bfontawesome-all.min.css%2bthemify-ico" />
<link rel="stylesheet" href="assets/css/style.css" />

<link rel="icon" type="image/png" href="images/icons/xfavicon.png.pagespeed.ic.0zk7TR-Xxr.png" />
<link rel="stylesheet" type="text/css" href="mytech.css" />

<?php include "inc/header.php"; ?>


<section class="bg0">
    <div class="row m-rl-0 justify-content-center">
        <!-- DISPLAYING AFRICA TRENDS-->
        <?php
        for ($i = 0; $i < 1; $i++) {
        ?>
            <div class="col-md-4 p-rl-1 p-b-2">
                <div class="bg-img1 size-a-11 how1 pos-relative" style="background-image:url(
                    <?php echo $baseImageUrl.$afriresponse[$i]['image_url'];?>_3.png
                            )">
                    <a href="interviewdetails/<?php echo $afriresponse[$i]['id'];?>" class="dis-block how1-child1 trans-03"></a>
                    <div class="flex-col-e-s s-full p-rl-25 p-tb-18">
                        <a href="interviewdetails/<?php echo $afriresponse[$i]['id'];?>" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                            <?php echo $afriresponse[$i]['sub_categories']; ?>
                        </a>
                        <h3 class="how1-child2 m-t-14 m-b-10">
                            <a href="interviewdetails/<?php echo $afriresponse[$i]['id'];?>" class="f1-l-1 cl0 hov-cl10 trans-03 respon1">
                                <?php echo $afriresponse[$i]['heading'];?>
                            </a>
                        </h3>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
        <!-- DISPLAYING US TRENDS-->
        <?php
        for ($i = 0; $i < 1; $i++) {
        ?>
            <div class="col-md-4 p-rl-1 p-b-2">
                <div class="bg-img1 size-a-11 how1 pos-relative" style="background-image: url(
                    <?php echo $baseImageUrl.$usresponse[$i]['image_url']?>_3.png
                            )">
                    <a href="interviewdetails/<?php echo $usresponse[$i]['id'];?>" class="dis-block how1-child1 trans-03"></a>
                    <div class="flex-col-e-s s-full p-rl-25 p-tb-18">
                        <a href="interviewdetails/<?php echo $usresponse[$i]['id'];?>" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                            <?php echo $usresponse[$i]['sub_categories'] ?>
                        </a>
                        <h3 class="how1-child2 m-t-14 m-b-10">
                            <a href="interviewdetails/<?php echo $usresponse[$i]['id'];?>" class="f1-l-1 cl0 hov-cl10 trans-03 respon1">
                                <?php echo $usresponse[$i]['heading'] ?>
                            </a>
                        </h3>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
        <!-- DISPLAYING EUROPE TRENDS-->
        <?php
        for ($i = 0; $i < 1; $i++) {
        ?>
            <div class="col-md-4 p-rl-1 p-b-2">
                <div class="bg-img1 size-a-11 how1 pos-relative" style="background-image: url(
                    <?php echo $baseImageUrl.$euroresponse[$i]['image_url'];?>_3.png
                            )">
                    <a href="interviewdetails/<?php echo $euroresponse[$i]['id'];?>" class="dis-block how1-child1 trans-03"></a>
                    <div class="flex-col-e-s s-full p-rl-25 p-tb-18">
                        <a href="interviewdetails/<?php echo $euroresponse[$i]['id'];?>" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                            <?php echo $euroresponse[$i]['sub_categories']; ?>
                        </a>
                        <h3 class="how1-child2 m-t-14 m-b-10">
                            <a href="interviewdetails/<?php echo $euroresponse[$i]['id'];?>" class="f1-l-1 cl0 hov-cl10 trans-03 respon1">
                                <?php echo $euroresponse[$i]['heading'];?>
                            </a>
                        </h3>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>

    </div>
</section>


<section class="bg0 p-t-70">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-10 col-lg-8">
                <div class="p-b-20">

                    <?php if(count($afriresponse) > 0) { ?>
                    <div class="p-b-20">
                        <div class="how2 how2-cl1 flex-sb-c m-r-10 m-r-0-sr991">
                            <h3 class="f1-m-2 cl12 tab01-title">
                                Africa
                            </h3>
                            <a href="interviewall/<?php echo $afriresponse[0]['sub_categories'];?>" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">
                                View all
                                <i class="fs-12 m-l-5 fa fa-caret-right"></i>
                            </a>
                        </div>
                        <div class="row p-t-35">
                            <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                <div class="m-b-30">
                                    <a href="interviewdetails/<?php echo $afriresponse[1]['id'];?>" class="wrap-pic-w hov1 trans-03">
                                        <img src="<?php echo $baseImageUrl.$afriresponse[1]['image_url'];?>_1.png" alt="IMG">
                                    </a>
                                    <div class="p-t-20">
                                        <h5 class="p-b-5">
                                            <a href="interviewdetails/<?php echo $afriresponse[1]['id'];?>" class="f1-m-3 cl2 hov-cl10 trans-03">
                                                <?php echo $afriresponse[1]['heading']; ?>
                                            </a>
                                        </h5>
                                        <span class="cl8">
                                            <a href="interviewdetails/<?php echo $afriresponse[1]['id'];?>" class="f1-s-4 cl8 hov-cl10 trans-03">
                                                <?php echo $afriresponse[1]['sub_categories']; ?>
                                            </a>
                                            <span class="f1-s-3 m-rl-3">
                                                -
                                            </span>
                                            <span class="f1-s-3">
                                                <?php echo $dbfunc->getDateFromString($afriresponse[1]['date_published']) ?>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                <?php
                                $length = (count($afriresponse) > 3) ? 5 : count($afriresponse);
                            for ($i = 2; $i < $length; $i++) {
                                ?>
                                    <div class="flex-wr-sb-s m-b-30">
                                        <a href="interviewdetails/<?php echo $afriresponse[$i]['id'];?>" class="size-w-1 wrap-pic-w hov1 trans-03">
                                            <img src="<?php echo $baseImageUrl.$afriresponse[$i]['image_url'];?>_2.png" alt="IMGDonec metus orci, malesuada et lectus vitae">
                                        </a>
                                        <div class="size-w-2">
                                            <h5 class="p-b-5">
                                                <a href="interviewdetails/<?php echo $afriresponse[$i]['id'];?>" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                    <?php echo $afriresponse[$i]['heading']; ?>
                                                </a>
                                            </h5>
                                            <span class="cl8">
                                                <a href="interviewdetails/<?php echo $afriresponse[$i]['id'];?>" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                    <?php echo $afriresponse[$i]['sub_categories']; ?>
                                                </a>
                                                <span class="f1-s-3 m-rl-3">
                                                    -
                                                </span>
                                                <span class="f1-s-3">
                                                    <?php echo $dbfunc->getDateFromString($afriresponse[$i]['date_published']); ?>
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

                        <?php if(count($euroresponse) > 0) { ?>
                        <div class="col-sm-6 p-r-25 p-r-15-sr991 p-b-25">
                            <div class="how2 how2-cl2 flex-sb-c m-b-35">
                                <h3 class="f1-m-2 cl13 tab01-title">
                                    Europe
                                </h3>
                                <a href="interviewall/<?php echo $euroresponse[0]['sub_categories'];?>" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">
                                    View all
                                    <i class="fs-12 m-l-5 fa fa-caret-right"></i>
                                </a>
                            </div>

                            <div class="m-b-30">
                                <a href="interviewdetails/<?php echo $euroresponse[1]['id'];?>" class="wrap-pic-w hov1 trans-03">
                                    <img src="<?php echo $baseImageUrl.$euroresponse[1]['image_url'];?>_1.png" alt="IMG">
                                </a>
                                <div class="p-t-20">
                                    <h5 class="p-b-5">
                                        <a href="interviewdetails/<?php echo $euroresponse[1]['id'];?>" class="f1-m-3 cl2 hov-cl10 trans-03">
                                            <?php echo $euroresponse[1]['heading']; ?>
                                        </a>
                                    </h5>
                                    <span class="cl8">
                                        <a href="interviewdetails/<?php echo $euroresponse[1]['id'];?>" class="f1-s-4 cl8 hov-cl10 trans-03">
                                            <?php echo $euroresponse[1]['sub_categories']; ?>
                                        </a>
                                        <span class="f1-s-3 m-rl-3">
                                            -
                                        </span>
                                        <span class="f1-s-3">
                                            <?php echo $dbfunc->getDateFromString($euroresponse[1]['date_published']); ?>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <?php
                            $length = (count($euroresponse) > 3) ? 5 : count($euroresponse);
                            for ($i = 2; $i < $length; $i++) {
                            ?>
                                <div class="flex-wr-sb-s m-b-30">
                                    <a href="interviewdetails/<?php echo $euroresponse[$i]['id'];?>" class="size-w-1 wrap-pic-w hov1 trans-03">
                                        <img src="<?php echo $baseImageUrl.$euroresponse[$i]['image_url'];?>_2.png" alt="image">
                                    </a>
                                    <div class="size-w-2">
                                        <h5 class="p-b-5">
                                            <a href="interviewdetails/<?php echo $euroresponse[$i]['id'];?>" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                <?php echo $euroresponse[$i]['heading']; ?>
                                            </a>
                                        </h5>
                                        <span class="cl8">
                                            <a href="interviewdetails/<?php echo $euroresponse[$i]['id'];?>" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                <?php echo $euroresponse[$i]['sub_categories']; ?>
                                            </a>
                                            <span class="f1-s-3 m-rl-3">
                                                -
                                            </span>
                                            <span class="f1-s-3">
                                                <?php echo $dbfunc->getDateFromString($euroresponse[$i]['date_published']); ?>
                                            </span>
                                        </span>
                                    </div>
                                </div>

                            <?php
                            }

                            ?>
                        </div>
                        <?php } ?>


                        <?php if(count($usresponse) > 0) { ?>
                        <div class="col-sm-6 p-r-25 p-r-15-sr991 p-b-25">
                            <div class="how2 how2-cl6 flex-sb-c m-b-35">
                                <h3 class="f1-m-2 cl18 tab01-title">
                                    US
                                </h3>
                                <a href="interviewall/<?php echo $usresponse[0]['sub_categories'];?>" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">
                                    View all
                                    <i class="fs-12 m-l-5 fa fa-caret-right"></i>
                                </a>
                            </div>

                            <div class="m-b-30">
                                <a href="interviewdetails/<?php echo $usresponse[1]['id'];?>" class="wrap-pic-w hov1 trans-03">
                                    <img src="<?php echo $baseImageUrl.$usresponse[1]['image_url'];?>_1.png" alt="IMG">
                                </a>
                                <div class="p-t-20">
                                    <h5 class="p-b-5">
                                        <a href="interviewdetails/<?php echo $usresponse[1]['id'];?>" class="f1-m-3 cl2 hov-cl10 trans-03">
                                            <?php echo $usresponse[1]['heading']; ?>
                                        </a>
                                    </h5>
                                    <span class="cl8">
                                        <a href="interviewdetails/<?php echo $usresponse[1]['id'];?>" class="f1-s-4 cl8 hov-cl10 trans-03">
                                            <?php echo $usresponse[1]['sub_categories']; ?>
                                        </a>
                                        <span class="f1-s-3 m-rl-3">
                                            -
                                        </span>
                                        <span class="f1-s-3">
                                            <?php echo $dbfunc->getDateFromString($usresponse[1]['date_published']); ?>
                                        </span>
                                    </span>
                                </div>
                            </div>

                            <?php
                            $length = (count($usresponse) > 3) ? 5 : count($usresponse);
                            for ($i = 2; $i < $length; $i++) {
                            ?>
                                <div class="flex-wr-sb-s m-b-30">
                                    <a href="interviewdetails/<?php echo $usresponse[$i]['id'];?>" class="size-w-1 wrap-pic-w hov1 trans-03">
                                        <img src="<?php echo $baseImageUrl.$usresponse[$i]['image_url'];?>_2.png" alt="IMGDonec metus orci, malesuada et lectus vitae">
                                    </a>
                                    <div class="size-w-2">
                                        <h5 class="p-b-5">
                                            <a href="interviewdetails/<?php echo $usresponse[$i]['id'];?>" class="f1-s-5 cl3 hov-cl10 trans-03">
                                            <?php echo $usresponse[$i]['heading'];?>
                                            </a>
                                        </h5>
                                        <span class="cl8">
                                            <a href="interviewdetails/<?php echo $usresponse[$i]['id'];?>" class="f1-s-6 cl8 hov-cl10 trans-03">
                                            <?php echo $usresponse[$i]['sub_categories'];?>
                                            </a>
                                            <span class="f1-s-3 m-rl-3">
                                                -
                                            </span>
                                            <span class="f1-s-3">
                                            <?php echo $dbfunc->getDateFromString($usresponse[$i]['date_published']);?>
                                            </span>
                                        </span>
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

            <!-- STAY CONNECTED AND ADs DIV -->
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


                    <div class="bg10 p-rl-35 p-t-28 p-b-35 m-b-55">
                        <h5 class="f1-m-5 cl0 p-b-10">
                            Subscribe
                        </h5>
                        <p class="f1-s-1 cl0 p-b-25">
                            Get all latest content delivered to your email a few times a month.
                        </p>
                        <form action="javascript:void(0)" class="size-a-9 pos-relative">
                            <input class="s-full f1-m-6 cl6 plh9 p-l-20 p-r-55" type="text" id="email-to-post-to-subscribe" placeholder="Email">
                            <button onclick="postNewsLetter2()" class="size-a-10 flex-c-c ab-t-r fs-16 cl9 hov-cl10 trans-03">
                                <i class="fa fa-arrow-right"></i>
                            </button>
                        </form>
                      <div class="mt-10 info2"></div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>


<!-- INTERNAL ADs -->
<div class="container">
    <div class="flex-c-c">
        <a href="#">
            <img class="max-w-full" src="images/xbanner-01.jpg.pagespeed.ic.9gkN7NdpWv.jpg" alt="IMG">
        </a>
    </div>
</div>
  

<section class="bg0 p-t-70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="p-b-20">
                    <div class="row">
                        <?php if(count($ukresponse) > 0) { ?>
                        <div class="col-sm-6 p-r-25 p-r-15-sr991 p-b-25">
                            <div class="how2 how2-cl2 flex-sb-c m-b-35">
                                <h3 class="f1-m-2 cl13 tab01-title">
                                    UK
                                </h3>
                                <a href="interviewall/<?php echo $ukresponse[0]['sub_categories'];?>" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">
                                    View all
                                    <i class="fs-12 m-l-5 fa fa-caret-right"></i>
                                </a>
                            </div>

                            <div class="m-b-30">
                                <a href="interviewdetails/<?php echo $ukresponse[1]['id'];?>" class="wrap-pic-w hov1 trans-03">
                                    <img src="<?php echo $baseImageUrl.$ukresponse[1]['image_url'];?>_1.png" alt="IMG">
                                </a>
                                <div class="p-t-20">
                                    <h5 class="p-b-5">
                                        <a href="interviewdetails/<?php echo $ukresponse[1]['id'];?>" class="f1-m-3 cl2 hov-cl10 trans-03">
                                            <?php echo $ukresponse[1]['heading']; ?>
                                        </a>
                                    </h5>
                                    <span class="cl8">
                                        <a href="interviewdetails/<?php echo $ukresponse[1]['id'];?>" class="f1-s-4 cl8 hov-cl10 trans-03">
                                            <?php echo $ukresponse[1]['sub_categories']; ?>
                                        </a>
                                        <span class="f1-s-3 m-rl-3">
                                            -
                                        </span>
                                        <span class="f1-s-3">
                                            <?php echo $dbfunc->getDateFromString($ukresponse[1]['date_published']); ?>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <?php
                            $length = (count($ukresponse) > 3) ? 5 : count($ukresponse);
                            for ($i = 2; $i < $length; $i++) {
                            ?>
                                <div class="flex-wr-sb-s m-b-30">
                                    <a href="interviewdetails/<?php echo $ukresponse[$i]['id'];?>" class="size-w-1 wrap-pic-w hov1 trans-03">
                                        <img src="<?php echo $baseImageUrl.$ukresponse[$i]['image_url'];?>_2.png" alt="image">
                                    </a>
                                    <div class="size-w-2">
                                        <h5 class="p-b-5">
                                            <a href="interviewdetails/<?php echo $ukresponse[$i]['id'];?>" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                <?php echo $ukresponse[$i]['heading']; ?>
                                            </a>
                                        </h5>
                                        <span class="cl8">
                                            <a href="interviewdetails/<?php echo $ukresponse[$i]['id'];?>" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                <?php echo $ukresponse[$i]['sub_categories']; ?>
                                            </a>
                                            <span class="f1-s-3 m-rl-3">
                                                -
                                            </span>
                                            <span class="f1-s-3">
                                                <?php echo $dbfunc->getDateFromString($ukresponse[$i]['date_published']); ?>
                                            </span>
                                        </span>
                                    </div>
                                </div>

                            <?php
                            }

                            ?>

                        </div>
                        <?php } ?>

                        <?php if(count($midEastresponse) > 0) { ?>
                        <div class="col-sm-6 p-r-25 p-r-15-sr991 p-b-25">
                            <div class="how2 how2-cl6 flex-sb-c m-b-35">
                                <h3 class="f1-m-2 cl18 tab01-title">
                                    US
                                </h3>
                                <a href="interviewall/<?php echo $midEastresponse[0]['sub_categories'];?>" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">
                                    View all
                                    <i class="fs-12 m-l-5 fa fa-caret-right"></i>
                                </a>
                            </div>

                            <div class="m-b-30">
                                <a href="interviewdetails/<?php echo $midEastresponse[1]['id'];?>" class="wrap-pic-w hov1 trans-03">
                                    <img src="<?php echo $baseImageUrl.$midEastresponse[1]['image_url'];?>_1.png" alt="IMG">
                                </a>
                                <div class="p-t-20">
                                    <h5 class="p-b-5">
                                        <a href="interviewdetails/<?php echo $midEastresponse[1]['id'];?>" class="f1-m-3 cl2 hov-cl10 trans-03">
                                            <?php echo $midEastresponse[1]['heading']; ?>
                                        </a>
                                    </h5>
                                    <span class="cl8">
                                        <a href="interviewdetails/<?php echo $midEastresponse[1]['id'];?>" class="f1-s-4 cl8 hov-cl10 trans-03">
                                            <?php echo $midEastresponse[1]['sub_categories']; ?>
                                        </a>
                                        <span class="f1-s-3 m-rl-3">
                                            -
                                        </span>
                                        <span class="f1-s-3">
                                            <?php echo $dbfunc->getDateFromString($midEastresponse[1]['date_published']); ?>
                                        </span>
                                    </span>
                                </div>
                            </div>

                            <?php
                            $length = (count($midEastresponse) > 3) ? 5 : count($midEastresponse);
                            for ($i = 2; $i < $length; $i++) {
                            ?>
                                <div class="flex-wr-sb-s m-b-30">
                                    <a href="interviewdetails/<?php echo $midEastresponse[$i]['id'];?>" class="size-w-1 wrap-pic-w hov1 trans-03">
                                        <img src="<?php echo $baseImageUrl.$midEastresponse[$i]['image_url'];?>_2.png" alt="IMGDonec metus orci, malesuada et lectus vitae">
                                    </a>
                                    <div class="size-w-2">
                                        <h5 class="p-b-5">
                                            <a href="interviewdetails/<?php echo $midEastresponse[$i]['id'];?>" class="f1-s-5 cl3 hov-cl10 trans-03">
                                            <?php echo $midEastresponse[$i]['heading'];?>
                                            </a>
                                        </h5>
                                        <span class="cl8">
                                            <a href="interviewdetails/<?php echo $midEastresponse[$i]['id'];?>" class="f1-s-6 cl8 hov-cl10 trans-03">
                                            <?php echo $midEastresponse[$i]['sub_categories'];?>
                                            </a>
                                            <span class="f1-s-3 m-rl-3">
                                                -
                                            </span>
                                            <span class="f1-s-3">
                                            <?php echo $dbfunc->getDateFromString($midEastresponse[$i]['date_published']);?>
                                            </span>
                                        </span>
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
    </div>
</section>

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