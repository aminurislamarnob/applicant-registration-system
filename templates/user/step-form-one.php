<div class="applicant-step-form">
    <?php
	// if ( isset( $errors ) ) {
		var_dump( $errors );
	// }
    ?>
    <!--login details start-->
    <div class="login-main-wrapper mt-50 mb-50">
        <?php if ( ! is_user_logged_in() ) : ?>
        <form method="post">
            <?php wp_nonce_field( 'registration-login-details', 'registration-login-details-nonce' ); ?>
            <div class="login-container">
                <div class="login-form-wrap">
                    <div class="login-header">
                        <h4><?php echo esc_html__( 'Login Details', 'applicant-registration-system' ); ?></h4>
                        <p><?php echo esc_html__( 'Please enter the necessary information.', 'applicant-registration-system' ); ?></p>
                    </div>
                    <!-- form start -->
                    <div class="login-from">
                        <div class="form-group-left">
                        <div class="form-group form-error">
                            <label for="user_email"><?php echo esc_html__( 'E-mail Address', 'applicant-registration-system' ); ?></label>
                            <input type="user_email" placeholder="<?php echo esc_attr__( 'Enter you mail address', 'applicant-registration-system' ); ?>" id="email" name="user_email" class="form-control">
                        </div>
                        <div class="form-group form-error">
                            <label for="user_password"><?php echo esc_html__( 'Password', 'applicant-registration-system' ); ?></label>
                            <input type="password" placeholder="<?php echo esc_attr__( 'Enter your password', 'applicant-registration-system' ); ?>" id="user_password" name="user_password" class="form-control">
                        </div>
                        
                        </div>
                        <div class="form-group-right"></div>
                    </div>
                    <!-- form end -->
                </div>
                <div class="form-submit-bttns">
                    <div class="form-submit">
                        <button type="submit" class="btn-submit"><?php echo esc_attr__( 'Next Step', 'applicant-registration-system' ); ?> <img src="<?php echo get_theme_file_uri(); ?>/assets/images/icons/chevron-right.svg" alt="Icon" class="fluid"></button>
                    </div>
                </div>
            </div>
        </form>
        <?php else : ?>
        <div class="logged-in-detected"><?php echo esc_html__( 'You are already loggedin.', 'applicant-registration-system' ); ?></div>
        <?php endif; ?>
    </div>
</div>