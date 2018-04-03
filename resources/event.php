<?php include('../header.php'); ?>

<main id="main-block">
   <div class="page-header">
      <div class="container">
         <div class="row">
            <div class="col-sm-24">
               <h1 class="text-center">Professional Events in the Middle East</h1>
               <form class="text-center form-inline space-bottom-xs hidden-print">
                  <div class="form-group form-group-xl">
                     <input type="text"
                        autocomplete="off"
                        placeholder="Enter job title or keywords"
                        name="pos_ref"
                        class="form-control input-lg input-blk" />
                  </div>
                  <button type="submit" class="btn btn-lg btn-primary btn-corner">
                  Job Search
                  </button>
               </form>
            </div>
         </div>
      </div>
   </div>
   <div class="page-content">

      <section class="bg-light">
         <div class="container">
            <div class="row">
               <div class="col-sm-24 space-bottom-xl">
                  <h1 class="text-center space-bottom-xl space-top-xl">
                     Find events in your field
                  </h1>
               </div>
            </div>
         </div>
      </section>
      <section class="bg-dark">
         <div class="container">
            <div class="row">
               <div class="col-sm-24 space-bottom-xl">
                  <h1 class="text-center space-bottom-xl space-top-xl">
                     Select events by country
                  </h1>
               </div>
            </div>
         </div>
      </section>
      <section class="bg-light">
         <div class="container">
            <div class="row">
               <div class="col-sm-24 space-bottom-none">
                  <h1 class="text-center space-bottom-xl space-top-xl">
                     Top organisers currently listing events
                  </h1>
                  <div class="row space-bottom-xl">
                     <div class="col-sm-6">
                        <img src="<?php echo $base_url;?>assets/img/logo/nestle.png" style="max-width: 200px; max-height: 80px;" />
                     </div>
                     <div class="col-sm-6">
                        <img src="<?php echo $base_url;?>assets/img/logo/atkins.jpg" style="max-width: 200px; max-height: 80px;" />
                     </div>
                     <div class="col-sm-6">
                        <img src="<?php echo $base_url;?>assets/img/logo/aishaya.png" style="max-width: 200px; max-height: 80px;" />
                     </div>
                     <div class="col-sm-6">
                        <img src="<?php echo $base_url;?>assets/img/logo/arcadis.jpg" style="max-width: 200px; max-height: 80px;" />
                     </div>

                  </div>
                  <p class="text-center text-lg text-heading text-secondary">
                     <a href="<?php echo $base_url; ?>otherservices/event_organizer.php" class="space-left-sm btn btn-lg btn-section">List your events</a>
                  </p>
               </div>
            </div>
         </div>
      </section>
   </div>
   <section ng-controller="widgetFeedbackController">
      <div class="fade"></div>
      <div class="feedback-btn-container affix-bottom affix-right space-right-base" ng-cloak>
         <div class="text-right">
            <button ng-click="isWidgetCollapsed=!isWidgetCollapsed"
               class="btn btn-default btn-secondary"
               id="feedback">
            Feedback
            <i class="fa fa-fw"
               ng-class="{
               'fa-angle-up': isWidgetCollapsed,
               'fa-angle-down': !isWidgetCollapsed
               }"></i>
            </button>
         </div>
         <div class="panel panel-default space-bottom-none"
            gt-collapse="isWidgetCollapsed"
            collapse="isCollapsed"
            id="feedback">
            <div class="panel-heading" ng-hide="formSubmitted">
               <h3 class="panel-title">Tell us your feedback</h3>
            </div>
            <div class="panel-body" ng-hide="formSubmitted">
               <form class="form-horizontal" role="form" novalidate name="contact-us-form"
                  gt-validate
                  gt-submit="submit()">
                  <div class="form-group">
                     <div class="col-sm-20 col-sm-offset-2">
                        <input type="text" id="contact_us_name" name="contact_us[name]" required="required"    class="form-control" ng-model="form.name" gt-model-value="" message="Please enter name!" placeholder="Your Name" />
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="col-sm-20 col-sm-offset-2">
                        <input type="email" id="contact_us_email" name="contact_us[email]" required="required"    class="form-control" ng-model="form.email" gt-model-value="" message="Please enter a valid Email Address!" placeholder="Your Email Address" />
                     </div>
                  </div>
                  <div class="form-group space-bottom-base">
                     <div class="col-sm-20 col-sm-offset-2">
                        <textarea id="contact_us_message" name="contact_us[message]" required="required"    class="form-control" rows="8" ng-model="form.message" placeholder="Your comments/suggestions on the site"></textarea>
                     </div>
                  </div>
                  <div class="form-group space-bottom-base">
                     <div class="col-sm-offset-7 col-sm-10">
                        <button type="submit"
                           value="submit"
                           class="btn btn-secondary btn-lg btn-block">
                        Submit
                        </button>
                     </div>
                  </div>
                  <input type="hidden"
                     value="Feedback"
                     ng-model="form.subject"
                     gt-model-value="" />
                  <input type="hidden"
                     value="feedback"
                     ng-model="form.type"
                     gt-model-value="" />
               </form>
            </div>
            <div class="panel-body" ng-show="formSubmitted">
               <strong class="text-success" ng-show="successFlag">
               Thank you for your Feedback.
               </strong>
               <strong class="text-danger" ng-hide="successFlag">
               Something went wrong. Please try again.
               </strong>
            </div>
         </div>
      </div>
   </section>
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
            <a gt-share="twitter"
               gt-share-url=""
               title="Share via Twitter"
               class="bg-brand-twitter">
            <i class="fa fa-twitter"></i>
            </a>
         </li>
         <li class="space-all-none">
            <a gt-share="linkedin"
               gt-share-url=""
               title="Share via LinkedIn"
               class="bg-brand-linkedin">
            <i class="fa fa-linkedin"></i>
            </a>
         </li>
         <li class="space-all-none">
            <a gt-share="messenger"
               gt-share-url=""
               title="Share via Facebook Messenger"
               class="bg-brand-messenger">
            <i class="fa fa-facebook-messenger"></i>
            </a>
         </li>
         <li class="space-all-none">
            <a gt-refer-form
               refer-type="MiscPages"
               refer-label=""
               refer-url=""
               refer-generated-from=""
               refer-description="[]"
               refer-heading="Email this page to a friend"
               class="bg-brand-envelope">
            <i class="fa fa-envelope" title="Share via Email"></i>
            </a>
         </li>
      </ul>
   </section>
</main>

<?php include('../footer.php'); ?>
