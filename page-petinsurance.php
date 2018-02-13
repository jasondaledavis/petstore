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

<?php
// Start the loop.
while ( have_posts() ) : the_post();

// Include the page content template.
get_template_part( 'template-parts/content', 'page' );

// End of the loop.
endwhile;
?>

<!-- this is the CTA that appears below the content area -->
<a class="btn-lg btn-primary" href="<?php the_permalink(); ?>" title="Large Primary Button"><?php echo get_post_meta($post->ID, 'global_page_cta', true) ?></a>

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


<!-- How it works Component -->
<div class="flex-container fullbleed bg-light-1">
  <div class="center page-width">
    <h5 class="text-primary">Pet Insurance</h5>
    <h2 class="bold"> How it Works</h2>

    <div class="flex-row circle-icons">

      <div class="flex-col-sm-4 center">
        <div class="circle-icon">
          <i class="fa fa-vet-nurse"></i>
        </div>
        <h4 class="bold">Take your pet to the vet</h4>
        <p>Visit any licensed vet, emergency clinic or specialist in the US. There's no network of providers to worry about.</p>
      </div>

      <div class="flex-col-sm-4 center">
        <div class="circle-icon">
          <i class="fa fa-paper-and-pen"></i>
        </div>
        <h4 class="bold">Send us your claim</h4>
        <p>Pay your bill at the vet, and send us your claim along with vet records from the visit and an invoice.</p>
      </div>

      <div class="flex-col-sm-4 center">
        <div class="circle-icon">
          <i class="fa fa-hand-holding-money"></i>
        </div>
        <h4 class="bold">Get money back quickly</h4>
        <p>PetFirst will follow-up with your vet for any missing info. Claims are processed in less than two weeks. </p>
        </div>

      </div><!-- /.flex-row -->
    </div>
  </div><!-- /.container -->




  <!-- Claim Tale (Individual) Component -->
  <div class="flex-container claim-tale nopad fullbleed" style="background: url('<?php echo get_template_directory_uri();?>/assets/img/Full-Width-Banner-Claim-Tale-MacDuff.jpg'); background-position: center;
  background-size: cover; background-attachment: fixed;">
  <div class="claim-tale-inner overlay-dark-25">
    <div class="flex-row page-width">

      <div class="flex-col-sm-8">
        <h2 class="bold text-light-1">MacDuff's close call with a car</h2>
        <p class="text-light-1">When MacDuff the Airedale Terrier was hit by a car, bone fractures and lung damage required x-rays, surgery and a 10-day stay at the veterinary emergency hospital. </p>
        <a class="cta" href="#" title="More Claim Tales">
          <span class="text-light-1">More Claim Tales <i class="fa fa-arrow-right"></i></span>
        </a>
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
    <h2 class="bold">Pet Insurance Plan Options in </h2>
  </div>
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

    <a class="btn-lg btn-secondary" href="#" title="Large Secondary Button">Use my Location</a>
    <a href="#" class="" title=""><i class="fa fa-question-circle text-dark"></i></a>
  </div>
</div>

  <p>The PetFirst Pet Insurance plan offers robust annual benefit amount options, chronic care coverage and no lifetime or per-incident limits for pets of all ages. You can customize your deductible and reimbursement rates so that they work best for your pet's needs and your medical care budget, and you can upgrade or downgrade your coverage at any time. </p>
</div>
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
        <h3 class="bold text-primary">What's Covered</h3>
        <div class="checkboxes flex-row">
          <div class="flex-col-sm-6">
            <ul >
              <li><i class="fa fa-check text-accent"></i> Accidents</li>
              <li><i class="fa fa-check text-accent"></i> Illnesses (incl. hereditary, congenital, &amp; chronic conditions)</li>
              <li><i class="fa fa-check text-accent"></i> Hospitalizations</li>
              <li><i class="fa fa-check text-accent"></i> Surgeries</li>
              <li><i class="fa fa-check text-accent"></i> Diagnostic Tests</li>
              <li><i class="fa fa-check text-accent"></i> Exam Fees</li>
            </ul>
          </div>
          <div class="flex-col-sm-6">
            <ul>
              <li><i class="fa fa-check text-accent"></i> X-rays</li>
              <li><i class="fa fa-check text-accent"></i> Ultrasounds</li>
              <li><i class="fa fa-check text-accent"></i> Medications</li>
              <li><i class="fa fa-check text-accent"></i> Holistic Care &amp; Alternative Therapies</li>
              <li><i class="fa fa-check text-accent"></i> Emergency Care</li>
              <li>And Much More!</li>
            </ul>
          </div>
        </div>

        <h4 class="bold">After a 12-month wait period, your pet is also covered for:</h4>
        <ul>
          <li><i class="fa fa-check text-accent"></i>Intravertebral Disc Disease (IVDD)</li>
          <li><i class="fa fa-check text-accent"></i> Anterior Cruciate Ligaments</li>
          <li><i class="fa fa-check text-accent"></i> Medial Cruciate Ligaments</li>
          <li><i class="fa fa-check text-accent"></i> Posterior Cruciate Ligaments</li>
          <li><i class="fa fa-check text-accent"></i> Cranial Cruciate Lugaments</li>
        </ul>
      </div>
      <!-- /left side -->

      <!-- right side -->
      <div class="side-by-side">
        <h3 class="bold text-primary">What's Not Covered</h3>
        <div class="checkboxes">
            <ul>
              <li><i class="fa fa-times text-dark"></i> Pre-existing Conditions <a href="#" class="" title=""><i class="fa fa-question-circle text-dark"></i></a></li>
              <li><i class="fa fa-times text-dark"></i> Elective Procedures</li>
              <li><i class="fa fa-times text-dark"></i> Expression or removal of anal glands or anal sacculitis</li>
              <li><i class="fa fa-times text-dark"></i> Breeding or conditions related to breeding</li>
              <li><i class="fa fa-times text-dark"></i> Pet food, special diet, vitamins, mineral supplements</li>
              <li><i class="fa fa-times text-dark"></i> Grooming costs and bathing (incl. medicated baths)</li>
              <li><i class="fa fa-times text-dark"></i> Parasite prevention, parasite treatment and illnesses transmitted by parasites (including fleas &amp; ticks)</li>
              <li><i class="fa fa-times text-dark"></i> Orthodontics, endontics &amp; removal of deciduous teeth</li>
              <li><i class="fa fa-times text-dark"></i> Behavioral Training</li>
              <li><i class="fa fa-times text-dark"></i> Illness or injury which arises out of racing, coursing, commercial guarding, or organized fighting of your pet</li>
              <li><i class="fa fa-times text-dark"></i> Routine wellness &amp; preventative care <a href="#" class="" title=""><i class="fa fa-question-circle text-dark"></i></a></li>
              <li><i class="fa fa-times text-dark"></i> Organ Transplants</li>
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
  <a class="btn-lg btn-primary" href="#" title="Large Primary Button">Ask us a Question</a>
</div>
<!-- /About Pet Insurance Component -->



<?php get_footer(); ?>