$().ready(function (){

    $("#audit_firm_form").validate({
        rules:{
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
            org_stru_id : "required",
            name_sole_proprietor : "required",
            t_s_p_id : "required",
            declaration : "required",
            head_office_address : "required"
            // foa_name : "required",
            // foa_pub_pri_reg_no : "required",
            // foa_authority_to_sign : "required"
        },
        messages:{
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
            org_stru_id : "Please select Organization Structure",
            name_sole_proprietor : "Please enter Name Of Sole Proprietor/ Managing Partner",
            t_s_p_id : "Please select Type of Service Provided",
            declaration : "Please enter declaration",
            head_office_address : "Please enter head office address"
            //foa_authority_to_sign : "Please select Yes or No"

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
                var branch_off_validate_flag = validateBranchOffice();
                var partners_validate_flag = validatePartners();
                var directors_validate_flag = validateDirectorsOfficers();
                var audit_staff_validate_flag = validateAuditStaff();
                var total_staff_validate_flag = validateTotalStaff();

                console.log(branch_off_validate_flag);
                console.log(partners_validate_flag);
                console.log(directors_validate_flag);
                console.log(audit_staff_validate_flag);
                console.log(total_staff_validate_flag);

                if(branch_off_validate_flag == true && partners_validate_flag == true && directors_validate_flag == true && audit_staff_validate_flag == true && total_staff_validate_flag == true){
                  $('#auditFirmModal').modal('show');
                  send_email();
                }
                else{
                  alert("Your form is not valid !!!");
                }

              }
            }
        });
      },

    });

});

function validateBranchOffice(){
  var flag;
  // validate Branch Office table
  var tbl_branch_office = $('.branch tbody tr').length;
  if (tbl_branch_office > 0) {
    //validate input fields in Branch Office table
    $(".branch tbody tr").each(function(index,row){
      var name = $(row).find("input[name='bo_branch_name[]']").val();
      var address = $(row).find("input[name='bo_address[]']").val();
      var township = $(row).find("input[name='bo_township[]']").val();
      var post_code = $(row).find("input[name='bo_post_code[]']").val();
      var city = $(row).find("input[name='bo_city[]']").val();
      var state_region = $(row).find("input[name='bo_state_region[]']").val();
      var phone = $(row).find("input[name='bo_phone[]']").val();
      var email = $(row).find("input[name='bo_email[]']").val();
      var website = $(row).find("input[name='bo_website[]']").val();

      if(name != '' && address != '' && township != '' && post_code != '' && city != '' && state_region != '' && phone != '' && email != '' && website != ''){
        $(".branch_office_validate").css('display','none');
        flag = true;
      }
      else{
        $(".branch_office_validate").css('display','block');
        $(".branch_office_validate").css('color','#ef8157');
        flag = false;
      }

      //validate input fields in Branch Office table when entering
      $(row).find("input[type=text]").keyup(function() {
          var input = $(this);
          if( input.val() == "" ) {
            input.css( "border", "2px solid #ef8157" );
          }
          else{
            input.css( "border", "1px solid #ced4da" );
          }
      });
    });

  }
  else{
    flag = true;
  }

  return flag;
}

function validatePartners(){
  var flag;
  // validate Sole Proprietor/Partners/Shareholders table
  var tbl_partner = $('.partner_list tbody tr').length;
  if (tbl_partner == 0) {
      $(".partner_list_validate").css('display', 'block');
      $(".partner_list_validate").css('color','#ef8157');
      flag = false;
      //event.preventDefault();
  }
  else{
    $(".partner_list tbody tr").each(function(index,row){

      var name = $(row).find("input[name='foa_name[]']").val();
      var foa_pub_pri_reg_no = $(row).find("input[name='foa_pub_pri_reg_no[]']").val();
      // validate radio buttons
      var isChecked = $(row).find("input[type=radio]:checked");
      if(name != '' && foa_pub_pri_reg_no != '' && isChecked.length > 0){
        $(".partner_list_validate").css('display','none');
        flag = true;
      }
      else{
        $(".partner_list_validate").css('display','block');
        $(".partner_list_validate").css('color','#ef8157');
        flag = false;
      }

      //validate input fields in Sole Proprietor/Partners/Shareholders when entering
      $(row).find("input[type=text]").keyup(function() {
          var input = $(this);
          if( input.val() == "" ) {
            input.css( "border", "2px solid #ef8157" );
          }
          else{
            input.css( "border", "1px solid #ced4da" );
          }
      });
    });
  }
  return flag;
}

function validateDirectorsOfficers(){
  var flag;
  // validate Directors Officers table
  var tbl_director = $('.director tbody tr').length;
  if (tbl_director == 0) {
      $(".director_validate").css('display', 'block');
      $(".director_validate").css('color','#ef8157');
      flag = false;
      //event.preventDefault();
  }
  else{
    $(".director tbody tr").each(function(index,row){
      var name = $(row).find("input[name='do_name[]']").val();
      var position = $(row).find("input[name='do_position[]']").val();
      var do_cpa_reg_no = $(row).find("input[name='do_cpa_reg_no[]']").val();
      var do_pub_pri_reg_no = $(row).find("input[name='do_pub_pri_reg_no[]']").val();

      if(name != '' && position != '' && do_cpa_reg_no != '' && do_pub_pri_reg_no != ''){
        $(".director_validate").css('display','none');
        flag = true;
      }
      else{
        $(".director_validate").css('display','block');
        $(".director_validate").css('color','#ef8157');
        flag = false;
      }

      //validate input fields in Sole Proprietor/Partners/Shareholders when entering
      $(row).find("input[type=text]").keyup(function() {
          var input = $(this);
          if( input.val() == "" ) {
            input.css( "border", "2px solid #ef8157" );
          }
          else{
            input.css( "border", "1px solid #ced4da" );
          }
      });
    });
  }
  return flag;
}

function validateAuditStaff(){
  var flag;
  // validate Audit Staff
  if($("#total_audit").val() == 0 && $("#total_non_audit").val() == 0 && $("#total_staff").val()){
    $(".total_staff_validate").css('display','block');
    $(".total_staff_validate").css('color','#ef8157');
    flag = false;
  }
  else{
    $(".total_staff_validate").css('display','none');
    flag = true;
  }
  return flag;
}

function validateTotalStaff(){
  var flag;
  if($("#total_full_time").val() == 0 && $("#total_part_time").val() == 0 && $("#total_time").val()){
    $(".total_staff_validate").css('display','block');
    $(".total_staff_validate").css('color','#ef8157');
    flag = false;
  }
  else{
    $(".total_staff_validate").css('display','none');
    flag = true;
  }
  return flag;
}
