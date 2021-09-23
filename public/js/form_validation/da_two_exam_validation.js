$().ready(function (){
    $("#da2_exam").validate({
        rules:{
            // last_exam_date : "required",
            // last_ans_module : "required",
            exam_department : "required",
            personal_no_self : "required",
            da_two_self_reg_declare : "required",
            
        },
        messages:{
            // last_exam_date : "Please enter passed exam date!",
            // last_ans_module : "Please Select Module!",
            exam_department: "Please Select One!",
            personal_no_self : "Please enter personal number!",
            da_two_self_reg_declare : "Please accept our policy!",            

        },
        
        submitHandler: function(form) {
            $('#da2examModal').modal('show');
        }
    });  

   
});