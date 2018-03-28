
<?php include('../header.php'); ?>
<main id="main-block"
   gt-scroll-on="facetedSearch.pagination:changed"
   gt-scroll-speed="50"
   >
   <div class="page-header">
      <div class="container">
         <div class="row">
            <div class="col-sm-24">
               <div class="row">
                  <div class="col-sm-20">
                     <h1>RSS Feeds</h1>
                     <h2>Find links to selected GulfTalent job listings in an RSS feed</h2>
                  </div>
                  <div class="col-sm-4">
                     <div class="text-right space-top-sm">
                        <p>
                           <span class="fa-stack">
                           <a gt-modal-static="'feedsDesc'">
                           <i class="fa fa-stack-2x fa-fw fa-square"></i>
                           <i class="fa fa-stack-1x fa-fw fa-question"></i>
                           </a>
                           </span></br>
                           <span class="fa-stack">
                           <a gt-modal-static="'feedsTerms'">
                           <i class="fa fa-stack-2x fa-fw fa-square"></i>
                           <i class="fa fa-stack-1x fa-fw fa-edit"></i>
                           </a>
                           </span>
                           <span class="fa-stack">
                           <a href="contact-us.html">
                           <i class="fa fa-stack-2x fa-fw fa-square"></i>
                           <i class="fa fa-stack-1x fa-fw fa-phone"></i>
                           </a>
                           </span>
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="page-content">
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
      <div class="container">
         <div class="row">
            <div class="col-sm-24">
               <div class="row">
                  <div class="col-sm-8">
                     <div class="panel panel-default">
                        <div class="panel-heading">
                           <h3 class="panel-title">Feeds by City</h3>
                        </div>
                        <div class="list-group">
                           <div class="list-group-item">
                              <span class="text-medium text-muted">Jobs in Kuala lampur</span>
                              <ul class="list-inline pull-right">
                                 <li><a href="home/canPositions-ViewList-RSS-s58ca.php?from_search=true&amp;frmPositionCountry=10111112000000" target="_blank"><i class="fa fa-rss fa-2x"></i></a></li>
                                 <li><a gt-modal-static="'addFeedToSite?feedCode=LocSaudi'"><i class="fa fa-plus-circle fa-2x"></i></a></li>
                              </ul>
                           </div>
                           <div class="list-group-item">
                              <span class="text-medium text-muted">Job in Selongar</span>
                              <ul class="list-inline pull-right">
                                 <li><a href="home/canPositions-ViewList-RSS-s4059.php?from_search=true&amp;frmPositionCountry=10111111000000" target="_blank"><i class="fa fa-rss fa-2x"></i></a></li>
                                 <li><a gt-modal-static="'addFeedToSite?feedCode=LocUAE'"><i class="fa fa-plus-circle fa-2x"></i></a></li>
                              </ul>
                           </div>
                           <div class="list-group-item">
                              <span class="text-medium text-muted">Jobs in Penang</span>
                              <ul class="list-inline pull-right">
                                 <li><a href="home/canPositions-ViewList-RSS-sddc5.php?from_search=true&amp;frmPositionCountry=10111113000000" target="_blank"><i class="fa fa-rss fa-2x"></i></a></li>
                                 <li><a gt-modal-static="'addFeedToSite?feedCode=LocKuwait'"><i class="fa fa-plus-circle fa-2x"></i></a></li>
                              </ul>
                           </div>
                           <div class="list-group-item">
                              <span class="text-medium text-muted">Jobs in Johar</span>
                              <ul class="list-inline pull-right">
                                 <li><a href="home/canPositions-ViewList-RSS-s7a6f.php?from_search=true&amp;frmPositionCountry=10111115000000" target="_blank"><i class="fa fa-rss fa-2x"></i></a></li>
                                 <li><a gt-modal-static="'addFeedToSite?feedCode=LocBahrain'"><i class="fa fa-plus-circle fa-2x"></i></a></li>
                              </ul>
                           </div>
                           <div class="list-group-item">
                              <span class="text-medium text-muted">Jobs in Sarawak</span>
                              <ul class="list-inline pull-right">
                                 <li><a href="home/canPositions-ViewList-RSS-s0913.php?from_search=true&amp;frmPositionCountry=10111114000000" target="_blank"><i class="fa fa-rss fa-2x"></i></a></li>
                                 <li><a gt-modal-static="'addFeedToSite?feedCode=LocQatar'"><i class="fa fa-plus-circle fa-2x"></i></a></li>
                              </ul>
                           </div>
                           <div class="list-group-item">
                              <span class="text-medium text-muted">Jobs in Melaka</span>
                              <ul class="list-inline pull-right">
                                 <li><a href="home/canPositions-ViewList-RSS-sa897.php?from_search=true&amp;frmPositionCountry=10111116000000" target="_blank"><i class="fa fa-rss fa-2x"></i></a></li>
                                 <li><a gt-modal-static="'addFeedToSite?feedCode=LocOman'"><i class="fa fa-plus-circle fa-2x"></i></a></li>
                              </ul>
                           </div>
                           <div class="list-group-item">
                              <span class="text-medium text-muted">Jobs in Lebanon</span>
                              <ul class="list-inline pull-right">
                                 <li><a href="home/canPositions-ViewList-RSS-s5051.php?from_search=true&amp;frmPositionCountry=10229411000000" target="_blank"><i class="fa fa-rss fa-2x"></i></a></li>
                                 <li><a gt-modal-static="'addFeedToSite?feedCode=LocLebanon'"><i class="fa fa-plus-circle fa-2x"></i></a></li>
                              </ul>
                           </div>
                           <div class="list-group-item">
                              <span class="text-medium text-muted">Jobs in Sabah</span>
                              <ul class="list-inline pull-right">
                                 <li><a href="home/canPositions-ViewList-RSS-s22d1.php?from_search=true&amp;frmPositionCountry=10229362000000" target="_blank"><i class="fa fa-rss fa-2x"></i></a></li>
                                 <li><a gt-modal-static="'addFeedToSite?feedCode=LocEgypt'"><i class="fa fa-plus-circle fa-2x"></i></a></li>
                              </ul>
                           </div>
                           <div class="list-group-item">
                              <span class="text-medium text-muted">Jobs in Perak</span>
                              <ul class="list-inline pull-right">
                                 <li><a href="home/canPositions-ViewList-RSS-se13e.php?from_search=true&amp;frmPositionCountry=10229117000000" target="_blank"><i class="fa fa-rss fa-2x"></i></a></li>
                                 <li><a gt-modal-static="'addFeedToSite?feedCode=LocJordan'"><i class="fa fa-plus-circle fa-2x"></i></a></li>
                              </ul>
                           </div>
                           <div class="list-group-item">
                              <span class="text-medium text-muted">Jobs in Pehang</span>
                              <ul class="list-inline pull-right">
                                 <li><a href="home/canPositions-ViewList-RSS-s002a.php?from_search=true&amp;frmPositionCountry=10229120000000" target="_blank"><i class="fa fa-rss fa-2x"></i></a></li>
                                 <li><a gt-modal-static="'addFeedToSite?feedCode=LocIraq'"><i class="fa fa-plus-circle fa-2x"></i></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-8">
                     <div class="panel panel-default">
                        <div class="panel-heading">
                           <h3 class="panel-title">Feeds by Function</h3>
                        </div>
                        <div class="list-group">
                           <div class="list-group-item">
                              <span class="text-medium text-muted">Jobs in Engineering</span>
                              <ul class="list-inline pull-right">
                                 <li><a href="home/canPositions-ViewList-RSS-s205f.php?from_search=true&amp;jobcat_group=1&amp;t=2" target="_blank"><i class="fa fa-rss fa-2x"></i></a></li>
                                 <li><a gt-modal-static="'addFeedToSite?feedCode=CatEng'"><i class="fa fa-plus-circle fa-2x"></i></a></li>
                              </ul>
                           </div>
                           <div class="list-group-item">
                              <span class="text-medium text-muted">Jobs in Sales</span>
                              <ul class="list-inline pull-right">
                                 <li><a href="home/canPositions-ViewList-RSS-s1de0.php?from_search=true&amp;jobcat_group=8&amp;t=2" target="_blank"><i class="fa fa-rss fa-2x"></i></a></li>
                                 <li><a gt-modal-static="'addFeedToSite?feedCode=CatSales'"><i class="fa fa-plus-circle fa-2x"></i></a></li>
                              </ul>
                           </div>
                           <div class="list-group-item">
                              <span class="text-medium text-muted">Jobs in Finance</span>
                              <ul class="list-inline pull-right">
                                 <li><a href="home/canPositions-ViewList-RSS-s21d4.php?from_search=true&amp;jobcat_group=2&amp;t=2" target="_blank"><i class="fa fa-rss fa-2x"></i></a></li>
                                 <li><a gt-modal-static="'addFeedToSite?feedCode=CatFinance'"><i class="fa fa-plus-circle fa-2x"></i></a></li>
                              </ul>
                           </div>
                           <div class="list-group-item">
                              <span class="text-medium text-muted">Jobs in HR/Admin</span>
                              <ul class="list-inline pull-right">
                                 <li><a href="home/canPositions-ViewList-RSS-sf915.php?from_search=true&amp;jobcat_group=3&amp;t=2" target="_blank"><i class="fa fa-rss fa-2x"></i></a></li>
                                 <li><a gt-modal-static="'addFeedToSite?feedCode=CatHR'"><i class="fa fa-plus-circle fa-2x"></i></a></li>
                              </ul>
                           </div>
                           <div class="list-group-item">
                              <span class="text-medium text-muted">Jobs in Marketing</span>
                              <ul class="list-inline pull-right">
                                 <li><a href="home/canPositions-ViewList-RSS-sdb96.php?from_search=true&amp;jobcat_group=7&amp;t=2" target="_blank"><i class="fa fa-rss fa-2x"></i></a></li>
                                 <li><a gt-modal-static="'addFeedToSite?feedCode=CatMarketing'"><i class="fa fa-plus-circle fa-2x"></i></a></li>
                              </ul>
                           </div>
                           <div class="list-group-item">
                              <span class="text-medium text-muted">Jobs in IT</span>
                              <ul class="list-inline pull-right">
                                 <li><a href="home/canPositions-ViewList-RSS-s4d88.php?from_search=true&amp;jobcat_group=4&amp;t=2" target="_blank"><i class="fa fa-rss fa-2x"></i></a></li>
                                 <li><a gt-modal-static="'addFeedToSite?feedCode=CatIT'"><i class="fa fa-plus-circle fa-2x"></i></a></li>
                              </ul>
                           </div>
                           <div class="list-group-item">
                              <span class="text-medium text-muted">Jobs in Legal</span>
                              <ul class="list-inline pull-right">
                                 <li><a href="home/canPositions-ViewList-RSS-s0247.php?from_search=true&amp;jobcat_group=5&amp;t=2" target="_blank"><i class="fa fa-rss fa-2x"></i></a></li>
                                 <li><a gt-modal-static="'addFeedToSite?feedCode=CatLegal'"><i class="fa fa-plus-circle fa-2x"></i></a></li>
                              </ul>
                           </div>
                           <div class="list-group-item">
                              <span class="text-medium text-muted">Jobs in Management</span>
                              <ul class="list-inline pull-right">
                                 <li><a href="home/canPositions-ViewList-RSS-s3e6f.php?from_search=true&amp;jobcat_group=6&amp;t=2" target="_blank"><i class="fa fa-rss fa-2x"></i></a></li>
                                 <li><a gt-modal-static="'addFeedToSite?feedCode=CatMngt'"><i class="fa fa-plus-circle fa-2x"></i></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-8">
                     <div class="panel panel-default">
                        <div class="panel-heading">
                           <h3 class="panel-title">Feeds by Industry</h3>
                        </div>
                        <div class="list-group">
                           <div class="list-group-item">
                              <span class="text-medium text-muted">Jobs in Construction</span>
                              <ul class="list-inline pull-right">
                                 <li><a href="home/canPositions-ViewList-RSS-s0ab9.php?from_search=true&amp;industry_group=2&amp;t=2" target="_blank"><i class="fa fa-rss fa-2x"></i></a></li>
                                 <li><a gt-modal-static="'addFeedToSite?feedCode=IndCons'"><i class="fa fa-plus-circle fa-2x"></i></a></li>
                              </ul>
                           </div>
                           <div class="list-group-item">
                              <span class="text-medium text-muted">Jobs in Banking</span>
                              <ul class="list-inline pull-right">
                                 <li><a href="home/canPositions-ViewList-RSS-s4f88.php?from_search=true&amp;industry_group=1&amp;t=2" target="_blank"><i class="fa fa-rss fa-2x"></i></a></li>
                                 <li><a gt-modal-static="'addFeedToSite?feedCode=IndBank'"><i class="fa fa-plus-circle fa-2x"></i></a></li>
                              </ul>
                           </div>
                           <div class="list-group-item">
                              <span class="text-medium text-muted">Jobs in Retail</span>
                              <ul class="list-inline pull-right">
                                 <li><a href="home/canPositions-ViewList-RSS-s4ee1.php?from_search=true&amp;industry_group=5&amp;t=2" target="_blank"><i class="fa fa-rss fa-2x"></i></a></li>
                                 <li><a gt-modal-static="'addFeedToSite?feedCode=IndRetail'"><i class="fa fa-plus-circle fa-2x"></i></a></li>
                              </ul>
                           </div>
                           <div class="list-group-item">
                              <span class="text-medium text-muted">Jobs in Telecoms/IT</span>
                              <ul class="list-inline pull-right">
                                 <li><a href="home/canPositions-ViewList-RSS-se89c.php?from_search=true&amp;industry_group=6&amp;t=2" target="_blank"><i class="fa fa-rss fa-2x"></i></a></li>
                                 <li><a gt-modal-static="'addFeedToSite?feedCode=IndTelecoms'"><i class="fa fa-plus-circle fa-2x"></i></a></li>
                              </ul>
                           </div>
                           <div class="list-group-item">
                              <span class="text-medium text-muted">Jobs in Oil and Gas</span>
                              <ul class="list-inline pull-right">
                                 <li><a href="home/canPositions-ViewList-RSS-s11a9.php?from_search=true&amp;industry_group=4&amp;t=2" target="_blank"><i class="fa fa-rss fa-2x"></i></a></li>
                                 <li><a gt-modal-static="'addFeedToSite?feedCode=IndOil'"><i class="fa fa-plus-circle fa-2x"></i></a></li>
                              </ul>
                           </div>
                           <div class="list-group-item">
                              <span class="text-medium text-muted">Jobs in Education</span>
                              <ul class="list-inline pull-right">
                                 <li><a href="home/canPositions-ViewList-RSS-s445a.php?from_search=true&amp;industry_group=3&amp;t=2" target="_blank"><i class="fa fa-rss fa-2x"></i></a></li>
                                 <li><a gt-modal-static="'addFeedToSite?feedCode=IndEducation'"><i class="fa fa-plus-circle fa-2x"></i></a></li>
                              </ul>
                           </div>
                           <div class="list-group-item">
                              <span class="text-medium text-muted">Jobs in Transport &amp; Logistics</span>
                              <ul class="list-inline pull-right">
                                 <li><a href="home/canPositions-ViewList-RSS-s4e4b.php?from_search=true&amp;industry_group=7&amp;t=2" target="_blank"><i class="fa fa-rss fa-2x"></i></a></li>
                                 <li><a gt-modal-static="'addFeedToSite?feedCode=IndTransport'"><i class="fa fa-plus-circle fa-2x"></i></a></li>
                              </ul>
                           </div>
                           <div class="list-group-item">
                              <span class="text-medium text-muted">Jobs in Travel &amp; Hospitality</span>
                              <ul class="list-inline pull-right">
                                 <li><a href="home/canPositions-ViewList-RSS-s5c84.php?from_search=true&amp;industry_group=8&amp;t=2" target="_blank"><i class="fa fa-rss fa-2x"></i></a></li>
                                 <li><a gt-modal-static="'addFeedToSite?feedCode=IndTravel'"><i class="fa fa-plus-circle fa-2x"></i></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <section ng-controller="widgetFeedbackController">
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
   </section>
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