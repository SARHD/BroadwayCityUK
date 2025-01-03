<form id="customForm" action="https://customtheme.local/wp-admin/admin-post.php" method="post" novalidate>
    <input type="hidden" name="action" value="faq_form_submission">
    <input type="hidden" id="faq_form_nonce" name="faq_form_nonce" value="<?php echo wp_create_nonce('faq_form_action'); ?>">
    <input type="hidden" name="_wp_http_referer" value="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>">

    <div class="form-group d-flex justify-content-center">
        <input type="text" class="from-styling" id="fullName" name="full_name" placeholder="Full Name*" required>
    </div>

    <div class="form-group d-flex justify-content-center">
        <input type="email" class="from-styling" id="email" name="email" placeholder="Email*" required>
    </div>

    <div class="form-group d-flex justify-content-center">
        <input type="text" class="from-styling" id="phone" name="phone" placeholder="Phone*" required>
    </div>

    <div class="form-group d-flex justify-content-center">
        <textarea class="from-styling" id="question" name="question" placeholder="Your Question*" required></textarea>
    </div>

    <p class="terms-text text-start w-100 text-10">
        By pressing “Submit,” you confirm that you have read and agree to the Terms of Use, acknowledge our Privacy Policy, and consent to be contacted by Broadway City UK Ltd by Email, Phone, and SMS.
    </p>

    <div class="d-flex justify-content-center">
        <button type="submit" class="btn-submit formbutton-submit">Submit</button>
    </div>
</form>
