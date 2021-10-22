function loadDaOneForm(course_code) {
    $.ajax({
        url: BACKEND_URL + "/course_by_course_code/" + course_code,
        type: 'get',
        data: "",
        success: function (data) {
            let batch_id = data.data[0].active_batch[0].id;
            if (batch_id) {

                location.href = `${FRONTEND_URL}/da_one_existing_reg_form/` + batch_id

            } else {
                alert("Currently Unavailable");
            }
        }
    });
}