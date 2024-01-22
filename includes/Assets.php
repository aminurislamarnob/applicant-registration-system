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

        wp_register_script( 'applicant_registration_system_admin_script', $admin_script, [], filemtime( APPLICANT_REGISTRATION_SYSTEM_DIR . '/assets/admin/script.js' ), true );
        wp_register_script( 'applicant_registration_system_script', $frontend_script, [ 'jquery' ], filemtime( APPLICANT_REGISTRATION_SYSTEM_DIR . '/assets/frontend/script.js' ), true );
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
        wp_enqueue_style( 'applicant_registration_system_style' );
        wp_enqueue_script( 'applicant_registration_system_script' );
        wp_localize_script(
            'applicant_registration_system_script', 'ajax_data', [
                'ajaxurl' => admin_url( 'admin-ajax.php' ),
            ]
        );
    }
}
