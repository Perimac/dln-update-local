<?php
include "inc/meta.php"; 
$history = $dbfunc->getHistory();
?>
<link rel="stylesheet" href="assets/css/bootstrap.min.css%2bowl.carousel.min.css%2bticker-style.css%2bflaticon.css%2bslicknav.css%2banimate.min.css%2bmagnific-popup.css%2bfontawesome-all.min.css%2bthemify-ico" />
<link rel="stylesheet" href="assets/css/style.css" />

<link rel="icon" type="image/png" href="images/icons/xfavicon.png.pagespeed.ic.0zk7TR-Xxr.png" />
<link rel="stylesheet" type="text/css" href="mytech.css" />

<?php include "inc/header.php"; ?>




	<section class="bg0">
	    <div class="container">
	    	<br>
	    	<br>
	    	<?php 
	    		if ($history != "") {
	    			echo html_entity_decode($history["history"]);
	    		}
	    	 ?>
	    	<br>
	    	<br>
		</div>
	</section>









<?php include './inc/footer.php' ?>

<?php include './inc/footer-meta.php' ?>