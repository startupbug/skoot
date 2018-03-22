<?php include('header.php') ;?>
<div class="visible-print-block">
   <div class="container">
      <div class="underline">
         <div class="row">
            <div class="col-sm-24">
               <img src="assets/img/logoa95c.png?v2_68_0" alt="GulfTalent" title="GulfTalent" width="160" class="pull-right img-logo" />
            </div>
         </div>
      </div>
   </div>
</div>
<main id="main-block">
   <div class="page-header">
      <div class="container">
         <div class="row">
            <div class="col-sm-24">
               <h1>Find Your next job</h1>
               <h3 class="s_headingjobs">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur</h3>
               <form class="form-inline space-bottom-xs hidden-print" action="#">
                   <div class="form-group form-group-lg inner-addon left-addon s-color-white">
                      <i class="fa fa-search"></i>
                      <input type="text" autocomplete="off" placeholder="Enter job title or keywords" name="pos_ref" class="form-control input-lg input-blk s-input-lg s-input-lg-job" />
                   </div>
                  <div class="form-group inner-addon left-addon s-color-white">
                     <i class="fa fa-map-marker"></i>
                     <select class="form-control input-lg s-input-lg s-input-lg-job" name="frmPositionCountry">
                        <option selected disabled="disabled">Location</option>
                        <option value="" >UAE</option>
                        <option value="" >Qatar</option>
                        <option value="" >Saudi Arabia</option>
                        <option value="" >Oman</option>
                        <option value="" >Bahrain</option>
                        <option value="" >Kuwait</option>
                        <option value="" >Egypt</option>
                        <option value="" >Jordan</option>
                        <option value="" >Lebanon</option>
                     </select>
                  </div>

                  <button type="submit" class="btn btn-lg btn-primary btn-corner"> Job Search </button>
               </form>
            </div>
         </div>
      </div>
   </div>
   <div class="page-content">
      <div id="flash-messages-persistent" >
         <div class="container hidden">
            <div class="row">
               <div class="col-sm-24">
                  <div class="alertfade container-xs-height container-block space-bottom-sm">
                     <div class="col-xs-height col-middle pull-left">
                        <div class="media container-xs-height">
                           <div class="media-object col-xs-height col-middle">
                              <i class="fa fa-fw"></i>
                           </div>
                           <div class="media-body col-xs-height col-middle text-xl">
                              {{ flashMessage.message }}
                              <a>
                              {{ flashMessage.linkText }}
                              </a>
                              <a>
                              {{ flashMessage.linkText }}
                              </a>
                              <a>
                              {{ flashMessage.linkText }}
                              </a>
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
      <div class="flashmessage hidden">
         <div class="container">
            <div class="row">
               <div class="col-sm-24">
                  <div class="alert fade container-xs-height container-block space-bottom-sm">
                     <div class="col-xs-height col-middle pull-left">
                        <div class="media container-xs-height">
                           <div class="media-object col-xs-height col-middle">
                              <i class="fa fa-fw"></i>
                           </div>
                           <div class="media-body col-xs-height col-middle text-xl">
                              {{ flashMessage.message }}
                              <a>
                              {{ flashMessage.linkText }}
                              </a>
                              <a>
                              {{ flashMessage.linkText }}
                              </a>
                              <a>
                              {{ flashMessage.linkText }}
                              </a>
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
               <div class="row">
                  <div class="col-sm-8">
                    <div class="panel-heading">
                       <div class="text-heading panel-title s-panel-title text-capitalize">Jobs By City</div>
                    </div>
                     <div class="panel panel-default">

                        <div class="list-group">
                           <a class="list-group-item s-list-group-item" href="#">
                              <div class="media">
                                 <div class="media-object pull-left">
                                    <i class="fa fa-fw fa-building-o text-section fa-2x"></i>
                                 </div>
                                 <div class="media-body">
                                    <div class="text-medium text-overflow">Dubai </div>
                                    <p class="text-sm text-supermuted">(986)</p>
                                 </div>
                              </div>
                           </a>
                           <a class="list-group-item s-list-group-item" href="#">
                              <div class="media">
                                 <div class="media-object pull-left">
                                    <i class="fa fa-fw fa-building-o text-section fa-2x"></i>
                                 </div>
                                 <div class="media-body">
                                    <div class="text-medium text-overflow">Abu Dhabi </div>
                                    <p class="text-sm text-supermuted">(274)</p>
                                 </div>
                              </div>
                           </a>
                           <a class="list-group-item s-list-group-item" href="#">
                              <div class="media">
                                 <div class="media-object pull-left">
                                    <i class="fa fa-fw fa-building-o text-section fa-2x"></i>
                                 </div>
                                 <div class="media-body">
                                    <div class="text-medium text-overflow">Riyadh </div>
                                    <p class="text-sm text-supermuted">(139)</p>
                                 </div>
                              </div>
                           </a>
                           <a class="list-group-item s-list-group-item" href="#">
                              <div class="media">
                                 <div class="media-object pull-left">
                                    <i class="fa fa-fw fa-building-o text-section fa-2x"></i>
                                 </div>
                                 <div class="media-body">
                                    <div class="text-medium text-overflow">Doha </div>
                                    <p class="text-sm text-supermuted">(81)</p>
                                 </div>
                              </div>
                           </a>
                           <a class="list-group-item s-list-group-item" href="#">
                              <div class="media">
                                 <div class="media-object pull-left">
                                    <i class="fa fa-fw fa-building-o text-section fa-2x"></i>
                                 </div>
                                 <div class="media-body">
                                    <div class="text-medium text-overflow">Jeddah </div>
                                    <p class="text-sm text-supermuted">(53)</p>
                                 </div>
                              </div>
                           </a>
                           <a class="list-group-item s-list-group-item" href="#">
                              <div class="media">
                                 <div class="media-object pull-left">
                                    <i class="fa fa-fw fa-building-o text-section fa-2x"></i>
                                 </div>
                                 <div class="media-body">
                                    <div class="text-medium text-overflow">Muscat </div>
                                    <p class="text-sm text-supermuted">(31)</p>
                                 </div>
                              </div>
                           </a>
                           <a class="list-group-item s-list-group-item hidden-print" href="#">
                           <i class="fa fa-fw fa-chevron-right"></i>
                           View all Cities
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-8">
                    <div class="panel-heading">
                       <div class="text-heading panel-title s-panel-title text-capitalize">Jobs By Category</div>
                    </div>
                     <div class="panel panel-default">
                        <div class="list-group">
                           <a class="list-group-item s-list-group-item" href="#">
                              <div class="media">
                                 <div class="media-object pull-left">
                                    <i class="fa fa-fw fa-house-measured text-section fa-2x"></i>
                                 </div>
                                 <div class="media-body">
                                    <div class="text-medium text-overflow">Civil Engineering </div>
                                    <p class="text-sm text-supermuted">(482)</p>
                                 </div>
                              </div>
                           </a>
                           <a class="list-group-item s-list-group-item" href="#">
                              <div class="media">
                                 <div class="media-object pull-left">
                                    <i class="fa fa-fw fa-html-tag text-section fa-2x"></i>
                                 </div>
                                 <div class="media-body">
                                    <div class="text-medium text-overflow">Software </div>
                                    <p class="text-sm text-supermuted">(196)</p>
                                 </div>
                              </div>
                           </a>
                           <a class="list-group-item s-list-group-item" href="#">
                              <div class="media">
                                 <div class="media-object pull-left">
                                    <i class="fa fa-fw fa-test-paper text-section fa-2x"></i>
                                 </div>
                                 <div class="media-body">
                                    <div class="text-medium text-overflow">Management </div>
                                    <p class="text-sm text-supermuted">(185)</p>
                                 </div>
                              </div>
                           </a>
                           <a class="list-group-item s-list-group-item" href="#">
                              <div class="media">
                                 <div class="media-object pull-left">
                                    <i class="fa fa-fw fa-dollar text-section fa-2x"></i>
                                 </div>
                                 <div class="media-body">
                                    <div class="text-medium text-overflow">Finance &amp; Consulting </div>
                                    <p class="text-sm text-supermuted">(180)</p>
                                 </div>
                              </div>
                           </a>
                           <a class="list-group-item s-list-group-item" href="#">
                              <div class="media">
                                 <div class="media-object pull-left">
                                    <i class="fa fa-fw fa-warehouse text-section fa-2x"></i>
                                 </div>
                                 <div class="media-body">
                                    <div class="text-medium text-overflow">Sales </div>
                                    <p class="text-sm text-supermuted">(179)</p>
                                 </div>
                              </div>
                           </a>
                           <a class="list-group-item s-list-group-item" href="#">
                              <div class="media">
                                 <div class="media-object pull-left">
                                    <i class="fa fa-fw fa-book-pen text-section fa-2x"></i>
                                 </div>
                                 <div class="media-body">
                                    <div class="text-medium text-overflow">Accounting </div>
                                    <p class="text-sm text-supermuted">(156)</p>
                                 </div>
                              </div>
                           </a>
                           <a class="list-group-item s-list-group-item hidden-print" href="#">
                           <i class="fa fa-fw fa-chevron-right"></i>
                           View all Categories
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-8">
                    <div class="panel-heading">
                       <div class="text-heading panel-title s-panel-title text-capitalize">Jobs By Industry</div>
                    </div>
                     <div class="panel panel-default">
                        <div class="list-group">
                           <a class="list-group-item s-list-group-item" href="#">
                              <div class="media">
                                 <div class="media-object pull-left">
                                    <i class="fa fa-fw fa-crane text-section fa-2x"></i>
                                 </div>
                                 <div class="media-body">
                                    <div class="text-medium text-overflow">Construction </div>
                                    <p class="text-sm text-supermuted">(530)</p>
                                 </div>
                              </div>
                           </a>
                           <a class="list-group-item s-list-group-item" href="#">
                              <div class="media">
                                 <div class="media-object pull-left">
                                    <i class="fa fa-fw fa-pencil-ruler text-section fa-2x"></i>
                                 </div>
                                 <div class="media-body">
                                    <div class="text-medium text-overflow">Engineering </div>
                                    <p class="text-sm text-supermuted">(324)</p>
                                 </div>
                              </div>
                           </a>
                           <a class="list-group-item s-list-group-item" href="#">
                              <div class="media">
                                 <div class="media-object pull-left">
                                    <i class="fa fa-fw fa-shopping-bag text-section fa-2x"></i>
                                 </div>
                                 <div class="media-body">
                                    <div class="text-medium text-overflow">Retail </div>
                                    <p class="text-sm text-supermuted">(289)</p>
                                 </div>
                              </div>
                           </a>
                           <a class="list-group-item s-list-group-item" href="#">
                              <div class="media">
                                 <div class="media-object pull-left">
                                    <i class="fa fa-fw fa-computer-network text-section fa-2x"></i>
                                 </div>
                                 <div class="media-body">
                                    <div class="text-medium text-overflow">IT </div>
                                    <p class="text-sm text-supermuted">(210)</p>
                                 </div>
                              </div>
                           </a>
                           <a class="list-group-item s-list-group-item" href="#">
                              <div class="media">
                                 <div class="media-object pull-left">
                                    <i class="fa fa-fw fa-medical-plus text-section fa-2x"></i>
                                 </div>
                                 <div class="media-body">
                                    <div class="text-medium text-overflow">Healthcare </div>
                                    <p class="text-sm text-supermuted">(155)</p>
                                 </div>
                              </div>
                           </a>
                           <a class="list-group-item s-list-group-item" href="#">
                              <div class="media">
                                 <div class="media-object pull-left">
                                    <i class="fa fa-fw fa-bottles text-section fa-2x"></i>
                                 </div>
                                 <div class="media-body">
                                    <div class="text-medium text-overflow">FMCG </div>
                                    <p class="text-sm text-supermuted">(154)</p>
                                 </div>
                              </div>
                           </a>
                           <a class="list-group-item s-list-group-item hidden-print" href="#">
                           <i class="fa fa-fw fa-chevron-right"></i>
                           View all Industries
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-8">
                    <div class="panel-heading">
                      <div class="text-heading panel-title s-panel-title">Top Companies Hiring</div>
                    </div>
                     <div class="panel panel-default">
                        <div class="list-group">
                           <a class="list-group-item s-list-group-item" href="#" title="Techlogix">
                              <div class="media">
                                 <div class="media-object pull-left">
                                    <img src="images1/logos/listing/RE214-9270_logoa95c.png?v2_68_0" width="55px" />
                                 </div>
                                 <div class="media-body">
                                    <div class="text-med text-overflow">Techlogix</div>
                                    <p class="text-sm text-supermuted">
                                       1
                                       vacancy
                                    </p>
                                 </div>
                              </div>
                           </a>
                           <a class="list-group-item s-list-group-item" href="#" title="Careem">
                              <div class="media">
                                 <div class="media-object pull-left">
                                    <img src="images1/logos/listing/OE782-6838_logoa95c.png?v2_68_0" width="55px" />
                                 </div>
                                 <div class="media-body">
                                    <div class="text-med text-overflow">Careem</div>
                                    <p class="text-sm text-supermuted">
                                       107
                                       vacancies
                                    </p>
                                 </div>
                              </div>
                           </a>
                           <a class="list-group-item s-list-group-item" href="#" title="Azadea Group - UAE">
                              <div class="media">
                                 <div class="media-object pull-left">
                                    <img src="images1/logos/listing/GE643-702_logoa95c.png?v2_68_0" width="55px" />
                                 </div>
                                 <div class="media-body">
                                    <div class="text-med text-overflow">Azadea Group - UAE</div>
                                    <p class="text-sm text-supermuted">
                                       55
                                       vacancies
                                    </p>
                                 </div>
                              </div>
                           </a>
                           <a class="list-group-item s-list-group-item" href="#" title="DarkMatter">
                              <div class="media">
                                 <div class="media-object pull-left">
                                    <img src="images1/logos/listing/RE962-9018_logoa95c.png?v2_68_0" width="55px" />
                                 </div>
                                 <div class="media-body">
                                    <div class="text-med text-overflow">DarkMatter</div>
                                    <p class="text-sm text-supermuted">
                                       55
                                       vacancies
                                    </p>
                                 </div>
                              </div>
                           </a>
                           <a class="list-group-item s-list-group-item hidden-print" href="#">
                           <i class="fa fa-fw fa-chevron-right"></i>
                           View all Companies
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-8">
                    <div class="panel-heading">
                      <div class="text-heading panel-title s-panel-title">Top Agencies Hiring</div>
                    </div>
                     <div class="panel panel-default">
                        <div class="list-group">
                           <a class="list-group-item s-list-group-item" href="#" title="Engage Selection">
                              <div class="media">
                                 <div class="media-object pull-left">
                                    <img src="images1/logos/listing/KE074-2134_logoa95c.png?v2_68_0" width="55px" />
                                 </div>
                                 <div class="media-body">
                                    <div class="text-med text-overflow">Engage Selection</div>
                                    <p class="text-sm text-supermuted">
                                       86
                                       vacancies
                                    </p>
                                 </div>
                              </div>
                           </a>
                           <a class="list-group-item s-list-group-item" href="#" title="Charterhouse">
                              <div class="media">
                                 <div class="media-object pull-left">
                                    <img src="images1/logos/listing/GE186-244_logoa95c.png?v2_68_0" width="55px" />
                                 </div>
                                 <div class="media-body">
                                    <div class="text-med text-overflow">Charterhouse</div>
                                    <p class="text-sm text-supermuted">
                                       78
                                       vacancies
                                    </p>
                                 </div>
                              </div>
                           </a>
                           <a class="list-group-item s-list-group-item" href="#" title="Ignite Search &amp; Selection">
                              <div class="media">
                                 <div class="media-object pull-left">
                                    <img src="images1/logos/listing/OE555-6611_logoa95c.png?v2_68_0" width="55px" />
                                 </div>
                                 <div class="media-body">
                                    <div class="text-med text-overflow">Ignite Search &amp; Selection</div>
                                    <p class="text-sm text-supermuted">
                                       63
                                       vacancies
                                    </p>
                                 </div>
                              </div>
                           </a>
                           <a class="list-group-item s-list-group-item" href="#" title="Black Pearl - UAE">
                              <div class="media">
                                 <div class="media-object pull-left">
                                    <img src="images1/logos/listing/RE174-8230_logoa95c.png?v2_68_0" width="55px" />
                                 </div>
                                 <div class="media-body">
                                    <div class="text-med text-overflow">Black Pearl - UAE</div>
                                    <p class="text-sm text-supermuted">
                                       54
                                       vacancies
                                    </p>
                                 </div>
                              </div>
                           </a>
                           <a class="list-group-item s-list-group-item hidden-print" href="#">
                           <i class="fa fa-fw fa-chevron-right"></i>
                           View all Recruitment Agencies
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-8">
                    <div class="panel-heading">
                       <h3 class="panel-title s-panel-title">Latest Jobs</h3>
                    </div>
                     <div class="panel panel-default">
                        <div class="list-group">
                           <a class="list-group-item s-list-group-item"
                              title="Van Sales (Dubai)"
                              href="#">
                              <div class="media">
                                 <div class="media-object pull-left">
                                    <img src="images1/logos/listing/RE410-8466_logoa95c.png?v2_68_0" width="55px">
                                 </div>
                                 <div class="media-body">
                                    <div class="text-med text-overflow">Van Sales (Dubai)</div>
                                    <p class="space-bottom-xs">Spectrum Talent Management</p>
                                    <span class="text-sm text-supermuted">
                                    Posted 15 minutes ago
                                    </span>
                                 </div>
                              </div>
                           </a>
                           <a class="list-group-item s-list-group-item"
                              title="Business Development Manager"
                              href="#">
                              <div class="media">
                                 <div class="media-object pull-left">
                                    <img src="images1/logos/listing/OE555-6611_logoa95c.png?v2_68_0" width="55px">
                                 </div>
                                 <div class="media-body">
                                    <div class="text-med text-overflow">Business Development Manager</div>
                                    <p class="space-bottom-xs">Ignite Search &amp; Selection</p>
                                    <span class="text-sm text-supermuted">
                                    Posted 42 minutes ago
                                    </span>
                                 </div>
                              </div>
                           </a>
                           <a class="list-group-item"
                              title="Destination Marketing Manager"
                              href="#">
                              <div class="media">
                                 <div class="media-object pull-left">
                                    <img src="images1/logos/listing/QE307-7362_logoa95c.png?v2_68_0" width="55px">
                                 </div>
                                 <div class="media-body">
                                    <div class="text-med text-overflow">Destination Marketing Manager</div>
                                    <p class="space-bottom-xs">Farah Leisure</p>
                                    <span class="text-sm text-supermuted">
                                    Posted 47 minutes ago
                                    </span>
                                 </div>
                              </div>
                           </a>
                           <a class="list-group-item s-list-group-item hidden-print" href="#">
                           <i class="fa fa-fw fa-chevron-right"></i>
                           View all jobs
                           </a>
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
<!-- Google Code for Remarketing Tag -->
<script type="text/javascript">
   /* <![CDATA[ */
   var google_conversion_id = 1071034449;
   var google_custom_params = window.google_tag_params;
   var google_remarketing_only = true;
   /* ]]> */
</script>
<script type="text/javascript" async="true" src="../www.googleadservices.com/pagead/f.txt"></script>
<noscript>
   <div style="display:inline;">
      <img height="1" width="1" style="border-style:none;" alt="" src="http://googleads.g.doubleclick.net/pagead/viewthroughconversion/1071034449/?value=0&amp;guid=ON&amp;script=0"/>
   </div>
</noscript>
<?php include('footer.php') ;?>
