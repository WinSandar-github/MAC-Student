$(document).ready(function(){
  $("#choose_firm_type").change(function(){
    if($(this).val() == "1"){
      //local
      $("#local_header").css("display","block");
      $("#local_info").css("display","block");
      $("#foreign_info").css("display","none");
      $("#foreign_header").css("display","none");
      $("#director_staffmembers").css("display","none");
      $("input[name=local_foreign_type]").val("1");
      $("#permit_section_27").css("display","none");
      ///
      $("#financial_label_1").css("display","none");
      $("#financial_label_2").css("display","block");
      //
      $("#commercial_label_1").css("display","none");
      $("#commercial_label_2").css("display","block");
      //
      $("#letterhead_label_1").css("display","none");
      $("#letterhead_label_2").css("display","block");
      //
      $("#education_label_1").css("display","none");
      $("#education_label_2").css("display","block");
      //
      $("#work_exp_label_1").css("display","none");
      $("#work_exp_label_2").css("display","block");
      //
      $("#shareholder_label_1").css("display","none");
      $("#shareholder_label_2").css("display","block");
      //
      $("#tax_label_1").css("display","none");
      $("#tax_label_2").css("display","block");

    }
    else if($(this).val() == "2"){
      //foreign
      $("#foreign_header").css("display","block");
      $("#foreign_info").css("display","block");
      $("#local_info").css("display","none");
      $("#local_header").css("display","none");
      $("#director_staffmembers").css("display","block");
      $("input[name=local_foreign_type]").val("2");

      $("#label3").css("display","block");
      $("#label2").css("display","none");
      $("#permit_section_27").css("display","block");
      ///
      $("#financial_label_1").css("display","block");
      $("#financial_label_2").css("display","none");
      //
      $("#commercial_label_1").css("display","block");
      $("#commercial_label_2").css("display","none");
      //
      $("#letterhead_label_1").css("display","block");
      $("#letterhead_label_2").css("display","none");
      //
      $("#education_label_1").css("display","block");
      $("#education_label_2").css("display","none");
      //
      $("#work_exp_label_1").css("display","block");
      $("#work_exp_label_2").css("display","none");
      //
      $("#shareholder_label_1").css("display","block");
      $("#shareholder_label_2").css("display","none");
      //
      $("#tax_label_1").css("display","block");
      $("#tax_label_2").css("display","none");
    }
    else{
      //local
      $("#local_header").css("display","block");
      $("#foreign_header").css("display","none");
      $("#director_staffmembers").css("display","none");
      $("input[name=local_foreign_type]").val("1");
      ///

    }
  });
});

function loadNonAuditOrganization(){
  $.ajax({
    url: BACKEND_URL+"/organization_structure",
    type: 'get',
    data:"",
    success: function(result){
     var organization_structure=result.data;
     $('.organization_data').append("<div class='col-md-2'></div>");
     organization_structure.forEach(function(element){
       if(element.id == 1 || element.id == 2){
        var radio_data="<div class='col-md-3'>"+
        "<input type='radio' name='org_stru_id' autofocus value="+element.id+" id=org"+element.id+" onclick='getOrganization()' >"+
        " <label class='form-check-label'>"+element.name+"</label>";
       }
       else if(element.id == 4){
         var radio_data="<div class='col-md-1'>"+
         "<input type='radio' name='org_stru_id' autofocus value="+element.id+" id=org"+element.id+" onclick='getOrganization()' >"+
         " <label class='form-check-label'>"+element.name+"</label>";
       }
       else{
        var radio_data="<div class='col-md-3'>"+
        "<input type='radio' name='org_stru_id' autofocus value="+element.id+" id=org"+element.id+" onclick='getOrganization()'>"+
        " <label class='form-check-label'>"+element.name+"</label>";
       }

       $('.organization_data').append(radio_data);
     })
  }
});
}

function loadNonAuditStaff(){
  destroyDatatable("#tbl_non_audit_number", "#tbl_non_audit_number_body");
  $.ajax({
    url: BACKEND_URL+"/non_audit_total_staff",
    type: 'get',
    data:"",
    success: function(result){
    var non_audit_total_staff=result.data;
    non_audit_total_staff.forEach(function(element){
          var tr = "<tr>";
          tr += "<td>" + element.name + "</td>";
          tr += "<td><input type='hidden' value="+element.id+" name='nats_type_id[]'>"+
                "<input type='number' min='0' value='0' name='nats_total[]' class='form-control' id=non_audit_number"+element.id+" required onmouseup=getNonAuditTotalNum("+element.id+") onkeyup=getNonAuditTotalNum("+element.id+")></td>";
          tr += "</tr>";
          $("#tbl_non_audit_number_body").append(tr);

    })

  }
});
}

function getNonAuditTotalNum(id) {
  var total = 0;
  $('#tbl_non_audit_number tbody tr').each(function () {

    // alert($(this).find('td:eq(1) input[type=number]').val());

      var value = parseInt($(this).find('td:eq(1) input[type=number]').val());
      total += value;

  });

  $("#total_non_audit_staff").val(total);

}

function loadNonAuditTypeOfService(){
  destroyDatatable("#tbl_type_service", "#tbl_type_service_body");
    $.ajax({
      url: BACKEND_URL+"/type_service_provided",
      type: 'get',
      data:"",
      success: function(result){
      var type_service_provided=result.data;
      $('.type_service_provided').append("<div class='col-md-4'></div>");
      type_service_provided.forEach(function(element){
        if(element.audit_firm_type_id==1){
          var radio_data="<div class='col-md-2'>"+
          "<input type='checkbox' name='t_s_p_id' value="+element.id+" id=type_service"+element.id+" >"+
          " <label class='form-check-label'>"+element.name+"</label>";
          $('.type_service_provided').append(radio_data);
        }else{
          var tr = "<tr>";
          tr += "<td><input type='checkbox' name='t_s_p_id' value="+element.id+" id=type_service"+element.id+" >"+
                " <label class='form-check-label'>"+element.name+"</label>";
          tr += "</tr>";
          $('#tbl_type_service_body').append(tr);
        }


      })
    }
  });
}

// function validateRequired(){
//     var radioValue = $("input[name='t_s_p_id']:checked").val();
//     if(radioValue==8){
//       $("#tr_other").css('display','block');
//     }
//
//     $("#type_service_validate").css('display','none');
//     $(".type-service-card").css('border','1px solid rgba(0,0,0,.125)');
// }

function createNonAuditFirm(){
  if($("input[name=password]").val()!=$("input[name=confirm_password]").val())
  {
      alert("Your password and confirm password do not match!");
      return;
  }

  var send_data=new FormData();
  // send_data.append('accountancy_firm_reg_no',$("input[name=accountancy_firm_reg_no]").val());
  var profile_photo       =   $("input[name=profile_photo]")[0].files[0];
  send_data.append('profile_photo', profile_photo);
  send_data.append('accountancy_firm_name',$("input[name=accountancy_firm_name]").val());
  send_data.append('head_office_address',$("textarea[name=head_office_address]").val());
  send_data.append('head_office_address_mm',$("textarea[name=head_office_address_mm]").val());
  //send_data.append('township',$("input[name=township]").val());
  send_data.append('post_code',$("input[name=post_code]").val());
  //send_data.append('city',$("input[name=city]").val());
  //send_data.append('state',$("input[name=state]").val());
  send_data.append('phone_no',$("input[name=phone_no]").val());
  send_data.append('h_email',$("input[name=h_email]").val());
  send_data.append('website',$("input[name=website]").val());
  send_data.append('audit_firm_type_id',$("input[name=audit_firm_type_id]").val());
  send_data.append('local_foreign_type',$("input[name=local_foreign_type]").val());
  send_data.append('org_stru_id',$('input[name=org_stru_id]:checked').val());
  //send_data.append('t_s_p_id',$('input[name=t_s_p_id]:checked').val());
  // var t_s_p_id_val = new Array();
  //       $('input[name=t_s_p_id]:checked').each(function(i){
  //         t_s_p_id_val.push(this.value);
  //       });
  // send_data.append('t_s_p_id[]',t_s_p_id_val);

  var t_s_p_id_val = new Array();
  $('input[name=t_s_p_id]:checked').each(function(i){
    send_data.append('t_s_p_id[]',this.value);
  });

  var checked_other = $('#type_service8').prop('checked');
  if(checked_other == true){
    send_data.append('other',$('input[name=other]').val());
  }
  else{
    send_data.append('other','');
  }
  //send_data.append('other',$('input[name=other]').val());
  send_data.append('name_sole_proprietor',$("input[name=name_sole_proprietor]").val());
  send_data.append('dir_passport_csc',$("input[name=dir_passport_csc]").val());
  send_data.append('declaration',$("input[name=declaration]").val());
  send_data.append('declaration_mm',$("input[name=declaration_mm]").val());
  send_data.append('email',$("input[name=email]").val());
  send_data.append('password',$("input[name=password]").val());
  // send_data.append('form_fee',$("input[name=form_fee]").val());
  // send_data.append('nrc_fee',$("input[name=nrc_fee]").val());

  $('input[name="bo_branch_name[]"]').map(function(){send_data.append('bo_branch_name[]',$(this).val())});
  $('input[name="bo_address[]"]').map(function(){send_data.append('bo_address[]',$(this).val())});
  $('input[name="bo_township[]"]').map(function(){send_data.append("bo_township[]",$(this).val());});
  $('input[name="bo_post_code[]"]').map(function(){send_data.append("bo_post_code[]",$(this).val());});
  $('input[name="bo_city[]"]').map(function(){send_data.append("bo_city[]",$(this).val());});
  $('input[name="bo_state_region[]"]').map(function(){send_data.append("bo_state_region[]",$(this).val());});
  $('input[name="bo_phone[]"]').map(function(){send_data.append("bo_phone[]",$(this).val());});
  $('input[name="bo_email[]"]').map(function(){send_data.append("bo_email[]",$(this).val());});
  $('input[name="bo_website[]"]').map(function(){send_data.append("bo_website[]",$(this).val());});
  $('input[name="foa_name[]"]').map(function(){send_data.append("foa_name[]",$(this).val());});
  $('input[name="foa_pub_pri_reg_no[]"]').map(function(){send_data.append("foa_pub_pri_reg_no[]",$(this).val());});
  $('input[name="fona_name[]"]').map(function(){send_data.append("fona_name[]",$(this).val());});
  $('input[name="fona_pass_csc_inco[]"]').map(function(){send_data.append("fona_pass_csc_inco[]",$(this).val());});
  $("input[id=report_yes]").map(function(){send_data.append('foa_authority_to_sign[]',$(this).val());});
  $('input[name="do_name[]"]').map(function(){send_data.append("do_name[]",$(this).val());});
  $('input[name="do_position[]"]').map(function(){send_data.append("do_position[]",$(this).val());});
  $('input[name="do_cpa_reg_no[]"]').map(function(){send_data.append("do_cpa_reg_no[]",$(this).val());});
  $('input[name="do_pub_pri_reg_no[]"]').map(function(){send_data.append("do_pub_pri_reg_no[]",$(this).val());});
  $('input[name="dona_name[]"]').map(function(){send_data.append("dona_name[]",$(this).val());});
  $('input[name="dona_position[]"]').map(function(){send_data.append("dona_position[]",$(this).val());});
  $('input[name="dona_passport[]"]').map(function(){send_data.append("dona_passport[]",$(this).val());});
  // $('input[name="dona_csc_no[]"]').map(function(){send_data.append("dona_csc_no[]",$(this).val());});
  $('input[name="ats_total[]"]').map(function(){send_data.append("ats_total[]",$(this).val());});
  $('input[name="ats_audit_staff[]"]').map(function(){send_data.append("ats_audit_staff[]",$(this).val());});
  $('input[name="ats_non_audit_staff[]"]').map(function(){send_data.append("ats_non_audit_staff[]",$(this).val());});
  $('input[name="ats_audit_total_staff_type_id[]"]').map(function(){send_data.append("ats_audit_total_staff_type_id[]",$(this).val());});
  $('input[name="as_total[]"]').map(function(){send_data.append("as_total[]",$(this).val());});
  $('input[name="as_full_time[]"]').map(function(){send_data.append("as_full_time[]",$(this).val());});
  $('input[name="as_part_time[]"]').map(function(){send_data.append("as_part_time[]",$(this).val());});
  $('input[name="as_audit_staff_type_id[]"]').map(function(){send_data.append('as_audit_staff_type_id[]',$(this).val());});
  $('input[name="nats_total[]"]').map(function(){send_data.append("nats_total[]",$(this).val());});
  $('input[name="nats_type_id[]"]').map(function(){send_data.append("nats_type_id[]",$(this).val());});
  $('input[name="mf_name[]"]').map(function(){send_data.append("mf_name[]",$(this).val());});
  $('input[name="mf_position[]"]').map(function(){send_data.append("mf_position[]",$(this).val());});
  $('input[name="mf_cpa_passed_reg_no[]"]').map(function(){send_data.append("mf_cpa_passed_reg_no[]",$(this).val());});
  $('input[name="mf_cpa_full_reg_no[]"]').map(function(){send_data.append("mf_cpa_full_reg_no[]",$(this).val());});
  $('input[name="mf_pub_pra_reg_no[]"]').map(function(){send_data.append("mf_pub_pra_reg_no[]",$(this).val());});

   $('input[name="ppa_certis[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('ppa_certis[]',$(this).get(0).files[i]);
    }

  });
  $('input[name="letterheads[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('letterheads[]',$(this).get(0).files[i]);
    }

  });

  // $('input[name="representatives[]"]').map(function(){
  //   for (var i = 0; i < $(this).get(0).files.length; ++i) {
  //     send_data.append('representatives[]',$(this).get(0).files[i]);
  //   }
  // });
  $('input[name="pass_photos[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('pass_photos[]',$(this).get(0).files[i]);
    }
  });
  $('input[name="owner_profiles[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('owner_profiles[]',$(this).get(0).files[i]);
    }
  });
  $('input[name="edu_certs[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('edu_certs[]',$(this).get(0).files[i]);
    }
  });
  $('input[name="work_exps[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('work_exps[]',$(this).get(0).files[i]);
    }
  });

  $('input[name="nrc_passports_front[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('nrc_passports_front[]',$(this).get(0).files[i]);
    }
  });

  $('input[name="nrc_passports_back[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('nrc_passports_back[]',$(this).get(0).files[i]);
    }
  });

  $('input[name="tax_clearances[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('tax_clearances[]',$(this).get(0).files[i]);
    }
  });
  $('input[name="certi_or_regs[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('certi_or_regs[]',$(this).get(0).files[i]);
    }
  });
  $('input[name="deeds_memos[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('deeds_memos[]',$(this).get(0).files[i]);
    }
  });
  $('input[name="certificate_incors[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('certificate_incors[]',$(this).get(0).files[i]);
    }
  });
  $('input[name="permit_foreigns[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('permit_foreigns[]',$(this).get(0).files[i]);
    }
  });
  $('input[name="financial_statements[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('financial_statements[]',$(this).get(0).files[i]);
    }
  });
  $('input[name="tax_reg_certificate[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('tax_reg_certificate[]',$(this).get(0).files[i]);
    }
  });
  show_loader();

  $.ajax({
          url: BACKEND_URL+"/acc_firm_info",
          type: 'post',
          data:send_data,
          contentType: false,
          processData: false,
          success: function(result){
            EasyLoading.hide()
            successMessage("Insert Successfully");
            location.href = FRONTEND_URL+"/";
        }
      });
}

function createNonAuditReconnect(){
  if($("input[name=password]").val()!=$("input[name=confirm_password]").val())
  {
      alert("Your password and confirm password do not match!");
      return;
  }

  var send_data=new FormData();
  // send_data.append('accountancy_firm_reg_no',$("input[name=accountancy_firm_reg_no]").val());
  var profile_photo       =   $("input[name=profile_photo]")[0].files[0];
  send_data.append('profile_photo', profile_photo);
  send_data.append('registration_no',$("input[name=registration_no]").val());
  send_data.append('accountancy_firm_name',$("input[name=accountancy_firm_name]").val());
  send_data.append('head_office_address',$("textarea[name=head_office_address]").val());
  send_data.append('head_office_address_mm',$("textarea[name=head_office_address_mm]").val());
  //send_data.append('township',$("input[name=township]").val());
  send_data.append('post_code',$("input[name=post_code]").val());
  //send_data.append('city',$("input[name=city]").val());
  //send_data.append('state',$("input[name=state]").val());
  send_data.append('phone_no',$("input[name=phone_no]").val());
  send_data.append('h_email',$("input[name=h_email]").val());
  send_data.append('website',$("input[name=website]").val());
  send_data.append('audit_firm_type_id',$("input[name=audit_firm_type_id]").val());
  send_data.append('local_foreign_type',$("input[name=local_foreign_type]").val());
  send_data.append('org_stru_id',$('input[name=org_stru_id]:checked').val());
  send_data.append('last_registered_year',$("input[name=last_registered_year]").val());
  send_data.append('suspended_year',$("input[name=suspended_year]").val());
  send_data.append('req_for_stop',$('input[name=req_for_stop]:checked').val());
  //send_data.append('t_s_p_id',$('input[name=t_s_p_id]:checked').val());
  // var t_s_p_id_val = new Array();
  //       $('input[name=t_s_p_id]:checked').each(function(i){
  //         t_s_p_id_val.push(this.value);
  //       });
  // send_data.append('t_s_p_id[]',t_s_p_id_val);

  var t_s_p_id_val = new Array();
  $('input[name=t_s_p_id]:checked').each(function(i){
    send_data.append('t_s_p_id[]',this.value);
  });

  var checked_other = $('#type_service8').prop('checked');
  if(checked_other == true){
    send_data.append('other',$('input[name=other]').val());
  }
  else{
    send_data.append('other','');
  }
  //send_data.append('other',$('input[name=other]').val());
  send_data.append('name_sole_proprietor',$("input[name=name_sole_proprietor]").val());
  send_data.append('dir_passport_csc',$("input[name=dir_passport_csc]").val());
  send_data.append('declaration',$("input[name=declaration]").val());
  send_data.append('declaration_mm',$("input[name=declaration_mm]").val());
  send_data.append('email',$("input[name=email]").val());
  send_data.append('password',$("input[name=password]").val());
  // send_data.append('form_fee',$("input[name=form_fee]").val());
  // send_data.append('nrc_fee',$("input[name=nrc_fee]").val());

  $('input[name="bo_branch_name[]"]').map(function(){send_data.append('bo_branch_name[]',$(this).val())});
  $('input[name="bo_address[]"]').map(function(){send_data.append('bo_address[]',$(this).val())});
  $('input[name="bo_township[]"]').map(function(){send_data.append("bo_township[]",$(this).val());});
  $('input[name="bo_post_code[]"]').map(function(){send_data.append("bo_post_code[]",$(this).val());});
  $('input[name="bo_city[]"]').map(function(){send_data.append("bo_city[]",$(this).val());});
  $('input[name="bo_state_region[]"]').map(function(){send_data.append("bo_state_region[]",$(this).val());});
  $('input[name="bo_phone[]"]').map(function(){send_data.append("bo_phone[]",$(this).val());});
  $('input[name="bo_email[]"]').map(function(){send_data.append("bo_email[]",$(this).val());});
  $('input[name="bo_website[]"]').map(function(){send_data.append("bo_website[]",$(this).val());});
  $('input[name="foa_name[]"]').map(function(){send_data.append("foa_name[]",$(this).val());});
  $('input[name="foa_pub_pri_reg_no[]"]').map(function(){send_data.append("foa_pub_pri_reg_no[]",$(this).val());});
  $('input[name="fona_name[]"]').map(function(){send_data.append("fona_name[]",$(this).val());});
  $('input[name="fona_pass_csc_inco[]"]').map(function(){send_data.append("fona_pass_csc_inco[]",$(this).val());});
  $("input[id=report_yes]").map(function(){send_data.append('foa_authority_to_sign[]',$(this).val());});
  $('input[name="do_name[]"]').map(function(){send_data.append("do_name[]",$(this).val());});
  $('input[name="do_position[]"]').map(function(){send_data.append("do_position[]",$(this).val());});
  $('input[name="do_cpa_reg_no[]"]').map(function(){send_data.append("do_cpa_reg_no[]",$(this).val());});
  $('input[name="do_pub_pri_reg_no[]"]').map(function(){send_data.append("do_pub_pri_reg_no[]",$(this).val());});
  $('input[name="dona_name[]"]').map(function(){send_data.append("dona_name[]",$(this).val());});
  $('input[name="dona_position[]"]').map(function(){send_data.append("dona_position[]",$(this).val());});
  $('input[name="dona_passport[]"]').map(function(){send_data.append("dona_passport[]",$(this).val());});
  // $('input[name="dona_csc_no[]"]').map(function(){send_data.append("dona_csc_no[]",$(this).val());});
  $('input[name="ats_total[]"]').map(function(){send_data.append("ats_total[]",$(this).val());});
  $('input[name="ats_audit_staff[]"]').map(function(){send_data.append("ats_audit_staff[]",$(this).val());});
  $('input[name="ats_non_audit_staff[]"]').map(function(){send_data.append("ats_non_audit_staff[]",$(this).val());});
  $('input[name="ats_audit_total_staff_type_id[]"]').map(function(){send_data.append("ats_audit_total_staff_type_id[]",$(this).val());});
  $('input[name="as_total[]"]').map(function(){send_data.append("as_total[]",$(this).val());});
  $('input[name="as_full_time[]"]').map(function(){send_data.append("as_full_time[]",$(this).val());});
  $('input[name="as_part_time[]"]').map(function(){send_data.append("as_part_time[]",$(this).val());});
  $('input[name="as_audit_staff_type_id[]"]').map(function(){send_data.append('as_audit_staff_type_id[]',$(this).val());});
  $('input[name="nats_total[]"]').map(function(){send_data.append("nats_total[]",$(this).val());});
  $('input[name="nats_type_id[]"]').map(function(){send_data.append("nats_type_id[]",$(this).val());});
  $('input[name="mf_name[]"]').map(function(){send_data.append("mf_name[]",$(this).val());});
  $('input[name="mf_position[]"]').map(function(){send_data.append("mf_position[]",$(this).val());});
  $('input[name="mf_cpa_passed_reg_no[]"]').map(function(){send_data.append("mf_cpa_passed_reg_no[]",$(this).val());});
  $('input[name="mf_cpa_full_reg_no[]"]').map(function(){send_data.append("mf_cpa_full_reg_no[]",$(this).val());});
  $('input[name="mf_pub_pra_reg_no[]"]').map(function(){send_data.append("mf_pub_pra_reg_no[]",$(this).val());});

   $('input[name="ppa_certis[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('ppa_certis[]',$(this).get(0).files[i]);
    }

  });
  $('input[name="letterheads[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('letterheads[]',$(this).get(0).files[i]);
    }

  });

  // $('input[name="representatives[]"]').map(function(){
  //   for (var i = 0; i < $(this).get(0).files.length; ++i) {
  //     send_data.append('representatives[]',$(this).get(0).files[i]);
  //   }
  // });
  $('input[name="pass_photos[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('pass_photos[]',$(this).get(0).files[i]);
    }
  });
  $('input[name="owner_profiles[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('owner_profiles[]',$(this).get(0).files[i]);
    }
  });
  $('input[name="edu_certs[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('edu_certs[]',$(this).get(0).files[i]);
    }
  });
  $('input[name="work_exps[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('work_exps[]',$(this).get(0).files[i]);
    }
  });

  $('input[name="nrc_passports_front[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('nrc_passports_front[]',$(this).get(0).files[i]);
    }
  });

  $('input[name="nrc_passports_back[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('nrc_passports_back[]',$(this).get(0).files[i]);
    }
  });

  $('input[name="tax_clearances[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('tax_clearances[]',$(this).get(0).files[i]);
    }
  });
  $('input[name="certi_or_regs[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('certi_or_regs[]',$(this).get(0).files[i]);
    }
  });
  $('input[name="deeds_memos[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('deeds_memos[]',$(this).get(0).files[i]);
    }
  });
  $('input[name="certificate_incors[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('certificate_incors[]',$(this).get(0).files[i]);
    }
  });
  $('input[name="permit_foreigns[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('permit_foreigns[]',$(this).get(0).files[i]);
    }
  });
  $('input[name="financial_statements[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('financial_statements[]',$(this).get(0).files[i]);
    }
  });
  $('input[name="tax_reg_certificate[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('tax_reg_certificate[]',$(this).get(0).files[i]);
    }
  });
  show_loader();

  $.ajax({
          url: BACKEND_URL+"/audit_reconnect",
          type: 'post',
          data:send_data,
          contentType: false,
          processData: false,
          success: function(result){
            EasyLoading.hide()
            successMessage("Insert Successfully");
            location.href = FRONTEND_URL+"/";
        }
      });
}

// $( "#submit_btn" ).click(function() {
//     if(allFilled('#non-audit-form')){
//       var send_data = new FormData();
//       send_data.append('email',$("input[name='email']").val());
//       $.ajax({
//           url: BACKEND_URL+"/unique_email",
//           type: 'post',
//           data:send_data,
//           contentType: false,
//           processData: false,
//           success: function(result){
//               if(result.email!=null){
//                   Swal.fire("Email has been used, please check again!");
//               }
//               else{
//                   $('#nonAuditFirmModal').modal('show');
//                   send_email();
//               }
//           }
//       });
//         // $('#nonAuditFirmModal').modal('show');
//         // send_email();
//     }
// });

function check_email_non_audit()
{
    var text = localStorage.getItem('verify_code');
    var obj = JSON.parse(text);
    var verify_code = obj.data.verify_code;
    var code = $("input[name=verify_code]").val();
    if(verify_code != code){
        successMessage("Your code is not correct.Please check your email inbox again!");
        // $('#exampleModal').modal('show');
        // $('#exampleModal1').modal('hide');
        // $('#exampleModal').modal('show');
    }else{
        createNonAuditFirm();
        $('#nonAuditFirmModal').modal('hide');
    }
}

function check_email_non_audit_renew(){
  var text = localStorage.getItem('verify_code');
  var obj = JSON.parse(text);
  var verify_code = obj.data.verify_code;
  var code = $("input[name=verify_code]").val();
  if(verify_code != code){
      successMessage("Your code is not correct.Please check your email inbox again!");
      // $('#exampleModal').modal('show');
      // $('#exampleModal1').modal('hide');
      // $('#exampleModal').modal('show');
  }else{
      nonAuditRenewSubscribe();
      $('#nonAuditFirmRenewModal').modal('hide');
  }
}

function check_email_non_audit_reconnect(){
  var text = localStorage.getItem('verify_code');
  var obj = JSON.parse(text);
  var verify_code = obj.data.verify_code;
  var code = $("input[name=verify_code]").val();
  if(verify_code != code){
      successMessage("Your code is not correct.Please check your email inbox again!");
      // $('#exampleModal').modal('show');
      // $('#exampleModal1').modal('hide');
      // $('#exampleModal').modal('show');
  }else{
      createNonAuditReconnect();
      $('#nonAuditReconnectModal').modal('hide');
  }
}

function nonAuditRegFeedback(){
  var student =JSON.parse(localStorage.getItem("studentinfo"));
  if(student!=null){
    $.ajax({
      url: BACKEND_URL+"/getAuditFormStatus/"+student.id,
      type: 'GET',
      success: function(data){
        data.forEach(function(element){
              if(element.approve_reject_status == 0){
                  $('#non_audit_approve').css('display','none');
                  $('#non_audit_form_pending').css('display','block');
                  $('.register-btn').css('display','none');
                  $('.payment-btn').css('display','none');
              }else if(element.approve_reject_status == 1){
                  $('#non_audit_approve').css('display','block');
                  $('#non_audit_app_form').css('display','none');
                  $('#non_audit_form_pending').css('display','none');
                  $('.payment-btn').css('display','block');
                  $('.register-btn').css({'display':'none'});
                  $('.register-btn').removeClass('mt-4');
              }
        })
      }
  });
  }
}


function nonAuditData(){
  var student =JSON.parse(localStorage.getItem("studentinfo"));
  if(student!=null){
    $.ajax({
      type: "GET",
      url: BACKEND_URL+"/getNonAuditStatus/"+student.accountancy_firm_info_id,
      success: function (data){
          data.forEach(function(element){

            var resubmit_url = FRONTEND_URL + "/non_audit_firm_resubmit";
              if(element.status == 0){
                $("#non_audit_form_pending").css('display','block');
              }else if(element.status ==1){
                  $("#accountancy_firm_name").val(element.accountancy_firm_name);
                  $("#register_date").val(element.register_date);

                  //$('#non_audit_container').css('display','block');
                  $('#non_audit_form_pending').css('display','none');
              }
              else{
                  $('#non_audit_app_form').css('display','none');
                  $("#non_audit_form_pending").css('display','none');
                  $('#non_audit_reject').css('display','block');
                  $('.reject').append(`<a href= ${resubmit_url} class="btn btn-primary btn-sm xl-auto" > Go To Form </a>`);

              }
          })
      }
  })
  }
}


function getNonAuditData(){
  var student =JSON.parse(localStorage.getItem("studentinfo"));
  var student_id = student.id;
  $.ajax({
      type: "GET",
      url: BACKEND_URL+"/get_non_audit_data_for_renew/"+student_id,
      success: function (data){
        console.log("na >>",data);
          var non_audit_data = data.data;
          var other_data = data.other_data;
          var student_data = data.student_infos;

          if(non_audit_data.offline_user == 1){
            //$("#reg_no_box").css('display','block');
            //$("#disconnect_box").css('display','block');
            if(non_audit_data.req_for_stop == 1){
              $("input[name=req_for_stop][value=1][type=radio]").attr('checked',true);
              $("#req_to_dissconect").css('display','block');
            }
            else{
              $("input[name=req_for_stop][value=2][type=radio]").attr('checked',true);
            }

            $("input[name=last_registered_year][type=text]").val(non_audit_data.last_registered_year);
            $("input[name=suspended_year][type=text]").val(non_audit_data.suspended_year);
          }
          else{
            // normal users
            var last_year = new Date(non_audit_data.register_date);
            $("input[name=last_registered_year][type=text]").val(last_year.getFullYear());
            $("input[name=last_registered_year][type=text]").prop('readonly',true);
          }

          if(non_audit_data.local_foreign_type == 1){
            $('#local_header').css('display','block');
            $('#foreign_header').css('display','none');
            $('#local_info').css('display','block');
            $('#foreign_info').css('display','none');
          }
          else{
            $('#local_header').css('display','none');
            $('#foreign_header').css('display','block');
            $('#local_info').css('display','none');
            $('#foreign_info').css('display','block');
            $("#director_staffmembers").css('display','block');
            $("#permit_section_27").css('display','block');
            //
            $("#financial_label_1").css('display','block');
            $("#financial_label_2").css('display','none');
            //
            $("#letterhead_label_1").css('display','block');
            $("#letterhead_label_2").css('display','none');
            //
            $("#education_label_1").css('display','block');
            $("#education_label_2").css('display','none');
            //
            $("#commercial_label_1").css('display','block');
            $("#commercial_label_2").css('display','none');
            //
            $("#work_exp_label_1").css('display','block');
            $("#work_exp_label_2").css('display','none');
            //
            $("#shareholder_label_1").css('display','block');
            $("#shareholder_label_2").css('display','none');
            //
            $("#shareholder_label_1").css('display','block');
            $("#shareholder_label_2").css('display','none');
            //
            $("#tax_label_1").css('display','block');
            $("#tax_label_2").css('display','none');
          }

          $("input[name=offline_user]").val(non_audit_data.offline_user);
          $("input[name=local_foreign_type]").val(non_audit_data.local_foreign_type);
          // $("input[name=req_for_stop]").val(non_audit_data.req_for_stop);
          // $("input[name=last_registered_year]").val(non_audit_data.last_registered_year);
          // $("input[name=suspended_year]").val(non_audit_data.suspended_year);

          $('input[name=email]').val(student_data[0].email);
          $("#accountancy_firm_name").val(non_audit_data.accountancy_firm_name);
          $("input[name=accountancy_firm_reg_no]").val(non_audit_data.accountancy_firm_reg_no);
          //$("#register_date").val(non_audit_data.register_date);
          $('#previewImg').attr("src",BASE_URL+non_audit_data.image);
          $('#hidden_profile').val(non_audit_data.image);

          $('textarea[name=head_office_address]').val(non_audit_data.head_office_address);
          $('textarea[name=head_office_address_mm]').val(non_audit_data.head_office_address_mm);
          $('input[name=township]').val(non_audit_data.township);
          $('input[name=post_code]').val(non_audit_data.postcode);
          $('input[name=city]').val(non_audit_data.city);
          $('input[name=state]').val(non_audit_data.state_region);
          $('input[name=phone_no]').val(non_audit_data.telephones);
          $('input[name=h_email]').val(non_audit_data.h_email);
          $('input[name=website]').val(non_audit_data.website);
          $('input[name=name_sole_proprietor]').val(non_audit_data.name_of_sole_proprietor);
          $('input[name=dir_passport_csc]').val(non_audit_data.dir_passport_csc);
          $('input[name=declaration]').val(non_audit_data.declaration);
          $('input[name=declaration_mm]').val(non_audit_data.declaration_mm);

          other_data.forEach(function(element){
            // Branch office
            var branch=element.branch_offices;
            branch.forEach(function(item){
              var tr = "<tr>";
              tr += "<td><input  type='text' name='bo_branch_name[]' class='form-control' autocomplete='off' value='"+item.branch_name+"'></td>";
              tr += "<td><input  type='text' name='bo_address[]' class='form-control' autocomplete='off' value='"+item.branch_address+"'></td>";
              tr += "<td><input  type='text' name='bo_township[]' class='form-control' autocomplete='off' value='"+item.township+"'></td>";
              tr += "<td><input  type='text' name='bo_post_code[]' class='form-control' autocomplete='off' value='"+item.postcode+"'></td>";
              tr += "<td><input  type='text' name='bo_city[]' class='form-control' autocomplete='off' value='"+item.city+"'></td>";
              tr += "<td ><input  type='text' name='bo_state_region[]' class='form-control' autocomplete='off' value='"+item.state_region+"'></td>";
              tr += "<td ><input  type='text' name='bo_phone[]' class='form-control' autocomplete='off' value='"+item.phones+"'></td>";

              tr += "<td ><input  type='text' name='bo_email[]' class='form-control' autocomplete='off' value='"+item.email+"'></td>";
              tr += "<td ><input  type='text' name='bo_website[]' class='form-control' autocomplete='off' value='"+item.website+"'></td>";
              tr += '<td class="text-center"><button class="delete btn btn-danger btn-sm" type="button" onclick=delRowBranch("branch_non_audit")><li class="fa fa-times"></li></button></td>' ;
              tr += "</tr>";
              $("#tbl_branch_body").append(tr);
            });

            // Organization Structure
            $('.organization_data').find("input[type=radio]").prop('disabled',true);

            $('#org'+element.organization_structure_id).prop("checked", true);
            if(element.organization_structure_id==1){
              $('#sole-proprietorship').css('display','block');

            }else if(element.organization_structure_id==2){
              $('#partnership').css('display','block');

            }else if(element.organization_structure_id==3){
              $('#company').css('display','block');

            }

            // Sole Proprietor/Partners/Shareholders
            var firm_owner_non_audit=element.firm_owner_non_audits;
            if(firm_owner_non_audit.length!=0){
              var count = 1;
              firm_owner_non_audit.forEach(function(item){
                var tr = "<tr>";
                tr += "<td>" +count + "</td>";
                tr += "<td ><input  type='text' value='"+item.name+"' name='fona_name[]' class='form-control' autocomplete='off'></td>";
                tr += "<td ><input  type='text' value='"+item.pass_csc_inco+"' name='fona_pass_csc_inco[]' class='form-control' autocomplete='off'></td>";

                tr += '<td class="text-center"><button class="delete btn btn-danger btn-sm" type="button" onclick=delRowPartnerByNonAudit("non_partner")><li class="fa fa-times"></li></button></td>' ;
                tr += "</tr>";
                $("#tbl_non_partner_body").append(tr);

                count++;
              });
            }

            // Director(s)/Officer(s)
            var director_officer_audit=element.director_officer_non_audits;
            director_officer_audit.forEach(function(item){
              var count = 1;
              var tr = "<tr>";
              tr += "<td>" +count + "</td>";
              tr += "<td ><input  type='text' value='"+item.name+"' name='dona_name[]' class='form-control' autocomplete='off'></td>";
              tr += "<td ><input  type='text' value='"+item.position+"' name='dona_position[]' class='form-control' autocomplete='off'></td>";
              tr += "<td ><input  type='text' value='"+item.passport+"' name='dona_passport[]' class='form-control' autocomplete='off'></td>";
              tr += '<td class="text-center"><button class="delete btn btn-danger btn-sm" type="button" onclick=delRowDirectorByNonAudit("non_director")><li class="fa fa-times"></li></button></td>' ;
              tr += "</tr>";
              $("#tbl_director_body").append(tr);

              count++;
            });

            // Total Staff
            var non_audit_total_staff=element.non_audit_total_staffs;
            if(non_audit_total_staff.length!=0){
              var total_amt = 0;
              non_audit_total_staff.forEach(function(item){
                total_amt += parseInt(item.total);
                $('#tbl_non_audit_number_body').find("input[id=non_audit_number"+item.non_audit_total_staff_type_id+"]").val(item.total);
                //$('#tbl_non_audit_number_body').find("input[id=non_audit_number"+item.non_audit_total_staff_type_id+"]").prop("disabled", true);

              });
              $("#total_non_audit_staff").val(total_amt);
            }

            // Types Of Service Provided
            var t_s_p_arr = JSON.parse(element.type_of_service_provided_id);
            t_s_p_arr.forEach(function(item){
              $('input[name=t_s_p_id][value='+item+']').attr("checked", true);
              if(item == 8){
                $("input[name=other]").val(non_audit_data.other);
              }
            });

            // Particulars Of Directors/ Staff Members Who Is A Myanmar CPA
           //  var cpa_myanmar=element.my_cpa_foreigns;
           //  if(cpa_myanmar.length!=0){
           //    $('.cpa_myanmar').css('display','block');
           //    cpa_myanmar.forEach(function(item){
           //      var tr = "<tr>";
           //      tr += "<td>" + + "</td>";
           //      tr += "<td ><input  type='text' value="+item.name+" name='mf_name[]' class='form-control' autocomplete='off'></td>";
           //      tr += "<td ><input  type='text' value="+item.position+" name='mf_position[]' class='form-control' autocomplete='off'></td>";
           //      tr += "<td ><input  type='text' value="+item.cpa_passed_reg_no+" name='mf_cpa_passed_reg_no[]' class='form-control' autocomplete='off'></td>";
           //      tr += "<td ><input  type='text' value="+item.cpa_full_reg_no+" name='mf_cpa_full_reg_no[]' class='form-control' autocomplete='off'></td>";
           //      tr += "<td ><input  type='text' value="+item.public_practice_reg_no+" name='mf_pub_pra_reg_no[]' class='form-control' autocomplete='off'></td>";
           //      tr += "<td ></td>" ;
           //      tr += "</tr>";
           //      $("#tbl_cpa_myanmar_body").append(tr);
           //    })
           //
           // }

           // Particulars Of Directors/ Staff Members Who Is A Myanmar CPA
           var cpa_myanmar=element.my_cpa_foreigns;

          cpa_myanmar.forEach(function(item){
            var count = 1;
            var tr = "<tr>";
            tr += "<td>" +count + "</td>";
            tr += "<td ><input  type='text' value='"+item.name+"' name='mf_name[]' class='form-control' autocomplete='off'></td>";
            tr += "<td ><input  type='text' value='"+item.position+"' name='mf_position[]' class='form-control' autocomplete='off'></td>";
            tr += "<td ><input  type='text' value='"+item.cpa_passed_reg_no+"' name='mf_cpa_passed_reg_no[]' class='form-control' autocomplete='off'></td>";
            tr += "<td ><input  type='text' value='"+item.cpa_full_reg_no+"' name='mf_cpa_full_reg_no[]' class='form-control' autocomplete='off'></td>";
            tr += "<td ><input  type='text' value='"+item.public_practice_reg_no+"' name='mf_pub_pra_reg_no[]' class='form-control' autocomplete='off'></td>";
            tr += '<td class="text-center"><button class="delete btn btn-danger btn-sm" type="button" onclick=addRowDirectorCPA("director_cpa_initial")><li class="fa fa-times"></li></button></td>' ;
            tr += "</tr>";
            $("#tbl_cpa_myanmar_body").append(tr);

            count++;
          });

           if(non_audit_data.offline_user == 1 && non_audit_data.is_renew == 0 && non_audit_data.status == 1){
             // when approved offline user and submit renew form
             $("input[type=text]").not("input[name=verify_code]").attr('readonly',true);
             $("textarea").attr('readonly',true);
             $("input[type=checkbox]").attr('readonly',true);
             $("input[type=radio]").attr('readonly',true);
             $("input[type=email]").attr('readonly',true);
             //$("button").not(":button[type=submit]").attr('disabled',true);
             $("#tbl_non_audit_number_body").find("input").attr('readonly',true);
             $("#tbl_type_service").find("input[type=checkbox]").attr('disabled',true);
             $('.non_partner,.branch_non_audit,.non_director').find('button').attr('disabled',true);
           }

          });
      }
  })
}

function removeBracketed(file,divname){
  var new_file=file.replace(/[\'"[\]']+/g, '');
  var split_new_file=new_file.split(',');
  for(var i=0;i<split_new_file.length;i++){
      var file="<a href='"+BASE_URL+"/"+split_new_file[i]+"'  target='_blank'>View File</a><br/>";
      $("."+divname).append(file);
    }
}

// function loadFile(file) {
//   var myImageId = "storage/acc_firm/" + file;
//   $(".modal-body #file").attr("src", BASE_URL+myImageId);
// }

function nonAuditRenewSubscribe()
{
  var student =JSON.parse(localStorage.getItem("studentinfo"));
  var student_id = student.id;
  var send_data = new FormData();

  if($("input[name=profile_photo]")[0].files[0]){
    send_data.append('profile_photo', $("input[name=profile_photo]")[0].files[0]);
  }else{
    send_data.append('profile_photo', $('#hidden_profile').val());
  }
  send_data.append('id',student.accountancy_firm_info_id);
  send_data.append('student_id',student_id);

  // send_data.append('accountancy_firm_reg_no',$("input[name=accountancy_firm_reg_no]").val());
  //var profile_photo       =   $("input[name=profile_photo]")[0].files[0];
  //send_data.append('profile_photo', profile_photo);
  send_data.append('accountancy_firm_name',$("input[name=accountancy_firm_name]").val());
  send_data.append('accountancy_firm_reg_no',$("input[name=accountancy_firm_reg_no]").val());
  send_data.append('head_office_address',$("textarea[name=head_office_address]").val());
  send_data.append('head_office_address_mm',$("textarea[name=head_office_address_mm]").val());
  //send_data.append('township',$("input[name=township]").val());
  send_data.append('post_code',$("input[name=post_code]").val());
  //send_data.append('city',$("input[name=city]").val());
  //send_data.append('state',$("input[name=state]").val());
  send_data.append('phone_no',$("input[name=phone_no]").val());
  send_data.append('h_email',$("input[name=h_email]").val());
  send_data.append('website',$("input[name=website]").val());
  send_data.append('audit_firm_type_id',$("input[name=audit_firm_type_id]").val());
  send_data.append('local_foreign_type',$("input[name=local_foreign_type]").val());
  send_data.append('org_stru_id',$('input[name=org_stru_id]:checked').val());
  send_data.append('last_registered_year',$("input[name=last_registered_year][type=text]").val());
  send_data.append('offline_user',$("input[name=offline_user]").val());
  send_data.append('req_for_stop',$('input[name=req_for_stop][type=radio]:checked').val());
  send_data.append('suspended_year',$("input[name=suspended_year][type=text]").val());
  //send_data.append('t_s_p_id',$('input[name=t_s_p_id]:checked').val());
  // var t_s_p_id_val = new Array();
  //       $('input[name=t_s_p_id]:checked').each(function(i){
  //         t_s_p_id_val.push(this.value);
  //       });
  // send_data.append('t_s_p_id[]',t_s_p_id_val);

  var t_s_p_id_val = new Array();
  $('input[name=t_s_p_id]:checked').each(function(i){
    send_data.append('t_s_p_id[]',this.value);
  });

  var checked_other = $('#type_service8').prop('checked');
  if(checked_other == true){
    send_data.append('other',$('input[name=other]').val());
  }
  else{
    send_data.append('other','');
  }
  //send_data.append('other',$('input[name=other]').val());
  send_data.append('name_sole_proprietor',$("input[name=name_sole_proprietor]").val());
  send_data.append('dir_passport_csc',$("input[name=dir_passport_csc]").val());
  send_data.append('declaration',$("input[name=declaration]").val());
  send_data.append('declaration_mm',$("input[name=declaration_mm]").val());
  send_data.append('email',$("input[name=email]").val());
  send_data.append('password',$("input[name=password]").val());
  // send_data.append('form_fee',$("input[name=form_fee]").val());
  // send_data.append('nrc_fee',$("input[name=nrc_fee]").val());

  $('input[name="bo_branch_name[]"]').map(function(){send_data.append('bo_branch_name[]',$(this).val())});
  $('input[name="bo_address[]"]').map(function(){send_data.append('bo_address[]',$(this).val())});
  $('input[name="bo_township[]"]').map(function(){send_data.append("bo_township[]",$(this).val());});
  $('input[name="bo_post_code[]"]').map(function(){send_data.append("bo_post_code[]",$(this).val());});
  $('input[name="bo_city[]"]').map(function(){send_data.append("bo_city[]",$(this).val());});
  $('input[name="bo_state_region[]"]').map(function(){send_data.append("bo_state_region[]",$(this).val());});
  $('input[name="bo_phone[]"]').map(function(){send_data.append("bo_phone[]",$(this).val());});
  $('input[name="bo_email[]"]').map(function(){send_data.append("bo_email[]",$(this).val());});
  $('input[name="bo_website[]"]').map(function(){send_data.append("bo_website[]",$(this).val());});
  $('input[name="foa_name[]"]').map(function(){send_data.append("foa_name[]",$(this).val());});
  $('input[name="foa_pub_pri_reg_no[]"]').map(function(){send_data.append("foa_pub_pri_reg_no[]",$(this).val());});
  $('input[name="fona_name[]"]').map(function(){send_data.append("fona_name[]",$(this).val());});
  $('input[name="fona_pass_csc_inco[]"]').map(function(){send_data.append("fona_pass_csc_inco[]",$(this).val());});
  $("input[id=report_yes]").map(function(){send_data.append('foa_authority_to_sign[]',$(this).val());});
  $('input[name="do_name[]"]').map(function(){send_data.append("do_name[]",$(this).val());});
  $('input[name="do_position[]"]').map(function(){send_data.append("do_position[]",$(this).val());});
  $('input[name="do_cpa_reg_no[]"]').map(function(){send_data.append("do_cpa_reg_no[]",$(this).val());});
  $('input[name="do_pub_pri_reg_no[]"]').map(function(){send_data.append("do_pub_pri_reg_no[]",$(this).val());});
  $('input[name="dona_name[]"]').map(function(){send_data.append("dona_name[]",$(this).val());});
  $('input[name="dona_position[]"]').map(function(){send_data.append("dona_position[]",$(this).val());});
  $('input[name="dona_passport[]"]').map(function(){send_data.append("dona_passport[]",$(this).val());});
  // $('input[name="dona_csc_no[]"]').map(function(){send_data.append("dona_csc_no[]",$(this).val());});
  $('input[name="ats_total[]"]').map(function(){send_data.append("ats_total[]",$(this).val());});
  $('input[name="ats_audit_staff[]"]').map(function(){send_data.append("ats_audit_staff[]",$(this).val());});
  $('input[name="ats_non_audit_staff[]"]').map(function(){send_data.append("ats_non_audit_staff[]",$(this).val());});
  $('input[name="ats_audit_total_staff_type_id[]"]').map(function(){send_data.append("ats_audit_total_staff_type_id[]",$(this).val());});
  $('input[name="as_total[]"]').map(function(){send_data.append("as_total[]",$(this).val());});
  $('input[name="as_full_time[]"]').map(function(){send_data.append("as_full_time[]",$(this).val());});
  $('input[name="as_part_time[]"]').map(function(){send_data.append("as_part_time[]",$(this).val());});
  $('input[name="as_audit_staff_type_id[]"]').map(function(){send_data.append('as_audit_staff_type_id[]',$(this).val());});
  $('input[name="nats_total[]"]').map(function(){send_data.append("nats_total[]",$(this).val());});
  $('input[name="nats_type_id[]"]').map(function(){send_data.append("nats_type_id[]",$(this).val());});
  $('input[name="mf_name[]"]').map(function(){send_data.append("mf_name[]",$(this).val());});
  $('input[name="mf_position[]"]').map(function(){send_data.append("mf_position[]",$(this).val());});
  $('input[name="mf_cpa_passed_reg_no[]"]').map(function(){send_data.append("mf_cpa_passed_reg_no[]",$(this).val());});
  $('input[name="mf_cpa_full_reg_no[]"]').map(function(){send_data.append("mf_cpa_full_reg_no[]",$(this).val());});
  $('input[name="mf_pub_pra_reg_no[]"]').map(function(){send_data.append("mf_pub_pra_reg_no[]",$(this).val());});

   $('input[name="ppa_certis[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('ppa_certis[]',$(this).get(0).files[i]);
    }

  });
  $('input[name="letterheads[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('letterheads[]',$(this).get(0).files[i]);
    }

  });

  // $('input[name="representatives[]"]').map(function(){
  //   for (var i = 0; i < $(this).get(0).files.length; ++i) {
  //     send_data.append('representatives[]',$(this).get(0).files[i]);
  //   }
  // });
  $('input[name="pass_photos[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('pass_photos[]',$(this).get(0).files[i]);
    }
  });
  $('input[name="owner_profiles[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('owner_profiles[]',$(this).get(0).files[i]);
    }
  });
  $('input[name="edu_certs[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('edu_certs[]',$(this).get(0).files[i]);
    }
  });
  $('input[name="work_exps[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('work_exps[]',$(this).get(0).files[i]);
    }
  });

  $('input[name="nrc_passports_front[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('nrc_passports_front[]',$(this).get(0).files[i]);
    }
  });

  $('input[name="nrc_passports_back[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('nrc_passports_back[]',$(this).get(0).files[i]);
    }
  });

  $('input[name="tax_clearances[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('tax_clearances[]',$(this).get(0).files[i]);
    }
  });
  $('input[name="certi_or_regs[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('certi_or_regs[]',$(this).get(0).files[i]);
    }
  });
  $('input[name="deeds_memos[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('deeds_memos[]',$(this).get(0).files[i]);
    }
  });
  $('input[name="certificate_incors[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('certificate_incors[]',$(this).get(0).files[i]);
    }
  });
  $('input[name="permit_foreigns[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('permit_foreigns[]',$(this).get(0).files[i]);
    }
  });
  $('input[name="financial_statements[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('financial_statements[]',$(this).get(0).files[i]);
    }
  });
  $('input[name="tax_reg_certificate[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('tax_reg_certificate[]',$(this).get(0).files[i]);
    }
  });


  show_loader();

  $.ajax({
      url: BACKEND_URL+'/renew_subscribe',
      type: 'post',
      data:send_data,
      contentType: false,
      processData: false,
      success: function (data) {
        EasyLoading.hide();
        successMessage("Your new subscription is success!");
        location.href = FRONTEND_URL+'/';
      },
      error: function (result) {
      },
  });
}

function nonAuditFirmDateQuery(){
    var student =JSON.parse(localStorage.getItem("studentinfo"));
    if(student!=null){
      $.ajax({
        type: "GET",
        url: BACKEND_URL+"/getNonAuditDateRange/"+student.accountancy_firm_info_id,
        success: function (data){
            $("#message").val(data);
        }
    })
    }
}

function nonAuditVerifyStatus()
{
    var student =JSON.parse(localStorage.getItem("studentinfo"));
    if(student!=null){
      $.ajax({
        type: "GET",
        url: BACKEND_URL+"/nonAuditCheckVerify/"+student.accountancy_firm_info_id,
        success: function (data){
            var status = data;
            status.forEach(function(element){
                if(element.verify_status == 1){
                    // $('#check_status').css('display','none');
                    $('#check_non_audit_renew').css('display','none');
                }else if(element.verify_status == 2){
                    // $('#check_status').css('display','block');
                    $('#check_non_audit_renew').css('display','none');
                }else{
                  $('#check_non_audit_renew').css('display','block');
                }
            })
        }
    })
    }
}

function checkPaymentNonAudit(){
    var student =JSON.parse(localStorage.getItem("studentinfo"));
    // console.log(student)
    if(student!=null){
      $.ajax({
        url: BACKEND_URL+"/check_payment_non_audit/"+student.id,
        type: 'GET',
        success: function(data){
          var form_data = data;
          form_data.forEach(function(element){
                if(element.payment_method != null){
                    $('#non_audit_payment_btn').prop('disabled', true);
                    loadNonAuditRenew();
                }else{
                    $('#non_audit_payment_btn').prop('disabled', false);
                }
          })
        }
    });
    }
}

// click Go To Payment Button
$("#non_audit_payment_btn").click(function() {
    $('#nonAuditpaymentModal').modal('show');
});

// click cash image
$('#cash_img').click(function() {
    $('#non_audit_pay_now_btn').prop('disabled', false);
});

$('#cb_img').click(function() {
    $('#non_audit_pay_now_btn').prop('disabled', true);
});

$('#mpu_img').click(function() {
    $('#non_audit_pay_now_btn').prop('disabled', true);
});
$('#non_audit_pay_now_btn').prop('disabled', true);

function nonAuditPaymentSubmit(){
    var student = JSON.parse(localStorage.getItem('studentinfo'));
    $.ajax({
    url: BACKEND_URL + "/approve_non_audit_payment/" + student.id,
    type: 'patch',
    success: function (data) {
            successMessage("Your payment is successfully");
            location.href = FRONTEND_URL + "/";
        },
        error:function (message){
        }
    })
}
function loadNonAuditRenew(){
  $('#non_audit_approve').css('display','none');
  $('#non_audit_container').css('display','block');
  $('#non_audit_form_pending').css('display','none');
  $('#non_audit_initial').css({'display':'none'});

}

// reject_update
function getNonAuditDataForRejectUpdate(){
  var student =JSON.parse(localStorage.getItem("studentinfo"));
  var student_id = student.id;
  $.ajax({
      type: "GET",
      url: BACKEND_URL+"/get_non_audit_data_for_renew/"+student_id,
      success: function (data){
          console.log("non audit ***",data);
          var non_audit_data = data.data;
          var other_data = data.other_data;
          var student_data = data.student_infos;

          if(non_audit_data.local_foreign_type == 1){
            $('#local_header').css('display','block');
            $('#foreign_header').css('display','none');
            $('#local_info').css('display','block');
            $('#foreign_info').css('display','none');
          }
          else{
            $('#local_header').css('display','none');
            $('#foreign_header').css('display','block');
            $('#local_info').css('display','none');
            $('#foreign_info').css('display','block');
            $("#permit_section_27").css('display','block');
            $("#director_staffmembers").css('display','block');
            //
            $("#financial_label_1").css('display','block');
            $("#financial_label_2").css('display','none');
            //
            $("#letterhead_label_1").css('display','block');
            $("#letterhead_label_2").css('display','none');
            //
            $("#education_label_1").css('display','block');
            $("#education_label_2").css('display','none');
            //
            $("#commercial_label_1").css('display','block');
            $("#commercial_label_2").css('display','none');
            //
            $("#work_exp_label_1").css('display','block');
            $("#work_exp_label_2").css('display','none');
            //
            $("#shareholder_label_1").css('display','block');
            $("#shareholder_label_2").css('display','none');
            //
            $("#shareholder_label_1").css('display','block');
            $("#shareholder_label_2").css('display','none');
            //
            $("#tax_label_1").css('display','block');
            $("#tax_label_2").css('display','none');
          }
          $("input[name=firm_id]").val(non_audit_data.id);
          $('input[name=email]').val(student_data[0].email);
          $("#accountancy_firm_name").val(non_audit_data.accountancy_firm_name);
          $("input[name=local_foreign_type]").val(non_audit_data.local_foreign_type);
          $("input[name=offline_user]").val(non_audit_data.offline_user);
          $("input[name=accountancy_firm_reg_no]").val(non_audit_data.accountancy_firm_reg_no);
          //$("#register_date").val(non_audit_data.register_date);
          $('#previewImg').attr("src",BASE_URL+non_audit_data.image);
          $('#hidden_profile').val(non_audit_data.image);

          if(non_audit_data.offline_user == 1){
            $("#reg_no_box").css('display','block');
          }

          if(non_audit_data.is_renew == 1){ // renew reject type
            $("#reg_no_box").css('display','block');
            $("input[name=reject_type]").val(non_audit_data.is_renew);
            $("input[name=accountancy_firm_reg_no]").attr('readonly',true);
            $("input[name=email]").prop('readonly',true);
            $("input[name=accountancy_firm_name]").prop('readonly',true);
          }


          if(non_audit_data.is_renew == 1 || non_audit_data.offline_user == 1){

            $("#last_registered_year_box").css("display","block");
            $("input[name=last_registered_year]").val(non_audit_data.last_registered_year);
            $("#req_for_stop_box").css("display","block");
            $("input[name=req_for_stop][value='"+non_audit_data.req_for_stop+"']").prop("checked",true);
            if(non_audit_data.req_for_stop == 1){
              $("#req_to_dissconect").css("display","block");
              $("input[name=suspended_year]").val(non_audit_data.suspended_year);
            }

          }

          $('textarea[name=head_office_address]').val(non_audit_data.head_office_address);
          $('textarea[name=head_office_address_mm]').val(non_audit_data.head_office_address_mm);
          $('input[name=township]').val(non_audit_data.township);
          $('input[name=post_code]').val(non_audit_data.postcode);
          $('input[name=city]').val(non_audit_data.city);
          $('input[name=state]').val(non_audit_data.state_region);
          $('input[name=phone_no]').val(non_audit_data.telephones);
          $('input[name=h_email]').val(non_audit_data.h_email);
          $('input[name=website]').val(non_audit_data.website);
          $('input[name=name_sole_proprietor]').val(non_audit_data.name_of_sole_proprietor);
          $('input[name=dir_passport_csc]').val(non_audit_data.dir_passport_csc);
          $('input[name=declaration]').val(non_audit_data.declaration);
          $('input[name=declaration_mm]').val(non_audit_data.declaration_mm);

          other_data.forEach(function(element){
            // Branch office
            var branch=element.branch_offices;
            branch.forEach(function(item){
              var tr = "<tr>";
              tr += "<td><input  type='text' name='bo_branch_name[]' class='form-control' autocomplete='off' value='"+item.branch_name+"'></td>";
              tr += "<td><input  type='text' name='bo_address[]' class='form-control' autocomplete='off' value='"+item.branch_address+"'></td>";
              tr += "<td><input  type='text' name='bo_township[]' class='form-control' autocomplete='off' value='"+item.township+"'></td>";
              tr += "<td><input  type='text' name='bo_post_code[]' class='form-control' autocomplete='off' value='"+item.postcode+"'></td>";
              tr += "<td><input  type='text' name='bo_city[]' class='form-control' autocomplete='off' value='"+item.city+"'></td>";
              tr += "<td ><input  type='text' name='bo_state_region[]' class='form-control' autocomplete='off' value='"+item.state_region+"'></td>";
              tr += "<td ><input  type='text' name='bo_phone[]' class='form-control' autocomplete='off' value='"+item.phones+"'></td>";

              tr += "<td ><input  type='text' name='bo_email[]' class='form-control' autocomplete='off' value='"+item.email+"'></td>";
              tr += "<td ><input  type='text' name='bo_website[]' class='form-control' autocomplete='off' value='"+item.website+"'></td>";
              tr += '<td class="text-center"><button class="delete btn btn-danger btn-sm" type="button" onclick=delRowBranch("branch_non_audit")><li class="fa fa-times"></li></button></td>' ;
              tr += "</tr>";
              $("#tbl_branch_body").append(tr);
            });

            // Organization Structure
            $('.organization_data').find("input[type=radio]").prop('disabled',true);

            $('#org'+element.organization_structure_id).prop("checked", true);
            if(element.organization_structure_id==1){
              $('#sole-proprietorship').css('display','block');

            }else if(element.organization_structure_id==2){
              $('#partnership').css('display','block');

            }else if(element.organization_structure_id==3){
              $('#company').css('display','block');

            }

            // Sole Proprietor/Partners/Shareholders
            var firm_owner_non_audit=element.firm_owner_non_audits;
            if(firm_owner_non_audit.length!=0){
              var count = 1;
              firm_owner_non_audit.forEach(function(item){
                var tr = "<tr>";
                tr += "<td>" +count + "</td>";
                tr += "<td ><input  type='text' value='"+item.name+"' name='fona_name[]' class='form-control' autocomplete='off'></td>";
                tr += "<td ><input  type='text' value='"+item.pass_csc_inco+"' name='fona_pass_csc_inco[]' class='form-control' autocomplete='off'></td>";

                tr += '<td class="text-center"><button class="delete btn btn-danger btn-sm" type="button" onclick=delRowPartnerByNonAudit("non_partner")><li class="fa fa-times"></li></button></td>' ;
                tr += "</tr>";
                $("#tbl_non_partner_body").append(tr);

                count++;
              });
            }

            // Director(s)/Officer(s)
            var director_officer_audit=element.director_officer_non_audits;
            director_officer_audit.forEach(function(item){
              var count = 1;
              var tr = "<tr>";
              tr += "<td>" +count + "</td>";
              tr += "<td ><input  type='text' value='"+item.name+"' name='dona_name[]' class='form-control' autocomplete='off'></td>";
              tr += "<td ><input  type='text' value='"+item.position+"' name='dona_position[]' class='form-control' autocomplete='off'></td>";
              tr += "<td ><input  type='text' value='"+item.passport+"' name='dona_passport[]' class='form-control' autocomplete='off'></td>";
              tr += '<td class="text-center"><button class="delete btn btn-danger btn-sm" type="button" onclick=delRowDirectorByNonAudit("non_director")><li class="fa fa-times"></li></button></td>' ;
              tr += "</tr>";
              $("#tbl_director_body").append(tr);

              count++;
            });

            // Total Staff
            var non_audit_total_staff=element.non_audit_total_staffs;
            if(non_audit_total_staff.length!=0){
              var total_amt = 0;
              non_audit_total_staff.forEach(function(item){
                total_amt += parseInt(item.total);
                $('#tbl_non_audit_number_body').find("input[id=non_audit_number"+item.non_audit_total_staff_type_id+"]").val(item.total);
                //$('#tbl_non_audit_number_body').find("input[id=non_audit_number"+item.non_audit_total_staff_type_id+"]").prop("disabled", true);

              });
              $("#total_non_audit_staff").val(total_amt);
            }

            // Types Of Service Provided
            var t_s_p_arr = JSON.parse(element.type_of_service_provided_id);
            t_s_p_arr.forEach(function(item){
              $('input[name=t_s_p_id][value='+item+']').attr("checked", true);
              if(item == 8){
                $("input[name=other]").val(non_audit_data.other);
              }
            });

            // Particulars Of Directors/ Staff Members Who Is A Myanmar CPA
            var cpa_myanmar=element.my_cpa_foreigns;

           cpa_myanmar.forEach(function(item){
             var count = 1;
             var tr = "<tr>";
             tr += "<td>" +count + "</td>";
             tr += "<td ><input  type='text' value='"+item.name+"' name='mf_name[]' class='form-control' autocomplete='off'></td>";
             tr += "<td ><input  type='text' value='"+item.position+"' name='mf_position[]' class='form-control' autocomplete='off'></td>";
             tr += "<td ><input  type='text' value='"+item.cpa_passed_reg_no+"' name='mf_cpa_passed_reg_no[]' class='form-control' autocomplete='off'></td>";
             tr += "<td ><input  type='text' value='"+item.cpa_full_reg_no+"' name='mf_cpa_full_reg_no[]' class='form-control' autocomplete='off'></td>";
             tr += "<td ><input  type='text' value='"+item.public_practice_reg_no+"' name='mf_pub_pra_reg_no[]' class='form-control' autocomplete='off'></td>";
             tr += '<td class="text-center"><button class="delete btn btn-danger btn-sm" type="button" onclick=addRowDirectorCPA("director_cpa_initial")><li class="fa fa-times"></li></button></td>' ;
             tr += "</tr>";
             $("#tbl_cpa_myanmar_body").append(tr);

             count++;
           });
          });
      }
  })
}

function nonAuditRejectUpdate(){
  var student =JSON.parse(localStorage.getItem("studentinfo"));
  var firm_id = student.accountancy_firm_info_id;

  var send_data=new FormData();
  // send_data.append('accountancy_firm_reg_no',$("input[name=accountancy_firm_reg_no]").val());
  var profile_photo       =   $("input[name=profile_photo]")[0].files[0];
  send_data.append('profile_photo', profile_photo);
  send_data.append('accountancy_firm_name',$("input[name=accountancy_firm_name]").val());
  send_data.append('accountancy_firm_reg_no',$("input[name=accountancy_firm_reg_no]").val());
  send_data.append('head_office_address',$("textarea[name=head_office_address]").val());
  send_data.append('head_office_address_mm',$("textarea[name=head_office_address_mm]").val());
  //send_data.append('township',$("input[name=township]").val());
  send_data.append('post_code',$("input[name=post_code]").val());
  //send_data.append('city',$("input[name=city]").val());
  //send_data.append('state',$("input[name=state]").val());
  send_data.append('phone_no',$("input[name=phone_no]").val());
  send_data.append('h_email',$("input[name=h_email]").val());
  send_data.append('website',$("input[name=website]").val());
  send_data.append('audit_firm_type_id',$("input[name=audit_firm_type_id]").val());
  send_data.append('local_foreign_type',$("input[name=local_foreign_type]").val());
  send_data.append('org_stru_id',$('input[name=org_stru_id]:checked').val());
  send_data.append('last_registered_year',$("input[name=last_registered_year]").val());
  send_data.append('suspended_year',$("input[name=suspended_year]").val());
  send_data.append('req_for_stop',$('input[name=req_for_stop]:checked').val());
  //send_data.append('t_s_p_id',$('input[name=t_s_p_id]:checked').val());
  // var t_s_p_id_val = new Array();
  //       $('input[name=t_s_p_id]:checked').each(function(i){
  //         t_s_p_id_val.push(this.value);
  //       });
  // send_data.append('t_s_p_id[]',t_s_p_id_val);

  var t_s_p_id_val = new Array();
  $('input[name=t_s_p_id]:checked').each(function(i){
    send_data.append('t_s_p_id[]',this.value);
  });

  var checked_other = $('#type_service8').prop('checked');
  if(checked_other == true){
    send_data.append('other',$('input[name=other]').val());
  }
  else{
    send_data.append('other','');
  }
  //send_data.append('other',$('input[name=other]').val());
  send_data.append('name_sole_proprietor',$("input[name=name_sole_proprietor]").val());
  send_data.append('dir_passport_csc',$("input[name=dir_passport_csc]").val());
  send_data.append('declaration',$("input[name=declaration]").val());
  send_data.append('declaration_mm',$("input[name=declaration_mm]").val());
  send_data.append('dir_passport_csc',$("input[name=dir_passport_csc]").val());
  send_data.append('email',$("input[name=email]").val());
  send_data.append('password',$("input[name=password]").val());
  // send_data.append('form_fee',$("input[name=form_fee]").val());
  // send_data.append('nrc_fee',$("input[name=nrc_fee]").val());

  $('input[name="bo_branch_name[]"]').map(function(){send_data.append('bo_branch_name[]',$(this).val())});
  $('input[name="bo_address[]"]').map(function(){send_data.append('bo_address[]',$(this).val())});
  $('input[name="bo_township[]"]').map(function(){send_data.append("bo_township[]",$(this).val());});
  $('input[name="bo_post_code[]"]').map(function(){send_data.append("bo_post_code[]",$(this).val());});
  $('input[name="bo_city[]"]').map(function(){send_data.append("bo_city[]",$(this).val());});
  $('input[name="bo_state_region[]"]').map(function(){send_data.append("bo_state_region[]",$(this).val());});
  $('input[name="bo_phone[]"]').map(function(){send_data.append("bo_phone[]",$(this).val());});
  $('input[name="bo_email[]"]').map(function(){send_data.append("bo_email[]",$(this).val());});
  $('input[name="bo_website[]"]').map(function(){send_data.append("bo_website[]",$(this).val());});
  $('input[name="foa_name[]"]').map(function(){send_data.append("foa_name[]",$(this).val());});
  $('input[name="foa_pub_pri_reg_no[]"]').map(function(){send_data.append("foa_pub_pri_reg_no[]",$(this).val());});
  $('input[name="fona_name[]"]').map(function(){send_data.append("fona_name[]",$(this).val());});
  $('input[name="fona_pass_csc_inco[]"]').map(function(){send_data.append("fona_pass_csc_inco[]",$(this).val());});
  $("input[id=report_yes]").map(function(){send_data.append('foa_authority_to_sign[]',$(this).val());});
  $('input[name="do_name[]"]').map(function(){send_data.append("do_name[]",$(this).val());});
  $('input[name="do_position[]"]').map(function(){send_data.append("do_position[]",$(this).val());});
  $('input[name="do_cpa_reg_no[]"]').map(function(){send_data.append("do_cpa_reg_no[]",$(this).val());});
  $('input[name="do_pub_pri_reg_no[]"]').map(function(){send_data.append("do_pub_pri_reg_no[]",$(this).val());});
  $('input[name="dona_name[]"]').map(function(){send_data.append("dona_name[]",$(this).val());});
  $('input[name="dona_position[]"]').map(function(){send_data.append("dona_position[]",$(this).val());});
  $('input[name="dona_passport[]"]').map(function(){send_data.append("dona_passport[]",$(this).val());});
  // $('input[name="dona_csc_no[]"]').map(function(){send_data.append("dona_csc_no[]",$(this).val());});
  $('input[name="ats_total[]"]').map(function(){send_data.append("ats_total[]",$(this).val());});
  $('input[name="ats_audit_staff[]"]').map(function(){send_data.append("ats_audit_staff[]",$(this).val());});
  $('input[name="ats_non_audit_staff[]"]').map(function(){send_data.append("ats_non_audit_staff[]",$(this).val());});
  $('input[name="ats_audit_total_staff_type_id[]"]').map(function(){send_data.append("ats_audit_total_staff_type_id[]",$(this).val());});
  $('input[name="as_total[]"]').map(function(){send_data.append("as_total[]",$(this).val());});
  $('input[name="as_full_time[]"]').map(function(){send_data.append("as_full_time[]",$(this).val());});
  $('input[name="as_part_time[]"]').map(function(){send_data.append("as_part_time[]",$(this).val());});
  $('input[name="as_audit_staff_type_id[]"]').map(function(){send_data.append('as_audit_staff_type_id[]',$(this).val());});
  $('input[name="nats_total[]"]').map(function(){send_data.append("nats_total[]",$(this).val());});
  $('input[name="nats_type_id[]"]').map(function(){send_data.append("nats_type_id[]",$(this).val());});
  $('input[name="mf_name[]"]').map(function(){send_data.append("mf_name[]",$(this).val());});
  $('input[name="mf_position[]"]').map(function(){send_data.append("mf_position[]",$(this).val());});
  $('input[name="mf_cpa_passed_reg_no[]"]').map(function(){send_data.append("mf_cpa_passed_reg_no[]",$(this).val());});
  $('input[name="mf_cpa_full_reg_no[]"]').map(function(){send_data.append("mf_cpa_full_reg_no[]",$(this).val());});
  $('input[name="mf_pub_pra_reg_no[]"]').map(function(){send_data.append("mf_pub_pra_reg_no[]",$(this).val());});

   $('input[name="ppa_certis[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('ppa_certis[]',$(this).get(0).files[i]);
    }

  });
  $('input[name="letterheads[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('letterheads[]',$(this).get(0).files[i]);
    }

  });

  // $('input[name="representatives[]"]').map(function(){
  //   for (var i = 0; i < $(this).get(0).files.length; ++i) {
  //     send_data.append('representatives[]',$(this).get(0).files[i]);
  //   }
  // });
  $('input[name="pass_photos[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('pass_photos[]',$(this).get(0).files[i]);
    }
  });
  $('input[name="owner_profiles[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('owner_profiles[]',$(this).get(0).files[i]);
    }
  });
  $('input[name="edu_certs[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('edu_certs[]',$(this).get(0).files[i]);
    }
  });
  $('input[name="work_exps[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('work_exps[]',$(this).get(0).files[i]);
    }
  });

  $('input[name="nrc_passports_front[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('nrc_passports_front[]',$(this).get(0).files[i]);
    }
  });

  $('input[name="nrc_passports_back[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('nrc_passports_back[]',$(this).get(0).files[i]);
    }
  });

  $('input[name="tax_clearances[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('tax_clearances[]',$(this).get(0).files[i]);
    }
  });
  $('input[name="certi_or_regs[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('certi_or_regs[]',$(this).get(0).files[i]);
    }
  });
  $('input[name="deeds_memos[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('deeds_memos[]',$(this).get(0).files[i]);
    }
  });
  $('input[name="certificate_incors[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('certificate_incors[]',$(this).get(0).files[i]);
    }
  });
  $('input[name="permit_foreigns[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('permit_foreigns[]',$(this).get(0).files[i]);
    }
  });
  $('input[name="financial_statements[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('financial_statements[]',$(this).get(0).files[i]);
    }
  });
  $('input[name="tax_reg_certificate[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('tax_reg_certificate[]',$(this).get(0).files[i]);
    }
  });
  show_loader();

  $.ajax({
      url: BACKEND_URL+'/update_rejected_acc_firm_info/'+firm_id,
      type: 'post',
      data:send_data,
      contentType: false,
      processData: false,
      success: function (data) {
        EasyLoading.hide();
        successMessage("Your update registration is success!");
        location.href = FRONTEND_URL+'/';
      },
      error: function (result) {
      },
  });

}

function nonAuditRenewRejectUpdate(){
  var student =JSON.parse(localStorage.getItem("studentinfo"));
  var firm_id = $("input[name=firm_id]").val();

  var send_data=new FormData();
  // send_data.append('accountancy_firm_reg_no',$("input[name=accountancy_firm_reg_no]").val());
  send_data.append('local_foreign_type',$("input[name=local_foreign_type]").val());
  var profile_photo = $("input[name=profile_photo]")[0].files[0];
  send_data.append('profile_photo',profile_photo);
  send_data.append('accountancy_firm_name',$("input[name=accountancy_firm_name]").val());
  send_data.append('accountancy_firm_reg_no',$("input[name=accountancy_firm_reg_no]").val());
  send_data.append('head_office_address',$("textarea[name=head_office_address]").val());
  send_data.append('head_office_address_mm',$("textarea[name=head_office_address_mm]").val());
  //send_data.append('township',$("input[name=township]").val());
  send_data.append('post_code',$("input[name=post_code]").val());
  //send_data.append('city',$("input[name=city]").val());
  //send_data.append('state',$("input[name=state]").val());
  send_data.append('phone_no',$("input[name=phone_no]").val());
  send_data.append('h_email',$("input[name=h_email]").val());
  send_data.append('website',$("input[name=website]").val());
  send_data.append('audit_firm_type_id',$("input[name=audit_firm_type_id]").val());
  // send_data.append('local_foreign_id',$("input[name=local_foreign_id]").val());
  send_data.append('org_stru_id',$('input[name=org_stru_id]:checked').val());
  send_data.append('last_registered_year',$("input[name=last_registered_year][type=text]").val());
  send_data.append('suspended_year',$("input[name=suspended_year][type=text]").val());
  send_data.append('req_for_stop',$('input[name=req_for_stop]:checked').val());
  send_data.append('offline_user',$('input[name=offline_user][type=hidden]').val());//resume

  var t_s_p_id_val = new Array();
  $('input[name=t_s_p_id]:checked').each(function(i){
    send_data.append('t_s_p_id[]',this.value);
  });

  send_data.append('name_sole_proprietor',$("input[name=name_sole_proprietor]").val());
  send_data.append('declaration',$("input[name=declaration]").val());
  send_data.append('declaration_mm',$("input[name=declaration_mm]").val());

  var checked_other = $('#type_service8').prop('checked');
  if(checked_other == true){
    send_data.append('other',$('input[name=other]').val());
  }
  else{
    send_data.append('other','');
  }

  $('input[name="bo_branch_name[]"]').map(function(){send_data.append('bo_branch_name[]',$(this).val())});
  $('input[name="bo_address[]"]').map(function(){send_data.append('bo_address[]',$(this).val())});
  $('input[name="bo_township[]"]').map(function(){send_data.append("bo_township[]",$(this).val());});
  $('input[name="bo_post_code[]"]').map(function(){send_data.append("bo_post_code[]",$(this).val());});
  $('input[name="bo_city[]"]').map(function(){send_data.append("bo_city[]",$(this).val());});
  $('input[name="bo_state_region[]"]').map(function(){send_data.append("bo_state_region[]",$(this).val());});
  $('input[name="bo_phone[]"]').map(function(){send_data.append("bo_phone[]",$(this).val());});
  $('input[name="bo_email[]"]').map(function(){send_data.append("bo_email[]",$(this).val());});
  $('input[name="bo_website[]"]').map(function(){send_data.append("bo_website[]",$(this).val());});
  $('input[name="foa_name[]"]').map(function(){send_data.append("foa_name[]",$(this).val());});
  $('input[name="foa_pub_pri_reg_no[]"]').map(function(){send_data.append("foa_pub_pri_reg_no[]",$(this).val());});
  $('input[name="fona_name[]"]').map(function(){send_data.append("fona_name[]",$(this).val());});
  $('input[name="fona_pass_csc_inco[]"]').map(function(){send_data.append("fona_pass_csc_inco[]",$(this).val());});
  $("input[class=report_yes]:checked").map(function(){send_data.append('foa_authority_to_sign[]',$(this).val());});
  //$('input[name="foa_authority_to_sign[]"]:checked').map(function(){send_data.append("foa_authority_to_sign[]",$(this).val());});
  //send_data.append('foa_authority_to_sign',$('input[name="foa_authority_to_sign[]"]:checked').val());

  $('input[name="do_name[]"]').map(function(){send_data.append("do_name[]",$(this).val());});
  $('input[name="do_position[]"]').map(function(){send_data.append("do_position[]",$(this).val());});
  $('input[name="do_cpa_reg_no[]"]').map(function(){send_data.append("do_cpa_reg_no[]",$(this).val());});
  $('input[name="do_pub_pri_reg_no[]"]').map(function(){send_data.append("do_pub_pri_reg_no[]",$(this).val());});
  $('input[name="dona_name[]"]').map(function(){send_data.append("dona_name[]",$(this).val());});
  $('input[name="dona_position[]"]').map(function(){send_data.append("dona_position[]",$(this).val());});
  $('input[name="dona_passport[]"]').map(function(){send_data.append("dona_passport[]",$(this).val());});
  $('input[name="dona_csc_no[]"]').map(function(){send_data.append("dona_csc_no[]",$(this).val());});
  $('input[name="ats_total[]"]').map(function(){send_data.append("ats_total[]",$(this).val());});
  $('input[name="ats_audit_staff[]"]').map(function(){send_data.append("ats_audit_staff[]",$(this).val());});
  $('input[name="ats_non_audit_staff[]"]').map(function(){send_data.append("ats_non_audit_staff[]",$(this).val());});
  //$('input[name="ats_audit_total_staff_type_id[]"]').map(function(){send_data.append("ats_audit_total_staff_type_id[]",$(this).val());});
  $('input[name="ats_audit_total_staff_type_id[]"]').map(function(){send_data.append("ats_audit_total_staff_type_id[]",$(this).val());});
  $('input[name="as_total[]"]').map(function(){send_data.append("as_total[]",$(this).val());});
  $('input[name="as_full_time[]"]').map(function(){send_data.append("as_full_time[]",$(this).val());});
  $('input[name="as_part_time[]"]').map(function(){send_data.append("as_part_time[]",$(this).val());});
  $('input[name="as_audit_staff_type_id[]"]').map(function(){send_data.append('as_audit_staff_type_id[]',$(this).val());});
  $('input[name="nats_total[]"]').map(function(){send_data.append("nats_total[]",$(this).val());});
  $('input[name="nats_type_id[]"]').map(function(){send_data.append("nats_type_id[]",$(this).val());});
  $('input[name="mf_name[]"]').map(function(){send_data.append("mf_name[]",$(this).val());});
  $('input[name="mf_position[]"]').map(function(){send_data.append("mf_position[]",$(this).val());});
  $('input[name="mf_cpa_passed_reg_no[]"]').map(function(){send_data.append("mf_cpa_passed_reg_no[]",$(this).val());});
  $('input[name="mf_cpa_full_reg_no[]"]').map(function(){send_data.append("mf_cpa_full_reg_no[]",$(this).val());});
  $('input[name="mf_pub_pra_reg_no[]"]').map(function(){send_data.append("mf_pub_pra_reg_no[]",$(this).val());});

  $('input[name="ppa_certis[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('ppa_certis[]',$(this).get(0).files[i]);
    }

  });
  $('input[name="letterheads[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('letterheads[]',$(this).get(0).files[i]);
    }

  });
  // $('input[name="representatives[]"]').map(function(){
  //   for (var i = 0; i < $(this).get(0).files.length; ++i) {
  //     send_data.append('representatives[]',$(this).get(0).files[i]);
  //   }
  // });
  $('input[name="pass_photos[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('pass_photos[]',$(this).get(0).files[i]);
    }
  });
  $('input[name="owner_profiles[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('owner_profiles[]',$(this).get(0).files[i]);
    }
  });
  $('input[name="edu_certs[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('edu_certs[]',$(this).get(0).files[i]);
    }
  });
  $('input[name="work_exps[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('work_exps[]',$(this).get(0).files[i]);
    }
  });
  $('input[name="nrc_passports[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('nrc_passports[]',$(this).get(0).files[i]);
    }
  });
  $('input[name="tax_clearances[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('tax_clearances[]',$(this).get(0).files[i]);
    }
  });
  $('input[name="certi_or_regs[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('certi_or_regs[]',$(this).get(0).files[i]);
    }
  });
  $('input[name="deeds_memos[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('deeds_memos[]',$(this).get(0).files[i]);
    }
  });
  $('input[name="certificate_incors[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('certificate_incors[]',$(this).get(0).files[i]);
    }
  });
  $('input[name="permit_foreigns[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('permit_foreigns[]',$(this).get(0).files[i]);
    }
  });
  $('input[name="financial_statements[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('financial_statements[]',$(this).get(0).files[i]);
    }
  });
  $('input[name="tax_reg_certificate[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('tax_reg_certificate[]',$(this).get(0).files[i]);
    }
  });

  show_loader();

    $.ajax({
        url: BACKEND_URL+'/update_renew_rejected_acc_firm_info/'+firm_id,
        type: 'post',
        data:send_data,
        contentType: false,
        processData: false,
        success: function (data) {
          EasyLoading.hide();
          successMessage("Your update registration is success!");
          location.href = FRONTEND_URL+'/';
        },
        error: function (result) {
        },
    });
}

function nonAuditInitialRejectUpdate(){
  var student =JSON.parse(localStorage.getItem("studentinfo"));
  var firm_id = student.accountancy_firm_info_id;

  var send_data=new FormData();
  // send_data.append('accountancy_firm_reg_no',$("input[name=accountancy_firm_reg_no]").val());
  var profile_photo       =   $("input[name=profile_photo]")[0].files[0];
  send_data.append('profile_photo', profile_photo);
  send_data.append('accountancy_firm_name',$("input[name=accountancy_firm_name]").val());
  send_data.append('accountancy_firm_reg_no',$("input[name=accountancy_firm_reg_no]").val());
  send_data.append('head_office_address',$("textarea[name=head_office_address]").val());
  send_data.append('head_office_address_mm',$("textarea[name=head_office_address_mm]").val());
  //send_data.append('township',$("input[name=township]").val());
  send_data.append('post_code',$("input[name=post_code]").val());
  //send_data.append('city',$("input[name=city]").val());
  //send_data.append('state',$("input[name=state]").val());
  send_data.append('phone_no',$("input[name=phone_no]").val());
  send_data.append('h_email',$("input[name=h_email]").val());
  send_data.append('website',$("input[name=website]").val());
  send_data.append('audit_firm_type_id',$("input[name=audit_firm_type_id]").val());
  send_data.append('local_foreign_type',$("input[name=local_foreign_type]").val());
  send_data.append('org_stru_id',$('input[name=org_stru_id]:checked').val());
  // send_data.append('last_registered_year',$("input[name=last_registered_year]").val());
  // send_data.append('suspended_year',$("input[name=suspended_year]").val());
  // send_data.append('req_for_stop',$('input[name=req_for_stop]:checked').val());


  var t_s_p_id_val = new Array();
  $('input[name=t_s_p_id]:checked').each(function(i){
    send_data.append('t_s_p_id[]',this.value);
  });

  var checked_other = $('#type_service8').prop('checked');
  if(checked_other == true){
    send_data.append('other',$('input[name=other]').val());
  }
  else{
    send_data.append('other','');
  }
  //send_data.append('other',$('input[name=other]').val());
  send_data.append('name_sole_proprietor',$("input[name=name_sole_proprietor]").val());
  send_data.append('dir_passport_csc',$("input[name=dir_passport_csc]").val());
  send_data.append('declaration',$("input[name=declaration]").val());
  send_data.append('declaration_mm',$("input[name=declaration_mm]").val());
  send_data.append('dir_passport_csc',$("input[name=dir_passport_csc]").val());
  send_data.append('email',$("input[name=email]").val());
  send_data.append('password',$("input[name=password]").val());
  // send_data.append('form_fee',$("input[name=form_fee]").val());
  // send_data.append('nrc_fee',$("input[name=nrc_fee]").val());

  $('input[name="bo_branch_name[]"]').map(function(){send_data.append('bo_branch_name[]',$(this).val())});
  $('input[name="bo_address[]"]').map(function(){send_data.append('bo_address[]',$(this).val())});
  $('input[name="bo_township[]"]').map(function(){send_data.append("bo_township[]",$(this).val());});
  $('input[name="bo_post_code[]"]').map(function(){send_data.append("bo_post_code[]",$(this).val());});
  $('input[name="bo_city[]"]').map(function(){send_data.append("bo_city[]",$(this).val());});
  $('input[name="bo_state_region[]"]').map(function(){send_data.append("bo_state_region[]",$(this).val());});
  $('input[name="bo_phone[]"]').map(function(){send_data.append("bo_phone[]",$(this).val());});
  $('input[name="bo_email[]"]').map(function(){send_data.append("bo_email[]",$(this).val());});
  $('input[name="bo_website[]"]').map(function(){send_data.append("bo_website[]",$(this).val());});
  $('input[name="foa_name[]"]').map(function(){send_data.append("foa_name[]",$(this).val());});
  $('input[name="foa_pub_pri_reg_no[]"]').map(function(){send_data.append("foa_pub_pri_reg_no[]",$(this).val());});
  $('input[name="fona_name[]"]').map(function(){send_data.append("fona_name[]",$(this).val());});
  $('input[name="fona_pass_csc_inco[]"]').map(function(){send_data.append("fona_pass_csc_inco[]",$(this).val());});
  $("input[id=report_yes]").map(function(){send_data.append('foa_authority_to_sign[]',$(this).val());});
  $('input[name="do_name[]"]').map(function(){send_data.append("do_name[]",$(this).val());});
  $('input[name="do_position[]"]').map(function(){send_data.append("do_position[]",$(this).val());});
  $('input[name="do_cpa_reg_no[]"]').map(function(){send_data.append("do_cpa_reg_no[]",$(this).val());});
  $('input[name="do_pub_pri_reg_no[]"]').map(function(){send_data.append("do_pub_pri_reg_no[]",$(this).val());});
  $('input[name="dona_name[]"]').map(function(){send_data.append("dona_name[]",$(this).val());});
  $('input[name="dona_position[]"]').map(function(){send_data.append("dona_position[]",$(this).val());});
  $('input[name="dona_passport[]"]').map(function(){send_data.append("dona_passport[]",$(this).val());});
  // $('input[name="dona_csc_no[]"]').map(function(){send_data.append("dona_csc_no[]",$(this).val());});
  $('input[name="ats_total[]"]').map(function(){send_data.append("ats_total[]",$(this).val());});
  $('input[name="ats_audit_staff[]"]').map(function(){send_data.append("ats_audit_staff[]",$(this).val());});
  $('input[name="ats_non_audit_staff[]"]').map(function(){send_data.append("ats_non_audit_staff[]",$(this).val());});
  $('input[name="ats_audit_total_staff_type_id[]"]').map(function(){send_data.append("ats_audit_total_staff_type_id[]",$(this).val());});
  $('input[name="as_total[]"]').map(function(){send_data.append("as_total[]",$(this).val());});
  $('input[name="as_full_time[]"]').map(function(){send_data.append("as_full_time[]",$(this).val());});
  $('input[name="as_part_time[]"]').map(function(){send_data.append("as_part_time[]",$(this).val());});
  $('input[name="as_audit_staff_type_id[]"]').map(function(){send_data.append('as_audit_staff_type_id[]',$(this).val());});
  $('input[name="nats_total[]"]').map(function(){send_data.append("nats_total[]",$(this).val());});
  $('input[name="nats_type_id[]"]').map(function(){send_data.append("nats_type_id[]",$(this).val());});
  $('input[name="mf_name[]"]').map(function(){send_data.append("mf_name[]",$(this).val());});
  $('input[name="mf_position[]"]').map(function(){send_data.append("mf_position[]",$(this).val());});
  $('input[name="mf_cpa_passed_reg_no[]"]').map(function(){send_data.append("mf_cpa_passed_reg_no[]",$(this).val());});
  $('input[name="mf_cpa_full_reg_no[]"]').map(function(){send_data.append("mf_cpa_full_reg_no[]",$(this).val());});
  $('input[name="mf_pub_pra_reg_no[]"]').map(function(){send_data.append("mf_pub_pra_reg_no[]",$(this).val());});

   $('input[name="ppa_certis[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('ppa_certis[]',$(this).get(0).files[i]);
    }

  });
  $('input[name="letterheads[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('letterheads[]',$(this).get(0).files[i]);
    }

  });

  // $('input[name="representatives[]"]').map(function(){
  //   for (var i = 0; i < $(this).get(0).files.length; ++i) {
  //     send_data.append('representatives[]',$(this).get(0).files[i]);
  //   }
  // });
  $('input[name="pass_photos[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('pass_photos[]',$(this).get(0).files[i]);
    }
  });
  $('input[name="owner_profiles[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('owner_profiles[]',$(this).get(0).files[i]);
    }
  });
  $('input[name="edu_certs[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('edu_certs[]',$(this).get(0).files[i]);
    }
  });
  $('input[name="work_exps[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('work_exps[]',$(this).get(0).files[i]);
    }
  });

  $('input[name="nrc_passports_front[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('nrc_passports_front[]',$(this).get(0).files[i]);
    }
  });

  $('input[name="nrc_passports_back[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('nrc_passports_back[]',$(this).get(0).files[i]);
    }
  });

  $('input[name="tax_clearances[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('tax_clearances[]',$(this).get(0).files[i]);
    }
  });
  $('input[name="certi_or_regs[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('certi_or_regs[]',$(this).get(0).files[i]);
    }
  });
  $('input[name="deeds_memos[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('deeds_memos[]',$(this).get(0).files[i]);
    }
  });
  $('input[name="certificate_incors[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('certificate_incors[]',$(this).get(0).files[i]);
    }
  });
  $('input[name="permit_foreigns[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('permit_foreigns[]',$(this).get(0).files[i]);
    }
  });
  $('input[name="financial_statements[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('financial_statements[]',$(this).get(0).files[i]);
    }
  });
  $('input[name="tax_reg_certificate[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('tax_reg_certificate[]',$(this).get(0).files[i]);
    }
  });

  show_loader();

  $.ajax({
      url: BACKEND_URL+'/update_rejected_acc_firm_info/'+firm_id,
      type: 'post',
      data:send_data,
      contentType: false,
      processData: false,
      success: function (data) {
        EasyLoading.hide();
        successMessage("Your update registration is success!");
        location.href = FRONTEND_URL+'/';
      },
      error: function (result) {
      },
  });
}
