<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 *
 * @package WordPress
 * @subpackage petfirst
 * @since petfirst 1.0
 */

get_header(); ?>

    <div class="grid">

        <div class="row">

            <div class="c12">

				<?php
					// Start the loop.
					while ( have_posts() ) : the_post();

						// Include the page content template.
						get_template_part( 'template-parts/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) {
							comments_template();
						}

						// End of the loop.
					endwhile;
				?>

			</div><!-- end .c9 or .c12 -->

        </div><!-- end .row -->

    </div><!-- end .grid -->

<?php get_footer(); ?>
