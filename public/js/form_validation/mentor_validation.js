$().ready(function (){
    $("#mentor_register_form").validate({
        rules:{
            name_mm : "required",
            name_eng : "required",
            father_name_mm : "required",
            father_name_eng : "required",
            race : "required",
            religion : "required",
            profile_photo : "required",
            nrc_state_region : "required",
            nrc_township : "required",
            nrc_citizen : "required",
            nrc_number : {
                required : true,
            },
            nrc_front : "required",
            nrc_back : "required",
            date_of_birth : "required",
            education : "required",
            ra_cpa_success_year : "required",
            ra_cpa_personal_no : "required",
            cpa_reg_no : "required",
            cpa_reg_date : "required",
            ppa_reg_no : "required",
            ppa_reg_date : "required",
            address : "required",
            phone_no : "required",
            fax_no : "required",
            m_email : "required",
            audit_firm_name : "required",
            audit_started_date : "required",
            audit_structure : "required",
            audit_staff_no : "required",
            current_check_service_id : "required",
            current_check_services_other : {
                required : $("#selected_service_id").val() == 9
            },
            experience : "required",
            started_teaching_year : {
                required : "#experience_yes:checked"
            },
            internship_accept_no : {
                required : "#experience_yes:checked"
            },
            current_accept_no : {
                required : "#experience_yes:checked"
            },
            trained_trainees_no : {
                required : "#experience_yes:checked"
            },
            repeat_yearly : {
                required : "#experience_yes:checked"
            },
            training_absent : {
                required : "#experience_yes:checked"
            },
            training_absent_reason : {
                required : "#training_absent_yes:checked"
            },
        },
        messages:{
            name_mm : "Please enter your name",
            name_eng : "Please enter your name in english",
            father_name_mm : "Please enter your father name",
            father_name_eng : "Please enter your father name in english",
            race : "Please enter your race",
            religion : "Please enter your religion",
            profile_photo : "Upload photo",
            nrc_state_region : "Please select one",
            nrc_township : "Please select one",
            nrc_citizen : "Please select one",
            nrc_number : {
                required : "Please enter your nrc number",
            },
            nrc_front : "Please upload nrc photo (front)",
            nrc_back : "Please upload nrc photo (front)",
            date_of_birth : "Select your date of birth",
            education : "Please enter your education",
            ra_cpa_success_year : "Please enter your RA/CPA success year",
            ra_cpa_personal_no : "Please enter your RA/CPA personal number",
            cpa_reg_no : "Please enter your CPA registraion number",
            cpa_reg_date : "Please select your CPA registraion date",
            ppa_reg_no : "Please enter your PPA registraion number",
            ppa_reg_date : "Please select your PPA registraion date",
            address : "Please enter your address",
            phone_no : "Please enter your phone number",
            fax_no : "Please enter your fax number",
            m_email : "Please enter your contact email",
            audit_firm_name : "Please enter your audit firm name",
            audit_started_date : "Please select your audit started date",
            audit_structure : "Please enter your audit structure",
            audit_staff_no : "Please enter your audit staff number",
            current_check_service_id : "Please select your current service",
            current_check_services_other : "Please select your current services other",
            experience : "Please select one",
            started_teaching_year : "Please select your started teaching year",
            internship_accept_no : "Please enter your internship accept no",
            current_accept_no : "Please enter your current accept no",
            trained_trainees_no : "Please enter your trained trainees no",
            repeat_yearly : "Please enter your repeat yearly",
            training_absent : "Please enter your training absent",
            training_absent_reason : "Please enter your training absent reason",
        },
        
    });
});