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
                    $('.payment-btn').css('display','none');
                }else if(element.approve_reject_status == 1){
                    $('#audit_approve').css('display','block');
                    $('#audit_form_pending').css('display','none');
                    $('.payment-btn').css('display','block');
                    $('.register-btn').css({'display':'none'});
                    $('.register-btn').removeClass('mt-4');

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
                    $("#register_date").val(element.register_date);
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

function dateQuery(){
    var student =JSON.parse(localStorage.getItem("studentinfo"));
    if(student!=null){
      $.ajax({
        type: "GET",
        url: BACKEND_URL+"/getDateRange/"+student.accountancy_firm_info_id,
        success: function (data){
            $("#message").val(data);
        }
    })
    }
}

function verifyStatus()
{
    var student =JSON.parse(localStorage.getItem("studentinfo"));
    if(student!=null){
      $.ajax({
        type: "GET",
        url: BACKEND_URL+"/checkVerify/"+student.accountancy_firm_info_id,
        success: function (data){
            var status = data;
            status.forEach(function(element){
                if(element.verify_status == 1){
                    $('#check_renew').css('display','none');
                }else if(element.verify_status == 2){
                    $('#check_renew').css('display','none');
                }else{
                    $('#check_renew').css('display','block');
                }
            })
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
  send_data.append('township',$("input[name=township]").val());
  send_data.append('post_code',$("input[name=post_code]").val());
  send_data.append('city',$("input[name=city]").val());
  send_data.append('state',$("input[name=state]").val());
  send_data.append('phone_no',$("input[name=phone_no]").val());
  send_data.append('h_email',$("input[name=h_email]").val());
  send_data.append('website',$("input[name=website]").val());
  send_data.append('audit_firm_type_id',$("input[name=audit_firm_type_id]").val());
  // send_data.append('local_foreign_id',$("input[name=local_foreign_id]").val());
  send_data.append('org_stru_id',$('input[name=org_stru_id]:checked').val());
  send_data.append('t_s_p_id',$('input[name=t_s_p_id]:checked').val());
  send_data.append('name_sole_proprietor',$("input[name=name_sole_proprietor]").val());
  send_data.append('declaration',$("input[name=declaration]").val());

  send_data.append('email',$("input[name=email]").val());
  send_data.append('password',$("input[name=password]").val());
  // send_data.append('form_fee',$("input[name=form_fee]").val());
  // send_data.append('nrc_fee',$("input[name=nrc_fee]").val());


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
                  // location.reload();
                  // location.href = "/";
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

function getAuditData(){
  var student =JSON.parse(localStorage.getItem("studentinfo"));
  $.ajax({
      type: "GET",
      url: BACKEND_URL+"/getAuditStatus/"+student.accountancy_firm_info_id,
      success: function (data){
          var audit_data = data;
          audit_data.forEach(function(element){
            $('input[name=email]').val(student.email);

            $("#accountancy_firm_name").val(element.accountancy_firm_name);
            $("#accountancy_firm_reg_no").val(element.accountancy_firm_reg_no);
            $("#register_date").val(element.register_date);
            $('#previewImg').attr("src",BASE_URL+element.image);

            $('input[name=township]').val(element.township);
            $('input[name=post_code]').val(element.postcode);
            $('input[name=city]').val(element.city);
            $('input[name=state]').val(element.state_region);
            $('input[name=phone_no]').val(element.telephones);
            $('input[name=h_email]').val(element.h_email);
            $('input[name=website]').val(element.website);
            $('input[name=name_sole_proprietor]').val(element.name_of_sole_proprietor);
            $('input[name=declaration]').val(element.declaration);

            // Branch office
            var branch=element.branch_offices;
            branch.forEach(function(item){
              var tr = "<tr>";
              tr += "<td><input disabled type='text' name='bo_branch_name[]' class='form-control' autocomplete='off' value="+item.branch_name+"></td>";
              tr += "<td><input disabled type='text' name='bo_township[]' class='form-control' autocomplete='off' value="+item.township+"></td>";
              tr += "<td><input disabled type='text' name='bo_post_code[]' class='form-control' autocomplete='off' value="+item.postcode+"></td>";
              tr += "<td><input disabled type='text' name='bo_city[]' class='form-control' autocomplete='off' value="+item.city+"></td>";
              tr += "<td ><input disabled type='text' name='bo_state_region[]' class='form-control' autocomplete='off' value="+item.state_region+"></td>";
              tr += "<td ><input disabled type='text' name='bo_phone[]' class='form-control' autocomplete='off' value="+item.phones+"></td>";

              tr += "<td ><input disabled type='text' name='bo_email[]' class='form-control' autocomplete='off' value="+item.email+"></td>";
              tr += "<td ><input disabled type='text' name='bo_website[]' class='form-control' autocomplete='off' value="+item.website+"></td>";
              tr += "<td ></td>" ;
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


            // Audit Firm file
            var audit_file=element.audit_firm_file;
            audit_file.forEach(function(item){
              if(item.ppa_certificate!="null"){
                removeBracketed(item.ppa_certificate,"ppa_certis");

              }else $(".ppa_certis").append("<span class='text-primary'>no file</span>");

              if(item.letterhead!="null"){
                removeBracketed(item.letterhead,"letterheads");
              }else $(".letterheads").append("<span class='text-primary'>no file</span>");

              if(item.tax_clearance!="null"){
                removeBracketed(item.tax_clearance,"tax_clearances");
              }else $(".tax_clearances").append("<span class='text-primary'>no file</span>");

              if(item.tax_reg_certificate!="null"){
                removeBracketed(item.tax_reg_certificate,"tax_reg_certificate");
              }else $(".tax_reg_certificate").append("<span class='text-primary'>no file</span>");

              if(item.certi_or_reg!="null"){
                removeBracketed(item.certi_or_reg,"certi_or_regs");
              }else $(".certi_or_regs").append("<span class='text-primary'>no file</span>");

              if(item.deeds_memo!="null"){
                removeBracketed(item.deeds_memo,"deeds_memos");
              }else $(".deeds_memos").append("<span class='text-primary'>no file</span>");

              if(item.certificate_incor!="null"){
                removeBracketed(item.certificate_incor,"certificate_incors");
              }else $(".certificate_incors").append("<span class='text-primary'>no file</span>");

            });


            // Sole Proprietor/Partners/Shareholders
            var firm_owner_audit=element.firm_owner_audits;
            if(firm_owner_audit.length!=0){
              var count = 1;

              firm_owner_audit.forEach(function(item){
                var tr = "<tr>";
                tr += "<td>" + count+ "</td>";
                tr += "<td ><input disabled type='text' value="+ item.name+" name='foa_name[]' class='form-control' autocomplete='off'></td>";
                tr += "<td ><input disabled type='text' value="+ item.public_private_reg_no+" name='foa_pub_pri_reg_no[]' class='form-control' autocomplete='off'></td>";
                if(item.authority_to_sign==1){
                  tr += "<td ><input disabled type='radio' value="+item.authority_to_sign+" name=foa_authority_to_sign"+item.id+" checked id='report_yes'>"+
                        " <label class='form-check-label'>Yes</label></td>";
                  tr += "<td ><input disabled type='radio' value="+item.authority_to_sign+" name=foa_authority_to_sign"+item.id+" id='report_yes'>"+
                        " <label class='form-check-label'>No</label></td>";
                }else{
                  tr += "<td ><input disabled type='radio' value="+item.authority_to_sign+" name=foa_authority_to_sign"+item.id+" id='report_yes'>"+
                        " <label class='form-check-label'>Yes</label></td>";
                  tr += "<td ><input disabled type='radio' value="+item.authority_to_sign+" name=foa_authority_to_sign"+item.id+" checked id='report_yes'>"+
                        " <label class='form-check-label'>No</label></td>";
                }

                tr += "<td ></td>" ;
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
                tr += "<td ><input disabled type='text' value="+item.name+" name='do_name[]' class='form-control' autocomplete='off'></td>";
                tr += "<td ><input disabled type='text' value="+item.position+" name='do_position[]' class='form-control' autocomplete='off'></td>";
                tr += "<td ><input disabled type='text' value="+item.cpa_reg_no+" name='do_cpa_reg_no[]' class='form-control' autocomplete='off'></td>";
                tr += "<td ><input disabled type='text' value="+item.public_private_reg_no+" name='do_pub_pri_reg_no[]' class='form-control' autocomplete='off'></td>";
                tr += "<td ></td>" ;
                tr += "</tr>";
                $("#tbl_director_body").append(tr);
                count++
              });
            }

            // Total Staff
            if(element.audit_total_staffs.length!=0 ){
              var audit_total_staff=element.audit_total_staffs;
              audit_total_staff.forEach(function(item){

                $("input[id=total_staff"+item.audit_total_staff_type_id +"]").val(item.total);
                $("input[id=audit_staff"+item.audit_total_staff_type_id +"]").val(item.audit_staff);
                $("input[id=nonaudit_staff"+item.audit_total_staff_type_id +"]").val(item.non_audit_staff);

                $("input[id=total_staff"+item.audit_total_staff_type_id +"]").prop('disabled',true);
                $("input[id=audit_staff"+item.audit_total_staff_type_id +"]").prop('disabled',true);
                $("input[id=nonaudit_staff"+item.audit_total_staff_type_id +"]").prop('disabled',true);


              });
            }



            // Audit Staff
            if(element.audit_staffs.length!=0){
              var audit_staff=element.audit_staffs;
              audit_staff.forEach(function(item){
                $("input[id=audit_total"+item.audit_staff_type_id+"]").val(item.total);
                $("input[id=full_time"+item.audit_staff_type_id+"]").val(item.full_time);
                $("input[id=part_time"+item.audit_staff_type_id+"]").val(item.part_time);

                $("input[id=audit_total"+item.audit_staff_type_id+"]").prop('disabled',true);
                $("input[id=full_time"+item.audit_staff_type_id+"]").prop('disabled',true);
                $("input[id=part_time"+item.audit_staff_type_id+"]").prop('disabled',true);
              })
            }

            // Types Of Service Provided
            $('#type_service'+element.type_of_service_provided_id).prop("checked", true);
            $('.type_service_provided').find('input[type=checkbox]').prop('disabled',true);

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

function auditRenewSubscribe()
{
  var student =JSON.parse(localStorage.getItem("studentinfo"));
  var send_data = new FormData();

  if($("input[name=profile_photo]")[0].files[0]){
    send_data.append('profile_photo', $("input[name=profile_photo]")[0].files[0]);
  }else{
    send_data.append('profile_photo', $('#hidden_profile').val());
  }

  send_data.append('id',student.accountancy_firm_info_id);
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

              tr += "<td><input type='number' value='0' name='ats_audit_staff[]' class='form-control' id=audit_staff"+element.id+" required onmouseup=getTotal("+element.id+") onkeyup=getTotal("+element.id+")></td>";
              tr += "<td><input type='number' value='0' name='ats_non_audit_staff[]' class='form-control' id=nonaudit_staff"+element.id+" required  onmouseup=getTotal("+element.id+") onkeyup=getTotal("+element.id+")></td>";

              tr += "<td><input type='hidden' value="+element.id+" name='ats_audit_total_staff_type_id[]'>"+
              "<input type='number' value='0' name='ats_total[]' class='form-control' id=total_staff"+element.id+" required onmouseup=getTotal("+element.id+") onkeyup=getTotal("+element.id+")></td>";
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

          tr += "<td><input type='number' value='0' name='as_full_time[]' class='form-control' id=full_time"+element.id+" required onmouseup=getTotalAudit("+element.id+") onkeyup=getTotalAudit("+element.id+")></td>";
          tr += "<td><input type='number' value='0' name='as_part_time[]' class='form-control' id=part_time"+element.id+" required onmouseup=getTotalAudit("+element.id+") onkeyup=getTotalAudit("+element.id+")></td>";
          tr += "<td><input type='hidden' value="+element.id+" name='as_audit_staff_type_id[]'>"+
                      "<input type='number' value='0' name='as_total[]' class='form-control' id=audit_total"+element.id+" required onmouseup=getTotalAudit("+element.id+") onkeyup=getTotalAudit("+element.id+")></td>";
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

function checkPAPPExist(value,id){
  $.ajax({
    type: "get",
    url: BACKEND_URL + '/papp/'+value,
    success: function (data) {
       // var a=localStorage.getItem('isPAPPExist');
        if(data.data.length==0){
          alert("PAPP Registration No. does not exist!");
          document.getElementById('btn_submit_audit_firm').disabled=true;
          document.getElementById(id).style.borderColor="red";
          //localStorage.setItem('isPAPPExist',false);
        }
        else{
          document.getElementById('btn_submit_audit_firm').disabled=false;
          document.getElementById(id).style.borderColor="#ced4da";
        }

    },
    error: function (message) {
        errorMessage(message);
    }
});
}



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
