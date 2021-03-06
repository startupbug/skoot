<?php include('../header.php'); ?>
<main id="main-block">
   <div class="">
      <div style="background-image: url(<?php echo $base_url;?>assets/img/featured/aboutus_img.png)" class="jumbotron bg-cover">
         <div class="container space-top-xxl space-bottom-xxl">
            <div class="row">
               <div class="col-sm-24">
                  <h1 class="text-center space-top-lg space-bottom-lg">About JobLane</h1>
               </div>
            </div>
         </div>
      </div>
      <section class="bg-dark">
         <div class="container">
            <div class="row">
               <div class="col-sm-24">
                  <a href="<?php echo $base_url; ?>register/contact_candidates.php" class="pull-right space-top-xs">Contact Us 
                  <i class="fa fa-fw fa-chevron-right text-primary icon_f"></i>
                  </a>
                  <div class="btn-group text-muted">
                     <label class="btn f_btn_about f_overview">
                     <a onclick="tab('tab1')" id="tab1">Overview</a>
                     </label>
                     <label class="btn f_btn_about f_overview">
                     <a onclick="tab('tab2')" id="tab2"> What We Do</a>
                     </label>
                     <label class="btn f_btn_about f_overview">
                     <a onclick="tab('tab3')" id="tab3"> Our Users </a>
                     </label>
                     <label class="btn f_btn_about f_overview">
                     <a onclick="tab('tab4')" id="tab4"> Media Coverage</a>
                     </label>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <div id="activeTemplate"></div>
      <section class="bg-light" id="tab1_view" >
         <div class="container">
            <div class="row space-bottom-xxl">
               <div class="col-sm-24">
                  <h2 class="space-bottom-xl text-hg f_about">
                     Overview
                  </h2>
                  <p class="f_about_content">
                     Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
                  </p>
                  <p class="f_about_content">
                     Ded quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                  </p>
                  <p class="f_about_content">
                     Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariature.
                  </p>
               </div>
            </div>
         </div>
      </section>
      <section class="bg-light" id="tab2_view" style="display: none">
         <div class="container">
            <div class="row">
               <div class="col-sm-24">
                  <h1 class="text-center space-top-xl space-bottom-xl f_key">Key services</h1>
                  <div class="row space-top-lg space-bottom-lg">
                     <div class="col-sm-8 section-jobs">
                        <div class="panel panel-default panel-bordered">
                           <div class="panel-body">
                              <div class="media text-center">
                                 <div class="media-object inline">
                                    <div class="icon icon-circle icon-3x icon-circle-section hover-expand">
                                       <i class="fa fa-suited-man"></i>
                                    </div>
                                 </div>
                              </div>
                              <h3 class="text-center space-top-lg">
                                 Recruitment
                                 <div class="row">
                                    <div class="col-sm-14 col-sm-offset-5">
                                       <hr class="space-top-sm" />
                                    </div>
                                 </div>
                              </h3>
                              <ul class="list-symbol-bullet list-symbol-section text-med space-bottom-xxl">
                                 <li>Jobs across 20+ industries</li>
                                 <li>Jobs across the GCC</li>
                                 <li>Trusted companies</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-8 section-courses">
                        <div class="panel panel-default panel-bordered">
                           <div class="panel-body">
                              <div class="media text-center">
                                 <div class="media-object inline">
                                    <div class="icon icon-circle icon-3x icon-circle-section hover-expand">
                                       <i class="fa fa-teacher"></i>
                                    </div>
                                 </div>
                              </div>
                              <h3 class="text-center space-top-lg">
                                 Training Courses
                                 <div class="row">
                                    <div class="col-sm-14 col-sm-offset-5">
                                       <hr class="space-top-sm" />
                                    </div>
                                 </div>
                              </h3>
                              <ul class="list-symbol-bullet list-symbol-section text-med space-bottom-xxl">
                                 <li>Courses in 15+ disciplines</li>
                                 <li>Courses across 9 countries</li>
                                 <li>Reputed training companies</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-8 section-events">
                        <div class="panel panel-default panel-bordered">
                           <div class="panel-body">
                              <div class="media text-center">
                                 <div class="media-object inline">
                                    <div class="icon icon-circle icon-3x icon-circle-section hover-expand">
                                       <i class="fa fa-calendar"></i>
                                    </div>
                                 </div>
                              </div>
                              <h3 class="text-center space-top-lg">
                                 Professional Events
                                 <div class="row">
                                    <div class="col-sm-14 col-sm-offset-5">
                                       <hr class="space-top-sm" />
                                    </div>
                                 </div>
                              </h3>
                              <ul class="list-symbol-bullet list-symbol-section text-med space-bottom-xxl">
                                 <li>Biggest conferences &amp; exhibitions</li>
                                 <li>Top industry events</li>
                                 <li>Events across 9 countries</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <h1 class="text-center space-bottom-xl f_key">Further Resources</h1>
                  <div class="row space-bottom-lg">
                     <div class="col-sm-8 col-sm-offset-4 section-salaries">
                        <div class="panel panel-default panel-bordered">
                           <div class="panel-body">
                              <div class="media text-center">
                                 <div class="media-object inline">
                                    <div class="icon icon-circle icon-3x icon-circle-section hover-expand">
                                       <i class="fa fa-coins-hand"></i>
                                    </div>
                                 </div>
                              </div>
                              <h3 class="text-center space-top-lg">
                                 Salaries
                                 <div class="row">
                                    <div class="col-sm-14 col-sm-offset-5">
                                       <hr class="space-top-sm" />
                                    </div>
                                 </div>
                              </h3>
                              <ul class="list-symbol-bullet list-symbol-section text-med space-bottom-xxl">
                                 <li>Salary info for popular job titles</li>
                                 <li>Salary trends report every year</li>
                                 <li>Compare yourself with the market</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-8 section-resources">
                        <div class="panel panel-default panel-bordered">
                           <div class="panel-body">
                              <div class="media text-center">
                                 <div class="media-object inline">
                                    <div class="icon icon-circle icon-3x icon-circle-section hover-expand">
                                       <i class="fa fa-trend-variable"></i>
                                    </div>
                                 </div>
                              </div>
                              <h3 class="text-center space-top-lg">
                                 Research &amp; Insights
                                 <div class="row">
                                    <div class="col-sm-14 col-sm-offset-5">
                                       <hr class="space-top-sm" />
                                    </div>
                                 </div>
                              </h3>
                              <ul class="list-symbol-bullet list-symbol-section text-med space-bottom-xxl">
                                 <li>Latest employment trends</li>
                                 <li>Information on salaries increases</li>
                                 <li>Ranking of popular employers</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section  id="tab3_view" style="display: none">
         <section class="bg-light">
            <div class="container">
               <div class="row">
                  <div class="col-sm-24">
                     <h2 class="text-center text-hg space-top-xl space-bottom-xl f-about">A diverse community of professionals &amp; businesses</h2>
                     <div class="row">
                        <div class="col-sm-8 col-sm-offset-4">
                           <div class="panel panel-default panel-bordered">
                              <div class="panel-body">
                                 <div class="media container-xs-height">
                                    <div class="media-object pull-left">
                                       <i class="fa fa-suited-man fa-4x text-section"></i>
                                    </div>
                                    <div class="media-body col-middle text-heading">
                                       <div class="text-med text-muted space-bottom-xs">Professionals</div>
                                       <div class="text-xxl">7 million+</div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-8">
                           <div class="panel panel-default panel-bordered">
                              <div class="panel-body">
                                 <div class="media container-xs-height">
                                    <div class="media-object pull-left">
                                       <i class="fa fa-buildings fa-4x text-section"></i>
                                    </div>
                                    <div class="media-body col-middle text-heading">
                                       <div class="text-med text-muted space-bottom-xs">Organisations</div>
                                       <div class="text-xxl">100,000+</div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row space-bottom-xl">
                        <div class="col-sm-8 col-sm-offset-4">
                           <div class="panel panel-default panel-bordered">
                              <div class="panel-body">
                                 <div class="media container-xs-height">
                                    <div class="media-object pull-left">
                                       <i class="fa fa-globe fa-4x text-section"></i>
                                    </div>
                                    <div class="media-body col-middle">
                                       <div class="text-heading text-med text-muted">Countries</div>
                                       <div class="text-heading text-xxl">10+ in MENA</div>
                                       <div class="text-xs text-muted">200+ worldwide</div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-8">
                           <div class="panel panel-default panel-bordered">
                              <div class="panel-body">
                                 <div class="media container-xs-height">
                                    <div class="media-object pull-left">
                                       <i class="fa fa-factory fa-4x text-section"></i>
                                    </div>
                                    <div class="media-body col-middle text-heading">
                                       <div class="text-med text-muted space-bottom-xs">Industries</div>
                                       <div class="text-xxl">30+</div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="bg-dark">
            <div class="container">
               <div class="row">
                  <div class="col-sm-24">
                     <h2 class="text-center text-hg space-top-xl space-bottom-lg f-about">A vast user base located in the Middle East</h2>
                     <img class="text-center space-bottom-lg img-responsive" src="<?php echo $base_url;?>assets/img/featured/aboutus_graph.jpg">
                  </div>
               </div>
            </div>
         </section>
         <section class="bg-light">
            <div class="container">
               <h2 class="text-center text-hg space-top-xl space-bottom-xl  f-about">Highly qualified & experienced professionals</h2>
               <div class="row space-bottom-xl">
                  <div class="col-sm-8 text-center">
                     <i class="fa fa-5x text-section fa-salesman"></i>
                     <div class="space-top-lg text-heading">
                        <div class="text-success text-center text-hg">35%</div>
                        <div class="text-lg text-center">Managers and above</div>
                     </div>
                  </div>
                  <div class="col-sm-8 text-center">
                     <i class="fa fa-5x text-section fa-graduate-hat-sharp"></i>
                     <div class="space-top-lg text-heading">
                        <div class="text-success text-center text-hg">86%</div>
                        <div class="text-lg text-center">Degree holders</div>
                     </div>
                  </div>
                  <div class="col-sm-8 text-center">
                     <i class="fa fa-5x text-section fa-book"></i>
                     <div class="space-top-lg text-heading">
                        <div class="text-success text-center text-hg">35%</div>
                        <div class="text-lg text-center">Arabic</div>
                        <div class="text-muted text-base">(100% fluent in English)</div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="bg-dark">
            <div class="container">
               <h2 class="text-center text-hg space-top-xl space-bottom-xl f-about">Serving organisations across all industries</h2>
               <div class="row section-jobs space-bottom-xl text-heading">
                  <div class="col-sm-6">
                     <div class="text-center">
                        <i class="fa fa-3x text-section fa-warehouse"></i>
                        <div class="space-top-xs text-center text-med text-secondary">
                           <strong>Construction</strong>
                        </div>
                     </div>
                     <div class="text-center space-top-xl">
                        <i class="fa fa-3x text-section fa-buildings"></i>
                        <div class="space-top-xs text-center text-med text-secondary">
                           <strong>Banking</strong>
                        </div>
                     </div>
                     <div class="text-center space-top-xl">
                        <i class="fa fa-3x text-section fa-engineer"></i>
                        <div class="space-top-xs text-center text-med text-secondary">
                           <strong>Engineering</strong>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="text-center">
                        <i class="fa fa-3x text-section fa-coin-stack-short"></i>
                        <div class="space-top-xs text-center text-med text-secondary">
                           <strong>Finance</strong>
                        </div>
                     </div>
                     <div class="text-center space-top-xl">
                        <i class="fa fa-3x text-section fa-airplane"></i>
                        <div class="space-top-xs text-center text-med text-secondary">
                           <strong>Aviation</strong>
                        </div>
                     </div>
                     <div class="text-center space-top-xl">
                        <i class="fa fa-3x text-section fa-medical-plus"></i>
                        <div class="space-top-xs text-center text-med text-secondary">
                           <strong>Healthcare</strong>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="text-center">
                        <i class="fa fa-3x text-section fa-petrol-pump"></i>
                        <div class="space-top-xs text-center text-med text-secondary">
                           <strong>Oil & Gas</strong>
                        </div>
                     </div>
                     <div class="text-center space-top-xl">
                        <i class="fa fa-3x text-section fa-key"></i>
                        <div class="space-top-xs text-center text-med text-secondary">
                           <strong>Retail</strong>
                        </div>
                     </div>
                     <div class="text-center space-top-xl">
                        <i class="fa fa-3x text-section fa-bottles"></i>
                        <div class="space-top-xs text-center text-med text-secondary">
                           <strong>FMCG</strong>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="text-center">
                        <i class="fa fa-3x text-section fa-handshake"></i>
                        <div class="space-top-xs text-center text-med text-secondary">
                           <strong>Consulting</strong>
                        </div>
                     </div>
                     <div class="text-center space-top-xl">
                        <i class="fa fa-3x text-section fa-human-chain"></i>
                        <div class="space-top-xs text-center text-med text-secondary">
                           <strong>Hospitality</strong>
                        </div>
                     </div>
                     <div class="text-center space-top-xl">
                        <i class="fa fa-3x text-section fa-teacher"></i>
                        <div class="space-top-xs text-center text-med text-secondary">
                           <strong>Education</strong>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </section>
      <section class="bg-light" id="tab4_view" style="display: none">
         <div class="container space-bottom-lg">
            <div class="row">
               <div class="col-sm-24">
                  <h1 class="space-bottom-xl text-hg text-center f_key">
                     Media Coverage
                  </h1>
                  <p class="text-center">
                     GulfTalent is frequently quoted in the Middle East and international media. Sample below:
                  </p>
                  <div class="row">
                     <div class="col-sm-18 col-sm-offset-3">
                        <a href="#"
                           target="_blank"
                           class="space-right-xxl">
                        <img title="CNN" src="<?php echo $base_url;?>assets/img/featured/cnn.jpg" />
                        </a>
                        <a href="#"
                           target="_blank"
                           class="space-left-xxl">
                        <img title="aljazeera" src="<?php echo $base_url;?>assets/img/featured/aljazeera.jpg" />
                        </a>
                        <a href="/press/Shortage-of-materials-and-workers-hits-Gulf-construction-boom-40"
                           target="_blank"
                           class="space-left-xxl">
                        <img title="financialtime" src="<?php echo $base_url;?>assets/img/featured/financial.jpg" />
                        </a>
                        <a href="/tv-coverage/CNBCInternational-02Oct2007"
                           target="_blank"
                           class="space-left-xxl">
                        <img title="cnbc" src="<?php echo $base_url;?>assets/img/featured/cnbc.jpg" />
                        </a>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-18 col-sm-offset-3">
                        <a href="/press/Dubai-white-collar-jobs-down-17-pct-in-2009-poll-73"
                           target="_blank"
                           class="space-right-sm">
                        <img title="reuters" src="<?php echo $base_url;?>assets/img/featured/reuters.jpg" />
                        </a>
                        <a href="/press/Almost-Fifth-Of-UAE-Jobs-Cut-In-12-Mos-Amid-Downturn-70"
                           target="_blank"
                           class="space-right-sm">
                        <img title="twsja" src="<?php echo $base_url;?>assets/img/featured/twsja.jpg" />
                        </a>
                        <a href="/press/Gulf-Salaries-Rise-amid-Competition-for-Talent-56"
                           target="_blank">
                        <img title="afp" src="<?php echo $base_url;?>assets/img/featured/afp.jpg" />
                        </a>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-18 col-sm-offset-3">
                        <a href="/press/Gulf-Salaries-Rise-by-114-in-Year-to-August-on-Labor-Shortage-63"
                           target="_blank"
                           class="space-right-xxl space-left-lg">
                        <img title="bloomberg" src="<?php echo $base_url;?>assets/img/featured/bloomberg.jpg" />
                        </a>
                        <a href="/press/Oman-records-the-highest-salary-raise-in-the-gulf-last-year-57"
                           target="_blank"
                           class="space-left-xxl space-right-xxl">
                        <img title="ash" src="<?php echo $base_url;?>assets/img/featured/news-s-ashargha95c.png" />
                        </a>
                        <a href="/press/Paying-the-premium-41"
                           target="_blank"
                           class="space-left-xxl">
                        <img title="meed" src="<?php echo $base_url;?>assets/img/featured/meed.gif" />
                        </a>
                     </div>
                  </div>
                  <div class="row space-bottom-xxl">
                     <div class="col-sm-18 col-sm-offset-3">
                        <a href="/press/As-Qatar-booms-rents-hit-the-roof-52"
                           target="_blank"
                           class="space-right-lg">
                        <img title="herald" src="<?php echo $base_url;?>assets/img/featured/herald.jpg" />
                        </a>
                        <a href="/press/Saudi-Arabia-industry-Moving-up-the-gears-44"
                           target="_blank">
                        <img title="econimist" src="<?php echo $base_url;?>assets/img/featured/economist.jpg" />
                        </a>
                        <a href="/press/Turmoil-In-Region-Could-Drive-Job-Seekers-To-Gulf-Study-78"
                           target="_blank">
                        <img title="dowjones" src="<?php echo $base_url;?>assets/img/featured/dowjones.jpg" />
                        </a>
                     </div>
                  </div>
                  <div class="row space-bottom-xl">
                     <div class="col-sm-8 col-sm-offset-4">
                        <a class="btn btn-section btn-lg btn-block f_tv"
                           href="<?php echo $base_url;?>register/tv_coverage.php">
                        See all TV coverage
                        </a>
                     </div>
                     <div class="col-sm-8">
                        <a class="btn btn-section btn-lg btn-block f_tv"
                           href="<?php echo $base_url;?>register/online_media_coverage.php">
                        See all print and TV coverage
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>
</main>
<?php include('../footer.php'); ?>