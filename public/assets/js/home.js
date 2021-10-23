function loadDescription(name,divname){
    $('.application-fee').html("");
    $('.registration-fee').html("");
    $('.description-info').html("");
    $('.requirement-info').html("");
    $('.yearly-fee').html("");
    $('.renew-fee').html("");
    $('.delay-fee').html("");
    $('.cpa-subject-fee').html("");
    $('.da-subject-fee').html("");
    $('.renew-cpa-subject-fee').html("");
    $('.renew-da-subject-fee').html("");
    $('.renew-yearly-fee').html("");
    $('.reconnected-fee').html("");
    $('.renew-registration-fee').html("");
    $.ajax({
      type: "get",
      url: BACKEND_URL+"/showDescription/"+name,
      success: function (result) {
        var data=result.data;
        var application_fee=0;
        var registration_fee=0;
        var renew_registration_fee=0;
        var reg_fee_sole=0;
        var reg_fee_partner=0;
        var yearly_fee=0;
        var renew_fee=0;
        var renew_fee_sole=0;
        var renew_fee_partner=0;
        var delay_fee=0;
        var late_fee_within_jan_sole = 0;
        var late_fee_within_jan_partner = 0;
        var late_fee_feb_to_apr_sole = 0;
        var late_fee_feb_to_apr_partner = 0;
        var cpa_subject_fee=0;
        var da_subject_fee=0;
        var renew_cpa_subject_fee=0;
        var renew_da_subject_fee=0;
        var renew_yearly_fee=0;
        var reconnected_fee=0;
        var reconnect_fee_sole = 0;
        var reconnect_fee_partner = 0;
        var late_feb_fee = 0;
        $.each(data, function( index, value ){
            $('.description-info').append(value.description);
            $('.requirement-info').append(value.requirement);
            $('.'+divname).append(value.description ? value.description : value.course_description);
            application_fee +=value.form_fee;
            registration_fee +=value.registration_fee;
            renew_registration_fee +=value.renew_registration_fee;
            reg_fee_sole += value.reg_fee_sole;
            reg_fee_partner += value.reg_fee_partner;
            yearly_fee +=value.yearly_fee;
            renew_yearly_fee +=value.renew_yearly_fee;
            renew_fee +=value.renew_fee;
            renew_fee_sole += value.renew_fee_sole;
            renew_fee_partner += value.renew_fee_partner;
            delay_fee +=value.late_fee;
            late_fee_within_jan_sole += value.late_fee_within_jan_sole;
            late_fee_within_jan_partner += value.late_fee_within_jan_partner;
            late_fee_feb_to_apr_sole += value.late_fee_feb_to_apr_sole;
            late_fee_feb_to_apr_partner += value.late_fee_feb_to_apr_partner;
            reconnect_fee_sole += value.reconnect_fee_sole;
            reconnect_fee_partner += value.reconnect_fee_partner;
            cpa_subject_fee +=value.cpa_subject_fee;
            da_subject_fee +=value.da_subject_fee;
            renew_cpa_subject_fee +=value.renew_cpa_subject_fee;
            renew_da_subject_fee +=value.renew_da_subject_fee;
            reconnected_fee +=value.reconnected_fee;
            late_feb_fee +=value.late_feb_fee;
        })
        $('.application-fee').append(thousands_separators(application_fee)+" MMK");
        $('.registration-fee').append(thousands_separators(registration_fee)+" MMK");
        //
        $('.reg_fee_sole').append(thousands_separators(reg_fee_sole)+" MMK");
        $('.reg_fee_partner').append(thousands_separators(reg_fee_partner)+" MMK");
        //
        $('.yearly-fee').append(thousands_separators(yearly_fee)+" MMK");
        $('.renew-fee').append(thousands_separators(renew_fee)+" MMK");
        //
        $('.renew_fee_sole').append(thousands_separators(renew_fee_sole)+" MMK");
        $('.renew_fee_partner').append(thousands_separators(renew_fee_partner)+" MMK");
        //
        $('.delay-fee').append(thousands_separators(delay_fee)+" MMK");
        //
        $('.late_fee_within_jan_sole').append(thousands_separators(late_fee_within_jan_sole)+" MMK");
        $('.late_fee_within_jan_partner').append(thousands_separators(late_fee_within_jan_partner)+" MMK");
        $('.late_fee_feb_to_apr_sole').append(thousands_separators(late_fee_feb_to_apr_sole)+" MMK");
        $('.late_fee_feb_to_apr_partner').append(thousands_separators(late_fee_feb_to_apr_partner)+" MMK");
        $('.reconnect_fee_sole').append(thousands_separators(reconnect_fee_sole)+" MMK");
        $('.reconnect_fee_partner').append(thousands_separators(reconnect_fee_partner)+" MMK");
        //
        $('.cpa-subject-fee').append(thousands_separators(cpa_subject_fee)+" MMK");
        $('.da-subject-fee').append(thousands_separators(da_subject_fee)+" MMK");
  
        $('.renew-cpa-subject-fee').append(thousands_separators(renew_cpa_subject_fee)+" MMK");
        $('.renew-da-subject-fee').append(thousands_separators(renew_da_subject_fee)+" MMK");
  
        $('.renew-yearly-fee').append(thousands_separators(renew_yearly_fee)+" MMK");
        $('.reconnected-fee').append(thousands_separators(reconnected_fee)+" MMK");
        $('.late-feb-fee').append(thousands_separators(late_feb_fee)+" MMK");
  
        $('.renew-registration-fee').append(thousands_separators(renew_registration_fee)+" MMK");
        
      }
    })
  }