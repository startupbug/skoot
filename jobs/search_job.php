<?php include('../header.php') ;?>
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
                           <a class="list-group-item s-list-group-item" href="<?php echo $base_url; ?>jobs/executive.php">
                              <div class="media">
                                 <div class="media-object pull-left">
                                    <i class="fa fa-fw fa-building-o text-section fa-2x"></i>
                                 </div>
                                 <div class="media-body">
                                    <div class="text-medium text-overflow">Kuala Lumpur </div>
                                    <p class="text-sm text-supermuted">(1,653)</p>
                                 </div>
                              </div>
                           </a>
                           <a class="list-group-item s-list-group-item" href="<?php echo $base_url; ?>jobs/executive.php">
                              <div class="media">
                                 <div class="media-object pull-left">
                                    <i class="fa fa-fw fa-building-o text-section fa-2x"></i>
                                 </div>
                                 <div class="media-body">
                                    <div class="text-medium text-overflow">Selongar</div>
                                    <p class="text-sm text-supermuted">(1,653)</p>
                                 </div>
                              </div>
                           </a>
                           <a class="list-group-item s-list-group-item" href="<?php echo $base_url; ?>jobs/executive.php">
                              <div class="media">
                                 <div class="media-object pull-left">
                                    <i class="fa fa-fw fa-building-o text-section fa-2x"></i>
                                 </div>
                                 <div class="media-body">
                                    <div class="text-medium text-overflow">Pinang </div>
                                    <p class="text-sm text-supermuted">(1,653)</p>
                                 </div>
                              </div>
                           </a>
                           <a class="list-group-item s-list-group-item" href="<?php echo $base_url; ?>jobs/executive.php">
                              <div class="media">
                                 <div class="media-object pull-left">
                                    <i class="fa fa-fw fa-building-o text-section fa-2x"></i>
                                 </div>
                                 <div class="media-body">
                                    <div class="text-medium text-overflow">Johar </div>
                                    <p class="text-sm text-supermuted">(1,653)</p>
                                 </div>
                              </div>
                           </a>
                           <a class="list-group-item s-list-group-item" href="<?php echo $base_url; ?>jobs/executive.php">
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
                           <a class="list-group-item s-list-group-item" href="<?php echo $base_url; ?>jobs/executive.php">
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
                           <a class="list-group-item s-list-group-item hidden-print" href="city.php">
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
                           <a class="list-group-item s-list-group-item" href="<?php echo $base_url; ?>jobs/executive.php">
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
                           <a class="list-group-item s-list-group-item" href="<?php echo $base_url; ?>jobs/executive.php">
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
                           <a class="list-group-item s-list-group-item" href="<?php echo $base_url; ?>jobs/executive.php">
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
                           <a class="list-group-item s-list-group-item" href="<?php echo $base_url; ?>jobs/executive.php">
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
                           <a class="list-group-item s-list-group-item" href="<?php echo $base_url; ?>jobs/executive.php">
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
                           <a class="list-group-item s-list-group-item" href="<?php echo $base_url; ?>jobs/executive.php">
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
                           <a class="list-group-item s-list-group-item hidden-print" href="<?php echo $base_url; ?>jobs/executive.php">
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
                           <a class="list-group-item s-list-group-item" href="<?php echo $base_url; ?>jobs/executive.php">
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
                           <a class="list-group-item s-list-group-item" href="<?php echo $base_url; ?>jobs/executive.php">
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
                           <a class="list-group-item s-list-group-item" href="<?php echo $base_url; ?>jobs/executive.php">
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
                           <a class="list-group-item s-list-group-item" href="<?php echo $base_url; ?>jobs/executive.php">
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
                           <a class="list-group-item s-list-group-item" href="<?php echo $base_url; ?>jobs/executive.php">
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
                           <a class="list-group-item s-list-group-item" href="<?php echo $base_url; ?>jobs/executive.php">
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
                           <a class="list-group-item s-list-group-item hidden-print" href="<?php echo $base_url; ?>jobs/executive.php">
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
                           <a class="list-group-item s-list-group-item" href="<?php echo $base_url; ?>jobs/executive.php" title="Techlogix">
                              <div class="media">
                                 <div class="media-object pull-left">
                                    <img src="<?php echo $base_url; ?>assets/images1/logos/listing/RE214-9270_logoa95c.png?v2_68_0" width="55px" />
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
                           <a class="list-group-item s-list-group-item" href="<?php echo $base_url; ?>jobs/executive.php" title="Careem">
                              <div class="media">
                                 <div class="media-object pull-left">
                                    <img src="<?php echo $base_url; ?>assets/images1/logos/listing/OE782-6838_logoa95c.png?v2_68_0" width="55px" />
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
                           <a class="list-group-item s-list-group-item" href="<?php echo $base_url; ?>jobs/executive.php" title="Azadea Group - UAE">
                              <div class="media">
                                 <div class="media-object pull-left">
                                    <img src="<?php echo $base_url; ?>assets/images1/logos/listing/GE643-702_logoa95c.png?v2_68_0" width="55px" />
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
                           <a class="list-group-item s-list-group-item" href="<?php echo $base_url; ?>jobs/executive.php" title="DarkMatter">
                              <div class="media">
                                 <div class="media-object pull-left">
                                    <img src="<?php echo $base_url; ?>assets/images1/logos/listing/RE962-9018_logoa95c.png?v2_68_0" width="55px" />
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
                           <a class="list-group-item s-list-group-item hidden-print" href="<?php echo $base_url; ?>jobs/executive.php">
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
                           <a class="list-group-item s-list-group-item" href="<?php echo $base_url; ?>jobs/executive.php" title="Engage Selection">
                              <div class="media">
                                 <div class="media-object pull-left">
                                    <img src="<?php echo $base_url; ?>assets/images1/logos/listing/KE074-2134_logoa95c.png?v2_68_0" width="55px" />
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
                           <a class="list-group-item s-list-group-item" href="<?php echo $base_url; ?>jobs/executive.php" title="Charterhouse">
                              <div class="media">
                                 <div class="media-object pull-left">
                                    <img src="<?php echo $base_url; ?>assets/images1/logos/listing/GE186-244_logoa95c.png?v2_68_0" width="55px" />
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
                           <a class="list-group-item s-list-group-item" href="<?php echo $base_url; ?>jobs/executive.php" title="Ignite Search &amp; Selection">
                              <div class="media">
                                 <div class="media-object pull-left">
                                    <img src="<?php echo $base_url; ?>assets/images1/logos/listing/OE555-6611_logoa95c.png?v2_68_0" width="55px" />
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
                           <a class="list-group-item s-list-group-item" href="<?php echo $base_url; ?>jobs/executive.php" title="Black Pearl - UAE">
                              <div class="media">
                                 <div class="media-object pull-left">
                                    <img src="<?php echo $base_url; ?>assets/images1/logos/listing/RE174-8230_logoa95c.png?v2_68_0" width="55px" />
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
                           <a class="list-group-item s-list-group-item hidden-print" href="<?php echo $base_url; ?>jobs/executive.php">
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
                              href="<?php echo $base_url; ?>jobs/executive.php">
                              <div class="media">
                                 <div class="media-object pull-left">
                                    <img src="<?php echo $base_url; ?>assets/images1/logos/listing/RE410-8466_logoa95c.png?v2_68_0" width="55px">
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
                              href="<?php echo $base_url; ?>jobs/executive.php">
                              <div class="media">
                                 <div class="media-object pull-left">
                                    <img src="<?php echo $base_url; ?>assets/images1/logos/listing/OE555-6611_logoa95c.png?v2_68_0" width="55px">
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
                              href="<?php echo $base_url; ?>jobs/executive.php">
                              <div class="media">
                                 <div class="media-object pull-left">
                                    <img src="<?php echo $base_url; ?>assets/images1/logos/listing/QE307-7362_logoa95c.png?v2_68_0" width="55px">
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
                           <a class="list-group-item s-list-group-item hidden-print" href="<?php echo $base_url; ?>jobs/executive.php">
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
</main>
<?php include('../footer.php') ;?>