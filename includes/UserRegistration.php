<?php

namespace WeLabs\ApplicantRegistrationSystem;

class UserRegistration {
    /**
     * The constructor.
     */
	public function __construct() {
        //hide wp admin bar
        // add_filter( 'show_admin_bar', [ $this, 'hide_wordpress_admin_bar' ] );

		// Register shortcode
		add_shortcode( 'wp_job_manager_applicant_registration', [ $this, 'wp_job_manager_applicant_registration' ] );

		// Handle form submission
		// add_action( 'template_redirect', [ $this, 'handle_applicant_registration_form' ] );

        //Handle form submission step one
        add_action( 'wp_ajax_bex_user_register', [ $this, 'handle_bex_user_register' ] );
        add_action( 'wp_ajax_nopriv_bex_user_register', [ $this, 'handle_bex_user_register' ] );

        //Handle form submission step two
        add_action( 'wp_ajax_bex_user_personal_info', [ $this, 'handle_bex_user_personal_info' ] );
        add_action( 'wp_ajax_nopriv_bex_user_personal_info', [ $this, 'handle_bex_user_personal_info' ] );

        //Handle form submission step three
        add_action( 'wp_ajax_bex_user_job_requirments', [ $this, 'handle_bex_user_job_requirments' ] );
        add_action( 'wp_ajax_nopriv_bex_user_job_requirments', [ $this, 'handle_bex_user_job_requirments' ] );

        //Handle form submission step four
        add_action( 'wp_ajax_bex_work_exp', [ $this, 'handle_bex_work_exp_form_submission' ] );
        add_action( 'wp_ajax_nopriv_bex_work_exp', [ $this, 'handle_bex_work_exp_form_submission' ] );
	}

    /**
     * Hide admin bar for all user role except 'administrator'
     *
     * @return void
     */
    public function hide_wordpress_admin_bar( $hide ) {
        if ( ! current_user_can( 'administrator' ) || ! current_user_can( 'subscriber' ) ) {
            return false;
		}
        return $hide;
    }

    /**
     * Handle ajax form submission of user login info
     *  Step-One
     * @return void
     */
    public function handle_bex_user_register() {
        if ( ! wp_verify_nonce( $_REQUEST['nonce'], 'registration_login_details' ) ) {  // phpcs:ignore
            exit( 'No naughty business please' );
        }

        global $wp;

        $user_email = sanitize_email( $_REQUEST['user_email'] ); // phpcs:ignore
        $user_password = sanitize_text_field( $_REQUEST['user_password'] ); // phpcs:ignore
        $errors = [];

        //validate email
        if ( ! is_email( $user_email ) ) {
			$errors['user_email'] = esc_html__( 'Invalid email address.', 'applicant-registration-system' );
		}

        //check required
        if ( empty( $user_password ) ) {
			$errors['user_password'] = esc_html__( 'This field is required.', 'applicant-registration-system' );
		} elseif ( strlen( $user_password ) < 8 ) {
			$errors['user_password'] = esc_html__( 'Password must be at least 8 characters long.', 'applicant-registration-system' );
		}

        $current_url = home_url( $wp->request );

		if ( empty( $errors ) ) {
			$user_id = wp_create_user( $user_email, $user_password, $user_email );

			if ( ! is_wp_error( $user_id ) ) {
				wp_set_current_user( $user_id );
				wp_set_auth_cookie( $user_id );
				$user = get_user_by( 'id', $user_id );
				do_action( 'wp_login', $user->user_login, $user );//`[Codex Ref.][1]

                $response = [
                    'type' => 'success',
                    'redirect_url' => $current_url . '?step=personal-information',
                ];
                wp_send_json( $response );
			} else {
				$error_message = $user_id->get_error_message();
				$errors['error_message'] = esc_html( $error_message );

                $response = [
                    'type' => 'error',
                    'errors' => $errors,
                ];
                wp_send_json( $response );
			}
		} else {
            $response = [
                'type' => 'error',
                'errors' => $errors,
            ];
            wp_send_json( $response );
        }
    }

    /**
     * Handle ajax form submission of user personal info
     * Step-Two
     * @return void
     */
    public function handle_bex_user_personal_info() {
        if ( ! wp_verify_nonce( $_REQUEST['nonce'], 'bex_user_personal_info_nonce' ) ) {  // phpcs:ignore
            exit( 'No naughty business please' );
        }

        // phpcs:disable
        $user_inputs = [
            'first_name' => sanitize_text_field( $_POST['first_name'] ),
            'last_name' => sanitize_text_field( $_POST['last_name'] ),
            'date_of_birth' => sanitize_text_field( $_POST['date_of_birth'] ),
            'have_driving_licence' => sanitize_text_field( $_POST['have_driving_licence'] ),
            'have_car' => sanitize_text_field( $_POST['have_car'] ),
            'country' => sanitize_text_field( $_POST['country'] ),
            'city' => sanitize_text_field( $_POST['city'] ),
            'zip_code' => sanitize_text_field( $_POST['zip_code'] ),
            'street' => sanitize_text_field( $_POST['street'] ),
            'apartment' => sanitize_text_field( $_POST['apartment'] ),
            'mobile' => sanitize_text_field( $_POST['mobile'] ),
            'phone_number' => sanitize_text_field( $_POST['phone_number'] ),
        ];
        // phpcs:enable

        $errors = [];

        if ( empty( $user_inputs['first_name'] ) ) {
			$errors['first_name'] = esc_html__( 'This field is required.', 'applicant-registration-system' );
		}

        if ( empty( $user_inputs['date_of_birth'] ) ) {
			$errors['date_of_birth'] = esc_html__( 'This field is required.', 'applicant-registration-system' );
		}

        if ( empty( $user_inputs['last_name'] ) ) {
			$errors['last_name'] = esc_html__( 'This field is required.', 'applicant-registration-system' );
		}

        if ( empty( $user_inputs['country'] ) ) {
			$errors['country'] = esc_html__( 'This field is required.', 'applicant-registration-system' );
		}

        if ( empty( $user_inputs['zip_code'] ) ) {
			$errors['zip_code'] = esc_html__( 'This field is required.', 'applicant-registration-system' );
		}

        if ( empty( $user_inputs['phone_number'] ) ) {
			$errors['phone_number'] = esc_html__( 'This field is required.', 'applicant-registration-system' );
		}

        if ( empty( $user_inputs['city'] ) ) {
			$errors['city'] = esc_html__( 'This field is required.', 'applicant-registration-system' );
		}

        if ( empty( $user_inputs['street'] ) ) {
			$errors['street'] = esc_html__( 'This field is required.', 'applicant-registration-system' );
		}

        if ( empty( $user_inputs['mobile'] ) ) {
			$errors['mobile'] = esc_html__( 'This field is required.', 'applicant-registration-system' );
		}

        if ( empty( $errors ) ) {
			//save to user meta
			$current_user_id = get_current_user_id();
			foreach ( $user_inputs as $key => $value ) {
				update_user_meta( $current_user_id, $key, $value );
			}

			//success response
			$response = [
				'type' => 'success',
				'redirect_url' => '?step=your-job-requirement',
			];
			wp_send_json( $response );
		} else {
            $response = [
                'type' => 'error',
                'errors' => $errors,
            ];
            wp_send_json( $response );
        }
    }

    /**
     * Handle ajax form submission of user job requirements
     * Step-Three
     * @return void
     */
    public function handle_bex_user_job_requirments() {
        if ( ! wp_verify_nonce( $_REQUEST['nonce'], 'bex_user_job_req_nonce' ) ) {  // phpcs:ignore
            exit( 'No naughty business please' );
        }

        // phpcs:disable
        $user_inputs = [
            'job_type' => sanitize_text_field( $_POST['job_type'] ),
            'like_to_travel' => sanitize_text_field( $_POST['like_to_travel'] ),
            'desired_monthly_income' => sanitize_text_field( $_POST['desired_monthly_income'] ),
            'willing_to_travel' => sanitize_text_field( $_POST['willing_to_travel'] ),
            'minimum_hours_per_week' => sanitize_text_field( $_POST['minimum_hours_per_week'] ),
            'maximum_hours_per_week' => sanitize_text_field( $_POST['maximum_hours_per_week'] ),
        ];
        // phpcs:enable

        $errors = [];

        if ( empty( $user_inputs['job_type'] ) ) {
			$errors['job_type'] = esc_html__( 'This field is required.', 'applicant-registration-system' );
		}

        if ( empty( $user_inputs['desired_monthly_income'] ) ) {
			$errors['desired_monthly_income'] = esc_html__( 'This field is required.', 'applicant-registration-system' );
		}

        if ( empty( $errors ) ) {
			//save to user meta
			$current_user_id = get_current_user_id();
			foreach ( $user_inputs as $key => $value ) {
				update_user_meta( $current_user_id, $key, $value );
			}

			//success response
			$response = [
				'type' => 'success',
				'redirect_url' => '?step=work-experience',
			];
			wp_send_json( $response );
		} else {
            $response = [
                'type' => 'error',
                'errors' => $errors,
            ];
            wp_send_json( $response );
        }
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
		} elseif ( 'work-experience' === $_GET['step'] ) {
			require APPLICANT_REGISTRATION_SYSTEM_TEMPLATE_DIR . '/user/step-form-four.php';
		} elseif ( 'check-and-send' === $_GET['step'] ) {
			require APPLICANT_REGISTRATION_SYSTEM_TEMPLATE_DIR . '/user/check-and-send.php';
		}
        $string = ob_get_clean();
        return $string;
    }

    public function handle_bex_work_exp_form_submission() {
        global $wp;
        if ( ! wp_verify_nonce( $_REQUEST['nonce'], 'bex_work_exp_nonce' ) ) {  // phpcs:ignore
            exit( 'No naughty business please' );
        }

        // phpcs:disable
        $user_inputs = [
            'work_experience' => $_POST['work_experiences'],
            'facebook' => sanitize_text_field( $_POST['facebook'] ),
            'linkedin' => sanitize_text_field( $_POST['linkedin'] ),
            'instagram' => sanitize_text_field( $_POST['instagram'] ),
            'twitter' => sanitize_text_field( $_POST['twitter'] ),
            'resume' => sanitize_text_field( $_POST['resume'] ),
        ];
        // phpcs:enable

        $errors = [];

        if ( empty( $errors ) ) {
			//save to user meta
			$current_user_id = get_current_user_id();
			foreach ( $user_inputs as $key => $value ) {
				update_user_meta( $current_user_id, $key, $value );
			}

			//success response
			$response = [
				'type' => 'success',
				'redirect_url' => '?step=check-and-send',
			];
			wp_send_json( $response );
		} else {
            $response = [
                'type' => 'error',
                'errors' => $errors,
            ];
            wp_send_json( $response );
        }
    }
}
