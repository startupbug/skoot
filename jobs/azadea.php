<?php include('../header.php'); ?>
<main id="main-block">
   <div style="background-image: url(<?php echo $base_url;?>assets/img/featured/aboutus_img.png)" class="jumbotron bg-cover">
      <div class="container space-top-xxl space-bottom-xxl">
         <div class="row">
            <div class="col-sm-24">
               <h1 class="text-center space-top-lg space-bottom-lg">About JobLane</h1>
            </div>
         </div>
      </div>
   </div>
   <div class="page-content">
   <section class="section-primary-bg">
      <div id="flash-messages-persistent">
         <div class="container">
         </div>
      </div>

   </section>
   <section class="bg-dark">
      <div class="container container-sm-height">
         <div class="row row-sm-height">
            <div class="col-sm-20 col-sm-height col-middle">
               <h1 class="text-brand-client">Azadea Group</h1>
            </div>
            <div class="col-sm-4 col-sm-height">
               <img src="<?php echo $base_url;?>assets/img/logo/azadea.jpg"
                  alt="Azadea Group"
                  class="img-responsive pull-right space-top-base space-bottom-xs" style="max-height: 75px;" />
            </div>
         </div>
      </div>
   </section>
   <!--<section class="bg-light">
      <div class="container">
          <div class="row">
              <div class="col-sm-24">
                  <div class="btn-group text-muted" ng-init="activeTemplate='about_us.html'">
                                                  <label class="btn"
                                  ng-class="{'btn-secondary btn-brand-client': activeTemplate == 'about_us.html'}"
                                  ng-model="activeTemplate"
                                  btn-radio="'about_us.html'">
                              About us
                          </label>
                                                  <label class="btn"
                                  ng-class="{'btn-secondary btn-brand-client': activeTemplate == 'life_with_us.html'}"
                                  ng-model="activeTemplate"
                                  btn-radio="'life_with_us.html'">
                              Life with us
                          </label>
                                                  <label class="btn"
                                  ng-class="{'btn-secondary btn-brand-client': activeTemplate == 'vacancies.html'}"
                                  ng-model="activeTemplate"
                                  btn-radio="'vacancies.html'">
                              Vacancies
                          </label>
                                          </div>
              </div>
          </div>
      </div>
      </section>-->
   <section class="bg-light">
      <div class="container">
         <div class="">
            <div class="col-sm-24">
               <div class="btn-group text-muted">
                  <label class="btn active f_btn_about f_overview">
                  <a onclick="tab('tab1')" id="tab1">About us</a>
                  </label>
                  <label class="btn f_btn_about f_overview">
                  <a onclick="tab('tab2')" id="tab2">Life with us</a>
                  </label>
                  <label class="btn f_btn_about f_overview">
                  <a onclick="tab('tab3')" id="tab3"> Vacancies </a>
                  </label>
               </div>
            </div>
         </div>
      </div>
   </section>
   <div id="activeTemplate"></div>
   <section class="bg-light" id="tab1_view">
      <section class="bg-dark">
         <div class="container">
            <div class="row space-top-xs space-bottom-xxl">
               <div class="col-sm-24">
                  <div ng-include="activeTemplate"></div>
               </div>
            </div>
            <div class="panel panel-default">
               <div class="panel-body">
                  <h3><strong><span class="text-brand-client">Premier Fashion and Lifestyle Retail Company</span></strong></h3>
                  <p><strong><span class="text-brand-client">Job opportunities in the Middle East</span></strong></p>
                  <p><a href="http://www.azadea.com" target="_blank">www.azadea.com</a></p>
                  <p><strong><span class="text-brand-client">Links:</span></strong> <a href="http://https://www.facebook.com/azadeacareers/" target="_blank">Facebook page</a></p>
                  <div data-oembed="https://www.youtube.com/watch?v=bdk5oKCSzF8&maxwidth=900" data-oembed-type="video" data-oembed-provider="youtube"><iframe width="612" height="344" src="https://www.youtube.com/embed/bdk5oKCSzF8?feature=oembed" frameborder="0" allowfullscreen></iframe></div>
                  <h3><strong><span class="text-brand-client">Overview / History</span></strong></h3>
                  <p>Azadea Group is a premier lifestyle retail company that owns and operates more than 50 leading international franchise concepts across the Middle East and Africa.  Since its inception in 1978, the Group has grown a substantial chain of stores representing leading international brand names in fashion and accessories, food and beverage, home furnishings, sporting goods, multimedia and beauty &amp; cosmetics.  With over 12,000 employees, the company boasts a solid infrastructure overseeing more than 650 stores spread across 14 countries including Algeria, Bahrain, Cyprus, Egypt, Ghana, Iraq, Jordan, Kenya, Saudi Arabia, Kuwait, Lebanon, Oman, Qatar and United Arab Emirates.</p>
                  <h4><strong><span class="text-brand-client">Our Brands</span></strong></h4>
                  <p>Our portfolio of brands features some of the biggest and trendiest names in the business like Zara, Massimo Dutti, Bershka, Zara Home, IKO Milano, PAUL, Eataly, Virgin Megastore and many more&hellip;</p>
                  <p></p>
                  <p>For more information, please visit our <a href="http://www.azadea.com/english/our-brands" target="_blank">brands listing</a>.</p>
               </div>
            </div>
         </div>
      </section>
   </section>
   <div id="activeTemplate"></div>
   <section class="bg-light" id="tab2_view">
      <section class="bg-dark">
         <div class="container">
            <div class="row space-top-xs space-bottom-xxl">
               <div class="col-sm-24">
                  <div ng-include="activeTemplate"></div>
               </div>
            </div>
            <div class="panel panel-default">
               <div class="panel-body">
                  <div data-oembed="https://www.youtube.com/watch?v=4rE1i80Vj9k&maxwidth=900" data-oembed-type="video" data-oembed-provider="youtube"><iframe width="612" height="344" src="https://www.youtube.com/embed/4rE1i80Vj9k?feature=oembed" frameborder="0" allowfullscreen></iframe></div>
                  <h2><strong><span class="text-brand-client">Values</span></strong></h2>
                  <p>Accountability, Teamwork, Integrity, Passion.</p>
                  <h2><strong><span class="text-brand-client">Mission Statement</span></strong></h2>
                  <p>We exist to provide our customers and people with an entertaining and exciting way of life.</p>
                  <h2><strong><span class="text-brand-client">Benefits of working with company</span></strong></h2>
                  <p>The possibilities are endless and getting the exposure and the experience for working with a team of professionals on a wide portfolio of brands is an important milestone for self and career growth.</p>
                  <h2><strong><span class="text-brand-client">Working Culture</span></strong></h2>
                  <p>Dynamic, Social, Empowering, Young and Trendy.  </p>
                  <h2><strong><span class="text-brand-client">Employee Recognition</span></strong></h2>
                  <p>With different recognition programs and award systems, we spot the hard working individuals or teams and help them grow and reach the highest possibilities.<br /></p>
               </div>
            </div>
            <div class="list-group-light list-group-transparent space-left-sm">
               <a class="list-group-item">
               <i class="fa fa-fw fa-chevron-right"></i>
               Check out vacancies in Azadea Group
               </a>
            </div>
         </div>
      </section>
   </section>
   <div id="activeTemplate"></div>
   <section class="bg-light" id="tab3_view">
      <section class="bg-dark">
         <div class="container">
            <div class="row space-top-xs space-bottom-xxl">
               <div class="col-sm-24">
                  <div></div>
                  <div></div>
               </div>
            </div>
            <div class="panel panel-default">
               <div class="panel-body">
                  <div>

                     <div class="collapse in space-bottom-sm f_bottom">
                      <div class="row collapsible-toggle-title space-bottom-sm custom-collapsible-toggle">
                         <i class="fa fa-fw col-sm-2 fa-caret-right text-color f_icon"></i>
                         <span class="text-base text-link col-sm-22 text-gray">
                           <h5 
                              class="text-lg text-regular collapsible-toggle-title space-bottom-base">
                              <i 
                                 class="fa fa-fw text-section">
                              </i>
                              Catering Jobs
                              <span class="text-muted text-body text-base">
                              (22)
                              </span>
                           </h5>
                         </span>
                      </div>

                    
                      <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                          <a href="<?php echo $base_url;?>jobs/restuarant_manager.php">
                           Restaurant Manager
                         </a>
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>

                   <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>

                    <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>
                    <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>
                    <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>
                    <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>
                   </div>



                   <div class="collapse in space-bottom-sm f_bottom">
                      <div class="row collapsible-toggle-title space-bottom-sm custom-collapsible-toggle">
                         <i class="fa fa-fw col-sm-2 fa-caret-right text-color f_icon"></i>
                         <span class="text-base text-link col-sm-22 text-gray">
                           <h5 
                              class="text-lg text-regular collapsible-toggle-title space-bottom-base">
                              <i 
                                 class="fa fa-fw text-section">
                              </i>
                             Retail Sales Jobs
                              <span class="text-muted text-body text-base">
                              (22)
                              </span>
                           </h5>
                         </span>
                      </div>


                      <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>

                   <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>

                    <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>
                    <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>
                    <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>
                    <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>
                   </div>


                    <div class="collapse in space-bottom-sm f_bottom">
                      <div class="row collapsible-toggle-title space-bottom-sm custom-collapsible-toggle">
                         <i class="fa fa-fw col-sm-2 fa-caret-right text-color f_icon"></i>
                         <span class="text-base text-link col-sm-22 text-gray">
                           <h5 
                              class="text-lg text-regular collapsible-toggle-title space-bottom-base">
                              <i 
                                 class="fa fa-fw text-section">
                              </i>
                              Management Jobs
                              <span class="text-muted text-body text-base">
                              (22)
                              </span>
                           </h5>
                         </span>
                      </div>

                     
                      <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>

                   <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>

                    <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>
                    <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>
                    <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>
                    <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>
                   </div>


                   <div class="collapse in space-bottom-sm f_bottom">
                      <div class="row collapsible-toggle-title space-bottom-sm custom-collapsible-toggle">
                         <i class="fa fa-fw col-sm-2 fa-caret-right text-color f_icon"></i>
                         <span class="text-base text-link col-sm-22 text-gray">
                           <h5 
                              class="text-lg text-regular collapsible-toggle-title space-bottom-base">
                              <i 
                                 class="fa fa-fw text-section">
                              </i>
                              Procurement Jobs
                              <span class="text-muted text-body text-base">
                              (22)
                              </span>
                           </h5>
                         </span>
                      </div>

                     
                      <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>

                   <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>

                    <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>
                    <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>
                    <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>
                    <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>
                   </div>


                   <div class="collapse in space-bottom-sm f_bottom">
                      <div class="row collapsible-toggle-title space-bottom-sm custom-collapsible-toggle">
                         <i class="fa fa-fw col-sm-2 fa-caret-right text-color f_icon"></i>
                         <span class="text-base text-link col-sm-22 text-gray">
                           <h5 
                              class="text-lg text-regular collapsible-toggle-title space-bottom-base">
                              <i 
                                 class="fa fa-fw text-section">
                              </i>
                             Customer Service Jobs
                              <span class="text-muted text-body text-base">
                              (22)
                              </span>
                           </h5>
                         </span>
                      </div>

                     
                      <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>

                   <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>

                    <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>
                    <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>
                    <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>
                    <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>
                   </div>




                   <div class="collapse in space-bottom-sm f_bottom">
                      <div class="row collapsible-toggle-title space-bottom-sm custom-collapsible-toggle">
                         <i class="fa fa-fw col-sm-2 fa-caret-right text-color f_icon"></i>
                         <span class="text-base text-link col-sm-22 text-gray">
                           <h5 
                              class="text-lg text-regular collapsible-toggle-title space-bottom-base">
                              <i 
                                 class="fa fa-fw text-section">
                              </i>
                            Accounting Jobs
                              <span class="text-muted text-body text-base">
                              (22)
                              </span>
                           </h5>
                         </span>
                      </div>

                     
                      <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>

                   <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>

                    <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>
                    <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>
                    <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>
                    <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>
                   </div>


                   <div class="collapse in space-bottom-sm f_bottom">
                      <div class="row collapsible-toggle-title space-bottom-sm custom-collapsible-toggle">
                         <i class="fa fa-fw col-sm-2 fa-caret-right text-color f_icon"></i>
                         <span class="text-base text-link col-sm-22 text-gray">
                           <h5 
                              class="text-lg text-regular collapsible-toggle-title space-bottom-base">
                              <i 
                                 class="fa fa-fw text-section">
                              </i>
                              Design Jobs
                              <span class="text-muted text-body text-base">
                              (22)
                              </span>
                           </h5>
                         </span>
                      </div>

                     
                      <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>

                   <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>

                    <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>
                    <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>
                    <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>
                    <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>
                   </div>
                   

                   <div class="collapse in space-bottom-sm f_bottom">
                      <div class="row collapsible-toggle-title space-bottom-sm custom-collapsible-toggle">
                         <i class="fa fa-fw col-sm-2 fa-caret-right text-color f_icon"></i>
                         <span class="text-base text-link col-sm-22 text-gray">
                           <h5 
                              class="text-lg text-regular collapsible-toggle-title space-bottom-base">
                              <i 
                                 class="fa fa-fw text-section">
                              </i>
                              Logistics Jobs
                              <span class="text-muted text-body text-base">
                              (22)
                              </span>
                           </h5>
                         </span>
                      </div>

                     
                      <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>

                   <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>

                    <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>
                    <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>
                    <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>
                    <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>
                   </div>


                   <div class="collapse in space-bottom-sm f_bottom">
                      <div class="row collapsible-toggle-title space-bottom-sm custom-collapsible-toggle">
                         <i class="fa fa-fw col-sm-2 fa-caret-right text-color f_icon"></i>
                         <span class="text-base text-link col-sm-22 text-gray">
                           <h5 
                              class="text-lg text-regular collapsible-toggle-title space-bottom-base">
                              <i 
                                 class="fa fa-fw text-section">
                              </i>
                             HR Jobs
                              <span class="text-muted text-body text-base">
                              (22)
                              </span>
                           </h5>
                         </span>
                      </div>

                     
                      <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>

                   <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>

                    <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>
                    <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>
                    <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>
                    <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>
                   </div>


                   <div class="collapse in space-bottom-sm f_bottom">
                      <div class="row collapsible-toggle-title space-bottom-sm custom-collapsible-toggle">
                         <i class="fa fa-fw col-sm-2 fa-caret-right text-color f_icon"></i>
                         <span class="text-base text-link col-sm-22 text-gray">
                           <h5 
                              class="text-lg text-regular collapsible-toggle-title space-bottom-base">
                              <i 
                                 class="fa fa-fw text-section">
                              </i>
                              Admin Jobs
                              <span class="text-muted text-body text-base">
                              (22)
                              </span>
                           </h5>
                         </span>
                      </div>

                     
                      <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>

                   <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>

                    <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>
                    <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>
                    <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>
                    <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>
                   </div>



                   <div class="collapse in space-bottom-sm f_bottom">
                      <div class="row collapsible-toggle-title space-bottom-sm custom-collapsible-toggle">
                         <i class="fa fa-fw col-sm-2 fa-caret-right text-color f_icon"></i>
                         <span class="text-base text-link col-sm-22 text-gray">
                           <h5 
                              class="text-lg text-regular collapsible-toggle-title space-bottom-base">
                              <i 
                                 class="fa fa-fw text-section">
                              </i>
                              Finance & Consulting Jobs
                              <span class="text-muted text-body text-base">
                              (22)
                              </span>
                           </h5>
                         </span>
                      </div>

                     
                      <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>

                   <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>

                    <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>
                    <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>
                    <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>
                    <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>
                   </div>


                   <div class="collapse in space-bottom-sm f_bottom">
                      <div class="row collapsible-toggle-title space-bottom-sm custom-collapsible-toggle">
                         <i class="fa fa-fw col-sm-2 fa-caret-right text-color f_icon"></i>
                         <span class="text-base text-link col-sm-22 text-gray">
                           <h5 
                              class="text-lg text-regular collapsible-toggle-title space-bottom-base">
                              <i 
                                 class="fa fa-fw text-section">
                              </i>
                              Marketing Jobs
                              <span class="text-muted text-body text-base">
                              (22)
                              </span>
                           </h5>
                         </span>
                      </div>

                     
                      <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>

                   <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>

                    <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>
                    <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>
                    <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>
                    <div class="collapsible-body collapse" style="height: auto;">
                        <div class="space-top-sm space-bottom-sm space-left-xs text-regular text-base text-gray">
                           Restaurant Manager
                            <div class="pull-right">
                           Egypt
                        </div>
                        </div>
                   </div>
                   </div>
                    <!-- <div class="collapsible space-bottom-base">
                        <div class="collapsible-toggle">
                           <h5 
                              class="text-lg text-regular collapsible-toggle-title space-bottom-base">
                              <i 
                                 class="fa fa-fw text-section">
                              </i>
                              Catering Jobs
                              <span class="text-muted text-body text-base">
                              (22)
                              </span>
                           </h5>
                        </div>
                        <div collapse="category['24'].isCollapsed" class="collapsible-body">
                           <table class="table table-fixed table-light table-hover space-bottom-none">
                              <tbody>
                                 <tr>
                                    <td class="col-sm-16">
                                       <a href="https://www.gulftalent.com/uae/jobs/commis-245296" class="text-med">Commis</a>
                                    </td>
                                    <td class="col-sm-8">
                                       Dubai, UAE
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="col-sm-16">
                                       <a href="https://www.gulftalent.com/qatar/jobs/kitchen-chef-236471" class="text-med">Kitchen Chef</a>
                                    </td>
                                    <td class="col-sm-8">
                                       Qatar
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="col-sm-16">
                                       <a href="https://www.gulftalent.com/qatar/jobs/commis-229582" class="text-med">Commis</a>
                                    </td>
                                    <td class="col-sm-8">
                                       Qatar
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="col-sm-16">
                                       <a href="https://www.gulftalent.com/qatar/jobs/bakery-chef-de-partie-225678" class="text-med">Bakery Chef De Partie</a>
                                    </td>
                                    <td class="col-sm-8">
                                       Qatar
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="col-sm-16">
                                       <a href="https://www.gulftalent.com/bahrain/jobs/runner-234838" class="text-med">Runner</a>
                                    </td>
                                    <td class="col-sm-8">
                                       Bahrain
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="col-sm-16">
                                       <a href="https://www.gulftalent.com/uae/jobs/commis-228922" class="text-med">Commis</a>
                                    </td>
                                    <td class="col-sm-8">
                                       UAE
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="col-sm-16">
                                       <a href="https://www.gulftalent.com/jordan/jobs/chef-de-partie-233984" class="text-med">Chef de Partie</a>
                                    </td>
                                    <td class="col-sm-8">
                                       Jordan
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="col-sm-16">
                                       <a href="https://www.gulftalent.com/oman/jobs/commis-233986" class="text-med">Commis</a>
                                    </td>
                                    <td class="col-sm-8">
                                       Oman
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="col-sm-16">
                                       <a href="https://www.gulftalent.com/jordan/jobs/pastry-sous-chef-240971" class="text-med">Pastry Sous Chef</a>
                                    </td>
                                    <td class="col-sm-8">
                                       Jordan
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="col-sm-16">
                                       <a href="https://www.gulftalent.com/oman/jobs/barista-227928" class="text-med">Barista</a>
                                    </td>
                                    <td class="col-sm-8">
                                       Oman
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="col-sm-16">
                                       <a href="https://www.gulftalent.com/oman/jobs/comiis-228440" class="text-med">Comiis</a>
                                    </td>
                                    <td class="col-sm-8">
                                       Oman
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="col-sm-16">
                                       <a href="https://www.gulftalent.com/iraq/jobs/assistant-manager-2-226459" class="text-med">Assistant Manager 2</a>
                                    </td>
                                    <td class="col-sm-8">
                                       Iraq
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="col-sm-16">
                                       <a href="https://www.gulftalent.com/oman/jobs/waiter-228063" class="text-med">Waiter</a>
                                    </td>
                                    <td class="col-sm-8">
                                       Oman
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="col-sm-16">
                                       <a href="https://www.gulftalent.com/saudi-arabia/jobs/butcher-234752" class="text-med">Butcher</a>
                                    </td>
                                    <td class="col-sm-8">
                                       Saudi Arabia
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="col-sm-16">
                                       <a href="https://www.gulftalent.com/saudi-arabia/jobs/kitchen-chef-234755" class="text-med">Kitchen Chef</a>
                                    </td>
                                    <td class="col-sm-8">
                                       Saudi Arabia
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="col-sm-16">
                                       <a href="https://www.gulftalent.com/saudi-arabia/jobs/demi-chef-de-partie-234509" class="text-med">Demi Chef de Partie</a>
                                    </td>
                                    <td class="col-sm-8">
                                       Saudi Arabia
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="col-sm-16">
                                       <a href="https://www.gulftalent.com/saudi-arabia/jobs/bakery-sous-chef-234510" class="text-med">Bakery Sous Chef</a>
                                    </td>
                                    <td class="col-sm-8">
                                       Saudi Arabia
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="col-sm-16">
                                       <a href="https://www.gulftalent.com/saudi-arabia/jobs/barista-228921" class="text-med">Barista</a>
                                    </td>
                                    <td class="col-sm-8">
                                       Saudi Arabia
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="col-sm-16">
                                       <a href="https://www.gulftalent.com/saudi-arabia/jobs/pastry-chef-231251" class="text-med">Pastry Chef</a>
                                    </td>
                                    <td class="col-sm-8">
                                       Saudi Arabia
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="col-sm-16">
                                       <a href="https://www.gulftalent.com/qatar/jobs/pastry-commis-238745" class="text-med">Pastry Commis</a>
                                    </td>
                                    <td class="col-sm-8">
                                       Qatar
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="col-sm-16">
                                       <a href="https://www.gulftalent.com/saudi-arabia/jobs/chef-de-partie-234749" class="text-med">Chef de Partie</a>
                                    </td>
                                    <td class="col-sm-8">
                                       Saudi Arabia
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="col-sm-16">
                                       <a href="https://www.gulftalent.com/saudi-arabia/jobs/bakery-commis-234751" class="text-med">Bakery Commis</a>
                                    </td>
                                    <td class="col-sm-8">
                                       Saudi Arabia
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>-->
                  </div>
               </div>
            </div>
      </section>
   </section>
   </div>
</main>
<?php include('../footer.php'); ?>