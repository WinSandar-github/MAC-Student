$(document).ready(function(){
  $("#choose_firm_type").change(function(){
    if($(this).val() == "1"){
      //local
      $("#local_header").css("display","block");
      $("#foreign_header").css("display","none");
      $("#director_staffmembers").css("display","none");
      $("input[name=local_foreign_id]").val("1");
      $("#email_num").text("13");
      $("#password_num").text("14");
    }
    else if($(this).val() == "2"){
      //foreign
      $("#foreign_header").css("display","block");
      $("#local_header").css("display","none");
      $("#director_staffmembers").css("display","block");
      $("input[name=local_foreign_id]").val("2");
      $("#email_num").text("14");
      $("#password_num").text("15");
    }
    else{
      //local
      $("#local_header").css("display","block");
      $("#foreign_header").css("display","none");
      $("#director_staffmembers").css("display","none");
      $("input[name=local_foreign_id]").val("1");
      $("#email_num").text("13");
      $("#password_num").text("14");
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
     $('.organization_data').append("<div class='col-md-3'></div>");
     organization_structure.forEach(function(element){
       if(element.id!=3){
        var radio_data="<div class='col-md-2'>"+
        "<input type='radio' name='org_stru_id' autofocus value="+element.id+" id=org"+element.id+" onclick='getOrganization()'>"+
        " <label class='form-check-label'>"+element.name+"</label>";
       }else{
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
          tr += "<td><input type='hidden' value="+element.id+" name='nats_type_id[]'><input type='number' value='0' name='nats_total[]' class='form-control' id=non_audit_number"+element.id+"></td>";
          tr += "</tr>";
          $("#tbl_non_audit_number_body").append(tr);

    })

  }
});
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
          "<input type='radio' name='t_s_p_id' value="+element.id+" id=type_service"+element.id+">"+
          " <label class='form-check-label'>"+element.name+"</label>";
          $('.type_service_provided').append(radio_data);
        }else{
          var tr = "<tr>";
          tr += "<td><input type='radio' name='t_s_p_id' value="+element.id+" id=type_service"+element.id+">"+
                " <label class='form-check-label'>"+element.name+"</label>";
          tr += "</tr>";
          $('#tbl_type_service_body').append(tr);
        }


      })
    }
  });
}

function createNonAuditFirm(){

  var send_data=new FormData();
  send_data.append('accountancy_firm_reg_no',$("input[name=accountancy_firm_reg_no]").val());
  send_data.append('accountancy_firm_name',$("input[name=accountancy_firm_name]").val());
  send_data.append('township',$("input[name=township]").val());
  send_data.append('post_code',$("input[name=post_code]").val());
  send_data.append('city',$("input[name=city]").val());
  send_data.append('state',$("input[name=state]").val());
  send_data.append('phone_no',$("input[name=phone_no]").val());
  send_data.append('h_email',$("input[name=h_email]").val());
  send_data.append('website',$("input[name=website]").val());
  send_data.append('audit_firm_type_id',$("input[name=audit_firm_type_id]").val());
  send_data.append('local_foreign_id',$("input[name=local_foreign_id]").val());
  send_data.append('org_stru_id',$('input[name=org_stru_id]:checked').val());
  send_data.append('t_s_p_id',$('input[name=t_s_p_id]:checked').val());
  send_data.append('name_sole_proprietor',$("input[name=name_sole_proprietor]").val());
  send_data.append('declaration',$("input[name=declaration]").val());
  send_data.append('email',$("input[name=email]").val());
  send_data.append('password',$("input[name=password]").val());
  send_data.append('form_fee',$("input[name=form_fee]").val());
  send_data.append('nrc_fee',$("input[name=nrc_fee]").val());

  $('input[name="bo_branch_name[]"]').map(function(){send_data.append('bo_branch_name[]',$(this).val())});
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
  $('input[name="dona_csc_no[]"]').map(function(){send_data.append("dona_csc_no[]",$(this).val());});
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
  $('input[name="representatives[]"]').map(function(){
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      send_data.append('representatives[]',$(this).get(0).files[i]);
    }
  });
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

        $.ajax({
                url: BACKEND_URL+"/acc_firm_info",
                type: 'post',
                data:send_data,
                contentType: false,
                processData: false,
                success: function(result){

                  successMessage(result);
                  location.reload();
              }
            });
}
