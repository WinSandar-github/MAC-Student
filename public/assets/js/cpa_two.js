$("input[id='cpa_one_pass_date']").flatpickr({
    enableTime: false,
    dateFormat: "d-m-Y",
    allowInput: true,
});
var boo=localStorage.getItem("isPrivateSchool");
if(boo=="true" ){
    console.log(boo,"true");
    if(document.getElementById('is_private_school'))
    {document.getElementById('is_private_school').style.display='block';}
}
else{
    console.log(boo,"false");
    if(document.getElementById('is_private_school'))
    {document.getElementById('is_private_school').style.display='none';}
}
var cpaOneID;

function ConfirmSubmit(){
    var radio = document.getElementById("submit_confirm");
    if (radio.checked == true){
        document.getElementById("submit_btn").disabled= false;
    } 
    else{
    document.getElementById("submit_btn").disabled = true;
    }
}

function CPA2_Private_School_Submit(){
    localStorage.setItem("isPrivateSchool",true);
    var student = JSON.parse(localStorage.getItem('studentinfo'));
    
    var data = new FormData();
    data.append('batch_id',$("input[name='batch_id']").val())
    data.append('student_id',student.id);
    data.append('cpa_one_pass_date', $("#cpa_one_pass_date").val());
    data.append('cpa_one_access_no', $("#cpa_one_access_no").val());
    data.append('cpa_one_success_no', $("#cpa_one_success_no").val());
    data.append('type', 1);
    data.append('form_type',localStorage.getItem('course_id'));
    show_loader();
    $.ajax({
        url: BACKEND_URL+"/store_student_app_reg",
        type: 'post',
        data:data,
        contentType: false,
        processData: false,
        success: function(result){
            EasyLoading.hide();
            console.log(result);  
            if(result.message==undefined){
                successMessage(result);
                location.href = FRONTEND_URL+'/';
            }   
            else{       
                successMessage(result.message);
                location.href = FRONTEND_URL+'/';
            }
        },
        error:function (message){
            console.log(message);
            EasyLoading.hide();
            }
        });
}
function CPA2_Mac_Submit(){
    localStorage.setItem("isPrivateSchool",false);
    var student = JSON.parse(localStorage.getItem('studentinfo'));
    
    var data = new FormData();
    data.append('batch_id',$("input[name='batch_id']").val())
    data.append('student_id',student.id);
    data.append('cpa_one_pass_date', $("#cpa_one_pass_date").val());
    data.append('cpa_one_access_no', $("#cpa_one_access_no").val());
    data.append('cpa_one_success_no', $("#cpa_one_success_no").val());
    data.append('type', 2);
    data.append('form_type',localStorage.getItem('course_id'));
    show_loader();
    $.ajax({
        url: BACKEND_URL+"/store_student_app_reg",
        type: 'post',
        data:data,
        contentType: false,
        processData: false,
        success: function(result){
            EasyLoading.hide();
              
            if(result.message==undefined){
                successMessage(result);
                location.href = FRONTEND_URL+'/';
            }   
            else{       
                successMessage(result.message);
                location.href = FRONTEND_URL+'/';
            }
        },
        error:function (message){
            console.log(message);
            EasyLoading.hide();
            }
        });
}
function CPA2_Self_Study_Submit(){
    localStorage.setItem("isPrivateSchool",false);
    var student = JSON.parse(localStorage.getItem('studentinfo'));
    
    var data = new FormData();
    data.append('batch_id',$("input[name='batch_id']").val())
    data.append('student_id',student.id);
    $(':checkbox:checked').map(function(){data.append('reg_reason[]',$(this).val())});
    data.append('batch_part_no',$("#batch_part_no").val() );
    data.append('type',0);
    data.append('form_type',localStorage.getItem('course_id'));
    show_loader();
    $.ajax({
        url: BACKEND_URL+"/store_student_app_reg",
        type: 'post',
        data:data,
        contentType: false,
        processData: false,
        success: function(result){
            EasyLoading.hide();
            console.log(result);  
            if(result.message==undefined){
                successMessage(result);
                location.href = FRONTEND_URL+'/';
            }   
            else{    
             EasyLoading.hide();

                successMessage(result.message);
                location.href = FRONTEND_URL+'/';
            }
        },
        error:function (message){
            console.log(message);
            EasyLoading.hide();
            }
        });
}



$('#store_cpa_two_form').submit(function(e){
    e.preventDefault();

    var formData = new FormData(this);
    formData.append('student_id',student_id);
    show_loader();
    $.ajax({
        url: BACKEND_URL+"/store_cpa_da_two_app_form",
        type: 'post',
        data:formData,
        contentType: false,
        processData: false,
        success: function(data){
            EasyLoading.hide();
            localStorage.setItem('approve_reject', data.approve_reject_status);
            location.href = FRONTEND_URL+"/"; 
        },
      error:function (message){
        errorMessage(message);
        EasyLoading.hide();
          }
        // },
        // error:function (message){
        //   // console.log(message)
        //   successMessage(result);
        // }
    });
});
