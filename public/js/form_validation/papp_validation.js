$().ready(function (){
    $("#papp_form").validate({
        rules:{
            profile_photo : "required",
            name_mm : "required",
            father_name_mm : "required",
           // cpa_batch_no : "required",
            address : "required",
            phone : "required",
            contact_mail : "required",
            cpaff_pass_date : "required",
            papp_date : "required",
            cpa_ff_file : "required",
            file_183 : "required",
            not_fulltime_file : "required",
            work_in_mm_file : "required",
            rule_conf_file : "required",
            cpd_record_file : "required",
            total_hours : "required",
            // tax_year : "required",
            // tax_free_file : "required",
            mpa_mem_card_front : "required",
            mpa_mem_card_back : "required",
            // letter : "required",
            cpaff_reg_no : "required",
        },
        messages:{
            profile_photo : "Upload photo",
            name_mm : "Please enter your name",
            father_name_mm : "Please enter your father name in english",
           // cpa_batch_no : "Please enter cpa batch number",
            address : "Please enter your address",
            phone : "Please enter your phone number",
            contact_mail : "Please enter your contact mail",
            cpaff_pass_date : "Please enter your CPAFF passed date",
            papp_date : "Please enter your PAPP date",
            cpa_ff_file : "Please upload CPAFF file",
            file_183 : "Please upload your file",
            not_fulltime_file : "Please upload your file",
            work_in_mm_file : "Please upload your file",
            rule_conf_file : "Please upload your file",
            cpd_record_file : "Please upload record file",
            total_hours : "Please enter total hours",
            // tax_year : "Please enter your tax year",
            // tax_free_file : "Please upload your file",
            mpa_mem_card_front : "Please upload MPA member card (Front)",
            mpa_mem_card_back : "Please upload MPA member card (Back)",
            // letter : "Please upload your file",
            cpaff_reg_no : "Please upload your registeration number",

        },
        submitHandler: function(form) {
            $('#pappModal').modal('show');
            send_email();
        }
        
    });
});