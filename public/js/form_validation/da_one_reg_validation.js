$().ready(function (){
    $("#da_private_school_form").validate({
        rules:{
            is_full_module : "required",
        },
        messages:{
            is_full_module : "Please select one",
        },
        submitHandler: function(form) {
            $('#privateModal').modal('show');
        }
    });
    $("#da_mac_form").validate({
        rules:{
            is_full_module : "required",
        },
        messages:{
            is_full_module : "Please select one",
        },
        submitHandler: function(form) {
            $('#macModal').modal('show');
        }
    });
    
    
    $("#self_study_form").validate({
        rules:{
            reg_reason : 'required',
            is_full_module : 'required',
        },
        messages:{
            reg_reason: "Please select registration reason.",
            is_full_module : "Please select one.",
        },
        submitHandler: function(form) {
            $('#selfModal').modal('show');
        }
    });
});