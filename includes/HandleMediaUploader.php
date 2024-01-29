<?php

namespace WeLabs\ApplicantRegistrationSystem;

class HandleMediaUploader {
    /**
     * The constructor.
     */
	public function __construct() {
		add_action( 'pre_get_posts', [ $this, 'user_view_own_attachments' ] );
		add_action( 'init', [ $this, 'allow_subscriber_top_uploads_media' ] );
		add_filter( 'upload_mimes', [ $this, 'subscriber_restrictMimeTypes_allow_pdf' ] );
	}

    /**
     * Allow subscriber to upload pdf only
     *
     * @param [type] $mimes
     * @return void
     */
    public function subscriber_restrictMimeTypes_allow_pdf( $mimes ) {
        global $current_user;

        //End the party if it isn't a valid user
        if ( ! is_a( $current_user, 'WP_User' ) ) {
            return;
		}

		if ( current_user_can( 'subscriber' ) ) {
            $mimes = [];
			$mimes['pdf'] = 'application/pdf';
            $mimes['docx'] = 'application/vnd.openxmlformats-officedocument.wordprocessingml.document';
            $mimes['doc'] = 'application/msword';
            $mimes['txt'] = 'text/plain';
		}

        return $mimes;
    }

    /**
     * Use can view only own uploads media file without editors & admin
     *
     * @param object $wp_query_obj
     * @return void
     */
    public function user_view_own_attachments( $wp_query_obj ) {
        global $current_user, $pagenow;

        //End the party if it isn't a valid user
        if ( ! is_a( $current_user, 'WP_User' ) ) {
            return;
        }
        //End the journey if we are not viewing a media page - upload.php (Directly) or admin-ajax.php(Through an AJAX call)
        if ( ! in_array( $pagenow, array( 'upload.php', 'admin-ajax.php' ) ) ) {
            return;
        }
        //Editors and Admins can view all media
        if ( ! current_user_can( 'delete_pages' ) ) {
            $wp_query_obj->set( 'author', $current_user->ID );
        }
    }

    /**
     * Allow subscriber to upload media on wp media
     *
     * @return void
     */
    public function allow_subscriber_top_uploads_media() {
        if ( current_user_can( 'subscriber' ) && ! current_user_can( 'upload_files' ) ) {
            $subscriber = get_role( 'subscriber' );
            $subscriber->add_cap( 'upload_files' );
        }
    }
}
