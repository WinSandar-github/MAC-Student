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
           
            // console.log(result.data[0].approve_reject_status);
            localStorage.setItem('studentinfo', JSON.stringify(result.data));
            localStorage.setItem('approve_reject',result.data[0].approve_reject_status);
            location.href="student_index";
      }
    });
}
