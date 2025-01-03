<?php
/**
 * Template Name: termsOfUse
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
            <span class="display-1 text-uppercase text-white text-opacity-50">TERM</span>
        </div>

        <!-- Main content -->
        <div class="col-12 text-center position-relative">
            <h2 class="banner-heading" loading="eager loading">Terms of Use</h2>
            <h3 class="banner-subheading">Last Updated: December 24, 2021</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bcg-border.svg" alt="Border Icon" class="img-fluid"/>
        </div>
    </div>
</div>

</div>
   <!---------------------------------------------Accordion Section------------------------------------------------------------------>
   <div class="container-fluid my-5 py-5">
  <div class="accordion accordion-flush" id="accordionExample">
    <div class="accordion-item bg-dark border-gold">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button bg-dark text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <span class="numaricaccordion">1</span> Agreement to Terms
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body bg-dark text-light border-gold text-13">
        These Terms of Use constitute a legally binding agreement made between you, whether personally or on behalf of an entity (“you”) and Broadway City UK Ltd , doing business as Broadway City (“Broadway City ,” “we,” “us,” or “our”), concerning your access to and use of the https://broadwaycity.co.uk website as well as any other media form, media channel, mobile website or mobile application related, linked, or otherwise connected thereto (collectively, the “Site”). We are registered in England and have our registered office at The Future Works, , 2 Brunel Way, SLough, Berkshire SL1 1FQ. You agree that by accessing the Site, you have read, understood, and agreed to be bound by all of these Terms of Use. IF YOU DO NOT AGREE WITH ALL OF THESE TERMS OF USE, THEN YOU ARE EXPRESSLY PROHIBITED FROM USING THE SITE AND YOU MUST DISCONTINUE USE IMMEDIATELY.
        <br>
        <br>
        Supplemental terms and conditions or documents that may be posted on the Site from time to time are hereby expressly incorporated herein by reference. We reserve the right, in our sole discretion, to make changes or modifications to these Terms of Use from time to time. We will alert you about any changes by updating the “Last updated” date of these Terms of Use, and you waive any right to receive specific notice of each such change. Please ensure that you check the applicable Terms every time you use our Site so that you understand which Terms apply. You will be subject to, and will be deemed to have been made aware of and to have accepted, the changes in any revised Terms of Use by your continued use of the Site after the date such revised Terms of Use are posted. The information provided on the Site is not intended for distribution to or use by any person or entity in any jurisdiction or country where such distribution or use would be contrary to law or regulation or which would subject us to any registration requirement within such jurisdiction or country. Accordingly, those persons who choose to access the Site from other locations do so on their own initiative and are solely responsible for compliance with local laws, if and to the extent local laws are applicable. The Site is intended for users who are at least 18 years old. Persons under the age of 18 are not permitted to use or register for the Site.
        </div>
      </div>
    </div>
    <div class="accordion-item bg-dark  border-gold mt-2">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed bg-dark text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        <span class="numaricaccordion">2</span> Intellectual Property Rights
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
        <div class="accordion-body bg-dark text-light border-gold text-13">
        Unless otherwise indicated, the Site is our proprietary property and all source code, databases, functionality, software, website designs, audio, video, text, photographs, and graphics on the Site (collectively, the “Content”) and the trademarks, service marks, and logos contained therein (the “Marks”) are owned or controlled by us or licensed to us, and are protected by copyright and trademark laws and various other intellectual property rights and unfair competition laws of the United States, international copyright laws, and international conventions. The Content and the Marks are provided on the Site “AS IS” for your information and personal use only. Except as expressly provided in these Terms of Use, no part of the Site and no Content or Marks may be copied, reproduced, aggregated, republished, uploaded, posted, publicly displayed, encoded, translated, transmitted, distributed, sold, licensed, or otherwise exploited for any commercial purpose whatsoever, without our express prior written permission. Provided that you are eligible to use the Site, you are granted a limited license to access and use the Site and to download or print a copy of any portion of the Content to which you have properly gained access solely for your personal, non-commercial use. We reserve all rights not expressly granted to you in and to the Site, the Content and the Marks.
        </div>
      </div>
    </div>
    <div class="accordion-item bg-dark  border-gold mt-2">
      <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed bg-dark text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseTwo">
        <span class="numaricaccordion">3</span> User Representations
        </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
        <div class="accordion-body bg-dark text-light border-gold text-13">
        By using the Site, you represent and warrant that: (1) all registration information you submit will be true, accurate, current, and complete; (2) you will maintain the accuracy of such information and promptly update such registration information as necessary; (3) you have the legal capacity and you agree to comply with these Terms of Use; (4) you are not a minor in the jurisdiction in which you reside; (5) you will not access the Site through automated or non-human means, whether through a bot, script, or otherwise; (6) you will not use the Site for any illegal or unauthorized purpose; and (7) your use of the Site will not violate any applicable law or regulation. If you provide any information that is untrue, inaccurate, not current, or incomplete, we have the right to suspend or terminate your account and refuse any and all current or future use of the Site (or any portion thereof).
        </div>
      </div>
    </div>
    <div class="accordion-item bg-dark  border-gold mt-2">
      <h2 class="accordion-header" id="headingFour">
        <button class="accordion-button collapsed bg-dark text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseTwo">
        <span class="numaricaccordion">4</span> User Registration
        </button>
      </h2>
      <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
        <div class="accordion-body bg-dark text-light border-gold text-13">
        You may be required to register with the Site. You agree to keep your password confidential and will be responsible for all use of your account and password. We reserve the right to remove, reclaim, or change a username you select if we determine, in our sole discretion, that such username is inappropriate, obscene, or otherwise objectionable.
        </div>
      </div>
    </div>
    <div class="accordion-item bg-dark  border-gold mt-2">
      <h2 class="accordion-header" id="headingFive">
        <button class="accordion-button collapsed bg-dark text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseTwo">
        <span class="numaricaccordion">5</span> Prohibited Activities
        </button>
      </h2>
      <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
        <div class="accordion-body bg-dark text-light border-gold text-13">
        You may not access or use the Site for any purpose other than that for which we make the Site available. The Site may not be used in connection with any commercial endeavors except those that are specifically endorsed or approved by us. As a user of the Site, you agree not to:
         <br><br>
         Systematically retrieve data or other content from the Site to create or compile, directly or indirectly, a collection, compilation, database, or directory without written permission from us. <br>
         Trick, defraud, or mislead us and other users, especially in any attempt to learn sensitive account information such as user passwords. <br>
         Circumvent, disable, or otherwise interfere with security-related features of the Site, including features that prevent or restrict the use or copying of <br>
         any Content or enforce limitations on the use of the Site and/or the Content contained therein. <br>
         Disparage, tarnish, or otherwise harm, in our opinion, us and/or the Site. <br>
         Use any information obtained from the Site in order to harass, abuse, or harm another person. <br>
         Make improper use of our support services or submit false reports of abuse or misconduct. <br>
         Use the Site in a manner inconsistent with any applicable laws or regulations. <br>
         Engage in unauthorized framing of or linking to the Site. <br>
         Upload or transmit (or attempt to upload or to transmit) viruses, Trojan horses, or other material, including excessive use of capital letters and <br>
         spamming (continuous posting of repetitive text), that interferes with any party’s uninterrupted use and enjoyment of the Site or modifies, impairs, <br>
         disrupts, alters, or interferes with the use, features, functions, operation, or maintenance of the Site. <br>
         Engage in any automated use of the system, such as using scripts to send comments or messages, or using any data mining, robots, or similar data <br>
         gathering and extraction tools. <br>
         Delete the copyright or other proprietary rights notice from any Content. <br>
         Attempt to impersonate another user or person or use the username of another user. <br>
         Upload or transmit (or attempt to upload or to transmit) any material that acts as a passive or active information collection or transmission mechanism, <br>
         including without limitation, clear graphics interchange formats (“gifs”), 1×1 pixels, web bugs, cookies, or other similar devices (sometimes referred to <br>
         as “spyware” or “passive collection mechanisms” or “pcms”). <br>
         Interfere with, disrupt, or create an undue burden on the Site or the networks or services connected to the Site. <br>
         Harass, annoy, intimidate, or threaten any of our employees or agents engaged in providing any portion of the Site to you. <br>
         Attempt to bypass any measures of the Site designed to prevent or restrict access to the Site, or any portion of the Site. <br>
         Copy or adapt the Site’s software, including but not limited to Flash, PHP, HTML, JavaScript, or other code.
         <br>
         Except as permitted by applicable law, decipher, decompile, disassemble, or reverse engineer any of the software comprising or in any way making up a <br>
         part of the Site. <br>
         Except as may be the result of standard search engine or Internet browser usage, use, launch, develop, or distribute any automated system, including <br>
         without limitation, any spider, robot, cheat utility, scraper, or offline reader that accesses the Site, or using or launching any unauthorized script or <br>
         other software. <br>
         Use a buying agent or purchasing agent to make purchases on the Site. <br>
         Make any unauthorized use of the Site, including collecting usernames and/or email addresses of users by electronic or other means for the purpose <br>
         of sending unsolicited email, or creating user accounts by automated means or under false pretenses. <br>
         Use the Site as part of any effort to compete with us or otherwise use the Site and/or the Content for any revenue-generating endeavor or commercial <br>
         enterprise. <br>
         Use the Site to advertise or offer to sell goods and services. <br>
         Sell or otherwise transfer your profile.

        </div>
      </div>
    </div>
    <div class="accordion-item bg-dark  border-gold mt-2">
      <h2 class="accordion-header" id="headingSix">
        <button class="accordion-button collapsed bg-dark text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseTwo">
        <span class="numaricaccordion">6</span> User Generated Contributions
        </button>
      </h2>
      <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
        <div class="accordion-body bg-dark text-light border-gold text-13">
        The Site does not offer users to submit or post content. We may provide you with the opportunity to create, submit, post, display, transmit, perform, publish, distribute, or broadcast content and materials to us or on the Site, including but not limited to text, writings, video, audio, photographs, graphics, comments, suggestions, or personal information or other material (collectively, “Contributions”). Contributions may be viewable by other users of the Site and through third-party websites. As such, any Contributions you transmit may be treated in accordance with the Site Privacy Policy. When you create or make available any Contributions, you thereby represent and warrant that: 
        <br> <br>
        The creation, distribution, transmission, public display, or performance, and the accessing, downloading, or copying of your Contributions do not and will not infringe the proprietary rights, including but not limited to the copyright, patent, trademark, trade secret, or moral rights of any third party.
You are the creator and owner of or have the necessary licenses, rights, consents, releases, and permissions to use and to authorize us, the Site, and other users of the Site to use your Contributions in any manner contemplated by the Site and these Terms of Use. <br>
You have the written consent, release, and/or permission of each and every identifiable individual person in your Contributions to use the name or likeness of each and every such identifiable individual person to enable inclusion and use of your Contributions in any manner contemplated by the Site and these Terms of Use. <br>
Your Contributions are not false, inaccurate, or misleading. <br>
Your Contributions are not unsolicited or unauthorized advertising, promotional materials, pyramid schemes, chain letters, spam, mass mailings, or other forms of solicitation. <br>
Your Contributions are not obscene, lewd, lascivious, filthy, violent, harassing, libelous, slanderous, or otherwise objectionable (as determined by us).
Your Contributions do not ridicule, mock, disparage, intimidate, or abuse anyone. <br>
Your Contributions are not used to harass or threaten (in the legal sense of those terms) any other person and to promote violence against a specific person or class of people. <br>
Your Contributions do not violate any applicable law, regulation, or rule. <br>
Your Contributions do not violate the privacy or publicity rights of any third party. <br>
Your Contributions do not violate any applicable law concerning child pornography, or otherwise intended to protect the health or well-being of minors.
Your Contributions do not include any offensive comments that are connected to race, national origin, gender, sexual preference, or physical handicap.
Your Contributions do not otherwise violate, or link to material that violates, any provision of these Terms of Use, or any applicable law or regulation.
Any use of the Site in violation of the foregoing violates these Terms of Use and may result in, among other things, termination or suspension of your rights to use the Site.
        </div>
      </div>
    </div>
    <div class="accordion-item bg-dark  border-gold mt-2">
      <h2 class="accordion-header" id="headingSeven">
        <button class="accordion-button collapsed bg-dark text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseTwo">
        <span class="numaricaccordion">7</span> Contribution License
        </button>
      </h2>
      <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
        <div class="accordion-body bg-dark text-light border-gold text-13">
        You and the Site agree that we may access, store, process, and use any information and personal data that you provide following the terms of the Privacy Policy and your choices (including settings). By submitting suggestions or other feedback regarding the Site, you agree that we can use and share such feedback for any purpose without compensation to you. We do not assert any ownership over your Contributions. You retain full
        <br>
        ownership of all of your Contributions and any intellectual property rights or other proprietary rights associated with your Contributions. We are not liable for any statements or representations in your Contributions provided by you in any area on the Site. You are solely responsible for your Contributions to the Site and you expressly agree to exonerate us from any and all responsibility and to refrain from any legal action against us regarding your Contributions.
        <br><br>
        </div>
      </div>
    </div>
    <div class="accordion-item bg-dark  border-gold mt-2">
      <h2 class="accordion-header" id="headingEight">
        <button class="accordion-button collapsed bg-dark text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseTwo">
        <span class="numaricaccordion">8</span>Social Media
        </button>
      </h2>
      <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
        <div class="accordion-body bg-dark text-light border-gold text-13">
       As part of the functionality of the Site, you may link your account with online accounts you have with third-party service providers (each such account, a “Third-Party Account”) by either: (1) providing your Third-Party Account login information through the Site; or (2) allowing us to access your Third-Party Account, as is permitted under the applicable terms and conditions that govern your use of each Third-Party Account. You represent and warrant that you are entitled to disclose your Third-Party Account login information to us and/or grant us access to your Third-Party Account, without breach by you of any of the terms and conditions that govern your use of the applicable Third-Party Account, and without obligating us to pay any fees or making us subject to any usage limitations imposed by the third-party service provider of the Third-Party Account. By granting us access to any Third-Party Accounts, you understand that (1) we may access, make available, and store (if applicable) any content that you have provided to and stored in your Third-Party Account (the “Social Network Content”) so that it is available on and through the Site via your account, including without limitation any friend lists and (2) we may submit to and receive from your Third-Party Account additional information to the extent you are notified when you link your account with the Third-Party Account. Depending on the Third-Party Accounts you choose and subject to the privacy settings that you have set in such Third-Party Accounts, personally identifiable information that you post to your Third-Party Accounts may be available on and through your account on the Site. Please note that if a Third-Party Account or associated service becomes unavailable or our access to such Third Party Account is terminated by the third-party service provider, then Social Network Content may no longer be available on and through the Site. You will have the ability to disable the connection between your account on the Site and your Third-Party Accounts at any time. PLEASE NOTE THAT YOUR RELATIONSHIP WITH THE THIRD-PARTY SERVICE PROVIDERS ASSOCIATED WITH YOUR THIRD-PARTY ACCOUNTS IS GOVERNED SOLELY BY YOUR AGREEMENT(S) WITH SUCH THIRD-PARTY SERVICE PROVIDERS. We make no effort to review any Social Network Content for any purpose, including but not limited to, for accuracy, legality, or non-infringement, and we are not responsible for any Social Network Content. You acknowledge and agree that we may access your email address book associated with a Third-Party Account and your contacts list stored on your mobile device or tablet computer solely for purposes of identifying and informing you of those contacts who have also registered to use the Site. You can deactivate the connection between the Site and your Third-Party Account by contacting us using the contact information below or through your account settings (if applicable). We will attempt to delete any information stored on our servers that was obtained through such Third-Party Account, except the username and profile picture that become associated with your account.
        </div>
      </div>
    </div>
    <div class="accordion-item bg-dark  border-gold mt-2">
      <h2 class="accordion-header" id="headingNine">
        <button class="accordion-button collapsed bg-dark text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseTwo">
        <span class="numaricaccordion">9</span> Submissions
        </button>
      </h2>
      <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
        <div class="accordion-body bg-dark text-light border-gold text-13">
        You acknowledge and agree that any questions, comments, suggestions, ideas, feedback, or other information regarding the Site (“Submissions”) provided by you to us are non-confidential and shall become our sole property. We shall own exclusive rights, including all intellectual property rights, and shall be entitled to the unrestricted use and dissemination of these Submissions for any lawful purpose, commercial or otherwise, without <br>
        acknowledgment or compensation to you. You hereby waive all moral rights to any such Submissions, and you hereby warrant that any such Submissions are original with you or that you have the right to submit such Submissions. You agree there shall be no recourse against us for any alleged or actual infringement or misappropriation of any proprietary right in your Submissions.

         <?php echo '<a href="https://gda.gov.pk/noc/" target="_blank">Gwadar Development Authority (gda.gov.pk)</a>';?>
        </div>
      </div>
    </div>
    <div class="accordion-item bg-dark  border-gold mt-2">
      <h2 class="accordion-header" id="headingTen">
        <button class="accordion-button collapsed bg-dark text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTwo">
        <span class="numaricaccordion">10</span> Third-Party Website And Content
        </button>
      </h2>
      <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
        <div class="accordion-body bg-dark text-light border-gold text-13">
        The Site may contain (or you may be sent via the Site) links to other websites (“Third-Party Websites”) as well as articles, photographs, text, graphics, pictures, designs, music, sound, video, information, applications, software, and other content or items belonging to or originating from third parties (“Third-Party Content”). Such Third-Party Websites and Third-Party Content are not investigated, monitored, or checked for accuracy, <br>
        appropriateness, or completeness by us, and we are not responsible for any Third-Party Websites accessed through the Site or any Third-Party Content posted on, available through, or installed from the Site, including the content, accuracy, offensiveness, opinions, reliability, privacy practices, or other policies of or contained in the Third-Party Websites or the Third-Party Content. Inclusion of, linking to, or permitting the use or installation of any Third-Party Websites or any Third-Party Content does not imply approval or endorsement thereof by us. If you decide to leave the Site and access the Third-Party Websites or to use or install any Third-Party Content, you do so at your own risk, and you should be aware these Terms of Use no longer govern. You should review the applicable terms and policies, including privacy and data gathering practices, of any website to which you navigate from the Site or relating to any applications you use or install from the Site. Any purchases you make through Third-Party Websites will be through other websites and from other companies, and we take no responsibility whatsoever in relation to such purchases which are exclusively between you and the applicable third party. You agree and acknowledge that we do not endorse the products or services offered on Third-Party Websites and you shall hold us harmless from any harm caused by your purchase of such products or services. Additionally, you shall hold us harmless from any losses sustained by you or harm caused to you relating to or resulting in any way from any Third-Party Content or any contact with Third-Party Websites
        </div>
      </div>
    </div>
    <div class="accordion-item bg-dark  border-gold mt-2">
      <h2 class="accordion-header" id="headingEleven">
        <button class="accordion-button collapsed bg-dark text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseTwo">
        <span class="numaricaccordion">11</span> Site Management
        </button>
      </h2>
      <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
        <div class="accordion-body bg-dark text-light border-gold text-13">
        We reserve the right, but not the obligation, to: (1) monitor the Site for violations of these Terms of Use; (2) take appropriate legal action against anyone who, in our sole discretion, violates the law or these Terms of Use, including without limitation, reporting such user to law enforcement authorities; (3) in our sole discretion and without limitation, refuse, restrict access to, limit the availability of, or disable (to the extent technologically feasible) any of your Contributions or any portion thereof; (4) in our sole discretion and without limitation, notice, or liability, to remove from the Site or otherwise disable all files and content that are excessive in size or are in any way burdensome to our systems; and (5) otherwise manage the Site in a manner designed to protect our rights and property and to facilitate the proper functioning of the Site.
        </div>
      </div>
    </div>
    <div class="accordion-item bg-dark  border-gold mt-2">
      <h2 class="accordion-header" id="headingTwelve">
        <button class="accordion-button collapsed bg-dark text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwo">
        <span class="numaricaccordion">12</span> Privacy Policy
        </button>
      </h2>
      <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve" data-bs-parent="#accordionExample">
        <div class="accordion-body bg-dark text-light border-gold text-13">
        We care about data privacy and security. By using the Site, you agree to be bound by our Privacy Policy posted on the Site, which is incorporated into these Terms of Use. Please be advised the Site is hosted in the United Kingdom. If you access the Site from any other region of the world with laws or other requirements governing personal data collection, use, or disclosure that differ from applicable laws in the United Kingdom, then through your continued use of the Site, you are transferring your data to the United Kingdom, and you agree to have your data transferred to and processed in the United Kingdom.
        </div>
      </div>
    </div>
    <div class="accordion-item bg-dark  border-gold mt-2">
      <h2 class="accordion-header" id="headingThirteen">
        <button class="accordion-button collapsed bg-dark text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseTwo">
        <span class="numaricaccordion">13</span>Term And Termination
        </button>
      </h2>
      <div id="collapseThirteen" class="accordion-collapse collapse" aria-labelledby="headingThirteen" data-bs-parent="#accordionExample">
        <div class="accordion-body bg-dark text-light border-gold text-13">
        These Terms of Use shall remain in full force and effect while you use the Site. WITHOUT LIMITING ANY OTHER PROVISION OF THESE TERMS OF USE, WE RESERVE THE RIGHT TO, IN OUR SOLE <br> DISCRETION AND WITHOUT NOTICE OR LIABILITY, DENY ACCESS TO AND USE OF THE SITE (INCLUDING BLOCKING CERTAIN IP ADDRESSES), TO ANY PERSON FOR ANY REASON OR FOR NO REASON, INCLUDING WITHOUT LIMITATION FOR BREACH OF ANY REPRESENTATION, <br>WARRANTY, OR COVENANT CONTAINED IN THESE TERMS OF USE OR OF ANY APPLICABLE LAW OR REGULATION. WE MAY TERMINATE YOUR USE OR PARTICIPATION IN THE SITE OR DELETE YOUR ACCOUNT AND ANY CONTENT OR INFORMATION THAT YOU POSTED AT ANY TIME, <br> WITHOUT WARNING, IN OUR SOLE DISCRETION. If we terminate or suspend your account for any reason, you are prohibited from registering and creating a new account under your name, a fake or <br> borrowed name, or the name of any third party, even if you may be acting on behalf of the third party. In addition to terminating or suspending your account, we reserve the right to take appropriate legal action, including without limitation pursuing civil, criminal, and injunctive redress.
        </div>
      </div>
    </div>
    <div class="accordion-item bg-dark  border-gold mt-2">
      <h2 class="accordion-header" id="headingFourteen">
        <button class="accordion-button collapsed bg-dark text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseTwo">
        <span class="numaricaccordion">14</span>Modifications And Interruptions
        </button>
      </h2>
      <div id="collapseFourteen" class="accordion-collapse collapse" aria-labelledby="headingFourteen" data-bs-parent="#accordionExample">
        <div class="accordion-body bg-dark text-light border-gold text-13">
        We reserve the right to change, modify, or remove the contents of the Site at any time or for any reason at our sole discretion without notice. However, we have no obligation to update any information on our Site. We also reserve the right to modify or discontinue all or part of the Site without notice at any time. We will not be liable to you or any third party for any modification, price change, suspension, or discontinuance of the Site. We cannot guarantee the Site will be available at all times. We may experience hardware, software, or other problems or need to perform maintenance related to the Site, resulting in interruptions, delays, or errors. We reserve the right to change, revise, update, suspend, discontinue, or otherwise modify the Site at any time or for any reason without notice to you. You agree that we have no liability whatsoever for any loss, damage, or inconvenience caused by your inability to access or use the Site during any downtime or discontinuance of the Site. Nothing in these Terms of Use will be construed to obligate us to maintain and support the Site or to supply any corrections, updates, or releases in connection therewith.
        </div>
      </div>
    </div>
    <div class="accordion-item bg-dark  border-gold mt-2">
      <h2 class="accordion-header" id="headingFifteen">
        <button class="accordion-button collapsed bg-dark text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseTwo">
        <span class="numaricaccordion">15</span>Governing Law
        </button>
      </h2>
      <div id="collapseFifteen" class="accordion-collapse collapse" aria-labelledby="headingFifteen" data-bs-parent="#accordionExample">
        <div class="accordion-body bg-dark text-light border-gold text-13">
        These conditions are governed by and interpreted following the laws of the United Kingdom, and the use of the United Nations Convention of Contracts for the International Sale of Goods is expressly excluded. If your habitual residence is in the EU, and you are a consumer, you additionally possess the protection provided to you by obligatory provisions of the law of your country of residence. Broadway City UK Ltd and yourself both agree to submit to the non-exclusive jurisdiction of the courts of England & Wales , which means that you may make a claim to defend your consumer protection rights in regards to these Conditions of Use in the United Kingdom, or in the EU country in which you reside.
        </div>
      </div>
    </div>
    <div class="accordion-item bg-dark  border-gold mt-2">
      <h2 class="accordion-header" id="headingSixteen">
        <button class="accordion-button collapsed bg-dark text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSixteen" aria-expanded="false" aria-controls="collapseTwo">
        <span class="numaricaccordion">16</span>Dispute Resolution
        </button>
      </h2>
      <div id="collapseSixteen" class="accordion-collapse collapse" aria-labelledby="headingSixteen" data-bs-parent="#accordionExample">
        <div class="accordion-body bg-dark text-light border-gold text-13">
        Informal Negotiations To expedite resolution and control the cost of any dispute, controversy, or claim related to these Terms of Use (each “Dispute” and collectively, the “Disputes”) brought by either you or us (individually, a “Party” and collectively, the “Parties”), the Parties agree to first attempt to negotiate any Dispute (except those Disputes expressly provided below) informally for at least thirty (30) days before initiating arbitration. Such informal negotiations commence upon written notice from one Party to the other Party.
        <br><br>
        Binding Arbitration <br>
        Any dispute arising from the relationships between the Parties to this contract shall be determined by one arbitrator who will be chosen in accordance with the Arbitration and Internal Rules of the European Court of Arbitration being part of the European Centre of Arbitration having its seat in Strasbourg, and which are in force at the time the application for arbitration is filed, and of which adoption of this clause constitutes <br>
        acceptance. The seat of arbitration shall be london, United Kingdom. The language of the proceedings shall be English. Applicable rules of substantive law shall be the law of the United Kingdom.
        <br><br>
        Restrictions <br>
        The Parties agree that any arbitration shall be limited to the Dispute between the Parties individually. To the full extent permitted by law, (a) no arbitration shall be joined with any other proceeding; (b) there is no right or authority for any Dispute to be arbitrated on a class-action basis or to utilize class action procedures; and (c) there is no right or authority for any Dispute to be brought in a purported representative capacity on <br>
        behalf of the general public or any other persons.
        <br><br>
        Exceptions to Informal Negotiations and Arbitration <br>
        The Parties agree that the following Disputes are not subject to the above provisions concerning informal negotiations and binding arbitration: (a) any Disputes seeking to enforce or protect, or concerning the validity of, any of the intellectual property rights of a Party; (b) any Dispute related to, or arising from, allegations of theft, piracy, invasion of privacy, or unauthorized use; and (c) any claim for injunctive relief. If this provision is found to be illegal or unenforceable, then neither Party will elect to arbitrate any Dispute falling within that portion of this provision found to be illegal or unenforceable and such Dispute shall be decided by a court of competent jurisdiction within the courts listed for jurisdiction above, and the Parties agree to submit to the personal jurisdiction of that court.


        </div>
      </div>
    </div>
    <div class="accordion-item bg-dark  border-gold mt-2">
      <h2 class="accordion-header" id="headingSeventeen">
        <button class="accordion-button collapsed bg-dark text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeventeen" aria-expanded="false" aria-controls="collapseTwo">
        <span class="numaricaccordion">17</span>Corrections
        </button>
      </h2>
      <div id="collapseSeventeen" class="accordion-collapse collapse" aria-labelledby="headingSeventeen" data-bs-parent="#accordionExample">
        <div class="accordion-body bg-dark text-light border-gold text-13">
        There may be information on the Site that contains typographical errors, inaccuracies, or omissions, <br>
        including descriptions, pricing, availability, and various other information. We reserve the right to correct any errors, inaccuracies, or omissions and to change or update the information on the Site at any time, without prior notice.


        </div>
      </div>
    </div>
    <div class="accordion-item bg-dark  border-gold mt-2">
      <h2 class="accordion-header" id="headingEighteen">
        <button class="accordion-button collapsed bg-dark text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEighteen" aria-expanded="false" aria-controls="collapseTwo">
        <span class="numaricaccordion">18</span>Disclaimer
        </button>
      </h2>
      <div id="collapseEighteen" class="accordion-collapse collapse" aria-labelledby="headingEighteen" data-bs-parent="#accordionExample">
        <div class="accordion-body bg-dark text-light border-gold text-13">
        THE SITE IS PROVIDED ON AN AS-IS AND AS-AVAILABLE BASIS. YOU AGREE THAT YOUR USE OF THE SITE AND OUR SERVICES WILL BE AT YOUR SOLE RISK. TO THE FULLEST EXTENT <br>
        PERMITTED BY LAW, WE DISCLAIM ALL WARRANTIES, EXPRESS OR IMPLIED, IN CONNECTION WITH THE SITE AND YOUR USE THEREOF, INCLUDING, WITHOUT LIMITATION, THE IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, AND NON-INFRINGEMENT. WE MAKE NO WARRANTIES OR REPRESENTATIONS ABOUT THE ACCURACY OR COMPLETENESS OF THE SITE’S CONTENT OR THE CONTENT OF ANY WEBSITES LINKED TO THE SITE AND WE WILL ASSUME NO LIABILITY OR RESPONSIBILITY FOR ANY (1) ERRORS, MISTAKES, OR INACCURACIES OF CONTENT AND MATERIALS, (2) PERSONAL INJURY OR PROPERTY <br>
        DAMAGE, OF ANY NATURE WHATSOEVER, RESULTING FROM YOUR ACCESS TO AND USE OF THE SITE, (3) ANY UNAUTHORIZED ACCESS TO OR USE OF OUR SECURE SERVERS AND/OR ANY AND ALL PERSONAL INFORMATION AND/OR FINANCIAL INFORMATION STORED THEREIN, (4) ANY INTERRUPTION OR CESSATION OF TRANSMISSION TO OR FROM THE SITE, (5) ANY BUGS, VIRUSES, TROJAN HORSES, OR THE LIKE WHICH MAY BE TRANSMITTED TO OR THROUGH THE SITE BY ANY THIRD PARTY, AND/OR (6) ANY ERRORS OR OMISSIONS IN ANY CONTENT AND MATERIALS OR FOR ANY LOSS OR DAMAGE OF ANY KIND INCURRED AS A RESULT OF THE USE OF ANY CONTENT POSTED, TRANSMITTED, OR OTHERWISE MADE AVAILABLE VIA THE SITE. WE DO NOT WARRANT, ENDORSE, GUARANTEE, OR ASSUME RESPONSIBILITY FOR ANY PRODUCT OR SERVICE ADVERTISED OR OFFERED BY A THIRD PARTY THROUGH THE SITE, ANY <br>
        HYPERLINKED WEBSITE, OR ANY WEBSITE OR MOBILE APPLICATION FEATURED IN ANY BANNER OR OTHER ADVERTISING, AND WE WILL NOT BE A PARTY TO OR IN ANY WAY BE RESPONSIBLE FOR MONITORING ANY TRANSACTION BETWEEN YOU AND ANY THIRD-PARTY PROVIDERS OF PRODUCTS OR SERVICES. AS WITH THE PURCHASE OF A PRODUCT OR SERVICE THROUGH ANY MEDIUM OR IN ANY ENVIRONMENT, YOU SHOULD USE YOUR BEST JUDGMENT AND EXERCISE CAUTION WHERE APPROPRIATE.
        </div>
      </div>
    </div>
    <div class="accordion-item bg-dark  border-gold mt-2">
      <h2 class="accordion-header" id="headingNineteen">
        <button class="accordion-button collapsed bg-dark text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNineteen" aria-expanded="false" aria-controls="collapseTwo">
        <span class="numaricaccordion">19</span>Limitations Of Liability
        </button>
      </h2>
      <div id="collapseNineteen" class="accordion-collapse collapse" aria-labelledby="headingNineteen" data-bs-parent="#accordionExample">
        <div class="accordion-body bg-dark text-light border-gold text-13">
        IN NO EVENT WILL WE OR OUR DIRECTORS, EMPLOYEES, OR AGENTS BE LIABLE TO YOU OR ANY THIRD PARTY FOR ANY DIRECT, INDIRECT, CONSEQUENTIAL, EXEMPLARY, INCIDENTAL, <br>
        SPECIAL, OR PUNITIVE DAMAGES, INCLUDING LOST PROFIT, LOST REVENUE, LOSS OF DATA, OR OTHER DAMAGES ARISING FROM YOUR USE OF THE SITE, EVEN IF WE HAVE BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES. NOTWITHSTANDING ANYTHING TO THE CONTRARY <br>
        CONTAINED HEREIN, OUR LIABILITY TO YOU FOR ANY CAUSE WHATSOEVER AND REGARDLESS OF THE FORM OF THE ACTION, WILL AT ALL TIMES BE LIMITED TO THE LESSER OF THE AMOUNT PAID, IF ANY, BY YOU TO US DURING THE ZERO (0) MONTH PERIOD PRIOR TO ANY CAUSE OF ACTION ARISING OR $1.00 USD. CERTAIN US STATE LAWS AND INTERNATIONAL LAWS DO NOT ALLOW LIMITATIONS ON IMPLIED WARRANTIES OR THE EXCLUSION OR LIMITATION OF CERTAIN DAMAGES. IF THESE LAWS APPLY TO YOU, SOME OR ALL OF THE ABOVE DISCLAIMERS OR LIMITATIONS MAY NOT APPLY TO YOU, AND YOU MAY HAVE ADDITIONAL RIGHTS.
        </div>
      </div>
    </div>
    <div class="accordion-item bg-dark  border-gold mt-2">
      <h2 class="accordion-header" id="headingTwenty">
        <button class="accordion-button collapsed bg-dark text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwenty" aria-expanded="false" aria-controls="collapseTwo">
        <span class="numaricaccordion">20</span>Indemnification
        </button>
      </h2>
      <div id="collapseTwenty" class="accordion-collapse collapse" aria-labelledby="headingTwenty" data-bs-parent="#accordionExample">
        <div class="accordion-body bg-dark text-light border-gold text-13">
        You agree to defend, indemnify, and hold us harmless, including our subsidiaries, affiliates, and all of our respective officers, agents, partners, and employees, from and against any loss, damage, liability, claim, or demand, including reasonable attorneys’ fees and expenses, made by any third party due to or arising out of: (1) use of the Site; (2) breach of these Terms of Use; (3) any breach of your representations and <br>
        warranties set forth in these Terms of Use; (4) your violation of the rights of a third party, including but not limited to intellectual property rights; or (5) any overt harmful act toward any other user of the Site with whom you connected via the Site. Notwithstanding the foregoing, we reserve the right, at your expense, to assume the exclusive defense and control of any matter for which you are required to indemnify us, and you agree to cooperate, at your expense, with our defense of such claims. We will use reasonable efforts to notify you of any such claim, action, or proceeding which is subject to this indemnification upon becoming<br>aware of it.
        </div>
      </div>
    </div>
    <div class="accordion-item bg-dark  border-gold mt-2">
      <h2 class="accordion-header" id="headingTwentyOne">
        <button class="accordion-button collapsed bg-dark text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentyOne" aria-expanded="false" aria-controls="collapseTwo">
        <span class="numaricaccordion">21</span>User Data
        </button>
      </h2>
      <div id="collapseTwentyOne" class="accordion-collapse collapse" aria-labelledby="headingTwentyOne" data-bs-parent="#accordionExample">
        <div class="accordion-body bg-dark text-light border-gold text-13">
        We will maintain certain data that you transmit to the Site for the purpose of managing the performance of the Site, as well as data relating to your use of the Site. Although we perform regular routine backups of data, you are solely responsible for all data that you transmit or that relates to any activity you have <br>
        undertaken using the Site. You agree that we shall have no liability to you for any loss or corruption of any such data, and you hereby waive any right of action against us arising from any such loss or corruption of such data.<br>
        </div>
      </div>
    </div>
    <div class="accordion-item bg-dark  border-gold mt-2">
      <h2 class="accordion-header" id="headingTwentyTwo">
        <button class="accordion-button collapsed bg-dark text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentyTwo" aria-expanded="false" aria-controls="collapseTwo">
        <span class="numaricaccordion">22</span>Electronic Communications, Transactions, And Signatures
        </button>
      </h2>
      <div id="collapseTwentyTwo" class="accordion-collapse collapse" aria-labelledby="headingTwentyTwo" data-bs-parent="#accordionExample">
        <div class="accordion-body bg-dark text-light border-gold text-13">
        Visiting the Site, sending us emails, and completing online forms constitute electronic communications. You consent to receive electronic communications, and you agree that all agreements, notices, disclosures, and other communications we provide to you electronically, via email and on the Site, satisfy any legal <br>
        requirement that such communication be in writing. YOU HEREBY AGREE TO THE USE OF ELECTRONIC SIGNATURES, CONTRACTS, ORDERS, AND OTHER RECORDS, AND TO ELECTRONIC DELIVERY OF NOTICES, POLICIES, AND RECORDS OF TRANSACTIONS INITIATED OR COMPLETED BY US OR VIA THE SITE. You hereby waive any rights or requirements under any statutes, regulations, rules, ordinances, or other laws in any jurisdiction which require an original signature or delivery or retention of non-electronic records, or to payments or the granting of credits by any means other than electronic means.
        </div>
      </div>
    </div>
    <div class="accordion-item bg-dark  border-gold mt-2">
      <h2 class="accordion-header" id="headingTwentyThree">
        <button class="accordion-button collapsed bg-dark text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentyThree" aria-expanded="false" aria-controls="collapseTwo">
        <span class="numaricaccordion">23</span>Miscellaneous
        </button>
      </h2>
      <div id="collapseTwentyThree" class="accordion-collapse collapse" aria-labelledby="headingTwentyThree" data-bs-parent="#accordionExample">
        <div class="accordion-body bg-dark text-light border-gold text-13">
        These Terms of Use and any policies or operating rules posted by us on the Site or in respect to the Site constitute the entire agreement and understanding between you and us. Our failure to exercise or enforce any right or provision of these Terms of Use shall not operate as a waiver of such right or provision. These Terms of Use operate to the fullest extent permissible by law. We may assign any or all of our rights and obligations to others at any time. We shall not be responsible or liable for any loss, damage, delay, or failure to act caused by any cause beyond our reasonable control. If any provision or part of a provision of these Terms of Use is determined to be unlawful, void, or unenforceable, that provision or part of the provision is deemed severable from these Terms of Use and does not affect the validity and enforceability of any remaining provisions. There is no joint venture, partnership, employment or agency relationship created between you and us as a result of these Terms of Use or use of the Site. You agree that these Terms of Use will not be construed against us by virtue of having drafted them. You hereby waive any and all defenses you may have based on the electronic form of these Terms of Use and the lack of signing by the parties hereto to execute these Terms of Use.
        </div>
      </div>
    </div>
    <div class="accordion-item bg-dark  border-gold mt-2">
      <h2 class="accordion-header" id="headingTwentyFour">
        <button class="accordion-button collapsed bg-dark text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentyFour" aria-expanded="false" aria-controls="collapseTwo">
        <span class="numaricaccordion">24</span>Contact Us
        </button>
      </h2>
      <div id="collapseTwentyFour" class="accordion-collapse collapse" aria-labelledby="headingTwentyFour" data-bs-parent="#accordionExample">
        <div class="accordion-body bg-dark text-light border-gold text-13">
        In order to resolve a complaint regarding the Site or to receive further information regarding use of the Site, please contact us at: <br>
        Broadway City UK Ltd <br>
        The Future Works, <br>
        2 Brunel Way <br>
        SLough, Berkshire SL1 1FQ, England <br>
        Phone: 03334440222 <br>
        admin@broadwaycity.co.uk
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
