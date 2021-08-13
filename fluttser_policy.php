<?php
include "inc/meta.php"; 
$webInfo = $dbfunc->getWebInfo();
?>
<link rel="stylesheet" href="assets/css/bootstrap.min.css%2bowl.carousel.min.css%2bticker-style.css%2bflaticon.css%2bslicknav.css%2banimate.min.css%2bmagnific-popup.css%2bfontawesome-all.min.css%2bthemify-ico" />
<link rel="stylesheet" href="assets/css/style.css" />

<link rel="icon" type="image/png" href="images/icons/xfavicon.png.pagespeed.ic.0zk7TR-Xxr.png" />
<link rel="stylesheet" type="text/css" href="mytech.css" />

	<section class="bg0">
	    <div class="container">
	    	<br>
	    	<br>
	    	<?php 
	    		if ($webInfo != "") {
	    			echo html_entity_decode($webInfo["privacy_policy"]);
	    		}
	    	 ?>
	    	 <br>
	    	 <br>
		</div>
	</section>


<?php include './inc/footer-meta.php' ?>