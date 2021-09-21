$().ready(function (){
    $("#da_two_selfstudy_form").validate({
        rules:{
            mac_semester : "required",
            da_one_pass_level : "required",
            // reg_reason[] : "required",
            personal_no_self : "required",
            da_two_self_reg_declare : "required",
            
        },
        messages:{
            mac_semester : "Please enter Semester Year!",
            da_one_pass_level : "Please enter DA One Passed Level!",
            // reg_reason[] : "Please enter your name",
            personal_no_self : "Please enter personal number!",
            da_two_self_reg_declare : "Please accept our policy!",            

        },
        
    });

    $("#da_two_private_form").validate({
        rules:{
            private_school_name : "required",
            academic_year : "required",
            da_one_pass_level : "required",
            // reg_reason[] : "required",
            personal_no_self : "required",
            da_two_private_reg_declare : "required",
            
        },
        messages:{
            private_school_name : "Please select one!",
            academic_year : "Please enter Academic Year!",
            da_one_pass_level : "Please enter DA One Passed Level!",
            // reg_reason[] : "Please enter your name",
            personal_no_self : "Please enter personal number!",
            da_two_private_reg_declare : "Please accept our policy!",            

        },
        
    });

    $("#da_two_mac_form").validate({
        rules:{
            mac_semester : "required",
            da_one_pass_level : "required",
            // reg_reason[] : "required",
            personal_no_self : "required",
            da_two_mac_reg_declare : "required",
            
        },
        messages:{
            mac_semester : "Please enter Academic Year!",
            da_one_pass_level : "Please enter DA One Passed Level!",
            // reg_reason[] : "Please enter your name",
            personal_no_self : "Please enter personal number!",
            da_two_mac_reg_declare : "Please accept our policy!",            

        },
        
    });
});