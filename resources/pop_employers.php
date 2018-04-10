
<?php include('../header.php'); ?>

<main id="main-block">
  <div class="page-header">
     <div class="container">
        <div class="row">
           <div class="col-sm-24">
           </div>
        </div>
     </div>
  </div>
<div class="page-content">
   <div ng-controller="flashMessagesController" id="flash-messages-persistent" ng-cloak>
      <div class="container" ng-repeat="flashMessage in flashMessages | filter: {persistent: true}">
         <div class="row">
            <div class="col-sm-24">
               <div class="alert alert-{{ flashMessage.type }} fade container-xs-height container-block space-bottom-sm"
                  ng-class="{ 'in': !flashMessage.hasTransition }">
                  <div class="col-xs-height col-middle pull-left">
                     <div class="media container-xs-height">
                        <div class="media-object col-xs-height col-middle">
                           <i class="fa fa-fw"
                              ng-class="{
                              'fa-exclamation-circle': ('error' == flashMessage.type),
                              'fa-check': ('success' == flashMessage.type),
                              'fa-info-circle': ('info' == flashMessage.type),
                              'fa-warning': ('warning' == flashMessage.type)
                              }">
                           </i>
                        </div>
                        <div class="media-body col-xs-height col-middle text-xl">
                           {{ flashMessage.message }}
                           <a ng-hide="flashMessage.hasModal||flashMessage.hasCustomModal"
                              ng-href="{{ flashMessage.link }}"
                              target="{{ flashMessage.linkTarget }}">
                           {{ flashMessage.linkText }}
                           </a>
                           <a ng-show="flashMessage.hasModal"
                              gt-modal-static="flashMessage.link"
                              gt-modal-size="flashMessage.modalSize">
                           {{ flashMessage.linkText }}
                           </a>
                           <a ng-show="flashMessage.hasCustomModal&&flashMessage.link=='publicProfileBenefits'"
                              gt-modal-recent-public-profiles
                              gt-modal-size="flashMessage.modalSize">
                           {{ flashMessage.linkText }}
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-height col-middle">
                     <button type="button" class="close" ng-click="remove($index)" ng-hide="flashMessage.persistent">
                     <span aria-hidden="true">&times;</span>
                     <span class="sr-only">Close</span>
                     </button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div ng-controller="flashMessagesController"
      scroll-to-fix
      class="flashmessage"
      ng-cloak>
      <div class="container" ng-repeat="flashMessage in flashMessages | filter: {persistent: false}">
         <div class="row">
            <div class="col-sm-24">
               <div class="alert alert-{{ flashMessage.type }} fade container-xs-height container-block space-bottom-sm"
                  ng-class="{ 'in': !flashMessage.hasTransition }">
                  <div class="col-xs-height col-middle pull-left">
                     <div class="media container-xs-height">
                        <div class="media-object col-xs-height col-middle">
                           <i class="fa fa-fw"
                              ng-class="{
                              'fa-exclamation-circle': ('error' == flashMessage.type),
                              'fa-check': ('success' == flashMessage.type),
                              'fa-info-circle': ('info' == flashMessage.type),
                              'fa-warning': ('warning' == flashMessage.type)
                              }">
                           </i>
                        </div>
                        <div class="media-body col-xs-height col-middle text-xl">
                           {{ flashMessage.message }}
                           <a ng-hide="flashMessage.hasModal||flashMessage.hasCustomModal"
                              ng-href="{{ flashMessage.link }}"
                              target="{{ flashMessage.linkTarget }}">
                           {{ flashMessage.linkText }}
                           </a>
                           <a ng-show="flashMessage.hasModal"
                              gt-modal-static="flashMessage.link"
                              gt-modal-size="flashMessage.modalSize">
                           {{ flashMessage.linkText }}
                           </a>
                           <a ng-show="flashMessage.hasCustomModal&&flashMessage.link=='publicProfileBenefits'"
                              gt-modal-recent-public-profiles
                              gt-modal-size="flashMessage.modalSize">
                           {{ flashMessage.linkText }}
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-height col-middle">
                     <button type="button" class="close" ng-click="remove($index)" ng-hide="flashMessage.persistent">
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
         </div>
      </div>
      <div class="row">
         <div class="col-sm-16
            reset-width">
            <div class="panel panel-default">
               <div class="panel-heading">
                  <div class="pull-right space-left-sm">
                     <ul class="list-inline text-lg">
                        <li>
                           <a gt-print href="#" class="text-section">
                           <i class="fa fa-print"></i>
                           </a>
                        </li>
                     </ul>
                  </div>
                  <h1 class="panel-title"
                     >
                     Aramco and SABIC top the list of most popular employers for Saudi graduates
                  </h1>
                  <p class="text-md text-muted">Posted on November 29, 2016</p>
               </div>
               <div class="list-group">
                  <div class="list-group-item"
                     >
                     <ul>
                        <li>
                           <p><strong>Good training, challenging work and attractive salary are key factors influencing graduates’ employment choices</strong></p>
                        </li>
                        <li>
                           <p><strong>KFUPM graduates on average expect a starting salary of 12,000 Riyals per month</strong></p>
                        </li>
                     </ul>
                     <p>Saudi Aramco has once again been voted the employer of choice for Saudi male graduates, followed by SABIC in second place, according to a survey of KFUPM graduates released by GulfTalent.</p>
                     <p>Over 200 final-year students and recent graduates of King Fahd University of Petroleum &amp; Minerals participated in the survey.</p>
                     <p>Oil services company Schlumberger, coming in third place, was the most popular multinational employer. The company has had a consistently high ranking in GulfTalent’s surveys of KFUPM graduates since 2005.</p>
                     <p>Commenting on the survey findings, Hatem Soliman, Schlumberger’s President for Middle East &amp; Asia, attributed his company’s success in attracting top Saudi graduates to its “commitment to the recruitment and career development of Saudi nationals”.</p>
                     <p>Also ranking in this year’s top 5 most popular employers were industrial conglomerate GE, and Saudi Electricity Company.</p>
                     <table cellspacing="20px" style="margin: 10px auto; width: 550px; background: #f7f7f7">
                        <tbody>
                           <tr>
                              <td class="text-center" style="padding: 10px" colspan="2">
                                 <h5><strong>Top 20 Most Popular Employers for Saudi Graduates</strong></h5>
                              </td>
                           </tr>
                           <tr>
                              <td style="width:275px;">
                                 <ol>
                                    <li>Saudi Aramco</li>
                                    <li>SABIC</li>
                                    <li>Schlumberger</li>
                                    <li>GE</li>
                                    <li>Saudi Electricity</li>
                                    <li>Sadara</li>
                                    <li>Saudi Telecom (STC)</li>
                                    <li>Saudi Airlines</li>
                                    <li>Procter & Gamble</li>
                                    <li>ABB</li>
                                 </ol>
                              </td>
                              <td style="width:275px;">
                                 <ol start="11">
                                    <li>BAE Systems</li>
                                    <li>NCMS</li>
                                    <li>Abdul Latif Jameel</li>
                                    <li>Capital Market Authority</li>
                                    <li>Huawei</li>
                                    <li>Unilever</li>
                                    <li>PwC</li>
                                    <li>Siemens</li>
                                    <li>SAMA</li>
                                    <li>Baker Hughes</li>
                                 </ol>
                              </td>
                           </tr>
                           <tr>
                              <td colspan="2" style="margin-top: 20px; padding-left: 10px; padding-bottom: 10px;"><em>Source: GulfTalent Survey of KFUPM Graduates</em></td>
                           </tr>
                        </tbody>
                     </table>
                     <p><br />
                        Overall, oil and gas companies occupied 5 of the top 20 spots, reflecting the continued popularity of the sector among KFUPM graduates, despite the collapse in oil prices and the resulting fall in hiring activity.
                     </p>
                     <p>Unlike previous years, however, none of the banks made it to the top 20 list this year, with some graduates citing lack of job security in banking as a concern. The variation of rankings over the years can be found in the <a href="../market-research-reports/recruitment-of-top-graduates-in-saudi-arabia-2016-47.html" target="_blank">full report<i class="text-section fa fa-fw fa-file-pdf-o"></i></a>.</p>
                     <p><strong>Key Attraction Factors</strong></p>
                     <p>GulfTalent’s survey asked graduates about the factors that drove them to choose their preferred employer. The top three factors mentioned were the quality of the training and development programme, the opportunity to do interesting and challenging work, and good salary and benefits. Job security and company brand and reputation were also cited as important factors.</p>
                     <div class="text-center">
                        <p><img src="../../images/reasons-saudi-graduates-2016.png" alt="" /></p>
                     </div>
                     <p>Over half the graduates expressed interest in gaining experience working outside Saudi Arabia, with the most popular foreign destination being the USA, followed by the UAE and Qatar.</p>
                     <p>This was a key factor in making multinationals the favoured group among 72% of graduates surveyed. Other factors were the interesting nature of the work and good training offered by multinationals firms.</p>
                     <p>Only 17% of graduate respondents favoured joining government organisations. The recent reduction in public sector wages, which occurred after GulfTalent’s survey was conducted, is likely to have reduced this interest even further. Survey respondents who chose government sector reported placing relatively higher value on company reputation, job security and attractive salary.</p>
                     <div class="text-center">
                        <p><img src="../../images/employer-saudi-graduates-2016.png" alt="" /></p>
                     </div>
                     <p>Interestingly, many graduates who mentioned they would like to work for multinationals still named government-owned Aramco and SABIC among their choices. Some justified this by stating that the pair were not typical government firms and ‘behaved like multinationals’, particularly in terms of training and international exposure.</p>
                     <p>Hamad, an Industrial Engineering graduate who named Aramco as his first choice, told GulfTalent interviewers “The training you get with Aramco is excellent. And I also like the fact that they have many international partnerships and send you on projects abroad”.</p>
                     <p>In terms of compensation, the survey found median starting salary expectation of KFUPM graduates to be 12,000 Riyals per month. This represents a 50% increase since 2005, compared with a 55% increase in cost of living over the same period, as per the official inflation data from SAMA, the Saudi central bank.</p>
                     <p><strong>Impact of Marital Status</strong></p>
                     <p>Around one-third of survey respondents were already married. Compared to single graduates, married graduates surveyed placed higher value on salary, work-life balance and having a clear path of progression. As a result, 26% opted for government firms.</p>
                     <p>Single graduates appear to have higher success in securing jobs – with 38% of them holding a job offer by the time they graduate, compared with 23% of married graduates. Some employers mentioned they found it easier to hire unmarried graduates, as they could more easily relocate.</p>
                     <p>Perhaps as a result of this, the median salary expectation of married graduates appears to be lower, at 10,000 Riyals compared with 12,000 Riyals for single graduates. The median age of respondents is 23 and 24 for single and married graduates respectively.</p>
                     <div class="text-center">
                        <p><img src="../../images/salary-saudi-graduates-2016.png" alt="" /></p>
                     </div>
                     <p>Additional information and insights about employment preferences of Saudi graduates can be found in the <a href="../market-research-reports/recruitment-of-top-graduates-in-saudi-arabia-2016-47.html" target="_blank">full report<i class="text-section fa fa-fw fa-file-pdf-o"></i></a>.</p>
                     <p><a href="how-to-build-a-strong-employer-brand-73.html" target="_blank"><img src="../../images/branding-banner-2016.png"></a></p>
                     <p><strong>Survey Methodology</strong></p>
                     <p>GulfTalent’s study was based on a survey of 224 recent graduates and final-year students from King Fahd University of Petroleum &amp; Minerals (KFUPM). The survey was conducted during June-July 2016, after the publication of the Saudi Vision 2030, but prior to the announcement of pay cuts for the Saudi public sector.</p>
                     <p>For ranking employers, each survey participant was asked to name their top 3 choices, without being presented with a pre-compiled list to choose from. Employers were ranked based on the number of votes they received. All survey respondents were male, and their average age was 23.</p>
                     <div class="text-center">
                        <p><img src="../../images/breakdown-saudi-graduates-2016.png" alt="" /></p>
                     </div>
                     <p><br />
                        <br />
                     </p>
                     <div class="text-center">
                        <p><a href="../market-research-reports/recruitment-of-top-graduates-in-saudi-arabia-2016-47.html" target="_blank"><img src="../../images/banner-saudi-graduates-2016.png"></a></p>
                     </div>
                  </div>
                  <a gt-modal-static="'mailpoolSubscription'" class="list-group-item-main hidden-print">
                  Subscribe to receive similar articles <i class="fa fa-angle-double-right"></i>
                  </a>
               </div>
            </div>
            <div class="panel panel-default hidden-print">
               <div class="panel-heading">
                  <h3 class="panel-title">Comments <span class="light">(1)</span></h3>
               </div>
               <div class="list-group">
                  <div class="list-group-item">
                     <h4>
                        <i class="fa fa-2x fa-quote-left text-section pull-left"></i>
                        Jehad
                        <br/>
                        <span class="small">general Manager | Trisuccess Est. for Trading | Saudi Arabia</span>
                     </h4>
                     <p>Hi,<br />
                        My comment is how come graduates in the last year of studying are able to give preference and choose between companies without trying them and even may be without visiting their premises so far?<br />
                        With all due respect to the Gentlemen behind survey, I believe they should have been modifying the base to take into consideration the above point
                     </p>
                     <p class="text-muted">Posted on 30 Nov 2016</p>
                  </div>
               </div>
               <div class="panel-body hidden-print">
                  <h3 id="post-comment">Post Comment</h3>
                  <p class="text-sm text-muted">Your email address will not be published</p>
                  <form class="form-horizontal" action="https://www.gulftalent.com/resources/employment-news/aramco-and-sabic-voted-most-popular-employers-for-saudi-graduates-74" method="post">
                     <div class="form-group">
                        <div class="col-sm-12">
                           <input type="text" id="articleComment_name" name="articleComment[name]"    placeholder="Name" class="form-control input-lg" />
                        </div>
                        <div class="col-sm-12">
                           <input type="text" id="articleComment_email" name="articleComment[email]"    placeholder="Email" class="form-control input-lg" />
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-sm-12">
                           <input type="text" id="articleComment_position" name="articleComment[position]"    placeholder="Job Title" class="form-control input-lg" />
                        </div>
                        <div class="col-sm-12">
                           <input type="text" id="articleComment_company" name="articleComment[company]"    placeholder="Company" class="form-control input-lg" />
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-sm-12">
                           <select id="articleComment_country" name="articleComment[country]"    class="form-control input-lg">
                              <option value="">Your Location</option>
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
                        <div class="col-sm-24">
                           <textarea id="articleComment_comment_content" name="articleComment[comment_content]"    rows="8" placeholder="Your comment" class="form-control input-lg"></textarea>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="radio">
                           <label>
                           <input type="radio" name="articleComment[comment_type]"
                              id="articleComment_comment_type_0" value="Publish"
                              checked  />
                           I am happy for my comment to be published online
                           </label>
                        </div>
                        <div class="radio">
                           <label>
                           <input type="radio" name="articleComment[comment_type]"
                              id="articleComment_comment_type_1" value="Private"
                              />
                           Private comment - For GulfTalent only
                           </label>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-sm-24 text-center">
                        </div>
                     </div>
                     <div class="form-inline form-group">
                        <span>
                        To post a comment, please fill in the answer in the box:
                        13 + 5 =
                        </span>
                        <input type="text" id="articleComment_captcha_response" name="articleComment[captcha_response]" required="required"    size="2" autocomplete="off" class="form-control" />
                     </div>
                     <input type="hidden" id="articleComment_captcha_expression" name="articleComment[captcha_expression]"    class="form-control input-lg" value="13 + 5" />
                     <input type="hidden" id="articleComment_captcha_token" name="articleComment[captcha_token]"    class="form-control input-lg" value="9e6a55b6b4563e652a23be9d623ca5055c356940" />
                     <div class="row">
                        <div class="col-sm-12 col-sm-offset-6">
                           <button class="btn btn-section btn-lg btn-block" type="submit">
                           Post comment
                           </button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
         <div class="col-sm-8
            hidden-print">
            <div class="panel panel-default">
               <div class="panel-body panel-body-ad">

                  <div style="width: 300px; height: 240px;">
                         <a href="#">
                           <img src="http://localhost/skoot/skootjob/assets/img/cv.png" width="300px" height="230px">
                         </a>
                       </div>
               </div>
               <div class="list-group">
                  <a class="list-group-item" href="../../advertising-agencies.html">
                  <i class="fa fa-fw fa-chevron-right text-primary"></i>
                  Advertise Here
                  </a>
               </div>
            </div>
            <div class="panel panel-default">
               <div class="panel-heading">
                  <div class="text-heading panel-title">
                     Related News
                  </div>
               </div>
               <div class="list-group">
                  <a href="emirates-group-and-unilever-top-the-list-of-most-popular-graduate-employers-in-the-uae-71.html"
                     class="list-group-item">
                     <span class="text-med">Emirates Group and Unilever top the list of most popular graduate employers in the UAE</span>
                     <ul class="list-inline text-sm text-supermuted">
                        <li>Sep 2016</li>
                        <li class="pull-right">
                           8,738
                           views
                        </li>
                     </ul>
                  </a>
                  <a href="pdo-voted-most-popular-employer-by-omani-graduates-69.html"
                     class="list-group-item">
                     <span class="text-med">PDO voted most popular employer by Omani graduates</span>
                     <ul class="list-inline text-sm text-supermuted">
                        <li>Jul 2016</li>
                        <li class="pull-right">
                           18,473
                           views
                        </li>
                     </ul>
                  </a>
                  <a href="emirati-graduates-choose-government-jobs-51.html"
                     class="list-group-item">
                     <span class="text-med">Emirati graduates choose government over private sector jobs</span>
                     <ul class="list-inline text-sm text-supermuted">
                        <li>Mar 2013</li>
                        <li class="pull-right">
                           62,877
                           views
                        </li>
                     </ul>
                  </a>
               </div>
            </div>
            <div class="panel panel-default">
               <div class="panel-heading">
                  <div class="text-heading panel-title"> Popular News </div>
               </div>
               <div class="list-group">
                  <a href="2016-Gulf-pay-rises-lowest-in-a-decade-despite-rising-costs-63.html"
                     class="list-group-item">
                     2016 Gulf pay rises lowest in a decade, despite rising costs <br />
                     <ul class="list-inline text-sm text-supermuted">
                        <li>Mar 2016</li>
                        <li class="pull-right">
                           50,079
                           views
                        </li>
                     </ul>
                  </a>
                  <a href="gcc-jobs-set-to-recover-in-2017-led-by-manufacturing-and-healthcare-76.html"
                     class="list-group-item">
                     GCC jobs set to recover in 2017, led by manufacturing and healthcare <br />
                     <ul class="list-inline text-sm text-supermuted">
                        <li>Jan 2017</li>
                        <li class="pull-right">
                           25,145
                           views
                        </li>
                     </ul>
                  </a>
                  <a href="mobile-growth-and-cyber-attacks-force-new-hiring-in-uae-78.html"
                     class="list-group-item">
                     Mobile growth and cyber-attacks force new hiring in UAE <br />
                     <ul class="list-inline text-sm text-supermuted">
                        <li>Jun 2017</li>
                        <li class="pull-right">
                           9,953
                           views
                        </li>
                     </ul>
                  </a>
               </div>
            </div>
            <div class="panel panel-default">
               <div class="panel-heading">
                  <h3 class="panel-title"> News Categories </h3>
               </div>
               <div class="list-group">
                  <a href="category/employment-trends.html"
                     class="list-group-item">
                     <div class="media">
                        <div class="media-object pull-left">
                           <i class="fa fa-fw fa-trend-variable fa-2x"></i>
                        </div>
                        <div class="media-body">
                           Employment Trends
                           <p class="text-sm text-supermuted">(14)</p>
                        </div>
                     </div>
                  </a>
                  <a href="category/popular-employers.html"
                     class="list-group-item">
                     <div class="media">
                        <div class="media-object pull-left">
                           <i class="fa fa-fw fa-test-paper fa-2x"></i>
                        </div>
                        <div class="media-body">
                           Popular Employers
                           <p class="text-sm text-supermuted">(5)</p>
                        </div>
                     </div>
                  </a>
                  <a href="category/salaries.html"
                     class="list-group-item">
                     <div class="media">
                        <div class="media-object pull-left">
                           <i class="fa fa-fw fa-dollar fa-2x"></i>
                        </div>
                        <div class="media-body">
                           Salaries
                           <p class="text-sm text-supermuted">(10)</p>
                        </div>
                     </div>
                  </a>
                  <a href="category/workplace.html"
                     class="list-group-item">
                     <div class="media">
                        <div class="media-object pull-left">
                           <i class="fa fa-fw fa-briefcase fa-2x"></i>
                        </div>
                        <div class="media-body">
                           Workplace
                           <p class="text-sm text-supermuted">(5)</p>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
            <div class="panel panel-default">
               <div class="panel-heading">
                  <div class="text-heading panel-title">Find Jobs</div>
               </div>
               <div class="list-group">
                  <a class="list-group-item" href="../../uae/jobs.html">
                     <div class="media">
                        <div class="media-object pull-left">
                           <i class="flag flag-base flag-AE"></i>
                        </div>
                        <div class="media-body">
                           <div class="text-medium text-overflow">UAE </div>
                           <p class="text-sm text-supermuted">(1,747)</p>
                        </div>
                     </div>
                  </a>
                  <a class="list-group-item" href="../../qatar/jobs.html">
                     <div class="media">
                        <div class="media-object pull-left">
                           <i class="flag flag-base flag-QA"></i>
                        </div>
                        <div class="media-body">
                           <div class="text-medium text-overflow">Qatar </div>
                           <p class="text-sm text-supermuted">(298)</p>
                        </div>
                     </div>
                  </a>
                  <a class="list-group-item" href="../../saudi-arabia/jobs.html">
                     <div class="media">
                        <div class="media-object pull-left">
                           <i class="flag flag-base flag-SA"></i>
                        </div>
                        <div class="media-body">
                           <div class="text-medium text-overflow">Saudi Arabia </div>
                           <p class="text-sm text-supermuted">(432)</p>
                        </div>
                     </div>
                  </a>
                  <a class="list-group-item hidden-print" href="../../jobs.html">
                  <i class="fa fa-fw fa-chevron-right"></i>
                  Browse all jobs
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<section ng-controller="widgetFeedbackController">
   <div class="fade"
      ng-class="{'modal-backdrop in': !isWidgetCollapsed}"
      ng-click="isWidgetCollapsed=true"
      ng-init="isWidgetCollapsed=true"></div>
   <div class="feedback-btn-container affix-bottom affix-right space-right-base" ng-cloak>
      <div class="text-right">
         <button ng-click="isWidgetCollapsed=!isWidgetCollapsed"
            class="btn btn-default btn-secondary"
            id="feedback">
         Feedback
         <i class="fa fa-fw"
            ng-class="{
            'fa-angle-up': isWidgetCollapsed,
            'fa-angle-down': !isWidgetCollapsed
            }"></i>
         </button>
      </div>
      <div class="panel panel-default space-bottom-none"
         gt-collapse="isWidgetCollapsed"
         collapse="isCollapsed"
         id="feedback">
         <div class="panel-heading" ng-hide="formSubmitted">
            <h3 class="panel-title">Tell us your feedback</h3>
         </div>
         <div class="panel-body" ng-hide="formSubmitted">
            <form class="form-horizontal">
               <div class="form-group">
                  <div class="col-sm-20 col-sm-offset-2">
                     <input type="text" id="contact_us_name" name="contact_us[name]" required="required"    class="form-control" ng-model="form.name" gt-model-value="" message="Please enter name!" placeholder="Your Name" />
                  </div>
               </div>
               <div class="form-group">
                  <div class="col-sm-20 col-sm-offset-2">
                     <input type="email" id="contact_us_email" name="contact_us[email]" required="required"    class="form-control" ng-model="form.email" gt-model-value="" message="Please enter a valid Email Address!" placeholder="Your Email Address" />
                  </div>
               </div>
               <div class="form-group space-bottom-base">
                  <div class="col-sm-20 col-sm-offset-2">
                     <textarea id="contact_us_message" name="contact_us[message]" required="required"    class="form-control" rows="8" ng-model="form.message" placeholder="Your comments/suggestions on the site"></textarea>
                  </div>
               </div>
               <div class="form-group space-bottom-base">
                  <div class="col-sm-offset-7 col-sm-10">
                     <button type="submit"
                        value="submit"
                        class="btn btn-secondary btn-lg btn-block">
                     Submit
                     </button>
                  </div>
               </div>
            </form>
         </div>
         <div class="panel-body" ng-show="formSubmitted">
            <strong class="text-success" ng-show="successFlag">
            Thank you for your Feedback.
            </strong>
            <strong class="text-danger" ng-hide="successFlag">
            Something went wrong. Please try again.
            </strong>
         </div>
      </div>
   </div>
</section>
<section class="floating-widget-container affix-left center hidden-print">
   <ul class="list-social list-unstyled space-all-none">
      <li class="social-legend text-sm space-all-none">
         Share page
      </li>
      <li class="space-all-none">
         <a gt-share="facebook"
            gt-share-url="aramco-and-sabic-voted-most-popular-employers-for-saudi-graduates-74.html"
            title="Share via Facebook"
            class="bg-brand-facebook">
         <i class="fa fa-facebook"></i>
         </a>
      </li>
      <li class="space-all-none">
         <a gt-share="googleplus"
            gt-share-url="aramco-and-sabic-voted-most-popular-employers-for-saudi-graduates-74.html"
            title="Share via Google+"
            class="bg-brand-google-plus">
         <i class="fa fa-google-plus"></i>
         </a>
      </li>
      <li class="space-all-none">
         <a gt-share="twitter"
            gt-share-url="aramco-and-sabic-voted-most-popular-employers-for-saudi-graduates-74.html"
            title="Share via Twitter"
            class="bg-brand-twitter">
         <i class="fa fa-twitter"></i>
         </a>
      </li>
      <li class="space-all-none">
         <a gt-share="linkedin"
            gt-share-url="aramco-and-sabic-voted-most-popular-employers-for-saudi-graduates-74.html"
            title="Share via LinkedIn"
            class="bg-brand-linkedin">
         <i class="fa fa-linkedin"></i>
         </a>
      </li>
      <li class="space-all-none">
         <a gt-share="messenger"
            gt-share-url="aramco-and-sabic-voted-most-popular-employers-for-saudi-graduates-74.html"
            title="Share via Facebook Messenger"
            class="bg-brand-messenger">
         <i class="fa fa-facebook-messenger"></i>
         </a>
      </li>
      <li class="space-all-none">
         <a gt-refer-form
            refer-type="Article"
            refer-label="Aramco and SABIC top the list of most popular employers for Saudi graduates"
            refer-url="aramco-and-sabic-voted-most-popular-employers-for-saudi-graduates-74.html"
            refer-generated-from=""
            refer-description="{&quot;heading&quot;:&quot;Aramco and SABIC top the list of most popular employers for Saudi graduates&quot;}"
            refer-heading="Email this article to a friend"
            class="bg-brand-envelope">
         <i class="fa fa-envelope" title="Share via Email"></i>
         </a>
      </li>
   </ul>
</section>

<?php include('../footer.php'); ?>
