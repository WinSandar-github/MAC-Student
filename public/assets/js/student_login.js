function studentLogin(){
    var email=$("input[name=email]").val();
    var password=$("input[name=password]").val();
    $.ajax({
        url:  "/loginValidate",
        type: 'post',
        data: {
            email: email,
            password:password
            },
        success: function(result){

            if(result){
                localStorage.setItem('studentinfo', JSON.stringify(result));
                localStorage.setItem('approve_reject',result.approve_reject_status);
                location.href= FRONTEND_URL + "/student_index";
            }else{
                $('#err_msg').text("Password and Email don't not match");
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
        location.href = FRONTEND_URL+"/login";
    }else{
        if(course_type == 1){
            alert("You need to Pass DA I")
        }else{
            alert("You need to Pass CPA I")


        }
    }
}
