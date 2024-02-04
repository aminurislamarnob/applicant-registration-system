<?php
    $current_user_id = get_current_user_id();
    $twitter = get_user_meta( $current_user_id, 'twitter', true );
    $facebook = get_user_meta( $current_user_id, 'facebook', true );
    $linkedin = get_user_meta( $current_user_id, 'linkedin', true );
    $instagram = get_user_meta( $current_user_id, 'instagram', true );
    $resume = get_user_meta( $current_user_id, 'resume', true );
    $work_experience = get_user_meta( $current_user_id, 'work_experience', true );
?>
<!--login details start-->
<div class="login-main-wrapper">
    <div class="login-container">
        <form id="work-exp-form" method="post" class="login-from" enctype="multipart/form-data">
            <div class="form-submit form-later">
                <button class="btn-submit btn-later"><?php echo esc_html__( 'Do it later', 'applicant-registration-system' ); ?></button>  
            </div>
            <div class="login-form-wrap login-form-wrap-second">
                <div class="login-header login-header-with-btn">
                    <div class="header-title">
                        <h4><?php echo esc_html__( 'Work Experience', 'applicant-registration-system' ); ?></h4>
                        <p><?php echo esc_html__( 'Enter your work experience if you have any.', 'applicant-registration-system' ); ?></p>
                    </div>
                    <button data-repeater-create type="button">
                        <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.99935 3.1958V13.8625M13.3327 8.52913L2.66602 8.52913" stroke="#276CF4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <?php echo esc_html__( 'Add', 'applicant-registration-system' ); ?>
                    </button>
                </div>
                <!-- form start -->
                <div class="repeater">
                    <div data-repeater-list="experience">
                        
                    <?php
                    if ( ! empty( $work_experience ) && is_array( $work_experience ) && count( $work_experience ) >= 1 ) {
                        foreach ( $work_experience as $key => $experience ) {
							?>
                        <div data-repeater-item>
                            <div class="experience-fields">
                                <div class="login-from">
                                    <div class="personal-info">
                                        <div class="form-group-left">
                                            <div class="form-group form-error">
                                                <label for="company"><?php echo esc_html__( 'Company Name', 'applicant-registration-system' ); ?></label>
                                                <input type="text" placeholder="Company Name" id="company" name="company" class="form-control" value="<?php echo esc_html__( ! empty( $experience['company'] ) ? $experience['company'] : '', 'applicant-registration-system' ); ?>">
                                            </div>
                                            <div class="form-group form-error">
                                                <label for="department"><?php echo esc_html__( 'Department', 'applicant-registration-system' ); ?></label>
                                                <input type="text" placeholder="Department" id="department" name="department" class="form-control" value="<?php echo esc_html__( ! empty( $experience['department'] ) ? $experience['department'] : '', 'applicant-registration-system' ); ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-right">
                                        <div class="form-group form-error">
                                            <label for="designation"><?php echo esc_html__( 'Designation', 'applicant-registration-system' ); ?></label>
                                            <input type="text" placeholder="Designation" id="designation" name="designation" class="form-control" value="<?php echo esc_html__( ! empty( $experience['designation'] ) ? $experience['designation'] : '', 'applicant-registration-system' ); ?>">
                                        </div>
                                        <div class="form-group form-error">
                                            <label for="work preiod"><?php echo esc_html__( 'Work Period', 'applicant-registration-system' ); ?></label><br>
                                            <div class="maxmini-section">
                                                <input type="date" name="work_period_min" placeholder="dd-mm-yyyy" value="<?php echo esc_html__( ! empty( $experience['work_period_min'] ) ? $experience['work_period_min'] : '', 'applicant-registration-system' ); ?>">
                                                <div class="line"></div>
                                                <input type="date" name="work_period_max" placeholder="dd-mm-yyyy" value="<?php echo esc_html__( ! empty( $experience['work_period_max'] ) ? $experience['work_period_max'] : '', 'applicant-registration-system' ); ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-submit">
                                <button data-repeater-delete type="button" class="btn-submit"><?php echo esc_html__( 'Remove', 'applicant-registration-system' ); ?></button>
                            </div> 
                        </div>
							<?php
                        }
					} else {
						?>
                        <div data-repeater-item>
                            <div class="experience-fields">
                                <div class="login-from">
                                    <div class="personal-info">
                                        <div class="form-group-left">
                                            <div class="form-group form-error">
                                                <label for="company"><?php echo esc_html__( 'Company Name', 'applicant-registration-system' ); ?></label>
                                                <input type="text" placeholder="Company Name" id="company" name="company" class="form-control">
                                            </div>
                                            <div class="form-group form-error">
                                                <label for="department"><?php echo esc_html__( 'Department', 'applicant-registration-system' ); ?></label>
                                                <input type="text" placeholder="Department" id="department" name="department" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-right">
                                        <div class="form-group form-error">
                                            <label for="designation"><?php echo esc_html__( 'Designation', 'applicant-registration-system' ); ?></label>
                                            <input type="text" placeholder="Designation" id="designation" name="designation" class="form-control">
                                        </div>
                                        <div class="form-group form-error">
                                            <label for="work preiod"><?php echo esc_html__( 'Work Period', 'applicant-registration-system' ); ?></label><br>
                                            <div class="maxmini-section">
                                                <input type="date" name="work_period_min" placeholder="dd-mm-yyyy">
                                                <div class="line"></div>
                                                <input type="date" name="work_period_max" placeholder="dd-mm-yyyy">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-submit">
                                <button data-repeater-delete type="button" class="btn-submit"><?php echo esc_html__( 'Remove', 'applicant-registration-system' ); ?></button>
                            </div> 
                        </div>
                        <?php } ?>
                    </div>
                </div>
                
                <!--social part start-->
                <div class="login-header social-header">
                    <h4><?php echo esc_html__( 'Connect Social Media', 'applicant-registration-system' ); ?></h4>
                    <p><?php echo esc_html__( 'Connect your social media.', 'applicant-registration-system' ); ?></p>
                </div>
                <div class="connect-social-section">
                    <div class="form-group form-error">
                        <div class="social-link">
                            <p><?php echo esc_html__( 'Connect Your Facebook', 'applicant-registration-system' ); ?></p>
                            <?php
							if ( ! empty( $facebook ) ) {
								?>
                                <a href="#" type="button" class="btn btn-connect"><?php echo esc_html__( 'Connected', 'applicant-registration-system' ); ?></a>
                            <?php } else { ?>
                                <a href="#" type="button" class="btn btn-connect"><?php echo esc_html__( 'Connect', 'applicant-registration-system' ); ?></a>
                            <?php } ?>
                        </div>
                        <input class="form-control d-none" type="text" name="facebook" placeholder="<?php echo esc_html__( 'Your Facebook Profile Link', 'applicant-registration-system' ); ?>"value="<?php echo esc_attr( ! empty( $facebook ) ? $facebook : '' ); ?>">
                    </div>
                    <div class="form-group form-error">
                        <div class="social-link">
                            <p><?php echo esc_html__( 'Connect Your LinkedIn', 'applicant-registration-system' ); ?></p>
                            <?php
							if ( ! empty( $linkedin ) ) {
								?>
                                <a href="#" type="button" class="btn btn-connect"><?php echo esc_html__( 'Connected', 'applicant-registration-system' ); ?></a>
                            <?php } else { ?>
                                <a href="#" type="button" class="btn btn-connect"><?php echo esc_html__( 'Connect', 'applicant-registration-system' ); ?></a>
                            <?php } ?>
                        </div>
                        <input class="form-control d-none" type="text" name="linkedin" placeholder="<?php echo esc_html__( 'Your Linkedin Profile Link', 'applicant-registration-system' ); ?>" value="<?php echo esc_attr( ! empty( $linkedin ) ? $linkedin : '' ); ?>">
                    </div>
                    <div class="form-group form-error">
                        <div class="social-link">
                            <p><?php echo esc_html__( 'Connect Your Instagram', 'applicant-registration-system' ); ?></p>
                            <?php
							if ( ! empty( $instagram ) ) {
								?>
                                <a href="#" type="button" class="btn btn-connect"><?php echo esc_html__( 'Connected', 'applicant-registration-system' ); ?></a>
                            <?php } else { ?>
                                <a href="#" type="button" class="btn btn-connect"><?php echo esc_html__( 'Connect', 'applicant-registration-system' ); ?></a>
                            <?php } ?>
                        </div>
                        <input class="form-control d-none" type="text" name="instagram" placeholder="<?php echo esc_html__( 'Your Instagram Profile Link', 'applicant-registration-system' ); ?>" value="<?php echo esc_attr( ! empty( $instagram ) ? $instagram : '' ); ?>">
                    </div>
                    <div class="form-group form-error">
                        <div class="social-link">
                            <p><?php echo esc_html__( 'Connect Your Twitter', 'applicant-registration-system' ); ?></p>
                            <?php
							if ( ! empty( $twitter ) ) {
								?>
                                <a href="#" type="button" class="btn btn-connect"><?php echo esc_html__( 'Connected', 'applicant-registration-system' ); ?></a>
                            <?php } else { ?>
                                <a href="#" type="button" class="btn btn-connect"><?php echo esc_html__( 'Connect', 'applicant-registration-system' ); ?></a>
                            <?php } ?>
                        </div>
                        <input class="form-control d-none" type="text" name="twitter" placeholder="<?php echo esc_html__( 'Your Twitter Profile Link', 'applicant-registration-system' ); ?>" value="<?php echo esc_attr( ! empty( $twitter ) ? $twitter : '' ); ?>">
                    </div>
                </div>
                <!--Social part end-->
                <!--Upload part start-->
                <div class="login-header uploads-resume">
                    <h4><?php echo esc_html__( 'Upload your Resume file', 'applicant-registration-system' ); ?></h4>
                    <p><?php echo esc_html__( 'Upload your resume file in one of the following formats: doc, docx, pdf, txt.', 'applicant-registration-system' ); ?></p>
                </div>
                <!--attach file start-->
                <div class="attach-file-section">
                    <div id="image-container" class="upload-container">
                        <input type="hidden" id="resume_id" name="resume" value="<?php echo esc_html( ! empty( $resume ) ? $resume : '' ); ?>">
                        <!-- <input type="hidden" id="resume_url" name="product_thumbnail_url" value=""> -->
                        <label id="upload-resume-file" for="resume" class="upload-file">
                            <span>
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/icons/attach.svg" class="" alt="">
                                <p><?php echo esc_html__( 'Attach File', 'applicant-registration-system' ); ?></p>
                                <p class="drag-file"><?php echo esc_html__( 'or drag and drop here', 'applicant-registration-system' ); ?></p>
                            </span>
                        </label>
                    </div>
                    <?php
                    if ( ! empty( $resume ) ) {
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
                    <div id="uploaded-resume" class="resume-updated">
                        <p id="uploaded-resume-title"><?php echo esc_html( wp_basename( $file ) ); ?>  <span><?php echo size_format( $file_size ); ?></span></p>
                        <div class="resume-delete">
                            <p><img src="<?php echo get_theme_file_uri(); ?>/assets/images/icons/check-circle.svg" alt=""><?php echo esc_html__( 'Completed', 'applicant-registration-system' ); ?></p>
                            <a href="#" id="remove-resume"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/icons/trash.svg" alt=""></a>
                        </div>
                    </div>
							<?php
                        }
					} else {
						?>
                    <div id="uploaded-resume" class="resume-updated" style="display: none;">
                        <p id="uploaded-resume-title"><?php echo esc_html__( 'Resume.pdf', 'applicant-registration-system' ); ?> <span><?php echo esc_html__( '1.2MB', 'applicant-registration-system' ); ?></span></p>
                        <div class="resume-delete">
                            <p><img src="<?php echo get_theme_file_uri(); ?>/assets/images/icons/check-circle.svg" alt=""><?php echo esc_html__( 'Completed', 'applicant-registration-system' ); ?></p>
                            <a href="#" id="remove-resume"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/icons/trash.svg" alt=""></a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <!--attach file end-->
                <!--Upload apart end-->
                <!-- form end -->
            </div>
            <input type="hidden" name="nonce" value="<?php echo wp_create_nonce( 'bex_work_exp_nonce' ); ?>">
            <input type="hidden" name="action" value="bex_work_exp">

            <div class="form-submit">
                <?php
                    global $wp;
                    $prev_url = home_url( $wp->request ) . '?step=your-job-requirement';
                ?>
                <a href="<?php echo esc_url( $prev_url ); ?>" class="btn-submit btn-back"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/icons/chevron-left.svg"alt="Icon" class="fluid"><?php echo esc_html__( 'Go back', 'applicant-registration-system' ); ?></a>
                <button type="submit" class="btn-submit" id="work-exp-form-btn">
                    <span class="btn-text"><?php echo esc_attr__( 'Next Step', 'applicant-registration-system' ); ?> <img src="<?php echo get_theme_file_uri(); ?>/assets/images/icons/chevron-right.svg" alt="Icon" class="fluid">
                    </span>
                    <span class="spinner"></span>
                </button>
            </div>
        </form>
    </div>
</div>
<!--login details end-->