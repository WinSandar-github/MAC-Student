$().ready(function (){
    $("#cpaff_renew_form_submit").validate({
        rules:{
            profile_photo : "required",
            nrc_front : "required",
            nrc_back : "required",
            name_mm : "required",
            // nrc_front : "required",
            // nrc_back : "required",
            father_name_mm : "required",
            cpa_batch_no : "required",
            address : "required",
            phone : "required",
            contact_mail : "required",
            cpa2_pass_date : "required",
            renew_accepted_date : "required",
            cpa2_pass_date : "required",
            // renew_file : "required",
            // reg_no : "required",
            degree_pass_year : "required",
            // fine_person : "required",
            cpa_certificate : "required",
            cpd_record : "required",
            passport_image : "required",
        },
        messages:{
            profile_photo : "Please replace your photo with current photo",
            nrc_front : "Please replace your photo with current photo",
            nrc_back : "Please replace your photo with current photo",
            name_mm : "Please enter your name",
            nrc_state_region : "Please select one",
            nrc_township : "Please select one",
            nrc_citizen : "Please select one",
            nrc_number : {
                required : "Please enter your nrc number",
            },
            // nrc_front : "Please upload nrc photo (front)",
            // nrc_back : "Please upload nrc photo (back)",
            father_name_mm : "Please enter your father name in english",
            cpa_batch_no : "Please enter cpa batch number",
            address : "Please enter your address",
            phone : "Please enter your phone number",
            contact_mail : "Please enter your contact mail",
            cpa2_pass_date : "Please fill CPA 2 passed date",
            renew_accepted_date : "Please renew accepted date",
            // renew_file : "Please upload renew file",
            // reg_no : "Please fill registeration No.",
            degree_pass_year : "Please fill degree passed year",
            // fine_person : "Please fill this field",
            cpa_certificate : "Please upload CPA certificate",
            cpd_record : "Please upload CPA record",
            passport_image : "Please upload passport image",

        },
        submitHandler: function(form) {
            $('#renewModal').modal('show');
        }
    });
});