$().ready(function (){
    $("#non_audit_reject_register_form").validate({
        rules:{
            //choose_firm_type : "required",
            // email : "required",
            // password : "required",
            // confirm_password : {
            //     required : true,
            //     equalTo : "#password"
            // },
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
            //t_s_p_id : "required",
            declaration : "required",
            declaration_mm : "required",
            foa_authority_to_sign : "required",
            head_office_address : "required",
            head_office_address_mm : "required",
            choose_firm_type : {
              required: true
            },
            dir_passport_csc : "required"
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
            org_stru_id : "Please select Organization Structure",
            name_sole_proprietor : "Please enter Name Of Sole Proprietor/ Managing Partner",
            //t_s_p_id : "Please select Type of Service Provided",
            declaration : "Please enter declaration",
            declaration_mm : "Please enter declaration",
            foa_authority_to_sign : "Please select one",
            head_office_address : "Please enter head office address(English)",
            head_office_address_mm : "Please enter head office address(Myanmar)",
            choose_firm_type : "Please select firm type",
            dir_passport_csc : "Please enter Passport/CSC No."
        },
        submitHandler: function(form) {
            // $('#cpaffModal').modal('show');
            // send_email();

            var branch_off_validate_flag = validateBranchOffice();
            var partners_validate_flag = validatePartners();
            var directors_validate_flag = validateDirectorsOfficers();
            //var audit_staff_validate_flag = validateAuditStaff();
            var total_staff_validate_flag = validateTotalStaff();
            var service_provided_validate_flag = validateServiceProvided();
            var dir_staffmember_validate_flag = validateDirectorsStaffNumbers();

            // console.log(branch_off_validate_flag);
            // console.log(partners_validate_flag);
            // console.log(directors_validate_flag);
            // console.log(total_staff_validate_flag);
            // console.log(service_provided_validate_flag);
            // console.log(dir_staffmember_validate_flag);

            if(branch_off_validate_flag == true && partners_validate_flag == true && directors_validate_flag == true && total_staff_validate_flag == true && service_provided_validate_flag == true && dir_staffmember_validate_flag == true){

              if($("input[name=reject_type]") == 0){
                // initial reject
                nonAuditRejectUpdate();
              }
              else{
                // renew reject
                nonAuditRenewRejectUpdate();
              }
            }
            else{
              alert("Your form is not valid !!!");
            }

        }
    });
});

function validateBranchOffice(){
  var flag;
  // validate Branch Office table
  var tbl_branch_office = $('.branch_non_audit tbody tr').length;
  if (tbl_branch_office > 0) {
    //validate input fields in Branch Office table
    $(".branch_non_audit tbody tr").each(function(index,row){
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
  var tbl_partner = $('.non_partner tbody tr').length;
  if (tbl_partner == 0) {
      $(".non_partner_validate").css('display', 'block');
      $(".non_partner_validate").css('color','#ef8157');
      flag = false;
      //event.preventDefault();
  }
  else{
    $(".non_partner tbody tr").each(function(index,row){

      var name = $(row).find("input[name='fona_name[]']").val();
      var fona_pass_csc_inco = $(row).find("input[name='fona_pass_csc_inco[]']").val();

      if(name != '' && fona_pass_csc_inco != ''){
        $(".non_partner_validate").css('display','none');
        flag = true;
      }
      else{
        $(".non_partner_validate").css('display','block');
        $(".non_partner_validate").css('color','#ef8157');
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
  var tbl_director = $('.non_director tbody tr').length;
  if (tbl_director == 0) {
      $(".non_director_validate").css('display', 'block');
      $(".non_director_validate").css('color','#ef8157');
      flag = false;
      //event.preventDefault();
  }
  else{
    $(".non_director tbody tr").each(function(index,row){
      var name = $(row).find("input[name='dona_name[]']").val();
      var position = $(row).find("input[name='dona_position[]']").val();
      var passport = $(row).find("input[name='dona_passport[]']").val();

      if(name != '' && position != '' && passport != ''){
        $(".non_director_validate").css('display','none');
        flag = true;
      }
      else{
        $(".non_director_validate").css('display','block');
        $(".non_director_validate").css('color','#ef8157');
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

function validateTotalStaff(){
  var flag;
  if($("#total_non_audit_staff").val() == 0 ){
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

function validateServiceProvided(){
  var flag;
  // Types Of Service Provided radio button required validation
  if($("input[name='t_s_p_id']:checked").length == 0){
    $('#type_service_validate').css('display','block');
    $('#type_service_validate').css('color','#ef8157');
    $(".type-service-card").css('border','1px solid ef8157');
    flag = false;
  }
  else{
    $('#type_service_validate').css('display','none');
    $(".type-service-card").css('border','1px solid rgba(0,0,0,.125)');
    flag = true;
  }
  return flag;
}

function validateDirectorsStaffNumbers(){
  var flag;
  var choose_firm_type = $("#choose_firm_type").val();
  if(choose_firm_type == 2){

    var tbl_director_cpa_initial = $('.director_cpa_initial tbody tr').length;
    if (tbl_director_cpa_initial == 0) {
        $(".director_staffmembers_validate").css('display', 'block');
        $(".director_staffmembers_validate").css('color','#ef8157');
        flag = false;
        //event.preventDefault();
    }
    else{
      $(".director_cpa_initial tbody tr").each(function(index,row){
        var name = $(row).find("input[name='mf_name[]']").val();
        var position = $(row).find("input[name='mf_position[]']").val();
        var mf_cpa_passed_reg_no = $(row).find("input[name='mf_cpa_passed_reg_no[]']").val();
        var mf_cpa_full_reg_no = $(row).find("input[name='mf_cpa_full_reg_no[]']").val();
        var mf_pub_pra_reg_no = $(row).find("input[name='mf_pub_pra_reg_no[]']").val();

        if(name != '' && position != '' && mf_cpa_passed_reg_no != '' && mf_cpa_full_reg_no != '' && mf_pub_pra_reg_no){
          $(".director_staffmembers_validate").css('display','none');
          flag = true;
        }
        else{
          $(".director_staffmembers_validate").css('display','block');
          $(".director_staffmembers_validate").css('color','#ef8157');
          flag = false;
        }

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

  }
  else{
    flag = true;
  }
  return flag;
}
