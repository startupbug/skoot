<?php include('../header.php'); ?>
<main id="main-block"
   gt-scroll-on="facetedSearch.pagination:changed"
   gt-scroll-speed="50"
   >
   <div class="page-header">
      <div class="container">
         <div class="row">
            <div class="col-sm-24">
               <h1>Help Center for Candidates</h1>
               <h2>Find answers to the questions related to your job search</h2>
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
            </div>
         </div>
         <div class="row">
            <div class="col-sm-16
               reset-width">
               <div class="panel panel-default">
                  <div class="panel-body">
                     <form class="form-inline space-bottom-xl hidden-print">
                        <div class="form-group form-group-lg">
                           <input type="text"
                              placeholder="Enter a question, phrase or a keyword (e.g. apply for jobs)"
                              
                              class="form-control input-blk" />
                        </div>
                        <button type="submit" class="btn btn-secondary">
                        Search
                        </button>
                     </form>
                     <div></div>
                     <h2 class="space-bottom-med">
                        <span>Most commonly asked questions</span>
                        <span>Questions related to your search</span>
                        <span>{{ faqs[0].category }}</span>
                     </h2>
                     <div>
                        <div class="col-sm-14 col-sm-offset-5">
                           <div class="media container-xs-height">
                              <div class="media-object pull-left">
                                 <i class="fa fa-fw fa-2x fa-exclamation-circle text-secondary"></i>
                              </div>
                              <div class="media-body col-xs-height col-middle text-center">
                                 We could not find what you were looking for.
                              </div>
                           </div>
                        </div>
                     </div>
                     <div>
                        <div class="collapsible space-bottom-base">
                           <div class="collapsible-toggle">
                              <div class="collapsible-toggle-title space-bottom-sm">
                                 <div class="row">
                                    <i class="fa fa-fw text-primary col-sm-2">
                                      </i>
                                    <span class="text-base text-link col-sm-22">
                                    {{ item.question }}
                                    </span>
                                 </div>
                              </div>
                           </div>
                           <div collapse="item.isCollapsed" class="collapsible-body">
                              <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base"
                                 >
                              </div>
                           </div>
                        </div>-->
                        <div class="space-top-med space-bottom-med">
                           <h2 class="space-bottom-lg space-top-med">How GulfTalent works</h2>
                           <h5 class="space-bottom-base">1 - Apply for jobs</h5>
                           <img src="images1/applyForJobsa95c.jpg?v2_68_0" class="img-responsive" />
                           <h5 class="space-bottom-base">2 - Get headhunted</h5>
                           <img src="images1/getHeadHunteda95c.jpg?v2_68_0" class="img-responsive" />
                        </div>
                        <div ng-hide="'home' == pageState" class="space-top-xl">
                           <i class="fa fa-fw text-primary fa-chevron-right"></i>
                           <a class="text-heading text-sm text-link" ng-click="goToHelpHome()">
                           Back to Help Home
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-8
               hidden-print">
               <div class="panel panel-default"">
                  <div class="panel-heading">
                     <div class="text-heading panel-title">Browse by topic</div>
                  </div>
                  <div class="list-group">
                     <a class="list-group-item">
                     GulfTalent overview
                     </a>
                     <a class="list-group-item">
                     Registration &amp; CV
                     </a>
                     <a class="list-group-item">
                     Searching and applying for jobs
                     </a>
                     <a class="list-group-item">
                     Managing your account
                     </a>
                     <a class="list-group-item">
                     Career services/tools
                     </a>
                     <a class="list-group-item">
                     Privacy
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   
</main>
<?php include('../footer.php'); ?>
