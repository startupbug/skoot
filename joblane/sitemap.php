
<?php include('../header.php'); ?>
<main id="main-block" >
   <div class="page-header">
      <div class="container">
         <div class="row">
            <div class="col-sm-24">
               <h1>Site Map</h1>
            </div>
         </div>
      </div>
   </div>
   <div class="page-content">
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
     <!-- <div class="flashmessage">
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
      <div class="container">
         <div class="row">
            <div class="col-sm-24">
               <div class="panel panel-default">
                  <div class="panel-body">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="panel panel-default panel-bordered" id="panel-candidates">
                              <div class="list-group">
                                 <div class="list-group-item text-xxl text-heading text-section">Candidates</div>
                                 <a class="list-group-item"
                                    href="#">
                                 Find Jobs
                                 </a>
                                 <a class="list-group-item"
                                    href="#">
                                 Register for jobs
                                 </a>
                                 <a class="list-group-item"
                                    href="#">
                                 Sign up for Job alerts
                                 </a>
                                 <a class="list-group-item"
                                    href="#">
                                 Build your GulfTalent CV
                                 </a>
                                 <a class="list-group-item"
                                    href="#">
                                 Candidate login
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-12">
                           <div class="panel panel-default panel-bordered" id="panel-employers">
                              <div class="list-group">
                                 <div class="list-group-item text-xxl text-heading text-section">Employers</div>
                                 <a class="list-group-item"
                                    href="#">
                                 Recruiting solutions for Employers
                                 </a>
                                 <a href="#"
                                    class="list-group-item">
                                 Free CV Search test drive
                                 </a>
                                 <a class="list-group-item"
                                    href="#">
                                 Brand &amp; advertise
                                 </a>
                                 <a class="list-group-item"
                                    href="#">
                                 Employer Login
                                 </a>
                                 <a gt-modal-contact-forms-enquiry
                                    class="#">
                                 Make an enquiry
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="panel panel-default panel-bordered" id="panel-courses">
                              <div class="list-group">
                                 <div class="list-group-item text-xxl text-heading text-section">Courses</div>
                                 <a class="list-group-item"
                                    href="#">
                                 Browse Courses
                                 </a>
                                 <a class="list-group-item"
                                    href="#">
                                 Courses by category
                                 </a>
                                 <a class="list-group-item"
                                    href="#">
                                 Courses by location
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-12">
                           <div class="panel panel-default panel-bordered" id="panel-events">
                              <div class="list-group">
                                 <div class="list-group-item text-xxl text-heading text-section">Events</div>
                                 <a class="list-group-item"
                                    href="#">
                                 Browse Events
                                 </a>
                                 <a class="list-group-item"
                                    href="#">
                                 Events by category
                                 </a>
                                 <a class="list-group-item"
                                    href="#">
                                 Events by location
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="panel panel-default panel-bordered" id="panel-resources">
                              <div class="list-group">
                                 <div class="list-group-item text-xxl text-heading text-section">Resources</div>
                                 <a class="list-group-item"
                                    href="#">
                                 Employment news
                                 </a>
                                 <a class="list-group-item"
                                    href="#">
                                 Market research reports
                                 </a>
                                 <a class="list-group-item"
                                    href="#">
                                 Salary calculator
                                 </a>
                                 <a class="list-group-item"
                                    href="#">
                                 Job Search Support
                                 </a>
                                 <a class="list-group-item"
                                    href="#">
                                 Labour laws
                                 </a>
                                 <a class="list-group-item"
                                    href="#">
                                 Public holidays
                                 </a>
                                 <a class="list-group-item"
                                    href="#">
                                 HR service providers
                                 </a>
                                 <a class="list-group-item"
                                    href="#">
                                 Guides to hiring
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-12">
                           <div class="panel panel-default panel-bordered" id="panel-gulftalent">
                              <div class="list-group">
                                 <div class="list-group-item text-xxl text-heading text-section">GulfTalent</div>
                                 <a class="list-group-item"
                                    href="#">
                                 About us
                                 </a>
                                 <a class="list-group-item"
                                    href="#">
                                 TV coverage
                                 </a>
                                 <a class="list-group-item"
                                    href="#">
                                 Print &amp; online coverage
                                 </a>
                                 <a class="list-group-item"
                                    href="#">
                                 Contact us
                                 </a>
                              </div>
                           </div>
                           <div class="panel panel-default panel-bordered" id="panel-other-services">
                              <div class="list-group">
                                 <div class="list-group-item text-xxl text-heading text-section">Other Services</div>
                                 <a class="list-group-item"
                                    href="#">
                                 For affiliates
                                 </a>
                                 <a class="list-group-item"
                                    href="#">
                                 For HR professionals
                                 </a>
                                 <a class="list-group-item"
                                    href="#">
                                 For advertising agencies 
                                 </a>
                                 <a class="list-group-item"
                                    href="#">
                                 For event organisers
                                 </a>
                                 <a class="list-group-item"
                                    href="#">
                                 For course organisers
                                 </a>
                                 <a class="list-group-item"
                                    href="#">
                                 For journalists
                                 </a>
                                 <a class="list-group-item"
                                    href="#">
                                 For universities
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   
</main>
<?php include('../footer.php'); ?>