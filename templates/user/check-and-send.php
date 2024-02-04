<?php
    //meta data
    $current_user_id = get_current_user_id();
    $apartment = get_user_meta( $current_user_id, 'apartment', true );
    $city = get_user_meta( $current_user_id, 'city', true );
    $country = get_user_meta( $current_user_id, 'country', true );
    $date_of_birth = get_user_meta( $current_user_id, 'date_of_birth', true );
    $description = get_user_meta( $current_user_id, 'description', true );
    $desired_monthly_income = get_user_meta( $current_user_id, 'desired_monthly_income', true );
    $facebook = get_user_meta( $current_user_id, 'facebook', true );
    $first_name = get_user_meta( $current_user_id, 'first_name', true );
    $last_name = get_user_meta( $current_user_id, 'last_name', true );
    $have_car = get_user_meta( $current_user_id, 'have_car', true );
    $have_driving_licence = get_user_meta( $current_user_id, 'have_driving_licence', true );
    $instagram = get_user_meta( $current_user_id, 'instagram', true );
    $job_type = get_user_meta( $current_user_id, 'job_type', true );
    $like_to_travel = get_user_meta( $current_user_id, 'like_to_travel', true );
    $linkedin = get_user_meta( $current_user_id, 'linkedin', true );
    $maximum_hours_per_week = get_user_meta( $current_user_id, 'maximum_hours_per_week', true );
    $minimum_hours_per_week = get_user_meta( $current_user_id, 'minimum_hours_per_week', true );
    $mobile = get_user_meta( $current_user_id, 'mobile', true );
    $phone_number = get_user_meta( $current_user_id, 'phone_number', true );
    $resume = get_user_meta( $current_user_id, 'resume', true );
    $street = get_user_meta( $current_user_id, 'street', true );
    $twitter = get_user_meta( $current_user_id, 'twitter', true );
    $work_experience = get_user_meta( $current_user_id, 'work_experience', true );
    $zip_code = get_user_meta( $current_user_id, 'zip_code', true );
    $willing_to_travel = get_user_meta( $current_user_id, 'willing_to_travel', true );
?>
<div class="login-main-wrapper mt-50">
    <div class="login-container">
        <div class="login-form-wrap">
            <div class="login-header">
                <h4><?php echo esc_html__( 'Check and Send', 'applicant-registration-system' ); ?></h4>
                <p><?php echo esc_html__( 'Please check your all information.', 'applicant-registration-system' ); ?></p>
            </div>
            <!-- personal information box start -->
            <div class="form-step-box">
                <h4><?php echo esc_html__( 'Personal Information', 'applicant-registration-system' ); ?></h4>
                <div class="form-group-area">
                    <!-- group start -->
                    <div class="info-group">
                        <h6><?php echo esc_html__( 'Your First Name', 'applicant-registration-system' ); ?></h6>
                        <p><?php echo esc_html__( $first_name, 'applicant-registration-system' ); // phpcs:ignore ?></p>
                    </div>
                    <!-- group end -->
                    <!-- group start -->
                    <div class="info-group">
                        <h6><?php echo esc_html__( 'Your Last name', 'applicant-registration-system' ); ?></h6>
                        <p><?php echo esc_html__( $last_name, 'applicant-registration-system' ); // phpcs:ignore ?></p>
                    </div>
                    <!-- group end -->
                    <!-- group start -->
                    <div class="info-group">
                        <h6><?php echo esc_html__( 'Date of Birth', 'applicant-registration-system' ); ?></h6>
                        <p><?php echo esc_html__( $date_of_birth, 'applicant-registration-system' ); // phpcs:ignore ?></p>
                    </div>
                    <!-- group end -->
                    <!-- group start -->
                    <div class="info-group">
                        <h6><?php echo esc_html__( 'Do You Have Driving Licence?', 'applicant-registration-system' ); ?></h6>
                        <p>
                        <?php
						if ( isset( $have_driving_licence ) && 'on' === $have_driving_licence ) {
							echo esc_html__( 'Yes', 'applicant-registration-system' );
						} else {
							echo esc_html__( 'No', 'applicant-registration-system' );
						}
                        ?>
                        </p>
                    </div>
                    <!-- group end -->
                    <!-- group start -->
                    <div class="info-group">
                        <h6><?php echo esc_html__( 'Do You Have Car?', 'applicant-registration-system' ); ?></h6>
                        <p>
                        <?php
						if ( isset( $have_car ) && 'on' === $have_car ) {
							echo esc_html__( 'Yes', 'applicant-registration-system' );
						} else {
							echo esc_html__( 'No', 'applicant-registration-system' );
						}
                        ?>
                        </p>
                    </div>
                    <!-- group end -->
                </div>
            </div>
            <!-- personal information box end -->
            <!-- address contact box start -->
            <div class="form-step-box">
                <h4><?php echo esc_html__( 'Address &amp; Contact Details', 'applicant-registration-system' ); ?></h4>
                <div class="form-group-area">
                    <!-- group start -->
                    <div class="info-group">
                        <h6><?php echo esc_html__( 'Country', 'applicant-registration-system' ); ?></h6>
                        <p><?php echo esc_html__( $country, 'applicant-registration-system' ); // phpcs:ignore ?></p>
                    </div>
                    <!-- group end -->
                    <!-- group start -->
                    <div class="info-group">
                        <h6><?php echo esc_html__( 'City', 'applicant-registration-system' ); ?></h6>
                        <p><?php echo esc_html__( $city, 'applicant-registration-system' ); // phpcs:ignore ?></p>
                    </div>
                    <!-- group end -->
                    <!-- group start -->
                    <div class="info-group">
                        <h6><?php echo esc_html__( 'Zip Code', 'applicant-registration-system' ); ?></h6>
                        <p><?php echo esc_html__( $zip_code, 'applicant-registration-system' ); // phpcs:ignore ?></p>
                    </div>
                    <!-- group end -->
                    <!-- group start -->
                    <div class="info-group">
                        <h6><?php echo esc_html__( 'Street', 'applicant-registration-system' ); ?></h6>
                        <p><?php echo esc_html__( $street, 'applicant-registration-system' ); // phpcs:ignore ?></p>
                    </div>
                    <!-- group end -->
                    <!-- group start -->
                    <div class="info-group">
                        <h6><?php echo esc_html__( 'Apartment', 'applicant-registration-system' ); ?></h6>
                        <p><?php echo esc_html__( $apartment, 'applicant-registration-system' ); // phpcs:ignore ?></p>
                    </div>
                    <!-- group end -->
                    <!-- group start -->
                    <div class="info-group">
                        <h6><?php echo esc_html__( 'Mobile', 'applicant-registration-system' ); ?></h6>
                        <p><?php echo esc_html__( $mobile, 'applicant-registration-system' ); // phpcs:ignore ?></p>
                    </div>
                    <!-- group end -->
                    <!-- group start -->
                    <div class="info-group">
                        <h6><?php echo esc_html__( 'Phone Number', 'applicant-registration-system' ); ?></h6>
                        <p><?php echo esc_html__( $phone_number, 'applicant-registration-system' ); // phpcs:ignore ?></p>
                    </div>
                    <!-- group end -->
                </div>
            </div>
            <!-- address contact box end -->
            <!-- job requirement box start -->
            <div class="form-step-box">
                <h4><?php echo esc_html__( 'Indicate Here what Requirement Your Job Should Meet.', 'applicant-registration-system' ); ?></h4>
                <div class="form-group-area">
                    <!-- group start -->
                    <div class="info-group">
                        <h6><?php echo esc_html__( 'What Kind of job would you like to have?', 'applicant-registration-system' ); ?></h6>
                        <p>
                        <?php
						if ( ! empty( $job_type ) ) {
							$job_term = get_term_by( 'id', $job_type, 'job_listing_type' );
                            echo $job_term->name;
						}
                        ?>
                        </p>
                    </div>
                    <!-- group end -->
                    <!-- group start -->
                    <div class="info-group">
                        <h6><?php echo esc_html__( 'How far are you willing to travel for work', 'applicant-registration-system' ); ?></h6>
                        <p><?php echo esc_html__( $willing_to_travel, 'applicant-registration-system' ); // phpcs:ignore ?></p>
                    </div>
                    <!-- group end -->
                    <!-- group start -->
                    <div class="info-group">
                        <h6><?php echo esc_html__( 'How many days a week would you like to travel?', 'applicant-registration-system' ); ?></h6>
                        <p><?php echo esc_html__( $like_to_travel, 'applicant-registration-system' ); // phpcs:ignore ?> Days</p>
                    </div>
                    <!-- group end -->
                    <!-- group start -->
                    <div class="info-group">
                        <h6><?php echo esc_html__( 'How may hours a week would you like to work?', 'applicant-registration-system' ); ?></h6>
                        <p>
                            <?php echo esc_html__( $minimum_hours_per_week, 'applicant-registration-system' ); // phpcs:ignore ?>hr - 
                            <?php echo esc_html__( $maximum_hours_per_week, 'applicant-registration-system' ); // phpcs:ignore ?>hr
                        </p>
                    </div>
                    <!-- group end -->
                    <!-- group start -->
                    <div class="info-group">
                        <h6><?php echo esc_html__( 'What is your desire income?', 'applicant-registration-system' ); ?></h6>
                        <p><?php echo esc_html__( $desired_monthly_income, 'applicant-registration-system' ); // phpcs:ignore ?></p>
                    </div>
                    <!-- group end -->
                </div>
            </div>
            <!-- job requirement box end -->
            <!-- work experience box start -->
            <div class="form-step-box">
                <h4><?php echo esc_html__( 'Work Experience', 'applicant-registration-system' ); ?></h4>
                <!-- expericen scroller start -->
                <div class="experience-profile-info">

                    <?php
                    if ( ! empty( $work_experience ) && is_array( $work_experience ) ) {
                        foreach ( $work_experience as $key => $experience ) {
							?>
                    <!-- experience item start -->
                    <div class="experience-profile">
                        <div class="experience-thumbnail">
                            <h4><?php echo esc_html__( 'Experience', 'applicant-registration-system' ); ?> <?php echo $key + 1; ?></h4>
                            <div class="experience-thumbnail-trash">
                                <a href="#">
                                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/icons/trash.svg" class="img-fluid" alt="Trash">
                                </a>
                            </div>
                        </div>
                        <div class="login-information-section login-information-section-second login-information-section-third experience-information-section">
                            <div class="personal-info experience-info">
                                <label for="company name"><?php echo esc_html__( 'Company Name', 'applicant-registration-system' ); ?></label><br>
                                <p><?php echo esc_html__( $experience['company'], 'applicant-registration-system' ); // phpcs:ignore ?></p>
                            </div>
                            <div class="personal-info experience-info">
                                <label for="department"><?php echo esc_html__( 'Department', 'applicant-registration-system' ); ?></label><br>
                                <p><?php echo esc_html__( $experience['department'], 'applicant-registration-system' ); // phpcs:ignore ?></p>
                            </div>
                            <div class="personal-info experience-info">
                                <label for="designation"><?php echo esc_html__( 'Designation', 'applicant-registration-system' ); ?></label><br>
                                <p><?php echo esc_html__( $experience['designation'], 'applicant-registration-system' ); // phpcs:ignore ?></p>
                            </div>
                            <div class="personal-info experience-info">
                                <label for="work"><?php echo esc_html__( 'Work Period', 'applicant-registration-system' ); ?></label><br>
                                <p><?php printf( '%s - %s', esc_html__( $experience['work_period_min'], 'applicant-registration-system' ), esc_html__( $experience['work_period_max'], 'applicant-registration-system' ) ); // phpcs:ignore ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- experience item end -->
							<?php
						}
					} else {
                        ?>
                        <p><?php echo esc_html__( 'Work Experience Not Found!', 'applicant-registration-system' ); ?></p>
                        <?php
                    }
					?>
                </div>
                <!-- expericen scroller end -->
            </div>
            <!-- work experience box end -->
            <!-- connect social media box start -->
            <div class="form-step-box">
                <h4><?php echo esc_html__( 'Connect Social Media', 'applicant-registration-system' ); ?></h4>
                <!-- social part start-->
                <div class="experience-profile-info experience-social-info">
                    <!--experience-profile-one-->
                    <div class="experience-profile experience-social-profile">
                        <div class="social-link experience-social-link">
                            <p><?php echo esc_html__( 'Facebook', 'applicant-registration-system' ); ?></p>
                            <?php
							if ( ! empty( $facebook ) ) {
								?>
                                <a href="" type="button" class="btn btn-connect"><?php echo esc_html__( 'Connected', 'applicant-registration-system' ); ?></a>
                            <?php } else { ?>
                                <a href="" type="button" class="btn btn-connect"><?php echo esc_html__( 'Not Connected', 'applicant-registration-system' ); ?></a>
                            <?php } ?>
                        </div>
                    </div>
                    <!--experience-profile-end-->
                    <!--experience-profile-two-->
                    <div class="experience-profile experience-social-profile">
                        <div class="social-link experience-social-link">
                            <p><?php echo esc_html__( 'Instagram', 'applicant-registration-system' ); ?></p>
                            <?php
							if ( ! empty( $instagram ) ) {
								?>
                                <a href="" type="button" class="btn btn-connect"><?php echo esc_html__( 'Connected', 'applicant-registration-system' ); ?></a>
                            <?php } else { ?>
                                <a href="" type="button" class="btn btn-connect"><?php echo esc_html__( 'Not Connected', 'applicant-registration-system' ); ?></a>
                            <?php } ?>
                        </div>
                    </div>
                    <!--experience-profile-two-->
                    <!--experience-profile-three-->
                    <div class="experience-profile experience-social-profile">
                        <div class="social-link experience-social-link">
                            <p><?php echo esc_html__( 'Twitter', 'applicant-registration-system' ); ?></p>
                            <?php
							if ( ! empty( $twitter ) ) {
								?>
                                <a href="" type="button" class="btn btn-connect"><?php echo esc_html__( 'Connected', 'applicant-registration-system' ); ?></a>
                            <?php } else { ?>
                                <a href="" type="button" class="btn btn-connect"><?php echo esc_html__( 'Not Connected', 'applicant-registration-system' ); ?></a>
                            <?php } ?>
                        </div>
                    </div>
                    <!--experience-profile-three-->
                    <!--experience-profile-four-->
                    <div class="experience-profile experience-social-profile">
                        <div class="social-link experience-social-link">
                            <p><?php echo esc_html__( 'Linkedin', 'applicant-registration-system' ); ?></p>
                            <?php
							if ( ! empty( $linkedin ) ) {
								?>
                                <a href="" type="button" class="btn btn-connect"><?php echo esc_html__( 'Connected', 'applicant-registration-system' ); ?></a>
                            <?php } else { ?>
                                <a href="" type="button" class="btn btn-connect"><?php echo esc_html__( 'Not Connected', 'applicant-registration-system' ); ?></a>
                            <?php } ?>
                        </div>
                    </div>
                    <!--experience-profile-four-->
                </div>
                <!--social part end-->
            </div>
            <!-- connect social media box end -->
            <!-- connect social media box start -->
            <div class="form-step-box">
                <h4><?php echo esc_html__( 'Resume File', 'applicant-registration-system' ); ?></h4>
                <?php
                $file = get_attached_file( $resume );
                $attachment_url = wp_get_attachment_url( $resume );

                $file_size = false;

				if ( isset( $meta['filesize'] ) ) {
					$file_size = $meta['filesize'];
				} elseif ( file_exists( $file ) ) {
					$file_size = wp_filesize( $file );
				}
				if ( ! empty( $attachment_url ) ) {
					?>
                <div class="resume-updated">
                    <p><?php echo esc_html( wp_basename( $file ) ); ?>  <span><?php echo size_format( $file_size ); ?></span></p>
                    <div class="resume-delete">
                        <p><img src="<?php echo get_theme_file_uri(); ?>/assets/images/icons/check-circle.svg" alt=""><?php echo esc_html__( 'Completed', 'applicant-registration-system' ); ?></p>
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/icons/trash.svg" alt="">
                    </div>
                </div>
                <?php } else { ?>
                    <div class="resume-updated">
                        <p><?php echo esc_html__( 'No Resume Uploaded', 'applicant-registration-system' ); ?></p>
                    </div>
                <?php } ?>
                <!-- resume -->
            </div>
            <!-- connect social media box end -->
        </div>
        <div class="form-submit">
            <?php
                global $wp;
                $prev_url = home_url( $wp->request ) . '?step=personal-information';
            ?>
            <a href="<?php echo esc_url( $prev_url ); ?>" class="btn btn-back btn-edit"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/icons/pencil-alt.svg" alt=""><?php echo esc_html__( 'Edit Information', 'applicant-registration-system' ); ?></a>
            <button  type="submit" class="btn-submit" id="complete-btn"><?php echo esc_html__( 'Complete', 'applicant-registration-system' ); ?><img src="<?php echo get_theme_file_uri(); ?>/assets/images/icons/check-circle-two.svg" alt=""></button>  
        </div>
    </div>
</div>