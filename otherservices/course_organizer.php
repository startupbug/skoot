
<?php include('../header.php'); ?>
<main id="main-block" >
   <div class="">
      <!--<section class="section-primary-bg">
         <div ng-controller="flashMessagesController" id="flash-messages-persistent" ng-cloak>
            <div class="container" ng-repeat="flashMessage in flashMessages | filter: {persistent: true}">
               <div class="row">
                  <div class="col-sm-24">
                     <div class="alert alert-{{ flashMessage.type }} fade container-xs-height container-block space-bottom-sm"
                        ng-class="{ 'in': !flashMessage.hasTransition }">
                        <div class="col-xs-height col-middle pull-left">
                           <div class="media container-xs-height">
                              <div class="media-object col-xs-height col-middle">
                                 <i class="fa fa-fw"
                                    ng-class="{
                                    'fa-exclamation-circle': ('error' == flashMessage.type),
                                    'fa-check': ('success' == flashMessage.type),
                                    'fa-info-circle': ('info' == flashMessage.type),
                                    'fa-warning': ('warning' == flashMessage.type)
                                    }">
                                 </i>
                              </div>
                              <div class="media-body col-xs-height col-middle text-xl">
                                 {{ flashMessage.message }}
                                 <a ng-hide="flashMessage.hasModal||flashMessage.hasCustomModal"
                                    ng-href="{{ flashMessage.link }}"
                                    target="{{ flashMessage.linkTarget }}">
                                 {{ flashMessage.linkText }}
                                 </a>
                                 <a ng-show="flashMessage.hasModal"
                                    gt-modal-static="flashMessage.link"
                                    gt-modal-size="flashMessage.modalSize">
                                 {{ flashMessage.linkText }}
                                 </a>
                                 <a ng-show="flashMessage.hasCustomModal&&flashMessage.link=='publicProfileBenefits'"
                                    gt-modal-recent-public-profiles
                                    gt-modal-size="flashMessage.modalSize">
                                 {{ flashMessage.linkText }}
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div class="col-xs-height col-middle">
                           <button type="button" class="close" ng-click="remove($index)" ng-hide="flashMessage.persistent">
                           <span aria-hidden="true">&times;</span>
                           <span class="sr-only">Close</span>
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div ng-controller="flashMessagesController"
            scroll-to-fix
            class="flashmessage"
            ng-cloak>
            <div class="container" ng-repeat="flashMessage in flashMessages | filter: {persistent: false}">
               <div class="row">
                  <div class="col-sm-24">
                     <div class="alert alert-{{ flashMessage.type }} fade container-xs-height container-block space-bottom-sm"
                        ng-class="{ 'in': !flashMessage.hasTransition }">
                        <div class="col-xs-height col-middle pull-left">
                           <div class="media container-xs-height">
                              <div class="media-object col-xs-height col-middle">
                                 <i class="fa fa-fw"
                                    ng-class="{
                                    'fa-exclamation-circle': ('error' == flashMessage.type),
                                    'fa-check': ('success' == flashMessage.type),
                                    'fa-info-circle': ('info' == flashMessage.type),
                                    'fa-warning': ('warning' == flashMessage.type)
                                    }">
                                 </i>
                              </div>
                              <div class="media-body col-xs-height col-middle text-xl">
                                 {{ flashMessage.message }}
                                 <a ng-hide="flashMessage.hasModal||flashMessage.hasCustomModal"
                                    ng-href="{{ flashMessage.link }}"
                                    target="{{ flashMessage.linkTarget }}">
                                 {{ flashMessage.linkText }}
                                 </a>
                                 <a ng-show="flashMessage.hasModal"
                                    gt-modal-static="flashMessage.link"
                                    gt-modal-size="flashMessage.modalSize">
                                 {{ flashMessage.linkText }}
                                 </a>
                                 <a ng-show="flashMessage.hasCustomModal&&flashMessage.link=='publicProfileBenefits'"
                                    gt-modal-recent-public-profiles
                                    gt-modal-size="flashMessage.modalSize">
                                 {{ flashMessage.linkText }}
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div class="col-xs-height col-middle">
                           <button type="button" class="close" ng-click="remove($index)" ng-hide="flashMessage.persistent">
                           <span aria-hidden="true">&times;</span>
                           <span class="sr-only">Close</span>
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>-->
       <div style="background-image: url(<?php echo $base_url;?>assets/img/featured/event_img.png)" class="jumbotron bg-cover">
         <div class="container">
            <div class="row">
               <div class="col-sm-24 space-bottom-xl space-top-sm">
                  <h1 class="text-inverted text-center space-top-xxl space-bottom-none">Promote your courses</h1>
                  <h2 class="text-inverted text-hg text-center space-bottom-lg">
                     Increase attendance with the help of GulfTalent
                  </h2>
               </div>
            </div>
            <div class="row space-bottom-xl">
               <div class="col-sm-12 col-sm-offset-6 text-center">
                  <div class="row row-xs-height">
                     <div class="col-xs-height col-middle col-xs-12 text-right">
                        <h3 class="text-inverted space-bottom-none space-top-none f_call">Call Now +971 4 278 5200</h3>
                     </div>
                     <div class="col-xs-height col-middle col-xs-2 text-center">
                        <h3 class="text-inverted space-bottom-none space-top-none">or</h3>
                     </div>
                     <div class="col-xs-height col-middle col-xs-10 text-left">
                        <a gt-modal-static="&#039;coursesEnquiry&#039;" class="btn btn-tertiary btn-lg f_btn_call">
                        Request a Call
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <section class="bg-dark">
         <div class="container">
            <div class="row">
               <div class="btn-group container-block text-muted" ng-init="activeTemplate='overview.html'">
                  <label class="btn pull-right"
                     gt-modal-login="courseOrganiser"
                     force="true"
                     modal-title="Course Provider Login">
                  Course Provider Login
                  </label>
                  <label class="btn"
                     ng-model="activeTemplate"
                     ng-class="{'btn-secondary': activeTemplate == 'overview.html'}"
                     btn-radio="'overview.html'">
                  Overview
                  </label>
                  <label class="btn"
                     ng-model="activeTemplate"
                     ng-class="{'btn-secondary': activeTemplate == 'case-studies.html'}"
                     btn-radio="'case-studies.html'">
                  Case Studies
                  </label>
                  <label class="btn" gt-modal-static="'coursesEnquiry'">
                  Request a Call
                  </label>
               </div>
            </div>
         </div>
      </section>
      <!<div></div>-->
      <!--<section class="bg-cover jumbotron" style="background-image: url(../images/request_calla95c.jpg?v2_68_0)">
         <div class="container">
            <div class="row">
               <div class="col-sm-24">
                  <h2 class="text-hg text-center">
                     <div class="space-bottom-med">Interested? Get in touch</div>
                     <div class="space-bottom-med">Call: +971 4 278 5200</div>
                     <div class="space-bottom-med">or</div>
                     <a gt-modal-static="'coursesEnquiry'"class="btn btn-lg btn-tertiary text-xxl">Request a Call</a>
                  </h2>
               </div>
            </div>
         </div>
      </section>-->
      
         <section class="bg-light">
         <div class="container">
         <h2 class="text-hg text-center space-top-xl space-bottom-lg">
             Connect with the region's top professionals
         </h2>
         <div class="row space-bottom-xl">
             <div class="col-sm-18 col-sm-offset-4">
                 <div class="row">
                     <div class="col-sm-12 col-sm-offset-6">
                         <h3 class="text-hg text-center space-bottom-none">
                            <i class="fa fa-users fa-5x text-muted f_muted"></i>
                             <span class="text-primary f_million">7 million</span>
                             <span class="text-elegant text-xxl f_reach">Professionals</span>
                         </h3>
                         <hr class="supermuted space-top-none" />
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-sm-8">
                         <h3 class="text-center space-bottom-none f_num">86%</h3>
                         <p class="text-elegant text-muted text-center text-xxl f_nation">Graduates</p>
                     </div>
                     <div class="col-sm-8">
                         <h3 class="text-center space-bottom-none f_num">30+</h3>
                         <p class="text-elegant text-muted text-center text-xxl f_nation">Job Categories</p>
                     </div>
                     <div class="col-sm-8">
                         <h3 class="text-center space-bottom-none f_num">35%</h3>
                         <p class="text-elegant text-muted text-center text-xxl f_nation">Managers</p>
                     </div>
                 </div>
             </div>
         </div>
         </div>
         </section>
         
         <section class="bg-light">
         <div class="container">
            <div class="row space-top-xl space-bottom-lg">
               <h2 class="text-hg text-center space-bottom-xl">Choose advertising options that suit your compaign</h2>
               <div class="col-sm-8">
                  <div class="media text-center">
                     <div class="media-object inline f_media">
                        <div class="icon icon-circle icon-3x icon-circle-section hover-expand f_icon_media">
                           <i class="fa fa-newspaper-curved f_curved"></i>
                        </div>
                     </div>
                  </div>
                  <div class="text-lg text-muted text-heading space-top-none text-center">
                     <h3 class="space-top-xs f_num">Events listings page <i class="fa fa-free fa-2x text-primary"></i></h3>
                     <div class="row">
                        <div class="col-sm-14 col-sm-offset-5">
                          <!-- <hr class="space-top-sm supermuted" />-->
                        </div>
                     </div>
                  </div>
                  <p class="text-center text-muted text-elegant text-xl">List your event and get seen by interested users</p>
               </div>
               <div class="col-sm-8">
                  <div class="media text-center">
                     <div class="media-object inline f_media">
                        <div class="icon icon-circle icon-3x icon-circle-section hover-expand f_icon_media">
                           <i class="fa fa-loud-speaker f_curved"></i>
                        </div>
                     </div>
                  </div>
                  <div class="text-lg text-muted text-heading space-top-lg text-center">
                     <h3 class="f_num">Banner Ads</h3>
                     <div class="row">
                        <div class="col-sm-14 col-sm-offset-5">
                           <!--<hr class="space-top-sm supermuted" />-->
                        </div>
                     </div>
                  </div>
                  <p class="text-center text-muted text-elegant text-xl">Advertise your event on prime spaces on JobLane</p>
               </div>
               <div class="col-sm-8">
                  <div class="media text-center">
                     <div class="media-object inline f_media">
                        <div class="icon icon-circle icon-3x icon-circle-section hover-expand f_icon_media">
                           <i class="fa fa-bulls-eye f_curved"></i>
                        </div>
                     </div>
                  </div>
                  <div class="text-lg text-muted text-heading space-top-lg text-center">
                     <h3 class="f_num">Targeted Mailshots</h3>
                     <div class="row">
                        <div class="col-sm-14 col-sm-offset-5">
                           <!--<hr class="space-top-sm supermuted" />-->
                        </div>
                     </div>
                  </div>
                  <p class="text-center text-muted text-elegant text-xl">Invite selected segments of professionals to attend your event</p>
               </div>
            </div>
         </div>
      </section>
         
         <section class="bg-light">
         <div class="container">
         <h1 class="text-center space-top-xl space-bottom-xl">
         Top universities currently listing courses
         </h1>
         <div class="container-xs-height container-block space-bottom-xl">
         <div class="row row-xs-height">
                             <div class="col-xs-height col-middle col-xs-6">
                   
                        <img class="img-responsive informa_f" src="<?php echo $base_url;?>assets/img/featured/abu-dhabi.png">
                                 
                    
                 </div>
                             <div class="col-xs-height col-middle col-xs-6">
                   
                          <img class="img-responsive informa_f" src="<?php echo $base_url;?>assets/img/featured/manchester.png">
                   
                 </div>
                             <div class="col-xs-height col-middle col-xs-6">
                   
                        <img class="img-responsive informa_f" src="<?php echo $base_url;?>assets/img/featured/manipal.png">
                   
                 </div>
                             <div class="col-xs-height col-middle col-xs-6">
                   
                        <img class="img-responsive informa_f" src="<?php echo $base_url;?>assets/img/featured/ashridge.png">
                  
                 </div>
                     </div>
         </div>
         </div>
         </section>
         
         <section class="bg-dark">
         <div class="container">
         <h1 class="text-center space-top-xl space-bottom-xl">
         Top training companies currently listing courses
         </h1>
         <div class="container-xs-height container-block space-bottom-xl">
         <div class="row row-xs-height">
                             <div class="col-xs-height col-middle col-xs-6">
                         <img class="img-responsive informa_f" src="<?php echo $base_url;?>assets/img/featured/informa.png">
                   
                       
                 </div>
                             <div class="col-xs-height col-middle col-xs-6">
                         <img class="img-responsive informa_f" src="<?php echo $base_url;?>assets/img/featured/meirc.png">
                 
                        
                 </div>
                             <div class="col-xs-height col-middle col-xs-6">
                         <img class="img-responsive informa_f" src="<?php echo $base_url;?>assets/img/featured/norgan.png">
                   
                      
                 </div>
                             <div class="col-xs-height col-middle col-xs-6">
                         <img class="img-responsive informa_f" src="<?php echo $base_url;?>assets/img/featured/leoron.png">
                    
                       
                 </div>
                     </div>
         </div>
         </div>
         </section>
         
         <section class="bg-light">
         <div class="container">
                 <h2 class="text-hg text-center space-top-xl space-bottom-xl">Choose advertising options that suit your campaign</h2>
         <div class="row space-bottom-xl text-center">
             <div class="col-sm-6">
                 <div class="media space-top-med">
                     <div class="media-object inline">
                        <img class="img-responsive" src="<?php echo $base_url;?>assets/img/featured/westford.png">
                     </div>
                 </div>
                 <p class="text-muted space-top-lg">
                     Westford School of Management offers a range of UK bachelor degrees and graduate programs...
                 </p>
                 <a class="btn btn-secondary btn-block"
                         ng-click="$parent.activeTemplate='case-studies.html'" smooth-scroll-to="'story1'">
                     Read more
                 </a>
             </div>
             <div class="col-sm-6 col-sm-offset-3">
                 <div class="media">
                     <div class="media-object inline">
                        <img class="img-responsive" src="<?php echo $base_url;?>assets/img/featured/cima.png">
                     </div>
                 </div>
                 <p class="text-muted space-top-sm f_cima">
                     CIMA is the world's largest and leading professional body of management accountants with...
                 </p>
                 <a class="btn btn-secondary btn-block"
                         ng-click="$parent.activeTemplate='case-studies.html'" smooth-scroll-to="'story2'">
                     Read more
                 </a>
             </div>
             <div class="col-sm-6 col-sm-offset-3">
                 <div class="media space-top-med">
                     <div class="media-object inline">
                          <img class="img-responsive" src="<?php echo $base_url;?>assets/img/featured/organisers.png">
                     </div>
                 </div>
                 <p class="text-muted space-top-lg">
                     Middle Earth HR is the largest HR certifying agency in Asia and the 7th largest HR certification
                     body in the...
                 </p>
                 <a class="btn btn-secondary btn-block"
                         ng-click="$parent.activeTemplate='case-studies.html'" smooth-scroll-to="'story3'">
                     Read more
                 </a>
             </div>
         </div>
         </div>
         </section>

          <section class="bg-cover jumbotron" style="background-image: url(<?php echo $base_url;?>assets/img/featured/event_bottom.png)">
         <div class="container">
            <div class="row">
               <div class="col-sm-24">
                  <h2 class="text-hg text-center">
                     <div class="space-bottom-med">Interested? Get in touch</div>
                      <div class="row row-xs-height">
               <div class="col-xs-height col-middle col-xs-12 text-right">
                  <h3 class=" space-bottom-none space-top-none f_event f_call">Call Now +971 4 278 5200</h3>
               </div>
               <div class="col-xs-height col-middle col-xs-2 text-center">
                  <h3 class=" space-bottom-none space-top-none">or</h3>
               </div>
               <div class="col-xs-height col-middle col-xs-10 text-left">
                  <a class="btn btn-tertiary btn-lg f_btn_call">
                  Request a Call back
                  </a>
               </div>
            </div>
                     <!--<div class="space-bottom-med f_call">Call Now: +971 4 278 5200</div>
                     <div class="space-bottom-med">or</div>
                     <a gt-modal-static="'coursesEnquiry'"class="btn btn-lg btn-tertiary text-xxl">Request a Call</a>-->
                  </h2>
               </div>
            </div>
         </div>
      </section>
     
      <script type="text/ng-template" id="case-studies.html">
         <section class="bg-light">
         <div class="container">
         <h2 class="text-hg text-center space-top-xl space-bottom-xl">Success stories of our clients</h2>
         <div class="row space-bottom-lg">
             <div class="col-sm-6">
                 <a href="#story1">
                     <img class="img-responsive center-block"
                         src="../images1/organisers_page_westforda95c.png?v2_68_0" />
                 </a>
             </div>
             <div class="col-sm-6 col-sm-offset-3">
                 <a href="#story2">
                     <img class="img-responsive center-block"
                         src="../images1/organisers_page_cimaa95c.png?v2_68_0" />
                 </a>
             </div>
             <div class="col-sm-6 col-sm-offset-3">
                 <a href="#story3">
                     <img class="img-responsive center-block"
                         src="../images1/organisers_page_middle_eartha95c.png?v2_68_0" />
                 </a>
             </div>
         </div>
         </div>
         </section>
         
         <section class="bg-dark" id="story1">
         <div class="container">
         <img class="img-responsive pull-right space-top-xl"
             src="../images1/organisers_page_westforda95c.png?v2_68_0" />
         <h2 class="space-top-xl">1. Westford School of Management</h2>
         <h4 class="space-top-sm">Training provider profile:</h4>
         <p class="text-muted text-med">
             Westford School of Management is an educational institute based in UAE established in 2009
             with multiple course centers across UAE, as well as an established presence in India, Lebanon and Sri Lanka.
         </p>
         <p class="text-muted text-med">
             Westford offers a range of UK bachelor degrees and graduate programs through partnerships with top
             British universities, along with corporate trainings and specialized professional programs focused
             on industry domains including Supply Chain Management, Project Management, Banking and Finance, and so on.
         </p>
         <h4 class="space-top-sm">Objective:</h4>
         <p class="text-muted text-med">
             To reach out to the right audience by promoting all courses and generate leads for the courses.
         </p>
         <div class="row space-top-sm">
             <div class="col-sm-12">
                 <h4>Solution:</h4>
                 <p class="text-muted text-med">
                     Dedicated page for course listing on GulfTalent with:
                 </p>
                 <ul class="text-muted text-med">
                     <li>Individual lead forms</li>
                     <li>Lead's dashboard</li>
                     <li>Real time enquiries</li>
                 </ul>
             </div>
             <div class="col-sm-12">
                 <h4>Results Achieved:</h4>
                 <ul class="text-muted text-med">
                     <li>174 courses listed</li>
                     <li>84 leads received</li>
                     <li>5 candidates registered</li>
                 </ul>
             </div>
         </div>
         <div class="row space-top-lg space-bottom-xl text-lg text-strong text-secondary">
             <div class="col-sm-6 col-sm-offset-2">
                 Investment: USD 1,800
             </div>
             <div class="col-sm-6 col-sm-offset-2">
                 Revenue: USD 7,500
             </div>
             <div class="col-sm-6 col-sm-offset-2">
                 ROI: 316%
             </div>
         </div>
         </div>
         </section>
         
         <section class="bg-light" id="story2">
         <div class="container">
         <img class="img-responsive pull-right space-top-xl space-bottom-xl"
             src="/images1/organisers_page_cima.png?v2_68_0" />
         <h2 class="space-top-xl">2. CIMA</h2>
         <h4 class="space-top-sm">Training provider profile:</h4>
         <p class="text-muted text-med">
             CIMA is a UK based professional body offering training and qualification in management accountancy and
             related subjects. It is the world’s largest and leading professional body of management accountants
             with more than 229,000 members and students in 176 countries.
         </p>
         <p class="text-muted text-med">
             CIMA promotes local education, training and management development operations, and new techniques through
             its research foundation and the dissemination of management accounting practices through publications
             and other media related activities.
         </p>
         <h4 class="space-top-sm">Objective:</h4>
         <p class="text-muted text-med">
             Source mid to senior level professionals in the UAE for the CIMA Programs.
         </p>
         <div class="row space-top-sm">
             <div class="col-sm-12">
                 <h4>Solution:</h4>
                 <p class="text-muted text-med">
                     Targeted mailshot to selected professionals on GulfTalent database, based on:
                 </p>
                 <ul class="text-muted text-med">
                     <li>Country of residence</li>
                     <li>Nationality</li>
                     <li>Income level</li>
                     <li>Profession</li>
                     <li>Educational qualification</li>
                 </ul>
             </div>
             <div class="col-sm-12">
                 <h4>Results Achieved:</h4>
                 <ul class="text-muted text-med">
                     <li>10,000 professionals emailed</li>
                     <li>60 leads received</li>
                     <li>3 candidates registered</li>
                 </ul>
             </div>
         </div>
         <div class="row space-top-lg space-bottom-xl text-lg text-strong text-secondary">
             <div class="col-sm-6 col-sm-offset-2">
                 Investment: USD 2,500
             </div>
             <div class="col-sm-6 col-sm-offset-2">
                 Revenue: USD 13,650
             </div>
             <div class="col-sm-6 col-sm-offset-2">
                 ROI: 450%
             </div>
         </div>
         </div>
         </section>
         
         <section class="bg-dark" id="story3">
         <div class="container">
         <img class="img-responsive pull-right space-top-xl"
             src="/images1/organisers_page_middle_earth.png?v2_68_0" />
         <h2 class="space-top-xl">3. Middle Earth HR</h2>
         <h4 class="space-top-sm">Training provider profile:</h4>
         <p class="text-muted text-med">
             Middle Earth HR is the largest HR certifying agency in Asia and the 7th largest HR certification body
             in the world in terms of number of professionals certified. Established in 1996, today it is one of
             the largest specialist training, education and knowledge support companies for HR professionals worldwide.
         </p>
         <p class="text-muted text-med">
             Middle Earth HR mentors and supports over 3,000 HR projects over 2,000 organizations annually through
             its faculty, project guidance cell and consulting team. It has trained more than 35,000 HR professionals
             from all levels across the globe so far.
         </p>
         <h4 class="space-top-sm">Objective:</h4>
         <p class="text-muted text-med">
             To source candidates for their new and upcoming courses in the Middle East market.
         </p>
         <div class="row space-top-sm">
             <div class="col-sm-12">
                 <h4>Solution:</h4>
                 <p class="text-muted text-med">
                     Dedicated page for course listing on GulfTalent with:
                 </p>
                 <ul class="text-muted text-med">
                     <li>Individual lead forms</li>
                     <li>Lead's dashboard</li>
                     <li>Real time enquiries</li>
                 </ul>
             </div>
             <div class="col-sm-12">
                 <h4>Results Achieved:</h4>
                 <ul class="text-muted text-med">
                     <li>60 courses listed</li>
                     <li>32 leads received</li>
                     <li>6 candidates registered</li>
                 </ul>
             </div>
         </div>
         <div class="row space-top-lg space-bottom-xl text-lg text-strong text-secondary">
             <div class="col-sm-6 col-sm-offset-2">
                 Investment: USD 1,800
             </div>
             <div class="col-sm-6 col-sm-offset-2">
                 Revenue: USD 4,800
             </div>
             <div class="col-sm-6 col-sm-offset-2">
                 ROI: 166%
             </div>
         </div>
         </div>
         </section>
      </script>
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