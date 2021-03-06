<?php
/**
* Template Name: Pet Insurance
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

<div class="hero bg-light-1">
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

          $link = get_field('cta_button');

          if( $link ): ?>
            
            <a class="btn-lg btn-primary" title="Large Primary Button" href="<?php echo $link['url']; ?>">Get A Quote</a>

          <?php endif; ?>

        </div><!-- end .flex-col-sm-6 -->

        <div class="flex-col-sm-6 nopad fullbleed-video hero-image" style="background: url('<?php echo get_template_directory_uri();?>/assets/img/Hero-Image-Pet-Insurance.jpg');background-size: cover;background-repeat: no-repeat;">

          <?php get_template_part( 'template-parts/heroes' ); ?>

        </div><!-- end .flex-col-sm-6 -->

      </div><!-- /.flex-row -->
    </div><!-- /.white-box -->
  </div><!-- /.container -->
</div><!-- end .hero bg-light-1 -->

  <?php get_template_part( 'template-parts/howitworks' ); ?>

  <!-- Claim Tale (Individual) Component -->
  <div class="flex-container claim-tale nopad fullbleed" style="background: url('<?php echo get_template_directory_uri();?>/assets/img/Full-Width-Banner-Claim-Tale-MacDuff.jpg'); background-position: center;
  background-size: cover; background-attachment: fixed;">
  <div class="claim-tale-inner overlay-dark-25">
    <div class="flex-row page-width">

      <div class="flex-col-sm-8">
          
          <?php if ( get_post_meta( $post->ID, 'header', true ) ) { 

            echo '<h2 class="bold text-light-1">'.get_post_meta( $post->ID, 'header', true ).'</h2>';

          } else {

            echo '<h2 class="bold text-light-1">Take your pet to the vet</h2>';

          } ?>

          <?php if ( get_post_meta( $post->ID, 'step_body_copy', true ) ) {

            echo '<p>'.get_post_meta( $post->ID, 'step_body_copy', true ).'</p>';

          } else {

            echo '<p class="text-light-1">When MacDuff the Airedale Terrier was hit by a car, bone fractures and lung damage required x-rays, surgery and a 10-day stay at the veterinary emergency hospital. </p>';

          } ?>

          <?php

          $link = get_field('global_page_cta');

          if( $link ): ?>
            
            <a class="cta" title="Large Primary Button" href="<?php echo $link['url']; ?>"><span class="text-light-1">More Claim Tales <i class="fa fa-arrow-right"></i></span></a>

          <?php endif; ?>

      </div>

      <div class="flex-col-sm-4">

        <div class="numbers">
          <div class="top">
            <span>Total Vet Bill</span>
            <span>PetFirst Reimbursed</span>
          </div>
          <div class="bottom">
            <span>$9,706</span>
            <span class="exagerated">$8,511</span>
          </div>
        </div>

      </div>

    </div><!-- /.flex-row -->
  </div>
</div><!-- /.container -->


<!-- Plan Location Selector Component-->
<div class="flex-container pad">

  <div class="flex-row">
    <div class="flex-col-sm-7">

      <?php if ( get_post_meta( $post->ID, 'header', true ) ) { 

        echo '<h2 class="bold">'.get_post_meta( $post->ID, 'header', true ).'</h2>';

      } else {

        echo '<h2 class="bold">Pet Insurance Plan Options in </h2>';

      } ?>

    </div><!-- end .flex-col-sm-7 -->
    <div class="flex-col-sm-5">
      <select class="">
      <option value="AL">Alabama</option>
      <option value="AK">Alaska</option>
      <option value="AZ">Arizona</option>
      <option value="AR">Arkansas</option>
      <option value="CA">California</option>
      <option value="CO">Colorado</option>
      <option value="CT">Connecticut</option>
      <option value="DE">Delaware</option>
      <option value="DC">District Of Columbia</option>
      <option value="FL">Florida</option>
      <option value="GA">Georgia</option>
      <option value="HI">Hawaii</option>
      <option value="ID">Idaho</option>
      <option value="IL">Illinois</option>
      <option value="IN">Indiana</option>
      <option value="IA">Iowa</option>
      <option value="KS">Kansas</option>
      <option value="KY">Kentucky</option>
      <option value="LA">Louisiana</option>
      <option value="ME">Maine</option>
      <option value="MD">Maryland</option>
      <option value="MA">Massachusetts</option>
      <option value="MI">Michigan</option>
      <option value="MN">Minnesota</option>
      <option value="MS">Mississippi</option>
      <option value="MO">Missouri</option>
      <option value="MT">Montana</option>
      <option value="NE">Nebraska</option>
      <option value="NV">Nevada</option>
      <option value="NH">New Hampshire</option>
      <option value="NJ">New Jersey</option>
      <option value="NM">New Mexico</option>
      <option value="NY">New York</option>
      <option value="NC">North Carolina</option>
      <option value="ND">North Dakota</option>
      <option value="OH">Ohio</option>
      <option value="OK">Oklahoma</option>
      <option value="OR">Oregon</option>
      <option value="PA">Pennsylvania</option>
      <option value="RI">Rhode Island</option>
      <option value="SC">South Carolina</option>
      <option value="SD">South Dakota</option>
      <option value="TN">Tennessee</option>
      <option value="TX">Texas</option>
      <option value="UT">Utah</option>
      <option value="VT">Vermont</option>
      <option value="VA">Virginia</option>
      <option value="WA">Washington</option>
      <option value="WV">West Virginia</option>
      <option value="WI">Wisconsin</option>
      <option value="WY">Wyoming</option>
      </select>

      <?php

      $link = get_field('global_page_cta');

      if( $link ): ?>
        
        <a class="btn-lg btn-secondary" title="Large Primary Button" href="<?php echo $link['url']; ?>">Use my Location</a>

      <?php endif; ?>

      <?php

      $link = get_field('global_page_cta');

      if( $link ): ?>
        
        <a class="btn-lg btn-secondary" title="Large Primary Button" href="<?php echo $link['url']; ?>"><i class="fa fa-question-circle text-dark"></i></a>

      <?php endif; ?>

    </div><!-- end .flex-col-sm-5 -->
  </div><!-- end .flex-row -->

  <?php if ( get_post_meta( $post->ID, 'step_body_copy', true ) ) {

    echo '<p>'.get_post_meta( $post->ID, 'step_body_copy', true ).'</p>';

  } else {

    echo '<p>The PetFirst Pet Insurance plan offers robust annual benefit amount options, chronic care coverage and no lifetime or per-incident limits for pets of all ages. You can customize your deductible and reimbursement rates so that they work best for your pet\'s needs and your medical care budget, and you can upgrade or downgrade your coverage at any time. </p>';
  
  } ?>

</div><!-- end .flex-container pad -->
<!-- /Plan Location Selector Component-->

<!-- Plans Component -->
<div class="flex-container pad">
  <div class="flex-row plans">

    <div class="flex-col-sm-4 valign">
      <!-- Plan -->
      <div class="plan">
        <!-- if hat -->
        <!-- /if hat -->
        <h3 class="bold">$2,000 Plan</h3>
        <label>Annual Benefit</label>
        <div>$2,000</div>
        <label>Eligible ages</label>
        <div>All Ages (min. 8 wks)</div>
        <label>Reimbursement Options</label>
        <div>70-90%</div>
        <label>Annual Deductable Options</label>
        <div>$50-$500</div>
        <p>Starting at <span class="exagerated">$32/mo</span></p>
        <a class="btn-lg btn-primary btn-wide" href="#" title="Start Quote">Start Quote</a>
        
      </div>
      <!-- /Plan -->
    </div>


    <div class="flex-col-sm-4 valign">
      <!-- Plan -->
      <div class="plan">
        <!-- if hat -->
        <div class="plan-hat">
          Most Popular with Policyholders
        </div>
        <!-- /if hat -->
        <h3 class="bold">$2,000 Plan</h3>
        <label>Annual Benefit</label>
        <div>$2,000</div>
        <label>Eligible ages</label>
        <div>All Ages (min. 8 wks)</div>
        <label>Reimbursement Options</label>
        <div>70-90%</div>
        <label>Annual Deductable Options</label>
        <div>$50-$500</div>
        <p>Starting at <span class="exagerated">$32/mo</span></p>
        <a class="btn-lg btn-primary btn-wide" href="#" title="Start Quote">Start Quote</a>

      </div>
      <!-- /Plan -->
    </div>

    <div class="flex-col-sm-4 valign">
      <!-- Plan -->
      <div class="plan">
        <!-- if hat -->
        <!-- /if hat -->
        <h3 class="bold">$2,000 Plan</h3>
        <label>Annual Benefit</label>
        <div>$2,000</div>
        <label>Eligible ages</label>
        <div>All Ages (min. 8 wks)</div>
        <label>Reimbursement Options</label>
        <div>70-90%</div>
        <label>Annual Deductable Options</label>
        <div>$50-$500</div>
        <p>Starting at <span class="exagerated">$32/mo</span></p>
        <a class="btn-lg btn-primary btn-wide" href="#" title="Start Quote">Start Quote</a>

      </div>
      <!-- /Plan -->
    </div>
  </div>

  <!-- Bubble Component -->
  <div class="bubble">
    You can broaden your coverage at any time by adding a <a href="#" title="" class="text-primary">Routine Care Rider</a> to offset wellness expenses. <a href="#" title="">Learn More  <i class="fa fa-arrow-right"></i></a>
  </div>
  <!-- /Bubble Component -->

</div>
<!-- /Plans Component -->



<!-- Side by Side Boxes Component -->
<div class="flex-container pad">
    <div class="side-by-sides">

      <!-- left side -->
      <div class="side-by-side">
       

        <?php if ( get_post_meta( $post->ID, 'covered_header', true ) ) { 

          echo '<h3 class="bold text-primary">'.get_post_meta( $post->ID, 'covered_header', true ).'</h3>';

        } else {

          echo '<h3 class="bold text-primary">What\'s Covered</h3>';

        } ?>


        <div class="checkboxes flex-row"><!-- covered_item -->
          <div class="flex-col-sm-6">
            <ul >
              <li><i class="fa fa-check text-accent"></i><?php get_post_meta( $post->ID, 'covered_item', true ); ?></li>
              <li><i class="fa fa-check text-accent"></i><?php get_post_meta( $post->ID, 'covered_item', true ); ?></li>
              <li><i class="fa fa-check text-accent"></i><?php get_post_meta( $post->ID, 'covered_item', true ); ?></li>
              <li><i class="fa fa-check text-accent"></i><?php get_post_meta( $post->ID, 'covered_item', true ); ?></li>
              <li><i class="fa fa-check text-accent"></i><?php get_post_meta( $post->ID, 'covered_item', true ); ?></li>
              <li><i class="fa fa-check text-accent"></i><?php get_post_meta( $post->ID, 'covered_item', true ); ?></li>
            </ul>
          </div>
          <div class="flex-col-sm-6">
            <ul>
              <li><i class="fa fa-check text-accent"></i><?php get_post_meta( $post->ID, 'covered_item', true ); ?></li>
              <li><i class="fa fa-check text-accent"></i><?php get_post_meta( $post->ID, 'covered_item', true ); ?></li>
              <li><i class="fa fa-check text-accent"></i><?php get_post_meta( $post->ID, 'covered_item', true ); ?></li>
              <li><i class="fa fa-check text-accent"></i><?php get_post_meta( $post->ID, 'covered_item', true ); ?></li>
              <li><i class="fa fa-check text-accent"></i><?php get_post_meta( $post->ID, 'covered_item', true ); ?></li>
              <li><i class="fa fa-check text-accent"></i>And Much More!</li>
            </ul>
          </div>
        </div>

        <?php if ( get_post_meta( $post->ID, '12-month_covered_header', true ) ) { 

          echo '<h4 class="bold">'.get_post_meta( $post->ID, '12-month_covered_header', true ).'</h4>';

        } else {

          echo '<h4 class="bold">After a 12-month wait period, your pet is also covered for:</h4>';

        } ?>

        <ul>
          <li><i class="fa fa-check text-accent"></i><?php get_post_meta( $post->ID, 'covered_after_12_months_covered_item', true ); ?></li>
          <li><i class="fa fa-check text-accent"></i><?php get_post_meta( $post->ID, 'covered_after_12_months_covered_item', true ); ?></li>
          <li><i class="fa fa-check text-accent"></i><?php get_post_meta( $post->ID, 'covered_after_12_months_covered_item', true ); ?></li>
          <li><i class="fa fa-check text-accent"></i><?php get_post_meta( $post->ID, 'covered_after_12_months_covered_item', true ); ?></li>
          <li><i class="fa fa-check text-accent"></i><?php get_post_meta( $post->ID, 'covered_after_12_months_covered_item', true ); ?></li>
        </ul>
      </div>
      <!-- /left side -->

      <!-- right side -->
      <div class="side-by-side">

        <?php if ( get_post_meta( $post->ID, 'not_covered_header', true ) ) { 

          echo '<h3 class="bold text-primary">'.get_post_meta( $post->ID, 'not_covered_header', true ).'</h3>';

        } else {

          echo '<h3 class="bold text-primary">What\'s Not Covered</h3>';

        } ?>

        <div class="checkboxes"><!-- not_covered_item -->
            <ul>
              <li><i class="fa fa-times text-dark"></i><?php get_post_meta( $post->ID, 'not_covered_item', true ); ?><a href="#" class="" title=""><i class="fa fa-question-circle text-dark"></i></a></li>
              <li><i class="fa fa-times text-dark"></i><?php get_post_meta( $post->ID, 'not_covered_item', true ); ?></li>
              <li><i class="fa fa-times text-dark"></i><?php get_post_meta( $post->ID, 'not_covered_item', true ); ?></li>
              <li><i class="fa fa-times text-dark"></i><?php get_post_meta( $post->ID, 'not_covered_item', true ); ?></li>
              <li><i class="fa fa-times text-dark"></i><?php get_post_meta( $post->ID, 'not_covered_item', true ); ?></li>
              <li><i class="fa fa-times text-dark"></i><?php get_post_meta( $post->ID, 'not_covered_item', true ); ?></li>
              <li><i class="fa fa-times text-dark"></i><?php get_post_meta( $post->ID, 'not_covered_item', true ); ?></li>
              <li><i class="fa fa-times text-dark"></i><?php get_post_meta( $post->ID, 'not_covered_item', true ); ?></li>
              <li><i class="fa fa-times text-dark"></i><?php get_post_meta( $post->ID, 'not_covered_item', true ); ?></li>
              <li><i class="fa fa-times text-dark"></i><?php get_post_meta( $post->ID, 'not_covered_item', true ); ?></li>
              <li><i class="fa fa-times text-dark"></i><?php get_post_meta( $post->ID, 'not_covered_item', true ); ?><a href="#" class="" title=""><i class="fa fa-question-circle text-dark"></i></a></li>
              <li><i class="fa fa-times text-dark"></i><?php get_post_meta( $post->ID, 'not_covered_item', true ); ?></li>
            </ul>

            <a class="cta" href="#" title="Navigation">
              <span>Download our easy-to-read guide to these exclusions <i class="fa fa-arrow-right"></i></span>
            </a>
          </div>
      </div>
      <!-- /right side -->

  </div>
</div>
<!-- /Side by Side Boxes Component -->


<!-- QUick Tips Component -->
<div class="flex-container center pad">
  <h5 class="text-primary">About Pet Insurance</h4>
  <h3 class="bold">Confused? We're here to help</h3>

  <div class="quick-tips">
    <div class="quick-tip">
      <i class="quick-tip-icon fa fa-hand-holding-money"></i>
      <p class="bold">Is Pet Insurance Worth it?</p>
      <a href="#" title="">Read More  <i class="fa fa-arrow-right"></i></a>
    </div>

    <div class="quick-tip">
      <i class="quick-tip-icon fa fa-gears-settings"></i>
      <p class="bold">How Pet Insurance Works</p>
      <a href="#" title="">Read More  <i class="fa fa-arrow-right"></i></a>
    </div>

    <div class="quick-tip">
      <i class="quick-tip-icon fa fa-paper-and-pen"></i>
      <p class="bold">How to File<br> a Claim</p>
      <a href="#" title="">Read More  <i class="fa fa-arrow-right"></i></a>
    </div>

    <div class="quick-tip">
      <i class="quick-tip-icon fa fa-car"></i>
      <p class="bold">Pet insurance is like Car Insurance</p>
      <a href="#" title="">Read More  <i class="fa fa-arrow-right"></i></a>
    </div>

    <div class="quick-tip">
      <i class="quick-tip-icon fa fa-bandaid-x"></i>
      <p class="bold">What is a Pre-Existing Condition?</p>
      <a href="#" title="">Read More  <i class="fa fa-arrow-right"></i></a>
    </div>
  </div>

  <?php

  $link = get_field('global_page_cta');

  if( $link ): ?>
    
    <a class="btn-lg btn-primary" title="Large Primary Button" href="<?php echo $link['url']; ?>">Get A Quote</a>

  <?php endif; ?>

</div>
<!-- /About Pet Insurance Component -->

<?php get_footer(); ?>