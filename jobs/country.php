<?php include('../header.php'); ?>

<main id="main-block">
   <div class="page-header">
      <div class="container">
         <div class="row">
            <div class="col-sm-24">
               <h1>Jobs By Country</h1>
               <h2>Find jobs in different countries in and outside the Middle East</h2>
            </div>
         </div>
      </div>
   </div>
   <div class="page-content">
      
      <div ng-controller="flashMessagesController"
         scroll-to-fix
         class="flashmessage"
         ng-cloak>
         <div class="container">
            <div class="row">
               <div class="col-sm-24">
                  <div class="alert alert-{{ flashMessage.type }} fade container-xs-height container-block space-bottom-sm">
                     <div class="col-xs-height col-middle pull-left">
                        <div class="media container-xs-height">
                           <div class="media-object col-xs-height col-middle">
                              <i class="fa fa-fw">
                              </i>
                           </div>
                           <div class="media-body col-xs-height col-middle text-xl">
                            
                             
                             
                             
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
      <div class="container">
         <div class="row">
            <div class="col-sm-24">
               <h3>
                  In Middle East
               </h3>
               <div class="row">
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                          <!--<a href="../uae/jobs.html" title="UAE"-->
                        <a href="#" title="UAE"

                           class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-2x hover-expand">
                                    <i class="flag flag-AE"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">UAE</h4>
                                 <span class="text-sm text-muted">
                                 (1,747)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                         <a href="#" title="Saudi Arabia" class="panel-body">
                        <!--<a href="../saudi-arabia/jobs.html" title="Saudi Arabia" class="panel-body">-->
                           <div class="media container-xs-height media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-2x hover-expand">
                                    <i class="flag flag-SA"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Saudi Arabia</h4>
                                 <span class="text-sm text-muted
                                    ">
                                 (432)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover 
                        ">
                        <!--<a href="#" title="Qatar" class="panel-body">-->
                            <a href="../qatar/jobs.html" title="Qatar" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-2x hover-expand">
                                    <i class="flag flag-QA"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Qatar</h4>
                                 <span class="text-sm
                                    text-muted
                                    ">
                                 (298)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover 
                        ">
                        <!--<a href="../kuwait/jobs.html" title="Kuwait" class="panel-body">-->
                           <a href="#" title="Kuwait" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-2x hover-expand">
                                    <i class="flag flag-KW"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Kuwait</h4>
                                 <span class="text-sm
                                    text-muted
                                    ">
                                 (121)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover 
                        ">
                        <!--<a href="#" title="Bahrain" class="panel-body">-->
                             <a href="../bahrain/jobs.html" title="Bahrain" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-2x hover-expand">
                                    <i class="flag flag-BH"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Bahrain</h4>
                                 <span class="text-sm text-muted">
                                 (100)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                        <!--<a href="../oman/jobs.html" title="Oman" class="panel-body">-->
                            <a href="#" title="Oman" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-2x hover-expand">
                                    <i class="flag flag-OM"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Oman</h4>
                                 <span class="text-sm text-muted">
                                 (84)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                       <!-- <a href="../jordan/jobs.html" title="Jordan" class="panel-body">-->
                              <a href="#" title="Jordan" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-2x hover-expand">
                                    <i class="flag flag-JO"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Jordan</h4>
                                 <span class="text-sm text-muted">
                                 (53)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                        <!--<a href="../egypt/jobs.html" title="Egypt" class="panel-body">-->
                            <a href="#" title="Egypt" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-2x hover-expand">
                                    <i class="flag flag-EG"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Egypt</h4>
                                 <span class="text-sm text-muted">
                                 (26)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                        <a href="#" title="Lebanon" class="panel-body">
                           <!-- <a href="../lebanon/jobs.html" title="Lebanon" class="panel-body">-->
                           <div class="media container-xs-height media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-2x hover-expand">
                                    <i class="flag flag-LB"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Lebanon</h4>
                                 <span class="text-sm text-muted">
                                 (22)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                        <!--<a href="../iraq/jobs.html" title="Iraq" class="panel-body">-->
                            <a href="#" title="Iraq" class="panel-body">
                           <div class="media container-xs-height media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-2x hover-expand">
                                    <i class="flag flag-IQ"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Iraq</h4>
                                 <span class="text-sm text-muted">
                                 (20)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
               <h3>
                  Outside Middle East
               </h3>
               <div class="row">
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                       <!--<a href="../india/jobs.html" title="India" class="panel-body">-->
                             <a href="#" title="India" class="panel-body">
                           <div class="media container-xs-height media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-2x hover-expand">
                                    <i class="flag flag-IN"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">India</h4>
                                 <span class="text-sm text-muted">
                                 (18)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                       <!--<a href="../africa/jobs.html" title="Africa" class="panel-body">-->
                            <a href="#" title="Africa" class="panel-body">
                           <div class="media container-xs-height media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-2x hover-expand">
                                    <img src="../images/icons/40x40/africaa95c.png?v2_68_0"/>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Africa</h4>
                                 <span class="text-sm text-muted">
                                 (51)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                        <!--<a href="../far-east/jobs.html" title="Far East" class="panel-body">-->
                             <a href="#" title="Far East" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-2x hover-expand">
                                    <img src="../images/icons/40x40/far-easta95c.png?v2_68_0"/>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Far East</h4>
                                 <span class="text-sm text-muted">
                                 (70)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                        <!--<a href="../europe/jobs.html" title="Europe" class="panel-body">-->
                             <a href="#" title="Europe" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-2x hover-expand">
                                    <img src="../images/icons/40x40/europea95c.png?v2_68_0"/>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Europe</h4>
                                 <span class="text-sm text-muted">
                                 (25)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                        <!--<a href="../other/jobs.html" title="Other Countries" class="panel-body">-->
                            <a href="#" title="Other Countries" class="panel-body">
                           <div class="media container-xs-height media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-2x hover-expand">
                                    <img src="../images/icons/40x40/other-countriesa95c.png?v2_68_0"/>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Other Countries</h4>
                                 <span class="text-sm text-muted">
                                 (34)
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
   </div>
  <!-- <section ng-controller="widgetFeedbackController">
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
   </section>-->
</main>
<!-- Google Code for Remarketing Tag -->
<!--<script type="text/javascript">
   /* <![CDATA[ */
   var google_conversion_id = 1071034449;
   var google_custom_params = window.google_tag_params;
   var google_remarketing_only = true;
   /* ]]> */
</script>
<script type="text/javascript" async="true" src="../../www.googleadservices.com/pagead/f.txt"></script>
<noscript>
   <div style="display:inline;">
      <img height="1" width="1" style="border-style:none;" alt="" src="http://googleads.g.doubleclick.net/pagead/viewthroughconversion/1071034449/?value=0&amp;guid=ON&amp;script=0"/>
   </div>
</noscript>
<div id="fb-root"></div>
<script>
   (function(window, undefined) {
       window.GT = window.GT || {};
       window.GT.fbAppId = 433063976767637;
       window.GT.backendValues = window.GT.backendValues || {};
       window.GT.backendValues.checkoutLogoUrl = '../assets/img/logo_medium_transparenta95c.png?v2_68_0';
       window.__name__ = window.name;
   
       //Needs to be loaded before angular-file-upload-shim(.min).js
       window.FileAPI = {
           jsPath: '/assets/js/',
           staticPath: '/assets/js/'
       }
   }(window));
   
</script>
<script>
   window.name = window.__name__;
</script>
<!--[if lte IE 8]>
<script src="/assets/js/vendor-ie.min.js?v2_68_0"></script>
<![endif]-->
<!--<script src="../assets/js/vendor-common.mina95c.js?v2_68_0"></script>
<script src="../js/b0dcf21a95c.js?v2_68_0"></script>
<script>
   angular.module('GT.lib.bridge')
       .value('backendValues', window.GT.backendValues)
       .constant('gtClient', 'www.gulftalent.com v2.68.0');
   angular.module('GT.app')
       .value('sessionUserType', 'default')
       .value('sessionUserLevel', '');
</script>
<script>
   angular
       .module('GT.lib.ui')
       .value('flashMessages', []);
   
   angular
       .module('GT.app.gtFacebook')
       .value('gtFacebookAppId', 433063976767637);
</script>
<script>
   angular
       .module('GT.lib.ads')
       .value('ads', [window.googleslot])
       .value('googletag', window.googletag);
</script>
<script>
   (function(d, s, id){
       var js, fjs = d.getElementsByTagName(s)[0];
       if (d.getElementById(id)) {return;}
       js = d.createElement(s); js.id = id;
       js.src = "../../connect.facebook.net/en_US/sdk.js";
       fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
</body>
<!-- Mirrored from www.gulftalent.com/jobs/country by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Mar 2018 05:32:45 GMT -->
<!--</html>-->

<?php include('../footer.php'); ?>