<?php
    $current_user_id = get_current_user_id();
    $first_name = get_user_meta( $current_user_id, 'first_name', true );
    $last_name = get_user_meta( $current_user_id, 'last_name', true );
    $date_of_birth = get_user_meta( $current_user_id, 'date_of_birth', true );
    $have_car = get_user_meta( $current_user_id, 'have_car', true );
    $have_driving_licence = get_user_meta( $current_user_id, 'have_driving_licence', true );
    $city = get_user_meta( $current_user_id, 'city', true );
    $country = get_user_meta( $current_user_id, 'country', true );
    $zip_code = get_user_meta( $current_user_id, 'zip_code', true );
    $street = get_user_meta( $current_user_id, 'street', true );
    $apartment = get_user_meta( $current_user_id, 'apartment', true );
    $mobile = get_user_meta( $current_user_id, 'mobile', true );
    $phone_number = get_user_meta( $current_user_id, 'phone_number', true );
?>
<div class="applicant-step-form">
        <!--login details start-->
        <div class="login-main-wrapper">
            <form method="post">
                <?php wp_nonce_field( 'registration-personal-info', 'registration-personal-info-nonce' ); ?>
                <div class="login-container">
                    <div class="login-form-wrap">
                        <div class="login-header">
                            <h4><?php echo esc_html__( 'Personal Information', 'applicant-registration-system' ); ?></h4>
                            <p><?php echo esc_html__( 'Please enter the necessary information.', 'applicant-registration-system' ); ?></p>
                        </div>
                        <!-- form start -->
                        <div class="login-from">
                            <div class="personal-info">
                            <div class="form-group-left">
                                <div class="form-group form-error">
                                    <label for="first_name"><?php echo esc_html__( 'First Name', 'applicant-registration-system' ); ?></label>
                                    <input type="text" value="<?php echo esc_html__( ! empty( $first_name ) ? $first_name : '', 'applicant-registration-system' ); ?>" placeholder="<?php echo esc_attr__( 'First name', 'applicant-registration-system' ); ?>" id="first_name" name="first_name" class="form-control required">
                                </div>
                                <div class="form-group form-error">
                                    <label for="date_of_birth"><?php echo esc_html__( 'Date of Birth', 'applicant-registration-system' ); ?></label>
                                    <input type="date" value="<?php echo esc_html__( ! empty( $date_of_birth ) ? $date_of_birth : '', 'applicant-registration-system' ); ?>" placeholder="<?php echo esc_attr__( 'dd-mm-yyyy', 'applicant-registration-system' ); ?>" id="date_of_birth" name="date_of_birth" class="form-control required">
                                </div>
                            </div>
                            </div>
                            <div class="form-group-right">
                            <div class="form-group form-error">
                                <label for="last_name"><?php echo esc_html__( 'Last Name', 'applicant-registration-system' ); ?></label>
                                <input type="text" value="<?php echo esc_html__( ! empty( $last_name ) ? $last_name : '', 'applicant-registration-system' ); ?>" placeholder="Last name" id="last_name" name="last_name" class="form-control required">
                            </div>
                            <div class="form-group form-error button-option">
                                <div class="form-field">
                                    <label for="have_driving_licence"><?php echo esc_html__( 'Do you have Driving Licence?', 'applicant-registration-system' ); ?></label>
                                    <input type="checkbox" name="have_driving_licence" id="have_driving_licence" <?php echo ! empty( $have_driving_licence ) && 'on' === $have_driving_licence ? 'checked' : ''; ?>>
                                </div>
                                <div class="form-field">
                                    <label for="have_car"><?php echo esc_html__( 'Do you have Car?', 'applicant-registration-system' ); ?></label>
                                    <input type="checkbox" name="have_car" id="have_car" <?php echo ! empty( $have_car ) && 'on' === $have_car ? 'checked' : ''; ?>>
                                </div>
                            </div>
                            </div>
                            <div class="form-group-left">
                            <div class="form-group form-error">
                                <label for="country"><?php echo esc_html__( 'Country', 'applicant-registration-system' ); ?></label>
                                <select name="country" class="form-control required">
                                    <option value="">Country</option>
                                    <?php foreach ( WeLabs\ApplicantRegistrationSystem\Helpers::get_countries() as $key => $value ) { ?>
                                    <option value="<?php echo $key; ?>" <?php echo ! empty( $country ) && $country === $key ? 'selected' : ''; ?>><?php echo $value; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group form-error">
                                <label for="zip_code"><?php echo esc_html__( 'Zip Code', 'applicant-registration-system' ); ?></label>
                                <input type="text" value="<?php echo esc_html__( ! empty( $zip_code ) ? $zip_code : '', 'applicant-registration-system' ); ?>" placeholder="<?php echo esc_attr__( 'Zip Code', 'applicant-registration-system' ); ?>" id="zip_code" name="zip_code" class="form-control required">
                            </div>
                            <div class="form-group form-error">
                                <label for="apartment"><?php echo esc_html__( 'Apartment', 'applicant-registration-system' ); ?></label>
                                <input type="text" value="<?php echo esc_html__( ! empty( $apartment ) ? $apartment : '', 'applicant-registration-system' ); ?>" placeholder="<?php echo esc_attr__( 'Apartment', 'applicant-registration-system' ); ?>" id="apartment" name="apartment" class="form-control">
                            </div>
                            <div class="form-group form-error">
                                <label for="phone_number"><?php echo esc_html__( 'Phone', 'applicant-registration-system' ); ?></label>
                                <input type="text" value="<?php echo esc_html__( ! empty( $phone_number ) ? $phone_number : '', 'applicant-registration-system' ); ?>" placeholder="<?php echo esc_attr__( 'Phone Number', 'applicant-registration-system' ); ?>" id="phone_number" name="phone_number" class="form-control required">
                            </div>
                            </div>
                            <div class="form-group-right">
                            <div class="form-group form-error">
                                <label for="city"><?php echo esc_html__( 'City', 'applicant-registration-system' ); ?></label>
                                <input type="text" value="<?php echo esc_html__( ! empty( $city ) ? $city : '', 'applicant-registration-system' ); ?>" placeholder="<?php echo esc_attr__( 'City', 'applicant-registration-system' ); ?>" id="city" name="city" class="form-control required">
                            </div>
                            <div class="form-group form-error">
                                <label for="street"><?php echo esc_html__( 'Street', 'applicant-registration-system' ); ?></label>
                                <input type="text" value="<?php echo esc_html__( ! empty( $street ) ? $street : '', 'applicant-registration-system' ); ?>" placeholder="<?php echo esc_attr__( 'Street', 'applicant-registration-system' ); ?>" id="street" name="street" class="form-control required">
                            </div>
                            <div class="form-group form-error">
                                <label for="mobile"><?php echo esc_html__( 'Mobile', 'applicant-registration-system' ); ?></label>
                                <input type="text" value="<?php echo esc_html__( ! empty( $mobile ) ? $mobile : '', 'applicant-registration-system' ); ?>" placeholder="<?php echo esc_attr__( '+31612345678', 'applicant-registration-system' ); ?>" id="mobile" name="mobile" class="form-control required">
                            </div>
                            </div>
                        </div>
                        <!-- form end -->
                    </div>
                    <input type="hidden" name="nonce" value="<?php echo wp_create_nonce( 'bex_user_personal_info_nonce' ); ?>">
                    <div class="form-submit">
                        <?php
                            global $wp;
                            $prev_url = home_url( $wp->request ) . '?step=user-registration';
                        ?>
                        <a class="btn-submit btn-back" href="<?php echo esc_url( $prev_url ); ?>"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/icons/chevron-left.svg"alt="Icon" class="fluid"><?php echo esc_attr__( 'Go back', 'applicant-registration-system' ); ?></a>
                        <button type="submit" id="bex-personal-info-submit" class="btn-submit">Next Step <img src="<?php echo get_theme_file_uri(); ?>/assets/images/icons/chevron-right.svg"alt="Icon" class="fluid"></button>  
                    </div>
                </div>
            </form>
        </div>
        <!--login details end-->
</div>