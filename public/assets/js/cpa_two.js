$("input[id='cpa_one_pass_date']").flatpickr({
    enableTime: false,
    dateFormat: "d-m-Y",
    allowInput: true,
});
var cpaOneID;

function CPA2_Private_School_Submit(){
    var student = JSON.parse(localStorage.getItem('studentinfo'));
    var data = new FormData();
    data.append('student_id',student.id);
    data.append('cpa_one_pass_date', $("#cpa_one_pass_date").val());
    data.append('cpa_one_access_no', $("#cpa_one_access_no").val());
    data.append('cpa_one_success_no', $("#cpa_one_success_no").val());
    data.append('type', 1);
    data.append('form_type',localStorage.getItem('course_id'));
    $.ajax({
        url: BACKEND_URL+"/student_register",
        type: 'post',
        data:data,
        contentType: false,
        processData: false,
        success: function(result){
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
            }
        });
}
function CPA2_Mac_Submit(){
    var student = JSON.parse(localStorage.getItem('studentinfo'));
    var data = new FormData();
    data.append('student_id',student.id);
    data.append('cpa_one_pass_date', $("#cpa_one_pass_date").val());
    data.append('cpa_one_access_no', $("#cpa_one_access_no").val());
    data.append('cpa_one_success_no', $("#cpa_one_success_no").val());
    data.append('type', 2);
    data.append('form_type',localStorage.getItem('course_id'));
    $.ajax({
        url: BACKEND_URL+"/student_register",
        type: 'post',
        data:data,
        contentType: false,
        processData: false,
        success: function(result){
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
            }
        });
}
function CPA2_Self_Study_Submit(){
    var student = JSON.parse(localStorage.getItem('studentinfo'));
    var data = new FormData();
    data.append('student_id',student.id);
    $(':checkbox:checked').map(function(){data.append('reg_reason[]',$(this).val())});
    data.append('batch_part_no',$("#batch_part_no").val() );
    data.append('type',0);
    data.append('form_type',localStorage.getItem('course_id'));
    $.ajax({
        url: BACKEND_URL+"/student_register",
        type: 'post',
        data:data,
        contentType: false,
        processData: false,
        success: function(result){
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
            }
        });
}



$('#store_cpa_two_form').submit(function(e){
    e.preventDefault();

    var formData = new FormData(this);
    formData.append('student_id',student_id);
    $.ajax({
        url: BACKEND_URL+"/store_cpa_da_two_app_form",
        type: 'post',
        data:formData,
        contentType: false,
        processData: false,
        success: function(data){
            localStorage.setItem('approve_reject', data.approve_reject_status);
            location.href = "/student_course/2"; 
        },
      error:function (message){
        errorMessage(message);
          }
        // },
        // error:function (message){
        //   // console.log(message)
        //   successMessage(result);
        // }
    });
});