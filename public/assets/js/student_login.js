function studentLogin(){
    var email=$("input[name=email]").val();
    var password=$("input[name=password]").val();
    $.ajax({
        url:   BACKEND_URL + "/loginValidate",
        type: 'post',
        data: {
            email: email,
            password:password
            },
        success: function(result){
            console.log(result)
            

            if(result){
                localStorage.setItem('studentinfo', JSON.stringify(result));
                localStorage.setItem('approve_reject',result.approve_reject_status);
                 location.href= FRONTEND_URL + "/";
            }else{
                $('#err_msg').text("Password and Email do not match");
                $("#email").val("");
                $('#password').val("");

           }
        },error:function(errors){
            if(errors.status == 401){
                $('#err_msg').text("Password and Email do not match");
                $("#email").val("");
                $('#password').val("");

            }
        }

    });
}

function check_login(){

    if(student_name == null){
         $('.signed_in').attr('style','display:none !important');
    }else{
         $('.after_signin').attr('style','display:none !important');
        $('.student_name').html("");
        $('.student_name').append(student_name);

    }
}

function logout(){

    localStorage.clear();
    location.href=FRONTEND_URL+"/student_index";

}

//Redirect login page depend on course
function login_page(batch_id,course_id,course_type){
    if(course_id == 1){

        localStorage.setItem('batch_id',batch_id);
        let ls_course_type = localStorage.getItem('course_type');
        if(ls_course_type == 2){

            location.href = FRONTEND_URL+`/cpa_one_form/${batch_id}`;
        }else{
            location.href = FRONTEND_URL+`/da_one_form/${batch_id}`;


        }

    }else{
        if(course_type == 1){
            alert("You need to Pass DA I")
        }else{
            alert("You need to Pass CPA I")


        }
    }
}
