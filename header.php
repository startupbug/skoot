<?php $base_url = 'http://localhost/skoot/skootjob/';?>
<!DOCTYPE html>

<html class="no-js ie ng-app:GT.app " ng-app="GT.app" id="ng-app">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>

   <link href="<?php echo $base_url; ?>assets/css/gt-common.mina95c.css" type="text/css" rel="stylesheet" />
   <link href="<?php echo $base_url; ?>assets/css/s_css.css" type="text/css" rel="stylesheet" />
   <title>Skoot job</title>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
   <meta name="description" content="" />
   <meta name="keywords" content="" />

   <link rel="canonical" href="index.html" />
   <link rel="icon" href="favicona95c.ico" type="image/x-icon" />
   <link rel="shortcut icon" href="favicona95c.ico" type="image/x-icon" />
   <link rel="alternate" media="only screen and (max-width: 640px)" href="mobile/index.html" />

</head>
<body class="section-theme">

   <header class="hidden-print">
      <nav class="navbar navbar-default" role="navigation">
         <div class="container">
            <div class="row">
               <div class="col-sm-16">
                  <div class="navbar-header">
                     <a href="index.html" tabindex="1" class="navbar-brand">
                        <img src="<?php echo $base_url; ?>assets/img/logo.png?v2_68_0"
                        alt="skootjob"
                        title="skootjob"
                        width="200"
                        height="54" />
                     </a>
                  </div>
               </div>
               <div class="col-sm-8">
                  <div class="btn-group btn-group-justified">
                     <a gt-modal-login="candidate"
                     tabindex="2"
                     show-secondary-link="true"
                     force="false"
                     class="btn btn-tertiary"
                     redirect-path="/home/employeeUpdateMissing.php?nf="
                     >
                     Candidate
                  </a>
                  <a class="btn btn-primary employer"
                  gt-modal-static="'registrationOptionsModal'"
                  gt-modal-class="modal-fixed-top"
                  gt-modal-size="sm"
                  gt-modal-ga-track-url="/register"
                  gt-ga-track-event="click"
                  gt-ga-track-event-category="CandidateRegistrationJoin"
                  gt-ga-track-event-action="'Registration Form Modal'"
                  gt-ga-track-event-label="'Opened'">
                  Employer
               </a>
            </div>
         </div>
      </div>
   </div>
</nav>
<div class="container">
   <div class="row">
      <div class="col-sm-24">
         <ul class="nav nav-tabs-main" role="tablist">
            <li>
               <a href="index.html"><i class="fa fa-home text-xxl hover-expand"></i></a>
            </li>
            <li dropdown class="dropdown section-jobs">
               <a>
                  Jobs
                  <i class="fa fa-angle-down text-primary text_color text-lg"></i>
               </a>
               <ul class="dropdown-menu">
                  <li><a href="#">Search Jobs</a></li>
                  <li><a href="#">Jobs by Country</a></li>
                  <li><a href="#">Jobs by City</a></li>
                  <li><a href="#">Jobs by Category</a></li>
                  <li><a href="#">Jobs by Industry</a></li>
                  <li>
                     <a href="#">Executive jobs</a>
                  </li>
                  <li><a href="#">Top Companies</a></li>

                                        <!-- <li><a href="jobs.html">Search Jobs</a></li>
                                       <li><a href="jobs/country.html">Jobs by Country</a></li>
                                       <li><a href="jobs/city.html">Jobs by City</a></li>
                                       <li><a href="jobs/category.html">Jobs by Category</a></li>
                                       <li><a href="jobs/industry.html">Jobs by Industry</a></li>
                                       <li>
                                          <a href="jobs/executive2679.html?page=1">Executive jobs</a>
                                       </li>
                                       <li><a href="jobs/company.html">Top Companies</a></li>-->
                                    </ul>
                                 </li>
                                 <li class="dropdown section-courses">
                                    <a>
                                       Courses
                                       <i class="fa fa-angle-down text-primary text-lg"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li><a href="#">Search Courses</a></li>
                                       <li><a href="#">Courses by Field</a></li>
                                       <li><a href="#">Courses by Country</a></li>

                                        <!--<li><a href="courses.html">Search Courses</a></li>
                                       <li><a href="courses/category.html">Courses by Field</a></li>
                                       <li><a href="courses/country.html">Courses by Country</a></li>-->
                                    </ul>
                                 </li>
                                 <li class="dropdown section-salaries">
                                    <a>
                                       Salaries
                                       <i class="fa fa-angle-down text-primary text-lg"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li>
                                          <a href="#">Evaluate Salaries</a>
                                       </li>
                                       <li>
                                          <a href="#">
                                             Salary Trends Report
                                          </a>
                                       </li>
                                       <li>
                                          <a href="#">
                                             Cost of Living Reports
                                          </a>
                                       </li>


                                       <!--<li>
                                          <a href="salaries.html">Evaluate Salaries</a>
                                       </li>
                                       <li>
                                          <a href="resources/market-research-reports/employment-and-salary-trends-in-the-gulf-2016-43.html">
                                          Salary Trends Report
                                          </a>
                                       </li>
                                       <li>
                                          <a href="cost-of-living-reports/uae-full-report-16-17.html">
                                          Cost of Living Reports
                                          </a>
                                       </li>-->
                                    </ul>
                                 </li>
                                 <li class="dropdown section-resources">
                                    <a>
                                       Resources
                                       <i class="fa fa-angle-down text-primary text-lg"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li><a href="#">Resources Home</a></li>
                                       <li><a href="#">Employment News</a></li>
                                       <li><a href="#">Market Research Reports</a></li>
                                       <li><a href="#">Professional Events</a></li>
                                       <li><a href="#">Job Search Support</a></li>
                                       <li><a href="#">Labour Laws</a></li>
                                       <li><a href="#">Public Holidays</a></li>
                                       <li><a href="#">HR Service Providers</a></li>
                                       <li><a href="#">Guides to Hiring</a></li>


                                       <!-- <li><a href="resources.html">Resources Home</a></li>
                                       <li><a href="resources/employment-news.html">Employment News</a></li>
                                       <li><a href="resources/market-research-reports.html">Market Research Reports</a></li>
                                       <li><a href="events.html">Professional Events</a></li>
                                       <li><a href="resources/job-search-support.html">Job Search Support</a></li>
                                       <li><a href="resources/labour-laws.html">Labour Laws</a></li>
                                       <li><a href="resources/public-holidays.html">Public Holidays</a></li>
                                       <li><a href="resources/hr-service-providers.html">HR Service Providers</a></li>
                                       <li><a href="resources/guides-to-hiring.html">Guides to Hiring</a></li>-->
                                    </ul>
                                 </li>
                                 <li class="pull-right dropdown
                                 ">
                                 <!--<a href="employers.html">For Employers-->
                                    <a href="#">For Employers
                                       <i class="fa fa-angle-right text-primary"></i>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </header>
