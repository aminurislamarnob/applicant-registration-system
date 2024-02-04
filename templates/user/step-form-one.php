<?php
$email = '';
if ( is_user_logged_in() ) {
    $current_user_id = get_current_user_id();
    $user = get_userdata( $current_user_id );
    $email = $user->user_email;
}
?>
<div class="applicant-step-form">
    <!--login details start-->
    <div class="login-main-wrapper mt-50 mb-50">
        <?php //if ( ! is_user_logged_in() ) : ?>
        <form method="post">
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
                                <?php if ( ! is_user_logged_in() ) : ?>
                                    <input type="user_email" placeholder="<?php echo esc_attr__( 'Enter you mail address', 'applicant-registration-system' ); ?>" id="user_email" name="user_email" class="form-control required">
                                <?php else : ?>
                                    <input type="user_email" value="<?php echo esc_html__( ! empty( $email ) ? $email : '', 'applicant-registration-system' ); ?>" placeholder="<?php echo esc_attr__( 'Enter you mail address', 'applicant-registration-system' ); ?>" id="user_email"  class="form-control required" style="opacity: 0.5;" readonly disabled>
                                <?php endif; ?>
                            </div>
                            <div class="form-group form-error">
                                <label for="user_password"><?php echo esc_html__( 'Password', 'applicant-registration-system' ); ?></label>
                                <?php if ( ! is_user_logged_in() ) : ?>
                                    <input type="password" placeholder="<?php echo esc_attr__( 'Enter your password', 'applicant-registration-system' ); ?>" id="user_password" name="user_password" class="form-control required">
                                <?php else : ?>
                                    <input type="password" placeholder="<?php echo esc_attr__( 'Enter your password', 'applicant-registration-system' ); ?>" style="opacity: 0.5;" id="user_password" class="form-control required" value="*********************" readonly disabled>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group-right"></div>
                    </div>
                    <!-- form end -->
                </div>
                <div class="form-submit-bttns">
                    <div class="form-submit">
                        <input type="hidden" name="nonce" value="<?php echo wp_create_nonce( 'registration_login_details' ); ?>">

                        <?php if ( ! is_user_logged_in() ) : ?>
                            <button id="bex-register" type="submit" class="btn-submit">
                                <span class="btn-text"><?php echo esc_attr__( 'Next Step', 'applicant-registration-system' ); ?> <img src="<?php echo get_theme_file_uri(); ?>/assets/images/icons/chevron-right.svg" alt="Icon" class="fluid">
                                </span>
                                <span class="spinner"></span>
                            </button>
							<?php
                        else :
                            global $wp;
                            $prev_url = home_url( $wp->request ) . '?step=personal-information';
                            ?>
                            <a href="<?php echo esc_url( $prev_url ); ?>" class="btn-submit"><?php echo esc_attr__( 'Next Step', 'applicant-registration-system' ); ?> <img src="<?php echo get_theme_file_uri(); ?>/assets/images/icons/chevron-right.svg" alt="Icon" class="fluid"></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </form>
        <?php //else : ?>
        <!-- <div class="logged-in-detected"><?php //echo esc_html__( 'You are already loggedin.', 'applicant-registration-system' ); ?></div> -->
        <?php //endif; ?>
    </div>
</div>