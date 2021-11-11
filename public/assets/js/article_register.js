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
                $("#mentor_name").val(element.name_mm);
                $("#mentor_id").val(element.id);
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
