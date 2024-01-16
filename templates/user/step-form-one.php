<div class="applicant-step-form">
    <?php
	// if ( isset( $errors ) ) {
		var_dump( $errors );
	// }
    ?>
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