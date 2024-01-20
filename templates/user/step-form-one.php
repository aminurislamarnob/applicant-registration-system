<div class="applicant-step-form">
    <?php
	// if ( isset( $errors ) ) {
		var_dump( $errors );
	// }
    ?>
    <!--login details start-->
    <div class="login-main-wrapper mt-50 mb-50">
    <div class="login-container">
        <div class="login-form-wrap">
        <div class="login-header">
            <h4>Login Details</h4>
            <p>Please enter the necessary information.</p>
        </div>
        <!-- form start -->
        <div class="login-from">
            <div class="form-group-left">
            <div class="form-group form-error">
                <label for="email">E-mail Address</label>
                <input type="email" placeholder="Enter you mail address" id="email" name="email" class="form-control">
            </div>
            <div class="form-group form-error">
                <label for="password">Password</label>
                <input type="password" placeholder="Enter your password" id="password" name="password" class="form-control">
            </div>
            
            </div>
            <div class="form-group-right"></div>
        </div>
        <!-- form end -->
        </div>
        <div class="form-submit-bttns">
        <div class="form-submit">
            <button type="submit" class="btn-submit">Next Step <img src="assets/images/icons/chevron-right.svg"
                alt="Icon" class="fluid"></button>
        </div>
        </div>
    </div> 
    </div>

    <!--login details end-->
    <form method="post">
        <?php wp_nonce_field( 'registration-login-details', 'registration-login-details-nonce' ); ?>
        <div class="form-wrapper-box">
            <div class="form-step-header">
                <h2><?php echo esc_html__( 'Login Details', 'applicant-registration-system' ); ?></h2>
                <p><?php echo esc_html__( 'Please enter the necessary information.', 'applicant-registration-system' ); ?></p>
            </div>
            <?php if ( ! is_user_logged_in() ) : ?>
            <div class="form-field">
                <label for="user_email"><?php echo esc_html__( 'E-mail Address', 'applicant-registration-system' ); ?></label>
                <input type="email" name="user_email" id="user_email" placeholder="<?php echo esc_attr__( 'Enter you mail address', 'applicant-registration-system' ); ?>" required>
            </div>
            <div class="form-field">
                <label for="user_password"><?php echo esc_html__( 'Password', 'applicant-registration-system' ); ?></label>
                <input type="password" name="user_password" id="user_password" placeholder="<?php echo esc_attr__( 'Enter your password', 'applicant-registration-system' ); ?>" required>
            </div>
            <?php else : ?>
            <div class="logged-in-detected"><?php echo esc_html__( 'You are already loggedin.', 'applicant-registration-system' ); ?></div>
            <?php endif; ?>
        </div>
        <div class="form-field form-action-button">
            <input type="submit" value="<?php echo esc_attr__( 'Next', 'applicant-registration-system' ); ?>">
        </div>
    </form>
</div>