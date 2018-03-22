<?php include('../header.php'); ?>
<main id="main-block"
   gt-scroll-on="facetedSearch.pagination:changed"
   gt-scroll-speed="50"
   >
   <div class="page-header">
      <div class="container">
         <div class="row">
            <div class="col-sm-24">
               <h1>Jobs By Category</h1>
               <h2>Find jobs in different categories of Malaysia</h2>
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
      <div class="container">
         <div class="row">
            <div class="col-sm-24">
               <div class="row">
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover ">
                        <!--<a href="category/academic.html" title="Education &amp; Teaching" class="panel-body">-->
                            <a href="#" title="Education &amp; Teaching" class="panel-body">
                           <div class="media container-xs-height media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-teacher"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Academic</h4>
                                 <span class="text-sm text-muted">
                                 (42)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                        <!--<a href="category/accounting.html" title="Accounting &amp; Audit" class="panel-body">-->
                            <a href="#" title="Accounting &amp; Audit" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-book-pen"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Accounting</h4>
                                 <span class="text-sm text-muted">
                                 (156)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                        <!--<a href="category/admin.html" title="Administration &amp; Secretarial" class="panel-body">-->
                             <a href="#" title="Administration &amp; Secretarial" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-ring-binder"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Admin</h4>
                                 <span class="text-sm text-muted">
                                 (150)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                        <!--<a href="category/architecture.html" title="Architecture" class="panel-body">-->
                            <a href="#" title="Architecture" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-buildings"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Architecture</h4>
                                 <span class="text-sm text-muted">
                                 (117)
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
                     <!--<a href="category/catering.html" title="Catering, Food Services &amp; Restaurants" class="panel-body">-->
                        <a href="#" title="Catering, Food Services &amp; Restaurants" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-chef"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Catering</h4>
                                 <span class="text-sm text-muted">
                                 (152)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                        <!--<a href="category/chemical-engineering.html" title="Engineering - Chemical &amp; Petrochemical" class="panel-body">-->
                            <a href="#" title="Engineering - Chemical &amp; Petrochemical" class="panel-body">
                           <div class="media container-xs-height media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-test-tube"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Chemical Engineering</h4>
                                 <span class="text-sm text-muted">
                                 (13)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                       <!-- <a href="category/civil-engineering.html" title="Engineering - Civil &amp; Construction"
                        class="panel-body">-->
                        <a href="#" title="Engineering - Civil &amp; Construction"
                        class="panel-body">
                           <div class="media container-xs-height media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-house-measured"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Civil Engineering</h4>
                                 <span class="text-sm text-muted">
                                 (482)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                        <!--<a href="category/customer-service.html" title="Customer Service" class="panel-body">-->
                            <a href="#" title="Customer Service" class="panel-body">
                           <div class="media container-xs-height media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-headphones"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Customer Service</h4>
                                 <span class="text-sm text-muted">
                                 (81)
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
                        <!--<a href="category/design.html" title="Creative Arts &amp; Design" class="panel-body">-->
                            <a href="#" title="Creative Arts &amp; Design" class="panel-body">
                           <div class="media container-xs-height media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-paint-brush-cut"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Design</h4>
                                 <span class="text-sm text-muted">
                                 (40)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                        <!--<a href="category/electronics-engineering.html" title="Engineering - Electronics &amp; Telecom" class="panel-body">-->
                           <a href="#" title="Engineering - Electronics &amp; Telecom" class="panel-body">
                           <div class="media container-xs-height media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-chip-big"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Electronics Engineering</h4>
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
                        <!--<a href="category/finance-consulting.html" title="Finance, Business Analysis &amp; Consulting" class="panel-body">-->
                           <a href="#" title="Finance, Business Analysis &amp; Consulting" class="panel-body">
                           <div class="media container-xs-height media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-dollar"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Finance &amp; Consulting</h4>
                                 <span class="text-sm text-muted">
                                 (180)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                        <!--<a href="category/healthcare.html" title="Healthcare - Other" class="panel-body">-->
                            <a href="#" title="Healthcare - Other" class="panel-body">
                           <div class="media container-xs-height media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-first-aid-box"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Healthcare</h4>
                                 <span class="text-sm text-muted">
                                 (48)
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
                        <!--<a href="category/hr.html" title="HR, Recruitment &amp; Training" class="panel-body">-->
                               <a href="#" title="HR, Recruitment &amp; Training" class="panel-body">
                           <div class="media container-xs-height media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-clipboard"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">HR</h4>
                                 <span class="text-sm text-muted">
                                 (112)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                        <!--<a href="category/hse.html" title="Safety &amp; Environment" class="panel-body">-->
                           <a href="#" title="Safety &amp; Environment" class="panel-body">
                           <div class="media container-xs-height media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-safety-boots"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">HSE</h4>
                                 <span class="text-sm text-muted">
                                 (32)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                        <!--<a href="category/investment.html" title="Investment Management" class="panel-body">-->
                             <a href="#" title="Investment Management" class="panel-body">
                           <div class="media container-xs-height media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-coin-stack-tall"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Investment</h4>
                                 <span class="text-sm text-muted">
                                 (23)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                        <!--<a href="category/journalism.html" title="Journalism" class="panel-body">-->
                            <a href="#" title="Journalism" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-journalist-mic"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Journalism</h4>
                                 <span class="text-sm text-muted">
                                 (19)
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
                       <!--<a href="category/legal.html" title="Legal" class="panel-body">-->
                            <a href="#" title="Legal" class="panel-body">
                           <div class="media container-xs-height media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-auction-hammer"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Legal</h4>
                                 <span class="text-sm text-muted">
                                 (108)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                        <!--<a href="category/logistics.html" title="Transport, Logistics &amp; Warehousing" class="panel-body">-->
                            <a href="#" title="Transport, Logistics &amp; Warehousing" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-delivery-cart"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Logistics</h4>
                                 <span class="text-sm text-muted">
                                 (54)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                        <!--<a href="category/management.html" title="General Management" class="panel-body">-->
                             <a href="#" title="General Management" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-test-paper"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Management</h4>
                                 <span class="text-sm text-muted">
                                 (185)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                       <!-- <a href="category/marketing.html" title="Marketing, Advertising &amp; PR" class="panel-body">-->
                             <a href="#" title="Marketing, Advertising &amp; PR" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-bulls-eye"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Marketing</h4>
                                 <span class="text-sm text-muted">
                                 (137)
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
                        <a href="#" title="Engineering - Mechanical &amp; Aeronautical"
                        class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-gears"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Mechanical Engineering</h4>
                                 <span class="text-sm
                                    text-muted
                                    ">
                                 (99)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                        <a href="#" title="IT - Network Administration" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-computer-network"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Network Admin</h4>
                                 <span class="text-sm
                                    text-muted
                                    ">
                                 (91)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                        <a href="#" title="Healthcare - Nursing" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-nurse"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Nursing</h4>
                                 <span class="text-sm
                                    text-muted
                                    ">
                                 (23)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                        <a href="#" title="Engineering - Petroleum, Mining &amp; Marine"
                           class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-petrol-pump"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Petroleum Engineering</h4>
                                 <span class="text-sm
                                    text-muted
                                    ">
                                 (31)
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
                        <a href="#" title="Healthcare - Physician"
                           class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-physician"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Physician</h4>
                                 <span class="text-sm
                                    text-muted
                                    ">
                                 (45)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                        <a href="#" title="Engineering - Power &amp; Heavy Electrical"
                           class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-power-tower"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Power Engineering</h4>
                                 <span class="text-sm
                                    text-muted
                                    ">
                                 (52)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                        <a href="#" title="Purchasing &amp; Procurement" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-package"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Procurement</h4>
                                 <span class="text-sm
                                    text-muted
                                    ">
                                 (46)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                        <a href="#" title="Research &amp; Development (R&amp;D)" class="panel-body">

                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-microscope"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">R&amp;D</h4>
                                 <span class="text-sm
                                    text-muted
                                    ">
                                 (10)
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
                        <a href="#" title="Sales - Retail" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-salesman"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Retail Sales</h4>
                                 <span class="text-sm
                                    text-muted
                                    ">
                                 (148)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                        <a href="#" title="Sales - Wholesale / Corporate" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-warehouse"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Sales</h4>
                                 <span class="text-sm
                                    text-muted
                                    ">
                                 (179)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                        <a href="#" title="Police, military &amp; security services" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-policeman"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Security</h4>
                                 <span class="text-sm
                                    text-muted
                                    ">
                                 (3)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                        <a href="#" title="IT - Software &amp; Web Development" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-html-tag"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Software</h4>
                                 <span class="text-sm
                                    text-muted
                                    ">
                                 (196)
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
                        <a href="#" title="Sales - Telesales / Telemarketing" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-telesales"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Telesales</h4>
                                 <span class="text-sm
                                    text-muted
                                    ">
                                 (27)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                        <a href="#" title="Translation" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-chat-bubbles"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Translation</h4>
                                 <span class="text-sm
                                    text-muted
                                    ">
                                 (5)
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
   
</main>
<?php include('../footer.php'); ?>
