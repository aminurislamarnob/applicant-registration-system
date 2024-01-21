<div class="applicant-step-form">

        <!--login details start-->
        <div class="login-main-wrapper">
            <form method="post">
                <?php wp_nonce_field( 'registration-personal-info', 'registration-personal-info-nonce' ); ?>
                <div class="login-container">
                    <div class="login-form-wrap">
                        <div class="login-header">
                            <h4><?php echo esc_html__( 'Personal Information', 'applicant-registration-system' ); ?></h4>
                            <p><?php echo esc_html__( 'Please enter the necessary information.', 'applicant-registration-system' ); ?></p>
                        </div>
                        <!-- form start -->
                        <div class="login-from">
                            <div class="personal-info">
                            <div class="form-group-left">
                                <div class="form-group form-error">
                                    <label for="first_name"><?php echo esc_html__( 'First Name', 'applicant-registration-system' ); ?></label>
                                    <input type="text" placeholder="<?php echo esc_attr__( 'First name', 'applicant-registration-system' ); ?>" id="first_name" name="first_name" class="form-control">
                                </div>
                                <div class="form-group form-error">
                                    <label for="date_of_birth"><?php echo esc_html__( 'Date of Birth', 'applicant-registration-system' ); ?></label>
                                    <input type="date" placeholder="<?php echo esc_attr__( 'dd-mm-yyyy', 'applicant-registration-system' ); ?>" id="date_of_birth" name="date_of_birth" class="form-control">
                                </div>
                            </div>
                            </div>
                            <div class="form-group-right">
                            <div class="form-group form-error">
                                <label for="last_name"><?php echo esc_html__( 'Last Name', 'applicant-registration-system' ); ?></label>
                                <input type="text" placeholder="Last name" id="last_name" name="last_name" class="form-control">
                            </div>
                            <div class="form-group form-error button-option">
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
                            <div class="form-group-left">
                            <div class="form-group form-error">
                                <label for="country"><?php echo esc_html__( 'Country', 'applicant-registration-system' ); ?></label>
                                <input type="text" placeholder="<?php echo esc_attr__( 'Country', 'applicant-registration-system' ); ?>" id="country" name="country" class="form-control">
                            </div>
                            <div class="form-group form-error">
                                <label for="zip_code"><?php echo esc_html__( 'Zip Code', 'applicant-registration-system' ); ?></label>
                                <input type="text" placeholder="<?php echo esc_attr__( 'Zip Code', 'applicant-registration-system' ); ?>" id="zip_code" name="zip_code" class="form-control">
                            </div>
                            <div class="form-group form-error">
                                <label for="apartment"><?php echo esc_html__( 'Apartment', 'applicant-registration-system' ); ?></label>
                                <input type="text" placeholder="<?php echo esc_attr__( 'Apartment', 'applicant-registration-system' ); ?>" id="apartment" name="apartment" class="form-control">
                            </div>
                            <div class="form-group form-error">
                                <label for="phone_number"><?php echo esc_html__( 'Phone', 'applicant-registration-system' ); ?></label>
                                <input type="text" placeholder="<?php echo esc_attr__( 'Phone Number', 'applicant-registration-system' ); ?>" id="phone_number" name="phone_number" class="form-control">
                            </div>
                            </div>
                            <div class="form-group-right">
                            <div class="form-group form-error">
                                <label for="city"><?php echo esc_html__( 'City', 'applicant-registration-system' ); ?></label>
                                <input type="text" placeholder="<?php echo esc_attr__( 'City', 'applicant-registration-system' ); ?>" id="city" name="city" class="form-control">
                            </div>
                            <div class="form-group form-error">
                                <label for="street"><?php echo esc_html__( 'Street', 'applicant-registration-system' ); ?></label>
                                <input type="text" placeholder="<?php echo esc_attr__( 'Street', 'applicant-registration-system' ); ?>" id="street" name="street" class="form-control">
                            </div>
                            <div class="form-group form-error">
                                <label for="mobile"><?php echo esc_html__( 'Mobile', 'applicant-registration-system' ); ?></label>
                                <input type="text" placeholder="<?php echo esc_attr__( '+31612345678', 'applicant-registration-system' ); ?>" id="mobile" name="mobile" class="form-control">
                            </div>
                            </div>
                        </div>
                        <!-- form end -->
                    </div>
                    <div class="form-submit">
                        <a class="btn-submit btn-back" href="#"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/icons/chevron-left.svg"alt="Icon" class="fluid"><?php echo esc_attr__( 'Go back', 'applicant-registration-system' ); ?></a>
                        <button type="submit" class="btn-submit">Next Step <img src="<?php echo get_theme_file_uri(); ?>/assets/images/icons/chevron-right.svg"alt="Icon" class="fluid"></button>  
                    </div>
                </div>
            </form>
        </div>
        <!--login details end-->
</div>