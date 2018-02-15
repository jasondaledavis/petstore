<!doctype html>
<html  lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/css/swiper.min.css">
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
			<div class="main-nav-top"></div>

		<?php if($isHomePage){  ?>
				<!-- home page header -->
			<video src="temp-images/PetFirst-Homepage-Video.mp4" autoplay loop playsinline muted></video>
			<div class="home-header">
				<div class="home-header-inner">
					<div class="homepage-intro-text">
						<div class="jumbo text-light-1"> Hassle-Free Pet Insurance</div>
						<h3 class="text-light-1"> Oh! You'r new. Can we sniff your butt?</h3>
					</div>
						<?php include 'main-nav.php'; ?>
					</div>
			</div>


		<?php }; //end if?>

	</header>


	<?php if ($isHomePage){  ?>
	<div class="homepage-content">
	<?php }; //end if?>

	<?php include 'main-nav.php'; ?>

	<div class="site-content">
