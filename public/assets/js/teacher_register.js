var counter = 0;
function ConfirmSubmit(){
  var radio = document.getElementById("submit_confirm");
  if (radio.checked == true){
      document.getElementById("submit_btn").disabled= false;
  }
  else{
  document.getElementById("submit_btn").disabled = true;
  }
}

function addRowEducation(tbody){
    $(".degree").hide();
    var newRow = $("<tr>");
    var cols = "";
    //var row=$('.'+tbody+' tr').length;
    cols += '<td><input type="text" class="form-control" value="" /></td>';
    cols += '<td><input type="text" name="degrees[]" class="form-control"  autocomplete="off" required/></td>';
    cols += '<td><input type="file" name="degrees_certificates[]" class="form-control" id="certificate"  required=""></td>';
    cols += '<td class="text-center"><button type="button" class="delete btn btn-sm btn-danger m-2" onclick=delRowEducation("'+tbody+'")><li class="fa fa-times"></li></button></td>';
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

function delRowEducation(tbody){
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

function addRowSubject(tbody){

    var newRow = $("<tr>");
    var cols = "";
    //var row=$('.'+tbody+' tr').length;
    cols += '<td><input type="text" class="form-control" value="" /></td>';
    cols += '<td><input type="text" class="form-control" name="certificates[]" placeholder="လက်မှတ်ရ ပြည်သူ့စာရင်းကိုင်သင်တန်း" required/></td>';
    cols += '<td class="text-center"><button type="button" class="delete btn btn-sm btn-danger m-2" onclick=delRowSubject("'+tbody+'")><li class="fa fa-times"></li></button></td>';
    newRow.append(cols);
    $("table."+tbody).append(newRow);
    // order numer to be serial
    $("."+tbody+" tbody tr").each(function(index,row){
      $(row).find("td:first-child input").val(index + 1);
        $(row).find("td:first-child input").css('text-align','center');
        $(row).find("td:first-child input").css('border','none');
    });
    counter++;
    var certificate = $('.tbl_certificate_body tr').length;
    var diploma = $('.tbl_diploma_body tr').length;
    if(certificate && diploma){
        $(".certificate").hide();
    }
}

function addRowDipSubject(tbody){

    var newRow = $("<tr>");
    var cols = "";
    //var row=$('.'+tbody+' tr').length;
    cols += '<td><input type="text" class="form-control" value="" /></td>';
    cols += '<td><input type="text" class="form-control" name="diplomas[]" placeholder="လက်မှတ်ရ ပြည်သူ့စာရင်းကိုင်သင်တန်း" required/></td>';
    cols += '<td class="text-center"><button type="button" class="delete btn btn-sm btn-danger m-2" onclick=delRowSubject("'+tbody+'")><li class="fa fa-times"></li></button></td>';
    newRow.append(cols);
    $("table."+tbody).append(newRow);
    // order numer to be serial
    $("."+tbody+" tbody tr").each(function(index,row){
      $(row).find("td:first-child input").val(index + 1);
        $(row).find("td:first-child input").css('text-align','center');
        $(row).find("td:first-child input").css('border','none');
    });
    counter++;
    var certificate = $('.tbl_certificate_body tr').length;
    var diploma = $('.tbl_diploma_body tr').length;
    if(certificate && diploma){
        $(".certificate").hide();
    }
}

function delRowSubject(tbody){
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

$( "#teacher_submit" ).click(function() {
    
    if($("#teacher_register_form").validate({
        rules:{
            email : "required",
            password : "required",
            confirm_password : {
                required : true,
                equalTo : "#password"
            },
            profile_photo : "required",
            name_mm : "required",
            name_eng : "required",
            nrc_state_region : "required",
            nrc_township : "required",
            nrc_citizen : "required",
            nrc_number : {
                required : true,
            },
            nrc_front : "required",
            nrc_back : "required",
            father_name_mm : "required",
            father_name_eng : "required",
            race : "required",
            religion : "required",
            date_of_birth : "required",
            phone : "required",
            current_address : "required",
            address : "required",
            current_job : "required",
            position : "required",
            department : "required",
            organization : "required",
            company_name : "required",
            salary : "required",
            office_address : "required",
            gov_staff : "required",
            recommend_letter : {
                required : "#gov_staff:checked"
            },
            selected_school_id : "required",
            exp_desc : "required",
            
        },
        messages:{
            email : "Please enter your email",
            password : "Please provide your password",
            confirm_password : {
                required : "Please provide your password",
                equalTo : "Please enter the same password as above"
            },
            profile_photo : "Upload photo",
            name_mm : "Please enter your name",
            name_eng : "Please enter your name in english",
            nrc_state_region : "Please select one",
            nrc_township : "Please select one",
            nrc_citizen : "Please select one",
            nrc_number : {
                required : "Please enter your nrc number",
            },
            nrc_front : "Please upload nrc photo (front)",
            nrc_back : "Please upload nrc photo (front)",
            father_name_mm : "Please enter your father name",
            father_name_eng : "Please enter your father name in english",
            race : "Please enter your race",
            religion : "Please enter your religion",
            date_of_birth : "Select your date of birth",
            phone : "Please enter your phone number",
            current_address : "Please enter your current address",
            address : "Please enter your address",
            current_job : "Please enter your current job",
            position : "Please enter your position",
            department : "Please enter your department",
            organization : "Please enter your organization",
            company_name : "Please enter your company name",
            salary : "Please enter your salary",
            office_address : "Please enter your office address",
            gov_staff : "Please select one",
            recommend_letter : {
                required : "Please upload recommend letter"
            },
            selected_school_id : "Please select one",
            exp_desc : "သင်ကြားမည့်ဘာသာရပ်အတွက် သင်ကြားမှုနှင့် အခြားအတွေ့အကြုံများ ထည့်ပါ",
            

        },
        
    })){//allFill('#teacher_register_form')
        var send_data = new FormData();
        send_data.append('email',$("input[name='email']").val());
        send_data.append('nrc_state_region',$("#nrc_state_region").val());
        send_data.append('nrc_township',$("#nrc_township").val());
        send_data.append('nrc_citizen',$("#nrc_citizen").val());
        send_data.append('nrc_number',$("#nrc_number").val());
        
        $.ajax({
            url: BACKEND_URL+"/unique_email",
            type: 'post',
            data:send_data,
            contentType: false,
            processData: false,
            success: function(result){
                if(result.email!=null){
                    Swal.fire("Email has been used, please check again!");
                }
                else if(result.nrc!=null){
                    Swal.fire("NRC has been used, please check again!");
                }
                else if(result.email==null && result.nrc==null){                    
                    $('#teacherModal').modal('show');
                    send_email();                   
                }
            }
        });
        // $('#teacherModal').modal('show');
        // send_email();
    }
});

// teacher
$("#teacher_modal").click(function() {
    $('#teacherpaymentModal').modal('show');
});

$('#cash_img').click(function() {
    $('#teacher_btn').prop('disabled', false);
});

$('#cb_img').click(function() {
    $('#teacher_btn').prop('disabled', true);
});

$('#mpu_img').click(function() {
    $('#teacher_btn').prop('disabled', true);
});
$('#teacher_btn').prop('disabled', true);

$('#teacher_btn').click(function () {
    setTimeout(function () {
        $('#teacherpaymentModal').modal('hide');
    }, 1000);
});

function check_email_teacher()
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
        createTeacherRegister();
        $('#teacherModal').modal('hide');
    }
}

function teacherPaymentSubmit(){
    var student = JSON.parse(localStorage.getItem('studentinfo'));
    if(student!=null){
        $.ajax({
            url: BACKEND_URL + "/approve_teacher/" + student.id,
            type: 'patch',
            success: function (data) {
                    successMessage("Your payment is successfully");
                    location.href = FRONTEND_URL + "/";
                },
                error:function (message){
                }
            })
    }
    
}

function checkPaymentTeacher(){
    var student =JSON.parse(localStorage.getItem("studentinfo"));
    if(student!=null){
        $.ajax({
            url: BACKEND_URL+"/check_payment_teacher/"+student.id,
            type: 'GET',
            success: function(data){
                // console.log(data);
              var form_data = data;
              form_data.forEach(function(element){
                console.log(element.payment_method)
                    if(element.payment_method != null){
                        $('#teacher_modal').prop('disabled', true);
                        loadRenewTeacher();
                    }else{
                        $('#teacher_modal').prop('disabled', false);
                    }
              })
            }
        });
    }
    
}

function createTeacherRegister(){
    
    if($("input[name=password]").val()!=$("input[name=confirm_password]").val())
    {
        alert("Your password and confirm password do not match!");
        return;
    }
    let formData = new FormData($( "#teacher_register_form" )[0]);
    

      show_loader()

    $.ajax({
        type: "POST",
        data: formData,
        url: BACKEND_URL + "/teacher",
        // async: false,
        // cache: false,
        contentType: false,
        processData: false,
        success: function (data) {
            EasyLoading.hide();
            successMessage(data.message);
            location.href=FRONTEND_URL+'/';

            //resetForm("#teacher_register_form");
            //$(".tbl_degree_body").empty();
            //$(".tbl_certificate_body").empty();
            //$(".tbl_diploma_body").empty();
        },
        error: function (result) {
        },
    });

}

function teacher_reg_feedback(){
    var student =JSON.parse(localStorage.getItem("studentinfo"));
   if(student!=null){
    $.ajax({
        url: BACKEND_URL+"/getTeacherStatus/"+student.id,
        type: 'GET',
        success: function(data){
           
          var form_data = data;
          form_data.forEach(function(element){
            
                if(element.approve_reject_status == 0){
                    
                    $('#teacher_pending').css('display','block');
                    $('#teacher_approve').css('display','none');
                    $('.register-btn').css('display','none');
                    $('.payment-btn').css('display','none');
                }else if(element.approve_reject_status == 1){
                    $('#teacher_approve').css('display','block');
                    $('.payment-btn').css('display','block');
                    $('#teacher_pending').css('display','none');
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
function loadRenewTeacher(){
    var student =JSON.parse(localStorage.getItem("studentinfo"));
    
    if(student!=null){
        $.ajax({
            type : 'GET',
            url : BACKEND_URL+"/teacher/"+student.teacher_id,
            success: function (result) {
                var teacher=result.data;
                
                if(teacher.approve_reject_status==1){
                  $('#teacher_initial').css('display','none');
                  $('#teacher_approve').css('display','none');
                  $('#teacher_renew').css('display','block');
                        var accept=new Date(teacher.renew_date);
                        var month=accept.getMonth()+1;
                        var year=accept.getFullYear();
                        var y=year+1;
                        var now=new Date();
                        $('input[name=email]').val(teacher.email);
                        $('input[name=name_mm]').val(teacher.name_mm);
                        $('input[name=name_eng]').val(teacher.name_eng);
                        $('input[name=father_name_mm]').val(teacher.father_name_mm);
                        $('input[name=father_name_eng]').val(teacher.father_name_eng);
                        $('input[name=nrc_state_region]').val(teacher.nrc_state_region);
                        $('input[name=nrc_township]').val(teacher.nrc_township);
                        $('input[name=nrc_citizen]').val(teacher.nrc_citizen);
                        $('input[name=nrc_number]').val(teacher.nrc_number);
                        $('input[name=phone_number]').val(teacher.phone);
                        $('textarea[name=exp_desc]').val(teacher.exp_desc);
                        $('#previewImg').attr("src",BASE_URL+teacher.image);
                        $('#hidden_profile').val(teacher.image);
                        $('#hidden_nrc_front').val(teacher.nrc_front);
                        $('#hidden_nrc_back').val(teacher.nrc_back);
                        $("#nrc_front_img").attr("src",BASE_URL+teacher.nrc_front);
                        $("#nrc_back_img").attr("src",BASE_URL+teacher.nrc_back);
                        var degrees = teacher.degrees.split(',');
                        var certificates =teacher.certificates.split(',');
                        var diplomas = teacher.diplomas.split(',');
                        $.each(degrees, function( index, value ) {
                            var tr = "<tr>";
                            tr += `<td><input type='text' class='form-control'  value=${ index += 1 } />  </td>`;
                            tr += `<td><input type='text' class='form-control' name='degrees[]' value=${ value } />  </td>`;
                            tr +=`<td class="text-center"><button type="button" disabled class="delete btn btn-sm btn-danger m-2" onclick=delRowEducation("tbl_degree_body")><li class="fa fa-times"></li></button></td>`;
                            tr += "</tr>";
                            $("#tbl_degree_body").append(tr);
                        });
                        if(teacher.gov_employee == 1){
                          $('input:radio[id=gov_employee1]').attr('checked',true);
                          $('input[id=gov_employee2]').attr('disabled', 'disabled');
                      }
                      else{
                          $('input:radio[id=gov_employee2]').attr('checked',true);
                          $('input[id=gov_employee1]').attr('disabled', 'disabled');
                      }
                        $.each(certificates, function( index, value ) {
                          var tr = "<tr>";
                          tr += `<td><input type='text' class='form-control' value=${ index += 1 } /> </td>`;
                          tr += `<td><input type='text' class='form-control' name='certificates[]' value=${ value } /></td>`;
                          tr +=`<td class="text-center"><button type="button" disabled class="delete btn btn-sm btn-danger m-2" onclick=delRowEducation("tbl_degree_body")><li class="fa fa-times"></li></button></td>`;
                          tr += "</tr>";
                          $("#tbl_certificate_body").append(tr);
                        });
                        $.each(diplomas, function( index, value ) {
                            var tr = "<tr>";
                            tr += `<td><input type='text' class='form-control' value=${ index += 1 } /> </td>`;
                            tr += `<td> <input type='text' class='form-control' name='diplomas[]' value=${ value } /></td>`;
                            tr +=`<td class="text-center"><button type="button" disabled class="delete btn btn-sm btn-danger m-2" onclick=delRowEducation("tbl_degree_body")><li class="fa fa-times"></li></button></td>`;
                            tr += "</tr>";
                            $("#tbl_diploma_body").append(tr);
                        });
                        $('#regno').val(teacher.id);
                        $('#register_date').val(teacher.renew_date);
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
                  $('#teacher_initial').css('display','block');
                  $('#teacher_renew').css('display','none');
                }
        
            },
            error: function (result) {
            },
        });
    }
  
}
function renewTeacher(){
  var send_data=new FormData($( "#teacher_renew_form" )[0]);
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
  var id=localStorage.getItem("teacher_id");
  send_data.append('_method', 'PATCH');
  show_loader();
    $.ajax({
        url: BACKEND_URL+'/teacher/'+id,
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
function selectStaff(value){
    if(value==1){
        $('#rec_letter').css('display','block');
    }else{
        $('#rec_letter').css('display','none');
    }
}
function ConfirmSubmitTeacher(){
    var checkbox = document.getElementById("submit_confirm");
    if (checkbox.checked == true) {
        $('.submit_btn').prop("disabled",false);
    } else {
        $('.submit_btn').prop("disabled",true);
    }
}
function loadSubject(course_id,select){
    var select = document.getElementById(select);
    $.ajax({
        type : 'GET',
        url : BACKEND_URL+"/getSubject/"+course_id,
        success: function (result) {
            console.log(result.data);
            $.each(result.data, function( index, value ){
                var option = document.createElement('option');
                option.text = value.subject_name;
                option.value = value.subject_name;
                select.add(option,0);
            });
        },
        error: function (result) {
        },
    });
}