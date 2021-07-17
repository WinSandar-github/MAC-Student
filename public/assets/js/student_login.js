function studentLogin(){
    var email=$("input[name=email]").val();
    var password=$("input[name=password]").val();
    $.ajax({
        url:"/api/loginValidate",
        type: 'post',
        data: {
            email: email,
            password:password
            },
        success: function(result){
            localStorage.setItem('studentinfo', JSON.stringify(result.data));
            location.href="student_index";
      }
    });
}
