<?php
/**
 * How it works template part
 *
 * @package WordPress
 * @subpackage petfirst
 * @since petfirst 1.0
 */
?>

<!-- How it works Component -->
<div class="flex-container fullbleed bg-light-1">
  <div class="center page-width">

    <?php if ( get_post_meta( $post->ID, 'pre-header', true ) ) { 

            echo '<h5 class="text-primary">'.get_post_meta( $post->ID, 'pre-header', true ).'</h5>';

          } else {

            echo '<h5 class="text-primary">Pet insurance is different than people insurance</h5>';

          } ?>

    <?php if ( get_post_meta( $post->ID, 'header', true ) ) { 

            echo '<h2 class="bold">'.get_post_meta( $post->ID, 'header', true ).'</h2>';

          } else {

            echo '<h2 class="bold">How it works</h2>';

          } ?>
    
    <div class="flex-row circle-icons">

      <div class="flex-col-sm-4 center">

        <div class="circle-icon">

          <?php if ( get_post_meta( $page_id, 'step_icon', true ) ) { 
            
            echo get_post_meta( $post->ID, 'step_icon', true );

          } else {

            echo '<i class="fa fa-vet-nurse"></i>';

          }?>

        </div>

          <?php if ( get_post_meta( $post->ID, 'step_header', true ) ) { 

            echo '<h4 class="bold">'.get_post_meta( $post->ID, 'step_header', true ).'</h4>';

          } else {

            echo '<h4 class="bold">Take your pet to the vet</h4>';

          } ?>

          <?php if ( get_post_meta( $post->ID, 'step_body_copy', true ) ) {

            echo '<p>'.get_post_meta( $post->ID, 'step_body_copy', true ).'</p>';

          } else {

            echo '<p>Visit any licensed vet, emergency clinic or specialist in the US. There is no network of providers to worry about.</p>';
          
          } ?>

      </div>

      <div class="flex-col-sm-4 center">
        <div class="circle-icon">

          <?php if ( get_post_meta( $page_id, 'step_icon', true ) ) { 
            
            echo get_post_meta( $post->ID, 'step_icon', true );

          } else {

            echo '<i class="fa fa-paper-and-pen"></i>';

          }?>
    
        </div>

          <?php if ( get_post_meta( $post->ID, 'step_header', true ) ) { 

            echo '<h4 class="bold">'.get_post_meta( $post->ID, 'step_header', true ).'</h4>';

          } else {

            echo '<h4 class="bold">Send us your claim</h4>';

          } ?>

          <?php if ( get_post_meta( $post->ID, 'step_body_copy', true ) ) {

            echo '<p>'.get_post_meta( $post->ID, 'step_body_copy', true ).'</p>';

          } else {

            echo '<p>Pay your bill at the vet, and send us your claim along with vet records from the visit and an invoice.</p>';
          
          } ?>

      </div>

      <div class="flex-col-sm-4 center">
        <div class="circle-icon">

          <?php if ( get_post_meta( $page_id, 'step_icon', true ) ) { 
            
            echo get_post_meta( $post->ID, 'step_icon', true );

          } else {

            echo '<i class="fa fa-hand-holding-money"></i>';

          }?>

        </div>
        
          <?php if ( get_post_meta( $post->ID, 'step_header', true ) ) { 

            echo '<h4 class="bold">'.get_post_meta( $post->ID, 'step_header', true ).'</h4>';

          } else {

            echo '<h4 class="bold">Send us your claim</h4>';

          } ?>

          <?php if ( get_post_meta( $post->ID, 'step_body_copy', true ) ) {

            echo '<p>'.get_post_meta( $post->ID, 'step_body_copy', true ).'</p>';

          } else {

            echo '<p>PetFirst will follow-up with your vet for any missing info. Claims are processed in less than two weeks.</p>';
          
          } ?>

        </div>

          <?php 

          $link = get_field('cta_button');

          if( $link ): ?>
            
            <a class="btn-lg btn-primary" title="Large Primary Button" href="<?php echo $link['url']; ?>">Get A Quote</a>

          <?php endif; ?>

      </div><!-- /.flex-row -->
    </div>
  </div><!-- /.container -->