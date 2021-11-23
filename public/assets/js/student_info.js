function ConfirmSubmitSS() {
    var radio = document.getElementById("submit_confirm_ss");
    if (radio.checked == true) {
        document.getElementById("submit_btn_ss").disabled = false;
        document.getElementById("submit_confirm_pp").checked = false;
        document.getElementById("submit_confirm_mac").checked = false;
    } else {
        document.getElementById("submit_btn_ss").disabled = true;
    }
}

function ConfirmSubmitPP() {
    var radio = document.getElementById("submit_confirm_pp");
    if (radio.checked == true) {
        document.getElementById("submit_btn_pp").disabled = false;
        document.getElementById("submit_confirm_ss").checked = false;
        document.getElementById("submit_confirm_mac").checked = false;
    } else {
        document.getElementById("submit_btn_pp").disabled = true;
    }
}


function ConfirmSubmitMac() {
    var radio = document.getElementById("submit_confirm_mac");

    if (radio.checked == true) {
        document.getElementById("submit_btn_mac").disabled = false;
        document.getElementById("submit_confirm_pp").checked = false;
        document.getElementById("submit_confirm_ss").checked = false;
    } else {
        document.getElementById("submit_btn_mac").disabled = true;
    }
}


function app_form_feedback() {
    var student = JSON.parse(localStorage.getItem('studentinfo'));
    let url = location.pathname;
    let course_type = url.substring(url.lastIndexOf('/') + 1);
    let count = 0;
    let course_length = $('#course_length').val();
    //show data depend login or no
    if (student != null) {
        $.ajax({
            type: "get",
            url: BACKEND_URL + "/student_info/" + student.id,
            contentType: false,
            processData: false,
            success: function (result) {

                let student_status = result.data.approve_reject_status;
                let exam_count;
                let previous_exam = result.data.exam_registers.slice(-1);
                let current_course = result.data.student_course_regs.slice(-1);


                for (var i = 0; i < course_length; ++i) {
                    let code = $(`.code${i}`).val();

                    let batch_id = $(`.batch_id${i}`).val();


                    // exam_count = i - 1;
                    if (student_status == 0) {
                        $('.application').show();
                        // $('.check_registration').css('display','block');
                        // $('.course_detail').css('display','none');
                        $(`.check_login${i}`).append(`<a href="javascript:successMessage('Your Application Form is checking')"  class="btn btn-success btn-sm btn-hover-dark">Enroll Now </a>`)
                    } else if (student_status == 1) {
                        $.ajax({
                            url: BACKEND_URL + "/getStatus/" + student.id,
                            type: 'GET',
                            contentType: false,
                            processData: false,
                            async: false,
                            headers: {
                                'Access-Control-Allow-Origin': '*',
                            },
                            success: function (reg_status) {

                                if (reg_status == 0) {
                                    $('.registration').show();
                                    $(`.check_login${i}`).append(`<a href="javascript:successMessage('Your Registration Form is checking')"  class="btn btn-success btn-sm btn-hover-dark">Registration Form</a>`)
                                } else if (reg_status == 1) {

                                    $.ajax({
                                        url: BACKEND_URL + "/get_exam_status/" + student_id,
                                        type: 'GET',
                                        contentType: false,
                                        processData: false,
                                        async: false,
                                        success: function (exam_status) {
                                            $('.exam').show();
                                            if (exam_status === 0) {
                                                $(`.check_login${i}`).append(`<a href="javascript:successMessage('Your Exam Form is checking')"  class="btn btn-success btn-sm btn-hover-dark  " >Enroll Now </a>`)
                                                // $('.exam_feedback').css('display','block');
                                                // $('.exam_text').append(`Your Exam Form is checking.`)
                                            } else if (exam_status == 1) {
                                                $(`.check_login${i}`).append(`<a href="javascript:successMessage('Your Exam Form is Approved')"  class="btn btn-success btn-sm btn-hover-dark  " >Enroll Now </a>`)
                                                // $('.exam_feedback').css('display','block');
                                                // $('.exam_text').append(`Your Exam Form is approved.`)
                                            } else if (exam_status == 2) {
                                                $('.exam_feedback').css('display', 'block');
                                                $('.exam_text').append(`Your Exam Form is reject.`)
                                            } else {

                                                // $('.approve').css('display','block');
                                                // $('#aa_form').css('display','block');

                                                var student_mentor;
                                                // $.ajax({
                                                //     url: BACKEND_URL + "/get_type/" + student_id,
                                                //     type: 'GET',
                                                //     async: false,
                                                //     success: function (data) {
                                                //         var student_data = data.data;
                                                //         student_data.forEach(function (element) {
                                                //             var course_data = element.course.code;
                                                //             var self_url = FRONTEND_URL + "/aa_self_form/" + student_id;
                                                //             var private_url = FRONTEND_URL + "/aa_private_form/" + student_id;
                                                //             var mac_url = FRONTEND_URL + "/aa_mac_form/" + student_id;
                                                //             if (element.type == 0 && course_data == 'cpa_1') {
                                                //                 student_mentor = element.mentor_id;
                                                //                 $('#aa').append(`<a href=${self_url} class="btn btn-success btn-sm xl-auto" >AA Register Form(Self Study)</a>`)
                                                //                 // createAASelfStudy();
                                                //             } else if (element.type == 1 && course_data == 'cpa_1') {
                                                //                 student_mentor = element.mentor_id;
                                                //                 $('#aa').append(`<a href=${private_url} class="btn btn-success btn-sm xl-auto" >AA Register Form(Private)</a>`)
                                                //                 // createAAPrivate();
                                                //             } else if (element.type == 2 && course_data == 'cpa_1') {
                                                //                 student_mentor = element.mentor_id;
                                                //                 $('#aa').append(`<a href=${mac_url} class="btn btn-success btn-sm xl-auto" pl-auto>AA Register Form(MAC)</a>`)
                                                //                 // createAAMac();
                                                //             } else {
                                                //                 //
                                                //             }
                                                //         })
                                                //     }
                                                // });

                                                $.ajax({
                                                    type: "get",
                                                    url: BACKEND_URL + "/get_exam/" + student.id,
                                                    contentType: false,
                                                    processData: false,
                                                    async: false,
                                                    success: function (result) {
                                                        var exam_url;

                                                        if (result) {
                                                            switch (result.course.code) {
                                                                case 'da_1':
                                                                    exam_url = '/exam_register';
                                                                    break;
                                                                case 'da_2':
                                                                    exam_url = '/da_two_exam_register';
                                                                    break;
                                                                case 'cpa_1':
                                                                    exam_url = '/cpa_exam_register';
                                                                    break;
                                                                case 'cpa_2':
                                                                    exam_url = '/cpa_two_exam_register';
                                                                    break;
                                                                default:
                                                                    exam_url = '/exam_register';
                                                                    break;
                                                            }
                                                            if (result.course.code == code) {
                                                                $(`.check_login${i}`).append(`<a href="${FRONTEND_URL + exam_url}"  class="  btn btn-sm btn-success btn-hover-dark">Exam Registration Form </a>`)
                                                            } else {
                                                                $(`.check_login${i}`).append(`<a href="javascript:successMessage('You are still in the ${result.course.name} process') "  class="btn btn-success btn-sm btn-hover-dark  " >Enroll Now </a>`)
                                                            }
                                                            // $('.add_exam').append(
                                                            // `<div>
                                                            // <p>${result.name} </p>
                                                            // <p>Exam Start Date - ${result.exam_start_date}</p>
                                                            // <p>Exam End Date - ${result.exam_end_date}</p>
                                                            // </div>`)
                                                            // console.log(student_mentor);
                                                            // if(student_mentor !== null){
                                                            //     $('.add_exam').append(`
                                                            //     <p> Go to Exam Registration Form
                                                            //     <a href=${exam_url} class="btn btn-sm btn-dark text-light">Exam Form</a>
                                                            //     </p>
                                                            //     `)
                                                            // }
                                                        } else {
                                                            $('.add_exam').append(`<div><p>The exam schedule will be announced soon</p></div>`);
                                                        }
                                                    }, error: function (message) {
                                                        console.log("get exam error, ", message);
                                                    }
                                                });
                                            }
                                        }
                                    });
                                } else if (reg_status == 2) {
                                    $('.status-reject').css('display', 'block');
                                    // $('.reject').append(`<a href="/da_edit" class="btn btn-primary btn-sm xl-auto" > Update </a>`)
                                } else {
                                    $('.registration').show();
                                    $.ajax({
                                        type: "get",
                                        url: BACKEND_URL + "/get_current_batch_studentId/" + student.id,
                                        contentType: false,
                                        processData: false,
                                        async: false,
                                        success: function (result) {
                                            var register_url;
                                            let batch = result.data;
                                            // console.log(result.data, "Batch");


                                            if (batch) {
                                                switch (batch.course.code) {
                                                    case 'da_1':
                                                        register_url = '/da_one_register';
                                                        break;
                                                    case 'da_2':
                                                        register_url = '/da_two_register';
                                                        break;
                                                    case 'cpa_1':
                                                        register_url = '/cpa_one_register';
                                                        break;
                                                    case 'cpa_2':
                                                        register_url = '/cpa_two_register';
                                                        break;
                                                    default:
                                                        register_url = '/da_one_register';
                                                        break;


                                                }
                                                if (batch.course.code == code) {
                                                    let date = new Date();
                                                    // let current_date = date.getFullYear()+'-'+(date.getMonth()+1)+'-'+date.getDate();
                                                    var mac_start_date = new Date(batch.mac_reg_start_date);
                                                    var mac_end_date = new Date(batch.mac_reg_end_date);
                                                    var self_start_date = new Date(batch.self_reg_start_date);
                                                    var self_end_date = new Date(batch.self_reg_end_date);
                                                    var private_start_date = new Date(batch.private_reg_start_date);
                                                    var private_end_date = new Date(batch.private_reg_end_date);


                                                    if (current_course[0].type == 2) {
                                                        if (mac_start_date <= date && mac_end_date >= date) {


                                                            $(`.mac_btn${i}`).append(`<a href="${FRONTEND_URL + register_url}?study_type=3"  class=" mb-3 btn btn-sm btn-primary btn-hover-dark  " >Mac Registration Form </a>`)
                                                        }
                                                    } else if (current_course[0].type == 1) {

                                                        if (private_start_date <= date && private_end_date >= date) {

                                                            $(`.private_btn${i}`).append(`<a href="${FRONTEND_URL + register_url}?study_type=2"  class=" mb-3 btn btn-sm btn-primary btn-hover-dark  " >Private School Registration Form </a>`)
                                                        }
                                                    } else {
                                                        if (self_start_date <= date && self_end_date >= date) {


                                                            $(`.self_btn${i}`).append(`<a href="${FRONTEND_URL + register_url}?study_type=1"  class=" mb-3 btn btn-sm btn-primary btn-hover-dark  " >Selfstudy  Registration Form </a>`)
                                                        }

                                                    }




                                                } else {
                                                    $(`.check_login${i}`).append(`<a href="javascript:successMessage('You are still in the ${batch.course.name} process') "  class="btn btn-success btn-sm btn-hover-dark  " >Enroll Now </a>`)


                                                }
                                                // location.href = FRONTEND_URL+register_url;
                                            }
                                        }
                                    });
                                }
                            }
                        });
                    } else if (student_status == 2) {
                        if (course_type_id == 2) {
                            $('.status-reject').css('display', 'block');
                            $('.course_detail').css('display', 'none');
                            $('.reject').append(`<a href="/cpa_edit" class="btn btn-primary btn-sm xl-auto" > Update </a>`);
                        } else {
                            $('.status-reject').css('display', 'block');
                            $('.course_detail').css('display', 'none');
                            $('.reject').append(`<a href="/da_edit" class="btn btn-primary btn-sm xl-auto" > Update </a>`);
                        }
                    } else {
                        // if(code == da)
                        $('.application').show();
                        $('.course_detail').css('display', 'block');
                        $.ajax({
                            url: BACKEND_URL + "/get_exam_student/" + student_id,
                            type: 'get',
                            contentType: false,
                            processData: false,
                            async: false,
                            success: function (result) {
                                let course_id = $(`#course_id${i}`).val();

                                $('.course_detail').css('display', 'block');
                                let data = result.data;
                                var data_course = data.filter(function (v) {
                                    return v.course.course_type_id == course_type
                                });
                                if (data) {
                                    var course_url;
                                    switch (code) {
                                        case 'da_1':
                                            course_url = '/da_one_form/' + batch_id;
                                            break;
                                        case 'da_2':
                                            course_url = '/da_two_register/' + batch_id;
                                            break;
                                        case 'cpa_1':
                                            course_url = '/cpa_one_form/' + batch_id;

                                            break;
                                        case 'cpa_2':
                                            course_url = "/cpa_two_register/" + batch_id;
                                            break;
                                        default:
                                            course_url = '/da_one_form' + batch_id;
                                            break;
                                    }
                                    if (data_course[i]) {


                                        if (data_course[i].grade == 1 && data_course[i].form_type == course_id) {

                                            $(`.check_login${i}`).append(`<a href="javascript:successMessage('Your have been pass ${data_course[i].course.name}')"  class="btn btn-success btn-sm btn-hover-dark  " >Enroll Now </a>`)

                                        } else {
                                            if (code == "da_2" || code == "cpa_2") {
                                                $.ajax({
                                                    url: BACKEND_URL + "/batch/" + batch_id,
                                                    type: 'get',
                                                    contentType: false,
                                                    processData: false,
                                                    async: false,
                                                    success: function (result) {
                                                        let batch = result.data;
                                                        let date = new Date();


                                                        // let current_date = date.getFullYear()+'-'+(date.getMonth()+1)+'-'+date.getDate();
                                                        var mac_start_date = new Date(batch.mac_reg_start_date);
                                                        var mac_end_date = new Date(batch.mac_reg_end_date);
                                                        var self_start_date = new Date(batch.self_reg_start_date);
                                                        var self_end_date = new Date(batch.self_reg_end_date);
                                                        var private_start_date = new Date(batch.private_reg_start_date);
                                                        var private_end_date = new Date(batch.private_reg_end_date);

                                                        if (current_course[0].type == 2) {

                                                            if (mac_start_date <= date && mac_end_date >= date) {

                                                                $(`.mac_btn${i}`).append(`<a href="${course_url}?study_type=3"  class=" mb-3 btn btn-sm btn-primary btn-hover-dark  " >Mac Registration Form </a>`)
                                                            }
                                                        } else if (current_course[0].type == 1) {
                                                            if (private_start_date <= date && private_end_date >= date) {


                                                                $(`.private_btn${i}`).append(`<a href="${course_url}?study_type=2"  class=" mb-3 btn btn-sm btn-primary btn-hover-dark  " >Private School Registration Form </a>`)
                                                            }

                                                        } else {
                                                            if (self_start_date <= date && self_end_date >= date) {

                                                                $(`.self_btn${i}`).append(`<a href="${course_url}?study_type=1"  class=" mb-3 btn btn-sm btn-primary btn-hover-dark  " >Selfstudy  Registration Form </a>`)
                                                            }
                                                        }



                                                    }

                                                })

                                            } else {
                                                $(`.check_login${i}`).append(`<a href="${course_url}"  class=" mb-3 btn btn-sm btn-primary btn-hover-dark  " >Private School Registration Form </a>`)

                                            }
                                        }
                                    } else {

                                        if (code == "da_2" || code == "cpa_2") {

                                            if (course_type == 1) {
                                                if (previous_exam[0].course.code == "da_1") {

                                                    $('.registration').show();
                                                    $('.application').hide();
                                                    $.ajax({
                                                        url: BACKEND_URL + "/batch/" + batch_id,
                                                        type: 'get',
                                                        contentType: false,
                                                        processData: false,
                                                        async: false,
                                                        success: function (result) {
                                                            let batch = result.data;
                                                            let date = new Date();
                                                            // let current_date = date.getFullYear()+'-'+(date.getMonth()+1)+'-'+date.getDate();
                                                            var mac_start_date = new Date(batch.mac_reg_start_date);
                                                            var mac_end_date = new Date(batch.mac_reg_end_date);
                                                            var self_start_date = new Date(batch.self_reg_start_date);
                                                            var self_end_date = new Date(batch.self_reg_end_date);
                                                            var private_start_date = new Date(batch.private_reg_start_date);
                                                            var private_end_date = new Date(batch.private_reg_end_date);
                                                            if (current_course[0].type == 2) {
                                                                if (mac_start_date <= date && mac_end_date >= date) {
                                                                    $(`.mac_btn${i}`).append(`<a href="${course_url}?study_type=3"  class=" mb-3 btn btn-sm btn-primary btn-hover-dark  " >Mac Registration Form </a>`)
                                                                }
                                                            } else if (current_course[0].type == 1) {

                                                                if (private_start_date <= date && private_end_date >= date) {
                                                                    $(`.private_btn${i}`).append(`<a href="${course_url}?study_type=2"  class=" mb-3 btn btn-sm btn-primary btn-hover-dark  " >Private School Registration Form </a>`)
                                                                }
                                                            } else {
                                                                if (self_start_date <= date && self_end_date >= date) {
                                                                    $(`.self_btn${i}`).append(`<a href="${course_url}?study_type=1"  class=" mb-3 btn btn-sm btn-primary btn-hover-dark  " >Selfstudy  Registration Form </a>`)
                                                                }

                                                            }

                                                        }

                                                    })

                                                } else {
                                                    $(`.check_login${i}`).append(`<a href="javascript:successMessage('You need to pass ${course_type == 1 ? "Da One" : "Cpa One"} ')"  class="btn btn-success btn-sm btn-hover-dark  " >Enroll Now </a>`)
                                                }
                                            } else {
                                                if (previous_exam[0].course.code == "cpa_1") {

                                                    $('.registration').show();

                                                    $.ajax({
                                                        url: BACKEND_URL + "/batch/" + batch_id,
                                                        type: 'get',
                                                        contentType: false,
                                                        processData: false,
                                                        async: false,
                                                        success: function (result) {
                                                            let batch = result.data;
                                                            let date = new Date();
                                                            // let current_date = date.getFullYear()+'-'+(date.getMonth()+1)+'-'+date.getDate();
                                                            var mac_start_date = new Date(batch.mac_reg_start_date);
                                                            var mac_end_date = new Date(batch.mac_reg_end_date);
                                                            var self_start_date = new Date(batch.self_reg_start_date);
                                                            var self_end_date = new Date(batch.self_reg_end_date);
                                                            var private_start_date = new Date(batch.private_reg_start_date);
                                                            var private_end_date = new Date(batch.private_reg_end_date);
                                                            if (current_course[0].type == 2) {
                                                                if (mac_start_date <= date && mac_end_date >= date) {

                                                                    $(`.mac_btn${i}`).append(`<a href="${course_url}?study_type=3"  class=" mb-3 btn btn-sm btn-primary btn-hover-dark  " >Mac Registration Form </a>`)
                                                                }
                                                            } else if (current_course[0].type == 1) {

                                                                if (private_start_date <= date && private_end_date >= date) {
                                                                    $(`.private_btn${i}`).append(`<a href="${course_url}?study_type=2"  class=" mb-3 btn btn-sm btn-primary btn-hover-dark  " >Private School Registration Form </a>`)
                                                                }
                                                            } else {
                                                                if (self_start_date <= date && self_end_date >= date) {
                                                                    $(`.self_btn${i}`).append(`<a href="${course_url}?study_type=1"  class=" mb-3 btn btn-sm btn-primary btn-hover-dark  " >Selfstudy  Registration Form </a>`)
                                                                }

                                                            }
                                                        }

                                                    });
                                                } else {
                                                    $(`.check_login${i}`).append(`<a href="javascript:successMessage('You need to pass ${course_type == 1 ? "Da One" : "Cpa One"} ')"  class="btn btn-success btn-sm btn-hover-dark  " >Enroll Now </a>`)
                                                }
                                            }
                                        } else {
                                            if (previous_exam[0].course.code == "da_2") {
                                                $(`.check_login${i}`).append(`<a href="${course_url}"  class=" mb-3 btn btn-success btn-sm btn-hover-dark">Enroll now </a>`)
                                            } else {
                                                $(`.check_login${i}`).append(`<a href="javascript:successMessage('You need to pass  Da Two')"  class="btn btn-success btn-sm btn-hover-dark">Enroll Now </a>`);
                                            }
                                        }
                                    }
                                }
                            }
                        });
                    }
                }
            }
        });
    } else {

        for (var i = 0; i < course_length; ++i) {

            let batch_id = $(`.batch_id${i}`).val();
            let course_code = $(`.code${i}`).val();

            $.ajax({
                url: BACKEND_URL + "/batch/" + batch_id,
                type: 'get',
                contentType: false,
                processData: false,
                async: false,
                success: function (result) {
                    let batch = result.data;
                    let date = new Date();
                    // let current_date = date.getFullYear()+'-'+(date.getMonth()+1)+'-'+date.getDate();
                    var app_start_date = new Date(batch.accept_application_start_date);
                    var app_end_date = new Date(batch.accept_application_end_date);
                    var reg_start_date = new Date(batch.mac_reg_start_date);
                    var reg_end_date = new Date(batch.mac_reg_end_date);
                    var exam_start_date = new Date(batch.exam_start_date);
                    var exam_end_date = new Date(batch.exam_reg_end_date);
                    var entry_start_date = new Date(batch.entrance_pass_start_date);
                    var entry_end_date = new Date(batch.entrance_pass_end_date);
                    let entry_status;
                    // console.log(app_end_date, app_start_date, date)
                    //entry status 1 is show and 2 is hide entry button 
                    if (entry_start_date <= date && entry_end_date >= date) {
                        entry_status = 1;
                    } else {
                        entry_status = 2;
                    }
                    if (app_start_date <= date && app_end_date >= date) {

                        $(`.app${i}`).show();

                        $(`.reg${i}`).hide();

                        $(`.exm${i}`).hide();

                        $(`.check_login${i}`).append(`<a href="javascript:login_page(${batch_id},'${course_code}',${course_type},${entry_status})" class="btn btn-success btn-sm btn-hover-dark" >Enroll Now </a>`);

                    } else if (reg_start_date <= date && reg_end_date >= date) {

                        $(`.reg${i}`).show();

                        $(`.app${i}`).hide();

                        $(`.exm${i}`).hide();

                        $(`.check_login${i}`).append(`<p class="btn btn-info btn-lg d-flex justify-content-center mb-4 text-dark h6">Form Close </p>`);

                    } else {

                        $(`.exm${i}`).show();

                        $(`.reg${i}`).hide();

                        $(`.app${i}`).hide();

                        $(`.check_login${i}`).append(`<p class="btn btn-info btn-lg d-flex justify-content-center mb-4 text-dark h6">Form Close </p>`);

                    }
                }
            });
        }
        // $('.logined').css('display','block')
        // $('.check_login2').append(`<a href="/login" class="btn btn-primary btn-hover-dark   " >Enroll Now </a>`)
    }
}

function getCourse() {
    $.ajax({
        url: BACKEND_URL + "/student_course",
        type: 'get',
        data: "",
        success: function (data) {
            var course_data = data.data;
            course_data.forEach(function (element) {
                var course = "<div class='dropend'><a href='#' data-bs-toggle='dropdown' aria-expanded='false' id='dropdownMenuButton' aria-haspopup='true'><u>" + element.name + "</u></a><div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>";

                var batch_data = element.batch;
                if (batch_data.length != 0) {
                    batch_data.forEach(function (item) {

                        course += "<button type='button' class='dropdown-item' onclick=addCourseBatch(\"" + encodeURIComponent(element.name) + "\"," + element.id + ",\"" + encodeURIComponent(item.name) + "\"," + item.id + ")>" + item.name + '</button>';

                    })
                } else {
                    course += "<span class='dropdown-item disabled'>no batch</span>";
                }

                course += "</div></div>";
                $('.course-list').append(course);
            })


        },
        error: function (message) {

        }
    });
}

function addCourseBatch(courseName, courseId, batchName, batchId) {
    localStorage.setItem("courseName", decodeURIComponent(courseName));
    localStorage.setItem("courseId", decodeURIComponent(courseId));
    localStorage.setItem("batchName", decodeURIComponent(batchName));
    localStorage.setItem("batchId", decodeURIComponent(batchId));
    location.href = FRONTEND_URL + "student_study";
}

function loadCourse() {
    $('.coursename').html("");
    $('.batchname').html("");
    var courseName = localStorage.getItem("courseName");
    var courseId = localStorage.getItem("courseId");
    var batchName = localStorage.getItem("batchName");
    var batchId = localStorage.getItem("batchId");
    $('.coursename').append(courseName);
    $('.batchname').append(batchName);
    // $("input[name='student_regno']").val(student_regno);

}

function selectedRegistration(radioValue) {

    if (radioValue == 3) {

        $('#mac_container').css('display', 'block');
        $('#self_study_container').css('display', 'none');
        $('#private_school_container').css('display', 'none');
        $('#mac_card').addClass("text-success border-success");
        $("#private_card").removeClass("text-success border-success");
        $('#self_study_card').removeClass("text-success border-success");
    } else if (radioValue == 2) {
        $('#private_school_container').css('display', 'block');
        $('#self_study_container').css('display', 'none');
        $('#mac_container').css('display', 'none');
        $('#self_study_card').removeClass("text-success border-success");
        $("#private_card").addClass("text-success border-success");
        $('#mac_card').removeClass("text-success border-success");
    } else if (radioValue == 1) {
        $('#self_study_container').css('display', 'block');
        $('#private_school_container').css('display', 'none');
        $('#mac_container').css('display', 'none');
        $('#self_study_card').addClass("text-success border-success");
        $('#private_card').removeClass("text-success border-success");
        $("#mac_card").removeClass("text-success border-success");
    } else {

        $('#mac_container').css('display', 'block');
        $('#self_study_container').css('display', 'none');
        $('#private_school_container').css('display', 'none');
    }
}

function createSelfStudy() {
    localStorage.setItem("isPrivateSchool", false);
    let batch_id = localStorage.getItem('batch_id');
    var recommend_letter_self = $("input[name=recommend_letter_self]")[0].files[0];
    var profile_photo = $("input[name='profile_photo_self']")[0].files[0];
    var send_data = new FormData();
    send_data.append('student_id', student_id);
    send_data.append('sr_no', $("input[name='student_regno']").val());
    send_data.append('type', 0);
    send_data.append('recommendation_letter', recommend_letter_self);
    send_data.append('batch_no_self', $("input[name='batch_no_self']").val());
    send_data.append('part_no_self', $("input[name='part_no_self']").val());
    send_data.append('personal_no_self', $("input[name='personal_no_self']").val());
    send_data.append('module', $("input[type='radio'][name='is_full_module']:checked").val());
    $('input[name="reg_reason[]"]:checked').map(function (key, val) {
        send_data.append('reg_reason[]', val.value);
    });
    send_data.append('form_type', $("input[name='form_type']").val());
    send_data.append('remain_module', $("input[name='remain_module']").val())
    send_data.append('batch_id', $("input[name='batch_id']").val());
    //send student info data
    send_data.append('office_address', $("#self_study_container").find("input[name=office_address]").val());
    send_data.append('current_address', $("#self_study_container").find("input[name=current_address]").val());
    send_data.append('address', $("#self_study_container").find("input[name=address]").val());
    send_data.append('phone', $("#self_study_container").find("input[name=phone]").val());
    send_data.append('gov_staff', $("#self_study_container").find('input[name="gov_staff"]:checked').val());
    send_data.append('profile_photo', profile_photo);

    show_loader();
    $.ajax({
        url: BACKEND_URL + "/student_register",
        type: 'post',
        data: send_data,
        contentType: false,
        processData: false,
        success: function (result) {
            
            EasyLoading.hide();
            successMessage(result);
            setInterval(() => {
                location.href = FRONTEND_URL + "/";
            }, 3000);
        }
    });
}

function createPrivateSchool() {
    localStorage.setItem("isPrivateSchool", true);
    let batch_id = localStorage.getItem('batch_id');
    var recommend_letter_private = $("input[name=recommend_letter_private]")[0].files[0];
    var profile_photo = $("input[name='profile_photo_private']")[0].files[0];
    var send_data = new FormData();
    send_data.append('student_id', student_id);
    send_data.append('sr_no', $("input[name='student_regno']").val());
    send_data.append('type', 1);
    send_data.append('recommendation_letter', recommend_letter_private);
    send_data.append('batch_no_private', $("input[name='batch_no_private']").val());
    send_data.append('part_no_private', $("input[name='part_no_private']").val());
    send_data.append('personal_no_private', $("input[name='personal_no_private']").val());
    send_data.append('module', $("input[type='radio'][name='is_full_module']:checked").val());
    send_data.append('form_type', $("input[name='form_type']").val());
    send_data.append('private_school_name', $("#selected_school_id option:selected").text());
    send_data.append('remain_module', $("input[name='remain_module']").val())
    send_data.append('batch_id', $("input[name='batch_id']").val());

    //send student info data
    send_data.append('office_address', $("#private_school_container").find("input[name=office_address]").val());
    send_data.append('current_address', $("#private_school_container").find("input[name=current_address]").val());
    send_data.append('address', $("#private_school_container").find("input[name=address]").val());
    send_data.append('phone', $("#private_school_container").find("input[name=phone]").val());
    send_data.append('gov_staff', $("#private_school_container").find('input[name="gov_staff"]:checked').val());
    send_data.append('profile_photo', profile_photo);
    // if($("input[name='form_type']").val()=="da two"){
    //     send_data.append('date', formatDate($("input[name='exam_date']").val()));
    // }
    show_loader();

    $.ajax({
        url: BACKEND_URL + "/student_register",
        type: 'post',
        data: send_data,
        contentType: false,
        processData: false,
        success: function (result) {
            EasyLoading.hide();
            successMessage(result);
            setInterval(() => {
                location.href = FRONTEND_URL + "/";
            }, 3000);
        }
    });
}

function createMac() {
    localStorage.setItem("isPrivateSchool", false);
    let batch_id = localStorage.getItem('batch_id');
    var recommend_letter_mac = $("input[name=recommend_letter_mac]")[0].files[0];
    var profile_photo = $("input[name=profile_photo_mac]")[0].files[0];
    var send_data = new FormData();
    send_data.append('student_id', student_id);
    send_data.append('sr_no', $("input[name='student_regno']").val());
    send_data.append('type', 2);
    send_data.append('recommendation_letter', recommend_letter_mac);
    send_data.append('batch_no_mac', $("input[name='batch_no_mac']").val());
    send_data.append('part_no_mac', $("input[name='part_no_mac']").val());
    send_data.append('personal_no_mac', $("input[name='personal_no_mac']").val());
    send_data.append('module', $("input[type='radio'][name='is_full_module']:checked").val());
    send_data.append('form_type', $("input[name='form_type']").val());
    send_data.append('remain_module', $("input[name='remain_module']").val());
    send_data.append('batch_id', $("input[name='batch_id']").val());
    send_data.append('mac_type', $("input[name='mac_type']:checked").val());
    //send student info data
    send_data.append('office_address', $("#mac_container").find("input[name=office_address]").val());
    send_data.append('current_address', $("#mac_container").find("input[name=current_address]").val());
    send_data.append('address', $("#mac_container").find("input[name=address]").val());
    send_data.append('phone', $("#mac_container").find("input[name=phone]").val());
    send_data.append('gov_staff', $("#mac_container").find("input[name='gov_staff']:checked").val());
    // return alert($("#mac_container").find("input[name='gov_staff']:checked").val());
    send_data.append('profile_photo', profile_photo);
    show_loader();
    $.ajax({
        url: BACKEND_URL + "/student_register",
        type: 'post',
        data: send_data,
        contentType: false,
        processData: false,
        success: function (result) {
            // console.log('result1234',result)
            EasyLoading.hide();
            successMessage(result);
            setInterval(() => {
                location.href = FRONTEND_URL + "/";
            }, 3000);
        }
    });
}

// show Register Form Feedback after approve application form in student study page
function reg_feedback() {
    var student = JSON.parse(localStorage.getItem("studentinfo"));

    $.ajax({
        url: BACKEND_URL + "/getStatus/" + student.id,
        type: 'GET',
        contentType: false,
        processData: false,
        success: function (status) {


            let exam_grade = localStorage.getItem('exam_grade');

            if (exam_grade == 1) {
                $('#form_type').val(localStorage.getItem('course_id'));
                // selectedRegistration();
                $('.study').css('display', 'block');

            } else {
                if (status == 0) {
                    $('.check_registration').css('display', 'block');
                } else if (status == 1) {


                    // $.ajax({
                    //     url: BACKEND_URL + "/get_exam_status/" + student_id,
                    //     type: 'GET',
                    //     contentType: false,
                    //     processData: false,
                    //     success: function (exam_status) {

                    //         if (exam_status)
                    //             if (exam_status === 0) {
                    //                 $('.exam_feedback').css('display', 'block');
                    //                 $('.exam_text').append(`Your Exam Form is checking.`)
                    //             } else if (exam_status == 1) {

                    //                 $('.exam_feedback').css('display', 'block');
                    //                 $('.exam_text').append(`Your Exam Form is approved.`)
                    //             } else if (exam_status == 2) {
                    //                 $('.exam_feedback').css('display', 'block');
                    //                 $('.exam_text').append(`Your Exam Form is reject.`)
                    //             } else {
                    //                 $('.approve').css('display', 'block');
                    //                 $('#aa_form').css('display', 'block');

                    //                 var student_mentor
                    //                 $.ajax({
                    //                     url: BACKEND_URL + "/get_type/" + student_id,
                    //                     type: 'GET',
                    //                     success: function (data) {
                    //                         var student_data = data.data;
                    //                         student_data.forEach(function (element) {
                    //                             var course_data = element.course.code;
                    //                             var self_url = FRONTEND_URL + "/aa_self_form/" + student_id;
                    //                             var private_url = FRONTEND_URL + "/aa_private_form/" + student_id;
                    //                             var mac_url = FRONTEND_URL + "/aa_mac_form/" + student_id;

                    //                             if (element.type == 0 && course_data == 'cpa_1') {

                    //                                 student_mentor = element.mentor_id;
                    //                                 $('#aa').append(`<a href=${self_url} class="btn btn-success btn-sm xl-auto" >AA Register Form(Self Study)</a>`)
                    //                                 // createAASelfStudy();
                    //                             } else if (element.type == 1 && course_data == 'cpa_1') {

                    //                                 student_mentor = element.mentor_id;

                    //                                 $('#aa').append(`<a href=${private_url} class="btn btn-success btn-sm xl-auto" >AA Register Form(Private)</a>`)
                    //                                 // createAAPrivate();
                    //                             } else if (element.type == 2 && course_data == 'cpa_1') {


                    //                                 student_mentor = element.mentor_id;

                    //                                 $('#aa').append(`<a href=${mac_url} class="btn btn-success btn-sm xl-auto" pl-auto>AA Register Form(MAC)</a>`)
                    //                                 // createAAMac();
                    //                             } else {
                    //                                 //
                    //                             }
                    //                         })
                    //                     }
                    //                 });


                    //                 $.ajax({
                    //                     type: "get",
                    //                     url: BACKEND_URL + "/get_exam/" + student.id,
                    //                     contentType: false,
                    //                     processData: false,
                    //                     success: function (result) {
                    //                         var exam_url;

                    //                         if (result) {

                    //                             switch (result.course.code) {
                    //                                 case 'da_1':
                    //                                     exam_url = 'exam_register';

                    //                                     break;
                    //                                 case 'da_2':
                    //                                     exam_url = 'da_two_exam_register';
                    //                                     break;
                    //                                 case 'cpa_1':
                    //                                     exam_url = 'cpa_exam_register';
                    //                                     break;
                    //                                 case 'cpa_2':
                    //                                     exam_url = 'cpa_two_exam_register';
                    //                                     break;
                    //                                 default:
                    //                                     exam_url = 'exam_register';
                    //                                     break;


                    //                             }

                    //                             $('.add_exam').append(
                    //                                 `<div>
                    //                         <p>${result.name} </p>
                    //                         <p>Exam Start Date - ${result.exam_start_date}</p>
                    //                         <p>Exam End Date - ${result.exam_end_date}</p>

                    //                         </div>`)


                    //                             if (student_mentor !== null) {
                    //                                 $('.add_exam').append(`
                    //                             <p> Go to Exam Registration Form
                    //                             <a href=${exam_url} class="btn btn-sm btn-dark text-light">Exam Form</a>
                    //                             </p>
                    //                             `)
                    //                             }


                    //                         } else {
                    //                             $('.add_exam').append(`<div>
                    //                             <p>The exam schedule will be announced soon</p>
                    //                         </div>`)
                    //                         }

                    //                     },
                    //                     error: function (message) {
                    //                     }
                    //                 })

                    //             }
                    //     }
                    // });


                } else if (status == 2) {
                    $('.status-reject').css('display', 'block');
                    // $('.reject').append(`<a href="/da_edit" class="btn btn-primary btn-sm xl-auto" > Update </a>`)

                } else {

                    $('#form_type').val(localStorage.getItem('course_id'));
                    const queryString = location.search;
                    const urlParams = new URLSearchParams(queryString);
                    selectedRegistration(urlParams.get("study_type"))


                    $('.study').css('display', 'block');


                }

            }


        }
    });


}

function loadExam() {
    var id = student_id;
    $.ajax({
        type: "GET",
        url: BACKEND_URL + "/get_exam_student/" + id,
        success: function (data) {
            var exam_data = data.data;
            if (exam_data.length == 0) {
                $("input[name='form_type']").val("da one");
            } else {
                exam_data.forEach(function (element) {
                    if (element.status == 1) {
                        localStorage.setItem("exam_date", element.date);
                        location.href = FRONTEND_URL + '/da_two_register';
                    }
                })

            }

        }
    })
}

function updateCode() {
    var code = $("input[name='verify_code']").val();

    var verify_code = JSON.parse(localStorage.getItem("code"));
    var id = JSON.parse(localStorage.getItem("id"));
    if (verify_code == code) {
        $.ajax({
            url: BACKEND_URL + "/check_code/" + id,
            type: 'patch',
            success: function (data) {

                successMessage("You are verified!");
                location.href = FRONTEND_URL + '/login';
            }
        });
    } else {
        alert("You code is not correct.Please check your email inbox again!");
    }
}




async function get_student_info(id) {
    let response = await fetch(BACKEND_URL + "/user_profile/" + id)
    let data = await response.json();
    // console.log("return data", data)
    return data;
}
