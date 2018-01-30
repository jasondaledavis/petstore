<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage petfirst
 * @since petfirst 1.0
 */

get_header(); ?>

    <div class="grid wfull">

        <div class="row">

            <?php if ( is_active_sidebar( 'sidebar-blog' )  ) {

            echo '<div class="c9">';

            } else {  

            echo '<div class="c12">';
            
            } ?> 
            
                <div class="post-index">

                <?php if ( have_posts() ) : ?>

        		<?php if ( is_home() && ! is_front_page() ) : ?>

        			<header>

                        <?php if ( function_exists('yoast_breadcrumb') ) {
                            yoast_breadcrumb('<p id="breadcrumbs">','</p>'); 
                        } ?>
                      
                    </header>

        		<?php endif; ?>

        		<?php
                    // Start the loop.
                    while ( have_posts() ) : the_post();

                        /*
                         * Include the Post-Format-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                         */
                        get_template_part( 'template-parts/content' );

                    // End the loop.
                    endwhile;

                    // Previous/next page navigation.
                    the_posts_pagination( array(
                        'prev_text'          => __( '', 'petfirst' ),
                        'next_text'          => __( '', 'petfirst' ),
                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'petfirst' ) . ' </span>',
                    ) );

                // If no content, include the "No posts found" template.
                else :
                    get_template_part( 'template-parts/content', 'none' );

                endif;
                ?>
               
                </div><!-- end .post-index -->

            </div><!-- end .c9 or .c12 -->

            <?php get_sidebar(); ?>

        </div><!-- end .row -->

    </div><!-- end .grid -->

<?php get_footer(); ?>
