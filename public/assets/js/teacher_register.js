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
    var row=$('.'+tbody+' tr').length;
    cols += '<td class="text-center"><input type="number" class="form-control" value="" /></td>';
    cols += '<td><input type="text" name="degrees[]" class="form-control" id="degrees'+row+'" autocomplete="off" required></td>';
    cols += '<td><input type="file" name="degrees_certificates[]" class="form-control" id="degrees_certificates'+row+'" required></td>';
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



// teacher
$("#teacher_modal").click(function() {
    $('#teacherpaymentModal').modal('show');
});
$("#renewteacher_modal").click(function() {
    $('#renewteacherpaymentModal').modal('show');
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
    
    var current_date;
    var invoice_no;
    
    $.ajax({
        url: BACKEND_URL+"/teacher",
        type: 'GET',
        success: function(result){
            var today = new Date();
            var date = today.getFullYear()+'-'+addZero(today.getMonth()+1)+'-'+addZero(today.getDate());
            var time = addZero(today.getHours()) + ":" + addZero(today.getMinutes()) + ":" + addZero(today.getSeconds());
            current_date=date+' '+time;
            $.each(result.count_invoice_no, function( key, val ){
                
                    if(val.count_invoice_no==0){
                        var count_invoice=val.count_invoice_no+1;
                        var str = "" + count_invoice;
                        var pad = "000"
                        var ans = pad.substring(0, pad.length - str.length) + str
                        invoice_no='T-'+ans;
                    }else{
                        var count_invoice=val.count_invoice_no+1;
                        var str = "" + count_invoice;
                                    var pad = "000"
                                    var ans = pad.substring(0, pad.length - str.length) + str
                                    invoice_no='T-'+ans;
                        // $.each(result.data, function( index, value ){
                            
                        //     if(value.from_valid_date==null){
                                
                        //             if(current_date > value.from_valid_date){
                        //                 var str = "" + count_invoice;
                        //                 var pad = "000"
                        //                 var ans = pad.substring(0, pad.length - str.length) + str
                        //                 invoice_no='T-'+ans;
                                        
                        //             }
                        //             console.log(invoice_no)
                        //     }else{
                                
                        //         if(current_date > value.from_valid_date){
                        //             var str = "" + count_invoice;
                        //             var pad = "000"
                        //             var ans = pad.substring(0, pad.length - str.length) + str
                        //             invoice_no='T-'+ans;
                                    
                        //         }
                                
                        //     }
                            
                        // })
                    }
                
                
            })
           
            $.ajax({
                url: BACKEND_URL + "/approve_teacher" ,
                type: 'patch',
                data: 'id='+student.teacher_id+"&invoice_no="+invoice_no+"&current_date="+current_date,
                success: function (data) {
                        successMessage("Your payment is successfully");
                        location.href = FRONTEND_URL + "/";
                    },
                    error:function (message){
                    }
            })
        }
    })
    
    
}
function renewteacherPaymentSubmit(){
    $.ajax({
            url: BACKEND_URL + "/approveRenewTeacher" ,
            type: 'patch',
            data: 'id='+$('#teacher_id').val(),
            success: function (data) {
                    successMessage("Your payment is successfully");
                    location.href = FRONTEND_URL + "/";
                },
                error:function (message){
                }
        })
    
}
function addZero(i) {
    if (i < 10) {
      i = "0" + i;
    }
    return i;
}
function checkPaymentTeacher(){
    var student =JSON.parse(localStorage.getItem("studentinfo"));
    if(student!=null){
        $.ajax({
            url: BACKEND_URL+"/getTeacherStatus/"+student.id,//check_payment_teacher/"+student.teacher_id//getTeacher
            type: 'GET',
            success: function(result){
                var data=result.pop();
                var invoice=data.invoice.pop();
                var teacher=data.teacher;
                
                    if(teacher.initial_status==0){
                        if(teacher.offline_user!=1){
                            if(invoice.status != "AP"){//teacher.payment_method != null
                                //$('#teacher_modal').prop('disabled', true);
                                loadRenewTeacher();
                                
                                
                            }else{
                                //$('#teacher_modal').prop('disabled', false);
                                loadRenewTeacher();
                            }
                        }else{
                            loadRenewTeacher();
                        }
                        
                    }else if(teacher.initial_status==1){
                        //var new_renew_teacher=teacher_renew.pop();
                        $('#teacher_id').val(teacher.id);
                        if(invoice.status != "AP"){
                            //$('#renewteacher_modal').prop('disabled', true);
                            loadRenewTeacher();
                        }else{
                            loadRenewTeacher();
                            //$('#renewteacher_modal').prop('disabled', false);
                        }
                                
                    }
                    
              
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
    if($('#offline_user').val()){
        formData.append('offline_user',$('#offline_user').val());
    }
    formData.append('student_info_id',$('#student_info_id').val());
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
        url: BACKEND_URL+"/getTeacher/"+student.id,//getTeacherStatus
        type: 'GET',
        success: function(result){
           
        //   var form_data = data;
        //   form_data.forEach(function(element){
                //var teacher_data=element.teacher;
                //var teacher_renew=element.teacher_renew;
                var teacher=result.data.pop();
                
                    if(teacher.approve_reject_status == 0){
                    
                        $('#teacher_pending').css('display','block');
                        $('#teacher_approve').css('display','none');
                        $('.register-btn').css('display','none');
                        $('.payment-btn').css('display','none');
                        $('.update-btn').css('display','none');
                    }else if(teacher.approve_reject_status == 1){
                            $('#teacher_approve').css('display','block');
                            $('#teacher_pending').css('display','none');
                            $('.register-btn').css({'display':'none'});
                            $('.register-btn').removeClass('mt-4');
                            $('.update-btn').css('display','none');
                        if(teacher.initial_status == 0){
                            
                            $('.payment-btn').css('display','block');
                            
                        }else if(teacher.initial_status == 1){
                            
                            $('.payment-btn').css('display','none');
                            $('.renew-payment-btn').css('display','block');
                        }
                        
                        
                    }
                    else{
                        if(teacher_data.initial_status!=2){
                            $('.status-reject').css('display','block');
                            $('.reject-reason').append(teacher_data.reason);
                            $('.register-btn').css('display','none');
                            $('.payment-btn').css('display','none');
                            $('.update-btn').css('display','block');
                        }
                        
                    }
                
                
          
        }
    });
   }
    
}
function loadRenewTeacher(){
    var student =JSON.parse(localStorage.getItem("studentinfo"));
    
    if(student!=null){
        $.ajax({
            type : 'GET',
            url : BACKEND_URL+"/getTeacher/"+student.id,//teacher
            success: function (result) {
                var teacher=result.data.pop();
                
                //teacher_data.forEach(function(teacher){
                    
                        if(teacher.approve_reject_status==1){
                            $('#teacher_initial').hide();
                            $('#teacher_approve').hide();
                            $('#teacher_renew').show();
                                  
                                  $('input[name=email]').val(teacher.email);
                                  $('input[name=name_mm]').val(teacher.name_mm);
                                  $('input[name=name_eng]').val(teacher.name_eng);
                                  $('input[name=father_name_mm]').val(teacher.father_name_mm);
                                  $('input[name=father_name_eng]').val(teacher.father_name_eng);
                                  $('input[name=nrc_state_region]').val(teacher.nrc_state_region);
                                  $('input[name=nrc_township]').val(teacher.nrc_township);
                                  $('input[name=nrc_citizen]').val(teacher.nrc_citizen);
                                  $('input[name=nrc_number]').val(teacher.nrc_number);
                                  $('input[name=phone]').val(teacher.phone);
                                  $('textarea[name=exp_desc]').val(teacher.exp_desc);
                                  $("input[id=exp_desc]").val(teacher.exp_desc);
                                 
                                  //$('#previewImg').attr("src",BASE_URL+teacher.image);
                                  $('#hidden_profile').val(teacher.image);
                                  if(teacher.offline_user==1){
                                    //$('input[name=teacher_card]').prop('disabled', true);
                                    $('input[name=teacher_card]').prop('required', false);
                                    $('#from_valid_date').val(teacher.from_valid_date);
                                  }
                                  
                                  $('#hschool_name').val(teacher.school_name);
                                  if(teacher.nrc_front==null){
                                    $("#nrc_front_img").attr("src",BASE_URL+result.data[0].nrc_front);
                                    $('#hidden_nrc_front').val(result.data[0].nrc_front);
                                  }else{
                                    $("#nrc_front_img").attr("src",BASE_URL+teacher.nrc_front);
                                    $('#hidden_nrc_front').val(teacher.nrc_front);
                                  }
                                  if(teacher.nrc_back==null){
                                    $("#nrc_back_img").attr("src",BASE_URL+result.data[0].nrc_back);
                                    $('#hidden_nrc_back').val(result.data[0].nrc_back);
                                  }else{
                                    $("#nrc_back_img").attr("src",BASE_URL+teacher.nrc_back);
                                    $('#hidden_nrc_back').val(teacher.nrc_back);
                                  }
                                  $('#t_code').val(teacher.t_code);
                                  $('#regno').val(teacher.regno);
                                  if(teacher.initial_status==0){
                                    loadEductaionHistory(teacher.id,'tbl_degree',teacher.initial_status);
                                  }else{
                                    loadEductaionHistory(teacher.student_info_id,'tbl_degree',teacher.initial_status);
                                  }
                                    if(teacher.certificates.search(/[\'"[\]']+/g)==0){
                                        //loadCertificates(teacher.certificates.replace(/[\'"[\]']+/g, ''),"selected_cpa_subject");
                                        //loadCertificates(teacher.diplomas.replace(/[\'"[\]']+/g, ''),"selected_da_subject");
                                    
                                    }else{
                                        //loadCertificates(teacher.certificates,"selected_cpa_subject");
                                        //loadCertificates(teacher.diplomas,"selected_da_subject");
                                    }
                                  
                                
                                $("input[name=race]").val(teacher.race);
                                $("input[name=religion]").val(teacher.religion);
                                $("input[name=date_of_birth]").val(teacher.date_of_birth);
                                $("textarea[name=current_address]").val(teacher.current_address);
                                $("textarea[name=eng_current_address]").val(teacher.eng_current_address);
                                $("input[name=address]").val(teacher.address);
                                $("input[id=position]").val(teacher.position);
                                $("input[id=department]").val(teacher.department);
                                $("input[id=organization]").val(teacher.organization);
                                
                                $('#hinitial_status').val(1);
                                
                                  $('#student_info_id').val(teacher.student_info_id);
                                  $('#teacher_id').val(teacher.id);
                                  if(teacher.initial_status==0){
                                    var accept=new Date(teacher.from_valid_date);
                                    
                                    
                                    
                                  }else if(teacher.initial_status==1){
                                    var accept=new Date(teacher.renew_date);
                                    
                                    
                                  }
                                  var month=accept.getMonth()+1;
                                  var year=accept.getFullYear();
                                  var y=year+1;
                                  var now=new Date();
                                  
                                   var current_date=(now.getMonth()+1)+'/'+now.getDate()+'/'+now.getFullYear();
                                   $('#register_date').val("Nov-1-"+now.getFullYear()+" to Dec-31-"+now.getFullYear());
                                if((now.getFullYear()==accept.getFullYear() && month=='11') || (now.getFullYear()==accept.getFullYear() && month=='12')){
                                    $("#message").val("You can renew your form!");
                                    $('.renew_submit').prop('disabled', true);
                                    $('#submit_confirm').prop('disabled', false);
                                }else if(((now.getMonth()+1)=='10') || ((now.getMonth()+1)=='11') || ((now.getMonth()+1)=='12')){
                                    $("#message").val("You can renew your form!");//month=10 for test
                                    $('.renew_submit').prop('disabled', true);
                                    $('#submit_confirm').prop('disabled', false);
                                }else if(((now.getMonth()+1) >= '1')){
                                    $('#message').val("Renew form month is expired! You can renew in November,December "+now.getFullYear());
                                    $('.renew_submit').prop('disabled', true);
                                    $('#submit_confirm').prop('disabled', true);
                                }
                                else{
                                    $('#message').val("You are verified!");
                                    $('.renew_submit').prop('disabled', true);
                                    $('#submit_confirm').prop('disabled', true);
                                }
                                   
                                    // var period_date=teacher.payment_date.split('-');
                                    // var period=period_date[2]+'-'+period_date[1]+'-'+period_date[0];
                                    //$('#register_date').val(period+" to 31-12-"+now.getFullYear());
                                    
                                //   if((now.getFullYear()==y && (now.getMonth()+1)==month) || now.getFullYear() >year){
                                //       $("#message").val("Your registeration is expired! You need to submit new registeration form again.");
                                //       $('.renew_submit').prop('disabled', true);
                                //       $('#submit_confirm').prop('disabled', false);
                  
                                //   }else
                                   
                                //   if(teacher.school_id!=null){
                                //     $('input:radio[id=school_staff1]').attr('checked',true);
                                //     $('.private_type').css('display','block');
                                //     $('.individual_type').css('display','none');
                                //   }else{
                                //     $('input:radio[id=school_staff2]').attr('checked',true);
                                //     $('.individual_type').css('display','block');
                                //     $('.private_type').css('display','none');
                                //     $('input[name=school_name]').val(teacher.school_name);
                                //   }
                        }else{
                            // $('#teacher_initial').css('display','block');
                            // $('#teacher_renew').css('display','none');
                            $('#teacher_initial').show();
                            //$('#teacher_approve').hide();
                            $('#teacher_renew').hide();
                            
                        }
                   
                        // var new_teacher=teacher.teacher_renew.pop();
                        
                        // if(new_teacher.approve_reject_status==1){
                        //     $('#teacher_initial').css('display','none');
                        //     $('#teacher_approve').css('display','none');
                        //     $('#teacher_renew').css('display','block');
                                  
                        //           $('input[name=email]').val(new_teacher.email);
                        //           $('input[name=name_mm]').val(new_teacher.name_mm);
                        //           $('input[name=name_eng]').val(new_teacher.name_eng);
                        //           $('input[name=father_name_mm]').val(new_teacher.father_name_mm);
                        //           $('input[name=father_name_eng]').val(new_teacher.father_name_eng);
                        //           $('input[name=nrc_state_region]').val(new_teacher.nrc_state_region);
                        //           $('input[name=nrc_township]').val(new_teacher.nrc_township);
                        //           $('input[name=nrc_citizen]').val(new_teacher.nrc_citizen);
                        //           $('input[name=nrc_number]').val(new_teacher.nrc_number);
                        //           $('input[name=phone]').val(new_teacher.phone);
                                  
                        //           $('#teacher_id').val(new_teacher.teacher_id);
                        //           $('#student_info_id').val(new_teacher.student_info_id);
                        //           //$('#previewImg').attr("src",BASE_URL+teacher.image);
                        //           $('#hidden_profile').val(teacher.image);
                        //           $('#hidden_nrc_front').val(teacher.nrc_front);
                        //           $('#hidden_nrc_back').val(teacher.nrc_back);
                        //           $('#hschool_name').val(teacher.school_name);
                        //           $("#nrc_front_img").attr("src",BASE_URL+teacher.nrc_front);
                        //           $("#nrc_back_img").attr("src",BASE_URL+teacher.nrc_back);
                        //           loadEductaionHistory(teacher.id,'tbl_degree');
                        //             if(teacher.certificates.search(/[\'"[\]']+/g)==0){
                        //                 //loadCertificates(teacher.certificates.replace(/[\'"[\]']+/g, ''),"selected_cpa_subject");
                        //                 //loadCertificates(teacher.diplomas.replace(/[\'"[\]']+/g, ''),"selected_da_subject");
                                    
                        //             }else{
                        //                 //loadCertificates(teacher.certificates,"selected_cpa_subject");
                        //                 //loadCertificates(teacher.diplomas,"selected_da_subject");
                        //             }
                                  
                                
                        //         $("input[name=race]").val(teacher.race);
                        //         $("input[name=religion]").val(teacher.religion);
                        //         $("input[name=date_of_birth]").val(teacher.date_of_birth);
                        //         $("input[name=current_address]").val(teacher.address);
                        //         $("input[name=address]").val(teacher.current_address);
                        //         $("input[id=position]").val(teacher.position);
                        //         $("input[id=department]").val(teacher.department);
                        //         $("input[id=organization]").val(teacher.organization);
                        //         $("input[id=gov_employee]").val(teacher.gov_employee);
                        //           if(teacher.gov_employee == 1){
                        //             $('input:radio[id=gov_employee1]').attr('checked',true);
                        //             $('#rec_letter').css('display','block');
                        //             if(teacher.recommend_letter!=""){
                        //                 $(".recommend_letter").append(`<a href='${BASE_URL+teacher.recommend_letter}' style='display:block; font-size:16px;text-decoration: none;' target='_blank'>View File</a>`);
                        //             }
                        //             $('#hrecommend_letter').val(teacher.recommend_letter);
                        //         }
                        //         else{
                        //             $('input:radio[id=gov_employee2]').attr('checked',true);
                        //             $('#rec_letter').css('display','none');
                        //         }
                        //         $('#hinitial_status').val(1);
                                
                        //           $('#regno').val(new_teacher.regno);
                        //             var accept=new Date(new_teacher.renew_date);
                        //             var month=accept.getMonth()+1;
                        //             var year=accept.getFullYear();
                        //             var y=year+1;
                        //             var now=new Date();
                        //            var current_date=(now.getMonth()+1)+'/'+now.getDate()+'/'+now.getFullYear();
                                   
                        //             // var period_date=teacher.renew_date.split('-');
                        //             // var period=period_date[2]+'-'+period_date[1]+'-'+period_date[0];
                        //             //$('#register_date').val(period+" to 31-12-"+now.getFullYear());
                        //             $('#register_date').val("Nov-1-"+now.getFullYear()+" to Dec-31-"+now.getFullYear());
                        //         //   if((now.getFullYear()==y && (now.getMonth()+1)==month) || now.getFullYear() >year){
                        //         //       $("#message").val("Your registeration is expired! You need to submit new registeration form again.");
                        //         //       $('.renew_submit').prop('disabled', true);
                        //         //       $('#submit_confirm').prop('disabled', false);
                  
                        //         //   }else
                        //            if((now.getFullYear()==accept.getFullYear() && month=='11') || (now.getFullYear()==accept.getFullYear() && month=='12')){
                        //               $("#message").val("Your renew form  can submit!");
                        //               $('.renew_submit').prop('disabled', true);
                        //               $('#submit_confirm').prop('disabled', false);
                        //           }else if(((now.getMonth()+1)=='11') || ((now.getMonth()+1)=='12')){
                        //             $("#message").val("Your renew form can submit!");
                        //             $('.renew_submit').prop('disabled', true);
                        //             $('#submit_confirm').prop('disabled', false);
                        //           }else{
                        //               $('#message').val("You are verified!");
                        //               $('.renew_submit').prop('disabled', true);
                        //               $('#submit_confirm').prop('disabled', true);
                        //           }
                                
                        // }else{
                        //     $('#teacher_initial').css('display','block');
                        //     $('#teacher_renew').css('display','none');
                        // }
                    
                    
                
                
        
            },
            error: function (result) {
            },
        });
    }
  
}
function renewTeacher(){
  var send_data=new FormData($( "#teacher_renew_form" )[0]);

    send_data.append('teacher_id', $('#teacher_id').val());
    send_data.append('student_info_id', $('#student_info_id').val());
    send_data.append('initial_status',  $('#hinitial_status').val());
    send_data.append('regno',  $('#regno').val());
    send_data.append('from_valid_date',  $('#from_valid_date').val());
  show_loader();
    $.ajax({
        url: BACKEND_URL+'/renewTeacher',
        type: 'post',
        data:send_data,
        contentType: false,
        processData: false,
        success: function (data) {
            EasyLoading.hide();
            successMessage("Successfully");
            location.href=FRONTEND_URL+'/';

        },
        error: function (result) {
        },
    });
}
function selectStaff(value){
    if(value==1){
        $('#rec_letter').css('display','block');
        $('#update_rec_letter').css('display','block');
    }else{
        $('#rec_letter').css('display','none');
        $('#update_rec_letter').css('display','none');
    }
}
function ConfirmSubmitTeacher(){
    var checkbox = document.getElementById("submit_confirm");
    if (checkbox.checked == true) {
        $('.submit_reg_btn').prop("disabled",false);
        $('.renew_submit').prop("disabled",false);
    } else {
        $('.submit_reg_btn').prop("disabled",true);
        $('.renew_submit').prop("disabled",true);
    }
    var checkbox = document.getElementById("submit_update");
    if (checkbox.checked == true) {
        $('.submit_btn').prop("disabled",false);
    } else {
        $('.submit_btn').prop("disabled",true);
    }
    var checkbox = document.getElementById("submit_renewUpdate");
    if (checkbox.checked == true) {
        $('.submit_renewbtn').prop("disabled",false);
    } else {
        $('.submit_renewbtn').prop("disabled",true);
    }
}

function selectSchoolType(value){
    if(value==1){
        $('.private_type').css('display','block');
        
    }else{
        $('.private_type').css('display','none');
    }
}
function loadEductaionHistory(id,table,status){
    if(status==0){
        $.ajax({
            type : 'POST',
            url : BACKEND_URL+"/getEducationHistory",
            data: 'teacher_id='+id,
            success: function(result){
                $.each(result.data, function( index, value ){
                    var tr="<tr>";
                    tr += `<td class="less-font-weight text-center"><input type="hidden" name="old_degrees_id[]" class="form-control" value=`+value.id+`>${ index += 1 }</td>`;
                    tr += '<td><input type="text" name="old_degrees[]" class="form-control" value="'+value.degree_name+'" readonly/></td>';
                    tr += '<td><input type="hidden" name="old_degrees_certificates_h[]" class="form-control" value='+value.certificate+'><a href='+BASE_URL+value.certificate+' style="margin-top:0.5px;" target="_blank" class="btn btn-success btn-md">View File</a></td>';//<input type="file" name="old_degrees_certificates[]" class="form-control">
                    tr +=`<td class="text-center"><button type="button" disabled class="delete btn btn-sm btn-danger m-2" onclick=delRowEducation("`+table+`")><li class="fa fa-times"></li></button></td>`;
                    tr += "</tr>";
                    $("table."+table).append(tr);
                });
            }
        });
    }else{
        $.ajax({
            type : 'POST',
            url : BACKEND_URL+"/getEducationHistory",
            data: 'student_info_id='+id,
            success: function(result){
                $.each(result.data, function( index, value ){
                    var tr="<tr>";
                    tr += `<td class="less-font-weight text-center"><input type="hidden" name="old_degrees_id[]" class="form-control" value=`+value.id+`>${ index += 1 }</td>`;
                    tr += '<td><input type="text" name="old_degrees[]" class="form-control" value="'+value.degree_name+'" readonly/></td>';
                    tr += '<td><input type="hidden" name="old_degrees_certificates_h[]" class="form-control" value='+value.certificate+'><a href='+BASE_URL+value.certificate+' style="margin-top:0.5px;" target="_blank" class="btn btn-success btn-md">View File</a></td>';//<input type="file" name="old_degrees_certificates[]" class="form-control">
                    tr +=`<td class="text-center"><button type="button" disabled class="delete btn btn-sm btn-danger m-2" onclick=delRowEducation("`+table+`")><li class="fa fa-times"></li></button></td>`;
                    tr += "</tr>";
                    $("table."+table).append(tr);
                });
            }
        });
    }
    
}
function loadCertificates(name,select){
    var name=name.split(',');
    
    $.each(name, function( index, id ){
        $.ajax({
            url : BACKEND_URL+"/getSubject",
            data: 'subject_id='+id,
            type: 'post',
            success: function (result) {
               
                $.each(result.group_data, function( index, value ){
                    $.each(value, function(key, val){
                        var $newOption = $("<option selected='selected'></option>").val(val.subject_id).text(val.subject_name);
                        $("#"+select).append($newOption).trigger('change');
                    })
                });
            },
            error: function (result) {
            },
        });
        
       
    })
    
}


function loadSubject(course_id,select){
    
    $.ajax({
        url : BACKEND_URL+"/getSubject",
        data: 'course_id='+course_id,
        type: 'post',
        success: function (result) {
            $.each(result.data, function( index, value ){
                var newcode=index.split('_');
                var result = numeralCodes.filter( obj => obj.num === newcode[1])[0];
                var course_code=result.numeral;
                var group = $(`<optgroup label="${newcode[0].toUpperCase()+' '+course_code}"/>`);
                
                $.each(value, function(key, val){
                    
                    $('<option />').attr('value', val.subject_id).html(val.subject_name).appendTo(group);
                });
                group.appendTo($('#'+select));
                
            });
        },
        error: function (result) {
        },
    });
    
}
function updateTeacher(){
    var student =JSON.parse(localStorage.getItem("studentinfo"));
    
    if(student!=null){
        $.ajax({
            url: BACKEND_URL+"/getTeacher/"+student.id,//getTeacherStatus
            type: 'GET',
            success: function(result){
                var old_nrc_front=result.data[0].nrc_front;
                var old_nrc_back=result.data[0].nrc_back;
                var teacher=result.data.pop();
            //   var form_data = data;
            //   form_data.forEach(function(element){
                   
                    
                        if(teacher.approve_reject_status == 2){
                            if(teacher.initial_status==0){
                                $('#teacher_form').hide();
                                $('#teacher_update').show();
                                if(teacher.offline_user==1){
                                    $('.teacher_exist_user').show();
                                    $('#offline_user').val(teacher.offline_user);
                                    $('input[name=from_valid_date]').val(teacher.from_valid_date);
                                    $('input[name=t_code]').val(teacher.t_code);
                                    $('#hteacher_card').val(teacher.teacher_card);
                                    $(".teacher_card_letter").append(`<a href='${BASE_URL+teacher.teacher_card}' style='display:block; font-size:16px;text-decoration: none;' target='_blank'>View File</a>`);
                                }else{
                                    $('.teacher_exist_user').hide();
                                    
                                }
                                $('input[name=email]').val(teacher.email);
                                $('input[name=name_mm]').val(teacher.name_mm);
                                $('input[name=name_eng]').val(teacher.name_eng);
                                $('input[name=father_name_mm]').val(teacher.father_name_mm);
                                $('input[name=father_name_eng]').val(teacher.father_name_eng);
                                $('#nrc_state_region').val(teacher.nrc_state_region);
                                $('#nrc_township').val(teacher.nrc_township);
                                $('#nrc_citizen').val(teacher.nrc_citizen);
                                $('input[name=nrc_number]').val(teacher.nrc_number);
                                $('input[name=phone_number]').val(teacher.phone);
                                $('textarea[name=exp_desc]').val(teacher.exp_desc);
                                $('#teacher_id').val(teacher.id);
                                $('#student_info_id').val(student.id);
                                $('#hidden_profile').val(teacher.image);
                                  $('#hidden_nrc_front').val(teacher.nrc_front);
                                  $('#hidden_nrc_back').val(teacher.nrc_back);
                                  $('#hschool_name').val(teacher.school_name);
                                  $("#nrc_front_img").attr("src",BASE_URL+teacher.nrc_front);
                                  $("#nrc_back_img").attr("src",BASE_URL+teacher.nrc_back);
                                  loadEductaionHistoryByRenew(teacher.id,'tbl_degree_update',teacher.initial_status);
                                
                                  
                                    if(teacher.certificates.search(/[\'"[\]']+/g)==0){
                                        loadCertificates(teacher.certificates.replace(/[\'"[\]']+/g, ''),"selected_cpa_subject_up");
                                        loadSubject(2,"selected_cpa_subject_up");
                                    
                                    }else{
                                        loadCertificates(teacher.certificates,"selected_cpa_subject_up");
                                        
                                        loadSubject(2,"selected_cpa_subject_up");
                                       
                                    }
                                    if(teacher.diplomas.search(/[\'"[\]']+/g)==0){
                                        loadCertificates(teacher.diplomas.replace(/[\'"[\]']+/g, ''),"selected_da_subject_up");
                                        loadSubject(1,"selected_da_subject_up")
                                    }else{
                                        loadCertificates(teacher.diplomas,"selected_da_subject_up");
                                        loadSubject(1,"selected_da_subject_up")
                                    }
                                    $('#hinitial_status').val(teacher.initial_status);
                                    $('#payment_date').val(teacher.payment_date);
                                $("input[name=race]").val(teacher.race);
                                $("input[name=religion]").val(teacher.religion);
                                $("input[name=date_of_birth]").val(teacher.date_of_birth);
                                $("textarea[name=address]").val(teacher.address);
                                $("textarea[name=eng_address]").val(teacher.eng_address);
                                $("textarea[name=eng_current_address]").val(teacher.eng_current_address);
                                $("textarea[name=current_address]").val(teacher.current_address);
                                $("input[name=position]").val(teacher.position);
                                $("input[name=department]").val(teacher.department);
                                $("input[name=organization]").val(teacher.organization);
                                  if(teacher.gov_employee == 1){
                                    $('input:radio[id=gov_employee1]').attr('checked',true);
                                    $('#update_rec_letter').css('display','block');
                                    if(teacher.recommend_letter!=""){
                                        $(".recommend_letter").append(`<a href='${BASE_URL+teacher.recommend_letter}' style='display:block; font-size:16px;text-decoration: none;' target='_blank'>View File</a>`);
                                    }
                                    $('#hrecommend_letter').val(teacher.recommend_letter);
                                }
                                else{
                                    $('input:radio[id=gov_employee2]').attr('checked',true);
                                    $('#update_rec_letter').css('display','none');
                                }
                                if(teacher.school_type != 0){
                                    $('input:radio[id=school_staff1]').attr('checked',true);
                                    $('.private_type').css('display','block');
                                    $('.individual_type').css('display','none');
                                    $("#update_selected_school_id").val(teacher.school_id);
                                    
                                }else{
                                    $('input:radio[id=school_staff2]').attr('checked',true);
                                    $('.individual_type').css('display','block');
                                    $('.private_type').css('display','none');
                                    $('input[name=update_school_name]').val(teacher.school_name);
                                }
                                  
                            }else if(teacher.initial_status==1){
                               
                                $('#teacher_form').hide();
                                $('#teacher_update').hide();
                                $('#teacher_renew_update').show();
                                
                                $('input[name=email]').val(teacher.email);
                                $('input[name=name_mm]').val(teacher.name_mm);
                                $('input[name=name_eng]').val(teacher.name_eng);
                                $('input[name=father_name_mm]').val(teacher.father_name_mm);
                                $('input[name=father_name_eng]').val(teacher.father_name_eng);
                                $('input[name=nrc_state_region]').val(teacher.nrc_state_region);
                                $('input[name=nrc_township]').val(teacher.nrc_township);
                                $('input[name=nrc_citizen]').val(teacher.nrc_citizen);
                                $('input[name=nrc_number]').val(teacher.nrc_number);
                                $('input[name=phone]').val(teacher.phone);
                                
                                $('#teacher_id').val(teacher.id);
                                $('#student_info_id').val(teacher.student_info_id);
                            // $('#hidden_profile').val(teacher.image);
                            if(teacher.nrc_front==null){
                                $('#hidden_nrc_front').val(teacher.nrc_front);
                                $("#nrc_front_img_renew").attr("src",BASE_URL+old_nrc_front);
                            }else{
                                $('#hidden_nrc_front').val(teacher.nrc_front);
                                $("#nrc_front_img_renew").attr("src",BASE_URL+old_nrc_back);
                            }
                                if(teacher.nrc_back==null){
                                    $('#hidden_nrc_back').val(teacher.nrc_back);
                                    $("#nrc_back_img_renew").attr("src",BASE_URL+old_nrc_front);
                                }else{
                                    $('#hidden_nrc_back').val(teacher.nrc_back);
                                    $("#nrc_back_img_renew").attr("src",BASE_URL+old_nrc_back);
                                }      
                                    
                                   loadEductaionHistoryByRenew(teacher.id,'tbl_degree_renew_update',teacher.initial_status);
                                        if(teacher.certificates.search(/[\'"[\]']+/g)==0){
                                            loadCertificates(teacher.certificates.replace(/[\'"[\]']+/g, ''),"selected_cpa_subject_renew_update");
                                            loadSubject(2,"selected_cpa_subject_renew_update");
                                        
                                        }else{
                                            loadCertificates(teacher.certificates,"selected_cpa_subject_renew_update");
                                            
                                            loadSubject(2,"selected_cpa_subject_renew_update");
                                        
                                        }
                                        if(teacher.diplomas.search(/[\'"[\]']+/g)==0){
                                            loadCertificates(teacher.diplomas.replace(/[\'"[\]']+/g, ''),"selected_da_subject_renew_update");
                                            loadSubject(1,"selected_da_subject_renew_update")
                                        }else{
                                            loadCertificates(teacher.diplomas,"selected_da_subject_renew_update");
                                            loadSubject(1,"selected_da_subject_renew_update")
                                        }
                                        $('#hinitial_status').val(teacher.initial_status);
                                        $('#payment_date').val(teacher.payment_date);
                                        $("input[name=race]").val(teacher.race);
                                        $("input[name=religion]").val(teacher.religion);
                                        $("input[name=date_of_birth]").val(teacher.date_of_birth);
                                        $("input[name=address]").val(teacher.address);
                                        $("textarea[name=eng_current_address]").val(teacher.eng_current_address);
                                        $("textarea[name=current_address]").val(teacher.current_address);
                                        $("input[name=position]").val(teacher.position);
                                        $("input[name=department]").val(teacher.department);
                                        $("input[name=organization]").val(teacher.organization);
                                    
                                    if(teacher.school_type!=0){
                                        $('input:radio[id=school_staff_renew1]').attr('checked',true);
                                        $('.private_type').css('display','block');
                                        $('.individual_type').css('display','none');
                                        $("#renew_selected_school_id").val(teacher.school_id);
                                        
                                    }else{
                                        $('input:radio[id=school_staff_renew2]').attr('checked',true);
                                        $('.individual_type').css('display','block');
                                        $('.private_type').css('display','none');
                                        $('#hschool_name_renew').val(teacher.school_name);
                                        $('input[name=school_name_renew]').val(teacher.school_name);
                                    }
                            }
                            
                            
                                  
                        }
                    
                    // else{
                    //     var new_teacher_renew=element.teacher_renew.pop();
                    //     if(new_teacher_renew.approve_reject_status == 2){
                    //         $('#teacher_form').css('display','none');
                    //         $('#teacher_update').css('display','none');
                    //         $('#teacher_renew_update').css('display','block');
                    //         $('input[name=email]').val(teacher.email);
                    //         $('input[name=name_mm]').val(teacher.name_mm);
                    //         $('input[name=name_eng]').val(teacher.name_eng);
                    //         $('input[name=father_name_mm]').val(teacher.father_name_mm);
                    //         $('input[name=father_name_eng]').val(teacher.father_name_eng);
                    //         $('input[name=nrc_state_region]').val(teacher.nrc_state_region);
                    //         $('input[name=nrc_township]').val(teacher.nrc_township);
                    //         $('input[name=nrc_citizen]').val(teacher.nrc_citizen);
                    //         $('input[name=nrc_number]').val(teacher.nrc_number);
                    //         $('input[name=phone_renew]').val(new_teacher_renew.phone);
                            
                    //         $('#renew_teacher_id').val(new_teacher_renew.id);
                    //         $('#student_info_id').val(new_teacher_renew.student_info_id);
                    //        // $('#hidden_profile').val(teacher.image);
                    //        if(new_teacher_renew.nrc_front==null){
                    //         $('#hidden_nrc_front').val(teacher.nrc_front);
                    //         $("#nrc_front_img_renew").attr("src",BASE_URL+teacher.nrc_front);
                    //        }else{
                    //         $('#hidden_nrc_front').val(new_teacher_renew.nrc_front);
                    //         $("#nrc_front_img_renew").attr("src",BASE_URL+new_teacher_renew.nrc_front);
                    //        }
                    //         if(new_teacher_renew.nrc_back==null){
                    //             $('#hidden_nrc_back').val(teacher.nrc_back);
                    //             $("#nrc_back_img_renew").attr("src",BASE_URL+teacher.nrc_back);
                    //         }else{
                    //             $('#hidden_nrc_back').val(new_teacher_renew.nrc_back);
                    //             $("#nrc_back_img_renew").attr("src",BASE_URL+new_teacher_renew.nrc_back);
                    //         }      
                                  
                    //         $('#hschool_name_renew').val(new_teacher_renew.school_name);
                    //         $('input[name=school_name_renew]').val(new_teacher_renew.school_name);     
                                  
                    //               loadEductaionHistoryByRenew(new_teacher_renew.id,'tbl_degree_renew_update');
                    //                 if(new_teacher_renew.certificates.search(/[\'"[\]']+/g)==0){
                    //                     loadCertificates(new_teacher_renew.certificates.replace(/[\'"[\]']+/g, ''),"selected_cpa_subject_renew_update");
                    //                     loadSubject(2,"selected_cpa_subject_renew_update");
                                    
                    //                 }else{
                    //                     loadCertificates(new_teacher_renew.certificates,"selected_cpa_subject_renew_update");
                                        
                    //                     loadSubject(2,"selected_cpa_subject_renew_update");
                                       
                    //                 }
                    //                 if(new_teacher_renew.diplomas.search(/[\'"[\]']+/g)==0){
                    //                     loadCertificates(new_teacher_renew.diplomas.replace(/[\'"[\]']+/g, ''),"selected_da_subject_renew_update");
                    //                     loadSubject(1,"selected_da_subject_renew_update")
                    //                 }else{
                    //                     loadCertificates(new_teacher_renew.diplomas,"selected_da_subject_renew_update");
                    //                     loadSubject(1,"selected_da_subject_renew_update")
                    //                 }
                    //                 $('#hinitial_status').val(teacher.initial_status);
                    //                 $('#payment_date').val(teacher.payment_date);
                    //             $("input[name=race]").val(teacher.race);
                    //             $("input[name=religion]").val(teacher.religion);
                    //             $("input[name=date_of_birth]").val(teacher.date_of_birth);
                    //             $("input[name=address]").val(teacher.address);
                    //             $("input[name=current_address]").val(new_teacher_renew.current_address);
                    //             $("input[name=position]").val(teacher.position);
                    //             $("input[name=department]").val(teacher.department);
                    //             $("input[name=organization]").val(teacher.organization);
                                
                    //             if(new_teacher_renew.school_type!=0){
                    //                 $('input:radio[id=school_staff_renew1]').attr('checked',true);
                    //                 $('.private_type').css('display','block');
                    //                 $('.individual_type').css('display','none');
                    //               }else{
                    //                 $('input:radio[id=school_staff_renew2]').attr('checked',true);
                    //                 $('.individual_type').css('display','block');
                    //                 $('.private_type').css('display','none');
                                    
                    //               }
                                  
                    //     }
                    // }
                    
              
            }
        });
    }else{

    }
}
function updateTeacherByReject(){
    var send_data=new FormData($( "#teacher_update_form" )[0]);
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
    
      send_data.append('reason', $('#initial_reject').val());
        send_data.append('student_info_id', $('#student_info_id').val());
      send_data.append('school_name', $('#hschool_name').val());
      send_data.append('initial_status', $('#hinitial_status').val());
     
      
    if($('#gov_employee').val()){
        
            send_data.append('gov_employee', $('#gov_employee').val());
            send_data.append('exp_desc', $('#exp_desc').val());
            send_data.append('recommend_letter', $('#hrecommend_letter').val());
            send_data.append('position', $("input[id=position]").val());
            send_data.append('department',$("input[id=department]").val());
            send_data.append('organization',$("input[id=organization]").val());
        
    }else{
        if($("input[name=recommend_letter]")[0].files[0]){
            send_data.append('recommend_letter', $("input[name=recommend_letter]")[0].files[0]);
        }else{
            send_data.append('recommend_letter', $('#hrecommend_letter').val());
        }
    }
    if($('#offline_user').val()==1){
        send_data.append('offline_user', $('#offline_user').val());
        send_data.append('from_valid_date', $('input[name=from_valid_date]').val());
        send_data.append('t_code', $('input[name=t_code]').val());
        send_data.append('teacher_card', $('#hteacher_card').val());
    }
    var id=$('#teacher_id').val();
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
function loadEductaionHistoryByRenew(id,table,status){
    if(status==0){
        $.ajax({
            type : 'POST',
            url : BACKEND_URL+"/getEducationHistory",
            data: 'teacher_id='+id,
            success: function(result){
                $.each(result.data, function( index, value ){
                    var tr="<tr>";
                    tr += `<td class="less-font-weight text-center"><input type="hidden" name="old_degrees_id[]" class="form-control" value=`+value.id+`>${ index += 1 }</td>`;
                    tr += '<td><input type="text" name="old_degrees[]" class="form-control" value="'+value.degree_name+'" /></td>';
                    tr += '<td><input type="hidden" name="old_degrees_certificates_h[]" class="form-control" value='+value.certificate+'><input type="file" name="old_degrees_certificates[]" class="form-control"><a href='+BASE_URL+value.certificate+' style="margin-top:0.5px;" target="_blank" class="btn btn-success btn-md">View File</a></td>';
                    tr +=`<td class="text-center"><button type="button" disabled class="delete btn btn-sm btn-danger m-2" onclick=delRowEducation("`+table+`")><li class="fa fa-times"></li></button></td>`;
                    tr += "</tr>";
                    $("table."+table).append(tr);
                });
            }
        });
    }else{
        $.ajax({
            type : 'POST',
            url : BACKEND_URL+"/getEducationHistory",
            data: 'teacher_id='+id,
            success: function(result){
                $.each(result.data, function( index, value ){
                    var tr="<tr>";
                    tr += `<td class="less-font-weight text-center"><input type="hidden" name="old_renewdegrees_id[]" class="form-control" value=`+value.id+`>${ index += 1 }</td>`;
                    tr += '<td><input type="text" name="old_renewdegrees[]" class="form-control" value="'+value.degree_name+'" /></td>';
                    tr += '<td><input type="hidden" name="old_renewdegrees_certificates_h[]" class="form-control" value='+value.certificate+'><input type="file" name="old_renewdegrees_certificates[]" class="form-control"><a href='+BASE_URL+value.certificate+' style="margin-top:0.5px;" target="_blank" class="btn btn-success btn-md">View File</a></td>';
                    tr +=`<td class="text-center"><button type="button" disabled class="delete btn btn-sm btn-danger m-2" onclick=delRowEducation("`+table+`")><li class="fa fa-times"></li></button></td>`;
                    tr += "</tr>";
                    $("table."+table).append(tr);
                });
            }
        });
    }
    
}
function updateRenewTeacherByReject(){
    var send_data=new FormData($( "#teacher_renewupdate_form" )[0]);
      if($("input[name=nrc_front]")[0].files[0]){
        send_data.append('nrc_front', $("input[name=nrc_front_renew]")[0].files[0]);
      }else{
        send_data.append('nrc_front', $('#hidden_nrc_front').val());
      }
      if($("input[name=nrc_back]")[0].files[0]){
        send_data.append('nrc_back', $("input[name=nrc_back_renew]")[0].files[0]);
      }else{
        send_data.append('nrc_back', $('#hidden_nrc_back').val());
      }
    
    send_data.append('reason', $('#renew_reject').val());
    send_data.append('student_info_id', $('#student_info_id').val());
    send_data.append('school_name', $('#hschool_name_renew').val());
    
    var id=$('#teacher_id').val();
    //send_data.append('_method', 'PATCH');
   show_loader();
    $.ajax({
        url: BACKEND_URL+'/renewTeacherUpdate/'+id,
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
