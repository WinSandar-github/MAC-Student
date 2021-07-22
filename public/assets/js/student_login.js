function studentLogin(){
    var email=$("input[name=email]").val();
    var password=$("input[name=password]").val();
    $.ajax({
        url: "/loginValidate",
        type: 'post',
        data: {
            email: email,
            password:password
            },
        success: function(result){
            if(result){
                localStorage.setItem('studentinfo', JSON.stringify(result));
                localStorage.setItem('approve_reject',result.approve_reject_status);
                location.href="student_index";
            }else{
                $('#err_msg').text("Password and Email dost not match");
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
    location.href="student_index";

}
