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

function loadMentorList(){
    var array = [];
    $.ajax({
        url: BACKEND_URL+"/mentor",
        type: 'get',
        data:"",
        success: function(data){
            var result=data.data;
            result.forEach(function (element) {
                array.push(element.papp_reg_no);
            });

            $('#papp_name').autocomplete({
                source : array,
                select : getMentorName,
                //focus : getMentorName,
                //change :getMentorName
            })
            $('#update_papp_name').autocomplete({
                source : array,
                select : getMentorName,
                //focus : getMentorName,
                //change :getMentorName
            })
        },
        error:function (message){

        }

    });
}

function getMentorName(event, ui){
    papp_name = ui.item.label;
    $.ajax({
        type: 'GET',
        url: BACKEND_URL + "/getMentor/" + papp_name,
        success: function (mentor) {
            var result = mentor.mentor;
            result.forEach(function (element) {
                $("#mentor_name").val(element.name_eng);
                $("#mentor_id").val(element.id);
                $("#update_mentor_name").val(element.name_eng);
                $("#update_mentor_id").val(element.id);
            });
        },
        error:function (message){

        }
    });
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

    send_data.append('image', image);
    // send_data.append('name_mm', $("input[name=name_mm]").val());
    // send_data.append('name_eng', $("input[name=name_eng]").val());
    // send_data.append('personal_no', $("input[name=personal_no]").val());
    // send_data.append('nrc_state_region', nrc_state_region);
    // send_data.append('nrc_township', nrc_township);
    // send_data.append('nrc_citizen', nrc_citizen);
    // send_data.append('nrc_number', $("input[name=nrc_number]").val());
    send_data.append('nrc_front', nrc_front);
    send_data.append('nrc_back', nrc_back);
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
    send_data.append('phone_no', $("input[name=phone_no]").val());
    send_data.append('m_email', $("input[name=m_email]").val());
    send_data.append('ex_papp', $("input[name=previous_papp_name]").val());
    send_data.append('exp_start_date', $("input[name=previous_papp_start_date]").val());
    send_data.append('exp_end_date', $("input[name=previous_papp_end_date]").val());
    send_data.append('request_papp', $("input[name=papp_name]").val());
    if($("#mentor_id").val()){
        send_data.append('mentor_id', $("#mentor_id").val());
    }
    else{
        send_data.append('mentor_id', $("#mentor_name").val());
    }
    send_data.append('request_papp_attach', request_papp_attach);
    send_data.append('exam_pass_date', $("input[name=pass_date]").val());
    send_data.append('exam_pass_batch', $("input[name=pass_no]").val());
    send_data.append('student_info_id', $("input[name=student_info_id]").val());
    send_data.append('article_form_type', $("input[name=article_form_type]").val());
    send_data.append('accept_policy', 1);

    show_loader();

    if($('#article_id').val())
    {
        var id=$('#article_id').val();
        send_data.append('article_id',id);
        $.ajax({
            url: BACKEND_URL+"/update_reject_article",
            type: 'post',
            data:send_data,
            contentType: false,
            processData: false,
            success: function(result){
                EasyLoading.hide();
                successMessage("You have successfully updated!");
                    // location.reload();
                    location.href = FRONTEND_URL+'/';
                },
            error:function (message){
                EasyLoading.hide();
                }
            });
    }
    else{
        if($("input[name=nrc_front]")[0].files[0]){
            send_data.append('nrc_front', $("input[name=nrc_front]")[0].files[0]);
        }else{
            send_data.append('nrc_front', $('#hnrc_front').val());
        }
        if($("input[name=nrc_back]")[0].files[0]){
            send_data.append('nrc_back', $("input[name=nrc_back]")[0].files[0]);
        }else{
            send_data.append('nrc_back', $('#hnrc_back').val());
        }
        if($("input[name=profile_photo]")[0].files[0]){
            send_data.append('image', $("input[name=profile_photo]")[0].files[0]);
        }else{
            send_data.append('image', $('#himage').val());
        }
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

    send_data.append('image', image);
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
    send_data.append('nrc_front', nrc_front);
    send_data.append('nrc_back', nrc_back);
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
    send_data.append('phone_no', $("input[name=phone_no]").val());
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

    if($('#article_id').val())
    {
        var id=$('#article_id').val();
        send_data.append('article_id',id);
        $.ajax({
            url: BACKEND_URL+"/update_reject_gov_article",
            type: 'post',
            data:send_data,
            contentType: false,
            processData: false,
            success: function(result){
                EasyLoading.hide();
                successMessage("You have successfully updated!");
                    // location.reload();
                    location.href = FRONTEND_URL+'/';
                },
            error:function (message){
                EasyLoading.hide();
                }
            });
    }
    else{
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
}

function createArticleResignRegister() {
    let months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

    var send_data = new FormData();

    var image = $("input[name=profile_photo]")[0].files[0];
    var nrc_front = $("input[name=nrc_front]")[0].files[0];
    var nrc_back = $("input[name=nrc_back]")[0].files[0];

    var nrc_state_region = $("#nrc_state_region").val();
    var nrc_township = $("#nrc_township").val();
    var nrc_citizen = $("#nrc_citizen").val();

    send_data.append('image', image);
    send_data.append('nrc_front', nrc_front);
    send_data.append('nrc_back', nrc_back);

    var resign_date = new Date($("input[name=resign_date]").val());
    var change_contract_end_date = new Date(resign_date.getFullYear(), resign_date.getMonth(), (resign_date.getDate()) - 1);
    change_contract_end_date = String(change_contract_end_date.getDate()).padStart(2, '0') + "-" + months[change_contract_end_date.getMonth()] + "-" + change_contract_end_date.getFullYear();

    var resign_approve_attach = $("input[name=resign_approve_attach]")[0].files[0];
    send_data.append('phone_no', $("input[name=phone_no]").val());
    send_data.append('student_info_id', $("input[name=student_info_id]").val());
    send_data.append('m_email', $("input[name=m_email]").val());
    send_data.append('resign_date', $("input[name=resign_date]").val());
    send_data.append('resign_reason', $("textarea[name=resign_reason]").val());
    send_data.append('recent_org', $("input[name=recent_org]").val());
    send_data.append('resign_approve_attach', resign_approve_attach);
    send_data.append('article_form_type', $("input[name=article_form_type]").val());
    send_data.append('contract_start_date', $("input[name=contract_start_date]").val());
    //send_data.append('contract_end_date', $("input[name=contract_end_date]").val());
    send_data.append('mentor_id', $("input[name=mentor_id]").val());
    send_data.append('know_policy', 1);
    if($("#offline_user").val()==1){
        send_data.append('offline_user', $("#offline_user").val());
    }else{
        send_data.append('offline_user', 0);
    }

    send_data.append('change_contract_end_date', change_contract_end_date);

    show_loader();

    if($('#article_id').val())
    {
        var id=$('#article_id').val();
        send_data.append('article_id',id);
        $.ajax({
            url: BACKEND_URL+"/update_reject_resign_article",
            type: 'post',
            data:send_data,
            contentType: false,
            processData: false,
            success: function(result){
                EasyLoading.hide();
                successMessage("You have successfully updated!");
                    // location.reload();
                    location.href = FRONTEND_URL+'/';
                },
            error:function (message){
                EasyLoading.hide();
                }
            });
    }
    else{
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
                    location.href = FRONTEND_URL + "/payment_method/" + result.student_info_id + "/" + result.invoiceNo;
                }, 3000);
            },
            error: function (message) {
                EasyLoading.hide();
                errorMessage(message);
            }
        });
    }
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
    var office_order_attach = $("input[name=office_order_attach]")[0].files[0];

    send_data.append('image', image);
    // send_data.append('name_mm', $("input[name=name_mm]").val());
    // send_data.append('name_eng', $("input[name=name_eng]").val());
    // send_data.append('personal_no', $("input[name=personal_no]").val());
    // send_data.append('nrc_state_region', nrc_state_region);
    // send_data.append('nrc_township', nrc_township);
    // send_data.append('nrc_citizen', nrc_citizen);
    // send_data.append('nrc_number', $("input[name=nrc_number]").val());
    send_data.append('nrc_front', nrc_front);
    send_data.append('nrc_back', nrc_back);
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
    // send_data.append('gov_staff', $("input[type='radio'][name='current_job']:checked").val());
    // send_data.append('gov_position', $("input[name=position]").val());
    // send_data.append('gov_joining_date', $("input[name=job_started_date]").val());
    // send_data.append('address', $("input[name=address]").val());
    send_data.append('phone_no', $("input[name=phone_no]").val());
    send_data.append('current_address', $("input[name=current_address]").val());
    send_data.append('m_email', $("input[name=m_email]").val());
    send_data.append('ex_papp', $("input[name=previous_papp_name]").val());
    send_data.append('exp_start_date', $("input[name=previous_papp_start_date]").val());
    send_data.append('exp_end_date', $("input[name=previous_papp_end_date]").val());
    send_data.append('request_papp', $("input[name=papp_name]").val());
    // send_data.append('mentor_id', $("#mentor_id").val());
    if($("#mentor_id").val()){
        send_data.append('mentor_id', $("#mentor_id").val());
    }
    else{
        send_data.append('mentor_id', $("#mentor_name").val());
    }
    send_data.append('request_papp_attach', request_papp_attach);
    send_data.append('student_info_id', $("input[name=student_info_id]").val());
    send_data.append('article_form_type', $("input[name=article_form_type]").val());
    send_data.append('accept_policy', 1);
    if($("#offline_user").val()==1){
        send_data.append('offline_user', $("#offline_user").val());
    }else{
        send_data.append('offline_user', 0);
    }
    send_data.append('office_order_attach', office_order_attach);

    show_loader();

    if($('#article_id').val())
    {
        var id=$('#article_id').val();
        send_data.append('article_id',id);
        $.ajax({
            url: BACKEND_URL+"/update_reject_renew_article",
            type: 'post',
            data:send_data,
            contentType: false,
            processData: false,
            success: function(result){
                EasyLoading.hide();
                successMessage("You have successfully updated!");
                    // location.reload();
                    location.href = FRONTEND_URL+'/';
                },
            error:function (message){
                EasyLoading.hide();
                }
            });
    }
    else{
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
}
function check_email_cpaTwoPassOneYear()
{
    var text = localStorage.getItem('verify_code');
    var obj = JSON.parse(text);
    var verify_code = obj.data.verify_code;
    var code = $("input[name=verify_code]").val();
    if(verify_code != code){
        successMessage("Your code is not correct.Please check your email inbox again!");
        // $('#exampleModal').modal('show');
        // $('#exampleModal1').modal('hide');
        // $('#exampleModal').modal('show');
    }else{
        createCPATwoPassOneYearArticle();
        $('#cpaTwoPassOneYearArticleModal').modal('hide');
    }
}
function createCPATwoPassOneYearArticle(){
   
    var send_data = new FormData($( "#article_cpaTwoPassOneYear_form" )[0]);
    if($('#offline_user').val()){
        send_data.append('offline_user',$('#offline_user').val());
      }
      if($("#mentor_id").val()){
        send_data.append('mentor_id', $("#mentor_id").val());
      }
      else{
        send_data.append('mentor_id', $("#mentor_name").val());
      }
      send_data.append('article_form_type', $("#article_form_type").val());
      /////

      if($("#article_form_type").val() == 'c12_renew'){
        // c12 renew form
        if($('input[name=gender]:checked').val() == 1){
          var gender = "ကျွန်တော်" ;
        }
        else{
          var gender = "ကျွန်မ" ;
        }
        send_data.append('gender',gender);
        ////
        if($('input[name=course_part]:checked').val() == 1){
          var course_part = "(ပထမပိုင်း)" ;
        }
        else{
          var course_part = "(ဒုတိယပိုင်း)" ;
        }
        send_data.append('course_part',course_part);
        ////
        if($('input[name=school]:checked').val() == 1){
          var school_name = "မြန်မာနိုင်ငံစာရင်းကောင်စီ သင်တန်းကျောင်းတွင်" ;
        }
        else if($('input[name=school]:checked').val() == 2){
          var school_name = "ကိုယ်ပိုင်စာရင်းကိုင်သင်တန်းကျောင်းတွင်" ;
        }
        else{
          var school_name = "ကိုယ်ပိုင်လေ့လာသူအဖြစ်" ;
        }
        send_data.append('school_name',school_name);
        ///
        if($('input[name=‌attend_or_fail]:checked').val() == 1){
          var attend_fail = "တက်ရောက်နေသူ" ;
        }
        else{
          var attend_fail = "ကျရှုံးသူ" ;
        }
        send_data.append('attend_fail',attend_fail);

      }
      else if($("#article_form_type").val() == 'c2_pass_renew'){
        // c2 pass renew form
        if($('input[name=gender2]:checked').val() == 1){
          var gender = "ကျွန်တော်" ;
        }
        else{
          var gender = "ကျွန်မ" ;
        }
        send_data.append('gender',gender);
      }

      var office_order_attach = $("input[name=office_order_attach]")[0].files[0];
      send_data.append('office_order_attach',office_order_attach);

    show_loader();
    $.ajax({
        type: "POST",
        data: send_data,
        url: BACKEND_URL + "/article_firm_register",
        // async: false,
        //cache: false,
        contentType: false,
        processData: false,
        success: function (data) {

            EasyLoading.hide();
            successMessage(data.message);
            location.href=FRONTEND_URL+'/';

        },
        error: function (result) {


        },
    });
}
function loadArticle()
{
    $('.article').hide();
    $('.reject_article').show();
    let result = window.location.href;
    let url = new URL(result);
    var id = url.searchParams.get("id");
    
    $.ajax({
        url: BACKEND_URL + "/acc_app/" + id,
        type: 'get',
        data: "",
        success: function (data) {
            var student_info = data.student_info;
            $("#offline_user").val(data.offline_user);
            if(data.status!=2){
                // if(data.article_form_type=="c2_pass_qt_pass_3yr" || data.article_form_type=="c2_pass_1yr"){
                    $('input[name=update_gender]').attr('disabled',true);
                    $('input[name=update_gender2]').attr('disabled',true);
                    // $('input[name=pass_date]').attr('disabled',true);
                   
                    // $('input[name=update_pass_no]').attr('disabled',true);
                    
                    $('input[name=update_email]').attr('disabled',true);
                    
                    $('input[name=update_name_mm]').attr('disabled',true);
                    
                    $('input[name=update_name_eng]').attr('disabled',true);
                    // $('input[name=update_password]').attr('disabled',true);
                    
                    // $('.renew').css('display', 'none');
                    $('.office_order_attach').css('display', 'none');
                    // $(".renew_name").text('၃။');
                    // $(".renew_no").text('၄။');
                    // $(".renew_nrc").text('၅။');
                    // $(".renew_edu").text('၆။');
                    // $(".renew_race").text('၇။');
                    // $(".renew_birth").text('၈။');
                    // $(".renew_father").text('၉။');
                    // $(".renew_job").text('၁၀။');
                    // $(".renew_curaddress").text('၁၁။');
                    // $(".renew_address").text('၁၂။');
                    // $(".renew_phone").text('၁၃။');
                    // $(".renew_papp").text('၁၄။');
                    // $(".renew_office").text('၁၅။');
                    
                    $('input[name=update_personal_no]').attr('disabled',true);
                    
                    $('#update_nrc_state_region').attr('disabled',true);
                    
                    $('#update_nrc_township').attr('disabled',true);
                   
                    $('#update_nrc_citizen').attr('disabled',true);
                    
                    $('input[name=update_nrc_number]').attr('disabled',true);
                    
                    $('input[name=update_father_name_mm]').attr('disabled',true);
                   
                    $('input[name=update_father_name_eng]').attr('disabled',true);
                   
                    $("#update_date_of_birth").attr('disabled',true);
                   
                    $('#article_reject_form').attr('action', 'javascript:updateArticleByResign();');
                    
                //}
                
            }
            
            if(data.total_experience){
                var total_exp_array = JSON.parse(data.total_experience);
                var exp_year = total_exp_array[0];
                var exp_month = total_exp_array[1];
                var exp_days = total_exp_array[2];
              }
             
            $("#student_info_id").val(student_info.id);
            $('input[name=update_email]').val(student_info.email);
            $('input[name=update_name_mm]').val(student_info.name_mm);
            $('input[name=update_name_eng]').val(student_info.name_eng);
            $("#update_previewNRCFrontImg").attr("src",BASE_URL+student_info.nrc_front);
            $("#update_previewNRCBackImg").attr("src",BASE_URL+student_info.nrc_back);
            $("#hnrc_front").val(student_info.nrc_front);
            $("#hnrc_back").val(student_info.nrc_back);
            $("#himage").val(student_info.image);
            $("#update_personal_no").val(student_info.cpersonal_no);
            $("#update_nrc_state_region").val(student_info.nrc_state_region);
            $("#update_nrc_township").val(student_info.nrc_township);
            $("#update_nrc_citizen").val(student_info.nrc_citizen);
            $("#update_nrc_number").val(student_info.nrc_number);
            $("#update_father_name_mm").val(student_info.father_name_mm);
            $("#update_father_name_eng").val(student_info.father_name_eng);
            $("#update_race").val(student_info.race);
            $("#update_religion").val(student_info.religion);
            $("#update_date_of_birth").val(student_info.date_of_birth);
            $("#ex_papp_name").val(data.ex_papp);
            $("#ex_papp_start_date").val(data.exp_start_date);
            $("#ex_papp_end_date").val(data.exp_end_date);
            $("input[name=update_exp_year]").val(exp_year);
            $("input[name=update_exp_month]").val(exp_month);
            $("input[name=update_exp_days]").val(exp_days);
            
            $('input[name=update_pass_no]').val(data.exam_pass_batch);
            $("#exam_pass_batch_2").val(data.exam_pass_batch);
            
            $('input[name=pass_date]').val(data.exam_pass_date);

            if(student_info.gender == 1 || student_info.gender=="Male"){
                $('input:radio[id=male1]').attr('checked',true);
            }else{
                $('input:radio[id=female1]').attr('checked',true);
            }
            if(student_info.gender == 1 || student_info.gender=="Male"){
                $('input:radio[id=male2]').attr('checked',true);
                
            }else{
                $('input:radio[id=female2]').attr('checked',true);
                
            }
            $("input:radio[value='"+data.course_exam+"']").attr('checked',true);
            $("input:radio[value='"+data.course_part+"']").attr('checked',true);
            $("input:radio[value='"+data.school_name+"']").attr('checked',true);
            $("input:radio[value='"+data.attend_or_fail+"']").attr('checked',true);
            if(data.status!=2){
                $('.edu').hide();
                $('.renew_edu_div').show();
                loadEductaionHistory(student_info.id,'tbl_degree');
            }else{
                loadEductaionHistoryByArticle(data.student_info_id);
            }
            if (student_info.qualified_test != null) {
                $("#firm_education").hide();
                $("#qt_education").show();
                let lcl = JSON.parse(student_info.qualified_test.local_education);
                lcl.map(lcl_edu => $('#add_qt_education').append(`<p>${lcl_edu}</p>`));

                let certificate = JSON.parse(student_info.qualified_test.local_education_certificate);
                $.each(certificate, function (fileCount, fileName) {
                    $(".certificate").append(`<a href='${BASE_URL + fileName}' style='display:block; font-size:16px;text-decoration: none;' target='_blank'>View Attach File</a>`);

                })

            } else {
                if (data.offline_user == 1) {
                    $('.offline_user').show();
                    $('#firm_education').hide();
                    $('#certificate_row').hide();
                    
                } else {
                    $("#education").val(student_info.student_education_histroy.degree_name);

                    let certificate = JSON.parse(student_info.student_education_histroy.certificate);
                    $.each(certificate, function (fileCount, fileName) {
                        $(".certificate").append(`<a href='${BASE_URL + fileName}' style='display:block; font-size:16px;text-decoration: none;' target='_blank'>View Attach File</a>`);
                    })
                }
            }
            $("#update_address").val(student_info.address);
            $("#update_current_address").val(student_info.current_address);
            $("#update_phone_no").val(student_info.phone);
            //$(".office_order_attach").append(`<a href='${BASE_URL + data.office_order_attach}' style='display:block; font-size:16px;text-decoration: none;' target='_blank' align="center">View File</a>`);
            $("#hoffice_order_attach").val(data.office_order_attach);
            

            if (data.article_form_type == "c2_pass_renew" || data.article_form_type == "c12_renew") {
                if ((data.offline_user == 1 && data.article_form_type == "c2_pass_renew")) {
                    $('#exp_row').css('display', 'none');
                    $('#exp_attach_row').css('display', 'none');
                    
                    $('.praticle').hide();
                    $('.c2_pass_renew').show();
                    if(data.status==2){
                        $('input[name=update_papp_name]').val(data.request_papp);
                        if(data.mentor!=null){
                            $("input[name=update_mentor_name]").val(data?.mentor?.name_eng);
                        }
                        else{
                            $("input[name=update_mentor_name]").val(data.mentor_id);
                        }
                    }
                    
                    
                    $('#previous_papp_name_row').show();
                    $('#previous_papp_date_row').show();
                    $("input[name=update_previous_papp_name]").val(data.ex_papp);
                    $("input[name=update_previous_papp_start_date]").val(data.exp_start_date);
                    $("input[name=update_previous_papp_end_date]").val(data.exp_end_date);
                    $(".office_order_attach").append(`<a href='${BASE_URL + data.office_order_attach}' style='display:block; font-size:16px;text-decoration: none;' target='_blank' align="center">View File</a>`);
                }else{

                        $('#exp_row').css('display','none');
                        $('#exp_attach_row').css('display','none');
                        $("#gov_lab").text('၈။');
                        $("#current_lab").text('၉။');
                        $("#address_label").text('၁၀။');
                        $("#phone_lab").text('၁၁။');
                        $("#email_lab").text('၁၂။');
                        $("#papp_lab").text('၁၃။');
                        $("#previous_papp_lab").text('၁၄။');
                        $("#previous_lab").text('၁၅။');
                        $("#exam_pass_date_label").text('၁၆။');
                        if(data.status==2){
                            $('input[name=update_papp_name]').val(data.request_papp);
                            if(data.mentor!=null){
                                $("input[name=update_mentor_name]").val(data?.mentor?.name_eng);
                            }
                            else{
                                $("input[name=update_mentor_name]").val(data.mentor_id);
                            }
                        }
                        $("input[name=update_previous_papp_name]").val(data.ex_papp);
                        $("input[name=update_previous_papp_start_date]").val(data.exp_start_date);
                        $("input[name=update_previous_papp_end_date]").val(data.exp_end_date);
                }


            } else {
                if (data.apprentice_exp == 1) {
                    $('input:radio[name=update_experience][value=1]').attr('checked', true);
                    //$('input:radio[name=update_experience][value=0]').attr('disabled', true);
                    $('#exp_attach_row').css('display', 'block');
                    
                    // let apprentice_exp_file = JSON.parse(data.apprentice_exp_file);
                    // $.each(apprentice_exp_file, function (fileCount, fileName) {
                        
                    //     $(".exp_attachment").append(`<a href='${BASE_URL + "/storage/student_info/" + fileName}' style='display:block; font-size:16px;text-decoration: none;' target='_blank'>View File</a>`);
                        
                    // })
                    removeBracketed(data.apprentice_exp_file,"exp_attachment");
                    $('#hexp_attach').val(data.apprentice_exp_file);
                }
                else {
                    $('input:radio[name=update_experience][value=0]').attr('checked', true);
                    //$('input:radio[name=update_experience][value=1]').attr('disabled', true);
                    $('#exp_attach_row').css('display', 'none');
                }
                if (data.offline_user == 1 && data.article_form_type == "c2_pass_1yr") {

                    $('.praticle').hide();
                    $('.c2_pass_renew').show();
                    $('#office_order_row').show();
                    if(data.status==2){
                        $('input[name=update_papp_name]').val(data.request_papp);
                        if(data.mentor!=null){
                            $("input[name=update_mentor_name]").val(data?.mentor?.name_eng);
                        }
                        else{
                            $("input[name=update_mentor_name]").val(data.mentor_id);
                        }
                    }
                    
                    $("#update_previous_papp_name").val(data.ex_papp);
                    $("#update_previous_papp_start_date").val(data.exp_start_date);
                    $("#update_previous_papp_end_date").val(data.exp_end_date);
                    $(".office_order_attach").append(`<a href='${BASE_URL + data.office_order_attach}' style='display:block; font-size:16px;text-decoration: none;' target='_blank' align="center">View File</a>`);
                    $("#hoffice_order_attach").val(data.office_order_attach);
                } else {
                    
                    if(data.status==2){
                        
                        $('input[name=update_papp_name]').val(data.request_papp);
                        if(data.mentor!=null){
                            $("input[name=update_mentor_name]").val(data?.mentor?.name_eng);
                        }
                        else{
                            $("input[name=update_mentor_name]").val(data.mentor_id);
                        }
                    }
                    if(data.article_form_type=="c2_pass_qt_pass_3yr"){
                        $(".office_order_attach").append(`<a href='${BASE_URL + data.office_order_attach}' style='display:block; font-size:16px;text-decoration: none;' target='_blank' align="center">View File</a>`);
                        $("#hoffice_order_attach").val(data.office_order_attach);
                    }
                }

            }

            if (data.gov_staff == 1) {
                $('input:radio[id=current_job_yes]').attr('checked', true);
                $('#update_current_job_row').css('display', 'block');
                $("#update_position").val(data.gov_position);
                $("#update_job_started_date").val(data.gov_joining_date);
            }
            else {
                $('input:radio[id=current_job_no]').attr('checked', true);
                $('#update_current_job_row').css('display', 'none');
            }

            document.getElementById('update_previewImg').src = BASE_URL + student_info.image;
            if (data.request_papp_attach != "") {
                $('.req-papp_attach').show();
                $(".request_papp_attach").append(`<a href='${BASE_URL + data.request_papp_attach}' style='display:block; font-size:16px;text-decoration: none;' target='_blank'  align="center">View File</a>`);
            } else {
                $('.req-papp_attach').hide();
            }


            

            if (data.contract_end_date != null) {
                var end_date = new Date(data.contract_end_date);
                var today = new Date();

                var end_time = end_date.getTime();
                var today_time = today.getTime();

                if (end_time <= today_time) {
                    console.log(data.yes_done_attach);
                    if (data.yes_done_attach == 0) {
                        document.getElementById("check_end_date").style.display = "block";
                    }
                    $("#article_id").val(data.id);
                    $("#article_form_type").val(data.article_form_type);
                    $("#contract_end_date").val(data.contract_end_date);
                    
                }
            }

            
            if (data.mentor_attach_file != null) {
                $("#attach_file_row").show();
                let mentor_attach_file = JSON.parse(data.mentor_attach_file);
                $.each(mentor_attach_file, function (fileCount, fileName) {
                    $(".mentor_attach_file").append(`<a href='${BASE_URL + fileName}' style='display:block; font-size:16px;text-decoration: none;' target='_blank'>View File</a>`);

                })
            }

            if (data.done_form_attach != null) {
                $("#done_form_row").show();
                $(".done_form_attach").append(`<a href='${BASE_URL + data.done_form_attach}' style='display:block; font-size:16px;text-decoration: none;' target='_blank'  align="center">View File</a>`);
                $("#reject_done_attach").show();
                $("#article_id").val(data.id);
                if (data.done_status == 0 || data.done_status == 2) {
                    document.getElementById("done_form_approve_reject_btn").style.display = "block";
                } else {
                    document.getElementById("done_form_approve_reject_btn").style.display = "none";
                }

            }

        }
    });
}
function loadEductaionHistoryByArticle(id) {
    $.ajax({
        type: 'POST',
        url: BACKEND_URL + "/getEducationHistory",
        data: 'student_info_id=' + id,
        success: function (result) {
            $.each(result.data, function (index, value) {
                var tr = "<tr>";
                tr += `<td class="less-font-weight text-center"><input type="hidden" name="old_degrees_id[]" class="form-control" value=`+value.id+`>${ index += 1 }</td>`;
                tr += '<td><input type="text" name="old_degrees[]" class="form-control" value="'+value.degree_name+'" /></td>';
                tr += "<td><input type='hidden' name='old_degrees_certificates_h[]' class='form-control' value="+value.certificate+"><input type='file' name='old_degrees_certificates[]' class='form-control'> <a href="+BASE_URL + value.certificate+" style='margin-top:0.5px;' target='_blank' class='btn btn-success btn-md'>View File</a></td>";
                tr +=`<td class="text-center"><button type="button" disabled class="delete btn btn-sm btn-danger m-2"><li class="fa fa-times"></li></button></td>`;
                tr += "</tr>";
                $(".tbl_degree_body").append(tr);
            });

            //createDataTableWithAsc('#tbl_degree');
        }
    });
}
function updateArticle(){
    let result = window.location.href;
    let url = new URL(result);
    var id = url.searchParams.get("id");
    var send_data = new FormData($( "#article_reject_form" )[0]);
    if($('#offline_user').val()){
        send_data.append('offline_user',$('#offline_user').val());
    }
    if($("input[name=update_nrc_front]")[0].files[0]){
        send_data.append('update_nrc_front', $("input[name=update_nrc_front]")[0].files[0]);
    }else{
        send_data.append('update_nrc_front', $('#hnrc_front').val());
    }
    if($("input[name=update_nrc_back]")[0].files[0]){
        send_data.append('update_nrc_back', $("input[name=update_nrc_back]")[0].files[0]);
    }else{
        send_data.append('update_nrc_back', $('#hnrc_back').val());
    }
    if($("input[name=update_image]")[0].files[0]){
        send_data.append('update_image', $("input[name=update_image]")[0].files[0]);
    }else{
        send_data.append('update_image', $('#himage').val());
    }
    send_data.append('student_info_id', $("input[id=student_info_id]").val());
    send_data.append('office_order_attach', $('#hoffice_order_attach').val());
    send_data.append('exp_attach', $('#hexp_attach').val());
    show_loader();
    $.ajax({
        url: BACKEND_URL+'/article_firm_register/'+id,
        type: 'post',
        data:send_data,
        contentType: false,
        processData: false,
        success: function (data) {
            EasyLoading.hide();
            successMessage(data.message);
            location.href=FRONTEND_URL+'/';

        },
        error: function (result) {
        },
    });
}
function removeBracketed(file,divname){
    var new_file=file.replace(/[\'"[\]']+/g, '');
    var split_new_file=new_file.split(',');
    for(var i=0;i<split_new_file.length;i++){
        var file=`<a href='${BASE_URL+'/storage/student_info/'+split_new_file[i]}' style='margin-top:0.5px;' target='_blank' class='btn btn-success btn-md'>View File</a>`;
        $("."+divname).append(file);
      }
}
function loadResignArticle() {
    $('.article').hide();
    $('.reject_article').show();
    let result = window.location.href;
    let url = new URL(result);
    
    var id = url.searchParams.get("id");
    $.ajax({
        url: BACKEND_URL + "/resign_article_show/" + id,
        type: 'get',
        data: "",
        success: function (data) {
            var student_info = data.student_info;
            var qualified_test = student_info.qualified_test == null ? null : student_info.qualified_test;

            var student_reg = student_info.student_register
            var lastest_row = student_reg.length - 1;

            $('input[name=update_name_mm]').val(student_info.name_mm);
            $('input[name=update_name_eng]').val(student_info.name_eng);
            $("#update_personal_no").val(student_info.cpersonal_no);
            $("#update_nrc_state_region").val(student_info.nrc_state_region);
            $("#update_nrc_township").val(student_info.nrc_township);
            $("#update_nrc_citizen").val(student_info.nrc_citizen);
            $("#update_nrc_number").val(student_info.nrc_number);
            $("#update_previewNRCFrontImg").attr("src",BASE_URL+student_info.nrc_front);
            $("#update_previewNRCBackImg").attr("src",BASE_URL+student_info.nrc_back);
            $("#hnrc_front").val(student_info.nrc_front);
            $("#hnrc_back").val(student_info.nrc_back);
            $("#himage").val(student_info.image);
            $("#update_race").val(student_info.race);
            $("#update_religion").val(student_info.religion);
            $("#update_date_of_birth").val(student_info.date_of_birth);
            $("#offline_user").val(data.offline_user);

            if (qualified_test != null) {
                $("#firm_education").hide();
                $("#qt_education").show();
                let lcl = JSON.parse(qualified_test.local_education);
                lcl.map(lcl_edu => $('#add_qt_education').append(`< p > ${lcl_edu}</p > `));

                let certificate = JSON.parse(qualified_test.local_education_certificate);
                $.each(certificate, function (fileCount, fileName) {
                    $(".certificate").append(`<a href = '${BASE_URL + fileName}' style = 'display:block; font-size:16px;text-decoration: none;' target = '_blank' > View Attach File</a > `);

                })
            } else {
                $("#education").val(student_info.student_education_histroy.degree_name);
                // let certificate = JSON.parse(student_info.student_education_histroy.certificate);
                // $.each(certificate,function(fileCount,fileName){

                //      $(".certificate").append(`<a href='${PDF_URL+fileName}' style='display:block; font-size:16px;text-decoration: none;' target='_blank'>View Attach File</a>`);

                // })
                if (student_info.student_education_histroy) {
                    $('.degree').show();
                    loadEductaionHistory(student_info.id,'tbl_degree');
                } else {
                    $('#firm_education').hide();
                    let certificate = JSON.parse(student_info.student_education_histroy.certificate);
                    $.each(certificate, function (fileCount, fileName) {

                        $(".stu_certificate").append(`<a href='${BASE_URL + fileName}' style='display:block; font-size:16px;text-decoration: none;' target='_blank'>View Attach File</a>`);

                    })
                }
            }
            $('#student_info_id').val(student_info.id);
            $("#update_address").val(student_info.address);
            $("#update_phone_no").val(student_info.phone);
            $("#update_m_email").val(data.m_email);

            $("#update_resign_date").val(data.resign_date);
            $("#update_resign_reason").val(data.resign_reason);
            $("#update_recent_org").val(data.recent_org);

            document.getElementById('update_previewImg').src = BASE_URL + student_info.image;
            
            if (data.resign_approve_file == "") {
                $(".resign_approve_file").append(``);
            } else {
                $(".resign_approve_file").append(`<a href = '${BASE_URL + data.resign_approve_file}' target = '_blank' align = "center" > View File</a > `);
                $('#hresign_approve_attach').val(data.resign_approve_file);
            }

        }
    });
}
function updateResignArticle(){
    let result = window.location.href;
    let url = new URL(result);
    var id = url.searchParams.get("id");
    var send_data = new FormData($( "#article_reject_form" )[0]);
    
    send_data.append('update_nrc_front', $('#hnrc_front').val());
    send_data.append('update_nrc_back', $('#hnrc_back').val());
    send_data.append('update_image', $('#himage').val());
    send_data.append('update_resign_approve_attach', $('#hresign_approve_attach').val());
    send_data.append('student_info_id', $("input[id=student_info_id]").val());
    
    show_loader();
    $.ajax({
        url: BACKEND_URL+'/updateResignArticle/'+id,
        type: 'post',
        data:send_data,
        contentType: false,
        processData: false,
        success: function (data) {
            EasyLoading.hide();
            successMessage(data.message);
            location.href=FRONTEND_URL+'/';

        },
        error: function (result) {
        },
    });
}
function updateArticleByResign(){
    var send_data = new FormData($( "#article_reject_form" )[0]);
    if($('#offline_user').val()){
        send_data.append('offline_user',$('#offline_user').val());
      }
    if($("input[name=update_nrc_front]")[0].files[0]){
        send_data.append('nrc_front', $("input[name=update_nrc_front]")[0].files[0]);
    }else{
        send_data.append('nrc_front', $('#hnrc_front').val());
    }
    if($("input[name=update_nrc_back]")[0].files[0]){
        send_data.append('nrc_back', $("input[name=update_nrc_back]")[0].files[0]);
    }else{
        send_data.append('nrc_back', $('#hnrc_back').val());
    }
    if($("input[name=update_image]")[0].files[0]){
        send_data.append('image', $("input[name=update_image]")[0].files[0]);
    }else{
        send_data.append('image', $('#himage').val());
    }
    send_data.append('student_info_id', $("input[id=student_info_id]").val());
    //send_data.append('offline_user',$('#offline_user').val());
    
    send_data.append('gov_position',$('input[name=update_gov_position]').val());
    send_data.append('gov_joining_date',$('input[name=update_gov_joining_date]').val());
    send_data.append('current_address',$('input[name=update_current_address]').val());
    send_data.append('address',$('input[name=update_address]').val());
    send_data.append('phone',$('#update_phone_no').val());
    send_data.append('papp_name',$('input[name=update_papp_name]').val());
    send_data.append('mentor_id',$('input[name=update_mentor_name]').val());
    send_data.append('article_form_type',$('input[name=article_form_type]').val());
    
    send_data.append('pass_date',$('input[name=pass_date]').val());
    send_data.append('pass_no',$('input[name=update_pass_no]').val());
    send_data.append('previous_papp_name',$('input[name=update_previous_papp_name]').val());
    send_data.append('previous_papp_start_date',$('input[name=update_previous_papp_start_date]').val());
    send_data.append('previous_papp_end_date',$('input[name=update_previous_papp_end_date]').val());
    send_data.append('exp_year',$('input[name=update_exp_year]').val());
    send_data.append('exp_month',$('input[name=update_exp_month]').val());
    send_data.append('exp_days',$('input[name=update_exp_days]').val());
    
    show_loader();
    $.ajax({
        type: "POST",
        data: send_data,
        url: BACKEND_URL + "/article_firm_register",
        contentType: false,
        processData: false,
        success: function (data) {

            EasyLoading.hide();
            successMessage(data.message);
            location.href=FRONTEND_URL+'/';

        },
        error: function (result) {


        },
    });
}
