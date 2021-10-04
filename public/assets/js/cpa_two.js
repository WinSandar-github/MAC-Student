$("input[id='cpa_one_pass_date_mac']").flatpickr({
    enableTime: false,
    dateFormat: "M-Y",
    allowInput: true,
});
$("input[id='cpa_one_pass_date']").flatpickr({
    enableTime: false,
    dateFormat: "M-Y",
    allowInput: true,
});
var boo = localStorage.getItem("isPrivateSchool");
if (boo == "true") {
    if (document.getElementById('is_private_school')) { document.getElementById('is_private_school').style.display = 'block'; }
}
else {
    if (document.getElementById('is_private_school')) { document.getElementById('is_private_school').style.display = 'none'; }
}
var cpaOneID;

function ConfirmSubmit() {

    var radio = document.getElementById("submit_confirm");
    if (radio.checked == true) {
        document.getElementById("submit_btn").disabled = false;
    }
    else {
        document.getElementById("submit_btn").disabled = true;
    }
}

function get_cpa_course() {
    let student = JSON.parse(localStorage.getItem("studentinfo"));
    // console.log('student',student);
    if (student) {
        // console.log('student',student);
        let batch_id = url.substring(url.lastIndexOf('/') + 1);
        $.ajax({
            type: "get",
            url: BACKEND_URL + "/batch/" + batch_id,
            contentType: false,
            processData: false,
            success: function (res) {
                // console.log('res',res)
                // $('.batch_id').append(res.data.id);
                $('.batch_no').val(res.data.name);
                $('.course_name').val(res.data.course.name);
                $('.batch_number').append(res.data.number);
            }
        })

    }

}

function CPA2_Private_School_Submit() {
    localStorage.setItem("isPrivateSchool", true);
    var student = JSON.parse(localStorage.getItem('studentinfo'));
    var recommend_letter_private = $("input[name=recommend_letter_private]")[0].files[0];
    var data = new FormData();
    data.append('batch_id', $("input[name='batch_id']").val())
    data.append('student_id', student.id);
    data.append('cpa_one_pass_date', $("#cpa_one_pass_date").val());
    data.append('cpa_one_access_no', $("#cpa_one_access_no").val());
    data.append('cpa_one_success_no', $("#cpa_one_success_no").val());
    data.append('batch_no_private', $("input[id='batch_no_private']").val());
    data.append('part_no_private', $("input[id='part_no_private']").val());
    data.append('personal_no_private', $("input[id='personal_no_private']").val());
    data.append('module', $("input[type='radio'][name='module']:checked").val());
    data.append('recommendation_letter',recommend_letter_private);
    data.append('type', 1);
    data.append('form_type', localStorage.getItem('course_id'));
    show_loader();
    $.ajax({
        url: BACKEND_URL + "/store_student_app_reg",
        type: 'post',
        data: data,
        contentType: false,
        processData: false,
        success: function (result) {
            EasyLoading.hide();
            if (result.message == undefined) {
                successMessage(result);
                location.href = FRONTEND_URL + '/';
            }
            else {
                successMessage(result.message);
                location.href = FRONTEND_URL + '/';
            }
        },
        error: function (message) {
            EasyLoading.hide();
        }
    });
}

// $( "#cpa2_private" ).click(function() {
//     console.log($("input[name='batch_personal_no_private']").val()!="" ,$("input[name='cpa_one_pass_date']").val()!=""
//     , $("input[name='cpa_one_access_no']").val()!="" , $("input[name='cpa_one_success_no']").val()!="");
//         if($("input[name='batch_personal_no_private']").val()!="" && $("input[name='cpa_one_pass_date']").val()!=""
//         && $("input[name='cpa_one_access_no']").val()!="" && $("input[name='cpa_one_success_no']").val()!=""){
//             $('#exampleModal1').modal('show');
//          }
//     });


function CPA2_Mac_Submit() {
    localStorage.setItem("isPrivateSchool", false);
    var student = JSON.parse(localStorage.getItem('studentinfo'));
    var recommend_letter_mac = $("input[name=recommend_letter_mac]")[0].files[0];
    var data = new FormData();
    data.append('batch_id', $("input[name='batch_id']").val())
    data.append('student_id', student.id);
    data.append('cpa_one_pass_date', $("#cpa_one_pass_date").val());
    data.append('cpa_one_access_no', $("#cpa_one_access_no").val());
    data.append('cpa_one_success_no', $("#cpa_one_success_no").val());
    data.append('batch_no_mac', $("input[id='batch_no_mac']").val());
    data.append('part_no_mac', $("input[id='part_no_mac']").val());
    data.append('personal_no_mac', $("input[id='personal_no_mac']").val());
    data.append('module', $("input[type='radio'][name='module']:checked").val());
    data.append('mac_type', $("input[type='radio'][name='mac_type']:checked").val());
    data.append('recommendation_letter',recommend_letter_mac);
    data.append('type', 2);
    data.append('form_type', localStorage.getItem('course_id'));
    show_loader();
    $.ajax({
        url: BACKEND_URL + "/store_student_app_reg",
        type: 'post',
        data: data,
        contentType: false,
        processData: false,
        success: function (result) {
            EasyLoading.hide();

            if (result.message == undefined) {
                successMessage(result);
                location.href = FRONTEND_URL + '/';
            }
            else {
                successMessage(result.message);
                location.href = FRONTEND_URL + '/';
            }
        },
        error: function (message) {
            EasyLoading.hide();
        }
    });
}

// $( "#cpa2_mac" ).click(function() {
//     if($("input[name='batch_personal_no_mac']").val()!="" && $("input[name='cpa_one_pass_date_mac']").val()!=""
//          && $("input[name='cpa_one_access_no_mac']").val()!="" && $("input[name='cpa_one_success_no_mac']").val()!=""){
//             $('#exampleModal3').modal('show');
//          }
//     });


function CPA2_Self_Study_Submit() {
    localStorage.setItem("isPrivateSchool", false);
    var student = JSON.parse(localStorage.getItem('studentinfo'));
    var recommend_letter_self = $("input[name=recommend_letter_self]")[0].files[0];
    var data = new FormData();
    data.append('batch_id', $("input[name='batch_id']").val())
    data.append('student_id', student.id);
    // $(':checkbox:checked').map(function(){data.append('reg_reason[]',$(this).val())});
    $('input[name="reg_reason[]"]:checked').map(function (key, val) {
        data.append('reg_reason[]', val.value);
    });
    data.append('batch_part_no', $("#batch_part_no").val());
    data.append('batch_no_self', $("input[id='batch_no_self']").val());
    data.append('part_no_self', $("input[id='part_no_self']").val());
    data.append('personal_no_self', $("input[id='personal_no_self']").val());
    data.append('module', $("input[type='radio'][name='module']:checked").val());
    data.append('type', 0);
    data.append('recommendation_letter',recommend_letter_self);
    data.append('form_type', localStorage.getItem('course_id'));
    show_loader();
    $.ajax({
        url: BACKEND_URL + "/store_student_app_reg",
        type: 'post',
        data: data,
        contentType: false,
        processData: false,
        success: function (result) {
            EasyLoading.hide();
            if (result.message == undefined) {
                successMessage(result);
                location.href = FRONTEND_URL + '/';
            }
            else {
                EasyLoading.hide();

                successMessage(result.message);
                location.href = FRONTEND_URL + '/';
            }
        },
        error: function (message) {
            EasyLoading.hide();
        }
    });
}

// $( "#cpa2_self" ).click(function() {
//         if($('input[name="reg_reason[]"]:checked').length > 0 && $("input[name='batch_personal_no_self']").val()!=""){
//             $('#exampleModal2').modal('show');
//         }
// });

// function allFill(form_id) {
//     var filled = true;
//     $(form_id+' input').each(function() {
//         if($('input[type=text]') && $(this).val() == ''  ) filled = false;

//     });
//     return filled;        
// }


$('#store_cpa_two_form').submit(function (e) {
    e.preventDefault();

    var formData = new FormData(this);
    formData.append('student_id', student_id);
    show_loader();
    $.ajax({
        url: BACKEND_URL + "/store_cpa_da_two_app_form",
        type: 'post',
        data: formData,
        contentType: false,
        processData: false,
        success: function (data) {
            EasyLoading.hide();
            localStorage.setItem('approve_reject', data.approve_reject_status);
            location.href = FRONTEND_URL + "/";
        },
        error: function (message) {
            errorMessage(message);
            EasyLoading.hide();
        }

    });
});
