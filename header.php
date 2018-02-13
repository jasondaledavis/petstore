<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "page-content" div.
 *
 * @package WordPress
 * @subpackage petfirst
 * @since petfirst 1.0
 */
get_template_part( 'template-parts/head', 'meta' ); ?>

<body <?php body_class(); ?>>

   <?php if ( is_front_page() ) {

            echo '<div id="page" class="site homepage">';

            } else {  

            echo '<div id="page" class="site">';
            
            } ?> 

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

    <?php if ( is_front_page() ) : ?>

        <!-- home page header -->
      <video src="<?php echo get_template_directory_uri();?>/assets/img/PetFirst-Homepage-Video.mp4" autoplay loop playsinline muted></video>
      <div class="viewport-header">

        <div class="homepage-intro-text">
          <div class="jumbo text-light-1"> Hassle-Free Pet Insurance</div>
          <h3 class="text-light-1"> Oh! You'r new. Can we sniff your butt?</h3>
        </div>
      </div>

    <?php endif; ?>

  </header>


  <?php if ( is_front_page() ) : ?>

    <div class="homepage-content">
            
  <?php endif; ?>

  <div class="main-nav">
    <div class="main-nav-inner flex-row">

      <div class="mobile-contact-buttons hide-on-desktop hide-on-tablet-landscape">
        <a href="tel:18552707387"><i class="fa fa-phone"></i></a>
        <a href="#"><i class="fa fa-home"></i></a>
      </div>

      <div class="site-branding">
         <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri();?>/assets/img/logo.svg" alt="Pet first logo"></a>
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
