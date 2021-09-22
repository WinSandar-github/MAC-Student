$().ready(function (){

    $("#non_audit_renew_form").validate({
        rules:{
            //email : "required",
            profile_photo : "required"
        },
        messages:{
            //email : "Please Enter Email"
            profile_photo : "Upload photo",
        },

    });

});
