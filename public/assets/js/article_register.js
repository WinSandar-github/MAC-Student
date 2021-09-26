var count = 1;

function AddDAEdu() {
    $("#edu").append(
        '<div class="row mb-3" id="edu' + count + '">' +
        '<div class="col-md-11">' +
        '<input type="file"  class="form-control"  id="certificate' + count + '"  name="certificate[]" required="">' +
        '</div>' +
        '<div class="col-md-1 text-center"  id="edu' + count + '_remove">' +
        '<button class="btn btn-danger" id="myLink" onclick="remove(edu' + count + ')">' +
        '<i class="fa fa-trash "></i>' +
        '</button>' +
        '</div>' +
        '</div>');
    count++;
}

function createArticleFirmRegister() {
    if ($("input[name=password]").val() != $("input[name=confirm_password]").val()) {
        alert("Your password and confirm password do not match!");
        return;
    }
    var send_data = new FormData();

    var image = $("input[name=profile_photo]")[0].files[0];
    var nrc_front = $("input[name=nrc_front]")[0].files[0];
    var nrc_back = $("input[name=nrc_back]")[0].files[0];
    var nrc_state_region = $("#nrc_state_region").val();
    var nrc_township = $("#nrc_township").val();
    var nrc_citizen = $("#nrc_citizen").val();
    var experience_file = $("input[name=experience_file]")[0].files[0];

    var labor_registration_attach = $("input[name=labor_registration_attach]")[0].files[0];
    var recommend_attach = $("input[name=recommend_attach]")[0].files[0];
    var police_attach = $("input[name=police_attach]")[0].files[0];

    send_data.append('image', image);
    send_data.append('email', $("input[name=email]").val());
    send_data.append('password', $("input[name=password]").val());
    send_data.append('name_mm', $("input[name=name_mm]").val());
    send_data.append('name_eng', $("input[name=name_eng]").val());
    send_data.append('personal_no', $("input[name=personal_no]").val());
    send_data.append('nrc_state_region', nrc_state_region);
    send_data.append('nrc_township', nrc_township);
    send_data.append('nrc_citizen', nrc_citizen);
    send_data.append('nrc_number', $("input[name=nrc_number]").val());
    send_data.append('nrc_front', nrc_front);
    send_data.append('nrc_back', nrc_back);
    send_data.append('education', $("input[name=education]").val());
    $('input[name="certificate[]"]').map(function () {

        for (var i = 0; i < $(this).get(0).files.length; ++i) {
            console.log($(this))
            send_data.append('certificate[]', $(this).get(0).files[i]);
        }
    });
    send_data.append('race', $("input[name=race]").val());
    send_data.append('religion', $("input[name=religion]").val());
    send_data.append('date_of_birth', $("input[name=date_of_birth]").val());
    send_data.append('father_name_mm', $("input[name=father_name_mm]").val());
    send_data.append('father_name_eng', $("input[name=father_name_eng]").val());
    $(':radio:checked').map(function(){send_data.append('experience',$(this).val())});
    send_data.append('experience_file', $("input[name=experience_file]").val());
    $(':radio:checked').map(function(){send_data.append('current_job',$(this).val())});
    send_data.append('position', $("input[name=position]").val());
    send_data.append('job_started_date', $("input[name=job_started_date]").val());
    send_data.append('address', $("input[name=address]").val());
    send_data.append('current_address', $("input[name=current_address]").val());
    send_data.append('phone_no', $("input[name=phone_no]").val());
    send_data.append('m_email', $("input[name=m_email]").val());
    send_data.append('papp_name', $("input[name=papp_name]").val());
    send_data.append('pass_date', $("input[name=pass_date]").val());
    send_data.append('pass_no', $("input[name=pass_no]").val());

    show_loader();
    $.ajax({
        url: BACKEND_URL + "/article_register",
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

function createArticleGovRegister() {
    if ($("input[name=password]").val() != $("input[name=confirm_password]").val()) {
        alert("Your password and confirm password do not match!");
        return;
    }
    var send_data = new FormData();

    var image = $("input[name=profile_photo]")[0].files[0];
    var nrc_front = $("input[name=nrc_front]")[0].files[0];
    var nrc_back = $("input[name=nrc_back]")[0].files[0];
    var nrc_state_region = $("#nrc_state_region").val();
    var nrc_township = $("#nrc_township").val();
    var nrc_citizen = $("#nrc_citizen").val();
    var labor_registration_attach = $("input[name=labor_registration_attach]")[0].files[0];
    var recommend_attach = $("input[name=recommend_attach]")[0].files[0];
    var police_attach = $("input[name=police_attach]")[0].files[0];

    send_data.append('image', image);
    send_data.append('email', $("input[name=email]").val());
    send_data.append('password', $("input[name=password]").val());
    send_data.append('name_mm', $("input[name=name_mm]").val());
    send_data.append('name_eng', $("input[name=name_eng]").val());
    send_data.append('date_of_birth', $("input[name=date_of_birth]").val());
    send_data.append('education', $("input[name=education]").val());
    $('input[name="certificate[]"]').map(function () {

        for (var i = 0; i < $(this).get(0).files.length; ++i) {
            console.log($(this))
            send_data.append('certificate[]', $(this).get(0).files[i]);
        }
    });
    send_data.append('race', $("input[name=race]").val());
    send_data.append('religion', $("input[name=religion]").val());
    send_data.append('nrc_state_region', nrc_state_region);
    send_data.append('nrc_township', nrc_township);
    send_data.append('nrc_citizen', nrc_citizen);
    send_data.append('nrc_number', $("input[name=nrc_number]").val());
    send_data.append('nrc_front', nrc_front);
    send_data.append('nrc_back', nrc_back);
    send_data.append('labor_registration_no', $("input[name=labor_registration_no]").val());
    send_data.append('father_name_mm', $("input[name=father_name_mm]").val());
    send_data.append('father_name_eng', $("input[name=father_name_eng]").val());
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
    send_data.append('phone_no', $("input[name=phone_no]").val());
    send_data.append('m_email', $("input[name=m_email]").val());
    send_data.append('labor_registration_attach', labor_registration_attach);
    send_data.append('recommend_attach', recommend_attach);
    send_data.append('police_attach', police_attach);

    show_loader();
    $.ajax({
        url: BACKEND_URL + "/article_register",
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