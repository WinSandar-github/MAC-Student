function loadExistingForm(course_code) {
    $.ajax({
        url: BACKEND_URL + "/course_by_course_code/" + course_code,
        type: 'get',
        data: "",
        success: function (data) {
            let batch = data.data[0].active_batch[0];
            console.log(batch)
            if (batch) {
                var app_start_date = new Date(batch.accept_application_start_date);
                var app_end_date = new Date(batch.accept_application_end_date);
                let date = new Date();

                if (app_start_date <= date && app_end_date >= date) {

                    location.href = `${FRONTEND_URL}/da_one_existing_reg_form/` + batch.id
                } else {
                    alert("Currently Unavailable");
                }



            } else {
                alert("Currently Unavailable");
            }
        }
    });
}