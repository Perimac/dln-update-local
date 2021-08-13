<?php 
include "inc/meta.php"; 
$legalWorks = $dbfunc->getAllLegalWorks();
?>

<link rel="stylesheet"
    href="assets/css/bootstrap.min.css%2bowl.carousel.min.css%2bticker-style.css%2bflaticon.css%2bslicknav.css%2banimate.min.css%2bmagnific-popup.css%2bfontawesome-all.min.css%2bthemify-ico" />
<link rel="stylesheet" href="assets/css/style.css" />

<link rel="icon" type="image/png" href="images/icons/xfavicon.png.pagespeed.ic.0zk7TR-Xxr.png" />
<link rel="stylesheet" type="text/css" href="mytech.css" />

<style type="text/css">
.blog_details a {
    color: #000;
}
.blog_details a:hover {
    color: #000 !important;
}
</style>


<section class="blog_area section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    
                    <?php 

                    	for ($i=0; $i < count($legalWorks); $i++) { 
                    		?>
                    			<article class="blog_item">
                        <div class="blog_item_img">
                            <img class="card-img rounded-0"
                                src="https://preview.colorlib.com/theme/aznews/assets/img/blog/xsingle_blog_1.png.pagespeed.ic.Vb11bfvxZv.webp" alt="">
                        </div>
                        <div class="blog_details">
                            <a class="d-inline-block">
                                <h2><?php echo $legalWorks[$i]["firm_name"]; ?></h2>
                                <h6><?php echo $legalWorks[$i]["lawyer_name"]; ?></h6>
                            </a>
                            <p><?php echo $legalWorks[$i]["lawyer_info"]; ?></p>
                            <ul class="blog-info-link">
                                <!-- <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li> -->
                                <!-- <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li> -->
                            </ul>
                        </div>
                    </article>
                    <br>
                    <br>
                    		<?php
                    	}

                     ?>
                    
                </div>
            </div>
        </div>
    </div>
</section>




<?php include './inc/footer-meta.php' ?>