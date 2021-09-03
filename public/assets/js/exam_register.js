
function createDAExamRegister()
{
    var school_id;
    var school_name;
    if($("#is_private").val() =="true" ){
        school_id = $("#selected_school_id").val();
        school_name = $("#selected_school_id option:selected").text();
    }
    else{
        school_id = 0;
        school_name = " ";
    }
    var send_data = new FormData();
    // var invoice_image = $('#invoice_image')[0].files[0];

    send_data.append('student_id',student_id);
    send_data.append('private_school_id', school_id);
    send_data.append('private_school_name', school_name);
    // send_data.append('invoice_image', invoice_image);
    send_data.append('date', $("input[name=date]").val());
    // send_data.append('invoice_image', $("input[name=invoice_image]").val());
    $(':radio:checked').map(function(){send_data.append('is_full_module',$(this).val())});

    send_data.append('form_type',$("#form_type").val());
    // console.log('form_type',$("input[name=form_type]").val());
    show_loader();
    $.ajax({
        url: BACKEND_URL+"/exam_register",
        type: 'post',
        data:send_data,
        contentType: false,
        processData: false,
        success: function(result){
            EasyLoading.hide();

            location.href = FRONTEND_URL + "/";
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
    // send_data.append('invoice_image', $("input[name=invoice_image]").val());
    $(':radio:checked').map(function(){form_data.append('is_full_module',$(this).val())});
    console.log('form_type',$("input[name=form_type]").val());
    show_loader();
    $.ajax({
        url: BACKEND_URL+"/cpa_exam_register",
        type: 'post',
        data:form_data,
        contentType: false,
        processData: false,
        success: function(result){
             EasyLoading.hide();
             localStorage.setItem('approve_reject', 1);
             location.href = FRONTEND_URL + "/";

            //successMessage(result);
      }
    });

})

$('#da2submit').click(function(){
    if($('#last_exam_date').val() == '' ){
        alert('Exam date can not be left blank');
        return false;
    }else{
        $('#exampleModal').modal('show');
        return true;
    }

});

$(document).on('click', '#channel', function () {
    setTimeout(function() {$('#exampleModal').modal('hide');}, 1000);
    $('#examModal').modal('show');
    return true;
})

$('#exam_btn').click(function() {
    setTimeout(function() {
        $('#examModal').modal('hide');
    }, 1000);
});

