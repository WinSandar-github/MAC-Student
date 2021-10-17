$().ready(function (){
    $("#article_register_form").validate({
        rules:{
            // name_mm : "required",
            // name_eng : "required",
            // father_name_mm : "required",
            // father_name_eng : "required",
            // personal_no : "required",
            // race : "required",
            // religion : "required",
            // profile_photo : "required",
            // nrc_state_region : "required",
            // nrc_township : "required",
            // nrc_citizen : "required",
            // nrc_number : {
            //     required : true,
            // },
            // nrc_front : "required",
            // nrc_back : "required",
            // date_of_birth : "required",
            // education : "required",
            // address : "required",
            current_address : "required",
            phone_no : "required",
            m_email : "required",
            papp_name : "required",
            mentor_name : "required",
            pass_date : "required",
            pass_no : "required",
            current_job : "required",
            position : {
                required : "#current_job_yes:checked"
            },
            job_started_date : {
                required : "#current_job_yes:checked"
            },
            experience : "required",
            experience_file : {
                required : "#experience_yes:checked"
            },
            confirm_142 : "required",
            confirm_status : "required",
            mentor_declare : "required",
            request_papp_attach : "required",
        },
        messages:{
            // name_mm : "Please enter your name",
            // name_eng : "Please enter your name in english",
            // father_name_mm : "Please enter your father name",
            // father_name_eng : "Please enter your father name in english",
            // personal_no : "Please enter your personal number",
            // race : "Please enter your race",
            // religion : "Please enter your religion",
            // profile_photo : "Upload photo",
            // nrc_state_region : "Please select one",
            // nrc_township : "Please select one",
            // nrc_citizen : "Please select one",
            // nrc_number : {
            //     required : "Please enter your nrc number",
            // },
            // nrc_front : "Please upload nrc photo (front)",
            // nrc_back : "Please upload nrc photo (back)",
            // date_of_birth : "Select your date of birth",
            // education : "Please enter your education",
            // address : "Please enter your address",
            current_address : "Please enter your current address",
            phone_no : "Please enter your phone number",
            m_email : "Please enter your email",
            papp_name : "Please enter your papp name",
            mentor_name : "Please select mentor name",
            current_job : "Please select one",
            position : "Please enter your position",
            job_started_date : "Please select your date",
            pass_date : "Please select your pass exam date",
            pass_no : "Please enter your pass exam number",
            experience : "Please select one",
            experience_file : "Please enter your attachment",
            confirm_142 : "Please check one",
            confirm_status : "Please check one",
            request_papp_attach : "Please enter your attachment",
        },
        
    });
    $("#leave_request_form").validate({
        rules:{
            remark : "required",
            start_date : "required",
            end_date : "required",
            total_date : "required",
        },
        messages:{
            remark : "Please enter your leave request",
            start_date : "Please select your date",
            end_date : "Please select your date",
            total_date : "Please enter your total date",
        },
        
    });
});