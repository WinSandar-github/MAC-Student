$().ready(function (){ 
    $("#cpaff_reconnect_form").validate({
        rules:{
            profile_photo : "required",
            email : "required",
            password : "required",
            confirm_password : {
                required : true,
                equalTo : "#password"
            },
            
            name_mm : "required",
            name_eng : "required",
            nrc_state_region : "required",
            nrc_township : "required",
            nrc_citizen : "required",
            nrc_number : {
                required : true,
            },
            father_name_mm : "required",
            father_name_eng : "required",
            gender:"required",
            cpa:{
                required : "#cpa_edu:checked"
            },
            ra:{
                required : "#ra_edu:checked"
            },
            degree_name:{
                required : "#education:checked"
            },
            degree_pass_year:{
                required : "#education:checked"
            },
            degree_file:{
                required : "#education:checked"
            },
            education:"required",
            cpa_batch_no : "required",
            address : "required",
            phone : "required",
            contact_mail : "required",
            cpaff_pass_date : "required",
            cpaff_renew_date : "required",
            cpaff_reg_no : "required",
            cpaff_reg_year : "required",
            cpa_certificate : "required",
            mpa_mem_card : "required",
            mpa_mem_card_back : "required",
            nrc_front : "required",
            nrc_back : "required",
            cpd_record : "required",
            total_hours : "required",
            last_paid_year : "required",
            resign : "required",
        },
        messages:{
            profile_photo : "Upload photo",
            email : "Please enter your email",
            password : "Please provide your password",
            confirm_password : {
                required : "Please provide your password",
                equalTo : "Please enter the same password as above"
            },
            name_mm : "Please enter your name in Myanmar",
            name_eng : "Please enter your name in English",
            nrc_state_region : "Please select one",
            
            nrc_township : "Please select one",
            nrc_citizen : "Please select one",
            nrc_number : {
                required : "Please enter your nrc number",
            },
            nrc_front : "Please upload nrc photo (front)",
            nrc_back : "Please upload nrc photo (back)",
            father_name_mm : "Please enter your father name in Myanmar",
            father_name_eng : "Please enter your father name in English",
            gender:"Please select one",
            education:"Please select one",
            cpa:"Please upload CPA file",
            ra:"Please upload RA file",
            degree_name:"Please enter this field",
            degree_pass_year:"Please enter this field",
            degree_file:"Please upload degree file",
            
            cpa_batch_no : "Please enter CPA batch number",
            address : "Please enter your address",
            phone : "Please enter your phone number",
            contact_mail : "Please enter your contact mail",
            cpaff_pass_date : "Please enter your CPAFF passed date",
            cpaff_renew_date : "Please enter your renewal date",
            cpaff_reg_no : "Please Enter CPA(Full-Fledged) Registration No.",
            cpaff_reg_year : "Please Enter CPA(Full-Fledged) Registration No.",
            cpa_certificate : "Please upload CPA(Full-Fledged) certificate",
            mpa_mem_card : "Please upload MPA member card(front)",
            mpa_mem_card_back : "Please upload MPA member card(back)",
            cpd_record : "Please upload CPD record",
            total_hours : "Please enter total ours",
            last_paid_year : "Please select year",
            resign : "Please select one",

        },
        submitHandler: function(form) {
            var send_data = new FormData();
            send_data.append('email',$("input[name='email']").val());
            send_data.append('nrc_state_region',$("#nrc_state_region").val());
            send_data.append('nrc_township',$("#nrc_township").val());
            send_data.append('nrc_citizen',$("#nrc_citizen").val());
            send_data.append('nrc_number',$("#nrc_number").val());
            $.ajax({
                url: BACKEND_URL+"/unique_email",
                type: 'post',
                data:send_data,
                contentType: false,
                processData: false,
                success: function(result){
                    if(result.email!=null){
                        Swal.fire("Email has been used, please check again!");
                    }
                    else if(result.nrc!=null){
                        Swal.fire("NRC has been used, please check again!");
                    }
                    else if(result.email==null && result.nrc==null){
                        $('#submitModal').modal('show');
                        send_email();
                    }
                }
            });
            // $('#cpaffModal').modal('show');
            // send_email();
        }
        
    });
});

function check_email_cpaff_other()
{
    var text = localStorage.getItem('verify_code');
    var obj = JSON.parse(text);
    var verify_code = obj.data.verify_code;
    var code = $("input[name=verify_code]").val();
    var self_confession_accept = document.getElementById("accept");
    var self_confession_not_accept = document.getElementById("not-accept");
    if(self_confession_accept.checked == true || self_confession_not_accept.checked == true){
        if(verify_code != code){
            errorMessage("Your code is not correct.Please check your email inbox again!");
        }else{
            createCpaffReconnectRegister();
            $('#cpaffModal').modal('hide');
        }
    }
    else{
        $('#valid_self_confession').text("Please choose Yes Or No");
        $('#valid_self_confession').css('display','block');
        errorMessage("Please choose Yes or No in Previous Page");
    }
}

function createCpaffReconnectRegister(){
    // var student = JSON.parse(localStorage.getItem('studentinfo'));
    var profile_photo   =   $("input[name=profile_photo]")[0].files[0];
    var cpa             =   $("input[name=cpa]")[0].files[0];
    var ra              =   $("input[name=ra]")[0].files[0];
    var foreign_degree  =   $('input[name="foreign_degree[]"]');

    var cpa_certificate =   $("input[name=cpa_certificate]")[0].files[0];
    var mpa_mem_card    =   $("input[name=mpa_mem_card]")[0].files[0];
    var mpa_mem_card_back    =   $("input[name=mpa_mem_card_back]")[0].files[0];
    var nrc_front       =   $("input[name=nrc_front]")[0].files[0];
    var nrc_back        =   $("input[name=nrc_back]")[0].files[0];
    var cpd_record      =   $("input[name=cpd_record]")[0].files[0];
    var renew_file      =   $("input[name=renew_file]")[0].files[0];

    var cpa_edu         = document.getElementById("cpa_edu");
    var ra_edu          = document.getElementById("ra_edu");
    var education       = document.getElementById("education");

    var send_data = new FormData();
    // send_data.append('student_info_id', student.id);
    send_data.append('profile_photo', profile_photo);
    send_data.append('name_mm', $("input[name=name_mm]").val());
    send_data.append('name_eng', $("input[name=name_eng]").val());
    var nrc_state_region = $("#nrc_state_region").val();
    var nrc_township = $("#nrc_township").val();
    var nrc_citizen = $("#nrc_citizen").val();
    send_data.append('nrc_state_region', nrc_state_region);
    send_data.append('nrc_township', nrc_township);
    send_data.append('nrc_citizen', nrc_citizen);
    send_data.append('nrc_number', $("input[name=nrc_number]").val());
    send_data.append('father_name_mm', $("input[name=father_name_mm]").val());
    send_data.append('father_name_eng', $("input[name=father_name_eng]").val());
    send_data.append('gender', $("input[type='radio'][name='gender']:checked").val());
    
    if(cpa_edu.checked==true){
        send_data.append('cpa', cpa);
    }
    else if(ra_edu.checked==true){
        send_data.append('ra', ra);
    }else{
        $('input[name="degree_name[]"]').map(function(){
            send_data.append('degree_name[]',$(this).val());
        });
        $('input[name="degree_pass_year[]"]').map(function(){
            send_data.append('degree_pass_year[]',$(this).val());
        });
        $('input[name="degree_file[]"]').map(function(){
            for (var i = 0; i < $(this).get(0).files.length; ++i) {
                send_data.append('degree_file[]',$(this).get(0).files[i]);
            }
        });
    }  

    foreign_degree.map(function(){
        for (var i = 0; i < $(this).get(0).files.length; ++i) {
          send_data.append('foreign_degree[]',$(this).get(0).files[i]);
        }

    });

    send_data.append('cpa_batch_no', $("input[name=cpa_batch_no]").val());
    send_data.append('cpaff_reg_no', $("input[name=cpaff_reg_no]").val());
    send_data.append('cpaff_reg_year', $("input[name=cpaff_reg_year]").val());
    send_data.append('address', $("input[name=address]").val());
    send_data.append('phone', $("input[name=phone]").val());
    send_data.append('contact_mail', $("input[name=contact_mail]").val());
    send_data.append('cpaff_pass_date', $("input[name=cpaff_pass_date]").val());
    send_data.append('cpaff_renew_date', $("input[name=cpaff_renew_date]").val());
    send_data.append('papp_reg_year', $("input[name=papp_reg_year]").val());
    send_data.append('papp_reg_no', $("input[name=papp_reg_no]").val());
    send_data.append('renew_file', renew_file);
    send_data.append('fine_person', $("input[name=fine_person]").val());
    send_data.append('cpa_certificate', cpa_certificate);
    send_data.append('mpa_mem_card', mpa_mem_card);
    send_data.append('mpa_mem_card_back', mpa_mem_card_back);
    send_data.append('nrc_front', nrc_front);
    send_data.append('nrc_back', nrc_back);
    send_data.append('cpd_record', cpd_record);
    send_data.append('total_hours', $("input[name=total_hours]").val());
    send_data.append('last_paid_year', $("input[name=last_paid_year]").val());//new field
    send_data.append('resign', $("input[type='radio'][name='resign']:checked").val());//new field
    send_data.append('resign_date', $("input[name=resign_date]").val());//new field
    // send_data.append('end_date', $("input[name=end_date]").val());//new field
    send_data.append('self_confession',$("input[type='radio'][name='self_confession']:checked").val());
    send_data.append('form_type', 2);
    send_data.append('is_renew', 2);
    send_data.append('type', 2);
    // save to student_info
    send_data.append('email', $("input[name=email]").val());
    send_data.append('password', $("input[name=password]").val());
    
        $.ajax({
            url: BACKEND_URL+"/cpa_ff",
            type: 'post',
            data:send_data,
            contentType: false,
            processData: false,
            success: function(result){
                console.log("success");
                successMessage("You have successfully registerd!");
                // location.reload();
                location.href = FRONTEND_URL+"/";
            },
            error:function (message){
            }
        });  
    
}

function updateRejectCpaffExisting(){
    var student = JSON.parse(localStorage.getItem('studentinfo'));
    var profile_photo   =   $("input[name=profile_photo]")[0].files[0];
    var cpa             =   $("input[name=cpa]")[0].files[0];
    var ra              =   $("input[name=ra]")[0].files[0];
    var foreign_degree  =   $('input[name="foreign_degree[]"]');

    var cpa_certificate =   $("input[name=cpa_certificate]")[0].files[0];
    var mpa_mem_card    =   $("input[name=mpa_mem_card]")[0].files[0];
    var mpa_mem_card_back    =   $("input[name=mpa_mem_card_back]")[0].files[0];
    var nrc_front       =   $("input[name=nrc_front]")[0].files[0];
    var nrc_back        =   $("input[name=nrc_back]")[0].files[0];
    var cpd_record      =   $("input[name=cpd_record]")[0].files[0];
    var renew_file      =   $("input[name=renew_file]")[0].files[0];

    var cpa_edu         = document.getElementById("cpa_edu");
    var ra_edu          = document.getElementById("ra_edu");
    var education       = document.getElementById("education");

    var send_data = new FormData();
    send_data.append('student_info_id', student.id);
    send_data.append('profile_photo', profile_photo);
    send_data.append('name_mm', $("input[name=name_mm]").val());
    send_data.append('name_eng', $("input[name=name_eng]").val());
    var nrc_state_region = $("#nrc_state_region").val();
    var nrc_township = $("#nrc_township").val();
    var nrc_citizen = $("#nrc_citizen").val();
    send_data.append('nrc_state_region', nrc_state_region);
    send_data.append('nrc_township', nrc_township);
    send_data.append('nrc_citizen', nrc_citizen);
    send_data.append('nrc_number', $("input[name=nrc_number]").val());
    send_data.append('father_name_mm', $("input[name=father_name_mm]").val());
    send_data.append('father_name_eng', $("input[name=father_name_eng]").val());
    send_data.append('gender', $("input[type='radio'][name='gender']:checked").val());
    
    if(cpa_edu.checked==true){
        send_data.append('cpa', cpa);
    }
    else if(ra_edu.checked==true){
        send_data.append('ra', ra);
    }else{
        $('input[name="degree_name[]"]').map(function(){
            send_data.append('degree_name[]',$(this).val());
        });
        $('input[name="degree_pass_year[]"]').map(function(){
            send_data.append('degree_pass_year[]',$(this).val());
        });
        $('input[name="degree_file[]"]').map(function(){
            for (var i = 0; i < $(this).get(0).files.length; ++i) {
                send_data.append('degree_file[]',$(this).get(0).files[i]);
            }
        });
    }  

    foreign_degree.map(function(){
        for (var i = 0; i < $(this).get(0).files.length; ++i) {
          send_data.append('foreign_degree[]',$(this).get(0).files[i]);
        }

    });

    send_data.append('cpa_batch_no', $("input[name=cpa_batch_no]").val());
    send_data.append('cpaff_reg_no', $("input[name=cpaff_reg_no]").val());
    send_data.append('cpaff_reg_year', $("input[name=cpaff_reg_year]").val());
    send_data.append('address', $("input[name=address]").val());
    send_data.append('phone', $("input[name=phone]").val());
    send_data.append('contact_mail', $("input[name=contact_mail]").val());
    send_data.append('cpaff_pass_date', $("input[name=cpaff_pass_date]").val());
    send_data.append('cpaff_renew_date', $("input[name=cpaff_renew_date]").val());
    send_data.append('papp_reg_year', $("input[name=papp_reg_year]").val());
    send_data.append('papp_reg_no', $("input[name=papp_reg_no]").val());
    send_data.append('renew_file', renew_file);
    send_data.append('fine_person', $("input[name=fine_person]").val());
    send_data.append('cpa_certificate', cpa_certificate);
    send_data.append('mpa_mem_card', mpa_mem_card);
    send_data.append('mpa_mem_card_back', mpa_mem_card_back);
    send_data.append('nrc_front', nrc_front);
    send_data.append('nrc_back', nrc_back);
    send_data.append('cpd_record', cpd_record);
    send_data.append('total_hours', $("input[name=total_hours]").val());
    send_data.append('last_paid_year', $("input[name=last_paid_year]").val());//new field
    send_data.append('resign', $("input[type='radio'][name='resign']:checked").val());//new field
    send_data.append('resign_date', $("input[name=resign_date]").val());//new field
    // send_data.append('end_date', $("input[name=end_date]").val());//new field
    send_data.append('self_confession',$("input[type='radio'][name='self_confession']:checked").val());
    send_data.append('form_type', 2);
    send_data.append('is_renew', 2);
    send_data.append('type', 2);
    // save to student_info
    send_data.append('email', $("input[name=email]").val());
    send_data.append('password', $("input[name=password]").val());
    var id=$('#cpaff_id').val();
    send_data.append('cpaff_id',id);   
    $.ajax({
        url: BACKEND_URL+"/update_cpaff_existing",
        type: 'post',
        data:send_data,
        contentType: false,
        processData: false,
        success: function(result){
            console.log("success");
            successMessage("You have successfully updated!");
                // location.reload();
                location.href = FRONTEND_URL+'/';
            },
        error:function (message){
            }
    });
    
    
}

// function RenewOfflineCPAFF() {
//     var student = JSON.parse(localStorage.getItem('studentinfo'));

//     var profile_photo = $("input[name=profile_photo]")[0].files[0];
//     var cpa = $("input[name=cpa]")[0].files[0];
//     var ra = $("input[name=ra]")[0].files[0];
//     show_loader();
//     var send_data = new FormData($("#cpaff_renew_form_submit")[0]);
//     send_data.append('student_info_id', student.id);

//     send_data.append('name_mm', $("input[name=name_mm]").val());
//     send_data.append('name_eng', $("input[name=name_eng]").val());
//     var nrc_state_region = $("#nrc_state_region").val();
//     var nrc_township = $("#nrc_township").val();
//     var nrc_citizen = $("#nrc_citizen").val();
//     send_data.append('nrc_state_region', nrc_state_region);
//     send_data.append('nrc_township', nrc_township);
//     send_data.append('nrc_citizen', nrc_citizen);
//     send_data.append('nrc_number', $("input[name=nrc_number]").val());
//     send_data.append('father_name_mm', $("input[name=father_name_mm]").val());
//     send_data.append('father_name_eng', $("input[name=father_name_eng]").val());
//     send_data.append('gender', $("input[type='radio'][name='gender']:checked").val());

//     if ($("#cpa_edu").prop("checked")) {
//         send_data.append('cpa', cpa);
//     }
//     else if ($("#ra_edu").prop("checked")) {
//         send_data.append('ra', ra);
//     }
//     else if ($("#education").prop("checked")) {
//         $('input[name="degree_name[]"]').map(function () {
//             send_data.append('degree_name[]', $(this).val());
//         });
//         $('input[name="degree_pass_year[]"]').map(function () {
//             send_data.append('degree_pass_year[]', $(this).val());
//         });
//         $('input[name="degree_file[]"]').map(function () {
//             for (var i = 0; i < $(this).get(0).files.length; ++i) {
//                 send_data.append('degree_file[]', $(this).get(0).files[i]);
//             }
//         });
//     }
//     send_data.append('cpa_batch_no', $("input[name=cpa_batch_no]").val());
//     send_data.append('cpaff_reg_no', $("input[name=cpaff_reg_no]").val());
//     send_data.append('address', $("input[name=address]").val());
//     send_data.append('phone', $("input[name=phone]").val());
//     send_data.append('contact_mail', $("input[name=contact_mail]").val());
//     send_data.append('cpaff_pass_date', $("input[name=cpaff_pass_date]").val());
//     send_data.append('cpaff_renew_date', $("input[name=cpaff_renew_date]").val());
//     send_data.append('papp_reg_no', $("input[name=papp_reg_no]").val());
//     send_data.append('papp_reg_year', $("input[name=papp_reg_year]").val());
//     send_data.append('renew_file', $("input[name=renew_file]")[0].files[0]);
//     send_data.append('fine_person', $("input[name=fine_person]").val());
//     send_data.append('cpa_certificate', $("input[name=cpa_certificate]")[0].files[0]);
//     send_data.append('mpa_mem_card', $("input[name=mpa_mem_card]")[0].files[0]);
//     send_data.append('mpa_mem_card_back', $("input[name=mpa_mem_card_back]")[0].files[0]);
//     if ($("input[name=nrc_front]")[0].files[0]) {
//         send_data.append('nrc_front', $("input[name=nrc_front]")[0].files[0]);
//     } else {
//         send_data.append('nrc_front', $('#hidden_nrc_front').val());
//     }
//     if ($("input[name=nrc_back]")[0].files[0]) {
//         send_data.append('nrc_back', $("input[name=nrc_back]")[0].files[0]);
//     } else {
//         send_data.append('nrc_back', $('#hidden_nrc_back').val());
//     }
//     send_data.append('cpd_record', $("input[name=cpd_record]")[0].files[0]);
//     send_data.append('total_hours', $("input[name=total_hours]").val());
//     send_data.append('last_paid_year', $("input[name=last_paid_year]").val());
//     send_data.append('resign_date', $("input[name=resign_date]").val());
    
//     send_data.append('is_renew', 1);
//     send_data.append('self_confession_renew',$("input[type='radio'][name='self_confession_renew']:checked").val());
//     send_data.append('type',1);
//     var self_confession_accept = document.getElementById("accept_cpaffRenew");
//     var self_confession_not_accept = document.getElementById("not-accept_cpaffRenew");
//     if(self_confession_accept.checked == true || self_confession_not_accept.checked == true){
//          $.ajax({
//             url: BACKEND_URL + "/renew_cpaff",
//             type: 'post',
//             data: send_data,
//             contentType: false,
//             processData: false,
//             success: function (result) {
//                 EasyLoading.hide();
//                 console.log(result);
//                 successMessage(result.message);
//                 // location.reload();
//                 location.href = FRONTEND_URL + "/";
//                 document.getElementById('approved').style.display = 'none';
//                 document.getElementById('rejected').style.display = 'none';
//                 document.getElementById('pending').style.display = 'none';
//                 document.getElementById('cpaff_form').style.display = 'none';
//                 document.getElementById('cpaff_renew_form').style.display = 'none';
//                 document.getElementById('expiry_card').style.display = 'none';
//             },
//             error: function (message) {
//                 EasyLoading.hide();
//             }
//         });
//     }
//     else{
//         $('#valid_self_confession').text("Please choose Yes Or No");
//         $('#valid_self_confession').css('display','block');
//         errorMessage("Please choose Yes or No");
//     }
// }