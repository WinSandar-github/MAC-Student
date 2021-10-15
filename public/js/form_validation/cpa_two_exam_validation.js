$().ready(function (){
    
    $("#cpa2_exam_form").validate({
        rules:{
            exam_department:"required",
            date:"required",
        },
        messages:{
            exam_department:"Please enter this field.",
            date:"Please enter this field.",
        },
        submitHandler: function(form) {
            // $('#cpa2examModal').modal('show');
            CPAExamRegister();
        }
    });
});