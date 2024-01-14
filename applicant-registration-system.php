<?php
/**
 * Plugin Name: Applicant Registration System
 * Plugin URI:  https://aiarnob.com/
 * Description: This plugin enable user or applicant registration system.An custom developed addon of popular job board plugin WP Job Manager
 * Version: 0.0.1
 * Author: Aminur Islam Arnob
 * Author URI: https://aiarnob.com/
 * Text Domain: applicant-registration-system
 * WC requires at least: 5.0.0
 * Domain Path: /languages/
 * License: GPL2
 */
use WeLabs\ApplicantRegistrationSystem\ApplicantRegistrationSystem;

// don't call the file directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! defined( 'APPLICANT_REGISTRATION_SYSTEM_FILE' ) ) {
    define( 'APPLICANT_REGISTRATION_SYSTEM_FILE', __FILE__ );
}

require_once __DIR__ . '/vendor/autoload.php';

/**
 * Load Applicant_Registration_System Plugin when all plugins loaded
 *
 * @return \WeLabs\ApplicantRegistrationSystem\ApplicantRegistrationSystem
 */
function welabs_applicant_registration_system() {
    return ApplicantRegistrationSystem::init();
}

// Lets Go....
welabs_applicant_registration_system();
