<?php
/**
 * Template Name: privacyNote
 */
?>
<?php get_header(); ?>
<!--------------------------------------------Banner Image Section-------------------------------------------------------------->
<?php
$banner_image_url = get_the_post_thumbnail_url(null, 'full');
if (!$banner_image_url) {
    $banner_image_url = get_template_directory_uri() . '/assets/images/about-2.webp'; 
}
?>
<div class="banner vh-60 d-flex align-items-end p-4 position-relative">
    <!-- Background Image with Opacity -->
    <div class="position-absolute top-0 start-0 w-100 h-100 opacity-25 z-1" style="background-image: url('<?php echo esc_url($banner_image_url); ?>');"></div>
    
    <div class="container-fluid position-relative z-2">
    <div class="row">
        <!-- Text behind the main content -->
        <div class="col-12 position-absolute top-50 start-50 translate-middle text-center opacity-25">
            <span class="display-1 text-uppercase text-white text-opacity-50">NOTICE</span>
        </div>

        <!-- Main content -->
        <div class="col-12 text-center position-relative">
            <h2 class="banner-heading" loading="eager loading">Privacy Note</h2>
            <h3 class="banner-subheading">Last Updated: December 24, 2021</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bcg-border.svg" alt="Border Icon" class="img-fluid"/>
        </div>
    </div>
</div>
</div>

<div class="container-fluid my-5 w-75">
        <h5 class="paragraph-section spancolorchange text-center">
        Thank you for choosing to be part of our community at Broadway City UK Ltd , doing business as Broadway City (“Broadway City,” “we,” “us,” or “our”). We are committed to protecting your personal information and your right to privacy. If you have any questions or concerns about this privacy notice or our practices with regard to your personal information, please contact us at
        <br>
        <?php $email = "naveed@broadwaycity.co.uk"; ?>
        <a href="mailto:<?php echo $email; ?>" class="gold-text"><?php echo $email; ?></a>
        <br><br>
        <p>Visit our website at <a href="https://broadwaycity.co.uk" class="gold-text" target="_blank" rel="noopener noreferrer">https://broadwaycity.co.uk</a></p>
        Engage with us in other related ways ― including any sales, marketing, or events
        <br>In this privacy notice, if we refer to:
        <br>“Website,” we are referring to any website of ours that references or links to this policy.
        <br>“Services,” we are referring to our Website, and other related services, including any sales, marketing, or events
        The purpose of this privacy notice is to explain to you in the clearest way possible what information we collect, how we use it, and what rights you have in relation to it. If there are any terms in this privacy notice that you do not agree with, please discontinue use of our Services immediately.
        <br><br>
        <p class="gold-text">Please read this privacy notice carefully, as it will help you understand what we do with the information that we collect.</p>
        </h5>
</div>


    <!---------------------------------------------Accordion Section------------------------------------------------------------------>
    <div class="container-fluid my-5 py-5">
  <div class="accordion accordion-flush" id="accordionExample">
    <div class="accordion-item bg-dark border-gold">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button bg-dark text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <span class="numaricaccordion">1</span> WHAT INFORMATION DO WE COLLECT?
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body bg-dark text-light border-gold text-13">
          Personal information you disclose to us
          <br> <br>
          In Short: We collect personal information that you provide to us. We collect personal information that you voluntarily provide to us when you register on the Website, express an interest in obtaining information about us or our products and Services, when you participate in activities on the Website or otherwise when you contact us. 
          <br><br>
          The personal information that we collect depends on the context of your interactions with us and the Website, the choices you make and the products and features you use. The personal information we collect may include the following:
            <br><br>
            Personal Information Provided by You. We collect names; phone numbers; email addresses; mailing addresses; usernames; passwords; contact preferences; contact or authentication data; billing addresses; debit/credit card numbers; and other similar information.
            <br><br>
            Payment Data. We may collect data necessary to process your payment if you make purchases, such as your payment instrument number (such as a credit card number), and the security code associated with your payment instrument. All payment data is stored by Take Payments . You may find their privacy notice link(s) here: https://www.takepayments.com/terms-and-conditions/.
              <br><br>
              Social Media Login Data. We may provide you with the option to register with us using your existing social media account details, like your Facebook, Twitter or other social media account. If you choose to register in this way, we will collect the information described in the section called “HOW DO WE HANDLE YOUR SOCIAL LOGINS?” below.
              <br><br>
              All personal information that you provide to us must be true, complete and accurate, and you must notify us of any changes to such personal information.
              <br><br>
              Information collected from other sources
              <br><br>
              In Short: We may collect limited data from public databases, marketing partners, social media platforms, and other outside sources.
              <br><br>
              In order to enhance our ability to provide relevant marketing, offers and services to you and update our records, we may obtain information about you from other sources, such as public databases, joint marketing partners, affiliate programs, data providers, social media platforms, as well as from other third parties. This information includes mailing addresses, job titles, email addresses, phone numbers, intent data (or user behavior data), Internet Protocol (IP) addresses, social media profiles, social media URLs and custom profiles, for purposes of targeted advertising and event promotion. If you interact with us on a social media platform using your social media account (e.g. Facebook or Twitter), we receive personal information about you such as your name, email address, and gender. Any personal information that we collect from your social media account depends on your social media account’s privacy settings.
        </div>
      </div>
    </div>
    <div class="accordion-item bg-dark  border-gold mt-2">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed bg-dark text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        <span class="numaricaccordion">2</span>HOW DO WE USE YOUR INFORMATION?
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
        <div class="accordion-body bg-dark text-light border-gold text-13">
        In Short: We process your information for purposes based on legitimate business interests, the fulfillment of our contract with you, compliance with our legal obligations, and/or your consent. 
        <br><br>
        We use personal information collected via our Website for a variety of business purposes described below. We process your personal information for these purposes in reliance on our legitimate business interests, in order to enter into or perform a contract with you, with your consent, and/or for compliance with our legal obligations. We indicate the specific processing grounds we rely on next to each purpose listed below. 
        <br><br>
        In legal terms, we are generally the “data controller” under European data protection laws since we determine the means and/or purposes of the data processing we perform. However, if you are a business customer with whom we have entered into a data processing agreement for the provision of corporate services to you, then you would be the “data controller” and we would be the “data processor” under European data protection laws since we would be processing data on your behalf in accordance with your instructions.
        <br><br>
        We use the information we collect or receive: 
        <br><br>
        To facilitate account creation and logon process. If you choose to link your account with us to a third-party account (such as your Google or Facebook account), we use the information you allowed us to collect from those third parties to facilitate account creation and logon process for the performance of the contract. See the section below headed “HOW DO WE HANDLE YOUR SOCIAL LOGINS?” for further information.
        To post testimonials. We post testimonials on our Website that may contain personal information. Prior to posting a testimonial, we will obtain your consent to use your name and the content of the testimonial. If you wish to update, or delete your testimonial, please contact us at naveed@broadwaycity.co.uk and be sure to include your name, testimonial location, and contact information. <br>
        Request feedback. We may use your information to request feedback and to contact you about your use of our Website. <br>
        To enable user-to-user communications. We may use your information in order to enable user-to-user communications with each user’s consent. <br>
        To manage user accounts. We may use your information for the purposes of managing our account and keeping it in working order. <br>To send administrative information to you. We may use your personal information to send you product,<br>
        service and new feature information and/or information about changes to our terms, conditions, and policies.
        To protect our Services. We may use your information as part of our efforts to keep our Website safe and secure (for example, for fraud monitoring and prevention). <br>
        To enforce our terms, conditions and policies for business purposes, to comply with legal and regulatory requirements or in connection with our contract. <br>
        To respond to legal requests and prevent harm. If we receive a subpoena or other legal request, we may need to inspect the data we hold to determine how to respond. <br>
        Fulfill and manage your orders. We may use your information to fulfill and manage your orders, payments, returns, and exchanges made through the Website. <br>
        Administer prize draws and competitions. We may use your information to administer prize draws and competitions when you elect to participate in our competitions. <br>
        To deliver and facilitate delivery of services to the user. We may use your information to provide you with the requested service. <br>To respond to user inquiries/offer support to users. We may use your information to respond to your inquiries and solve any potential issues you might have with the use of our Services. <br>To send you marketing and promotional communications. We and/or our third-party marketing partners may use the personal information you send to us for our marketing purposes, if this is in accordance with your marketing preferences. For example, when expressing an interest in obtaining information about us or our Website, subscribing to marketing or otherwise contacting us, we will collect personal information from you. You can opt-out of our marketing emails at any time (see the “WHAT ARE YOUR PRIVACY RIGHTS?” below). <br>
        Deliver targeted advertising to you. We may use your information to develop and display personalized content and advertising (and work with third parties who do so) tailored to your interests and/or location and to measure its effectiveness. <br>For other business purposes. We may use your information for other business purposes, such as data analysis, identifying usage trends, determining the effectiveness of our promotional campaigns and to <br>evaluate and improve our Website, products, marketing and your experience. We may use and store this information in aggregated and anonymized form so that it is not associated with individual end users and does not include personal information.

        </div>
      </div>
    </div>
    <div class="accordion-item bg-dark  border-gold mt-2">
      <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed bg-dark text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseTwo">
        <span class="numaricaccordion">3</span>WILL YOUR INFORMATION BE SHARED WITH ANYONE?
        </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
        <div class="accordion-body bg-dark text-light border-gold text-13">
        In Short: We only share information with your consent, to comply with laws, to provide you with services, to protect your rights, or to fulfill business obligations.
        <br><br>
        We may process or share your data that we hold based on the following legal basis: 
        <br><br>
        Consent: We may process your data if you have given us specific consent to use your personal information for a specific purpose. <br>
        Legitimate Interests: We may process your data when it is reasonably necessary to achieve our legitimate business interests. <br>
        Performance of a Contract: Where we have entered into a contract with you, we may process your personal information to fulfill the terms of our contract.
        <br>
        Legal Obligations: We may disclose your information where we are legally required to do so in order to comply with applicable law, governmental requests, a judicial proceeding, court order, or legal process, such as in response to a court order or a subpoena (including in response to public authorities to meet national security or law enforcement requirements).
        <br>
        Vital Interests: We may disclose your information where we believe it is necessary to investigate, prevent, or take action regarding potential violations of our policies, suspected fraud, situations involving potential threats to the safety of any person and illegal activities, or as evidence in litigation in which we are involved.
         More specifically, we may need to process your data or share your personal information in the following situations:
         <br><br>
         Business Transfers. We may share or transfer your information in connection with, or during negotiations of, any merger, sale of company assets, financing, or acquisition of all or a portion of our business to another company.
         <br>
         Affiliates. We may share your information with our affiliates, in which case we will require those affiliates to honor this privacy notice. Affiliates include our parent company and any subsidiaries, joint venture partners or other companies that we control or that are under common control with us. <br>
          Business Partners. We may share your information with our business partners to offer you certain products, services or promotions.
        </div>
      </div>
    </div>
    <div class="accordion-item bg-dark  border-gold mt-2">
      <h2 class="accordion-header" id="headingFour">
        <button class="accordion-button collapsed bg-dark text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseTwo">
        <span class="numaricaccordion">4</span>DO WE USE COOKIES AND OTHER TRACKING TECHNOLOGIES?
        </button>
      </h2>
      <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
        <div class="accordion-body bg-dark text-light border-gold text-13">
        In Short: We may use cookies and other tracking technologies to collect and store your information.
        <br><br>
        We may use cookies and similar tracking technologies (like web beacons and pixels) to access or store information. Specific information about how we use such technologies and how you can refuse certain cookies is set out in our Cookie Notice.
        </div>
      </div>
    </div>
    <div class="accordion-item bg-dark  border-gold mt-2">
      <h2 class="accordion-header" id="headingFive">
        <button class="accordion-button collapsed bg-dark text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseTwo">
        <span class="numaricaccordion">5</span>HOW DO WE HANDLE YOUR SOCIAL LOGINS?
        </button>
      </h2>
      <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
        <div class="accordion-body bg-dark text-light border-gold text-13">
        In Short: If you choose to register or log in to our services using a social media account, we may have access to certain information about you.
        <br><br>
        Our Website offers you the ability to register and login using your third-party social media account details (like your Facebook or Twitter logins). Where you choose to do this, we will receive certain profile <br>
        information about you from your social media provider. The profile information we receive may vary <br>
        depending on the social media provider concerned, but will often include your name, email address, friends list, profile picture as well as other information you choose to make public on such social media platform.
        <br><br>
        We will use the information we receive only for the purposes that are described in this privacy notice or that are otherwise made clear to you on the relevant Website. Please note that we do not control, and are not <br>
        responsible for, other uses of your personal information by your third-party social media provider. We <br>
        recommend that you review their privacy notice to understand how they collect, use and share your <br>
        personal information, and how you can set your privacy preferences on their sites and apps.
        </div>
      </div>
    </div>
    <div class="accordion-item bg-dark  border-gold mt-2">
      <h2 class="accordion-header" id="headingSix">
        <button class="accordion-button collapsed bg-dark text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseTwo">
        <span class="numaricaccordion">6</span>IS YOUR INFORMATION TRANSFERRED INTERNATIONALLY?
        </button>
      </h2>
      <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
        <div class="accordion-body bg-dark text-light border-gold text-13">
        In Short: We may transfer, store, and process your information in countries other than your own.
        <br><br>
        Our servers are located in Pakistan. If you are accessing our Website from outside Pakistan, please be <br>
        aware that your information may be transferred to, stored, and processed by us in our facilities and by those third parties with whom we may share your personal information (see “WILL YOUR INFORMATION BE <br>
        SHARED WITH ANYONE?” above), in Pakistan, and other countries.
        <br><br>
        If you are a resident in the European Economic Area (EEA) or United Kingdom (UK), then these countries may not necessarily have data protection laws or other similar laws as comprehensive as those in your <br>
        country. We will however take all necessary measures to protect your personal information in accordance with this privacy notice and applicable law. 
        <br><br>
        European Commission’s Standard Contractual Clauses:
        <br><br>
        We have implemented measures to protect your personal information, including by using the European Commission’s Standard Contractual Clauses for transfers of personal information between our group <br>
        companies and between us and our third-party providers. These clauses require all recipients to protect all personal information that they process originating from the EEA or UK in accordance with European data protection laws and regulations. Our Standard Contractual Clauses can be provided upon request. We have implemented similar appropriate safeguards with our third-party service providers and partners and further details can be provided upon request.
        </div>
      </div>
    </div>
    <div class="accordion-item bg-dark  border-gold mt-2">
      <h2 class="accordion-header" id="headingSeven">
        <button class="accordion-button collapsed bg-dark text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseTwo">
        <span class="numaricaccordion">7</span>HOW LONG DO WE KEEP YOUR INFORMATION?
        </button>
      </h2>
      <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
        <div class="accordion-body bg-dark text-light border-gold text-13">
        In Short: We keep your information for as long as necessary to fulfill the purposes outlined in this privacy notice unless otherwise required by law.
        <br><br>
        We will only keep your personal information for as long as it is necessary for the purposes set out in this privacy notice, unless a longer retention period is required or permitted by law (such as tax, accounting or other legal requirements). No purpose in this notice will require us keeping your personal information for longer than twelve (12) months past the termination of the user’s account.
        <br><br>
        When we have no ongoing legitimate business need to process your personal information, we will either delete or anonymize such information, or, if this is not possible (for example, because your personal <br>
        information has been stored in backup archives), then we will securely store your personal information and isolate it from any further processing until deletion is possible.
        </div>
      </div>
    </div>
    <div class="accordion-item bg-dark  border-gold mt-2">
      <h2 class="accordion-header" id="headingEight">
        <button class="accordion-button collapsed bg-dark text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseTwo">
        <span class="numaricaccordion">8</span>HOW DO WE KEEP YOUR INFORMATION SAFE?
        </button>
      </h2>
      <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
        <div class="accordion-body bg-dark text-light border-gold text-13">
        In Short: We aim to protect your personal information through a system of organizational and technical security measures.
        <br><br>
        We have implemented appropriate technical and organizational security measures designed to protect the security of any personal information we process. However, despite our safeguards and efforts to secure your information, no electronic transmission over the Internet or information storage technology can be guaranteed to be 100% secure, so we cannot promise or guarantee that hackers, cybercriminals, or other unauthorized third parties will not be able to defeat our security, and improperly collect, access, steal, or modify your information. Although we will do our best to protect your personal information, transmission of personal information to and from our Website is at your own risk. You should only access the Website within a secure environment.
        </div>
      </div>
    </div>
    <div class="accordion-item bg-dark  border-gold mt-2">
      <h2 class="accordion-header" id="headingNine">
        <button class="accordion-button collapsed bg-dark text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseTwo">
        <span class="numaricaccordion">9</span>DO WE COLLECT INFORMATION FROM MINORS?
        </button>
      </h2>
      <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
        <div class="accordion-body bg-dark text-light border-gold text-13">
        In Short: We do not knowingly collect data from or market to children under 18 years of age.
        <br><br>
        We do not knowingly solicit data from or market to children under 18 years of age. By using the Website, you represent that you are at least 18 or that you are the parent or guardian of such a minor and consent to such minor dependent’s use of the Website. If we learn that personal information from users less than 18 years of age has been collected, we will deactivate the account and take reasonable measures to promptly delete such data from our records. If you become aware of any data we may have collected from children under age 18, please contact us at naveed@broadwaycity.co.uk.
        </div>
      </div>
    </div>
    <div class="accordion-item bg-dark  border-gold mt-2">
      <h2 class="accordion-header" id="headingTen">
        <button class="accordion-button collapsed bg-dark text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTwo">
        <span class="numaricaccordion">10</span>WHAT ARE YOUR PRIVACY RIGHTS?
        </button>
      </h2>
      <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
        <div class="accordion-body bg-dark text-light border-gold text-13">
        In Short: In some regions, such as the European Economic Area (EEA) and United Kingdom (UK), you have rights that allow you greater access to and control over your personal information. You may review, change, or terminate your account at any time.
        <br><br>
        In some regions (like the EEA and UK), you have certain rights under applicable data protection laws. These may include the right (i) to request access and obtain a copy of your personal information, (ii) to request rectification or erasure; (iii) to restrict the processing of your personal information; and (iv) if applicable, to data portability. In certain circumstances, you may also have the right to object to the processing of your personal information. To make such a request, please use the contact details provided below. We will consider and act upon any request in accordance with applicable data protection laws. 
        <br><br>
        If we are relying on your consent to process your personal information, you have the right to withdraw your consent at any time. Please note however that this will not affect the lawfulness of the processing before its withdrawal, nor will it affect the processing of your personal information conducted in reliance on lawful processing grounds other than consent.
        <br><br>
        If you are a resident in the EEA or UK and you believe we are unlawfully processing your personal <br>
        information, you also have the right to complain to your local data protection supervisory authority. You can find their contact details here: https://ec.europa.eu/justice/data-protection/bodies/authorities/index_en.htm.
        <br><br>
          If you are a resident in Switzerland, the contact details for the data protection authorities are available here: https://www.edoeb.admin.ch/edoeb/en/home.html.
          <br><br>
            If you have questions or comments about your privacy rights, you may email us at admin@broadwaycity.co.uk
          <br><br>
          Account Information
          <br><br>
          If you would at any time like to review or change the information in your account or terminate your account, you can:
            <br><br>
            Log in to your account settings and update your user account.
            <br><br>
            Upon your request to terminate your account, we will deactivate or delete your account and information from our active databases. However, we may retain some information in our files to prevent fraud, troubleshoot <br>
            problems, assist with any investigations, enforce our Terms of Use and/or comply with applicable legal requirements.
            <br><br><br>
            Cookies and similar technologies: Most Web browsers are set to accept cookies by default. If you prefer, you can usually choose to set your browser to remove cookies and to reject cookies. If you choose to remove
            <br>
            cookies or reject cookies, this could affect certain features or services of our Website. To opt-out of <br>
            interest-based advertising by advertisers on our Website visit http://www.aboutads.info/choices/.
            <br><br>
            Opting out of email marketing: You can unsubscribe from our marketing email list at any time by clicking on the unsubscribe link in the emails that we send or by contacting us using the details provided below. You will then be removed from the marketing email list — however, we may still communicate with you, for example to send you service-related emails that are necessary for the administration and use of your account, to <br>
            respond to service requests, or for other non-marketing purposes. To otherwise opt-out, you may:
            <br><br>
            Access your account settings and update your preferences.
            <br><br>
            Contact us using the contact information provided.
        </div>
      </div>
    </div>
    <div class="accordion-item bg-dark  border-gold mt-2">
      <h2 class="accordion-header" id="headingEleven">
        <button class="accordion-button collapsed bg-dark text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseTwo">
        <span class="numaricaccordion">11</span>CONTROLS FOR DO-NOT-TRACK FEATURES
        </button>
      </h2>
      <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
        <div class="accordion-body bg-dark text-light border-gold text-13">
        Most web browsers and some mobile operating systems and mobile applications include a Do-Not-Track (“DNT”) feature or setting you can activate to signal your privacy preference not to have data about your online browsing activities monitored and collected. At this stage no uniform technology standard for
        <br>
        recognizing and implementing DNT signals has been finalized. As such, we do not currently respond to DNT browser signals or any other mechanism that automatically communicates your choice not to be tracked 
        <br>
        online. If a standard for online tracking is adopted that we must follow in the future, we will inform you about that practice in a revised version of this privacy notice.
       
        </div>
      </div>
    </div>
    <div class="accordion-item bg-dark  border-gold mt-2">
      <h2 class="accordion-header" id="headingTwelve">
        <button class="accordion-button collapsed bg-dark text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwo">
        <span class="numaricaccordion">12</span>DO CALIFORNIA RESIDENTS HAVE SPECIFIC PRIVACY RIGHTS?
        </button>
      </h2>
      <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve" data-bs-parent="#accordionExample">
        <div class="accordion-body bg-dark text-light border-gold text-13">
        In Short: Yes, if you are a resident of California, you are granted specific rights regarding access to your personal information.
        <br><br>
        California Civil Code Section 1798.83, also known as the “Shine The Light” law, permits our users who are California residents to request and obtain from us, once a year and free of charge, information about
        <br>
        categories of personal information (if any) we disclosed to third parties for direct marketing purposes and the names and addresses of all third parties with which we shared personal information in the immediately preceding calendar year. If you are a California resident and would like to make such a request, please submit your request in writing to us using the contact information provided below.
        <br><br>
        If you are under 18 years of age, reside in California, and have a registered account with the Website, you have the right to request removal of unwanted data that you publicly post on the Website. To request <br>
        removal of such data, please contact us using the contact information provided below, and include the email address associated with your account and a statement that you reside in California. We will make sure the data is not publicly displayed on the Website, but please be aware that the data may not be completely or comprehensively removed from all our systems (e.g. backups, etc.).
        </div>
      </div>
    </div>
 
    <div class="accordion-item bg-dark  border-gold mt-2">
      <h2 class="accordion-header" id="headingThirteen">
        <button class="accordion-button collapsed bg-dark text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseTwo">
        <span class="numaricaccordion">13</span>DO WE MAKE UPDATES TO THIS NOTICE?
        </button>
      </h2>
      <div id="collapseThirteen" class="accordion-collapse collapse" aria-labelledby="headingThirteen" data-bs-parent="#accordionExample">
        <div class="accordion-body bg-dark text-light border-gold text-13">
        In Short: Yes, we will update this notice as necessary to stay compliant with relevant laws.
        <br><br>
        We may update this privacy notice from time to time. The updated version will be indicated by an updated “Revised” date and the updated version will be effective as soon as it is accessible. If we make material
        <br>
        changes to this privacy notice, we may notify you either by prominently posting a notice of such changes or by directly sending you a notification. We encourage you to review this privacy notice frequently to be
        <br>
        informed of how we are protecting your information.
        </div>
      </div>
    </div>
    <div class="accordion-item bg-dark  border-gold mt-2">
      <h2 class="accordion-header" id="headingFourteen">
        <button class="accordion-button collapsed bg-dark text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseTwo">
        <span class="numaricaccordion">14</span>HOW CAN YOU CONTACT US ABOUT THIS NOTICE?
        </button>
      </h2>
      <div id="collapseFourteen" class="accordion-collapse collapse" aria-labelledby="headingFourteen" data-bs-parent="#accordionExample">
        <div class="accordion-body bg-dark text-light border-gold text-13">
        If you have questions or comments about this notice, you may contact our Data Protection Officer (DPO), Naveed Ahmed, by email at naveed@broadwaycity.co.uk, by phone at 03334440222, or by post to:
        <br><br>
        Broadway City UK Ltd<br>
        Naveed Ahmed <br>
        The Future Works, <br>
        2 Brunel Way <br>
        SLough, Berkshire SL1 1FQ <br>
        United Kingdom <br>
        If you are a resident in the United Kingdom, the “data controller” of your personal information is Broadway City UK Ltd . Broadway City UK Ltd has appointed Naveed Ahmed to be its representative in the UK. You can contact them directly regarding the processing of your information by Broadway City UK Ltd , by email at admin@broadwaycity.co.uk, by phone at 03334440222, or by post to:
        <br><br>
        The Future Works <br>
        2 Brunel Way <br>
        Slough, Berkshire SL1 1FQ <br>
        England
        </div>
      </div>
    </div>
    <div class="accordion-item bg-dark  border-gold mt-2">
      <h2 class="accordion-header" id="headingFifteen">
        <button class="accordion-button collapsed bg-dark text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseTwo">
        <span class="numaricaccordion">15</span>HOW CAN YOU REVIEW, UPDATE OR DELETE THE DATA WE COLLECT FROM YOU?
        </button>
      </h2>
      <div id="collapseFifteen" class="accordion-collapse collapse" aria-labelledby="headingFifteen" data-bs-parent="#accordionExample">
        <div class="accordion-body bg-dark text-light border-gold text-13">
        Based on the applicable laws of your country, you may have the right to request access to the personal
        <br>
        information we collect from you, change that information, or delete it in some circumstances. To request to review, update, or delete your personal information.
        </div>
      </div>
    </div>
 
  </div>
</div>

<!-------------------------------------------- Image Slider Section --------------------------------------------------------------->
<?php
get_template_part('imageSlider');
?>

<?php get_footer(); ?>
