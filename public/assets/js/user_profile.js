function user_profile() {

    show_loader();
    $.ajax({
        url: BACKEND_URL + "/user_profile/" + student_id,
        type: 'get',
        success: function (result) {
            EasyLoading.hide();
            let data = result.data;

            if (data.accountancy_firm_info_id) {
                $('.title').text('Accountancy Firm')
                $('.acc_firm').show();
                $('.cpaff_other').hide();
                let acc_firm = data.accountancy_firm;
                let firm_ownerships_audits = data.firm_ownerships_audits;

                $('#acc_firm_reg_no').text(acc_firm.accountancy_firm_reg_no);
                $('#acc_firm_name').text(acc_firm.accountancy_firm_name);
                $("#head_office").text(acc_firm.township + " Township," + acc_firm.city
                    + " City, " + acc_firm.state_region + " State,");
                $(".email").text(acc_firm.h_email);
                $('.phone').text(acc_firm.telephones);
                console.log(">>>>",acc_firm);
                if (acc_firm.status == 2) {
                    $('#reject_remark_box').css("display", "block");
                    $('.reject_remark').text(acc_firm.remark);
                }

                if (acc_firm.audit_firm_type_id == 1) {
                    // if audit firm type
                    if (firm_ownerships_audits != '') {

                        // show name and public practice reg no who selected Yes
                        firm_ownerships_audits.forEach(function (item) {
                            if (item.authority_to_sign == 1) {
                                $("#info_for_audit").css("display", "block");
                                var tr = "<tr>";
                                tr += "<td>" + item.name + "</td>";
                                tr += "<td >" + item.public_private_reg_no + "</td>";
                                tr += "</tr>";
                                $(".pub_pra_reg_no_and_name_tbody").append(tr);
                            }
                        });
                    }

                    if (acc_firm.status == 0) {
                        $('.status_history').append('<span class="text-warning">Your Audit Firm Form is checking.</span>');
                    } else if (acc_firm.status == 1) {
                        $('.status_history').append('<span class="text-success">Your Audit Firm Form is Approved.</span>');
                    } else {
                        $('.status_history').append('<span class="text-danger">Your Audit Firm Form is Rejected.</span>');
                        $('#reject_register_btn_audit').css("display","block");
                    }
                }
                else {
                    //if non-audit firm type
                    $("#info_for_non_audit").css("display", "block");
                    $('.managing_dir_name').text(acc_firm.name_of_sole_proprietor);
                    $('.passport_csc_no').text(acc_firm.dir_passport_csc);

                    if (acc_firm.status == 0) {
                        $('.status_history').append('<span class="text-warning">Your Non-Audit Firm Form is checking.</span>');
                    } else if (acc_firm.status == 1) {
                        $('.status_history').append('<span class="text-success">Your Non-Audit Firm Form is Approved.</span>');
                    } else {
                        $('.status_history').append('<span class="text-danger">Your Non-Audit Firm Form is Rejected.</span>');
                        $('#reject_register_btn_non_audit').css("display","block");
                    }
                }


            } else if (data.school && data.teacher == null) {
                $('.dashboard_name').append('School ');
                loadSchoolByDash(data.school);
                
            }else if (data.teacher && data.school==null && data.teacher_renew.length==0) {
                $('.dashboard_name').append('Teacher ');
                laodTeacherByDash(data.teacher);
                
            }else if (data.teacher_renew && data.teacher) {
                $('.dashboard_name').append('Teacher ');
                loadRenewTeacherDash(data.teacher_renew.pop());
                
            }  
            else if (data.cpa_ff && data.student_course_regs == '') {
                $('.title').text('CPA Full-Fledged and PAPP Information')
                $('.cpaff_other').show();
                let cpaff = data.cpa_ff;
                $('#cpaff_name_mm').text(cpaff.name_mm);
                $('#cpaff_name_eng').text(cpaff.name_eng);
                $("#cpaff_nrc").text(cpaff.nrc_state_region + "/" + cpaff.nrc_township + "(" + cpaff.nrc_citizen + ")" + cpaff.nrc_number);
                $("#cpaff_email").text(cpaff.email);
                $('#cpaff_phone').text(cpaff.phone);
                var papp_url = FRONTEND_URL + "/student_papp_information";
                var cpaff_url = FRONTEND_URL + "/cpa_ff_register";
                var cpaff_renew_url = FRONTEND_URL + "/cpa_ff_information";
                if (cpaff.status == 0) {
                    $('.status_history').append('CPA Full-Fledged Registration Form is checking.<br><br>');
                    $('.status_papp').append('Action &nbsp;&nbsp;');
                    $('.status_papp').append(`<a href= ${papp_url} class="btn btn-success btn-sm xl-auto" > PAPP form </a>`);
                } else if (cpaff.status == 1) {
                    $('.status_history').append('CPA Full-Fledged Registration Form is Approved.<br><br>');
                    $('.status_history').append('Action &nbsp;&nbsp;');
                    $('.status_history').append(`<a href= ${cpaff_renew_url} class="btn btn-success btn-sm xl-auto" > CPA(Full-Fledged) Renew Form </a><hr>`);
                    $('.status_papp').append('Action &nbsp;&nbsp;');
                    $('.status_papp').append(`<a href= ${papp_url} class="btn btn-success btn-sm xl-auto" > PAPP form </a>`);
                } else {
                    $('.status_history').append('CPA Full-Fledged Registration Form is Rejected.');
                    $('.status_history').append(`<a href="${cpaff_url}" class="btn btn-outline-primary btn-sm ms-2"><i class="fa fa-pencil-square-o me-2" aria-hidden="true"></i>Edit Profile</a>`);
                }
                if (data.papp && data.student_course_regs == '') {
                    if (data.papp.status == 0) {
                        $('.status_history').append('PAPP Registration Form is checking.<br><br>');
                        $('.status_papp').css('display', 'none');
                    } else if (data.papp.status == 1) {
                        $('.status_papp').css('display', 'none');
                        var papp_renew_url = FRONTEND_URL + "/student_papp_information";
                        $('.status_history').append('PAPP Registration Form is Approved.<br><br>');
                        $('.status_history').append('Action &nbsp;&nbsp;');
                        $('.status_history').append(`<a href= ${papp_renew_url} class="btn btn-success btn-sm xl-auto" > PAPP Renew Form </a><hr>`);
                    } else {
                        $('.status_history').append('PAPP Registration Form is Rejected.');
                    }
                }
                // if (cpaff.payment_method != null) {
                //     var papp_url = FRONTEND_URL + "/student_papp_information";
                //     $('.period').show();
                //     var now = new Date();
                //     var period_date = cpaff.renew_accepted_date.split('-');
                //     var period = period_date[2] + '-' + period_date[1] + '-' + period_date[0];
                //     // console.log(period);
                //     $('#period_time_cpaff').text(period + " to 31-12-" + now.getFullYear());
                // }


            } else if (data.mentor) {
                $('.title').text('Mentor Information')
                $('.school').show();
                $('.cpaff_other').hide();
                let mentor = data.mentor;
                $('#sch_name_mm').text(mentor.name_mm);
                $('#sch_name_eng').text(mentor.name_eng);
                $("#sch_nrc").text(mentor.nrc_state_region + "/" + mentor.nrc_township + "(" + mentor.nrc_citizen + ")" + mentor.nrc_number);
                $("#sch_date_of_birth").text(mentor.date_of_birth);
                $("#sch_email").text(mentor.m_email);
                $('#sch_phone').text(mentor.phone_no);
                if (mentor.status == 0) {
                    $('.status_history').append('Mentor Registration is checking.');
                } else if (mentor.status == 1) {
                    $('.status_history').append('Mentor Registration is Approved.');
                } else {
                    $('.status_history').append('Mentor Registration is Rejected.');
                }
            } else if (data.school && data.teacher) {
                $('.dashboard_name').append('Teacher And School ');
                laodTeacherByDash(data.teacher);
                loadSchoolByDash(data.school);

            } else if (data.qualified_test) {
                let qt = data.qualified_test;

                $('.title').text('Student Information')
                $('.qualified_test').show();
                $('.cpaff_other').hide();
                $('.da-card').show();
                $('#qt_name_mm').text(data.name_mm);
                $('#qt_name_eng').text(data.name_eng);
                $("#qt_nrc").text(data.nrc_state_region + "/" + data.nrc_township + "(" + data.nrc_citizen + ")" + data.nrc_number);
                $("#qt_email").text(data.email);
                $('#qt_phone').text(data.phone);
                document.getElementById('qt_image').src = BASE_URL + data.image;

                var papp_url = FRONTEND_URL + "/student_papp_information";
                var cpaff_url = FRONTEND_URL + "/cpa_ff_register"
                    ;
                var cpaff_renew_url = FRONTEND_URL + "/cpa_ff_information";
                if (qt.approve_reject_status == 0) {
                    $('.status_history').append('CPA Full-Fledged Registration Form is checking.<br><br>');

                } else if (qt.approve_reject_status == 1) {
                    $('.status_history').append('Qualified Test Form is Approved.<br><br>');

                } else {
                    $('.status_history').append('Qualified Test Form is Rejected.');

                }
                // if (cpaff.status == 0) {
                //     $('.status_history').append('CPA Full-Fledged Registration Form is checking.<br><br>');
                //     $('.status_papp').append('Action &nbsp;&nbsp;');
                //     $('.status_papp').append(`<a href= ${papp_url} class="btn btn-success btn-sm xl-auto" > PAPP form </a>`);
                // } else if (cpaff.status == 1) {
                //     $('.status_history').append('CPA Full-Fledged Registration Form is Approved.<br><br>');
                //     $('.status_history').append('Action &nbsp;&nbsp;');
                //     $('.status_history').append(`<a href= ${cpaff_renew_url} class="btn btn-success btn-sm xl-auto" > CPA(Full-Fledged) Renew Form </a><hr>`);
                //     $('.status_papp').append('Action &nbsp;&nbsp;');
                //     $('.status_papp').append(`<a href= ${papp_url} class="btn btn-success btn-sm xl-auto" > PAPP form </a>`);
                // } else {
                //     $('.status_history').append('CPA Full-Fledged Registration Form is Rejected.');
                //     $('.status_history').append(`<a href="${cpaff_url}" class="btn btn-outline-primary btn-sm ms-2"><i class="fa fa-pencil-square-o me-2" aria-hidden="true"></i>Edit Profile</a>`);
                // }
                // if (data.papp && data.student_course_regs == '') {
                //     if (data.papp.status == 0) {
                //         $('.status_history').append('PAPP Registration Form is checking.<br><br>');
                //         $('.status_papp').css('display', 'none');
                //     } else if (data.papp.status == 1) {
                //         $('.status_papp').css('display', 'none');
                //         var papp_renew_url = FRONTEND_URL + "/student_papp_information";
                //         $('.status_history').append('PAPP Registration Form is Approved.<br><br>');
                //         $('.status_history').append('Action &nbsp;&nbsp;');
                //         $('.status_history').append(`<a href= ${papp_renew_url} class="btn btn-success btn-sm xl-auto" > PAPP Renew Form </a><hr>`);
                //     } else {
                //         $('.status_history').append('PAPP Registration Form is Rejected.');
                //     }
                // }

            }
            else {
                $('.cpaff_other').hide();
                $('.da_cpa').show();
                $('.title').text("Student Information")
                let exam_register = data.exam_registers;
                let cpaff = data.cpa_ff;
                $('#name_mm').text(data.name_mm);
                $('#name_eng').text(data.name_eng);
                $("#nrc").text(data.nrc_state_region + "/" + data.nrc_township + "(" + data.nrc_citizen + ")" + data.nrc_number);
                $("#date_of_birth").text(data.date_of_birth);
                $("#email").text(data.email);
                $('#phone').text(data.phone);
                let latest_course_reg = data.student_course_regs.slice(-1)
                let latest_stu_reg = data.student_register.slice(-1);
                let last_exam = data.exam_registers.slice(-1);
                // document.getElementById('image').src = BASE_URL + data.image;
                var course_html;



                let next_course;

                switch (latest_course_reg[0].batch.course.code) {
                    case 'da_1':
                        next_course = "DA II"
                        break;
                    case 'da_2':
                        next_course = "CPA I"
                        break;
                    case 'cpa_1':
                        next_course = "CPA II"
                        break;
                    case 'cpa_2':
                        next_course = "CPA(Full-Fledged)"
                        break;
                    default:
                        next_course = "DA II"
                        break;
                }

                if (cpaff !== null) {
                    $('.cpaff').show();
                    if (cpaff.status == 0) {
                        $('.status').append(`
                        <tr>
                            <td>CPA(Full-Fledged) </td>
                            <td>${formatDate(cpaff.created_at)}</td>
                            <td>-</td>
                            <td><span class="badge bg-info text-dark">Checking</span></td>
                        </tr>
                        `);
                        // $('.papp_btn').append(`<tr><td colspan=2></td><td>Action</td><td> <a href='${FRONTEND_URL}/student_papp_information' class="btn btn-sm btn-success" > PAPP Form</a></td></tr>`);
                    } else if (cpaff.status == 1) {
                        $('.status').append(`
                        <tr>
                            <td>CPA(Full-Fledged) </td>
                            <td>${formatDate(cpaff.created_at)}</td>
                            <td>${formatDate(cpaff.updated_at)}</td>
                            <td><span class="badge bg-success">Approved</span></td>
                        </tr>
                        `);
                        // $('.status').append(`<tr><td colspan=2></td><td>Action</td><td> <a href='${FRONTEND_URL}/student_papp_information' class="btn btn-sm btn-success" > PAPP Form</a></td></tr>`);
                        var accept = new Date(cpaff.renew_accepted_date);
                        var month = accept.getMonth();
                        var current_month = new Date();
                        // var check_month = current_month.getMonth();
                        var check_month = 10;
                        var year = accept.getFullYear();
                        var y = year + 1;
                        var now = new Date();

                        // if (month > 8) {
                        //     $(".status").append(`<tr><td colspan=4>Your information will be expired at  <b> 31 December ${y}</b></td></tr>`);
                        // } else {
                        //     $(".status").append(`<tr><td colspan=3>Your information will be expired at  <b> 31 December ${year}</b>
                        //         </td><td> <a href='${FRONTEND_URL}/cpa_ff_information' class="btn btn-sm btn-success" > CPA Full Fledged Renew Form</a></tr>
                        //     `);
                        //     $('.papp_btn').append(`<tr><td colspan=2></td><td>Action</td><td> <a href='${FRONTEND_URL}/student_papp_information' class="btn btn-sm btn-success" > PAPP Form</a></td></tr>`);
                        // }
                        if ((now.getFullYear() == y && (now.getMonth() + 1) == month) || now.getFullYear() > year) {
                            $('.status').append(`<tr><td colspan=2></td><td>Action</td><td> <a href='${FRONTEND_URL}/cpa_ff_information' class="btn btn-sm btn-success" > CPA(Full-Fledged) Renew Form</a></td></tr>`);
                            $('.papp_btn').append(`<tr><td colspan=2></td><td>Action</td><td> <a href='${FRONTEND_URL}/student_papp_information' class="btn btn-sm btn-success" > PAPP Form</a></td></tr>`);
                        }
                        // if (check_month < 12) {
                        //     $(".status").append(`<tr><td colspan=4>Your information will be expired at  <b> 31 December ${y}</b></td></tr>`);
                        // }
                        else if (check_month == 10) {
                            $('.status').append(`<tr><td colspan=2></td><td>Action</td><td> <a href='${FRONTEND_URL}/cpa_ff_information' class="btn btn-sm btn-success" > CPA(Full-Fledged) Renew Form</a></td></tr>`);
                            // $('.papp_btn').append(`<tr><td colspan=2></td><td>Action</td><td> <a href='${FRONTEND_URL}/student_papp_information' class="btn btn-sm btn-success" > PAPP Form</a></td></tr>`);
                        }
                        // else if ((now.getFullYear() == y && (now.getMonth() + 1) == month) || now.getFullYear() > year){
                        //     $('.status').append(`<tr><td colspan=2></td><td>Action</td></tr>`);
                        //     $('.papp_btn').append(`<tr><td colspan=2></td><td>Action</td><td> <a href='${FRONTEND_URL}/student_papp_information' class="btn btn-sm btn-success" > PAPP Form</a></td></tr>`);
                        // }
                    } else {
                        $('.status').append(`
                        <tr>
                            <td>CPA(Full-Fledged)</td>
                            <td>${formatDate(cpaff.created_at)}</td>
                            <td>${formatDate(cpaff.updated_at)}</td>
                            <td><span class="badge bg-danger">Reject</span></td>
                        </tr>
                        `);
                    }

                    if (data.papp !== null) {
                        if (data.papp.status == 0) {
                            $('.status').append(`
                            <tr>
                                <td>PAPP  </td>
                                <td>${formatDate(data.papp.created_at)}</td>
                                <td>-</td>
                                <td><span class="badge bg-info text-dark">Checking</span></td>
                            </tr>
                            `);
                            $('.papp_btn').css('display', 'none');
                        } else if (data.papp.status == 1) {
                            $('.status').append(`
                            <tr>
                                <td>PAPP</td>
                                <td>${formatDate(data.papp.created_at)}</td>
                                <td>${formatDate(data.papp.updated_at)}</td>
                                <td><span class="badge bg-success">Approved</span></td>
                            </tr>
                            `);
                            $('.papp_btn').css('display', 'none');
                            // var accept = new Date(cpaff.renew_accepted_date);
                            // var month = accept.getMonth();
                            // var year = accept.getFullYear();
                            // var y = year + 1;
                            // var now = new Date(Date.now());

                            // if (now.getFullYear() == y && now.getMonth() == month) {
                            //     $(".status").append(`<tr>
                            //         <td colspan=3>Your registeration is expired! You need to submit new registeration form again.</td>
                            //         <td> <a href='${FRONTEND_URL}/student_papp' class="btn btn-sm btn-success" > PAPP Fledged Renew Form</a></tr>
                            //     `);
                            // } else if (month == '10' || month == '11' || month == '12') {
                            //     $(".status").append(`<tr><td colspan=4>Your registeration will start in ${y} year!</td></tr>`);
                            // } else {
                            //     // $(".status").append(`<tr><td colspan=4>You are verified!</td></tr>`);
                            //     $(".status").append(`<tr>
                            //         <td colspan=3>Your information will be expired at <b> 31 December ${year} </b></td>
                            //         <td> <a href='${FRONTEND_URL}/student_papp_information' class="btn btn-sm btn-success" > PAPP Fledged Renew Form</a></tr>
                            //     `);
                            // }

                            //new flow
                            var accept = new Date(data.papp.renew_accepted_date);
                            var month = accept.getMonth();
                            var current_month = new Date();

                            // var check_month = current_month.getMonth();
                            var check_month = 10;
                            var year = accept.getFullYear();
                            var y = year + 1;
                            var now = new Date();

                            if (check_month != 10) {
                                $('.status').append(`<tr><td colspan=2></td><td>Action</td><td> <a href='${FRONTEND_URL}/student_papp_information' class="btn btn-sm btn-success" > PAPP Renew Form</a></td></tr>`);
                            } else if (check_month == 10) {
                                $('.status').append(`<tr><td colspan=2></td><td>Action</td><td> <a href='${FRONTEND_URL}/student_papp_information' class="btn btn-sm btn-success" > PAPP Renew Form</a></td></tr>`);
                            }
                        } else {
                            $('.status').append(`
                            <tr>
                                <td>PAPP</td>
                                <td>${formatDate(cpaff.created_at)}</td>
                                <td>${formatDate(cpaff.updated_at)}</td>
                                <td><span class="badge bg-danger">Reject</span></td>
                            </tr>
                            `);
                        }
                    }
                    // $('#next_course').hide();
                } else {
                    $('.current_course').show();
                    $('#next_course').text(next_course);
                    //show status annoumance
                    if (latest_course_reg[0]) {


                        $('#batch_name').text(latest_course_reg[0].batch.name);
                        $('#course_name').text(latest_course_reg[0].batch.course.name);
                        $('.regi_fee_txt').text('Mac Registration Date')
                        $('.self_study').show();
                        $('.private_school').show();
                        $('#registration_date').append(
                            formatDate(latest_course_reg[0].batch.mac_reg_start_date) + " to <br>" +
                            formatDate(latest_course_reg[0].batch.mac_reg_end_date)
                        );
                        $('#selfstudy_date').append(
                            formatDate(latest_course_reg[0].batch.self_reg_start_date) + " to <br>" +
                            formatDate(latest_course_reg[0].batch.self_reg_end_date)
                        );
                        $('#pschool_date').append(
                            formatDate(latest_course_reg[0].batch.private_reg_start_date) + " to <br>" +
                            formatDate(latest_course_reg[0].batch.private_reg_end_date)
                        );

                        // if(latest_course_reg[0].batch.exam_start_date != null){
                        //     $('#exam_date').append(
                        //         formatDate(latest_course_reg[0].batch.exam_start_date) +" to <br>"+
                        //         formatDate(latest_course_reg[0].batch.exam_end_date)

                        //         );
                        // }else{
                        //     $('#exam_date').text("မရှိသေးပါ")
                        // }

                        //show course histroy
                        if (last_exam[0]) {

                            if (last_exam[0].exam_type_id !== 3) {

                                let exam = exam_register.filter(exam => exam.grade == 1 && exam.exam_type_id !== 3)
                                console.log('exam',exam)
                                exam.map(e => {
                                    var module;
                                    if(e.is_full_module==1){
                                        module="Module-1";
                                    }else if(e.is_full_module==2){
                                        module="Module-2";
                                    }else{
                                        module="Full Module";
                                    }
                                    course_html += `<tr>
                                                    <td>${e.course.name}</td>
                                                    <td>${e.batch.name}</td>
                                                    <td>${module}</td>
                                                    <td>${formatDate(e.updated_at)}</td>
                                                </tr>`
                                });
                            }
                        }

                        //check entry exam or direct
                        if (latest_course_reg[0].qt_entry == 1) {
                            if (last_exam[0].status == 0) {
                                $('.status').append(`
                                <tr>
                                    <td>Cpa One Entry Exam Registration Form</td>
                                    <td>${formatDate(last_exam[0].created_at)}</td>
                                    <td>-</td>
                                    <td><span class="badge bg-info text-dark">Checking</span></td>
                                </tr>

                                `);


                            } else if (last_exam[0].status == 1) {
                                if (last_exam[0].grade == 1) {

                                    let study_type = latest_course_reg[0].type === 0 ? 1 : latest_course_reg[0].type === 1 ? 2 : 3;
                                    let study_name = latest_course_reg[0].type === 0 ? "Selfstudy" : latest_course_reg[0].type === 1 ? "Private School" : "Mac";


                                    localStorage.setItem('course_id', last_exam[0].batch.id);


                                    $('.status').append(`
                                    <tr>
                                        <td>Cpa One Entry Exam Registration Form</td>
                                        <td>${formatDate(last_exam[0].created_at)}</td>
                                        <td>${formatDate(last_exam[0].updated_at)}</td>
                                        <td><span class="badge bg-success">Passed</span></td>
                                    </tr>

                                    <tr><td colspan=2></td><td>Action</td><td>
                                    <a href="${FRONTEND_URL}/cpa_one_register?study_type=${study_type}" class="btn btn-sm btn-success">CPA One ${study_name} Registration Form</a>


                                     </td></tr>
                                    `);
                                } else {
                                    $('.status').append(`
                                    <tr>
                                        <td>Cpa One Entry Exam Registration Form</td>
                                        <td>${formatDate(last_exam[0].created_at)}</td>
                                        <td>${formatDate(last_exam[0].updated_at)}</td>
                                        <td><span class="badge bg-success">Approved</span></td>
                                    </tr>
                                    `);

                                }



                            } else {
                                $('.status').append(`
                                <tr>
                                    <td>Cpa One Entry Exam Registration Form</td>
                                    <td>${formatDate(last_exam[0].created_at)}</td>
                                    <td>${formatDate(last_exam[0].updated_at)}</td>
                                    <td><span class="badge bg-danger">Reject</span></td>
                                </tr>
                                `);

                            }

                        } else {
                            let status_course;
                            // let std_id = latest_course_reg[0].student_info_id;
                            // let course_id = latest_course_reg[0].batch.course_id;
                            localStorage.setItem("courseId", latest_course_reg[0].batch.course_id);
                            $('.course').html(course_html)


                            if (latest_course_reg[0].approve_reject_status == 0) {
                                $('.status').append(`
                                <tr>
                                    <td>${latest_course_reg[0].batch.course.name} Application Form</td>
                                    <td>${formatDate(latest_course_reg[0].created_at)}</td>
                                    <td>-</td>
                                    <td><span class="badge bg-info text-dark">Checking</span></td>
                                </tr>
                                `);
                                // $('.status').append(`
                                // <tr>
                                //     <td>${latest_course_reg[0].batch.course.name} Application Form</td>
                                //     <td>${formatDate(latest_course_reg[0].created_at)}</td>
                                //     <td>-</td>
                                //     <td>
                                //         <a href="/payment_method/${data.id}" class="btn btn-info">Payment</a>
                                //     </td>
                                // </tr>
                                // `);

                            } else if (latest_course_reg[0].approve_reject_status == 1) {
                                let std_id = latest_course_reg[0].student_info_id;
                                // $('.status').append(`
                                // <tr>
                                //     <td>${latest_course_reg[0].batch.course.name} Application Form</td>
                                //     <td>${formatDate(latest_course_reg[0].created_at)}</td>
                                //     <td>${formatDate(latest_course_reg[0].updated_at)}</td>
                                //     <td><span class="badge bg-success">Approved</span></td>
                                // </tr>
                                // `);
                                $('.status').append(`
                                <tr>
                                    <td>${latest_course_reg[0].batch.course.name} Application Form</td>
                                    <td>${formatDate(latest_course_reg[0].created_at)}</td>
                                    <td>${formatDate(latest_course_reg[0].updated_at)}</td>
                                    <td> <a href='${FRONTEND_URL}/payment_method/${std_id}' class="btn btn-sm btn btn-info" > Payment</a></td>
                                </tr>
                                `);
                                // $('.status').append(`<p >Your ${latest_course_reg[0].batch.course.name}  Your Application Form is approved  on the   .</p>`)
                                //show data depend on Student Register status


                                if (latest_stu_reg[0] && latest_course_reg[0].batch.course.code == latest_stu_reg[0].course.code) {
                                    $('.regi_fee_txt').text('Exam Registration Date')
                                    $('.self_study').hide();
                                    $('.private_school').hide();

                                    $('#registration_fee').append(
                                        formatDate(latest_course_reg[0].batch.exam_start_date) + " to <br>" +
                                        formatDate(latest_course_reg[0].batch.exam_end_date)
                                    );
                                    if (latest_stu_reg[0].status == 0 || latest_stu_reg[0] == null) {
                                        $('.status').append(`
                                                <tr>
                                                    <td>${latest_course_reg[0].batch.course.name} Registraion Form</td>
                                                    <td>${formatDate(latest_stu_reg[0].created_at)}</td>
                                                    <td>-</td>
                                                    <td><span class="badge bg-info text-dark">Checking</span></td>
                                                </tr>
                                                `);
                                        // $('.status').append('<p>Your Registration Form is checking.</p>')

                                    } else if (latest_stu_reg[0].status == 1) {

                                        // $('.status').append(`<p>Your Registration Form is Approved  on the  ${formatDate(latest_course_reg[0].updated_at)}.</p>`)
                                        $('.status').append(`
                                        <tr>
                                            <td>${latest_course_reg[0].batch.course.name} Registration Form</td>
                                            <td>${formatDate(latest_stu_reg[0].created_at)}</td>
                                            <td>${formatDate(latest_stu_reg[0].updated_at)}</td>
                                            <td><span class="badge bg-success">Approved</span></td>
                                        </tr>
                                        `);
                                        var module = [];


                                        exam_register.filter(exam => {
                                            if (exam.course.id == latest_course_reg[0].batch.course.id && exam.exam_type_id != 3) {
                                                module.push(exam.is_full_module)
                                            }
                                        })

                                        var data_exam = {};

                                        if (last_exam[0] && module.length !== 0) {

                                            if (
                                                (last_exam[0].course.code == latest_course_reg[0].batch.course.code) &&
                                                (last_exam[0].exam_type_id !== 3 && (last_exam[0].is_full_module == 3 || containsAll([1, 2], module) == true))
                                            ) {

                                                if (last_exam[0].status == 0) {

                                                    $('.status').append(`
                                                                    <tr>
                                                                        <td>${latest_course_reg[0].batch.course.name} Exam Form</td>
                                                                        <td>${formatDate(last_exam[0].created_at)}</td>
                                                                        <td>-</td>
                                                                        <td><span class="badge bg-info text-dark">Checking</span></td>
                                                                    </tr>
                                                                    `);

                                                } else if (last_exam[0].status == 1) {
                                                    $('.status').append(`
                                                    <tr>
                                                        <td>${latest_course_reg[0].batch.course.name} Exam Form</td>
                                                        <td>${formatDate(last_exam[0].created_at)}</td>
                                                        <td>${formatDate(last_exam[0].updated_at)}</td>
                                                        <td><span class="badge bg-success">Approved</span></td>
                                                    </tr>
                                                    `);
                                                    if (last_exam[0].grade == 1) {

                                                        $('.regi_fee_txt').text('Application Form Fees')
                                                        $('#batch_name').text('-');
                                                        $('#course_name').text('-');
                                                        $('#exam_date').text('-');


                                                        // $('.status').append(`<p>You have been pass ${last_exam[0].course.name} </p>`)
                                                        $('.status').append(`
                                                            <tr>
                                                                <td>${latest_course_reg[0].batch.course.name} Exam Result</td>
                                                                <td>${formatDate(last_exam[0].created_at)}</td>
                                                                <td>${formatDate(last_exam[0].updated_at)}</td>
                                                                <td><span class="badge bg-success">Passed</span></td>
                                                            </tr>
                                                            `);

                                                        let course_code;
                                                        let form_url;
                                                        let show_text;

                                                        //Check moudule for next course
                                                        if (last_exam[0].is_full_module == 3 || containsAll([1, 2], module) == true) {


                                                            switch (last_exam[0].course.code) {
                                                                case 'da_1':
                                                                    course_code = "da_2",
                                                                        form_url = '/da_two_register/',
                                                                        show_text = "Registration Form"

                                                                    break;
                                                                case 'da_2':
                                                                    course_code = "cpa_1",
                                                                        form_url = '/cpa_one_form/',
                                                                        show_text = "Application form"
                                                                    break;
                                                                case 'cpa_1':
                                                                    course_code = "cpa_2",
                                                                        form_url = '/cpa_two_register/',
                                                                        show_text = "Registration Form"

                                                                    break;
                                                                case 'cpa_2':
                                                                    course_code = "Membership"
                                                                    // form_url = "/cpa_ff_register"
                                                                    form_url = "/cpa_ff_information"
                                                                    break;
                                                                default:
                                                                    course_code = "da_1",
                                                                        form_url = '/da_one_form/'

                                                                    break;

                                                            }
                                                            localStorage.setItem('exam_grade', last_exam[0].grade)


                                                            get_course_by_code(course_code).then(data => {



                                                                // let batch = data.data[0].active_batch[0];


                                                                if (Object.keys(data.data).length === 0) {


                                                                    $('.status').append(`<tr> <td colspan=2 ></td ><td>Action</td><td> <a href='${FRONTEND_URL}${form_url}' class="btn btn-sm btn-success" > CPA(Full-Fledged) Form</a></td></tr > `);


                                                                    // $('.status').append(`< tr > <td colspan=2 ></td ><td>Action</td><td> <a href='${FRONTEND_URL}/student_papp_information' class="btn btn-sm btn-success" > PAPP Form</a></td></tr > `);


                                                                } else {
                                                                    if (data) {


                                                                        $('#registration_fee').text(data.data[0].active_batch[0].course.form_fee)


                                                                        let batch = data.data[0].active_batch[0];


                                                                        if (batch != undefined) {

                                                                            localStorage.setItem('course_id', batch.course.id);
                                                                            localStorage.setItem('batch_id', batch.id);
                                                                            if (last_exam[0].course.code == "da_1" || last_exam[0].course.code == "cpa_1") {
                                                                                let study_type = latest_course_reg[0].type === 0 ? 1 : latest_course_reg[0].type === 1 ? 2 : 3;
                                                                                let study_name = latest_course_reg[0].type === 0 ? "Selfstudy" : latest_course_reg[0].type === 1 ? "Private School" : "Mac";

                                                                                $('.status').append(`
                                                                                    <tr> <td colspan=2 ></td ><td>Action</td>
                                                                                        <td>
                                                                                        <span class="nav-item dropdown ">
                                                                                            <a href="#" class="nav-link dropdown-toggle bg-success text-white" data-toggle="dropdown">Registration for<br> ${batch.course.name}</a>
                                                                                            <div class="dropdown-menu">
                                                                                                <a href="${FRONTEND_URL + form_url}${batch.id}?study_type=3" class="dropdown-item">Mac</a>
                                                                                                <a href="${FRONTEND_URL + form_url}${batch.id}?study_type=1" class="dropdown-item">Selfstudy</a>
                                                                                                <a href="${FRONTEND_URL + form_url}${batch.id}?study_type=2" class="dropdown-item">Private School</a>
                                                                                            </div>
                                                                                        </span>

                                                                                        </td>
                                                                                    </td>
                                                                                </tr>

                                                                            `);
                                                                            } else {

                                                                                $('.status').append(`<tr> <td colspan=2 ></td ><td>Action</td><td><a href='${FRONTEND_URL}${form_url}${batch.id}' class="btn btn-sm btn-success" > ${data.data[0].name} ${show_text}</a></td></tr > `);
                                                                            }


                                                                        } else {
                                                                            $('.status').append(`<tr> <td colspan=2 ></td ><td>Action</td><td></td><a href='javascript:void(0)' onclick='alert("The class is not currently ‌available")"> Course</a></td></tr>`);
                                                                        }


                                                                    }
                                                                }
                                                            })
                                                        } else {

                                                            get_course_by_code(latest_course_reg[0].batch.course.code).then(data => {

                                                                var next_batch = data.data[0].active_batch.length === 0 ? null : data.data[0].active_batch;

                                                                if (next_batch !== null) {


                                                                    $('.regi_fee_txt').text('Mac Registration Date')
                                                                    $('.self_study').show();
                                                                    $('.private_school').show();
                                                                    $('#registration_date').append(
                                                                        formatDate(next_batch[0].mac_reg_start_date) + " to <br>" +
                                                                        formatDate(next_batch[0].mac_reg_end_date)
                                                                    );
                                                                    $('#selfstudy_date').append(
                                                                        formatDate(next_batch[0].self_reg_start_date) + " to <br>" +
                                                                        formatDate(next_batch[0].self_reg_end_date)
                                                                    );
                                                                    $('#pschool_date').append(
                                                                        formatDate(next_batch[0].private_reg_start_date) + " to <br>" +
                                                                        formatDate(next_batch[0].private_reg_end_date)
                                                                    );
                                                                    $('#batch_name').text(next_batch[0].name);
                                                                    $('#course_name').text('-');
                                                                    $('#exam_date').text('-');


                                                                    switch (next_batch[0].course.code) {
                                                                        case 'da_1':
                                                                            register_url = '/da_one_register';
                                                                            break;
                                                                        case 'da_2':
                                                                            register_url = `/da_two_register/${next_batch[0].id}`;
                                                                            break;
                                                                        case 'cpa_1':
                                                                            register_url = '/cpa_one_register';
                                                                            break;
                                                                        case 'cpa_2':
                                                                            register_url = `/cpa_two_register/${next_batch[0].id}`;
                                                                            break;
                                                                        default:
                                                                            register_url = '/da_one_register';
                                                                            break;


                                                                    }

                                                                    localStorage.setItem('course_id', next_batch[0].course.id);
                                                                    localStorage.setItem('batch_id', next_batch[0].id);

                                                                    let action_url;

                                                                    let study_type = latest_course_reg[0].type === 0 ? 1 : latest_course_reg[0].type === 1 ? 2 : 3;

                                                                    let study_name = latest_course_reg[0].type === 0 ? "Selfstudy" : latest_course_reg[0].type === 1 ? "Private School" : "Mac";

                                                                    $('.status').append(`
                                                                        <tr><td colspan=2></td><td>Action</td>
                                                                            <td>
                                                                                <a href="${FRONTEND_URL + register_url}?study_type=${study_type}" class="btn-sm btn btn-success">${study_name} Registration for ${next_batch[0].course.name} </a>
                                                                            <td>
                                                                        </td>
                                                                        </tr>
                                                                    `);
                                                                } else {
                                                                    $('.status').append(`
                                                                    <tr><td colspan=2></td><td>Action</td>
                                                                        <td>
                                                                            <a href="javascript:void(0)" class="btn-sm btn btn-success">Coming Soon</a>
                                                                        <td>
                                                                    </td>
                                                                    </tr>`)

                                                                }

                                                            })

                                                        }
                                                    } else if (last_exam[0].grade == 2) {
                                                        $('.status').append(`
                                                                        <tr>
                                                            <td>${latest_course_reg[0].batch.course.name} Exam Result</td>
                                                            <td>${formatDate(last_exam[0].created_at)}</td>
                                                            <td>${formatDate(last_exam[0].updated_at)}</td>
                                                            <td><span class="badge bg-warning">Failed</span></td>
                                                        </tr >
                                                    `);

                                                    } else {
                                                        $('.status').append(`
                                                                        <tr>
                                                            <td>${latest_course_reg[0].batch.course.name} Exam Result</td>
                                                            <td>${formatDate(last_exam[0].created_at)}</td>
                                                            <td>-</td>
                                                            <td><span class="badge bg-info text-dark">Checking</span></td>
                                                        </tr >
                                                    `);

                                                    }

                                                } else {
                                                    $('.status').append(`
                                                    <tr>
                                                        <td>${latest_course_reg[0].batch.course.name} Registration Form</td>
                                                        <td>${formatDate(last_exam[0].created_at)}</td>
                                                        <td>${formatDate(last_exam[0].updated_at)}</td>
                                                        <td><span class="badge bg-danger">Reject</span></td>
                                                    </tr >
                                                                        `);

                                                }
                                            } else if ((JSON.stringify([1]) === JSON.stringify(module) || JSON.stringify([2]) && JSON.stringify(module)) && (last_exam[0].batch_id === latest_course_reg[0].batch.id)) {

                                                if (last_exam[0].status == 0) {

                                                    $('.status').append(`
                                                                    <tr>
                                                                        <td>${latest_course_reg[0].batch.course.name} Exam Form</td>
                                                                        <td>${formatDate(last_exam[0].created_at)}</td>
                                                                        <td>-</td>
                                                                        <td><span class="badge bg-info text-dark">Checking</span></td>
                                                                    </tr>
                                                                    `);

                                                } else if (last_exam[0].status == 1) {
                                                    $('.status').append(`
                                                    <tr>
                                                        <td>${latest_course_reg[0].batch.course.name} Exam Form</td>
                                                        <td>${formatDate(last_exam[0].created_at)}</td>
                                                        <td>${formatDate(last_exam[0].updated_at)}</td>
                                                        <td><span class="badge bg-success">Approved</span></td>
                                                    </tr>
                                                    `);
                                                    if (last_exam[0].grade == 1) {

                                                        $('.regi_fee_txt').text('Application Form Fees')
                                                        $('#batch_name').text('-');
                                                        $('#course_name').text('-');
                                                        $('#exam_date').text('-');


                                                        // $('.status').append(`<p>You have been pass ${last_exam[0].course.name} </p>`)
                                                        $('.status').append(`
                                                            <tr>
                                                                <td>${latest_course_reg[0].batch.course.name} Exam Result</td>
                                                                <td>${formatDate(last_exam[0].created_at)}</td>
                                                                <td>${formatDate(last_exam[0].updated_at)}</td>
                                                                <td><span class="badge bg-success">Passed</span></td>
                                                            </tr>
                                                            `);

                                                        let course_code;
                                                        let form_url;
                                                        let show_text;
                                                        //Check moudule for next course
                                                        if (last_exam[0].is_full_module == 3 || containsAll([1, 2], module) == true) {



                                                            switch (last_exam[0].course.code) {
                                                                case 'da_1':
                                                                    course_code = "da_2",
                                                                        form_url = '/da_two_register/',
                                                                        show_text = "Registration Form"

                                                                    break;
                                                                case 'da_2':
                                                                    course_code = "cpa_1",
                                                                        form_url = '/cpa_one_form/',
                                                                        show_text = "Application form"
                                                                    break;
                                                                case 'cpa_1':
                                                                    course_code = "cpa_2",
                                                                        form_url = '/cpa_two_register/',
                                                                        show_text = "Registration Form"

                                                                    break;
                                                                case 'cpa_2':
                                                                    course_code = "Membership"
                                                                    // form_url = "/cpa_ff_register"
                                                                    form_url = "/cpa_ff_information"
                                                                    break;
                                                                default:
                                                                    course_code = "da_1",
                                                                        form_url = '/da_one_form/'

                                                                    break;

                                                            }
                                                            localStorage.setItem('exam_grade', last_exam[0].grade)


                                                            get_course_by_code(course_code).then(data => {



                                                                // let batch = data.data[0].active_batch[0];


                                                                if (Object.keys(data.data).length === 0) {


                                                                    $('.status').append(`<tr> <td colspan=2 ></td ><td>Action</td><td> <a href='${FRONTEND_URL}${form_url}' class="btn btn-sm btn-success" > CPA(Full-Fledged) Form</a></td></tr > `);


                                                                    // $('.status').append(`< tr > <td colspan=2 ></td ><td>Action</td><td> <a href='${FRONTEND_URL}/student_papp_information' class="btn btn-sm btn-success" > PAPP Form</a></td></tr > `);


                                                                } else {
                                                                    if (data) {


                                                                        $('#registration_fee').text(data.data[0].active_batch[0].course.form_fee)


                                                                        let batch = data.data[0].active_batch[0];


                                                                        if (batch != undefined) {

                                                                            localStorage.setItem('course_id', batch.course.id);
                                                                            if (last_exam[0].course.code == "da_1" || last_exam[0].course.code == "cpa_1") {
                                                                                let study_type = latest_course_reg[0].type === 0 ? 1 : latest_course_reg[0].type === 1 ? 2 : 3;
                                                                                let study_name = latest_course_reg[0].type === 0 ? "Selfstudy" : latest_course_reg[0].type === 1 ? "Private School" : "Mac";

                                                                                $('.status').append(`
                                                                                    <tr> <td colspan=2 ></td ><td>Action</td>
                                                                                        <td>



                                                                                            <a href="${FRONTEND_URL + form_url}${batch.id}?study_type=${study_type}" class="btn btn-sm btn-success">${study_name} Registration</a>


                                                                                        <td>
                                                                                    </td>
                                                                                </tr>

                                                                            `);
                                                                            } else {

                                                                                $('.status').append(`<tr> <td colspan=2 ></td ><td>Action</td><td><a href='${FRONTEND_URL}${form_url}${batch.id}' class="btn btn-sm btn-success" > ${data.data[0].name} ${show_text}</a></td></tr > `);
                                                                            }


                                                                        } else {
                                                                            $('.status').append(`<tr> <td colspan=2 ></td ><td>Action</td><td></td><a href='javascript:void(0)' onclick='alert("The class is not currently ‌available")"> Course</a></td></tr>`);
                                                                        }


                                                                    }
                                                                }
                                                            })
                                                        } else {
                                                            get_course_by_code(latest_course_reg[0].batch.course.code).then(data => {

                                                                var next_batch = data.data[0].active_batch.length === 0 ? null : data.data[0].active_batch;

                                                                if (next_batch !== null) {

                                                                    $('#course_name').text(next_batch[0].course.name)

                                                                    $('.regi_fee_txt').text('Mac Registration Date')
                                                                    $('.self_study').show();
                                                                    $('.private_school').show();
                                                                    $('#registration_date').append(
                                                                        formatDate(next_batch[0].mac_reg_start_date) + " to <br>" +
                                                                        formatDate(next_batch[0].mac_reg_end_date)
                                                                    );
                                                                    $('#selfstudy_date').append(
                                                                        formatDate(next_batch[0].self_reg_start_date) + " to <br>" +
                                                                        formatDate(next_batch[0].self_reg_end_date)
                                                                    );
                                                                    $('#pschool_date').append(
                                                                        formatDate(next_batch[0].private_reg_start_date) + " to <br>" +
                                                                        formatDate(next_batch[0].private_reg_end_date)
                                                                    );
                                                                    $('#batch_name').text(next_batch[0].name);

                                                                    $('#exam_date').text('-');


                                                                    switch (next_batch[0].course.code) {
                                                                        case 'da_1':
                                                                            register_url = '/da_one_register';
                                                                            break;
                                                                        case 'da_2':
                                                                            register_url = `/da_two_register/${next_batch[0].id}`;
                                                                            break;
                                                                        case 'cpa_1':
                                                                            register_url = '/cpa_one_register';
                                                                            break;
                                                                        case 'cpa_2':
                                                                            register_url = `/cpa_two_register/${next_batch[0].id}`;
                                                                            break;
                                                                        default:
                                                                            register_url = '/da_one_register';
                                                                            break;


                                                                    }

                                                                    localStorage.setItem('course_id', next_batch[0].course.id);
                                                                    localStorage.setItem('batch_id', next_batch[0].id);

                                                                    let action_url;

                                                                    let study_type = latest_course_reg[0].type === 0 ? 1 : latest_course_reg[0].type === 1 ? 2 : 3;

                                                                    let study_name = latest_course_reg[0].type === 0 ? "Selfstudy" : latest_course_reg[0].type === 1 ? "Private School" : "Mac";
                                                                    // <a href="${FRONTEND_URL + register_url}?study_type=${study_type}" class="btn-sm btn btn-success">${study_name} Registration for ${next_batch[0].course.name} </a>

                                                                    $('.status').append(`
                                                                        <tr><td colspan=2></td><td>Action</td>
                                                                            <td>
                                                                                <span class="nav-item dropdown ">
                                                                                    <a href="#" class="nav-link dropdown-toggle bg-success text-white" data-toggle="dropdown">Registration for<br> ${next_batch[0].course.name}</a>
                                                                                    <div class="dropdown-menu">
                                                                                        <a href="${FRONTEND_URL + register_url}?study_type=3" class="dropdown-item">Mac</a>
                                                                                        <a href="${FRONTEND_URL + register_url}?study_type=1" class="dropdown-item">Selfstudy</a>
                                                                                        <a href="${FRONTEND_URL + register_url}?study_type=2" class="dropdown-item">Private School</a>
                                                                                    </div>
                                                                                </span>
                                                                            <td>
                                                                        </td>
                                                                        </tr>
                                                                    `);
                                                                } else {
                                                                    $('.status').append(`
                                                                    <tr><td colspan=2></td><td>Action</td>
                                                                        <td>
                                                                            <a href="javascript:void(0)" class="btn-sm btn btn-success">Coming Soon</a>
                                                                        <td>
                                                                    </td>
                                                                    </tr>`)

                                                                }

                                                            })

                                                        }
                                                    } else if (last_exam[0].grade == 2) {
                                                        $('.status').append(`
                                                                        <tr>
                                                            <td>${latest_course_reg[0].batch.course.name} Exam Result</td>
                                                            <td>${formatDate(last_exam[0].created_at)}</td>
                                                            <td>${formatDate(last_exam[0].updated_at)}</td>
                                                            <td><span class="badge bg-warning">Approved</span></td>
                                                        </tr >
                                                    `);

                                                    } else {
                                                        $('.status').append(`
                                                                        <tr>
                                                            <td>${latest_course_reg[0].batch.course.name} Exam Result</td>
                                                            <td>${formatDate(last_exam[0].created_at)}</td>
                                                            <td>-</td>
                                                            <td><span class="badge bg-info text-dark">Checking</span></td>
                                                        </tr >
                                                    `);

                                                    }

                                                } else {
                                                    $('.status').append(`
                                                    <tr>
                                                        <td>${latest_course_reg[0].batch.course.name} Registration Form</td>
                                                        <td>${formatDate(last_exam[0].created_at)}</td>
                                                        <td>${formatDate(last_exam[0].updated_at)}</td>
                                                        <td><span class="badge bg-danger">Reject</span></td>
                                                    </tr >
                                                                        `);

                                                }

                                            }

                                            else {
                                                // $('.status').append(`
                                                // <tr>
                                                //     <td>${latest_course_reg[0].batch.course.name} Registration Form</td>
                                                //     <td>${formatDate(latest_stu_reg[0].created_at)}</td>
                                                //     <td>${formatDate(latest_stu_reg[0].updated_at)}</td>
                                                //     <td>Approve</td>
                                                // </tr>
                                                // `);


                                                var date = new Date();
                                                var current_month = date.getMonth();

                                                let previous_month = current_month - 1;
                                                var end_date = new Date(latest_course_reg[0].batch.exam_start_date).getMonth();


                                                if (previous_month <= current_month && end_date >= current_month) {

                                                    let exam_url;
                                                    let exam_text = " Exam Registration Form";
                                                    switch (latest_course_reg[0].batch.course.code) {
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

                                                    localStorage.setItem('course_id', latest_course_reg[0].batch.course.id);
                                                    $('.status').append(`<tr> <td colspan=2 ></td><td>Action</td>
                                                        <td>
                                                            <a href="${FRONTEND_URL}${exam_url}" class="btn btn-sm btn-success text-light"> ${exam_text}</a>
                                                        </td>
                                                    </tr>

                                                    `);

                                                } else {
                                                    $('.status').append(`
                                                    <tr>
                                                    <td colspan=2 ></td ><td>Action</td>
                                                        <td>
                                                        <p>The exam schedule will be announced soon</p>
                                                        </td>
                                                    </tr>
                                                    `);
                                                }


                                            }
                                        } else {
                                            // $('.status').append(`
                                            // <tr>
                                            //     <td>${latest_course_reg[0].batch.course.name} Registration Form</td>
                                            //     <td>${formatDate(latest_stu_reg[0].created_at)}</td>
                                            //     <td>${formatDate(latest_stu_reg[0].updated_at)}</td>
                                            //     <td>Approve</td>
                                            // </tr>
                                            // `);


                                            var date = new Date();
                                            var current_month = date.getMonth();

                                            let previous_month = current_month - 1;
                                            var end_date = new Date(latest_course_reg[0].batch.exam_start_date).getMonth();


                                            if (previous_month <= current_month && end_date >= current_month) {

                                                let exam_url;
                                                let exam_text = " Exam Registration Form";
                                                switch (latest_course_reg[0].batch.course.code) {
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

                                                localStorage.setItem('course_id', latest_course_reg[0].batch.course.id);
                                                $('.status').append(`<tr> <td colspan=2 ></td><td>Action</td>
                                                    <td>
                                                        <a href="${FRONTEND_URL}${exam_url}" class="btn btn-sm btn-success text-light"> ${exam_text}</a>
                                                    </td>
                                                </tr>

                                                `);

                                            } else {
                                                $('.status').append(`
                                                <tr>
                                                <td colspan=2 ></td ><td>Action</td>
                                                    <td>
                                                    <p>The exam schedule will be announced soon</p>
                                                    </td>
                                                </tr>
                                                `);
                                            }


                                        }
                                    } else {
                                        // $('.status').append('<P>Your Registration Form is checking</P>')
                                        $('.status').append(`
                                        <tr>
                                            <td>${latest_course_reg[0].batch.course.name} Exam Form</td>
                                            <td>${formatDate(latest_stu_reg[0].created_at)}</td>
                                            <td>${formatDate(latest_stu_reg[0].updated_at)}</td>
                                            <td><span class="badge bg-danger">Reject</span></td>
                                        </tr >
                                                                    `);
                                    }

                                } else {


                                    switch (latest_course_reg[0].batch.course.code) {
                                        case 'da_1':
                                            register_url = '/da_one_register';
                                            break;
                                        case 'da_2':
                                            register_url = `/da_two_register/${latest_stu_reg[0].batch.course.id}`;
                                            break;
                                        case 'cpa_1':
                                            register_url = '/cpa_one_register';
                                            break;
                                        case 'cpa_2':
                                            register_url = `/cpa_two_register/${latest_stu_reg[0].batch.course.id}`;
                                            break
                                        default:
                                            register_url = '/da_one_register';
                                            break;


                                    }
                                    localStorage.setItem('course_id', latest_course_reg[0].batch.course.id);

                                    let action_url;

                                    let study_type = latest_course_reg[0].type === 0 ? 1 : latest_course_reg[0].type === 1 ? 2 : 3;

                                    let study_name = latest_course_reg[0].type === 0 ? "Selfstudy" : latest_course_reg[0].type === 1 ? "Private School" : "Mac";

                                    $('.status').append(`
                                        <tr>
                                            <td colspan=2 ></td ><td>Action</td>
                                            <td>
                                                <a href="${FRONTEND_URL + register_url}?study_type=${study_type}" class="btn-sm btn btn-success">${study_name} Registration</a>

                                            </td>
                                        </tr>
                                    `);
                                }

                            } else {
                                let update_app_url = latest_course_reg[0].batch.course.code == "da_1" ? '/da_edit' : '/cpa_edit';

                                $('.status').append(`
                                <tr>
                                    <td>${latest_course_reg[0].batch.course.name}</td>
                                    <td>${formatDate(latest_course_reg[0].created_at)}</td>
                                    <td>${formatDate(latest_course_reg[0].updated_at)}</td>
                                    <td><span class="badge bg-danger">Reject</span></td>
                                </tr >
                                <tr>
                                <td>မှတ်ချက် - </td>
                                <td colspan=2>${latest_course_reg[0].remark}</td><td>
                                <a href="${FRONTEND_URL + update_app_url}" class="btn btn-sm btn-success">Update Application Form</a>


                             </td></tr>
                                                                    `);
                                // $('.status').append('Your Application Form is Reject')
                            }
                        }
                    }
                }

                //show History of Student record
                $.each(data.student_course_regs, function (i, current_class) {
                    let student_reg_length = cpaff === null ? data.student_course_regs.length - 1
                        : data.student_course_regs.length;


                    if (i < student_reg_length && current_class.qt_entry == 0) {


                        // $('.status_history').append(`< h6 class=" text-center"">${current_class.batch.course.name}</h6><hr>`);
                        if (current_class.approve_reject_status == 0) {
                            $('.status_history').append(`<tr>
                                <td>${current_class.batch.course.name} Application Form</td>
                                <td>${formatDate(current_class.created_at)}</td>
                                <td>-</td>
                                <td><span class="badge bg-info text-dark">Checking</span></td>
                            </tr>
                            `);
                        } else if (current_class.approve_reject_status == 1) {
                            $('.status_history').append(`<tr>
                                <td>${current_class.batch.course.name} Application Form</td>
                                <td>${formatDate(current_class.created_at)}</td>
                                <td>${formatDate(current_class.updated_at)}</td>
                                <td><span class="badge bg-success">Approved</span></td>
                            </tr>
                            `);
                            //show data depend on Student Register status
                            if (data.student_register[i]) {
                                if (data.student_register[i].status == 0 || data.student_register[i] == null) {
                                    // $('.status_history').append('<p>Your Registration Form is checking.</p>')
                                    $('.status_history').append(`<tr>
                                        <td>${current_class.batch.course.name} Registration Form</td>
                                        <td>${formatDate(data.student_register[i].created_at)}</td>
                                        <td>-</td>
                                        <td><span class="badge bg-info text-dark">Checking</span></td>
                                    </tr>
                                    `);
                                } else if (data.student_register[i].status == 1) {
                                    // $('.status_history').append(`<p>Your Registration Form is Approved  on the  ${formatDate(current_class.updated_at)}.</p>`)
                                    $('.status_history').append(`<tr>
                                        <td>${current_class.batch.course.name} Registration Form</td>
                                        <td>${formatDate(data.student_register[i].created_at)}</td>
                                        <td>${formatDate(data.student_register[i].updated_at)}</td>
                                        <td><span class="badge bg-success">Approved</span></td>
                                    </tr>
                                    `);
                                    if (data.exam_registers[i]) {
                                        if (data.exam_registers[i].status == 0) {
                                            // $('.status_history').append('<p>Your Exam Form is checking.</p>')
                                            $('.status_history').append(`<tr>
                                                <td>${current_class.batch.course.name} Exam Form</td>
                                                <td>${formatDate(data.exam_registers[i].created_at)}</td>
                                                <td>-</td>
                                                <td><span class="badge bg-info text-dark">Checking</span></td>
                                            </tr>
                                        `);
                                        } else if (data.exam_registers[i].status == 1) {
                                            // $('.status_history').append(`<p>Your Exam Form is Approved  on the  ${formatDate(current_class.updated_at)}.</p>`)
                                            if (data.exam_registers[i].grade == 1) {
                                                // $('.status_history').append(`<p>You have been pass ${data.exam_registers[i].course.name} </p>`)
                                                $('.status_history').append(`<tr>
                                                <td>${current_class.batch.course.name} Exam Form</td>
                                                <td>${formatDate(data.exam_registers[i].created_at)}</td>
                                                <td>${formatDate(data.exam_registers[i].updated_at)}</td>
                                                <td><span class="badge bg-success">Approved</span></td>
                                            </tr>
                                            `);
                                            } else {
                                                $('.status_history').append(`<tr>
                                                <td>${current_class.batch.course.name} Exam Form</td>
                                                <td>${formatDate(data.exam_registers[i].created_at)}</td>
                                                <td>${formatDate(data.exam_registers[i].updated_at)}</td>
                                                <td><span class="badge bg-success">Approved</span></td>
                                            </tr>
                                            `);
                                            }
                                        } else {
                                            // $('.status_history').append('<p>Your Exam Form is checking</p>')
                                            $('.status_history').append(`<tr>
                                                <td>${current_class.batch.course.name} Exam Form</td>
                                                <td>${formatDate(data.exam_registers[i].created_at)}</td>
                                                <td>-</td>
                                                <td><span class="badge bg-success">Approved</span></td>
                                            </tr>
                                            `);
                                        }
                                    } else {
                                        var date = new Date();
                                        let previous_month = date.setDate(date.getDate() - 6);
                                        var end_date = new Date(current_class.batch.exam_start_date);
                                        if (previous_month <= date && end_date >= date) {
                                            let exam_url;
                                            let exam_text = " Exam Registration Form";
                                            switch (current_class.batch.course.code) {
                                                case 'da_1':
                                                    exam_url = '/exam_register';
                                                    break;
                                                case 'da_2':
                                                    exam_url = '/da_two_exam_register';
                                                    break;
                                                case 'cpa_1':
                                                    if (data.student_register[i].mentor_id === null) {
                                                        if (data.student_register[i].type == 0) {
                                                            exam_url = "/aa_self_form/" + student_id
                                                            exam_text = "AA Register Form(Self Study)"
                                                        } else if (data.student_register[i].type == 1) {
                                                            exam_url = "/aa_private_form/" + student_id
                                                            exam_text = "AA Register Form(Private)"
                                                        } else {
                                                            exam_url = "/aa_mac_form/" + student_id
                                                            exam_text = "AA Register Form(MAC)"
                                                        }
                                                    } else {
                                                        exam_url = '/cpa_exam_register';
                                                    }
                                                    break;
                                                case 'cpa_2':
                                                    exam_url = '/cpa_two_exam_register';
                                                    break;
                                                default:
                                                    exam_url = '/exam_register';
                                                    break;
                                            }
                                            // $('.status_history').append(
                                            // `
                                            //     <a href="${FRONTEND_URL}${exam_url}" class="btn btn-sm btn-success text-light"> ${exam_text}</a>
                                            // `)
                                        } else {
                                            // $('.status_history').append(`<div>
                                            //     <p>The exam schedule will be announced soon</p>
                                            // </div>`)
                                        }
                                    }
                                } else {
                                    // $('.status_history').append('<P>Your Registration Form is checking</P>')
                                    $('.status_history').append(`<tr>
                                        <td>${current_class.batch.course.name} Registration Form</td>
                                        <td>${formatDate(current_class.created_at)}</td>
                                        <td>${formatDate(current_class.updated_at)}</td>
                                        <td><span class="badge bg-success">Approved</span></td>
                                    </tr>
                                    `);
                                }
                            } else {
                                switch (current_class.batch.course.code) {
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
                                localStorage.setItem('course_id', current_class.batch.course.id);
                                $('.status_history').append(`<a href="${FRONTEND_URL + register_url}" class="btn btn-sm btn-success"> Registration Form</a>`);
                            }
                        } else {
                            // $('.status_history').append('Your Application Form is Reject')
                            $('.status_history').append(`<tr>
                                <td>${current_class.batch.course.name} Application Form</td>
                                <td>${formatDate(current_class.created_at)}</td>
                                <td>${formatDate(current_class.updated_at)}</td>
                                <td><span class="badge bg-danger">Reject</span></td>
                            </tr>
                            `);
                        }
                    }
                });
                // if(last_exam[0].grade == 1 &&
                //     latest_course_reg[0].approve_reject_status == 1 &&
                //     latest_course_reg[0].batch.course.id == latest_stu_reg[0].form_type &&
                //     latest_course_reg[0].batch.course.id == last_exam[0].course.id &&
                //     latest_stu_reg[0].status == 1 &&
                //     last_exam[0].status == 1 ){
                // }

                // Show Article Status
                if (latest_stu_reg[0]) {
                    if (latest_stu_reg[0].form_type == 3 && latest_stu_reg[0].status == 1 && latest_stu_reg[0].course.code == "cpa_1" || latest_stu_reg[0].course.code == "cpa_2") {
                        let latest_article = data.article.slice(-1);
                        let latest_gov_article = data.gov_article.slice(-1);

                        //doens't have article list
                        if (data.article.length == 0 && data.gov_article.length == 0) {
                            article_url = '/article_information';
                            $('.article_btn').append(`<tr><td colspan=2></td><td>Article Register Form</td><td> <a href='${FRONTEND_URL + article_url}' class="btn btn-md btn-success" > Article Register </a></td></tr>`);
                        }

                        if (data.gov_article.length == 0) {
                            let article = data.article;
                            article.forEach(function (element) {
                                article_form_type = element.article_form_type;

                                switch (article_form_type) {
                                    case 'c12':
                                        form_type = 'CPA I,II';
                                        break;
                                    case 'c2_pass_3yr':
                                        form_type = 'CPA II pass 3 yr';
                                        break;
                                    case 'c2_pass_1yr':
                                        form_type = 'CPA II pass 1 yr';
                                        break;
                                    case 'qt_firm':
                                        form_type = 'QT pass';
                                        break;
                                    default:
                                        form_type = 'Resign';
                                        break;
                                }
                                let contract_start_date = element.contract_start_date === null ? "-" : element.contract_start_date;
                                let contract_end_date = element.contract_end_date === null ? "-" : element.contract_end_date;
                                if (element.status == 0) {
                                    $('.article_status').append(`<tr>
                                    <td>${form_type} Form</td>
                                    <td>${contract_start_date}</td>
                                    <td>${contract_end_date}</td>
                                    <td><span class="badge bg-success">Checking</span></td>
                                </tr>
                                `);
                                } else if (element.status == 1) {
                                    if (element.done_status == 1) {
                                        $('.article_status').append(`<tr>
                                        <td>${form_type} Form</td>
                                        <td>${contract_start_date}</td>
                                        <td>${contract_end_date}</td>
                                        <td><span class="badge bg-success">Done</span></td>
                                    </tr>
                                    `);
                                    } else {
                                        $('.article_status').append(`<tr>
                                        <td>${form_type} Form</td>
                                        <td>${contract_start_date}</td>
                                        <td>${contract_end_date}</td>
                                        <td><span class="badge bg-success">Approved</span></td>
                                    </tr>
                                    `);
                                    }
                                } else if (element.status == 2) {
                                    $('.article_status').append(`<tr>
                                    <td>${form_type} Form</td>
                                    <td>${contract_start_date}</td>
                                    <td>${contract_end_date}</td>
                                    <td><span class="badge bg-success">Reject</span></td>
                                </tr>
                                `);
                                }
                            });

                            if (latest_article[0] != null && latest_article[0].contract_end_date != null) {
                                var end_date = new Date(latest_article[0].contract_end_date);
                                var today = new Date();

                                var end_time = end_date.getTime();
                                var today_time = today.getTime();

                                if (end_time <= today_time && latest_article[0].done_status == 0) {
                                    if (latest_article[0].done_form_attach && latest_article[0].done_status == 0) {
                                        $('.article_btn').append(`<tr><td colspan=2></td><td>Submit Done Form</td><td>Check By MAC</td></tr>`);
                                    } else {
                                        $('.article_btn').append(`<tr><td colspan=2></td><td>Submit Done Form</td><td><div class='row'><div class='col-md-8'><input type='file' class='form-control' name='done_form'></div><div class='col-md-4'><button class='btn btn-primary btn-xs' id='done_form_btn' onclick='saveDoneForm(${latest_article[0].id})'>Submit</button></div></div></td></tr>`);
                                    }
                                } else if (latest_article[0]?.article_form_type != "resign" && latest_article[0].status == 1 && latest_article[0].done_status == 0) {
                                    resign_article_url = '/article_resign_registration';
                                    $('.article_btn').append(`<tr><td colspan=2></td><td>Resign Register</td><td> <a href='${FRONTEND_URL + resign_article_url}' class="btn btn-md btn-success" > Article Resign Register </a></td></tr>`);
                                } else if (latest_article[0].done_status == 1) {
                                    if (latest_stu_reg[0].course.code == "cpa_2" && data.exam_results.length == 4) {
                                        article_url = '/article_information';
                                        $('.article_btn').append(`<tr><td colspan=2></td><td>Article Register Form</td><td> <a href='${FRONTEND_URL + article_url}' class="btn btn-md btn-success" > Article Register </a></td></tr>`);
                                    }
                                }
                            }

                        } else {
                            let gov_article = data.gov_article;
                            let article = data.article;
                            gov_article.forEach(function (element) {
                                let contract_start_date = element.contract_start_date === null ? "-" : element.contract_start_date;
                                let contract_end_date = element.contract_end_date === null ? "-" : element.contract_end_date;
                                form_type = "Government Article";
                                if (element.status == 0) {
                                    $('.article_status').append(`<tr>
                                    <td>${form_type} Form</td>
                                    <td>${contract_start_date}</td>
                                    <td>${contract_end_date}</td>
                                    <td><span class="badge bg-success">Checking</span></td>
                                </tr>
                                `);
                                } else if (element.status == 1) {
                                    if (element.done_status == 1) {
                                        $('.article_status').append(`<tr>
                                        <td>${form_type} Form</td>
                                        <td>${contract_start_date}</td>
                                        <td>${contract_end_date}</td>
                                        <td><span class="badge bg-success">Done</span></td>
                                    </tr>
                                    `);
                                    } else {
                                        $('.article_status').append(`<tr>
                                        <td>${form_type} Form</td>
                                        <td>${contract_start_date}</td>
                                        <td>${contract_end_date}</td>
                                        <td><span class="badge bg-success">Approved</span></td>
                                    </tr>
                                    `);
                                    }
                                } else if (element.status == 2) {
                                    $('.article_status').append(`<tr>
                                    <td>${form_type} Form</td>
                                    <td>${contract_start_date}</td>
                                    <td>${contract_end_date}</td>
                                    <td><span class="badge bg-success">Reject</span></td>
                                </tr>
                                `);
                                }
                            });
                            if (article.length != 0) {
                                article.forEach(function (element) {
                                    article_form_type = element.article_form_type;

                                    switch (article_form_type) {
                                        case 'c12':
                                            form_type = 'CPA I,II';
                                            break;
                                        case 'c2_pass_3yr':
                                            form_type = 'CPA II pass 3 yr';
                                            break;
                                        case 'c2_pass_1yr':
                                            form_type = 'CPA II pass 1 yr';
                                            break;
                                        case 'qt_firm':
                                            form_type = 'QT pass';
                                            break;
                                        default:
                                            form_type = 'Resign';
                                            break;
                                    }
                                    let contract_start_date = element.contract_start_date === null ? "-" : element.contract_start_date;
                                    let contract_end_date = element.contract_end_date === null ? "-" : element.contract_end_date;

                                    if (element.status == 0) {
                                        $('.article_status').append(`<tr>
                                        <td>${form_type} Form</td>
                                        <td>${contract_start_date}</td>
                                        <td>${contract_end_date}</td>
                                        <td><span class="badge bg-success">Checking</span></td>
                                    </tr>
                                    `);
                                    } else if (element.status == 1) {
                                        if (element.done_status == 1) {
                                            $('.article_status').append(`<tr>
                                            <td>${form_type} Form</td>
                                            <td>${contract_start_date}</td>
                                            <td>${contract_end_date}</td>
                                            <td><span class="badge bg-success">Done</span></td>
                                        </tr>
                                        `);
                                        } else {
                                            $('.article_status').append(`<tr>
                                            <td>${form_type} Form</td>
                                            <td>${contract_start_date}</td>
                                            <td>${contract_end_date}</td>
                                            <td><span class="badge bg-success">Approved</span></td>
                                        </tr>
                                        `);
                                        }
                                    } else if (element.status == 2) {
                                        $('.article_status').append(`<tr>
                                        <td>${form_type} Form</td>
                                        <td>${contract_start_date}</td>
                                        <td>${contract_end_date}</td>
                                        <td><span class="badge bg-success">Reject</span></td>
                                    </tr>
                                    `);
                                    }
                                });
                            }

                            if (article.length != 0) {
                                if (latest_article[0].contract_end_date != null) {
                                    var end_date = new Date(latest_article[0].contract_end_date);
                                    var today = new Date();

                                    var end_time = end_date.getTime();
                                    var today_time = today.getTime();

                                    if (end_time <= today_time && latest_article[0].done_status == 0) {
                                        if (latest_article[0].done_form_attach && latest_article[0].done_status == 0) {
                                            $('.article_btn').append(`<tr><td colspan=2></td><td>Submit Done Form</td><td>Check By MAC</td></tr>`);
                                        } else {
                                            $('.article_btn').append(`<tr><td colspan=2></td><td>Submit Done Form</td><td><div class='row'><div class='col-md-8'><input type='file' class='form-control' name='done_form'></div><div class='col-md-4'><button class='btn btn-primary btn-xs' id='done_form_btn' onclick='saveDoneForm(${latest_article[0].id})'>Submit</button></div></div></td></tr>`);
                                        }
                                    } else if (latest_article[0]?.article_form_type != "resign" && latest_article[0].status == 1 && latest_article[0].done_status == 0) {
                                        resign_article_url = '/article_resign_registration';
                                        $('.article_btn').append(`<tr><td colspan=2></td><td>Resign Register</td><td> <a href='${FRONTEND_URL + resign_article_url}' class="btn btn-md btn-success" > Article Resign Register </a></td></tr>`);
                                    } else if (latest_article[0].done_status == 1) {
                                        if (latest_stu_reg[0].course.code == "cpa_2" && data.exam_results.length == 4) {
                                            article_url = '/article_information';
                                            $('.article_btn').append(`<tr><td colspan=2></td><td>Article Register Form</td><td> <a href='${FRONTEND_URL + article_url}' class="btn btn-md btn-success" > Article Register </a></td></tr>`);
                                        }
                                    }
                                }
                            } else {
                                if (latest_gov_article[0].contract_end_date != null) {

                                    var end_date = new Date(latest_gov_article[0].contract_end_date);
                                    var today = new Date();

                                    var end_time = end_date.getTime();
                                    var today_time = today.getTime();

                                    if (end_time <= today_time && latest_gov_article[0].done_status == 0) {
                                        if (latest_gov_article[0].done_form_attach && latest_gov_article[0].done_status == 0) {
                                            $('.article_btn').append(`<tr><td colspan=2></td><td>Submit Done Form</td><td>Check By MAC</td></tr>`);
                                        } else {
                                            $('.article_btn').append(`<tr><td colspan=2></td><td>Submit Done Form</td><td><div class='row'><div class='col-md-8'><input type='file' class='form-control' name='gov_done_form'></div><div class='col-md-4'><button class='btn btn-primary btn-xs' id='gov_done_form_btn' onclick='saveGovDoneForm(${latest_gov_article[0].id})'>Submit</button></div></div></td></tr>`);
                                        }
                                    } else if (latest_gov_article[0].status == 1 && latest_gov_article[0].done_status == 0) {
                                        resign_article_url = '/article_resign_registration';
                                        $('.article_btn').append(`<tr><td colspan=2></td><td>Resign Register</td><td> <a href='${FRONTEND_URL + resign_article_url}' class="btn btn-md btn-success" > Article Resign Register </a></td></tr>`);
                                    } else if (latest_gov_article[0].done_status == 1) {
                                        if (latest_stu_reg[0].course.code == "cpa_2" && data.exam_results.length == 4) {
                                            article_url = '/article_information';
                                            $('.article_btn').append(`<tr><td colspan=2></td><td>Article Register Form</td><td> <a href='${FRONTEND_URL + article_url}' class="btn btn-md btn-success" > Article Register </a></td></tr>`);
                                        }
                                    }
                                }
                            }
                        }

                    } else {
                        $("#article_row").hide();
                    }
                }
            }
            //end show data depend on user role
        }
    });
}

function formatDate(value) {
    let date = new Date(value);
    const day = date.toLocaleString('default', { day: '2-digit' });
    const month = date.toLocaleString('default', { month: 'short' });
    const year = date.toLocaleString('default', { year: 'numeric' });
    return day + '-' + month + '-' + year;
}

$('#edit_profile').click(function () {
    let student = JSON.parse(localStorage.getItem('studentinfo'));
    $.ajax({
        url: BACKEND_URL + "/student_info/" + student.id,
        type: 'get',
        contentType: false,
        processData: false,
        success: function (res) {
            $('#update_email').val(res.data.email);
            $('.date_of_birth').val(res.data.date_of_birth);
            $('#update_phone').val(res.data.phone);
            $('#update_address').val(res.data.address);
            $('#previewImg').attr("src", BASE_URL + res.data.image);
            $('#old_image').val(res.data.image);
        }
    });
    $('#profileModel').modal('show');
});

$('.course_list').click(function () {
    var type = $(this).val();
    let show_url;
    switch (type) {
        case 'app':
            show_url = '/application_list/'
            break;
        case 'reg':
            show_url = '/attend_registration_list/'
            break;
        case 'exam':
            show_url = '/exam_registration_list/'
            break;
        case 'result':
            show_url = '/exam_result_list/'
            break;
        default:
            show_url = '/application_list/'
            break;
    }
    $('.course').html("")
    $.ajax({
        url: BACKEND_URL + "/course",
        type: 'GET',
        success: function (res) {
            let course = res.data;
            $.each(course, function (i, v) {
                $('.course').append(`
                    <a href="${FRONTEND_URL + show_url}${v.id}" target="_blank" class="btn btn-success my-3">${v.name}</a>
                `);
            });
        }
    });
    $('#showCourseList').modal('toggle');
});

$('#update_profile').submit(function (e) {
    e.preventDefault();
    let student = JSON.parse(localStorage.getItem('studentinfo'));
    var formData = new FormData(this);
    formData.append('_method', 'PATCH');
    show_loader();
    $.ajax({
        url: BACKEND_URL + "/update_profile/" + student.id,
        type: 'POST',
        contentType: false,
        processData: false,
        data: formData,
        success: function (data) {
            EasyLoading.hide();
            successMessage(data.message);
            $('#profileModel').modal('hide');
        }
    });
});

$('#changePwd').submit(function (e) {
    e.preventDefault();
    show_loader();
    if ($("input[name=password]").val() != $("input[name=confirm_password]").val()) {
        EasyLoading.hide();
        $("input[name=password]").val('');
        $("input[name=confirm_password]").val('');
        $("input[name=password]").addClass('is-invalid');
        $("input[name=confirm_password]").addClass('is-invalid');
        $('#err_message').text("Your password and confirm password do not match!");
    } else {
        var formData = new FormData(this);
        formData.append('id', student_id);
        $.ajax({
            url: BACKEND_URL + "/update_pwd",
            type: 'POST',
            contentType: false,
            processData: false,
            data: formData,
            success: function (data) {
                EasyLoading.hide();
                successMessage(data.message);
                $('#showPwdModel').modal('toggle');
                location.reload();
            },
            error: function (err) {
                EasyLoading.hide();
                if (err.status == 401) {
                    $('#old_pwd').addClass('is-invalid');
                    $('#old_err_meg').text(err.responseJSON.error);
                }
            }
        });
    }
})


function containsAll(needles, haystack) {
    for (var i = 0; i < needles.length; i++) {
        if ($.inArray(needles[i], haystack) == -1) return false;
    }
    return true;
}


function isEmpty(obj) {
    if (obj === undefined) {
        return false;
    } else {

        return Object.keys(obj).length === 0;
    }
}

function saveDoneForm(id) {
    var done_form = $("input[name=done_form]")[0].files[0];

    if (done_form != undefined) {

        var data = new FormData();
        data.append('id', id);
        data.append('done_form', done_form);

        show_loader();
        $.ajax({
            type: "POST",
            data: data,
            url: BACKEND_URL + "/save_done_form",
            cache: false,
            contentType: false,
            processData: false,
            success: function (result) {
                EasyLoading.hide();
                successMessage("You have successfully registered.");
                location.reload();
                $("#done_form_btn").prop('disabled', true);
            },
            error: function (message) {
                EasyLoading.hide();
                errorMessage(message);
            }
        });
    } else {
        $("input[name=done_form]").css('border', '1px solid red');
        alert("Please Fill Attachment File");
    }

}

function saveGovDoneForm(id) {
    var done_form = $("input[name=gov_done_form]")[0].files[0];

    if (done_form != undefined) {

        var data = new FormData();
        data.append('id', id);
        data.append('done_form', done_form);

        show_loader();
        $.ajax({
            type: "POST",
            data: data,
            url: BACKEND_URL + "/save_gov_done_form",
            cache: false,
            contentType: false,
            processData: false,
            success: function (result) {
                EasyLoading.hide();
                successMessage("You have successfully registered.");
                location.reload();
                $("#gov_done_form_btn").prop('disabled', true);
            },
            error: function (message) {
                EasyLoading.hide();
                errorMessage(message);
            }
        });
    } else {
        $("input[name=gov_done_form]").css('border', '1px solid red');
        alert("Please Fill Attachment File");
    }

}
function loadSchoolByDash(school) {

    $('.school-title').text('School Information')
    $('.school').show();
    $('.cpaff_other').hide();
    $('.da-card').hide();
    localStorage.setItem("school_id", school.id);
    $('#sch_name_mm').text(school.name_mm);
    $('#sch_name_eng').text(school.name_eng);
    $("#sch_nrc").text(school.nrc_state_region + "/" + school.nrc_township + "(" + school.nrc_citizen + ")" + school.nrc_number);
    $("#sch_date_of_birth").text(school.date_of_birth);
    $("#sch_email").text(school.email);
    $('#sch_phone').text(school.phone);
    if (school.approve_reject_status == 0) {
        $('.sch_status_history').append('School Registration is checking.');
    } else if (school.approve_reject_status == 1) {
        $('.sch_status_history').append('School Registration is Approved.');
        $('.sch_payment-btn').show();
        $('.sch_payment-p').append(`<a href='${FRONTEND_URL}/school_information' class="btn btn-success btn-hover-dark" > Payment</a>`);
        $('.sch_payment-status').show();
    } else {

        if (school.initial_status == 2) {
            $('.sch_reject-btn').hide();
            $('.sch_renew-btn').hide();
            $('.sch_cessation-btn').show();
            $('.sch_cessation-reason').append(school.cessation_reason);
            $('.sch_status').hide();
        } else {
            $('.sch_reject-btn').show();
            $('.sch-reject-p').append(`<a href='${FRONTEND_URL}/school_edit' class="btn btn-success btn-hover-dark" > Update </a>`);
            $('.sch_status_history').append('School Registration is Rejected.');

            $('.sch_reject-reason').append(school.reason);
        }
    }
    if (school.payment_method != null) {
        $('.sch_period').show();
        var now = new Date();
        var period_date = school.payment_date.split('-');
        var period = period_date[2] + '-' + period_date[1] + '-' + period_date[0];
        $('#sch_period_time').text(period + " to 31-12-" + now.getFullYear());
        if (school.initial_status == 2) {
            $('.sch_renew-btn').hide();
        } else {
            $('.sch_renew-btn').show();
            $('.sch_renew-p').append(`<a href='${FRONTEND_URL}/school_information' class="btn btn-success btn-hover-dark" > Renew Form</a>`);
        }
        $('.sch_payment-status').show();
        $('.sch_payment-btn').hide();
        $(".sch_payment_status").text("Complete");
    } else {
        $(".sch_payment_status").text("Incomplete");
    }
}
function laodTeacherByDash(teacher) {

    $('.teacher-title').text('Teacher Information')
    $('.teacher').show();
    $('.cpaff_other').hide();
    $('.da-card').hide();
    localStorage.setItem("teacher_id", teacher.id);
    $('#teacher_name_mm').text(teacher.name_mm);
    $('#teacher_name_eng').text(teacher.name_eng);
    $("#teacher_nrc").text(teacher.nrc_state_region + "/" + teacher.nrc_township + "(" + teacher.nrc_citizen + ")" + teacher.nrc_number);

    $("#teacher_email").text(teacher.email);
    $('#teacher_phone').text(teacher.phone);
    if (teacher.approve_reject_status == 0) {
        $('.teacher_status_history').append('Teacher Registration is checking.');
    } else if (teacher.approve_reject_status == 1) {
        $('.teacher_status_history').append('Teacher Registration is Approved.');
        $('.teacher_payment-btn').show();
        $('.teacher_payment-p').append(`<a href='${FRONTEND_URL}/teacher_information' class="btn btn-success btn-hover-dark" > Payment </a>`);
        $('.teacher_payment-status').show();
    } else {
        $('.teacher_status_history').append('Teacher Registration is Rejected.');
        $('.teacher_reject-btn').show();
        $('.teacher_reject-p').append(`<a href='${FRONTEND_URL}/teacher_register' class="btn btn-success btn-hover-dark" > Update </a>`);
        $('.teacher_reject-reason').append(teacher.reason);
    }
    if (teacher.payment_method != null) {
        $('.teacher_period').show();
        var now = new Date();
        var period_date = teacher.payment_date.split(' ');
        var new_period_date = period_date[0].split('-');
        var period = new_period_date[2] + '-' + new_period_date[1] + '-' + new_period_date[0];
        $('#teacher_period_time').text(period + " to 31-12-" + now.getFullYear());
        $('.teacher_renew-btn').show();
        $('.teacher_renew-p').append(`<a href='${FRONTEND_URL}/teacher_information' class="btn btn-success btn-hover-dark" > Renew Form</a>`);
        $('.teacher_payment-status').show();
        $('.teacher_payment-btn').hide();
        $(".teacher_payment_status").text("Complete");
    } else {
        $(".teacher_payment_status").text("Incomplete");
    }
    
}
function loadRenewTeacherDash(teacher){
    
    $('.teacher-title').text('Teacher Information')
    $('.teacher').show();
    $('.cpaff_other').hide();
    $('.da-card').hide();
    //localStorage.setItem("teacher_id", teacher.id);
    $('#teacher_name_mm').text(teacher.name_mm);
    $('#teacher_name_eng').text(teacher.name_eng);
    $("#teacher_nrc").text(teacher.nrc_state_region + "/" + teacher.nrc_township + "(" + teacher.nrc_citizen + ")" + teacher.nrc_number);

    $("#teacher_email").text(teacher.email);
    $('#teacher_phone').text(teacher.phone);
    if (teacher.approve_reject_status == 0) {
        $('.teacher_status_history').append('Teacher Registration is checking.');
    } else if (teacher.approve_reject_status == 1) {
        $('.teacher_status_history').append('Teacher Registration is Approved.');
        $('.teacher_payment-btn').show();
        $('.teacher_payment-p').append(`<a href='${FRONTEND_URL}/teacher_information' class="btn btn-success btn-hover-dark" > Payment </a>`);
        $('.teacher_payment-status').show();
    } else {
        $('.teacher_status_history').append('Teacher Registration is Rejected.');
        $('.teacher_reject-btn').show();
        $('.teacher_reject-p').append(`<a href='${FRONTEND_URL}/teacher_register' class="btn btn-success btn-hover-dark" > Update </a>`);
        $('.teacher_reject-reason').append(teacher.reason);
    }
    if (teacher.payment_method != null) {
        $('.teacher_period').show();
        var now = new Date();
        var period_date = teacher.payment_date.split(' ');
        var new_period_date = period_date[0].split('-');
        var period = new_period_date[2] + '-' + new_period_date[1] + '-' + new_period_date[0];
        $('#teacher_period_time').text("01-01-"+now.getFullYear()+ " to 31-12-" + now.getFullYear());
        $('.teacher_renew-btn').show();
        $('.teacher_renew-p').append(`<a href='${FRONTEND_URL}/teacher_information' class="btn btn-success btn-hover-dark" > Renew Form</a>`);
        $('.teacher_payment-status').show();
        $('.teacher_payment-btn').hide();
        $(".teacher_payment_status").text("Complete");
    }else{
        $(".teacher_payment_status").text("Incomplete");
    }
    
}
