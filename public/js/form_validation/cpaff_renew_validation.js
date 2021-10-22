$().ready(function (){
    $("#cpaff_renew_form_submit").validate({
        rules:{
            profile_photo : "required",
            cpaff_pass_date : "required",
            cpaff_renew_date : "required",
            cpa_certificate : "required",
            mpa_mem_card : "required",
            mpa_mem_card_back : "required",
            nrc_front : "required",
            nrc_back : "required",
            cpd_record : "required",
            total_hours : "required",
        },
        messages:{
            profile_photo : "Please replace your photo with current photo",
            cpa2_pass_date : "Please fill CPA 2 passed date",
            cpaff_renew_date : "Please enter renew date",
            cpa_certificate : "Please upload CPA certificate",
            mpa_mem_card : "Please upload MPA member card(front)",
            mpa_mem_card_back : "Please upload MPA member card(back)",
            nrc_front : "Please replace your photo with current photo",
            nrc_back : "Please replace your photo with current photo",
            cpd_record : "Please upload CPA record",
            total_hours : "Please Enter CPD Total hours",
        },
        submitHandler: function(form) {
            $('#renewModal').modal('show');
        }
    });
});