$().ready(function (){
    $("#reconnect_papp_form").validate({
        rules:{
            email : "required",
            password : "required",
            confirm_password : {
                required : true,
                equalTo : "#password"
            },
            name_mm : "required",
            name_eng : "required",
            nrc_state_region : "required",
            nrc_township : "required",
            nrc_citizen : "required",
            nrc_number : {
                required : true,
            },
            father_name_mm : "required",
            father_name_eng : "required",
            gender : "required",
            race : "required",
            religion : "required",
            date_of_birth : "required",
            profile_photo : "required",
            cpa_batch_no : "required",
            address : "required",
            phone : "required",
            contact_mail : "required",
            submitted_stop_form:"required",
            resign:"required",
            from_date : {
                required : "#yes:checked"
            },
            to_date : {
                required : "#yes:checked"
            },
            cpa:{
                required : "#cpa_edu:checked"
            },
            ra:{
                required : "#ra_edu:checked"
            },
            education:"required",
            cpaff_pass_date : "required",
            papp_date : "required",
            cpa_ff_file : "required",
            file_183 : "required",
            not_fulltime_file : "required",
            work_in_mm_file : "required",
            rule_conf_file : "required",
            cpd_record_file : "required",
            total_hours : "required",
            tax_year : "required",
            tax_free_file : "required",
            mpa_mem_card_front : "required",
            mpa_mem_card_back : "required",
            reg_no : "required",
            papp_reg_no : "required",
            latest_reg_year:"required"
        },
        messages:{
            email : "Please enter your email",
            password : "Please provide your password with minimum length eight.",
            confirm_password : {
                required : "Please provide your password",
                equalTo : "Please enter the same password as above"
            },
            profile_photo : "Upload photo",
            name_mm : "Please enter your name ",
            name_eng : "Please enter your name in English",
            father_name_mm : "Please enter your father name",
            father_name_eng : "Please enter your father name in English",
            nrc_state_region : "Please select one",
            nrc_township : "Please select one",
            nrc_citizen : "Please select one",
            nrc_number : {
                required : "Please enter your nrc number",
            },
            education:"Please select one",
            cpa:"Please upload CPA file",
            ra:"Please upload RA file",
            gender : "Please select gender",
            cpa_batch_no : "Please enter cpa batch number",
            address : "Please enter your address",
            phone : "Please enter your phone number",
            contact_mail : "Please enter your contact mail",
            submitted_stop_form:"Please select one",
            resign:"Please select one",
            from_date:"Please enter this field",
            to_date:"Please enter this field",
            cpaff_pass_date : "Please enter your CPAFF passed date",
            papp_date : "Please enter your PAPP date",
            cpa_ff_file : "Please upload CPAFF file",
            file_183 : "Please upload your file",
            not_fulltime_file : "Please upload your file",
            work_in_mm_file : "Please upload your file",
            rule_conf_file : "Please upload your file",
            cpd_record_file : "Please upload record file",
            total_hours : "Please enter total hours",
            tax_year : "Please enter your tax year",
            tax_free_file : "Please upload your file",
            mpa_mem_card_front : "Please upload MPA member card (Front)",
            mpa_mem_card_back : "Please upload MPA member card (Back)",
            reg_no : "Please upload your registration number",
            papp_reg_no : "Please upload your registration number",
            latest_reg_year:"Please enter this field"
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
                        $('#reconnectpappModal').modal('show');
                        send_email();
                    }
                }
            });
           // $('#reconnectPappModal').modal('show');
        }
    });
    // $("#update_reconnect_papp_form").validate({
    //     rules:{},
    //     messages:{},
    //     submitHandler: function(form) {
    //         alert('aaa');
    //         $('#updatereconnectpappModal').modal('show');
    //         send_email();
    //     }
    // });
});