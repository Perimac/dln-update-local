<?php
include "inc/meta.php";
$categories = $dbfunc->getResourcesCategories();
?>
<link rel="stylesheet" href="assets/css/bootstrap.min.css%2bowl.carousel.min.css%2bticker-style.css%2bflaticon.css%2bslicknav.css%2banimate.min.css%2bmagnific-popup.css%2bfontawesome-all.min.css%2bthemify-ico" />
<link rel="stylesheet" href="assets/css/style.css" />

<link rel="icon" type="image/png" href="images/icons/xfavicon.png.pagespeed.ic.0zk7TR-Xxr.png" />
<link rel="stylesheet" type="text/css" href="mytech.css" />
<style>
    .myaccordion .btn {
        width: 100%;
        font-weight: normal;
        color: rgba(0, 0, 0, .8);
        padding: 0;
        letter-spacing: 0;
    }

    .btn::before {
        background: transparent;
    }

    li,
    ul {
        margin: 0;
        margin-top: 0px;
        margin-right: 0px;
        margin-bottom: 0px;
        margin-left: 0px;
        list-style-type: circle;
    }

    li {
        list-style: circle;
        list-style-position: outside;
        list-style-image: none;
        list-style-type: circle;
    }

    .accordhead {
        background: #006eab;
    }

    .accordhead :hover {
        text-decoration: underline #fff !important;
    }

    .accordhead p {
        color: #fff !important;
        font-weight: 500;
        font-size: 18px;
    }

    .accbtn :hover {
        text-decoration: underline #fff !important;
    }

    .accordhead span {
        margin-left: 5px;
    }

    .accordbody li,
    .accordbody a {
        color: #006eab !important;
    }

    .accordbody a:hover {
        text-decoration: underline #006eab;
    }
</style>
<?php include "inc/header.php"; ?>

<section class="ftco-section">
    <div class="container">
        <div class="row">
        </div>
        <br>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-8">
                <div id="accordion" class="myaccordion w-100" aria-multiselectable="true">

                    <?php
                    for ($i = 0; $i < count($categories); $i++) {
                    ?>
                        <?php $filelist = $dbfunc->getResourcesCategoryList($categories[$i]["res_category"]); ?>
                        <div class="card">
                            <div class="card-header p-0 accordhead" id="headingOne">
                                <h2 class="mb-0 accbtn">
                                    <button href="#collapseOne<?php echo $i ?>" class="d-flex py-4 px-4 align-items-center 
                                    justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseOne<?php echo $i ?>">
                                        <p class="mb-0"><?php echo $categories[$i]["res_category"]; ?><span>(<?php echo count($filelist) ?>)</span></p>
                                        <i class="fa" aria-hidden="true"></i>
                                    </button>
                                </h2>
                            </div>
                            <div class="collapse" id="collapseOne<?php echo $i ?>" role="tabpanel" aria-labelledby="headingOne<?php echo $i ?>">
                                <div class="card-body py-5 px-4 accordbody">
                                    <ul style="padding-left: 20px;">
                                        <?php
                                        for ($j = 0; $j < count($filelist); $j++) {
                                        ?>
                                            <li><a href="<?php echo $baseFileUrl . $filelist[$j]["res_fille"]; ?>" target="_blank" style="color: #000;"><?php echo $filelist[$j]["res_title"]; ?></a></li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>

                </div>
            </div>
        </div>


        <br>
        <br>
    </div>
</section>


<?php include './inc/footer.php' ?>

<?php include './inc/footer-meta.php' ?>