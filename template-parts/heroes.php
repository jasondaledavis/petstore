<?php
/**
 * Heroes for all pages that appear to the right of the the_content
 *
 * @package WordPress
 * @subpackage petfirst
 * @since petfirst 1.0
 */
?>
<!-- header with two cta's -->
<?php if ( is_page() ) { ?>

<?php if get_post_meta( $page_id, 'hero_header_cta_dog_and_cat_insurance', true ) ) { ?>

      <div class="flex-col-sm-6 fullbleed-image hero-image" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/Hero-Image-Pet-Insurance.jpg);"> 

        <div class="hero-cta">
          <span class="med-circle-icon"><i class="fa fa-dog-face"></i></span>
          <h4 class="bold"> Dog Insurance <i class="fa fa-arrow-right"></i></h4>
        </div>

        <div class="hero-cta">
          <span class="med-circle-icon"><i class="fa fa-cat-face"></i></span>
          <h4 class="bold"> Cat Insurance <i class="fa fa-arrow-right"></i></h4>
        </div>

<!-- need new custom field for this one header with 3 cta's -->
<?php } elseif ( get_post_meta( $page_id, 'hero_header_cta_dog_and_cat_insurance', true ) ) { ?>

      <div class="flex-col-sm-6 fullbleed-image hero-image" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/Hero-Image-Pet-Insurance.jpg);">

        <div class="hero-cta">
          <span class="med-circle-icon"><i class="fa fa-dog-face"></i></span>
          <h4 class="bold"> Dog Insurance <i class="fa fa-arrow-right"></i></h4>
        </div>

        <div class="hero-cta">
          <span class="med-circle-icon"><i class="fa fa-cat-face"></i></span>
          <h4 class="bold"> Cat Insurance <i class="fa fa-arrow-right"></i></h4>
        </div>

        <div class="hero-cta">
          <span class="med-circle-icon"><i class="fa fa-cat-face"></i></span>
          <h4 class="bold"> Cat Insurance <i class="fa fa-arrow-right"></i></h4>
        </div>

<!-- header with simple image -->
<?php } elseif ( get_post_meta( $page_id, 'hero_header_image', true ) ) { ?>

      <div class="flex-col-sm-6 fullbleed-image hero-image" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/Hero-Image-Pet-Insurance.jpg);">

<!-- header with video background -->
<?php } elseif ( get_post_meta( $page_id, 'hero_header_video', true ) ) { ?>

      <div class="flex-col-sm-6 fullbleed-image hero-image"><video src="<?php echo get_template_directory_uri();?>/assets/img/PetFirst-Homepage-Video.mp4" autoplay loop playsinline muted></video></div>

<!-- header with get a quote cta -->
<?php } elseif ( get_post_meta( $page_id, 'get_a_quote_cta', true ) ) { ?>

      <div class="flex-col-sm-6 fullbleed-image hero-image" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/Hero-Image-Pet-Insurance.jpg);">

        <div> 
          <h2 class="text-light-1 bold">Find a plan that fits</h2>
          <p class="small">What is your pets's name?</p>
          <div class="vertical-align-top">
            <input class="flat-right" type="text" placeholder="We bet it's cute!"><a class="btn-half-left btn-primary btn-dark">Get my free quote!</a>
          </div>
          <p>google rating goes here</p>

<?php }?>


 <?php endif; ?>
