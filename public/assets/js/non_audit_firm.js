$(document).ready(function(){
  $("#choose_firm_type").change(function(){
    if($(this).val() == "1"){
      //local
      $("#local_header").css("display","block");
      $("#foreign_header").css("display","none");
      $("#director_staffmembers").css("display","none");
      $("input[name=local_foreign_type]").val("1");
      // $("#email_num").text("13");
      // $("#password_num").text("14");
    }
    else if($(this).val() == "2"){
      //foreign
      $("#foreign_header").css("display","block");
      $("#local_header").css("display","none");
      $("#director_staffmembers").css("display","block");
      $("input[name=local_foreign_type]").val("2");
      // $("#email_num").text("14");
      // $("#password_num").text("15");
    }
    else{
      //local
      $("#local_header").css("display","block");
      $("#foreign_header").css("display","none");
      $("#director_staffmembers").css("display","none");
      $("input[name=local_foreign_type]").val("1");
      // $("#email_num").text("13");
      // $("#password_num").text("14");
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
  if($("input[name=password]").val()!=$("input[name=confirm_password]").val())
  {
      alert("Your password and confirm password do not match!");
      return;
  }
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
  send_data.append('local_foreign_type',$("input[name=local_foreign_type]").val());
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
            successMessage("Insert Successfully");
            //location.reload();
            location.href = FRONTEND_URL+"/";
        }
      });
}

function nonAuditRegFeedback(){
  var student =JSON.parse(localStorage.getItem("studentinfo"));
  $.ajax({
      url: BACKEND_URL+"/getAuditFormStatus/"+student.id,
      type: 'GET',
      success: function(data){
        data.forEach(function(element){
              if(element.approve_reject_status == 0){
                  showPending();
              }else if(element.approve_reject_status == 1){
                  showNonAudit();
              }
        })
      }
  });
}

function showNonAudit(){
  $('#non_audit_app_form').css('display','none');
  $('#non_audit_form_pending').css('display','block');
}

function nonAuditData(){
  var student =JSON.parse(localStorage.getItem("studentinfo"));
  $.ajax({
      type: "GET",
      url: BACKEND_URL+"/getNonAuditStatus/"+student.accountancy_firm_info_id,
      success: function (data){
          data.forEach(function(element){
              if(element.status == 0){
                  pendingStatus();
              }else if(element.status ==1){
                  $("#accountancy_firm_name").append(element.accountancy_firm_name);
                  $("#updated_at").append(element.register_date);
                  showNonAuditList();
              }
              else{
                rejectStatus();
              }
          })
      }
  })
}

function showNonAuditList(){
    $('#non_audit_container').css('display','block');
    $('#non_audit_form_pending').css('display','none');
    //$('#non_audit_app_form').css('display','none');
}

function showPending(){
  $('#non_audit_app_form').css('display','none');
  $('#non_audit_form_pending').css('display','block');
}

function pendingStatus(){
    $('#non_audit_form_pending').css('display','block');
}

function rejectStatus(){
  $('#non_audit_app_form').css('display','none');
  $("#non_audit_form_pending").css('display','none');
  $('#non_audit_reject').css('display','block');
}

function nonAuditFirmDateQuery(){
    var student =JSON.parse(localStorage.getItem("studentinfo"));
    $.ajax({
        type: "GET",
        url: BACKEND_URL+"/getDateRange/"+student.accountancy_firm_info_id,
        success: function (data){
            // console.log(data)
            $("#message").append(data);
        }
    })
}

function nonAuditVerifyStatus()
{
    var student =JSON.parse(localStorage.getItem("studentinfo"));
    $.ajax({
        type: "GET",
        url: BACKEND_URL+"/checkVerify/"+student.accountancy_firm_info_id,
        success: function (data){
            var status = data;
            // console.log(data)
            status.forEach(function(element){
                // console.log(element.verify_status)
                if(element.verify_status == 1){
                    $('#check_status').css('display','none');
                }else if(element.verify_status == 2){
                    $('#check_status').css('display','block');
                }
            })
        }
    })
}

// function getNonAuditData(){
//   $.ajax({
//       type: "GET",
//       url: BACKEND_URL+"/get_non_audit_register_data/"+student.accountancy_firm_info_id,
//       success: function (data){
//           data.forEach(function(element){
//             if(element.acc_firm_info.length != 0){
//               element.acc_firm_info.forEach(function(acc_firm){
//                 if(acc_firm.local_foreign_type == 1){
//                   $('#choose_firm_type option[value=1]').attr('selected','selected');
//                 }
//                 else{
//                   $('#choose_firm_type option[value=2]').attr('selected','selected');
//                 }
//
//                 if(acc_firm.local_foreign_type == 2){
//                   $("#director_staffmembers").css('display','block');
//                   $("#foreign_header").css('display','block');
//                   $("#local_header").css('display','none');
//                 }
//
//                   $('input[name=accountancy_firm_reg_no]').val(acc_firm.accountancy_firm_reg_no);
//                   $('input[name=accountancy_firm_name]').val(acc_firm.accountancy_firm_name);
//                   $('input[name=township]').val(acc_firm.township);
//                   $('input[name=post_code]').val(acc_firm.postcode);
//                   $('input[name=city]').val(acc_firm.city);
//                   $('input[name=state]').val(acc_firm.state_region);
//                   $('input[name=phone_no]').val(acc_firm.telephones);
//                   $('input[name=h_email]').val(acc_firm.h_email);
//                   $('input[name=website]').val(acc_firm.website);
//                   $('input[name=name_sole_proprietor]').val(acc_firm.name_of_sole_proprietor);
//                   $('input[name=declaration]').val(acc_firm.declaration);
//
//                   // Organization Structure
//                   if(acc_firm.organization_structure_id == 1){
//                     $('input[name=org_stru_id]#org1').prop('checked',true);
//                     $("#sole-proprietorship").css('display','block');
//                   }
//                   else if(acc_firm.organization_structure_id == 2){
//                     $('input[name=org_stru_id]#org2').prop('checked',true);
//                     $("#partnership").css('display','block');
//                   }
//                   else if(acc_firm.organization_structure_id == 3){
//                     $('input[name=org_stru_id]#org3').prop('checked',true);
//                     $("#company").css('display','block');
//                   }
//                   else{
//                     $('input[name=org_stru_id]#org4').prop('checked',true);
//                     $("#sole-proprietorship").css('display','none');
//                     $("#partnership").css('display','none');
//                     $("#company").css('display','none');
//                   }
//
//                   // Types of Service Provided
//                   if(acc_firm.type_of_service_provided_id == 3){
//                     $('input[name=t_s_p_id]#type_service3').prop('checked',true);
//                   }
//                   else if(acc_firm.type_of_service_provided_id == 4){
//                     $('input[name=t_s_p_id]#type_service4').prop('checked',true);
//                   }
//                   else if(acc_firm.type_of_service_provided_id == 5){
//                     $('input[name=t_s_p_id]#type_service5').prop('checked',true);
//                   }
//                   else if(acc_firm.type_of_service_provided_id == 6){
//                     $('input[name=t_s_p_id]#type_service6').prop('checked',true);
//                   }
//                   else if(acc_firm.type_of_service_provided_id == 7){
//                     $('input[name=t_s_p_id]#type_service7').prop('checked',true);
//                   }
//                   else{
//                     $('input[name=t_s_p_id]#type_service8').prop('checked',true);
//                   }
//               });
//             }
//
//             // Branch Office
//             $(".branch_non_audit tbody").empty();
//             if(element.branch_office.length != 0){
//               element.branch_office.forEach(function(br_off){
//                 var tr = "<tr>";
//                 tr += "<td><input type='text' name='bo_branch_name[]' class='form-control' autocomplete='off' value='"+br_off.branch_name+"'></td>";
//                 tr += "<td><input type='text' name='bo_township[]' class='form-control' autocomplete='off' value='"+br_off.township+"'></td>";
//                 tr += "<td><input type='text' name='bo_post_code[]' class='form-control' autocomplete='off' value='"+br_off.postcode+"'></td>";
//                 tr += "<td><input type='text' name='bo_city[]' class='form-control' autocomplete='off' value='"+br_off.city+"'></td>";
//                 tr += "<td><input type='text' name='bo_state_region[]' class='form-control' autocomplete='off' value='"+br_off.state_region+"'></td>";
//                 tr += "<td><input type='text' name='bo_phone[]' class='form-control' autocomplete='off' value='"+br_off.phones+"'></td>";
//                 tr += "<td><button class='btn btn-primary btn-add btn-sm custom-btn' type='button' onclick=addInputTele('branch_non_audit')><i class='fa fa-plus'></i></button></td>";
//                 tr += "<td><input type='text' name='bo_email[]' class='form-control' autocomplete='off' value='"+br_off.email+"'></td>";
//                 tr += "<td><input type='text' name='bo_website[]' class='form-control' autocomplete='off' value='"+br_off.website+"'></td>";
//                 tr += "</tr>";
//                 $(".branch_non_audit").append(tr);
//               });
//             }
//
//             // Sole Proprietor/Partners/Shareholders
//             $(".non_partner tbody").empty();
//             var num = 0;
//             if(element.firm_owners.length != 0){
//               element.firm_owners.forEach(function(firm_owner){
//                 var tr = "<tr>";
//                 num++;
//                 tr += "<td>"+ num +"</td>";
//                 tr += "<td><input type='text' name='fona_name[]' class='form-control' autocomplete='off' value='"+firm_owner.name+"'></td>";
//                 tr += "<td><input type='text' name='fona_pass_csc_inco[]' class='form-control' autocomplete='off' value='"+firm_owner.pass_csc_inco+"'></td>";
//                 tr += "<td></td>";
//                 tr += "</tr>";
//                 $(".non_partner").append(tr);
//               });
//             }
//
//             // Director(s)/Officer(s)
//             $(".non_director tbody").empty();
//             var num = 0;
//             if(element.directors_officers.length != 0){
//               element.directors_officers.forEach(function(dir_off){
//                 var tr = "<tr>";
//                 num++;
//                 tr += "<td>"+ num +"</td>";
//                 tr += "<td><input type='text' name='dona_name[]' class='form-control' autocomplete='off' value='"+dir_off.name+"'></td>";
//                 tr += "<td><input type='text' name='dona_position[]' class='form-control' autocomplete='off' value='"+dir_off.position+"'></td>";
//                 tr += "<td><input type='text' name='dona_passport[]' class='form-control' autocomplete='off' value='"+dir_off.passport+"'></td>";
//                 tr += "<td><input type='text' name='dona_csc_no[]' class='form-control' autocomplete='off' value='"+dir_off.csc_no+"'></td>";
//                 tr += "<td></td>";
//                 tr += "</tr>";
//                 $(".non_director").append(tr);
//               });
//             }
//
//             // Total Staff
//             if(element.total_staff.length != 0){
//               element.total_staff.forEach(function(totalStaff){
//                 if(totalStaff.non_audit_total_staff_type_id == 1){
//                   $('input[type=number]#non_audit_number1').val(totalStaff.total);
//                 }
//                 else if(totalStaff.non_audit_total_staff_type_id == 2){
//                   $('input[type=number]#non_audit_number2').val(totalStaff.total);
//                 }
//                 else if(totalStaff.non_audit_total_staff_type_id == 3){
//                   $('input[type=number]#non_audit_number3').val(totalStaff.total);
//                 }
//                 else{
//                   $('input[type=number]#non_audit_number4').val(totalStaff.total);
//                 }
//               });
//             }
//
//             // Email and password
//             if(element.student_infos.length != 0){
//               element.student_infos.forEach(function(stu_info){
//                 $('input[name=email]').val(stu_info.email);
//                 // $('input[name=password]').val(stu_info.password);
//               });
//             }
//
//             //Particulars Of Directors/ Staff Members Who Is A Myanmar CPA
//             $(".director_cpa_initial tbody").empty();
//             var num = 0;
//             if(element.myr_cpa_non_audit_foreign.length != 0){
//               element.myr_cpa_non_audit_foreign.forEach(function(item){
//                 var tr = "<tr>";
//                 num++;
//                 tr += "<td>"+ num +"</td>";
//                 tr += "<td><input type='text' name='mf_name[][]' class='form-control' autocomplete='off' value='"+item.name+"'></td>";
//                 tr += "<td><input type='text' name='mf_position[]' class='form-control' autocomplete='off' value='"+item.position+"'></td>";
//                 tr += "<td><input type='text' name='mf_cpa_passed_reg_no[]' class='form-control' autocomplete='off' value='"+item.cpa_passed_reg_no+"'></td>";
//                 tr += "<td><input type='text' name='mf_cpa_full_reg_no[]' class='form-control' autocomplete='off' value='"+item.cpa_full_reg_no+"'></td>";
//                 tr += "<td><input type='text' name='mf_pub_pra_reg_no[]' class='form-control' autocomplete='off' value='"+item.public_practice_reg_no+"'></td>";
//                 tr += "<td></td>";
//                 tr += "</tr>";
//                 $(".director_cpa_initial").append(tr);
//               });
//             }
//
//           })
//       }
//   })
// }
