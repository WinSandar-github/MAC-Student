jQuery.validator.setDefaults({
    debug: true,
    success: "valid"
  });
$(document).ready(function (){
    $("#qt_form").validate({
        rules:{
            email : {
                email: true,
                required : true
              },
            password : {
                required : true
            },
            confirm_password : {
                equalTo : '#password'
            },
            profile_photo : {
                required : true
            },
            name_mm : {
                required : true
            },
            name_eng : {
                required : true
            },
            nrc_state_region : {
                required : true
            },
            nrc_township : {
                required : true
            },
            nrc_citizen : {
                required : true
            },
            nrc_number : {
                required : true
            },
            nrc_front : {
                required : true
            },
            nrc_back : {
                required : true
            },
            father_name_mm : {
                required : true
            },
            father_name_eng : {
                required : true
            },
            race : {
                required : true
            },
            religion : {
                required : true
            },
            date_of_birth : {
                required : true
            },
            phone : {
                required : true
            },
            current_address : {
                required : true
            },
            address : {
                required : true
            },
            current_job : {
                required : true
            },
            office_address : {
                required : true
            },
            edu_status_local : {
                required : true
            },
            certificate0 : {
                required : true
            },
            organization_name : {
                required : true
            },
            organization_address : {
                required : true
            },
            organization_email : {
                email: true,
                required : true
            },
            exam_date : {
                required : true
            },
            exam_register_no : {
                required : true
            },
        },
        messages:{
            email : {
                required : 'We need your email address to contact you',
            },
            password : { 
                required : 'Please fill password',
            },
            confirm_password : {
                equalTo : 'Confirm password must be same with password',
            },
            profile_photo : {
                required : 'Please select photo',
            },
            name_mm : {
                required : 'Please fill name(myanmar)',
            },
            name_eng : {
                required : 'Please fill name(English)',
            },
            nrc_state_region : {
                required : 'choose State'
            },
            nrc_township : {
                required : 'Choose Township'
            },
            nrc_citizen : {
                required : 'Choose Citizen'
            },
            nrc_number : {
                required : 'Please fill up number'
            },
            nrc_front : {
                required : 'Choose photo'
            },
            nrc_back : {
                required : 'Choose Photo'
            },
            father_name_mm : {
                required : 'Please fill father name(Myanmar)'
            },
            father_name_eng : {
                required : 'Please fill father name(Eng)'
            },
            race : {
                required : 'Please fill race'
            },
            religion : {
                required : 'Please fill religion'
            },
            date_of_birth : {
                required : 'Choose Date of Birth'
            },
            phone : {
                required : 'Please fill phone'
            },
            current_address : {
                required : 'Please fill current address'
            },
            address : {
                required : 'Please fill address'
            },
            current_job : {
                required : 'Please fill current job'
            },
            office_address : {
                required : 'Please fill office address'
            },
            edu_status_local : {
                required : 'Please fill local Education'
            },
            certificate0 : {
                required : 'Please attch certificate'
            },
            edu_status_foreign : {
                required : 'Please choose foreign education'
            },
            organization_name : {
                required : 'Please fill organization name'
            },
            organization_address : {
                required : 'Please fill organization address'
            },
            organization_email : {
                required : 'Please fill organization email'
            },
            exam_date : {
                required : 'Please fill exam date'
            },
            exam_register_no : {
                required : 'Please fill exam register number'
            },
        },
        success: function(label) {
            label.addClass("valid").html('<i class="fa fa-check-circle me-2" aria-hidden="true"></i>OK')
          },
        submitHandler: function(form) {
           register_qt();
        }
    });
});
