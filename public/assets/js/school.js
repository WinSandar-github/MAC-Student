function createSchoolRegister(){
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