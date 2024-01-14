<div class="applicant-step-form">
    <form method="post">
        <?php wp_nonce_field( 'registration-requirement', 'registration-requirement-nonce' ); ?>
        <div class="form-wrapper-box">
            <div class="form-step-header">
                <h2><?php echo esc_html__( 'Indicate here what requirement your job should meet', 'applicant-registration-system' ); ?></h2>
                <p><?php echo esc_html__( 'Please enter the necessary information.', 'applicant-registration-system' ); ?></p>
            </div>
            <div class="form-group-row">
                <div class="form-field">
                    <label for="job_type"><?php echo esc_html__( 'What kind of job would you like to have?', 'applicant-registration-system' ); ?></label>
                    <select name="job_type" id="job_type">
                        <option value=""><?php echo esc_attr__( 'Type your job & choose from the list', 'applicant-registration-system' ); ?></option>
                        <option value="1">Full Time</option>
                        <option value="2">Part Time</option>
                        <option value="3">Others</option>
                    </select>
                </div>
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
            <div class="form-group-row">
                <div class="form-field">
                    <label for="job_type"><?php echo esc_html__( 'What kind of job would you like to have?', 'applicant-registration-system' ); ?></label>
                    <select name="job_type" id="job_type">
                        <option value=""><?php echo esc_attr__( 'Type your job & choose from the list', 'applicant-registration-system' ); ?></option>
                        <option value="1">Full Time</option>
                        <option value="2">Part Time</option>
                        <option value="3">Others</option>
                    </select>
                </div>
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
            <div class="form-fields-group">
                <label for="">How many hours a week would you like to work?</label>
                <div class="form-group-row">
                    <div class="form-field">
                        <input type="text" name="minimum_hours" id="minimum_hours" placeholder="<?php echo esc_attr__( 'Minimum hours', 'applicant-registration-system' ); ?>">
                    </div>
                    <div class="form-field">
                        <input type="text" name="maximum_hours" id="maximum_hours" placeholder="<?php echo esc_attr__( 'Maximum hours', 'applicant-registration-system' ); ?>">
                    </div>
                </div>
            </div>
            <div class="form-group-row">
                <div class="form-field">
                    <label for="monthly_income"><?php echo esc_attr__( 'What is your desired monthly income?', 'applicant-registration-system' ); ?></label>
                    <input type="text" name="monthly_income" id="monthly_income" placeholder="<?php echo esc_attr__( 'Monthly income', 'applicant-registration-system' ); ?>">
                </div>
            </div>
        </div>
        <div class="form-field form-action-button">
            <a href="#"><?php echo esc_attr__( 'Go back', 'applicant-registration-system' ); ?></a>
            <button type="submit"><?php echo esc_attr__( 'Next Step', 'applicant-registration-system' ); ?></button>
        </div>
    </form>
</div> 