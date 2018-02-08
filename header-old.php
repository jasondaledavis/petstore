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
<div id="page" class="site">
  <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'petfirst' ); ?></a>

    <!-- top dark bar -->
    <div class="top-nav">
      <div class="top-nav-inner flex-row">
        <nav>
            <?php
              wp_nav_menu( array(
               'theme_location' => 'topnav',
               'menu_id'        => 'top-nav',
              ) );
            ?>
        </nav>
        <a class="search" href="#" title=""><i class="fa fa-search"></i></a>
      </div>
    </div>

    <!-- main header bar -->

    <div class="main-nav bg-white">
      <div class="main-nav-inner flex-row">

        <div class="mobile-contact-buttons hide-on-desktop hide-on-tablet-landscape">
          <a href="tel:18552707387"><i class="fa fa-phone"></i></a>
          <a href="#"><i class="fa fa-home"></i></a>
        </div>

        <div class="site-branding">
            <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri();?>/assets/img/logo.svg" alt="Pet first logo"></a>
        </div><!-- .site-branding -->

        <div class="nav-side flex-row">
          <nav id="site-navigation" class="main-nvaigation">
              <?php
                  wp_nav_menu( array(
                      'theme_location' => 'primary',
                      'menu_class'     => 'primary-menu',
                   ) );
              ?>
          </nav><!-- #site-navigation -->
          <a class="btn-lg btn-primary quote-btn-lg" style="display:none;" href="#"> Get a Free Quote</a>
          <a class="btn-lg btn-primary quote-btn-md" style="display:none;" href="#"> Get Free Quote</a>
          <a class="btn-sm btn-primary quote-btn-sm" style="display:none;" href="#"> Get Quote</a>
        </div>
      </div>
    </div>
  </header><!-- #masthead -->

  <div id="content" class="site-content">
