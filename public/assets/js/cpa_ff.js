function ConfirmSubmit(){
    var radio = document.getElementById("submit_confirm");
    if (radio.checked == true){
        document.getElementById("submit_btn").disabled= false;
    }
    else{
    document.getElementById("submit_btn").disabled = true;
    }
}

function CheckPartTwo(){
    var radio = document.getElementById("cpa_part_2_check");
    if(radio.checked == true){
        $('.pass_batch_two').css('display','block');
        $('.qt_pass').css('display','none');
    }
    else{
        $('.pass_batch_two').css('display','none');
        $('.qt_pass').css('display','none');
    }
}

function CheckQTPass(){
    var radio = document.getElementById("qt_pass_check");
    if(radio.checked == true){
        $('.pass_batch_two').css('display','none');
        $('.qt_pass').css('display','block');
    }
    else{
        $('.pass_batch_two').css('display','none');
        $('.qt_pass').css('display','none');
    }
}

function getCPAEducation(){
    var checkedValue = $("input[name='education']:checked").val();
    if(checkedValue==1){
        $('#cpa').css('display','block');
        $('#ra').css('display','none');
        $('#edu').css('display','none');
    }
    else if(checkedValue==2){
        $('#cpa').css('display','none');
        $('#ra').css('display','block');
        $('#edu').css('display','none');
    }
    else if(checkedValue==3){
        $('#cpa').css('display','none');
        $('#ra').css('display','none');
        $('#edu').css('display','block');
    }
    else{
        $('#cpa').css('display','none');
        $('#ra').css('display','none');
        $('#edu').css('display','none');
    }
}

function addInputFile(divname,diventry){
    var controlForm = $('.'+divname+':first'),
            currentEntry = $('.btn-add').parents('.'+diventry+':first'),
            newEntry = $(currentEntry.clone()).appendTo(controlForm);
        newEntry.find('input').val('');
        controlForm.find('.'+diventry+':not(:last) .btn-add')
            .removeClass('btn-add').addClass('btn-remove')
            .removeClass('btn-primary').addClass('btn-danger')
            .attr("onclick","delInputFile('"+diventry+"')")
            .html('<span class="fa fa-trash"></span>');

}

var count=1;
function AddCPAFFDegree(){
    $("#edu").append(
        '<div class="row mb-2" id="degree_name'+count+'">'+
            '<div class="col-md-1"></div>'+
            '<div class="col-md-4 col-auto">'+
                '<label for="" class="col-form-labe"> ဘွဲ့အမည်</label>'+
            '</div>'+
            '<div class="col-md-6 col-auto">'+
                '<input type="text"  class="form-control" name="degree_name[]" placeholder="ဘွဲ့အမည်">'+
            '</div>'+
        '</div>'+
        '<div class="row mb-2" id="degree_year'+count+'">'+
            '<div class="col-md-1"></div>'+
            '<div class="col-md-4 col-auto">'+
                '<label for="" class="col-form-labe"> အောင်မြင်သည့်နှစ်/လ</label>'+
            '</div>'+
            '<div class="col-md-6 col-auto">'+
                '<input type="type"  class="form-control degree_pass_year" name="degree_pass_year[]" placeholder="လ၊နှစ်(MMM-YYYY)">'+
            '</div>'+
        '</div>'+

        '<div class="row mb-4" id="edu'+count+'">'+
            '<div class="col-md-1"></div>'+
            '<div class="col-md-4 col-auto">'+
                '<label for="" class="col-form-labe"> Attached Certificate</label>'+
            '</div>'+
            '<div class="col-md-6">'+
                '<input type="file"  class="form-control"  id="degree_file'+count+'"  name="degree_file[]" required="">'+
            '</div>'+
            '<div class="col-md-1 text-center"  id="edu'+count+'_remove">'+
                '<button class="btn btn-danger" id="myLink" onclick="remove(edu'+count+')">'+
                    '<i class="fa fa-trash "></i>'+
                '</button>'+
            '</div>'+
        '</div>'
    );

    $('.degree_pass_year').flatpickr({
        enableTime: false,
        dateFormat: "M-Y",
        allowInput: true,
    });
    count++;

}

function delInputFile(diventry){
    $('.btn-remove').parents('.'+diventry+':first').remove();
}

// var  studentID;
// function SearchStudentID(){
//     var nrc_state_region    =   $("#nrc_state_region").val();
//     var nrc_township        =   $("#nrc_township").val();
//     var nrc_citizen         =   $("#nrc_citizen").val();
//     var nrc_number          =   $("input[name=nrc_number]").val();
//     // var nrc                 =   nrc_state_region+nrc_township+nrc_citizen+nrc_number;
//     var nrc = new FormData();
//     nrc.append('nrc_state_region', nrc_state_region);
//     nrc.append('nrc_township', nrc_township);
//     nrc.append('nrc_citizen', nrc_citizen);
//     nrc.append('nrc_number', nrc_number);

//     console.log('nrc',nrc);

//     $.ajax({
//         url:BACKEND_URL+"/student_info_by_nrc",
//         type: 'post',
//         data: nrc,
//         contentType: false,
//         processData: false,
//         success: function(result){
//             // console.log('result',result.data)
//                 if(result.data!=null){
//                     studentID=result.data.id;
//                     document.getElementById("fieldset").disabled = false;
//                 }
//                 else{
//                     document.getElementById("fieldset").disabled = true;
//                 }
//             }
//         });


// }

$( "#cpaff_submit_btn" ).click(function() {
        if(allFilled('#cpaff_form')){
            $('#cpaffModal').modal('show');
            send_email();
        }
    });

// cpaff
$("#cpaff_modal").click(function() {
    $('#cpaffpaymentModal').modal('show');
});

$('#cash_img').click(function() {
    $('#cpaff_btn').prop('disabled', false);
});

$('#cb_img').click(function() {
    $('#cpaff_btn').prop('disabled', true);
});

$('#mpu_img').click(function() {
    $('#cpaff_btn').prop('disabled', true);
});
$('#cpaff_btn').prop('disabled', true);

$('#cpaff_btn').click(function () {
    setTimeout(function () {
        $('#cpaffpaymentModal').modal('hide');
    }, 1000);
});

function check_email_cpaff()
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
        createCPAFFRegister();
        $('#cpaffModal').modal('hide');
    }
}

function cpaffPaymentSubmit(){
    var student = JSON.parse(localStorage.getItem('studentinfo'));
    $.ajax({
    url: BACKEND_URL + "/approve_cpaff_payment/" + student.id,
    type: 'patch',
    success: function (data) {
            successMessage("Your payment is successfully");
            location.href = FRONTEND_URL + "/cpa_ff_information";
        },
        error:function (message){
        }
    })
}

function checkPaymentCpaff(){
    var student =JSON.parse(localStorage.getItem("studentinfo"));
    // console.log(student)
    if(student!=null){
        $.ajax({
            url: BACKEND_URL+"/check_payment_cpaff/"+student.id,
            type: 'GET',
            success: function(data){
                // console.log(data);
              var form_data = data;
              form_data.forEach(function(element){
                console.log(element.payment_method)
                if(element.payment_method == 'CPAFF'){
                    $('#cpaff_modal').prop('disabled', true);
                    loadCPAFF();
                }else{
                    $('#cpaff_modal').prop('disabled', false);
                }
              })
            }
        });
    }
}

function createCPAFFRegister(){
    var student = JSON.parse(localStorage.getItem('studentinfo'));
    var profile_photo       =   $("input[name=profile_photo]")[0].files[0];
    var cpa             =   $("input[name=cpa]")[0].files[0];
    var ra              =   $("input[name=ra]")[0].files[0];

    // var foreign_degree  =   $("input[name=foreign_degree[]]")[0].files[0];
    var foreign_degree  =   $('input[name="foreign_degree[]"]');

    var cpa_certificate =   $("input[name=cpa_certificate]")[0].files[0];
    var mpa_mem_card    =   $("input[name=mpa_mem_card]")[0].files[0];
    var nrc_front       =   $("input[name=nrc_front]")[0].files[0];
    var nrc_back        =   $("input[name=nrc_back]")[0].files[0];
    var cpd_record      =   $("input[name=cpd_record]")[0].files[0];
    var passport_image  =   $("input[name=passport_image]")[0].files[0];

    var cpa_edu         = document.getElementById("cpa_edu");
    var ra_edu          = document.getElementById("ra_edu");
    var education       = document.getElementById("education");

    var cpa_part_2      = document.getElementById("cpa_part_2_check");
    var qt_pass         = document.getElementById("qt_pass_check");

    var send_data = new FormData();
    send_data.append('student_info_id', student.id);
    send_data.append('profile_photo', profile_photo);

    if(cpa_edu.checked==true){
        send_data.append('cpa', cpa);
    }
    else if(ra_edu.checked==true){
        send_data.append('ra', ra);
    }else{
        $('input[name="degree_name[]"]').map(function(){
            send_data.append('degree_name[]',$(this).val());
        });
        $('input[name="degree_pass_year[]"]').map(function(){
            send_data.append('degree_pass_year[]',$(this).val());
        });
        $('input[name="degree_file[]"]').map(function(){
            for (var i = 0; i < $(this).get(0).files.length; ++i) {
                send_data.append('degree_file[]',$(this).get(0).files[i]);
            }
        });
    }    
    // send_data.append('foreign_degree', foreign_degree);

    // for (var i = 0; i < count; i++) {
    //     send_data.append('foreign_degree[]',$('input[name=foreign_degree]'+i)[0].files[0]);
    // }

    foreign_degree.map(function(){
        for (var i = 0; i < $(this).get(0).files.length; ++i) {
          send_data.append('foreign_degree[]',$(this).get(0).files[i]);
        }

    });

    if(cpa_part_2.checked==true){
        send_data.append('pass_batch_no',$('input[name="pass_batch_no"]').val());
        send_data.append('pass_personal_no',$('input[name="pass_personal_no"]').val());
    }
    else if(qt_pass.checked==true){
        send_data.append('qt_pass_date',$('input[name="qt_pass_date"]').val());
        send_data.append('qt_pass_seat_no',$('input[name="qt_pass_seat_no"]').val());
    }

    // if(cpa_part_2.checked==true){
    //     send_data.append('cpa_part_2',1);
    //     send_data.append('qt_pass',0);
    // }
    // else if(qt_pass.checked==true){
    //     send_data.append('cpa_part_2',0);
    //     send_data.append('qt_pass',1);
    // }else{
    //     send_data.append('cpa_part_2',0);
    //     send_data.append('qt_pass',0);
    // }

    send_data.append('cpa_certificate', cpa_certificate);
    send_data.append('mpa_mem_card', mpa_mem_card);
    send_data.append('nrc_front', nrc_front);
    send_data.append('nrc_back', nrc_back);
    send_data.append('mpa_mem_card', mpa_mem_card);
    send_data.append('cpd_record', cpd_record);
    send_data.append('passport_image', passport_image);

    $.ajax({
        url: BACKEND_URL+"/cpa_ff",
        type: 'post',
        data:send_data,
        contentType: false,
        processData: false,
        success: function(result){
            successMessage("You have successfully registerd!");
            // location.reload();
            location.href = FRONTEND_URL+"/";
        },
        error:function (message){
        }
    });

}


function selectEntry(){
    var radioValue = $("input[name='selected_name']:checked").val();

    if(radioValue==1){
        $('#direct').css('display','block');
        $('#entry_pass').css('display','none');
        $("#direct").find('input').prop('required',true);
     }else
     {
        $('#entry_pass').css('display','block');
        $('#direct').css('display','none');
        $("#direct").find('input').prop('required',false);
     }
}

function isLoginCPAFF(){
    var student = JSON.parse(localStorage.getItem('studentinfo'));
    if(student == null){
        location.href = FRONTEND_URL + '/login';
    }
    else{
        $.ajax({
            url: BACKEND_URL+"/get_exam_student/"+student.id,
            type: 'get',
            data:"",
            success: function(result){
                var exam=result.data;
                if(exam!=null) {
                    exam.every(function(element){
                        if(element.course.code=="cpa_2" && element.grade=="1"){
                            var a=new Date(student.date_of_birth);
                            var diff_ms = Date.now() - a.getTime();
                            var age_dt = new Date(diff_ms);
                            var age=Math.abs(age_dt.getUTCFullYear() - 1970);
                            if(age>=21){
                                $("#age").append(age+" years");
                                document.getElementById('fieldset').disabled=false;
                                document.getElementById('pass_cpa_two').style.display='none';
                            }
                            else{
                                $("#age").append(age+" years");
                                document.getElementById('fieldset').disabled=true;
                                document.getElementById('check_age').style.display='block';
                                document.getElementById('pass_cpa_two').style.display='none';
                            }
                            return false;
                        }
                        else{
                            document.getElementById('fieldset').disabled=true;
                            document.getElementById('pass_cpa_two').style.display='block';
                            return true;
                        }


                    });
                }
            },
            error:function (message){
                }
            });

    }
}

function form_feedback(){
    var student = JSON.parse(localStorage.getItem('studentinfo'));
    if(student!=null){
        $.ajax({
            url: BACKEND_URL+"/cpaff_by_stuId/"+student.id,
            type: 'GET',
            contentType: false,
            processData: false,
            success: function(cData){
                var data=cData.data;
                if(data!=null){
                    console.log(data.status)
                    if(data.status==0 || data.renew_status==0)
                    {
                        document.getElementById('pending').style.display='block';
                        document.getElementById('approved').style.display='none';
                        $('.register-btn').css('display','none');
                        $('.payment-btn').css('display','none');
                    }
                    else if(data.status==1 || data.renew_status==1)
                    {
                        document.getElementById('approved').style.display='block';
                        document.getElementById('pending').style.display='none';
                        $('.payment-btn').css('display','block');
                        $('.register-btn').css({'display':'none'});
                        $('.register-btn').removeClass('mt-4');
                    }
                    else if(data.status==2 || data.renew_status==2)
                    {
                        document.getElementById('rejected').style.display='block';
                    }
                }
                else{
                    document.getElementById('cpaff_from').style.display='block';
                }
            }
        });
    }
}
function loadCPAFF(){
    var student = JSON.parse(localStorage.getItem('studentinfo'));
    if(student!=null){
        
        var a=new Date(student.date_of_birth);
        var diff_ms = Date.now() - a.getTime();
        var age_dt = new Date(diff_ms);
        var age=Math.abs(age_dt.getUTCFullYear() - 1970);
        $("#age").append(age+" years");
        $.ajax({
            url: BACKEND_URL+"/cpaff_by_stuId/"+student.id,
            type: 'GET',
            contentType: false,
            processData: false,
            success: function(cData){
                var data=cData.data;
                if(data!=null){
                    if(data.status==1 || data.renew_status==1)
                    {
                        document.getElementById('approved').style.display='none';
                        document.getElementById('cpa_initial').style.display='none';
                        document.getElementById('cpaff_renew_form').style.display='block';
                        var accept=new Date(data.renew_accepted_date);
                        var month=accept.getMonth()+1;
                        var year=accept.getFullYear();
                        var y=year+1;
                        var now=new Date();
                        $('#previewImg').attr("src",BASE_URL+data.image);
                        $('#previewNRCFrontImg').attr("src",BASE_URL+data.nrc_front);
                        $('#previewNRCBackImg').attr("src",BASE_URL+data.nrc_back);
                        $('#hidden_nrc_front').val(data.nrc_front);
                        $('#hidden_nrc_back').val(data.nrc_back);
                        $('#hidden_degree_file0').val(data.degree_file0);
                        $('#hidden_cpa_certificate').val(data.cpa_certificate);
                        $('#hidden_mpa_mem_card').val(data.mpa_mem_card);
                        $('#hidden_cpd_record').val(data.cpd_record);
                        $('#hidden_passport_image').val(data.passport_image);
                        if(data.cpa_part_2==1){
                            $('#cpa_part_2_check').prop("checked", true);
                            
                        }else{
                            $('#qt_pass_check').prop("checked", true);
                            $('input[name=qt_pass_date]').val(data.qt_pass_date);
                            $('input[name=qt_pass_seat_no]').val(data.qt_pass_seat_no);
                        }
                        
                        $('input[name=pass_batch_no]').val(data.pass_batch_no);
                        $('input[name=pass_personal_no]').val(data.pass_personal_no);
                        $('input[name=total_hours]').val(data.total_hours);
                        $('input[name=degree_pass_year0]').val(data.degree_pass_year0);
                        $('input[name=degree_name0]').val(data.degree_name0);
                        loadFile(data.cpa_certificate,"view_cpa_certificate");
                        loadFile(data.degree_file0,"view_degree_file0");
                        loadFile(data.mpa_mem_card,"view_mpa_mem_card");
                        loadFile(data.cpd_record,"view_cpd_record");
                        loadFile(data.passport_image,"view_passport_image");
                        $('#regno').val(data.id);
                        $('#register_date').val(data.renew_accepted_date);
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
                        $('#previewImg').attr("src",BASE_URL+data.profile_photo);
    
                    }
                    else
                    {
                        document.getElementById('cpa_initial').style.display='blocknone';
                        document.getElementById('cpaff_renew_form').style.display='none';
                    }
                }
                else{
                    document.getElementById('cpa_initial').style.display='block';
                    document.getElementById('cpaff_renew_form').style.display='none';
                }
            }
        });
    }
    
    
}
function RenewCPAFF(){
    var student = JSON.parse(localStorage.getItem('studentinfo'));

    show_loader()

    $.ajax({
        url: BACKEND_URL+"/cpaff_by_stuId/"+student.id,
        type: 'get',
        data:"",
        success: function(result){
            if(result.data!=null){
                var send_data = new FormData($("#cpaff_renew_form_submit")[0]);
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
                  //if(!$("input[name=cpa_certificate]")[0].files[0]){
                    send_data.append('cpa_certificate', $('#hidden_cpa_certificate').val());
                 // }
                  //if(!$("input[name=mpa_mem_card]")[0].files[0]){
                    send_data.append('mpa_mem_card', $('#hidden_mpa_mem_card').val());
                  //}
                  //if(!$("input[name=cpd_record]")[0].files[0]){
                    send_data.append('cpd_record', $('#hidden_cpd_record').val());
                  //}
                  //if(!$("input[name=passport_image]")[0].files[0]){
                    send_data.append('passport_image', $('#hidden_passport_image').val());
                  //}
                  var cpa_part_2      = document.getElementById("cpa_part_2_check");
                  var qt_pass         = document.getElementById("qt_pass_check");
                  if(cpa_part_2.checked==true){
                    send_data.append('cpa_part_2',1);
                    send_data.append('qt_pass',0);
                    }
                    else if(qt_pass.checked==true){
                        send_data.append('cpa_part_2',0);
                        send_data.append('qt_pass',1);
                    }else{
                        send_data.append('cpa_part_2',0);
                        send_data.append('qt_pass',0);
                    }
                
                send_data.append('_method', 'PUT');
                $.ajax({
                    url: BACKEND_URL+"/cpa_ff/"+result.data.id,
                    type: 'post',
                    data:send_data,
                    contentType: false,
                    processData: false,
                    success: function(result){
                      console.log("result >>>",result);
                        EasyLoading.hide();
                        successMessage(result.message);
                        location.reload();
                        document.getElementById('approved').style.display='none';
                        document.getElementById('rejected').style.display='none';
                        document.getElementById('pending').style.display='none';
                        document.getElementById('cpaff_form').style.display='none';
                        document.getElementById('cpaff_renew_form').style.display='none';
                        document.getElementById('expiry_card').style.display='none';
                    },
                    error:function (message){
                    }
                });
            }
        },
        error:function (message){
        }
    });
}


function selectStaff(){
    var radioValue = $("input[name='gov_staff']:checked").val();

    if(radioValue==1){
         $('#rec_letter').css('display','block');

     }else
     {
        $('#rec_letter').css('display','none');

     }
}
