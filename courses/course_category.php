
<?php include('../header.php'); ?>
<main id="main-block">
   <div class="page-header">
      <div class="container">
         <div class="row">
            <div class="col-sm-24">
               <h1>
                  Personal Development Courses
               </h1>
               <form class="form-inline space-bottom-xs hidden-print">
                  <div class="form-group form-group-xl">
                     <input type="text" autocomplete="off" placeholder="Enter keywords (e.g. CFA, Leadership )" name="pos_ref" class="form-control input-lg input-blk" />
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
                    Field
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
                             <i class="fa fa-fw text-section fa-caret-down"></i>By Study Method
                          </h5>
                          <ul collapse="group.collapsed" class="filter-group-list speedy collapse in" style="height: auto;">
                             <li class="filter-group-list-item selected">
                                <div class="checkbox">
                                   <label><input type="checkbox">All</label>
                                </div>
                             </li>
                             <li class="filter-group-list-item">
                                <div class="checkbox">
                                   <label title="Online"><input type="checkbox">Online</label>
                                   <div class="pull-right ng-binding">(8)</div>
                                </div>
                             </li>
                             <li class="filter-group-list-item">
                                <div class="checkbox">
                                   <label title="In Class"><input type="checkbox">In Class</label>
                                   <div class="pull-right ng-binding">(7)</div>
                                </div>
                             </li>
                             <li class="filter-group-list-item">
                                <div class="checkbox">
                                   <label title="Distance Learning"><input type="checkbox">Distance Learning</label>
                                   <div class="pull-right ng-binding">(87)</div>
                                </div>
                             </li>
                          </ul>
                       </div>
                     </div>
                     <div class="filter-group">
                       <div>
                          <h5 class="filter-group-toggle filter-group-heading text-regular">
                             <i class="fa fa-fw text-section fa-caret-down"></i>By Course Type
                          </h5>
                          <ul collapse="group.collapsed" class="filter-group-list speedy collapse in" style="height: auto;">
                             <li class="filter-group-list-item selected">
                                <div class="checkbox">
                                   <label><input type="checkbox">All</label>
                                </div>
                             </li>
                             <li class="filter-group-list-item">
                                <div class="checkbox">
                                   <label title="Professional Training"><input type="checkbox">Professional Training</label>
                                   <div class="pull-right ng-binding">(8)</div>
                                </div>
                             </li>
                             <li class="filter-group-list-item">
                                <div class="checkbox">
                                   <label title="Language"><input type="checkbox">Language</label>
                                   <div class="pull-right ng-binding">(7)</div>
                                </div>
                             </li>
                             <li class="filter-group-list-item">
                                <div class="checkbox">
                                   <label title="Post Graduate"><input type="checkbox">Post Graduate</label>
                                   <div class="pull-right ng-binding">(87)</div>
                                </div>
                             </li>
                          </ul>
                       </div>
                     </div>
                     <div class="filter-group">
                       <div>
                          <h5 class="filter-group-toggle filter-group-heading text-regular">
                             <i class="fa fa-fw text-section fa-caret-down"></i>By Certification
                          </h5>
                          <ul collapse="group.collapsed" class="filter-group-list speedy collapse in" style="height: auto;">
                             <li class="filter-group-list-item selected">
                                <div class="checkbox">
                                   <label><input type="checkbox">Certificate Courses</label>
                                </div>
                             </li>
                          </ul>
                       </div>
                     </div>
                     <div class="filter-group">
                       <div>
                          <h5 class="filter-group-toggle filter-group-heading text-regular">
                             <i class="fa fa-fw text-section fa-caret-down"></i>By Date
                          </h5>
                          <ul collapse="group.collapsed" class="filter-group-list speedy collapse in" style="height: auto;">
                             <li class="filter-group-list-item selected">
                                <div class="checkbox">
                                   <label><input type="checkbox">Starting soon</label>
                                </div>
                             </li>
                          </ul>
                       </div>
                     </div>
                     <div class="filter-group">
                       <div>
                          <h5 class="filter-group-toggle filter-group-heading text-regular">
                             <i class="fa fa-fw text-section fa-caret-down"></i>By Fee (in USD)
                          </h5>
                          <ul collapse="group.collapsed" class="filter-group-list collapse in" style="height: auto;">
                             <li class="form-group filter-group-list-item">
                               <div class="select">
                                   <label title="Min Fee (in USD)" class="control-label col-sm-6 _margintop">Min.</label>
                                   <div class="_col_sm_18">
                                       <select class="form-control"  name="filters[fees][]">
                                         <option value="">Any</option>
                                         <option value="0">500</option>
                                         <option value="1">1000</option>
                                         <option value="2">5000</option>
                                         <option value="3">10000</option>
                                         <option value="4">50000</option>
                                       </select>
                                   </div>
                               </div>
                             </li>
                             <li class="form-group filter-group-list-item">
                               <div class="select">
                                   <label title="Min Fee (in USD)" class="control-label col-sm-6 _margintop">Max.</label>
                                   <div class="_col_sm_18">
                                       <select class="form-control"  name="filters[fees][]">
                                         <option value="">Any</option>
                                         <option value="0">500</option>
                                         <option value="1">1000</option>
                                         <option value="2">5000</option>
                                         <option value="3">10000</option>
                                         <option value="4">50000</option>
                                       </select>
                                   </div>
                               </div>
                             </li>
                          </ul>
                       </div>
                     </div>
                     <div class="filter-group">
                        <div>
                           <h5 class="filter-group-toggle filter-group-heading text-regular">
                              <i class="fa fa-fw text-section fa-caret-down"></i>By Field
                           </h5>
                           <ul collapse="group.collapsed" class="filter-group-list speedy collapse in" style="height: auto;">
                              <li class="filter-group-list-item selected">
                                 <div class="checkbox">
                                    <label><input type="checkbox">All</label>
                                 </div>
                              </li>
                              <li class="filter-group-list-item">
                                 <div class="checkbox">
                                    <label title="IT & Telecom"><input type="checkbox">IT & Telecomr</label>
                                    <div class="pull-right ng-binding">(8)</div>
                                 </div>
                              </li>
                              <li class="filter-group-list-item">
                                 <div class="checkbox">
                                    <label title="Personal Development"><input type="checkbox">Personal Development</label>
                                    <div class="pull-right ng-binding">(7)</div>
                                 </div>
                              </li>
                              <li class="filter-group-list-item">
                                 <div class="checkbox">
                                    <label title="Business & MBA"><input type="checkbox">Business & MBA</label>
                                    <div class="pull-right ng-binding">(87)</div>
                                 </div>
                              </li>
                              <li class="filter-group-list-item">
                                 <div class="checkbox">
                                    <label title="Finance & Banking"><input type="checkbox">Finance & Banking</label>
                                    <div class="pull-right ng-binding">(187)</div>
                                 </div>
                              </li>
                              <li class="filter-group-list-item">
                                 <div class="checkbox">
                                    <label title="HR"><input type="checkbox">HR</label>
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
                              <i class="fa fa-fw text-section fa-caret-down"></i>By Course Language
                           </h5>
                           <ul collapse="group.collapsed" class="filter-group-list speedy collapse in" style="height: auto;">
                              <li class="filter-group-list-item selected">
                                 <div class="checkbox">
                                    <label><input type="checkbox">All</label>
                                 </div>
                              </li>
                              <li class="filter-group-list-item">
                                 <div class="checkbox">
                                    <label title="English"><input type="checkbox">English</label>
                                    <div class="pull-right ng-binding">(7)</div>
                                 </div>
                              </li>
                              <li class="filter-group-list-item">
                                 <div class="checkbox">
                                    <label title="Arabic"><input type="checkbox">Arabic</label>
                                    <div class="pull-right ng-binding">(187)</div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="filter-group">
                        <div>
                           <h5 class="filter-group-toggle filter-group-heading text-regular">
                              <i class="fa fa-fw text-section fa-caret-down"></i>By Student Gender
                           </h5>
                           <ul collapse="group.collapsed" class="filter-group-list speedy collapse in" style="height: auto;">
                              <li class="filter-group-list-item selected">
                                 <div class="checkbox">
                                    <label><input type="checkbox">All</label>
                                 </div>
                              </li>
                              <li class="filter-group-list-item">
                                 <div class="checkbox">
                                    <label title="Mixed"><input type="checkbox">Mixed</label>
                                    <div class="pull-right ng-binding">(8)</div>
                                 </div>
                              </li>
                              <li class="filter-group-list-item">
                                 <div class="checkbox">
                                    <label title="Female only"><input type="checkbox">Female only</label>
                                    <div class="pull-right ng-binding">(7)</div>
                                 </div>
                              </li>
                              <li class="filter-group-list-item">
                                 <div class="checkbox">
                                    <label title="Male only"><input type="checkbox">Male only</label>
                                    <div class="pull-right ng-binding">(87)</div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
            <div class="col-sm-18 reset-width" style="width: 75%;">
               <div class="spinner-container clearfix">
                  <div class="panel panel-default">
                     <div class="panel-body">
                        <span class="text-muted"> <strong> Popular searches: </strong></span>
                        <span class="text-muted">
                          <a href="#" class="text-link">
                            communication
                          </a>
                          |
                        </span>
                        <span class="text-muted">
                          <a href="#" class="text-link">
                             business writing
                          </a>
                          |
                        </span>
                        <span class="text-muted">
                          <a href="#" class="text-link">
                             leadership
                          </a>
                          |
                        </span>
                        <span class="text-muted">
                          <a href="#" class="text-link">
                              problem solving
                          </a>
                        </span>
                        <h5 class="text-muted">
                           194 Jobs found:
                           <span class="text-supermuted text-sm text-body">Showing 1 - 25</span>
                           <a href="#" class="pull-right text-muted">
                              List Your Courses
                              <i class="fa fa-fw fa-angle-right text-primary"></i>
                          </a>
                        </h5>
                        <table class="table table-section table-condensed table-hover table-fixed">
                           <thead>
                              <tr>
                                 <th class="col-sm-1-5"></th>
                                 <th class="col-sm-9">	Training Course</th>
                                 <th class="col-sm-4">Location</th>
                                 <th class="col-sm-3">Date</th>
                                 <th class="text-center col-sm-3">Organiser</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td class="col-sm-3 text-center">1</td>
                                 <td class="col-sm-21 text-overflow text-muted">
                                    <a class="text-base title" target="_blank" href="<?php echo $base_url; ?>courses/course_detail.php">
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
                                    <a href="<?php echo $base_url; ?>courses/organization.php" target="_blank">
                                      <img src="<?php echo $base_url; ?>assets/img/Logo-Goes-Here.png" width="70px">
                                    </a>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="col-sm-3 text-center">2</td>
                                 <td class="col-sm-21 text-overflow text-muted">
                                    <a class="text-base title" target="_blank" href="<?php echo $base_url; ?>courses/course_detail.php">
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
                                    <a href="<?php echo $base_url; ?>courses/organization.php" target="_blank">
                                      <img src="<?php echo $base_url; ?>assets/img/Logo-Goes-Here.png" width="70px">
                                    </a>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="col-sm-3 text-center">3</td>
                                 <td class="col-sm-21 text-overflow text-muted">
                                    <a class="text-base title" target="_blank" href="<?php echo $base_url; ?>courses/course_detail.php">
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
                                    <a href="<?php echo $base_url; ?>courses/organization.php" target="_blank">
                                      <img src="<?php echo $base_url; ?>assets/img/Logo-Goes-Here.png" width="70px">
                                    </a>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="col-sm-3 text-center">4</td>
                                 <td class="col-sm-21 text-overflow text-muted">
                                    <a class="text-base title" target="_blank" href="<?php echo $base_url; ?>courses/course_detail.php">
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
                                    <a href="<?php echo $base_url; ?>courses/organization.php" target="_blank">
                                      <img src="<?php echo $base_url; ?>assets/img/Logo-Goes-Here.png" width="70px">
                                    </a>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="col-sm-3 text-center">5</td>
                                 <td class="col-sm-21 text-overflow text-muted">
                                    <a class="text-base title" target="_blank" href="<?php echo $base_url; ?>courses/course_detail.php">
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
                                    <a href="<?php echo $base_url; ?>courses/organization.php" target="_blank">
                                      <img src="<?php echo $base_url; ?>assets/img/Logo-Goes-Here.png" width="70px">
                                    </a>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="col-sm-3 text-center">6</td>
                                 <td class="col-sm-21 text-overflow text-muted">
                                    <a class="text-base title" target="_blank" href="<?php echo $base_url; ?>courses/course_detail.php">
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
                                    <a href="<?php echo $base_url; ?>courses/organization.php" target="_blank">
                                      <img src="<?php echo $base_url; ?>assets/img/Logo-Goes-Here.png" width="70px">
                                    </a>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="col-sm-3 text-center">7</td>
                                 <td class="col-sm-21 text-overflow text-muted">
                                    <a class="text-base title" target="_blank" href="<?php echo $base_url; ?>courses/course_detail.php">
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
                                    <a href="<?php echo $base_url; ?>courses/organization.php" target="_blank">
                                      <img src="<?php echo $base_url; ?>assets/img/Logo-Goes-Here.png" width="70px">
                                    </a>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="col-sm-3 text-center">8</td>
                                 <td class="col-sm-21 text-overflow text-muted">
                                    <a class="text-base title" target="_blank" href="<?php echo $base_url; ?>courses/course_detail.php">
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
                                    <a href="<?php echo $base_url; ?>courses/organization.php" target="_blank">
                                      <img src="<?php echo $base_url; ?>assets/img/Logo-Goes-Here.png" width="70px">
                                    </a>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="col-sm-3 text-center">9</td>
                                 <td class="col-sm-21 text-overflow text-muted">
                                    <a class="text-base title" target="_blank" href="<?php echo $base_url; ?>courses/course_detail.php">
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
                                    <a href="<?php echo $base_url; ?>courses/organization.php" target="_blank">
                                      <img src="<?php echo $base_url; ?>assets/img/Logo-Goes-Here.png" width="70px">
                                    </a>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="col-sm-3 text-center">10</td>
                                 <td class="col-sm-21 text-overflow text-muted">
                                    <a class="text-base title" target="_blank" href="<?php echo $base_url; ?>courses/course_detail.php">
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
                                    <a href="<?php echo $base_url; ?>courses/organization.php" target="_blank">
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
