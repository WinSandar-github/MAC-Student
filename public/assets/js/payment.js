$(document).ready(function () {
    // $(document).on('click', '#channel', function () {
    //     $(this).parent().parent().find('.radio').removeClass('selected');
    //     $(this).addClass('selected');
    //     $(this).data().value;
    //     // var url = "{{ url('setPayment') }}?payment_type=" + $(this).data().value;
    //     var url = FRONTEND_URL + "/setPayment?payment_type=" + $(this).data().value;
    //     // console.log(url)
    //     window.location.href = url;
    // })

    $('input[type=radio][name=payment_method]').click(function () {

        // submit button will enable when document load finished
        // to prevent null form submit or submit without payment
        if($('input[type=radio][name=payment_method]:checked').val() != null){
            $('button[type=submit]').attr('disabled', false);
        }

        var dyn_fee = $('#dyn-fee');
        var total = parseInt($('#total').text());

        switch ($(this).val()) {
            case 'mpu':
                dyn_fee.text('- 1000 MMK');
                $("#grand-total").text(total + 1000);
                break;
            case 'cbpay':
                dyn_fee.text('- 500 MMK');
                $("#grand-total").text(total + 500);
                break;
            case 'visa':
                dyn_fee.text('- 0 MMK');
                $("#grand-total").text(total + 0);
                break;
            case 'mastercard':
                dyn_fee.text('- 0 MMK');
                $("#grand-total").text(total + 0);
                break;
        }

    });

});

function loadStdData() {
    var student = JSON.parse(localStorage.getItem('studentinfo'));
    $.ajax({
        url: BACKEND_URL + "/user_profile/" + student.id,
        type: 'get',
        data: "",
        success: function (data) {
            // console.log(data)
            var std_data = data.data;
            // console.log(std_data)
            $('#phone').val(std_data.phone);
            $('#name_eng').val(std_data.name_eng);
            $('#email').val(std_data.email);
            $('#invoice_no').val(std_data);
        }
    });
}

function loadFees() {
    var course_id = JSON.parse(localStorage.getItem('courseId'));
    // console.log(course_id)
    $.ajax({
        url: BACKEND_URL + "/get_fees/" + course_id,
        type: 'get',
        data: "",
        success: function (data) {
            var fees = data.data;
            // console.log(fees[0].exam_fee)
            $('#form_fee').val(fees[0].form_fee);
            $('#fee').append(fees[0].form_fee);
            $('#total').append(fees[0].form_fee);
            $('#exam_fee').append(fees[0].exam_fee);
        }
    });
}


$('#payment_form').submit(function (e) {
    e.preventDefault();

    var pay_method = $('input[type=radio][name=payment_method]:checked').val();
    // console.log(pay_method);

    switch (pay_method) {
        case 'mpu':
            $('#payment_form').attr('action', FRONTEND_URL + '/post_payment/mpu');
            $(this).unbind('submit').submit();
            break;
        case 'cbpay':
            $('#payment_form').attr('action', FRONTEND_URL + '/post_payment/cbpay');
            $(this).unbind('submit').submit();
            break;
        default:
            $('#payment_form').attr('action', FRONTEND_URL + '/post_payment/visa_master');
            $(this).unbind('submit').submit();
            break;
    }

    // $(this).unbind('submit').submit();
});

function deviceOS() {
    var userAgent = navigator.userAgent || navigator.vendor || window.opera;
    if (/windows phone/i.test(userAgent)) {
        location.href = FRONTEND_URL + '/cbpay_pin';
    }

    if (/android/i.test(userAgent)) {
        $('#payment_form').attr('aciton', FRONTEND_URL + '/post_payment/cbpay_pin');
        location.href = FRONTEND_URL + '/cbpay_pin';
    }

    if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
        $('#payment_form').attr('aciton', FRONTEND_URL + '/post_payment/cbpay_pin');
        location.href = FRONTEND_URL + '/cbpay_pin';
    }

    location.href = FRONTEND_URL + '/cbpay_qr';
}

function cashPayment(){
    let url = window.location.href;
    var final =url.substr(url.lastIndexOf('/') + 1);
    console.log('final',final)
    $.ajax({
        url: BACKEND_URL + "/cashPayment",
        data: "invoiceNo="+final,
        type: 'post',
        success: function(result){
            successMessage(result.message);
            location.href = FRONTEND_URL + '/';
        }
    })
}