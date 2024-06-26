<?php

namespace WeLabs\ApplicantRegistrationSystem;

class Assets {
    /**
     * The constructor.
     */
    public function __construct() {
        add_action( 'init', [ $this, 'register_all_scripts' ], 10 );

        if ( is_admin() ) {
            add_action( 'admin_enqueue_scripts', [ $this, 'enqueue_admin_scripts' ], 10 );
        } else {
            add_action( 'wp_enqueue_scripts', [ $this, 'enqueue_front_scripts' ] );
        }
    }

    /**
     * Register all Dokan scripts and styles.
     *
     * @return void
     */
    public function register_all_scripts() {
        $this->register_styles();
        $this->register_scripts();
    }

    /**
     * Register scripts.
     *
     * @param array $scripts
     *
     * @return void
     */
    public function register_scripts() {
        $admin_script       = APPLICANT_REGISTRATION_SYSTEM_PLUGIN_ASSET . '/admin/script.js';
        $frontend_script    = APPLICANT_REGISTRATION_SYSTEM_PLUGIN_ASSET . '/frontend/script.js';
        $jquery_repeater_script    = APPLICANT_REGISTRATION_SYSTEM_PLUGIN_ASSET . '/frontend/jquery.repeater.js';

        wp_register_script( 'applicant_registration_system_admin_script', $admin_script, [], APPLICANT_REGISTRATION_SYSTEM_PLUGIN_VERSION, true );
        wp_register_script( 'jquery_repeater', $jquery_repeater_script, [ 'jquery' ], APPLICANT_REGISTRATION_SYSTEM_PLUGIN_VERSION, true );
        wp_register_script( 'sweetalert_script', '//cdn.jsdelivr.net/npm/sweetalert2@11.10.4/dist/sweetalert2.all.min.js', [], '11.10.4', true );
        wp_register_script( 'applicant_registration_system_script', $frontend_script, [ 'jquery', 'jquery_repeater' ], APPLICANT_REGISTRATION_SYSTEM_PLUGIN_VERSION, true );
    }

    /**
     * Register styles.
     *
     * @return void
     */
    public function register_styles() {
        $admin_style       = APPLICANT_REGISTRATION_SYSTEM_PLUGIN_ASSET . '/admin/style.css';
        $frontend_style    = APPLICANT_REGISTRATION_SYSTEM_PLUGIN_ASSET . '/frontend/style.css';

        wp_register_style( 'applicant_registration_system_admin_style', $admin_style, [], filemtime( APPLICANT_REGISTRATION_SYSTEM_DIR . '/assets/admin/style.css' ) );
        wp_register_style( 'sweetalert2_styles', '//cdn.jsdelivr.net/npm/sweetalert2@11.10.4/dist/sweetalert2.min.css', [], '11.10.4' );
        wp_register_style( 'applicant_registration_system_style', $frontend_style, [], filemtime( APPLICANT_REGISTRATION_SYSTEM_DIR . '/assets/frontend/style.css' ) );
    }

    /**
     * Enqueue admin scripts.
     *
     * @return void
     */
    public function enqueue_admin_scripts() {
        wp_enqueue_script( 'applicant_registration_system_admin_script' );
        wp_localize_script(
            'applicant_registration_system_admin_script', 'Applicant_Registration_System_Admin', []
        );
    }

    /**
     * Enqueue front-end scripts.
     *
     * @return void
     */
    public function enqueue_front_scripts() {
        global $post;
        if ( is_a( $post, 'WP_Post' ) && has_shortcode( $post->post_content, 'wp_job_manager_applicant_registration' ) ) {
            wp_enqueue_media();
        }

        wp_enqueue_style( 'applicant_registration_system_style' );
        wp_enqueue_style( 'sweetalert2_styles' );
        wp_enqueue_script( 'applicant_registration_system_script' );
        wp_enqueue_script( 'jquery_repeater' );
        wp_enqueue_script( 'sweetalert_script' );
        wp_localize_script(
            'applicant_registration_system_script', 'ajax_data', [
                'ajaxurl' => admin_url( 'admin-ajax.php' ),
                'icon_url' => APPLICANT_REGISTRATION_SYSTEM_PLUGIN_ASSET . '/frontend/alert-icon.jpg',
                'home_url' => get_home_url(),
            ]
        );
    }
}
