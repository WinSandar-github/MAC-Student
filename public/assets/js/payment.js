// $(document).ready(function () {
//     $(document).on('click', '#channel', function () {
//         $(this).parent().parent().find('.radio').removeClass('selected');
//         $(this).addClass('selected');
//         $(this).data().value;
//         // var url = "{{ url('setPayment') }}?payment_type=" + $(this).data().value;
//         var url = FRONTEND_URL + "/setPayment?payment_type=" + $(this).data().value;
//         // console.log(url)
//         window.location.href = url;
//     })
// });

function loadStdData()
{
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

function loadFees()
{
    var course_id = JSON.parse(localStorage.getItem('courseId'));
    // console.log(course_id)
    $.ajax({
        url: BACKEND_URL + "/get_fees/" + course_id,
        type: 'get',
        data: "",
        success: function (data) {
            var fees = data.data;
            // console.log(fees[0].exam_fee)
            $('#form_fee').append(fees[0].form_fee);
            $('#total').append(fees[0].form_fee);
            $('#exam_fee').append(fees[0].exam_fee);
        }
    });
}