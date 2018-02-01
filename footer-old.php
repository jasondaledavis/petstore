<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage petfirst
 * @since petfirst 1.0
 */
?>

</main><!-- end .page-content -->

<?php get_template_part( 'template-parts/sidebar', 'footer' ); ?>

    <footer class="footer-global">

        <div class="grid">

            <div class="row">

                <div class="footer-credits">

                    <div class="c12">

                        <div class="footer-logo">

                            <?php if ( is_active_sidebar( 'sidebar-footer-cta' )  ) : ?>

                            <?php dynamic_sidebar( 'sidebar-footer-cta' ); ?>

                            <?php endif; ?>

                            <?php if ( has_nav_menu( 'footernav' ) ) : ?>

                                <div id="site-header-menu" class="site-header-menu">
                                
                                    <nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'petfirst' ); ?>">

                                        <?php
                                            wp_nav_menu( array(
                                                'theme_location' => 'footernav',
                                                'menu_class'     => 'footer-menu',
                                             ) );
                                        ?>

                                    </nav><!-- .main-navigation -->

                                </div><!-- .site-header-menu -->

                            <?php endif; ?><!-- end has_nav_menu -->

                            <?php if ( has_nav_menu( 'footernavterms' ) ) : ?>

                                <div id="site-header-menu" class="site-header-menu">
                                
                                    <nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Footer Terms Menu', 'petfirst' ); ?>">

                                        <?php
                                            wp_nav_menu( array(
                                                'theme_location' => 'footernavterms',
                                                'menu_class'     => 'primary-menu',
                                             ) );
                                        ?>

                                    </nav><!-- .main-navigation -->

                                </div><!-- .site-header-menu -->

                            <?php endif; ?><!-- end has_nav_menu -->

                        </div>

                        <div class="copyright-info">

                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> &copy; <?php echo date( 'Y' ) ?>


                            <?php if ( is_active_sidebar( 'sidebar-footer-terms' )  ) : ?>

                            <?php dynamic_sidebar( 'sidebar-footer-terms' ); ?>

                            <?php endif; ?>


                        </div>

                    </div><!-- end .c12 -->

                </div>

            </div><!-- end .row -->

        </div><!-- end .grid -->

    </footer><!-- end .footer-global -->

    <?php wp_footer(); ?>
    
    </body>

</html>