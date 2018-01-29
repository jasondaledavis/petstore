<?php
/**
 * Template for displaying search forms in petstore
 *
 * @package WordPress
 * @subpackage petstore
 * @since petstore 1.0
 */
?>
<form class="searchbar" method="get" action="<?php echo home_url( '/' ); ?>">

	<div class="input-prepend">

		<input type="text" id="prependedInput" name="s" size="100%" placeholder="<?php echo __( 'Enter your search term...', 'petstore' ); ?>" value="<?php the_search_query(); ?>">

	</div><!-- end .input-prepend -->

</form><!-- end .searchbar -->