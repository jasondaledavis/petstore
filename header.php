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
get_template_part( 'template-parts/head', 'meta' ); ?> <!-- this is the <head> stack -->

<body <?php body_class(); ?>>
<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#content"><?php //esc_html_e( 'Skip to content', 'petfirst' ); ?></a> -->

	<header id="masthead" class="site-header">

    <!-- top dark bar -->
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

    <!-- main header bar -->

		<div class="main-nav">
      <div class="main-nav-inner flex-row">

				<div class="mobile-contact-buttons">
					<a href="tel:18552707387"><i class="fa fa-phone"></i></a>
					<a href="#"><i class="fa fa-home"></i></a>
				</div>

        <div class="site-branding">

    			<?php
    			// the_custom_logo();
    			// if ( is_front_page() && is_home() ) : ?>
    				<!-- <h1 class="site-title">-->
            <a class="logo" href="#<?php //echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri();?>/images/logo-temporary.png" alt="Pet first logo"><?php //bloginfo( 'name' ); ?></a>
          <!--</h1> -->
    			<?php //else : ?>
    				<!-- <p class="site-title"><a href="#<?php //echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="logo" alt="Pet first logo"><?php //bloginfo( 'name' ); ?></a></p> -->
    			<?php
    			//endif;

    			//$description = get_bloginfo( 'description', 'display' );
    			//if ( $description || is_customize_preview() ) : ?>
    				<!-- <p class="site-description"><?php //echo $description; /* WPCS: xss ok. */ ?></p> -->
    			<?php
    			//endif; ?>
    		</div><!-- .site-branding -->

        <div class="nav-side flex-row">
      		<nav id="site-navigation" class="standard-nav main-navigation">
            <a class="" href="#">Pet Insurance</a>
            <a class="" href="#">Customer Support</a>
            <a class="" href="#">Resources</a>
            <a class="" href="#">Blog</a>
      			<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php //esc_html_e( 'Primary Menu', 'petfirst' ); ?></button> -->
      			<?php
      				// wp_nav_menu( array(
      				// 	'theme_location' => 'menu-1',
      				// 	'menu_id'        => 'primary-menu',
      				// ) );
      			?>
      		</nav><!-- #site-navigation -->
          <a class="btn-lg btn-primary quote-btn-lg" style="display:none;" href="#"> Get a Free Quote</a>
					<a class="btn-lg btn-primary quote-btn-md" style="display:none;" href="#"> Get Free Quote</a>
					<a class="btn-sm btn-primary quote-btn-sm" style="display:none;" href="#"> Get Quote</a>
        </div>
      </div>
    </div>
	</header><!-- #masthead -->

	<div id="content" class="page-content site-content">
