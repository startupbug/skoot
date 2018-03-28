
<?php include('../header.php'); ?>
<main id="main-block" >
   <div class="page-header">
      <div class="container">
         <div class="row">
            <div class="col-sm-24">
            </div>
         </div>
      </div>
   </div>
   <div class="page-content">
      <!--<div ng-controller="flashMessagesController" id="flash-messages-persistent" ng-cloak>
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
      </div>-->
      <!--<div ng-controller="flashMessagesController"
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
      </div>-->
      <div class="container">
         <div class="row">
            <div class="col-sm-24">
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <h3 class="panel-title text-center">
                        General Terms and Conditions
                     </h3>
                  </div>
                  <div class="panel-body">
                     <h4 class="text-regular">Introduction</h4>
                     <p>
                        The use of this site is governed by the policies, terms and conditions
                        set forth below (&#39;Terms and Conditions of Use&#39;). Please read them carefully.
                        Your use of this site indicates your acceptance of these Terms and Conditions of Use.
                        Your submittal of any personal information to jobLane&#39;s website
                        indicates acceptance of these Terms and Conditions of Use. These Terms and Conditions
                        of Use shall supercede any subsequent terms or conditions included within this
                        website, whether or not such terms or conditions are signed by JobLane.
                        GulfTalent reserves the right to make changes to this site and these
                        Terms and Conditions of Use at any time.
                     </p>
                     <h4 class="text-regular">Privacy Policy</h4>
                     <p>
                        For information regarding privacy, please review the
                        <a href="privacy-policy.html">
                        Privacy Policy
                        </a> which also governs your visit to the JobLane website.
                     </p>
                     <h4 class="text-regular">Copyright and Trademark Notices</h4>
                     <p>
                        All editorial contents and graphics on this site are copyrights of JobLane
                        and the related logos are trademarks of JobLane. Other products and
                        company names mentioned herein may be the trademarks or tradenames of their respective owners.
                     </p>
                     <h4 class="text-regular">Acceptable Use of the Site.</h4>
                     <p>
                        The Site is intended for individuals seeking employment and for employers or recruiters
                        seeking candidates for employment. You may use this Site only for lawful purposes within
                        the stated context of JobLane intended and acceptable use of the Site.
                        JobLane is the sole interpreter of the Site&#39;s intended and acceptable use.
                     </p>
                     <ul class="list-unstyled">
                        <li>
                           <strong>- License to Use by Users who are Job Seekers.</strong> JobLane
                           hereby grants you a limited, terminable, non-exclusive right to access and use the
                           Site only for your personal use seeking employment opportunities for yourself. This
                           authorizes you to view and download a single copy of the material on the Site solely
                           for your personal, non-commercial use. Your use of the Site is a privilege.
                           JobLane reserves the right to suspend or terminate that privilege
                           for any reason at any time, in its sole discretion.
                        </li>
                        <li>
                           <strong>- License to Use by Users who are employers.</strong> JobLane
                           hereby grants you a limited, terminable, non-exclusive right to access and use the
                           Site only for your internal business use seeking candidates for employment. This authorizes
                           you to view and download a single copy of the material on the Site solely for your personal
                           use directly related to using the Site for the purpose of searching and recruiting job
                           prospects. JobLane reserves the right to suspend or terminate your access
                           and use at any time if JobLane determines that you are in breach of any
                           of these Terms and Conditions.
                        </li>
                     </ul>
                     <p>
                        You represent, warrant and agree that you will not use (or plan, encourage or help others
                        to use) the Site for any purpose or in any manner that is prohibited by these Terms and
                        Conditions or by applicable law. It is your responsibility to ensure that your use of the
                        Site complies with these Terms and Conditions.
                     </p>
                     <h4 class="text-regular">House Rules for Posting, Conduct and Security</h4>
                     <p>
                        You agree to comply with the <a href="#house-rules">"House Rules"</a>
                        for posting, conduct and security on the Site, which are attached to these Terms and Conditions
                        of Use.
                     </p>
                     <h4 class="text-regular">Use of Salary and Benefits Information Data</h4>
                     <p>
                        The use of the salary and benefits data is provided for information only, and is not
                        intended to be relied upon for any other purpose. GulfTalent further does
                        not warrant the accuracy and completeness of this data. GulfTalent and its
                        data providers shall not be liable for any errors or inaccuracies in this data, or
                        for any actions taken in reliance thereon.
                     </p>
                     <p>
                        This data is provided &#39;as is&#39; and JobLane makes no warranty, either expressed
                        or implied, including, but not limited to warranties of merchantability and warranties
                        of correctness and fitness for a particular purpose. In no event will JobLane
                        be liable for any indirect, special, consequential, or other damages however caused.
                     </p>
                     <h4 class="text-regular">No Guarantee of Results</h4>
                     <p>
                        JobLane is not an employment agency or a recruiting firm, and makes no
                        representations or guarantees regarding the effectiveness or timeliness of the Site
                        in meeting the employment objectives of Users. JobLane does not guarantee
                        that documents posted by Users will result in candidates being hired or positions
                        being filled, and is not responsible for any employment decision, for whatever
                        reason made, made by any User.
                     </p>
                     <h4 class="text-regular">Disclaimer of Warranties</h4>
                     <p class="text-uppercase">
                        The information, materials, services and products included on this website may
                        include inaccuracies or typographical errors. JobLane may make changes
                        or improvements to this site at any time.
                     </p>
                     <p class="text-uppercase">
                        The materials on this site are provided &#39;as is&#39; and without warranties of any kind
                        either expressed or implied, to the fullest extent permissible pursuant to applicable
                        law, GulfTalent disclaims all warranties or merchantability and fitness for
                        a particular purpose. JobLane does not warrant that the functions
                        contained in the material on this site will be uninterrupted or error free, that
                        defects will be corrected, or that this site or the server that makes it available
                        are free of viruses or other harmful components. GulfTalent does not warrant
                        or make any representations regarding the use of or the result of the use of the
                        material in this site in terms of their correctness, accuracy, reliability, timeliness, or otherwise.
                     </p>
                     <h4 class="text-regular">Limits on Liability</h4>
                     <p>
                        JobLane will not be liable for:
                     </p>
                     <ul class="list-unstyled">
                        <li>
                           - The contents of any communication, message, or information provided
                           to JobLane by you or other third parties.
                        </li>
                        <li>
                           - The contents of any website not controlled, owned, or operated by
                           JobLane that is accessed from or linked to this website
                           by direct or indirect means.
                        </li>
                        <li>
                           - Any damages or injury caused by, including but not limited to, any failure
                           of performance, error, omission, interruption, defect, delay in operation of
                           transmission, computer virus, or line failure.
                        </li>
                        <li>
                           - Any direct, indirect, incidental, special, or consequential damages whether
                           in contract, tort, strict liability or otherwise, arising out of or relating
                           to use of or inability to use this website, even if JobLane has
                           been advised of the possibility of such damages.
                        </li>
                     </ul>
                     <h4 class="text-regular">Indemnification</h4>
                     <p>
                        You agree to indemnify and hold JobLane, its directors, officers, employees,
                        agents and representatives harmless from all claims, liabilities, damages, and expenses
                        (including attorneys&#39; fees and expenses) arising out of or relating to (a) your use of this
                        website; (b) any alleged breach of these Terms and Conditions of Use.
                     </p>
                     <h4 class="text-regular">Limited License</h4>
                     <p>
                        This website is for your personal and non-commercial use. Except as otherwise expressly
                        provided, you may not modify, copy, distribute, transmit, display, perform, reproduce, use,
                        publish, license, create derivative works from, transfer or sell any information or content
                        contained in the system, GulfTalent.com website as a whole software, products or
                        services obtained from or available as part of or in conjunction with this system. You are granted
                        a non-exclusive, non-assignable and non-transferable license to use this system only under these
                        Terms and Conditions of Use.
                     </p>
                     <p>
                        This license is not a sale of any of the owner&#39;s rights. The JobLane website may be used
                        only by you, and you may not rent, lend, sub-license or transfer the website or any data residing
                        on it or any of your rights under this agreement to anyone else. You may not develop or derive for
                        commercial sale any data in machine-readable or other form that incorporates or uses any substantial
                        part of the website. You may not transfer to or store any data residing or exchanged over the
                        GulfTalent website in any electronic network for use by more than one user unless you obtain
                        prior written permission from JobLane.
                     </p>
                     <h4 class="text-regular">Third Party Content</h4>
                     <p>
                        The Site offers third party content or link to third party websites.
                        GulfTalent does not endorse or evaluate third party content and websites, or assume responsibility for them.
                        All third party content is provided completely as is, without warranties of any kind.
                     </p>
                     <h4 class="text-regular">VAT - Course Purchases</h4>
                     <p>
                        Prices charged to you for online course purchases are inclusive of Value Added Tax (VAT), wherever
                        applicable. GulfTalent uses the location information provided by you for calculating VAT.
                     </p>
                     <h4 class="text-regular">Remedies</h4>
                     <p>
                        Given the nature of these terms, you understand and agree that, in addition to money damages,
                        GulfTalent will be entitled to equitable relief upon a breach of them by you.
                     </p>
                     <h4 class="text-regular">Waiver</h4>
                     <p>
                        No waiver by JobLane shall be construed as a waiver of any proceeding or succeeding
                        breach of any provision.
                     </p>
                     <h4 class="text-regular">Survival of Provisions</h4>
                     <p>
                        Each provision of the Terms and Conditions of Use shall be construed as separately applying and
                        surviving even if for any reason one or other of those provisions is held to be inapplicable or
                        unenforceable in any circumstances. These Terms and Conditions of Use shall be severable and
                        construed to the extent of their enforceability in light of the partie&#39;s mutual intent if deemed
                        at all unenforceable by the competent court.
                     </p>
                     <h4 class="text-regular">Entire Agreement</h4>
                     <p>
                        We intend that these Terms and Conditions of Use constitute the entire agreement between
                        GulfTalent and you. Any changes to these Terms and Conditions of Use between
                        GulfTalent and you must be in writing and signed by both parties.
                     </p>
                     <h4 class="text-regular">Contact Information</h4>
                     <p>
                        If you have any questions concerning this site or its policies, please contact us
                        <a gt-modal-contact-forms-contact-us>
                        contact us
                        </a>.
                     </p>
                  </div>
               </div>
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <h3 class="panel-title text-center" id="house-rules">
                        House Rules regarding Posting, Conduct and Security
                     </h3>
                  </div>
                  <div class="panel-body">
                     <p>
                        JobLane is the sole interpreter of these rules. Users who violate these rules may have
                        their access and use of the Site suspended or terminated, at JobLane&#39;s discretion.
                        JobLane reserves the right to change these rules in accordance with the amendment
                        policy in the Terms and Conditions of Use.
                     </p>
                     <h4 class="text-regular">Posting Rules</h4>
                     <ul class="list-unstyled">
                        <li>
                           (a) Your Document may not contain: (i) URLs or links to Web sites (to advertise your company or
                           Web site); (ii) copyrighted material (unless you own the copyright or have the owner&#39;s permission
                           to post the copyrighted material); (iii) trade secrets (unless you own them or have the owner&#39;s
                           permission to post them); (iv) material that infringes on or misappropriates any other intellectual
                           property rights, or violates the privacy or publicity rights of others; (v) anything that is
                           sexually explicit, obscene, libelous, defamatory, threatening, harassing, abusive, or hateful;
                           or (vi) anything that is embarrassing or offensive to another person or entity, or violates the
                           law of the country in which you are based.
                        </li>
                        <li>
                           (b) You may not use your Document(s) to: (i) impersonate another person, living or dead; (ii) post
                           false, inaccurate or misleading information; (iii) post advertisements or solicitations of business
                           (including, but not limited to, franchises, "club memberships," distributorships, or anything
                           requiring a monetary investment by the User); (iv) post chain letters or pyramid schemes; or (v)
                           post opinions or notices, commercial or otherwise.
                        </li>
                        <li>
                           (c) Your Document(s) must contain sufficient detail to convey clearly to the User the nature and
                           requirements of the job opportunity, or your qualifications as a candidate for employment. Documents
                           that encourage the User to "email for more details" are not permitted. Documents from any thirdparty
                           charging a fee or restricting complete access to all resume information are prohibited.
                        </li>
                        <li>
                           (d) Job postings must be individual openings for traditional employees
                        </li>
                        <li>
                           (e) Resume postings must contain the accurate resume of a living individual seeking employment on
                           a full-time, part-time, or contractual basis on his or her own behalf.
                        </li>
                        <li>
                           (f) JobLane is under no obligation to monitor the Documents posted on the Site, but
                           it may monitor Documents at random. Documents found to violate the above Posting Rules may be removed
                           at JobLane&#39;s discretion.
                        </li>
                     </ul>
                     <h4 class="text-regular">Conduct Rules</h4>
                     <ul class="list-unstyled">
                        <li>
                           (a) You may not respond to postings by other Users in any manner or for any purpose other than that
                           which is expected (i.e., to apply for the job or to initiate further discussion with the candidate).
                           Communications soliciting the employer&#39;s business by our competitors are prohibited.
                        </li>
                        <li>
                           (b) You may not send unsolicited commercial email to Users.
                        </li>
                        <li>
                           (c) Protect your password. You are responsible for maintaining the confidentiality of your information
                           and password. You are responsible for all uses of your registration, whether or not authorized by you.
                           If others use your password to post inappropriate material on the Site, you risk losing your access
                           to the Site. You agree to notify JobLane immediately of any unauthorized use of your
                           registration and password.
                        </li>
                        <li>
                           (d) Report inappropriate postings or conduct to Feedback.
                        </li>
                        <li>
                           (e) You may not delete or revise any material posted by any other person or entity.
                        </li>
                        <li>
                           (f) If at any time during the term of this agreement JobLane comes to the understanding
                           that you: (i) misled JobLane of your business practices and/or services, or (ii)
                           purchased services that do not represent your precise business, JobLane reserves the
                           right to terminate this agreement.
                        </li>
                        <li>
                           (g) GulfTalent is under no obligation to monitor the conduct of its Users, but it may
                           investigate and respond when violations are reported.
                        </li>
                     </ul>
                     <h4 class="text-regular">Security Rules</h4>
                     <ul class="list-unstyled">
                        <li>
                           (a) Users are prohibited from violating or attempting to violate the security of the Site, including,
                           without limitation: (i) accessing data not intended for such User or logging into a server or
                           account which the User is not authorized to access; (ii) attempting to probe, scan or test the
                           vulnerability of a system or network or to breach security or authentication measures without proper
                           authorization; (iii) attempting to interfere with service to any User, host or network, including,
                           without limitation, via means of submitting a virus to the Site, overloading, "flooding",
                           "mailbombing" or "crashing"; (iv) sending unsolicited e-mail, including promotions and/or advertising
                           of products or services; (v) forging any TCP/IP packet header or any part of the header information
                           in any e-mail or newsgroup posting. Violations of system or network security may result in civil or
                           criminal liability.
                        </li>
                        <li>
                           (b) Violation of these Security Rules may result in civil or criminal liability. JobLane
                           will investigate occurrences which may involve such violations and may involve, and cooperate with,
                           law enforcement authorities in prosecuting Users who are involved in such violations.
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   
</main>

<?php include('../footer.php'); ?>