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
			<!-- <div class="footer-socials">
				<a href="#"><i class="fa fa-facebook-square"></i></a>
				<a href="#"><i class="fa fa-instagram"></i></a>
				<a href="#"><i class="fa fa-twitter-square"></i></a>
				<a href="#"><i class="fa fa-pinterest-square"></i></a>
			</div>
			<p>google rating</p> -->

			<?php dynamic_sidebar( 'sidebar-footer-1' ); ?>
		</div>
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'sidebar-footer-2' )  ) : ?>
		<div class="flex-col-sm-2">
			<!-- <ul>
				<li><a href="#">link name</a></li>
				<li><a href="#">link name</a></li>
				<li><a href="#">link name</a></li>
				<li><a href="#">link name</a></li>
				<li><a href="#">link name</a></li>
			</ul> -->
			<?php dynamic_sidebar( 'sidebar-footer-2' ); ?>
		</div>
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'sidebar-footer-3' )  ) : ?>
		<div class="flex-col-sm-2">
			<!-- <ul>
				<li><a href="#"> link name</a></li>
				<li><a href="#"> link name</a></li>
				<li><a href="#"> link name</a></li>
				<li><a href="#"> link name</a></li>
			</ul> -->
			<?php dynamic_sidebar( 'sidebar-footer-3' ); ?>
		</div>
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'sidebar-footer-4' )  ) : ?>
		<div class="flex-col-sm-2">
			<!-- <h6>Quick Links</h6>
			<ul>
				<li><a href="#"> link name</a></li>
				<li><a href="#"> link name</a></li>
				<li><a href="#"> link name</a></li>
				<li><a href="#"> link name</a></li>
			</ul> -->
			<?php dynamic_sidebar( 'sidebar-footer-4' ); ?>
		</div>
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'sidebar-footer-5' )  ) : ?>
		<div class="flex-col-sm-2">
			<!-- <h6>Call Center Hours</h6>
			<p>Monday-Friday, 8 am - 9 PM EST<br>
				 Saturday, 10 am - 6 pm EST</p>

			<div class="flex-row">
				<div class="flex-col-sm-6">
					<h6>Phone</h6>
					<p>866.937.7387</p>
				</div>
				<div class="flex-col-sm-6">
					<h6>Phone</h6>
					<p>866.937.7387</p>
				</div>
			</div> -->
			<?php dynamic_sidebar( 'sidebar-footer-5' ); ?>
		</div>
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'sidebar-footer-6' )  ) : ?>
		<div class="flex-col-sm-2">
			<!-- <h6>Mail</h6>
			<p>PetFirst Pet Insurance 400 Missouri Avenue Jeffersonville, IN 47130</p> -->
			<?php dynamic_sidebar( 'sidebar-footer-6' ); ?>
		</div>
		<?php endif; ?>

	</div>

	<div class="flex-row">
		<div class="flex-col-sm-12 center">

			<!-- <a class="btn-lg btn-primary" href="#" title="Large Primary Button">Contact Customer Support</a>
			<br> -->

			<?php if ( is_active_sidebar( 'sidebar-footer-cta' )  ) : ?>

            	<?php dynamic_sidebar( 'sidebar-footer-cta' ); ?>

            <?php endif; ?>

            <?php if ( has_nav_menu( 'footernav' ) ) : ?>
			<nav class="bold">
				<!-- <ul>
					<li><a class="" href="#" title="">Veternarians</a></li>
					<li><a class="" href="#" title="">Shelters &amp; Rescues</a></li>
					<li><a class="" href="#" title="">Employee Benefits</a></li>
				</ul> -->
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
				<!-- <ul>
					<li><a class="" href="#" title="">Terms &amp; Conditions</a></li>
					<li><a class="" href="#" title="">Privacy Policy</a></li>
					<li><a class="" href="#" title="">Sitemap</a></li>
				</ul> -->
				<?php
                    wp_nav_menu( array(
                        'theme_location' => 'footernavterms',
                        'menu_class'     => 'primary-menu',
                     ) );
                ?>
			</nav>
			<?php endif; ?><!-- end has_nav_menu -->

			<!-- <div class="copyright-info">
				<p>&copy; 2018 PetFirst</p>
				<p>PetFirst Healthcare, LLC is the program administrator authorized to underwrite and administer pet health insurance policies and claims on behalf of New Hampshire Insurance Company (NHIC) and The Insurance Company of the State of Pennsylvania (ISOP) in approved states. For a complete listing of approved states, please contact PetFirst Healthcare, LLC.</p>
			</div> -->

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
