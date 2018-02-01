<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage petfirst
 * @since petfirst 1.0
 */

get_header(); ?>

    <div class="grid">

        <div class="row">

            <div class="c6">

            	<?php if ( get_post_meta( $post->ID, 'petfirst_page_heading', true ) ) { ?>
	            <!-- this is the custom page title -->
	            <h1 class="page-title"><span class="entry-title"><?php echo get_post_meta($post->ID, 'petfirst_page_heading', true) ?></span></h1>

	            <?php } else { ?>
	            <!-- this is the WordPress default page title  -->
	            
	            <h1 class="page-title"><span class="entry-title"><?php the_title(); ?></span></h1>
	            <?php } ?>

				<?php
					// Start the loop.
					while ( have_posts() ) : the_post();

						// Include the page content template.
						get_template_part( 'template-parts/content', 'page' );

						// End of the loop.
					endwhile;
				?>
				
				<!-- this is the CTA that appears below the content area -->
				<h2 class="page-subtitle"><?php echo get_post_meta($post->ID, 'petfirst_page_subtitle', true) ?></h2>

			</div><!-- end .c6 -->

			<div class="c6">

				<?php get_template_part( 'template-parts/custom', 'header' ); ?>

			</div>


        </div><!-- end .row -->

    </div><!-- end .grid -->

    <div class="grid">

	    <div class="row">

	        <div class="c9">

	        	<?php echo get_post_meta($post->ID, 'content_editor_below_hero_row', true) ?>

	        </div>

	        <div class="c3">

	        	<?php echo get_post_meta($post->ID, 'content_editor_below_hero_row_cta', true) ?>

	        </div>

	    </div><!-- end .row -->

    </div><!-- end .grid -->

<?php get_footer(); ?>
