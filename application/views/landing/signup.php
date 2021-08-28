<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sign Up</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/landing/css/style.css">
  <script src="https://kit.fontawesome.com/81f686e84d.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
          crossorigin="anonymous"></script>


</head>
<body>
<!--navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg1">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.html"><img src="<?php echo base_url() ?>assets/landing/images/logo.png" alt="logo"> </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="about_us.html">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="how_its_works.html">How It Works</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="faq.html">FAQ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact_us.html">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="anchorstyle" href="login.html">
            <button type="button" class="btn btn-success fw-bold">Login</button>
          </a>
        </li>

      </ul>

    </div>
  </div>
</nav>
<!--start main-->
<form action="" method="POST">
<div class="container-fluid ">
  <div class="row  mt-4">
    <div class="col-md-6">
      <h1 class="fw-bolder custom-space">Sign Up</h1>
    </div>
    <div class="col-md-8 ">
      <div class="custom-space">
        <p>The information provided on this screen will NOT be publicly accessible and is for internal use only.</p>
        <h4>Membership Level</h4>
      </div>
    </div>

  </div>
  <div class="row">

    <div class="col-md-4">
      <h5 class="custom-space3">Account Information</h5>
      <div class="mb-3 custom-space3">
        <label for="name" class="form-label fw-bold">Username</label>*
        <input type="text" name="username" class="form-control" id="name" required>
      </div>
      <div class="mb-3 custom-space3">
        <label for="pwd" class="form-label fw-bold">Password</label>*
        <input type="password" name="password" class="form-control" id="pwd" required>
      </div>
      <div class="mb-3 custom-space3">
        <label for="cpwd" class="form-label fw-bold">Confirm Password</label>*
        <input type="password" class="form-control" id="cpwd" required>
      </div>


      <div class="mb-3 custom-space3">
        <label for="email" class="form-label fw-bold">Email Address</label>*
        <input type="text" name="email" class="form-control" id="email" required>
      </div>
      <div class="mb-3 custom-space3">
        <label for="cemail" class="form-label fw-bold">Confirm Email Address</label>*
        <input type="text" class="form-control" id="cemail" required>
      </div>
      <div class="mb-3 custom-space3">
        <label for="lname" class="form-label fw-bold">Telephone No</label>*
        <input type="text" name="contactnumber" class="form-control" id="lname" required>
      </div>





    </div>



  </div>
  <div class="row">

    <div class="col-md-8 col-12">
      <!-- <h5 class="custom-space4">Payment Information <sub>We Accept Visa, Mastercard, American Express, and Discover</sub></h5> -->
      <!-- <div class="mb-3 custom-space4">
        <label for="cno" class="form-label fw-bold" > Card Number</label>*
        <input type="text" class="form-control" id="cno"  placeholder="1234 1234 1234 1234">
      </div>
      <div class="row">
        <div class="col-md-6 ps-0 expiration_date_class">
          <div class="mb-3 custom-space3">
            <label for="ed" class="form-label fw-bold " > Expiration Date</label>*
            <input type="date" class="form-control" id="ed"  placeholder="MM/YY">
          </div>

        </div>
        <div class="col-md-6">
          <div class="mb-3 ">
            <label for="cvc" class="form-label fw-bold" > CVC</label>*
            <input type="text" class="form-control" id="cvc"  placeholder="CVC">
          </div>

        </div>

      </div> -->
      <!-- <div class="row">
        <div class="col-md-4">
          <div class="row">
            <div class="col-md-10 col-10">
              <div class="mb-3 custom-space5">
                <label for="discode" class="form-label fw-bold" > Discount Code</label>
                <input type="text" class="form-control" id="discode" >

              </div>

            </div>
            <div class="col-md-2 mt-5 col-2">
              <u>Apply</u>
            </div>


          </div>




        </div>





      </div> -->
      <div class="row">
        <div class="col-md-4">
          <div class="mb-3 custom-space6">
            <label  class="form-label fw-bold">Part of Group</label>
            <select class="form-select" aria-label="Default select example">
              <option selected>Uber</option>

              <option value="1">AirBnB </option>
              <option value="2">..</option>
            </select>
          </div>

        </div>

      </div>
      <hr class="custom-space2">
      <h5 class="custom-space">Terms of Service</h5>
      <div class="custom-space scroll">
        <p>[Last Updated on April 18, 2019.]</p>
        <p>These terms and conditions are effective immediately upon registration and thereafter for all registered users, including their agents and assigns. These terms and conditions (the "Terms") govern your access to and use of Customer Check's websites and mobile applications that link to or reference these Terms (the "Site"). By accessing or using the Site, you are agreeing to these Terms and entering a legally binding contract with Bulwark Group, LLC (d/b/a Customer Check), an Iowa limited liability corporation, ("Customer Check ").</p>
        <p class="fw-bold">Do not access or use the Site if you are unwilling or unable to be bound by the Terms.</p>
        <ol>
          <li><b>DEFINITIONS</b></li>
          <ol>
            <li ><b>Parties: "You"&nbsp;and&nbsp;"your"</b>&nbsp;refer to you, as a user of the Site. A&nbsp;<b>"user"&nbsp;</b>is someone who accesses, browses, crawls, scrapes, or in any way uses the Site.&nbsp;<b>"We,"&nbsp;"us,"&nbsp;and&nbsp;"our"&nbsp;</b>refer to Customer Check.</li>
            <li class="s1"><b>Content: "Content"</b>&nbsp;means text, images, photos, audio, video, location data, and all other forms of data or communication.&nbsp;<b>"Your Content"</b>&nbsp;means Content that you submit or transmit to, through, or in connection with the Site, such as ratings, reviews, compliments, invitations, check-ins, messages, and information that you publicly display or displayed in your account profile.&nbsp;<b>"User Content"</b>&nbsp;means Content that users submit or transmit to, through, or in connection with the Site.&nbsp;<b>"Customer Check Content"</b>&nbsp;means Content that we create and make available in connection with the Site.&nbsp;<b>"Third-Party Content"</b>&nbsp;means Content that originates from parties other than Customer Check or its users, which is made available in connection with the Site.&nbsp;<b>"Site Content"</b>&nbsp;means all of the Content that is made available in connection with the Site, including Your Content, User Content, Third Party Content, and Customer Check Content.</li>
          </ol>
          <li><b>CHANGES TO THE TERMS OF SERVICE</b></li>
        </ol>
        <p >We may modify the Terms from time to time. You understand and agree that your access to and use of the Site is governed by the Terms effective at the time of your access to or use of the Site. If we make material changes to these Terms, we will notify you by email or by posting a notice on the Site prior to the effective date of the changes. We will also indicate at the top of this page the date that revisions were last made. You should revisit these Terms on a regular basis, as revised versions will be binding upon you. Any such modification will be effective upon our posting of any new Terms.&nbsp;<b>You understand and agree that your continued access to or use of the Site after the effective date of modifications to the Terms indicates your acceptance of the modifications.</b></p>
        <ol>
          <li><b>TRANSLATION</b></li>
          <p>We may translate these Terms into other languages for your convenience. Nevertheless, the English version governs your relationship with Customer Check, and any inconsistencies among the different versions will be resolved in favor of the English version.</p>

        </ol>
        <ol>
          <li><b>USING THE SITE</b></li>
          <ol>
            <li><b>Eligibility:</b>To access or use the Site, you must be 18 years or older and have the requisite power and authority to enter into these Terms. You may not access or use the Site if you are a competitor of ours, if we have previously banned you from the Site, or if we have closed your account</li>
            <li ><b>Permission to Use the Site: </b>We grant you permission to use the Site subject to the restrictions in these Terms. Your use of the Site is at your own risk, including the risk that you might be exposed to Content that is offensive, indecent, inaccurate, objectionable, or otherwise inappropriate.</li>
            <li ><b>Site Availability: </b>The Site may be modified, updated, interrupted, suspended or discontinued at any time without notice or liability.</li>
            <li ><b>User Accounts: </b>You must create an account and provide certain information about yourself in order to use some of the features that are offered through the Site. You are responsible for maintaining the confidentiality of your account password. You are also responsible for all activities that occur in connection with your account. You agree to notify us immediately of any unauthorized use of your account. We reserve the right to close your account at any time for any or no reason. Your account is for your commercial use only. In creating it, we ask that you provide complete and accurate information about yourself to bolster your credibility as a contributor to the Site. You may not impersonate someone else (e.g., adopt the identity of a celebrity or another business), create or use an account for anyone other than yourself, provide an email address other than your own, or create multiple accounts. Note that others may still be able to identify you if, for example, you include identifying information in your reviews, use the same account information on other sites, or allow other sites to share information about you with Customer Check. Please read our&nbsp;Privacy Policy&nbsp;for more information.</li>
            <li ><b>Communications from Customer Check and Other Users: </b>By creating an account, you agree to receive certain communications in connection with the Site. For example, you might receive complaints from people you have reported. You will also receive our e-mail newsletter about happenings in your neighborhood. You can opt-out of any non-essential communications.</li>
          </ol>
          <li><b>Content</b></li>
          <ol>
            <li ><b>Responsibility for Your Content: </b>You alone are responsible for Your Content, and once published, it cannot always be withdrawn. You assume all risks associated with Your Content, including anyone's reliance on its quality, accuracy, or reliability, or any disclosure by you of information in Your Content that makes you personally identifiable. You represent that you own, or have the necessary permissions to use and authorize the use of Your Content as described herein. You may not imply that Your Content is in any way sponsored or endorsed by Customer Check. You may expose yourself to liability if, for example, Your Content contains material that is false, intentionally misleading, or defamatory; violates any third-party right, including any copyright, trademark, patent, trade secret, moral right, privacy right, right of publicity, or any other intellectual property or proprietary right; contains material that is unlawful, including illegal hate speech or pornography; exploits or otherwise harms minors; or in any other way violates, advocates for, or can in any way be construed to violate or advocate for the violation of any law or regulation.</li>
            <li ><b>Our Right to Use Your Content: </b>We may use Your Content in a number of different ways, including publicly displaying it, reformatting it, incorporating it into advertisements and other works, creating derivative works from it, promoting it, distributing it, and allowing others to do the same in connection with their own websites and media platforms (<b>"Other Media"</b>). As such, you hereby irrevocably grant us worldwide, perpetual, non-exclusive, royalty-free, assignable, sublicensable, transferable rights to use Your Content for any purpose. Please note that you also irrevocably grant the users of the Site and any Other Media the right to access Your Content in connection with their use of the Site and any Other Media. Finally, you irrevocably waive and cause to be waived, against Customer Check and its users any claims and assertions of moral rights or attribution with respect to Your Content. By "use" we mean use, copy, publicly perform and display, reproduce, distribute, modify, translate, remove, analyze, commercialize, and prepare derivative works of Your Content.</li>
            <li ><b>Ownership: </b>As between you and Customer Check, you own Your Content. We own the Customer Check Content, including but not limited to visual interfaces, interactive features, graphics, design, compilation, including, but not limited to, our compilation of User Content and other Site Content, computer code, products, software, aggregate user review ratings, and all other elements and components of the Site excluding Your Content, User Content and Third Party Content. We also own the copyrights, trademarks, service marks, trade names, and other intellectual and proprietary rights throughout the world (<b>"IP Rights"</b>) associated with the Customer Check Content and the Site, which are protected by copyright, trade dress, patent, trademark laws and all other applicable intellectual and proprietary rights and laws. As such, you may not modify, reproduce, distribute, create derivative works or adaptations of, publicly display or in any way exploit any of the Customer Check Content in whole or in part except as expressly authorized by us. Except as expressly and unambiguously provided herein, we do not grant you any express or implied rights, and all rights in and to the Site and the Customer Check Content are retained by us.</li>
            <li ><b>Advertising: </b>Customer Check and its licensees may publicly display advertisements and other information adjacent to or included with Your Content. You are not entitled to any compensation for such advertisements. The manner, mode, and extent of such advertising are subject to change without specific notice to you.</li>
            <li><b>Other: </b>User Content (including any that may have been created by users employed or contracted by Customer Check) does not necessarily reflect the opinion of Customer Check. We reserve the right to remove, screen, edit, or reinstate User Content from time to time at our sole discretion for any reason or no reason, and without notice to you. For example, we may remove a review if we believe it violates our&nbsp;Content Guidelines. We have no obligation to retain or provide you with copies of Your Content, nor do we guarantee any confidentiality with respect to Your Content.</li>

          </ol>
          <li><b>RESTRICTIONS</b></li>
          <ol>
            <p>We are under no obligation to enforce the Terms on your behalf against another user. While we encourage you to let us know if you believe another user has violated the Terms, we reserve the right to investigate and take appropriate action at our sole discretion.</p>
            <li><b>You agree not to, and will not assist, encourage, or enable others to use the Site to:</b></li>
            <ol>
              <li>Violate our Content Guidelines, for example, by writing a fake or defamatory review, trading reviews with other businesses, or compensating someone or being compensated to write or remove a review;</li>
              <li>Violate any third party's rights, including any breach of confidence, copyright, trademark, patent, trade secret, moral right, privacy right, right of publicity, or any other intellectual property or proprietary right;</li>
              <li>Threaten, stalk, harm, or harass others, or promote bigotry or discrimination;</li>
              <li>Promote a business or other commercial venture or event, or otherwise use the Site for commercial purposes, except as expressly permitted by Customer Check;</li>
              <li>Send bulk emails, surveys, or other mass messaging, whether commercial in nature or not; engage in keyword spamming, or otherwise attempt to manipulate the Site's search results or any third party website;</li>
              <li>Solicit personal information from minors, or submit or transmit pornography; or</li>
              <li>Violate any applicable law.</li>
            </ol>
            <li><b>You also agree not to, and will not assist, encourage, or enable others to:</b></li>
            <ol>
              <li>Violate the Terms;</li>
              <li>Modify, adapt, appropriate, reproduce, distribute, translate, create derivative works or adaptations of, publicly display, sell, trade, or in any way exploit the Site or Site Content (other than Your Content), except as expressly authorized by Customer Check;</li>
              <li>Use any robot, spider, site search/retrieval application, or other automated devices, process or means to access, retrieve, scrape, or index any portion of the Site or any Site Content;</li>
              <li>Reverse engineer any portion of the Site;</li>
              <li>Remove or modify any copyright, trademark or other proprietary rights notice that appears on any portion of the Site or on any materials printed or copied from the Site;</li>
              <li>Record, process, or mine information about other users;</li>
              <li>Access, retrieve or index any portion of the Site for purposes of constructing or populating a searchable database of customer reviews;</li>
              <li>Reformat or frame any portion of the Site;</li>
              <li>Take any action that imposes, or may impose, in our sole discretion, an unreasonable or disproportionately large load on Customer Check's technology infrastructure or otherwise make excessive traffic demands of the Site;</li>
              <li>Attempt to gain unauthorized access to the Site, user accounts, computer systems or networks connected to the Site through hacking, password mining or any other means;</li>
              <li>Use the Site or any Site Content to transmit any computer viruses, worms, defects, Trojan horses or other items of a destructive nature (collectively, "Viruses");</li>
              <li>Use any device, software or routine that interferes with the proper working of the Site, or otherwise attempt to interfere with the proper working of the Site;</li>
              <li>Use the Site to violate the security of any computer network, crack passwords or security encryption codes; disrupt or interfere with the security of, or otherwise cause harm to, the Site or Site Content; or</li>
              <li>Remove, circumvent, disable, damage or otherwise interfere with any security-related features of the Site, features that prevent or restrict the use or copying of Site Content, or features that enforce limitations on the use of the Site.</li>

            </ol>
          </ol>


        </ol>
        <p>The restrictions above only apply to the extent permissible under applicable law. Nevertheless, you agree not to act contrary to them (even if permissible under applicable law) without providing 30 days' prior written notice to us, together with any information that we may reasonably require to give us an opportunity to provide alternative remedies or otherwise accommodate you at our sole discretion.</p>
        <ol >
          <li><span ><b>GUIDELINES AND POLICIES</b></span>
            <ol >
              <li ><span ><b>Content Guidelines: </b>You represent that you have read and understood our&nbsp;Content Guidelines.</span></li>
              <li ><span ><b>Privacy: </b>You represent that you have read and understood our Privacy Policy. Note that we may disclose information about you to third parties if we have a good faith belief that such a disclosure is reasonably necessary to (i) take action regarding suspected illegal activities; (ii) enforce or apply our Terms and Privacy Policy; (iii) comply with legal process or other government inquiry, such as a search warrant, subpoena, statute, judicial proceeding, or other legal process served on us; or (iv) protect our rights, reputation, and property, or that of our users, affiliates, or the public. If you use the Site outside of the United States, you consent to have your personal data transferred to and processed in the United States.</span></li>
              <li ><span ><b>Copyright And Trademark Disputes: </b>Please see our&nbsp;Infringement Policy&nbsp;for information about copyright and trademark disputes.</span></li>
              <li ><span ><b>Events: </b>Please see our&nbsp;Event Terms and Conditions&nbsp;for information about events listed on or linked to on the Site. You represent that you have read and understood them.</span></li>
            </ol>
          </li>
          <li ><span ><b>SUGGESTIONS AND IMPROVEMENTS</b></span></li>
        </ol>
        <p>By sending us any ideas, suggestions, documents or proposals ("Feedback"), you agree that (i) your Feedback does not contain the confidential or proprietary information of third parties; (ii) we are under no obligation of confidentiality, express or implied, with respect to the Feedback; (iii) we may have something similar to the Feedback already under consideration or in development; (iv) you grant us an irrevocable, non-exclusive, royalty-free, perpetual, worldwide license to use, modify, prepare derivative works, publish, distribute and sublicense the Feedback; and (v) you irrevocably waive, and cause to be waived, against Customer Check and its users any claims and assertions of any moral rights contained in such Feedback.</p>
        <ol>
          <li ><span ><b>THIRD PARTIES</b></span></li>
        </ol>
        <p ><span >The Site may include links to other websites or applications (each, a <b>"Third-Party Site"</b>). We do not control or endorse any Third-Party Site. You agree that we are not responsible for the availability or contents of such Third-Party Sites. Your use of Third-Party Sites is at your own risk. Some of the services made available through the Site may be subject to an additional third party or open source licensing terms and disclosures, including the ones posted and incorporated herein by reference.</span></p>

        <ol >
          <li ><span ><b>INDEMNITY</b></span></li>
        </ol>
        <p> <span >You agree to indemnify, defend, and hold Customer Check, its parents, subsidiaries, affiliates, any related companies, suppliers, licensors and partners, and the officers, directors, employees, agents and representatives of each of them (collectively, the "<b>Customer Check Entities</b>") harmless, including costs, liabilities and legal fees, from any claim or demand made by any third party arising out of or relating to (i) your access to or use of the Site; (ii) your violation of the Terms; (iii) any products or services purchased or obtained by you in connection with the Site; or (iv) the infringement by you, or any third party using your account, of any intellectual property or other right of any person or entity. Customer Check reserves the right, at your expense, to assume the exclusive defense and control of any matter for which you are required to indemnify us, and you agree to cooperate with our defense of these claims. You agree not to settle any such matter without the prior written consent of Customer Check. Customer Check will use reasonable efforts to notify you of any such claim, action or proceeding upon becoming aware of it.</span></p>

        <ol >
          <li ><span ><b>DISCLAIMERS AND LIMITATIONS OF LIABILITY</b></span></li>
        </ol>
        <p ><span ><b>PLEASE READ THIS SECTION CAREFULLY SINCE IT LIMITS THE LIABILITY OF THE CUSTOMER CHECK ENTITIES TO YOU. EACH OF THE SUBSECTIONS BELOW ONLY APPLIES UP TO THE MAXIMUM EXTENT PERMITTED UNDER APPLICABLE LAW. NOTHING HEREIN IS INTENDED TO LIMIT ANY RIGHTS YOU MAY HAVE WHICH MAY NOT BE LAWFULLY LIMITED. IF YOU ARE UNSURE ABOUT THIS OR ANY OTHER SECTION OF THESE TERMS, PLEASE CONSULT WITH A LEGAL PROFESSIONAL PRIOR TO ACCESSING OR USING THE SITE. BY ACCESSING OR USING THE SITE, YOU REPRESENT THAT YOU HAVE READ, UNDERSTOOD, AND AGREE TO THESE TERMS, INCLUDING THIS SECTION. YOU ARE GIVING UP SUBSTANTIAL LEGAL RIGHTS BY AGREEING TO THESE TERMS.</b></span></p>

        <ol >
          <li >
            <ol >
              <li ><span >THE SITE IS MADE AVAILABLE TO YOU ON AN "AS IS", "WITH ALL FAULTS" AND "AS AVAILABLE" BASIS, WITH THE EXPRESS UNDERSTANDING THAT THE CUSTOMER CHECK ENTITIES MAY NOT MONITOR, CONTROL, OR VET USER CONTENT. AS SUCH, YOUR USE OF THE SITE IS AT YOUR OWN DISCRETION AND RISK. THE CUSTOMER CHECK ENTITIES MAKE NO CLAIMS OR PROMISES ABOUT THE QUALITY, ACCURACY, OR RELIABILITY OF THE SITE, ITS SAFETY OR SECURITY, OR THE SITE CONTENT. ACCORDINGLY, THE CUSTOMER CHECK ENTITIES ARE NOT LIABLE TO YOU FOR ANY LOSS OR DAMAGE THAT MIGHT ARISE, FOR EXAMPLE, FROM THE SITE'S INOPERABILITY, UNAVAILABILITY OR SECURITY VULNERABILITIES OR FROM YOUR RELIANCE ON THE QUALITY, ACCURACY, OR RELIABILITY OF THE BUSINESS LISTINGS, RATINGS, REVIEWS (INCLUDING THEIR CONTENT, ORDER, AND DISPLAY), OR METRICS FOUND ON, USED ON, OR MADE AVAILABLE THROUGH THE SITE.</span></li>
              <li ><span >THE CUSTOMER CHECK ENTITIES MAKE NO CLAIMS OR PROMISES WITH RESPECT TO ANY THIRD PARTY, SUCH AS THE BUSINESSES OR ADVERTISERS LISTED ON THE SITE OR THE SITE'S USERS. ACCORDINGLY, THE CUSTOMER CHECK ENTITIES ARE NOT LIABLE TO YOU FOR ANY LOSS OR DAMAGE THAT MIGHT ARISE FROM THEIR ACTIONS OR OMISSIONS, INCLUDING, FOR EXAMPLE, IF ANOTHER USER OR BUSINESS MISUSES YOUR CONTENT, IDENTITY OR PERSONAL INFORMATION, OR IF YOU HAVE A NEGATIVE EXPERIENCE WITH ONE OF THE BUSINESSES OR ADVERTISERS LISTED OR FEATURED ON THE SITE. YOUR PURCHASE AND USE OF PRODUCTS OR SERVICES OFFERED BY THIRD PARTIES THROUGH THE SITE IS AT YOUR OWN DISCRETION AND RISK.</span></li>
              <li ><span >THE CUSTOMER CHECK ENTITIES EXPRESSLY DISCLAIM ALL WARRANTIES, WHETHER EXPRESS OR IMPLIED, INCLUDING WARRANTIES AS TO THE PRODUCTS OR SERVICES OFFERED BY BUSINESSES LISTED ON THE SITE, AND IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, AND NON-INFRINGEMENT. NO ORAL OR WRITTEN INFORMATION OR ADVICE PROVIDED TO YOU BY A REPRESENTATIVE OF ONE OF THE CUSTOMER CHECK ENTITIES SHALL CREATE A REPRESENTATION OR WARRANTY.</span></li>
              <li ><span >YOUR SOLE AND EXCLUSIVE RIGHT AND REMEDY IN CASE OF DISSATISFACTION WITH THE SITE, RELATED SERVICES, OR ANY OTHER GRIEVANCE SHALL BE YOUR TERMINATION AND DISCONTINUATION OF ACCESS TO OR USE OF THE SITE.</span></li>
              <li ><span >THE CUSTOMER CHECK ENTITIES' MAXIMUM AGGREGATE LIABILITY TO YOU FOR LOSSES OR DAMAGES THAT YOU SUFFER IN CONNECTION WITH THE SITE OR THESE TERMS IS LIMITED TO THE GREATER OF (i) THE AMOUNT PAID, IF ANY, BY YOU TO THE CUSTOMER CHECK ENTITIES IN CONNECTION WITH THE SITE IN THE 12 MONTHS PRIOR TO THE ACTION GIVING RISE TO LIABILITY, OR (ii) $100.</span></li>
              <li ><span >THE CUSTOMER CHECK ENTITIES DISCLAIM LIABILITY FOR ANY (i) INDIRECT, SPECIAL, INCIDENTAL, PUNITIVE, EXEMPLARY, RELIANCE, OR CONSEQUENTIAL DAMAGES, (ii) LOSS OF PROFITS, (iii) BUSINESS INTERRUPTION, (iv) REPUTATIONAL HARM, OR (v) LOSS OF INFORMATION OR DATA.</span></li>
            </ol>
          </li>
          <li ><span ><b>CHOICE OF LAW AND VENUE</b></span></li>
        </ol>
        <p> <span >Iowa law will govern these Terms, as well as any claim, cause of action or dispute that might arise between you and Customer Check (a <b>"Claim"</b>), without regard to conflict of law provisions. FOR ANY CLAIM BROUGHT BY EITHER PARTY, YOU AGREE TO SUBMIT AND CONSENT TO THE PERSONAL AND EXCLUSIVE JURISDICTION IN, AND THE EXCLUSIVE VENUE OF, THE STATE AND FEDERAL COURTS LOCATED WITHIN STORY COUNTY, IOWA.</span></p>

        <ol >
          <li ><span ><b>TERMINATION</b></span>
            <ol >
              <li ><span >You may terminate the Terms at any time by closing your account, discontinuing your use of the Site, or providing Customer Check with a notice of termination via letter. Please review our Privacy Policy for information about what we do with your account when terminated.</span></li>
              <li ><span >We may close your account, suspend your ability to use certain portions of the Site, and/or ban you altogether from the Site for any or no reason, and without notice or liability of any kind. Membership costs will not be refunded for any reason. Any such action could prevent you from accessing your account, the Site, Your Content, Site Content, or any other related information.</span></li>
              <li ><span >In the event of any termination of these Terms, whether by you or us, Sections 1, 5, 6, and 10 - 14 will continue in full force and effect, including our right to use Your Content as detailed in Section 5.</span></li>
            </ol>
          </li>
          <li ><span ><b>GENERAL TERMS</b></span>
            <ol >
              <li ><span >We reserve the right to modify, update, or discontinue the Site at our sole discretion, at any time, for any or no reason, and without notice or liability.</span></li>
              <li ><span >We may provide you with notices, including those regarding changes to the Terms by email, regular mail or communications through the Site.</span></li>
              <li ><span >Except as otherwise stated in Section 9 above, nothing herein is intended, nor will be deemed, to confer rights or remedies upon any third party.</span></li>
              <li ><span>The Terms contain the entire agreement between you and us regarding the use of the Site and supersede any prior agreement between you and us on such subject matter. The parties acknowledge that no reliance is placed on any representation made but not expressly contained in these Terms.</span></li>
              <li ><span >Any failure on Customer Check's part to exercise or enforce any right or provision of the Terms does not constitute a waiver of such right or provision. The failure of either party to exercise in any respect any right provided for herein shall not be deemed a waiver of any further rights hereunder.</span></li>
              <li ><span >If any provision of the Terms is found to be unenforceable or invalid, then only that provision shall be modified to reflect the parties' intention or eliminated to the minimum extent necessary so that the Terms shall otherwise remain in full force and effect and enforceable.</span></li>
              <li ><span >The Terms and any rights or obligations hereunder are not assignable, transferable or sublicensable by you except with Customer Check's prior written consent, but may be assigned or transferred by us without restriction. Any attempted assignment by you shall violate these Terms and be void.</span></li>
              <li ><span >The section titles in the Terms are for convenience only and have no legal or contractual effect.</span></li>
            </ol>
          </li>
        </ol>
        <p>Copyright © 2018 Customer Check LLC., PO Box 397, Norwalk, IA  50211</p>
      </div>

      <div class="form-check custom-space mt-3">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
        <label class="form-check-label" for="flexCheckChecked">
          <b>I agree to the Terms of Service</b>
        </label>
      </div>
      <div class="col-md-4 custom-space">
        <button type="submit" name="submit" class="btn btn-success fw-bold custom-button2">Submit and Check Out >>></button>
      </div>
      <hr class="custom-space2 ">




    </div>
</form>
  </div>
</div>
<!--end main-->

<!--footer-->
<div class="bg1">
  <div class="container-fluid mt-5">
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-3 col-6">
        <div class="row mt-4">
          <div class="col-md-2 ps-0 pe-0 col-3">
            <img src="<?php echo base_url() ?>assets/landing/images/logo2.png" alt="logo" width="100%">

          </div>
          <div class="col-md-2 text-white mt-3 ps-0 pe-0 col-3">
            <p>Connect</p>

          </div>
          <div class="col-md-1 mt-3   text-white col-2">
            <i class="fa fa-facebook  fa-lg" aria-hidden="true"></i>

          </div>
          <div class="col-md-1 mt-3   text-white col-2">
            <i class="fa fa-linkedin  fa-lg" aria-hidden="true"></i>

          </div>

        </div>

      </div>
      <div class="col-md-6 col-1"></div>
      <div class="col-md-2 mt-4 col-5">
        <a href="membership.html">
          <button type="button" class="btn btn-success fw-bold  ">Join Now</button>
        </a>
      </div>

    </div>
    <div class="row text-center text-white">
      <p class=" font-size-custom">© Customer Check 2021. Site by<b> Farmboy. Privacy Policy. Terms of Service.</b></p>

    </div>


  </div>

</div>


</body>

</html>