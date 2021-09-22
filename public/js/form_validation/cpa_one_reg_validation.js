$().ready(function (){

    $("#cpa_mac_form").validate({
        rules:{
            academic_year_mac : "required",
            direct_access_no_mac : "required",
            entry_success_no_mac : "required",
            internship : "required",
            good_morale_file : {
                required : "#gov_department:checked"
            },
            no_crime_file : {
                required : "#gov_department:checked"
            },
            internship : "required",
            academic_year_mac : "required",
            direct_access_no_mac : "required",
            entry_success_no_mac : "required",
            internship : "required",
        },
        messages:{
            academic_year_mac : "Please enter Academic Year!",
            direct_access_no_mac : "Please enter Direct Access Number!",
            entry_success_no_mac : "Please enter Entry Pass Nrmber!",
            internship : "Please select intership program!", 
            good_morale_file : {
                required : "Please upload recommend letter"
            },            
            no_crime_file : {
                required : "Please upload recommend letter"
            }, 
            academic_year_mac : "Please enter Academic Year!",
            direct_access_no_mac : "Please enter Direct Access Number!",
            entry_success_no_mac : "Please enter Entry Pass Nrmber!",
            internship : "Please select intership program!", 
            

        },
        
    });

    // $("#da_two_selfstudy_form").validate({
    //     rules:{
    //         mac_semester : "required",
    //         da_one_pass_level : "required",
    //         reg_reason : "required",
    //         personal_no_self : "required",
    //         da_two_self_reg_declare : "required",
            
    //     },
    //     messages:{
    //         mac_semester : "Please enter Semester Year!",
    //         da_one_pass_level : "Please enter DA One Passed Level!",
    //         reg_reason: "Please Select One!",
    //         personal_no_self : "Please enter personal number!",
    //         da_two_self_reg_declare : "Please accept our policy!",            

    //     },
        
    // });

    // $("#da_two_private_form").validate({
    //     rules:{
    //         private_school_name : "required",
    //         academic_year : "required",
    //         da_one_pass_level : "required",
    //         personal_no_private : "required",
    //         da_two_private_reg_declare : "required",
            
    //     },
    //     messages:{
    //         private_school_name : "Please select one!",
    //         academic_year : "Please enter Academic Year!",
    //         da_one_pass_level : "Please enter DA One Passed Level!",
    //         personal_no_private : "Please enter personal number!",
    //         da_two_private_reg_declare : "Please accept our policy!",            

    //     },
        
    // });

    
});