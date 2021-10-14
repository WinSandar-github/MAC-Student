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

var exp_count = 1;
function AddExp() {
    $("#experience").append(
        '<div class="row mb-3" id="experience' + exp_count + '">' +
        '<div class="col-md-11">' +
        '<input type="file"  class="form-control"  id="experience_file' + exp_count + '"  name="experience_file[]" required="">' +
        '</div>' +
        '<div class="col-md-1 text-center"  id="experience' + exp_count + '_remove">' +
        '<button class="btn btn-danger" id="myLink" style="padding-left:5px;" onclick="remove(experience' + exp_count + ')">' +
        '<i class="fa fa-trash "></i>' +
        '</button>' +
        '</div>' +
        '</div>');
    exp_count++;
}

var labor_count = 1;
function AddLabor() {
    $("#labor").append(
        '<div class="row mb-3" id="labor' + labor_count + '">' +
        '<div class="col-md-11">' +
        '<input type="file"  class="form-control"  id="labor_registration_attach' + labor_count + '"  name="labor_registration_attach[]" required="">' +
        '</div>' +
        '<div class="col-md-1 text-center"  id="labor' + labor_count + '_remove">' +
        '<button class="btn btn-danger" id="myLink" style="padding-left:5px;" onclick="remove(labor' + labor_count + ')">' +
        '<i class="fa fa-trash "></i>' +
        '</button>' +
        '</div>' +
        '</div>');
    labor_count++;
}

var recommend_count = 1;
function AddRecommend() {
    $("#recommend").append(
        '<div class="row mb-3" id="recommend' + recommend_count + '">' +
        '<div class="col-md-11">' +
        '<input type="file"  class="form-control"  id="recommend_attach' + recommend_count + '"  name="recommend_attach[]" required="">' +
        '</div>' +
        '<div class="col-md-1 text-center"  id="recommend' + recommend_count + '_remove">' +
        '<button class="btn btn-danger" id="myLink" style="padding-left:5px;" onclick="remove(recommend' + recommend_count + ')">' +
        '<i class="fa fa-trash "></i>' +
        '</button>' +
        '</div>' +
        '</div>');
    recommend_count++;
}

var police_count = 1;
function AddPolice() {
    $("#police").append(
        '<div class="row mb-3" id="police' + police_count + '">' +
        '<div class="col-md-11">' +
        '<input type="file"  class="form-control"  id="police_attach' + police_count + '"  name="police_attach[]" required="">' +
        '</div>' +
        '<div class="col-md-1 text-center"  id="police' + police_count + '_remove">' +
        '<button class="btn btn-danger" id="myLink" style="padding-left:5px;" onclick="remove(police' + police_count + ')">' +
        '<i class="fa fa-trash "></i>' +
        '</button>' +
        '</div>' +
        '</div>');
    police_count++;
}

function createArticleFirmRegister() {
    var send_data = new FormData();

    var image = $("input[name=profile_photo]")[0].files[0];
    var nrc_front = $("input[name=nrc_front]")[0].files[0];
    var nrc_back = $("input[name=nrc_back]")[0].files[0];
    var nrc_state_region = $("#nrc_state_region").val();
    var nrc_township = $("#nrc_township").val();
    var nrc_citizen = $("#nrc_citizen").val();
    var request_papp_attach = $("input[name=request_papp_attach]")[0].files[0];

    // send_data.append('image', image);
    // send_data.append('name_mm', $("input[name=name_mm]").val());
    // send_data.append('name_eng', $("input[name=name_eng]").val());
    // send_data.append('personal_no', $("input[name=personal_no]").val());
    // send_data.append('nrc_state_region', nrc_state_region);
    // send_data.append('nrc_township', nrc_township);
    // send_data.append('nrc_citizen', nrc_citizen);
    // send_data.append('nrc_number', $("input[name=nrc_number]").val());
    // send_data.append('nrc_front', nrc_front);
    // send_data.append('nrc_back', nrc_back);
    // send_data.append('education', $("input[name=education]").val());
    // $('input[name="certificate[]"]').map(function () {
    //     for (var i = 0; i < $(this).get(0).files.length; ++i) {
    //         send_data.append('certificate[]', $(this).get(0).files[i]);
    //     }
    // });
    $('input[name="experience_file[]"]').map(function () {
        for (var i = 0; i < $(this).get(0).files.length; ++i) {
            send_data.append('apprentice_exp_file[]', $(this).get(0).files[i]);
        }
    });
    // send_data.append('race', $("input[name=race]").val());
    // send_data.append('religion', $("input[name=religion]").val());
    // send_data.append('date_of_birth', $("input[name=date_of_birth]").val());
    // send_data.append('father_name_mm', $("input[name=father_name_mm]").val());
    // send_data.append('father_name_eng', $("input[name=father_name_eng]").val());
    send_data.append('apprentice_exp', $("input[type='radio'][name='experience']:checked").val());
    send_data.append('gov_staff', $("input[type='radio'][name='current_job']:checked").val());
    send_data.append('gov_position', $("input[name=position]").val());
    send_data.append('gov_joining_date', $("input[name=job_started_date]").val());
    // send_data.append('address', $("input[name=address]").val());
    send_data.append('current_address', $("input[name=current_address]").val());
    // send_data.append('phone_no', $("input[name=phone_no]").val());
    send_data.append('m_email', $("input[name=m_email]").val());
    send_data.append('ex_papp', $("input[name=previous_papp_name]").val());
    send_data.append('exp_start_date', $("input[name=previous_papp_start_date]").val());
    send_data.append('exp_end_date', $("input[name=previous_papp_end_date]").val());
    send_data.append('request_papp', $("input[name=papp_name]").val());
    send_data.append('request_papp_attach', request_papp_attach);
    send_data.append('exam_pass_date', $("input[name=pass_date]").val());
    send_data.append('exam_pass_batch', $("input[name=pass_no]").val());
    send_data.append('student_info_id', $("input[name=student_info_id]").val());
    send_data.append('article_form_type', $("input[name=article_form_type]").val());
    send_data.append('accept_policy', 1);

    show_loader();
    $.ajax({
        type: "POST",
        data: send_data,
        url: BACKEND_URL + "/article_firm_register",
        // contentType: false,
        // processData: false,
        cache: false,
        contentType: false,
        processData: false,
        success: function (result) {
            EasyLoading.hide();
            successMessage("You have successfully registered.");
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

function createArticleGovRegister() {
    var send_data = new FormData();

    var image = $("input[name=profile_photo]")[0].files[0];
    var nrc_front = $("input[name=nrc_front]")[0].files[0];
    var nrc_back = $("input[name=nrc_back]")[0].files[0];
    var nrc_state_region = $("#nrc_state_region").val();
    var nrc_township = $("#nrc_township").val();
    var nrc_citizen = $("#nrc_citizen").val();
    //var labor_registration_attach = $("input[name=labor_registration_attach]")[0].files[0];
    // var recommend_attach = $("input[name=recommend_attach]")[0].files[0];
    // var police_attach = $("input[name=police_attach]")[0].files[0];

    // send_data.append('image', image);
    // send_data.append('name_mm', $("input[name=name_mm]").val());
    // send_data.append('name_eng', $("input[name=name_eng]").val());
    // send_data.append('date_of_birth', $("input[name=date_of_birth]").val());
    // send_data.append('education', $("input[name=education]").val());
    // $('input[name="certificate[]"]').map(function () {

    //     for (var i = 0; i < $(this).get(0).files.length; ++i) {
    //         console.log($(this))
    //         send_data.append('certificate[]', $(this).get(0).files[i]);
    //     }
    // });
    // send_data.append('race', $("input[name=race]").val());
    // send_data.append('religion', $("input[name=religion]").val());
    // send_data.append('nrc_state_region', nrc_state_region);
    // send_data.append('nrc_township', nrc_township);
    // send_data.append('nrc_citizen', nrc_citizen);
    // send_data.append('nrc_number', $("input[name=nrc_number]").val());
    // send_data.append('nrc_front', nrc_front);
    // send_data.append('nrc_back', nrc_back);
    send_data.append('labor_registration_no', $("input[name=labor_registration_no]").val());
    // send_data.append('father_name_mm', $("input[name=father_name_mm]").val());
    // send_data.append('father_name_eng', $("input[name=father_name_eng]").val());
    send_data.append('father_job', $("input[name=father_job]").val());
    send_data.append('father_address', $("input[name=father_address]").val());
    $(':radio:checked').map(function(){send_data.append('married',$(this).val())});
    send_data.append('married_name', $("input[name=married_name]").val());
    send_data.append('married_job', $("input[name=married_job]").val());
    send_data.append('home_address', $("input[name=home_address]").val());
    send_data.append('current_address', $("input[name=current_address]").val());
    send_data.append('address', $("input[name=address]").val());
    send_data.append('tempory_address', $("input[name=tempory_address]").val());
    send_data.append('permanent_address', $("input[name=permanent_address]").val());
    // send_data.append('phone_no', $("input[name=phone_no]").val());
    send_data.append('m_email', $("input[name=m_email]").val());
    //send_data.append('labor_registration_attach', labor_registration_attach);
    
    $('input[name="labor_registration_attach[]"]').map(function () {
        for (var i = 0; i < $(this).get(0).files.length; ++i) {
            send_data.append('labor_registration_attach[]', $(this).get(0).files[i]);
        }
    });

    $('input[name="recommend_attach[]"]').map(function () {
        for (var i = 0; i < $(this).get(0).files.length; ++i) {
            send_data.append('recommend_attach[]', $(this).get(0).files[i]);
        }
    });

    $('input[name="police_attach[]"]').map(function () {
        for (var i = 0; i < $(this).get(0).files.length; ++i) {
            send_data.append('police_attach[]', $(this).get(0).files[i]);
        }
    });
    // send_data.append('recommend_attach', recommend_attach);
    send_data.append('student_info_id', $("input[name=student_info_id]").val());
    // send_data.append('police_attach', police_attach);
    send_data.append('accept_policy', 1);

    show_loader();
    $.ajax({
        url: BACKEND_URL + "/article_gov_register",
        type: 'post',
        data: send_data,
        contentType: false,
        processData: false,
        success: function (result) {
            EasyLoading.hide();
            successMessage("You have successfully registered.");
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

function createArticleResignRegister() {
    var send_data = new FormData();

    var image = $("input[name=profile_photo]")[0].files[0];
    var nrc_front = $("input[name=nrc_front]")[0].files[0];
    var nrc_back = $("input[name=nrc_back]")[0].files[0];
    var nrc_state_region = $("#nrc_state_region").val();
    var nrc_township = $("#nrc_township").val();
    var nrc_citizen = $("#nrc_citizen").val();
    var resign_approve_attach = $("input[name=resign_approve_attach]")[0].files[0];

    send_data.append('student_info_id', $("input[name=student_info_id]").val());
    send_data.append('m_email', $("input[name=m_email]").val());
    send_data.append('resign_date', $("input[name=resign_date]").val());
    send_data.append('resign_reason', $("textarea[name=resign_reason]").val());
    send_data.append('recent_org', $("input[name=recent_org]").val());
    send_data.append('resign_approve_attach', resign_approve_attach);
    send_data.append('article_form_type', $("input[name=article_form_type]").val());
    send_data.append('know_policy', 1);

    show_loader();
    $.ajax({
        url: BACKEND_URL + "/article_resign_register",
        type: 'post',
        data: send_data,
        contentType: false,
        processData: false,
        success: function (result) {
            EasyLoading.hide();
            successMessage("You have successfully registered.");
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

function createArticleRenewRegister() {
    var send_data = new FormData();

    var image = $("input[name=profile_photo]")[0].files[0];
    var nrc_front = $("input[name=nrc_front]")[0].files[0];
    var nrc_back = $("input[name=nrc_back]")[0].files[0];
    var nrc_state_region = $("#nrc_state_region").val();
    var nrc_township = $("#nrc_township").val();
    var nrc_citizen = $("#nrc_citizen").val();
    var request_papp_attach = $("input[name=request_papp_attach]")[0].files[0];

    // send_data.append('image', image);
    // send_data.append('name_mm', $("input[name=name_mm]").val());
    // send_data.append('name_eng', $("input[name=name_eng]").val());
    // send_data.append('personal_no', $("input[name=personal_no]").val());
    // send_data.append('nrc_state_region', nrc_state_region);
    // send_data.append('nrc_township', nrc_township);
    // send_data.append('nrc_citizen', nrc_citizen);
    // send_data.append('nrc_number', $("input[name=nrc_number]").val());
    // send_data.append('nrc_front', nrc_front);
    // send_data.append('nrc_back', nrc_back);
    // send_data.append('education', $("input[name=education]").val());
    // $('input[name="certificate[]"]').map(function () {
    //     for (var i = 0; i < $(this).get(0).files.length; ++i) {
    //         send_data.append('certificate[]', $(this).get(0).files[i]);
    //     }
    // });
    // send_data.append('race', $("input[name=race]").val());
    // send_data.append('religion', $("input[name=religion]").val());
    // send_data.append('date_of_birth', $("input[name=date_of_birth]").val());
    // send_data.append('father_name_mm', $("input[name=father_name_mm]").val());
    // send_data.append('father_name_eng', $("input[name=father_name_eng]").val());
    send_data.append('gov_staff', $("input[type='radio'][name='current_job']:checked").val());
    send_data.append('gov_position', $("input[name=position]").val());
    send_data.append('gov_joining_date', $("input[name=job_started_date]").val());
    // send_data.append('address', $("input[name=address]").val());
    // send_data.append('phone_no', $("input[name=phone_no]").val());
    send_data.append('current_address', $("input[name=current_address]").val());
    send_data.append('m_email', $("input[name=m_email]").val());
    send_data.append('ex_papp', $("input[name=previous_papp_name]").val());
    send_data.append('exp_start_date', $("input[name=previous_papp_start_date]").val());
    send_data.append('exp_end_date', $("input[name=previous_papp_end_date]").val());
    send_data.append('request_papp', $("input[name=papp_name]").val());
    send_data.append('request_papp_attach', request_papp_attach);
    send_data.append('student_info_id', $("input[name=student_info_id]").val());
    send_data.append('article_form_type', $("input[name=article_form_type]").val());
    send_data.append('accept_policy', 1);

    show_loader();
    $.ajax({
        type: "POST",
        data: send_data,
        url: BACKEND_URL + "/article_renew_register",
        cache: false,
        contentType: false,
        processData: false,
        success: function (result) {
            EasyLoading.hide();
            successMessage("You have successfully registered.");
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