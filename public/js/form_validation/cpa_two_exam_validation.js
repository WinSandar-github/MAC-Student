$().ready(function (){
    
    $("#cpa2_exam_form").validate({
        rules:{
            last_ans_exam_no:"required",
            exam_department:"required",
            date:"required",
        },
        messages:{
            last_ans_exam_no:"Please enter this field.",
            exam_department:"Please enter this field.",
            date:"Please enter this field.",
        },
        submitHandler: function(form) {
            $('#cpa2examModal').modal('show');
        }
    });
});