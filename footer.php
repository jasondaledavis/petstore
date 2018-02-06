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
<?php
if ( ! is_active_sidebar( 'sidebar-footer-1' ) && ! is_active_sidebar( 'sidebar-footer-2' ) && ! is_active_sidebar( 'sidebar-footer-3' ) && ! is_active_sidebar( 'sidebar-footer-4' ) && ! is_active_sidebar( 'sidebar-footer-5' ) && ! is_active_sidebar( 'sidebar-footer-6' ) ) {
    return;
}
// If we get this far, we have widgets. Let's do this.
?>

<!-- </main> -->
<!-- end .page-content -->
<section class="bumpers flex-row">

	<div class="flex-col-sm-6 newsletter-bumper">

		<div class="bumper-inner">
			<h2>Pet Tips &amp; Tricks</h2>
			<p>What is your email address?</p>
			<input class="flat-right" type="text" placeholder="example@email.com"><a class="btn-half-left btn-primary">Sign Up</a>
			<p>We send helpful pet tips twice a month. We won’t yap.</p>
		</div>
	</div>

	<div class="flex-col-sm-6 quote-bumper">
		<div class="bumper-inner">
			<h2>Start your free quote.</h2>
			<p>What is your pet’s name?</p>
			<input class="flat-right" type="text" placeholder="We bet it’s cute!"><a class="btn-half-left btn-primary">Get My Free Quote</a>
		</div>
	</div>

</section>

<footer class="footer-global">
	<div class="flex-row footer-links">

		<?php if ( is_active_sidebar( 'sidebar-footer-1' )  ) : ?>
		<div class="flex-col-sm-2">
			<?php dynamic_sidebar( 'sidebar-footer-1' ); ?>
		</div>
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'sidebar-footer-2' )  ) : ?>
		<div class="flex-col-sm-2">
			<?php dynamic_sidebar( 'sidebar-footer-2' ); ?>
		</div>
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'sidebar-footer-3' )  ) : ?>
		<div class="flex-col-sm-2">
			<?php dynamic_sidebar( 'sidebar-footer-3' ); ?>
		</div>
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'sidebar-footer-4' )  ) : ?>
		<div class="flex-col-sm-2">
			<?php dynamic_sidebar( 'sidebar-footer-4' ); ?>
		</div>
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'sidebar-footer-5' )  ) : ?>
		<div class="flex-col-sm-2">
			<?php dynamic_sidebar( 'sidebar-footer-5' ); ?>
		</div>
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'sidebar-footer-6' )  ) : ?>
		<div class="flex-col-sm-2">
			<?php dynamic_sidebar( 'sidebar-footer-6' ); ?>
		</div>
		<?php endif; ?>

	</div>

	<div class="flex-row">
		<div class="flex-col-sm-12 center">

			<?php if ( is_active_sidebar( 'sidebar-footer-cta' )  ) : ?>

            	<?php dynamic_sidebar( 'sidebar-footer-cta' ); ?>

            <?php endif; ?>

            <?php if ( has_nav_menu( 'footernav' ) ) : ?>
			<nav class="bold">
				<?php
                    wp_nav_menu( array(
                        'theme_location' => 'footernav',
                        'menu_class'     => 'primary-menu',
                     ) );
                ?>
			</nav>
			<?php endif; ?><!-- end has_nav_menu -->

			<?php if ( has_nav_menu( 'footernavterms' ) ) : ?>
			<nav class="regular">
				<?php
                    wp_nav_menu( array(
                        'theme_location' => 'footernavterms',
                        'menu_class'     => 'primary-menu',
                     ) );
                ?>
			</nav>
			<?php endif; ?><!-- end has_nav_menu -->

			<div class="copyright-info">

                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"> &copy; <?php echo date( 'Y' ) ?> <?php bloginfo( 'name' ); ?></a>

                <?php if ( is_active_sidebar( 'sidebar-footer-terms' )  ) : ?>

                <?php dynamic_sidebar( 'sidebar-footer-terms' ); ?>

                <?php endif; ?>


            </div>
		</div>
	</div>
<?php wp_footer(); ?>
</footer>
</body>
</html>
