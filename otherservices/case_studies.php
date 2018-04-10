
<?php include('../header.php'); ?>

<main id="main-block" >
   <div class="">
    
       <div style="background-image: url(<?php echo $base_url;?>assets/img/featured/event_img.png)" class="jumbotron bg-cover">
         <div class="container">
            <div class="row">
               <div class="col-sm-24 space-bottom-xl space-top-sm">
                  <h1 class="text-inverted text-center space-top-xxl space-bottom-none">Promote your courses</h1>
                  <h2 class="text-inverted text-hg text-center space-bottom-lg">
                     Increase attendance with the help of GulfTalent
                  </h2>
               </div>
            </div>
            <div class="row space-bottom-xl">
               <div class="col-sm-12 col-sm-offset-6 text-center">
                  <div class="row row-xs-height">
                     <div class="col-xs-height col-middle col-xs-12 text-right">
                        <h3 class="text-inverted space-bottom-none space-top-none f_call">Call Now +971 4 278 5200</h3>
                     </div>
                     <div class="col-xs-height col-middle col-xs-2 text-center">
                        <h3 class="text-inverted space-bottom-none space-top-none">or</h3>
                     </div>
                     <div class="col-xs-height col-middle col-xs-10 text-left">
                        <a gt-modal-static="&#039;coursesEnquiry&#039;" class="btn btn-tertiary btn-lg f_btn_call">
                        Request a Call
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <section class="bg-dark">
         <div class="container">
            <div class="row">
               <div class="btn-group container-block text-muted">
                  <label class="btn pull-right">
                  Course Provider Login
                  </label>
                  <label class="btn f_overview"
                     ng-model="activeTemplate"
                     ng-class="{'btn-secondary': activeTemplate == 'overview.html'}"
                     btn-radio="'overview.html'">
                      <a href="#"> Overview</a>
                 
                  </label>
                  <label class="btn f_overview"
                     ng-model="activeTemplate"
                     ng-class="{'btn-secondary': activeTemplate == 'case-studies.html'}"
                     btn-radio="'case-studies.html'">
                     <a href="#">Case Studies</a>
                 
                  </label>
                  <label class="btn" gt-modal-static="'coursesEnquiry'">
                  Request a Call
                  </label>
               </div>
            </div>
         </div>
      </section>
 <section class="bg-light">
         <div class="container">
         <h2 class="text-hg text-center space-top-xl space-bottom-xl">Success stories of our clients</h2>
         <div class="row space-bottom-lg">
             <div class="col-sm-6">
                 <a href="#">
                     <img class="img-responsive center-block"
                         src="<?php echo $base_url;?>assets/img/featured/westford.png">
                 </a>
             </div>
             <div class="col-sm-6 col-sm-offset-3">
                 <a href="#">
                     <img class="img-responsive center-block"
                         src="<?php echo $base_url;?>assets/img/featured/cima.png">
                 </a>
             </div>
             <div class="col-sm-6 col-sm-offset-3">
                 <a href="#">
                     <img class="img-responsive center-block"
                         src="<?php echo $base_url;?>assets/img/featured/organisers.png">
                 </a>
             </div>
         </div>
         </div>
         </section>
         
         <section class="bg-dark" id="story1">
         <div class="container">
         <img class="img-responsive pull-right space-top-xl"
             src="<?php echo $base_url;?>assets/img/featured/westford_img.png">
         <h2 class="space-top-xl">1. Westford School of Management</h2>
         <h4 class="space-top-sm">Training provider profile:</h4>
         <p class="text-muted text-med">
             Westford School of Management is an educational institute based in UAE established in 2009
             with multiple course centers across UAE, as well as an established presence in India, Lebanon and Sri Lanka.
         </p>
         <p class="text-muted text-med">
             Westford offers a range of UK bachelor degrees and graduate programs through partnerships with top
             British universities, along with corporate trainings and specialized professional programs focused
             on industry domains including Supply Chain Management, Project Management, Banking and Finance, and so on.
         </p>
         <h4 class="space-top-sm">Objective:</h4>
         <p class="text-muted text-med">
             To reach out to the right audience by promoting all courses and generate leads for the courses.
         </p>
         <div class="row space-top-sm">
             <div class="col-sm-12">
                 <h4>Solution:</h4>
                 <p class="text-muted text-med">
                     Dedicated page for course listing on GulfTalent with:
                 </p>
                 <ul class="text-muted text-med">
                     <li>Individual lead forms</li>
                     <li>Lead's dashboard</li>
                     <li>Real time enquiries</li>
                 </ul>
             </div>
             <div class="col-sm-12">
                 <h4>Results Achieved:</h4>
                 <ul class="text-muted text-med">
                     <li>174 courses listed</li>
                     <li>84 leads received</li>
                     <li>5 candidates registered</li>
                 </ul>
             </div>
         </div>
         <div class="row space-top-lg space-bottom-xl text-lg text-strong text-secondary">
             <div class="col-sm-6 col-sm-offset-2">
                 Investment: USD 1,800
             </div>
             <div class="col-sm-6 col-sm-offset-2">
                 Revenue: USD 7,500
             </div>
             <div class="col-sm-6 col-sm-offset-2">
                 ROI: 316%
             </div>
         </div>
         </div>
         </section>
         
         <section class="bg-light" id="story2">
         <div class="container">
         <img class="img-responsive pull-right space-top-xl space-bottom-xl"
            src="<?php echo $base_url;?>assets/img/featured/cima.png">
         <h2 class="space-top-xl">2. CIMA</h2>
         <h4 class="space-top-sm">Training provider profile:</h4>
         <p class="text-muted text-med">
             CIMA is a UK based professional body offering training and qualification in management accountancy and
             related subjects. It is the world’s largest and leading professional body of management accountants
             with more than 229,000 members and students in 176 countries.
         </p>
         <p class="text-muted text-med">
             CIMA promotes local education, training and management development operations, and new techniques through
             its research foundation and the dissemination of management accounting practices through publications
             and other media related activities.
         </p>
         <h4 class="space-top-sm">Objective:</h4>
         <p class="text-muted text-med">
             Source mid to senior level professionals in the UAE for the CIMA Programs.
         </p>
         <div class="row space-top-sm">
             <div class="col-sm-12">
                 <h4>Solution:</h4>
                 <p class="text-muted text-med">
                     Targeted mailshot to selected professionals on GulfTalent database, based on:
                 </p>
                 <ul class="text-muted text-med">
                     <li>Country of residence</li>
                     <li>Nationality</li>
                     <li>Income level</li>
                     <li>Profession</li>
                     <li>Educational qualification</li>
                 </ul>
             </div>
             <div class="col-sm-12">
                 <h4>Results Achieved:</h4>
                 <ul class="text-muted text-med">
                     <li>10,000 professionals emailed</li>
                     <li>60 leads received</li>
                     <li>3 candidates registered</li>
                 </ul>
             </div>
         </div>
         <div class="row space-top-lg space-bottom-xl text-lg text-strong text-secondary">
             <div class="col-sm-6 col-sm-offset-2">
                 Investment: USD 2,500
             </div>
             <div class="col-sm-6 col-sm-offset-2">
                 Revenue: USD 13,650
             </div>
             <div class="col-sm-6 col-sm-offset-2">
                 ROI: 450%
             </div>
         </div>
         </div>
         </section>
         
         <section class="bg-dark" id="story3">
         <div class="container">
         <img class="img-responsive pull-right space-top-xl"
             src="<?php echo $base_url;?>assets/img/featured/organisers.png">
         <h2 class="space-top-xl">3. Middle Earth HR</h2>
         <h4 class="space-top-sm">Training provider profile:</h4>
         <p class="text-muted text-med">
             Middle Earth HR is the largest HR certifying agency in Asia and the 7th largest HR certification body
             in the world in terms of number of professionals certified. Established in 1996, today it is one of
             the largest specialist training, education and knowledge support companies for HR professionals worldwide.
         </p>
         <p class="text-muted text-med">
             Middle Earth HR mentors and supports over 3,000 HR projects over 2,000 organizations annually through
             its faculty, project guidance cell and consulting team. It has trained more than 35,000 HR professionals
             from all levels across the globe so far.
         </p>
         <h4 class="space-top-sm">Objective:</h4>
         <p class="text-muted text-med">
             To source candidates for their new and upcoming courses in the Middle East market.
         </p>
         <div class="row space-top-sm">
             <div class="col-sm-12">
                 <h4>Solution:</h4>
                 <p class="text-muted text-med">
                     Dedicated page for course listing on GulfTalent with:
                 </p>
                 <ul class="text-muted text-med">
                     <li>Individual lead forms</li>
                     <li>Lead's dashboard</li>
                     <li>Real time enquiries</li>
                 </ul>
             </div>
             <div class="col-sm-12">
                 <h4>Results Achieved:</h4>
                 <ul class="text-muted text-med">
                     <li>60 courses listed</li>
                     <li>32 leads received</li>
                     <li>6 candidates registered</li>
                 </ul>
             </div>
         </div>
         <div class="row space-top-lg space-bottom-xl text-lg text-strong text-secondary">
             <div class="col-sm-6 col-sm-offset-2">
                 Investment: USD 1,800
             </div>
             <div class="col-sm-6 col-sm-offset-2">
                 Revenue: USD 4,800
             </div>
             <div class="col-sm-6 col-sm-offset-2">
                 ROI: 166%
             </div>
         </div>
         </div>
         </section>

          <section class="bg-cover jumbotron" style="background-image: url(<?php echo $base_url;?>assets/img/featured/event_bottom.png)">
         <div class="container">
            <div class="row">
               <div class="col-sm-24">
                  <h2 class="text-hg text-center">
                     <div class="space-bottom-med">Interested? Get in touch</div>
                      <div class="row row-xs-height">
               <div class="col-xs-height col-middle col-xs-12 text-right">
                  <h3 class=" space-bottom-none space-top-none f_event f_call">Call Now +971 4 278 5200</h3>
               </div>
               <div class="col-xs-height col-middle col-xs-2 text-center">
                  <h3 class=" space-bottom-none space-top-none">or</h3>
               </div>
               <div class="col-xs-height col-middle col-xs-10 text-left">
                  <a class="btn btn-tertiary btn-lg f_btn_call">
                  Request a Call back
                  </a>
               </div>
            </div>
                     <!--<div class="space-bottom-med f_call">Call Now: +971 4 278 5200</div>
                     <div class="space-bottom-med">or</div>
                     <a gt-modal-static="'coursesEnquiry'"class="btn btn-lg btn-tertiary text-xxl">Request a Call</a>-->
                  </h2>
               </div>
            </div>
         </div>
      </section>

         <?php include('../footer.php'); ?>