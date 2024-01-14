<div class="applicant-step-form">
    <form method="post">
        <?php wp_nonce_field( 'registration-personal-info', 'registration-personal-info-nonce' ); ?>
        <div class="form-wrapper-box">
            <div class="form-step-header">
                <h2><?php echo esc_html__( 'Personal Information', 'applicant-registration-system' ); ?></h2>
                <p><?php echo esc_html__( 'Please enter the necessary information.', 'applicant-registration-system' ); ?></p>
            </div>
            <div class="form-group-row">
                <div class="form-field">
                    <label for="first_name"><?php echo esc_html__( 'First Name', 'applicant-registration-system' ); ?></label>
                    <input type="text" name="first_name" id="first_name" placeholder="<?php echo esc_attr__( 'First name', 'applicant-registration-system' ); ?>">
                </div>
                <div class="form-field">
                    <label for="last_name"><?php echo esc_html__( 'Last Name', 'applicant-registration-system' ); ?></label>
                    <input type="text" name="last_name" id="last_name" placeholder="<?php echo esc_attr__( 'Last name', 'applicant-registration-system' ); ?>">
                </div>
            </div>
            <div class="form-group-row">
                <div class="form-field">
                    <label for="date_of_birth"><?php echo esc_html__( 'Date of Birth', 'applicant-registration-system' ); ?></label>
                    <input type="date" name="date_of_birth" id="date_of_birth" placeholder="<?php echo esc_attr__( 'dd-mm-yyyy', 'applicant-registration-system' ); ?>">
                </div>
                <div class="form-fields-checkbox-group">
                    <div class="form-field">
                        <label for="have_driving_licence"><?php echo esc_html__( 'Do you have Driving Licence?', 'applicant-registration-system' ); ?></label>
                        <input type="checkbox" name="have_driving_licence" id="have_driving_licence">
                    </div>
                    <div class="form-field">
                        <label for="have_car"><?php echo esc_html__( 'Do you have Car?', 'applicant-registration-system' ); ?></label>
                        <input type="checkbox" name="have_car" id="have_car">
                    </div>
                </div>
            </div>
            <div class="form-step-header">
                <h2><?php echo esc_html__( 'Address & Contact Details', 'applicant-registration-system' ); ?></h2>
            </div>
            <div class="form-group-row">
                <div class="form-field">
                    <label for="country"><?php echo esc_html__( 'Country', 'applicant-registration-system' ); ?></label>
                    <input type="text" name="country" id="country" placeholder="<?php echo esc_attr__( 'Country', 'applicant-registration-system' ); ?>">
                </div>
                <div class="form-field">
                    <label for="city"><?php echo esc_html__( 'City', 'applicant-registration-system' ); ?></label>
                    <input type="text" name="city" id="city" placeholder="<?php echo esc_attr__( 'City', 'applicant-registration-system' ); ?>">
                </div>
            </div>
            <div class="form-group-row">
                <div class="form-field">
                    <label for="zip_code"><?php echo esc_html__( 'Zip Code', 'applicant-registration-system' ); ?></label>
                    <input type="text" name="zip_code" id="zip_code" placeholder="<?php echo esc_attr__( 'Zip Code', 'applicant-registration-system' ); ?>">
                </div>
                <div class="form-field">
                    <label for="street"><?php echo esc_html__( 'Street', 'applicant-registration-system' ); ?></label>
                    <input type="text" name="street" id="street" placeholder="<?php echo esc_attr__( 'Street', 'applicant-registration-system' ); ?>">
                </div>
            </div>
            <div class="form-group-row">
                <div class="form-field">
                    <label for="apartment"><?php echo esc_html__( 'Apartment', 'applicant-registration-system' ); ?></label>
                    <input type="text" name="apartment" id="apartment" placeholder="<?php echo esc_attr__( 'Apartment', 'applicant-registration-system' ); ?>">
                </div>
                <div class="form-field">
                    <label for="mobile"><?php echo esc_html__( 'Mobile', 'applicant-registration-system' ); ?></label>
                    <input type="text" name="mobile" id="mobile" placeholder="<?php echo esc_attr__( '+31612345678', 'applicant-registration-system' ); ?>">
                </div>
            </div>
            <div class="form-group-row">
                <div class="form-field">
                    <label for="phone_number"><?php echo esc_html__( 'Phone', 'applicant-registration-system' ); ?></label>
                    <input type="text" name="phone_number" id="phone_number" placeholder="<?php echo esc_attr__( 'Phone Number', 'applicant-registration-system' ); ?>">
                </div>
            </div>
        </div>
        <div class="form-field form-action-button">
            <a href="#"><?php echo esc_attr__( 'Go back', 'applicant-registration-system' ); ?></a>
            <button type="submit"><?php echo esc_attr__( 'Next Step', 'applicant-registration-system' ); ?></button>
        </div>
    </form>
</div> 