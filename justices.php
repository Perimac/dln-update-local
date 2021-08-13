<?php 
include "inc/meta.php"; 
$allJustice = $dbfunc->getAllJustices();
?>


<link rel="stylesheet" href="assets/css/bootstrap.min.css%2bowl.carousel.min.css%2bticker-style.css%2bflaticon.css%2bslicknav.css%2banimate.min.css%2bmagnific-popup.css%2bfontawesome-all.min.css%2bthemify-ico" />
<link rel="stylesheet" href="assets/css/style.css" />

<link rel="icon" type="image/png" href="images/icons/xfavicon.png.pagespeed.ic.0zk7TR-Xxr.png" />
<link rel="stylesheet" type="text/css" href="mytech.css" />

<?php include "inc/header.php"; ?>

<div class="recent-articles" style="margin-top: 30px;">
    <div class="container">
        <div class="recent-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle mb-30">
                        <h3 id="catId">Justices</h3>
                    </div>
                </div>
            </div>
                            <?php if(count($allJustice) > 5){ ?>
            <div class="row">
                <div class="col-12">
                    <div class="recent-active dot-style d-flex dot-style">
                        <?php
                        for ($i = 0; $i < count($allJustice); $i++) {?>
                                              
                          <div class="single-recent mb-200">
                            <div class="what-img">
                                <img src="<?php echo $baseImageUrl.$allJustice[$i]['image_url'];?>_3.png" alt="" />
                            </div>
                            <div class="what-cap">
                                <span class="color1"><?php echo $allJustice[$i]["justice_name"] ?></span>
                                <h6>
                                    <a href="#">
                                         <?php echo mb_strimwidth($allJustice[$i]["justice_info"], 0, 200) ?>
                                    </a>
                                </h6>
                            </div>
                            </div>     
                       <?php 
                        }
                        ?>
                    </div>
                </div>
            </div>
            <?php  
        }else{
             
                        for ($i = 0; $i < count($allJustice); $i++) {?>
                                              
                          <div class="row col-lg-6">
                              <div class="single-recent mb-200">
                            <div class="what-img">
                                <img src="<?php echo $baseImageUrl.$allJustice[$i]['image_url'];?>_3.png" alt="" />
                            </div>
                            <div class="what-cap">
                                <span class="color1"><?php echo $allJustice[$i]["justice_name"] ?></span>
                                <h6>
                                    <a href="#">
                                        <?php echo mb_strimwidth($allJustice[$i]["justice_info"], 0, 200) ?>
                                    </a>
                                </h6>
                            </div>
                            </div> 
                          </div>    
                       <?php 
                        }
                                    
        }
         ?>
        </div>
    </div>
</div>


<!-- INTERNAL ADs -->
<div class="container" style="margin-top: 20px; margin-bottom: 30px">
    <div class="flex-c-c">
        <a href="#">
            <img class="max-w-full" src="assets/img/hero/header_card.jpg" alt="IMG">
        </a>
    </div>
</div>

<?php include './inc/footer.php' ?>
<?php include './inc/footer-meta.php' ?>