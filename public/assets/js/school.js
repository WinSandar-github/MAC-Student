function createSchoolRegister(){
    if($("input[name=password]").val()!=$("input[name=confirm_password]").val())
    {
        alert("Your password and confirm password do not match!");
        return;
    }
    var formData = new FormData($( "#school_register_form" )[0]); 
    formData.append('nrc_township',$("#nrc_township + .nice-select span").text());
    $.ajax({
        type: "POST",
        data: formData,
        url: BACKEND_URL + "/school",
        async: false,  
        cache: false,  
        contentType: false,  
        processData: false, 
        success: function (data) {
            successMessage(data.message);
            location.href=FRONTEND_URL+'/';
            //resetForm("#school_register_form");
        },
        error: function (result) {
        },
    });
    
}

function school_reg_feedback(){
    var student =JSON.parse(localStorage.getItem("studentinfo"));
    // console.log(student)
    $.ajax({
        url: BACKEND_URL+"/getSchoolStatus/"+student.id,
        type: 'GET',
        success: function(data){
            // console.log(data);
          var form_data = data;
          form_data.forEach(function(element){
            // console.log(element.approve_reject_status);
                if(element.approve_reject_status == 0){
                    // showPending();
                    $('#school_pending').css('display','block');
                    $('#school_form').css('display','none');

                }else if(element.approve_reject_status == 1){
                    $('#school_approve').css('display','block');
                    $('#school_form').css('display','none');
                    $('#school_pending').css('display','none');
                }
                else{
                    //
                }
          })
        }
    }); 
} 