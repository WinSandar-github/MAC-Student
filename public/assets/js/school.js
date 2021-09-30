
  
// school
$("#school_modal").click(function() {
    $('#schoolpaymentModal').modal('show');
});

$('#cash_img').click(function() {
    $('#school_btn').prop('disabled', false);
});

$('#cb_img').click(function() {
    $('#school_btn').prop('disabled', true);
});

$('#mpu_img').click(function() {
    $('#school_btn').prop('disabled', true);
});
$('#school_btn').prop('disabled', true);

$('#school_btn').click(function () {
    setTimeout(function () {
        $('#schoolpaymentModal').modal('hide');
    }, 1000);
});

function check_email_school()
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
        createSchoolRegister();
        $('#schoolModal').modal('hide');
    }
}

function schoolPaymentSubmit(){
    var student = JSON.parse(localStorage.getItem('studentinfo'));
    $.ajax({
    url: BACKEND_URL + "/approve_school/" + student.id,
    type: 'patch',
    success: function (data) {
            successMessage("Your payment is successfully");
            location.href = FRONTEND_URL + "/school_information";
        },
        error:function (message){
        }
    })
}

function checkPaymentSchool(){
    var student =JSON.parse(localStorage.getItem("studentinfo"));
    
    if(student!=null){
      $.ajax({
        url: BACKEND_URL+"/check_payment_school/"+student.id,
        type: 'GET',
        success: function(data){
            // console.log(data);
          var form_data = data;
          form_data.forEach(function(element){
            console.log(element.payment_method)
            if(element.payment_method != null){
                $('#school_modal').prop('disabled', true);
                loadRenewSchool();
            }else{
                $('#school_modal').prop('disabled', false);
            }
          })
        }
    });
    }
}

var counter = 0;
function createSchoolRegister(){
 
  if($("input[name=password]").val()!=$("input[name=confirm_password]").val())
    {
        alert("Your password and confirm password do not match!");
        return;
    }

    var send_data = new FormData($( "#school_register_form" )[0]);
    send_data.append('student_info_id',$('#student_info_id').val());
    $("input[id=branch_sch_own_type]").map(function(){send_data.append('branch_sch_own_type[]',$(this).val())});
    
    show_loader();
    $.ajax({
        type: "POST",
        data: send_data,
        url: BACKEND_URL + "/school",
        // async: false,
        //cache: false,
        contentType: false,
        processData: false,
        success: function (data) {
            
            EasyLoading.hide();
            successMessage(data.message);
            location.href=FRONTEND_URL+'/';
          //   resetForm("#school_register_form");
        },
        error: function (result) {
        },
    });

}

function school_reg_feedback(){
    var student =JSON.parse(localStorage.getItem("studentinfo"));
    if(student!=null){
      $.ajax({
        url: BACKEND_URL+"/getSchoolStatus/"+student.id,
        type: 'GET',
        success: function(data){
           
          var form_data = data;
          form_data.forEach(function(element){
           
                if(element.approve_reject_status == 0){
                    
                    $('#school_pending').css('display','block');
                    $('#school_approve').css('display','none');
                    $('.register-btn').css('display','none');

                }else if(element.approve_reject_status == 1){
                    $('#school_approve').css('display','block');
                    $('#school_pending').css('display','none');
                    $('.payment-btn').css('display','block');
                    $('.register-btn').css({'display':'none'});
                    $('.register-btn').removeClass('mt-4');
                }
                else{
                    //
                }
          })
        }
    });
    }
    
}

function getCourses(){
  $.ajax({
      url:BACKEND_URL+'/get_courses',
      type:'get',
      success:function(response){
           var opt;
          $.each(response.data,function(i,v){
              opt += `<option value=${v.id}  >${v.code.toUpperCase().replace("_", " ")}</option>`;
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
  var row=$('.'+tbody+' tr').length;
  cols += '<td class="text-center">'+row+'</td>';
  cols += '<td><input type="text" name="establisher_name[]" class="form-control" placeholder="" id="establisher_name'+row+'" required></td>';
  cols += '<td><input type="text" name="establisher_nrc[]" class="form-control" placeholder="" id="establisher_nrc'+row+'" required></td>';
  cols += '<td><input type="text" name="establisher_cpa_papp_no[]" class="form-control" placeholder="" id="establisher_cpa_papp_no'+row+'" required></td>';
  cols += '<td><input type="text" name="establisher_education[]" class="form-control" placeholder="" id="establisher_education'+row+'" required></td>';
  cols += '<td><input type="text" name="establisher_address[]" class="form-control" placeholder="" id="establisher_address'+row+'" required></td>';
  cols += '<td><input type="text" name="establisher_ph_number[]" class="form-control" placeholder="" id="establisher_ph_number'+row+'" required></td>';
  cols += '<td><input type="email" name="establisher_email[]" class="form-control" placeholder="" id="establisher_email'+row+'" required></td>';
  cols += '<td class="text-center"><button type="button" class="delete btn btn-sm btn-danger m-2" onclick=delRow("'+tbody+'")><li class="fa fa-times"></li></button></td>';
  newRow.append(cols);
  $("table."+tbody).append(newRow);
  // order numer to be serial
  // $("."+tbody+" tbody tr").each(function(index,row){
  //   $(row).find("td:first-child input").val(index + 1);
  //     $(row).find("td:first-child input").css('text-align','center');
  //     $(row).find("td:first-child input").css('border','none');
  // });
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
  var row=$('.'+tbody+' tr').length;
  cols += '<td class="text-center">'+row+'</td>';
  cols += '<td><input type="text" name="govern_name[]" class="form-control" placeholder="" id="govern_name'+row+'" required></td>';
  cols += '<td><input type="text" name="govern_nrc[]" class="form-control" placeholder="" id="govern_nrc'+row+'"></td>';
  cols += '<td><input type="text" name="govern_cpa_papp_no[]" class="form-control" placeholder="" id="govern_cpa_papp_no'+row+'" required></td>';
  cols += '<td><input type="text" name="govern_education[]" class="form-control" placeholder="" id="govern_education'+row+'" required></td>';
  cols += '<td><input type="text" name="govern_responsibility[]" class="form-control" placeholder="" id="govern_responsibility'+row+'" required></td>';
  cols += '<td><input type="text" name="govern_ph_number[]" class="form-control" placeholder="" id="govern_ph_number'+row+'" required></td>';
  cols += '<td><input type="email" name="govern_email[]" class="form-control" placeholder="" id="govern_email'+row+'" required></td>';
  cols += '<td class="text-center"><button type="button" class="delete btn btn-sm btn-danger m-2" onclick=delRow("'+tbody+'")><li class="fa fa-times"></li></button></td>';
  newRow.append(cols);
  $("table."+tbody).append(newRow);
  
  counter++;
}

function addRowMembershipBio(tbody){
  $("#member_list_biography_error").hide();
  var newRow = $("<tr>");
  var cols = "";
  var row=$('.'+tbody+' tr').length;
  cols += '<td class="text-center">'+row+'</td>';
  cols += '<td><input type="text" name="member_name[]" class="form-control" placeholder="" id="member_name'+row+'" required></td>';
  cols += '<td><input type="text" name="member_nrc[]" class="form-control" placeholder="" id="member_nrc'+row+'" required></td>';
  cols += '<td><input type="text" name="member_cpa_papp_no[]" class="form-control" placeholder="" id="member_cpa_papp_no'+row+'" required></td>';
  cols += '<td><input type="text" name="member_education[]" class="form-control" placeholder="" id="member_education'+row+'" required></td>';
  cols += '<td><input type="text" name="member_responsibility[]" class="form-control" placeholder="" id="member_responsibility'+row+'" required></td>';
  cols += '<td><input type="text" name="member_ph_number[]" class="form-control" placeholder="" id="member_ph_number'+row+'" required></td>';
  cols += '<td><input type="email" name="member_email[]" class="form-control" placeholder="" id="member_email'+row+'" required></td>';
  cols += '<td class="text-center"><button type="button" class="delete btn btn-sm btn-danger m-2" onclick=delRow("'+tbody+'")><li class="fa fa-times"></li></button></td>';
  newRow.append(cols);
  $("table."+tbody).append(newRow);
  
  counter++;
}
var count=0;
function addRowTeacherBio(tbody){
  $("#teacher_list_bio_error").hide();
  var newRow = $("<tr>");
  var cols = "";
  var row=$('.'+tbody+' tr').length;
  cols += '<td class="text-center">'+row+'</td>';
  cols += '<td><input type="text" name="teacher_registration_no[]" class="form-control" id="teacher_registration_no'+count+'" placeholder="" onfocusout="loadTeacherById('+count+')" required/></td>';
  cols += '<td><input type="text" name="teacher_name[]" class="form-control"  placeholder="" id="teacher_name'+row+'" required></td>';
  cols += '<td><input type="text" name="teacher_nrc[]" class="form-control"  placeholder="" id="teacher_nrc'+row+'" required></td>';
  
  cols += '<td><input type="text" name="teacher_education[]" class="form-control"  placeholder="" id="teacher_education'+row+'" required></td>';
  cols += '<td><input type="text" name="teaching_subject[]" class="form-control"  placeholder="" id="teaching_subject'+row+'" required></td>';
  cols += '<td><input type="text" name="teacher_ph_number[]" class="form-control"  placeholder="" id="teacher_ph_number'+row+'" required></td>';
  cols += '<td><input type="email" name="teacher_email[]" class="form-control"  placeholder="" id="teacher_email'+row+'" required></td>';
  cols += '<td><input type="file" name="teacher_reg_copy[]" class="form-control" id="teacher_reg_copy'+row+'" required></td>';
  cols += '<td class="text-center"><button type="button" class="delete btn btn-sm btn-danger m-2" onclick=delRowTeacherBio("'+tbody+'")><li class="fa fa-times"></li></button></td>';
  newRow.append(cols);
  $("table."+tbody).append(newRow);
  
  count++;
}
function delRowTeacherBio(tbody){
  $("table."+tbody).on("click", ".delete", function (event) {
      var deleted_row = $(this).closest("tr");
      var siblings = $(deleted_row).siblings();
      $(deleted_row).remove();
        count -= 1
        // order numer to be serial
        $(siblings).each(function(index,row){
          $(row).find("td:first-child input").val(index + 1);
        });
    });
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
                option.text = element.school_name;
                option.value = element.id;
                select.add(option,0);
                
            });
        },
        error:function (message){

        }

    });
}
function loadRenewSchool(){
  var student =JSON.parse(localStorage.getItem("studentinfo"));
  if(student!=null){
      $.ajax({
        type : 'GET',
        url : BACKEND_URL+"/school/"+student.school_id,
        success: function (result) {
            var school=result.data;
            if(school.approve_reject_status==1){
                  $('#school_approve').css('display','none');
                  document.getElementById('school_detail').style.display='none';
                  document.getElementById('school_renew_form').style.display='block';
                  var accept=new Date(school.renew_date);
                  var month=accept.getMonth()+1;
                  var year=accept.getFullYear();
                  var y=year+1;
                  var now=new Date();
                  $('input[name=email]').val(school.email);
                  $('input[name=name_mm]').val(school.name_mm);
                  $('input[name=name_eng]').val(school.name_eng);
                  $('input[name=father_name_mm]').val(school.father_name_mm);
                  $('input[name=father_name_eng]').val(school.father_name_eng);
                  $('input[name=nrc_state_region]').val(school.nrc_state_region);
                  $('input[name=nrc_township]').val(school.nrc_township);
                  $('input[name=nrc_citizen]').val(school.nrc_citizen);
                  $('input[name=nrc_number]').val(school.nrc_number);
                  $('input[name=dob]').val(school.date_of_birth);
                  $('input[name=degree]').val(school.degree);
                  $('input[name=phone]').val(school.phone);
                  $('textarea[name=address]').val(school.address);
                  var type=school.type.split(',');
                  type.forEach(function(e){
                    $('#school'+e).prop("checked", true);
                  })
                  $('#'+school.own_type).prop("checked", true);
                  $('#branch_'+school.branch_sch_own_type).prop("checked", true);
                  $('#using_type_'+school.using_type).prop("checked", true);
                  var school_establishers=school.school_establishers;
                  $.each(school_establishers, function( index, value ){
                    var tr="<tr>";
                    tr += `<td class="less-font-weight text-center">${ index += 1 } </td>`;
                    tr += '<td><input type="text" name="establisher_name[]" class="form-control" value="'+value.name+'"/></td>';
                    tr += '<td><input type="text" name="establisher_nrc[]" class="form-control" value="'+value.nrc+'"/></td>';
                    tr += '<td><input type="text" name="establisher_cpa_papp_no[]" class="form-control" value="'+value.cpa_papp_no+'"/></td>';
                    tr += '<td><input type="text" name="establisher_education[]" class="form-control" value="'+value.education+'"/></td>';
                    tr += '<td><input type="text" name="establisher_address[]" class="form-control" value="'+value.address+'"/></td>';
                    tr += '<td><input type="text" name="establisher_ph_number[]" class="form-control" value="'+value.ph_number+'"/></td>';
                    tr += '<td><input type="text" name="establisher_email[]" class="form-control" value="'+value.email+'"/></td>';
                    tr += '<td class="text-center"><button type="button" disabled class="delete btn btn-sm btn-danger m-2" ><li class="fa fa-times"></li></button></td>';
                    tr += "</tr>";
                    $(".tbl_sch_established_persons_body").append(tr);
                  });
                  var school_governs=school.school_governs;
                  $.each(school_governs, function( index, value ){
                    var tr="<tr>";
                    tr += `<td class="less-font-weight text-center">${ index += 1 } </td>`;
                    tr += '<td><input type="text" name="govern_name[]" class="form-control" value="'+value.name+'"/></td>';
                    tr += '<td><input type="text" name="govern_nrc[]" class="form-control" value="'+value.nrc+'"/></td>';
                    tr += '<td><input type="text" name="govern_cpa_papp_no[]" class="form-control" value="'+value.cpa_papp_no+'"/></td>';
                    tr += '<td><input type="text" name="govern_education[]" class="form-control" value="'+value.education+'"/></td>';
                    tr += '<td><input type="text" name="govern_responsibility[]" class="form-control" value="'+value.responsibility+'"/></td>';
                    tr += '<td><input type="text" name="govern_ph_number[]" class="form-control" value="'+value.ph_number+'"/></td>';
                    tr += '<td><input type="text" name="govern_email[]" class="form-control" value="'+value.email+'"/></td>';
                    tr += '<td class="text-center"><button type="button" disabled class="delete btn btn-sm btn-danger m-2" ><li class="fa fa-times"></li></button></td>';
                    tr += "</tr>";
                    $(".tbl_sch_governs_body").append(tr);
                  });
                  var school_members=school.school_members;
                  $.each(school_members, function( index, value ){
                    var tr="<tr>";
                    tr += `<td class="less-font-weight text-center">${ index += 1 } </td>`;
                    tr += '<td><input type="text" name="member_name[]" class="form-control" value="'+value.name+'"/></td>';
                    tr += '<td><input type="text" name="member_nrc[]" class="form-control" value="'+value.nrc+'"/></td>';
                    tr += '<td><input type="text" name="member_cpa_papp_no[]" class="form-control" value="'+value.cpa_papp_no+'"/></td>';
                    tr += '<td><input type="text" name="member_education[]" class="form-control" value="'+value.education+'"/></td>';
                    tr += '<td><input type="text" name="member_responsibility[]" class="form-control" value="'+value.responsibility+'"/></td>';
                    tr += '<td><input type="text" name="member_ph_number[]" class="form-control" value="'+value.ph_number+'"/></td>';
                    tr += '<td><input type="text" name="member_email[]" class="form-control" value="'+value.email+'"/></td>';
                    tr += '<td class="text-center"><button type="button" disabled class="delete btn btn-sm btn-danger m-2" ><li class="fa fa-times"></li></button></td>';
                    tr += "</tr>";
                    $(".tbl_member_list_biography_body").append(tr);
                  });
                  var school_teachers=school.school_teachers;
                  $.each(school_teachers, function( index, value ){
                    var tr="<tr>";
                    tr += `<td class="less-font-weight text-center">${ index += 1 } </td>`;
                    tr += '<td><input type="text" name="teacher_name[]" class="form-control" value="'+value.name+'"/></td>';
                    tr += '<td><input type="text" name="teacher_nrc[]" class="form-control" value="'+value.nrc+'"/></td>';
                    tr += '<td><input type="text" name="teacher_registration_no[]" class="form-control" value="'+value.registration_no+'"/></td>';
                    tr += '<td><input type="text" name="teacher_education[]" class="form-control" value="'+value.education+'"/></td>';
                    tr += '<td><input type="text" name="teaching_subject[]" class="form-control" value="'+value.subject+'"/></td>';
                    tr += '<td><input type="text" name="teacher_ph_number[]" class="form-control" value="'+value.ph_number+'"/></td>';
                    tr += '<td><input type="text" name="teacher_email[]" class="form-control" value="'+value.email+'"/></td>';
                    tr += '<td class="text-center"><button type="button" disabled class="delete btn btn-sm btn-danger m-2" ><li class="fa fa-times"></li></button></td>';
                    tr += "</tr>";
                    $(".tbl_teacher_list_biography_body").append(tr);
                  });
                  $('textarea[name=school_location]').val(school.school_location);
                  $('textarea[name=branch_school_location]').val(school.branch_school_location);
                  $('textarea[name=branch_school_address]').val(school.branch_school_address);
                  $('input[name=bulding_type]').val(school.bulding_type);
                  $('input[name=building_measurement]').val(school.building_measurement);
                  $('input[name=floor_numbers]').val(school.floor_numbers);
                  $('input[name=classroom_number]').val(school.classroom_number);
                  $('input[name=classroom_measurement]').val(school.classroom_measurement);
                  $('input[name=student_num_limit]').val(school.student_num_limit);
                  $('input[name=air_con]').val(school.air_con);
                  $('input[name=toilet_type]').val(school.toilet_type);
                  $('input[name=toilet_number]').val(school.toilet_number);
                  $('input[name=manage_room_numbers]').val(school.manage_room_numbers);
                  $('input[name=manage_room_measurement]').val(school.manage_room_measurement);
                  loadStudentCourse(school.attend_course.replace(/[\'"[\]']+/g, ''));
                  loadFile(school.attachment,"view_attachment");
                  loadFile(school.business_license,"view_business_license");
                  loadFile(school.company_reg,"view_company_reg");
                  loadFile(school.org_reg_origin_and_copy,"view_org_reg_origin");
                  loadFile(school.estiblisher_list_and_bio,"view_estiblisher_list");
                  loadFile(school.governer_list_and_bio,"view_governer");
                  loadFile(school.org_member_list_and_bio,"view_org_member_list_and_bio");
                  loadFile(school.teacher_list_and_bio,"view_teacher_list");
                  loadFile(school.teacher_reg_copy,"view_teacher_reg");
                  loadFile(school.school_location_attach,"view_school_location");
                  loadFile(school.school_building_attach,"view_school_building");
                  loadFile(school.classroom_attach,"view_classroom");
                  loadFile(school.toilet_attach,"view_toilet_attach");
                  loadFile(school.manage_room_attach,"view_manage_room");
                  loadFile(school.supporting_structure_photo,"view_supporting");
                  loadFile(school.relevant_evidence_contracts,"view_relevant_evidence_contracts");
                  loadFile(school.sch_establish_notes_attach,"view_sch_establish_notes_attach");
                  
                  $('#previewImg').attr("src",BASE_URL+school.profile_photo);
                  $('input[name=school_name]').val(school.school_name);
                  $('textarea[name=school_address]').val(school.school_address);
                  $('#hidden_nrc_front').val(school.nrc_front);
                  $('#hidden_business_license').val(school.business_license);
                  $('#hidden_company_reg').val(school.company_reg);
                  $('#hidden_org_reg_origin_and_copy').val(school.org_reg_origin_and_copy);
                  $('#hidden_estiblisher_list_and_bio').val(school.estiblisher_list_and_bio);
                  $('#hidden_governer_list_and_bio').val(school.governer_list_and_bio);
                  $('#hidden_org_member_list_and_bio').val(school.org_member_list_and_bio);
                  $('#hidden_teacher_list_and_bio').val(school.teacher_list_and_bio);
                  $('#hidden_teacher_reg_copy').val(school.teacher_reg_copy);
                  $('#hidden_school_location_attach').val(school.school_location_attach);
                  $('#hidden_school_building_attach').val(school.school_building_attach);
                  $('#hidden_toilet_attach').val(school.toilet_attach);
                  $('#hidden_manage_room_attach').val(school.manage_room_attach);
                  $('#hidden_supporting_structure_photo').val(school.supporting_structure_photo);
                  $('#hidden_classroom_attach').val(school.classroom_attach);
                  $('#hidden_relevant_evidence_contracts	').val(school.relevant_evidence_contracts	);
                  $('#hidden_sch_establish_notes_attach').val(school.sch_establish_notes_attach);
                  $('#hidden_attachment').val(school.attachment);
                  $('#hidden_nrc_front').val(school.nrc_front);
                  $('#hidden_nrc_back').val(school.nrc_back);
                  $("#nrc_front_img").attr("src",BASE_URL+school.nrc_front);
                  $("#nrc_back_img").attr("src",BASE_URL+school.nrc_back);
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
                document.getElementById('school_detail').style.display='block';
            }
            
  
        },
        error: function (result) {
        },
      });
    }
  }
  function renewSchool(){
    var send_data=new FormData($("#school_renew_form_data")[0]);
    var id=localStorage.getItem("school_id");
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
    if(!$("input[name=attachment]")[0].files[0]){
      send_data.append('attachment', $('#hidden_attachment').val());
    }
    if(!$("input[name=business_license]")[0].files[0]){
      send_data.append('business_license', $('#hidden_business_license').val());
    }
    if(!$("input[name=company_reg]")[0].files[0]){
      send_data.append('company_reg', $('#hidden_company_reg').val());
    }
    if(!$("input[name=org_reg_origin_and_copy]")[0].files[0]){
      send_data.append('org_reg_origin_and_copy', $('#hidden_org_reg_origin_and_copy').val());
    }
    if(!$("input[name=estiblisher_list_and_bio]")[0].files[0]){
      send_data.append('estiblisher_list_and_bio', $('#hidden_estiblisher_list_and_bio').val());
    }
    if(!$("input[name=governer_list_and_bio]")[0].files[0]){
      send_data.append('governer_list_and_bio', $('#hidden_governer_list_and_bio').val());
    }
    if(!$("input[name=org_member_list_and_bio]")[0].files[0]){
      send_data.append('org_member_list_and_bio', $('#hidden_org_member_list_and_bio').val());
    }
    if(!$("input[name=teacher_list_and_bio]")[0].files[0]){
      send_data.append('teacher_list_and_bio', $('#hidden_teacher_list_and_bio').val());
    }
    if(!$("input[name=teacher_reg_copy]")[0].files[0]){
      send_data.append('teacher_reg_copy', $('#hidden_teacher_reg_copy').val());
    }
    if(!$("input[name=school_location_attach]")[0].files[0]){
      send_data.append('school_location_attach', $('#hidden_school_location_attach').val());
    }
    if(!$("input[name=school_building_attach]")[0].files[0]){
      send_data.append('school_building_attach', $('#hidden_school_building_attach').val());
    }
    if(!$("input[name=classroom_attach]")[0].files[0]){
      send_data.append('classroom_attach', $('#hidden_classroom_attach').val());
    }
    if(!$("input[name=toilet_attach]")[0].files[0]){
      send_data.append('toilet_attach', $('#hidden_toilet_attach').val());
    }
    if(!$("input[name=supporting_structure_photo]")[0].files[0]){
      send_data.append('supporting_structure_photo', $('#hidden_supporting_structure_photo').val());
    }
    if(!$("input[name=relevant_evidence_contracts]")[0].files[0]){
      send_data.append('relevant_evidence_contracts', $('#hidden_relevant_evidence_contracts').val());
    }
    if(!$("input[name=sch_establish_notes_attach]")[0].files[0]){
      send_data.append('sch_establish_notes_attach', $('#hidden_sch_establish_notes_attach').val());
    }
    if(!$("input[name=manage_room_attach]")[0].files[0]){
      send_data.append('manage_room_attach', $('#hidden_manage_room_attach').val());
    }
    
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
function loadStudentCourse(course_id){
  var course=course_id.split(',');
  $.each(course, function( index, id ){
    $.ajax({
      type: "get",
      url: BACKEND_URL+"/course/"+id,
      success: function (result) {
        var data=result.data;
        var $newOption = $("<option selected='selected'></option>").val(data.id).text(data.name);
        $("#attend_course").append($newOption).trigger('change');
      
      }
    })
    
  })
  
}
function loadFile(file,divname){
    var file="<a href='"+BASE_URL+file+"' target='_blank' >File</a>";
    $("."+divname).append(file);
    
}
function loadDescription(membership_name,divname){
  $('.application-fee').html("");
  $('.registration-fee').html("");
  $('.description-info').html("");
  $('.requirement-info').html("");
  $('.yearly-fee').html("");
  $('.renew-fee').html("");
  $('.delay-fee').html("");
  $('.cpa-subject-fee').html("");
  $('.da-subject-fee').html("");
  $('.renew-yearly-fee').html("");
  $('.reconnected-fee').html("");
  $.ajax({
    type: "get",
    url: BACKEND_URL+"/showDescription/"+membership_name,
    success: function (result) {
      var data=result.data;
      var application_fee=0;
      var registration_fee=0;
      var yearly_fee=0;
      var renew_fee=0;
      var delay_fee=0;
      var cpa_subject_fee=0;
      var da_subject_fee=0;
      var renew_yearly_fee=0;
      var reconnected_fee=0;
      $.each(data, function( index, value ){
          $('.description-info').append(value.description);
          $('.requirement-info').append(value.requirement);
          $('.'+divname).append(value.description);
          application_fee +=value.form_fee;
          registration_fee +=value.registration_fee;
          yearly_fee +=value.yearly_fee;
          renew_fee +=value.renew_fee;
          delay_fee +=value.late_fee;
          //cpa_subject_fee +=value.cpa_subject_fee;
          //da_subject_fee +=value.da_subject_fee;
          reconnected_fee +=value.reconnected_fee;
      })
      $('.application-fee').append(thousands_separators(application_fee)+" MMK");
      $('.registration-fee').append(thousands_separators(registration_fee)+" MMK");
      $('.yearly-fee').append(thousands_separators(yearly_fee)+" MMK");
      $('.renew-fee').append(thousands_separators(renew_fee)+" MMK");
      $('.delay-fee').append(thousands_separators(delay_fee)+" MMK");
      $('.cpa-subject-fee').append(thousands_separators(cpa_subject_fee)+" MMK");
      $('.da-subject-fee').append(thousands_separators(da_subject_fee)+" MMK");
      $('.renew-yearly-fee').append(thousands_separators(renew_yearly_fee)+" MMK");
      $('.reconnected-fee').append(thousands_separators(reconnected_fee)+" MMK");
    }
  })
}
function ownTypeForm(){
  $('#ownType_letter').css('display','block');
}
function branchSchForm(){
  $('#branchSch_letter').css('display','block');
}
function addRowBranchSchool(tbody){
  $(".branch_school").hide();
  var newRow = $("<tr>");
  var cols = "";
  var row=$('.'+tbody+' tr').length;
  cols += '<td class="text-center">'+row+'</td>';
  cols += '<td><input type="text" class="form-control" name="branch_school_address[]" id="branch_school_address'+ row + '" autocomplete="off" required></td>';
  cols += '<td><input type="file" class="form-control" name="branch_school_attach[]"  accept="image/*" id="branch_school_attach'+ row + '" required></td>';
  cols += '<td>'+
          '<div class="form-group">'+
                                        '<div class="form-check mt-2 form-check-inline">'+
                                            '<input class="form-check-input" type="radio" name="branch_sch_own_type' + row + '" id="branch_sch_own_type"'+
                                                   'value="private" required> ကိုယ်ပိုင်'+
                                            
                                        '</div>'+
                                        '<div class="form-check mt-2 form-check-inline">'+
                                            '<input class="form-check-input" type="radio" name="branch_sch_own_type' + row + '" id="branch_sch_own_type"'+
                                                   'value="rent"  required> အငှား '+
                                        '</div>'+
                                        '<div class="form-check mt-2 form-check-inline">'+
                                            '<input class="form-check-input" type="radio" name="branch_sch_own_type' + row + '"'+
                                                   'id="branch_sch_own_type" value="use_sharing" required> တွဲဖက်သုံး'+
                                        '</div>'+
                                    '</div>'+
  '</td>';
  cols += '<td><input type="file" class="form-control" name="branch_sch_letter[]"  accept="image/*" id="branch_sch_letter' + row + '" required></td>';
  cols += '<td class="text-center"><button type="button" class="delete btn btn-sm btn-danger m-2" onclick=delRowBranchSchool("'+tbody+'")><li class="fa fa-times"></li></button></td>';
  newRow.append(cols);
  $("table."+tbody).append(newRow);
  
  counter++;
 
}
function delRowBranchSchool(tbody){
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
function addRowBuldingType(tbody){
  $(".tbl_bulding_type_error").hide();
  var newRow = $("<tr>");
  var cols = "";
  var row=$('.'+tbody+' tr').length;
  cols += '<td class="text-center">'+row+'</td>';
  cols += '<td><input type="text" class="form-control" name="bulding_type[]" autocomplete="off" id="bulding_type'+row+'" required></td>';
  cols += '<td><input type="text" class="form-control" name="building_measurement[]" autocomplete="off" id="building_measurement'+row+'" required></td>';
  cols += '<td><input type="number" class="form-control" name="floor_numbers[]" autocomplete="off" id="floor_numbers'+row+'" required></td>';
  cols += '<td><input type="file" class="form-control" name="school_building_attach[]"  accept="image/*" id="school_building_attach'+row+'" required></td>';
  cols += '<td class="text-center"><button type="button" class="delete btn btn-sm btn-danger m-2" onclick=delRowBuldingType("'+tbody+'")><li class="fa fa-times"></li></button></td>';
  newRow.append(cols);
  $("table."+tbody).append(newRow);
  
  counter++;
 
}
function delRowBuldingType(tbody){
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
function addRowClassroom(tbody){
  $(".tbl_classroom_error").hide();
  var newRow = $("<tr>");
  var cols = "";
  var row=$('.'+tbody+' tr').length;
  cols += '<td class="text-center">'+row+'</td>';
  cols += '<td><input type="number" class="form-control" name="classroom_number[]" autocomplete="off" id="classroom_number'+row+'" required></td>';
  cols += '<td><input type="text" class="form-control" name="classroom_measurement[]" autocomplete="off" id="classroom_measurement'+row+'" required></td>';
  cols += '<td><input type="number" class="form-control" name="student_num_limit[]" autocomplete="off" id="student_num_limit'+row+'" required></td>';
  cols += '<td><input type="number" class="form-control" name="air_con[]" autocomplete="off" id="air_con'+row+'" required></td>';
  cols += '<td><input type="file" class="form-control" name="classroom_attach[]"  accept="image/*" id="classroom_attach'+row+'" required></td>';
  cols += '<td class="text-center"><button type="button" class="delete btn btn-sm btn-danger m-2" onclick=delRowClassroom("'+tbody+'")><li class="fa fa-times"></li></button></td>';
  newRow.append(cols);
  $("table."+tbody).append(newRow);
  
  counter++;
 
}
function delRowClassroom(tbody){
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
function addRowToiletType(tbody){
  $(".tbl_toilet_type_error").hide();
  var newRow = $("<tr>");
  var cols = "";
  var row=$('.'+tbody+' tr').length;
  cols += '<td class="text-center">'+row+'</td>';
  cols += '<td><input type="text" class="form-control" name="toilet_type[]" autocomplete="off" id="toilet_type'+row+'" required></td>';
  cols += '<td><input type="number" class="form-control" name="toilet_number[]" autocomplete="off" id="toilet_number'+row+'" required></td>';
  cols += '<td><input type="file" class="form-control" name="toilet_attach[]" accept="image/*" id="toilet_attach'+row+'" required></td>';
  cols += '<td class="text-center"><button type="button" class="delete btn btn-sm btn-danger m-2" onclick=delRowToiletType("'+tbody+'")><li class="fa fa-times"></li></button></td>';
  newRow.append(cols);
  $("table."+tbody).append(newRow);
  
  counter++;
 
}
function delRowToiletType(tbody){
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


function addRowManageRoomNumber(tbody){
  $(".tbl_manage_room_numbers_error").hide();
  var newRow = $("<tr>");
  var cols = "";
  var row=$('.'+tbody+' tr').length;
  cols += '<td class="text-center">'+row+'</td>';
  cols += '<td><input type="number" class="form-control" name="manage_room_numbers[]" autocomplete="off" id="manage_room_numbers'+row+'" required></td>';
  cols += '<td><input type="text" class="form-control" name="manage_room_measurement[]" autocomplete="off" id="manage_room_measurement'+row+'" required/></td>';
  cols += '<td><input type="file" class="form-control" name="manage_room_attach[]"  accept="image/*" id="manage_room_attach'+row+'" required></td>';
  cols += '<td class="text-center"><button type="button" class="delete btn btn-sm btn-danger m-2" onclick=delRowManageRoomNumber("'+tbody+'")><li class="fa fa-times"></li></button></td>';
  newRow.append(cols);
  $("table."+tbody).append(newRow);
  
  counter++;
 
}
function delRowManageRoomNumber(tbody){
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
function origanzationCheck(radio){
  if (radio.value == "တည်ဆဲဥပဒေတစ်ရပ်ရပ်နှင့်အညီဖွဲ့စည်းထားရှိသောလုပ်ငန်းအဖွဲ့အစည်း") {
    $('.origanzation').css('display','block');
  }else {
    $('.origanzation').css('display','none');
  }
}
function addInputFile(divname, diventry) {
  var controlForm = $('.' + divname + ':first'),
      currentEntry = $('.btn-add').parents('.' + diventry + ':first'),
      newEntry = $(currentEntry.clone()).appendTo(controlForm);
  newEntry.find('input').val('');
  controlForm.find('.' + diventry + ':not(:last) .btn-add')
      .removeClass('btn-add').addClass('btn-remove')
      .removeClass('btn-primary').addClass('btn-danger')
      .attr("onclick", "delInputFile('" + diventry + "')")
      .html('<li class="fa fa-times"></li>');


}
function delInputFile(diventry){
  $('.btn-remove').parents('.'+diventry+':first').remove();
}
function loadTeacherById(row){
  var id=$('#teacher_registration_no'+row).val();
  $.ajax({
    type : 'GET',
    url : BACKEND_URL+"/teacher/"+id,
    success: function(result){
      console.log(result)
      var subject=[];
      
        $.each(result.data, function( index, value ) {
          document.getElementById("tbl_teacher_list_biography_body").rows[row].cells[2].children[0].value=value.name_mm;
          document.getElementById("tbl_teacher_list_biography_body").rows[row].cells[2].children[0].readOnly = true;
          document.getElementById("tbl_teacher_list_biography_body").rows[row].cells[3].children[0].value=value.nrc_state_region+'/'+value.nrc_township+'/'+value.nrc_number;
          document.getElementById("tbl_teacher_list_biography_body").rows[row].cells[3].children[0].readOnly = true;
          loadEductaionHistoryByTeacher(value.student_info.id,row);
          
          if(value.certificates.search(/[\'"[\]']+/g)==0){
            loadCertificates(value.certificates.replace(/[\'"[\]']+/g, ''),row);
            
          }else{
            loadCertificates(value.certificates,row);
            
          }
          if(value.diplomas.search(/[\'"[\]']+/g)==0){
            loadCertificates(value.diplomas.replace(/[\'"[\]']+/g, ''),row);
           
          }else{
            loadCertificates(value.diplomas,row);
          }
          document.getElementById("tbl_teacher_list_biography_body").rows[row].cells[6].children[0].value=value.phone;
          document.getElementById("tbl_teacher_list_biography_body").rows[row].cells[6].children[0].readOnly = true;
          document.getElementById("tbl_teacher_list_biography_body").rows[row].cells[7].children[0].value=value.email;
          document.getElementById("tbl_teacher_list_biography_body").rows[row].cells[7].children[0].readOnly = true;
          document.getElementById("tbl_teacher_list_biography_body").rows[row].cells[8].children[0].innerHTML=0;
        });
    }
  });
}
function loadEductaionHistoryByTeacher(student_info_id,row){
  var education=[];
  
  $.ajax({
    type : 'GET',
    url : BACKEND_URL+"/getEducationHistory/"+student_info_id,
    success: function(result){
        $.each(result.data, function( index, value ) {
          
          education.push(value.university_name)
          
        });
        if(education.length!=0){
          document.getElementById("tbl_teacher_list_biography_body").rows[row].cells[4].children[0].value=education.join();
          document.getElementById("tbl_teacher_list_biography_body").rows[row].cells[4].children[0].readOnly = true;
        }else{
          document.getElementById("tbl_teacher_list_biography_body").rows[row].cells[4].children[0].value="null";
        document.getElementById("tbl_teacher_list_biography_body").rows[row].cells[4].children[0].readOnly = true;
        }
        
    }
  });
  
}
function loadCertificates(name,row){
  var name=name.split(',');
  //return name;
  var subject=[];
 
  $.each(name, function( index, id ){
    $.ajax({
        url : BACKEND_URL+"/getSubject",
        data: 'subject_id='+id,
        type: 'post',
        success: function (result) {
            $.each(result.data, function( index, value ){
                   
                        $.each(value, function(key, val){
                          subject.push(index.toUpperCase().replace("_", " ")+":"+val.subject_name);
                          document.getElementById("tbl_teacher_list_biography_body").rows[row].cells[5].children[0].value=subject.join();
                          document.getElementById("tbl_teacher_list_biography_body").rows[row].cells[5].children[0].readOnly = true;
                        });
                        
            });
        },
        error: function (result) {
        },
    });
});
}