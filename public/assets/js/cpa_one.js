let url = location.pathname;
$("input[name='date_of_birth']").flatpickr({
    enableTime: false,
    dateFormat: "d-m-Y",
});
var boo = localStorage.getItem("isPrivateSchool");
if (boo == "true") {
    if (document.getElementById('is_private_school')) { document.getElementById('is_private_school').style.display = 'block'; }
}
else {
    if (document.getElementById('is_private_school')) { document.getElementById('is_private_school').style.display = 'none'; }
}
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#img_preview').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#photo").change(function () {
    readURL(this);
});

function selectStaff(value) {

    if (value == 1) {
        $('#rec_letter').css('display', 'block');
    } else {
        $('#rec_letter').css('display', 'none');
    }
}
function ConfirmSubmit() {
    var radio = document.getElementById("submit_confirm");
    if (radio.checked == true) {
        document.getElementById("submit_btn").disabled = false;
    }
    else {
        document.getElementById("submit_btn").disabled = true;
    }
}

var count = 1;
function AddCPAEdu() {
    $("#edu").append(

        '<div class="row mb-4" id="edu' + count + '">' +
        '<div class="col-md-4"></div>' +
        '<div class="col-md-7">' +
        '<input type="file"  class="form-control"  id="certificate' + count + '"  name="certificate[]">' +
        '</div>' +
        '<div class="col-md-1 text-left mt-1"  id="edu' + count + '_remove">' +
        '<button class="btn btn-sm btn-danger" id="myLink" onclick="remove(edu' + count + ')">' +
        '<i class="fa fa-trash " style="padding-right: 5px;"></i>' +
        '</button>' +
        '</div>' +
        '</div>');

    count++;

}

function check_cpa_two_reg_email() {
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
        createCPATwoRegDAOnePass();
        $('#CPATwoRegEmailModal').modal('hide');
    }
}

function createCPATwoRegDAOnePass(){
    if ($("input[name=password]").val() != $("input[name=confirm_password]").val()) {
        alert("Your password and confirm password do not match!");
        return;
    }
    var send_data = new FormData();

    var image = $("input[name=profile_photo]")[0].files[0];
    var nrc_front = $("input[name=nrc_front]")[0].files[0];
    var nrc_back = $("input[name=nrc_back]")[0].files[0];
    var recommend_letter = $("input[name=recommend_letter]")[0].files[0];
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
    // send_data.append('certificate', certificate);
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
    send_data.append('batch_id', $("#selected_batch_id").val());
    send_data.append('cpa_one_pass_level', $("input[name=cpa_one_pass_level]").val());
    send_data.append('cpa_one_pass_exam_date', $("input[name=cpa_one_pass_exam_date]").val());
    send_data.append('cpa_one_pass_personal_no', $("input[name=cpa_one_pass_personal_no]").val());

    send_data.append('type', $("input[name='attend_place']:checked").val());
    // send_data.append('pass_type', $("input[name='da_one_attend_place']:checked").val());
    send_data.append('mac_type', $("input[name='attend_place']:checked").val() == 2 ? $("input[name='mac_type']:checked").val() : 99);
    // send_data.append('pass_mac_type', $("input[name='da_one_attend_place']:checked").val() == 2 ? $("input[name='da_one_mac_type']:checked").val() : 88);
    send_data.append('module', $("input[type='radio'][name='is_full_module']:checked").val());
    show_loader();
    $.ajax({
        url: BACKEND_URL + "/cpa_two_reg_cpaonepass",
        type: 'post',
        data: send_data,
        contentType: false,
        processData: false,
        success: function (result) {
            console.log('result',result)
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



function Private_School_Submit() {
    localStorage.setItem("isPrivateSchool", true);
    let batch_id = localStorage.getItem('batch_id');
    var recommend_letter_private = $("input[name=recommend_letter_private]")[0].files[0];
    var profile_photo= $("input[name=profile_photo_private]")[0].files[0];
    var student = JSON.parse(localStorage.getItem('studentinfo'));
    var data = new FormData();
    data.append('student_id', student.id);
    data.append('sr_no', $("input[name='sr_no']").val());
    data.append('private_school_name', $("#selected_school_id option:selected").text());
    data.append('academic_year', $("#academic_year_private").val());
    data.append('direct_access_no', $("#direct_access_no_private").val());
    data.append('entry_success_no', $("#entry_success_no_private").val());
    data.append('batch_no_private', $("input[id='batch_no_private']").val());
    data.append('part_no_private', $("input[id='part_no_private']").val());
    data.append('personal_no_private', $("input[id='personal_no_private']").val());
    data.append('module', $("input[type='radio'][name='module']:checked").val());
    data.append('form_type', localStorage.getItem('course_id'));
    data.append('type', 1);
    data.append('remain_module', $("input[name='remain_module']").val());
    data.append('batch_id', $("input[name='batch_id']").val());

    data.append('recommendation_letter', recommend_letter_private);
    //send student info data
    data.append('office_address', $("#private_school_container").find("input[name=office_address]").val());
    data.append('current_address',$("#private_school_container").find("input[name=current_address]").val());
    data.append('address', $("#private_school_container").find("input[name=address]").val());
    data.append('phone', $("#private_school_container").find("input[name=phone]").val());
    data.append('gov_staff', $("#private_school_container").find('input[name="gov_staff"]:checked').val());
    data.append('profile_photo', profile_photo);
    show_loader();

    $.ajax({
        url: BACKEND_URL + "/student_register",
        type: 'post',
        data: data,
        contentType: false,
        processData: false,
        success: function (result) {
            // console.log('result',result);
            EasyLoading.hide();
            if (result.message == undefined) {
                successMessage(result);
                location.href = FRONTEND_URL + '/';
            }
            else {
                successMessage(result.message);
                // location.reload();
                location.href = FRONTEND_URL + '/';
            }
        },
        error: function (message) {
            EasyLoading.hide();
        }
    });
}

function Self_Study_Submit() {
    localStorage.setItem("isPrivateSchool", false);
    let batch_id = localStorage.getItem('batch_id');
    
    var student = JSON.parse(localStorage.getItem('studentinfo'));
    var recommend_letter_self = $("input[name=recommend_letter_self]")[0].files[0];
    var profile_photo= $("input[name=profile_photo_self]")[0].files[0];
    var data = new FormData();
    data.append('student_id', student.id);
    data.append('sr_no', $("input[name='sr_no']").val());
    data.append('academic_year', $("#academic_year_self").val());
    data.append('direct_access_no', $("#direct_access_no_self").val());
    data.append('entry_success_no', $("#entry_success_no_self").val());
    // $(':checkbox:checked').map(function(){data.append('reg_reason[]',$(this).val())});
    $('input[name="reg_reason[]"]:checked').map(function (key, val) {
        data.append('reg_reason[]', val.value);
    });
    data.append('module', $("input[type='radio'][name='module']:checked").val());
    data.append('batch_part_no', $("#batch_part_no").val());
    data.append('batch_no_self', $("input[id='batch_no_self']").val());
    data.append('part_no_self', $("input[id='part_no_self']").val());
    data.append('personal_no_self', $("input[id='personal_no_self']").val());
    data.append('type', 0);
    data.append('form_type', localStorage.getItem('course_id'));
    data.append('remain_module', $("input[name='remain_module']").val())
    data.append('batch_id', $("input[name='batch_id']").val());
    data.append('recommendation_letter', recommend_letter_self);
    //send student info data
    data.append('office_address', $("#self_study_container").find("input[name=office_address]").val());
    data.append('current_address',$("#self_study_container").find("input[name=current_address]").val());
    data.append('address', $("#self_study_container").find("input[name=address]").val());
    data.append('phone', $("#self_study_container").find("input[name=phone]").val());
    data.append('gov_staff', $("#self_study_container").find('input[name="gov_staff"]:checked').val());
    data.append('profile_photo', profile_photo);
    show_loader();
    $.ajax({
        url: BACKEND_URL + "/student_register",
        type: 'post',
        data: data,
        contentType: false,
        processData: false,
        success: function (result) {
            if (result.message == undefined) {
                EasyLoading.hide();
                location.href = FRONTEND_URL + '/';
                successMessage(result);
            }
            else {
                EasyLoading.hide();
                location.href = FRONTEND_URL + '/';
                successMessage(result.message);
            }
        },
        error: function (message) {
            EasyLoading.hide();
        }
    });
}


function Mac_Submit() {
    localStorage.setItem("isPrivateSchool", false);
    let batch_id = localStorage.getItem('batch_id');
    var recommend_letter_mac = $("input[name=recommend_letter_mac]")[0].files[0];
    var profile_photo= $("input[name=profile_photo_mac]")[0].files[0];
    var student = JSON.parse(localStorage.getItem('studentinfo'));
    var good_morale_file = $('#good_morale_file')[0].files[0];
    var no_crime_file = $('#no_crime_file')[0].files[0];
    var data = new FormData();
    data.append('student_id', student.id);
    data.append('sr_no', $("input[name='sr_no']").val());
    data.append('academic_year', $("#academic_year_mac").val());
    data.append('direct_access_no', $("#direct_access_no_mac").val());
    data.append('entry_success_no', $("#entry_success_no_mac").val());
    data.append('internship', $("input[type='radio'][name='internship']:checked").val());
    data.append('good_behavior', good_morale_file);
    data.append('no_crime', no_crime_file);
    data.append('module', $("input[type='radio'][name='module']:checked").val());
    
    data.append('type', 2);
    data.append('form_type', localStorage.getItem('course_id'));
    data.append('batch_no_mac', $("input[id='batch_no_mac']").val());
    data.append('part_no_mac', $("input[id='part_no_mac']").val());
    data.append('personal_no_mac', $("input[id='personal_no_mac']").val());
    data.append('remain_module', $("input[name='remain_module']").val());
    data.append('batch_id', $("input[name='batch_id']").val());
    data.append('mac_type', $("input[name='mac_type']").val());
    data.append('recommendation_letter', recommend_letter_mac);
    //send student info data
    data.append('office_address', $("#mac_container").find("input[name=office_address]").val());
    data.append('current_address',$("#mac_container").find("input[name=current_address]").val());
    data.append('address', $("#mac_container").find("input[name=address]").val());
    data.append('phone', $("#mac_container").find("input[name=phone]").val());
    data.append('gov_staff', $("#mac_container").find('input[name="gov_staff"]:checked').val());
    data.append('profile_photo', profile_photo);
    show_loader();
    $.ajax({
        url: BACKEND_URL + "/student_register",
        type: 'post',
        data: data,
        contentType: false,
        processData: false,
        success: function (result) {
            EasyLoading.hide();
            console.log(result);
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



//store cpa  app form
function SubmitCPAforDaTwoPass() {
    if ($("input[name=password]").val() != $("input[name=confirm_password]").val()) {
        alert("Your password and confirm password do not match!");
        return;
    }
    

    var certificate = $('input[name="certificate[]"]');

    let batch_id = url.substring(url.lastIndexOf('/') + 1);

    //var formData = new FormData(this);

    var send_data = new FormData();

    var image = $("input[name=image]")[0].files[0];
    var nrc_front = $("input[name=nrc_front]")[0].files[0];
    var nrc_back = $("input[name=nrc_back]")[0].files[0];
    var recommend_letter = $("input[name=recommend_letter]")[0].files[0];
    if ($('#entry_type').val() === 'da_pass') {
        var da_pass_certificate = $("input[name=da_pass_certificate]")[0].files[0];
        send_data.append('da_pass_certificate', da_pass_certificate);
        send_data.append('da_pass_date', $("input[name=da_pass_date]").val());
        send_data.append('da_pass_roll_number', $("input[name=da_pass_roll_number]").val());
    } else {
        var deg_certi_img = $("input[name=deg_certi_img]")[0].files[0];
        send_data.append('deg_certi_img', deg_certi_img);
        send_data.append('acca_cima', $("input[name=acca_cima]").val())

    }


    // var certificate = $('#certificate0')[0].files[0];
    var nrc_state_region = $("#nrc_state_region").val();
    var nrc_township = $("#nrc_township").val();
    var nrc_citizen = $("#nrc_citizen").val();

    send_data.append('name_mm', $("input[name=name_mm]").val());
    send_data.append('name_eng', $("input[name=name_eng]").val());
    send_data.append('nrc_state_region', nrc_state_region);
    send_data.append('nrc_township', nrc_township);
    send_data.append('nrc_citizen', nrc_citizen);
    send_data.append('nrc_number', $("input[name=nrc_number]").val());
    send_data.append('nrc_front', nrc_front);
    send_data.append('nrc_back', nrc_back);
    send_data.append('recommend_letter', recommend_letter);

    send_data.append('father_name_mm', $("input[name=father_name_mm]").val());
    send_data.append('father_name_eng', $("input[name=father_name_eng]").val());
    send_data.append('gender', $("input[type='radio'][name='gender']:checked").val());
    send_data.append('race', $("input[name=race]").val());
    send_data.append('religion', $("input[name=religion]").val());
    send_data.append('date_of_birth', $("input[name=date_of_birth]").val());
    send_data.append('address', $("input[name=address]").val());
    send_data.append('current_address', $("input[name=current_address]").val());
    send_data.append('phone', $("input[name=phone]").val());
    send_data.append('gov_staff', $("input[name=gov_staff]").val());
    // $(':radio:checked').map(function(){send_data.append('gov_staff',$(this).val())});
    send_data.append('image', image);
    send_data.append('registration_no', $("input[name=registration_no]").val());
    // send_data.append('date', $("input[name=date]").val());
    send_data.append('email', $("input[name=email]").val());
    send_data.append('password', $("input[name=password]").val());

    send_data.append('job_name', $("input[name=name]").val());
    send_data.append('position', $("input[name=position]").val());
    send_data.append('department', $("input[name=department]").val());
    send_data.append('organization', $("input[name=organization]").val());
    send_data.append('company_name', $("input[name=company_name]").val());
    send_data.append('salary', $("input[name=salary]").val());
    send_data.append('office_address', $("input[name=office_address]").val());

    send_data.append('university_name', $("input[name=university_name]").val());
    send_data.append('degree_name', $("input[name=degree_name]").val());
    certificate.map(function () {
        for (var i = 0; i < $(this).get(0).files.length; ++i) {
            send_data.append('certificate[]', $(this).get(0).files[i]);
        }
    });
    send_data.append('qualified_date', $("input[name=qualified_date]").val());
    send_data.append('roll_number', $("input[name=roll_number]").val());


    send_data.append('verify_status', $("input[name=verify_status]").val());
    send_data.append('payment_method', $("input[name=payment_method]").val());
    send_data.append('verify_code', $("input[name=verify_code]").val());

    send_data.append('direct_degree', $("input[name=direct_degree]").val());
    send_data.append('degree_date', $("input[name=degree_date]").val());
    send_data.append('degree_rank', $("input[name=degree_rank]").val());

    send_data.append('type', $("input[name='attend_place']:checked").val());
    send_data.append('mac_type', $("input[name='mac_type']:checked").val());
    send_data.append('batch_id', batch_id)
    show_loader();

    $.ajax({
        type: "POST",
        url: BACKEND_URL + "/cpa_register",
        contentType: false,
        processData: false,
        data: send_data,
        success: function (data) {
            EasyLoading.hide();
            successMessage("You have successfully registerd!");

            if (data.name_mm != null) {
                localStorage.setItem('studentinfo', JSON.stringify(data));
                localStorage.setItem('approve_reject', data.approve_reject_status);
                location.href = FRONTEND_URL + "/";
            } else {
                // location.reload();
                location.href = FRONTEND_URL + "/";
            }
        },
        error: function (message) {
            //EasyLoading.hide();
        }
    })

}


function cpa_edit() {
    var student = JSON.parse(localStorage.getItem('studentinfo'));

    $.ajax({
        type: 'GET',
        url: BACKEND_URL + '/student_info/' + student.id,
        success: function (result) {
            var data = result.data;
            var education = result.data.student_education_histroy;
            //  var cpone_dir = result.data.cpa_one_direct;
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
            $('#office_address').val(data.office_address);
            $('#current_address').val(data.current_address);
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

            $('#direct_degree').val(data.direct_degree);
            $('#degree_date').val(data.degree_date);
            $('#degree_rank').val(data.degree_rank);
            $('#old_certificate').val(education.certificate);
            $('#old_deg_certi').val(data.degree_certificate_image);
            $('#old_image').val(data.image);


            // $('#acca_cima_reg_no').val(cpone_dir.acca_cima_reg_no);


            // $('#da_pass_year').val(cpone_dir.da_pass_year);
            // $('#da_pass_month').val(cpone_dir.da_pass_month);
            // $('#da_pass_roll_number').val(cpone_dir.da_pass_roll_number);


            // (cpone_dir.da_pass_year) ? $('#da').prop("checked",true) : $('#non_da').prop("checked",true) 
            // selectEntry();



        }
    })

}


$('#cpa_update').submit(function (e) {
    e.preventDefault();

    var formData = new FormData(this);
    formData.append('_method', 'PUT');
    var student_id = $('#stu_id').val();

    show_loader();
    $.ajax({
        type: "POST",
        url: BACKEND_URL + "/cpa_register/" + student_id,

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

// Entry pass in Cpa One Register
function check_entry_pass() {
    let batch_id = url.substring(url.lastIndexOf('/') + 1);
    $.ajax({
        type: "get",
        url: BACKEND_URL + "/batch/" + batch_id,
        contentType: false,
        processData: false,
        success: function (res) {
            let date = new Date();

            // let current_date = date.getFullYear()+'-'+(date.getMonth()+1)+'-'+date.getDate();
            var start_date = new Date(res.data.entrance_pass_start_date);
            var end_date = new Date(res.data.entrance_pass_end_date);
            if (start_date <= date && end_date >= date) {
                $('#active_entrance').show();
            } else {
                $('#non_active').show();
            }

        },
        error: function (message) {
        }
    })

}

function direct_or_da() {
    let student = JSON.parse(localStorage.getItem("studentinfo"));

    if (student) {
        // console.log('student',student);
        let batch_id = url.substring(url.lastIndexOf('/') + 1);
        $.ajax({
            type: "get",
            url: BACKEND_URL + "/batch/" + batch_id,
            contentType: false,
            processData: false,
            success: function (res) {
                // console.log('res1',res);
                $('.batch_id').append(res.data.number);
                $('#batch_id').val(res.data.number);
                $('#batch_name').text(res.data.name);
            }
        })
        $('.da_to_cpa').show();
    } else {
        let batch_id = url.substring(url.lastIndexOf('/') + 1);
        $.ajax({
            type: "get",
            url: BACKEND_URL + "/batch/" + batch_id,
            contentType: false,
            processData: false,
            success: function (res) {
                // console.log('res2',res);
                let entry_exam = res.data.exams.slice(-1);
                console.log('entry_exam',entry_exam);
                if(entry_exam.length != 0){
                    $('#exam_date').append(formatDateMYEntry(entry_exam[0].exam_start_date));
                }else{
                    $('#exam_date').append("-------");
                }
                
                $('.batch_id').append(res.data.number);
                $('#batch_number').append(res.data.number);
            }
        })
        $('.dir_cpa_app_form').show();
        // $('.da_pass_to_cpa').show();

    }

}

// $( "#cpa_one_submit" ).click(function() {

//     if(allFilled('#cpa_one_form')){

//         var send_data = new FormData();
//         send_data.append('email',$("input[name='email']").val());
//         // send_data.append('nrc_state_region',$("input[name='nrc_state_region']").val());
//         // send_data.append('nrc_township',$("input[name='nrc_township']").val());
//         // send_data.append('nrc_citizen',$("input[name='nrc_citizen']").val());
//         // send_data.append('nrc_number',$("input[name='nrc_number']").val());
//         send_data.append('nrc_state_region',$("#nrc_state_region").val());
//         send_data.append('nrc_township',$("#nrc_township").val());
//         send_data.append('nrc_citizen',$("#nrc_citizen").val());
//         send_data.append('nrc_number',$("#nrc_number").val());
//         $.ajax({
//             url: BACKEND_URL+"/unique_email",
//             type: 'post',
//             data:send_data,
//             contentType: false,
//             processData: false,
//             success: function(result){

//                 if(result.email!=null){
//                     Swal.fire("Email has been used, please check again!");
//                 }
//                 else if(result.nrc!=null){
//                     Swal.fire("NRC has been used, please check again!");
//                 }
//                 else if(result.email==null && result.nrc==null){                    
//                     $('#cpaEmailModal').modal('show');
//                     send_email();                    
//                 }
//             }
//         });
//     }
// });

// $( "#cpa_one_submit" ).click(function() {
//     if(allFilled('#cpa_one_form')){
//         $('#cpaEmailModal').modal('show');
//         send_email();
//     }
// });
// function allFilled(form_id) {

//     var filled = true;
//     $(form_id+' input').each(function() {

//         if($("#email").val() == ''){
//             filled = false;
//         }
//         if($("#password").val() == ''){
//             filled = false;
//         }
//         if($("#confirm_password").val() == ''){
//             filled = false;
//         }
//         if($("#profile_photo").val() == ''){
//             filled = false;
//         }
//         if($("#name_mm").val() == ''){
//             filled = false;
//         }
//         if($("#name_eng").val() == ''){
//             filled = false;
//         }
//         if($("#nrc_state_region").val() == ''){
//             filled = false;
//         }
//         if($("#nrc_township").val() == ''){
//             filled = false;
//         }
//         if($("#nrc_citizen").val() == ''){
//             filled = false;
//         }
//         if($("#nrc_number").val() == ''){
//             filled = false;
//         }
//         if($("#nrc_front").val() == ''){
//             filled = false;
//         }
//         if($("#nrc_back").val() == ''){
//             filled = false;
//         }
//         if($("#father_name_mm").val() == ''){
//             filled = false;
//         }
//         if($("#father_name_eng").val() == ''){
//             filled = false;
//         }
//         if($("#race").val() == ''){
//             filled = false;
//         }
//         if($("#religion").val() == ''){
//             filled = false;
//         }
//         if($("#date_of_birth").val() == ''){
//             filled = false;
//         }
//         if($("#phone").val() == ''){
//             filled = false;
//         }
//         if($("#address").val() == ''){
//             filled = false;
//         }
//         if($("#current_address").val() == ''){
//             filled = false;
//         }
//         if($("#image").val() == ''){
//             filled = false;
//         }
//         if($("#name").val() == ''){
//             filled = false;
//         }
//         if($("#position").val() == ''){
//             filled = false;
//         }
//         if($("#department").val() == ''){
//             filled = false;
//         }
//         if($("#organization").val() == ''){
//             filled = false;
//         }
//         if($("#company_name").val() == ''){
//             filled = false;
//         }
//         if($("#salary").val() == ''){
//             filled = false;
//         }
//         if($("#office_address").val() == ''){
//             filled = false;
//         }
//         if($("#degree_name").val() == ''){
//             filled = false;
//         }
//         if($("#university_name").val() == ''){
//             filled = false;
//         }
//         if($("#roll_number").val() == ''){
//             filled = false;
//         }
//         if($("#qualified_date").val() == ''){
//             filled = false;
//         }
//         if($("#certificate0").val() == ''){
//             filled = false;
//         }

//         //  if($(this).is(':radio') && $('input[type=radio][name=type]:checked').length == 0){
//         //     filled = false;
//         //  }

//          if($('input[name="attend_place"]:checked').length === 0) {

//             filled = false;

//        }else{

//            var mac_val = $('input[name="attend_place"]:checked').val();

//            if(mac_val === '2' &&   $('input[name="mac_type"]:checked').length === 0){
//                filled = false;
//            }   

//        }


//     });
//     return filled;        
// }

function check_email_cpa() {
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
        SubmitCPAforDaTwoPass();
        $('#cpaEmailModal').modal('hide');
    }
}

//Cpa One Entry Process Start
// $( "#cpa_one_entry_submit" ).click(function() {

//     if(allFilled('#cpa_one_entry_form')){

//         var send_data = new FormData();
//         send_data.append('email',$("input[name='email']").val());
//         send_data.append('nrc_state_region',$("input[name='nrc_state_region']").val());
//         send_data.append('nrc_township',$("input[name='nrc_township']").val());
//         send_data.append('nrc_citizen',$("input[name='nrc_citizen']").val());
//         send_data.append('nrc_number',$("input[name='nrc_number']").val());
//         $.ajax({
//             url: BACKEND_URL+"/unique_email",
//             type: 'post',
//             data:send_data,
//             contentType: false,
//             processData: false,
//             success: function(result){

//                 if(result.email!=null){
//                     Swal.fire("Email has been used, please check again!");
//                 }
//                 else if(result.nrc!=null){
//                     Swal.fire("NRC has been used, please check again!");
//                 }
//                 else if(result.email==null && result.nrc==null){                    
//                     $('#cpaEntryEmailModal').modal('show');
//                     send_email();                    
//                 }
//             }
//         });
//     }
// });

function check_email_cpa_entry() {
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
        SubmitCPAEntryForm();
        $('#cpaEntryEmailModal').modal('hide');


    }
}

function SubmitCPAEntryForm() {
    if ($("input[name=password]").val() != $("input[name=confirm_password]").val()) {
        alert("Your password and confirm password do not match!");
        return;
    }
    
    var is_gov_staff;
    if (document.getElementById('yes').checked) {
        is_gov_staff = 1;
    }
    else {
        is_gov_staff = 0;
    }
    var certificate = $('input[name="certificate[]"]');

    let batch_id = url.substring(url.lastIndexOf('/') + 1);

    //var formData = new FormData(this);

    var send_data = new FormData();

    var image = $("input[name=image]")[0].files[0];
    var nrc_front = $("input[name=nrc_front]")[0].files[0];
    var nrc_back = $("input[name=nrc_back]")[0].files[0];
    var recommend_letter = $("input[name=recommend_letter]")[0].files[0];



    // var certificate = $('#certificate0')[0].files[0];
    var nrc_state_region = $("#nrc_state_region").val();
    var nrc_township = $("#nrc_township").val();
    var nrc_citizen = $("#nrc_citizen").val();

    send_data.append('name_mm', $("input[name=name_mm]").val());
    send_data.append('name_eng', $("input[name=name_eng]").val());
    send_data.append('nrc_state_region', nrc_state_region);
    send_data.append('nrc_township', nrc_township);
    send_data.append('nrc_citizen', nrc_citizen);
    send_data.append('nrc_number', $("input[name=nrc_number]").val());
    send_data.append('nrc_front', nrc_front);
    send_data.append('nrc_back', nrc_back);
    send_data.append('recommend_letter', recommend_letter);

    send_data.append('father_name_mm', $("input[name=father_name_mm]").val());
    send_data.append('father_name_eng', $("input[name=father_name_eng]").val());
    send_data.append('gender', $("input[type='radio'][name='gender']:checked").val());
    send_data.append('race', $("input[name=race]").val());
    send_data.append('religion', $("input[name=religion]").val());
    send_data.append('date_of_birth', $("input[name=date_of_birth]").val());
    send_data.append('address', $("input[name=address]").val());
    send_data.append('current_address', $("input[name=current_address]").val());
    send_data.append('phone', $("input[name=phone]").val());
    send_data.append('gov_staff', is_gov_staff);
    // $(':radio:checked').map(function(){send_data.append('gov_staff',$(this).val())});
    send_data.append('image', image);
    send_data.append('registration_no', $("input[name=registration_no]").val());
    // send_data.append('date', $("input[name=date]").val());
    send_data.append('email', $("input[name=email]").val());
    send_data.append('password', $("input[name=password]").val());

    send_data.append('job_name', $("input[name=name]").val());
    send_data.append('position', $("input[name=position]").val());
    send_data.append('department', $("input[name=department]").val());
    send_data.append('organization', $("input[name=organization]").val());
    send_data.append('company_name', $("input[name=company_name]").val());
    send_data.append('salary', $("input[name=salary]").val());
    send_data.append('office_address', $("input[name=office_address]").val());

    send_data.append('university_name', $("input[name=university_name]").val());
    send_data.append('degree_name', $("input[name=degree_name]").val());
    certificate.map(function () {
        for (var i = 0; i < $(this).get(0).files.length; ++i) {
            send_data.append('certificate[]', $(this).get(0).files[i]);
        }
    });
    send_data.append('qualified_date', $("input[name=qualified_date]").val());
    send_data.append('roll_number', $("input[name=roll_number]").val());


    send_data.append('verify_status', $("input[name=verify_status]").val());
    send_data.append('payment_method', $("input[name=payment_method]").val());
    send_data.append('verify_code', $("input[name=verify_code]").val());


    send_data.append('type', $("input[name='attend_place']:checked").val());
    send_data.append('mac_type', $("input[name='mac_type']:checked").val());




    // send_data.append('qt_entry',1);

    send_data.append('batch_id', batch_id)
    show_loader(); 

    $.ajax({
        type: "POST",
        url: BACKEND_URL + "/cpa_entry_exam",
        contentType: false,
        processData: false,
        data: send_data,
        success: function (data) {
            // console.log('data',data)
            EasyLoading.hide();
            successMessage("You have successfully registerd!");

            if (data.name_mm != null) {
                localStorage.setItem('studentinfo', JSON.stringify(data));
                localStorage.setItem('approve_reject', data.approve_reject_status);
                location.href = FRONTEND_URL + "/";
            } else {
                // location.reload();
                location.href = FRONTEND_URL + "/";
            }
        },
        error: function (message) {
            //EasyLoading.hide();
        }

    })

}

$("#cpa_one_entry_app_submit").click(function () {

    $('#cpaEntryAppEmailModal').modal('show');
    send_email();

});

$('#store_cpa_entry_app').submit(function (e) {

    e.preventDefault();


    //var formData = new FormData(this);

    var send_data = new FormData();



    send_data.append('type', $("input[name='attend_place']:checked").val());
    send_data.append('mac_type', $("input[name='mac_type']:checked").val());
    // send_data.append('qt_entry',1);
    let batch_id = url.substring(url.lastIndexOf('/') + 1);

    send_data.append('batch_id', batch_id);
    send_data.append('student_info_id', student_id);
    //show_loader(); 

    $.ajax({
        type: "POST",
        url: BACKEND_URL + "/cpa_entry_app",
        contentType: false,
        processData: false,
        data: send_data,
        success: function (data) {
            //EasyLoading.hide();
            successMessage("You have successfully registerd!");

            location.href = FRONTEND_URL + "/";

        },
        error: function (message) {
            //EasyLoading.hide();
        }
    })

})



//Cpa One Entry Process End