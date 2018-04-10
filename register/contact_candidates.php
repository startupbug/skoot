<?php include('../header.php'); ?>
<main id="main-block">
   <div class="page-header">
      <div class="container">
         <div class="row">
            <div class="col-sm-24">
               <h2>Contact Us</h2>
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
                     <ul class="nav nav-pills nav-justified">
                        <li class="active">
                           <a href="contact_candidates.php" class="text-heading text-muted">Candidates</a>
                        </li>
                        <li>
                           <a href="contact_employers.php" class="text-heading text-muted">Employers</a>
                        </li>
                        <li>
                           <a href="contact_others.php" class="text-heading text-muted">Others</a>
                        </li>
                     </ul>
                     <div class="panel panel-default">
                        <div class="panel-heading">
                           <h3 class="panel-title s_font_20">Looking for a job?</h3>
                        </div>
                        <div class="list-group">
                           <a href="<?php echo $base_url;?>register/register_candidate.php" class="list-group-item">
                           <i class="fa fa-fw fa-chevron-right"></i>
                           Register as a Candidate
                           </a>
                           <h4 class="space-top-base space-bottom-base text-color">Have a question?</h4>
                           <a href="<?php echo $base_url;?>register/faqs.php" class="list-group-item">
                           <i class="fa fa-fw fa-chevron-right"></i>
                           Visit Help Center for Candidates
                           </a>
                           <h4 class="space-top-base space-bottom-base text-color">Couldn't find what you were looking for?</h4>
                           <hr class="supermuted space-bottom-none">
                           <div class="panel-body">
                              <div class="text-muted space-bottom-base space-top-none">
                                 Fill the contact form below:
                              </div>
                              <form class="show-print-block form-horizontal"  method="post">
                                 <div class="form-group">
                                    <label class="col-sm-7 control-label required" for="contact_us_name">
                                    Your Name
                                    <span class="text-primary">*</span></label>
                                    <div class="col-sm-14">
                                       <input type="text" id="contact_us_name" name="name" required="required" class="form-control">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="col-sm-7 control-label required" for="contact_us_email">
                                    Your Email
                                    <span class="text-primary">*</span></label>
                                    <div class="col-sm-14">
                                       <input type="email" id="contact_us_email" name="email" required="required" class="form-control">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="col-sm-7 control-label required" for="contact_us_type">
                                    Type of enquiry
                                    <span class="text-primary">*</span></label>
                                    <div class="col-sm-14">
                                       <select id="contact_us_type" name="type" required="required" class="form-control">
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
                                    <span class="text-primary">*</span></label>
                                    <div class="col-sm-14">
                                       <input type="text" id="contact_us_subject" name="subject" required="required" class="form-control">
                                    </div>
                                 </div>
                                 <div class="form-group space-bottom-base">
                                    <label class="col-sm-7 control-label required" for="contact_us_message">
                                    Message
                                    <span class="text-primary">*</span></label>
                                    <div class="col-sm-14">
                                       <textarea id="contact_us_message" name="message" required="required" class="form-control" rows="8" placeholder="Questions, comments or feedback on our service."></textarea>
                                    </div>
                                 </div>
                                 <div class="text-sm space-bottom-base">
                                    <strong>Note:</strong> Please do NOT send your CV to us through this form as it will not be received by employers.
                                 </div>
                                 <div class="form-group space-bottom-base section-jobs">
                                    <div class="col-sm-offset-7 col-sm-10">
                                       <button type="submit" value="submit" class="btn btn-secondary btn-section btn-lg btn-block col-md-24">Submit</button>
                                    </div>
                                 </div>
                              </form>
                              <div class="text-heading text-muted space-bottom-xs" style="display: none;">
                                 Contact Telephone
                                 <span class="text-supermuted">(Dubai Headquarters):</span>
                                 <span class="text-heading text-secondary">+971 4 278 5200</span>
                              </div>
                              <div class="text-muted text-heading space-bottom-xs" style="display: none;">
                                 Office Hours:
                                 <span class="text-supermuted">9:00 AM - 6:00 PM</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-8 hidden-print">
                     <div class="panel panel-default">
                        <div class="panel-heading">
                           <div class="text-heading panel-title text-capitalize">Jobs By City</div>
                        </div>
                        <div class="list-group">
                           <div class="list-group-item" href="#">
                              <div class="media">
                                 <div class="media-body">
                                    <p class="text-medium text-supermuted">
                                       <i class="fa fa-caret-right"></i>
                                       Access entire database of over 7 million quality candidates
                                    </p>
                                    <p class="text-medium text-supermuted">
                                       <i class="fa fa-caret-right"></i>
                                       Advertise your vacancies with advanced screening tools
                                    </p>
                                    <p class="text-medium text-supermuted">
                                       <i class="fa fa-caret-right"></i>
                                       Free Unlimited multiple users
                                    </p>
                                 </div>
                              </div>
                           </div>
                           <a class="list-group-item hidden-print text-section" href="<?php echo $base_url; ?>employeer/employer_job.php">
                           <i class="fa fa-fw fa-chevron-right text-section"></i>
                           Start recruiting now
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>
</main>
<?php include('../footer.php') ;?>