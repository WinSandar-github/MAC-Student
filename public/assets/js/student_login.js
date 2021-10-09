function studentLogin() {
    var email = $("input[name=email]").val();
    var password = $("input[name=password]").val();

    show_loader();

    $.ajax({
        url: BACKEND_URL + "/loginValidate",
        type: 'post',
        data: {
            email: email,
            password: password
        },
        success: function (result) {
            // console.log(result.verify_status)
            // if(result.verify_status == 0){
            //     localStorage.setItem('code', JSON.stringify(result.verify_code));
            //     localStorage.setItem('id', JSON.stringify(result.id));
            //     location.href= FRONTEND_URL + "/verify_email";

            // }else if(result.verify_status == 1){
            //     EasyLoading.hide()
            //     localStorage.setItem('studentinfo', JSON.stringify(result));
            //     localStorage.setItem('approve_reject',result.approve_reject_status);
            //     location.href= FRONTEND_URL + "/";
            // }
            if (result) {
                EasyLoading.hide()
                localStorage.setItem('studentinfo', JSON.stringify(result));
                localStorage.setItem('approve_reject', result.approve_reject_status);
                location.href = FRONTEND_URL + "/";
            }
            else {
                EasyLoading.hide();

                $('#err_msg').text("Password and Email do not match");
                $("#email").val("");
                $('#password').val("");

            }
        }, error: function (errors) {
            if (errors.status == 401) {
                EasyLoading.hide()

                $('#err_msg').text("Password and Email do not match");
                $("#email").val("");
                $('#password').val("");

            }
        }

    });
}

function check_login() {
    if (student_name == null) {
        $('.signed_in').attr('style', 'display:none !important');
    } else {
        $('.after_signin').attr('style', 'display:none !important');
        $('.student_name').html("");
        $('.student_name').append(student_name);
    }
}

function logout(url) {
    localStorage.clear();
    location.href = url;
}

//Redirect login page depend on course
function login_page(batch_id, course_code, course_type, entry_status) {

    if (course_code === 'da_1' || course_code == 'cpa_1') {

        localStorage.setItem('batch_id', batch_id);
        //let ls_course_type = localStorage.getItem('course_type');
        if (course_type == 2) {



            $('#dir_cpa').attr('href', `${FRONTEND_URL}/cpa_one_form/${batch_id}`);
            $('#da_pass').attr('href', `${FRONTEND_URL}/cpa_one_dapass_form/${batch_id}`);

            if (entry_status == 1) {


                $('#entry_exam').append(`<br><a href="${FRONTEND_URL}/cpa_one_entry_form/${batch_id}" class="btn btn-md my-3 btn-success">Entry Exam</a>`);
            } else {

                $('#entry_exam').append(`<br><p class= "btn btn-info btn-md my-2  h6" > Form Close </p > `);

            }



            $('#entryClassModel').modal('show');







            // Swal.fire({
            //     title: '',
            //     showDenyButton: true,
            //     showCancelButton: false,
            //     confirmButtonText: 'Direct',
            //     denyButtonText: `Entry Exam`,
            //   }).then((result) => {

            //     if (result.isConfirmed) {
            //       location.href = FRONTEND_URL+`/ cpa_one_form / ${ batch_id }`
            //     } else if (result.isDenied) {
            //         location.href = FRONTEND_URL+`/ cpa_one_entry_form / ${ batch_id }`

            //     }
            //   })

            // location.href = FRONTEND_URL+`/ cpa_one_form / ${ batch_id }`;
        } else {
            location.href = FRONTEND_URL + `/ da_one_form / ${batch_id}`;


        }

    } else {

        if (course_type == 1) {
            alert("You need to Pass DA I")
        } else {
            alert("You need to Pass CPA I")


        }
    }
}
