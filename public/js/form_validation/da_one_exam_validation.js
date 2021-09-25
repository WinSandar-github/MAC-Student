$().ready(function (){
    
    $("#da_exam_register_form").validate({
        rules:{
            exam_department:"required",
        },
        messages:{
            exam_department:"Please select one.",
        },
        submitHandler: function(form) {
            $('#da1examModal').modal('show');
        }
    });
});