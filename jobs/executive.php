<?php include('../header.php'); ?>


<main id="main-block">
   <div class="page-header">
      <div class="container">
         <div class="row">
            <div class="col-sm-24">
               <h1>
                  Jobs for Fresh Graduates
               </h1>
               <form class="form-inline space-bottom-xs hidden-print">
                  <div class="form-group form-group-xl">
                     <input type="text" autocomplete="off" placeholder="Enter keywords (e.g. Finance Manager, Architect )" name="pos_ref" class="form-control input-lg input-blk" />
                  </div>
                  <button type="submit" class="btn btn-lg btn-primary btn-corner">
                    Search
                  </button>
               </form>
            </div>
         </div>
      </div>
   </div>
   <div class="page-content">
      <div class="container hidden-print" id="cv-search-dynamic-filter-band">
         <div class="row ng-scope">
            <div class="col-sm-24">
               <div class="panel panel-label-strip">
                  <h3 class="header-ribbon s-header-ribbon">
                     Filtered by
                  </h3>
                  <span class="label label-default space-top-xs ng-binding">
                    Seniority
                  </span>
               </div>
            </div>
         </div>
      </div>
      <div class="container">
         <div class="row">
            <div class="col-sm-6 hidden-print">
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <h4>
                        Filter Results
                        <div class="pull-right">
                           <a class="text-body text-base">Clear all</a>
                        </div>
                     </h4>
                  </div>
                  <form role="form" action="#" class="form-filters" method="post">
                     <div class="filter-group">
                        <div>
                           <h5 class="filter-group-toggle filter-group-heading text-regular">
                              <i class="fa fa-fw text-section fa-caret-down"></i>By City
                           </h5>
                           <ul collapse="group.collapsed" class="filter-group-list speedy collapse in" style="height: auto;">
                              <li class="filter-group-list-item selected">
                                 <div class="checkbox">
                                    <label><input type="checkbox">All</label>
                                 </div>
                              </li>
                              <li class="filter-group-list-item">
                                 <div class="checkbox">
                                    <label title="Kuala Lumpur"><input type="checkbox">Kuala Lumpur</label>
                                    <div class="pull-right ng-binding">(8)</div>
                                 </div>
                              </li>
                              <li class="filter-group-list-item">
                                 <div class="checkbox">
                                    <label title="Selongar"><input type="checkbox">Selongar</label>
                                    <div class="pull-right ng-binding">(7)</div>
                                 </div>
                              </li>
                              <li class="filter-group-list-item">
                                 <div class="checkbox">
                                    <label title="Penang"><input type="checkbox">Penang</label>
                                    <div class="pull-right ng-binding">(87)</div>
                                 </div>
                              </li>
                              <li class="filter-group-list-item">
                                 <div class="checkbox">
                                    <label title="Johar"><input type="checkbox">Johar</label>
                                    <div class="pull-right ng-binding">(187)</div>
                                 </div>
                              </li>
                              <li class="filter-group-list-item">
                                 <div class="checkbox">
                                    <label title="Sarawak"><input type="checkbox">Sarawak</label>
                                    <div class="pull-right ng-binding">(87)</div>
                                 </div>
                              </li>
                              <li>
                                 <div class="filter-group-toggle filter-group-expand">
                                    <i class="fa fa-fw fa-plus-square text-section"></i>
                                    <span class="text-sm text-muted">Show all</span>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="filter-group">
                        <div>
                           <h5 class="filter-group-toggle filter-group-heading text-regular">
                              <i class="fa fa-fw text-section fa-caret-down"></i>By Job Role
                           </h5>
                           <ul collapse="group.collapsed" class="filter-group-list speedy collapse in" style="height: auto;">
                              <li class="filter-group-list-item selected">
                                 <div class="checkbox">
                                    <label><input type="checkbox">All</label>
                                 </div>
                              </li>
                              <li class="filter-group-list-item">
                                 <div class="checkbox">
                                    <label title="Civil Engineering"><input type="checkbox">Civil Engineering</label>
                                    <div class="pull-right ng-binding">(8)</div>
                                 </div>
                              </li>
                              <li class="filter-group-list-item">
                                 <div class="checkbox">
                                    <label title="Management"><input type="checkbox">Management</label>
                                    <div class="pull-right ng-binding">(7)</div>
                                 </div>
                              </li>
                              <li class="filter-group-list-item">
                                 <div class="checkbox">
                                    <label title="Finance & Consulting"><input type="checkbox">Finance & Consulting</label>
                                    <div class="pull-right ng-binding">(87)</div>
                                 </div>
                              </li>
                              <li class="filter-group-list-item">
                                 <div class="checkbox">
                                    <label title="Legal"><input type="checkbox">Legal</label>
                                    <div class="pull-right ng-binding">(187)</div>
                                 </div>
                              </li>
                              <li class="filter-group-list-item">
                                 <div class="checkbox">
                                    <label title="Software"><input type="checkbox">Software</label>
                                    <div class="pull-right ng-binding">(87)</div>
                                 </div>
                              </li>
                              <li>
                                 <div class="filter-group-toggle filter-group-expand">
                                    <i class="fa fa-fw fa-plus-square text-section"></i>
                                    <span class="text-sm text-muted">Show all</span>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="filter-group">
                        <div>
                           <h5 class="filter-group-toggle filter-group-heading text-regular">
                              <i class="fa fa-fw text-section fa-caret-down"></i>By Seniority
                           </h5>
                           <ul collapse="group.collapsed" class="filter-group-list speedy collapse in" style="height: auto;">
                              <li class="filter-group-list-item selected">
                                 <div class="checkbox">
                                    <label><input type="checkbox">All</label>
                                 </div>
                              </li>
                              <li class="filter-group-list-item">
                                 <div class="checkbox">
                                    <label title="Top Management / Director"><input type="checkbox">Top Management / Director</label>
                                    <div class="pull-right ng-binding">(8)</div>
                                 </div>
                              </li>
                              <li class="filter-group-list-item">
                                 <div class="checkbox">
                                    <label title="Experienced professional"><input type="checkbox">Experienced professional</label>
                                    <div class="pull-right ng-binding">(7)</div>
                                 </div>
                              </li>
                              <li class="filter-group-list-item">
                                 <div class="checkbox">
                                    <label title="Supervisor / Manager"><input type="checkbox">Supervisor / Manager</label>
                                    <div class="pull-right ng-binding">(87)</div>
                                 </div>
                              </li>
                              <li class="filter-group-list-item">
                                 <div class="checkbox">
                                    <label title="Junior Professional"><input type="checkbox">Junior Professional</label>
                                    <div class="pull-right ng-binding">(187)</div>
                                 </div>
                              </li>
                              <li class="filter-group-list-item">
                                 <div class="checkbox">
                                    <label title="Student/ Fresh graduate"><input type="checkbox">Student/ Fresh graduate</label>
                                    <div class="pull-right ng-binding">(87)</div>
                                 </div>
                              </li>
                              <li>
                                 <div class="filter-group-toggle filter-group-expand">
                                    <i class="fa fa-fw fa-plus-square text-section"></i>
                                    <span class="text-sm text-muted">Show all</span>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="filter-group">
                        <div>
                           <h5 class="filter-group-toggle filter-group-heading text-regular">
                              <i class="fa fa-fw text-section fa-caret-down"></i>By Industry
                           </h5>
                           <ul collapse="group.collapsed" class="filter-group-list speedy collapse in" style="height: auto;">
                              <li class="filter-group-list-item selected">
                                 <div class="checkbox">
                                    <label><input type="checkbox">All</label>
                                 </div>
                              </li>
                              <li class="filter-group-list-item">
                                 <div class="checkbox">
                                    <label title="Construction"><input type="checkbox">Construction</label>
                                    <div class="pull-right ng-binding">(8)</div>
                                 </div>
                              </li>
                              <li class="filter-group-list-item">
                                 <div class="checkbox">
                                    <label title="Consulting"><input type="checkbox">Consulting</label>
                                    <div class="pull-right ng-binding">(7)</div>
                                 </div>
                              </li>
                              <li class="filter-group-list-item">
                                 <div class="checkbox">
                                    <label title="Engineering"><input type="checkbox">Engineering</label>
                                    <div class="pull-right ng-binding">(87)</div>
                                 </div>
                              </li>
                              <li class="filter-group-list-item">
                                 <div class="checkbox">
                                    <label title="IT"><input type="checkbox">IT</label>
                                    <div class="pull-right ng-binding">(187)</div>
                                 </div>
                              </li>
                              <li class="filter-group-list-item">
                                 <div class="checkbox">
                                    <label title="FMCG"><input type="checkbox">FMCG</label>
                                    <div class="pull-right ng-binding">(87)</div>
                                 </div>
                              </li>
                              <li>
                                 <div class="filter-group-toggle filter-group-expand">
                                    <i class="fa fa-fw fa-plus-square text-section"></i>
                                    <span class="text-sm text-muted">Show all</span>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
            <div class="col-sm-18 reset-width"  style="width: 75%;">
               <div class="spinner-container clearfix">
                  <div class="panel panel-default">
                     <div class="panel-body">
                        <h5 class="text-muted">
                           194 Jobs found:
                           <span class="text-supermuted text-sm text-body">Showing 1 - 25</span>
                        </h5>
                        <table class="table table-section table-condensed table-hover table-fixed">
                           <thead>
                              <tr>
                                 <th class="col-sm-1-5"></th>
                                 <th class="col-sm-13">Position</th>
                                 <th class="col-sm-4">Location</th>
                                 <th class="col-sm-2-5">Date</th>
                                 <th class="text-center col-sm-3">Company</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td class="col-sm-3 text-center">1</td>
                                 <td class="col-sm-21 text-overflow text-muted">
                                    <a class="text-base title" target="_blank" href="<?php echo $base_url; ?>jobs/job_detail.php">
                                      <strong>
                                        MEP Commissioning Manager
                                      </strong>
                                    </a>
                                    <br>
                                    Energi Recruitment Services
                                 </td>
                                 <td class="text-overflow col-sm-6"><span title="Kuala Lumpur">Kuala Lumpur</span></td>
                                 <td class="col-sm-4">14 March</td>
                                 <td class="text-center col-sm-5">
                                    <a href="<?php echo $base_url; ?>jobs/about.php" target="_blank">
                                      <img src="<?php echo $base_url; ?>assets/img/Logo-Goes-Here.png" width="70px">
                                    </a>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="col-sm-3 text-center">2</td>
                                 <td class="col-sm-21 text-overflow text-muted">
                                    <a class="text-base title" target="_blank" href="<?php echo $base_url; ?>jobs/job_detail.php">
                                      <strong>
                                        MEP Commissioning Manager
                                      </strong>
                                    </a>
                                    <br>
                                    Energi Recruitment Services
                                 </td>
                                 <td class="text-overflow col-sm-6"><span title="Kuala Lumpur">Kuala Lumpur</span></td>
                                 <td class="col-sm-4">14 March</td>
                                 <td class="text-center col-sm-5">
                                    <a href="<?php echo $base_url; ?>jobs/about.php" target="_blank">
                                      <img src="<?php echo $base_url; ?>assets/img/Logo-Goes-Here.png" width="70px">
                                    </a>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="col-sm-3 text-center">3</td>
                                 <td class="col-sm-21 text-overflow text-muted">
                                    <a class="text-base title" target="_blank" href="<?php echo $base_url; ?>jobs/job_detail.php">
                                      <strong>
                                        MEP Commissioning Manager
                                      </strong>
                                    </a>
                                    <br>
                                    Energi Recruitment Services
                                 </td>
                                 <td class="text-overflow col-sm-6"><span title="Kuala Lumpur">Kuala Lumpur</span></td>
                                 <td class="col-sm-4">14 March</td>
                                 <td class="text-center col-sm-5">
                                    <a href="<?php echo $base_url; ?>jobs/about.php" target="_blank">
                                      <img src="<?php echo $base_url; ?>assets/img/Logo-Goes-Here.png" width="70px">
                                    </a>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="col-sm-3 text-center">4</td>
                                 <td class="col-sm-21 text-overflow text-muted">
                                    <a class="text-base title" target="_blank" href="<?php echo $base_url; ?>jobs/job_detail.php">
                                      <strong>
                                        MEP Commissioning Manager
                                      </strong>
                                    </a>
                                    <br>
                                    Energi Recruitment Services
                                 </td>
                                 <td class="text-overflow col-sm-6"><span title="Kuala Lumpur">Kuala Lumpur</span></td>
                                 <td class="col-sm-4">14 March</td>
                                 <td class="text-center col-sm-5">
                                    <a href="<?php echo $base_url; ?>jobs/about.php" target="_blank">
                                      <img src="<?php echo $base_url; ?>assets/img/Logo-Goes-Here.png" width="70px">
                                    </a>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="col-sm-3 text-center">5</td>
                                 <td class="col-sm-21 text-overflow text-muted">
                                    <a class="text-base title" target="_blank" href="<?php echo $base_url; ?>jobs/job_detail.php">
                                      <strong>
                                        MEP Commissioning Manager
                                      </strong>
                                    </a>
                                    <br>
                                    Energi Recruitment Services
                                 </td>
                                 <td class="text-overflow col-sm-6"><span title="Kuala Lumpur">Kuala Lumpur</span></td>
                                 <td class="col-sm-4">14 March</td>
                                 <td class="text-center col-sm-5">
                                    <a href="<?php echo $base_url; ?>jobs/about.php" target="_blank">
                                      <img src="<?php echo $base_url; ?>assets/img/Logo-Goes-Here.png" width="70px">
                                    </a>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="col-sm-3 text-center">6</td>
                                 <td class="col-sm-21 text-overflow text-muted">
                                    <a class="text-base title" target="_blank" href="<?php echo $base_url; ?>jobs/job_detail.php">
                                      <strong>
                                        MEP Commissioning Manager
                                      </strong>
                                    </a>
                                    <br>
                                    Energi Recruitment Services
                                 </td>
                                 <td class="text-overflow col-sm-6"><span title="Kuala Lumpur">Kuala Lumpur</span></td>
                                 <td class="col-sm-4">14 March</td>
                                 <td class="text-center col-sm-5">
                                    <a href="<?php echo $base_url; ?>jobs/about.php" target="_blank">
                                      <img src="<?php echo $base_url; ?>assets/img/Logo-Goes-Here.png" width="70px">
                                    </a>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="col-sm-3 text-center">7</td>
                                 <td class="col-sm-21 text-overflow text-muted">
                                    <a class="text-base title" target="_blank" href="<?php echo $base_url; ?>jobs/job_detail.php">
                                      <strong>
                                        MEP Commissioning Manager
                                      </strong>
                                    </a>
                                    <br>
                                    Energi Recruitment Services
                                 </td>
                                 <td class="text-overflow col-sm-6"><span title="Kuala Lumpur">Kuala Lumpur</span></td>
                                 <td class="col-sm-4">14 March</td>
                                 <td class="text-center col-sm-5">
                                    <a href="<?php echo $base_url; ?>jobs/about.php" target="_blank">
                                      <img src="<?php echo $base_url; ?>assets/img/Logo-Goes-Here.png" width="70px">
                                    </a>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="col-sm-3 text-center">8</td>
                                 <td class="col-sm-21 text-overflow text-muted">
                                    <a class="text-base title" target="_blank" href="<?php echo $base_url; ?>jobs/job_detail.php">
                                      <strong>
                                        MEP Commissioning Manager
                                      </strong>
                                    </a>
                                    <br>
                                    Energi Recruitment Services
                                 </td>
                                 <td class="text-overflow col-sm-6"><span title="Kuala Lumpur">Kuala Lumpur</span></td>
                                 <td class="col-sm-4">14 March</td>
                                 <td class="text-center col-sm-5">
                                    <a href="<?php echo $base_url; ?>jobs/about.php" target="_blank">
                                      <img src="<?php echo $base_url; ?>assets/img/Logo-Goes-Here.png" width="70px">
                                    </a>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="col-sm-3 text-center">9</td>
                                 <td class="col-sm-21 text-overflow text-muted">
                                    <a class="text-base title" target="_blank" href="<?php echo $base_url; ?>jobs/job_detail.php">
                                      <strong>
                                        MEP Commissioning Manager
                                      </strong>
                                    </a>
                                    <br>
                                    Energi Recruitment Services
                                 </td>
                                 <td class="text-overflow col-sm-6"><span title="Kuala Lumpur">Kuala Lumpur</span></td>
                                 <td class="col-sm-4">14 March</td>
                                 <td class="text-center col-sm-5">
                                    <a href="<?php echo $base_url; ?>jobs/about.php" target="_blank">
                                      <img src="<?php echo $base_url; ?>assets/img/Logo-Goes-Here.png" width="70px">
                                    </a>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="col-sm-3 text-center">10</td>
                                 <td class="col-sm-21 text-overflow text-muted">
                                    <a class="text-base title" target="_blank" href="<?php echo $base_url; ?>jobs/job_detail.php">
                                      <strong>
                                        MEP Commissioning Manager
                                      </strong>
                                    </a>
                                    <br>
                                    Energi Recruitment Services
                                 </td>
                                 <td class="text-overflow col-sm-6"><span title="Kuala Lumpur">Kuala Lumpur</span></td>
                                 <td class="col-sm-4">14 March</td>
                                 <td class="text-center col-sm-5">
                                    <a href="<?php echo $base_url; ?>jobs/about.php" target="_blank">
                                      <img src="<?php echo $base_url; ?>assets/img/Logo-Goes-Here.png" width="70px">
                                    </a>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                        <div class="text-center">
                           <ul class="pagination">
                              <li class="jumper disabled">
                                 <a href="executive2679.html?page=1">First</a>
                              </li>
                              <li class="active"><a>1</a></li>
                              <li>
                                 <a href="#">
                                 2
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                 3
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                 4
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                 5
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                 6
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                 7
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                 8
                                 </a>
                              </li>
                              <li class="jumper">
                                 <a href="#">Next</a>
                              </li>
                              <li class="jumper ">
                                 <a href="#">
                                 Last
                                 </a>
                              </li>
                           </ul>
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
