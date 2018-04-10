
<div id="register_footer_modal" class="w3-modal">
  <div class="modal-dialog">
     <div class="modal-content">
        <div>
           <div class="modal-header">
              <h2 class="modal-title">Register for Jobs</h2>
              <div class="text-heading text-lg"></div>
              <button class="close" onclick=" modalClose('register_footer_modal');">
              <i class="fa fa-remove"></i>
              </button>
           </div>
           <div class="modal-body">
              <ul class="list-symbol-check list-symbol-success text-lg text-secondary">
                 <li>Build a professional online CV</li>
                 <li>Apply for jobs with top employers</li>
                 <li>Receive relevant job alerts by email</li>
                 <li>Get noticed by top recruiters (optional)</li>
              </ul>
              <hr class="supermuted">
              <div>
                 <div class="row space-bottom-sm space-top-sm">
                    <div class="col-sm-16 col-sm-offset-4">
                       <button class="btn btn-block btn-primary col-sm-24">
                       Sign up with Email
                       </button>
                    </div>
                 </div>
                 <div class="row">
                    <div class="col-sm-16 col-sm-offset-4 horizontal-line-middle-background text-center">
                       <div class="horizontal-line-middle-background-title text-muted">or</div>
                    </div>
                 </div>
                 <div class="row space-bottom-xs space-top-sm">
                    <div class="col-sm-16 col-sm-offset-4">
                       <button class="btn btn-block btn-brand-facebook col-sm-24">
                       <i class="fa fa-fw fa-facebook-square text-left"></i>
                       Sign up with Facebook
                       </button>
                    </div>
                 </div>
                 <div class="row space-bottom-sm space-top-sm">
                    <div class="col-sm-18 col-sm-offset-3 text-muted">
                       By clicking Register, you agree to GulfTalent's
                       <a href="<?php echo $base_url; ?>terms_condition/terms.php">Terms</a>,
                       <a href="<?php echo $base_url; ?>terms_condition/privacy_policy.php">Privacy Policy</a>
                       and <a>Mailing Permissions</a>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
  </div>
</div>
<!-- Footer Section -->
<footer class="hidden-print">
    <section class="sitemap">
        <div class="container hidden-print">
            <div class="row">
                <div class="col-sm-4">
                    <h4>Jobs</h4>
                    <ul class="list-unstyled">
                        <li><a href="<?php echo $base_url; ?>jobs/search_job.php">Find jobs</a></li>
                        <li><a  onclick="modalOpen('register_footer_modal')">Register for Jobs</a></li>
                        <li><a href="<?php echo $base_url; ?>register/job-title.php">Jobs by Title</a></li>
                        <li><a href="<?php echo $base_url; ?>register/jobalert.php">Sign up for job alerts</a></li>
                        <li><a href="<?php echo $base_url; ?>register/online_cv.php">Build online CV</a></li>
                        <li><a href="<?php echo $base_url; ?>resources/job-search-support.php">Career resources</a></li>
                        <li><a href="<?php echo $base_url; ?>register/faqs.php">Help for Candidates</a></li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <h4>For Employers</h4>
                    <ul class="list-unstyled">
                        <li><a href="<?php echo $base_url; ?>employeer/employer_job.php">Post a job</a></li>
                        <li><a href="<?php echo $base_url; ?>employeer/employer_cv.php">Search CV database</a></li>
                        <li><a href="<?php echo $base_url; ?>employeer/advertise_brand.php">Advertise &amp; Brand</a></li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <h4>Discover</h4>
                    <ul class="list-unstyled">
                        <li><a href="<?php echo $base_url; ?>salaries/evaluate.php">Salaries</a></li>
                        <li><a href="<?php echo $base_url; ?>courses/search.php">Courses</a></li>
                        <li><a href="<?php echo $base_url; ?>resources/event.php">Events</a></li>
                        <li><a href="<?php echo $base_url; ?>resources/market_research_report.php">Research Reports</a></li>
                        <li><a href="<?php echo $base_url; ?>resources/employment_news.php">Articles</a></li>
                        <li><a href="<?php echo $base_url; ?>resources/public-holidays.php">Public Holidays</a></li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <h4>Other Services</h4>
                    <ul class="list-unstyled">
                        <li><a href="<?php echo $base_url; ?>otherservices/affiliates.php">For affiliates</a></li>
                        <li><a href="<?php echo $base_url; ?>otherservices/hr_professionals.php">For HR professionals</a></li>
                        <li><a href="#">For advertising agencies</a></li>

                        <li>
                            <a href="<?php echo $base_url; ?>otherservices/event_organizer.php">
                            For event organisers
                            </a>
                        </li>
                        <li><a href="<?php echo $base_url; ?>otherservices/course_organizer.php">For course organisers</a></li>
                        <li><a href="<?php echo $base_url; ?>otherservices/journalist.php">For journalists</a></li>
                        <li>
                            <a href="<?php echo $base_url; ?>otherservices/universities.php">For universities
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <h4>JobLaneTalent</h4>
                    <ul class="list-unstyled">

                        <li><a href="<?php echo $base_url; ?>joblane/aboutus.php"">About us</a></li>
                        <li><a href="<?php echo $base_url; ?>register/advertising_agencies.php">Advertise with us</a></li>
                        <li><a href="<?php echo $base_url; ?>register/tv_coverage.php">TV coverage</a></li>
                        <li><a href="<?php echo $base_url; ?>register/online_media_coverage.php">Print &amp; online coverage</a></li>
                        <li><a href="<?php echo $base_url; ?>register/contact_candidates.php">Contact us</a></li>
                        <li><a href="<?php echo $base_url; ?>joblane/sitemap.php">Sitemap</a></li>

                    </ul>
                </div>
                <div class="col-sm-4">
                    <h4>Follow Us</h4>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#" target="_blank">
                            <i class="fa fa-3x fa-facebook-square hover-expand"></i>
                            </a>
                        </li>
                        <li>
                            <a rel="publisher"
                                target="_blank"
                                href="#">
                            <i class="fa fa-3x fa-google-plus-square hover-expand"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="fa fa-3x fa-twitter-square hover-expand"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="links">
        <div class="container hidden-print">
            <div class="row">
                <div class="col-sm-24">
                    <ul class="list-inline">
                        <li><a href="<?php echo $base_url; ?>terms_condition/terms.php"" class="first">Terms</a> |</li>
                        <li>
                            <a href="<?php echo $base_url; ?>terms_condition/privacy_policy.php"">Privacy Policy</a> |
                        </li>
                        <li><a href="<?php echo $base_url; ?>terms_condition/rss.php"">RSS</a> |</li>
                        <li>
                            <span>&copy; JobLane 2018. All Rights Reserved.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</footer>

<div id="fb-root"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" charset="utf-8"></script>
<script src="<?php echo $base_url; ?>assets/js/vendor-common.mina95c.js"></script>
<script src="<?php echo $base_url; ?>assets/js/b0dcf21a95c.js"></script>
<script src="<?php echo $base_url; ?>assets/js/custom.js"></script>
</body>
</html>
