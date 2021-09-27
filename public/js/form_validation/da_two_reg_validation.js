$().ready(function (){
    $("#da_two_selfstudy_form").validate({
        rules:{
            mac_semester : "required",
            da_one_pass_level : "required",
            reg_reason : "required",
            //personal_no_self : "required",
            da_two_self_reg_declare : "required",
            is_full_module:"required",
        },
        messages:{
            mac_semester : "Please select Academic Year!",
            da_one_pass_level : "Please enter DA One Passed Level!",
            reg_reason: "Please Select One!",
            //personal_no_self : "Please enter personal number!",
            da_two_self_reg_declare : "Please accept our policy!",            
            is_full_module:"Please select one.",
        },
        submitHandler: function(form) {
            $('#exampleModal3').modal('show');
        }
    });

    $("#da_two_private_form").validate({
        rules:{
            private_school_name : "required",
            academic_year : "required",
            da_one_pass_level : "required",
            //personal_no_private : "required",
            da_two_private_reg_declare : "required",
            is_full_module:"required",
            
        },
        messages:{
            private_school_name : "Please select one!",
            academic_year : "Please select Academic Year!",
            da_one_pass_level : "Please enter DA One Passed Level!",
            //personal_no_private : "Please enter personal number!",
            da_two_private_reg_declare : "Please accept our policy!",            
            is_full_module:"Please select one.",
        },
        submitHandler: function(form) {
            $('#exampleModal2').modal('show');
        }
    });

    $("#da_two_mac_form").validate({
        rules:{
            mac_semester : "required",
            da_one_pass_level : "required",
            //personal_no_mac : "required",
            da_two_mac_reg_declare : "required",
            is_full_module:"required",
        },
        messages:{
            mac_semester : "Please select Academic Year!",
            da_one_pass_level : "Please enter DA One Passed Level!",
            //personal_no_mac : "Please enter personal number!",
            da_two_mac_reg_declare : "Please accept our policy!",            
            is_full_module:"Please select one.",
        },
        submitHandler: function(form) {
            $('#exampleModal1').modal('show');
        }
    });
});