

<form id="wayce-form" class="needs-validation">

    <div id="success-alert-messages" class="messages alert alert-success alert-icon alert-dismissible fade show" role="alert" style="display:none;">
        <i class="uil uil-check-circle"></i> <div id="success-alert-messages-text"  style="display:none; font-size: .75rem"></div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <div id="error-alert-messages" class="messages alert alert-danger alert-icon alert-dismissible fade show" role="alert" style="display:none;">
        <i class="uil uil-times-circle"></i> <div id="error-alert-messages-text"  style="display:none; font-size: .75rem"></div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <div class="row gx-4">
        <div class="col-md-6">
            <div class="form-floating mb-4">
                <input id="form-firstname" type="text" name="form-firstname" class="form-control" required>
                <label for="form-firstname">First Name *</label>
                <div class="valid-feedback"> Looks good! </div>
                <div class="invalid-feedback"> Please enter your first name. </div>
            </div>
        </div>
        <!-- /column -->
        <div class="col-md-6">
            <div class="form-floating mb-4">
                <input id="form-lastname" type="text" name="form-lastname" class="form-control" required>
                <label for="form-lastname">Last Name *</label>
                <div class="valid-feedback"> Looks good! </div>
                <div class="invalid-feedback"> Please enter your last name. </div>
            </div>
        </div>
        <!-- /column -->
        <div class="col-md-6">
            <div class="form-floating mb-4">
                <input id="form-email" type="email" name="form-email" class="form-control" required>
                <label for="form-email">Email *</label>
                <div class="valid-feedback"> Looks good! </div>
                <div class="invalid-feedback"> Please provide a valid email address. </div>
            </div>
        </div>
        <!-- /column -->
        <div class="col-md-6">
            <div class="form-select-wrapper mb-4">
                <select class="form-select" id="form-enquiry" name="form-enquiry" required>
                    <option selected disabled value="">Enquiry Type</option>
                    <option value="General">General</option>
                    <option value="Partnership">Partnership</option>
                    <option value="Sponsorship">Sponsorship</option>
                </select>
                <div class="valid-feedback"> Looks good! </div>
                <div class="invalid-feedback"> Please select a department. </div>
            </div>
        </div>
        <!-- /column -->
        <div class="col-12">
            <div class="form-floating mb-4">
                <textarea id="form-message" name="form-message" class="form-control" style="height: 150px" required></textarea>
                <label for="form-message">Message *</label>
                <div class="valid-feedback"> Looks good! </div>
                <div class="invalid-feedback"> Please enter your message. </div>
            </div>
        </div>
        <!-- /column -->
        <div class="col-12 text-center">
            <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3" value="Send message">
            <p class="text-muted"><strong>*</strong> These fields are required.</p>
        </div>
        <!-- /column -->
    </div>
    <!-- /.row -->
</form>
<!-- /form -->

<script>
    jQuery('#wayce-form').submit( function (event) {

        event.preventDefault();

        let endpoint = '<?php echo admin_url('admin-ajax.php'); ?>';

        let form = jQuery('#wayce-form').serialize();

        let form_data = new FormData;

        form_data.append('action', 'wayce-form');
        form_data.append('wayce-form', form);

        jQuery.ajax(endpoint, {

            type: 'POST',
            data: form_data,
            processData: false,
            contentType: false,

            success: function (res) {

                jQuery('#error-alert-messages').hide();
                jQuery('#wayce-form').fadeOut(200);
                jQuery('#success-alert-messages').show();
                jQuery('#success-alert-messages-text').text('Thank you for contacting us, a member of our team would get back to you shortly!').show();
                jQuery('#wayce-form').trigger('reset');
                jQuery('#wayce-form').fadeIn(500);

            },

            error: function (err) {

                jQuery('#success-alert-messages').hide();
                jQuery('#wayce-form').fadeOut(200);
                jQuery('#error-alert-messages').show();
                jQuery('#error-alert-messages-text').text('There was an error, please check servers and try again!').show();
                jQuery('#wayce-form').trigger('reset');
                jQuery('#wayce-form').fadeIn(500);

            }

        })

    })

</script>
