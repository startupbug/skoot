
<?php include('../header.php'); ?>
<main id="main-block"
   gt-scroll-on="facetedSearch.pagination:changed"
   gt-scroll-speed="50"
   >
   <div class="page-header">
      <div class="container">
         <div class="row">
            <div class="col-sm-24">
               <h1>Top Companies in the Malaysia</h1>
            </div>
         </div>
      </div>
   </div>
   <div class="page-content">
     <!-- <div ng-controller="flashMessagesController" id="flash-messages-persistent" ng-cloak>
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
               <div class="panel panel-default">
                  <div class="panel-body">
                     <h3 class="space-bottom-sm">Premium Employers</h3>
                     <hr class="ultramuted"/>
                     <div class="row">
                        <div class="col-sm-6">
                           <a href="<?php echo $base_url; ?>jobs/azadea.php" title="Azadea Group - Lebanon" class="panel-body text-center">
                           <img src="<?php echo $base_url;?>assets/img/logo/azadea.jpg" class="hover-expand"/>
                           </a>
                        </div>
                        <div class="col-sm-6">
                           <a href="#"
                              title="Parsons International"
                              class="panel-body text-center">
                           <img src="<?php echo $base_url;?>assets/img/logo/parsons_one.jpg" class="hover-expand"/>
                           </a>
                        </div>
                        <div class="col-sm-6">
                           <a href="#"
                              title="Alshaya"
                              class="panel-body text-center">
                           <img src="<?php echo $base_url;?>assets/img/logo/aishaya_one.png" class="hover-expand"/>
                           </a>
                        </div>
                        <div class="col-sm-6">
                           <a href="#"
                              title="Mott MacDonald - UAE"
                              class="panel-body text-center">
                           <img src="<?php echo $base_url;?>assets/img/logo/mac.jpg" class="hover-expand"/>
                           </a>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-sm-6">
                           <a href="#"
                              title="Atkins Middle East"
                              class="panel-body text-center">
                           <img src="<?php echo $base_url;?>assets/img/logo/atkins_two.jpg" class="hover-expand"/>
                           </a>
                        </div>
                        <div class="col-sm-6">
                           <a href="#"
                              title="KEO International Consultants"
                              class="panel-body text-center">
                           <img src="<?php echo $base_url;?>assets/img/logo/gmg.jpg" class="hover-expand"/>
                           </a>
                        </div>
                        <div class="col-sm-6">
                           <a href="#"
                              title="Chalhoub Group"
                              class="panel-body text-center">
                           <img src="<?php echo $base_url;?>assets/img/logo/keo.jpg" class="hover-expand"/>
                           </a>
                        </div>
                        <div class="col-sm-6">
                           <a href="#"
                              title="Gulf Marketing Group (GMG Group)"
                              class="panel-body text-center">
                           <img src="<?php echo $base_url;?>assets/img/logo/chalhoub.jpg" class="hover-expand"/>
                           </a>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-sm-6">
                           <a href="#"
                              title="Nestle Middle East"
                              class="panel-body text-center">
                           <img src="<?php echo $base_url;?>assets/img/logo/nestle_two.png" class="hover-expand"/>
                           </a>
                        </div>
                        <div class="col-sm-6">
                           <a href="#"
                              title="Arcadis"
                              class="panel-body text-center">
                           <img src="<?php echo $base_url;?>assets/img/logo/logo_two.jpg" class="hover-expand"/>
                           </a>
                        </div>
                        <div class="col-sm-6">
                           <a href="#"
                              title="Ashghal (Public Works Authority)"
                              class="panel-body text-center">
                           <img src="<?php echo $base_url;?>assets/img/logo/dmcc.jpg" class="hover-expand"/>
                           </a>
                        </div>
                        <div class="col-sm-6">
                           <a href="#"
                              title="Dubai Multi Commodities Centre (DMCC)"
                              class="panel-body text-center">
                           <img src="<?php echo $base_url;?>assets/img/logo/arcadis_two.jpg" class="hover-expand"/>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="list-group">
                     <!-- <a class="list-group-item" href="../companiesd139.html?type=employers">-->
                     <a class="list-group-item" href="#">
                     <i class="fa fa-fw fa-chevron-right"></i>
                     See All Employers
                     </a>
                  </div>
               </div>
               <div class="panel panel-default">
                  <div class="panel-body">
                     <h3 class="space-bottom-sm">Premium Recruiters</h3>
                     <hr class="ultramuted"/>
                     <div class="row">
                        <div class="col-sm-6">
                           <a href="#"
                              title="Michael Page"
                              class="panel-body text-center">
                           <img src="<?php echo $base_url;?>assets/img/logo/michael.jpg" class="hover-expand"/>
                           </a>
                        </div>
                        <div class="col-sm-6">
                           <a href="#"
                              title="Charterhouse"
                              class="panel-body text-center">
                           <img src="<?php echo $base_url;?>assets/img/logo/charter.png" class="hover-expand"/>
                           </a>
                        </div>
                        <div class="col-sm-6">
                           <a href="#"
                              title="Quest Search &amp; Selection"
                              class="panel-body text-center">
                           <img src="<?php echo $base_url;?>assets/img/logo/quest.png" class="hover-expand"/>
                           </a>
                        </div>
                        <div class="col-sm-6">
                           <a href="#"
                              title="Manpower Middle East"
                              class="panel-body text-center">
                           <img src="<?php echo $base_url;?>assets/img/logo/manpower.jpg" class="hover-expand"/>
                           </a>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 ">
                           <a href="#"
                              title="PSR Solutions International"
                              class="panel-body text-center">
                           <img src="<?php echo $base_url;?>assets/img/logo/psr.jpg" class="hover-expand"/>
                           </a>
                        </div>
                        <div class="col-sm-6 ">
                           <a href="#"
                              title="Irwin &amp; Dow"
                              class="panel-body text-center">
                           <img src="<?php echo $base_url;?>assets/img/logo/irwin.jpg" class="hover-expand"/>
                           </a>
                        </div>
                        <div class="col-sm-6 ">
                           <a href="#"
                              title="Adecco"
                              class="panel-body text-center">
                           <img src="<?php echo $base_url;?>assets/img/logo/adecco.jpg" class="hover-expand"/>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="list-group">
                      <a class="list-group-item" href="#">
                     <!--<a class="list-group-item" href="../companies1379.html?type=recruitment-agencies">-->
                     <i class="fa fa-fw fa-chevron-right"></i>
                     See All Recruiters
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   
</main>

<?php include('../footer.php'); ?>