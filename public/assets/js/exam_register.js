
function createDAExamRegister()
{
    var send_data = new FormData();
    var invoice_image = $('#invoice_image')[0].files[0];
    send_data.append('student_id',student_id);
    send_data.append('private_school_name', $("input[name=private_school_name]").val());
    send_data.append('invoice_image', invoice_image);
    $(':radio:checked').map(function(){send_data.append('is_full_module',$(this).val())});

    send_data.append('form_type',$("#form_type").val());
    // console.log('form_type',$("input[name=form_type]").val());
    $.ajax({
        url: BACKEND_URL+"/exam_register",
        type: 'post',
        data:send_data,
        contentType: false,
        processData: false,
        success: function(result){
        
            location.href = FRONTEND_URL + "/student_course/1";
            localStorage.setItem('exam_status',0)
            successMessage(result);

      }
    });
}


$('#cpa_exam_register').submit(function(e){
    e.preventDefault();
  
    var form_data = new FormData(this);
    form_data.append('form_type',$("#form_type").val());
    form_data.append('student_id',student_id);
    console.log('form_type',$("input[name=form_type]").val());
    $.ajax({
        url: BACKEND_URL+"/cpa_exam_register",
        type: 'post',
        data:form_data,
        contentType: false,
        processData: false,
        success: function(result){
             // location.reload();
             localStorage.setItem('approve_reject', 1);
             location.href = FRONTEND_URL + "/student_course/2";

            successMessage(result);
      }
    });

})
