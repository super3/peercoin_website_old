<?php
  include ('locale/locale.php');
  $Locale = new Loc();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="UTF-8">
	<!-- Title here -->
	<title><?php echo $Locale->getText("homepage_title"); ?></title>

	<!-- Description, Keywords and Author -->
	<meta name="description" content="Secure and sustainable cryptocoin." />
	<meta name="keywords" content="peercoin, bitcoin, litecoin, primecoin, cryptocurrency, sustainable, cryptocoin">
	<meta name="author" content="Peercoin">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- open graph tags -->
	<meta property="og:title" content="Peercoin" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://peercoin.net" />
	<meta property="og:image" content="http://peercoin.net/img/logo.png"/>
	<meta property="og:description" content="Secure and sustainable cryptocoin." />

	<meta name="google-site-verification" content="-GOUzkxsjMUypgT8xj6GD4W9xNv_SMeorTZtOKPRzg8" />
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

 	<!-- Bootstrap core CSS -->
 	<link href="assets/css/bootstrap.css" rel="stylesheet">
 	<link href="assets/css/flat-ui.css" rel="stylesheet">

 	<!-- Custom styles for this template -->
 	<link href="assets/css/main.css" rel="stylesheet">

	<link rel="stylesheet" href="assets/css/revolution.css" media="screen"/>
	<link rel="stylesheet" href="assets/css/media-slideshow.css" media="screen"/>

    	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    	<!--[if lt IE 9]>
      	<script src="assets/js/html5shiv.js"></script>
      	<script src="assets/js/respond.min.js"></script>
    	<![endif]-->

	<script type="text/javascript" src="assets/js/modernizr.custom.79639.js"></script>
	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	ga('create', 'UA-40768937-3', 'peercoin.net');
	ga('send', 'pageview');
	</script>
  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">
            <img src="assets/images/logos/Dark-Text-350.png" width="170" alt="Peercoin">
            <span style="width=100%; font-size:12px; text-align:center;"><?php echo $Locale->getText("homepage_title"); ?></span>
          </a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav pull-right">
            <li class="dropdown">
              <a href="understand" class="dropdown-toggle" data-toggle="dropdown" style="padding-top:10px;">
                <div style="text-align:center; width:100%; margin:0px; padding:12px;">Understand<b class="caret"></b></div>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a href="understand#peercoin">
                   About Peercoin
                  </a>
                </li>
                <li>
                  <a href="understand#mine">
                    About Mining
                  </a>
                </li>
                <li>
                  <a href="understand#mint">
                    About Minting
                  </a>
                </li>
                <li>
                  <a href="understand#spend">
                    About Spending
                  </a>
                </li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="use" class="dropdown-toggle" data-toggle="dropdown" style="padding-top:10px;">
                <div style="text-align:center; width:100%; margin:0px; padding:12px;">Use<b class="caret"></b></div>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a href="use#mine">
                    Mining Tutorial
                  </a>
                </li>
                <li>
                  <a href="use#mint">
                    Minting Tutorial
                  </a>
                </li>
                <li>
                  <a href="use#spend">
                    Spending Tutorial
                  </a>
                </li>
                <li>
                  <a href="use#tools">
                    Other Tools Tutorial
                  </a>
                </li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="support" class="dropdown-toggle" data-toggle="dropdown" style="padding-top:10px;">
                <div style="text-align:center; width:100%; margin:0px; padding:12px;">Contribute<b class="caret"></b></div>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a href="https://docs.google.com/forms/d/1uJbNEJThRc3TqnwbVVrd__UQWVUOOr4QSEMbMIIF--s/viewform">
                   Volunteer
                  </a>
                </li>
                <li>
                  <a href="support#participate">
                   Participate
                  </a>
                </li>
                <!--<li><a href="sponsor">Sponsor</a></li>-->
                <!-- TODO: add more ways to contribute and support the Peercoin community -->
              </ul>
            </li>
            <li class="dropdown">
              <a href="community" class="dropdown-toggle" data-toggle="dropdown" style="padding-top:10px;">
                <div style="text-align:center; width:100%; margin:0px; padding:12px;">Community<b class="caret"></b></div>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a href="community#overview">
                    Overview
                  </a>
                </li>
                <li>
                  <a href="community#forum">
                    Forum
                  </a>
                </li>
                <li>
                  <a href="community#social">
                    Social Media
                  </a>
                </li>
              </ul>
            </li>
            <li class="wallet"><a class="btn btn-primary btn-lg" role="button" href="downloads">
              Download Wallet</a>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
<?php if($_SERVER['PHP_SELF'] != "/index.php") {echo ' 
<div class="container content">
<div class="top_social_other">
Like Peercoin
        <a target="_blank" href="https://www.facebook.com/Peercoin">
              <img src="./assets/img/icons/social-fb.png" alt="Visit us on Facebook">
        </a>
            <a target="_blank" href="http://www.reddit.com/r/peercoin">
              <img src="assets/img/icons/social-reddit.png" alt="Reddit">
        </a>
            <a target="_blank" href="https://twitter.com/PeercoinPPC">
              <img src="assets/img/icons/social-twitter.png" alt="Follow us on Twitter">
        </a>
            <a target="_blank" style="margin:0px; width:50%" href="https://www.youtube.com/playlist?list=PLBt4zAxcWonnA8-InWGUEw-UZofHdUIeT">
              <img src="assets/img/icons/social-yt.png" alt="Watch videos on YouTube">
        </a>
          </div>';}?>
<?php if($_SERVER['PHP_SELF'] == "/index.php") { echo ' 
     <!-- Headerwrap -->
      <header id="headerwrap-2">
        <div class="container-content">
          <div class ="top_social">
            <a target="_blank" href="https://www.facebook.com/Peercoin">
              <img src="./assets/img/icons/social-fb.png" alt="Visit us on Facebook">
        </a>
            <a target="_blank" href="http://www.reddit.com/r/peercoin">
              <img src="assets/img/icons/social-reddit.png" alt="Reddit">
        </a>
            <a target="_blank" href="https://twitter.com/PeercoinPPC">
              <img src="assets/img/icons/social-twitter.png" alt="Follow us on Twitter">
        </a>
            <a target="_blank" style="margin:0px; width:50%" href="https://www.youtube.com/playlist?list=PLBt4zAxcWonnA8-InWGUEw-UZofHdUIeT">
              <img src="assets/img/icons/social-yt.png" alt="Watch videos on YouTube">
        </a>
          </div>';}?>