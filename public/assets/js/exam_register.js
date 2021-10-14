function createDAExamRegister()
{
    // var school_id;
    var school_name;
    if($("#is_private").val() =="true" ){
        // school_id = $("#selected_school_id").val();
        school_name = $("input[name=private_school_name]").val();
    }
    else{
        // school_id = 0;
        school_name = " ";
    }
    var send_data = new FormData();
    // var invoice_image = $('#invoice_image')[0].files[0];

    send_data.append('student_id',student_id);
    // send_data.append('private_school_id', school_id);
    send_data.append('private_school_name', school_name);
    // send_data.append('invoice_image', invoice_image);
    send_data.append('date', $("input[name=date]").val());
    send_data.append('exam_reg_date', $("input[name=exam_reg_date]").val());
    // send_data.append('invoice_image', $("input[name=invoice_image]").val());
    $(':radio:checked').map(function(){send_data.append('is_full_module',$(this).val())});
    // $(':checkbox:checked').map(function(){send_data.append('last_ans_module[]',$(this).val())});
    $('input[name="last_ans_module[]"]:checked').map(function (key, val) {
        send_data.append('last_ans_module[]', val.value);
    });
    send_data.append('form_type',$("#form_type").val());
    send_data.append('exam_department',$('#exam_department').val());

    show_loader();
    $.ajax({
        url: BACKEND_URL+"/exam_register",
        type: 'post',
        data:send_data,
        contentType: false,
        processData: false,
        success: function(result){
            EasyLoading.hide();
            successMessage(result);
            location.href = FRONTEND_URL + "/";
            localStorage.setItem('exam_status',0)
            

      }
    });
}

// validate submit checkbox
$("#submit_confirm_mac").change(function() {
    var ischecked= $(this).is(':checked');
    if(!ischecked){
      $("#btn_da_exam_submit").prop('disabled',true);
      $("#da2submit").prop('disabled',true);
    }
    else{
      $("#btn_da_exam_submit").prop('disabled',false);
      $("#da2submit").prop('disabled',false);
    }
});

// DA 1 exam
// $( "#btn_da_exam_submit" ).click(function() {
//     if( $("input[name='exam_department']").val()!=""){
//         $('#da1examModal').modal('show');
//     }
// });
// function allFilled(form_id) {
//     var filled = true;
//     $(form_id+' input').each(function() {
//         if($(this).val() == ''  ) filled = false;
//         if($(this).is(':radio') && $('input[type=radio][name=is_full_module]:checked').length == 0) filled = false;
//     });
//     return filled;
// }
$('#cash_img').click(function() {
    $('#da1exam_btn').prop('disabled', false);
});

$('#cb_img').click(function() {
    $('#da1exam_btn').prop('disabled', true);
});

$('#mpu_img').click(function() {
    $('#da1exam_btn').prop('disabled', true);
});
$('#da1exam_btn').prop('disabled', true);

$('#da1exam_btn').click(function () {
    setTimeout(function () {
        $('#da1examModal').modal('hide');
    }, 1000);
});

// cpa1 exam
// $( "#cpa1submit" ).click(function() {
//     if(allfilled('#cpa1_exam_form')){
//         $('#cpa1examModal').modal('show');
//     }
// });
// function allfilled(form_id) {
//     var filled = true;
//     $(form_id+' input').each(function() {
//         if($(this).val() == ''  ) filled = false;
//         if($(this).is(':radio') && $('input[type=radio][name=is_full_module]:checked').length == 0) filled = false;
//     });
//     return filled;
// }

$('#cpa1exam_img').click(function() {
    $('#cpa1exam_btn').prop('disabled', false);
});

$('#btn_cbpay').prop('disabled', true);
$('#btn_mpu').prop('disabled', true);
$('#cpa1exam_btn').prop('disabled', true);

$('#cpa1exam_btn').click(function () {
    setTimeout(function () {
        $('#cpa1examModal').modal('hide');
    }, 1000);
});

$('#cpa_exam_register').submit(function(e){
    e.preventDefault();

    // var school_id;
    var school_name;
    if($("#is_private").val() =="true" ){
        // school_id = $("#selected_school_id").val();
        school_name = $("input[name=private_school_name]").val();
    }
    else{
        // school_id = 0;
        school_name = " ";
    }

    var form_data = new FormData(this);
    form_data.append('form_type',$("#form_type").val());
    form_data.append('student_id',student_id);
    // form_data.append('private_school_id', school_id);
    form_data.append('private_school_name', school_name);
    // send_data.append('invoice_image', $("input[name=invoice_image]").val());
    form_data.append('exam_department',$('#exam_department').val());
    // $('input[name="last_ans_module[]"]:checked').map(function (key, val) {
    //     form_data.append('last_ans_module[]', val.value);
    // });
    $(':radio:checked').map(function(){form_data.append('is_full_module',$(this).val())});
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
// $( "#da2submit" ).click(function() {
//     if(all_Filled('#da2_exam')){
//         $('#da2examModal').modal('show');
//     }
// });
// function all_Filled(form_id) {
//     var filled = true;
//     $(form_id+' input').each(function() {
//         if($("#last_exam_date").val() == ''){
//             filled = false;
//         }
//         if($("#date").val() == ''){
//             filled = false;
//         }
//     });
//     return filled;
// }

// $("#da2submit").click(function () {
//     if($("input[name=last_exam_date]").val() != "" &&
//         $('input[name="last_ans_module[]"]:checked').length > 0 && 
//         $("#exam_department").val() != "" ){
//             $('#da2examModal').modal('show');
//     }else{
//         $('#da2examModal').modal('hide');
//     }
// });

$('#cash_img').click(function() {
    $('#da2exam_btn').prop('disabled', false);
});

$('#cb_img').click(function() {
    $('#da2exam_btn').prop('disabled', true);
});

$('#mpu_img').click(function() {
    $('#da2exam_btn').prop('disabled', true);
});
$('#da2exam_btn').prop('disabled', true);

$('#da2exam_btn').click(function () {
    setTimeout(function () {
        $('#da2examModal').modal('hide');
    }, 1000);
});

//cpa2 exam
// $( "#cpa2submit" ).click(function() {
//     if(all_Filled('#cpa2_exam_form')){
//         $('#cpa2examModal').modal('show');
//     }
// });

$('#cpa2exam_img').click(function() {
    $('#cpa2exam_btn').prop('disabled', false);
});

$('#cb_img').click(function() {
    $('#cpa2exam_btn').prop('disabled', true);
});

$('#mpu_img').click(function() {
    $('#cpa2exam_btn').prop('disabled', true);
});
$('#cpa2exam_btn').prop('disabled', true);

$('#cpa2exam_btn').click(function () {
    setTimeout(function () {
        $('#cpa2examModal').modal('hide');
    }, 1000);
});

function loadExamDepartment(){
  var select = document.getElementById("exam_department");
  $.ajax({
      url: BACKEND_URL+"/get_exam_department",
      type: 'get',
      data:"",
      success: function(data){
          var exam_dep_data=data.data;
          exam_dep_data.forEach(function (element) {
              var option = document.createElement('option');
              option.text = element.name;
              option.value = element.id;
              select.add(option, 1);

          });
      },
      error:function (message){

      }
  });
}
