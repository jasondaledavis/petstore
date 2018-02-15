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
<h2 class="bold"><?php the_title(); ?></h2>

<?php
// Start the loop.
while ( have_posts() ) : the_post();

// Include the page content template.
get_template_part( 'template-parts/content', 'page' );

// End of the loop.
endwhile;
?>

<!-- this is the CTA that appears below the content area -->
<?php 

$link = get_field('cta_button_below_content');

if( $link ): ?>
	
	<a class="btn-lg btn-primary" title="Large Primary Button" href="<?php echo $link['url']; ?>">Get A Quote</a>

<?php endif; ?>

</div><!-- end .flex-col-sm-6 -->

<?php get_template_part( 'template-parts/heroes' ); ?>

</div><!-- /.flex-row -->
</div><!-- /.white-box -->
</div><!-- /.container -->

<div class="flex-container">
<div class="white-box rounded-10">
<div class="flex-row">
<div class="flex-col-sm-8">

<!-- Generic H2 headline  -->
<?php if ( get_post_meta( $post->ID, 'generic_h2_headline', true ) ) { 

echo '<h2 class="bold">'.get_post_meta( $post->ID, 'generic_h2_headline', true ).'</h2>';

} else {

echo '<h2 class="bold">Generic H2 headline</h2>';

} ?>

<!-- first paragraph below H2 headline  -->
<?php if ( get_post_meta( $post->ID, 'content_editor_below_generic_h2_headline', true ) ) { 

echo '<p>'.get_post_meta( $post->ID, 'content_editor_below_generic_h2_headline', true ).'</p>';

} else {

	echo '<p>Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.</p>';

} ?>

<!-- Generic H3 headline  -->
<?php if ( get_post_meta( $post->ID, 'generic_h3_headline', true ) ) { 

echo '<h3 class="bold text-primary">'.get_post_meta( $post->ID, 'generic_h3_headline', true ).'</h3>';

} else {

echo '<h3 class="bold text-primary">Generic H3 headline</h3>';

} ?>

<!-- second paragraph below H3 headline  -->
<?php if ( get_post_meta( $post->ID, 'content_editor_below_generic_h3_headline', true ) ) { 

echo '<p>'.get_post_meta( $post->ID, 'content_editor_below_generic_h3_headline', true ).'</p>';

} else {

	echo '<p>Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.</p>';

} ?>

</div><!-- end .flex-col-sm-8 -->

<div class="flex-col-sm-4 center">

<?php 

$link = get_field('cta_button_below_content');

if( $link ): ?>
	
	<a class="btn-lg btn-primary" title="Large Primary Button" href="<?php echo $link['url']; ?>">Get A Quote</a>

<?php endif; ?>

</div><!-- end .flex-col-sm-4 -->
</div><!-- /.flex-row -->
</div><!-- /.white-box -->
</div><!-- /.container -->

<?php get_footer(); ?>