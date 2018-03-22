<?php include('../header.php'); ?>

<main id="main-block" gt-scroll-on="facetedSearch.pagination:changed" gt-scroll-speed="50">
   <div class="page-header">
      <div class="container">
         <div class="row">
            <div class="col-sm-24">
               <h1>Jobs By Industry</h1>
               <h2>Find jobs in different industries in Malaysia</h2>
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
      <!--<div ng-controller="flashMessagesController"
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
      <div class="container">
         <div class="row">
            <div class="col-sm-24">
               <div class="row">
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                        <a href="#" title="Audit &amp; Accountancy" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-calculator"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Accountancy</h4>
                                 <span class="text-sm text-muted">
                                    
                                 (48)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                        <a href="#" title="Automotive" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-bus"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Automotive</h4>
                                 <span class="text-sm
                                    text-muted
                                    ">
                                 (13)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                        <a href="#" title="Aviation, Airlines &amp; Aerospace" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-airplane"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Aviation</h4>
                                 <span class="text-sm
                                    text-muted
                                    ">
                                 (57)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                        <a href="#"  title="Banking - Corporate" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-bank-safe"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Banking </h4>
                                 <span class="text-sm
                                    text-muted
                                    ">
                                 (64)
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
                        <a href="#" title="Construction" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-crane"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Construction</h4>
                                 <span class="text-sm
                                    text-muted
                                    ">
                                 (530)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                        <a href="#" title="Management Consulting" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-trend-variable"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Consulting</h4>
                                 <span class="text-sm
                                    text-muted
                                    ">
                                 (68)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                        <a href="#" title="Cosmetics &amp; Luxury Goods" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-lipstick"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Cosmetics</h4>
                                 <span class="text-sm
                                    text-muted
                                    ">
                                 (40)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                        <a href="#" title="Education" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-government-building"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Education</h4>
                                 <span class="text-sm
                                    text-muted
                                    ">
                                 (62)
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
                        <a href="industry/engineering.html" title="Engineering Services" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-pencil-ruler"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Engineering</h4>
                                 <span class="text-sm
                                    text-muted
                                    ">
                                 (324)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                        <a href="#" title="Finance, Investment &amp; Asset Management" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-coins-hand"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Finance</h4>
                                 <span class="text-sm
                                    text-muted
                                    ">
                                 (94)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                        <a href="#" title="FMCG / Consumer Goods" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-bottles"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">FMCG</h4>
                                 <span class="text-sm
                                    text-muted
                                    ">
                                 (154)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                        <a href="#" title="General Trading" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-handshake"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">General Trading</h4>
                                 <span class="text-sm
                                    text-muted
                                    ">
                                 (36)
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
                        <a href="#" title="Government &amp; Public Sector" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-government-building"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Government</h4>
                                 <span class="text-sm
                                    text-muted
                                    ">
                                 (26)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                        <a href="#" title="Healthcare, Hospital &amp; Medical Services" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-medical-plus"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Healthcare</h4>
                                 <span class="text-sm
                                    text-muted
                                    ">
                                 (155)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                        <a href="#" title="Travel, Hotel &amp; Tourism" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-bed"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Hospitality</h4>
                                 <span class="text-sm
                                    text-muted
                                    ">
                                 (138)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                        <a href="#" title="Recruitment &amp; HR" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-cv"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">HR</h4>
                                 <span class="text-sm
                                    text-muted
                                    ">
                                 (43)
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
                        <a href="industry/insurance.html" title="Insurance" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-umbrella"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Insurance</h4>
                                 <span class="text-sm
                                    text-muted
                                    ">
                                 (16)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                        <a href="#" title="IT, Software &amp; Internet Services" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-computer-network"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">IT</h4>
                                 <span class="text-sm
                                    text-muted
                                    ">
                                 (210)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                        <a href="#" title="Legal Profession"  class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-scale"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Law</h4>
                                 <span class="text-sm
                                    text-muted
                                    ">
                                 (110)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                        <a href="#" title="Transport, Distribution &amp; Logistics" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-delivery-truck"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Logistics</h4>
                                 <span class="text-sm
                                    text-muted
                                    ">
                                 (134)
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
                        <a href="#" title="Manufacturing" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-factory-small"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Manufacturing</h4>
                                 <span class="text-sm
                                    text-muted
                                    ">
                                 (60)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                        <a href="#" title="Marketing, Advertising &amp; PR" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-loud-speaker"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Marketing</h4>
                                 <span class="text-sm
                                    text-muted
                                    ">
                                 (22)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                        <a href="#" title="Media &amp; Entertainment" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-television"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Media</h4>
                                 <span class="text-sm
                                    text-muted
                                    ">
                                 (62)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                        <a href="#" title="Charity / Non-profit / NGO" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-human-chain"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Non-Profit</h4>
                                 <span class="text-sm
                                    text-muted
                                    ">
                                 (8)
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
                        <a href="#" title="Oil &amp; Gas" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-petrol-pump"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Oil &amp; Gas</h4>
                                 <span class="text-sm
                                    text-muted
                                    ">
                                 (86)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                        <a href="#" title="Business Support Services" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-man-in-tie"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Professional Services</h4>
                                 <span class="text-sm
                                    text-muted
                                    ">
                                 (29)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                        <a href="#" title="Printing &amp; Publishing" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-newspaper-curved"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Publishing</h4>
                                 <span class="text-sm
                                    text-muted
                                    ">
                                 (2)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                        <a href="#" title="Property &amp; Real Estate" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-house"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Real Estate</h4>
                                 <span class="text-sm
                                    text-muted
                                    ">
                                 (151)
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
                        <a href="#" title="Retail" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-shopping-bag"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Retail</h4>
                                 <span class="text-sm
                                    text-muted
                                    ">
                                 (289)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                        <a href="#" title="Banking - Retail" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-credit-card"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Retail Banking</h4>
                                 <span class="text-sm
                                    text-muted
                                    ">
                                 (43)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                        <a href="#" title="Security, law &amp; order" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-star-badge"></i>
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
                        <a href="#" title="Shipping &amp; Freight" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-cargo-ship"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Shipping</h4>
                                 <span class="text-sm
                                    text-muted
                                    ">
                                 (17)
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
                        <a href="#" title="Telecoms" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-cell-tower"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Telecom</h4>
                                 <span class="text-sm
                                    text-muted
                                    ">
                                 (9)
                                 </span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="panel panel-default panel-hover">
                        <a href="#" title="Water, Power &amp; Utilities" class="panel-body">
                           <div class="media container-xs-height
                              media-height-sm">
                              <div class="media-object pull-left">
                                 <div class="icon icon-circle icon-2x icon-circle-section hover-expand">
                                    <i class="fa  fa-factory"></i>
                                 </div>
                              </div>
                              <div class="media-body col-xs-height col-middle">
                                 <h4 class="space-bottom-none text-link">Utilities</h4>
                                 <span class="text-sm
                                    text-muted
                                    ">
                                 (36)
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
