// var  studentID;
// function SearchStudentID(){
//     var nrc_state_region    =   $("#nrc_state_region").val();
//     var nrc_township        =   $("#nrc_township").val();
//     var nrc_citizen         =   $("#nrc_citizen").val();
//     var nrc_number          =   $("input[name=nrc_number]").val();
//     // var nrc                 =   nrc_state_region+nrc_township+nrc_citizen+nrc_number;
//     var nrc = new FormData();
//     nrc.append('nrc_state_region', nrc_state_region);
//     nrc.append('nrc_township', nrc_township);
//     nrc.append('nrc_citizen', nrc_citizen);
//     nrc.append('nrc_number', nrc_number);

//     console.log('nrc',nrc);

//     $.ajax({
//         url:BACKEND_URL+"/student_info_by_nrc",
//         type: 'post',
//         data: nrc,
//         contentType: false,
//         processData: false,
//         success: function(result){
//             // console.log('result',result.data)
//                 if(result.data!=null){
//                     studentID=result.data.id;
//                     document.getElementById("fieldset").disabled = false;
//                 }
//                 else{
//                     document.getElementById("fieldset").disabled = true;
//                 }
//             }
//         });

    
// }

function createDATwoExamRegister()
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