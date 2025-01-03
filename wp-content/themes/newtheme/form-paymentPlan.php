<div class="container-fluid my-5 w-100 w-md-50 mw-550">
    <form id="customForm" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post" enctype="multipart/form-data" novalidate>
        <input type="hidden" name="action" value="custom_form_submission">
        <input type="hidden" id="custom_form_nonce" name="custom_form_nonce" value="<?php echo wp_create_nonce('custom_form_action'); ?>">
        <input type="hidden" name="_wp_http_referer" value="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>">

        <div class="form-group d-flex justify-content-center">
            <input type="text" class="from-styling" id="firstName" name="first_name" placeholder="First Name*" required>
        </div>

        <div class="form-group d-flex justify-content-center">
            <input type="text" class="from-styling" id="lastName" name="last_name" placeholder="Last Name*" required>
        </div>

        <div class="form-group d-flex justify-content-center">
            <input type="text" class="from-styling" id="phone" name="phone" placeholder="Phone*" required>
        </div>

        <div class="form-group d-flex justify-content-center">
            <input type="email" class="from-styling" id="email" name="email" placeholder="Email*" required>
        </div>

        <p class="terms-text text-start w-100 text-10">
            By pressing “Submit”, you confirm that you have read and agree to the Terms of Use and acknowledge our Privacy Policy and consent to be contacted by Broadway City UK Ltd by Email, Phone, and SMS.
        </p>

        <div class="d-flex justify-content-center">
            <button type="button" class="btn-submit formbutton-submit" onclick="submitForm()">Payment Plan</button>
        </div>
    </form>
</div>


<script>
    const adminUrl = '<?php echo esc_url(admin_url('admin-post.php')); ?>';

    function submitForm() {
        const form = document.getElementById('customForm');
        const formData = new FormData(form);

        fetch(adminUrl, {
            method: 'POST',
            body: formData,
        })
            .then((response) => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.text();
            })
            .then((result) => {
                if (result.trim() === 'success') {
                    // Open the brochure PDF if the submission is successful
                    window.location.href = 'https://storage.googleapis.com/msgsndr/htjPoFlEFNozFOmJesqe/media/6346fa0f31b6e0ca21b10a8b.pdf';
                } else {
                    alert('There was an error submitting the form. Please try again.');
                }
            })
            .catch((error) => {
                console.error('Error:', error);
                alert('There was a network error. Please try again later.');
            });
    }
</script>
