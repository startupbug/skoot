
<?php include('../header.php'); ?>


<main id="main-block"
   gt-scroll-on="facetedSearch.pagination:changed"
   gt-scroll-speed="50"
   >
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
                        GCC jobs set to recover in 2017, led by manufacturing and healthcare
                     </h1>
                     <p class="text-md text-muted">Posted on January 31, 2017</p>
                  </div>
                  <div class="list-group">
                     <div class="list-group-item"
                        >
                        <ul>
                           <li>
                              <p><strong>More companies eyeing expansion this year, with fewer firms planning job cuts</strong></p>
                           </li>
                           <li>
                              <p><strong>Construction and oil &amp; gas sectors still downsizing, but at a slower pace</strong></p>
                           </li>
                        </ul>
                        <div class="text-center">
                           <p><img src="../../images/articles/hero-image-gcc-employment-2017.png" alt="" /></p>
                        </div>
                        <p>Following a year of massive redundancies caused by the collapse in oil prices, the Gulf region is finally set to witness a stabilisation in job cuts and a moderate rate of new job creation in 2017, according to a survey of over 800 employers across the GCC by GulfTalent.</p>
                        <p>GulfTalent’s survey, which received participation from senior management of companies across the UAE, Saudi Arabia, Qatar, Kuwait, Oman and Bahrain, was designed to mine insights into employment trends and prospects for the year.</p>
                        <p>According to the survey findings, the number of companies cutting headcount is set to drop drastically, from 40% of survey respondents in 2016 to just 23% planning cuts this year. At the same time, more firms plan to expand their workforce, increasing from 41% in the past year to 47% in 2017.</p>
                        <div class="text-center">
                           <p><img src="../../images/articles/headcount-change-gcc-2017.png" alt="" /></p>
                        </div>
                        <p>Saudi Arabia is a notable exception to the overall positive trend, due to its higher dependence on oil revenues. Data from the survey indicates that the Kingdom continues to be hard hit, with 45% of participating firms expecting headcount reductions in 2017 compared with just 15% of firms in the UAE.</p>
                        <p>This is consistent with the IMF’s findings, which recently revised down its GDP growth outlook for Saudi Arabia from 2% to 0.4%. However, the Kingdom has embarked on the region’s most ambitious economic reform initiative, the National Transformation Programme, which aims to significantly reduce the country’s dependence on oil over the coming years.</p>
                        <p><strong>Sector Variations</strong></p>
                        <p>GulfTalent’s survey found significant variations in the fortunes of different sectors across the region.</p>
                        <p>Manufacturers reported the most positive outlook, with 58% of firms in the sector planning to grow staff numbers in 2017. The sector has been a prime focus of economic diversification efforts by governments over the last couple of years. Some surveyed companies cited streamlined regulations, strong logistics networks and proximity to export markets as factors contributing to their growth. Meanwhile, those who supply products for food and consumer goods are benefiting from the high growth rate among the region’s indigenous population.</p>
                        <p>Healthcare companies, including hospitals, reported the second highest rate of jobs growth, with 55% of firms planning headcount expansion. This is also largely on the back of increasing demand from a fast growing population, further fueled by government investment and regulatory changes requiring employers to provide medical cover for their employees.</p>
                        <p>Banks are expecting a relatively positive year, with 44% planning some increase in headcount. Only 8% of surveyed banks plan to cut staff this year, in sharp contrast to 38% who reported cuts in 2016. With the economic outlook more stable, some are taking the opportunity to fill specialist vacancies that were left unfilled last year due to hiring freezes. Furthermore, most banks are actively expanding their collections departments to keep a grip on rising levels of loan defaults.</p>
                        <p>The oil and gas sector, which has been battered by two years of low oil prices, continues to downsize. However, the pace has moderated, with only a third of firms planning job cuts in 2017, compared with almost half in 2016. Oil firm executives who participated in the survey reported greater optimism, with 77% expecting their 2017 revenues to be higher, thanks to higher oil prices following output cuts agreed in last November’s OPEC meeting.</p>
                        <p>Construction remains among the region’s worst performing sectors, according to GulfTalent’s survey. 45% of construction firms who participated in the survey reported plans to cut staff numbers this year, only marginally better than the 55% level who reported having cut jobs in 2016. The sector has been hit hard by cuts in government budgets and cancelled or delayed projects. It has also suffered billions of dollars in delayed payments, in some cases resulting in wages for thousands of workers going unpaid for several months.</p>
                        <p>According to media reports, the Saudi government recently started repaying long overdue payments to its contractors, shortly after its successful $17 billion fund raising in international bond markets.</p>
                        <div class="text-center">
                           <p><img src="../../images/articles/headcount-sectors-gcc-2017.png" alt="" /></p>
                        </div>
                        <p><strong>Shifting Skill Needs</strong></p>
                        <p>GulfTalent’s research found that many of the same companies reducing staff plan to simultaneously hire during 2017, as natural attrition and changes in business requirements create vacancies that need to be filled.</p>
                        <p>Some companies are eliminating a range of jobs within their organizations to cut costs, reducing department sizes and consolidating multiple job descriptions within a single hire. This may be good news for those possessing a range of skill sets, though less fortunate for those highly specialized in a single discipline.</p>
                        <p>This trend has stimulated a demand for training from both companies and individuals seeking to reinforce their capabilities and learn new marketable skills in a highly competitive job market.  As a result, GulfTalent has witnessed a surge in demand on its <a href="../../courses.html" target="_blank">courses</a> platform, including online courses that can be taken remotely, in addition to its core <a href="../../jobs.html" target="_blank">jobs</a> and recruitment services which continue to attract thousands of professionals every day.</p>
                        <p><strong>Survey Methodology</strong></p>
                        <p>GulfTalent’s study was based on a survey of 854 senior executives, including CEOs and HR managers of companies across the six countries of the Gulf Cooperation Council (GCC). The survey was conducted during December 2016 and January 2017.</p>
                     </div>
                     <a gt-modal-static="'mailpoolSubscription'" class="list-group-item-main hidden-print">
                     Subscribe to receive similar articles <i class="fa fa-angle-double-right"></i>
                     </a>
                  </div>
               </div>
               <div class="panel panel-default hidden-print">
                  <div class="panel-heading">
                     <h3 class="panel-title">Comments <span class="light">(20)</span></h3>
                  </div>
                  <div class="list-group">
                     <div class="list-group-item">
                        <h4>
                           <i class="fa fa-2x fa-quote-left text-section pull-left"></i>
                           Vijay Raghunathan 
                           <br/>
                           <span class="small">Maintenance Supervisor  | Saudi Kyan | Saudi Arabia</span>
                        </h4>
                        <p>Very nice job</p>
                        <p class="text-muted">Posted on 01 Feb 2017</p>
                     </div>
                     <div class="list-group-item">
                        <h4>
                           <i class="fa fa-2x fa-quote-left text-section pull-left"></i>
                           Rasheed
                           <br/>
                           <span class="small">Manager Logistics | Binjarallah Holding Company | Saudi Arabia</span>
                        </h4>
                        <p>Good</p>
                        <p class="text-muted">Posted on 02 Feb 2017</p>
                     </div>
                     <div class="list-group-item">
                        <h4>
                           <i class="fa fa-2x fa-quote-left text-section pull-left"></i>
                           SK Rejaur Raheman
                           <br/>
                           <span class="small">QC | Sur All Tabey | UAE</span>
                        </h4>
                        <p>Thank you.</p>
                        <p class="text-muted">Posted on 02 Feb 2017</p>
                     </div>
                     <div class="list-group-item">
                        <h4>
                           <i class="fa fa-2x fa-quote-left text-section pull-left"></i>
                           Riyaz Ahmed Shaikh
                           <br/>
                           <span class="small">Director  | Arabian Peninsula Contracting  | Qatar</span>
                        </h4>
                        <p>Clients and Government Authorities are overcautious on cash flow due to global economical crises. There are huge commitments of developments in front specially in Middle East &amp; North Africa.<br />
                           <br />
                           Hope this streamline in coming six months.<br />
                        </p>
                        <p class="text-muted">Posted on 02 Feb 2017</p>
                     </div>
                     <div class="list-group-item">
                        <h4>
                           <i class="fa fa-2x fa-quote-left text-section pull-left"></i>
                           Moe Kasem
                           <br/>
                           <span class="small">Translator, Interpreter | AGT | UAE</span>
                        </h4>
                        <p>I expect that some redundancies shall persist through the second quarter of 2017, caused by the collapse in oil prices.</p>
                        <p class="text-muted">Posted on 02 Feb 2017</p>
                     </div>
                     <div class="list-group-item">
                        <h4>
                           <i class="fa fa-2x fa-quote-left text-section pull-left"></i>
                           Balakrishnan Navatta
                           <br/>
                           <span class="small">Office Assistant | Zainal Mohebi group | UAE</span>
                        </h4>
                        <p>Very nice job. I think the oil price will be up and so more job opportunities will be available</p>
                        <p class="text-muted">Posted on 02 Feb 2017</p>
                     </div>
                     <div class="list-group-item">
                        <h4>
                           <i class="fa fa-2x fa-quote-left text-section pull-left"></i>
                           amitava dutta
                           <br/>
                           <span class="small">MECHNICAL SUPER VISOR | SAMSUNG | UAE</span>
                        </h4>
                        <p>Very nice job. I think the oil price will be up and so more job opportunities will be available</p>
                        <p class="text-muted">Posted on 02 Feb 2017</p>
                     </div>
                     <div class="list-group-item">
                        <h4>
                           <i class="fa fa-2x fa-quote-left text-section pull-left"></i>
                           Qaisar Imam
                           <br/>
                           <span class="small">Accountant | Leighton Middle East (HLG Contracting) | Saudi Arabia</span>
                        </h4>
                        <p>Construction sector still under pressure and as we know this is the only sector which are creating more job opportunities. Due to Crude price decline this sector has been much affected. But still be optimistic.</p>
                        <p class="text-muted">Posted on 02 Feb 2017</p>
                     </div>
                     <div class="list-group-item">
                        <h4>
                           <i class="fa fa-2x fa-quote-left text-section pull-left"></i>
                           Aamir
                           <br/>
                           <span class="small">Manager Operation | Waleed Alswat Logistics | Saudi Arabia</span>
                        </h4>
                        <p>Very Nice Job</p>
                        <p class="text-muted">Posted on 03 Feb 2017</p>
                     </div>
                     <div class="list-group-item">
                        <h4>
                           <i class="fa fa-2x fa-quote-left text-section pull-left"></i>
                           Mr. Kemal Hatip
                           <br/>
                           <span class="small">Managing Director  | Oncopharma Middle East  | UAE</span>
                        </h4>
                        <p>Still some segments of business like healthcare is showing a positive trend of growth &amp; that is because of the diversification of business lines in the region, looks optimistic to me   </p>
                        <p class="text-muted">Posted on 03 Feb 2017</p>
                     </div>
                     <div class="list-group-item">
                        <h4>
                           <i class="fa fa-2x fa-quote-left text-section pull-left"></i>
                           Zubair Lone
                           <br/>
                           <span class="small">Concept Manager | Landmark Retail | Saudi Arabia</span>
                        </h4>
                        <p>Great Job done!!!</p>
                        <p class="text-muted">Posted on 03 Feb 2017</p>
                     </div>
                     <div class="list-group-item">
                        <h4>
                           <i class="fa fa-2x fa-quote-left text-section pull-left"></i>
                           Subhrangshu
                           <br/>
                           <span class="small">Sales Associate | Lacoste | India</span>
                        </h4>
                        <p>Very nice job. I think the oil price will be up and so more job opportunities will be available</p>
                        <p class="text-muted">Posted on 03 Feb 2017</p>
                     </div>
                     <div class="list-group-item">
                        <h4>
                           <i class="fa fa-2x fa-quote-left text-section pull-left"></i>
                           Amin
                           <br/>
                           <span class="small">Graduate Student | KFUPM | Saudi Arabia</span>
                        </h4>
                        <p>Great</p>
                        <p class="text-muted">Posted on 03 Feb 2017</p>
                     </div>
                     <div class="list-group-item">
                        <h4>
                           <i class="fa fa-2x fa-quote-left text-section pull-left"></i>
                           Hamdullah Nasrullah
                           <br/>
                           <span class="small">Store Officer | Bin Omran Trading &amp; Contracting WLL | Qatar</span>
                        </h4>
                        <p>Other sectors than oil are fast growing within GCC will help to overcome current slump and boost their economy in coming years.</p>
                        <p class="text-muted">Posted on 04 Feb 2017</p>
                     </div>
                     <div class="list-group-item">
                        <h4>
                           <i class="fa fa-2x fa-quote-left text-section pull-left"></i>
                           Mosharef
                           <br/>
                           <span class="small">Inventory Controller | EROS | UAE</span>
                        </h4>
                        <p>Good</p>
                        <p class="text-muted">Posted on 04 Feb 2017</p>
                     </div>
                     <div class="list-group-item">
                        <h4>
                           <i class="fa fa-2x fa-quote-left text-section pull-left"></i>
                           Mustafa Khalil
                           <br/>
                           <span class="small">statistician and economist | Alshumrani construction Est. | Saudi Arabia</span>
                        </h4>
                        <p>More surveys are needed annually to discover the economic trends during 2017, because things are changeable in all over the World, and it expected that various things will happen during 2017, so more surveys every 3 months should be conducted to evaluate the trends. </p>
                        <p class="text-muted">Posted on 04 Feb 2017</p>
                     </div>
                     <div class="list-group-item">
                        <h4>
                           <i class="fa fa-2x fa-quote-left text-section pull-left"></i>
                           RAFIQUE PARBALKAR
                           <br/>
                           <span class="small">Senior Construction Engineer  | Petroleum Development Oman  | Oman</span>
                        </h4>
                        <p>Nice survey with apt feedback. </p>
                        <p class="text-muted">Posted on 04 Feb 2017</p>
                     </div>
                     <div class="list-group-item">
                        <h4>
                           <i class="fa fa-2x fa-quote-left text-section pull-left"></i>
                           chandra sekahr
                           <br/>
                           <span class="small">Division Manager | Salam International | Oman</span>
                        </h4>
                        <p>A slight improvement being noticed in business in Oman in our Industry but at the same time market is still in a very gloomy phase. There is no confidence yet among the people. Buying power among the locals needs to be improved. When Government starts spending only this can be changed. Private sector is facing stiff problems in many ways. First quarter to be seen to evaluate further.</p>
                        <p class="text-muted">Posted on 05 Feb 2017</p>
                     </div>
                     <div class="list-group-item">
                        <h4>
                           <i class="fa fa-2x fa-quote-left text-section pull-left"></i>
                           Mohammed Ismail
                           <br/>
                           <span class="small">General Manager | Ahmed Shaikh Hassan Al Ansari Trading | Qatar</span>
                        </h4>
                        <p>Good study, Hopefully from Q2 trend will be a good in all GCC countries</p>
                        <p class="text-muted">Posted on 05 Feb 2017</p>
                     </div>
                     <div class="list-group-item">
                        <h4>
                           <i class="fa fa-2x fa-quote-left text-section pull-left"></i>
                           Tatuan J.D.
                           <br/>
                           <span class="small">Secretary | Dallah Hospital | Saudi Arabia</span>
                        </h4>
                        <p>Saudi Arabia should continuous their strategy by helping foreign national by not imposing many charges or taxes JUST LIKE BEFORE.<br />
                           <br />
                           EXCELLENT JOB. Thank you very much.
                        </p>
                        <p class="text-muted">Posted on 05 Feb 2017</p>
                     </div>
                  </div>
                  <div class="panel-body hidden-print">
                     <h3 id="post-comment">Post Comment</h3>
                     <p class="text-sm text-muted">Your email address will not be published</p>
                     <form class="form-horizontal" action="https://www.gulftalent.com/resources/employment-news/gcc-jobs-set-to-recover-in-2017-led-by-manufacturing-and-healthcare-76" method="post">
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
                           12 + 4 =
                           </span>
                           <input type="text" id="articleComment_captcha_response" name="articleComment[captcha_response]" required="required"    size="2" autocomplete="off" class="form-control" />
                        </div>
                        <input type="hidden" id="articleComment_captcha_expression" name="articleComment[captcha_expression]"    class="form-control input-lg" value="12 + 4" />
                        <input type="hidden" id="articleComment_captcha_token" name="articleComment[captcha_token]"    class="form-control input-lg" value="1574bddb75c78a6fd2251d61e2993b5146201319" />
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
                     <div gt-ad
                        gt-ad-name="box_300x250"
                        gt-ad-width="300"
                        gt-ad-height="250"
                        gt-ad-fallback-media="/images/free-cv-review.png?v2_68_0"
                        gt-ad-fallback-url="/resources/job-search-support/free-cv-review"
                        style="width: 300px; height: 250px;"
                        >
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
                     <a href="mobile-growth-and-cyber-attacks-force-new-hiring-in-uae-78.html"
                        class="list-group-item">
                        <span class="text-med">Mobile growth and cyber-attacks force new hiring in UAE</span>
                        <ul class="list-inline text-sm text-supermuted">
                           <li>Jun 2017</li>
                           <li class="pull-right">
                              9,953
                              views
                           </li>
                        </ul>
                     </a>
                     <a href="rising-demand-for-online-training-hampered-by-shortage-of-supply-67.html"
                        class="list-group-item">
                        <span class="text-med">Rising demand for online training hampered by shortage of supply</span>
                        <ul class="list-inline text-sm text-supermuted">
                           <li>Jul 2016</li>
                           <li class="pull-right">
                              26,956
                              views
                           </li>
                        </ul>
                     </a>
                     <a href="jobs-slowdown-drives-up-demand-for-postgraduate-study-65.html"
                        class="list-group-item">
                        <span class="text-med">Jobs slowdown drives up demand for postgraduate study</span>
                        <ul class="list-inline text-sm text-supermuted">
                           <li>Apr 2016</li>
                           <li class="pull-right">
                              25,812
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
                     <a href="dubai-overtakes-cairo-in-traffic-congestion-23.html"
                        class="list-group-item">
                        Dubai Overtakes Cairo in Traffic Congestion <br />
                        <ul class="list-inline text-sm text-supermuted">
                           <li>Jun 2007</li>
                           <li class="pull-right">
                              28,743
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
               <form class="form-horizontal" role="form" novalidate name="contact-us-form"
                  gt-validate
                  gt-submit="submit()">
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
                  <input type="hidden"
                     value="Feedback"
                     ng-model="form.subject"
                     gt-model-value="" />
                  <input type="hidden"
                     value="feedback"
                     ng-model="form.type"
                     gt-model-value="" />
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
               gt-share-url="gcc-jobs-set-to-recover-in-2017-led-by-manufacturing-and-healthcare-76.html"
               title="Share via Facebook"
               class="bg-brand-facebook">
            <i class="fa fa-facebook"></i>
            </a>
         </li>
         <li class="space-all-none">
            <a gt-share="googleplus"
               gt-share-url="gcc-jobs-set-to-recover-in-2017-led-by-manufacturing-and-healthcare-76.html"
               title="Share via Google+"
               class="bg-brand-google-plus">
            <i class="fa fa-google-plus"></i>
            </a>
         </li>
         <li class="space-all-none">
            <a gt-share="twitter"
               gt-share-url="gcc-jobs-set-to-recover-in-2017-led-by-manufacturing-and-healthcare-76.html"
               title="Share via Twitter"
               class="bg-brand-twitter">
            <i class="fa fa-twitter"></i>
            </a>
         </li>
         <li class="space-all-none">
            <a gt-share="linkedin"
               gt-share-url="gcc-jobs-set-to-recover-in-2017-led-by-manufacturing-and-healthcare-76.html"
               title="Share via LinkedIn"
               class="bg-brand-linkedin">
            <i class="fa fa-linkedin"></i>
            </a>
         </li>
         <li class="space-all-none">
            <a gt-share="messenger"
               gt-share-url="gcc-jobs-set-to-recover-in-2017-led-by-manufacturing-and-healthcare-76.html"
               title="Share via Facebook Messenger"
               class="bg-brand-messenger">
            <i class="fa fa-facebook-messenger"></i>
            </a>
         </li>
         <li class="space-all-none">
            <a gt-refer-form
               refer-type="Article"
               refer-label="GCC jobs set to recover in 2017, led by manufacturing and healthcare"
               refer-url="gcc-jobs-set-to-recover-in-2017-led-by-manufacturing-and-healthcare-76.html"
               refer-generated-from=""
               refer-description="{&quot;heading&quot;:&quot;GCC jobs set to recover in 2017, led by manufacturing and healthcare&quot;}"
               refer-heading="Email this article to a friend"
               class="bg-brand-envelope">
            <i class="fa fa-envelope" title="Share via Email"></i>
            </a>
         </li>
      </ul>
   </section>
</main>
<?php include('../footer.php'); ?>