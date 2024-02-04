(function($) {

$(document).ready( function() {

    //Display error under input field
    function displayError(fieldName, errorMessage) {
        $("<small class='error-message'>"+errorMessage+"</small>").insertAfter(".required[name="+fieldName+"]");
        $('#' + fieldName ).addClass('error');
    }

    // Function to clear error messages
    function clearErrorMessages() {
        $('.error-message').text('');
        $('.form-control').removeClass('error');
    }

    /***
     * Step one
     * **/
    $("#bex-register").click( function(e) {
       e.preventDefault();

       //submitted data
       var submitted_data = {
            'action': 'bex_user_register',
            'nonce': $('input[name="nonce"]').val(),
            'user_email': $('input[name="user_email"]').val(),
            'user_password': $('input[name="user_password"]').val(),
       }
 
       $.ajax({
          type : "post",
          dataType : "json",
          url : ajax_data.ajaxurl,
          data : submitted_data,
            beforeSend: function() {
                $("#bex-register").addClass('loading');
            },
            success: function(response) {
                if(response.type == "error") {
                    // Clear existing error messages
                    clearErrorMessages();

                    // Loop through the error messages
                    $.each(response.errors, function(fieldName, errorMessage) {
                        displayError(fieldName, errorMessage);
                    });
                }else if(response.type == "success"){
                    window.location.href = window.location.href.split('?')[0] + '?step=personal-information';
                }
            },
            complete: function() {
                $("#bex-register").removeClass('loading');
            },
       })
    });

    /***
     * Step two
     * **/
    $("#bex-personal-info-submit").click( function(e) {
        e.preventDefault();
 
        //submitted data
        var submitted_data = {
             'action': 'bex_user_personal_info',
             'nonce': $('input[name="nonce"]').val(),
             'first_name': $('input[name="first_name"]').val(),
             'date_of_birth': $('input[name="date_of_birth"]').val(),
             'last_name': $('input[name="last_name"]').val(),
             'have_driving_licence': $('input[name="have_driving_licence"]').val(),
             'have_car': $('input[name="have_car"]').val(),
             'country': $('select[name="country"]').val(),
             'zip_code': $('input[name="zip_code"]').val(),
             'apartment': $('input[name="apartment"]').val(),
             'phone_number': $('input[name="phone_number"]').val(),
             'city': $('input[name="city"]').val(),
             'street': $('input[name="street"]').val(),
             'mobile': $('input[name="mobile"]').val(),
        }
  
        $.ajax({
           type : "post",
           dataType : "json",
           url : ajax_data.ajaxurl,
           data : submitted_data,
           beforeSend: function() {
                $("#bex-personal-info-submit").addClass('loading');
            },
           success: function(response) {
             if(response.type == "error") {
                 // Clear existing error messages
                 clearErrorMessages();
 
                 // Loop through the error messages
                 $.each(response.errors, function(fieldName, errorMessage) {
                     displayError(fieldName, errorMessage);
                 });
             }else if(response.type == "success"){
                window.location.href = window.location.href.split('?')[0] + '?step=your-job-requirement';
             }
           },
           complete: function() {
               $("#bex-personal-info-submit").removeClass('loading');
           },
        })
    });

    /***
     * Step three
     * **/
    $("#job-requirment-form").on('submit',(function(e) {
        e.preventDefault();
 
        //submitted data
        var submitted_data = {
            'action': 'bex_user_job_requirments',
            'nonce': $('input[name="nonce"]').val(),
            'job_type': $('select[name="job_type"]').find(":selected").val(),
            'like_to_travel': $('input[name="like_to_travel"]:checked').val(),
            'desired_monthly_income': $('input[name="desired_monthly_income"]').val(),
            'willing_to_travel': $('input[name="willing_to_travel"]:checked').val(),
            'minimum_hours_per_week': $('input[name="minimum_hours_per_week"]').val(),
            'maximum_hours_per_week': $('input[name="maximum_hours_per_week"]').val(),
        }
  
        $.ajax({
           type : "post",
           dataType : "json",
           url : ajax_data.ajaxurl,
           data : submitted_data,
           beforeSend: function() {
                $("#job_req_submit").addClass('loading');
            },
           success: function(response) {
             if(response.type == "error") {
                 // Clear existing error messages
                 clearErrorMessages();
 
                 // Loop through the error messages
                 $.each(response.errors, function(fieldName, errorMessage) {
                     displayError(fieldName, errorMessage);
                 });
             }else if(response.type == "success"){
                window.location.href = window.location.href.split('?')[0] + '?step=work-experience';
             }
           },
           complete: function() {
               $("#job_req_submit").removeClass('loading');
           }
        })
    }));


    /***
     * Step four
     * **/
    $("#work-exp-form").on('submit',(function(e) {
        e.preventDefault();
        
        // Initialize an array to store the values
        var work_experiences = [];

        // Iterate through each set of input fields
        $("[data-repeater-item]").each(function(index) {
            var company = $(this).find("[name='experience[" + index + "][company]']").val();
            var department = $(this).find("[name='experience[" + index + "][department]']").val();
            var designation = $(this).find("[name='experience[" + index + "][designation]']").val();
            var workPeriodMin = $(this).find("[name='experience[" + index + "][work_period_min]']").val();
            var workPeriodMax = $(this).find("[name='experience[" + index + "][work_period_max]']").val();

            // Create an object with the values and push it to the array
            var experience = {
                company: company,
                department: department,
                designation: designation,
                work_period_min: workPeriodMin,
                work_period_max: workPeriodMax
            };
            work_experiences.push(experience);
        });

        // Do something with the collected data
        // console.log(work_experiences);

        //submitted data
        var submitted_data = {
            'action': 'bex_work_exp',
            'nonce': $('input[name="nonce"]').val(),
            'work_experiences': work_experiences,
            'facebook': $('input[name="facebook"]').val(),
            'linkedin': $('input[name="linkedin"]').val(),
            'instagram': $('input[name="instagram"]').val(),
            'twitter': $('input[name="twitter"]').val(),
            'resume': $('input[name="resume"]').val(),
        }
  
        $.ajax({
           type : "post",
           dataType : "json",
           url : ajax_data.ajaxurl,
           data : submitted_data,
           beforeSend: function() {
                $("#work-exp-form-btn").addClass('loading');
            },
           success: function(response) {
             if(response.type == "error") {
                 // Clear existing error messages
                 clearErrorMessages();
 
                 // Loop through the error messages
                 $.each(response.errors, function(fieldName, errorMessage) {
                     displayError(fieldName, errorMessage);
                 });
             }else if(response.type == "success"){
                window.location.href = window.location.href.split('?')[0] + '?step=check-and-send';
             }
           },
           complete: function() {
               $("#work-exp-form-btn").removeClass('loading');
           }
        })
    }));



    /****
     * Resume upload
     * *****/
    //add product image on validation time
    // var product_thumbnail_url = $("#product_thumbnail_url").val();
    // if( product_thumbnail_url ){
    //     $('#product_thumb_img').html( '<img src="'+product_thumbnail_url+'" alt="Product Image"/>' );
    //     $('#product-single-image').addClass('image-drop-bg');
    // }

    //remove resume
    $('#remove-resume').click(function(event){
        event.preventDefault();
        $("#uploaded-resume").hide();
        $('#resume_id').val('');
    });

    //Product Single Image or Media Upload
    $('#upload-resume-file').click(function(event){
        event.preventDefault();

        var targetContainer = $(this);
        
        // If the media frame already exists, reopen it.
        if ( frame ) {
            frame.open();
            return false;
        }

        // Create a new media frame
        var frame = wp.media({
            title: "Upload Your Resume",
            button:{
                text: "Upload"
            },
            multiple: false
        });

        frame.on('select', function(){
            var attachment = frame.state().get('selection').first().toJSON();

            //show uploaded file div
            $("#uploaded-resume").show();
            $('#uploaded-resume-title').html(`${attachment.filename} <span>${attachment.filesizeHumanReadable}</span>`);
            
            // Send the attachment id to our hidden input
            $('#resume_id').val(attachment.id);

            //add class to hide text normaly
            $(targetContainer).addClass('image-drop-bg');
        });

        frame.open();
    });
    

    //Handle drag and drop resume upload
    // var dropArea = $('#upload-resume-file');

    // // Initialize WordPress media uploader
    // var mediaUploader = wp.media({
    //     title: "Upload Your Resume",
    //     button:{
    //         text: "Upload"
    //     },
    //     multiple: true
    // });

    // // When files are dropped onto the drop area
    // dropArea.on('dragover dragleave', function(event) {
    //     event.preventDefault();
    //     event.stopPropagation();
    // });

    // dropArea.on('drop', function(event) {
    //     event.preventDefault();
    //     event.stopPropagation();
        
    //     var files = event.originalEvent.dataTransfer.files;
    //     // console.log(files);
    //     if (files.length > 0) {
    //         // console.log(mediaUploader.uploader.options.uploader);
    //         // mediaUploader.uploader.options.uploader.files = files;
    //         mediaUploader.open();
    //         mediaUploader.state().get('selection').add(files[0]);
    //     }
    // });

    //confirm button handle
    $('#complete-btn').click(function(event){
        event.preventDefault();
        Swal.fire({
            title: "Congratulations",
            text: "Your profile is ready and set",
            imageUrl: ajax_data.icon_url,
            imageWidth: 370,
            // imageHeight: 200,
            showCancelButton: true,
            confirmButtonColor: "#276CF4",
            cancelButtonColor: "#d33",
            confirmButtonText: "Confirm"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = ajax_data.home_url
            }
        });
    });
 });

 $(document).ready(function () {
     //Repeater js
     $('.repeater').repeater({
        isFirstItemUndeletable:true,
        show: function () {
            $(this).slideDown();
            $(this).addClass('cloned-group');
        },
        hide: function (deleteElement) {
            if(confirm('Are you sure you want to delete this element?')) {
              $(this).slideUp(deleteElement);
            }
        },
        
     });

     //social connect button
     $('.btn-connect').on('click', function(e){
        e.preventDefault();
        $(this).closest('.form-group').find('input').toggleClass('d-none');
     });
 });

})(jQuery);