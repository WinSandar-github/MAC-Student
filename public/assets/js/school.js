var counter = 0;
function createSchoolRegister(){
    if($("input[name=password]").val()!=$("input[name=confirm_password]").val())
    {
        alert("Your password and confirm password do not match!");
        return;
    }

    var send_data = new FormData();
    //var files = $('#file')[0].files;
    send_data.append('profile_photo',$("input[name=profile_photo]")[0].files[0]);
    send_data.append('email',$("input[name=email]").val());
    send_data.append('password',$("input[name=password]").val());
    send_data.append('name_mm',$("input[name=name_mm]").val());
    send_data.append('name_eng',$("input[name=name_eng]").val());
    // send_data.append('nrc_state_region', $("#nrc_state_region + .nice-select span").text().trim());
    // send_data.append('nrc_township', $("#nrc_township + .nice-select span").text().trim());
    // send_data.append('nrc_citizen', $("#nrc_citizen + .nice-select span").text().trim());
    send_data.append('nrc_state_region', $("#nrc_state_region").val());
    send_data.append('nrc_township', $("#nrc_township").val());
    send_data.append('nrc_citizen', $("#nrc_citizen").val());
    send_data.append('nrc_number', $("#nrc_number").val());
    send_data.append('nrc_front',$("input[name=nrc_front]")[0].files[0]);
    send_data.append('nrc_back',$("input[name=nrc_back]")[0].files[0]);
    send_data.append('father_name_mm',$("input[name=father_name_mm]").val());
    send_data.append('father_name_eng',$("input[name=father_name_eng]").val());
    send_data.append('dob',$("input[name=dob]").val());
    send_data.append('degree',$("input[name=degree]").val());
    // var val = [];
    //     $("input[name=school_type]:checked").each(function(i){
    //       val[i] = $(this).val();
    //     });
    //     console.log("val >>>",val);
    // send_data.append('school_type',val);
    $(':checkbox:checked').map(function(){send_data.append('school_type[]',$(this).val())});
    send_data.append('attachment',$("input[name=attachment]")[0].files[0]);
    send_data.append('address',$("textarea[name=address]").val());
    send_data.append('phone',$("input[name=phone]").val());

    // သင်တန်းကျောင်းအချက်အလက်များ
    send_data.append('school_name',$("input[name=school_name]").val());
    // attend_course multi select
    send_data.append('attend_course[]',$("#attend_course").val());
    // var selected = $('.multiple-attend-course').find(':selected').val();
    // for (var i = 0; i <= selected.length-1; i++) {
    //             console.log("sel .>>",selected[i].text);
    //         }


    send_data.append('school_address',$("textarea[name=school_address]").val());
    // send_data.append('own_type',$('input[name=own_type]:checked').val());
    send_data.append('branch_school_address',$("textarea[name=branch_school_address]").val());
    // send_data.append('branch_sch_own_type',$('input[name=branch_sch_own_type]:checked').val());
    $('input[name=own_type]:radio:checked').map(function(){send_data.append('own_type',$(this).val())});
    $('input[name=branch_sch_own_type]:radio:checked').map(function(){send_data.append('branch_sch_own_type',$(this).val())});

    // ပူးတွဲတင်ပြသည့်အထောက်အထားများ
    send_data.append('business_license',$("input[name=business_license]")[0].files[0]);
    send_data.append('company_reg',$("input[name=company_reg]")[0].files[0]);
    send_data.append('org_reg_origin_and_copy',$("input[name=org_reg_origin_and_copy]")[0].files[0]);
    send_data.append('estiblisher_list_and_bio',$("input[name=estiblisher_list_and_bio]")[0].files[0]);
    send_data.append('governer_list_and_bio',$("input[name=governer_list_and_bio]")[0].files[0]);
    send_data.append('org_member_list_and_bio',$("input[name=org_member_list_and_bio]")[0].files[0]);
    send_data.append('teacher_list_and_bio',$("input[name=teacher_list_and_bio]")[0].files[0]);
    send_data.append('teacher_reg_copy',$("input[name=teacher_reg_copy]")[0].files[0]);
    send_data.append('school_location_attach',$("input[name=school_location_attach]")[0].files[0]);
    send_data.append('school_building_attach',$("input[name=school_building_attach]")[0].files[0]);
    send_data.append('classroom_attach',$("input[name=classroom_attach]")[0].files[0]);
    send_data.append('toilet_attach',$("input[name=toilet_attach]")[0].files[0]);
    send_data.append('manage_room_attach',$("input[name=manage_room_attach]")[0].files[0]);
    send_data.append('supporting_structure_photo',$("input[name=supporting_structure_photo]")[0].files[0]);
    // send_data.append('using_type',$("input[name=using_type]:checked").val());
    $('input[name=using_type]:radio:checked').map(function(){send_data.append('using_type',$(this).val())});
    send_data.append('relevant_evidence_contracts',$("input[name=relevant_evidence_contracts]")[0].files[0]);
    send_data.append('sch_establish_notes_attach',$("input[name=sch_establish_notes_attach]")[0].files[0]);

    //  ကျောင်းတည်ထောင်သူပုဂ္ဂိုလ်(များ) table
    $('input[name="establisher_name[]"]').map(function(){send_data.append('establisher_name[]',$(this).val())});
    $('input[name="establisher_nrc[]"]').map(function(){send_data.append('establisher_nrc[]',$(this).val())});
    $('input[name="establisher_cpa_papp_no[]"]').map(function(){send_data.append('establisher_cpa_papp_no[]',$(this).val())});
    $('input[name="establisher_education[]"]').map(function(){send_data.append('establisher_education[]',$(this).val())});
    $('input[name="establisher_address[]"]').map(function(){send_data.append('establisher_address[]',$(this).val())});
    $('input[name="establisher_ph_number[]"]').map(function(){send_data.append('establisher_ph_number[]',$(this).val())});
    $('input[name="establisher_email[]"]').map(function(){send_data.append('establisher_email[]',$(this).val())});

    //  ကျောင်းစီမံအုပ်ချုပ်သူများ table
    $('input[name="govern_name[]"]').map(function(){send_data.append('govern_name[]',$(this).val())});
    $('input[name="govern_nrc[]"]').map(function(){send_data.append('govern_nrc[]',$(this).val())});
    $('input[name="govern_cpa_papp_no[]"]').map(function(){send_data.append('govern_cpa_papp_no[]',$(this).val())});
    $('input[name="govern_education[]"]').map(function(){send_data.append('govern_education[]',$(this).val())});
    $('input[name="govern_responsibility[]"]').map(function(){send_data.append('govern_responsibility[]',$(this).val())});
    $('input[name="govern_ph_number[]"]').map(function(){send_data.append('govern_ph_number[]',$(this).val())});
    $('input[name="govern_email[]"]').map(function(){send_data.append('govern_email[]',$(this).val())});

    // အဖွဲ့အစည်း၏အလုပ်အမှုဆောင်အဖွဲ့ဝင်များ၏အမည်စာရင်းနှင့်ကိုယ်ရေးအချက်အလက်များ
    $('input[name="member_name[]"]').map(function(){send_data.append('member_name[]',$(this).val())});
    $('input[name="member_nrc[]"]').map(function(){send_data.append('member_nrc[]',$(this).val())});
    $('input[name="member_cpa_papp_no[]"]').map(function(){send_data.append('member_cpa_papp_no[]',$(this).val())});
    $('input[name="member_education[]"]').map(function(){send_data.append('member_education[]',$(this).val())});
    $('input[name="member_responsibility[]"]').map(function(){send_data.append('member_responsibility[]',$(this).val())});
    $('input[name="member_ph_number[]"]').map(function(){send_data.append('member_ph_number[]',$(this).val())});
    $('input[name="member_email[]"]').map(function(){send_data.append('member_email[]',$(this).val())});

    // သင်တန်းဆရာများ၏အမည်စာရင်းနှင့်ကိုယ်ရေးအချက်အလက်များ
    $('input[name="teacher_name[]"]').map(function(){send_data.append('teacher_name[]',$(this).val())});
    $('input[name="teacher_nrc[]"]').map(function(){send_data.append('teacher_nrc[]',$(this).val())});
    $('input[name="teacher_registration_no[]"]').map(function(){send_data.append('teacher_registration_no[]',$(this).val())});
    $('input[name="teacher_education[]"]').map(function(){send_data.append('teacher_education[]',$(this).val())});
    $('input[name="teaching_subject[]"]').map(function(){send_data.append('teaching_subject[]',$(this).val())});
    $('input[name="teacher_ph_number[]"]').map(function(){send_data.append('teacher_ph_number[]',$(this).val())});
    $('input[name="teacher_email[]"]').map(function(){send_data.append('teacher_email[]',$(this).val())});

    send_data.append('school_location',$("textarea[name=school_location]").val());
    send_data.append('branch_school_location',$("textarea[name=branch_school_location]").val());

    send_data.append('bulding_type',$("input[name=bulding_type]").val());
    send_data.append('building_measurement',$("input[name=building_measurement]").val());
    send_data.append('floor_numbers',$("input[name=floor_numbers]").val());

    send_data.append('classroom_number',$("input[name=classroom_number]").val());
    send_data.append('classroom_measurement',$("input[name=classroom_measurement]").val());
    send_data.append('student_num_limit',$("input[name=student_num_limit]").val());
    send_data.append('air_con',$("input[name=air_con]").val());

    send_data.append('toilet_type',$("input[name=toilet_type]").val());
    send_data.append('toilet_number',$("input[name=toilet_number]").val());

    send_data.append('manage_room_numbers',$("input[name=manage_room_numbers]").val());
    send_data.append('manage_room_measurement',$("input[name=manage_room_measurement]").val());

    show_loader();
    $.ajax({
        type: "POST",
        data: send_data,
        url: BACKEND_URL + "/school",
        // async: false,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data) {
            setTimeout(() => {
                Easyloading.hide()
            
            }, 2000);
            
            successMessage(data.message);
            location.href=FRONTEND_URL+'/';
            resetForm("#school_register_form");
        },
        error: function (result) {
        },
    });

}

function school_reg_feedback(){
    var student =JSON.parse(localStorage.getItem("studentinfo"));
    // console.log(student)
    $.ajax({
        url: BACKEND_URL+"/getSchoolStatus/"+student.id,
        type: 'GET',
        success: function(data){
            // console.log(data);
          var form_data = data;
          form_data.forEach(function(element){
            // console.log(element.approve_reject_status);
                if(element.approve_reject_status == 0){
                    // showPending();
                    $('#school_pending').css('display','block');
                    $('#school_form').css('display','none');

                }else if(element.approve_reject_status == 1){
                    loadRenewSchool(localStorage.getItem("school_id"));
                    $('#school_approve').css('display','block');
                    $('#school_form').css('display','none');
                    $('#school_pending').css('display','none');
                }
                else{
                    //
                }
          })
        }
    });
}

function getCourses(){
  $.ajax({
      url:BACKEND_URL+'/get_courses',
      type:'get',
      success:function(response){
           var opt;
          $.each(response.data,function(i,v){
              opt += `<option value=${v.id}  >${v.name}</option>`;
          })
          $(".multiple-attend-course").append(opt);
          //$(".attend_course").siblings(".nice-select").css('display','none');
      }
  });
}

function addRowSchEstablishPerson(tbody){
  $("#sch_establish_error").hide();
  var newRow = $("<tr>");
  var cols = "";
  //var row=$('.'+tbody+' tr').length;
  cols += '<td><input type="text" class="form-control" value="" /></td>';
  cols += '<td><input type="text" name="establisher_name[]" class="form-control" placeholder="" required/></td>';
  cols += '<td><input type="text" name="establisher_nrc[]" class="form-control" placeholder="" required/></td>';
  cols += '<td><input type="text" name="establisher_cpa_papp_no[]" class="form-control" placeholder="" required/></td>';
  cols += '<td><input type="text" name="establisher_education[]" class="form-control" placeholder="" required/></td>';
  cols += '<td><input type="text" name="establisher_address[]" class="form-control" placeholder="" required/></td>';
  cols += '<td><input type="text" name="establisher_ph_number[]" class="form-control" placeholder="" required/></td>';
  cols += '<td><input type="text" name="establisher_email[]" class="form-control" placeholder="" required/></td>';
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

function addRowSchGoverns(tbody){
  $("#sch_governs_error").hide();
  var newRow = $("<tr>");
  var cols = "";
  //var row=$('.'+tbody+' tr').length;
  cols += '<td><input type="text" class="form-control" value="" /></td>';
  cols += '<td><input type="text" name="govern_name[]" class="form-control" placeholder="" required/></td>';
  cols += '<td><input type="text" name="govern_nrc[]" class="form-control" placeholder="" required/></td>';
  cols += '<td><input type="text" name="govern_cpa_papp_no[]" class="form-control" placeholder="" required/></td>';
  cols += '<td><input type="text" name="govern_education[]" class="form-control" placeholder="" required/></td>';
  cols += '<td><input type="text" name="govern_responsibility[]" class="form-control" placeholder="" required/></td>';
  cols += '<td><input type="text" name="govern_ph_number[]" class="form-control" placeholder="" required/></td>';
  cols += '<td><input type="text" name="govern_email[]" class="form-control" placeholder="" required/></td>';
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

function addRowMembershipBio(tbody){
  $("#member_list_biography_error").hide();
  var newRow = $("<tr>");
  var cols = "";
  //var row=$('.'+tbody+' tr').length;
  cols += '<td><input type="text" class="form-control" value="" /></td>';
  cols += '<td><input type="text" name="member_name[]" class="form-control" placeholder="" required/></td>';
  cols += '<td><input type="text" name="member_nrc[]" class="form-control" placeholder="" required/></td>';
  cols += '<td><input type="text" name="member_cpa_papp_no[]" class="form-control" placeholder="" required/></td>';
  cols += '<td><input type="text" name="member_education[]" class="form-control" placeholder="" required/></td>';
  cols += '<td><input type="text" name="member_responsibility[]" class="form-control" placeholder="" required/></td>';
  cols += '<td><input type="text" name="member_ph_number[]" class="form-control" placeholder="" required/></td>';
  cols += '<td><input type="text" name="member_email[]" class="form-control" placeholder="" required/></td>';
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

function addRowTeacherBio(tbody){
  $("#teacher_list_bio_error").hide();
  var newRow = $("<tr>");
  var cols = "";
  //var row=$('.'+tbody+' tr').length;
  cols += '<td><input type="text" class="form-control" value="" /></td>';
  cols += '<td><input type="text" name="teacher_name[]" class="form-control" placeholder="" required/></td>';
  cols += '<td><input type="text" name="teacher_nrc[]" class="form-control" placeholder="" required/></td>';
  cols += '<td><input type="text" name="teacher_registration_no[]" class="form-control" placeholder="" required/></td>';
  cols += '<td><input type="text" name="teacher_education[]" class="form-control" placeholder="" required/></td>';
  cols += '<td><input type="text" name="teaching_subject[]" class="form-control" placeholder="" required/></td>';
  cols += '<td><input type="text" name="teacher_ph_number[]" class="form-control" placeholder="" required/></td>';
  cols += '<td><input type="text" name="teacher_email[]" class="form-control" placeholder="" required/></td>';
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

function loadSchoolList(){
    var select = document.getElementById("selected_school_id");
    $.ajax({
        url: BACKEND_URL+"/school",
        type: 'get',
        data:"",
        success: function(data){

            var school_data=data.data;
            school_data.forEach(function (element) {
                var option = document.createElement('option');
                option.text = element.name_mm+"/"+element.name_eng;
                option.value = element.id;
                select.add(option, 1);
                $("#selected_school_id").css('display','inline');
                $("#selected_school_id").siblings(".nice-select").css('display','none');
                $("#selected_school_id").siblings(".check-service-other").css('display','inline-table');



            });
        },
        error:function (message){

        }

    });
}
function loadRenewSchool(id){
    $.ajax({
      type : 'GET',
      url : BACKEND_URL+"/school/"+id,
      success: function (result) {
          var school=result.data;
          if(school.approve_reject_status==1){
                document.getElementById('school').style.display='none';
                document.getElementById('school_renew_form').style.display='block';
                var accept=new Date(school.renew_date);
                var month=accept.getMonth()+1;
                var year=accept.getFullYear();
                var y=year+1;
                var now=new Date();
                $('#regno').val(school.id);
                $('#register_date').val(school.renew_date);
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
            document.getElementById('school_renew_form').style.display='none';
            document.getElementById('school').style.display='block';
          }

      },
      error: function (result) {
      },
  });
  }
  function renewSchool(){
    var send_data=new FormData();
    var id=localStorage.getItem("school_id");
    send_data.append('_method', 'PATCH');
    show_loader();
      $.ajax({
          url: BACKEND_URL+'/school/'+id,
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
