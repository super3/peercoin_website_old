<?php
  include ('locale/locale.php');
  $Locale = new Locale();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="UTF-8">
	<!-- Title here -->
	<title>Peercoin - The Secure &amp; Sustainable Cryptocoin.</title>

	<!-- Description, Keywords and Author -->
	<meta name="description" content="Peercoin - the secure and sustainable cryptocoin." />
	<meta name="keywords" content="peercoin, bitcoin, litecoin, primecoin, cryptocurrency, sustainable, cryptocoin">
	<meta name="author" content="Peercoin">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- open graph tags -->
	<meta property="og:title" content="Peercoin" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://peercoin.net" />
	<meta property="og:image" content="http://peercoin.net/img/logo.png"/>
	<meta property="og:description" content="Peercoin - the secure and sustainable cryptocoin." />

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
            <img src="assets/images/logos/Dark-Text-350.png" width="110" alt="Peercoin">
            <span>The Secure &amp; Sustainable Cryptocoin</span>
          </a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav pull-right">

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Docs <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="whitepaper">Peercoin Whitepaper</a></li>
                <li><a href="https://github.com/ppcoin/ppcoin/wiki">Wiki (Github)</a></li>
                <li><a href="resources">List of Resources</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Press <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="http://www.peercointalk.org/index.php?topic=1616.0">Press Kit</a></li>
                <li><a href="http://www.peercointalk.org/index.php?topic=2219.0">Articles and Interviews</a></li>
                <?php
                if (!file_exists('include/recaptcha_keys.php')) {
                ?>
                <li><a href="mailto:sunnyking9999@gmail.com?cc=john.manglaviti@gmail.com&subject=Sunny%20King%20Interview%20Request">Interview Sunny King</a></li>
                <?php } else { ?>
                <li><a href="interview">Interview Sunny King</a></li>
                <?php } ?>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Get Peercoins <b class="caret"></b></a>
              <ul class="dropdown-menu">
		            <li><a href="mining">Mine Peercoins</a></li>
        		    <li><a href="minting">Mint Peercoins</a></li>
        		    <li><a href="buying">Buy Peercoins</a></li>
                <li><a href="//peer4commit.com">Peer4commit</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contribute <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="https://docs.google.com/forms/d/1uJbNEJThRc3TqnwbVVrd__UQWVUOOr4QSEMbMIIF--s/viewform">Volunteer</a></li>
                <li><a href="participate">Participate</a>
                <!-- TODO: add more ways to contribute and support the peercoin community -->
              </ul>
            </li>
            
            <li><a href="http://www.peercointalk.org/">Forum</a></li>
            <li class="wallet"><a class="btn btn-primary btn-lg" role="button" href="downloads" target="_blank">Download Wallet!</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
