$().ready(function (){

    $("#cpa_mac_form").validate({
        rules:{
            academic_year_mac : "required",
            // direct_access_no_mac : "required",
            // entry_success_no_mac : "required",
            internship : "required",
            good_morale_file : {
                required : "#gov_department:checked"
            },
            no_crime_file : {
                required : "#gov_department:checked"
            },
            module : "required",
            
        },
        messages:{
            academic_year_mac : "Please enter Academic Year!",
            // direct_access_no_mac : "Please enter Direct Access Number!",
            // entry_success_no_mac : "Please enter Entry Pass Number!",
            internship : "Please select intership program!", 
            good_morale_file : {
                required : "Please upload recommend letter"
            },            
            no_crime_file : {
                required : "Please upload recommend letter"
            }, 
            module : "Please Select Module!",
        },
        submitHandler: function(form) {
            $('#macModal').modal('show');
        }
        
    });

    $("#cpa_pp_form").validate({
        rules:{
            academic_year_private : "required",
            // direct_access_no_private : "required",
            // entry_success_no_private : "required",
            batch_part_no : "required",
            // batch_personal_no : "required", 
            private_school_name: "required",  
            module : "required",        
            
        },
        messages:{
            academic_year_private : "Please enter Academic Year!",
            // direct_access_no_private : "Please enter Direct Access Number!",
            // entry_success_no_private : "Please enter Entry Pass Number!",
            batch_part_no : "Please enter Batch Part Number!",
            // batch_personal_no : "Please enter Personal Number!",
            private_school_name: "Please select Private School Name",
            module : "Please Select Module!",
            
        },
        submitHandler: function(form) {
            $('#privateSchoolModal').modal('show');
        }
        
    });

    $("#cpa_ss_form").validate({
        rules:{
            academic_year_self : "required",
            reg_reason:"required",
            // direct_access_no_self : {
            //     required : "#cpa_check:checked"
            // },
            // entry_success_no_self : {
            //     required : "#cpa_check:checked"
            // },
            module : "required",
            batch_part_no : "required",
            // batch_personal_no : "required", 
            // private_school_name: "required",          
            
        },
        messages:{
            academic_year_self : "Please enter Academic Year!",
            reg_reason:"Please select registration reason!",
            // direct_access_no_self : {
            //     required : "Please upload recommend letter"
            // },            
            // entry_success_no_self : {
            //     required : "Please upload recommend letter"
            // },
            module : "Please Select Module!",
            batch_part_no : "Please enter Batch Part Number!",
            // batch_personal_no : "Please enter Personal Number!",
            // private_school_name: "Please select Private School Name",
            
        },
        submitHandler: function(form) {
            $('#selfStudyModal').modal('show');
        }
        
    });

    
});