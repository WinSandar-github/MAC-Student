function createExamRegister()
{
    var send_data = new FormData();
    var invoice_image = $('#invoice_image')[0].files[0];
    send_data.append('student_info_id', $("input[name=student_info_id]").val());
    send_data.append('date', $("input[name=date]").val());
    send_data.append('invoice_image', invoice_image);
    send_data.append('invoice_date', $("input[name=invoice_date]").val());
    send_data.append('private_school_name', $("input[name=private_school_name]").val());
    send_data.append('grade', $("input[name=grade]").val());
    send_data.append('batch_id', $("input[name=batch_id]").val());
    send_data.append('exam_type_id', $("input[name=exam_type_id]").val());
    $(':radio:checked').map(function(){send_data.append('is_full_module',$(this).val())});
    
    $.ajax({
        url: BACKEND_URL+"/api/exam_register",
        type: 'post',
        data:send_data,
        contentType: false,
        processData: false,
        success: function(result){
            successMessage(result);
      }
    });
}