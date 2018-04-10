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
                  <div></div>
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
                  <div></div>
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
                    
                  </div>
               </div>
            </div>
      </section>
   </section>
   </div>
</main>
<?php include('../footer.php'); ?>