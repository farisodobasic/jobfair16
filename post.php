<!doctype html>
<?php
 //$url_home = 'http://www.jobfair.ba/';
 $url_home = "http://www.jobfair.ba/";
//$url_home = 'http://localhost/jobfair16/';
 $item = json_decode(file_get_contents('http://api.jobfair.ba/api/post/'.$_GET['id']));

 if(!isset($item->naslov)) header('Location: '.$url_home.'404');

 ?>
<html class="no-js" lang="" ng-app="jfApp">
    <head>
	        <meta charset="utf-8">
	        <meta http-equiv="x-ua-compatible" content="ie=edge">
	        <title>JobFAIR | <?=$item->naslov;?></title>
	        <meta name="description" content="<?=$item->opis;?>">
	        <meta name="viewport" content="width=device-width, initial-scale=1">

	         	  <meta property="og:type" content="website">
              <meta property="og:title" content="JobFAIR | <?=$item->naslov;?>" />
    				  <meta property="og:description" content="<?=$item->opis;?>" />
				  <meta property="og:image" content="<?=$item->slika;?>" />
				  <meta property="og:url" content="<?=$url_home;?>novost/<?=$_GET['id'];?>" />

	               <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	               <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
	               <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.28//angular-route.min.js"></script>
                        <!--Za affix-->
                     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                     <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>

	        <link rel="apple-touch-icon" href="apple-touch-icon.png">
	        <!-- Place favicon.ico in the root directory -->
	        <link rel="stylesheet" href="<?=$url_home;?>css/main.css">
	        <link rel="stylesheet" href="<?=$url_home;?>bootstrap/css/bootstrap-theme.min.css">
	        <link rel="stylesheet" href="<?=$url_home;?>bootstrap/css/bootstrap-theme.css">
	        <link rel="stylesheet" href="<?=$url_home;?>bootstrap/css/bootstrap.css">
	        <link rel="shortcut icon" href="favicon.ico?v=2">
	        <link rel="stylesheet" href="<?=$url_home;?>css/normalize.css">
	        <link rel="stylesheet" href="<?=$url_home;?>css/shape-style.css ">
            <link rel="stylesheet" href="<?=$url_home;?>css/novosti.css ">
            <link rel="stylesheet" href="<?=$url_home;?>css/main-landing.css">
            <link rel="stylesheet" href="<?=$url_home;?>css/menu-second.css">
            <link rel="stylesheet" href="<?=$url_home;?>css/title.css">
            <link rel="stylesheet" href="<?=$url_home;?>css/onama.css">
            <link rel="stylesheet" href="<?=$url_home;?>css/aktivnosti.css">
            <link rel="stylesheet" href="<?=$url_home;?>css/normalize.css">
            <link rel="stylesheet" href="<?=$url_home;?>css/timeline.css">
            <link rel="stylesheet" href="<?=$url_home;?>css/post.css">
            <!--Za affix-->
              <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <body>



         <!-- Add fancyBox -->
    <link rel="stylesheet" href="<?=$url_home;?>fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    <script type="text/javascript" src="<?=$url_home;?>fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

    <!-- Optionally add helpers - button, thumbnail and/or media -->
    <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
    <script type="text/javascript" src="<?=$url_home;?>fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <script type="text/javascript" src="<?=$url_home;?>fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

    <link rel="stylesheet" href="<?=$url_home;?>fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
    <script type="text/javascript" src="<?=$url_home;?>fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>


        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-35242323-2','auto');ga('send','pageview');
        </script>


      <!--  <div id="screen" ng-view>
            <center><img src="https://d13yacurqjgara.cloudfront.net/users/12755/screenshots/1037374/hex-loader2.gif" /></center>
        </div> -->

        <?php include('partials/post.php'); ?>

        <script type="text/javascript">
            $(document).ready(function() {
              $(".fancybox").fancybox();
            });
        </script>

        <script src="<?=$url_home;?>js/main-landing.js"></script>
        <script src="<?=$url_home;?>js/plugins.js"></script>
        <script src="<?=$url_home;?>js/menu.js"></script>

<!--        <script src="js/angular/naslovna.js"></script> -->

        <script async defer src="https://maps.googleapis.com/maps/api/js?signed_in=true&callback=initMap"></script>
        <script src="<?=$url_home;?>bootstrap/js/bootstrap.min.js"></script>
        <script src="<?=$url_home;?>bootstrap/js/bootstrap.js"></script>

    </body>
</html>
