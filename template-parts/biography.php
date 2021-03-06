<?php
/**
 * The template part for displaying an Author biography
 *
 * @package WordPress
 * @subpackage petfirst
 * @since petfirst 1.0
 */
?>

<div class="author-info">
	<div class="author-avatar">
		<?php
		/**
		 * Filter the petfirst author bio avatar size.
		 *
		 * @since petfirst 1.0
		 *
		 * @param int $size The avatar height and width size in pixels.
		 */
		$author_bio_avatar_size = apply_filters( 'petfirst_author_bio_avatar_size', 80 );

		echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
		?>
	</div><!-- .author-avatar -->

	<div class="author-description">
		<h2 class="author-title"><span class="author-heading vcard author post-author"><span class="fn"><?php the_author_posts_link(); ?></span></span></h2>

		<p class="author-bio">
			<?php the_author_meta( 'description' ); ?>
			
			<a class="author-link url fn n" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
				<?php printf( __( 'View all posts by %s', 'petfirst' ), get_the_author() ); ?>
			</a>
		</p><!-- .author-bio -->
	</div><!-- .author-description -->
</div><!-- .author-info -->
