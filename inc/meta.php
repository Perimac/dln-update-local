<?php error_reporting(E_ERROR | E_PARSE); ?>
<?php 
  include 'runners/DB_Functions.php';
  $dbfunc = new DB_Functions();
  $accounts = $dbfunc->getAllSocialMedia();
  $baseUrl = "http://dennislawnews.com/";
  $shareBase = "google.com/dln-update/";
  $baseFileUrl = "http://dennislawnews.com";
  $baseImageUrl = $baseFileUrl."croppedimages/";
 ?>

<!DOCTYPE html>
<html class="no-js" lang="en-us">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Dennislaw News - Home</title>

  <meta name="description" content="">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="X-ride Ghana">
  <meta property="og:locale" content="en_US">
  <meta property="og:url" content="https://www.xridegh.com/">
  <meta property="og:image" content="assets/img/logo/logo.png">
  <meta property="og:title" content="X-ride">
  <meta property="og:description"
    content="X-ride is an upcoming transport service provider whose priority is its riders' convenience and trust. X-ride has features that cater to multiple transport needs such as ride-sharing, car rentals and deliveries.">
  <meta name="keywords" content="ghana law">
  <meta property="fb:page_id" content="103543418210602">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@xridegh">
  <meta name="twitter:domain" content="xridegh.org">
  <meta name="twitter:app:name:googleplay" content="X-ride">
  <meta name="twitter:app:id:googleplay" content="com.nsromapa.xride">
  <meta name="twitter:app:name:iphone" content="X-ride">
  <meta name="twitter:app:id:iphone" content="">
  <meta name="twitter:app:name:ipad" content="X-ride">
  <meta name="twitter:app:id:ipad" content="">
  <link rel="apple-touch-icon" type="image/png" sizes="180x180" href="src/images/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="196x196" href="src/images/favicon-196x196.png">

  <meta name="robots" content="index,follow">

  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="manifest" href="site.html" />
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />

  <style type="text/css">
    .bg-instagram {
      background-color: #000000;
    }
  </style>