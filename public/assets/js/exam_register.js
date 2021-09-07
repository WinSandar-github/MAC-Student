
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

    var form_data = new FormData(this);
    form_data.append('form_type',$("#form_type").val());
    form_data.append('student_id',student_id);
    form_data.append('private_school_id', school_id);
    form_data.append('private_school_name', school_name);
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

            successMessage(result);
      }
    });

})

//da2 exam
$( "#da2submit" ).click(function() {
    if(all_Filled('#da2_exam')){
        $('#da2examModal').modal('show');
    }
});
function all_Filled(form_id) {
    var filled = true;
    $(form_id+' input').each(function() {
        console.log($(this).attr('id'));
        if($("#last_exam_date").val() == ''){
            filled = false;
        }
        if($("#date").val() == ''){
            filled = false;
        }
    });
    return filled;        
}

$('#cash_img').click(function() {
    $('#da2exam_btn').prop('disabled', false);
});

$('#btn_cbpay').prop('disabled', true);
$('#btn_mpu').prop('disabled', true);
$('#da2exam_btn').prop('disabled', true);

$('#da2exam_btn').click(function () {
    setTimeout(function () {
        $('#da2examModal').modal('hide');
    }, 1000);
});

//cpa2 exam
$( "#cpa2submit" ).click(function() {
    if(all_Filled('#cpa2_exam_form')){
        $('#cpa2examModal').modal('show');
    }
});

$('#cpa2exam_img').click(function() {
    $('#cpa2exam_btn').prop('disabled', false);
});

$('#btn_cbpay').prop('disabled', true);
$('#btn_mpu').prop('disabled', true);
$('#cpa2exam_btn').prop('disabled', true);

$('#cpa2exam_btn').click(function () {
    setTimeout(function () {
        $('#cpa2examModal').modal('hide');
    }, 1000);
});