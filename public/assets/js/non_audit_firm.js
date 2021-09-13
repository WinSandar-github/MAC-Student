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

      $("#label3").css("display","block");
      $("#label2").css("display","none");
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
     $('.organization_data').append("<div class='col-md-2'></div>");
     organization_structure.forEach(function(element){
       if(element.id == 1 || element.id == 2){
        var radio_data="<div class='col-md-2'>"+
        "<input type='radio' name='org_stru_id' autofocus value="+element.id+" id=org"+element.id+" onclick='getOrganization()' >"+
        " <label class='form-check-label'>"+element.name+"</label>";
       }
       else if(element.id == 4){
         var radio_data="<div class='col-md-2'>"+
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
                "<input type='number' value='0' name='nats_total[]' class='form-control' id=non_audit_number"+element.id+" required onmouseup=getNonAuditTotalNum("+element.id+") onkeyup=getNonAuditTotalNum("+element.id+")></td>";
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
          "<input type='checkbox' name='t_s_p_id' value="+element.id+" id=type_service"+element.id+" onclick='validateRequired()'>"+
          " <label class='form-check-label'>"+element.name+"</label>";
          $('.type_service_provided').append(radio_data);
        }else{
          var tr = "<tr>";
          tr += "<td><input type='checkbox' name='t_s_p_id' value="+element.id+" id=type_service"+element.id+" onclick='validateRequired()'>"+
                " <label class='form-check-label'>"+element.name+"</label>";
          tr += "</tr>";
          $('#tbl_type_service_body').append(tr);
        }


      })
    }
  });
}



function validateRequired(){
    var radioValue = $("input[name='t_s_p_id']:checked").val();
    if(radioValue==8){
      $("#tr_other").css('display','block');
    }

    $("#type_service_validate").css('display','none');
    $(".type-service-card").css('border','1px solid rgba(0,0,0,.125)');
}




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
  send_data.append('other',$('input[name=other]').val());
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
            //location.reload();
            location.href = FRONTEND_URL+"/";
        }
      });
}

$( "#submit_btn" ).click(function() {
    if(allFilled('#non-audit-form')){
        $('#nonAuditFirmModal').modal('show');
        send_email();
    }
});

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

                  $('#non_audit_container').css('display','block');
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
  $.ajax({
      type: "GET",
      url: BACKEND_URL+"/getNonAuditStatus/"+student.accountancy_firm_info_id,
      success: function (data){
          var non_audit_data = data;
          non_audit_data.forEach(function(element){

            $('input[name=email]').val(student.email);
            // $('input[name=password]').val(student.password);
            // $('input[name=confirm_password]').val(student.password);
            $("#accountancy_firm_name").val(element.accountancy_firm_name);
            $("#accountancy_firm_reg_no").val(element.accountancy_firm_reg_no);
            $("#register_date").val(element.register_date);
            $('#previewImg').attr("src",BASE_URL+element.image);
            $('#hidden_profile').val(element.image);

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

            // Sole Proprietor/Partners/Shareholders
            var firm_owner_non_audit=element.firm_owner_non_audits;
            if(firm_owner_non_audit.length!=0){
              var count = 1;
              firm_owner_non_audit.forEach(function(item){
                var tr = "<tr>";
                tr += "<td>" +count + "</td>";
                tr += "<td ><input disabled type='text' value="+item.name+" name='fona_name[]' class='form-control' autocomplete='off'></td>";
                tr += "<td ><input disabled type='text' value="+item.pass_csc_inco +" name='fona_pass_csc_inco[]' class='form-control' autocomplete='off'></td>";

                tr += "<td ></td>" ;
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
              tr += "<td ><input disabled type='text' value="+item.name+" name='dona_name[]' class='form-control' autocomplete='off'></td>";
              tr += "<td ><input disabled type='text' value="+item.position+" name='dona_position[]' class='form-control' autocomplete='off'></td>";
              tr += "<td ><input disabled type='text' value="+item.passport+" name='dona_passport[]' class='form-control' autocomplete='off'></td>";
              tr += "<td ></td>" ;
              tr += "</tr>";
              $("#tbl_director_body").append(tr);

              count++;
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

            // Non-Audit Firm file
            var audit_file=element.non_audit_firm_file;
            audit_file.forEach(function(item){
              if(item.letterhead!="null"){
                removeBracketed(item.letterhead,"letterheads");
              }else $(".letterheads").append("<span class='text-primary'>no file</span>");


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

              if(item.passport_photo!="null"){
                removeBracketed(item.passport_photo,"pass_photos");
              }else $(".pass_photos").append("<span class='text-primary'>no file</span>");

              if(item.owner_profile!="null"){
                removeBracketed(item.owner_profile,"owner_profiles");
              }else $(".owner_profiles").append("<span class='text-primary'>no file</span>");

              if(item.education_certificate!="null"){
                removeBracketed(item.education_certificate,"edu_certs");
              }else $(".edu_certs").append("<span class='text-primary'>no file</span>");

              if(item.work_exp!="null"){
                removeBracketed(item.work_exp,"work_exps");
              }else $(".work_exps").append("<span class='text-primary'>no file</span>");

              if(item.nrc_passport_front!="null"){
                removeBracketed(item.nrc_passport_front,"nrc_passports_front");
              }else $(".nrc_passports").append("<span class='text-primary'>no file</span>");

              if(item.nrc_passport_back!="null"){
                removeBracketed(item.nrc_passport_back,"nrc_passports_back");
              }else $(".nrc_passports").append("<span class='text-primary'>no file</span>");

              if(item.tax_clearance!="null"){
                removeBracketed(item.tax_clearance,"tax_clearances");
              }else $(".tax_clearances").append("<span class='text-primary'>no file</span>");

              if(item.permit_foreign!="null"){
                removeBracketed(item.permit_foreign,"permit_foreigns");
              }else $(".permit_foreigns").append("<span class='text-primary'>no file</span>");

              if(item.financial_statement!="null"){
                removeBracketed(item.financial_statement,"financial_statements");
              }else $(".financial_statements").append("<span class='text-primary'>no file</span>");

              // $('#hidden_letterheads').val(item.letterhead);
              // $('#hidden_pass_photos').val(item.passport_photo);
              // $('#hidden_owner_profiles').val(item.owner_profile);
              // $('#hidden_edu_certs').val(item.education_certificate);
              // $('#hidden_work_exps').val(item.work_exp);
              // $('#hidden_nrc_passports_front').val(item.nrc_passport_front);
              // $('#hidden_nrc_passports_back').val(item.nrc_passport_back);
              // $('#hidden_tax_clearances').val(item.tax_clearance);
              // $('#hidden_certi_or_regs').val(item.certi_or_reg);
              // $('#hidden_deeds_memos').val(item.deeds_memo);
              // $('#hidden_certificate_incors').val(item.certificate_incor);
              // $('#hidden_permit_foreigns').val(item.permit_foreign);
              // $('#hidden_financial_statements').val(item.financial_statement);
              // $('#hidden_tax_reg_certificate').val(item.tax_reg_certificate);

            });

            // Total Staff
            var non_audit_total_staff=element.non_audit_total_staffs;
            if(non_audit_total_staff.length!=0){
              non_audit_total_staff.forEach(function(item){
                $('#tbl_non_audit_number_body').find("input[id=non_audit_number"+item.non_audit_total_staff_type_id+"]").val(item.total);
                $('#tbl_non_audit_number_body').find("input[id=non_audit_number"+item.non_audit_total_staff_type_id+"]").prop("disabled", true);

              });
            }

            // Types Of Service Provided
            $('#type_service'+element.type_of_service_provided_id).prop("checked", true);
            $('#tbl_type_service_body').find("input[type=checkbox]").prop('disabled',true);

            // Particulars Of Directors/ Staff Members Who Is A Myanmar CPA
            var cpa_myanmar=element.my_cpa_foreigns;
            if(cpa_myanmar.length!=0){
              $('.cpa_myanmar').css('display','block');
              cpa_myanmar.forEach(function(item){
                var tr = "<tr>";
                tr += "<td>" + + "</td>";
                tr += "<td ><input disabled type='text' value="+item.name+" name='mf_name[]' class='form-control' autocomplete='off'></td>";
                tr += "<td ><input disabled type='text' value="+item.position+" name='mf_position[]' class='form-control' autocomplete='off'></td>";
                tr += "<td ><input disabled type='text' value="+item.cpa_passed_reg_no+" name='mf_cpa_passed_reg_no[]' class='form-control' autocomplete='off'></td>";
                tr += "<td ><input disabled type='text' value="+item.cpa_full_reg_no+" name='mf_cpa_full_reg_no[]' class='form-control' autocomplete='off'></td>";
                tr += "<td ><input disabled type='text' value="+item.public_practice_reg_no+" name='mf_pub_pra_reg_no[]' class='form-control' autocomplete='off'></td>";
                tr += "<td ></td>" ;
                tr += "</tr>";
                $("#tbl_cpa_myanmar_body").append(tr);
              })
           }

          })
      }
  })
}

function removeBracketed(file,divname){
  var new_file=file.replace(/[\'"[\]']+/g, '');
  var split_new_file=new_file.split(',');
  for(var i=0;i<split_new_file.length;i++){
    console.log('BASE_URL',BASE_URL+"/"+split_new_file[i]);
      // var file="<a href='#' onclick=loadFile('"+split_new_file[i]+"') id='img' data-toggle='modal' data-target='#fileModal'>View File</a><br/>";
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
        location.href = FRONTEND_URL+'/non_audit_firm_register';
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
            // console.log(data);
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

$('#btn_cbpay').prop('disabled', true);
$('#btn_mpu').prop('disabled', true);
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
