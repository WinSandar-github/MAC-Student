$().ready(function (){
    $("#non-audit-form").validate({
        rules:{
            //choose_firm_type : "required",
            email : "required",
            password : "required",
            confirm_password : {
                required : true,
                equalTo : "#password"
            },
            profile_photo : "required",
            accountancy_firm_name : "required",
            township : "required",
            post_code : "required",
            city : "required",
            state : "required",
            phone_no : "required",
            h_email : "required",
            website : "required",
            //org_stru_id : "required",
            name_sole_proprietor : "required",
            //t_s_p_id : "required",
            declaration : "required",
            foa_authority_to_sign : "required",
            head_office_address : "required"
        },
        messages:{
            //choose_firm_type : "dddd"
            email : "Please enter your email",
            password : "Please provide your password",
            confirm_password : {
                required : "Please provide your password",
                equalTo : "Please enter the same password as above"
            },
            profile_photo : "Upload photo",
            accountancy_firm_name : "Please enter accountancy firm name",
            township : "Please enter township",
            post_code : "Please enter post code",
            city : "Please enter city",
            state : "Please enter state",
            phone_no : "Please enter phone number",
            h_email : "Please enter email",
            website : "Please enter website",
            //org_stru_id : "Please select Organization Structure",
            name_sole_proprietor : "Please enter Name Of Sole Proprietor/ Managing Partner",
            //t_s_p_id : "Please select Type of Service Provided",
            declaration : "Please enter declaration",
            foa_authority_to_sign : "Please select one",
            head_office_address : "Please enter head office address"
        },
        submitHandler: function(form) {
            // $('#cpaffModal').modal('show');
            // send_email();
            var send_data = new FormData();
            send_data.append('email',$("input[name='email']").val());
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
              else if(result.email==null){
                $('#nonAuditFirmModal').modal('show');
                send_email();
              }
            }
        });

        }
    });
});
