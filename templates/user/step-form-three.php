<?php
    $current_user_id = get_current_user_id();
    $job_type = get_user_meta( $current_user_id, 'job_type', true );
    $like_to_travel = get_user_meta( $current_user_id, 'like_to_travel', true );
    $desired_monthly_income = get_user_meta( $current_user_id, 'desired_monthly_income', true );
    $maximum_hours_per_week = get_user_meta( $current_user_id, 'maximum_hours_per_week', true );
    $minimum_hours_per_week = get_user_meta( $current_user_id, 'minimum_hours_per_week', true );
    $willing_to_travel = get_user_meta( $current_user_id, 'willing_to_travel', true );
?>
<div class="login-main-wrapper">
    <form id="job-requirment-form" method="post">
        <?php wp_nonce_field( 'registration-requirement', 'registration-requirement-nonce' ); ?>
        <div class="login-container">
            <div class="login-form-wrap">
                <div class="login-header">
                    <h4><?php echo esc_html__( 'Indicate here what requirement your job should meet', 'applicant-registration-system' ); ?></h4>
                    <p><?php echo esc_html__( 'Please enter the necessary information.', 'applicant-registration-system' ); ?></p>
                </div>
                <!-- form start -->
                <div class="login-from">
                    <div class="personal-info">
                        <div class="form-group-left">
                            <div class="form-group form-error">
                                <label for="job"><?php echo esc_html__( 'What kind of job would you like to have?', 'applicant-registration-system' ); ?></label>
                                <?php
                                $taxonomies = get_terms(
                                    array(
										'taxonomy' => 'job_listing_type',
										'hide_empty' => false,
                                    )
                                );
                                // var_dump( $taxonomies );
                                if ( ! empty( $taxonomies ) ) {
									?>
                                <select name="job_type" id="job_type" class="form-control required">
                                    <option value=""><?php echo esc_attr__( 'Type your job & choose from the list', 'applicant-registration-system' ); ?></option>
                                    <?php foreach ( $taxonomies as $category ) { ?>
                                    <option value="<?php echo esc_attr( $category->term_id ); ?>" <?php echo ! empty( $job_type ) && (int) $job_type === $category->term_id ? 'selected' : ''; ?>><?php echo esc_html( $category->name ); ?></option>
                                    <?php } ?>
                                </select>
                                <?php } ?>
                            </div>
                            <div class="form-group form-error">
                                <div class="form-field">
                                    <label for="like_to_travel"><?php echo esc_html__( 'How many days a week would you like to travel?', 'applicant-registration-system' ); ?></label>
                                    <fieldset id="like_to_travel" class="required">
                                        <?php
                                        $like_to_travel_options = [ 1, 2, 3, 4, 5, 6, 7 ];

                                        $selected = 1;
										if ( ! empty( $like_to_travel ) ) {
											$selected = (int) $like_to_travel;
										}
                                        ?>
                                        <ul>
                                            <?php foreach ( $like_to_travel_options as $option ) { ?>
                                            <li>
                                                <label for="like_to_travel_<?php echo esc_attr( $option ); ?>"><?php echo esc_html( $option ); ?></label>
                                                <input type="radio" value="<?php echo esc_attr( $option ); ?>" id="like_to_travel_<?php echo esc_attr( $option ); ?>" name="like_to_travel" <?php echo $selected === (int) $option ? 'checked' : ''; ?>>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="form-group form-error">
                                <label for="desired_monthly_income"><?php echo esc_attr__( 'What is your desired monthly income?', 'applicant-registration-system' ); ?></label>
                                <input type="text" placeholder="<?php echo esc_attr__( 'Monthly income', 'applicant-registration-system' ); ?>" id="desired_monthly_income" name="desired_monthly_income" class="form-control required" value="<?php echo esc_html__( ! empty( $desired_monthly_income ) ? $desired_monthly_income : '', 'applicant-registration-system' ); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group-right">
                        <div class="form-group form-error">
                            <div class="form-field">
                            <label for="willing_to_travel"><?php echo esc_html__( 'How far are you willing to travel for work?', 'applicant-registration-system' ); ?></label>
                            <fieldset id="willing_to_travel">
                            <?php
                            $distances = [ '1KM', '2KM', '3KM', '4KM', '5KM', '6KM', '7KM' ];

                            $selected = '1KM';
							if ( ! empty( $willing_to_travel ) ) {
								$selected = $willing_to_travel;
							}
                            ?>
                                <ul>
                                    <?php foreach ( $distances as $distance ) { ?>
                                    <li>
                                        <label for="<?php echo esc_attr( $distance ); ?>"><?php echo esc_html( $distance ); ?></label>
                                        <input type="radio" value="<?php echo esc_attr( $distance ); ?>" id="<?php echo esc_attr( $distance ); ?>" name="willing_to_travel" <?php echo $selected === $distance ? 'checked' : ''; ?>>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </fieldset>
                            </div>
                        </div>
                        <div class="form-group form-error button-option">
                            <label for="job"><?php echo esc_html__( 'How many hours a week would you like to work?', 'applicant-registration-system' ); ?></label>
                            <div class="maxmini-section">
                                <div>
                                    <input type="text" placeholder="<?php echo esc_html__( 'Minimum hours', 'applicant-registration-system' ); ?>" name="minimum_hours_per_week" id="minimum_hours_per_week" value="<?php echo esc_html__( ! empty( $minimum_hours_per_week ) ? $minimum_hours_per_week : '', 'applicant-registration-system' ); ?>">
                                </div>
                                <div class="line"></div>
                                <div>
                                    <input type="text" placeholder="<?php echo esc_html__( 'Maximum hours', 'applicant-registration-system' ); ?>" name="maximum_hours_per_week" id="maximum_hours_per_week" value="<?php echo esc_html__( ! empty( $maximum_hours_per_week ) ? $maximum_hours_per_week : '', 'applicant-registration-system' ); ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- form end -->
            </div>
            <input type="hidden" name="nonce" value="<?php echo wp_create_nonce( 'bex_user_job_req_nonce' ); ?>">
            <div class="form-submit">
                <?php
                    global $wp;
                    $prev_url = home_url( $wp->request ) . '?step=personal-information';
                ?>
                <a href="<?php echo esc_url( $prev_url ); ?>" class="btn-submit btn-back"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/icons/chevron-left.svg"alt="Icon" class="fluid"><?php echo esc_html__( 'Go back', 'applicant-registration-system' ); ?></a>
                <button type="submit" id="job_req_submit" class="btn-submit"><?php echo esc_html__( 'Next Step', 'applicant-registration-system' ); ?> <img src="<?php echo get_theme_file_uri(); ?>/assets/images/icons/chevron-right.svg"alt="Icon" class="fluid"></button>  
            </div>
        </div>
    </form>
</div>