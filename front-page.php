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


<div class="flex-container fullbleed bg-light-1">
  <div class="narrow">

    <div class="flex-row">
      <div class="flex-col-sm-7 pad-top-60">
        <h4>Less hassle. More coverage. Better peace of mind. PetFirst has the shortest wait periods for accident and illness coverage for cats and dogs. </h4>
        <a class="cta" href="#" title="">
          <span>Learn About Our Pet Insurance <i class="fa fa-arrow-right"></i></span>
        </a>
      </div>
      <div class="flex-col-sm-5">
        <img src="<?php echo get_template_directory_uri();?>/assets/img/home-photo.png" alt=""/>
      </div>
    </div>

    <div class="flex-row">
      <div class="flex-col-sm-6">
        <div class="circle-cta circle-cta-dark">
          <span class="med-circle-icon"><i class="fa fa-dog-face"></i></span>
          <h4 class="bold text-dark"> Dog Insurance
          <div class="circle-cta-small-text"> from $32 per month</div>
        </h4>
        <i class="fa fa-arrow-right text"></i>
        </div>
      </div>

      <div class="flex-col-sm-6">
        <div class="circle-cta circle-cta-dark">
          <span class="med-circle-icon"><i class="fa fa-cat-face"></i></span>
          <h4 class="bold text"> Cat Insurance
          <div class="circle-cta-small-text"> from $26 per month</div>
        </h4>
        <i class="fa fa-arrow-right text"></i>
        </div>
      </div>
  </div>

</div><!-- /.narrow -->
</div><!-- /.container -->


<div class="claim-tales-slider-container nopad">
<div class="claim-tales-slider-bg"></div>

<div class="claim-tales-inner">
  <div class="claim-tales-slider-title">claim Tales</div>

    <!-- Slider main container -->
  <div class="swiper-container">
      <!-- Additional required wrapper -->
      <div class="swiper-background"></div>
      <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="claim-slide swiper-slide">
            <div class="flex-row page-width">
              <div class="flex-col-sm-8">
                <h4 class="bold">MacDuff's close call with slide 1</h2>
                <p>When MacDuff the Airedale Terrier was hit by a car, bone fractures and lung damage required x-rays, surgery and a 10-day stay at the veterinary emergency hospital. </p>
              <p class="bold">Total Vet Bill $9,706</p>
              <h4 class="bold text-primary">PetFirst Reimbursed $8,511</h4>
              </div>
              <div class="flex-col-sm-4">
                <img class="round-image" src="<?php echo get_template_directory_uri();?>/assets/img/macduff.png" alt=""/>
              </div>
            </div>
          </div>
          <div class="claim-slide swiper-slide">
            <div class="flex-row page-width">
              <div class="flex-col-sm-8">
                <h4 class="bold">MacDuff's close call with slide 2</h2>
                <p>When MacDuff the Airedale Terrier was hit by a car, bone fractures and lung damage required x-rays, surgery and a 10-day stay at the veterinary emergency hospital. </p>
              <p class="bold">Total Vet Bill $9,706</p>
              <h4 class="bold text-primary">PetFirst Reimbursed $8,511</h4>
              </div>
              <div class="flex-col-sm-4">
                <img class="round-image" src="<?php echo get_template_directory_uri();?>/assets/img/macduff.png" alt=""/>
              </div>
            </div>
          </div>
          <div class="claim-slide swiper-slide">
            <div class="flex-row page-width">
              <div class="flex-col-sm-8">
                <h4 class="bold">MacDuff's close call with slide 3</h2>
                <p>When MacDuff the Airedale Terrier was hit by a car, bone fractures and lung damage required x-rays, surgery and a 10-day stay at the veterinary emergency hospital. </p>
              <p class="bold">Total Vet Bill $9,706</p>
              <h4 class="bold text-primary">PetFirst Reimbursed $8,511</h4>
              </div>
              <div class="flex-col-sm-4">
                <img class="round-image" src="<?php echo get_template_directory_uri();?>/assets/img/macduff.png" alt=""/>
              </div>
            </div>
          </div>
          <div class="claim-slide swiper-slide">
            <div class="flex-row page-width">
              <div class="flex-col-sm-8">
                <h4 class="bold">MacDuff's close call with slide 3</h2>
                <p>When MacDuff the Airedale Terrier was hit by a car, bone fractures and lung damage required x-rays, surgery and a 10-day stay at the veterinary emergency hospital. </p>
              <p class="bold">Total Vet Bill $9,706</p>
              <h4 class="bold text-primary">PetFirst Reimbursed $8,511</h4>
              </div>
              <div class="flex-col-sm-4">
                <img class="round-image" src="<?php echo get_template_directory_uri();?>/assets/img/macduff.png" alt=""/>
              </div>
            </div>
          </div>
      </div>

      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>

      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"><i class="fa fa-chevron-left"></i></div>
      <div class="swiper-button-next"><i class="fa fa-chevron-right"></i></div>



  </div>

</div>







</div><!-- /.container -->

<!-- did you know -->
<div class=" flex-container fullbleed bg-light-1">

  <div class="did-you-know narrow">
    <div class="did-you-know-text">
      <i class="fa fa fa-paw-print"></i>
      <h4><span class="bold text-primary">Did you know?</span> PetFirst has the shortest wait periods for accident & illness coverage.</h4>
    </div>
    <div class="did-you-know-form">
      <h6 class="bold">What is your pet's name?</h6>
      <div class="vertical-align-top">
        <input class="flat-right bg-light-3" type="text" placeholder="We bet it's cute!"><a class="btn-half-left btn-primary">Get My Free Quote</a>
      </div>
      <p>trustpilot review here</p>
    </div>
  </div><!-- /.narrow -->
</div><!-- /.container -->


<div class="post-cards-container flex-container fullbleed bg-light-1">

  <div class="narrow">
    <div class="flex-row">
      <div class="flex-col-sm-6 nopad">
        <h3 class="bold">Recent Posts</h3>
      </div>
      <div class="flex-col-sm-6 nopad">
        <a class="cta" href="#" title="">
          <span class="text-dark">See More <i class="text-dark fa fa-arrow-right"></i></span>
        </a>
      </div>
    </div>


    <div class="post-cards">

        <div class="post">
          <img class="post-image" src="<?php echo get_template_directory_uri();?>/assets/img/blog-card1.png" alt=""/>
          <div class="post-content">
            <p class="text-primary bold">Winter Hiking with Your Dog</p>
            <p>True adventurers know that the escapades don’t have to stop when the temperatures drop...</p>
          </div>
          <div class="author-area">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/Author-Bio-Katie-Blakely.jpg" class="author-icon" alt="">
            <div class="author-text">
              <div class="author">by Katie Blakeley</div>
              <div class="date">two days ago</div>
            </div>
          </div>
        </div>  <!-- post-card -->

        <div class="post">
          <img class="post-image" src="<?php echo get_template_directory_uri();?>/assets/img/blog-card2.png" alt=""/>
          <div class="post-content">
            <p class="text-primary bold">Winter Hiking with Your Dog</p>
            <p>True adventurers know that the escapades don’t have to stop when the temperatures drop...</p>
          </div>
          <div class="author-area">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/Author-Bio-Katie-Blakely.jpg" class="author-icon" alt="">
            <div class="author-text">
              <div class="author">by Katie Blakeley</div>
              <div class="date">two days ago</div>
            </div>
          </div>
        </div>  <!-- post-card -->

        <div class="post">
          <img class="post-image" src="<?php echo get_template_directory_uri();?>/assets/img/blog-card3.png" alt=""/>
          <div class="post-content">
            <p class="text-primary bold">Winter Hiking with Your Dog</p>
            <p>True adventurers know that the escapades don’t have to stop when the temperatures drop...</p>
          </div>
          <div class="author-area">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/Author-Bio-Katie-Blakely.jpg" class="author-icon" alt="">
            <div class="author-text">
              <div class="author">by Katie Blakeley</div>
              <div class="date">two days ago</div>
            </div>
          </div>
        </div>  <!-- post-card -->

    </div>
  </div><!-- /.narrow -->
</div><!-- /.container -->



<div> <!-- /.homepage-content -->

<?php get_footer(); ?>
