function createExamRegister()
{
    var send_data = new FormData();
    var invoice_image = $('#invoice_image')[0].files[0];

    send_data.append('student_id',student_id);
    send_data.append('private_school_name', $("input[name=private_school_name]").val());
    send_data.append('invoice_image', invoice_image);
    $(':radio:checked').map(function(){send_data.append('is_full_module',$(this).val())});
    
    $.ajax({
        url: BACKEND_URL+"/api/exam_register",
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