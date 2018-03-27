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
              <h1>Check Salaries in the Malaysia</h1>
              <h3 class="s_headingjobs">Salary data for more than 500 job titles in Malaysia countries</h3>
              <form class="form-inline space-bottom-xs hidden-print" action="#">
                  <div class="form-group form-group-lg inner-addon left-addon s-color-white">
                     <i class="fa fa-search"></i>
                     <input type="text" autocomplete="off" placeholder="Enter job title or keywords" name="pos_ref" class="form-control input-lg input-blk s-input-lg s-input-lg-job" />
                  </div>
                 <div class="form-group inner-addon left-addon s-color-white">
                    <i class="fa fa-map-marker"></i>
                    <select class="form-control input-lg s-input-lg s-input-lg-job" name="frmPositionCountry">
                       <option selected disabled="disabled">Location</option>
                       <option value="" >UAE</option>
                       <option value="" >Qatar</option>
                       <option value="" >Saudi Arabia</option>
                       <option value="" >Oman</option>
                       <option value="" >Bahrain</option>
                       <option value="" >Kuwait</option>
                       <option value="" >Egypt</option>
                       <option value="" >Jordan</option>
                       <option value="" >Lebanon</option>
                    </select>
                 </div>

                 <button type="submit" class="btn btn-lg btn-primary btn-corner"> Check Salaries</button>
              </form>
           </div>

         </div>
      </div>
   </div>
   <div class="">
      <section class="bg-dark">
        <div class="container">
          <div class="row space-top-lg space-bottom-lg">
           <div class="col-sm-24">
             <h3 class="text-center space-bottom-med text-section">
               Make the right decision using accurate salary data
             </h3>
           </div>
           <div class="col-sm-11 col-sm-offset-1 s_border_second">
               <div class="s-media-object">
                   <div class="text-section">
                       <i class="fa fa-user fa-3x"></i>
                   </div>
               </div>
               <div class="media">
                   <div class="media-body">
                       <h3 class="space-left-sm">Individuals</h3>
                       <ul class="s_list">
                           <li>
                               Benchmark your current salary
                           </li>
                           <li>
                               Check salary for a new role
                           </li>
                           <li>
                               Evaluate market potential
                           </li>
                       </ul>
                   </div>
               </div>
           </div>
           <div class="col-sm-11 col-sm-offset-1 s_border_second">
               <div class="s-media-object">
                   <div class="text-section">
                       <i class="fa fa-building-o fa-3x"></i>
                   </div>
               </div>
               <div class="media">
                   <div class="media-body">
                       <h3 class="space-left-sm">Businesses</h3>
                       <ul class="s_list text-strong ">
                           <li>
                               Benchmark existing salaries
                           </li>
                           <li>
                               Set salaries for new positions
                           </li>
                           <li>
                               Check salaries for another market
                           </li>
                       </ul>
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
                     Browse salaries in your Job Category
                  </h1>
                  <div class="row">
                     <div class="col-sm-6">
                        <div class="panel panel-default panel-hover panel-bordered">
                           <a href="<?php echo $base_url; ?>salaries\job_category.php" class="panel-body">
                              <div class="media container-xs-height media-height-sm">
                                 <div class="media-object pull-left">
                                    <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                       <i class="fa fa-book-pen"></i>
                                    </div>
                                 </div>
                                 <div class="media-body col-xs-height col-middle">
                                    <h4 class="space-bottom-none text-link">Accounting</h4>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="panel panel-default panel-hover panel-bordered">
                           <a href="<?php echo $base_url; ?>salaries\job_category.php" class="panel-body">
                              <div class="media container-xs-height media-height-sm">
                                 <div class="media-object pull-left">
                                    <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                       <i class="fa  fa-ring-binder"></i>
                                    </div>
                                 </div>
                                 <div class="media-body col-xs-height col-middle">
                                    <h4 class="space-bottom-none text-link">Admin</h4>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="panel panel-default panel-hover panel-bordered">
                           <a href="<?php echo $base_url; ?>salaries\job_category.php" class="panel-body">
                              <div class="media container-xs-height media-height-sm">
                                 <div class="media-object pull-left">
                                    <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                       <i class="fa  fa-buildings"></i>
                                    </div>
                                 </div>
                                 <div class="media-body col-xs-height col-middle">
                                    <h4 class="space-bottom-none text-link">Architecture</h4>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="panel panel-default panel-hover panel-bordered">
                           <a href="<?php echo $base_url; ?>salaries\job_category.php" class="panel-body">
                              <div class="media container-xs-height media-height-sm">
                                 <div class="media-object pull-left">
                                    <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                       <i class="fa  fa-chef"></i>
                                    </div>
                                 </div>
                                 <div class="media-body col-xs-height col-middle">
                                    <h4 class="space-bottom-none text-link">Catering</h4>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-6">
                        <div class="panel panel-default panel-hover panel-bordered">
                           <a href="<?php echo $base_url; ?>salaries\job_category.php" class="panel-body">
                              <div class="media container-xs-height media-height-sm">
                                 <div class="media-object pull-left">
                                    <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                       <i class="fa  fa-paint-brush-cut"></i>
                                    </div>
                                 </div>
                                 <div class="media-body col-xs-height col-middle">
                                    <h4 class="space-bottom-none text-link">Design</h4>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="panel panel-default panel-hover panel-bordered">
                           <a href="<?php echo $base_url; ?>salaries\job_category.php" class="panel-body">
                              <div class="media container-xs-height media-height-sm">
                                 <div class="media-object pull-left">
                                    <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                       <i class="fa  fa-headphones"></i>
                                    </div>
                                 </div>
                                 <div class="media-body col-xs-height col-middle">
                                    <h4 class="space-bottom-none text-link">Customer Service</h4>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="panel panel-default panel-hover panel-bordered">
                           <a href="<?php echo $base_url; ?>salaries\job_category.php" class="panel-body">
                              <div class="media container-xs-height media-height-sm">
                                 <div class="media-object pull-left">
                                    <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                       <i class="fa  fa-teacher"></i>
                                    </div>
                                 </div>
                                 <div class="media-body col-xs-height col-middle">
                                    <h4 class="space-bottom-none text-link">Academic</h4>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="panel panel-default panel-hover panel-bordered">
                           <a href="<?php echo $base_url; ?>salaries\job_category.php" class="panel-body">
                              <div class="media container-xs-height media-height-sm">
                                 <div class="media-object pull-left">
                                    <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                       <i class="fa  fa-house-measured"></i>
                                    </div>
                                 </div>
                                 <div class="media-body col-xs-height col-middle">
                                    <h4 class="space-bottom-none text-link">Civil Engineering</h4>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-6">
                        <div class="panel panel-default panel-hover panel-bordered">
                           <a href="<?php echo $base_url; ?>salaries\job_category.php" class="panel-body">
                              <div class="media container-xs-height media-height-sm">
                                 <div class="media-object pull-left">
                                    <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                       <i class="fa  fa-gears"></i>
                                    </div>
                                 </div>
                                 <div class="media-body col-xs-height col-middle">
                                    <h4 class="space-bottom-none text-link">Engineering - Others</h4>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="panel panel-default panel-hover panel-bordered">
                           <a href="<?php echo $base_url; ?>salaries\job_category.php" class="panel-body">
                              <div class="media container-xs-height media-height-sm">
                                 <div class="media-object pull-left">
                                    <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                       <i class="fa  fa-dollar"></i>
                                    </div>
                                 </div>
                                 <div class="media-body col-xs-height col-middle">
                                    <h4 class="space-bottom-none text-link">Finance & Consulting</h4>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="panel panel-default panel-hover panel-bordered">
                           <a href="<?php echo $base_url; ?>salaries\job_category.php" class="panel-body">
                              <div class="media container-xs-height media-height-sm">
                                 <div class="media-object pull-left">
                                    <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                       <i class="fa  fa-medical-plus"></i>
                                    </div>
                                 </div>
                                 <div class="media-body col-xs-height col-middle">
                                    <h4 class="space-bottom-none text-link">Healthcare</h4>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="panel panel-default panel-hover panel-bordered">
                           <a href="<?php echo $base_url; ?>salaries\job_category.php" class="panel-body">
                              <div class="media container-xs-height media-height-sm">
                                 <div class="media-object pull-left">
                                    <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                       <i class="fa  fa-clipboard"></i>
                                    </div>
                                 </div>
                                 <div class="media-body col-xs-height col-middle">
                                    <h4 class="space-bottom-none text-link">HR</h4>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-6">
                        <div class="panel panel-default panel-hover panel-bordered">
                           <a href="<?php echo $base_url; ?>salaries\job_category.php" class="panel-body">
                              <div class="media container-xs-height media-height-sm">
                                 <div class="media-object pull-left">
                                    <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                       <i class="fa  fa-html-tag"></i>
                                    </div>
                                 </div>
                                 <div class="media-body col-xs-height col-middle">
                                    <h4 class="space-bottom-none text-link">Software</h4>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="panel panel-default panel-hover panel-bordered">
                           <a href="<?php echo $base_url; ?>salaries\job_category.php" class="panel-body">
                              <div class="media container-xs-height media-height-sm">
                                 <div class="media-object pull-left">
                                    <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                       <i class="fa  fa-auction-hammer"></i>
                                    </div>
                                 </div>
                                 <div class="media-body col-xs-height col-middle">
                                    <h4 class="space-bottom-none text-link">Legal</h4>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="panel panel-default panel-hover panel-bordered">
                           <a href="<?php echo $base_url; ?>salaries\job_category.php" class="panel-body">
                              <div class="media container-xs-height media-height-sm">
                                 <div class="media-object pull-left">
                                    <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                       <i class="fa  fa-test-paper"></i>
                                    </div>
                                 </div>
                                 <div class="media-body col-xs-height col-middle">
                                    <h4 class="space-bottom-none text-link">Management</h4>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="panel panel-default panel-hover panel-bordered">
                           <a href="<?php echo $base_url; ?>salaries\job_category.php" class="panel-body">
                              <div class="media container-xs-height media-height-sm">
                                 <div class="media-object pull-left">
                                    <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                       <i class="fa  fa-bulls-eye"></i>
                                    </div>
                                 </div>
                                 <div class="media-body col-xs-height col-middle">
                                    <h4 class="space-bottom-none text-link">Marketing</h4>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-6">
                        <div class="panel panel-default panel-hover panel-bordered">
                           <a href="<?php echo $base_url; ?>salaries\job_category.php" class="panel-body">
                              <div class="media container-xs-height media-height-sm">
                                 <div class="media-object pull-left">
                                    <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                       <i class="fa  fa-delivery-truck"></i>
                                    </div>
                                 </div>
                                 <div class="media-body col-xs-height col-middle">
                                    <h4 class="space-bottom-none text-link">Logistics</h4>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="panel panel-default panel-hover panel-bordered">
                           <a href="<?php echo $base_url; ?>salaries\job_category.php" class="panel-body">
                              <div class="media container-xs-height media-height-sm">
                                 <div class="media-object pull-left">
                                    <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                       <i class="fa  fa-policeman"></i>
                                    </div>
                                 </div>
                                 <div class="media-body col-xs-height col-middle">
                                    <h4 class="space-bottom-none text-link">Security</h4>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="panel panel-default panel-hover panel-bordered">
                           <a href="<?php echo $base_url; ?>salaries\job_category.php" class="panel-body">
                              <div class="media container-xs-height media-height-sm">
                                 <div class="media-object pull-left">
                                    <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                       <i class="fa  fa-package"></i>
                                    </div>
                                 </div>
                                 <div class="media-body col-xs-height col-middle">
                                    <h4 class="space-bottom-none text-link">Procurement</h4>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="panel panel-default panel-hover panel-bordered">
                           <a href="<?php echo $base_url; ?>salaries\job_category.php" class="panel-body">
                              <div class="media container-xs-height media-height-sm">
                                 <div class="media-object pull-left">
                                    <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                       <i class="fa  fa-umbrella"></i>
                                    </div>
                                 </div>
                                 <div class="media-body col-xs-height col-middle">
                                    <h4 class="space-bottom-none text-link">Quality Control</h4>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-6">
                        <div class="panel panel-default panel-hover panel-bordered">
                           <a href="<?php echo $base_url; ?>salaries\job_category.php" class="panel-body">
                              <div class="media container-xs-height media-height-sm">
                                 <div class="media-object pull-left">
                                    <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                       <i class="fa  fa-microscope"></i>
                                    </div>
                                 </div>
                                 <div class="media-body col-xs-height col-middle">
                                    <h4 class="space-bottom-none text-link">R&D</h4>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="panel panel-default panel-hover panel-bordered">
                           <a href="<?php echo $base_url; ?>salaries\job_category.php" class="panel-body">
                              <div class="media container-xs-height media-height-sm">
                                 <div class="media-object pull-left">
                                    <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                       <i class="fa  fa-safety-boots"></i>
                                    </div>
                                 </div>
                                 <div class="media-body col-xs-height col-middle">
                                    <h4 class="space-bottom-none text-link">HSE</h4>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="panel panel-default panel-hover panel-bordered">
                           <a href="<?php echo $base_url; ?>salaries\job_category.php" class="panel-body">
                              <div class="media container-xs-height media-height-sm">
                                 <div class="media-object pull-left">
                                    <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                       <i class="fa  fa-salesman"></i>
                                    </div>
                                 </div>
                                 <div class="media-body col-xs-height col-middle">
                                    <h4 class="space-bottom-none text-link">Sales</h4>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="panel panel-default panel-hover panel-bordered">
                           <a href="<?php echo $base_url; ?>salaries\job_category.php" class="panel-body">
                              <div class="media container-xs-height media-height-sm">
                                 <div class="media-object pull-left">
                                    <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                       <i class="fa  fa-chat-bubbles"></i>
                                    </div>
                                 </div>
                                 <div class="media-body col-xs-height col-middle">
                                    <h4 class="space-bottom-none text-link">Translation</h4>
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
      <section class="bg-dark">
       <div class="container">
        <div class="row space-top-lg space-bottom-lg">
           <div class="col-sm-24">
              <h2 class="text-center space-bottom-xl">Up-to-date salary data covers</h2>
           </div>
           <div class="col-sm-8 text-center">
              <div class="media row">
                 <div class="media-object col-sm-6 col-sm-offset-8">
                    <div class="icon icon-circle icon-3x icon-circle-section">
                       <i class="fa fa-man-in-tie"></i>
                    </div>
                 </div>
              </div>
              <h3 class="text-secondary">500 Job Titles</h3>
           </div>
           <div class="col-sm-8 text-center">
              <div class="media row">
                 <div class="media-object col-sm-6 col-sm-offset-8">
                    <div class="icon icon-circle icon-3x icon-circle-section">
                       <i class="fa fa-factory"></i>
                    </div>
                 </div>
              </div>
              <h3 class="text-secondary">42 Industries</h3>
           </div>
           <div class="col-sm-8 text-center">
              <div class="media row">
                 <div class="media-object col-sm-6 col-sm-offset-8">
                    <div class="icon icon-circle icon-3x icon-circle-section">
                       <i class="fa fa-building-o"></i>
                    </div>
                 </div>
              </div>
              <h3 class="text-secondary">45,000+ Companies</h3>
           </div>
        </div>
       </div>
      </section>
      <section class="s_bg-project">
         <div class="container">
            <div class="row">
               <div class="col-sm-24 space-bottom-xl space-top-xl">
                  <h1 class="text-center s_text_color_white">
                     Get started
                  </h1>
                  <h3 class="text-center s_headingjobs s_heading_bottom s_text_color_white">
                     find out the salary for your job title!
                  </h3>
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
