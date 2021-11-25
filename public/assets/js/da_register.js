function ConfirmSubmit() {
    var radio = document.getElementById("submit_confirm");
    if (radio.checked == true) {
        document.getElementById("submit_btn").disabled = false;
    } else {
        document.getElementById("submit_btn").disabled = true;
    }
}

var count = 1;

function AddDAEdu() {
    $("#edu").append(
        '<div class="row mb-3" id="edu' + count + '">' +
        '<div class="col-md-11">' +
        '<input type="file"  class="form-control"  id="certificate' + count + '"  name="certificate[]" required="">' +
        '</div>' +
        '<div class="col-md-1 text-center"  id="edu' + count + '_remove">' +
        '<button class="btn btn-danger" id="myLink" style="padding-left:5px;"  onclick="remove(edu' + count + ')">' +
        '<i class="fa fa-trash "></i>' +
        '</button>' +
        '</div>' +
        '</div>');
    count++;
}

function loadPassedBatchList() {
    var course_id = document.getElementById("passed_course_id").value;
    var select = document.getElementById("selected_passed_batch_id");
    $.ajax({
        url: BACKEND_URL + "/get_passed_batch/" + course_id,
        type: 'get',
        data: "",
        success: function (data) {
            var batch_data = data.data;
            batch_data.forEach(function (element) {
                console.log('element_batch', element)
                var option = document.createElement('option');
                option.text = element.name + "/" + element.name_mm;
                option.value = element.id;
                select.add(option, 1);
                //$("#selected_school_id").css('display','inline');
                //$("#selected_school_id").siblings(".nice-select").css('display','none');
                //$("#selected_school_id").siblings(".check-service-other").css('display','inline-table');


            });
        },
        error: function (message) {

        }

    });
}

function loadCurrentBatchList() {
    var course_id = document.getElementById("current_course_id").value;
    var select = document.getElementById("selected_current_batch_id");

    $.ajax({
        url: BACKEND_URL + "/get_current_batch/" + course_id,
        type: 'get',
        data: "",
        success: function (data) {
            var batch_data = data.data;
            batch_data.forEach(function (element) {
                var option = document.createElement('option');
                option.text = element.name + "/" + element.name_mm;
                option.value = element.id;
                select.add(option, 1);
                //$("#selected_school_id").css('display','inline');
                //$("#selected_school_id").siblings(".nice-select").css('display','none');
                //$("#selected_school_id").siblings(".check-service-other").css('display','inline-table');


            });
        },
        error: function (message) {

        }

    });
}




function createDARegister() {
    if ($("input[name=password]").val() != $("input[name=confirm_password]").val()) {
        alert("Your password and confirm password do not match!");
        return;
    }
    var send_data = new FormData();

    var image = $("input[name=profile_photo]")[0].files[0];
    var nrc_front = $("input[name=nrc_front]")[0].files[0];
    var nrc_back = $("input[name=nrc_back]")[0].files[0];
    var recommend_letter = $("input[name=recommend_letter]")[0].files[0];


    // var certificate = $('#certificate0')[0].files[0];
    var nrc_state_region = $("#nrc_state_region").val();
    var nrc_township = $("#nrc_township").val();
    var nrc_citizen = $("#nrc_citizen").val();

    send_data.append('email', $("input[name=email]").val());
    send_data.append('password', $("input[name=password]").val());
    send_data.append('nrc_state_region', nrc_state_region);
    send_data.append('nrc_township', nrc_township);
    send_data.append('nrc_citizen', nrc_citizen);
    send_data.append('nrc_number', $("input[name=nrc_number]").val());
    send_data.append('nrc_front', nrc_front);
    send_data.append('nrc_back', nrc_back);
    send_data.append('name_mm', $("input[name=name_mm]").val());
    send_data.append('name_eng', $("input[name=name_eng]").val());
    send_data.append('gender', $("input[type='radio'][name='gender']:checked").val());
    send_data.append('father_name_mm', $("input[name=father_name_mm]").val());
    send_data.append('father_name_eng', $("input[name=father_name_eng]").val());
    send_data.append('race', $("input[name=race]").val());
    send_data.append('religion', $("input[name=religion]").val());
    send_data.append('date_of_birth', $("input[name=date_of_birth]").val());
    send_data.append('address', $("input[name=address]").val());
    send_data.append('current_address', $("input[name=current_address]").val());
    send_data.append('phone', $("input[name=phone]").val());
    send_data.append('gov_staff', $("input[type='radio'][name='gov_staff']:checked").val());
    send_data.append('image', image);
    send_data.append('registration_no', $("input[name=registration_no]").val());
    // send_data.append('date', $("input[name=date]").val());
    send_data.append('recommend_letter', recommend_letter);
    send_data.append('current_job', $("input[name=current_job]").val());
    send_data.append('position', $("input[name=position]").val());
    send_data.append('department', $("input[name=department]").val());
    send_data.append('organization', $("input[name=organization]").val());
    send_data.append('company_name', $("input[name=company_name]").val());
    send_data.append('salary', $("input[name=salary]").val());
    send_data.append('office_address', $("input[name=office_address]").val());
    send_data.append('university_name', $("input[name=university_name]").val());
    send_data.append('degree_name', $("input[name=degree_name]").val());
    send_data.append('degree_id', $(".degree_id").val());
    // send_data.append('certificate', certificate);
    $('input[name="certificate[]"]').map(function () {

        for (var i = 0; i < $(this).get(0).files.length; ++i) {
            // console.log($(this))
            send_data.append('certificate[]', $(this).get(0).files[i]);
        }
    });
    send_data.append('qualified_date', $("input[name=qualified_date]").val());
    send_data.append('roll_number', $("input[name=roll_number]").val());
    send_data.append('verify_status', $("input[name=verify_status]").val());
    send_data.append('payment_method', $("input[name=payment_method]").val());
    send_data.append('verify_code', $("input[name=verify_code]").val());
    send_data.append('type', $("input[name='attend_place']:checked").val());
    send_data.append('mac_type', $("input[name='attend_place']:checked").val() == 2 ? $("input[name='mac_type']:checked").val() : 99);
    var url = location.pathname;
    var batch_id = url.substring(url.lastIndexOf('/') + 1);
    send_data.append('batch_id', batch_id);
    show_loader();
    $.ajax({
        url: BACKEND_URL + "/da_register",
        type: 'post',
        data: send_data,
        contentType: false,
        processData: false,
        success: function (result) {
            EasyLoading.hide();
            successMessage("You have successfully registered. Use your email and password to login.");
            setInterval(() => {
                location.href = FRONTEND_URL + '/';
            }, 3000);
        },
        error: function (message) {
            EasyLoading.hide();
            errorMessage(message);
        }
    });
}

function send_email() {
    var send_data = new FormData();
    send_data.append('email', $("input[name=email]").val());
    $.ajax({
        url: BACKEND_URL + "/send_email",
        type: 'post',
        data: send_data,
        contentType: false,
        processData: false,
        success: function (data) {
            localStorage.setItem('verify_code', JSON.stringify(data));
            // successMessage("Your email is sending to MAC");
        },
        error: function (message) {
            EasyLoading.hide();
            errorMessage(message);
        }

    });
}

function check_email() {
    var text = localStorage.getItem('verify_code');
    var obj = JSON.parse(text);
    var verify_code = obj.data.verify_code;
    var code = $("input[name=verify_code]").val();
    if (verify_code != code) {
        successMessage("Your code is not correct.Please check your email inbox again!");
        // $('#exampleModal').modal('show');
        // $('#exampleModal1').modal('hide');
        // $('#exampleModal').modal('show');
    } else {
        // $('#exampleModal1').modal('show');
        createDARegister();
        $('#exampleModal').modal('hide');
    }
}

function check_da_existing_reg_email() {
    var text = localStorage.getItem('verify_code');
    var obj = JSON.parse(text);
    var verify_code = obj.data.verify_code;
    var code = $("input[name=verify_code]").val();
    if (verify_code != code) {
        successMessage("Your code is not correct.Please check your email inbox again!");
        // $('#exampleModal').modal('show');
        // $('#exampleModal1').modal('hide');
        // $('#exampleModal').modal('show');
    } else {
        // $('#exampleModal1').modal('show');
        CreateDAExistingRegister();
        $('#DAExistingEmailModal').modal('hide');
    }
}



function da_edit() {
    var student = JSON.parse(localStorage.getItem('studentinfo'));

    $.ajax({
        type: 'GET',
        url: BACKEND_URL + '/student_info/' + student.id,
        success: function (result) {
            var data = result.data;
            var education = result.data.student_education_histroy;
            $('#stu_id').val(data.id);
            $('#name_mm').val(data.name_mm);
            $('#name_eng').val(data.name_eng);
            $('#nrc_state_region').val(data.nrc_state_region);
            $('#nrc_township').val(data.nrc_township);
            $('#nrc_citizen').val(data.nrc_citizen);
            $('#nrc_number').val(data.nrc_number)
            $('#father_name_mm').val(data.father_name_mm);
            $('#father_name_eng').val(data.father_name_eng);
            $('#race').val(data.race);
            $('#religion').val(data.religion);
            $('#date_of_birth').val(data.date_of_birth);
            $('#phone').val(data.phone);
            $('#address').val(data.address);
            $('#current_address').val(data.current_address);
            $('#old_image').val(data.image);
            $('#old_certificate').val(education.certificate);
            $('#name').val(data.student_job.name);
            $('#position').val(data.student_job.position);
            $('#department').val(data.student_job.department);
            $('#organization').val(data.student_job.organization);
            $('#company_name').val(data.student_job.company_name);
            $('#salary').val(data.student_job.salary);
            $('#office_address').val(data.student_job.office_address);
            data.gov_staff == 0
                ? $("#no").prop("checked", true)
                : $("#yes").prop("checked", true);
            $('#uni_name').val(education.university_name);
            $('#degree_name').val(education.degree_name);
            $('#qualified_date').val(education.qualified_date);
            $('#roll_number').val(education.roll_number);
            $('#batch_id').val(data.student_course.batch_id);

        }
    })

}

$('#da_update').submit(function (e) {
    e.preventDefault();


    var formData = new FormData(this);
    formData.append('_method', 'PATCH');
    var student_id = $('#stu_id').val();

    show_loader();
    $.ajax({
        type: "POST",
        url: BACKEND_URL + "/student_info/" + student_id,

        contentType: false,
        processData: false,
        data: formData,
        success: function (data) {
            EasyLoading.hide();
            localStorage.setItem('approve_reject', data.approve_reject_status);
            successMessage("You have successfully updated!");
            location.href = FRONTEND_URL + "/";
        },
        error: function (message) {
        }
    })

})



//store Da Application Form
function StoreDAtoCPA() {

    // e.preventDefault();
    var formData = new FormData();
    formData.append('student_id', student_id);
    formData.append('batch_id', $("input[name=batch_id]").val());
    formData.append('type', $("input[name='dtype']:checked").val());
    formData.append('mac_type', $("input[name='mac_dtype']:checked").val());
    formData.append('gender', $("input[type='radio'][name='gender']:checked").val());
    // if($('#entry_type').val() === 'da_pass'){
    // var da_pass_certificate = $("input[name=da_pass_certificate]")[0].files[0];
    // send_data.append('da_pass_certificate', da_pass_certificate);
    formData.append('da_pass_date', $("input[name=da_pass_date]").val());
    formData.append('da_pass_roll_number', $("input[name=da_pass_roll_number]").val());
    // }


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
            successMessage("You have successfully registerd!");
            location.href = FRONTEND_URL + "/";
        },
        error: function (message) {
            EasyLoading.hide();

            errorMessage(message);
        }

    });
}

// $('#btn2').submit(function(e){
//     e.preventDefault();
//     location.href = FRONTEND_URL+"/";
// });

// $("#submit_btn_self").click(function () {
//     console.log('mac_semester',$(".personal_no_self").val());
//     if($("#self_academic_year").val()!="" && $("input[name=da_one_pass_level_self]").val()!="" && $('input[name="reg_reason[]"]:checked').length > 0 && $(".personal_no_self").val()!="")
//     {
//             $('#exampleModal3').modal('show');
//     }else{
//         $('#exampleModal3').modal('hide');
//     }
// });

function createDaTwoSelfStudy() {

    localStorage.setItem("isPrivateSchool", false);
    var recommend_letter_self = $("input[name=recommend_letter_self]")[0].files[0];
    var profile_photo = $("input[name='profile_photo_self']")[0].files[0];
    var send_data = new FormData();
    send_data.append('student_id', student_id);
    send_data.append('sr_no', $("input[name='student_regno']").val());
    send_data.append('batch_id', $("input[name='batch_id']").val());
    send_data.append('batch_no_self', $("input[id='batch_no_self']").val());
    send_data.append('part_no_self', $("input[id='part_no_self']").val());
    send_data.append('personal_no_self', $("input[id='personal_no_self']").val());
    send_data.append('academic_year', $("#self_academic_year").val());
    send_data.append('type', 0);
    send_data.append('recommendation_letter', recommend_letter_self);
    $('input[name="reg_reason[]"]:checked').map(function (key, val) {
        send_data.append('reg_reason[]', val.value);
    });
    send_data.append('module', $("input[type='radio'][name='is_full_module']:checked").val());
    send_data.append('form_type', $("input[name='form_type']").val());
    //send student info data
    send_data.append('office_address', $("#self_study_container").find("input[name=office_address]").val());
    send_data.append('current_address', $("#self_study_container").find("input[name=current_address]").val());
    send_data.append('address', $("#self_study_container").find("input[name=address]").val());
    send_data.append('phone', $("#self_study_container").find("input[name=phone]").val());
    send_data.append('gov_staff', $("#self_study_container").find('input[name="gov_staff"]:checked').val());
    send_data.append('profile_photo', profile_photo);
    show_loader();
    $.ajax({
        url: BACKEND_URL + "/store_student_app_reg",
        type: 'post',
        data: send_data,
        contentType: false,
        processData: false,
        success: function (result) {
            EasyLoading.hide();
            successMessage(result);
            // location.reload();
            location.href = FRONTEND_URL + "/";
        },
        error: function (message) {
            EasyLoading.hide();

        }

    });
}


$("#da_two_private_submit").click(function () {

    if ($("#selected_school_id").val() != "" &&
        $("#academic_year").val() != "" &&
        $("input[name=da_one_pass_level_private]").val() != "" &&
        $(".personal_no_private").val() != "") {
        $('#exampleModal2').modal('show');
    } else {
        $('#exampleModal2').modal('hide');
    }
});

function createDaTwoPrivateSchool() {
    localStorage.setItem("isPrivateSchool", true);
    var recommend_letter_private = $("input[name=recommend_letter_private]")[0].files[0];
    var profile_photo = $("input[name='profile_photo_private']")[0].files[0];
    var send_data = new FormData();
    send_data.append('student_id', student_id);
    send_data.append('sr_no', $("input[name='student_regno']").val());
    send_data.append('batch_id', $("input[name='batch_id']").val());
    send_data.append('batch_no_private', $("input[id='batch_no_private']").val());
    send_data.append('part_no_private', $("input[id='part_no_private']").val());
    send_data.append('personal_no_private', $("input[id='personal_no_private']").val());
    send_data.append('module', $("input[type='radio'][name='is_full_module']:checked").val());
    send_data.append('private_school_name', $("#selected_school_id option:selected").text());
    send_data.append('academic_year', $("#academic_year").val());
    send_data.append('type', 1);
    send_data.append('recommendation_letter', recommend_letter_private);
    send_data.append('form_type', $("input[name='form_type']").val());
    if ($("input[name='form_type']").val() == "da two") {
        send_data.append('date', formatDate($("input[name='exam_date']").val()));
    }
    //send student info data
    send_data.append('office_address', $("#private_school_container").find("input[name=office_address]").val());
    send_data.append('current_address', $("#private_school_container").find("input[name=current_address]").val());
    send_data.append('address', $("#private_school_container").find("input[name=address]").val());
    send_data.append('phone', $("#private_school_container").find("input[name=phone]").val());
    send_data.append('gov_staff', $("#private_school_container").find('input[name="gov_staff"]:checked').val());
    send_data.append('profile_photo', profile_photo);
    show_loader();

    $.ajax({
        url: BACKEND_URL + "/store_student_app_reg",
        type: 'post',
        data: send_data,
        contentType: false,
        processData: false,
        success: function (result) {
            EasyLoading.hide();
            successMessage(result);
            // location.reload();
            location.href = FRONTEND_URL + "/";
        },
        error: function (message) {
            EasyLoading.hide();

        }
    });
}

$("#submit_btn_mac").click(function () {
    // console.log('mac_semester',$("#mac_academic_year").val());
    // console.log('da_one_pass_level',$("input[name=da_one_pass_level_mac]").val());
    // console.log('mac_semester',$(".personal_no_mac").val());
    if ($("#mac_academic_year").val() != "" && $("input[name=da_one_pass_level_mac]").val() != "" && $(".personal_no_mac").val() != "") {

        $('#exampleModal1').modal('show');
    } else {

        $('#exampleModal1').modal('hide');
    }
});

function createDaTwoMac() {
    localStorage.setItem("isPrivateSchool", false);
    var recommend_letter_mac = $("input[name=recommend_letter_mac]")[0].files[0];
    var profile_photo = $("input[name='profile_photo_mac']")[0].files[0]
    var send_data = new FormData();

    send_data.append('student_id', student_id);
    send_data.append('sr_no', $("input[name='student_regno']").val());
    send_data.append('batch_id', $("input[name='batch_id']").val());
    send_data.append('batch_no_mac', $("input[id='batch_no_mac']").val());
    send_data.append('part_no_mac', $("input[id='part_no_mac']").val());
    send_data.append('personal_no_mac', $("input[id='personal_no_mac']").val());
    send_data.append('type', 2);
    send_data.append('recommendation_letter', recommend_letter_mac);
    send_data.append('form_type', $("input[name='form_type']").val());
    send_data.append('academic_year', $("#mac_academic_year").val());
    send_data.append('module', $("input[type='radio'][name='is_full_module']:checked").val());
    send_data.append('mac_type', $("input[type='radio'][name='mac_type']:checked").val());
    //send student info data
    send_data.append('office_address', $("#mac_container").find("input[name=office_address]").val());
    send_data.append('current_address', $("#mac_container").find("input[name=current_address]").val());
    send_data.append('address', $("#mac_container").find("input[name=address]").val());
    send_data.append('phone', $("#mac_container").find("input[name=phone]").val());
    send_data.append('gov_staff', $("#mac_container").find('input[name="gov_staff"]:checked').val());
    send_data.append('profile_photo', profile_photo);
    show_loader();
    $.ajax({
        url: BACKEND_URL + "/store_student_app_reg",
        type: 'post',
        data: send_data,
        contentType: false,
        processData: false,
        success: function (result) {
            EasyLoading.hide();
            successMessage(result);
            // location.reload();
            location.href = FRONTEND_URL + "/";
        },
        error: function (message) {
            EasyLoading.hide();

        }
    });
}


function CreateDAExistingRegister() {
    if ($("input[name=password]").val() != $("input[name=confirm_password]").val()) {
        alert("Your password and confirm password do not match!");
        return;
    }
    var send_data = new FormData();

    var image = $("input[name=profile_photo]")[0].files[0];
    var nrc_front = $("input[name=nrc_front]")[0].files[0];
    var nrc_back = $("input[name=nrc_back]")[0].files[0];
    // var recommend_letter = $("input[name=recommend_letter]")[0].files[0];
    var nrc_state_region = $("#nrc_state_region").val();
    var nrc_township = $("#nrc_township").val();
    var nrc_citizen = $("#nrc_citizen").val();

    send_data.append('email', $("input[name=email]").val());
    send_data.append('password', $("input[name=password]").val());
    send_data.append('nrc_state_region', nrc_state_region);
    send_data.append('nrc_township', nrc_township);
    send_data.append('nrc_citizen', nrc_citizen);
    send_data.append('nrc_number', $("input[name=nrc_number]").val());
    send_data.append('nrc_front', nrc_front);
    send_data.append('nrc_back', nrc_back);
    send_data.append('name_mm', $("input[name=name_mm]").val());
    send_data.append('name_eng', $("input[name=name_eng]").val());
    send_data.append('gender', $("input[type='radio'][name='gender']:checked").val());
    send_data.append('father_name_mm', $("input[name=father_name_mm]").val());
    send_data.append('father_name_eng', $("input[name=father_name_eng]").val());
    send_data.append('race', $("input[name=race]").val());
    send_data.append('religion', $("input[name=religion]").val());
    send_data.append('date_of_birth', $("input[name=date_of_birth]").val());
    send_data.append('address', $("input[name=address]").val());
    send_data.append('current_address', $("input[name=current_address]").val());
    send_data.append('phone', $("input[name=phone]").val());
    send_data.append('gov_staff', $("input[type='radio'][name='gov_staff']:checked").val());
    send_data.append('image', image);
    send_data.append('registration_no', $("input[name=registration_no]").val());
    // send_data.append('date', $("input[name=date]").val());
    // send_data.append('recommend_letter', recommend_letter);
    send_data.append('current_job', $("input[name=current_job]").val());
    send_data.append('position', $("input[name=position]").val());
    send_data.append('department', $("input[name=department]").val());
    send_data.append('organization', $("input[name=organization]").val());
    send_data.append('company_name', $("input[name=company_name]").val());
    send_data.append('salary', $("input[name=salary]").val());
    send_data.append('office_address', $("input[name=office_address]").val());

    send_data.append('university_name', $("input[name=university_name]").val());
    send_data.append('degree_name', $("input[name=degree_name]").val());
    send_data.append('degree_id', $(".degree_id").val());
    $('input[name="certificate[]"]').map(function () {

        for (var i = 0; i < $(this).get(0).files.length; ++i) {
            console.log($(this))
            send_data.append('certificate[]', $(this).get(0).files[i]);
        }
    });
    send_data.append('qualified_date', $("input[name=qualified_date]").val());
    send_data.append('roll_number', $("input[name=roll_number]").val());

    send_data.append('verify_status', $("input[name=verify_status]").val());
    send_data.append('payment_method', $("input[name=payment_method]").val());
    send_data.append('verify_code', $("input[name=verify_code]").val());

    send_data.append('pass_batch_id', $("#selected_passed_batch_id").val());
    send_data.append('da_one_pass_level', $("input[name=da_one_pass_level]").val());
    send_data.append('da_one_pass_exam_date', $("input[name=da_one_pass_exam_date]").val());
    send_data.append('da_one_pass_personal_no', $("input[name=da_one_pass_personal_no]").val());



    if ($("#da_type").val() == 'da_2') {
        send_data.append('batch_id', $("#selected_current_batch_id").val());
        if ($("input[name='da_two_attend_place']:checked").val()) {
            send_data.append('type_da2', $("input[name='da_two_attend_place']:checked").val());
        }
        send_data.append('da_two_pass_level', $("input[name=da_two_pass_level]").val());
        send_data.append('da_two_pass_exam_date', $("input[name=da_two_pass_exam_date]").val());
        send_data.append('da_two_pass_personal_no', $("input[name=da_two_pass_personal_no]").val());
        send_data.append('da_two_mac_type', $("input[name='da_two_attend_place']:checked").val() == 2 ? $("input[name='da_two_mac_type']:checked").val() : 99);
    }
    send_data.append('active_batch_id', $("#active_batch_id").val());

    send_data.append('type_active_da2', $("input[name='da_two_active_attend_place']:checked").val());
    send_data.append('da_two_active_mac_type', $("input[name='da_two_active_attend_place']:checked").val() == 2 ? $("input[name='da_two_active_mac_type']:checked").val() : 99);

    if ($("input[name='attend_place']:checked").val()) {
        send_data.append('type', $("input[name='attend_place']:checked").val());
    }
    send_data.append('mac_type', $("input[name='attend_place']:checked").val() == 2 ? $("input[name='mac_type']:checked").val() : 99);
    if ($("input[type='radio'][name='is_full_module']:checked").val() != null) {
        send_data.append('module', $("input[type='radio'][name='is_full_module']:checked").val());
    } else if ($("input[type='radio'][name='is_full_module']:checked").val() == null) {
        send_data.append('module', 0);
    }

    send_data.append('da_type', $("#da_type").val());
    show_loader();
    $.ajax({
        url: BACKEND_URL + "/da_existing_register",
        type: 'post',
        data: send_data,
        contentType: false,
        processData: false,
        success: function (result) {
            // console.log('result',result)
            EasyLoading.hide();
            successMessage("You have successfully registered. Use your email and password to login.");
            setInterval(() => {
                location.href = FRONTEND_URL + '/';
            }, 3000);
        },
        error: function (message) {
            EasyLoading.hide();
            errorMessage(message);
        }
    });
}

function updateDAExistingRegister() {

    var send_data = new FormData();

    if ($("input[name=profile_photo]")[0].files[0]) {

        var image = $("input[name=profile_photo]")[0].files[0];
        send_data.append('image', image);

    }

    if ($("input[name=nrc_front]")[0].files[0]) {
        var nrc_front = $("input[name=nrc_front]")[0].files[0];
        send_data.append('nrc_front', nrc_front);
    }

    if ($("input[name=nrc_back]")[0].files[0]) {

        var nrc_back = $("input[name=nrc_back]")[0].files[0];
        send_data.append('nrc_back', nrc_back);


    }

    // if ($("input[name=recommend_letter]")[0].files[0]) {


    //     var recommend_letter = $("input[name=recommend_letter]")[0].files[0];
    //     send_data.append('recommend_letter', recommend_letter);

    // }




    var nrc_state_region = $("#nrc_state_region").val();
    var nrc_township = $("#nrc_township").val();
    var nrc_citizen = $("#nrc_citizen").val();

    send_data.append('nrc_state_region', nrc_state_region);
    send_data.append('nrc_township', nrc_township);
    send_data.append('nrc_citizen', nrc_citizen);
    send_data.append('nrc_number', $("input[name=nrc_number]").val());
    send_data.append('old_image', $("input[name=old_image]").val());
    send_data.append('old_rec_letter', $("input[name=old_rec_letter]").val());
    send_data.append('old_certificate', $("input[name=old_certificate]").val());
    send_data.append('student_info_id', student_id);

    send_data.append('old_nrc_front', $("input[name=old_nrc_front]").val());
    send_data.append('old_nrc_back', $("input[name=old_nrc_back]").val());

    send_data.append('name_mm', $("input[name=name_mm]").val());
    send_data.append('name_eng', $("input[name=name_eng]").val());
    send_data.append('gender', $("input[type='radio'][name='gender']:checked").val());
    send_data.append('father_name_mm', $("input[name=father_name_mm]").val());
    send_data.append('father_name_eng', $("input[name=father_name_eng]").val());
    send_data.append('race', $("input[name=race]").val());
    send_data.append('religion', $("input[name=religion]").val());
    send_data.append('date_of_birth', $("input[name=date_of_birth]").val());
    send_data.append('address', $("input[name=address]").val());
    send_data.append('current_address', $("input[name=current_address]").val());
    send_data.append('phone', $("input[name=phone]").val());
    send_data.append('gov_staff', $("input[type='radio'][name='gov_staff']:checked").val());
    send_data.append('registration_no', $("input[name=registration_no]").val());
    // send_data.append('date', $("input[name=date]").val());
    send_data.append('current_job', $("input[name=current_job]").val());
    send_data.append('position', $("input[name=position]").val());
    send_data.append('department', $("input[name=department]").val());
    send_data.append('organization', $("input[name=organization]").val());
    send_data.append('company_name', $("input[name=company_name]").val());
    send_data.append('salary', $("input[name=salary]").val());
    send_data.append('office_address', $("input[name=office_address]").val());

    send_data.append('university_name', $("input[name=university_name]").val());
    send_data.append('degree_name', $("input[name=degree_name]").val());
    send_data.append('degree_id', $(".degree_id").val());
    $('input[name="certificate[]"]').map(function () {

        for (var i = 0; i < $(this).get(0).files.length; ++i) {

            send_data.append('certificate[]', $(this).get(0).files[i]);
        }
    });
    send_data.append('qualified_date', $("input[name=qualified_date]").val());
    send_data.append('roll_number', $("input[name=roll_number]").val());
    send_data.append('pass_batch_id', $("#selected_passed_batch_id").val());
    send_data.append('da_one_pass_level', $("input[name=da_one_pass_level]").val());
    send_data.append('da_one_pass_exam_date', $("input[name=da_one_pass_exam_date]").val());
    send_data.append('da_one_pass_personal_no', $("input[name=da_one_pass_personal_no]").val());

    if ($("input[name='attend_place']:checked").val()) {
        send_data.append('type', $("input[name='attend_place']:checked").val());
    }

    if ($("#da_type").val() == 'da_2') {
        send_data.append('batch_id', $("#selected_current_batch_id").val());
        if ($("input[name='da_two_attend_place']:checked").val()) {
            send_data.append('type_da2', $("input[name='da_two_attend_place']:checked").val());
        }
        send_data.append('da_two_pass_level', $("input[name=da_two_pass_level]").val());
        send_data.append('da_two_pass_exam_date', $("input[name=da_two_pass_exam_date]").val());
        send_data.append('da_two_pass_personal_no', $("input[name=da_two_pass_personal_no]").val());
        send_data.append('da_two_mac_type', $("input[name='da_two_attend_place']:checked").val() == 2 ? $("input[name='da_two_mac_type']:checked").val() : 99);
    }
    send_data.append('active_batch_id', $("#active_batch_id").val());
    send_data.append('type_active_da2', $("input[name='da_two_active_attend_place']:checked").val());
    send_data.append('da_two_active_mac_type', $("input[name='da_two_active_attend_place']:checked").val() == 2 ? $("input[name='da_two_active_mac_type']:checked").val() : 99);
    send_data.append('mac_type', $("input[name='attend_place']:checked").val() == 2 ? $("input[name='mac_type']:checked").val() : 99);
    if ($("input[type='radio'][name='is_full_module']:checked").val() != null) {
        send_data.append('module', $("input[type='radio'][name='is_full_module']:checked").val());
    } else if ($("input[type='radio'][name='is_full_module']:checked").val() == null) {
        send_data.append('module', 0);
    }
    send_data.append('da_type', $("#da_type").val());
    show_loader();
    $.ajax({
        url: BACKEND_URL + "/update_da_existing_register",
        type: 'post',
        data: send_data,
        contentType: false,
        processData: false,
        success: function (result) {
            EasyLoading.hide();
            successMessage("You have successfully registered. Use your email and password to login.");
            setInterval(() => {
                location.href = FRONTEND_URL + '/';
            }, 3000);
        },
        error: function (message) {
            EasyLoading.hide();
            errorMessage(message);
        }
    });
}


function allFilled(form_id) {
    var filled = true;
    $(form_id + ' input').each(function () {
        if ($("#email").val() == '') {
            filled = false;
        }
        if ($("#password").val() == '') {
            filled = false;
        }
        if ($("#confirm_password").val() == '') {
            filled = false;
        }
        if ($("#profile_photo").val() == '') {
            filled = false;
        }
        if ($("#name_mm").val() == '') {
            filled = false;
        }
        if ($("#name_eng").val() == '') {
            filled = false;
        }
        if ($("#nrc_state_region").val() == '') {
            filled = false;
        }
        if ($("#nrc_township").val() == '') {
            filled = false;
        }
        if ($("#nrc_citizen").val() == '') {
            filled = false;
        }
        if ($("#nrc_number").val() == '') {
            filled = false;
        }
        if ($("#nrc_front").val() == '') {
            filled = false;
        }
        if ($("#nrc_back").val() == '') {
            filled = false;
        }
        if ($("#father_name_mm").val() == '') {
            filled = false;
        }
        if ($("#father_name_eng").val() == '') {
            filled = false;
        }
        if ($("#race").val() == '') {
            filled = false;
        }
        if ($("#religion").val() == '') {
            filled = false;
        }
        if ($("#date_of_birth").val() == '') {
            filled = false;
        }
        if ($("#phone").val() == '') {
            filled = false;
        }
        if ($("#address").val() == '') {
            filled = false;
        }
        if ($("#current_address").val() == '') {
            filled = false;
        }
        if ($("#image").val() == '') {
            filled = false;
        }
        // if ($("#name").val() == '') {
        //     filled = false;
        // }
        // if ($("#position").val() == '') {
        //     filled = false;
        // }
        // if ($("#department").val() == '') {
        //     filled = false;
        // }
        // if ($("#organization").val() == '') {
        //     filled = false;
        // }
        // if ($("#company_name").val() == '') {
        //     filled = false;
        // }
        // if ($("#salary").val() == '') {
        //     filled = false;
        // }
        // if ($("#office_address").val() == '') {
        //     filled = false;
        // }
        // if ($("#degree_name").val() == '') {
        //     filled = false;
        // }
        // if ($("#university_name").val() == '') {
        //     filled = false;
        // }
        // if ($("#roll_number").val() == '') {
        //     filled = false;
        // }
        // if ($("#qualified_date").val() == '') {
        //     filled = false;
        // }
        // if ($("#certificate0").val() == '') {

        //     filled = false;
        // }


        if ($('input[name="attend_place"]:checked').length === 0) {

            filled = false;

        } else {
            var mac_val = $('input[name="attend_place"]:checked').val();

            if (mac_val === '2' && $('input[name="mac_type"]:checked').length === 0) {
                filled = false;
            }

        }


    });
    return filled;
}



function loadPrivateSchoolList() {
    var select = document.getElementById("selected_school_id");
    $.ajax({
        url: BACKEND_URL + "/school",
        type: 'get',
        data: "",
        success: function (data) {
            var school_data = data.data;
            school_data.forEach(function (element) {
                var option = document.createElement('option');
                option.text = element.name_mm + "/" + element.name_eng;
                option.value = element.id;
                select.add(option, 1);
                //$("#selected_school_id").css('display','inline');
                //$("#selected_school_id").siblings(".nice-select").css('display','none');
                //$("#selected_school_id").siblings(".check-service-other").css('display','inline-table');


            });
        },
        error: function (message) {

        }

    });
}

function selectCurrentType() {

    var da_radioValue = $("input[name='da_two_attend_place']:checked").val();

    if (da_radioValue == 2) {
        $('#current_blk_mac').css('display', 'inline-block');
    } else {

        $('#current_blk_mac').css('display', 'none');

    }
}

function selectCPACurrentType() {

    var cpa_radioValue = $("input[name='cpa2_attend_place']:checked").val();

    if (cpa_radioValue == 2) {
        $('#current_blk_mac').css('display', 'inline-block');
    } else {

        $('#current_blk_mac').css('display', 'none');

    }
}

function selectType() {

    var radioValue = $("input[name='attend_place']:checked").val();

    if (radioValue == 2) {
        $('#blk_mac').css('display', 'inline-block');
    } else {

        $('#blk_mac').css('display', 'none');

    }
}

function CPAOneselectType() {

    var radioValue = $("input[name='cpa_one_attend_place']:checked").val();

    if (radioValue == 2) {
        $('#cpa_one_blk_mac').css('display', 'inline-block');
    } else {

        $('#cpa_one_blk_mac').css('display', 'none');

    }
}




function selectdType() {

    var radioValue = $("input[name='dtype']:checked").val();


    if (radioValue == 2) {
        $('#blk_dmac').css('display', 'inline-block');
        // $('#entry_pass').css('display','none');
        // $("#direct").find('input').prop('required',true);
    } else {

        $('#blk_dmac').css('display', 'none');

        // $('#entry_pass').css('display','block');
        // $('#direct').css('display','none');
        // $("#direct").find('input').prop('required',false);
    }
}

function uncheckRadioButton() {
    $("#module_1").prop('checked', false);
    $("#module_2").prop('checked', false);
}

function uncheckAttendPlace() {
    $("#main_mac").prop('checked', false);
    $("#sub_mac").prop('checked', false);
    $("#sub_mac2").prop('checked', false);
    $("#private").prop('checked', false);
    $("#self").prop('checked', false);
}

function uncheckDATwoAttendPlace() {
    $("#da_two_main_mac").prop('checked', false);
    $("#da_two_sub_mac").prop('checked', false);
    $("#da_two_sub_mac2").prop('checked', false);
    $("#da_two_private").prop('checked', false);
    $("#da_two_self").prop('checked', false);
}

function uncheckCPATwoAttendPlace() {
    $("#cpa2_main_mac").prop('checked', false);
    $("#cpa2_sub_mac").prop('checked', false);
    $("#cpa2_sub_mac2").prop('checked', false);
    $("#cpa2_private").prop('checked', false);
    $("#cpa2_self").prop('checked', false);
}



// $( "#submit_btn_mac" ).click(function() {
//     if(allFilled('#da_two_mac_form')){
//         $('#exampleModal1').modal('show');
//     }

// });
