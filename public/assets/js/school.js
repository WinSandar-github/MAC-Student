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
            resetForm("#school_register_form");
        },
        error: function (result) {
        },
    });
    
}