<div class="login-main-wrapper">
    <form method="post">
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
                            <select name="job_type" id="job_type" class="form-control">
                                <option value=""><?php echo esc_attr__( 'Type your job & choose from the list', 'applicant-registration-system' ); ?></option>
                                <option value="1">Full Time</option>
                                <option value="2">Part Time</option>
                                <option value="3">Others</option>
                            </select>
                            </div>
                            <div class="form-group form-error">
                            <div class="form-field">
                                <label for="like_to_travel"><?php echo esc_html__( 'How many days a week would you like to travel?', 'applicant-registration-system' ); ?></label>
                                <fieldset id="like_to_travel">
                                    <ul>
                                        <li>
                                        <label for="like_to_travel_1"><?php echo esc_html__( '1', 'applicant-registration-system' ); ?></label>
                                        <input type="radio" value="1" id="like_to_travel_1" name="like_to_travel">
                                        </li>
                                        <li>
                                        <label for="like_to_travel_2"><?php echo esc_html__( '2', 'applicant-registration-system' ); ?></label>
                                        <input type="radio" value="2" id="like_to_travel_2" name="like_to_travel">
                                        </li>
                                        <li>
                                        <label for="like_to_travel_3"><?php echo esc_html__( '3', 'applicant-registration-system' ); ?></label>
                                        <input type="radio" value="3" id="like_to_travel_3" name="like_to_travel">
                                        </li>
                                        <li>
                                        <label for="like_to_travel_4"><?php echo esc_html__( '4', 'applicant-registration-system' ); ?></label>
                                        <input type="radio" value="4" id="like_to_travel_4" name="like_to_travel">
                                        </li>
                                        <li>
                                        <label for="like_to_travel_5"><?php echo esc_html__( '5', 'applicant-registration-system' ); ?></label>
                                        <input type="radio" value="5" id="like_to_travel_5" name="like_to_travel">
                                        </li>
                                        <li>
                                        <label for="like_to_travel_6"><?php echo esc_html__( '6', 'applicant-registration-system' ); ?></label>
                                        <input type="radio" value="6" id="like_to_travel_6" name="like_to_travel">
                                        </li>
                                        <li>
                                        <label for="like_to_travel_7"><?php echo esc_html__( '7', 'applicant-registration-system' ); ?></label>
                                        <input type="radio" value="7" id="like_to_travel_7" name="like_to_travel">
                                        </li>
                                    </ul>
                                </fieldset>
                            </div>
                            </div>
                            <div class="form-group form-error">
                            <label for="desired_monthly_income"><?php echo esc_attr__( 'What is your desired monthly income?', 'applicant-registration-system' ); ?></label>
                            <input type="text" placeholder="<?php echo esc_attr__( 'Monthly income', 'applicant-registration-system' ); ?>" id="desired_monthly_income" name="desired_monthly_income" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group-right">
                        <div class="form-group form-error">
                            <div class="form-field">
                            <label for="willing_to_travel"><?php echo esc_html__( 'How far are you willing to travel for work?', 'applicant-registration-system' ); ?></label>
                            <fieldset id="willing_to_travel">
                                <ul>
                                    <li>
                                        <label for="1km"><?php echo esc_html__( '1KM', 'applicant-registration-system' ); ?></label>
                                        <input type="radio" value="1km" id="1km" name="willing_to_travel">
                                    </li>
                                    <li>
                                        <label for="2KM"><?php echo esc_html__( '2KM', 'applicant-registration-system' ); ?></label>
                                        <input type="radio" value="2KM" id="2KM" name="willing_to_travel">
                                    </li>
                                    <li>
                                        <label for="3KM"><?php echo esc_html__( '3KM', 'applicant-registration-system' ); ?></label>
                                        <input type="radio" value="3KM" id="3KM" name="willing_to_travel">
                                    </li>
                                    <li>
                                        <label for="4KM"><?php echo esc_html__( '4KM', 'applicant-registration-system' ); ?></label>
                                        <input type="radio" value="4KM" id="4KM" name="willing_to_travel">
                                    </li>
                                    <li>
                                        <label for="5KM"><?php echo esc_html__( '5KM', 'applicant-registration-system' ); ?></label>
                                        <input type="radio" value="5KM" id="5KM" name="willing_to_travel">
                                    </li>
                                    <li>
                                        <label for="6KM"><?php echo esc_html__( '6KM', 'applicant-registration-system' ); ?></label>
                                        <input type="radio" value="6KM" id="6KM" name="willing_to_travel">
                                    </li>
                                    <li>
                                        <label for="7KM"><?php echo esc_html__( '7KM', 'applicant-registration-system' ); ?></label>
                                        <input type="radio" value="7KM" id="7KM" name="willing_to_travel">
                                    </li>
                                </ul>
                            </fieldset>
                            </div>
                        </div>
                        <div class="form-group form-error button-option">
                            <label for="job"><?php echo esc_html__( 'How many hours a week would you like to work?', 'applicant-registration-system' ); ?></label>
                            <div class="maxmini-section">
                            <input type="text" placeholder="<?php echo esc_html__( 'Minimum hours', 'applicant-registration-system' ); ?>" name="minimum_hours" id="minimum_hours">
                            <div class="line"></div>
                            <input type="text" placeholder="<?php echo esc_html__( 'Minimum hours', 'applicant-registration-system' ); ?>" name="maximum_hours" id="maximum_hours">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- form end -->
            </div>
            <div class="form-submit">
                <a href="#" class="btn-submit btn-back"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/icons/chevron-left.svg"alt="Icon" class="fluid"><?php echo esc_html__( 'Go back', 'applicant-registration-system' ); ?></a>
                <button type="submit" class="btn-submit"><?php echo esc_html__( 'Next Step', 'applicant-registration-system' ); ?> <img src="<?php echo get_theme_file_uri(); ?>/assets/images/icons/chevron-right.svg"alt="Icon" class="fluid"></button>  
            </div>
        </div>
    </form>
</div>