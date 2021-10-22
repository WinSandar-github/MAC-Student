function audit_reg_feedback(){
    var student =JSON.parse(localStorage.getItem("studentinfo"));
    // console.log(student)
    if(student!=null){
      $.ajax({
        url: BACKEND_URL+"/getAuditFormStatus/"+student.id,
        type: 'GET',
        success: function(data){
          var form_data = data;
          form_data.forEach(function(element){
                if(element.approve_reject_status == 0){
                    $('#audit_form_pending').css('display','block');
                    $('#audit_approve').css('display','none');
                    $('.register-btn').css('display','none');
                    //$('.payment-btn').css('display','none');
                }else if(element.approve_reject_status == 1){
                    $('#audit_approve').css('display','block');
                    $('#audit_form_pending').css('display','none');
                    //$('.payment-btn').css('display','block');
                    $('.register-btn').css({'display':'none'});
                    $('.register-btn').removeClass('mt-4');

                }
                else{
                  //$('.payment-btn').css('display','none');
                  $('.register-btn').css({'display':'none'});
                  $('.status-reject').css({'display':'block'});
                }
          })
        }
    });
    }
}

// function showPending(){
//     $('#audit_form_pending').css('display','block');
//     $('#app_form').css('display','none');
// }

// function showAudit(){
//     $('#app_form').css('display','none');
//     $('#audit_form_pending').css('display','block');
// }

function addInputFileFirm(divname, diventry) {
  var controlForm = $('.' + divname + ':first'),
      currentEntry = $('.btn-add').parents('.' + diventry + ':first'),
      newEntry = $(currentEntry.clone()).appendTo(controlForm);
  newEntry.find('input').val('');
  controlForm.find('.' + diventry + ':not(:last) .btn-add')
      .removeClass('btn-add').addClass('btn-remove')
      .removeClass('btn-primary').addClass('btn-danger')
      .attr("onclick", "delInputFileFirm('" + diventry + "')")
      .html('<li class="fa fa-times"></li>');


}

function delInputFileFirm(diventry){
  $('.btn-remove').parents('.'+diventry+':first').remove();
}

function auditData(){
    var student =JSON.parse(localStorage.getItem("studentinfo"));
    if(student!=null){
      $.ajax({
        type: "GET",
        url: BACKEND_URL+"/getAuditStatus/"+student.accountancy_firm_info_id,
        success: function (data){
            var audit_data = data;
            audit_data.forEach(function(element){
              var resubmit_url = FRONTEND_URL + "/audit_firm_resubmit";
                if(element.status == 0){
                    $('#audit_form_pending').css('display','block');
                    // pendingStatus();
                }else if(element.status ==1){
                    // $('#name_mm').val(mentor_data.name_mm);
                    $("#accountancy_firm_name").val(element.accountancy_firm_name);
                    $("#reg_no").val(element.accountancy_firm_reg_no);
                    // $("#message").val("Approve");
                    // showAuditList();
                    //$('#audit_container').css('display','block');
                    $('#audit_form_pending').css('display','none');
                }else{
                    // showUpdate();
                    $('#app_form').css('display','none');
                    $('#audit_form_pending').css('display','none');
                    $('#audit_reject').css('display','block');
                    // $('.reject').append(`<a href="/audit_firm_edit" class="btn btn-primary btn-sm xl-auto" > Update </a>`)
                    $('.reject').append(`<a href= ${resubmit_url} class="btn btn-primary btn-sm xl-auto" > Go To Form </a>`)
                }
            })
        }
    })
    }
}

// function pendingStatus(){
//     $('#audit_form_pending').css('display','block');
// }

// function showAuditList(){
//     $('#audit_container').css('display','block');
//     $('#audit_form_pending').css('display','none');
// }

// function dateQuery(){
//     var student =JSON.parse(localStorage.getItem("studentinfo"));
//     if(student!=null){
//       $.ajax({
//         type: "GET",
//         url: BACKEND_URL+"/getDateRange/"+student.accountancy_firm_info_id,
//         success: function (data){
//             $("#message").val(data);
//         }
//     })
//     }
// }

function dateQuery(){
    var student =JSON.parse(localStorage.getItem("studentinfo"));
    var student_id = student.id;
    if(student!=null){
      $.ajax({
        type: "GET",
        url: BACKEND_URL+"/getDateRange/"+student_id,
        success: function (data){
          console.log("date_query >>>",data);
          if(data.status == 1){ // verify status will shown if form is approved
            if(data.type == 'renew'){
              $("#message").append("<span class='text-warning'>"+data.message+"</span>");
              // $(".payment-btn").css('display','none');
              // $(".nonaudit-payment-btn").css('display','none');
            }
            else if(data.type == 'next'){
              $("#message").append("<span class='text-success'>"+data.message+"</span>");
              if(data.firm_type == 1){
                // audit firm
                // $(".payment-btn").css('display','block');
                // $(".nonaudit-payment-btn").css('display','none');
                //$('#firm_payment_btn').append(`<a href= ${FRONTEND_URL}/payment_method/${student_id}/'' class="btn btn-info btn-sm xl-auto" > Payment</a><hr>`);

              }
              else{
                // non-audit firm
                // $(".payment-btn").css('display','none');
                // $(".nonaudit-payment-btn").css('display','block');
                //$('#firm_payment_btn').append(`<a href= ${FRONTEND_URL}/payment_method/${student_id}/'' class="btn btn-info btn-sm xl-auto" > Payment</a><hr>`);
              }
            }
            else{
              $("#message").append("<span class='text-success'>"+data.message+"</span>");
              if(data.firm_type == 1){
                // audit firm
                // $(".payment-btn").css('display','block');
                // $(".nonaudit-payment-btn").css('display','none');
                //$('#firm_payment_btn').append(`<a href= ${FRONTEND_URL}/payment_method/${student_id}/'' class="btn btn-info btn-sm xl-auto" > Payment</a><hr>`);
              }
              else{
                // non-audit firm
                // $(".payment-btn").css('display','none');
                // $(".nonaudit-payment-btn").css('display','block');
                //$('#firm_payment_btn').append(`<a href= ${FRONTEND_URL}/payment_method/${student_id}/'' class="btn btn-info btn-sm xl-auto" > Payment</a><hr>`);
              }
            }
          }
        }
      })
    }
}

// function allowToRenew()
// {
//     var student =JSON.parse(localStorage.getItem("studentinfo"));
//     var student_id = student.id;
//     if(student!=null){
//       $.ajax({
//         type: "GET",
//         url: BACKEND_URL+"/checkVerify/"+student_id,
//         success: function (data){
//           console.log("allow to renew",data);
//             if(data.audit_firm_type_id == 1){
//               // audit firm
//               if(data.status == 1 && data.is_renew == 0 && data.offline_user == 1){
//                 // to renew approved offline users
//                 $('#check_renew').css('display','block');
//                 $('#check_renew_nonaudit').css('display','none');
//                 $("#renew_btn").css('display','block'); // renew btn in information page
//                 $(".register-btn").css('display','none'); // register btn in information page
//               }
//               else if(data.status == 1 && data.is_renew == 1 && data.offline_user != 1){
//                 // to renew normal users who are expired
//                 $('#check_renew').css('display','block');
//                 $('#check_renew_nonaudit').css('display','none');
//                 $("#renew_btn").css('display','block'); // renew btn in information page
//                 $(".register-btn").css('display','none'); // register btn in information page
//               }
//             }
//             else{
//               console.log("4");
//               // non-audit firm
//               if(data.status == 1 && data.is_renew == 0 && data.offline_user == 1){
//                 // to renew approved offline users
//                 $('#check_renew').css('display','none');
//                 $('#check_renew_nonaudit').css('display','block');
//                 $("#renew_btn_nonaudit").css('display','block'); // renew btn in information page
//                 $(".register-btn").css('display','none'); // register btn in information page
//               }
//               else if(data.status == 1 && data.is_renew == 1 && data.offline_user != 1){
//                 // to renew normal users who are expired
//                 $('#check_renew').css('display','none');
//                 $('#check_renew_nonaudit').css('display','block');
//                 $("#renew_btn_nonaudit").css('display','block'); // renew btn in information page
//                 $(".register-btn").css('display','none'); // register btn in information page
//               }
//             }
//           }
//         })
//     }
// }

function verifyStatus()
{
    var student =JSON.parse(localStorage.getItem("studentinfo"));
    var student_id = student.id;
    if(student!=null){
      $.ajax({
        type: "GET",
        url: BACKEND_URL+"/checkVerify/"+student_id,
        success: function (data){
          console.log("verify",data);
          if(data.verify_status == 1 && data.status == 1 ){
              console.log("1");
              $('#check_renew').css('display','none');
              $('#check_renew_nonaudit').css('display','none');
              // $('#firm_payment_btn').append(`<a href= ${FRONTEND_URL}/payment_method/${student_id}/'' class="btn btn-info btn-sm xl-auto" > Payment</a><hr>`);
          }
          else if(data.verify_status == 2 && data.status == 1 ){
            console.log("2");
              $('#check_renew').css('display','none');
              $('#check_renew_nonaudit').css('display','none');
              // $('#firm_payment_btn').append(`<a href= ${FRONTEND_URL}/payment_method/${student_id}/'' class="btn btn-info btn-sm xl-auto" > Payment</a><hr>`);
          }
          else{
              console.log("3");
              // if need to renew
              if(data.audit_firm_type_id == 1){
                // audit firm
                if(data.status == 1){
                  $('#check_renew').css('display','block');
                  $('#check_renew_nonaudit').css('display','none');
                  $("#renew_btn").css('display','block');
                  $(".register-btn").css('display','none');
                }
              }
              else{
                // non-audit firm
                if(data.status != 1){
                  $('#check_renew').css('display','none');
                  $('#check_renew_nonaudit').css('display','block');
                  $("#renew_btn_nonaudit").css('display','block');
                  $(".register-btn").css('display','none');
                }
              }
            }
          }
        })
    }
}


function createAuditFirm(){
  if($("input[name=password]").val()!=$("input[name=confirm_password]").val())
  {
      alert("Your password and confirm password do not match!");
      return;
  }
  var send_data=new FormData();
  // send_data.append('accountancy_firm_reg_no',$("input[name=accountancy_firm_reg_no]").val());
  var profile_photo = $("input[name=profile_photo]")[0].files[0];
  send_data.append('profile_photo',profile_photo);
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
  // send_data.append('local_foreign_id',$("input[name=local_foreign_id]").val());
  send_data.append('org_stru_id',$('input[name=org_stru_id]:checked').val());
  //send_data.append('t_s_p_id',$('input[name=t_s_p_id]:checked').val());

  var t_s_p_id_val = new Array();
  $('input[name=t_s_p_id]:checked').each(function(i){
    send_data.append('t_s_p_id[]',this.value);
  });

  send_data.append('name_sole_proprietor',$("input[name=name_sole_proprietor]").val());
  send_data.append('declaration',$("input[name=declaration]").val());

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
          url: BACKEND_URL+"/acc_firm_info",
                type: 'post',
                data:send_data,
                contentType: false,
                processData: false,
                success: function(result){
                  EasyLoading.hide();
                  successMessage("Insert Successfully");
                  location.href = FRONTEND_URL+'/';
              }
            });
}

function createAuditReconnect(){
  if($("input[name=password]").val()!=$("input[name=confirm_password]").val())
  {
      alert("Your password and confirm password do not match!");
      return;
  }
  // var student =JSON.parse(localStorage.getItem("studentinfo"));
  // var student_id = student.id;
  var send_data=new FormData();

  //send_data.append('student_id',student_id);
  // send_data.append('accountancy_firm_reg_no',$("input[name=accountancy_firm_reg_no]").val());
  var profile_photo = $("input[name=profile_photo]")[0].files[0];
  send_data.append('profile_photo',profile_photo);
  send_data.append('accountancy_firm_name',$("input[name=accountancy_firm_name]").val());
  send_data.append('registration_no',$("input[name=registration_no]").val());
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
  //send_data.append('t_s_p_id',$('input[name=t_s_p_id]:checked').val());

  var t_s_p_id_val = new Array();
  $('input[name=t_s_p_id]:checked').each(function(i){
    send_data.append('t_s_p_id[]',this.value);
  });

  send_data.append('name_sole_proprietor',$("input[name=name_sole_proprietor]").val());
  send_data.append('declaration',$("input[name=declaration]").val());
  send_data.append('last_registered_year',$("input[name=last_registered_year]").val());
  send_data.append('suspended_year',$("input[name=suspended_year]").val());
  send_data.append('req_for_stop',$('input[name=req_for_stop]:checked').val());

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
      url: BACKEND_URL+"/audit_reconnect",
            type: 'post',
            data:send_data,
            contentType: false,
            processData: false,
            success: function(result){
              EasyLoading.hide();
              successMessage("Insert Successfully");
              location.href = FRONTEND_URL+'/';
          }
        });
}

// $( "#btn_submit_audit_firm" ).click(function() {
//     //if(allFilled('#audit_firm_form')){
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
//                   $('#auditFirmModal').modal('show');
//                   send_email();
//               }
//           }
//       });
//         // $('#auditFirmModal').modal('show');
//         // send_email();
//     //}
// });

function check_email_audit()
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
        createAuditFirm();
        $('#auditFirmModal').modal('hide');
    }
}

function check_email_audit_renew(){
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
      auditRenewSubscribe();
      $('#auditFirmRenewModal').modal('hide');
  }
}

function check_email_audit_reconnect(){
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
      createAuditReconnect();
      $('#auditReconnectModal').modal('hide');
  }
}

function getAuditData(){
  var student =JSON.parse(localStorage.getItem("studentinfo"));
  var student_id = student.id;
  $.ajax({
      type: "GET",
      url: BACKEND_URL+"/get_audit_data_for_renew/"+student_id,
      success: function (data){
        console.log("get audit >>",data);
          var audit_data = data.data;
          var other_data = data.other_data;
          var student_data = data.student_infos;

          $('input[name=email]').val(student_data[0].email);
          $("input[name=offline_user]").val(audit_data.offline_user);
          $("input[name=req_for_stop]").val(audit_data.req_for_stop);
          $("input[name=last_registered_year]").val(audit_data.last_registered_year);
          $("input[name=suspended_year]").val(audit_data.suspended_year);

          $("#accountancy_firm_name").val(audit_data.accountancy_firm_name);
          $("#accountancy_firm_reg_no").val(audit_data.accountancy_firm_reg_no);
          $("#register_date").val(audit_data.register_date);
          $('#previewImg').attr("src",BASE_URL+audit_data.image);

          $('textarea[name=head_office_address]').val(audit_data.head_office_address);
          $('textarea[name=head_office_address_mm]').val(audit_data.head_office_address_mm);
          //$('input[name=township]').val(audit_data.township);
          $('input[name=post_code]').val(audit_data.postcode);
          //$('input[name=city]').val(audit_data.city);
          //$('input[name=state]').val(audit_data.state_region);
          $('input[name=phone_no]').val(audit_data.telephones);
          $('input[name=h_email]').val(audit_data.h_email);
          $('input[name=website]').val(audit_data.website);
          $('input[name=name_sole_proprietor]').val(audit_data.name_of_sole_proprietor);
          $('input[name=declaration]').val(audit_data.declaration);


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
              tr += '<td class="text-center"><button class="delete btn btn-danger btn-sm" type="button" onclick=delRowBranch("branch")><li class="fa fa-times"></li></button></td>' ;
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
            var firm_owner_audit=element.firm_owner_audits;
            if(firm_owner_audit.length!=0){
              var count = 1;

              firm_owner_audit.forEach(function(item){
                var tr = "<tr>";
                tr += "<td align='center' class='align-middle'>" + count+ "</td>";
                tr += "<td ><input  type='text' value='"+item.public_private_reg_no+"' onchange='checkPAPPExist(this.value,this.id,this)' name='foa_pub_pri_reg_no[]' class='form-control' autocomplete='off'></td>";
                tr += "<td ><input  type='text' value='"+item.name+"' name='foa_name[]' class='form-control' autocomplete='off'></td>";
                if(item.authority_to_sign==1){
                  tr += "<td ><input  type='radio' value='"+item.authority_to_sign+"' name=foa_authority_to_sign"+item.id+" checked class='report_yes' id='report_yes'>"+
                        " <label class='form-check-label'>Yes</label></td>";
                  tr += "<td ><input  type='radio' value='"+item.authority_to_sign+"' name=foa_authority_to_sign"+item.id+" class='report_yes' id='report_yes'>"+
                        " <label class='form-check-label'>No</label></td>";
                }else{
                  tr += "<td ><input  type='radio' value='"+item.authority_to_sign+"' name=foa_authority_to_sign"+item.id+" class='report_yes' id='report_yes'>"+
                        " <label class='form-check-label'>Yes</label></td>";
                  tr += "<td ><input  type='radio' value='"+item.authority_to_sign+"' name=foa_authority_to_sign"+item.id+" class='report_yes' checked id='report_yes'>"+
                        " <label class='form-check-label'>No</label></td>";
                }

                tr += '<td class="text-center"><button class="delete btn btn-danger btn-sm" type="button" onclick=delRowPartner("partner_list")><li class="fa fa-times"></li></button></td>' ;
                tr += "</tr>";
                $("#tbl_partner_body").append(tr);
                count++;
              });
            }

            // Director(s)/Officer(s)
            var director_officer_audit=element.director_officer_audits;
            if(director_officer_audit.length!=0){
              var count = 1;
              director_officer_audit.forEach(function(item){
                var tr = "<tr>";
                tr += "<td>" +count + "</td>";
                tr += "<td ><input  type='text' value='"+item.name+"' name='do_name[]' class='form-control' autocomplete='off'></td>";
                tr += "<td ><input  type='text' value='"+item.position+"' name='do_position[]' class='form-control' autocomplete='off'></td>";
                tr += "<td ><input  type='text' value='"+item.cpa_reg_no+"' name='do_cpa_reg_no[]' class='form-control' autocomplete='off'></td>";
                tr += "<td ><input  type='text' value='"+item.public_private_reg_no+"' name='do_pub_pri_reg_no[]' class='form-control' autocomplete='off'></td>";
                tr += '<td class="text-center"><button class="delete btn btn-danger btn-sm" type="button" onclick=addRowDirector("director")><li class="fa fa-times"></li></button></td>' ;
                tr += "</tr>";
                $("#tbl_director_body").append(tr);
                count++
              });
            }

            // Total Staff
            if(element.audit_total_staffs.length!=0 ){
              var audit_total_staff=element.audit_total_staffs;
              var total = 0;
              var audit_staff = 0;
              var non_audit_staff = 0;
              audit_total_staff.forEach(function(item){
                total += parseInt(item.total);
                audit_staff += parseInt(item.audit_staff);
                non_audit_staff += parseInt(item.non_audit_staff);
                $("input[id=total_staff"+item.audit_total_staff_type_id +"]").val(item.total);
                $("input[id=audit_staff"+item.audit_total_staff_type_id +"]").val(item.audit_staff);
                $("input[id=nonaudit_staff"+item.audit_total_staff_type_id +"]").val(item.non_audit_staff);

                $("#total_audit").val(audit_staff);
                $("#total_non_audit").val(non_audit_staff);
                $("#total_staff").val(total);
              });
            }

            // Audit Staff
            if(element.audit_staffs.length!=0){
              var audit_staff=element.audit_staffs;
              var total = 0;
              var full_time = 0;
              var part_time = 0;
              audit_staff.forEach(function(item){
                total += parseInt(item.total);
                full_time += parseInt(item.full_time);
                part_time += parseInt(item.part_time);
                $("input[id=audit_total"+item.audit_staff_type_id+"]").val(item.total);
                $("input[id=full_time"+item.audit_staff_type_id+"]").val(item.full_time);
                $("input[id=part_time"+item.audit_staff_type_id+"]").val(item.part_time);

                $("#total_full_time").val(full_time);
                $("#total_part_time").val(part_time);
                $("#total_time").val(total);

              })
            }

            // Types Of Service Provided
            var t_s_p_arr = JSON.parse(element.type_of_service_provided_id);
            t_s_p_arr.forEach(function(item){
              $('input[name=t_s_p_id][value='+item+']').attr("checked", true);
            });
          });

      }
  })
}

// reject_update
function getAuditDataForRejectUpdate(){
  var student =JSON.parse(localStorage.getItem("studentinfo"));
  var student_id = student.id;
  $.ajax({
      type: "GET",
      url: BACKEND_URL+"/get_audit_data_for_renew/"+student_id,
      success: function (data){
        console.log("get audit >>",data);
          var audit_data = data.data;
          var other_data = data.other_data;
          var student_data = data.student_infos;

          $('input[name=email]').val(student_data[0].email);

          $("#accountancy_firm_name").val(audit_data.accountancy_firm_name);
          $("#accountancy_firm_reg_no").val(audit_data.accountancy_firm_reg_no);
          $("#register_date").val(audit_data.register_date);
          $('#previewImg').attr("src",BASE_URL+audit_data.image);

          $('textarea[name=head_office_address]').val(audit_data.head_office_address);
          $('textarea[name=head_office_address_mm]').val(audit_data.head_office_address_mm);
          //$('input[name=township]').val(audit_data.township);
          $('input[name=post_code]').val(audit_data.postcode);
          //$('input[name=city]').val(audit_data.city);
          //$('input[name=state]').val(audit_data.state_region);
          $('input[name=phone_no]').val(audit_data.telephones);
          $('input[name=h_email]').val(audit_data.h_email);
          $('input[name=website]').val(audit_data.website);
          $('input[name=name_sole_proprietor]').val(audit_data.name_of_sole_proprietor);
          $('input[name=declaration]').val(audit_data.declaration);

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
              tr += '<td class="text-center"><button class="delete btn btn-danger btn-sm" type="button" onclick=delRowBranch("branch")><li class="fa fa-times"></li></button></td>' ;
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
            var firm_owner_audit=element.firm_owner_audits;
            if(firm_owner_audit.length!=0){
              var count = 1;

              firm_owner_audit.forEach(function(item){
                var tr = "<tr>";
                tr += "<td align='center' class='align-middle'>" + count+ "</td>";
                tr += "<td ><input  type='text' value='"+item.public_private_reg_no+"' onchange='checkPAPPExist(this.value,this.id,this)' name='foa_pub_pri_reg_no[]' class='form-control' autocomplete='off'></td>";
                tr += "<td ><input  type='text' value='"+item.name+"' name='foa_name[]' class='form-control' autocomplete='off'></td>";
                if(item.authority_to_sign==1){
                  tr += "<td ><input  type='radio' value='"+item.authority_to_sign+"' name=foa_authority_to_sign"+item.id+" checked class='report_yes' id='report_yes'>"+
                        " <label class='form-check-label'>Yes</label></td>";
                  tr += "<td ><input  type='radio' value='"+item.authority_to_sign+"' name=foa_authority_to_sign"+item.id+" class='report_yes' id='report_yes'>"+
                        " <label class='form-check-label'>No</label></td>";
                }else{
                  tr += "<td ><input  type='radio' value='"+item.authority_to_sign+"' name=foa_authority_to_sign"+item.id+" class='report_yes' id='report_yes'>"+
                        " <label class='form-check-label'>Yes</label></td>";
                  tr += "<td ><input  type='radio' value='"+item.authority_to_sign+"' name=foa_authority_to_sign"+item.id+" class='report_yes' checked id='report_yes'>"+
                        " <label class='form-check-label'>No</label></td>";
                }

                tr += '<td class="text-center"><button class="delete btn btn-danger btn-sm" type="button" onclick=delRowPartner("partner_list")><li class="fa fa-times"></li></button></td>' ;
                tr += "</tr>";
                $("#tbl_partner_body").append(tr);
                count++;
              });
            }

            // Director(s)/Officer(s)
            var director_officer_audit=element.director_officer_audits;
            if(director_officer_audit.length!=0){
              var count = 1;
              director_officer_audit.forEach(function(item){
                var tr = "<tr>";
                tr += "<td>" +count + "</td>";
                tr += "<td ><input  type='text' value='"+item.name+"' name='do_name[]' class='form-control' autocomplete='off'></td>";
                tr += "<td ><input  type='text' value='"+item.position+"' name='do_position[]' class='form-control' autocomplete='off'></td>";
                tr += "<td ><input  type='text' value='"+item.cpa_reg_no+"' name='do_cpa_reg_no[]' class='form-control' autocomplete='off'></td>";
                tr += "<td ><input  type='text' value='"+item.public_private_reg_no+"' name='do_pub_pri_reg_no[]' class='form-control' autocomplete='off'></td>";
                tr += '<td class="text-center"><button class="delete btn btn-danger btn-sm" type="button" onclick=addRowDirector("director")><li class="fa fa-times"></li></button></td>' ;
                tr += "</tr>";
                $("#tbl_director_body").append(tr);
                count++
              });
            }

            // Total Staff
            if(element.audit_total_staffs.length!=0 ){
              var audit_total_staff=element.audit_total_staffs;
              var total = 0;
              var audit_staff = 0;
              var non_audit_staff = 0;
              audit_total_staff.forEach(function(item){
                total += parseInt(item.total);
                audit_staff += parseInt(item.audit_staff);
                non_audit_staff += parseInt(item.non_audit_staff);
                $("input[id=total_staff"+item.audit_total_staff_type_id +"]").val(item.total);
                $("input[id=audit_staff"+item.audit_total_staff_type_id +"]").val(item.audit_staff);
                $("input[id=nonaudit_staff"+item.audit_total_staff_type_id +"]").val(item.non_audit_staff);

                $("#total_audit").val(audit_staff);
                $("#total_non_audit").val(non_audit_staff);
                $("#total_staff").val(total);
              });
            }

            // Audit Staff
            if(element.audit_staffs.length!=0){
              var audit_staff=element.audit_staffs;
              var total = 0;
              var full_time = 0;
              var part_time = 0;
              audit_staff.forEach(function(item){
                total += parseInt(item.total);
                full_time += parseInt(item.full_time);
                part_time += parseInt(item.part_time);
                $("input[id=audit_total"+item.audit_staff_type_id+"]").val(item.total);
                $("input[id=full_time"+item.audit_staff_type_id+"]").val(item.full_time);
                $("input[id=part_time"+item.audit_staff_type_id+"]").val(item.part_time);

                $("#total_full_time").val(full_time);
                $("#total_part_time").val(part_time);
                $("#total_time").val(total);

              })
            }

            // Types Of Service Provided
            var t_s_p_arr = JSON.parse(element.type_of_service_provided_id);
            t_s_p_arr.forEach(function(item){
              $('input[name=t_s_p_id][value='+item+']').attr("checked", true);
            });

            var audit_firm_file = element.audit_firm_file;

            // audit_firm_file.forEach(function(item){
            //   if(element.organization_structure_id == 1){
            //     if(item.ppa_certificate!="null"){
            //       removeBracketedAudit(item.ppa_certificate,"public_practice_acc_certi");
            //
            //     }else $(".public_practice_acc_certi").append("<span class='text-primary'>no file</span>");
            //
            //     if(item.letterhead!="null"){
            //       removeBracketedAudit(item.letterhead,"stationery_letterhead");
            //
            //     }else $(".stationery_letterhead").append("<span class='text-primary'>no file</span>");
            //
            //
            //     if(item.tax_clearance!="null"){
            //       console.log("tax");
            //       removeBracketedAudit(item.tax_clearance,"tax_clearances");
            //
            //     }else $(".tax_clearances").append("<span class='text-primary'>no file</span>");
            //
            //     if(item.certificate_incor!="null"){
            //       removeBracketedAudit(item.certificate_incor,"representatives");
            //
            //     }else $(".representatives").append("<span class='text-primary'>no file</span>");
            //   }
            //   if(element.organization_structure_id == 2){
            //     if(item.ppa_certificate!="null"){
            //       removeBracketedAudit(item.ppa_certificate,"ppa_certis_partnership");
            //
            //     }else $(".ppa_certis_partnership").append("<span class='text-primary'>no file</span>");
            //
            //     if(item.certi_or_reg!="null"){
            //       removeBracketedAudit(item.certi_or_reg,"certi_or_regs_partnership");
            //
            //     }else $(".certi_or_regs_partnership").append("<span class='text-primary'>no file</span>");
            //
            //     if(item.deeds_memo!="null"){
            //       removeBracketedAudit(item.deeds_memo,"deeds_memos_partnership");
            //
            //     }else $(".deeds_memos_partnership").append("<span class='text-primary'>no file</span>");
            //
            //     if(item.letterhead!="null"){
            //       removeBracketedAudit(item.letterhead,"letterheads_partnership");
            //
            //     }else $(".letterheads_partnership").append("<span class='text-primary'>no file</span>");
            //
            //     if(item.tax_clearance!="null"){
            //       removeBracketedAudit(item.tax_clearance,"tax_clearances_partnership");
            //
            //     }else $(".tax_clearances_partnership").append("<span class='text-primary'>no file</span>");
            //
            //     if(item.certificate_incor!="null"){
            //       removeBracketedAudit(item.certificate_incor,"representatives_partnership");
            //
            //     }else $(".representatives_partnership").append("<span class='text-primary'>no file</span>");
            //   }
            //   if(element.organization_structure_id == 3){
            //     if(item.ppa_certificate!="null"){
            //       removeBracketedAudit(item.ppa_certificate,"ppa_certis_company");
            //
            //     }else $(".ppa_certis_company").append("<span class='text-primary'>no file</span>");
            //
            //     if(item.certificate_incor!="null"){
            //       removeBracketedAudit(item.certificate_incor,"certificate_incors_company");
            //
            //     }else $(".certificate_incors_company").append("<span class='text-primary'>no file</span>");
            //
            //     if(item.deeds_memo!="null"){
            //       removeBracketedAudit(item.deeds_memo,"memorandums_company");
            //
            //     }else $(".memorandums_company").append("<span class='text-primary'>no file</span>");
            //
            //
            //     if(item.tax_reg_certificate!="null"){
            //       removeBracketedAudit(item.tax_reg_certificate,"comercial_tax_reg");
            //
            //     }else $(".comercial_tax_reg").append("<span class='text-primary'>no file</span>");
            //
            //     if(item.letterhead!="null"){
            //       removeBracketedAudit(item.letterhead,"stationery_letterhead_company");
            //
            //     }else $(".stationery_letterhead_company").append("<span class='text-primary'>no file</span>");
            //
            //
            //     if(item.tax_clearance!="null"){
            //       removeBracketedAudit(item.tax_clearance,"tax_clearance_company");
            //
            //     }else $(".tax_clearance_company").append("<span class='text-primary'>no file</span>");
            //   }
            // });
          });


      }
  })
}

function auditRejectUpdate(){
  var student =JSON.parse(localStorage.getItem("studentinfo"));
  var firm_id = student.accountancy_firm_info_id;

  var send_data=new FormData();
  // send_data.append('accountancy_firm_reg_no',$("input[name=accountancy_firm_reg_no]").val());
  var profile_photo = $("input[name=profile_photo]")[0].files[0];
  send_data.append('profile_photo',profile_photo);
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
  // send_data.append('local_foreign_id',$("input[name=local_foreign_id]").val());
  send_data.append('org_stru_id',$('input[name=org_stru_id]:checked').val());
  //send_data.append('t_s_p_id',$('input[name=t_s_p_id]:checked').val());

  var t_s_p_id_val = new Array();
  $('input[name=t_s_p_id]:checked').each(function(i){
    send_data.append('t_s_p_id[]',this.value);
  });

  send_data.append('name_sole_proprietor',$("input[name=name_sole_proprietor]").val());
  send_data.append('declaration',$("input[name=declaration]").val());

  // send_data.append('email',$("input[name=email]").val());
  // send_data.append('password',$("input[name=password]").val());

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

function removeBracketedAudit(file,divname){
  var new_file=file.replace(/[\'"[\]']+/g, '');
  var split_new_file=new_file.split(',');
  for(var i=0;i<split_new_file.length;i++){
    var file="<a href='"+BASE_URL+"/"+split_new_file[i]+"'  target='_blank'>View File</a><br/>";
      $("."+divname).append(file);
    }

  //return split_new_file;
}

// function removeBracketedAudit(file,divname){
//   if(file){
//     var new_file=file.replace(/\["/g,"");
//     var new_file_1 = new_file.replace(/\\/g,"");
//     var new_file_2 = new_file_1.replace(/\"]/g,"");
//     var split_new_file=new_file_2.split(',');
//     console.log("split >>>",split_new_file);
//     return split_new_file;
//     // for(var i=0;i<split_new_file.length;i++){
//     //     var file="<a href='#' onclick=loadFile('"+split_new_file[i]+"') id='img' data-toggle='modal' data-target='#fileModal'>View File</a><br/>";
//     //     $("."+divname).append(file);
//     //   }
//   }
// }

// function loadFile(file) {
//   var myImageId = "storage/acc_firm/" + file;
//   $(".modal-body #file").attr("src", BASE_URL+myImageId);
// }

function auditRenewSubscribe()
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

  send_data.append('last_registered_year',$("input[name=last_registered_year]").val());
  send_data.append('offline_user',$("input[name=offline_user]").val());
  send_data.append('req_for_stop',$("input[name=req_for_stop]").val());
  send_data.append('suspended_year',$("input[name=suspended_year]").val());

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
  send_data.append('org_stru_id',$('input[name=org_stru_id]:checked').val());

  var t_s_p_id_val = new Array();
  $('input[name=t_s_p_id]:checked').each(function(i){
    send_data.append('t_s_p_id[]',this.value);
  });

  send_data.append('name_sole_proprietor',$("input[name=name_sole_proprietor]").val());
  send_data.append('declaration',$("input[name=declaration]").val());
  //send_data.append('email',$("input[name=email]").val());
  //send_data.append('password',$("input[name=password]").val());

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

function loadOrganization(){
  $.ajax({
    url: BACKEND_URL+"/organization_structure",
    type: 'get',
    data:"",
    success: function(result){
     var organization_structure=result.data;
     $('.organization_data').append("<div class='col-md-2'></div>");
     organization_structure.forEach(function(element){
       if(element.id!=3){
        var radio_data="<div class='col-md-2'>"+
        "<input disabled type='radio' name='org_stru_id' autofocus value="+element.id+" id=org"+element.id+" onclick='getOrganization()'>"+
        " <label class='form-check-label'>"+element.name+"</label>";
       }else{
        var radio_data="<div class='col-md-2'>"+
        "<input disabled type='radio' name='org_stru_id' autofocus value="+element.id+" id=org"+element.id+" onclick='getOrganization()'>"+
        " <label class='form-check-label'>"+element.name+"</label>";
       }

       $('.organization_data').append(radio_data);
     })
  }
});
}

function loadAuditOrganization(){
  $.ajax({
    url: BACKEND_URL+"/organization_structure",
    type: 'get',
    data:"",
    success: function(result){
         var organization_structure=result.data;
         $('.organization_data').append("<div class='col-md-2'></div>");
         organization_structure.forEach(function(element){

           if(element.id == 3 || element.id == 1){
             var radio_data="<div class='col-md-3'>"+
             "<input type='radio' name='org_stru_id' autofocus value="+element.id+" id=org"+element.id+" onclick='getOrganization()'>"+
             " <label class='form-check-label'>"+element.name+"</label>";
           }
           else{
             var radio_data="<div class='col-md-2'>"+
             "<input type='radio' name='org_stru_id' autofocus value="+element.id+" id=org"+element.id+" onclick='getOrganization()'>"+
             " <label class='form-check-label'>"+element.name+"</label>";
           }

           $('.organization_data').append(radio_data);
         })
  }
});
}

function loadTypeOfService(){
  destroyDatatable("#tbl_type_service", "#tbl_type_service_body");
    $.ajax({
      url: BACKEND_URL+"/type_service_provided",
      type: 'get',
      data:"",
      success: function(result){
      var type_service_provided=result.data;
      $('.type_service_provided').append("<div class='col-md-1'></div>");
      type_service_provided.forEach(function(element){
        if(element.audit_firm_type_id==1){
          var radio_data="<div class='col-md-4'>"+
          "<input disabled type='checkbox' name='t_s_p_id' value="+element.id+" id=type_service"+element.id+">"+
          " <label class='form-check-label'>"+element.name+"</label>";
          $('.type_service_provided').append(radio_data);
        }else{
          var tr = "<tr>";
          tr += "<td><input disabled type='checkbox' name='t_s_p_id' value="+element.id+" id=type_service"+element.id+">"+
                " <label class='form-check-label'>"+element.name+"</label>";
          tr += "</tr>";
          $('#tbl_type_service_body').append(tr);
        }
      })
    }
  });
}

function loadAuditTypeOfService(){
  destroyDatatable("#tbl_type_service", "#tbl_type_service_body");
    $.ajax({
      url: BACKEND_URL+"/type_service_provided",
      type: 'get',
      data:"",
      success: function(result){
      var type_service_provided=result.data;
      $('.type_service_provided').append("<div class='col-md-1'></div>");
      type_service_provided.forEach(function(element){
        if(element.audit_firm_type_id==1){
          var radio_data="<div class='col-md-5'>"+
          "<input type='checkbox' name='t_s_p_id' value="+element.id+" id=type_service"+element.id+" onclick='checkTypeofServiceProvided()'>"+
          " <label class='form-check-label'>"+element.name+"</label>";
          $('.type_service_provided').append(radio_data);
        }else{
          var tr = "<tr>";
          tr += "<td><input type='checkbox' name='t_s_p_id' value="+element.id+" id=type_service"+element.id+" onclick='checkTypeofServiceProvided()'>"+
                " <label class='form-check-label'>"+element.name+"</label>";
          tr += "</tr>";
          $('#tbl_type_service_body').append(tr);
        }


      })
    }
  });
}

function checkTypeofServiceProvided(){
    var radioValue = $("input[name='t_s_p_id']:checked").val();
    $("#t_s_p_id_validate").css('display','none');
    //$(".type-service-card").css('border','1px solid rgba(0,0,0,.125)');
}

function loadAuditTotalStaffReg(){
    destroyDatatable("#tbl_audit_total_staff", "#tbl_audit_total_staff_body");
    $.ajax({
      url: BACKEND_URL+"/audit_total_staff_type",
      type: 'get',
      data:"",
      success: function(result){
        var audit_total_staff=result.data;
        audit_total_staff.forEach(function(element){
              var tr = "<tr>";
              tr += "<td class='font-weight-bold'>" + element.name + "</td>";

              tr += "<td><input type='number' min='0' value='0' name='ats_audit_staff[]' class='form-control' id=audit_staff"+element.id+" required onmouseup=getTotal("+element.id+") onkeyup=getTotal("+element.id+")></td>";
              tr += "<td><input type='number' min='0' value='0' name='ats_non_audit_staff[]' class='form-control' id=nonaudit_staff"+element.id+" required  onmouseup=getTotal("+element.id+") onkeyup=getTotal("+element.id+")></td>";

              tr += "<td><input type='hidden' value="+element.id+" name='ats_audit_total_staff_type_id[]'>"+
              "<input type='number' value='0' name='ats_total[]' readonly class='form-control' id=total_staff"+element.id+" required onmouseup=getTotal("+element.id+") onkeyup=getTotal("+element.id+")></td>";
              tr += "</tr>";


              $("#tbl_audit_total_staff_body").append(tr);
        });

      }
  });
}

var total =[];
function getTotal(id){

  $("#total_staff"+id).val(parseInt($("#audit_staff"+id).val())+parseInt($("#nonaudit_staff"+id).val()));
  getAuditTotal();
  getNonAuditTotal();
  getTotalStaff();

}

function getAuditTotal() {
  var total = 0;
  $('#tbl_audit_total_staff tbody tr').each(function () {
      var value = parseInt($(this).find('td:eq(1) input').val());
      total += value;

  });

  $("#total_audit").val(total);

}

function getNonAuditTotal() {
  var total = 0;
  $('#tbl_audit_total_staff tbody tr').each(function () {
      var value = parseInt($(this).find('td:eq(2) input').val());
      total += value;

  });

  $("#total_non_audit").val(total);

}

function getTotalStaff() {
  $("#total_staff").val(parseInt($("#total_audit").val())+parseInt($("#total_non_audit").val()));

}


function loadAuditTotalStaff(){
    destroyDatatable("#tbl_audit_total_staff", "#tbl_audit_total_staff_body");
    $.ajax({
      url: BACKEND_URL+"/audit_total_staff_type",
      type: 'get',
      data:"",
      success: function(result){
      var audit_total_staff=result.data;
      audit_total_staff.forEach(function(element){
            var tr = "<tr>";
            tr += "<td class='font-weight-bold'>" + element.name + "</td>";
            tr += "<td><input type='hidden' value="+element.id+" name='ats_audit_total_staff_type_id[]'><input disabled type='number' value='0' name='ats_total[]' class='form-control' id=total_staff"+element.id+"></td>";
            tr += "<td><input disabled type='number' value='0' name='ats_audit_staff[]' class='form-control' id=audit_staff"+element.id+"></td>";
            tr += "<td><input disabled type='number' value='0' name='ats_non_audit_staff[]' class='form-control' id=nonaudit_staff"+element.id+"></td>";
            tr += "</tr>";
            $("#tbl_audit_total_staff_body").append(tr);

      })


    }
  });
}

function loadAuditStaffReg(){
  destroyDatatable("#tbl_audit_staff", "#tbl_audit_staff_body");
  $.ajax({
    url: BACKEND_URL+"/audit_staff_type",
    type: 'get',
    data:"",
    success: function(result){
    var audit_staff=result.data;
    audit_staff.forEach(function(element){
          var tr = "<tr>";
          tr += "<td class='font-weight-bold'>" + element.name + "</td>";

          tr += "<td><input type='number' min='0' value='0' name='as_full_time[]' class='form-control' id=full_time"+element.id+" required onmouseup=getTotalAudit("+element.id+") onkeyup=getTotalAudit("+element.id+")></td>";
          tr += "<td><input type='number' min='0' value='0' name='as_part_time[]' class='form-control' id=part_time"+element.id+" required onmouseup=getTotalAudit("+element.id+") onkeyup=getTotalAudit("+element.id+")></td>";
          tr += "<td><input type='hidden' value="+element.id+" name='as_audit_staff_type_id[]'>"+
                      "<input type='number' readonly value='0' name='as_total[]' class='form-control' id=audit_total"+element.id+" required onmouseup=getTotalAudit("+element.id+") onkeyup=getTotalAudit("+element.id+")></td>";
          tr += "</tr>";
          $("#tbl_audit_staff_body").append(tr);

    })

  }
});
}

var total_staff =[];
function getTotalAudit(id){

  $("#audit_total"+id).val(parseInt($("#full_time"+id).val())+parseInt($("#part_time"+id).val()));
  getFullAuditTotal();
  getPartAuditTotal();
  getAuditTime();

}

function getFullAuditTotal() {
  var total_staff = 0;
  $('#tbl_audit_staff tbody tr').each(function () {
      var value = parseInt($(this).find('td:eq(1) input').val());
      total_staff += value;

  });

  $("#total_full_time").val(total_staff);

}

function getPartAuditTotal() {
  var total_staff = 0;
  $('#tbl_audit_staff tbody tr').each(function () {
      var value = parseInt($(this).find('td:eq(2) input').val());
      total_staff += value;

  });

  $("#total_part_time").val(total_staff);

}

function getAuditTime() {
  $("#total_time").val(parseInt($("#total_full_time").val())+parseInt($("#total_part_time").val()));

}

function loadAuditStaff(){
  destroyDatatable("#tbl_audit_staff", "#tbl_audit_staff_body");
  $.ajax({
    url: BACKEND_URL+"/audit_staff_type",
    type: 'get',
    data:"",
    success: function(result){
    var audit_staff=result.data;
    audit_staff.forEach(function(element){
          var tr = "<tr>";
          tr += "<td class='font-weight-bold'>" + element.name + "</td>";
          tr += "<td><input type='hidden' value="+element.id+" name='as_audit_staff_type_id[]'><input disabled type='number' value='0' name='as_total[]' class='form-control' id=audit_total"+element.id+"></td>";
          tr += "<td><input disabled type='number' value='0' name='as_full_time[]' class='form-control' id=full_time"+element.id+"></td>";
          tr += "<td><input disabled type='number' value='0' name='as_part_time[]' class='form-control' id=part_time"+element.id+"></td>";
          tr += "</tr>";
          $("#tbl_audit_staff_body").append(tr);

    })

  }
});
}

function loadNonAuditStaff(){
  destroyDatatable("#tbl_non_audit_number", "#tbl_non_audit_number_body");
  $.ajax({
    url: BACKEND_URL + "/non_audit_total_staff",
    type: 'get',
    data:"",
    success: function(result){
    var non_audit_total_staff=result.data;
    non_audit_total_staff.forEach(function(element){
          var tr = "<tr>";
          tr += "<td>" + element.name + "</td>";
          tr += "<td><input type='hidden' value="+element.id+" name='nats_type_id[]'><input type='number' name='nats_total[]' class='form-control' id=non_audit_number"+element.id+" required></td>";
          tr += "</tr>";
          $("#tbl_non_audit_number_body").append(tr);

    })

  }
});
}
function deleteAuditInfo(accName,accId){
  var result = confirm("WARNING: This will delete Accountancy Firm Name " + decodeURIComponent(accName) + " and all related data! Press OK to proceed.");
    if (result) {
        $.ajax({
            type: "DELETE",
            url: BACKEND_URL + '/acc_firm_info/'+accId,
            success: function (data) {
                successMessage(data);
                getAudit();
            },
            error: function (message) {
                errorMessage(message);
            }
        });
    }
}

function checkPAPPExist(value,id,element){
   if($(element).val() != ''){
       $(element).parent().siblings().find("input[name='foa_name[]']").val('');
       $.ajax({
         type: "get",
         url: BACKEND_URL + '/papp/'+value,
         success: function (data) {
            // var a=localStorage.getItem('isPAPPExist');
             if(data.data.length==0){
               alert("PAPP Registration No. does not exist!");
               document.getElementById('btn_submit_audit_firm').disabled=true;
               //document.getElementById(id).style.borderColor="red";
               $(element).parent().siblings().find("input[name='foa_name[]']").val('');
               $(element).css("border","1px solid red");
               //localStorage.setItem('isPAPPExist',false);
             }
             else{
                 document.getElementById('btn_submit_audit_firm').disabled=false;
                 //document.getElementById(id).style.borderColor="#ced4da";
                 $(element).css("border","1px solid #ced4da");
                 // set name who is exist PAPP
                 data.data.forEach(function(item){
                   var student_info = item.student_info;
                   $(element).parent().siblings().find("input[name='foa_name[]']").val(student_info.name_eng);
                 });

             }

         },
         error: function (message) {
             errorMessage(message);
         }
     });
   }
   else {
     document.getElementById('btn_submit_audit_firm').disabled=true;
     document.getElementById(id).style.borderColor="2px solid red";
     $(element).parent().siblings().find("input[name='foa_name[]']").val('');
   }
}

// $("input[name='foa_pub_pri_reg_no[]']").change(function(){
//   alert("keyup");
// });


function checkPaymentAudit(){
    var student =JSON.parse(localStorage.getItem("studentinfo"));
    // console.log(student)
    if(student!=null){
      $.ajax({
        url: BACKEND_URL+"/check_payment_audit/"+student.id,
        type: 'GET',
        success: function(data){
          var form_data = data;
          form_data.forEach(function(element){
                if(element.payment_method != null){
                    $('#audit_payment_btn').prop('disabled', true);
                    loadAuditRenew();
                }else{
                    $('#audit_payment_btn').prop('disabled', false);
                }
          })
        }
    });
    }
}

// click Go To Payment Button
$("#audit_payment_btn").click(function() {
    $('#auditpaymentModal').modal('show');
});

// click cash image
$('#cash_img').click(function() {
    $('#audit_pay_now_btn').prop('disabled', false);
});

$('#cb_img').click(function() {
    $('#audit_pay_now_btn').prop('disabled', true);
});

$('#mpu_img').click(function() {
    $('#audit_pay_now_btn').prop('disabled', true);
});
$('#audit_pay_now_btn').prop('disabled', true);

function auditPaymentSubmit(){
    var student = JSON.parse(localStorage.getItem('studentinfo'));
    $.ajax({
    url: BACKEND_URL + "/approve_audit_payment/" + student.id,
    type: 'patch',
    success: function (data) {
            successMessage("Your payment is successfully");
            location.href = FRONTEND_URL + "/";
        },
        error:function (message){
        }
    })
}
function loadAuditRenew(){
  $('#audit_approve').css('display','none');
  $('#audit_form_pending').css('display','none');
  $('#audit_initial').css('display','none');
  $('#audit_container').css('display','block');
}
