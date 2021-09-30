function register_qt(){
    var send_data = new FormData();

    var image = $("input[name=profile_photo]")[0].files[0];
    var nrc_front = $("input[name=nrc_front]")[0].files[0];
    var nrc_back = $("input[name=nrc_back]")[0].files[0];
    send_data.append('email', $("input[name=email]").val());
    send_data.append('password', $("input[name=password]").val());
    send_data.append('image', image);
    send_data.append('name_mm', $("input[name=name_mm]").val());
    send_data.append('name_eng', $("input[name=name_eng]").val());
    send_data.append('nrc_state_region', $("#nrc_state_region").val());
    send_data.append('nrc_township', $("#nrc_township").val());
    send_data.append('nrc_citizen', $("#nrc_citizen").val());
    send_data.append('nrc_number', $("input[name=nrc_number]").val());
    send_data.append('nrc_front', nrc_front);
    send_data.append('nrc_back', nrc_back);
    send_data.append('father_name_mm', $("input[name=father_name_mm]").val());
    send_data.append('father_name_eng', $("input[name=father_name_eng]").val());
    send_data.append('race', $("input[name=race]").val());
    send_data.append('religion', $("input[name=religion]").val());
    send_data.append('date_of_birth', $("input[name=date_of_birth]").val());
    send_data.append('phone', $("input[name=phone]").val());
    send_data.append('address', $("input[name=address]").val());
    send_data.append('current_address', $("input[name=current_address]").val());
    send_data.append('current_job', $("input[name=current_job]").val());
    send_data.append('office_address', $("input[name=office_address]").val());
    
    $('input[name="edu_status_local[]"]').map(function(){
        send_data.append("edu_status_local[]",$(this).val());
    });
    $('input[name="certificate[]"]').map(function () {
        for (var i = 0; i < $(this).get(0).files.length; ++i) {
            send_data.append('certificate[]', $(this).get(0).files[i]);
        }
    });
    send_data.append('edu_status_foreign', $("input[name='edu_status_foreign']:checked").val());
    send_data.append('organization_name', $("input[name=organization_name]").val());
    send_data.append('organization_address', $("input[name=organization_address]").val());
    send_data.append('organization_email', $("input[name=organization_email]").val());
    send_data.append('exam_date', $("input[name=exam_date]").val());
    send_data.append('exam_register_no', $("input[name=exam_register_no]").val());
    send_data.append('approve_reject_status', 0);
    send_data.append('submit_confirm_policy', $("input[name=submit_confirm_ss]").val());
    show_loader();
    $.ajax({
        url   : BACKEND_URL + '/qualifiedtest',
        type  : 'post',
        data  : send_data,
        contentType: false,
        processData: false,
        success: function (data) {
            console.log("data",data);
            EasyLoading.hide();
            if(data.status == 'emailexit'){
                errorMessage(data.message);
                e.preventdefault();
            }
            else if(data.status == 'nrcexit'){
                errorMessage(data.message);
                e.preventdefault();
            }
            else{
                successMessage(data.message);
                setTimeout(() => {
                    location.href = FRONTEND_URL + "/";
                }, 1500);
            }
        },
    })
}
var count = 1;
function AddQTEdu() {
    $("#edu").append(
        '<div class="row mb-3" id="edu' + count + '">' +
        '<div class="col-md-11">' +
            `<div class="row">
                <div class="col-md-6">
                    <input type="text" name="edu_status_local[]" id="edu_status_local${count}" class="form-control">
                </div>
                <div class="col-md-6">
                    <input type="file" class="form-control" id="certificate${count}" name="certificate[]" autocomplete="off">
                </div>
            </div>`+
        '</div>' +
        '<div class="col-md-1 text-center"  id="edu' + count + '_remove">' +
        '<button class="btn btn-danger" id="myLink" style="padding-left:5px;"  onclick="remove(edu' + count + ')">' +
        '<i class="fa fa-trash "></i>' +
        '</button>' +
        '</div>' +
        '</div>');
    count++;
}