$().ready(function (){
    $("#existing_user_cpa_one_form").validate({
        rules:{
            email : "required",
            password : "required",
            confirm_password : {
                required : true,
                equalTo : "#password"
            },
            profile_photo : "required",
            name_mm : "required",
            name_eng : "required",
            nrc_state_region : "required",
            nrc_township : "required",
            nrc_citizen : "required",
            nrc_number : {
                required : true,
            },
            nrc_front : "required",
            nrc_back : "required",
            father_name_mm : "required",
            father_name_eng : "required",
            gender : "required",
            race : "required",
            religion : "required",
            date_of_birth : "required",
            phone : "required",
            current_address : "required",
            address : "required",
            is_full_module:"required",
            // current_job : "required",
            // position : "required",
            // department : "required",
            // organization : "required",
            // company_name : "required",
            // salary : "required",
            // office_address : "required",
            gov_staff : "required",
            recommend_letter : {
                required : "#gov_staff:checked"
            },
            // degree_name : "required",
            // university_name : "required",
            // roll_number : "required",
            // qualified_date : "required",
            // certificate : "required",
            attend_place : "required",
            mac_type : {
                required : "#main_mac:checked"
            },
            cpa_one_attend_place : "required",
            cpa_one_mac_type : {
                required : "#da_one_main_mac:checked"
            },
            cpa_one_pass_exam_date : "required",
            cpa_one_pass_level : "required",
            cpa_one_pass_personal_no : "required",
        },
        messages:{
            email : "Please enter your email",
            password : "Please provide your password",
            confirm_password : {
                required : "Please provide your password",
                equalTo : "Please enter the same password as above"
            },
            profile_photo : "Upload photo",
            name_mm : "Please enter your name",
            name_eng : "Please enter your name in english",
            nrc_state_region : "Please select one",
            nrc_township : "Please select one",
            nrc_citizen : "Please select one",
            nrc_number : {
                required : "Please enter your nrc number",
            },
            nrc_front : "Please upload nrc photo (front)",
            nrc_back : "Please upload nrc photo (front)",
            father_name_mm : "Please enter your father name",
            father_name_eng : "Please enter your father name in english",
            gender : "Please select gender",
            race : "Please enter your race",
            religion : "Please enter your religion",
            date_of_birth : "Select your date of birth",
            phone : "Please enter your phone number",
            current_address : "Please enter your current address",
            address : "Please enter your address",
            gov_staff : "Please select one",
            recommend_letter : {
                required : "Please upload recommend letter"
            },
            attend_place : "Please select one",
            mac_type : "Please select one",
            is_full_module:"Please select one",
            cpa_one_attend_place : "Please select one",
            cpa_one_mac_type : "Please select one",

            cpa_one_pass_exam_date : "Please Enter Your CPA One Pass Date",
            cpa_one_pass_level : "Please enter your CPA One Pass Level",
            cpa_one_pass_personal_no : "Please enter your CPA One Pass Personal Number",

        },
        submitHandler: function(form) {
            var send_data = new FormData();
            send_data.append('email',$("input[name='email']").val());
            send_data.append('nrc_state_region',$("#nrc_state_region").val());
            send_data.append('nrc_township',$("#nrc_township").val());
            send_data.append('nrc_citizen',$("#nrc_citizen").val());
            send_data.append('nrc_number',$("#nrc_number").val());
            $.ajax({
                url: BACKEND_URL+"/unique_email",
                type: 'post',
                data:send_data,
                contentType: false,
                processData: false,
                success: function(result){
                    if(result.email!=null){
                        Swal.fire("Email has been used, please check again!");
                    }
                    else if(result.nrc!=null){
                        Swal.fire("NRC has been used, please check again!");
                    }
                    else if(result.email==null && result.nrc==null){
                        $('#CPATwoRegEmailModal').modal('show');
                        send_email();
                    }
                }
            });
        }
    });
});
