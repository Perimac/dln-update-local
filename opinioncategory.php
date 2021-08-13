<?php include "inc/meta.php"; ?>

<link type="text/css" rel="stylesheet" href="../assets/css/A.bootstrap.min.css%2bfont-awesome.min.css%2bstyle.css%2cMcc._DTUmYfu2G.css.pagespeed.cf.bi1dhJdCdr.css" />
<link rel="stylesheet" href="../assets/css/bootstrap.min.css%2bowl.carousel.min.css%2bticker-style.css%2bflaticon.css%2bslicknav.css%2banimate.min.css%2bmagnific-popup.css%2bfontawesome-all.min.css%2bthemify-ico" />
<link rel="icon" type="image/png" href="../images/icons/xfavicon.png.pagespeed.ic.0zk7TR-Xxr.png" />
<!-- <link rel="stylesheet" type="text/css" href="../mytech.css" /> -->
<link rel="stylesheet" href="../assets/css/style.css" />

<style>
    a:hover,
    a:focus {
        color: #006ead;
        text-decoration: underline;
        outline: none;
    }

    .post-meta .post-date {
        font-size: 13px;
        font-weight: 600;
        color: #888;
    }

    .trending-catego {
        padding-top: 31px;
        display: grid;
        grid-template-columns: auto auto auto auto;
    }

    .trending-catego strong {
        color: #fff;
        text-transform: uppercase;
        font-size: 14px;
        font-weight: 500;
        background: #105f8d;
        padding: 11px 0px;
        line-height: 1;
        margin: 5px 10px;
        border-radius: 5px;
        display: inline-block;
        text-align: center;
    }

    .catecate a {
        border-color: #006ead;
        color: #006ead;
    }
</style>

<?php include "inc/header2.php"; ?>

<?php

$ofCat = "";
$response = array();
$offset = 0;

if (isset($_GET["ofcat"])) {
    $ofCat = str_replace("+", " ", $_GET["ofcat"]);
} else {
    die("ERROR: Page Not Found");
}

$response = $dbfunc->getOpinionsFeaturesCategory($ofCat, 1, $offset);
$offset = count($response);

?>


<main>
    <div class="section page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <ul class="page-header-breadcrumb">
                        <li><a href="index-2.html">Opinions & Features</a></li>
                        <li><?php echo $ofCat ?></li>
                    </ul>
                    <h1><?php echo $ofCat ?></h1>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <?php
                        if (count($response) > 0) {
                        ?>
                            <div class="col-md-12">
                                <div class="post post-thumb">
                                    <a class="post-img" href="../opinion-category-details/<?php echo $response[0]['id']; ?>"><img src="<?php echo $baseImageUrl . $response[0]['image'] ?>_0.png" alt=""></a>
                                    <div class="post-body">
                                        <div class="post-meta">
                                            <a class="post-category cat-2" href="javascript:void(0)><?php echo $response[0]['category']; ?></a>
                                        <span class=" post-date"><?php echo $dbfunc->getDateFromString($response[0]['date_published']); ?></span>
                                        </div>
                                        <h3 class="post-title"><a href="../opinion-category-details/<?php echo $response[0]['id']; ?>"><?php echo $response[0]['heading']; ?></a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div id="catloadmore">
                            <?php
                        }
                        for ($i = 1; $i < count($response); $i++) {
                            ?>
                                <div class="col-md-12">
                                    <div class="post post-row">
                                        <a class="post-img" href="../opinion-category-details/<?php echo $response[$i]['id']; ?>"><img src="<?php echo $baseImageUrl . $response[$i]['image'] ?>_0.png" alt=""></a>
                                        <div class="post-body">
                                            <div class="post-meta">
                                                <a class="post-category cat-2" href="javascript:void(0)"><?php echo $response[$i]['category']; ?></a>
                                                <span class="post-date"><?php echo $dbfunc->getDateFromString($response[$i]['date_published']); ?></span>
                                            </div>
                                            <h3 class="post-title"><a href="../opinion-category-details/<?php echo $response[$i]['id']; ?>"><?php echo $response[$i]['heading'] ?></a></h3>
                                            <p><?php echo $response[$i]['short_description'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php
                        }

                            ?>
                            </div>

                            <div class="col-md-12">
                                <div class="section-row">
                                    <a href="javascript:void(0)"class="genric-btn info-border circle arrow" onclick="loadMore()">Load More<span class="lnr lnr-arrow-right"></span></a>
                                </div>
                            </div>
                    </div>
                </div>

                <!--side widgets with adsopinioncategorydetails ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
                <div class="col-md-4">
                    <div class="aside-widget text-center">
                        <a href="#" style="display: inline-block;margin: auto;">
                            <img class="img-responsive" src="img/xad-1.jpg.pagespeed.ic.C1dNWPxojd.jpg" alt="">
                        </a>
                    </div>
                    <!--MOST READ DATA AND ALL CATEGORIES SECTION++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
                    <div class="aside-widget">
                        <div class="section-title">
                            <h2>Most Read</h2>
                        </div>
                        <?php
                        $mostpopcategory = $dbfunc->getMostPopularOpinionFeatures(0, 4);
                        for ($i = 0; $i < count($mostpopcategory); $i++) {
                        ?>
                            <div class="post post-widget">
                                <a class="post-img" href="blog-post.html"><img src="<?php echo $baseImageUrl . $mostpopcategory[$i]['image'] ?>_0.png" alt=""></a>
                                <div class="post-body">
                                    <h3 class="post-title"><a href="blog-post.html">
                                            <?php echo mb_strimwidth($mostpopcategory[$i]['heading'], 0, 55, "...") ?>
                                        </a></h3>
                                </div>

                            </div>
                        <?php
                        }
                        ?>
                    </div>

                    <div class="col-md-4 col-lg-4 p-b-80">
                        <div class="p-l-10 p-rl-0-sr991">
                            <div>
                                <div class="how2 how2-cl4 flex-s-c m-b-30">
                                    <h3 class="f1-m-2 cl3 tab01-title">
                                        Categories
                                    </h3>
                                </div>
                                <div class="flex-wr-s-s m-rl--5">
                                    <?php
                                    $allcategories = $dbfunc->getOpinionsFeaturesAllCategory();
                                    $lenght = (count($allcategories) > 7) ? 7 : count($allcategories);
                                    for ($i = 0; $i < $lenght; $i++) {
                                    ?>
                                        <a href="<?php echo $baseUrl; ?>general/<?php echo str_replace(" ", "+", $allcategories); ?>" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                                            <?php echo $allcategories[$i]['category'] ?>
                                        </a>
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
    </div>

    <!-- SECTION CATEGORIES FOOTER -->
    <div class="section section-grey">
        <div class="container">
            <div class="row">
                <div class="flex-wr-s-s m-rl--5" style="margin-bottom: 40px; padding: 20px">
                    <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                        Fashion
                    </a>
                    <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                        Lifestyle
                    </a>
                    <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                        Denim
                    </a>
                    <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                        Streetstyle
                    </a>
                    <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                        Crafts
                    </a>
                    <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                        Magazine
                    </a>
                    <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                        News
                    </a>
                    <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                        Blogs
                    </a> <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                        Fashion
                    </a>
                    <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                        Lifestyle
                    </a>
                    <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                        Denim
                    </a>
                    <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                        Streetstyle
                    </a>
                    <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                        Crafts
                    </a>
                    <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                        Magazine
                    </a>
                    <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                        News
                    </a>
                    <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                        Blogs
                    </a> <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                        Fashion
                    </a>
                    <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                        Lifestyle
                    </a>
                    <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                        Denim
                    </a>
                    <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                        Streetstyle
                    </a>
                    <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                        Crafts
                    </a>
                    <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                        Magazine
                    </a>
                    <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                        News
                    </a>
                    <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                        Blogs
                    </a> <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                        Fashion
                    </a>
                    <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                        Lifestyle
                    </a>
                    <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                        Denim
                    </a>
                    <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                        Streetstyle
                    </a>
                    <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                        Crafts
                    </a>
                    <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                        Magazine
                    </a>
                    <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                        News
                    </a>
                    <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                        Blogs
                    </a> <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                        Fashion
                    </a>
                    <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                        Lifestyle
                    </a>
                    <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                        Denim
                    </a>
                    <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                        Streetstyle
                    </a>
                    <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                        Crafts
                    </a>
                    <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                        Magazine
                    </a>
                    <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                        News
                    </a>
                    <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                        Blogs
                    </a> <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                        Fashion
                    </a>
                    <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                        Lifestyle
                    </a>
                    <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                        Denim
                    </a>
                    <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                        Streetstyle
                    </a>
                    <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                        Crafts
                    </a>
                    <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                        Magazine
                    </a>
                    <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                        News
                    </a>
                    <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                        Blogs
                    </a>
                </div>
            </div>
        </div>
    </div>

</main>


<?php include './inc/footer2.php' ?>
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/bootstrap.min.js%2bmain.js.pagespeed.jc.XwDhaBFLFp.js"></script>
<script>
    eval(mod_pagespeed_15hy7ra_pu);
</script>
<script>
    eval(mod_pagespeed_RDDE5qW6SI);
</script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>

<script>
    var offset = <?php echo $offset ?>;

    function loadMore() {
        $.ajax({
            url: "http://dennislawnews.com/load-more",
            type: "POST",
            data: {
                opinion_features_category: '<?php echo $ofCat?>',
                offset: offset,
                limit: 2,
            },
            success: function(result) {
                console.log(result);
                var res = JSON.parse(result);
                if (!res["error"]) {
                    offset += (res['result'].length);
                    for (let i = 0; i < res['result'].length; i++) {
                        const element = res['result'][i];
                        
                            var htmldata = `<div class="col-md-12">
                                    <div class="post post-row">
                                        <a class="post-img" href="../opinion-category-details/`+element['id']+`"><img src="<?php echo $baseImageUrl?>`+element['image']+`_0.png" alt=""></a>
                                        <div class="post-body">
                                            <div class="post-meta">
                                                <a class="post-category cat-2" href="javascript:void(0)">`+element['category']+`</a>
                                                <span class="post-date">`+ new Date(element['date_published'] * 1000).toLocaleDateString() +`</span>
                                            </div>
                                            <h3 class="post-title"><a href="../opinion-category-details/`+element['id']+`">`+element['heading']+`</a></h3>
                                            <p>`+element['short_description']+`</p>
                                        </div>
                                    </div>
                                </div>`;

                            $("#catloadmore").append(htmldata);
                    }
                }
            },
        });

    }
</script>

<?php include './inc/footer-meta.php' ?>