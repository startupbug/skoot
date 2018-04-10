<?php include('../header.php'); ?>
<main id="main-block">
   <div class="">

      <div style="background-image: url(<?php echo $base_url;?>assets/img/featured/affiliate_img.png)"
         class="jumbotron bg-cover">
         <div class="container space-top-xxl space-bottom-xxl">
            <div class="row">
               <div class="col-sm-24 text-center space-top-lg space-bottom-lg">
                  <h1>Monetise your audience</h1>
                  <h2>Become a JobLane Affiliate</h2>
               </div>
            </div>
            <div class="row row-xs-height">
               <div class="col-xs-height col-middle col-xs-1register">
                  <h3 class=" space-bottom-none space-top-none f_event f_call">Call +971 4 278 5200</h3>
               </div>
               <div class="col-xs-height col-middle col-xs-2 text-center">
                  <h3 class=" space-bottom-none space-top-none">or</h3>
               </div>
               <div class="col-xs-height col-middle col-xs-10 text-left">
                  <a class="btn btn-tertiary btn-lg f_btn_call" onclick="modalOpen('register_affiliates_modal')">
                  Register Now
                  </a>
               </div>
            </div>
         </div>
      </div>

      <section class="bg-dark">
         <div class="container">
            <div class="row">
               <div class="col-sm-24">
                 <a href="#" class="pull-right space-top-xs">Affiliate Login

                  <i class="fa fa-fw fa-chevron-right text-primary icon_f"></i>
                  </a>
                  <div class="btn-group text-muted" ng-init="activeTemplate='overview.html'">
                     <label class="btn f_btn_about f_overview">
                        <a onclick="tab('tab1')" id="tab1">Overview</a>
                     </label>
                     <label class="btn f_btn_about f_overview">
                        <a onclick="tab('tab2')" id="tab2">Linking Options</a>

                     </label>
                     <label class="btn f_btn_about f_overview">
                        <a onclick="tab('tab3')" id="tab3"> FAQs</a>
                     </label>
                     <label class="btn f_btn_about f_overview" onclick="modalOpen('register_affiliates_modal')">
                        Register

                     </label>

                  </div>
               </div>
            </div>
         </div>
      </section>

      <div id="activeTemplate"></div>
      <section class="bg-light" id="tab1_view">


         <section class="bg-light">
         <div class="container">
         <div class="row space-top-xl space-bottom-lg text-section">
             <div class="col-sm-5 text-xxl">
                 <i class="fa fa-fw fa-handshake fa-5x space-top-xs"></i>
             </div>
             <div class="col-sm-16">
                 <div class="text-center">
                     <h1 class="f_affiliate">Why become an Affiliate?</h1>
                     <div class="text-xl f_content">
                         Generate revenue while adding valuable content for your visitors
                     </div>
                 </div>
             </div>
         </div>
         </div>
         </section>
         <section class="bg-dark">
         <div class="container text-center">
         <h1 class="space-top-xl">How does it work?</h1>
         <div class="row space-top-xxl text-section">
             <div class="col-sm-7">
                 <i class="fa fa-fw fa-television fa-4x"></i>
                 <div class="text-xl space-top-xxl f_web">
                     Add content to your website
                 </div>
             </div>
             <div class="col-sm-1">
                <!-- <i class="fa fa-fw fa-chevron-right text-muted fa-3x space-top-sm"></i>-->
                <img src="<?php echo $base_url;?>assets/img/featured/arrow.png">
             </div>
             <div class="col-sm-7">
                 <i class="fa fa-fw fa-users fa-4x"></i>
                 <div class="text-xl space-top-xxl f_web">
                     Refer traffic to JobLane
                 </div>
             </div>
             <div class="col-sm-1">
                 <!--<i class="fa fa-fw fa-chevron-right text-muted fa-3x space-top-sm"></i>-->
                 <img src="<?php echo $base_url;?>assets/img/featured/arrow_image.png">
             </div>
             <div class="col-sm-8">
                 <i class="fa fa-fw fa-coin-stack-tall fa-4x"></i>
                 <div class="text-xl space-top-xxl f_web">
                     Earn money for every conversion
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-6 col-sm-offset-9">
                 <a class="btn btn-section btn-lg btn-block space-top-xxl space-bottom-xl f_buttonmore" onclick="tab('tab3')">
                     Learn More
                 </a>
             </div>
         </div>
         </div>
         </section>
         <section class="bg-light">
         <div class="container text-center">
         <h1 class="space-top-xl">Choose from our variety of widgets</h1>
         <div class="row space-top-xxl text-section">
             <div class="col-sm-8">
                 <div class="media">
                     <div class="media-object inline f_media">
                         <div class="icon icon-circle icon-3x f_icon_media">
                             <i class="fa fa-loud-speaker"></i>
                         </div>
                     </div>
                 </div>
                 <div class="text-xl space-top-med">
                     Banner Ads
                 </div>
             </div>
             <div class="col-sm-8">
                 <div class="media">
                     <div class="media-object inline f_media">
                         <div class="icon icon-circle icon-3x f_icon_media">
                             <i class="fa fa-search"></i>
                         </div>
                     </div>
                 </div>
                 <div class="text-xl space-top-med">
                     Job Search Widgets
                 </div>
             </div>
             <div class="col-sm-8">
                 <div class="media">
                     <div class="media-object inline f_media">
                         <div class="icon icon-circle icon-3x f_icon_media">
                             <i class="fa fa-computer-network"></i>
                         </div>
                     </div>
                 </div>
                 <div class="text-xl space-top-med">
                     Dedicated Jobs Feed
                 </div>
             </div>

         </div>
         <div class="row">
             <div class="col-sm-6 col-sm-offset-9">
                 <a class="btn btn-section btn-lg btn-block space-top-xxl space-bottom-xl f_buttonmore">
                     View Details
                 </a>
             </div>
         </div>
         </div>
         </section>
         <section style="background-image: url(<?php echo $base_url;?>assets/img/featured/affiliate_banner.png)" class="bg-cover">
         <div class="container text-center">
         <h1 class="space-top-xl text-inverted">Join now and start earning!</h1>
         <div class="text-xl space-top-xxl text-inverted">
             Add content to your website with minimum technicalities, at no cost and start earning.
         </div>
         <div class="row">
             <div class="col-sm-6 col-sm-offset-9">
                 <div class="btn btn-primary btn-lg btn-block space-top-xxl space-bottom-xl f_buttonmore"  onclick="modalOpen('register_affiliates_modal')">
                     Register Now
                 </div>
             </div>
         </div>
         </div>
         </section>

      </section>

       <section class="bg-light" id="tab2_view" style="display: none">

           <section class="bg-light">
         <div class="container">
         <div class="row space-bottom-xxl">
             <div class="col-sm-24">
                 <h1 class="space-top-lg">Choose your prefered option to link to JobLane</h1>
                 <h2>Banners</h2>
                 <p>Our banners offer an easy way to JobLane at strategic locations on the site.</p>
                 <p>See indicative positions for the product below:</p>
                 <div class="text-center">
                      <img src="<?php echo $base_url;?>assets/img/featured/image-banner.jpg">
                 </div>
                 <div class="text-med text-strong space-top-med space-bottom-xs">Banners also available in</div>
                 <div class="space-bottom-xs">
                     <a gt-modal-static="'affiliateWhiteBanners'" gt-modal-class="modal-fixed-top">
                         White background color
                     </a>
                 </div>
                 <div class="space-bottom-med">
                     <a gt-modal-static="'affiliateArabicBanners'" gt-modal-class="modal-fixed-top">
                         Arabic language
                     </a>
                 </div>
                 <p>Click on options to see the sample in Blue background</p>
                 <ul>
                     <li>
                         <a gt-modal-static="'affiliateLeaderboardBanner'" gt-modal-class="modal-fixed-top">
                             Leaderboard Banner Ad (728px x 90px)
                         </a>
                     </li>
                     <li>
                         <a gt-modal-static="'affiliateSquareBanner'" gt-modal-class="modal-fixed-top">
                             Square Banner Ad (300px x 250px)
                         </a>
                     </li>
                     <li>
                         <a gt-modal-static="'affiliateSkyscraperBanner'" gt-modal-class="modal-fixed-top">
                             Skyscraper Banner Ad (160px x 600px)
                         </a>
                     </li>
                 </ul>
                 <hr class="supermuted" />
                 <h2>Job Search Widgets</h2>
                 <p>The job search widgets allow your website users to search for jobs.</p>
                 <p>See indicative positions for the product below:</p>
                 <div class="text-center">
                     <img src="<?php echo $base_url;?>assets/img/featured/image-widget.jpg">
                 </div>
                 <div class="text-med text-strong space-top-med space-bottom-xs">Search Widgets also available in</div>
                 <div class="space-bottom-med">
                     <a gt-modal-static="'affiliateWhiteSearchWidget'" gt-modal-class="modal-fixed-top">
                         White background color
                     </a>
                 </div>
                 <p>Click on options to see the sample in Blue background</p>
                 <ul>
                     <li>
                         <a gt-modal-static="'affiliateLeaderboardWidget'" gt-modal-class="modal-fixed-top">
                             Leaderboard search widget (728px x 90px)
                         </a>
                     </li>
                     <li>
                         <a gt-modal-static="'affiliateSquareWidget'" gt-modal-class="modal-fixed-top">
                             Square search widget (300px x 250px)
                         </a>
                     </li>
                     <li>
                         <a gt-modal-static="'affiliateSkyscraperWidget'" gt-modal-class="modal-fixed-top">
                             Skyscraper search widget (160px x 600px)
                         </a>
                     </li>
                 </ul>
                 <hr class="supermuted" />
                 <h2>Jobs live feed</h2>
                 <p>The jobs feed is a full page offering users search, country and industry options.</p>
                 <p>Example:</p>
                 <div class="text-center">
                      <img src="<?php echo $base_url;?>assets/img/featured/image-iframe.jpg">
                 </div>
                 <div class="text-med text-strong space-top-med space-bottom-xs">Jobs Live Feed also available in</div>
                 <div class="space-bottom-xs">
                     <a gt-modal-static="'affiliateArabicJobFeed'" gt-modal-class="modal-fixed-top">
                         Arabic language
                     </a>
                 </div>
                 <hr class="supermuted" />
                 <div class="row">
                     <div class="col-sm-6 col-sm-offset-9">
                         <button class="btn btn-secondary btn-block" gt-modal-affiliate-registration>Register Now</button>
                     </div>
                 </div>
             </div>
         </div>
         </div>
         </section>
       </section>

       <section class="bg-light" id="tab3_view" style="display: none">
           <section class="bg-light">
         <div class="container">
         <div class="row space-bottom-xxl">
             <div class="col-sm-24">
                 <h1 class="space-top-lg">Frequently Asked Questions</h1>
                 <div class="text-heading text-lg">How much will I earn?</div>
                 <p>
                     When you refer a visitor to JobLane, you will be paid for purchases made
                     within 90 days after the referred  visitor registers/enquiries with JobLane
                     <ul class="list-symbol-none">
                         <li>
                             By referring a candidate who registers and purchases with us, you earn 100% commission
                             on each purchase made. Candidate purchases include premium account & cv writing.
                         </li>
                         <li>
                             By referring an employer who purchases a recruiting
                             package with us, you earn 50% commission on each purchase made. Employer purchases include
                             job postings & cv database search.
                         </li>
                     </ul>
                 </p>
                 <div class="text-heading text-lg">When will I get paid?</div>
                 <p>Commissions are paid on a quarterly basis to the Affiliate Program members.</p>
                 <div class="text-heading text-lg">Which jobs are available for listing on my site?</div>
                 <p>
                     JobLane carries only professional vacancies, typically with multinational
                     companies or reputable regional firms. You can choose to carry any sub-set of these
                     jobs on your site. The specific options include:
                     <ul>
                         <li>List of all jobs in Middle East countries</li>
                         <li>List of all jobs in a specific country, function or industry</li>
                         <li>Search box, with ability to search the full database of vacancies</li>
                     </ul>
                 </p>
                 <div class="text-heading text-lg">How can I monitor my results?</div>
                 <p>
                     You will be provided with a username and password to an online panel, through
                     which you can check your purchases, commission earnings and account balance at any time.
                 </p>
                 <div class="text-heading text-lg">
                     I have some more questions about the Program, can I speak to someone directly about them?
                 </div>
                 <p>
                     Yes, the team at jo will be happy to talk to you in person about your options.
                     <br />You can call us on +971 4 278 5200 or fill in a
                     <a onclick="modalOpen('contactus_affiliates_modal')">contact form.</a>
                 </p>
             </div>
             <div class="col-sm-6 col-sm-offset-9">
                 <div class="btn btn-lg btn-block btn-section space-top-xxl space-bottom-xl"  onclick="modalOpen('register_affiliates_modal')">
                     Register Now
                 </div>
             </div>
         </div>
         </div>
         </section>
       </section>

   </div>
   <section class="floating-widget-container affix-left center hidden-print">
      <ul class="list-social list-unstyled space-all-none">
         <li class="social-legend text-sm space-all-none">
            Share page
         </li>
         <li class="space-all-none">
            <a gt-share="facebook"
               gt-share-url=""
               title="Share via Facebook"
               class="bg-brand-facebook">
            <i class="fa fa-facebook"></i>
            </a>
         </li>
         <li class="space-all-none">
            <a gt-share="googleplus"
               gt-share-url=""
               title="Share via Google+"
               class="bg-brand-google-plus">
            <i class="fa fa-google-plus"></i>
            </a>
         </li>
         <li class="space-all-none">
            <a>
            <i class="fa fa-twitter"></i>
            </a>
         </li>
         <li class="space-all-none">
            <a>
            <i class="fa fa-linkedin"></i>
            </a>
         </li>
         <li class="space-all-none">
            <a>
            <i class="fa fa-facebook-messenger"></i>
            </a>
         </li>
         <li class="space-all-none">
            <a>
            <i class="fa fa-envelope" title="Share via Email"></i>
            </a>
         </li>
      </ul>
   </section>
</main>

<div id="contactus_affiliates_modal" class="w3-modal">
  <div class="modal-dialog" style="margin-top: 56px;">
      <div class="modal-content">
          <div class="modal-header ng-scope">
              <h3 class="modal-title">
                  Contact GulfTalent
              </h3>
              <button class="close" onclick="modalClose('contactus_affiliates_modal')"><i class="fa fa-remove"></i></button>
          </div>
          <div class="modal-body">
              <form class="form-horizontal">
                  <div class="form-group">
                    <label class="col-sm-7 control-label required" for="contact_us_name">
                      Your Name
                      <span class="text-primary">*</span>
                    </label>
                    <div class="col-sm-14">
                      <input type="text" id="contact_us_name" name="name" required="required" class="col-sm-24 form-control-required">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-7 control-label required" for="contact_us_email">
                      Your Email
                      <span class="text-primary">*</span>
                    </label>
                    <div class="col-sm-14">
                      <input type="email" id="contact_us_email" name="email" required="required" class="col-sm-24 form-control-required">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-7 control-label required" for="contact_us_type">
                      Type of enquiry
                      <span class="text-primary">*</span>
                    </label>
                    <div class="col-sm-14">
                      <select id="contact_us_type" name="type" required="required" class="col-sm-24 form-control-required">
                        <option value="" disabled="disabled" selected="selected">Select</option>
                        <option value="problems">Problems with the site</option>
                        <option value="feedback">Feedback &amp; Suggestions</option>
                        <option value="other">Other</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-7 control-label required" for="contact_us_subject">
                      Subject
                      <span class="text-primary">*</span>
                    </label>
                    <div class="col-sm-14">
                      <input type="text" id="contact_us_subject" name="subject" required="required" class="col-sm-24 form-control-required">
                    </div>
                  </div>
                  <div class="form-group space-bottom-base">
                    <label class="col-sm-7 control-label required" for="contact_us_message">
                      Message
                      <span class="text-primary">*</span>
                    </label>
                    <div class="col-sm-14">
                      <textarea id="contact_us_message" name="message" required="required" class="col-sm-24 form-control-required" rows="8" placeholder="Questions, comments or feedback on our service."></textarea>
                    </div>
                  </div>
                  <div class="form-group space-bottom-base">
                    <div class="col-sm-offset-7 col-sm-10">
                      <button type="submit" value="submit" class="btn btn-secondary btn-section btn-lg btn-block">Submit</button>
                    </div>
                  </div>
              </form>
          </div>
      </div>
  </div>
</div>
<div id="register_affiliates_modal" class="w3-modal">
  <div class="modal-dialog" style="">
      <div class="modal-content" ng-transclude="">
          <div class="modal-header ng-scope">
              <h2 class="modal-title">
                  Sign up as an Affiliate
              </h2>
              <button onclick="modalClose('register_affiliates_modal')" class="close"><i class="fa fa-remove"></i></button>
          </div>
          <div class="modal-body ng-scope">
              <div>
                <form class="form-horizontal">
                  <div class="form-group">
                    <label class="col-sm-7 control-label required" for="user_firstname">
                      First name
                      <span class="text-primary">*</span>
                    </label>
                    <div class="col-sm-12">
                        <input type="text" id="user_firstname" name="firstname" required="required" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-7 control-label required" for="user_lastname">
                      Surname
                      <span class="text-primary">*</span>
                    </label>
                    <div class="col-sm-12">
                        <input type="text" id="user_lastname" name="lastname" required="required" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-7 control-label required" for="user_username">
                      Email
                      <span class="text-primary">*</span>
                    </label>
                    <div class="col-sm-12">
                        <input type="text" id="user_username" name="username" required="required" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-7 control-label required" for="user_confirm_username">
                      Confirm email
                      <span class="text-primary">*</span>
                    </label>
                    <div class="col-sm-12">
                      <input type="text" id="user_confirm_username" name="confirm_username" required="required" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-7 control-label required" for="user_contact_number">
                      Contact number
                      <span class="text-primary">*</span>
                    </label>
                    <div class="col-sm-12">
                        <input type="text" id="user_contact_number" name="contact_number" required="required" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-7 control-label required" for="user_partner_name">
                      Organisation/Site owner
                      <span class="text-primary">*</span>
                    </label>
                    <div class="col-sm-12">
                        <input type="text" id="user_partner_name" name="partnername" required="required" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-7 control-label required" for="user_partner_website">
                      Website
                      <span class="text-primary">*</span>
                    </label>
                    <div class="col-sm-12">
                        <input type="text" id="user_partner_website" name="partnerwebsite" required="required" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-6 col-sm-offset-1 control-label required" for="user_partner_approximate_traffic">
                      Approximate monthly visitors
                      <span class="text-primary">*</span>
                    </label>
                    <div class="col-sm-12 space-top-xs">
                      <select id="user_partner_approximate_traffic" name="approximate_traffic" required="required" class="form-control">
                        <option value="< 1000" selected="selected">Less than 1,000</option>
                        <option value="1000-10000">Between 1,000 and 10k</option>
                        <option value="10000-50000">Between 10k and 50k</option>
                        <option value="> 50000">More than 50k</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-7 control-label required" for="user_jobposition">
                      Position in organisation
                      <span class="text-primary">*</span>
                    </label>
                    <div class="col-sm-12">
                      <input type="text" id="user_jobposition" name="jobposition" required="required" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-7 control-label required" for="user_preferredlinking">
                      Comments &amp; preferred linking options
                      <span class="text-primary">*</span>
                    </label>
                    <div class="col-sm-12">
                      <textarea id="user_preferredlinking" name="preferredlinking" required="required" class="form-control" rows="4"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-7 col-sm-12">
                        <input type="checkbox" id="user_partner_terms_and_conditions" name="terms_and_conditions" required="required" value="1">
                        <span>
                          I have read and agree to
                          <a href="/affiliates/terms-and-conditions" target="_blank">
                            terms and conditions
                          </a>
                        </span>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-9">
                      <button type="submit" class="btn btn-section btn-block">Register</button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="text-center" style="display: none;">
                  <p class="text-success text-med text-center">
                    <strong>Thank you for your interest in GulfTalent Affiliate Program.</strong>
                  </p>
                  <p>
                    Your application will be reviewed and we will get back to you shortly.
                  </p>
              </div>
              <div style="display: none;">
                <p class="text-danger text-med text-center">
                  <strong>An error occured while sending your application for Affiliate Program! Please Try Again</strong>
                </p>
              </div>
          </div>
      </div>
  </div>
</div>
<?php include('../footer.php'); ?>
