<?php

namespace WeLabs\ApplicantRegistrationSystem;

class JobManager {
    /**
     * The constructor.
     */
	public function __construct() {
        add_filter( 'job_manager_job_listing_data_fields', [ $this, 'modify_job_manager_job_listing_data_fields' ] );
	}

    /**
     * Remove Company Related Job Meta Fields
     *
     * @param [type] $fields
     * @return void
     */
    public function modify_job_manager_job_listing_data_fields( $fields ) {
        unset( $fields['_company_name'] );
        unset( $fields['_company_website'] );
        unset( $fields['_company_tagline'] );
        unset( $fields['_company_twitter'] );
        unset( $fields['_company_video'] );
        unset( $fields['_remote_position'] );
        return $fields;
    }
}
