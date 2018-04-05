<?php include('../header.php'); ?>
<main id="main-block">
   <div class="page-header">
      <div class="container">
         <div class="row">
           <div class="col-sm-24">
              <h1>Free CV Review</h1>
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
                                 Free CV review
                              </h1>
                              <h2 class="text-med text-regular space-top-xs">
                                 GulfTalent has partnered with "TopCV" to bring you a one-time expert CV evaluation for free.
                              </h2>
                           </div>
                           <div class="col-xs-6">
                              <img src="<?php echo $base_url; ?>assets\images1\logos\topcv_logoa95c.png" alt="TopCV" title="TopCV" class="img-responsive pull-right">
                           </div>
                        </div>
                      </div>
                    </div>
                    <h4 class="space-top-sm header-ribbon">What you get</h4>
                    <div class="panel-body">
                      <ul class="list-symbol-bullet list-symbol-section text-base text-regular">
                          <li>Feedback from a professional CV evaluator</li>
                          <li>Constructive commentary on your CV's content and depth</li>
                          <li>Advice on how you can improve your CV</li>
                          <li>Feedback on your CV's digital readiness</li>
                      </ul>
                    </div>
                    <h4 class="space-top-sm header-ribbon">What is next</h4>
                    <div class="panel-body">
                       <img class="space-left-sm img-responsive" src="<?php echo $base_url; ?>assets\images1\cv_review_processa95c.png">
                       <br>
                       <div class="checkbox">
                         <label>
                         <input type="checkbox" value="1">
                         I understand that <a href="#">my online CV</a>
                         and Email address will be sent to "TopCV" for a free review
                         </label>
                       </div>
                       <div class="row space-top-lg">
                          <div class="col-sm-12 col-sm-offset-6">
                             <a class="btn btn-primary btn-block btn-lg" target="_blank" href="#">
                            Request a Free CV Review now
                             </a>
                          </div>
                       </div>
                    </div>
                    <div class="list-group">
                       <a class="list-group-item" href="<?php echo $base_url;?>resources/job-search-support.php">
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
                       <a class="list-group-item" href="<?php echo $base_url;?>register/online_cv.php">
                          <div class="media">
                             <div class="media-object pull-left">
                                <i class="fa fa-fw fa-chevron-right"></i>
                             </div>
                             <div class="media-body">
                                <div class="text-medium text-overflow text-section">Free CV Builder</div>
                             </div>
                          </div>
                       </a>
                       <a class="list-group-item" href="<?php echo $base_url;?>resources/public-career-fairs.php">
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
