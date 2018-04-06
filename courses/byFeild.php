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
                       <button type="button" onclick="modalOpen('modal_1')" class="btn btn-lg btn-primary btn-corner"> Request a call back </button>
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
                        <input type="text" id="contact_us_name" name="contact_us[name" required="required" class="form-control" message="Please enter name!" placeholder="Your Name" />
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="col-sm-20 col-sm-offset-2">
                        <input type="email" id="contact_us_email" name="contact_us[email" required="required"    class="form-control" message="Please enter a valid Email Address!" placeholder="Your Email Address" />
                     </div>
                  </div>
                  <div class="form-group space-bottom-base">
                     <div class="col-sm-20 col-sm-offset-2">
                        <textarea id="contact_us_message" name="contact_us[message" required="required"    class="form-control" rows="8"  placeholder="Your comments/suggestions on the site"></textarea>
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
<div id="modal_1" class="w3-modal">
   <div class="modal-dialog" style="width: 900px;">
      <div class="modal-content">
         <div style="display:none">
            <div class="modal-header">
               <h3 class="modal-title">Enquiry Received</h3>
               <button class="close" onclick="modalClose('modal_1')"><i class="fa fa-remove"></i></button>
            </div>
            <div class="modal-body">
               <p class="text-center space-bottom-base">
                  <strong class="text-success">Thank you for your interest in GulfTalent.</strong>
               </p>
               <p>
                  One of our consultants will get in touch with you soon. If your enquiry
                  is urgent, feel free to call us on <strong class="text-secondary">+971 4 278 5218</strong>.
               </p>
            </div>
         </div>

         <div style="display:none">
            <div class="modal-header">
               <h3 class="modal-title">Error</h3>
               <button class="close" onclick="modalClose('modal_1')"><i class="fa fa-remove"></i></button>
            </div>
            <div class="modal-body">
               <p class="text-center space-bottom-base">
                  <strong class="text-warning">There was an error while submitting your enquiry.</strong>
               </p>
               <p>
                  Please submit the enquiry form again. If your enquiry is urgent,
                  feel free to call us on <strong class="text-secondary">+971 4 278 5218</strong>.
               </p>
            </div>
         </div>

         <div>
            <div class="modal-header">
               <h3 class="modal-title">
                  Sign up as a Course Provider
               </h3>
               <button class="close" onclick="modalClose('modal_1')" > <i class="fa fa-remove"></i></button>
            </div>
            <div class="modal-body">
               <p>
                  Please fill this form and one of our consultants will call you back.
                  Alternatively, call us on <strong class="text-secondary">+971 4 278 5218</strong>.
               </p>
               <form class="form-horizontal form-light">
                  <div class="form-group form-group-sm">
                     <label class="col-sm-9 control-label required" for="catalog_enquiry_name">
                     Your Name
                     <span class="text-primary">*</span></label>
                     <div class="col-sm-10">
                        <input type="text" id="catalog_enquiry_name" name="name" required="required" class="form-control">
                     </div>
                  </div>
                  <div class="form-group form-group-sm">
                     <label class="col-sm-9 control-label required" for="catalog_enquiry_job_title">
                     Your Job Title
                     <span class="text-primary">*</span></label>
                     <div class="col-sm-10">
                        <input type="text" id="catalog_enquiry_job_title" name="job_title" required="required" class="form-control">
                     </div>
                  </div>
                  <div class="form-group form-group-sm">
                     <label class="col-sm-9 control-label required" for="catalog_enquiry_email">
                     Email Address (Work)
                     <span class="text-primary">*</span></label>
                     <div class="col-sm-10">
                        <input type="email" id="catalog_enquiry_email" name="email" required="required" class="form-control">
                     </div>
                  </div>
                  <div class="form-group form-group-sm">
                     <label class="col-sm-9 control-label required" for="catalog_enquiry_phone">
                     Phone Number (Landline)
                     <span class="text-primary">*</span></label>
                     <div class="col-sm-9">
                        <input type="text" id="catalog_enquiry_phone" name="phone" required="required" placeholder="e.g. +971 4 234 2999" class="form-control">
                     </div>
                  </div>
                  <div class="form-group form-group-sm">
                     <label class="col-sm-9 control-label" for="catalog_enquiry_mobile">
                     Phone (mobile)
                     </label>
                     <div class="col-sm-9">
                        <input type="text" id="catalog_enquiry_mobile" name="mobile" placeholder="e.g. +971 5 678 1234" class="form-control">
                     </div>
                  </div>
                  <div class="form-group form-group-sm">
                     <label class="col-sm-9 control-label required" for="catalog_enquiry_company">
                     Company Name
                     <span class="text-primary">*</span></label>
                     <div class="col-sm-10">
                        <input type="text" id="catalog_enquiry_company" name="company" required="required" class="form-control">
                     </div>
                  </div>
                  <div class="form-group form-group-sm">
                     <label class="col-sm-9 control-label required" for="catalog_enquiry_website">
                     Company Website
                     <span class="text-primary">*</span></label>
                     <div class="col-sm-10">
                        <input type="text" id="catalog_enquiry_website" name="website" required="required" placeholder="e.g. www.gulftalent.com" class="form-control">
                     </div>
                  </div>
                  <div class="form-group form-group-sm">
                     <label class="col-sm-9 control-label required">
                     Do you offer courses in the Middle East?
                     <span class="text-primary">*</span></label>
                     <div class="col-sm-2">
                        <label class="radio-inline" for="catalog_enquiry_catalog_provider_0">
                          <input type="radio" id="catalog_enquiry_catalog_provider_0" name="catalog_provider" required="required">
                          Yes
                        </label>
                     </div>
                     <div class="col-sm-2">
                        <label class="radio-inline" for="catalog_enquiry_catalog_provider_1">
                          <input type="radio" id="catalog_enquiry_catalog_provider_1" name="catalog_provider" required="required">
                          No
                        </label>
                     </div>
                  </div>
                  <div class="form-group form-group-sm">
                     <div class="col-sm-9 control-label">
                        <label>
                        Type of courses offered
                        </label>
                     </div>
                     <div class="col-sm-6 checkbox" ng-init="form.'Online/Distance learning' = false">
                        <label for="catalog_enquiry_catalog_types_0"><input type="checkbox" id="catalog_enquiry_catalog_types_0" name=""value="Online/Distance learning" >
                        Online/Distance learning
                        </label>
                     </div>
                     <div class="col-sm-6 checkbox" ng-init="form.'Classroom Program' = false">
                        <label for="catalog_enquiry_catalog_types_1"><input type="checkbox" id="catalog_enquiry_catalog_types_1" name="" value="Classroom Program" >
                        Classroom Program
                        </label>
                     </div>
                     <div class="col-sm-6 checkbox" ng-init="form.'Corporate Training' = false">
                        <label for="catalog_enquiry_catalog_types_2"><input type="checkbox" id="catalog_enquiry_catalog_types_2" name="" value="Corporate Training" >
                        Corporate Training
                        </label>
                     </div>
                     <div class="col-sm-6 checkbox" ng-init="form.'Others' = false">
                        <label for="catalog_enquiry_catalog_types_3"><input type="checkbox" id="catalog_enquiry_catalog_types_3" name="" value="Others" >
                        Others
                        </label>
                     </div>
                  </div>
                  <div class="form-group form-group-sm">
                     <label class="col-sm-9 control-label required" for="catalog_enquiry_location">
                     Company Location
                     <span class="text-primary">*</span></label>
                     <div class="col-sm-10">
                        <select id="catalog_enquiry_location" name="location" required="required" class="form-control">
                           <option value="" disabled="disabled" selected="selected">Select</option>
                           <option value="10999121000000">Afghanistan</option>
                           <option value="90999301000000">Albania</option>
                           <option value="90229302000000">Algeria</option>
                           <option value="90999303000000">Andorra</option>
                           <option value="90999304000000">Angola</option>
                           <option value="90999305000000">Anguilla</option>
                           <option value="90999306000000">Antarctica</option>
                           <option value="90999307000000">Antigua</option>
                           <option value="90999308000000">Argentina</option>
                           <option value="90999309000000">Armenia</option>
                           <option value="90999310000000">Aruba</option>
                           <option value="90339311000000">Australia</option>
                           <option value="90999312000000">Austria</option>
                           <option value="90999313000000">Azerbaijan</option>
                           <option value="90999314000000">Bahamas</option>
                           <option value="10111115000000">Bahrain</option>
                           <option value="90449315000000">Bangladesh</option>
                           <option value="90999316000000">Barbados</option>
                           <option value="90999317000000">Barbuda</option>
                           <option value="90999318000000">Belarus</option>
                           <option value="90999319000000">Belgium</option>
                           <option value="90999320000000">Belize</option>
                           <option value="90999321000000">Benin</option>
                           <option value="90999322000000">Bermuda</option>
                           <option value="90449323000000">Bhutan</option>
                           <option value="90999324000000">Bolivia</option>
                           <option value="90999325000000">Bosnia and Herzegovina</option>
                           <option value="90999326000000">Botswana</option>
                           <option value="90999327000000">Bouvet Isl.</option>
                           <option value="90999328000000">Brazil</option>
                           <option value="90449330000000">Brunei</option>
                           <option value="90999331000000">Bulgaria</option>
                           <option value="90999332000000">Burkina Faso</option>
                           <option value="90999333000000">Burundi</option>
                           <option value="90999334000000">Caicos Islands</option>
                           <option value="90449335000000">Cambodia</option>
                           <option value="90999336000000">Cameroon</option>
                           <option value="90339337000000">Canada</option>
                           <option value="90999338000000">Cape Verde</option>
                           <option value="90999339000000">Cayman Isl.</option>
                           <option value="90999340000000">Central Africa</option>
                           <option value="90999341000000">Chad</option>
                           <option value="90999342000000">Chile</option>
                           <option value="90449343000000">China</option>
                           <option value="90999344000000">Christmas Isl.</option>
                           <option value="90999345000000">Cocos Isl.</option>
                           <option value="90999346000000">Colombia</option>
                           <option value="90229347000000">Comoros</option>
                           <option value="90999348000000">Congo</option>
                           <option value="90999349000000">Cook Islands</option>
                           <option value="90999350000000">Costa Rica</option>
                           <option value="90999352000000">Croatia</option>
                           <option value="90999353000000">Cuba</option>
                           <option value="90999354000000">Cyprus</option>
                           <option value="90999355000000">Czech Republic</option>
                           <option value="90999356000000">Denmark</option>
                           <option value="90229357000000">Djibouti</option>
                           <option value="90999358000000">Dominica</option>
                           <option value="90999359000000">Dominican Republic</option>
                           <option value="90999360000000">East Timor</option>
                           <option value="90999361000000">Ecuador</option>
                           <option value="10229362000000">Egypt</option>
                           <option value="90999363000000">El Salvador</option>
                           <option value="90999364000000">Eritrea</option>
                           <option value="90999365000000">Estonia</option>
                           <option value="90999366000000">Ethiopia</option>
                           <option value="90999367000000">Falkland Isl.</option>
                           <option value="90999368000000">Faroe Isl.</option>
                           <option value="90999369000000">Fiji</option>
                           <option value="90999370000000">Finland</option>
                           <option value="90999372000000">France</option>
                           <option value="90999371000000">France</option>
                           <option value="90999373000000">French Guiana</option>
                           <option value="90999374000000">Futuna Isl.</option>
                           <option value="90999375000000">Gabon</option>
                           <option value="90999376000000">Gambia</option>
                           <option value="90999377000000">Georgia</option>
                           <option value="90999378000000">Germany</option>
                           <option value="90999379000000">Ghana</option>
                           <option value="90999380000000">Gibraltar</option>
                           <option value="90999381000000">Greece</option>
                           <option value="90999382000000">Greenland</option>
                           <option value="90999383000000">Grenada</option>
                           <option value="90999384000000">Guadeloupe</option>
                           <option value="90999385000000">Guam</option>
                           <option value="90999386000000">Guatemala</option>
                           <option value="90999387000000">Guinea</option>
                           <option value="90999388000000">Guinea-Bissau</option>
                           <option value="90999389000000">Guyana</option>
                           <option value="90999390000000">Haiti</option>
                           <option value="90999391000000">Heard</option>
                           <option value="90999393000000">Honduras</option>
                           <option value="90449394000000">Hong Kong</option>
                           <option value="90999395000000">Hungary</option>
                           <option value="90999396000000">Iceland</option>
                           <option value="90449397000000">India</option>
                           <option value="90449398000000">Indonesia</option>
                           <option value="90999399000000">Iran</option>
                           <option value="10229120000000">Iraq</option>
                           <option value="90999400000000">Ireland</option>
                           <option value="90999401000000">Israel</option>
                           <option value="90999402000000">Italy</option>
                           <option value="90999351000000">Ivory Coast</option>
                           <option value="90999403000000">Jamaica</option>
                           <option value="90449404000000">Japan</option>
                           <option value="10229117000000">Jordan</option>
                           <option value="90999405000000">Kazakhstan</option>
                           <option value="90999406000000">Kenya</option>
                           <option value="90999407000000">Kiribati</option>
                           <option value="90999531000000">Kosovo</option>
                           <option value="10111113000000">Kuwait</option>
                           <option value="90999408000000">Kyrgystan</option>
                           <option value="90449409000000">Lao</option>
                           <option value="90999410000000">Latvia</option>
                           <option value="10229411000000">Lebanon</option>
                           <option value="90999412000000">Lesotho</option>
                           <option value="90999413000000">Liberia</option>
                           <option value="10229118000000">Libya</option>
                           <option value="90999414000000">Liechtenstein</option>
                           <option value="90999415000000">Lithuania</option>
                           <option value="90999416000000">Luxembourg</option>
                           <option value="90999417000000">Macau</option>
                           <option value="90999530000000">Macedonia</option>
                           <option value="90999418000000">Madagascar</option>
                           <option value="90999419000000">Malawi</option>
                           <option value="90449420000000">Malaysia</option>
                           <option value="90449421000000">Maldives</option>
                           <option value="90999422000000">Mali</option>
                           <option value="90999423000000">Malta</option>
                           <option value="90999424000000">Marshall Isl.</option>
                           <option value="90999425000000">Martinique</option>
                           <option value="90229426000000">Mauritania</option>
                           <option value="90999427000000">Mauritius</option>
                           <option value="90999428000000">Mayotte</option>
                           <option value="90999429000000">McDonald</option>
                           <option value="90999430000000">Mexico</option>
                           <option value="90999431000000">Micronesia</option>
                           <option value="90999432000000">Miquelon</option>
                           <option value="90999433000000">Moldova</option>
                           <option value="90999434000000">Monaco</option>
                           <option value="90449435000000">Mongolia</option>
                           <option value="90999532000000">Montenegro</option>
                           <option value="90999436000000">Montserrat</option>
                           <option value="90229437000000">Morocco</option>
                           <option value="90999438000000">Mozambique</option>
                           <option value="90449439000000">Myanmar</option>
                           <option value="90999440000000">Namibia</option>
                           <option value="90999441000000">Nauru</option>
                           <option value="90449442000000">Nepal</option>
                           <option value="90999443000000">Netherlands</option>
                           <option value="90999444000000">Neutral Zone</option>
                           <option value="90999445000000">Nevis</option>
                           <option value="90999446000000">New Caledonia</option>
                           <option value="90339447000000">New Zealand</option>
                           <option value="90999448000000">Nicaragua</option>
                           <option value="90999449000000">Niger</option>
                           <option value="90999450000000">Nigeria</option>
                           <option value="90999451000000">Niue</option>
                           <option value="90999452000000">Norfolk Island</option>
                           <option value="90449453000000">North Korea</option>
                           <option value="90999454000000">Norway</option>
                           <option value="10111116000000">Oman</option>
                           <option value="90449455000000">Pakistan</option>
                           <option value="90999456000000">Palau</option>
                           <option value="90229457000000">Palestine</option>
                           <option value="90999458000000">Panama</option>
                           <option value="90449459000000">Papua New Guinea</option>
                           <option value="90999460000000">Paraguay</option>
                           <option value="90999461000000">Peru</option>
                           <option value="90449462000000">Philippines</option>
                           <option value="90999463000000">Pitcairn</option>
                           <option value="90999464000000">Poland</option>
                           <option value="90999465000000">Portugal</option>
                           <option value="90999466000000">Principe</option>
                           <option value="90999467000000">Puerto Rico</option>
                           <option value="10111114000000">Qatar</option>
                           <option value="90999468000000">Reunion</option>
                           <option value="90999469000000">Romania</option>
                           <option value="90999470000000">Russian Federation</option>
                           <option value="90999471000000">Rwanda</option>
                           <option value="90999472000000">Saint Helena</option>
                           <option value="90999473000000">Saint Kitts</option>
                           <option value="90999474000000">Saint Lucia</option>
                           <option value="90999475000000">Saint Pierre</option>
                           <option value="90999476000000">Saint Vincent</option>
                           <option value="90999477000000">Samoa</option>
                           <option value="90999478000000">San Marino</option>
                           <option value="90999479000000">Sao Tome</option>
                           <option value="10111112000000">Saudi Arabia</option>
                           <option value="90999480000000">Senegal</option>
                           <option value="90999533000000">Serbia</option>
                           <option value="90999481000000">Seychelles</option>
                           <option value="90999482000000">Sierra Leone</option>
                           <option value="90449483000000">Singapore</option>
                           <option value="90999484000000">Slovakia</option>
                           <option value="90999485000000">Slovenia</option>
                           <option value="90999486000000">Solomon Isla</option>
                           <option value="90229487000000">Somalia</option>
                           <option value="90339488000000">South Africa</option>
                           <option value="90999489000000">South Georgia</option>
                           <option value="90449490000000">South Korea</option>
                           <option value="90999491000000">Spain</option>
                           <option value="90449492000000">Sri Lanka</option>
                           <option value="90229493000000">Sudan</option>
                           <option value="90999494000000">Suriname</option>
                           <option value="90999495000000">Svalbard</option>
                           <option value="90999496000000">Swaziland</option>
                           <option value="90999497000000">Sweden</option>
                           <option value="90999498000000">Switzerland</option>
                           <option value="10229119000000">Syria</option>
                           <option value="90449499000000">Taiwan</option>
                           <option value="90999500000000">Tajikistan</option>
                           <option value="90999501000000">Tanzania</option>
                           <option value="90449502000000">Thailand</option>
                           <option value="90999503000000">Tobago</option>
                           <option value="90999504000000">Togo</option>
                           <option value="90999505000000">Tokelau</option>
                           <option value="90999506000000">Tonga</option>
                           <option value="90999507000000">Trinidad and Tobago</option>
                           <option value="90229508000000">Tunisia</option>
                           <option value="90999509000000">Turkey</option>
                           <option value="90999510000000">Turkmenistan</option>
                           <option value="90999511000000">Turks Islands</option>
                           <option value="90999512000000">Tuvalu</option>
                           <option value="10111111000000">UAE</option>
                           <option value="90999513000000">Uganda</option>
                           <option value="90999514000000">Ukraine</option>
                           <option value="90339515000000">United Kingdom</option>
                           <option value="90339516000000">United States</option>
                           <option value="90999517000000">Uruguay</option>
                           <option value="90999518000000">Uzbekistan</option>
                           <option value="90999519000000">Vanuatu</option>
                           <option value="90999520000000">Vatican State</option>
                           <option value="90999521000000">Venezuela</option>
                           <option value="90449522000000">Vietnam</option>
                           <option value="90999523000000">Wallis</option>
                           <option value="90999524000000">Western Sahara</option>
                           <option value="90229525000000">Yemen</option>
                           <option value="90999526000000">Yugoslavia</option>
                           <option value="90999527000000">Zaire</option>
                           <option value="90999528000000">Zambia</option>
                           <option value="90999529000000">Zimbabwe</option>
                        </select>
                     </div>
                  </div>
                  <div class="form-group form-group-sm">
                     <label class="col-sm-9 control-label" for="catalog_enquiry_message">
                     Message
                     </label>
                     <div class="col-sm-10">
                        <textarea id="catalog_enquiry_message" name="message" class="form-control"></textarea>
                     </div>
                  </div>
                  <div class="form-group form-group-sm space-top-lg">
                     <div class="col-sm-5 col-sm-offset-9">
                        <button type="submit" class="btn btn-lg btn-block btn-primary">Submit</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>

<?php include('../footer.php') ;?>
