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
        console.log(data);
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
            var course_data=data.data;
            course_data.forEach(function (element) {
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
    var send_data=new FormData();
    var id=localStorage.getItem("mentor_id");
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
