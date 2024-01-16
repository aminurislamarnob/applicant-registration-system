<div class="login-main-wrapper">
    <form method="post" class="login-from" enctype="multipart/form-data">
    <?php wp_nonce_field( 'work-experience', 'work-experience-nonce' ); ?>
    <div class="login-container">
        <div class="form-submit form-later">
            <button class="btn-submit btn-later">Do it later</button>  
        </div>
        <div class="login-form-wrap login-form-wrap-second">
            <div class="login-header">
                <h4>Work Experience</h4>
                <p>Enter your work experience if you have any.</p>
            </div>
        <!-- form start -->
            <div class="personal-info">
                <div class="form-group-left">
                    <div class="form-group form-error">
                        <label for="comapny">Company Name</label>
                        <input type="text" placeholder="Company Name" id="company" name="company" class="form-control">
                    </div>
                    <div class="form-group form-error">
                        <label for="department">Department</label>
                        <input type="text" placeholder="Department" id="department" name="department" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group-right">
            <div class="form-group form-error">
                <label for="designation">Designation</label>
                <input type="text" placeholder="Designation" id="designation" name="designation" class="form-control">
            </div>
            <div class="form-group form-error">
                <label for="work preiod">Work  Period</label><br>
                    <div class="maxmini-section">
                        <input type="date" name="work_period_min" placeholder="dd-mm-yyyy">
                        <div class="line"></div>
                        <input type="date" name="work_period_max" placeholder="dd-mm-yyyy">
                    </div>
            </div>            
            </div>
        
        <!--social part start-->
        <div class="login-header social-header">
            <h4>Connect Social Media</h4>
            <p>Connect your social media.</p>
        </div>
        <div class="connect-social-section">
            <div class="social-link">
                <p>Connect Your Facebook</p>
                <a href="" type="button" class="btn btn-connect">Connect</a>
                <input type="text" name="facebook">
            </div>
            <div class="social-link">
                <p>Connect Your LinkedIn</p>
                <a href="" type="button" class="btn btn-connect">Connect</a>
                <input type="text" name="linkedin">
            </div>
            <div class="social-link">
                <p>Connect Your Instagram</p>
                <a href="" type="button" class="btn btn-connect">Connect</a>
                <input type="text" name="instagram">
            </div>
            <div class="social-link">
                <p>Connect Your Twitter</p>
                <a href="" type="button" class="btn btn-connect">Connect</a>
                <input type="text" name="twitter">
            </div>
        </div>
        <!--Social part end-->
        <!--Upload part start-->
        <div class="login-header uploads-resume">
            <h4>Upload your Resume file</h4>
            <p>Upload your resume file in one of the following formats: doc, docx, pdf, txt.</p>
        </div>
        <!--attach file start-->
        <div class="attach-file-section">
            <a href="" id="image-container" class="upload-container">
            <input type="file" name="resume" id="file">
            <label for="avatar" class="upload-file">
                <span>
                <img src="assets/images/icons/attach.svg" class="" alt="">
                <p>Attach File</p>
                <p class="drag-file">or drag and drop here</p>
                </span>
            </label>
            </a>
            <div class="resume-updated">
                <p>Resume. pdf <span>1.2MB</span></p>
                <div class="resume-delete">
                    <p><img src="assets/images/icons/check-circle.svg" alt="">Completed</p>
                    <img src="assets/images/icons/trash.svg" alt="">
                </div>
            </div>
        </div>
        <!--attach file end-->
        <!--Upload apart end-->
        <!-- form end -->
    </div>
        <div class="form-submit">
            <button type="submit" class="btn-submit btn-back"><img src="assets/images/icons/chevron-left.svg"alt="Icon" class="fluid">Go back</button>
            <button type="submit" class="btn-submit">Next Step <img src="assets/images/icons/chevron-right.svg"alt="Icon" class="fluid"></button>  
        </div>
    </div> 
    </form>
</div>