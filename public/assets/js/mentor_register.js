var counter = 0;

function addRowEducation(tbody){
    var newRow = $("<tr>");
    var cols = "";
    cols += '<td><input type="text" class="form-control" value="" /></td>';
    cols += '<td><input type="text" name="degrees[]" class="form-control" placeholder="ပညာအရည်အချင်း" required/></td>';
    cols += '<td class="text-center"><button type="button" class="delete btn btn-sm btn-danger m-2" onclick=delRow("'+tbody+'")><li class="fa fa-times"></li></button></td>';
    newRow.append(cols);
    $("table."+tbody).append(newRow);
    // order numer to be serial
    $("."+tbody+" tbody tr").each(function(index,row){
      $(row).find("td:first-child input").val(index + 1);
        $(row).find("td:first-child input").css('text-align','center');
        $(row).find("td:first-child input").css('border','none');
    });
    counter++;
}

function delRow(tbody){
  $("table."+tbody).on("click", ".delete", function (event) {
      var deleted_row = $(this).closest("tr");
      var siblings = $(deleted_row).siblings();
      $(deleted_row).remove();
      counter -= 1
      // order numer to be serial
      $(siblings).each(function(index,row){
        $(row).find("td:first-child input").val(index + 1);
      });
  });
}

function createMentorRegister(){
  var send_data=new FormData();
  send_data.append('name_mm', $("input[name=name_mm]").val());
  send_data.append('name_eng', $("input[name=name_eng]").val());
  send_data.append('nrc_state_region', nrc_state_region);
  send_data.append('nrc_township', nrc_township);
  send_data.append('nrc_citizen', nrc_citizen);
  send_data.append('nrc_number', $("input[name=nrc_number]").val());
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
  send_data.append('address', $("input[name=address]").val());
  send_data.append('phone_no', $("input[name=phone_no]").val());
  send_data.append('fax_no', $("input[name=fax_no]").val());
  send_data.append('fax_no', $("input[name=fax_no]").val());
  send_data.append('m_email', $("input[name=m_email]").val());
  send_data.append('audit_firm_name', $("input[name=audit_firm_name]").val());
  send_data.append('audit_started_date', $("input[name=audit_started_date]").val());
  send_data.append('audit_structure', $("input[name=audit_structure]").val());
  send_data.append('audit_staff_no', $("input[name=audit_staff_no]").val());
  send_data.append('current_check_service_id',$('#selected_service_id').val());

  send_data.append('service_other', $("input[name=service_other]").val());
  $(':radio:checked').map(function(){send_data.append('experience',$(this).val())});
  send_data.append('started_teaching_year', $("input[name=started_teaching_year]").val());
  send_data.append('current_accept_no', $("input[name=current_accept_no]").val());
  send_data.append('trained_trainees_no', $("input[name=trained_trainees_no]").val());
  send_data.append('internship_accept_no', $("input[name=internship_accept_no]").val());
  $(':radio:checked').map(function(){send_data.append('repeat_yearly',$(this).val())});
  $(':radio:checked').map(function(){send_data.append('training_absent',$(this).val())});
  send_data.append('training_absent_reason', $("input[name=training_absent_reason]").val());
  send_data.append('email', $("input[name=email]").val());
  send_data.append('password', $("input[name=password]").val());

  $.ajax({
      type: "POST",
      data: send_data,
      url: BACKEND_URL + "/mentor",
      async: false,
      cache: false,
      contentType: false,
      processData: false,
      success: function (data) {
        console.log(data);
          successMessage(data.message);
          resetForm("#mentor_register_form");
          location.reload();
          //$(".tbl_education").empty();
      },
      error: function (result) {
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
