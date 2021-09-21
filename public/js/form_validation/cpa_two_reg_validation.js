$().ready(function (){
    
    $("#cpa2_private_form").validate({
        rules:{
            batch_personal_no_private:"required",
            cpa_one_pass_date:"required",
            cpa_one_access_no:"required",
            cpa_one_success_no:"required",
        },
        messages:{
            batch_personal_no_private:"Please enter this field.",
            cpa_one_pass_date:"Please enter this field.",
            cpa_one_access_no:"Please enter this field.",
            cpa_one_success_no:"Please enter this field.",
        },
        
    });
    
    $("#cpa2_self_form").validate({
        rules:{
            reg_reason : 'required',
            batch_personal_no_self:"required",
        },
        messages:{
           reg_reason: "Please select registration reason.",
           batch_personal_no_self:"Please enter this field.",
        },
        
    });

    $("#cpa2_mac_form").validate({
        rules:{
            batch_personal_no_mac:"required",
            cpa_one_pass_date_mac:"required",
            cpa_one_access_no_mac:"required",
            cpa_one_success_no_mac:"required",
        },
        messages:{
            batch_personal_no_mac:"Please enter this field.",
            cpa_one_pass_date_mac:"Please enter this field.",
            cpa_one_access_no_mac:"Please enter this field.",
            cpa_one_success_no_mac:"Please enter this field.",
        },
        
    });
});