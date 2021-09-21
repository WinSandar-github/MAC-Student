$().ready(function (){

    /*$("#da_mac_form").validate({
        rules:{
            personal_no_mac : "required",
        },
        messages:{
            personal_no_mac : "Please fill this field",
        },
    });*/
    
    $("#self_study_form").validate({
        rules:{
            reg_reason : 'required',
            date: 'required',
            is_full_module : 'required',
        },
        messages:{
            reg_reason: "Please select registration reason.",
            date: "Please fill this field.",
            is_full_module : "Please select one.",
        },
        
    });
});