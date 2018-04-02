<?php include('../header.php'); ?>
<main id="main-block">
   <div class="page-header">
      <div class="container">
         <div class="row">
           <div class="col-sm-24">
              <h1>Free CV Writing</h1>
           </div>
         </div>
      </div>
   </div>
   <div class="">
      <section class="bg-dark">
        <div class="page-content">
          <div class="container">
             <div class="row">
              <div class="col-sm-16 reset-width">
                 <div class="panel panel-default">
                    <div class="panel-heading">
                      <div class="panel-heading">
                        <div class="row">
                           <div class="col-xs-18">
                              <h1 class="panel-title">
                                 CV Writing Services
                              </h1>
                              <h2 class="text-med text-regular space-top-xs">
                                 By "TopCV"
                              </h2>
                           </div>
                           <div class="col-xs-6">
                              <img src="<?php echo $base_url; ?>assets\images1\logos\topcv_logoa95c.png" alt="TopCV" title="TopCV" class="img-responsive pull-right">
                           </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel-body">
                        <p>An employer spends an average of <strong>30 seconds</strong> on a CV. Make sure you show your best!</p>
                        <p>With a professionally written CV, you can double your chances of getting an interview call.</p>
                        <p>
                            GulfTalent has partnered with “TopCV” to help you write a professional CV and boost your job search.
                            Most CV Writing services simply recycle your existing CV, but with “TopCV” you will receive a document that has
                            been comprehensively rewritten, reformatted, and keyword optimised.
                        </p>
                    </div>
                    <h4 class="space-top-sm header-ribbon">How it works</h4>
                    <div class="panel-body">
                       <img class="space-left-sm img-responsive" src="<?php echo $base_url; ?>assets\images1\cv_writing_processa95c.png">
                       <div class="row space-top-lg">
                          <div class="col-sm-12 col-sm-offset-6">
                             <a class="btn btn-primary btn-block btn-lg" target="_blank" href="#">
                             Select your CV Writing package
                             </a>
                          </div>
                       </div>
                    </div>
                    <div class="list-group">
                       <a class="list-group-item" href="<?php echo $base_url; ?>resources/job-search-support.php">
                       <i class="fa fa-fw fa-chevron-right"></i>
                       Back to Job Search Support
                       </a>
                    </div>
                 </div>
              </div>
              <div class="col-sm-8 hidden-print">
                 <div class="panel panel-default">
                    <div class="panel-body panel-body-ad">
                       <div style="width: 300px; height: 240px;" >
                         <a href="#">
                           <img src="<?php echo $base_url; ?>assets/img/cv.png" width="300px" height="230px">
                         </a>
                       </div>
                    </div>
                 </div>
                 <div class="panel-heading">
                    <div class="text-heading panel-title s-panel-title text-capitalize">Other Career Resources</div>
                 </div>
                 <div class="panel panel-default">
                    <div class="list-group">
                       <a class="list-group-item" href="#">
                          <div class="media">
                             <div class="media-object pull-left">
                                <i class="fa fa-fw fa-chevron-right"></i>
                             </div>
                             <div class="media-body">
                                <div class="text-medium text-overflow text-section">Free CV Builder</div>
                             </div>
                          </div>
                       </a>
                       <a class="list-group-item" href="#">
                          <div class="media">
                             <div class="media-object pull-left">
                                <i class="fa fa-fw fa-chevron-right"></i>
                             </div>
                             <div class="media-body">
                                <div class="text-medium text-overflow text-section">Public Career Fairs </div>
                             </div>
                          </div>
                       </a>
                    </div>
                 </div>
              </div>
           </div>
          </div>
        </div>
      </section>
   </div>
   <section>
      <div class="fade"></div>
      <div class="feedback-btn-container affix-bottom affix-right space-right-base">
         <div class="text-right">
            <button class="btn btn-default btn-secondary" id="feedback">
              Feedback
              <i class="fa fa-fw"></i>
            </button>
         </div>
         <div class="panel panel-default space-bottom-none" gt-collapse="isWidgetCollapsed" collapse="isCollapsed" id="feedback">
            <div class="panel-heading">
               <h3 class="panel-title">Tell us your feedback</h3>
            </div>
            <div class="panel-body">
               <form class="form-horizontal" role="form">
                  <div class="form-group">
                     <div class="col-sm-20 col-sm-offset-2">
                        <input type="text" id="contact_us_name" name="contact_us[name]" required="required" class="form-control" message="Please enter name!" placeholder="Your Name" />
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="col-sm-20 col-sm-offset-2">
                        <input type="email" id="contact_us_email" name="contact_us[email]" required="required"    class="form-control" message="Please enter a valid Email Address!" placeholder="Your Email Address" />
                     </div>
                  </div>
                  <div class="form-group space-bottom-base">
                     <div class="col-sm-20 col-sm-offset-2">
                        <textarea id="contact_us_message" name="contact_us[message]" required="required"    class="form-control" rows="8"  placeholder="Your comments/suggestions on the site"></textarea>
                     </div>
                  </div>
                  <div class="form-group space-bottom-base">
                     <div class="col-sm-offset-7 col-sm-10">
                        <button type="submit" value="submit" class="btn btn-secondary btn-lg btn-block">
                          Submit
                        </button>
                     </div>
                  </div>
               </form>
            </div>
            <div class="panel-body">
               <strong class="text-success">
                 Thank you for your Feedback.
               </strong>
               <strong class="text-danger">
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
            <a title="Share via Facebook" class="bg-brand-facebook">
              <i class="fa fa-facebook"></i>
            </a>
         </li>
         <li class="space-all-none">
            <a title="Share via Google+" class="bg-brand-google-plus">
              <i class="fa fa-google-plus"></i>
            </a>
         </li>
         <li class="space-all-none">
            <a title="Share via Twitter" class="bg-brand-twitter">
              <i class="fa fa-twitter"></i>
            </a>
         </li>
         <li class="space-all-none">
            <a title="Share via LinkedIn" class="bg-brand-linkedin">
              <i class="fa fa-linkedin"></i>
            </a>
         </li>
         <li class="space-all-none">
            <a title="Share via Facebook Messenger" class="bg-brand-messenger">
              <i class="fa fa-facebook-messenger"></i>
            </a>
         </li>
         <li class="space-all-none">
            <a class="bg-brand-envelope">
              <i class="fa fa-envelope" title="Share via Email"></i>
            </a>
         </li>
      </ul>
   </section>
</main>
<!-- Google Code for Remarketing Tag -->
<script type="text/javascript">
   var google_conversion_id = 1071034449;
   var google_custom_params = window.google_tag_params;
   var google_remarketing_only = true;
</script>
<script type="text/javascript" async="true" src="../www.googleadservices.com/pagead/f.txt"></script>
<noscript>
   <div style="display:inline;">
      <img height="1" width="1" style="border-style:none;" alt="" src="http://googleads.g.doubleclick.net/pagead/viewthroughconversion/1071034449/?value=0&amp;guid=ON&amp;script=0"/>
   </div>
</noscript>
<?php include('../footer.php') ;?>
