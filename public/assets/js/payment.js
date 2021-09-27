$(document).ready(function () {
    $(document).on('click', '#channel', function () {
        $(this).parent().parent().find('.radio').removeClass('selected');
        $(this).addClass('selected');
        $(this).data().value;
        var url = "{{ url('setPayment') }}?payment_type=" + $(this).data().value;
        window.location.href = url;
    })
});
