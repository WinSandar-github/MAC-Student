function createExamRegister()
{
    var send_data = new FormData();
    var invoice_image = $('#invoice_image')[0].files[0];

    send_data.append('student_id',student_id);
    send_data.append('private_school_name', $("input[name=private_school_name]").val());
    send_data.append('invoice_image', invoice_image);
    $(':radio:checked').map(function(){send_data.append('is_full_module',$(this).val())});

    $.ajax({
        url: BACKEND_URL+"/exam_register",
        type: 'post',
        data:send_data,
        contentType: false,
        processData: false,
        success: function(result){
            // console.log(result)
            successMessage(result);
      }
    });
}


$('#cpa_exam_register').submit(function(e){
    e.preventDefault();
    var form_data = new FormData(this);
    form_data.append('student_id',student_id);
    console.log(student_id)

    $.ajax({
        url: BACKEND_URL+"/cpa_exam_register",
        type: 'post',
        data:form_data,
        contentType: false,
        processData: false,
        success: function(result){
             location.reload();
            // successMessage(result);
      }
    });

})
