<?php
/**
* Template Name: Reviews
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

<div class="bg-white">
<div class="flex-container nopad fullbleed-left">
<div class="flex-row">
<div class="flex-col-sm-6">

<?php
if ( function_exists('yoast_breadcrumb') && !is_front_page() ) {
yoast_breadcrumb('
<ul id="breadcrumb">','</ul>
');
}
?>
<!-- this is the WordPress default page title  -->
<h1 class="page-title"><span class="entry-title"><?php the_title(); ?></span></h1>

<?php query_posts( array( 'post_status' => 'publish' , 'post_type' => array( 'customer_reviews' )  ) ); ?>
<?php
// Start the loop.
while ( have_posts() ) : the_post();

// Include the page content template.
get_template_part( 'template-parts/content', 'page' );

// End of the loop.
endwhile;
?>

<!-- this is the CTA that appears below the content area -->
<?php if ( get_post_meta( $post->ID, 'global_page_cta', true ) ) {

echo '<a href="#" class="btn-lg btn-primary" href="<?php the_permalink(); ?>" title="Large Primary Button">';

echo get_post_meta( $post->ID, 'global_page_cta', true );

'</a>';

} ?> 

</div><!-- end .flex-col-sm-6 -->

<?php get_template_part( 'template-parts/heroes' ); ?>
<?php

if ( has_post_thumbnail() ) {

// leave this and for just an image use post thumbnail function or default to an image with the else statement
the_post_thumbnail( 'header-image', array( 'alt' => the_title_attribute( 'echo=0' ), 'class' => "custom-header-image" ) ); 

} else {  
    $image = get_template_directory_uri() .'/assets/img/Hero-Image-Pet-Insurance.jpg'; 
    echo '<div class="flex-col-sm-6 fullbleed-image hero-image" style="background:url('.$image.');background-size: cover;" /></div>';
} ?>

</div><!-- end .flex-col-sm-6 -->

</div><!-- /.flex-row -->
</div><!-- /.white-box -->
</div><!-- /.container -->

<div class="flex-container">
<div class="white-box rounded-10">
<div class="flex-row">
<div class="flex-col-sm-8">

<!-- Generic H2 headline  -->
<h2 class="bold"><?php echo get_post_meta($post->ID, 'generic_h2_headline', true) ?></h2>

<!-- first paragraph below H2 headline  -->
<?php echo get_post_meta($post->ID, 'content_editor_below_generic_h2_headline', true) ?>

<!-- Generic H3 headline  -->
<h3 class="bold text-primary"><?php echo get_post_meta($post->ID, 'generic_h3_headline', true) ?></h3>

<!-- second paragraph below H3 headline  -->
<p><?php echo get_post_meta($post->ID, 'content_editor_below_generic_h3_headline', true) ?></p>

</div><!-- end .flex-col-sm-8 -->

<div class="flex-col-sm-4 center">

<a class="btn-lg btn-primary btn-wide" href="<?php the_permalink(); ?>" title="Large Primary Button"><?php echo get_post_meta($post->ID, 'cta_button_below_content', true) ?></a>

</div><!-- end .flex-col-sm-4 -->
</div><!-- /.flex-row -->
</div><!-- /.white-box -->
</div><!-- /.container -->

<?php get_footer(); ?>