<?php 
include "inc/meta.php"; 
$firms = $dbfunc->lawFirms();

?>

<link rel="stylesheet" href="assets/css/bootstrap.min.css%2bowl.carousel.min.css%2bticker-style.css%2bflaticon.css%2bslicknav.css%2banimate.min.css%2bmagnific-popup.css%2bfontawesome-all.min.css%2bthemify-ico" />
<link rel="icon" type="image/png" href="images/icons/xfavicon.png.pagespeed.ic.0zk7TR-Xxr.png" />
<link rel="stylesheet" href="assets/css/style.css" />
<link rel="stylesheet" type="text/css" href="mytech.css" />


<link rel="stylesheet" href="demo.css">
<link rel="stylesheet" href="listnav.css">
<style>

li {
  float: left;
  padding: 16px;
}


</style>


<section class="bg0 p-t-60 p-b-35">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 p-b-20">
                <div class="how2 how2-cl4 flex-s-c m-r-10 m-r-0-sr991">
                    <h3 class="f1-m-2 cl3 tab01-title">
                        Law Firms A-Z
                    </h3>
                </div>
                <div class="row p-t-10">
                </div>
                <div class="row p-t-25"></div>
                <div class="grid-container">
                    <ul id="demoOne">
                        <?php
                        for ($i = 0; $i < count($firms); $i++) {
                        ?>
                            <li>
                                <a href="legalWorkDetailFlutter/<?php echo $firms[$i]["id"] ?>"><?php echo $firms[$i]["law_firm"] ?></a>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>








<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="jquery-listnav.js"></script>
<script src="vendor.js"></script>

<script>
    $(function() {
        $('#demoOne').listnav({
            initHidden: true,
            includeAll: true,
            initLetter: "All"
        });
    });
</script>

<?php include './inc/footer-meta.php' ?>
