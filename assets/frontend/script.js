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
          success: function(response) {
            if(response.type == "error") {
                // Clear existing error messages
                clearErrorMessages();

                // Loop through the error messages
                $.each(response.errors, function(fieldName, errorMessage) {
                    displayError(fieldName, errorMessage);
                });
            }else if(response.type == "success"){
                window.location.href = window.location.href + '?step=personal-information';
            }
          }
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
             'country': $('input[name="country"]').val(),
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
           }
        })
    });

    /***
     * Step thredd
     * **/
    $("#job_req_submit").click( function(e) {
        e.preventDefault();
 
        //submitted data
        var submitted_data = {
            'action': 'bex_user_job_requirments',
            'nonce': $('input[name="nonce"]').val(),
            'job_type': $('input[name="job_type"]').val(),
            'like_to_travel': $('input[name="like_to_travel"]').val(),
            'desired_monthly_income': $('input[name="desired_monthly_income"]').val(),
            'willing_to_travel': $('input[name="willing_to_travel"]').val(),
            'minimum_hours': $('input[name="minimum_hours"]').val(),
            'maximum_hours': $('input[name="maximum_hours"]').val(),
        }
  
        $.ajax({
           type : "post",
           dataType : "json",
           url : ajax_data.ajaxurl,
           data : submitted_data,
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
           }
        })
    });
 });

})(jQuery);