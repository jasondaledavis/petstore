<?php
/**
 * The template for the footer widget areas on posts and pages
 *
 * @package WordPress
 * @subpackage petfirst
 * @since petfirst 1.0
 */
?>

<?php
if ( ! is_active_sidebar( 'sidebar-footer-1' ) && ! is_active_sidebar( 'sidebar-footer-2' ) && ! is_active_sidebar( 'sidebar-footer-3' ) && ! is_active_sidebar( 'sidebar-footer-4' ) && ! is_active_sidebar( 'sidebar-footer-5' ) ) {
    return;
}
// If we get this far, we have widgets. Let's do this.
?>

        <div class="footer-widgets">

            <div class="grid">

                <div class="row"> 

                    <?php if ( is_active_sidebar( 'sidebar-footer-1' )  ) : ?>

                    <div class="c2">

                        <?php dynamic_sidebar( 'sidebar-footer-1' ); ?>

                    </div>

                    <?php endif; ?>

                    <?php if ( is_active_sidebar( 'sidebar-footer-2' )  ) : ?>

                    <div class="c2">

                        <?php dynamic_sidebar( 'sidebar-footer-2' ); ?>

                    </div>

                    <?php endif; ?>

                    <?php if ( is_active_sidebar( 'sidebar-footer-3' )  ) : ?>

                    <div class="c2">

                        <?php dynamic_sidebar( 'sidebar-footer-3' ); ?>

                    </div>

                    <?php endif; ?>

                    <?php if ( is_active_sidebar( 'sidebar-footer-4' )  ) : ?>

                    <div class="c2">

                        <?php dynamic_sidebar( 'sidebar-footer-4' ); ?>

                    </div>

                    <?php endif; ?>

                    <?php if ( is_active_sidebar( 'sidebar-footer-5' )  ) : ?>

                    <div class="c2">

                        <?php dynamic_sidebar( 'sidebar-footer-5' ); ?>

                    </div>

                    <?php endif; ?>

                </div><!-- end .row -->

            </div><!-- end .grid -->

        </div>