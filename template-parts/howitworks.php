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

    <h5 class="text-primary"><?php get_post_meta( $post->ID, 'pre-header', true ); ?></h5>
   
    <h2 class="bold"><?php get_post_meta( $post->ID, 'header', true ); ?></h2>
    
    <div class="flex-row circle-icons">

      <div class="flex-col-sm-4 center">

        <div class="circle-icon">

          <?php if ( get_post_meta( $page_id, 'step_icon', true ) ) { 
            
            echo get_post_meta( $post->ID, 'step_icon', true );

          } else {

            echo '<i class="fa fa-vet-nurse"></i>';

          }?>

        </div>
        
        <h4 class="bold">

          <?php if ( get_post_meta( $post->ID, 'step_header', true ) ) { 

            echo get_post_meta( $post->ID, 'step_header', true );

          } else {

            echo '<h4 class="bold">Take your pet to the vet</h4>';

          } ?>

        </h4>
       
        <p>

          <?php if ( get_post_meta( $post->ID, 'step_body_copy', true ) ) {

            echo get_post_meta( $post->ID, 'step_body_copy', true );

          } else {

            echo '<p>Visit any licensed vet, emergency clinic or specialist in the US. There is no network of providers to worry about.</p>';
          
          } ?>

        </p>

      </div>

      <div class="flex-col-sm-4 center">
        <div class="circle-icon">

          <?php if ( get_post_meta( $page_id, 'step_icon', true ) ) { 
            
            echo get_post_meta( $post->ID, 'step_icon', true );

          } else {

            echo '<i class="fa fa-paper-and-pen"></i>';

          }?>
    
        </div>
        
          <h4 class="bold">

          <?php if ( get_post_meta( $post->ID, 'step_header', true ) ) { 

            echo get_post_meta( $post->ID, 'step_header', true );

          } else {

            echo '<h4 class="bold">Send us your claim</h4>';

          } ?>

        </h4>
       
        <p>

          <?php if ( get_post_meta( $post->ID, 'step_body_copy', true ) ) {

            echo get_post_meta( $post->ID, 'step_body_copy', true );

          } else {

            echo '<p>Pay your bill at the vet, and send us your claim along with vet records from the visit and an invoice.</p>';
          
          } ?>

        </p>

      </div>

      <div class="flex-col-sm-4 center">
        <div class="circle-icon">

          <?php if ( get_post_meta( $page_id, 'step_icon', true ) ) { 
            
            echo get_post_meta( $post->ID, 'step_icon', true );

          } else {

            echo '<i class="fa fa-hand-holding-money"></i>';

          }?>

        </div>
        
          <h4 class="bold">

          <?php if ( get_post_meta( $post->ID, 'step_header', true ) ) { 

            echo get_post_meta( $post->ID, 'step_header', true );

          } else {

            echo '<h4 class="bold">Get money back quickly</h4>';

          } ?>

        </h4>
       
        <p>

          <?php if ( get_post_meta( $post->ID, 'step_body_copy', true ) ) {

            echo get_post_meta( $post->ID, 'step_body_copy', true );

          } else {

            echo '<p>PetFirst will follow-up with your vet for any missing info. Claims are processed in less than two weeks.</p>';
          
          } ?>

        </p>

        </div>

        <?php if ( get_post_meta( $post->ID, 'cta_button', true ) ) {

        echo '<a href="#" style="margin:40px auto;" class="btn-lg btn-primary" href="#" title="Large Primary Button">';

        echo get_post_meta( $post->ID, 'cta_button', true );

       '</a>';

        } ?>

      </div><!-- /.flex-row -->
    </div>
  </div><!-- /.container -->