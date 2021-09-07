var counter = 0;

// function addRowEducation(tbody){
//     var newRow = $("<tr>");
//     var cols = "";
//     cols += '<td><input type="text" class="form-control" value="" /></td>';
//     cols += '<td><input type="text" name="degrees[]" class="form-control" placeholder="ပညာအရည်အချင်း" required/></td>';
//     cols += '<td class="text-center"><button type="button" class="delete btn btn-sm btn-danger m-2" onclick=delRow("'+tbody+'")><li class="fa fa-times"></li></button></td>';
//     newRow.append(cols);
//     $("table."+tbody).append(newRow);
//     // order numer to be serial
//     $("."+tbody+" tbody tr").each(function(index,row){
//       $(row).find("td:first-child input").val(index + 1);
//         $(row).find("td:first-child input").css('text-align','center');
//         $(row).find("td:first-child input").css('border','none');
//     });
//     counter++;
// }

// function delRow(tbody){
//   $("table."+tbody).on("click", ".delete", function (event) {
//       var deleted_row = $(this).closest("tr");
//       var siblings = $(deleted_row).siblings();
//       $(deleted_row).remove();
//       counter -= 1
//       // order numer to be serial
//       $(siblings).each(function(index,row){
//         $(row).find("td:first-child input").val(index + 1);
//       });
//   });
// }

function ConfirmSubmit(){
    var radio = document.getElementById("submit_confirm");
    if (radio.checked == true){
        document.getElementById("submit_btn").disabled= false;
    }
    else{
    document.getElementById("submit_btn").disabled = true;
    }
}

function createMentorRegister(){
  var send_data=new FormData();
  //$('#image')[0].files[0];
  var profile_photo = $("input[name=profile_photo]")[0].files[0];
  var nrc_front = $("input[name=nrc_front]")[0].files[0];
  var nrc_back = $("input[name=nrc_back]")[0].files[0];

  send_data.append('profile_photo',profile_photo);
  send_data.append('nrc_front', nrc_front);
  send_data.append('nrc_back', nrc_back);

  send_data.append('name_mm', $("input[name=name_mm]").val());
  send_data.append('name_eng', $("input[name=name_eng]").val());
  send_data.append('nrc_state_region', $("#nrc_state_region").val());
  send_data.append('nrc_township', $("#nrc_township ").val());
  send_data.append('nrc_citizen', $("#nrc_citizen").val());
  send_data.append('nrc_number', $("#nrc_number").val());
  send_data.append('father_name_mm', $("input[name=father_name_mm]").val());
  send_data.append('father_name_eng', $("input[name=father_name_eng]").val());
  send_data.append('race', $("input[name=race]").val());
  send_data.append('religion', $("input[name=religion]").val());
  send_data.append('date_of_birth', $("input[name=date_of_birth]").val());
  send_data.append('education', $("input[name=education]").val());
  send_data.append('ra_cpa_success_year', $("input[name=ra_cpa_success_year]").val());
  send_data.append('ra_cpa_personal_no', $("input[name=ra_cpa_personal_no]").val());
  send_data.append('cpa_reg_no', $("input[name=cpa_reg_no]").val());
  send_data.append('cpa_reg_date', $("input[name=cpa_reg_date]").val());
  send_data.append('ppa_reg_no', $("input[name=ppa_reg_no]").val());
  send_data.append('ppa_reg_date', $("input[name=ppa_reg_date]").val());
  send_data.append('address', $("textarea[name=address]").val());
  send_data.append('phone_no', $("input[name=phone_no]").val());
  send_data.append('fax_no', $("input[name=fax_no]").val());
  send_data.append('fax_no', $("input[name=fax_no]").val());
  send_data.append('m_email', $("input[name=m_email]").val());
  send_data.append('audit_firm_name', $("input[name=audit_firm_name]").val());
  send_data.append('audit_started_date', $("input[name=audit_started_date]").val());
  send_data.append('audit_structure', $("input[name=audit_structure]").val());
  send_data.append('audit_staff_no', $("input[name=audit_staff_no]").val());
  send_data.append('current_check_service_id',$('#selected_service_id').val());

  send_data.append('current_check_services_other', $("input[name=current_check_services_other]").val());
  //$(':radio:checked').map(function(){send_data.append('experience',$(this).val())});
  send_data.append('experience', $("input[name=experience]:checked").val());
  send_data.append('started_teaching_year', $("input[name=started_teaching_year]").val());
  send_data.append('current_accept_no', $("input[name=current_accept_no]").val());
  send_data.append('trained_trainees_no', $("input[name=trained_trainees_no]").val());
  send_data.append('internship_accept_no', $("input[name=internship_accept_no]").val());
  //$(':radio:checked').map(function(){send_data.append('repeat_yearly',$(this).val())});
  //$(':radio:checked').map(function(){send_data.append('training_absent',$(this).val())});
  send_data.append('repeat_yearly', $("input[name=repeat_yearly]:checked").val());
  send_data.append('training_absent', $("input[name=training_absent]:checked").val());
  send_data.append('training_absent_reason', $("textarea[name=training_absent_reason]").val());
//   send_data.append('email', $("input[name=email]").val());
//   send_data.append('password', $("input[name=password]").val());
  send_data.append('type', $("input[name=type]").val());
  send_data.append('status', $("input[name=status]").val());

  show_loader();

  $.ajax({
      type: "POST",
      data: send_data,
      url: BACKEND_URL + "/mentor",
    //   async: false,
      cache: false,
      contentType: false,
      processData: false,
      success: function (data) {
            EasyLoading.hide();
          successMessage(data.message);
          resetForm("#mentor_register_form");
          // location.reload();
          location.href = FRONTEND_URL+'/';
          //$(".tbl_education").empty();
      },
      error: function (result) {
        EasyLoading.hide();
      },
  });
}

function loadService(){
    var select = document.getElementById("selected_service_id");
    $.ajax({
        url: BACKEND_URL+"/check_service",
        type: 'get',
        data:"",
        success: function(data){
            var service_data=data.data;
            service_data.forEach(function (element) {
                var option = document.createElement('option');
                option.text = element.name;
                option.value = element.id;
                select.add(option, 1);
                $("#selected_service_id").css('display','inline');
                $("#selected_service_id").siblings(".nice-select").css('display','none');
                $("#selected_service_id").siblings(".check-service-other").css('display','inline-table');
            });
        },
        error:function (message){

        }
    });
}

function mentorRegisterFeedback(){
    var student =JSON.parse(localStorage.getItem("studentinfo"));
    // console.log(student)
    $.ajax({
        url: BACKEND_URL+"/getMentorStatus/"+student.id,
        type: 'GET',
        success: function(data){
          var form_data = data;
          form_data.forEach(function(element){
                if(element.approve_reject_status == 0){
                    // showPending();
                    $('#mentor_pending').css('display','block');
                    $('#mentor_reg_container').css('display','none');

                }else if(element.approve_reject_status == 1){
                    $('#mentor_approve').css('display','block');
                    $('#mentor_reg_container').css('display','none');
                    $('#mentor_pending').css('display','none');
                }
                else{
                    //
                }
          })
        }
    });
}
function loadRenewMentor(id){
    $.ajax({
      type : 'GET',
      url : BACKEND_URL+"/mentor/"+id,
      success: function (result) {
          var mentor=result.data;
          if(mentor.status==1){
                document.getElementById('mentor').style.display='none';
                document.getElementById('mentor_renew_form').style.display='block';
                var accept=new Date(mentor.renew_date);
                var month=accept.getMonth()+1;
                var year=accept.getFullYear();
                var y=year+1;
                var now=new Date();
                $('input[name=name_mm]').val(mentor.name_mm);
                $('input[name=name_eng]').val(mentor.name_eng);
                $('input[name=father_name_mm]').val(mentor.father_name_mm);
                $('input[name=father_name_eng]').val(mentor.father_name_eng);
                $('input[name=nrc_state_region]').val(mentor.nrc_state_region);
                $('input[name=nrc_township]').val(mentor.nrc_township);
                $('input[name=nrc_citizen]').val(mentor.nrc_citizen);
                $('input[name=nrc_number]').val(mentor.nrc_number);
                $('input[name=date_of_birth]').val(mentor.date_of_birth);
                $('input[name=education]').val(mentor.education);
                $('input[name=ra_cpa_success_year]').val(mentor.ra_cpa_success_year);
                $('input[name=ra_cpa_personal_no]').val(mentor.ra_cpa_personal_no);
                $('input[name=cpa_reg_no]').val(mentor.cpa_reg_no);
                $('input[name=cpa_reg_date]').val(mentor.cpa_reg_date);
                $('input[name=ppa_reg_no]').val(mentor.ppa_reg_no);
                $('input[name=ppa_reg_date]').val(mentor.ppa_reg_date);
                $('input[name=phone_no]').val(mentor.phone_no);
                $('input[name=fax_no]').val(mentor.fax_no);
                $('input[name=m_email]').val(mentor.m_email);
                $('input[name=audit_firm_name]').val(mentor.audit_firm_name);
                $('input[name=audit_started_date]').val(mentor.audit_started_date);
                $('input[name=audit_structure]').val(mentor.audit_structure);
                $('input[name=audit_staff_no]').val(mentor.audit_staff_no);
                $('input[name=current_check_services_other]').val(mentor.current_check_services_other);
                $('#experience'+mentor.experience).prop("checked", true);
                if(mentor.experience==1){
                    $('#started_teaching').css('display','block');
                    $('#repeat_yearly'+mentor.repeat_yearly).prop("checked", true);
                    $('#training_absent'+mentor.training_absent).prop("checked", true);
                    if(mentor.training_absent==1){
                        $('#absent_reason').css('display','block');
                        $('textarea[name=training_absent_reason]').val(mentor.training_absent_reason);
                    }else{
                        $('#absent_reason').css('display','none');
                    }
                    
                }else{
                    $('#started_teaching').css('display','none');
                }
                $('textarea[name=address]').val(mentor.address);
                $('input[name=current_check_service_id]').val(mentor.current_check_service_id);
                //$('#previewImg').attr("src",BASE_URL+mentor.image);
                //$('#previewNRCFrontImg').attr("src",BASE_URL+mentor.nrc_front);
                //$('#previewNRCBackImg').attr("src",BASE_URL+mentor.nrc_back);
                // $('#hidden_nrc_front').val(mentor.nrc_front);
                // $('#hidden_nrc_back').val(mentor.nrc_back);
                $('#regno').val(mentor.id);
                $('#register_date').val(mentor.renew_date);
                if((now.getFullYear()==y && (now.getMonth()+1)==month) || now.getFullYear() >year){
                    $("#message").val("Your registeration is expired! You need to submit new registeration form again.");
                    $('.renew_submit').prop('disabled', false);

                }else if((now.getFullYear()==accept.getFullYear() && month=='10') || (now.getFullYear()==accept.getFullYear() && month=='11') || (now.getFullYear()==accept.getFullYear() && month=='12')){
                    $("#message").val("Your registeration will start in "+now.getFullYear()+" year!");
                    $('.renew_submit').prop('disabled', true);
                }else{
                    $('#message').val("You are verified!");
                    $('.renew_submit').prop('disabled', true);
                }
          }else{
            document.getElementById('mentor').style.display='block';
            document.getElementById('mentor_renew_form').style.display='none';
          }

      },
      error: function (result) {
      },
  });
  }
  function renewMentor(){
    var send_data=new FormData($("#mentor_renew_form_submit")[0]);
    var id=localStorage.getItem("mentor_id");
    if($("input[name=nrc_front]")[0].files[0]){
        send_data.append('nrc_front', $("input[name=nrc_front]")[0].files[0]);
      }else{
        send_data.append('nrc_front', $('#hidden_nrc_front').val());
      }
      if($("input[name=nrc_back]")[0].files[0]){
        send_data.append('nrc_back', $("input[name=nrc_back]")[0].files[0]);
      }else{
        send_data.append('nrc_back', $('#hidden_nrc_back').val());
      }
    send_data.append('_method', 'PATCH');
    show_loader();
      $.ajax({
          url: BACKEND_URL+'/renewMentor/'+id,
          type: 'post',
          data:send_data,
          contentType: false,
          processData: false,
          success: function (data) {
              EasyLoading.hide();
              successMessage(data.message);
              location.href=FRONTEND_URL+'/';

          },
          error: function (result) {
          },
      });
  }
