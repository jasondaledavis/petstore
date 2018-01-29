<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage petstore
 * @since petstore 1.0
 */
?>

<?php if ( class_exists( 'WooCommerce' ) ) { 

    // Checks for WooCommerceplugin
    $petstoreWoo=is_woocommerce();

    } else {

    $petstoreWoo=false;

} ?> 

<?php if ( !is_page() && !$petstoreWoo && is_active_sidebar( 'sidebar-blog' ) ) { ?>

    <aside id="secondary" class="sidebar">

        <div class="c3">
        
            <?php dynamic_sidebar( 'sidebar-blog' ); ?>

        </div>
      
    </aside><!-- .sidebar .widget-area -->

<?php } ?>

<?php //if ( is_page() && is_active_sidebar( 'sidebar-page' )  ) { ?>

    <!-- <aside id="secondary" class="sidebar page-side"> -->

        <!-- <div class="c3"> -->

            <?php //dynamic_sidebar( 'sidebar-page'); ?>

        <!-- </div> -->

  <!--   </aside> --><!-- .sidebar .widget-area -->

<?php //} ?>

<?php if ( class_exists( 'WooCommerce' ) ) { ?>
 
    <?php if ( is_active_sidebar( 'sidebar-shop' ) && is_woocommerce() && !is_page() ): ?>
 
            <aside class="sidebar">

                <div class="c3">
 
                    <?php dynamic_sidebar( 'sidebar-shop' ); ?>

                </div>
 
            </aside><!-- end .sidebar -->
 
    <?php endif; ?>
 
<?php }?>