<?php include('../header.php'); ?>
<div class="visible-print-block">
   <div class="container">
      <div class="underline">
         <div class="row">
            <div class="col-sm-24">
               <img src="assets/img/logoa95c.png?v2_68_0" alt="GulfTalent" title="GulfTalent" width="160" class="pull-right img-logo" />
            </div>
         </div>
      </div>
   </div>
</div>
<main id="main-block">
   <div class="page-header">
      <div class="container">
         <div class="row">
           <div class="col-sm-24">
              <h1>Training Courses by Field</h1>
              <h3 class="s_headingjobs s_headingjobs_lg">Find professional training courses in the field of your choice</h3>
           </div>
         </div>
      </div>
   </div>
   <div class="">
      <section class="section-primary-bg hidden">
         <div id="flash-messages-persistent">
            <div class="container">
               <div class="row">
                  <div class="col-sm-24">
                     <div class="alert fade container-xs-height container-block space-bottom-sm">
                        <div class="col-xs-height col-middle pull-left">
                           <div class="media container-xs-height">
                              <div class="media-object col-xs-height col-middle">
                                 <i class="fa fa-fw"></i>
                              </div>
                              <div class="media-body col-xs-height col-middle text-xl">
                                 {{ flashMessage.message }}
                                 <a>
                                 {{ flashMessage.linkText }}
                                 </a>
                                 <a>
                                 {{ flashMessage.linkText }}
                                 </a>
                                 <a>
                                 {{ flashMessage.linkText }}
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div class="col-xs-height col-middle">
                           <button type="button" class="close">
                           <span aria-hidden="true">&times;</span>
                           <span class="sr-only">Close</span>
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="flashmessage">
            <div class="container">
               <div class="row">
                  <div class="col-sm-24">
                     <div class="alert fade container-xs-height container-block space-bottom-sm">
                        <div class="col-xs-height col-middle pull-left">
                           <div class="media container-xs-height">
                              <div class="media-object col-xs-height col-middle">
                                 <i class="fa fa-fw"></i>
                              </div>
                              <div class="media-body col-xs-height col-middle text-xl">
                                 {{ flashMessage.message }}
                                 <a>
                                 {{ flashMessage.linkText }}
                                 </a>
                                 <a>
                                 {{ flashMessage.linkText }}
                                 </a>
                                 <a>
                                 {{ flashMessage.linkText }}
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div class="col-xs-height col-middle">
                           <button type="button" class="close">
                             <span aria-hidden="true">&times;</span>
                             <span class="sr-only">Close</span>
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="bg-light">
         <div class="container">
            <div class="row">
               <div class="col-sm-24 space-bottom-xl">
                  <h2 class="space-top-xl space-bottom-xl">
                     Find courses in your field
                  </h1>
                  <div class="row">
                     <div class="col-sm-6">
                        <div class="panel panel-default panel-hover panel-bordered">
                           <a href="<?php echo $base_url; ?>courses/course_category.php" title="IT &amp; Telecom" class="panel-body">
                              <div class="media container-xs-height media-height-sm">
                                 <div class="media-object pull-left">
                                    <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                       <i class="fa  fa-computer-network"></i>
                                    </div>
                                 </div>
                                 <div class="media-body col-xs-height col-middle">
                                    <h4 class="space-bottom-none text-link">IT &amp; Telecom</h4>
                                    <span class="text-sm text-supermuted">
                                    (1,198)
                                    </span>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="panel panel-default panel-hover panel-bordered">
                           <a href="<?php echo $base_url; ?>courses/course_category.php" title="Personal Development" class="panel-body">
                              <div class="media container-xs-height media-height-sm">
                                 <div class="media-object pull-left">
                                    <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                       <i class="fa  fa-trend-straight"></i>
                                    </div>
                                 </div>
                                 <div class="media-body col-xs-height col-middle">
                                    <h4 class="space-bottom-none text-link">Personal Development</h4>
                                    <span class="text-sm text-supermuted">
                                    (704)
                                    </span>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="panel panel-default panel-hover panel-bordered ">
                           <a href="<?php echo $base_url; ?>courses/course_category.php" title="Business &amp; MBA" class="panel-body">
                              <div class="media container-xs-height media-height-sm">
                                 <div class="media-object pull-left">
                                    <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                       <i class="fa  fa-suited-man"></i>
                                    </div>
                                 </div>
                                 <div class="media-body col-xs-height col-middle">
                                    <h4 class="space-bottom-none text-link">Business &amp; MBA</h4>
                                    <span class="text-sm text-supermuted">
                                    (420)
                                    </span>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="panel panel-default panel-hover
                           panel-bordered
                           ">
                           <a href="<?php echo $base_url; ?>courses/course_category.php" title="Finance &amp; Banking" class="panel-body">
                              <div class="media container-xs-height media-height-sm">
                                 <div class="media-object pull-left">
                                    <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                       <i class="fa  fa-dollar"></i>
                                    </div>
                                 </div>
                                 <div class="media-body col-xs-height col-middle">
                                    <h4 class="space-bottom-none text-link">Finance &amp; Banking</h4>
                                    <span class="text-sm text-supermuted">
                                    (362)
                                    </span>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-6">
                        <div class="panel panel-default panel-hover panel-bordered">
                           <a href="<?php echo $base_url; ?>courses/course_category.php" title="HR" class="panel-body">
                              <div class="media container-xs-height media-height-sm">
                                 <div class="media-object pull-left">
                                    <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                       <i class="fa  fa-cv"></i>
                                    </div>
                                 </div>
                                 <div class="media-body col-xs-height col-middle">
                                    <h4 class="space-bottom-none text-link">HR</h4>
                                    <span class="text-sm text-supermuted">
                                    (255)
                                    </span>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="panel panel-default panel-hover panel-bordered">
                           <a href="<?php echo $base_url; ?>courses/course_category.php" title="Project Management" class="panel-body">
                              <div class="media container-xs-height media-height-sm">
                                 <div class="media-object pull-left">
                                    <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                       <i class="fa  fa-test-paper"></i>
                                    </div>
                                 </div>
                                 <div class="media-body col-xs-height col-middle">
                                    <h4 class="space-bottom-none text-link">Project Management</h4>
                                    <span class="text-sm text-supermuted">
                                    (216)
                                    </span>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="panel panel-default panel-hover
                           panel-bordered
                           ">
                           <a href="<?php echo $base_url; ?>courses/course_category.php" title="Marketing &amp; PR" class="panel-body">
                              <div class="media container-xs-height media-height-sm">
                                 <div class="media-object pull-left">
                                    <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                       <i class="fa  fa-loud-speaker"></i>
                                    </div>
                                 </div>
                                 <div class="media-body col-xs-height col-middle">
                                    <h4 class="space-bottom-none text-link">Marketing &amp; PR</h4>
                                    <span class="text-sm text-supermuted ">
                                    (169)
                                    </span>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="panel panel-default panel-hover panel-bordered">
                           <a href="<?php echo $base_url; ?>courses/course_category.php" title="Healthcare" class="panel-body">
                              <div class="media container-xs-height media-height-sm">
                                 <div class="media-object pull-left">
                                    <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                       <i class="fa  fa-first-aid-box"></i>
                                    </div>
                                 </div>
                                 <div class="media-body col-xs-height col-middle">
                                    <h4 class="space-bottom-none text-link">Healthcare</h4>
                                    <span class="text-sm text-supermuted">
                                    (156)
                                    </span>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-6">
                        <div class="panel panel-default panel-hover panel-bordered">
                           <a href="<?php echo $base_url; ?>courses/course_category.php" title="Logistics" class="panel-body">
                              <div class="media container-xs-height media-height-sm">
                                 <div class="media-object pull-left">
                                    <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                       <i class="fa  fa-delivery-cart"></i>
                                    </div>
                                 </div>
                                 <div class="media-body col-xs-height col-middle">
                                    <h4 class="space-bottom-none text-link">Logistics</h4>
                                    <span class="text-sm text-supermuted">
                                    (134)
                                    </span>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="panel panel-default panel-hover panel-bordered">
                           <a href="<?php echo $base_url; ?>courses/course_category.php" title="Customer Service" class="panel-body">
                              <div class="media container-xs-height media-height-sm">
                                 <div class="media-object pull-left">
                                    <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                       <i class="fa  fa-headphones"></i>
                                    </div>
                                 </div>
                                 <div class="media-body col-xs-height col-middle">
                                    <h4 class="space-bottom-none text-link">Customer Service</h4>
                                    <span class="text-sm text-supermuted ">
                                    (96)
                                    </span>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="panel panel-default panel-hover panel-bordered ">
                           <a href="<?php echo $base_url; ?>courses/course_category.php" title="Administration" class="panel-body">
                              <div class="media container-xs-height media-height-sm">
                                 <div class="media-object pull-left">
                                    <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                       <i class="fa  fa-key"></i>
                                    </div>
                                 </div>
                                 <div class="media-body col-xs-height col-middle">
                                    <h4 class="space-bottom-none text-link">Administration</h4>
                                    <span class="text-sm text-supermuted">
                                    (93)
                                    </span>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="panel panel-default panel-hover panel-bordered">
                           <a href="<?php echo $base_url; ?>courses/course_category.php" title="Education" class="panel-body">
                              <div class="media container-xs-height media-height-sm">
                                 <div class="media-object pull-left">
                                    <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                       <i class="fa  fa-teacher"></i>
                                    </div>
                                 </div>
                                 <div class="media-body col-xs-height col-middle">
                                    <h4 class="space-bottom-none text-link">Education</h4>
                                    <span class="text-sm text-supermuted ">
                                    (91)
                                    </span>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-6">
                        <div class="panel panel-default panel-hover panel-bordered ">
                           <a href="<?php echo $base_url; ?>courses/course_category.php" title="Engineering" class="panel-body">
                              <div class="media container-xs-height
                                 media-height-sm">
                                 <div class="media-object pull-left">
                                    <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                       <i class="fa  fa-gears"></i>
                                    </div>
                                 </div>
                                 <div class="media-body col-xs-height col-middle">
                                    <h4 class="space-bottom-none text-link">Engineering</h4>
                                    <span class="text-sm text-supermuted">
                                    (85)
                                    </span>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="panel panel-default panel-hover panel-bordered ">
                           <a href="<?php echo $base_url; ?>courses/course_category.php" title="Quality Management" class="panel-body">
                              <div class="media container-xs-height media-height-sm">
                                 <div class="media-object pull-left">
                                    <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                       <i class="fa  fa-handshake"></i>
                                    </div>
                                 </div>
                                 <div class="media-body col-xs-height col-middle">
                                    <h4 class="space-bottom-none text-link">Quality Management</h4>
                                    <span class="text-sm text-supermuted ">
                                    (74)
                                    </span>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="panel panel-default panel-hover panel-bordered ">
                           <a href="<?php echo $base_url; ?>courses/course_category.php" title="Sales" class="panel-body">
                              <div class="media container-xs-height media-height-sm">
                                 <div class="media-object pull-left">
                                    <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                       <i class="fa  fa-salesman"></i>
                                    </div>
                                 </div>
                                 <div class="media-body col-xs-height col-middle">
                                    <h4 class="space-bottom-none text-link">Sales</h4>
                                    <span class="text-sm text-supermuted ">
                                    (56)
                                    </span>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="panel panel-default panel-hover panel-bordered ">
                           <a href="<?php echo $base_url; ?>courses/course_category.php" title="Contracts Management" class="panel-body">
                              <div class="media container-xs-height media-height-sm">
                                 <div class="media-object pull-left">
                                    <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                       <i class="fa  fa-clipboard"></i>
                                    </div>
                                 </div>
                                 <div class="media-body col-xs-height col-middle">
                                    <h4 class="space-bottom-none text-link">Contracts Management</h4>
                                    <span class="text-sm text-supermuted ">
                                    (44)
                                    </span>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-6">
                        <div class="panel panel-default panel-hover panel-bordered ">
                           <a href="<?php echo $base_url; ?>courses/course_category.php" title="Media" class="panel-body">
                              <div class="media container-xs-height media-height-sm">
                                 <div class="media-object pull-left">
                                    <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                       <i class="fa  fa-television"></i>
                                    </div>
                                 </div>
                                 <div class="media-body col-xs-height col-middle">
                                    <h4 class="space-bottom-none text-link">Media</h4>
                                    <span class="text-sm text-supermuted ">
                                    (37)
                                    </span>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="panel panel-default panel-hover panel-bordered ">
                           <a href="<?php echo $base_url; ?>courses/course_category.php" title="HSE" class="panel-body">
                              <div class="media container-xs-height media-height-sm">
                                 <div class="media-object pull-left">
                                    <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                       <i class="fa  fa-safety-boots"></i>
                                    </div>
                                 </div>
                                 <div class="media-body col-xs-height col-middle">
                                    <h4 class="space-bottom-none text-link">HSE</h4>
                                    <span class="text-sm text-supermuted ">
                                    (16)
                                    </span>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="panel panel-default panel-hover panel-bordered ">
                           <a href="<?php echo $base_url; ?>courses/course_category.php" title="Oil &amp; Gas" class="panel-body">
                              <div class="media container-xs-height media-height-sm">
                                 <div class="media-object pull-left">
                                    <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                       <i class="fa  fa-petrol-pump"></i>
                                    </div>
                                 </div>
                                 <div class="media-body col-xs-height col-middle">
                                    <h4 class="space-bottom-none text-link">Oil &amp; Gas</h4>
                                    <span class="text-sm text-supermuted ">
                                    (14)
                                    </span>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="panel panel-default panel-hover panel-bordered ">
                           <a href="<?php echo $base_url; ?>courses/course_category.php" title="Real Estate" class="panel-body">
                              <div class="media container-xs-height media-height-sm">
                                 <div class="media-object pull-left">
                                    <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                       <i class="fa  fa-house"></i>
                                    </div>
                                 </div>
                                 <div class="media-body col-xs-height col-middle">
                                    <h4 class="space-bottom-none text-link">Real Estate</h4>
                                    <span class="text-sm text-supermuted ">
                                    (7)
                                    </span>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-6">
                        <div class="panel panel-default panel-hover panel-bordered ">
                           <a href="<?php echo $base_url; ?>courses/course_category.php" title="Language" class="panel-body">
                              <div class="media container-xs-height media-height-sm">
                                 <div class="media-object pull-left">
                                    <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                       <i class="fa  fa-chat-bubbles"></i>
                                    </div>
                                 </div>
                                 <div class="media-body col-xs-height col-middle">
                                    <h4 class="space-bottom-none text-link">Language</h4>
                                    <span class="text-sm text-supermuted">
                                    (4)
                                    </span>
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
      <section class="s_bg-project">
         <div class="container">
            <div class="row">
               <div class="col-sm-24 space-bottom-xl">
                  <h1 class="text-center space-top-xl space-bottom-xl s_text_color_white">
                     List your courses for free
                  </h1>
                  <div class="row">
                     <div class="col-sm-24 text-center">
                       <button type="button" class="btn btn-lg btn-primary btn-corner"> Request a call back </button>
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
