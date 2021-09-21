$().ready(function (){
    
    $("#da_exam_register_form").validate({
        rules:{
            is_full_module:"required",
        },
        messages:{
            last_ans_exam_no:"Please select one.",
        },
        
    });
});