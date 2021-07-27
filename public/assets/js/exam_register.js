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

function createCpaExamRegister()
{
    var form_data = new FormData();
    //var invoice_image = $('#invoice_image')[0].files[0];

    //form_data.append('student_id',student_id);
    var private_school_name = $("input[name=private_school_name]").val();
    var last_exam_no = $("input[name=last_exam_no]").val();
    var last_exam_date = $("input[name=last_exam_date]").val();
    var paid_exam_fees_receipt_no = $("input[name=paid_exam_fees_receipt_no]").val();
    var paid_date = $("input[name=paid_date]").val();
    var passed_modules = [];
        $(':checkbox:checked').each(function(i){
          passed_modules[i] = $(this).val();
        });

    form_data.append('private_school_name', private_school_name);
    form_data.append('last_exam_no', last_exam_no);
    form_data.append('last_exam_date', last_exam_date);
    form_data.append('paid_exam_fees_receipt_no', paid_exam_fees_receipt_no);
    form_data.append('paid_date', paid_date);
    form_data.append('passed_modules', passed_modules);
    //form_data.append('invoice_image', invoice_image);
    $(':radio:checked').map(function(){form_data.append('is_full_module',$(this).val())});
    //$(':checkbox:checked').map(function(){form_data.append('passed_modules',$(this).val())});

    $.ajax({
        url: BACKEND_URL+"/exam_register",
        type: 'post',
        data:form_data,
        contentType: false,
        processData: false,
        success: function(result){
            // console.log(result)
            successMessage(result);
      }
    });
}
