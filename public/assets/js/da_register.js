function ConfirmSubmit(){
    var radio = document.getElementById("submit_confirm");
    if (radio.checked == true){
        document.getElementById("submit_btn").disabled= false;
    } 
    else{
    document.getElementById("submit_btn").disabled = true;
    }
}

var count=1;
function AddDAEdu(){
    $("#edu").append(        

        '<div class="row mb-4" id="edu'+count+'">'+
            '<div class="col-md-5"></div>'+            
            '<div class="col-md-6">'+
                '<input type="file"  class="form-control"  id="certificate'+count+'"  name="certificate[]" required="">'+
            '</div>'+
            '<div class="col-md-1 text-center"  id="edu'+count+'_remove">'+
                '<button class="btn btn-danger" id="myLink" onclick="remove(edu'+count+')">'+
                    '<i class="fa fa-trash "></i>'+
                '</button>'+
            '</div>'+
        '</div>');
        
    count++;

}


function createDARegister()
{
    if($("input[name=password]").val()!=$("input[name=confirm_password]").val())
    {
        alert("Your password and confirm password do not match!");
        return;
    }
    var send_data = new FormData();

    var image = $('#image')[0].files[0];
    var nrc_front = $("input[name=nrc_front]")[0].files[0];
    var nrc_back = $("input[name=nrc_back]")[0].files[0];
    // var certificate = $('#certificate0')[0].files[0];
    var nrc_state_region = $("#nrc_state_region").val();
    var nrc_township = $("#nrc_township").val();
    var nrc_citizen = $("#nrc_citizen").val();

    send_data.append('name_mm', $("input[name=name_mm]").val());
    send_data.append('name_eng', $("input[name=name_eng]").val());
    send_data.append('nrc_state_region', nrc_state_region);
    send_data.append('nrc_township', nrc_township);
    send_data.append('nrc_citizen', nrc_citizen);
    send_data.append('nrc_number', $("input[name=nrc_number]").val());
    send_data.append('nrc_front', nrc_front);
    send_data.append('nrc_back', nrc_back);
    send_data.append('father_name_mm', $("input[name=father_name_mm]").val());
    send_data.append('father_name_eng', $("input[name=father_name_eng]").val());
    send_data.append('race', $("input[name=race]").val());
    send_data.append('religion', $("input[name=religion]").val());
    send_data.append('date_of_birth', $("input[name=date_of_birth]").val());
    send_data.append('address', $("input[name=address]").val());
    send_data.append('current_address', $("input[name=current_address]").val());
    send_data.append('phone', $("input[name=phone]").val());
    $(':radio:checked').map(function(){send_data.append('gov_staff',$(this).val())});
    send_data.append('image', image);
    send_data.append('registration_no', $("input[name=registration_no]").val());
    // send_data.append('date', $("input[name=date]").val());
    send_data.append('email', $("input[name=email]").val());
    send_data.append('password', $("input[name=password]").val());

    send_data.append('name', $("input[name=name]").val());
    send_data.append('position', $("input[name=position]").val());
    send_data.append('department', $("input[name=department]").val());
    send_data.append('organization', $("input[name=organization]").val());
    send_data.append('company_name', $("input[name=company_name]").val());
    send_data.append('salary', $("input[name=salary]").val());
    send_data.append('office_address', $("input[name=office_address]").val());

    send_data.append('university_name', $("input[name=university_name]").val());
    send_data.append('degree_name', $("input[name=degree_name]").val());
    // send_data.append('certificate', certificate);
    $('input[name="certificate[]"]').map(function(){
        for (var i = 0; i < $(this).get(0).files.length; ++i) {
            send_data.append('certificate[]',$(this).get(0).files[i]);
        }
    });
    send_data.append('qualified_date', $("input[name=qualified_date]").val());
    send_data.append('roll_number', $("input[name=roll_number]").val());


    send_data.append('verify_status', $("input[name=verify_status]").val());
    send_data.append('payment_method', $("input[name=payment_method]").val());
    send_data.append('verify_code', $("input[name=verify_code]").val());

    var url = location.pathname;
    var batch_id = url.substring(url.lastIndexOf('/')+1);
    

    send_data.append('batch_id', batch_id);
    show_loader();
    // var verify_code = localStorage.getItem("code");

    // $.ajax({
    //     url: BACKEND_URL+"/da_register",
    //     type: 'post',
    //     data:send_data,
    //     contentType: false,
    //     processData: false,
    //     success: function(result){
    //          if(result.name_mm!=null){
    //              EasyLoading.hide();
    //             successMessage("You have successfully registerd!");                
    //             // location.reload();
    //             location.href = FRONTEND_URL+'/' ;
    //          }
    //          else{
    //             EasyLoading.hide();
    //             successMessage(result);
    //          }
    //     },
    //     error:function (message){
    //         EasyLoading.hide();
    //         errorMessage(message);
    //         }
    //     // },
    //     // error:function (message){
    //     //   // console.log(message)
    //     //   successMessage(result);
    //     // }
    // });

    $.ajax({
        url: BACKEND_URL+"/da_register",
        type: 'post',
        data:send_data,
        contentType: false,
        processData: false,
        success: function(result){
            console.log(result)
            successMessage("You have successfully registerd!");                
            location.href = FRONTEND_URL+'/' ;
        },
        error:function (message){
            EasyLoading.hide();
            errorMessage(message);
            }
        // },
        // error:function (message){
        //   // console.log(message)
        //   successMessage(result);
        // }
    });
}

function send_email()
{
    var send_data = new FormData();
    send_data.append('email', $("input[name=email]").val());
    $.ajax({
        url: BACKEND_URL+"/send_email",
        type: 'post',
        data:send_data,
        contentType: false,
        processData: false,
        success: function(data){
            console.log(data)
            localStorage.setItem('verify_code', JSON.stringify(data));
            successMessage("Your email is sending to MAC");  
        },
        error:function (message){
            EasyLoading.hide();
            errorMessage(message);
            }
        // },
        // error:function (message){
        //   // console.log(message)
        //   successMessage(result);
        // }
    });
}

function check_email()
{
    var text = localStorage.getItem('verify_code');
    var obj = JSON.parse(text);
    var verify_code = obj.data.verify_code;
    var code = $("input[name=verify_code]").val();
    if(verify_code != code){
        alert("You code is not correct.Please check your email inbox again!");
    } 
}

function da_edit(){
    var student = JSON.parse(localStorage.getItem('studentinfo'));
   
     $.ajax({
        type:'GET',
        url: BACKEND_URL+'/student_info/'+student.id,
        success:function(result){
            console.log(result)
             var data = result.data;
             var education = result.data.student_education_histroy;
            $('#stu_id').val(data.id);
            $('#name_mm').val(data.name_mm);
            $('#name_eng').val(data.name_eng);
            $('#nrc_state_region').val(data.nrc_state_region);
            $('#nrc_township').val(data.nrc_township);
            $('#nrc_citizen').val(data.nrc_citizen);
            $('#nrc_number').val(data.nrc_number)
            $('#father_name_mm').val(data.father_name_mm);
            $('#father_name_eng').val(data.father_name_eng);
            $('#race').val(data.race);
            $('#religion').val(data.religion);
            $('#date_of_birth').val(data.date_of_birth);
            $('#phone').val(data.phone);
            $('#address').val(data.address);
            $('#current_address').val(data.current_address);
            $('#old_image').val(data.image);
            $('#old_certificate').val(education.certificate);
            $('#name').val(data.student_job.name);
            $('#position').val(data.student_job.position);
            $('#department').val(data.student_job.department);
            $('#organization').val(data.student_job.organization);
            $('#company_name').val(data.student_job.company_name);
            $('#salary').val(data.student_job.salary);
            $('#office_address').val(data.student_job.office_address);
            data.gov_staff == 0 
            ?  $("#no").prop("checked", true)
            : $("#yes").prop("checked", true)  ; 
            $('#uni_name').val(education.university_name);
            $('#degree_name').val(education.degree_name);
            $('#qualified_date').val(education.qualified_date);
            $('#roll_number').val(education.roll_number);
            $('#batch_id').val(data.student_course.batch_id);

        }
    })

}

$('#da_update').submit(function(e){
    e.preventDefault();
  

    var formData = new FormData(this);
    formData.append('_method', 'PATCH');
    var student_id = $('#stu_id').val();
 
     
        $.ajax({
            type: "POST",
            url: BACKEND_URL+"/student_info/"+student_id,
            
            contentType: false,
            processData: false,
            data: formData,
            success: function (data) {
                localStorage.setItem('approve_reject', data.approve_reject_status);
                location.href = FRONTEND_URL + "/student_course/1";
            },
            error:function (message){
            }
        })

})

//store Da Application Form
$('#store_da_two_form').submit(function(e){
    e.preventDefault();
   
    var formData = new FormData(this);
   
    formData.append('student_id',student_id);
    //show_loader();
    $.ajax({
        url: BACKEND_URL+"/store_cpa_da_two_app_form",
        type: 'post',
        data:formData,
        contentType: false,
        processData: false,
        success: function(data){      
            console.log("check",data)
            //EasyLoading.hide();      
            localStorage.setItem('approve_reject', data.approve_reject_status);
            //successMessage("You have successfully registerd!");
            //location.href = FRONTEND_URL+"/"; 
        },
      error:function (message){
        EasyLoading.hide();      

        errorMessage(message);
          }
        // },
        // error:function (message){
        //   // console.log(message)
        //   successMessage(result);
        // }
    });
});

$('#payment_submit').submit(function(e){
    e.preventDefault();
    location.href = FRONTEND_URL+"/"; 
});

function createDaTwoSelfStudy()
{
     
    localStorage.setItem("isPrivateSchool",false);
    var send_data = new FormData();
    send_data.append('student_id',student_id);
    send_data.append('batch_id',$("input[name='batch_id']").val())
    send_data.append('type', 0);
    $(':checkbox:checked').map(function(){send_data.append('reg_reason[]',$(this).val())});
    send_data.append('form_type', $("input[name='form_type']").val());
    show_loader();
    $.ajax({
        url: BACKEND_URL+"/store_student_app_reg",
        type: 'post',
        data:send_data,
        contentType: false,
        processData: false,
        success: function(result){
            EasyLoading.hide();
            successMessage(result);
            // location.reload();
            location.href = FRONTEND_URL+"/";
        },
        error:function(message){
            EasyLoading.hide();

        }

    });
}

function createDaTwoPrivateSchool()
{

 
    localStorage.setItem("isPrivateSchool",true);
    var send_data = new FormData();
    send_data.append('student_id',student_id);
    send_data.append('batch_id',$("input[name='batch_id']").val())

    send_data.append('type', 1);
    send_data.append('form_type', $("input[name='form_type']").val());
    if($("input[name='form_type']").val()=="da two"){
        send_data.append('date', formatDate($("input[name='exam_date']").val()));
    }
    show_loader();
    
    $.ajax({
        url: BACKEND_URL+"/store_student_app_reg",
        type: 'post',
        data:send_data,
        contentType: false,
        processData: false,
        success: function(result){    
            EasyLoading.hide();        
            successMessage(result);
            // location.reload();
            location.href = FRONTEND_URL+"/";
      },
      error:function(message){
        EasyLoading.hide();

    }
    });
}

function createDaTwoMac()
{
    
    localStorage.setItem("isPrivateSchool",false);
    var send_data = new FormData();
    send_data.append('student_id',student_id);
    send_data.append('batch_id',$("input[name='batch_id']").val())

    send_data.append('type', 2);
    send_data.append('form_type', $("input[name='form_type']").val());
    show_loader();
    $.ajax({
        url: BACKEND_URL+"/store_student_app_reg",
        type: 'post',
        data:send_data,
        contentType: false,
        processData: false,
        success: function(result){
            EasyLoading.hide();
            successMessage(result);
            // location.reload();
            location.href = FRONTEND_URL+"/";
        }, 
        error:function(message){
            EasyLoading.hide();

    }
    });
}