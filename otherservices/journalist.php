<?php include('../header.php'); ?>
<main id="main-block">
   <div class="page-content">
      <section class="section-primary-bg">
         <div class="flashmessage">
            <div class="container">
               <div class="row">
                  <div class="col-sm-24">
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="bg-section f_section">
         <div  class="">
         </div>
         <div class="container text-inverted">
            <div class="row">
               <div class="col-sm-24">
                  <h1 class="space-top-med text-inverted">Join our Press Mailing List</h1>
                  <div class="text-med">Be a part of a 4,000+ community of journalists.</div>
               </div>
            </div>
            <div class="row">
               <div class="col-sm-14">
                  <div class="text-heading text-xxl space-top-xl f_latest">Get latest updates on</div>
                  <div class="media container-xs-height space-top-lg">
                     <div class="media-object pull-left">
                        <i class="fa fa-fw fa-trend-variable fa-4x"></i>
                     </div>
                     <div class="media-body text-lg col-middle col-xs-height f_market">Employment market updates</div>
                  </div>
                  <div class="media container-xs-height space-top-lg">
                     <div class="media-object pull-left">
                        <i class="fa fa-fw fa-dollar fa-4x"></i>
                     </div>
                     <div class="media-body text-lg col-middle col-xs-height f_market">Salaries</div>
                  </div>
                  <div class="media container-xs-height space-top-lg">
                     <div class="media-object pull-left">
                        <i class="fa fa-fw fa-arab-man fa-4x"></i>
                     </div>
                     <div class="media-body text-lg col-middle col-xs-height f_market">Nationalisation</div>
                  </div>
                  <div class="space-top-xxl text-xl">
                     Followed by some of the largest Mediahouses
                  </div>
                  <div class="space-top-lg f_space">
                     <img src="<?php echo $base_url;?>assets/img/featured/mbca95c.png">
                     <img class="space-left-xs" src="<?php echo $base_url;?>assets/img/featured/news-s-ashargha95c.png">
                     <img class="space-left-xs" src="<?php echo $base_url;?>assets/img/featured/cnn.jpg" />
                     <img class="space-left-xs" src="<?php echo $base_url;?>assets/img/featured/newslogo_GulfNewsa95c.jpg">
                     <img class="space-left-xs" src="<?php echo $base_url;?>assets/img/featured/reuters.png"/>
                  </div>
               </div>
               <div class="col-sm-10">
                  <div class="panel panel-default panel-bordered">
                     <div class="panel-body">
                        <h4 class="text-regular">Sign up</h4>
                        <form
                           class="show-print-block">
                           <div class="form-group">
                              <input type="text" id="pressMailingList_name" name="name" required="required" message="Please enter first name" class="form-control" placeholder="Your Full Name *" required="required" />
                           </div>
                           <div class="form-group">
                              <input type="text" id="pressMailingList_position" name="position" required="required" message="Please enter your position" class="form-control" placeholder="Your Position *" required="required" />
                           </div>
                           <div class="form-group">
                              <input type="text" id="pressMailingList_publication" name="publication" required="required"    message="Please enter name of your Publication" class="form-control" required="required" placeholder="Name of your Publication *">
                           </div>
                           <div class="form-group">
                              <input type="text" id="pressMailingList_company" name="company" message="Please enter name of your Organisation" class="form-control" placeholder="Name of your Organisation (if different)" />
                           </div>
                           <div class="form-group">
                              <input type="text" id="pressMailingList_phone" name="phone" required="required" message="Please enter your contact telephone number" class="form-control" required="required" placeholder="Contact telephone number *"/>
                           </div>
                           <div class="form-group">
                              <input type="text" id="pressMailingList_email" name="email" required="required" message="Please enter your contact email" class="form-control" placeholder="Contact Email *" required="required" />
                           </div>
                           <div class="form-group">
                              <textarea id="pressMailingList_comment" name="comment" class="form-control" rows="5" placeholder="Comments (Optional)"></textarea>
                           </div>
                           <div class="form-group">
                              <input type="hidden" id="pressMailingList__token" name="token" class="form-control input-lg" value="57f35aff4181d108acab8f691422427171f833c1" />
                              <div class="form-submit-button">
                                 <button class="btn btn-primary btn-block btn-lg f_submit" type="submit">Register</button>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>
</main>
<?php include('../footer.php'); ?>