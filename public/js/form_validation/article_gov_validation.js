$().ready(function (){
    $("#article_gov_register_form").validate({
        rules:{
            // name_mm : "required",
            // name_eng : "required",
            // father_name_mm : "required",
            // father_name_eng : "required",
            // father_job : "required",
            // father_address : "required",
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
            labor_registration_no : "required",
            // phone_no : "required",
            m_email : "required",
            // address : "required",
            home_address : "required",
            current_address : "required",
            tempory_address : "required",
            permanent_address : "required",
            married : "required",
            married_name : {
                required : "#married_yes:checked"
            },
            married_job : {
                required : "#married_yes:checked"
            },
            labor_registration_attach : "required",
            recommend_attach : "required",
            police_attach : "required",
            confirm_142 : "required",
            mentor_declare : "required",
        },
        messages:{
            // name_mm : "Please enter your name",
            // name_eng : "Please enter your name in english",
            // father_name_mm : "Please enter your father name",
            // father_name_eng : "Please enter your father name in english",
            // father_job : "Please enter your father job",
            // father_address : "Please enter your father address",
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
            labor_registration_no : "Please enter your labor registration no",
            // phone_no : "Please enter your phone number",
            m_email : "Please enter your email",
            // address : "Please enter your address",
            home_address : "Please enter your home address",
            current_address : "Please enter your current address",
            tempory_address : "Please enter your tempory address",
            permanent_address : "Please enter your permanent address",
            married : "Please enter your status",
            married_name : "Please enter name",
            married_job : "Please enter job",
            labor_registration_attach : "Please upload your attachment",
            recommend_attach : "Please upload your attachment",
            police_attach : "Please upload your attachment",
            confirm_142 : "Please check one",
        },
        
    });
});