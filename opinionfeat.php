<?php include "inc/meta.php"; ?>


<link type="text/css" rel="stylesheet" href="assets/css/A.bootstrap.min.css%2bfont-awesome.min.css%2bstyle.css%2cMcc._DTUmYfu2G.css.pagespeed.cf.bi1dhJdCdr.css" />
<link rel="stylesheet" href="assets/css/bootstrap.min.css%2bowl.carousel.min.css%2bticker-style.css%2bflaticon.css%2bslicknav.css%2banimate.min.css%2bmagnific-popup.css%2bfontawesome-all.min.css%2bthemify-ico" />
<link rel="icon" type="image/png" href="images/icons/xfavicon.png.pagespeed.ic.0zk7TR-Xxr.png" />
<link rel="stylesheet" type="text/css" href="mytech.css" />
<link rel="stylesheet" href="assets/css/style.css" />

<style>
    .catecate a:hover,
    .catecate a:focus {
        color: #fff;
        text-decoration: none;
        outline: #fff;
        background: #38a4ff;
        padding-left: 10px;
    }

    a:hover,
    a:focus {
        text-decoration: underline;
        color: #000;
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
        border-color: #38a4ff;
        color: #38a4ff;
        /*38a4ff  #002e5b*/
    }
</style>
<?php include "inc/header.php"; ?>
<?php
$offset = 0;
$db = new DB_Functions();
$topstory = $db->getTopStoryOpinionsFeatures();
$topstory1id = 0;
$topstory2id = 0;
if (count($topstory) > 0) {
    $topstory1id = $topstory[0]['id'];
}

if (count($topstory) > 1) {
    $topstory2id = $topstory[1]['id'];
}
$response = $db->getLatestOpinionsFeatures($topstory1id, $topstory2id);
$mostPopRes = $db->getMostPopularOpinionFeatures($offset, 4);
$offset += count($mostPopRes);

//GETTING ALL CATEGORIES
$allcategories = $db->getOpinionsFeaturesAllCategory();


?>

<main>
    <div class="trending-area fix">
        <div class="container">
            <div class="trending-main">
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="trending-catego">
                            <div class="flex-wr-s-s m-rl--5 catecate">
                                <?php
                                $lenght = (count($allcategories) > 7) ? 7 : count($allcategories);
                                for ($i = 0; $i < $lenght; $i++) {
                                ?>
                                    <a href="opinion-category/<?php echo $allcategories[$i]['category'] ?>" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                                        <?php echo $allcategories[$i]['category']; ?>
                                    </a>
                                <?php
                                }
                                ?>
                            </div>
                            <br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--TOP STORY SECTION OR TRENDING SECTION-->
    <div class="section">
        <div class="container">
            <div class="row">
                <?php
                for ($i = 0; $i < count($topstory); $i++) {
                ?>
                    <div class="col-md-6">
                        <div class="post post-thumb">
                            <a class="post-img" href="opinion-category-details/<?php echo $topstory[$i]['id']; ?>"><img src="<?php echo $baseImageUrl . $topstory[$i]['image'] ?>_0.png" alt=""></a>
                            <div class="post-body">
                                <div class="post-meta">
                                    <a class="post-category cat-2" href="opinion-category/<?php echo $topstory[$i]['category'] ?>">
                                        <?php echo $topstory[$i]['category']; ?>
                                    </a>
                                    <span class="post-date"><?php echo $db->getDateFromString($topstory[$i]['date_published']) ?></span>
                                </div>
                                <h3 class="post-title"><a href="opinion-category-details/<?php echo $topstory[$i]['id']; ?>"><?php echo mb_strimwidth($topstory[$i]['heading'], 0, 80, "...") ?></a></h3>
                            </div>
                        </div>
                    </div>
                <?php
                }

                ?>
            </div>


            <!-- LATEST ARTICLE OR LATEST NEWS FROM ALL -->
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>Latest Articles</h2>
                    </div>
                </div>
                <?php
                for ($i = 0; $i < 6; $i++) {
                ?>
                    <div class="col-md-4">
                        <div class="post">
                            <a class="post-img" href="opinion-category-details/<?php echo $response[$i]['id']; ?>"><img src="<?php echo $baseImageUrl . $response[$i]['image'] ?>_0.png" alt=""></a>
                            <div class="post-body">
                                <div class="post-meta">
                                    <a class="post-category cat-4" href="opinion-category/<?php echo $response[$i]['category'] ?>"><?php echo $response[$i]['category']; ?></a>
                                    <span class="post-date"><?php echo $db->getDateFromString($response[$i]['date_published']); ?></span>
                                </div>
                                <h3 class="post-title"><a href="opinion-category-details/<?php echo $response[$i]['id']; ?>">
                                        <?php echo mb_strimwidth($response[$i]['heading'], 0, 80, "..."); ?>
                                    </a></h3>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>

            <!-- FEATURED POST FROM ALL -->
            <!-- <div class="section section-grey">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title text-center">
                                <h2>Featured Posts</h2>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="post">
                                <a class="post-img" href="blog-post.html"><img src="img/xpost-4.jpg.pagespeed.ic.acII8ZYTz8.jpg" alt=""></a>
                                <div class="post-body">
                                    <div class="post-meta">
                                        <a class="post-category cat-2" href="category.html">JavaScript</a>
                                        <span class="post-date">March 27, 2018</span>
                                    </div>
                                    <h3 class="post-title"><a href="blog-post.html">Chrome Extension Protects Against
                                            JavaScript-Based CPU Side-Channel Attacks</a></h3>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="post">
                                <a class="post-img" href="blog-post.html"><img src="img/xpost-5.jpg.pagespeed.ic.tcaqbxStTb.jpg" alt=""></a>
                                <div class="post-body">
                                    <div class="post-meta">
                                        <a class="post-category cat-3" href="category.html">Jquery</a>
                                        <span class="post-date">March 27, 2018</span>
                                    </div>
                                    <h3 class="post-title"><a href="blog-post.html">Ask HN: Does Anybody Still Use JQuery?</a>
                                    </h3>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="post">
                                <a class="post-img" href="blog-post.html"><img src="img/xpost-3.jpg.pagespeed.ic.uIu7s9VpdP.jpg" alt=""></a>
                                <div class="post-body">
                                    <div class="post-meta">
                                        <a class="post-category cat-1" href="category.html">Web Design</a>
                                        <span class="post-date">March 27, 2018</span>
                                    </div>
                                    <h3 class="post-title"><a href="blog-post.html">Pagedraw UI Builder Turns Your Website
                                            Design Mockup Into Code Automatically</a></h3>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div> -->

            <!-- MOST POPULAR FROM ALL -->
            <div class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section-title">
                                        <h2>Most Popular</h2>
                                    </div>
                                </div>
                                <div id="mostpop">
                                    <?php
                                    for ($i = 0; $i < count($mostPopRes); $i++) {
                                        if (!in_array($mostPopRes[$i], $topstory)) {
                                    ?>
                                            <div class="col-md-12">
                                                <div class="post post-row">
                                                    <a class="post-img" href="opinion-category-details/<?php echo $mostPopRes[$i]['id']; ?>"><img src="<?php echo $baseImageUrl . $mostPopRes[$i]['image'] ?>_0.png" alt=""></a>
                                                    <div class="post-body">
                                                        <div class="post-meta">
                                                            <a class="post-category cat-4" href="opinion-category/<?php echo $mostPopRes[$i]['category'] ?>"><?php echo $mostPopRes[$i]['category'] ?></a>
                                                            <span class="post-date"><?php echo $db->getDateFromString($mostPopRes[$i]['date_published']) ?></span>
                                                        </div>
                                                        <h3 class="post-title"><a href="opinion-category-details/<?php echo $mostPopRes[$i]['id']; ?>"><?php echo mb_strimwidth($mostPopRes[$i]['heading'], 0, 90, "..."); ?></a></h3>
                                                        <p><?php echo mb_strimwidth($mostPopRes[$i]['short_description'], 0, 100, "..."); ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php
                                        }
                                    }

                                    ?>
                                </div>

                                <div class="col-md-12">
                                    <div class="section-row">
                                        <a href="javascript:void(0)" class="genric-btn info-border circle arrow" onclick="loadMore()">Load More<span class="lnr lnr-arrow-right"></span></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- ADS SECTION GOES HERE 006ead #888 -->
                        <!-- <div class="col-md-4">
                            <div class="aside-widget text-center">
                                <a href="#" style="display: inline-block;margin: auto;">
                                    <img class="img-responsive" src="img/xad-1.jpg.pagespeed.ic.C1dNWPxojd.jpg" alt="">
                                </a>
                            </div>

                            <div class="aside-widget">
                                <div class="section-title">
                                    <h2>Random</h2>
                                </div>
                                <div class="post post-thumb">
                                    <a class="post-img" href="blog-post.html"><img src="img/xpost-2.jpg.pagespeed.ic.TYs1GPrTN5.jpg" alt=""></a>
                                    <div class="post-body">
                                        <div class="post-meta">
                                            <a class="post-category cat-3" href="category.html">Jquery</a>
                                            <span class="post-date">March 27, 2018</span>
                                        </div>
                                        <h3 class="post-title"><a href="blog-post.html">Ask HN: Does Anybody Still Use
                                                JQuery?</a></h3>
                                    </div>
                                </div>

                                <div class="post post-thumb">
                                    <a class="post-img" href="blog-post.html"><img src="img/xpost-1.jpg.pagespeed.ic.A4Rpahx6U5.jpg" alt=""></a>
                                    <div class="post-body">
                                        <div class="post-meta">
                                            <a class="post-category cat-2" href="category.html">JavaScript</a>
                                            <span class="post-date">March 27, 2018</span>
                                        </div>
                                        <h3 class="post-title"><a href="blog-post.html">Chrome Extension Protects Against
                                                JavaScript-Based CPU Side-Channel Attacks</a></h3>
                                    </div>
                                </div>
                            </div>

                        </div> -->
                    </div>

                </div>

            </div>

        </div>
    </div>

    <div class="section section-grey">
        <div class="container">
            <div class="row">
                <div class="flex-wr-s-s m-rl--5 catecate" style="margin-bottom: 40px; padding: 20px">
                    <?php
                    for ($i = 0; $i < count($allcategories); $i++) {
                    ?>
                    <a href="opinion-category/<?php echo $allcategories[$i]['category']?>" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                        <?php echo $allcategories[$i]['category'];?>
                    </a>
                    <?php
                    }

                    ?>
                </div>
            </div>
        </div>
    </div>

</main>






















<?php include './inc/footer.php' ?>
<script src="assetsjs/jquery.min.js"></script>
<script src="assets/bootstrap.min.js%2bmain.js.pagespeed.jc.XwDhaBFLFp.js"></script>
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
            url: "http://localhost/dln-update-local/load-more",
            type: "POST",
            data: {
                opinion_features_mot_popular: '',
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

                        if (element["id"] != <?php echo $topstory1id ?> && element["id"] != <?php echo $topstory2id ?>) {
                            var htmldata = `<div class="col-md-12">
                                        <div class="post post-row">
                                            <a class="post-img" href="opinion-category-details/` + element['id'] + `"><img src="<?php echo $baseImageUrl ?>` + element['image'] + `_0.png" alt=""></a>
                                            <div class="post-body">
                                                <div class="post-meta">
                                                    <a class="post-category cat-4" href="opinion-category/` + element['category'] + `">` + element['category'] + `</a>
                                                    <span class="post-date">` + new Date(element['date_published'] * 1000).toLocaleDateString() + `</span>
                                                </div>
                                                <h3 class="post-title"><a href="opinion-category-details/` + element['id'] + `">` + element['heading'] + `</a></h3>
                                                <p>` + element['short_description'] + `</p>
                                            </div>
                                        </div>
                                    </div>`;

                            $("#mostpop").append(htmldata);
                        }
                    }
                }
            },
        });

    }
</script>

<?php include './inc/footer-meta.php' ?>