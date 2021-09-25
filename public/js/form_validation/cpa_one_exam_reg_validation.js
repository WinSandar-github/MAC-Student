$().ready(function (){

    $("#cpa_exam_form").validate({
        rules:{
            exam_department : "required",
            private_school_name : "required",
            // last_ans_exam_no : "required",
            // date : "required",
            is_full_module : "required",
            
        },
        messages:{
            exam_department : "Please select exam department!",
            private_school_name : "Please select private school name!",
            // last_ans_exam_no : "Please enter last exam number!",
            // date : "Please enter last exam date!",             
            is_full_module : "Please Select Module!",
        },
        submitHandler: function(form) {
            $('#paymentModal').modal('show');
        }
        
    });
  
});