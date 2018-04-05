<?php include('../header.php'); ?>
<main id="main-block">
   <div class="page-content">
      <section class="section-primary-bg">
         <div>
            <div class="container">
               <div class="row">
                  <div class="col-sm-24">
                     <!--<div class="alert alert-{{ flashMessage.type }} fade container-xs-height container-block space-bottom-sm"
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
                     </div>-->
                  </div>
               </div>
            </div>
         </div>
        <!-- <div ng-controller="flashMessagesController"
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
         </div>-->
      </section>
      <div style="background-image: url(<?php echo $base_url;?>assets/img/featured/Services_HR.png)" class="jumbotron bg-cover">
         <div class="container space-top-xxl space-bottom-xxl">
            <div class="row">
               <div class="col-sm-24">
                  <h1 class="text-center space-top-xl space-bottom-xl f_join">Join Middle East's largest HR network</h1>
               </div>
            </div>
            <div class="row row-xs-height">
               <div class="col-xs-height col-middle col-xs-12 text-right">
                  <h3 class=" space-bottom-none space-top-none f_event f_call">Call Now +971 4 278 5200</h3>
               </div>
               <div class="col-xs-height col-middle col-xs-2 text-center">
                  <h3 class=" space-bottom-none space-top-none">or</h3>
               </div>
               <div class="col-xs-height col-middle col-xs-10 text-left">
                  <a gt-modal-static="&#039;mailpoolSubscription&#039;" class="btn btn-tertiary btn-lg f_btn_call">
                  Sign up
                  </a>
               </div>
            </div>
         </div>
      </div>
      <section class="bg-light">
         <div class="container">
            <div class="row">
               <div class="col-sm-24">
                  <h2 class="text-center space-top-xl space-bottom-xl content_f">
                     Be a part of our <strong class="text-hg text-primary text-elegant f_no">240,000+</strong> community of HR Professionals
                  </h2>
               </div>
               <div class="col-sm-24 space-bottom-xxl text-center">
                  <img src="<?php echo $base_url;?>assets/img/featured/middle_east_map.png">
               </div>
            </div>
         </div>
      </section>
      <section class="bg-dark">
         <div class="container">
            <div class="row">
               <h1 class="text-center space-top-xl space-bottom-xl">Valuable resources at your fingertips</h1>
               <div class="col-sm-8 space-bottom-xl">
                  <div class="panel panel-default section-courses">
                     <div class="panel-body">
                        <div class="media text-center">
                           <div class="media-object inline">
                              <div class="icon icon-circle icon-3x icon-circle-section hover-expand">
                                 <i class="fa fa-teacher"></i>
                              </div>
                           </div>
                        </div>
                        <div class="text-xxl text-muted text-heading space-top-lg text-center space-bottom-med">
                           HR Courses
                           <div class="row">
                              <div class="col-sm-14 col-sm-offset-5">
                                 <hr class="space-top-sm f_line" />
                              </div>
                           </div>
                        </div>
                        <ul class="list-symbol-bullet list-symbol-section text-muted text-med space-bottom-xl">
                           <li>Develop your HR skills</li>
                           <li>Courses across the GCC</li>
                           <li>Reputed training providers</li>
                        </ul>
                        <div class="text-center">
                           <a href="courses.html" class="btn btn-block btn-lg btn-section">
                           View HR Courses
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-8 space-bottom-xl">
                  <div class="panel panel-default section-events">
                     <div class="panel-body">
                        <div class="media text-center">
                           <div class="media-object inline">
                              <div class="icon icon-circle icon-3x icon-circle-section hover-expand">
                                 <i class="fa fa-calendar"></i>
                              </div>
                           </div>
                        </div>
                        <div class="text-xxl text-muted text-heading space-top-lg text-center space-bottom-med">
                           HR Events
                           <div class="row">
                              <div class="col-sm-14 col-sm-offset-5">
                                 <hr class="space-top-sm f_border" />
                              </div>
                           </div>
                        </div>
                        <ul class="list-symbol-bullet list-symbol-section text-muted text-med space-bottom-xl">
                           <li>Stay updated with premier events</li>
                           <li>Network with HR Professionals</li>
                           <li>Share you insights</li>
                        </ul>
                        <div class="text-center">
                           <a href="events.html" class="btn btn-block btn-lg btn-section">
                           View HR Events
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-8 space-bottom-xl">
                  <div class="panel panel-default section-resources">
                     <div class="panel-body">
                        <div class="media text-center">
                           <div class="media-object inline">
                              <div class="icon icon-circle icon-3x icon-circle-section hover-expand">
                                 <i class="fa fa-trend-variable"></i>
                              </div>
                           </div>
                        </div>
                        <div class="text-xxl text-muted text-heading space-top-lg text-center space-bottom-med">
                           HR Tools &amp; Resources
                           <div class="row">
                              <div class="col-sm-14 col-sm-offset-5">
                                 <hr class="space-top-sm f_bottom" />
                              </div>
                           </div>
                        </div>
                        <ul class="list-symbol-bullet list-symbol-section text-muted text-med space-bottom-xl">
                           <li>Employment news &amp; research</li>
                           <li>Check Market Salaries</li>
                           <li>Labor laws, guides on hiring</li>
                        </ul>
                        <div class="text-center">
                           <a href="resources.html" class="btn btn-lg btn-block btn-section">View HR Resources</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <div style="background-image: url(<?php echo $base_url;?>assets/img/featured/JobLane_Services_ForHR.png)" class="jumbotron bg-cover">
         <div class="container">
            <div class="row">
               <div class="col-sm-24">
                  <h1 class="text-hg text-center space-top-lg space-bottom-lg">Register for regular HR updates</h1>
               </div>
               <div class="col-sm-4 col-sm-offset-10 space-bottom-lg">
                  <button type="button" gt-modal-static="'mailpoolSubscription'" class="btn btn-tertiary btn-block text-xxl f_btn_call">Sign Up For Updates</button>
               </div>
            </div>
         </div>
      </div>
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