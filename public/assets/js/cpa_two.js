$("input[id='cpa_one_pass_date']").flatpickr({
    enableTime: false,
    dateFormat: "d-m-Y",
    allowInput: true,
});
var cpaOneID;
async function SearchCPAOneByNRC(){
    var nrc_state_region = $("#nrc_state_region").val();
    var nrc_township = $("#nrc_township").val();
    var nrc_citizen = $("#nrc_citizen").val();
    var nrc_number=$("input[name=nrc_number]").val();

    var nrc = new FormData();
    
    nrc.append('nrc_state_region', nrc_state_region);
    nrc.append('nrc_township', nrc_township);
    nrc.append('nrc_citizen', nrc_citizen);
    nrc.append('nrc_number', nrc_number);
    await $.ajax({
        url:BACKEND_URL+"/cpa_one_by_nrc",
        type: 'post',
        data: nrc,
        contentType: false,
        processData: false,
        success: function(result){
                if(result.data!=null){
                    cpaOneID=result.data.id;

                    document.getElementById("fieldset").disabled = false;
                }
                else{
                    alert("No Information!");
                    document.getElementById("fieldset").disabled = true;
                }
            }
        });
}

function CPA2_Private_School_Submit(){
    var data = new FormData();
    data.append('cpa_one_id', cpaOneID);
    data.append('cpa_one_pass_date', $("#cpa_one_pass_date").val());
    data.append('cpa_one_access_no', $("#cpa_one_access_no").val());
    data.append('cpa_one_success_no', $("#cpa_one_success_no").val());
    data.append('enrol_no_exam', 0);
    data.append('attendance', 0);
    data.append('fail_exam', 0);
    data.append('resigned', 0);
    data.append('batch_session_no', "");
    data.append('entrance_part', "");
    data.append('entrance_exam_no', "");
    data.append('cpa_two_type', 1);
    $.ajax({
        url: BACKEND_URL+"/cpa_two_registration",
        type: 'post',
        data:data,
        contentType: false,
        processData: false,
        success: function(result){
            console.log(result);  
            if(result.message==undefined){
                successMessage(result);
            }   
            else{       
                successMessage(result.message);
                location.reload();
            }
        },
        error:function (message){
            console.log(message);
            }
        });
}
function CPA2_Mac_Submit(){
    var data = new FormData();
    data.append('cpa_one_id', cpaOneID);
    data.append('cpa_one_pass_date', $("#cpa_one_pass_date").val());
    data.append('cpa_one_access_no', $("#cpa_one_access_no").val());
    data.append('cpa_one_success_no', $("#cpa_one_success_no").val());
    data.append('enrol_no_exam', 0);
    data.append('attendance', 0);
    data.append('fail_exam', 0);
    data.append('resigned', 0);
    data.append('batch_session_no', "");
    data.append('entrance_part', "");
    data.append('entrance_exam_no', "");
    data.append('cpa_two_type', 2);
    $.ajax({
        url: BACKEND_URL+"/cpa_two_registration",
        type: 'post',
        data:data,
        contentType: false,
        processData: false,
        success: function(result){
            console.log(result);  
            if(result.message==undefined){
                successMessage(result);
            }   
            else{       
                successMessage(result.message);
                location.reload();
            }
        },
        error:function (message){
            console.log(message);
            }
        });
}
function CPA2_Self_Study_Submit(){
    var enrol_no_exam=document.getElementById('enrol_no_exam');
    var attendance=document.getElementById('attendance');
    var fail_exam=document.getElementById('fail_exam');
    var resigned=document.getElementById('resigned');
    var data = new FormData();
    data.append('cpa_one_id', cpaOneID);
    data.append('cpa_one_pass_date', "");
    data.append('cpa_one_access_no', "");
    data.append('cpa_one_success_no', "");
    if(enrol_no_exam.checked){
        data.append('enrol_no_exam', 1);
    }
    else{
        data.append('enrol_no_exam', 0);
    }
    if(attendance.checked){
        data.append('attendance', 1);
    }
    else{
        data.append('attendance', 0);
    }
    if(fail_exam.checked){
        data.append('fail_exam', 1);
    }
    else{
        data.append('fail_exam', 0);
    }
    if(resigned.checked){
        data.append('resigned', 1);
    }
    else{
        data.append('resigned', 0);
    }
    data.append('batch_session_no',$("#batch_session_no").val() );
    data.append('entrance_part', $("#entrance_part").val());
    data.append('entrance_exam_no', $("#entrance_exam_no").val());
    data.append('cpa_two_type',0);
    $.ajax({
        url: BACKEND_URL+"/cpa_two_registration",
        type: 'post',
        data:data,
        contentType: false,
        processData: false,
        success: function(result){
            console.log(result);  
            if(result.message==undefined){
                successMessage(result);
            }   
            else{       
                successMessage(result.message);
                location.reload();
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
        url: BACKEND_URL+"/store_da_two_app_form",
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
