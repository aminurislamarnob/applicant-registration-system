<?php

namespace WeLabs\ApplicantRegistrationSystem;

class UserRegistration {
    /**
     * The constructor.
     */
	public function __construct() {
		// Register shortcode
		add_shortcode( 'wp_job_manager_applicant_registration', [ $this, 'wp_job_manager_applicant_registration' ] );

		// Handle form submission
		add_action( 'template_redirect', [ $this, 'handle_applicant_registration_form' ] );
	}

	public function wp_job_manager_applicant_registration() {

		ob_start();
		$current_step = isset( $_GET['step'] ) ? $_GET['step'] : 'user-registration';
		if ( 'user-registration' === $current_step ) {
			require APPLICANT_REGISTRATION_SYSTEM_TEMPLATE_DIR . '/user/step-form-one.php';
		} elseif ( 'personal-information' === $_GET['step'] ) {
			require APPLICANT_REGISTRATION_SYSTEM_TEMPLATE_DIR . '/user/step-form-two.php';
		} elseif ( 'your-job-requirement' === $_GET['step'] ) {
			require APPLICANT_REGISTRATION_SYSTEM_TEMPLATE_DIR . '/user/step-form-three.php';
		}
        $string = ob_get_clean();
        return $string;
    }

    public function handle_applicant_registration_form() {
        $current_step = isset( $_GET['step'] ) ? $_GET['step'] : 'user-registration';
        if ( 'user-registration' === $current_step ) {
            $this->handle_registration_step_one();
        } elseif ( 'personal-information' === $_GET['step'] ) {
            $this->handle_registration_step_two();
        } elseif ( 'your-job-requirement' === $_GET['step'] ) {
            $this->handle_registration_step_three();
        }
    }

    public function handle_registration_step_one() {
        global $wp;
        if ( isset( $_POST['registration-login-details-nonce'] ) && wp_verify_nonce( $_POST['registration-login-details-nonce'], 'registration-login-details' ) ) { // phpcs:ignore
            $user_email = sanitize_email( $_POST['user_email'] ); // phpcs:ignore
            $user_password = sanitize_text_field( $_POST['user_password'] ); // phpcs:ignore

            // Validate email
            if ( ! is_email( $user_email ) ) {
                echo '<div class="error">Invalid email address.</div>';
                return;
            }

            // Validate password length
            if ( strlen( $user_password ) < 8 ) {
                echo '<div class="error">Password must be at least 8 characters long.</div>';
                return;
            }

            $user_id = wp_create_user( $user_email, $user_password, $user_email );

            if ( ! is_wp_error( $user_id ) ) {
                wp_set_current_user( $user_id );
                wp_set_auth_cookie( $user_id );
                $user = get_user_by( 'id', $user_id );
                do_action( 'wp_login', $user->user_login, $user );//`[Codex Ref.][1]
                $current_url = home_url( $wp->request );
                wp_safe_redirect( $current_url . '?step=personal-information' );
				exit;
            } else {
                // Registration failed, handle errors
                $error_message = $user_id->get_error_message();
                // Display the error message
                echo '<div class="error">' . esc_html( $error_message ) . '</div>';
            }
        }
    }

    public function handle_registration_step_two() {
        global $wp;
        if ( isset( $_POST['registration-personal-info-nonce'] ) && wp_verify_nonce( $_POST['registration-personal-info-nonce'], 'registration-personal-info' ) ) { // phpcs:ignore

            // phpcs:disable
            $first_name = sanitize_text_field( $_POST['first_name'] ); 
            $last_name = sanitize_text_field( $_POST['last_name'] );
            $date_of_birth = sanitize_text_field( $_POST['date_of_birth'] );
            $have_driving_licence = sanitize_text_field( $_POST['have_driving_licence'] );
            $have_car = sanitize_text_field( $_POST['have_car'] );
            $country = sanitize_text_field( $_POST['country'] );
            $city = sanitize_text_field( $_POST['city'] );
            $zip_code = sanitize_text_field( $_POST['zip_code'] );
            $street = sanitize_text_field( $_POST['street'] );
            $apartment = sanitize_text_field( $_POST['apartment'] );
            $mobile = sanitize_text_field( $_POST['mobile'] );
            $phone_number = sanitize_text_field( $_POST['phone_number'] );
            // phpcs:enable

            $current_user_id = get_current_user_id();
            update_user_meta( $current_user_id, 'first_name', $first_name );
            update_user_meta( $current_user_id, 'last_name', $last_name );
            update_user_meta( $current_user_id, 'date_of_birth', $date_of_birth );
            update_user_meta( $current_user_id, 'have_driving_licence', $have_driving_licence );
            update_user_meta( $current_user_id, 'have_car', $have_car );
            update_user_meta( $current_user_id, 'country', $country );
            update_user_meta( $current_user_id, 'city', $city );
            update_user_meta( $current_user_id, 'zip_code', $zip_code );
            update_user_meta( $current_user_id, 'street', $street );
            update_user_meta( $current_user_id, 'apartment', $apartment );
            update_user_meta( $current_user_id, 'mobile', $mobile );
            update_user_meta( $current_user_id, 'phone_number', $phone_number );

            //redirect next step
            $current_url = home_url( $wp->request );
            wp_safe_redirect( $current_url . '?step=your-job-requirement' );
            exit;
        }
    }

    public function handle_registration_step_three() {
    }
}
