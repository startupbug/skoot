
<?php include('../header.php'); ?>
<main id="main-block">
   <div class="page-content">
      <section class="section-primary-bg">
         <!--<div ng-controller="flashMessagesController" id="flash-messages-persistent" ng-cloak>
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
         </div>-->
         <div class="flashmessage">
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
                        <form action="https://www.gulftalent.com/journalists?msg=canInbound-Media-msgdone"
                           method="post"
                           novalidate
                           gt-validate
                           gt-submit
                           class="show-print-block">
                           <div class="form-group">
                              <input type="text" id="pressMailingList_name" name="pressMailingList[name]" required="required"    ng-model="form.name" gt-model-value="" message="Please enter first name" class="form-control" placeholder="Your Full Name *" required="required" />
                           </div>
                           <div class="form-group">
                              <input type="text" id="pressMailingList_position" name="pressMailingList[position]" required="required"    ng-model="form.position" gt-model-value="" message="Please enter your position" class="form-control" placeholder="Your Position *" required="required" />
                           </div>
                           <div class="form-group">
                              <input type="text" id="pressMailingList_publication" name="pressMailingList[publication]" required="required"    ng-model="form.publication" gt-model-value="" message="Please enter name of your Publication" class="form-control" required="required" placeholder="Name of your Publication *" />
                           </div>
                           <div class="form-group">
                              <input type="text" id="pressMailingList_company" name="pressMailingList[company]"    ng-model="form.company" gt-model-value="" message="Please enter name of your Organisation" class="form-control" placeholder="Name of your Organisation (if different)" />
                           </div>
                           <div class="form-group">
                              <input type="text" id="pressMailingList_phone" name="pressMailingList[phone]" required="required"    ng-model="form.phone" gt-model-value="" message="Please enter your contact telephone number" class="form-control" required="required" placeholder="Contact telephone number *" />
                           </div>
                           <div class="form-group">
                              <input type="text" id="pressMailingList_email" name="pressMailingList[email]" required="required"    ng-model="form.email" gt-model-value="" message="Please enter your contact email" class="form-control" placeholder="Contact Email *" required="required" />
                           </div>
                           <div class="form-group">
                              <textarea id="pressMailingList_comment" name="pressMailingList[comment]"    ng-model="form.comment" gt-model-value="" class="form-control" rows="5" placeholder="Comments (Optional)"></textarea>
                           </div>
                           <div class="form-group">
                              <input type="hidden" id="pressMailingList__token" name="pressMailingList[_token]"    class="form-control input-lg" value="57f35aff4181d108acab8f691422427171f833c1" />
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
   <!--<section ng-controller="widgetFeedbackController">
      <div class="fade"
         ng-class="{'modal-backdrop in': !isWidgetCollapsed}"
         ng-click="isWidgetCollapsed=true"
         ng-init="isWidgetCollapsed=true"></div>
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
   </section>-->
   <!--<section class="floating-widget-container affix-left center hidden-print">
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
   </section>-->
</main>

<?php include('../footer.php'); ?>