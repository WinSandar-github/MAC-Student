function loadExistingForm(course_code) {
    $.ajax({
        url: BACKEND_URL + "/course_by_course_code/" + course_code,
        type: 'get',
        data: "",
        success: function (data) {
            let batch = data.data[0].active_batch[0];

            if (batch) {
                var app_start_date = new Date(batch.accept_application_start_date);
                var app_end_date = new Date(batch.accept_application_end_date);
                let date = new Date();

                if (app_start_date <= date && app_end_date >= date) {                    
                    if(batch.course.code=='da_1'){
                        location.href = `${FRONTEND_URL}/da_one_existing_reg_form/` + batch.id
                    }else if(batch.course.code=='da_2'){
                        // localStorage.setItem('batch_id', batch.id);
                        location.href = `${FRONTEND_URL}/da_two_existing_reg_form/` + batch.id
                    }else if(batch.course.code=='cpa_1'){
                        location.href = `${FRONTEND_URL}/existing_user_cpa_one/` + batch.id
                    }else if(batch.course.code=='cpa_2'){
                        location.href = `${FRONTEND_URL}/cpa_two_reg_cpaone_pass/` + batch.id
                    }               
                } else {
                    alert("Currently Unavailable");
                }



            } else {
                alert("Currently Unavailable");
            }
        }
    });
}

// loadActiveBatchNumber
function loadActiveBatchNumber(course_code) {
    $.ajax({
        url: BACKEND_URL + "/course_by_course_code/" + course_code,
        type: 'get',
        data: "",
        success: function (data) {
            let batch = data.data[0].active_batch[0];
           $("#batch_number").append(engToMyanNum(batch.number))

            // if (batch) {
            //     var app_start_date = new Date(batch.accept_application_start_date);
            //     var app_end_date = new Date(batch.accept_application_end_date);
            //     let date = new Date();

            //     if (app_start_date <= date && app_end_date >= date) {                    
            //         if(batch.course.code=='da_1'){
            //             location.href = `${FRONTEND_URL}/da_one_existing_reg_form/` + batch.id
            //         }else if(batch.course.code=='da_2'){
            //             // localStorage.setItem('batch_id', batch.id);
            //             location.href = `${FRONTEND_URL}/da_two_existing_reg_form/` + batch.id
            //         }else if(batch.course.code=='cpa_1'){
            //             location.href = `${FRONTEND_URL}/existing_user_cpa_one/` + batch.id
            //         }else if(batch.course.code=='cpa_2'){
            //             location.href = `${FRONTEND_URL}/cpa_two_reg_cpaone_pass/` + batch.id
            //         }               
            //     } else {
            //         alert("Currently Unavailable");
            //     }



            // } else {
            //     alert("Currently Unavailable");
            // }
        }
    });
}
