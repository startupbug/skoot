<?php include('../header.php'); ?>
<main id="main-block">
   <div class="page-header">
      <div class="container">
         <div class="row">
            <div class="col-sm-24">
               <h1>Cost of Living Reports</h1>
               <h2>Research reports from BridgeTheData</h2>
            </div>
         </div>
      </div>
   </div>
   <div class="page-content">

      <div class="container">
         <div class="row">
            <div class="col-sm-16 reset-width">
               <div class="panel panel-default">
                 <div class="panel-heading">
                    <h3 class="panel-title">Order Your Cost of Living Report</h3>
                 </div>
                 <div class="panel-body">
                    <div class="media">
                       <div class="media-object pull-left">
                          <img src="<?php echo $base_url;?>assets/img/market_report.png" class="img-responsive">
                       </div>
                       <div class="media-body">
                          <p>
                             Joblane has partnered with
                             to bring you cost of living reports for the Middle East, including:
                          </p>
                          <p>
                             Section reports (covering UAE, KSA, Qatar, GCC, Egypt and Iran):
                          </p>
                          <ul class="list-symbol-bullet list-symbol-section text-regular">
                             <li>Job Market &amp; Salary Benchmarking</li>
                             <li>Accommodation &amp; Commercial Property</li>
                             <li>Education</li>
                             <li>Healthcare &amp; Health Insurance</li>
                             <li>Business Licenses &amp; Business Travel</li>
                             <li>Household Goods &amp; Utilities</li>
                             <li>Lifestyle &amp; Hospitality</li>
                          </ul>
                       </div>
                    </div>
                    <div class="media">
                       <h4 class="header-ribbon space-top-sm">Most popular reports</h4>
                       <div class="row">
                          <div class="col-sm-8">
                             <a target="_blank" href="/cost-of-living-reports/uae-full-report-16-17">
                             <img src="https://gulftalent.cdn.prismic.io/gulftalent/90b8c6ea092293e58133cde1a1b7493e3da97d26_cost-of-living-uae-report-2016-2017.jpg" class="img-responsive">
                             </a>
                             <a target="_blank" href="#" class="space-top-xs">Cost of Living UAE Report 2016-17</a>
                             <a href="#" class="space-top-sm btn btn-primary btn-sm btn-block" target="_blank">
                             Learn more
                             </a>
                          </div>
                          <div class="col-sm-8">
                             <a target="_blank" href="/cost-of-living-reports/ksa-full-report-15-16">
                             <img src="https://gulftalent.cdn.prismic.io/gulftalent/0a02c97cfb642a5801ba042cb7f25e7231ec95b4_cost-of-living-saudi-arabia-report-2015-2016.jpg" class="img-responsive">
                             </a>
                             <a target="_blank" href="#" class="space-top-xs">Cost of Living KSA Report 2015-16</a>
                             <a href="#" class="space-top-sm btn btn-primary btn-sm btn-block" target="_blank">
                             Learn more
                             </a>
                          </div>
                          <div class="col-sm-8">
                             <a target="_blank" href="/cost-of-living-reports/qatar-full-report-15-16">
                             <img src="https://gulftalent.cdn.prismic.io/gulftalent/b69670471a1daeba11839623d6234d7e1cda3691_cost-of-living-qatar-report-2015-2016.jpg" class="img-responsive">
                             </a>
                             <a target="_blank" href="#" class="space-top-xs">Cost of Living Qatar Report 2015-16</a>
                             <a href="#" class="space-top-sm btn btn-primary btn-sm btn-block" target="_blank">
                             Learn more
                             </a>
                          </div>
                       </div>
                       <p class="space-top-sm"> Additional reports available for GCC, Egypt and Iran.</p>
                    </div>
                    <div class="collapse in space-bottom-sm">
                       <div class="row collapsible-toggle-title space-bottom-sm space-top-sm custom-collapsible-toggle">
                          <i class="fa fa-fw fa-lg col-sm-1 fa-caret-right space-top-sm"></i>
                          <span class="text-base text-link col-sm-22 text-gray">
                            <h5>Contact us for information and prices of Salary Report for your industry:</h5>
                          </span>
                       </div>
                       <div class="collapsible-body collapse" style="height: auto;">
                         <form class="form-horizontal ng-scope" method="post" action="#" id="contact-provider-form">
                            <div class="form-group space-top-sm">
                               <label class="col-sm-7 control-label required" for="costOfLivingContact_fullname">Full name</label>
                               <div class="col-sm-12">
                                  <input type="text" id="costOfLivingContact_fullname" name="costOfLivingContact[fullname]" required="required" maxlength="50" class="form-control" message="Please enter your name">
                               </div>
                            </div>
                            <div class="form-group">
                               <label class="col-sm-7 control-label required" for="costOfLivingContact_job_title">Job title</label>
                               <div class="col-sm-12">
                                  <input type="text" id="costOfLivingContact_job_title" name="costOfLivingContact[job_title]" required="required" maxlength="100" class="form-control" message="Please enter your job title">
                               </div>
                            </div>
                            <div class="form-group">
                               <label class="col-sm-7 control-label required" for="costOfLivingContact_company">Company</label>
                               <div class="col-sm-12">
                                  <input type="text" id="costOfLivingContact_company" name="costOfLivingContact[company]" required="required" maxlength="100" class="form-control" message="Please enter your job company">
                               </div>
                            </div>
                            <div class="form-group">
                               <label class="col-sm-7 control-label required" for="costOfLivingContact_current_location">Current Location</label>
                               <div class="col-sm-12">
                                  <select id="costOfLivingContact_current_location" name="costOfLivingContact[current_location]" required="required" class="form-control text-muted">
                                     <option value="" disabled="disabled" selected="selected">Select</option>
                                     <option value="10999121000000">Afghanistan</option>
                                     <option value="90999301000000">Albania</option>
                                     <option value="90229302000000">Algeria</option>
                                     <option value="90999303000000">Andorra</option>
                                     <option value="90999304000000">Angola</option>
                                     <option value="90999305000000">Anguilla</option>
                                     <option value="90999306000000">Antarctica</option>
                                     <option value="90999307000000">Antigua</option>
                                     <option value="90999308000000">Argentina</option>
                                     <option value="90999309000000">Armenia</option>
                                     <option value="90999310000000">Aruba</option>
                                     <option value="90339311000000">Australia</option>
                                     <option value="90999312000000">Austria</option>
                                     <option value="90999313000000">Azerbaijan</option>
                                     <option value="90999314000000">Bahamas</option>
                                     <option value="10111115000000">Bahrain</option>
                                     <option value="90449315000000">Bangladesh</option>
                                     <option value="90999316000000">Barbados</option>
                                     <option value="90999317000000">Barbuda</option>
                                     <option value="90999318000000">Belarus</option>
                                     <option value="90999319000000">Belgium</option>
                                     <option value="90999320000000">Belize</option>
                                     <option value="90999321000000">Benin</option>
                                     <option value="90999322000000">Bermuda</option>
                                     <option value="90449323000000">Bhutan</option>
                                     <option value="90999324000000">Bolivia</option>
                                     <option value="90999325000000">Bosnia and Herzegovina</option>
                                     <option value="90999326000000">Botswana</option>
                                     <option value="90999327000000">Bouvet Isl.</option>
                                     <option value="90999328000000">Brazil</option>
                                     <option value="90449330000000">Brunei</option>
                                     <option value="90999331000000">Bulgaria</option>
                                     <option value="90999332000000">Burkina Faso</option>
                                     <option value="90999333000000">Burundi</option>
                                     <option value="90999334000000">Caicos Islands</option>
                                     <option value="90449335000000">Cambodia</option>
                                     <option value="90999336000000">Cameroon</option>
                                     <option value="90339337000000">Canada</option>
                                     <option value="90999338000000">Cape Verde</option>
                                     <option value="90999339000000">Cayman Isl.</option>
                                     <option value="90999340000000">Central Africa</option>
                                     <option value="90999341000000">Chad</option>
                                     <option value="90999342000000">Chile</option>
                                     <option value="90449343000000">China</option>
                                     <option value="90999344000000">Christmas Isl.</option>
                                     <option value="90999345000000">Cocos Isl.</option>
                                     <option value="90999346000000">Colombia</option>
                                     <option value="90229347000000">Comoros</option>
                                     <option value="90999348000000">Congo</option>
                                     <option value="90999349000000">Cook Islands</option>
                                     <option value="90999350000000">Costa Rica</option>
                                     <option value="90999352000000">Croatia</option>
                                     <option value="90999353000000">Cuba</option>
                                     <option value="90999354000000">Cyprus</option>
                                     <option value="90999355000000">Czech Republic</option>
                                     <option value="90999356000000">Denmark</option>
                                     <option value="90229357000000">Djibouti</option>
                                     <option value="90999358000000">Dominica</option>
                                     <option value="90999359000000">Dominican Republic</option>
                                     <option value="90999360000000">East Timor</option>
                                     <option value="90999361000000">Ecuador</option>
                                     <option value="10229362000000">Egypt</option>
                                     <option value="90999363000000">El Salvador</option>
                                     <option value="90999364000000">Eritrea</option>
                                     <option value="90999365000000">Estonia</option>
                                     <option value="90999366000000">Ethiopia</option>
                                     <option value="90999367000000">Falkland Isl.</option>
                                     <option value="90999368000000">Faroe Isl.</option>
                                     <option value="90999369000000">Fiji</option>
                                     <option value="90999370000000">Finland</option>
                                     <option value="90999372000000">France</option>
                                     <option value="90999371000000">France</option>
                                     <option value="90999373000000">French Guiana</option>
                                     <option value="90999374000000">Futuna Isl.</option>
                                     <option value="90999375000000">Gabon</option>
                                     <option value="90999376000000">Gambia</option>
                                     <option value="90999377000000">Georgia</option>
                                     <option value="90999378000000">Germany</option>
                                     <option value="90999379000000">Ghana</option>
                                     <option value="90999380000000">Gibraltar</option>
                                     <option value="90999381000000">Greece</option>
                                     <option value="90999382000000">Greenland</option>
                                     <option value="90999383000000">Grenada</option>
                                     <option value="90999384000000">Guadeloupe</option>
                                     <option value="90999385000000">Guam</option>
                                     <option value="90999386000000">Guatemala</option>
                                     <option value="90999387000000">Guinea</option>
                                     <option value="90999388000000">Guinea-Bissau</option>
                                     <option value="90999389000000">Guyana</option>
                                     <option value="90999390000000">Haiti</option>
                                     <option value="90999391000000">Heard</option>
                                     <option value="90999393000000">Honduras</option>
                                     <option value="90449394000000">Hong Kong</option>
                                     <option value="90999395000000">Hungary</option>
                                     <option value="90999396000000">Iceland</option>
                                     <option value="90449397000000">India</option>
                                     <option value="90449398000000">Indonesia</option>
                                     <option value="90999399000000">Iran</option>
                                     <option value="10229120000000">Iraq</option>
                                     <option value="90999400000000">Ireland</option>
                                     <option value="90999401000000">Israel</option>
                                     <option value="90999402000000">Italy</option>
                                     <option value="90999351000000">Ivory Coast</option>
                                     <option value="90999403000000">Jamaica</option>
                                     <option value="90449404000000">Japan</option>
                                     <option value="10229117000000">Jordan</option>
                                     <option value="90999405000000">Kazakhstan</option>
                                     <option value="90999406000000">Kenya</option>
                                     <option value="90999407000000">Kiribati</option>
                                     <option value="90999531000000">Kosovo</option>
                                     <option value="10111113000000">Kuwait</option>
                                     <option value="90999408000000">Kyrgystan</option>
                                     <option value="90449409000000">Lao</option>
                                     <option value="90999410000000">Latvia</option>
                                     <option value="10229411000000">Lebanon</option>
                                     <option value="90999412000000">Lesotho</option>
                                     <option value="90999413000000">Liberia</option>
                                     <option value="10229118000000">Libya</option>
                                     <option value="90999414000000">Liechtenstein</option>
                                     <option value="90999415000000">Lithuania</option>
                                     <option value="90999416000000">Luxembourg</option>
                                     <option value="90999417000000">Macau</option>
                                     <option value="90999530000000">Macedonia</option>
                                     <option value="90999418000000">Madagascar</option>
                                     <option value="90999419000000">Malawi</option>
                                     <option value="90449420000000">Malaysia</option>
                                     <option value="90449421000000">Maldives</option>
                                     <option value="90999422000000">Mali</option>
                                     <option value="90999423000000">Malta</option>
                                     <option value="90999424000000">Marshall Isl.</option>
                                     <option value="90999425000000">Martinique</option>
                                     <option value="90229426000000">Mauritania</option>
                                     <option value="90999427000000">Mauritius</option>
                                     <option value="90999428000000">Mayotte</option>
                                     <option value="90999429000000">McDonald</option>
                                     <option value="90999430000000">Mexico</option>
                                     <option value="90999431000000">Micronesia</option>
                                     <option value="90999432000000">Miquelon</option>
                                     <option value="90999433000000">Moldova</option>
                                     <option value="90999434000000">Monaco</option>
                                     <option value="90449435000000">Mongolia</option>
                                     <option value="90999532000000">Montenegro</option>
                                     <option value="90999436000000">Montserrat</option>
                                     <option value="90229437000000">Morocco</option>
                                     <option value="90999438000000">Mozambique</option>
                                     <option value="90449439000000">Myanmar</option>
                                     <option value="90999440000000">Namibia</option>
                                     <option value="90999441000000">Nauru</option>
                                     <option value="90449442000000">Nepal</option>
                                     <option value="90999443000000">Netherlands</option>
                                     <option value="90999444000000">Neutral Zone</option>
                                     <option value="90999445000000">Nevis</option>
                                     <option value="90999446000000">New Caledonia</option>
                                     <option value="90339447000000">New Zealand</option>
                                     <option value="90999448000000">Nicaragua</option>
                                     <option value="90999449000000">Niger</option>
                                     <option value="90999450000000">Nigeria</option>
                                     <option value="90999451000000">Niue</option>
                                     <option value="90999452000000">Norfolk Island</option>
                                     <option value="90449453000000">North Korea</option>
                                     <option value="90999454000000">Norway</option>
                                     <option value="10111116000000">Oman</option>
                                     <option value="90449455000000">Pakistan</option>
                                     <option value="90999456000000">Palau</option>
                                     <option value="90229457000000">Palestine</option>
                                     <option value="90999458000000">Panama</option>
                                     <option value="90449459000000">Papua New Guinea</option>
                                     <option value="90999460000000">Paraguay</option>
                                     <option value="90999461000000">Peru</option>
                                     <option value="90449462000000">Philippines</option>
                                     <option value="90999463000000">Pitcairn</option>
                                     <option value="90999464000000">Poland</option>
                                     <option value="90999465000000">Portugal</option>
                                     <option value="90999466000000">Principe</option>
                                     <option value="90999467000000">Puerto Rico</option>
                                     <option value="10111114000000">Qatar</option>
                                     <option value="90999468000000">Reunion</option>
                                     <option value="90999469000000">Romania</option>
                                     <option value="90999470000000">Russian Federation</option>
                                     <option value="90999471000000">Rwanda</option>
                                     <option value="90999472000000">Saint Helena</option>
                                     <option value="90999473000000">Saint Kitts</option>
                                     <option value="90999474000000">Saint Lucia</option>
                                     <option value="90999475000000">Saint Pierre</option>
                                     <option value="90999476000000">Saint Vincent</option>
                                     <option value="90999477000000">Samoa</option>
                                     <option value="90999478000000">San Marino</option>
                                     <option value="90999479000000">Sao Tome</option>
                                     <option value="10111112000000">Saudi Arabia</option>
                                     <option value="90999480000000">Senegal</option>
                                     <option value="90999533000000">Serbia</option>
                                     <option value="90999481000000">Seychelles</option>
                                     <option value="90999482000000">Sierra Leone</option>
                                     <option value="90449483000000">Singapore</option>
                                     <option value="90999484000000">Slovakia</option>
                                     <option value="90999485000000">Slovenia</option>
                                     <option value="90999486000000">Solomon Isla</option>
                                     <option value="90229487000000">Somalia</option>
                                     <option value="90339488000000">South Africa</option>
                                     <option value="90999489000000">South Georgia</option>
                                     <option value="90449490000000">South Korea</option>
                                     <option value="90999491000000">Spain</option>
                                     <option value="90449492000000">Sri Lanka</option>
                                     <option value="90229493000000">Sudan</option>
                                     <option value="90999494000000">Suriname</option>
                                     <option value="90999495000000">Svalbard</option>
                                     <option value="90999496000000">Swaziland</option>
                                     <option value="90999497000000">Sweden</option>
                                     <option value="90999498000000">Switzerland</option>
                                     <option value="10229119000000">Syria</option>
                                     <option value="90449499000000">Taiwan</option>
                                     <option value="90999500000000">Tajikistan</option>
                                     <option value="90999501000000">Tanzania</option>
                                     <option value="90449502000000">Thailand</option>
                                     <option value="90999503000000">Tobago</option>
                                     <option value="90999504000000">Togo</option>
                                     <option value="90999505000000">Tokelau</option>
                                     <option value="90999506000000">Tonga</option>
                                     <option value="90999507000000">Trinidad and Tobago</option>
                                     <option value="90229508000000">Tunisia</option>
                                     <option value="90999509000000">Turkey</option>
                                     <option value="90999510000000">Turkmenistan</option>
                                     <option value="90999511000000">Turks Islands</option>
                                     <option value="90999512000000">Tuvalu</option>
                                     <option value="10111111000000">UAE</option>
                                     <option value="90999513000000">Uganda</option>
                                     <option value="90999514000000">Ukraine</option>
                                     <option value="90339515000000">United Kingdom</option>
                                     <option value="90339516000000">United States</option>
                                     <option value="90999517000000">Uruguay</option>
                                     <option value="90999518000000">Uzbekistan</option>
                                     <option value="90999519000000">Vanuatu</option>
                                     <option value="90999520000000">Vatican State</option>
                                     <option value="90999521000000">Venezuela</option>
                                     <option value="90449522000000">Vietnam</option>
                                     <option value="90999523000000">Wallis</option>
                                     <option value="90999524000000">Western Sahara</option>
                                     <option value="90229525000000">Yemen</option>
                                     <option value="90999526000000">Yugoslavia</option>
                                     <option value="90999527000000">Zaire</option>
                                     <option value="90999528000000">Zambia</option>
                                     <option value="90999529000000">Zimbabwe</option>
                                  </select>
                               </div>
                            </div>
                            <div class="form-group">
                               <label class="col-sm-7 control-label required" for="costOfLivingContact_email">Email</label>
                               <div class="col-sm-12">
                                  <input type="email" id="costOfLivingContact_email" name="costOfLivingContact[email]" required="required" class="form-control" message="Please enter your email" message-email="Please enter a valid email address">
                               </div>
                            </div>
                            <div class="form-group">
                               <label class="col-sm-7 control-label required" for="costOfLivingContact_mobile">Mobile number</label>
                               <div class="col-sm-12">
                                  <input type="text" id="costOfLivingContact_mobile" name="costOfLivingContact[mobile]" required="required" maxlength="20" class="form-control" message="Please enter your mobile number" placeholder="e.g. +971 56223 3360">
                               </div>
                            </div>
                            <h4>Which reports are you interested in?</h4>
                            <div class="row space-bottom-lg">
                               <div class="col-sm-22  col-sm-offset-1">
                                  <strong>By industry</strong>
                                  <div class="checkbox">
                                     <label>
                                     <input type="checkbox" value="all" ng-click="checkAll(industries)">
                                     All
                                     </label>
                                  </div>
                                  <div class="checkbox">
                                     <label>
                                     <input type="checkbox" id="costOfLivingContact_industries_0" name="costOfLivingContact[industries][]" value="Oil, Gas and Energy" checked="checked" >
                                     Oil, Gas and Energy
                                     </label>
                                  </div>
                                  <div class="checkbox">
                                     <label>
                                     <input type="checkbox" id="costOfLivingContact_industries_1" name="costOfLivingContact[industries][]" value="Construction, Engineering and Manufacturing" checked="checked" >
                                     Construction, Engineering and Manufacturing
                                     </label>
                                  </div>
                                  <div class="checkbox">
                                     <label>
                                     <input type="checkbox" id="costOfLivingContact_industries_2" name="costOfLivingContact[industries][]" value="Financial Services" checked="checked" >
                                     Financial Services
                                     </label>
                                  </div>
                                  <div class="checkbox">
                                     <label>
                                     <input type="checkbox" id="costOfLivingContact_industries_3" name="costOfLivingContact[industries][]" value="Aviation, Aviation Engineering and Airports" checked="checked" >
                                     Aviation, Aviation Engineering and Airports
                                     </label>
                                  </div>
                                  <div class="checkbox">
                                     <label>
                                     <input type="checkbox" id="costOfLivingContact_industries_4" name="costOfLivingContact[industries][]" value="Education, Schools and Universities" checked="checked" >
                                     Education, Schools and Universities
                                     </label>
                                  </div>
                                  <div class="checkbox">
                                     <label>
                                     <input type="checkbox" id="costOfLivingContact_industries_5" name="costOfLivingContact[industries][]" value="Government and Freezones (Nationals and Expats)" checked="checked" >
                                     Government and Freezones (Nationals and Expats)
                                     </label>
                                  </div>
                                  <div class="checkbox">
                                     <label>
                                     <input type="checkbox" id="costOfLivingContact_industries_6" name="costOfLivingContact[industries][]" value="Healthcare and Pharmaceuticals" checked="checked" >
                                     Healthcare and Pharmaceuticals
                                     </label>
                                  </div>
                                  <div class="checkbox">
                                     <label>
                                     <input type="checkbox" id="costOfLivingContact_industries_7" name="costOfLivingContact[industries][]" value="Insurance" checked="checked" >
                                     Insurance
                                     </label>
                                  </div>
                                  <div class="checkbox">
                                     <label>
                                     <input type="checkbox" id="costOfLivingContact_industries_8" name="costOfLivingContact[industries][]" value="Logistics and Distribution" checked="checked" >
                                     Logistics and Distribution
                                     </label>
                                  </div>
                                  <div class="checkbox">
                                     <label>
                                     <input type="checkbox" id="costOfLivingContact_industries_9" name="costOfLivingContact[industries][]" value="Media and Marketing" checked="checked" >
                                     Media and Marketing
                                     </label>
                                  </div>
                                  <div class="checkbox">
                                     <label>
                                     <input type="checkbox" id="costOfLivingContact_industries_10" name="costOfLivingContact[industries][]" value="Retail – Luxury and FMCG" checked="checked" >
                                     Retail – Luxury and FMCG
                                     </label>
                                  </div>
                                  <div class="checkbox">
                                     <label>
                                     <input type="checkbox" id="costOfLivingContact_industries_11" name="costOfLivingContact[industries][]" value="Technology and Communications" checked="checked" >
                                     Technology and Communications
                                     </label>
                                  </div>
                                  <div class="checkbox">
                                     <label>
                                     <input type="checkbox" id="costOfLivingContact_industries_12" name="costOfLivingContact[industries][]" value="Tourism and Hospitality" checked="checked" >
                                     Tourism and Hospitality
                                     </label>
                                  </div>
                               </div>
                            </div>
                            <div class="form-group">
                               <label class="col-sm-7 control-label" for="costOfLivingContact_query">Query, if any</label>
                               <div class="col-sm-12">
                                  <textarea id="costOfLivingContact_query" name="costOfLivingContact[query]" rows="3" class="form-control"></textarea>
                               </div>
                            </div>
                            <div class="row">
                               <div class="col-sm-12 col-sm-offset-7">
                                  <button type="submit" class="btn btn-primary btn-lg btn-block col-sm-24">Contact me</button>
                               </div>
                            </div>
                            <div class="row">
                               <div class="col-sm-12 col-sm-offset-7">
                                  <p class="space-top-sm">
                                     A representative will get in touch with you shortly
                                  </p>
                               </div>
                            </div>
                         </form>

                       </div>
                    </div>

                    <h4 class="header-ribbon space-top-sm">About BridgeTheData</h4>
                    <p class="space-bottom-sm">
                       Formerly known as Cost of Living Reports Middle East,
                       publishes reports on the cost
                       of living for all of the GCC, Iran and Egypt.  With over 12 years of data accumulated on the cost of
                       living across the MENA region, BridgeTheData helps to close the gap between HR and finance personnel
                       and the limitless data points they need access to, to accurately formulate their annual C&amp;B
                       adjustments and allowances.
                    </p>
                    <ul class="list-symbol-bullet list-symbol-section text-regular">
                       <li>Country-wide reports for 8 MENA countries</li>
                       <li>Sector-wise report options</li>
                       <li>8+ years of salaries, accommodation and education costs</li>
                       <li>30 cities in MENA reported on</li>
                       <li>Price: Starting from $600</li>
                    </ul>
                 </div>
               </div>
            </div>
            <div class="col-sm-8 hidden-print">
               <div class="panel panel-default">
                  <div class="panel-body panel-body-ad">
                     <div>
                       <img src="<?php echo $base_url;?>assets/img/cv.png" alt="Employment and Salary Trends in the Gulf 2016" width="100%"/>
                     </div>
                  </div>
                  <div class="list-group f_heading">
                     <a class="list-group-item f_item" href="<?php echo $base_url; ?>register/advertising_agencies.php">
                       <i class="fa fa-fw fa-chevron-right text-primary f_right"></i>
                       Advertise Here
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

</main>

<?php include('../footer.php'); ?>
