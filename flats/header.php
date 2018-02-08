<!doctype html>
<html  lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="main.css">
<script src="https://use.fortawesome.com/a789a9d9.js"></script>
</head>

<body>
<div id="page" class="site <?php if ($isHomePage){ echo "homepage";}?>">

	<header class="site-header">

			<!-- top nav bar -->
			<div class="top-nav">
				<div class="top-nav-inner flex-row">
				<nav>
					<ul>
						<li><a class="" href="tel:18552707387" title="">855.270.7387</a></li>
						<li><a class="" href="#" title="">Contact Us</a></li>
						<li><a class="" href="#" title="">Partnerships</a></li>
						<li><a class="" href="#" title="">About Us</a></li>
						<li><a class="" href="#" title="">MyPets Login</a></li>
					</ul>
				</nav>
				<a class="search" href="#" title=""><i class="fa fa-search"></i></a>
				</div>
			</div>

		<?php if($isHomePage){  ?>
				<!-- home page header -->
			<video src="temp-images/PetFirst-Homepage-Video.mp4" autoplay loop playsinline muted></video>
			<div class="viewport-header">

				<div class="homepage-intro-text">
					<div class="jumbo text-light-1"> Hassle-Free Pet Insurance</div>
					<h3 class="text-light-1"> Oh! You'r new. Can we sniff your butt?</h3>
				</div>
			</div>


		<?php }; //end if?>

	</header>


	<?php if ($isHomePage){  ?>
	<div class="homepage-content">
	<?php }; //end if?>


	<div class="main-nav">
		<div class="main-nav-inner flex-row">

			<div class="mobile-contact-buttons hide-on-desktop hide-on-tablet-landscape">
				<a href="tel:18552707387"><i class="fa fa-phone"></i></a>
				<a href="#"><i class="fa fa-home"></i></a>
			</div>

			<div class="site-branding">
				<a class="logo" href="/" rel="home"><?php include 'images/logo.php' ?></a>
			</div><!-- .site-branding -->

			<div class="nav-side flex-row">
				<nav id="site-navigation" class="main-navigation">
				<ul>
					<li><a href="#">Pet Insurance</a></li>
					<li><a href="#">Customer Support</a></li>
					<li><a href="#">Resources</a></li>
					<li><a href="#">Blog</a></li>
				</ul>
				</nav><!-- #site-navigation -->
				<a class="btn-lg btn-primary quote-btn-lg" style="display:none;" href="#"> Get a Free Quote</a>
				<a class="btn-lg btn-primary quote-btn-md" style="display:none;" href="#"> Get Free Quote</a>
				<a class="btn-sm btn-primary quote-btn-sm" style="display:none;" href="#"> Get Quote</a>
			</div>
		</div>
	</div>

	<div class="site-content">
