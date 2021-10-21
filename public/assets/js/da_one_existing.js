// function check_da_one_existing_email(){
//     var text = localStorage.getItem('verify_code');
//     var obj = JSON.parse(text);
//     var verify_code = obj.data.verify_code;
//     var code = $("input[name=verify_code]").val();
//     if (verify_code != code) {
//         successMessage("Your code is not correct.Please check your email inbox again!");
//         // $('#exampleModal').modal('show');
//         // $('#exampleModal1').modal('hide');
//         // $('#exampleModal').modal('show');
//     } else {
//         // $('#exampleModal1').modal('show');
//         createDAExistingRegister();
//         $('#DATwoRegEmailModal').modal('hide');
//     }
// }

// function createDAOneExistingRegister(){
//     if ($("input[name=password]").val() != $("input[name=confirm_password]").val()) {
//         alert("Your password and confirm password do not match!");
//         return;
//     }
//     var send_data = new FormData();

//     var image = $("input[name=profile_photo]")[0].files[0];
//     var nrc_front = $("input[name=nrc_front]")[0].files[0];
//     var nrc_back = $("input[name=nrc_back]")[0].files[0];
//     var recommend_letter = $("input[name=recommend_letter]")[0].files[0];
//     var nrc_state_region = $("#nrc_state_region").val();
//     var nrc_township = $("#nrc_township").val();
//     var nrc_citizen = $("#nrc_citizen").val();

//     send_data.append('email', $("input[name=email]").val());
//     send_data.append('password', $("input[name=password]").val());
//     send_data.append('nrc_state_region', nrc_state_region);
//     send_data.append('nrc_township', nrc_township);
//     send_data.append('nrc_citizen', nrc_citizen);
//     send_data.append('nrc_number', $("input[name=nrc_number]").val());
//     send_data.append('nrc_front', nrc_front);
//     send_data.append('nrc_back', nrc_back);
//     send_data.append('name_mm', $("input[name=name_mm]").val());
//     send_data.append('name_eng', $("input[name=name_eng]").val());
//     send_data.append('gender', $("input[type='radio'][name='gender']:checked").val());
//     send_data.append('father_name_mm', $("input[name=father_name_mm]").val());
//     send_data.append('father_name_eng', $("input[name=father_name_eng]").val());
//     send_data.append('race', $("input[name=race]").val());
//     send_data.append('religion', $("input[name=religion]").val());
//     send_data.append('date_of_birth', $("input[name=date_of_birth]").val());
//     send_data.append('address', $("input[name=address]").val());
//     send_data.append('current_address', $("input[name=current_address]").val());
//     send_data.append('phone', $("input[name=phone]").val());
//     send_data.append('gov_staff', $("input[type='radio'][name='gov_staff']:checked").val());
//     send_data.append('image', image);
//     send_data.append('registration_no', $("input[name=registration_no]").val());
//     // send_data.append('date', $("input[name=date]").val());
//     send_data.append('recommend_letter', recommend_letter);
//     send_data.append('current_job', $("input[name=current_job]").val());
//     send_data.append('position', $("input[name=position]").val());
//     send_data.append('department', $("input[name=department]").val());
//     send_data.append('organization', $("input[name=organization]").val());
//     send_data.append('company_name', $("input[name=company_name]").val());
//     send_data.append('salary', $("input[name=salary]").val());
//     send_data.append('office_address', $("input[name=office_address]").val());

//     send_data.append('university_name', $("input[name=university_name]").val());
//     send_data.append('degree_name', $("input[name=degree_name]").val());
//     // send_data.append('certificate', certificate);
//     $('input[name="certificate[]"]').map(function () {

//         for (var i = 0; i < $(this).get(0).files.length; ++i) {
//             console.log($(this))
//             send_data.append('certificate[]', $(this).get(0).files[i]);
//         }
//     });
//     send_data.append('qualified_date', $("input[name=qualified_date]").val());
//     send_data.append('roll_number', $("input[name=roll_number]").val());

//     send_data.append('verify_status', $("input[name=verify_status]").val());
//     send_data.append('payment_method', $("input[name=payment_method]").val());
//     send_data.append('verify_code', $("input[name=verify_code]").val());
//     send_data.append('batch_id', $("#selected_current_batch_id").val());
//     send_data.append('pass_batch_id', $("#selected_batch_id").val());
//     send_data.append('degree_rank', $("input[name=da_one_pass_level]").val());
//     send_data.append('da_pass_date', $("input[name=da_one_pass_exam_date]").val());
//     send_data.append('da_pass_roll_number', $("input[name=da_one_pass_personal_no]").val());

//     send_data.append('type', $("input[name='attend_place']:checked").val());
//     // send_data.append('pass_type', $("input[name='da_one_attend_place']:checked").val());
//     send_data.append('mac_type', $("input[name='attend_place']:checked").val() == 2 ? $("input[name='mac_type']:checked").val() : 99);
//     // send_data.append('pass_mac_type', $("input[name='da_one_attend_place']:checked").val() == 2 ? $("input[name='da_one_mac_type']:checked").val() : 88);
//     send_data.append('module', $("input[type='radio'][name='is_full_module']:checked").val());
//     show_loader();
//     $.ajax({
//         url: BACKEND_URL + "/da_one_existing_register",
//         type: 'post',
//         data: send_data,
//         contentType: false,
//         processData: false,
//         success: function (result) {
//             console.log('result',result)
//             EasyLoading.hide();
//             successMessage("You have successfully registered. Use your email and password to login.");
//             setInterval(() => {
//                 location.href = FRONTEND_URL + '/';
//             }, 3000);
//         },
//         error: function (message) {
//             EasyLoading.hide();
//             errorMessage(message);
//         }
//     });
// }