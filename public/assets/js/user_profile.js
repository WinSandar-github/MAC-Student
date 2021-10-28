
function user_profile() {

    show_loader();
    $.ajax({
        url: BACKEND_URL + "/user_profile/" + student_id,
        type: 'get',
        success: function (result) {
            EasyLoading.hide();
            let data = result.data;
            console.log("reslut => ", result);

            if (data.accountancy_firm_info_id) {
              var firm_info = data.accountancy_firm.slice(-1);
              allowToRenew();
              //audit_reg_feedback();

              if(firm_info[0].audit_firm_type_id == 1){
                // Audit Firm
                if(firm_info[0].status == 1 && firm_info[0].is_renew == 1 && firm_info[0].offline_user == 0){
                  // to do payment for approved normal renew user
                  console.log('to do payment for approved normal user');
                  var invoice = data.invoice.filter(val => {
                    return val.invoiceNo == 'audit_renew'+firm_info[0].id && val.status == 0;
                  });

                  if (!jQuery.isEmptyObject(invoice) && invoice.length != 0 ) {
                    $('#firm_payment_btn').append(`<a href= ${FRONTEND_URL}/payment_method/${student_id}/${invoice[0].invoiceNo} class="btn btn-info btn-sm xl-auto" >Payment for Renew</a><hr>`);
                  }else{
                    $('#firm_payment_btn').append(`<a herf='#' class="btn btn-info btn-sm xl-auto" >Payment Success</a><hr>`);
                  }
                }

                else if(firm_info[0].status == 1 && firm_info[0].is_renew == 0 && firm_info[0].offline_user == 0){
                  // to do payment for approved initial user
                  console.log('to do payment for approved initial user');
                  var invoice = data.invoice.filter(val => {
                    return val.invoiceNo == 'audit_initial'+firm_info[0].id && val.status == 0;
                  });

                  if (!jQuery.isEmptyObject(invoice) && invoice.length != 0 ) {
                    $('#firm_payment_btn').append(`<a href= ${FRONTEND_URL}/payment_method/${student_id}/${invoice[0].invoiceNo} class="btn btn-info btn-sm xl-auto" >Payment</a><hr>`);
                  }else{
                    $('#firm_payment_btn').append(`<a herf='#' class="btn btn-info btn-sm xl-auto" >Payment Success</a><hr>`);
                  }

                }

                else if(firm_info[0].status == 1 && firm_info[0].is_renew == 1 && firm_info[0].offline_user == 1){
                  // to do payment for approved offline user
                 console.log('to do payment for approved offline user');
                 var invoice = data.invoice.filter(val => {
                   return val.invoiceNo == 'off_audit_renew'+firm_info[0].id && val.status == 0;
                 });

                 if (!jQuery.isEmptyObject(invoice) && invoice.length != 0 ) {
                   $('#firm_payment_btn').append(`<a href= ${FRONTEND_URL}/payment_method/${student_id}/${invoice[0].invoiceNo} class="btn btn-info btn-sm xl-auto" >Payment for Renew</a><hr>`);
                 }else{
                   $('#firm_payment_btn').append(`<a herf='#' class="btn btn-info btn-sm xl-auto" >Payment Success</a><hr>`);
                 }
                }
              }
              else{
                // Non-Audit Firm
                if(firm_info[0].status == 1 && firm_info[0].is_renew == 1 && firm_info[0].offline_user != 1){
                  // to do payment for approved normal renew user
                  console.log("non audit 1");
                  var invoice = data.invoice.filter(val => {
                    return val.invoiceNo == 'non_audit_renew'+firm_info[0].id && val.status == 0;
                  });

                  if (!jQuery.isEmptyObject(invoice) && invoice.length != 0 ) {
                    $('#firm_payment_btn').append(`<a href= ${FRONTEND_URL}/payment_method/${student_id}/${invoice[0].invoiceNo} class="btn btn-info btn-sm xl-auto" >Payment for Renew</a><hr>`);
                  }else{
                    $('#firm_payment_btn').append(`<a herf='#' class="btn btn-info btn-sm xl-auto" >Payment Success</a><hr>`);
                  }
                }

                else if(firm_info[0].status == 1 && firm_info[0].is_renew == 0 && firm_info[0].offline_user == 0){
                  // to do payment for approved initial user
                  //checkRenewForInitial();
                  console.log('non audit 2');
                  var invoice = data.invoice.filter(val => {
                    return val.invoiceNo == 'non_audit_initial'+firm_info[0].id && val.status == 0;
                  });

                  if (!jQuery.isEmptyObject(invoice) && invoice.length != 0 ) {
                    $('#firm_payment_btn').append(`<a href= ${FRONTEND_URL}/payment_method/${student_id}/${invoice[0].invoiceNo} class="btn btn-info btn-sm xl-auto" >Payment</a><hr>`);
                  }else{
                    $('#firm_payment_btn').append(`<a herf='#' class="btn btn-info btn-sm xl-auto" >Payment Success</a><hr>`);
                  }
                }

                else if(firm_info[0].status == 1 && firm_info[0].is_renew == 1 && firm_info[0].offline_user == 1){
                  // to do payment for approved initial user
                  //checkRenewForInitial();
                  console.log('non audit 3');
                  var invoice = data.invoice.filter(val => {
                    return val.invoiceNo == 'off_non_audit_renew'+firm_info[0].id && val.status == 0;
                  });

                  if (!jQuery.isEmptyObject(invoice) && invoice.length != 0 ) {
                    $('#firm_payment_btn').append(`<a href= ${FRONTEND_URL}/payment_method/${student_id}/${invoice[0].invoiceNo} class="btn btn-info btn-sm xl-auto" >Payment</a><hr>`);
                  }else{
                    $('#firm_payment_btn').append(`<a herf='#' class="btn btn-info btn-sm xl-auto" >Payment Success</a><hr>`);
                  }
                }
              }

             firmDashboardData();

            } else if (data.school && data.teacher == null && data.mentor == null) {
                $('.dashboard_name').append('School ');
                loadSchoolByDash(data.school, data.invoice);

            } else if (data.teacher && data.school == null && data.mentor == null) {
                $('.dashboard_name').append('Teacher ');
                laodTeacherByDash(data.teacher, data.invoice);

            } else if (data.school && data.teacher && data.mentor == null) {
                $('.dashboard_name').append('Teacher And School ');
                $('.teacher_pw').hide();
                laodTeacherByDash(data.teacher, data.invoice);
                loadSchoolByDash(data.school, data.invoice);
                // var invoice = data.invoice.filter( val => {
                //     if(val.invoiceNo=="init_tec" || val.invoiceNo=="renew_tec" ){
                //         laodTeacherByDash(data.teacher,val.invoiceNo);
                //     }else if(val.invoiceNo=="init_sch" || val.invoiceNo=="renew_sch" || val.invoiceNo=="exit_sch" || val.invoiceNo=="renew_exit_sch"){
                //         loadSchoolByDash(data.school,val.invoiceNo);
                //     }

                // });


            }else if (data.school && data.teacher == null && data.mentor) {
                $('.dashboard_name').append('School And Mentor');
                loadSchoolByDash(data.school,data.invoice);
                loadMentorByDash(data.mentor,data.email);
            } else if (data.teacher && data.mentor && data.school == null) {
                console.log("Reach");
                $('.dashboard_name').append('Teacher And Mentor');
                laodTeacherByDash(data.teacher,data.invoice);
                loadMentorByDash(data.mentor,data.email);
            }else if (data.school && data.teacher && data.mentor) {
                $('.dashboard_name').append('Teacher And School And Mentor');
                $('.teacher_pw').hide();
                laodTeacherByDash(data.teacher,data.invoice);
                loadSchoolByDash(data.school,data.invoice);
                loadMentorByDash(data.mentor,data.email);

            } else if (data.cpa_ff && data.student_course_regs == '' && data.cpa_ff.length !== 0) {
                $('.title').text('CPA(Full-Fledged) and PAPP Information');
                $('.cpaff_other').show();
                console.log('cpaff', data);
                let cpaff_initial = data.cpa_ff[0];
                let cpaff_latest_data = data.cpa_ff[data.cpa_ff.length - 1];
                document.getElementById('cpaff_image').src = BASE_URL + data.image;
                $('#cpaff_name_mm').text(data.name_mm);
                $('#cpaff_name_eng').text(data.name_eng);
                $("#cpaff_nrc").text(data.nrc_state_region + "/" + data.nrc_township + "(" + data.nrc_citizen + ")" + data.nrc_number);
                $("#cpaff_email").text(data.email);
                $('#cpaff_phone').text(data.phone);
                var papp_url = FRONTEND_URL + "/student_papp";
                var cpaff_url = FRONTEND_URL + "/cpa_ff_register";

                // var cpaff_reject_url = FRONTEND_URL + "/cpa_ff_reject";
                var reject_initial = FRONTEND_URL + "/update_cpaff_initial";
                var reject_renewal = FRONTEND_URL + "/update_cpaff_renewal";
                var reject_existing = FRONTEND_URL + "/update_cpaff_existing";
                var is_renew;
                
                if(data.invoice.length!=0){
                    if (cpaff_latest_data.type == 0) {
                        is_renew = "Initial";
                        var invoice = data.invoice.filter(val => {
                            return val.invoiceNo == "cpaff_initial"+cpaff_latest_data.id && val.status == 0;
                        });
                        if(invoice.length!=0){
                            var payment_url = FRONTEND_URL + "/payment_method/"+student_id+"/"+invoice[0].invoiceNo;
                            var btn_payment=`<a href= ${payment_url} class="btn btn-info btn-sm xl-auto" > Payment</a><hr>`;
                        }
                        else{
                            var btn_payment=`<a herf='#' class="btn btn-info btn-sm xl-auto" >Payment Success</a><hr>`;
                        }
                    }
                    else if (cpaff_latest_data.type == 1) {
                        is_renew = "Renewal";
                        var invoice = data.invoice.filter(val => {
                            return val.invoiceNo == "cpaff_renew"+cpaff_latest_data.id && val.status == 0;
                        });
                        if(invoice.length!=0){
                            var payment_url = FRONTEND_URL + "/payment_method/"+student_id+"/"+invoice[0].invoiceNo;
                            var btn_payment=`<a href= ${payment_url} class="btn btn-info btn-sm xl-auto" > Payment</a><hr>`;
                        }
                        else{
                            var btn_payment=`<a herf='#' class="btn btn-info btn-sm xl-auto" >Payment Success</a><hr>`;
                        }

                    }
                    else {
                        is_renew = "";
                    }
                }
                else {
                    if (cpaff_latest_data.type == 0) {
                        is_renew = "Initial";
                    }
                    else if (cpaff_latest_data.type == 1) {
                        is_renew = "Renewal";
                    }
                    else {
                        is_renew = "";
                    }
                }
                //for renew form
                var current_month = new Date();
                var check_month = current_month.getMonth();
                var renew_form_open_month=9;
                var renew_form_close_month=3;

                var accepted_date = new Date(cpaff_initial.renew_accepted_date);
                var now = new Date();
                var dateDiff = Date.now() - accepted_date;
                var yearDiff = new Date(dateDiff); 
                var year_count=Math.abs(yearDiff.getUTCFullYear() - 1970);
                if (year_count>=1 && data.papp.length == 0 ) {

                    $('.status_papp').append('Action &nbsp;&nbsp;');
                    $('.status_papp').append(`<a href= ${FRONTEND_URL}/student_papp class="btn btn-success btn-sm xl-auto" > PAPP Form </a><hr>`);
                }
                if (cpaff_latest_data.status == 0) {
                    $('.status_history').append('CPA(Full-Fledged) ' + is_renew + ' Registration Form is checking.<br><br>');
                } else if (cpaff_latest_data.status == 1) {
                    var cpaff_renew_url = FRONTEND_URL + "/cpaff_renew";
                    $('.status_history').append('CPA(Full-Fledged) ' + is_renew + ' Registration Form is Approved.<br><br>');
                    if (cpaff_latest_data.offline_user == 0) {
                        $('.status_history').append('Action &nbsp;&nbsp;');
                        $('.status_history').append(btn_payment);

                        // if ((check_month >= renew_form_open_month || check_month <= renew_form_close_month) &&  invoice.length == 0) { // to re-open comment / do not delete
                        if (check_month >= renew_form_open_month || check_month <= renew_form_close_month) {
                            $('.status_history').append('Action &nbsp;&nbsp;');
                            $('.status_history').append(`<a href= ${cpaff_renew_url} class="btn btn-success btn-sm xl-auto" > CPA(Full-Fledged) Renew Form </a><hr>`);
                        }
                    }
                    else{
                        if (check_month >= renew_form_open_month || check_month <= renew_form_close_month) {
                            $('.status_history').append('Action &nbsp;&nbsp;');
                            $('.status_history').append(`<a href= ${cpaff_renew_url} class="btn btn-success btn-sm xl-auto" > CPA(Full-Fledged) Renew Form </a><hr>`);
                        }
                    }
                    
                } else {
                    localStorage.setItem('cpaff_id', cpaff_latest_data.id);
                    localStorage.setItem('reject_reason', cpaff_latest_data.reject_description);

                    if (cpaff_latest_data.type == 1 && cpaff_latest_data.offline_user == 1) {
                        $('.status_history').append('CPA(Full-Fledged) ' + is_renew + ' Registration Form is Rejected.');
                        $('.status_history').append(`<a href="${reject_existing}" class="btn btn-outline-primary btn-sm ms-2"><i class="fa fa-pencil-square-o me-2" aria-hidden="true"></i>Edit Profile</a>`);
                    }
                    else if (cpaff_latest_data.type == 0 && cpaff_latest_data.offline_user == 0) {
                        $('.status_history').append('CPA(Full-Fledged) ' + is_renew + ' Registration Form is Rejected.');
                        $('.status_history').append(`<a href="${reject_initial}" class="btn btn-outline-primary btn-sm ms-2"><i class="fa fa-pencil-square-o me-2" aria-hidden="true"></i>Edit Profile</a>`);
                    }
                    else if (cpaff_latest_data.type == 1 && cpaff_latest_data.offline_user == 0){
                        $('.status_history').append('CPA(Full-Fledged) ' + is_renew + ' Registration Form is Rejected.');
                        $('.status_history').append(`<a href="${reject_renewal}" class="btn btn-outline-primary btn-sm ms-2"><i class="fa fa-pencil-square-o me-2" aria-hidden="true"></i>Edit Profile</a>`);
                    }
                }
                if (data.papp.length != 0 && data.student_course_regs == '') {

                    var reject_initial = FRONTEND_URL + "/update_papp_initial";
                    var reject_renewal = FRONTEND_URL + "/update_papp_renewal";
                    var reject_reconnect=FRONTEND_URL + "/update_papp_reconnect";
                    var papp_latest_data = data.papp[data.papp.length - 1];
                    var is_renew;
                    if (data.invoice.length != 0) {
                        if (papp_latest_data.type == 0) {
                            is_renew = "Initial";
                            var invoice = data.invoice.filter(val => {
                                return val.invoiceNo == "papp_initial"+papp_latest_data.id && val.status == 0;
                            });
                            if (invoice.length != 0) {
                                var payment_url = FRONTEND_URL + "/payment_method/" + student_id + "/" + invoice[0].invoiceNo;
                                var btn_payment=`<a href= ${payment_url} class="btn btn-info btn-sm xl-auto" > Payment</a><hr>`;
                            }
                            else{
                                var btn_payment=`<a herf='#' class="btn btn-info btn-sm xl-auto" >Payment Success</a><hr>`;
                            }
                        }
                        else if (papp_latest_data.type == 1) {
                            is_renew = "Renewal";
                            var invoice = data.invoice.filter(val => {
                                return val.invoiceNo == "papp_renew"+papp_latest_data.id && val.status == 0;
                            });
                            if (invoice.length != 0) {
                                var payment_url = FRONTEND_URL + "/payment_method/" + student_id + "/" + invoice[0].invoiceNo;
                                var btn_payment=`<a href= ${payment_url} class="btn btn-info btn-sm xl-auto" > Payment</a><hr>`;
                            }
                            else{
                                var btn_payment=`<a herf='#' class="btn btn-info btn-sm xl-auto" >Payment Success</a><hr>`;
                            }
                        }
                        else {
                            is_renew = ""
                        }
                    }
                    else {
                        if (papp_latest_data.type == 0) {
                            is_renew = "Initial";
                        }
                        else if (papp_latest_data.type == 1) {
                            is_renew = "Renewal";
                        }
                        else {
                            is_renew = ""
                        }
                    }
                    if (papp_latest_data.status == 0) {
                        $('.status_papp').append('PAPP ' + is_renew + ' Registration Form is checking.<br><br>');
                    } else if (papp_latest_data.status == 1) {
                        var papp_renew_url = FRONTEND_URL + "/renew_papp";
                        $('.status_papp').append('PAPP ' + is_renew + ' Registration Form is Approved.<br><br>');
                        if (papp_latest_data.offline_user == 0) {
                            $('.status_papp').append('Action &nbsp;&nbsp;');
                            $('.status_papp').append(btn_payment);

                            // if ((check_month >= renew_form_open_month || check_month <= renew_form_close_month) && invoice.length == 0) {  // need to re-open 
                            if (check_month >= renew_form_open_month || check_month <= renew_form_close_month) {
                                $('.status_papp').append('Action &nbsp;&nbsp;');
                                $('.status_papp').append(`<a href= ${papp_renew_url} class="btn btn-success btn-sm xl-auto" > PAPP Renew Form </a><hr>`);
                            }
                        }
                        else{
                            if (check_month >= renew_form_open_month || check_month <= renew_form_close_month) {
                                $('.status_papp').append('Action &nbsp;&nbsp;');
                                $('.status_papp').append(`<a href= ${papp_renew_url} class="btn btn-success btn-sm xl-auto" > PAPP Renew Form </a><hr>`);
                            }
                        }
                        // var accept = new Date(papp_latest_data.renew_accepted_date);
                        // var month = accept.getMonth();
                        // var current_month = new Date();

                        // var check_month = current_month.getMonth();
                        // var year = accept.getFullYear();
                        // var y = year + 1;
                        // var now = new Date();

                        
                    } else {
                        localStorage.setItem('papp_id', papp_latest_data.id);
                        localStorage.setItem('reject_reason', papp_latest_data.reject_description);

                        if (papp_latest_data.type == 0) {
                            $('.status_papp').append('PAPP ' + is_renew + ' Registration Form is Rejected.');
                            $('.status_papp').append(`<a href="${reject_initial}" class="btn btn-outline-primary btn-sm ms-2"><i class="fa fa-pencil-square-o me-2" aria-hidden="true"></i>Edit Profile</a>`);
                        }
                        else if(papp_latest_data.type == 1){
                            $('.status_papp').append('PAPP ' + is_renew + ' Registration Form is Rejected.');
                            $('.status_papp').append(`<a href="${reject_renewal}" class="btn btn-outline-primary btn-sm ms-2"><i class="fa fa-pencil-square-o me-2" aria-hidden="true"></i>Edit Profile</a>`);
                        }
                        else {
                            $('.status_papp').append('PAPP ' + is_renew + ' Registration Form is Rejected.');
                            localStorage.setItem('reconnect_papp_id', papp_latest_data.id);
                            localStorage.setItem('reconnect_cpaff_id', cpaff_latest_data.id);
                            localStorage.setItem('reconnect_student_id', student_id);
                            console.log('papp_latest_data.id',papp_latest_data.id);
                            console.log('cpaff_latest_data.id',cpaff_latest_data.id);
                            $('.status_papp').append(`<a href="${reject_reconnect}" class="btn btn-outline-primary btn-sm ms-2"><i class="fa fa-pencil-square-o me-2" aria-hidden="true"></i>Edit Profile</a>`);
                        }

                    }
                }
            } else if (data.student_course_regs == '' && data.cpa_ff.length === 0 && data.papp.length !== 0) {
                let papp = data.papp[0];
                $('.title').text('CPA(Full-Fledged) and PAPP Information')
                $('.cpaff_other').show();
                document.getElementById('cpaff_image').src = BASE_URL + data.image;
                $('#cpaff_name_mm').text(data.name_mm);
                $('#cpaff_name_eng').text(data.name_eng);
                $("#cpaff_nrc").text(data.nrc_state_region + "/" + data.nrc_township + "(" + data.nrc_citizen + ")" + data.nrc_number);
                $("#cpaff_email").text(data.email);
                $('#cpaff_phone').text(data.phone);
            } else if (data.mentor) {
                $('.dashboard_name').append('Mentor ');
                loadMentorByDash(data.mentor,data.email);
            } else if (data.qualified_test) {
                let qt = data.qualified_test;

                $('.title').text('Student Information')
                $('.qualified_test').show();
                $('.cpaff_other').hide();

                $('#qt_name_mm').text(data.name_mm);
                $('#qt_name_eng').text(data.name_eng);
                $("#qt_nrc").text(data.nrc_state_region + "/" + data.nrc_township + "(" + data.nrc_citizen + ")" + data.nrc_number);
                $("#qt_email").text(data.email);
                $('#qt_phone').text(data.phone);
                console.log(data.image)
                document.getElementById('qt_image').src = BASE_URL + data.image;

                var papp_url = FRONTEND_URL + "/student_papp_information";
                var cpaff_url = FRONTEND_URL + "/cpa_ff_register"
                    ;
                var cpaff_renew_url = FRONTEND_URL + "/cpa_ff_information";
                var qt_edit = FRONTEND_URL + "/qt_edit/" + qt.id;

                if (qt.approve_reject_status == 0) {
                    // $('.status_history').append('CPA Full-Fledged Registration Form is checking.<br><br>');
                    $('.status').append(`
                    <tr>
                        <td>Qualified Test</td>
                        <td>${formatDate(qt.created_at)}</td>
                        <td>-</td>
                        <td><span class="badge bg-info text-dark">Checking</span></td>
                    </tr>
                    `);

                } else if (qt.approve_reject_status == 1) {
                    article_url = '/article_information';

                    if (qt.grade == 0) {
                        $('.status').append(`
                        <tr>
                            <td>Qualified Test</td>
                            <td>${formatDate(qt.created_at)}</td>
                            <td>${formatDate(qt.updated_at)}</td>
                            <td><span class="badge bg-success text-dark">Approve</span></td>
                        </tr>

                        `);

                    } else if (qt.grade == 1) {
                        $('.status').append(`
                        <tr>
                            <td>Qualified Test Result</td>
                            <td>${formatDate(qt.created_at)}</td>
                            <td>${formatDate(qt.updated_at)}</td>
                            <td><span class="badge bg-success">Passed</span></td>
                        </tr>
                        `);

                        let latest_article = data.article.slice(-1);
                        $("#qt_article_row").show();

                        if (data.article.length == 0 && data.gov_article.length == 0) {
                            $('.qt_article_status').append(`
                            <tr>
                                <td colspan=2></td><td>Action</td>
                                <td>
                                <a href='${FRONTEND_URL + article_url}' class="btn btn-md btn-success" > Article Register </a>
                                </td>
                            </tr>
                            `);
                        }
                        let article = data.article;
                        article.forEach(function (element) {
                            article_form_type = element.article_form_type;

                            switch (article_form_type) {
                                case 'c12':
                                    form_type = 'CPA I,II';
                                    break;
                                case 'c2_pass_3yr':
                                    form_type = 'CPA II Pass 3 yr';
                                    break;
                                case 'c2_pass_1yr':
                                    form_type = 'CPA II Pass 1 yr';
                                    break;
                                case 'qt_firm':
                                    form_type = 'QT Pass 3 yr';
                                    break;
                                case 'c2_pass_renew':
                                    form_type = 'CPA II Pass Renew';
                                    break;
                                case 'c12_renew':
                                    form_type = 'CPA I,II Renew';
                                    break;
                                default:
                                    form_type = 'Resign';
                                    break;
                            }
                            let contract_start_date = element.contract_start_date === null ? "-" : element.contract_start_date;
                            let contract_end_date = element.contract_end_date === null ? "-" : element.contract_end_date;
                            if (element.article_form_type == 'resign') {
                                if (element.resign_status == 0) {
                                    invoice_len = data.invoice.length;
                                    if(data.invoice[invoice_len-1].status === '0'){
                                        $('.qt_article_status').append(`<tr>
                                            <td>${form_type} Form</td>
                                            <td>${contract_start_date}</td>
                                            <td>${contract_end_date}</td>
                                            <td><span class="badge bg-success">Payment !</span></td>
                                        </tr>
                                        `);
                                    }else{
                                        $('.qt_article_status').append(`<tr>
                                            <td>${form_type} Form</td>
                                            <td>${contract_start_date}</td>
                                            <td>${contract_end_date}</td>
                                            <td><span class="badge bg-success">Checking</span></td>
                                        </tr>
                                        `);
                                    }
                                } else if (element.resign_status == 1) {
                                    if (element.done_status == 1) {
                                        $('.qt_article_status').append(`<tr>
                                        <td>${form_type} Form</td>
                                        <td>${contract_start_date}</td>
                                        <td>${contract_end_date}</td>
                                        <td><span class="badge bg-success">Done</span></td>
                                    </tr>
                                    `);
                                    } else if (element.done_status == 2) {
                                        $('.qt_article_status').append(`<tr>
                                        <td>${form_type} Form</td>
                                        <td>${contract_start_date}</td>
                                        <td>${contract_end_date}</td>
                                        <td><span class="badge bg-success">Rejected</span></td>
                                    </tr>
                                    `);
                                    }else if (element.done_status == 3) {
                                        $('.qt_article_status').append(`<tr>
                                        <td>${form_type} Form</td>
                                        <td>${contract_start_date}</td>
                                        <td>${contract_end_date}</td>
                                        <td><span class="badge bg-success">Done</span></td>
                                    </tr>
                                    `);
                                    }else {
                                        $('.article_status').append(`<tr>
                                        <td>${form_type} Form</td>
                                        <td>${contract_start_date}</td>
                                        <td>${contract_end_date}</td>
                                        <td><span class="badge bg-success">Approved</span></td>
                                    </tr>
                                    `);
                                    }
                                } else if (element.resign_status == 2) {
                                    $('.qt_article_status').append(`<tr>
                                    <td>${form_type} Form</td>
                                    <td>${contract_start_date}</td>
                                    <td>${contract_end_date}</td>
                                    <td><span class="badge bg-success">Reject</span></td>
                                </tr>
                                `);
                                }
                            } else {
                                if (element.status == 0) {
                                    $('.qt_article_status').append(`<tr>
                                    <td>${form_type} Form</td>
                                    <td>${contract_start_date}</td>
                                    <td>${contract_end_date}</td>
                                    <td><span class="badge bg-success">Checking</span></td>
                                </tr>
                                `);
                                } else if (element.status == 1) {
                                    if (element.done_status == 1) {
                                        $('.qt_article_status').append(`<tr>
                                        <td>${form_type} Form</td>
                                        <td>${contract_start_date}</td>
                                        <td>${contract_end_date}</td>
                                        <td><span class="badge bg-success">Done</span></td>
                                    </tr>
                                    `);
                                    } else if (element.done_status == 2){
                                        $('.qt_article_status').append(`<tr>
                                        <td>${form_type} Form</td>
                                        <td>${contract_start_date}</td>
                                        <td>${contract_end_date}</td>
                                        <td><span class="badge bg-success">Rejected</span></td>
                                    </tr>
                                    `);
                                    }else if (element.done_status == 3){
                                        $('.qt_article_status').append(`<tr>
                                        <td>${form_type} Form</td>
                                        <td>${contract_start_date}</td>
                                        <td>${contract_end_date}</td>
                                        <td><span class="badge bg-success">Done</span></td>
                                    </tr>
                                    `);
                                    }else {
                                        $('.article_status').append(`<tr>
                                        <td>${form_type} Form</td>
                                        <td>${contract_start_date}</td>
                                        <td>${contract_end_date}</td>
                                        <td><span class="badge bg-success">Approved</span></td>
                                    </tr>
                                    `);
                                    }
                                } else if (element.status == 2) {
                                    $('.qt_article_status').append(`<tr>
                                    <td>${form_type} Form</td>
                                    <td>${contract_start_date}</td>
                                    <td>${contract_end_date}</td>
                                    <td><span class="badge bg-success">Reject</span></td>
                                </tr>
                                `);
                                }
                            }
                        });

                        var invoice = data.invoice.filter(val => {
                            return val.invoiceNo == latest_article[0].article_form_type && val.status == 0;
                        });

                        if(invoice[0] != undefined){
                            var payment_url = FRONTEND_URL + "/payment_method/" + latest_article[0].student_info_id + "/" + invoice[0].invoiceNo;
                        }
                        
                        if (latest_article[0] != null && latest_article[0].contract_end_date != null) {
                            var end_date = new Date(latest_article[0].contract_end_date);
                            var today = new Date();

                            var end_time = end_date.getTime();
                            var today_time = today.getTime();

                            if (end_time <= today_time && latest_article[0].done_status == 0) {
                                if (latest_article[0].done_form_attach && latest_article[0].done_status == 0) {
                                    $('.qt_article_status').append(`<tr><td colspan=2></td><td>Submit Done Form</td><td>Check By MAC</td></tr>`);
                                } else if(latest_article[0].yes_done_attach == 1){
                                    $('.qt_article_status').append(`<tr><td colspan=2></td><td>Done form များကို Download ရယူရန် </td><td><div class='row'><div class='col-md-12'><button class="btn btn-info btn-hover-dark" onclick='CompleteDownloadForms();'>Download</button></div></div></td></tr>`);
                                    $('.qt_article_status').append(`<tr><td></td><td>Submit Done Form</td><td><div class='row'><div class='col-md-12'><input type='file' class='form-control' name='done_form'></div></div></td><td><button class='btn btn-primary btn-xs' id='done_form_btn' onclick='saveDoneForm(${latest_article[0].id})'>Submit</button></td></tr>`);
                                }else{
                                    $('.qt_article_status').append(`<tr><td></td><td colspan=2>Done form များကို Download ရယူရန် </td><td>Check By MAC</td></tr>`);
                                }
                            } else if (latest_article[0]?.article_form_type != "resign" && latest_article[0].status == 1 && latest_article[0].done_status == 0) {
                                resign_article_url = '/article_resign_registration';
                                $('.qt_article_status').append(`<tr><td colspan=2></td><td>Leave Request Register</td><td><div class='row'><div class='col-md-12'><button class='btn btn-primary btn-xs leave_request_btn' onclick='leaveRequestRegister(${latest_article[0].id})'>Leave Request</button></div></div></td></tr>`);
                                $('.qt_article_status').append(`<tr><td colspan=2></td><td>Resign Register</td><td> <a href='${FRONTEND_URL + resign_article_url}' class="btn btn-md btn-success" > Article Resign Register </a></td></tr>`);
                                // $('.qt_article_status').append(`<tr><td colspan=2></td><td>Resign Register</td><td><button type='button' class='btn btn-md btn-success' id='resign_btn' onclick='resignRegister();'>Resign Register</button></td></tr>`);
                            } else if (latest_article[0].done_status == 1) {
                                if (latest_stu_reg[0].course.code == "cpa_2" && exam_registers[0].form_type == 4 && (exam_results[0].registeration_id == exam_registers[0].id)) {
                                    article_url = '/article_information';
                                    $('.qt_article_status').append(`<tr><td colspan=2></td><td>Article Register Form</td><td> <a href='${FRONTEND_URL + article_url}' class="btn btn-md btn-success" > Article Register </a></td></tr>`);
                                }
                            }
                        } else if (latest_article[0].status == 1) {
                            if (latest_article[0].registration_fee == null) {
                                // $('.qt_article_status').append(`<tr><td colspan=2></td><td>မှတ်ပုံတင်ကြေးပေးသွင်းရန်</td><td><div class='row'><div class='col-md-12'><button class='btn btn-primary btn-xs' onclick='saveRegistrationFee(${latest_article[0].id})'>Registration Fee</button></div></div></td></tr>`);
                                if (!jQuery.isEmptyObject(invoice) && invoice.length != 0) {
                                    $('.qt_article_status').append(`<tr><td colspan=2></td><td>မှတ်ပုံတင်ကြေးပေးသွင်းရန်</td><td><div class='row'><div class='col-md-12'><a href=${payment_url} class="btn btn-success btn-hover-dark" > Payment </a></div></div></td></tr>`);
                                } else {
                                    $('.qt_article_status').append(`<tr><td colspan=2></td><td>မှတ်ပုံတင်ကြေးပေးသွင်းရန်</td><td><div class='row'><div class='col-md-12'>Payment Success</div></div></td></tr>`);
                                }
                            }
                            if(!latest_article[0].mentor_attach_file){
                                $('.qt_article_status').append(`<tr><td colspan=3>Mentor နှင့် ချုပ်ဆိုရမည့်စာချုပ်ပုံစံများနှင့် အခြားလိုအပ်သောစာရွက်စာတမ်းများကို Download ရယူရန် </td><td><div class='row'><div class='col-md-12'><button class="btn btn-info btn-hover-dark" onclick='DownloadForms();'>Download</button></div></div></td></tr>`);
                                $('.qt_article_status').append(`<tr><td colspan=4>Download ရယူပြီး MACရုံးဒုညွှန်မှူး ရှေ့မှောက်တွင်ကိုယ်တိုင်ကတိဝန်ခံချက်လက်မှတ်ရေးထိုးပြီးမှသာ စာချုပ်စာတန်းများအားတင်သွင်းရန်</td><td></td></tr>`);
                                $('.qt_article_status').append(`<tr><td colspan=2>ချုပ်ဆိုပြီးစာချုပ်နှင့် တာဝန်စတင်ထမ်းဆောင်ကြောင်းအစီရင်ခံစာတင်ရန်</td><td><div class='row'><div class='col-md-12'><input type='file' class='form-control' name='attach_file[]'></div></div><br><div class='row'><div class='col-md-12'><input type='file' class='form-control' name='attach_file[]'></div></div></td><td><button class='btn btn-primary btn-xs' id='attach_file_btn' onclick='saveAttachFile(${latest_article[0].id})'>Submit</button></td></tr>`);
                            }
                            if (latest_article[0].mentor_attach_file && latest_article[0].registration_fee != null) {
                                $('.qt_article_status').append(`<tr><td colspan=2></td><td>Duty Report Date</td><td>Check By MAC</td></tr>`);
                            }
                        } else if (latest_article[0]?.article_form_type == 'resign') {
                            // if(latest_article[0].done_status == 0){
                            //     if (!jQuery.isEmptyObject(invoice) && invoice.length != 0) {
                            //         $('.qt_article_status').append(`<tr><td colspan=2></td><td>နုတ်ထွက်လျော်ကြေးပေးသွင်းရန်</td><td><div class='row'><div class='col-md-12'><a href=${payment_url} class="btn btn-success btn-hover-dark" > Payment </a></div></div></td></tr>`);
                            //     }else{
                            //         $('.qt_article_status').append(`<tr><td colspan=2></td><td>နုတ်ထွက်လျော်ကြေးပေးသွင်းရန်</td><td><div class='row'><div class='col-md-12'> Payment Success </div></div></td></tr>`);
                            //     }
                            // }
                            // // else if(latest_article[0].done_status == 0 && latest_article[0].registration_fee != null){
                            // //     $('.qt_article_status').append(`<tr><td colspan=2></td><td>နုတ်ထွက်လျော်ကြေးပေးသွင်းရန်</td><td>Check By MAC</td></tr>`);
                            // // }
                            // else if(latest_article[0].done_status == 1){
                            if(latest_article[0].resign_status == 0){
                                if(invoice[0].status == 0){
                                    $('.qt_article_status').append(`<tr><td colspan=2></td><td>နုတ်ထွက်လျော်ကြေးပေးသွင်းရန်</td><td><div class='row'><div class='col-md-12'><a href=${payment_url} class="btn btn-success btn-hover-dark" > Try Again ... </a></div></div></td></tr>`);
                                }
                            }else if(latest_article[0].resign_status == 1){
                                var resign_date = new Date(latest_article[0].resign_date);
                                var year = resign_date.getFullYear();
                                var month = resign_date.getMonth();
                                var day = resign_date.getDate();

                                resign_date = new Date(year + 1, month, day - 1);
                                var today = new Date();
                                var resign_time = resign_date.getTime();
                                var today_time = today.getTime();

                                article_url = '/article_information';
                                if (resign_time <= today_time) {
                                    $('.qt_article_status').append(`<tr><td colspan=2></td><td>Article Renew Form</td><td> <a href='${FRONTEND_URL + article_url}' class="btn btn-md btn-success" > Article Renew </a></td></tr>`);
                                } else {
                                    $('.qt_article_status').append(`<tr><td colspan=2></td><td>Article Renew Form</td><td> <button class="btn btn-md btn-success" id="article_renew_btn" onclick='renewRegister()'> Article Renew </button></td></tr>`);
                                }
                            }
                            // }
                        }

                    } else {
                        $('.status').append(`
                            <tr>
                            <td>Qualified Test Result</td>
                            <td>${formatDate(qt.created_at)}</td>
                            <td>${formatDate(qt.updated_at)}</td>
                                <td><span class="badge bg-warning">Failed</span></td>
                            </tr >

                        `);
                    }

                } else {
                    $('.status').append(`
                    <tr>
                        <td>Qualified Test</td>
                        <td>${formatDate(qt.created_at)}</td>
                        <td>${formatDate(qt.updated_at)}</td>
                        <td><span class="badge bg-warning text-dark">Reject</span></td>
                    </tr>

                    <tr><td colspan=2></td><td>Action</td>
                        <td>
                        <a href="${qt_edit}" class="btn btn-outline-primary btn-sm ms-2"><i class="fa fa-pencil-square-o me-2" aria-hidden="true"></i>Edit Profile</a>
                        <td>
                    </td>
                    </tr>

                    `);
                    // $('.status').append('Qualified Test Form is Rejected.');
                    // $('.status').append(`<a href="${qt_edit}" class="btn btn-outline-primary btn-sm ms-2"><i class="fa fa-pencil-square-o me-2" aria-hidden="true"></i>Edit Profile</a>`);


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

            } else {
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

                document.getElementById('image').src = BASE_URL + data.image;

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

                if (cpaff.length !== 0) {
                    $('.cpaff').show();
                    var reject_initial = FRONTEND_URL + "/update_cpaff_initial";
                    var reject_renewal = FRONTEND_URL + "/update_cpaff_renewal";
                    let cpaff_latest_data = cpaff[cpaff.length - 1];
                    let cpaff_initial=cpaff[0];
                    var is_renew;
                    if (data.invoice.length != 0) {
                        if (cpaff_latest_data.is_renew == 0) {
                            is_renew = "Initial";
                            var invoice = data.invoice.filter(val => {
                                return val.invoiceNo == "cpaff_initial"+cpaff_latest_data.id && val.status == 0;
                            });
                            if(invoice.length!=0){
                                var payment_url = FRONTEND_URL + "/payment_method/"+student_id+"/"+invoice[0].invoiceNo;
                                var btn_payment=`<a href= ${payment_url} class="btn btn-info btn-sm xl-auto" > Payment</a>`;
                            }
                            else{
                                var btn_payment=`<a herf='#' class="btn btn-info btn-sm xl-auto" >Payment Success</a>`;
                            }
                        }
                        else if (cpaff_latest_data.is_renew == 1) {
                            is_renew = "Renewal";
                            var invoice = data.invoice.filter(val => {
                                return val.invoiceNo == "cpaff_renew"+cpaff_latest_data.id && val.status == 0;
                            });
                            if(invoice.length!=0){
                                var payment_url = FRONTEND_URL + "/payment_method/"+student_id+"/"+invoice[0].invoiceNo;
                                var btn_payment=`<a href= ${payment_url} class="btn btn-info btn-sm xl-auto" > Payment</a>`;
                            }
                            else{
                                var btn_payment=`<a herf='#' class="btn btn-info btn-sm xl-auto" >Payment Success</a>`;
                            }
                        }
                        else {
                            is_renew = "";
                        }
                    }
                    else {
                        if (cpaff_latest_data.is_renew == 0) {
                            is_renew = "Initial";
                        }
                        else if (cpaff_latest_data.is_renew == 1) {
                            is_renew = "Renewal";
                        }
                        else {
                            is_renew = "";
                        }
                    }
                    var current_month = new Date();
                    var check_month = current_month.getMonth();
                    var renew_form_open_month=9;
                    var renew_form_close_month=3;

                    var accepted_date = new Date(cpaff_initial.renew_accepted_date);
                    var now = new Date();
                    var dateDiff = Date.now() - accepted_date;
                    var yearDiff = new Date(dateDiff); 
                    var year_count=Math.abs(yearDiff.getUTCFullYear() - 1970);
                    if (year_count>=1 && data.papp.length == 0) {
                        $('.papp_btn').append(`<tr><td colspan=2></td><td>Action</td><td> <a href='${FRONTEND_URL}/student_papp' class="btn btn-sm btn-success" > PAPP Form</a></td></tr>`);
                    }
                    if (cpaff_latest_data.status == 0) {
                        $('.status').append(`
                        <tr>
                            <td>CPA(Full-Fledged) ${is_renew}</td>
                            <td>${formatDate(cpaff_latest_data.created_at)}</td>
                            <td>-</td>
                            <td><span class="badge bg-info text-dark">Checking</span></td>
                        </tr>
                        `);
                        // $('.papp_btn').append(`<tr><td colspan=2></td><td>Action</td><td> <a href='${FRONTEND_URL}/student_papp_information' class="btn btn-sm btn-success" > PAPP Form</a></td></tr>`);
                    } else if (cpaff_latest_data.status == 1) {
                        console.log("invoice", data.invoice);
                        $('.status').append(`
                        <tr>
                            <td>CPA(Full-Fledged) ${is_renew}</td>
                            <td>${formatDate(cpaff_latest_data.created_at)}</td>
                            <td>${formatDate(cpaff_latest_data.updated_at)}</td>
                            <td><span class="badge bg-success">Approved</span><br/>${btn_payment}</td>

                        </tr>
                        `);
                        
                        // if ((check_month >= renew_form_open_month || check_month <= renew_form_close_month) && invoice.length==0) { // need to re-open comment
                        if (check_month >= renew_form_open_month || check_month <= renew_form_close_month) {
                            $('.status').append(`<tr><td colspan=2></td><td>Action</td><td> <a href='${FRONTEND_URL}/cpaff_renew' class="btn btn-sm btn-success" > CPA(Full-Fledged) Renew Form</a></td></tr>`);
                        }
                    } else {
                        localStorage.setItem('cpaff_id', cpaff_latest_data.id);
                        localStorage.setItem('reject_reason', cpaff_latest_data.reject_description);
                        $('.status').append(`
                        <tr>
                            <td>CPA(Full-Fledged) ${is_renew}</td>
                            <td>${formatDate(cpaff_latest_data.created_at)}</td>
                            <td>${formatDate(cpaff_latest_data.updated_at)}</td>
                            <td><span class="badge bg-danger">Reject</span></td>
                        </tr>
                        `);
                        if (cpaff_latest_data.type == 0) {
                            $('.status').append(`<tr><td colspan=2></td><td>Action</td><td><a href="${reject_initial}" class="btn btn-outline-primary btn-sm ms-2"><i class="fa fa-pencil-square-o me-2" aria-hidden="true"></i>Edit Profile</a></td></tr>`);
                        }
                        else {
                            $('.status').append(`<tr><td colspan=2></td><td>Action</td><td><a href="${reject_renewal}" class="btn btn-outline-primary btn-sm ms-2"><i class="fa fa-pencil-square-o me-2" aria-hidden="true"></i>Edit Profile</a></td></tr>`);
                        }
                    }

                    if (data.papp.length !== 0) {
                        var reject_initial = FRONTEND_URL + "/update_papp_initial";
                        var reject_renewal = FRONTEND_URL + "/update_papp_renewal";
                        var reject_reconnect = FRONTEND_URL + "/update_papp_reconnect";
                        let papp_latest_data = data.papp[data.papp.length - 1];
                        var is_renew_papp;
                        if (data.invoice.length != 0) {
                            if (papp_latest_data.type == 0) {
                                is_renew_papp = "Initial";

                                var invoice = data.invoice.filter(val => {
                                    return val.invoiceNo == "papp_initial"+papp_latest_data.id && val.status == 0;
                                });
                                if(invoice.length!=0){
                                    var payment_url = FRONTEND_URL + "/payment_method/"+student_id+"/"+invoice[0].invoiceNo;
                                    var btn_payment=`<a href= ${payment_url} class="btn btn-info btn-sm xl-auto" > Payment</a>`;
                                }
                                else{
                                    var btn_payment=`<a herf='#' class="btn btn-info btn-sm xl-auto" >Payment Success</a>`;
                                }
                            }
                            else if (papp_latest_data.type == 1) {
                                is_renew_papp = "Renewal";
                                var invoice = data.invoice.filter(val => {
                                    return val.invoiceNo == "papp_renew"+papp_latest_data.id && val.status == 0;
                                });
                                if(invoice.length!=0){
                                    var payment_url = FRONTEND_URL + "/payment_method/"+student_id+"/"+invoice[0].invoiceNo;
                                    var btn_payment=`<a href= ${payment_url} class="btn btn-info btn-sm xl-auto" > Payment</a>`;
                                }
                                else{
                                    var btn_payment=`<a herf='#' class="btn btn-info btn-sm xl-auto" >Payment Success</a>`;
                                }
                            }
                            else {
                                is_renew_papp = ""
                            }
                        }
                        else {
                            if (papp_latest_data.type == 0) {
                                is_renew_papp = "Initial";
                            }
                            else if (papp_latest_data.type == 1) {
                                is_renew_papp = "Renewal";
                            }
                            else {
                                is_renew_papp = ""
                            }
                        }
                        if (papp_latest_data.status == 0) {
                            $('.status').append(`
                            <tr>
                                <td>PAPP ${is_renew_papp} </td>
                                <td>${formatDate(papp_latest_data.created_at)}</td>
                                <td>-</td>
                                <td><span class="badge bg-info text-dark">Checking</span></td>
                            </tr>
                            `);
                            $('.papp_btn').css('display', 'none');
                        } else if (papp_latest_data.status == 1) {
                            $('.status').append(`
                            <tr>
                                <td>PAPP ${is_renew_papp}</td>
                                <td>${formatDate(papp_latest_data.created_at)}</td>
                                <td>${formatDate(papp_latest_data.updated_at)}</td>
                                <td><span class="badge bg-success">Approved</span><br/>${btn_payment}</td>

                            </tr>
                            `);
                            // $('.status').append(`<tr><td colspan=2></td><td>Action</td><td> <a href='${FRONTEND_URL}/renew_papp' class="btn btn-sm btn-success" > PAPP Renew Form</a></td></tr>`);
                            $('.papp_btn').css('display', 'none');

                             // if ((check_month >= renew_form_open_month || check_month <= renew_form_close_month) && invoice.length==0) { // need to re-open comment
                            if (check_month >= renew_form_open_month || check_month <= renew_form_close_month) {
                                $('.status').append(`<tr><td colspan=2></td><td>Action</td><td> <a href='${FRONTEND_URL}/renew_papp' class="btn btn-sm btn-success" > PAPP Renew Form</a></td></tr>`);
                            }
                        } else {
                            $('.papp_btn').css('display', 'none');
                            localStorage.setItem('papp_id', papp_latest_data.id);
                            localStorage.setItem('reject_reason', papp_latest_data.reject_description);
                            $('.status').append(`
                            <tr>
                                <td>PAPP ${is_renew_papp}</td>
                                <td>${formatDate(papp_latest_data.created_at)}</td>
                                <td>${formatDate(papp_latest_data.updated_at)}</td>
                                <td><span class="badge bg-danger">Reject</span></td>
                            </tr>
                            `);
                            if (papp_latest_data.type == 0) {
                                $('.status').append(`<tr><td colspan=2></td><td>Action</td><td><a href="${reject_initial}" class="btn btn-outline-primary btn-sm ms-2"><i class="fa fa-pencil-square-o me-2" aria-hidden="true"></i>Edit PAPP</a></td></tr>`);
                            }
                            else if(papp_latest_data.type == 1){
                                $('.status').append(`<tr><td colspan=2></td><td>Action</td><td><a href="${reject_renewal}" class="btn btn-outline-primary btn-sm ms-2"><i class="fa fa-pencil-square-o me-2" aria-hidden="true"></i>Edit PAPP</a></td></tr>`);
                            }
                            else {
                                localStorage.setItem('reconnect_papp_id', papp_latest_data.id);
                                localStorage.setItem('reconnect_cpaff_id', cpaff_latest_data.id);
                                localStorage.setItem('reconnect_student_id', student_id);
                                console.log('papp_latest_data.id',papp_latest_data.id);
                                console.log('cpaff_latest_data.id',cpaff_latest_data.id);
                                $('.status').append(`<tr><td colspan=2></td><td>Action</td><td><a href="${reject_reconnect}" class="btn btn-outline-primary btn-sm ms-2"><i class="fa fa-pencil-square-o me-2" aria-hidden="true"></i>Edit PAPP</a></td></tr>`);
                            }
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
                                console.log('exam', exam)
                                exam.map(e => {
                                    var module;
                                    if (e.is_full_module == 1) {
                                        module = "Module-1";
                                    } else if (e.is_full_module == 2) {
                                        module = "Module-2";
                                    } else {
                                        module = "Full Module";
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
                                console.log('latest_course_reg', latest_course_reg[0]);
                                $('.status').append(`
                                <tr>
                                    <td>Cpa One Entry Exam Registration Form</td>
                                    <td>${formatDate(last_exam[0].created_at)}</td>
                                    <td>${formatDate(last_exam[0].updated_at)}</td>
                                    <td><span class="badge bg-danger">Reject</span></td>
                                </tr>
                                <tr>
                                    <td>မှတ်ချက် - </td>
                                    <td colspan=2>${latest_course_reg[0].remark}</td><td>
                                        <a href="${FRONTEND_URL + '/entry_edit'}" class="btn btn-sm btn-success">Update Cpa One Entry Exam Registration Form</a>
                                    </td>
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

                                if (latest_course_reg[0].batch.course.code == "da_1" || latest_course_reg[0].batch.course.code == "cpa_1") {

                                    $invoice_code = latest_course_reg[0].batch.course.code == "da_1" ? 'app_form' : 'cpa_app';

                                    var invoice = data.invoice.filter(val => {
                                        return val.invoiceNo == $invoice_code && val.status == 0;
                                    });
                                    if (latest_course_reg[0]?.is_finished == 0) {
                                        if (!jQuery.isEmptyObject(invoice) && invoice.length != 0) {

                                            $('.status').append(`
                                            <tr>
                                                <td>${latest_course_reg[0].batch.course.name} Application Form</td>
                                                <td>${formatDate(latest_course_reg[0].created_at)}</td>
                                                <td>${formatDate(latest_course_reg[0].updated_at)}</td>
                                                <td> <a href='${FRONTEND_URL}/payment_method/${std_id}/${invoice[0].invoiceNo}' class="btn btn-sm btn btn-info">Payment for App Form</a></td>
                                            </tr>
                                            `);

                                        } else {

                                            $('.status').append(`
                                            <tr>
                                                <td>${latest_course_reg[0].batch.course.name} Application Form</td>
                                                <td>${formatDate(latest_course_reg[0].created_at)}</td>
                                                <td>${formatDate(latest_course_reg[0].updated_at)}</td>
                                                <td><span class='badge bg-info'>Payment Success</span></td>
                                            </tr>
                                            `);
                                        }
                                    }
                                }

                                // $('.status').append(`
                                // <tr>
                                //     <td>${latest_course_reg[0].batch.course.name} Application Form</td>
                                //     <td>${formatDate(latest_course_reg[0].created_at)}</td>
                                //     <td>${formatDate(latest_course_reg[0].updated_at)}</td>
                                //     <td><span class="badge bg-success">Approved</span></td>
                                // </tr>
                                // `);

                                // $('.status').append(`<p >Your ${latest_course_reg[0].batch.course.name}  Your Application Form is approved  on the   .</p>`)
                                //show data depend on Student Register status


                                if (latest_stu_reg[0] && latest_course_reg[0].batch.course.code == latest_stu_reg[0].batch.course.code) {
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

                                        var course_code = latest_course_reg[0].batch.course.code == "da_1";

                                        var invoice = data.invoice.filter(val => {
                                            return (val.invoiceNo == 'mac_reg_' + latest_course_reg[0].batch.course.code
                                                || val.invoiceNo == 'prv_reg_' + latest_course_reg[0].batch.course.code
                                                || val.invoiceNo == 'self_reg_' + latest_course_reg[0].batch.course.code) && val.status == 0;
                                        });
                                        if (latest_course_reg[0]?.is_finished == 0) {
                                            if (!jQuery.isEmptyObject(invoice) && invoice.length != 0) {

                                                $('.status').append(`
                                                <tr>
                                                    <td>${latest_course_reg[0].batch.course.name} Registration Form</td>
                                                    <td>${formatDate(latest_course_reg[0].created_at)}</td>
                                                    <td>${formatDate(latest_course_reg[0].updated_at)}</td>
                                                    <td> <a href='${FRONTEND_URL}/payment_method/${std_id}/${invoice[0].invoiceNo}' class="btn btn-sm btn btn-info" >Payment for Reg Form</a></td>
                                                </tr>
                                                `);

                                            } else {
                                                $('.status').append(`
                                                <tr>
                                                    <td>${latest_course_reg[0].batch.course.name} Registration Form</td>
                                                    <td>${formatDate(latest_stu_reg[0].created_at)}</td>
                                                    <td>${formatDate(latest_stu_reg[0].updated_at)}</td>
                                                    <td><span class="badge bg-success">Approved</span></td>
                                                </tr>
                                                `);
                                            }
                                        }

                                        var module = [];

                                        exam_register.filter(exam => {
                                            if (exam.course.id == latest_course_reg[0].batch.course.id && exam.exam_type_id != 3) {
                                                module.push(exam.is_full_module)
                                            }
                                        });

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

                                                    var invoice = data.invoice.filter(val => {
                                                        return val.invoiceNo == 'exm_' + latest_course_reg[0].batch.course.code && val.status == 0;
                                                    });
                                                    if (latest_course_reg[0]?.is_finished == 0) {
                                                        if (!jQuery.isEmptyObject(invoice) && invoice.length != 0) {

                                                            $('.status').append(`
                                                            <tr>
                                                                <td>${latest_course_reg[0].batch.course.name} Exam Form</td>
                                                                <td>${formatDate(latest_course_reg[0].created_at)}</td>
                                                                <td>${formatDate(latest_course_reg[0].updated_at)}</td>
                                                                <td> <a href='${FRONTEND_URL}/payment_method/${std_id}/${invoice[0].invoiceNo}' class="btn btn-sm btn btn-info" >Payment for Exam Form</a></td>
                                                            </tr>
                                                            `);

                                                        } else {
                                                            $('.status').append(`
                                                            <tr>
                                                                <td>${latest_course_reg[0].batch.course.name} Exam Form</td>
                                                                <td>${formatDate(last_exam[0].created_at)}</td>
                                                                <td>${formatDate(last_exam[0].updated_at)}</td>
                                                                <td><span class="badge bg-success">Approved</span></td>
                                                            </tr>
                                                            `);
                                                        }
                                                    }

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
                                                                                if (last_exam[0]?.batch_id != batch.id) {
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
                                                                                }
                                                                                else {
                                                                                    $('.status').append(`
                                                                                        <tr> <td colspan=2 ></td ><td>Action</td>
                                                                                            <td>
                                                                                            <span class="nav-item dropdown ">
                                                                                                <a href="javascript:void(0)" class="btn-sm btn btn-success">Coming Soon</a>
                                                                                            </span>
                                                                                            </td>
                                                                                        </td>
                                                                                    </tr>
                                                                                `);
                                                                                }
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

                                                    var invoice = data.invoice.filter(val => {
                                                        return val.invoiceNo == 'exm_' + latest_course_reg[0].batch.course.code && val.status == 0;
                                                    });
                                                    if (latest_course_reg[0]?.is_finished == 0) {
                                                        if (!jQuery.isEmptyObject(invoice) && invoice.length != 0) {

                                                            $('.status').append(`
                                                            <tr>
                                                                <td>${latest_course_reg[0].batch.course.name} Exam Form</td>
                                                                <td>${formatDate(latest_course_reg[0].created_at)}</td>
                                                                <td>${formatDate(latest_course_reg[0].updated_at)}</td>
                                                                <td> <a href='${FRONTEND_URL}/payment_method/${std_id}/${invoice[0].invoiceNo}' class="btn btn-sm btn btn-info" >Payment for Exam Form</a></td>
                                                            </tr>
                                                            `);

                                                        } else {
                                                            $('.status').append(`
                                                            <tr>
                                                                <td>${latest_course_reg[0].batch.course.name} Exam Form</td>
                                                                <td>${formatDate(last_exam[0].created_at)}</td>
                                                                <td>${formatDate(last_exam[0].updated_at)}</td>
                                                                <td><span class="badge bg-success">Approved</span></td>
                                                            </tr>
                                                            `);
                                                        }
                                                    }
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
                                                                    if (next_batch[0].id != last_exam[0]?.batch_id) {
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
                                                                    }
                                                                    else {
                                                                        $('.status').append(`
                                                                    <tr><td colspan=2></td><td>Action</td>
                                                                        <td>
                                                                            <span class="nav-item dropdown ">
                                                                                <a href="javascript:void(0)" class="btn-sm btn btn-success">Coming Soon</a>

                                                                            </span>
                                                                        <td>
                                                                    </td>
                                                                    </tr>
                                                                `);
                                                                    }
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

                                                $('.status').append(`
                                                    <tr>
                                                        <td colspan=2 ></td>
                                                        <td>Action</td>
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
                                console.log(latest_course_reg[0], "Existing....")
                                let update_app_url;
                                if (latest_course_reg[0].offline_user == 1) {
                                    if(latest_course_reg[0].batch.course.code=='da_1'){
                                        update_app_url = '/da_one_existing_reg_edit_form';
                                    }else if(latest_course_reg[0].batch.course.code=='da_2'){
                                        update_app_url = '/da_two_existing_reg_edit_form';
                                    }else if(latest_course_reg[0].batch.course.code=='cpa_1'){
                                        update_app_url = '/cpa_one_existing_edit_form';
                                    }else if(latest_course_reg[0].batch.course.code=='cpa_2'){
                                        update_app_url = '/cpa_two_existing_edit_form';
                                    }

                                } else {
                                    update_app_url = latest_course_reg[0].batch.course.code == "da_1" ? '/da_edit' : '/cpa_edit';

                                }

                                $('.status').append(`
                                <tr>
                                    <td>${latest_course_reg[0].batch.course.name}</td>
                                    <td>${formatDate(latest_course_reg[0].created_at)}</td>
                                    <td>${formatDate(latest_course_reg[0].updated_at)}</td>
                                    <td><span class="badge bg-danger">Reject</span></td>
                                </tr >
                                <tr>
                                <td>မှတ်ချက် -  </td>
                                <td colspan=2>${latest_course_reg[0].remark}</td><td>
                                <a href="${FRONTEND_URL + update_app_url}" class="btn btn-sm btn-success">Update Application Form</a>
                             </td>
                             </tr>`);
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
                        let exam_results = data.exam_results.slice(-1);
                        let exam_registers = data.exam_registers.slice(-1);

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
                                        form_type = 'CPA II Pass 3 yr';
                                        break;
                                    case 'c2_pass_1yr':
                                        form_type = 'CPA II Pass 1 yr';
                                        break;
                                    case 'qt_firm':
                                        form_type = 'QT Pass 3 yr';
                                        break;
                                    case 'c2_pass_renew':
                                        form_type = 'CPA II Pass Renew';
                                        break;
                                    case 'c12_renew':
                                        form_type = 'CPA I,II Renew';
                                        break;
                                    default:
                                        form_type = 'Resign';
                                        break;
                                }
                                let contract_start_date = element.contract_start_date === null ? "-" : element.contract_start_date;
                                let contract_end_date = element.contract_end_date === null ? "-" : element.contract_end_date;
                                if (element.article_form_type == 'resign') {
                                    if (element.resign_status == 0) {
                                        invoice_len = data.invoice.length;
                                        if(data.invoice[invoice_len-1].status === '0'){
                                            $('.article_status').append(`<tr>
                                                <td>${form_type} Form</td>
                                                <td>${contract_start_date}</td>
                                                <td>${contract_end_date}</td>
                                                <td><span class="badge bg-success">Payment !</span></td>
                                            </tr>
                                            `);
                                        }else{
                                            $('.article_status').append(`<tr>
                                                <td>${form_type} Form</td>
                                                <td>${contract_start_date}</td>
                                                <td>${contract_end_date}</td>
                                                <td><span class="badge bg-success">Checking</span></td>
                                            </tr>
                                            `);
                                        }
                                    } else if (element.resign_status == 1) {
                                        if (element.done_status == 1) {
                                            $('.article_status').append(`<tr>
                                            <td>${form_type} Form</td>
                                            <td>${contract_start_date}</td>
                                            <td>${contract_end_date}</td>
                                            <td><span class="badge bg-success">Done</span></td>
                                        </tr>
                                        `);
                                        } else if (element.done_status == 2){
                                            $('.article_status').append(`<tr>
                                            <td>${form_type} Form</td>
                                            <td>${contract_start_date}</td>
                                            <td>${contract_end_date}</td>
                                            <td><span class="badge bg-success">Rejected</span></td>
                                        </tr>
                                        `);
                                        } else if (element.done_status == 3){
                                            $('.article_status').append(`<tr>
                                            <td>${form_type} Form</td>
                                            <td>${contract_start_date}</td>
                                            <td>${contract_end_date}</td>
                                            <td><span class="badge bg-success">Done</span></td>
                                        </tr>
                                        `);
                                        }else {
                                            $('.article_status').append(`<tr>
                                            <td>${form_type} Form</td>
                                            <td>${contract_start_date}</td>
                                            <td>${contract_end_date}</td>
                                            <td><span class="badge bg-success">Approved</span></td>
                                        </tr>
                                        `);
                                        }
                                    } else if (element.resign_status == 2) {
                                        $('.article_status').append(`<tr>
                                        <td>${form_type} Form</td>
                                        <td>${contract_start_date}</td>
                                        <td>${contract_end_date}</td>
                                        <td><span class="badge bg-success">Reject</span></td>
                                    </tr>
                                    `);
                                    }
                                } else {
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
                                        } else if (element.done_status == 2){
                                            $('.article_status').append(`<tr>
                                            <td>${form_type} Form</td>
                                            <td>${contract_start_date}</td>
                                            <td>${contract_end_date}</td>
                                            <td><span class="badge bg-success">Rejected</span></td>
                                        </tr>
                                        `);
                                        }else if (element.done_status == 3){
                                            $('.article_status').append(`<tr>
                                            <td>${form_type} Form</td>
                                            <td>${contract_start_date}</td>
                                            <td>${contract_end_date}</td>
                                            <td><span class="badge bg-success">Done</span></td>
                                        </tr>
                                        `);
                                        }else {
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
                                }
                            });

                            var invoice = data.invoice.filter(val => {
                                return val.invoiceNo == latest_article[0].article_form_type && val.status == 0;
                            });

                            if(invoice[0] != undefined){
                                var payment_url = FRONTEND_URL + "/payment_method/" + latest_article[0].student_info_id + "/" + invoice[0].invoiceNo;
                            }

                            if (latest_article[0] != null && latest_article[0].contract_end_date != null) {
                                var end_date = new Date(latest_article[0].contract_end_date);
                                var today = new Date();

                                var end_time = end_date.getTime();
                                var today_time = today.getTime();

                                if (end_time <= today_time && latest_article[0].done_status == 0) {
                                    if (latest_article[0].done_form_attach && latest_article[0].done_status == 0) {
                                        $('.article_btn').append(`<tr><td colspan=2></td><td>Submit Done Form</td><td>Check By MAC</td></tr>`);
                                    } else if (latest_article[0].yes_done_attach == 1) {
                                        //
                                        $('.article_btn').append(`<tr><td colspan=2></td><td>Done form များကို Download ရယူရန် </td><td><div class='row'><div class='col-md-12'><button class="btn btn-info btn-hover-dark" onclick='CompleteDownloadForms();'>Download</button></div></div></td></tr>`);
                                        $('.article_btn').append(`<tr><td></td><td>Submit Done Form</td><td><div class='row'><div class='col-md-12'><input type='file' class='form-control' name='done_form'></div></div></td><td><button class='btn btn-primary btn-xs' id='done_form_btn' onclick='saveDoneForm(${latest_article[0].id})'>Submit</button></td></tr>`);
                                    }else{
                                        if(latest_article[0].article_form_type == "c12"){
                                            var start_date = new Date(latest_article[0].contract_start_date);
                                            var end_date = new Date(latest_article[0].contract_end_date);

                                            var Difference_In_Time = end_date.getTime() - start_date.getTime();
                                            var Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24);

                                            if(Difference_In_Days < 1095){
                                                $('.article_btn').append(`<tr><td colspan=3></td><td><button type='button' class='btn btn-md btn-success' id='continue_btn' value='${latest_article[0].contract_end_date}' onclick='continueArticle(${latest_article[0].id});'>Continue...</button></td></tr>`);
                                            }else{
                                                $('.article_btn').append(`<tr><td></td><td colspan=2>Done form များကို Download ရယူရန်</td><td>Check By MAC</td></tr>`);
                                            }
                                        }else{
                                            $('.article_btn').append(`<tr><td></td><td colspan=2>Done form များကို Download ရယူရန်</td><td>Check By MAC</td></tr>`);
                                        }
                                    }
                                } else if (latest_article[0]?.article_form_type != "resign" && latest_article[0].status == 1 && latest_article[0].done_status == 0) {
                                    resign_article_url = '/article_resign_registration';
                                    $('.article_btn').append(`<tr><td colspan=2></td><td>Leave Request Register</td><td><div class='row'><div class='col-md-12'><button class='btn btn-primary btn-xs leave_request_btn' onclick='leaveRequestRegister(${latest_article[0].id})'>Leave Request</button></div></div></td></tr>`);
                                    $('.article_btn').append(`<tr><td colspan=2></td><td>Resign Register</td><td> <a href='${FRONTEND_URL + resign_article_url}' class="btn btn-md btn-success" > Article Resign Register </a></td></tr>`);
                                    // $('.article_btn').append(`<tr><td colspan=2></td><td>Resign Register</td><td><button type='button' class='btn btn-md btn-success' id='resign_btn' onclick='resignRegister();'>Resign Register</button></td></tr>`);
                                } else if (latest_article[0].done_status == 1) {
                                    if (latest_stu_reg[0].course.code == "cpa_2" && exam_registers[0].form_type == 4 && (exam_results[0].registeration_id == exam_registers[0].id)) {
                                        article_url = '/article_information';
                                        $('.article_btn').append(`<tr><td colspan=2></td><td>Article Register Form</td><td> <a href='${FRONTEND_URL + article_url}' class="btn btn-md btn-success" > Article Register </a></td></tr>`);
                                    }
                                }
                            } else if (latest_article[0]?.status == 1) {
                                if (latest_article[0].registration_fee == null) {
                                    // $('.article_btn').append(`<tr><td colspan=2></td><td>မှတ်ပုံတင်ကြေးပေးသွင်းရန်</td><td><div class='row'><div class='col-md-12'><button class='btn btn-primary btn-xs' onclick='saveRegistrationFee(${latest_article[0].id})'>Registration Fee</button></div></div></td></tr>`);
                                    if (!jQuery.isEmptyObject(invoice) && invoice.length != 0) {
                                        $('.article_btn').append(`<tr><td colspan=2></td><td>မှတ်ပုံတင်ကြေးပေးသွင်းရန်</td><td><div class='row'><div class='col-md-12'><a href=${payment_url} class="btn btn-success btn-hover-dark" > Payment </a></div></div></td></tr>`);
                                    } else {
                                        $('.article_btn').append(`<tr><td colspan=2></td><td>မှတ်ပုံတင်ကြေးပေးသွင်းရန်</td><td><div class='row'><div class='col-md-12'> Payment Success </div></div></td></tr>`);
                                    }
                                }
                                if (!latest_article[0].mentor_attach_file) {
                                    $('.article_btn').append(`<tr><td colspan=3>Mentor နှင့် ချုပ်ဆိုရမည့်စာချုပ်ပုံစံများနှင့် အခြားလိုအပ်သောစာရွက်စာတမ်းများကို Download ရယူရန် </td><td><div class='row'><div class='col-md-12'><button class="btn btn-info btn-hover-dark" onclick='DownloadForms();'>Download</button></div></div></td></tr>`);
                                    $('.article_btn').append(`<tr><td colspan=4>Download ရယူပြီး MACရုံးဒုညွှန်မှူး ရှေ့မှောက်တွင်ကိုယ်တိုင်ကတိဝန်ခံချက်လက်မှတ်ရေးထိုးပြီးမှသာ စာချုပ်စာတန်းများအားတင်သွင်းရန်</td><td></td></tr>`);
                                    $('.article_btn').append(`<tr><td colspan=2>ချုပ်ဆိုပြီးစာချုပ်နှင့် တာဝန်စတင်ထမ်းဆောင်ကြောင်းအစီရင်ခံစာတင်ရန်</td><td><div class='row'><div class='col-md-12'><input type='file' class='form-control' name='attach_file[]'></div></div><br><div class='row'><div class='col-md-12'><input type='file' class='form-control' name='attach_file[]'></div></div></td><td><button class='btn btn-primary btn-xs' id='attach_file_btn' onclick='saveAttachFile(${latest_article[0].id})'>Submit</button></td></tr>`);
                                }
                                if (latest_article[0].mentor_attach_file && latest_article[0].registration_fee != null) {
                                    $('.article_btn').append(`<tr><td colspan=2></td><td>Duty Report Date</td><td>Check By MAC</td></tr>`);
                                }
                            } else if (latest_article[0]?.article_form_type == 'resign') {
                                // if (latest_article[0].done_status == 0) {
                                //     if (!jQuery.isEmptyObject(invoice) && invoice.length != 0) {
                                //         $('.article_btn').append(`<tr><td colspan=2></td><td>နုတ်ထွက်လျော်ကြေးပေးသွင်းရန်</td><td><div class='row'><div class='col-md-12'><a href=${payment_url} class="btn btn-success btn-hover-dark" > Payment </a></div></div></td></tr>`);
                                //     }else{
                                //         $('.article_btn').append(`<tr><td colspan=2></td><td>နုတ်ထွက်လျော်ကြေးပေးသွင်းရန်</td><td><div class='row'><div class='col-md-12'> Payment Success </div></div></td></tr>`);
                                //     }
                                // }
                                // // else if (latest_article[0].done_status == 0 && latest_article[0].registration_fee != null) {
                                // //     $('.article_btn').append(`<tr><td colspan=2></td><td>နုတ်ထွက်လျော်ကြေးပေးသွင်းရန်</td><td>Check By MAC</td></tr>`);
                                // // }
                                // else if (latest_article[0].done_status == 1) {
                                if(latest_article[0].resign_status == 0){
                                    if(invoice[0].status == 0){
                                        $('.article_btn').append(`<tr><td colspan=2></td><td>နုတ်ထွက်လျော်ကြေးပေးသွင်းရန်</td><td><div class='row'><div class='col-md-12'><a href=${payment_url} class="btn btn-success btn-hover-dark" > Try Again ... </a></div></div></td></tr>`);
                                    }
                                }else if(latest_article[0].resign_status == 1){
                                    var resign_date = new Date(latest_article[0].resign_date);
                                    var year = resign_date.getFullYear();
                                    var month = resign_date.getMonth();
                                    var day = resign_date.getDate();

                                    resign_date = new Date(year + 1, month, day - 1);
                                    var today = new Date();
                                    var resign_time = resign_date.getTime();
                                    var today_time = today.getTime();

                                    article_url = '/article_information';
                                    if (resign_time <= today_time) {
                                        $('.article_btn').append(`<tr><td colspan=2></td><td>Article Renew Form</td><td> <a href='${FRONTEND_URL + article_url}' class="btn btn-md btn-success" > Article Renew </a></td></tr>`);
                                    } else {
                                        $('.article_btn').append(`<tr><td colspan=2></td><td>Article Renew Form</td><td> <button class="btn btn-md btn-success" id="article_renew_btn" onclick='renewRegister()'> Article Renew </button></td></tr>`);
                                    }
                                }
                                // }
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
                                    } else if (element.done_status == 2){
                                        $('.article_status').append(`<tr>
                                        <td>${form_type} Form</td>
                                        <td>${contract_start_date}</td>
                                        <td>${contract_end_date}</td>
                                        <td><span class="badge bg-success">Rejected</span></td>
                                    </tr>
                                    `);
                                    } else if (element.done_status == 3){
                                        $('.article_status').append(`<tr>
                                        <td>${form_type} Form</td>
                                        <td>${contract_start_date}</td>
                                        <td>${contract_end_date}</td>
                                        <td><span class="badge bg-success">Done</span></td>
                                    </tr>
                                    `);
                                    }else {
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
                                            form_type = 'CPA II Pass 3 yr';
                                            break;
                                        case 'c2_pass_1yr':
                                            form_type = 'CPA II Pass 1 yr';
                                            break;
                                        case 'qt_firm':
                                            form_type = 'QT Pass 3 yr';
                                            break;
                                        case 'c2_pass_renew':
                                            form_type = 'CPA II Pass Renew';
                                            break;
                                        case 'c12_renew':
                                            form_type = 'CPA I,II Renew';
                                            break;
                                        default:
                                            form_type = 'Resign';
                                            break;
                                    }
                                    let contract_start_date = element.contract_start_date === null ? "-" : element.contract_start_date;
                                    let contract_end_date = element.contract_end_date === null ? "-" : element.contract_end_date;

                                    if (element.article_form_type == 'resign') {
                                        if (element.resign_status == 0) {
                                            invoice_len = data.invoice.length;
                                            if(data.invoice[invoice_len-1].status === '0'){
                                                $('.article_status').append(`<tr>
                                                    <td>${form_type} Form</td>
                                                    <td>${contract_start_date}</td>
                                                    <td>${contract_end_date}</td>
                                                    <td><span class="badge bg-success">Payment !</span></td>
                                                </tr>
                                                `);
                                            }else{
                                                $('.article_status').append(`<tr>
                                                    <td>${form_type} Form</td>
                                                    <td>${contract_start_date}</td>
                                                    <td>${contract_end_date}</td>
                                                    <td><span class="badge bg-success">Checking</span></td>
                                                </tr>
                                                `);
                                            }
                                        } else if (element.resign_status == 1) {
                                            if (element.done_status == 1) {
                                                $('.article_status').append(`<tr>
                                                <td>${form_type} Form</td>
                                                <td>${contract_start_date}</td>
                                                <td>${contract_end_date}</td>
                                                <td><span class="badge bg-success">Done</span></td>
                                            </tr>
                                            `);
                                            } else if (element.done_status == 2){
                                                $('.article_status').append(`<tr>
                                                <td>${form_type} Form</td>
                                                <td>${contract_start_date}</td>
                                                <td>${contract_end_date}</td>
                                                <td><span class="badge bg-success">Rejected</span></td>
                                            </tr>
                                            `);
                                            } else if (element.done_status == 3){
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
                                        } else if (element.resign_status == 2) {
                                            $('.article_status').append(`<tr>
                                            <td>${form_type} Form</td>
                                            <td>${contract_start_date}</td>
                                            <td>${contract_end_date}</td>
                                            <td><span class="badge bg-success">Reject</span></td>
                                        </tr>
                                        `);
                                        }
                                    } else {
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
                                            } else if(element.done_status == 2){
                                                $('.article_status').append(`<tr>
                                                    <td>${form_type} Form</td>
                                                    <td>${contract_start_date}</td>
                                                    <td>${contract_end_date}</td>
                                                    <td><span class="badge bg-success">Rejected</span></td>
                                                </tr>
                                                `);
                                            }else if(element.done_status == 3){
                                                $('.article_status').append(`<tr>
                                                    <td>${form_type} Form</td>
                                                    <td>${contract_start_date}</td>
                                                    <td>${contract_end_date}</td>
                                                    <td><span class="badge bg-success">Done</span></td>
                                                </tr>
                                                `);
                                            }else {
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
                                    }
                                });
                            }

                            if (article.length != 0) {

                                var invoice = data.invoice.filter(val => {
                                    return val.invoiceNo == latest_article[0].article_form_type && val.status == 0;
                                });

                                if(invoice[0] != undefined){
                                    var payment_url = FRONTEND_URL + "/payment_method/" + latest_article[0].student_info_id + "/" + invoice[0].invoiceNo;
                                }

                                if (latest_article[0].contract_end_date != null) {
                                    var end_date = new Date(latest_article[0].contract_end_date);
                                    var today = new Date();

                                    var end_time = end_date.getTime();
                                    var today_time = today.getTime();

                                    if (end_time <= today_time && latest_article[0].done_status == 0) {
                                        if (latest_article[0].done_form_attach && latest_article[0].done_status == 0) {
                                            $('.article_btn').append(`<tr><td colspan=2></td><td>Submit Done Form</td><td>Check By MAC</td></tr>`);
                                        } else if (latest_article[0].yes_done_attach == 1) {
                                            //$('.article_btn').append(`<tr><td colspan=2></td><td>မှတ်ပုံတင်ကြေးပေးသွင်းရန်</td><td><div class='row'><div class='col-md-12'><button class='btn btn-primary btn-xs' onclick='saveRegistrationFee(${latest_article[0].id})'>Registration Fee</button></div></div></td></tr>`);
                                            $('.article_btn').append(`<tr><td colspan=2></td><td>Done form များကို Download ရယူရန် </td><td><div class='row'><div class='col-md-12'><button class="btn btn-info btn-hover-dark" onclick='CompleteDownloadForms();'>Download</button></div></div></td></tr>`);
                                            $('.article_btn').append(`<tr><td></td><td>Submit Done Form</td><td><div class='row'><div class='col-md-12'><input type='file' class='form-control' name='done_form'></div></div></td><td><button class='btn btn-primary btn-xs' id='done_form_btn' onclick='saveDoneForm(${latest_article[0].id})'>Submit</button></td></tr>`);
                                        }else{
                                            $('.article_btn').append(`<tr><td></td><td colspan=2>Done form များကို Download ရယူရန် </td><td>Check By MAC</td></tr>`);
                                        }
                                    } else if (latest_article[0]?.article_form_type != "resign" && latest_article[0].status == 1 && latest_article[0].done_status == 0) {
                                        resign_article_url = '/article_resign_registration';
                                        $('.article_btn').append(`<tr><td colspan=2></td><td>Leave Request Register</td><td><div class='row'><div class='col-md-12'><button class='btn btn-primary btn-xs leave_request_btn' onclick='leaveRequestRegister(${latest_article[0].id})'>Leave Request</button></div></div></td></tr>`);
                                        $('.article_btn').append(`<tr><td colspan=2></td><td>Resign Register</td><td> <a href='${FRONTEND_URL + resign_article_url}' class="btn btn-md btn-success" > Article Resign Register </a></td></tr>`);
                                        //$('.article_btn').append(`<tr><td colspan=2></td><td>Resign Register</td><td><button type='button' class='btn btn-md btn-success' id='resign_btn' onclick='resignRegister();'>Resign Register</button></td></tr>`);
                                    } else if (latest_article[0].done_status == 1) {
                                        if (latest_stu_reg[0].course.code == "cpa_2" && exam_registers[0].form_type == 4 && (exam_results[0].registeration_id == exam_registers[0].id)) {
                                            article_url = '/article_information';
                                            $('.article_btn').append(`<tr><td colspan=2></td><td>Article Register Form</td><td> <a href='${FRONTEND_URL + article_url}' class="btn btn-md btn-success" > Article Register </a></td></tr>`);
                                        }
                                    }
                                }
                                else if (latest_article[0].status == 1) {
                                    if (latest_article[0].registration_fee == null) {
                                        // $('.article_btn').append(`<tr><td colspan=2></td><td>မှတ်ပုံတင်ကြေးပေးသွင်းရန်</td><td><div class='row'><div class='col-md-12'><button class='btn btn-primary btn-xs' onclick='saveRegistrationFee(${latest_article[0].id})'>Registration Fee</button></div></div></td></tr>`);
                                        if (!jQuery.isEmptyObject(invoice) && invoice.length != 0) {
                                            $('.article_btn').append(`<tr><td colspan=2></td><td>မှတ်ပုံတင်ကြေးပေးသွင်းရန်</td><td><div class='row'><div class='col-md-12'><a href=${payment_url} class="btn btn-success btn-hover-dark" > Payment </a></div></div></td></tr>`);
                                        } else {
                                            $('.article_btn').append(`<tr><td colspan=2></td><td>မှတ်ပုံတင်ကြေးပေးသွင်းရန်</td><td><div class='row'><div class='col-md-12'>Payment Success</div></div></td></tr>`);
                                        }
                                    }
                                    if (!latest_article[0].mentor_attach_file) {
                                        $('.article_btn').append(`<tr><td colspan=3>Mentor နှင့် ချုပ်ဆိုရမည့်စာချုပ်ပုံစံများနှင့် အခြားလိုအပ်သောစာရွက်စာတမ်းများကို Download ရယူရန် </td><td><div class='row'><div class='col-md-12'><button class="btn btn-info btn-hover-dark" onclick='DownloadForms();'>Download</button></div></div></td></tr>`);
                                        $('.article_btn').append(`<tr><td colspan=4>Download ရယူပြီး MACရုံးဒုညွှန်မှူး ရှေ့မှောက်တွင်ကိုယ်တိုင်ကတိဝန်ခံချက်လက်မှတ်ရေးထိုးပြီးမှသာ စာချုပ်စာတန်းများအားတင်သွင်းရန်</td><td></td></tr>`);
                                        $('.article_btn').append(`<tr><td colspan=2>ချုပ်ဆိုပြီးစာချုပ်နှင့် တာဝန်စတင်ထမ်းဆောင်ကြောင်းအစီရင်ခံစာတင်ရန်</td><td><div class='row'><div class='col-md-12'><input type='file' class='form-control' name='attach_file[]'></div></div><br><div class='row'><div class='col-md-12'><input type='file' class='form-control' name='attach_file[]'></div></div></td><td><button class='btn btn-primary btn-xs' id='attach_file_btn' onclick='saveAttachFile(${latest_article[0].id})'>Submit</button></td></tr>`);
                                    }
                                    if (latest_article[0].mentor_attach_file && latest_article[0].registration_fee != null) {
                                        $('.article_btn').append(`<tr><td colspan=2></td><td>Duty Report Date</td><td>Check By MAC</td></tr>`);
                                    }
                                } else if (latest_article[0]?.article_form_type == 'resign') {
                                    // if (latest_article[0].done_status == 0) {
                                    //     if (!jQuery.isEmptyObject(invoice) && invoice.length != 0) {
                                    //         $('.article_btn').append(`<tr><td colspan=2></td><td>နုတ်ထွက်လျော်ကြေးပေးသွင်းရန်</td><td><div class='row'><div class='col-md-12'><a href=${payment_url} class="btn btn-success btn-hover-dark" > Payment </a></div></div></td></tr>`);
                                    //     }else{
                                    //         $('.article_btn').append(`<tr><td colspan=2></td><td>နုတ်ထွက်လျော်ကြေးပေးသွင်းရန်</td><td><div class='row'><div class='col-md-12'> Payment Success </div></div></td></tr>`);
                                    //     }
                                    // }
                                    // else if (latest_article[0].done_status == 0 && latest_article[0].registration_fee != null) {
                                    //     $('.article_btn').append(`<tr><td colspan=2></td><td>နုတ်ထွက်လျော်ကြေးပေးသွင်းရန်</td><td>Check By MAC</td></tr>`);
                                    // }
                                    // if (latest_article[0].done_status == 1) {
                                    if(latest_article[0].resign_status == 0){
                                        if(invoice[0].status == 0){
                                            $('.article_btn').append(`<tr><td colspan=2></td><td>နုတ်ထွက်လျော်ကြေးပေးသွင်းရန်</td><td><div class='row'><div class='col-md-12'><a href=${payment_url} class="btn btn-success btn-hover-dark" > Try Again ... </a></div></div></td></tr>`);
                                        }
                                    }else if(latest_article[0].resign_status == 1){
                                        var resign_date = new Date(latest_article[0].resign_date);
                                        var year = resign_date.getFullYear();
                                        var month = resign_date.getMonth();
                                        var day = resign_date.getDate();

                                        resign_date = new Date(year + 1, month, day - 1);
                                        var today = new Date();
                                        var resign_time = resign_date.getTime();
                                        var today_time = today.getTime();

                                        article_url = '/article_information';
                                        if (resign_time <= today_time) {
                                            $('.article_btn').append(`<tr><td colspan=2></td><td>Article Renew Form</td><td> <a href='${FRONTEND_URL + article_url}' class="btn btn-md btn-success" > Article Renew </a></td></tr>`);
                                        } else {
                                            $('.article_btn').append(`<tr><td colspan=2></td><td>Article Renew Form</td><td> <button class="btn btn-md btn-success" id="article_renew_btn" onclick='renewRegister()'> Article Renew </button></td></tr>`);
                                        }
                                    }
                                    // }
                                }
                            } else {

                                var invoice = data.invoice.filter(val => {
                                    return val.invoiceNo == "gov" && val.status == 0;
                                });

                                var payment_url = FRONTEND_URL + "/payment_method/" + latest_gov_article[0].student_info_id + "/" + invoice[0].invoiceNo;

                                if (latest_gov_article[0].contract_end_date != null) {

                                    var end_date = new Date(latest_gov_article[0].contract_end_date);
                                    var today = new Date();

                                    var end_time = end_date.getTime();
                                    var today_time = today.getTime();
                                    if (end_time <= today_time && latest_gov_article[0].done_status == 0) {
                                        if (latest_gov_article[0].done_form_attach && latest_gov_article[0].done_status == 0) {
                                            $('.article_btn').append(`<tr><td colspan=2></td><td>Submit Done Form</td><td>Check By MAC</td></tr>`);
                                        }
                                        else if(latest_gov_article[0].yes_done_attach == 1){
                                            $('.article_btn').append(`<tr><td></td><td colspan=2>Done form များကို Download ရယူရန် </td><td><div class='row'><div class='col-md-12'><button class="btn btn-info btn-hover-dark" onclick='CompleteDownloadForms();'>Download</button></div></div></td></tr>`);
                                            $('.article_btn').append(`<tr><td colspan=2></td><td>Submit Done Form</td><td><div class='row'><div class='col-md-8'><input type='file' class='form-control' name='gov_done_form'></div><div class='col-md-4'><button class='btn btn-primary btn-xs' id='gov_done_form_btn' onclick='saveGovDoneForm(${latest_gov_article[0].id})'>Submit</button></div></div></td></tr>`);
                                        } else {
                                            $('.article_btn').append(`<tr><td></td><td colspan=2>Done form များကို Download ရယူရန် </td><td>Check By MAC</td></tr>`);
                                        }
                                    }
                                    else if (latest_gov_article[0].status == 1 && latest_gov_article[0].done_status == 0) {
                                        resign_article_url = '/article_resign_registration';
                                        $('.article_btn').append(`<tr><td colspan=2></td><td>Leave Request Register</td><td><div class='row'><div class='col-md-12'><button class='btn btn-primary btn-xs leave_request_btn' onclick='leaveGovRequestRegister(${latest_gov_article[0].id})'>Leave Request</button></div></div></td></tr>`);
                                        $('.article_btn').append(`<tr><td colspan=2></td><td>Resign Register</td><td> <a href='${FRONTEND_URL + resign_article_url}' class="btn btn-md btn-success" > Article Resign Register </a></td></tr>`);
                                        // $('.article_btn').append(`<tr><td colspan=2></td><td>Resign Register</td><td><button type='button' class='btn btn-md btn-success' id='resign_btn' onclick='resignRegister();'>Resign Register</button></td></tr>`);
                                    }
                                    else if (latest_gov_article[0].done_status == 1) {
                                        if (latest_stu_reg[0].course.code == "cpa_2" && exam_registers[0].form_type == 4 && (exam_results[0].registeration_id == exam_registers[0].id)) {
                                            article_url = '/article_information';
                                            $('.article_btn').append(`<tr><td colspan=2></td><td>Article Register Form</td><td> <a href='${FRONTEND_URL + article_url}' class="btn btn-md btn-success" > Article Register </a></td></tr>`);
                                        }
                                    }
                                }
                                else if (latest_gov_article[0].status == 1) {
                                    if (latest_gov_article[0].registration_fee == null) {
                                        // $('.article_btn').append(`<tr><td colspan=2></td><td>မှတ်ပုံတင်ကြေးပေးသွင်းရန်</td><td><div class='row'><div class='col-md-12'><button class='btn btn-primary btn-xs' id='attach_file_btn' onclick='saveGovRegistrationFee(${latest_gov_article[0].id})'>Registration Fee</button></div></div></td></tr>`);
                                        if (!jQuery.isEmptyObject(invoice) && invoice.length != 0) {
                                            $('.article_btn').append(`<tr><td colspan=2></td><td>မှတ်ပုံတင်ကြေးပေးသွင်းရန်</td><td><div class='row'><div class='col-md-12'><a href=${payment_url} class="btn btn-success btn-hover-dark" > Payment </a></div></div></td></tr>`);
                                        } else {
                                            $('.article_btn').append(`<tr><td colspan=2></td><td>မှတ်ပုံတင်ကြေးပေးသွင်းရန်</td><td><div class='row'><div class='col-md-12'> Payment Success </a></div></div></td></tr>`);
                                        }
                                    } else {
                                        $('.article_btn').append(`<tr><td colspan=2></td><td>Duty Report Date</td><td>Check By MAC</td></tr>`);
                                    }
                                }
                            }
                        }

                    } else {
                        $("#article_row").hide();
                    }
                } else {
                    $("#article_row").hide();
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

$('.edit_profile').click(function () {
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

function Cpaff_profile_update() {
    let student = JSON.parse(localStorage.getItem('studentinfo'));
    $.ajax({
        url: BACKEND_URL + "/student_info/" + student.id,
        type: 'get',
        contentType: false,
        processData: false,
        success: function (res) {
            console.log('res', res);
            $('#update_email_cpaff').val(res.data.email);
            //$('.date_of_birth').val(res.data.date_of_birth);
            $('#update_name_mm').val(res.data.name_mm);
            $('#update_name_eng').val(res.data.name_eng);
            $('#update_phone_cpaff').val(res.data.phone);
            $('#update_address_cpaff').val(res.data.address);
            $('#previewImg_cpaff').attr("src", BASE_URL + res.data.image);
            $('#old_image_cpaff').val(res.data.image);
        }
    });
    $('#profileCpaffModel').modal('show');
}

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

$('#update_cpaff_profile').submit(function (e) {
    e.preventDefault();
    let student = JSON.parse(localStorage.getItem('studentinfo'));
    var formData = new FormData(this);
    formData.append('membership', 'cpaff')
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
            $('#profileCpaffModel').modal('hide');
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

function resignRegister() {

}

function continueArticle(id){
    end_date = $("#continue_btn").val();

    let months = ["Jan", "Feb", "Mar","Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

    var start_date=new Date(end_date);
    var year = start_date.getFullYear();
    var month = start_date.getMonth();
    var day = start_date.getDate();

    var contract_end_date = new Date(year + 1, month, day);

    contract_end_date = String(contract_end_date.getDate()).padStart(2, '0') + "-" + months[contract_end_date.getMonth()] + "-" + contract_end_date.getFullYear();

    var data = new FormData();
    data.append('id', id);
    data.append('contract_end_date', contract_end_date);
    show_loader();
    $.ajax({
        type: "POST",
        data: data,
        url: BACKEND_URL + "/continue_article",
        cache: false,
        contentType: false,
        processData: false,
        success: function (result) {
            EasyLoading.hide();
            $('#continue_btn').attr('disabled', true);
            successMessage("You have successfully registered.");
            setInterval(() => {
                location.href = FRONTEND_URL + '/';
            }, 3000);
        },
        error: function (message) {
            EasyLoading.hide();
            errorMessage(message);
        }
    });
}

function DownloadForms(){
    $('#downloadFormModel').modal('toggle');
}
function CompleteDownloadForms(){
    $('#downloadFormModel').modal('toggle');
    $('#mentor_attach').css('display', 'none');
    $('#complete_attach').css('display', 'block');
}

function renewRegister(){
    alert("အလုပ်သင်ပြန်လည်ဆင်းမည်ဆိုပါက နုတ်ထွက်ခွင့်ပြုသည့်နေ့မှစ၍ အနည်းဆုံးတစ်နှစ်ကြာမှသာ ပြန်လည်ဆင်းခွင့်ရှိပါမည်။");
    $("#article_renew_btn").prop('disabled', true);
}

function leaveRequestRegister(id) {
    $('#leaveRequestModel').modal('toggle');
    $('#article_id').val(id);
    $('#form_name').val('other');
    getLeaveRequest();
}

function leaveGovRequestRegister(id) {
    $('#leaveRequestModel').modal('toggle');
    $('#article_id').val(id);
    $('#form_name').val('gov');
    getLeaveRequest();
}

function saveLeaveRequest() {
    var data = new FormData();
    data.append('id', $('#article_id').val());
    data.append('form_name', $('#form_name').val());
    data.append('remark', $("input[name=remark]").val());
    data.append('start_date', $("input[name=start_date]").val());
    data.append('end_date', $("input[name=end_date]").val());
    data.append('total_date', $("input[name=total_date]").val());

    show_loader();
    $.ajax({
        type: "POST",
        data: data,
        url: BACKEND_URL + "/save_leave_request",
        cache: false,
        contentType: false,
        processData: false,
        success: function (result) {
            EasyLoading.hide();
            successMessage("You have successfully registered.");
            $("#leave_request_form")[0].reset();
            $('#leave_request_table').DataTable().destroy();
            getLeaveRequest();
        },
        error: function (message) {
            EasyLoading.hide();
            errorMessage(message);
        }
    });
}

function getLeaveRequest() {
    var id = $('#article_id').val();
    var form_name = $('#form_name').val();

    var data = new FormData();
    data.append('id', id);
    data.append('form_name', form_name);

    $.ajax({
        type: "POST",
        data: data,
        url: BACKEND_URL + "/get_leave_request",
        cache: false,
        contentType: false,
        processData: false,
        success: function (data) {
            $("#leave_request_body").html("");
            var r = 1;
            data.forEach(function (element) {
                var tr = "<tr>";
                tr += "<td class='alignright'>" + r + "</td>";
                tr += "<td>" + element.remark + "</td>";
                tr += "<td>" + element.start_date + "</td>";
                tr += "<td>" + element.end_date + "</td>";
                tr += "<td>" + element.total_leave + "</td>";
                tr += "<td class='alignright'><button class='btn btn-warning btn-sm' onclick='updateLeaveRequest(" + element.id + ")'><li class='fa fa-pencil'></li></button></td>";
                tr += "</tr>";
                r = r + 1;
                $("#leave_request_body").append(tr);
            })
            $('#leave_request_table').DataTable({
                'destroy': true,
                'paging': true,
                'lengthChange': false,
                "pageLength": 5,
                'searching': false,
                'info': false,
                'autoWidth': true,
                "scrollX": false,
            });
        },
        error: function (message) {
            EasyLoading.hide();
            errorMessage(message);
        }
    });
}

function updateLeaveRequest(id) {
    $('#leave_request_form').removeAttr('action', 'javascript:saveLeaveRequest()');
    $("#leave_request_form").attr('action', 'javascript:saveUpdateLeaveRequest()');
    $.ajax({
        type: "GET",
        url: BACKEND_URL + "/get_update_leave_request/" + id,
        success: function (result) {
            $("#leave_request_id").val(result.id);
            $("#remark").val(result.remark);
            $("#start_date").val(result.start_date);
            $("#end_date").val(result.end_date);
            $("#total_date").val(result.total_leave);
        },
        error: function (message) {
            EasyLoading.hide();
            errorMessage(message);
        }
    });
}

function saveUpdateLeaveRequest() {
    var data = new FormData();
    data.append('id', $('#leave_request_id').val());
    data.append('remark', $("input[name=remark]").val());
    data.append('start_date', $("input[name=start_date]").val());
    data.append('end_date', $("input[name=end_date]").val());
    data.append('total_date', $("input[name=total_date]").val());

    show_loader();
    $.ajax({
        type: "POST",
        data: data,
        url: BACKEND_URL + "/update_leave_request",
        cache: false,
        contentType: false,
        processData: false,
        success: function (result) {
            EasyLoading.hide();
            successMessage("You have successfully registered.");
            $("#leave_request_form")[0].reset();
            $('#leave_request_table').DataTable().destroy();
            getLeaveRequest();
            $("#leave_request_form").attr('action', 'javascript:saveLeaveRequest()');
        },
        error: function (message) {
            EasyLoading.hide();
            errorMessage(message);
        }
    });
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

// function saveRegistrationFee(id) {
//     // $('#articleRegistrationModal').modal('show');

//     // $('#cash_img').click(function () {
//     //     $('#article_registration_btn').prop('disabled', false);
//     // });

//     // $('#cb_img').click(function () {
//     //     $('#article_registration_btn').prop('disabled', true);
//     // });

//     // $('#mpu_img').click(function () {
//     //     $('#article_registration_btn').prop('disabled', true);
//     // });
//     // $('#article_registration_btn').prop('disabled', true);

//     // $('#article_registration_btn').click(function () {
//     //     var data = new FormData();
//     //     data.append('id', id);

//     //     show_loader();
//     //     $.ajax({
//     //         type: "POST",
//     //         data: data,
//     //         url: BACKEND_URL + "/save_registration_fee",
//     //         cache: false,
//     //         contentType: false,
//     //         processData: false,
//     //         success: function (result) {
//     //             EasyLoading.hide();
//     //             successMessage("You have successfully registered.");
//     //             setTimeout(function () {
//     //                 $('#articleRegistrationModal').modal('hide');
//     //                 location.reload();
//     //             }, 1000);
//     //         },
//     //         error: function (message) {
//     //             EasyLoading.hide();
//     //             errorMessage(message);
//     //         }
//     //     });
//     // });
// }

// function saveGovRegistrationFee(id) {
//     $('#articleRegistrationModal').modal('show');

//     $('#cash_img').click(function () {
//         $('#article_registration_btn').prop('disabled', false);
//     });

//     $('#cb_img').click(function () {
//         $('#article_registration_btn').prop('disabled', true);
//     });

//     $('#mpu_img').click(function () {
//         $('#article_registration_btn').prop('disabled', true);
//     });
//     $('#article_registration_btn').prop('disabled', true);

//     $('#article_registration_btn').click(function () {
//         var data = new FormData();
//         data.append('id', id);

//         show_loader();
//         $.ajax({
//             type: "POST",
//             data: data,
//             url: BACKEND_URL + "/save_gov_registration_fee",
//             cache: false,
//             contentType: false,
//             processData: false,
//             success: function (result) {
//                 EasyLoading.hide();
//                 successMessage("You have successfully registered.");
//                 setTimeout(function () {
//                     $('#articleRegistrationModal').modal('hide');
//                     location.reload();
//                 }, 1000);
//             },
//             error: function (message) {
//                 EasyLoading.hide();
//                 errorMessage(message);
//             }
//         });
//     });
// }

function saveAttachFile(id) {
    var attach_file = [];
    $('input[name="attach_file[]"]').map(function () {
        for (var i = 0; i < $(this).get(0).files.length; ++i) {
            attach_file.push('attach_file[]', $(this).get(0).files[i]);
        }
    });
    if (attach_file.length != 0) {

        var data = new FormData();
        data.append('id', id);
        data.append('attach_file', $("input[name=attach_file]").val());
        $('input[name="attach_file[]"]').map(function () {
            for (var i = 0; i < $(this).get(0).files.length; ++i) {
                data.append('attach_file[]', $(this).get(0).files[i]);
            }
        });

        show_loader();
        $.ajax({
            type: "POST",
            data: data,
            url: BACKEND_URL + "/save_attach_file",
            cache: false,
            contentType: false,
            processData: false,
            success: function (result) {
                EasyLoading.hide();
                successMessage("You have successfully registered.");
                location.reload();
                $("#attach_file_btn").prop('disabled', true);
            },
            error: function (message) {
                EasyLoading.hide();
                errorMessage(message);
            }
        });
    } else {
        $("input[name=attach_file]").css('border', '1px solid red');
        alert("Please Fill Attachment File");
    }
}
function loadSchoolByDash(school_data, school_invoice) {

    $.ajax({
        type: 'GET',
        url: BACKEND_URL + "/getSchoolInfo/" + school_data.student_info_id,
        success: function (result) {

            var school = result.data.pop();

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
            $("#sch_update_email").val(school.email);
            $("#sch_update_phone").val(school.phone);
            $("#sch_update_address").val(school.address);
            $("#sch_update_eng_address").val(school.eng_address);
            $('#school_id').val(school.id);
            $('#old_school_profile_photo').val(school.profile_photo);
            $('#previewSchoolImg').attr("src", BASE_URL + school.profile_photo);
            $('#sch_phone').text(school.phone);
            if (school.approve_reject_status == 0) {
                $('.sch_status_history').append('School Registration is checking.');

            } else if (school.approve_reject_status == 1) {
                
                if (school.offline_user != 'true') {

                    var invoice = school_invoice.filter(val => {
                        if (val.invoiceNo == 'init_sch' + school.id || val.invoiceNo == 'renew_sch' + school.id) {
                            return val.invoiceNo == val.status == 0 == val.dateTime != null;
                        }

                        //school.payment_method &&
                    });
                    if(invoice.length!=0){
                        var sch_invoice = invoice.pop();
                        if (sch_invoice.status == "AP") {
                            
                            var now = new Date();
                            if (school.initial_status == 0) {
                                //var period_date = school.from_valid_date.split(' ');
                                var new_period_date = sch_invoice.dateTime.split('-');
                                var period = new_period_date[2] + '-' + new_period_date[1] + '-' + new_period_date[0];
                                $('#sch_period_time').text(period + " to 31-12-" + (now.getFullYear() + 3));
                                $('.sch_status_history').append('School Registration is Approved.');
                                $('.sch_period').show();
                                $('.sch_payment-status').show();
                            } else if (school.initial_status == 1) {
                                var period_date = school.renew_date.split(' ');
                                var new_period_date = period_date[0].split('-');
                                var period = new_period_date[2] + '-' + new_period_date[1] + '-' + new_period_date[0];
                                $('#sch_period_time').text('01-01-' + now.getFullYear() + " to 31-12-" + (now.getFullYear() + 3));
                                $('.sch_status_history').append('School Registration is Approved.');
                                $('.sch_period').show();
                                $('.sch_payment-status').show();
                            }else{
                                $('.sch_status_history').append('School is request stop.');
                                $('.sch_cessation-btn').show();
                                $(".sch_cessation-reason").text(school.cessation_reason);
                                
                            }
                            $('.sch_renew-btn').show();
                            $('.sch_renew-p').append(`<a href='${FRONTEND_URL}/school_information' class="btn btn-success btn-hover-dark" > Renew Form</a>`);
                            $('.sch_payment-btn').hide();
                            $(".sch_payment_status").text("Complete");
    
                        } else {
                            
                            if(school.initial_status==2){
                                $('.sch_status_history').append('School is request stop.');
                                $('.sch_cessation-btn').show();
                                $(".sch_cessation-reason").text(school.cessation_reason);
                                $('.sch_renew-btn').show();
                                $('.sch_renew-p').append(`<a href='${FRONTEND_URL}/school_information' class="btn btn-success btn-hover-dark" > Renew Form</a>`);
                            }else{
                                $('.sch_status_history').append('School Registration is Approved.');
                                $(".sch_payment_status").text("Incomplete");
                                $('.sch_payment-btn').show();
                                var payment_url = FRONTEND_URL + "/payment_method/" + school.student_info_id + "/" + sch_invoice.invoiceNo;
                                $('.sch_payment-p').append(`<a href=${payment_url} class="btn btn-success btn-hover-dark" > Payment</a>`);
                                $('.sch_payment-status').show();
                            }
                        }
                    }else{
                        if(school.initial_status==2){
                            $('.sch_status_history').append('School is request stop.');
                            $('.sch_cessation-btn').show();
                            $(".sch_cessation-reason").text(school.cessation_reason);
                            $('.sch_renew-btn').show();
                            $('.sch_renew-p').append(`<a href='${FRONTEND_URL}/school_information' class="btn btn-success btn-hover-dark" > Renew Form</a>`);
                        }
                        
                    }
                    

                } else {
                    $('.sch_renew-btn').show();
                    $('.sch_renew-p').append(`<a href='${FRONTEND_URL}/school_information' class="btn btn-success btn-hover-dark" > Renew Form</a>`);
                }

            } else {
                $('.sch_reject-btn').show();
                if (school.initial_status == 0) {
                    $('.sch-reject-p').append(`<a href='${FRONTEND_URL}/school_edit' class="btn btn-success btn-hover-dark" > Update </a>`);
                } else if (school.initial_status == 1) {
                    $('.sch-reject-p').append(`<a href='${FRONTEND_URL}/renew_school_edit' class="btn btn-success btn-hover-dark" > Update </a>`);
                }
                $('.sch_status_history').append('School Registration is Rejected.');

                $('.sch_reject-reason').append(school.reason);
            }

            // if (school.payment_method !=null)
            //     //school.payment_method != "init_sch" || school.payment_method != "renew_sch" || school.payment_method != "renew_exit_sch"
            //      {
            //     $('.sch_period').show();
            //     var now = new Date();
            //     if (school.initial_status == 0) {
            //         var period_date = school.from_valid_date.split(' ');
            //         var new_period_date = period_date[0].split('-');
            //         var period = new_period_date[2] + '-' + new_period_date[1] + '-' + new_period_date[0];
            //         $('#sch_period_time').text(period + " to 31-12-" + now.getFullYear());
            //     } else if (school.initial_status == 1) {
            //         var period_date = school.renew_date.split(' ');
            //         var new_period_date = period_date[0].split('-');
            //         var period = new_period_date[2] + '-' + new_period_date[1] + '-' + new_period_date[0];
            //         $('#sch_period_time').text('01-01-' + now.getFullYear() + " to 31-12-" + now.getFullYear() + 3);
            //     }

            //     if (school.initial_status == 2) {
            //         $('.sch_renew-btn').hide();
            //     } else {
            //         $('.sch_renew-btn').show();
            //         $('.sch_renew-p').append(`<a href='${FRONTEND_URL}/school_information' class="btn btn-success btn-hover-dark" > Renew Form</a>`);
            //     }

            //     $('.sch_payment-status').show();
            //     $('.sch_payment-btn').hide();
            //     $(".sch_payment_status").text("Complete");
            // }else {
            //     $(".sch_payment_status").text("Incomplete");
            // }


        }
    });

}
function laodTeacherByDash(teacher_data, _invoice) {
   
    $.ajax({
        type: 'GET',
        url: BACKEND_URL + "/getTeacher/" + teacher_data.student_info_id,
        success: function (result) {

            var teacher = result.data.pop();
            $('.teacher-title').text('Teacher Information')
            $('.teacher').show();
            $('.cpaff_other').hide();
            $('.da-card').hide();
            localStorage.setItem("teacher_id", teacher.id);
            $('#teacher_name_mm').text(teacher.name_mm);
            $('#teacher_name_eng').text(teacher.name_eng);
            $("#teacher_nrc").text(teacher.nrc_state_region + "/" + teacher.nrc_township + "(" + teacher.nrc_citizen + ")" + teacher.nrc_number);
            $('#teacher_update_email').val(teacher.email);
            $('#teacher_update_phone').val(teacher.phone);
            $('#teacher_update_address').val(teacher.current_address);
            $('#teacher_update_eng_address').val(teacher.eng_current_address);
            $('#teacher_id').val(teacher.id);
            $('#old_profile_photo').val(teacher.image);
            $('#previewTeacherImg').attr("src", BASE_URL + teacher.image);
            $("#teacher_email").text(teacher.email);
            $('#teacher_phone').text(teacher.phone);
            if (teacher.approve_reject_status == 0) {
                $('.teacher_status_history').append('Teacher Registration is checking.');
            } else if (teacher.approve_reject_status == 1) {
                

                if (teacher.offline_user != 1) {
                    var invoice = _invoice.filter(val => {
                        if (val.invoiceNo == "init_tec"+teacher.id || val.invoiceNo == "renew_tec"+teacher.id) {
                            return val.invoiceNo == val.status == 0 == val.dateTime != null;
                            
                        }
                    });
                    
                    if(invoice.length!=0){
                        var invoice = invoice.pop();
                        if (invoice.status == "AP") {
                            
                            var now = new Date();
                            if (teacher.initial_status == 0) {
                                //var period_date = invoice[0].dateTime.split(' ');
                                var new_period_date = invoice.dateTime.split('-');
                                var period = new_period_date[2] + '-' + new_period_date[1] + '-' + new_period_date[0];
                                $('.teacher_status_history').append('Teacher Registration is Approved.');
                                $('.teacher_period').show();
                                $('#teacher_period_time').text(period + " to 31-12-" + now.getFullYear());
                                $('.teacher_payment-status').show();
                            } else if (teacher.initial_status == 1) {
                                $('.teacher_status_history').append('Teacher Registration is Approved.');
                                $('.teacher_period').show();
                                $('#teacher_period_time').text('01-01-' + now.getFullYear() + " to 31-12-" + now.getFullYear());
                                $('.teacher_payment-status').show();
                            }else{
                                $('.teacher_status_history').append('Teacher is request stop.');
                                $('.teacher_cessation-btn').show();
                                $(".teacher_cessation-reason").text(teacher.cessation_reason);
                            }
    
                            $('.teacher_renew-btn').show();
                            $('.teacher_renew-p').append(`<a href='${FRONTEND_URL}/teacher_information' class="btn btn-success btn-hover-dark" > Renew Form</a>`);
                            
                            $('.teacher_payment-btn').hide();
                            $(".teacher_payment_status").text("Complete");
                        }else {
                            if(teacher.initial_status==2){
                                $('.teacher_status_history').append('Teacher is request stop.');
                                $('.teacher_cessation-btn').show();
                                $(".teacher_cessation-reason").text(teacher.cessation_reason);
                                $('.teacher_renew-btn').show();
                                $('.teacher_renew-p').append(`<a href='${FRONTEND_URL}/teacher_information' class="btn btn-success btn-hover-dark" > Renew Form</a>`);
                            }else{
                                $('.teacher_status_history').append('Teacher Registration is Approved.');
                                $(".teacher_payment_status").text("Incomplete");
                                var payment_url = FRONTEND_URL + "/payment_method/" + teacher.student_info_id + "/" + invoice.invoiceNo;
                                $('.teacher_payment-btn').show();
                                $('.teacher_payment-p').append(`<a href=${payment_url} class="btn btn-success btn-hover-dark" > Payment </a>`);
                                $('.teacher_payment-status').show();
                            }
                        }
                    }else{
                        if(teacher.initial_status==2){
                            $('.teacher_status_history').append('Teacher is request stop.');
                            $('.teacher_cessation-btn').show();
                            $(".teacher_cessation-reason").text(teacher.cessation_reason);
                            $('.teacher_renew-btn').show();
                            $('.teacher_renew-p').append(`<a href='${FRONTEND_URL}/teacher_information' class="btn btn-success btn-hover-dark" > Renew Form</a>`);
                        }
                    }
                   
                    
                } else {
                    $('.teacher_status_history').append('Teacher Registration is Approved.');
                    $('.teacher_renew-btn').show();
                    $('.teacher_renew-p').append(`<a href='${FRONTEND_URL}/teacher_information' class="btn btn-success btn-hover-dark" > Renew Form</a>`);
                }
                

            } else {
                $('.teacher_status_history').append('Teacher Registration is Rejected.');
                $('.teacher_reject-btn').show();
                $('.teacher_reject-p').append(`<a href='${FRONTEND_URL}/teacher_register' class="btn btn-success btn-hover-dark" > Update </a>`);
                $('.teacher_reject-reason').append(teacher.reason);
            }

            // if (teacher.payment_method != null) {
            //     $('.teacher_period').show();
            //     var now = new Date();
            //     if (teacher.initial_status == 0) {
            //         var period_date = teacher.from_valid_date.split(' ');
            //         var new_period_date = period_date[0].split('-');
            //         var period = new_period_date[2] + '-' + new_period_date[1] + '-' + new_period_date[0];
            //         $('#teacher_period_time').text(period + " to 31-12-" + now.getFullYear());
            //     } else if (teacher.initial_status == 1) {
            //         $('#teacher_period_time').text('01-01-' + now.getFullYear() + " to 31-12-" + now.getFullYear());
            //     }

            //     $('.teacher_renew-btn').show();
            //     $('.teacher_renew-p').append(`<a href='${FRONTEND_URL}/teacher_information' class="btn btn-success btn-hover-dark" > Renew Form</a>`);
            //     $('.teacher_payment-status').show();
            //     $('.teacher_payment-btn').hide();
            //     $(".teacher_payment_status").text("Complete");
            // } else {
            //     $(".teacher_payment_status").text("Incomplete");
            // }
        }
    });
}

function loadMentorByDash(mentor,email) {
    $('.mentor-title').text('Mentor Information')
    $('.mentor').show();
    $('.cpaff_other').hide();
    $('.da-card').hide();
    localStorage.setItem("mentor_id", mentor.id);
    $('#mentor_name_mm').text(mentor.name_mm);
    $('#mentor_name_eng').text(mentor.name_eng);
    $("#mentor_nrc").text(mentor.nrc_state_region + "/" + mentor.nrc_township + "(" + mentor.nrc_citizen + ")" + mentor.nrc_number);
    $('#mentor_id').val(mentor.id);
    $("#mentor_email").text(email);
    $('#mentor_phone').text(mentor.phone_no);
    $("#mentor_update_email").val(email);
    $("#mentor_update_phone").val(mentor.phone_no);
    $("#mentor_update_address").val(mentor.address);
    $('#old_mentor_profile_photo').val(mentor.image);
    $('#previewMentorImg').attr("src", BASE_URL + mentor.image);
    if (mentor.status == 0) {
        $('.mentor_status_history').append('Mentor Registration is checking.');
    } else if (mentor.status == 1) {
        $('.mentor_status_history').append('Mentor Registration is Approved.');
    } else {
        $('.mentor_status_history').append('Mentor Registration is Rejected.');
        $('.mentor_reject_btn').show();
        $('.mentor_reject_p').append(`<button class="btn btn-success btn-hover-dark" disabled> Update </button>`);
        // $('.mentor_reject_p').append(`<a href='${FRONTEND_URL}/mentor_register' class="btn btn-success btn-hover-dark" > Update </a>`);
        $('.mentor_reject_reason').append(mentor.reject_reason);
    }
}

function firmDashboardData() {
    show_loader();
    $.ajax({
        url: BACKEND_URL + "/get_firm_dashboard_data/" + student_id,
        type: 'get',
        success: function (result) {
            EasyLoading.hide();
            console.log("result >>>", result);
            let data = result.data;
            //let accountancy_firm = result.data.accountancy_firm.slice(-1);
            if (data.accountancy_firm_info_id) {
                $('.title').text('Accountancy Firm')
                $('.acc_firm').show();
                $('.cpaff_other').hide();
                let acc_firm = data.accountancy_firm.slice(-1);
                console.log("acc_firm >>>", acc_firm);
                let firm_ownerships_audits = result.firm_ownerships_audits;
                //console.log("firm_ownerships_audits >>",firm_ownerships_audits);
                acc_firm.forEach(function (acc_firm) {
                    $("#audit_id").val(acc_firm.id);
                    $("#audit_old_profile_photo").val(acc_firm.image);
                    $("#previewAuditImg").attr("src", BASE_URL + acc_firm.image);
                    $("#audit_update_email").val(data.email);
                    $("#audit_phone").val(acc_firm.telephones);
                    $("#audit_address_mm").val(acc_firm.head_office_address_mm);
                    $("#audit_address_eng").val(acc_firm.head_office_address);

                    document.getElementById('firm_img').src = BASE_URL + acc_firm.image;
                    $('#acc_firm_reg_no').text(acc_firm.accountancy_firm_reg_no);
                    $('#acc_firm_name').text(acc_firm.accountancy_firm_name);
                    $("#head_office").text(acc_firm.head_office_address);
                    $("#head_office_mm").text(acc_firm.head_office_address_mm);
                    $(".email").text(acc_firm.h_email);
                    $('.phone').text(acc_firm.telephones);

                    if (acc_firm.status == 2) {
                        $('#reject_remark_box').css("display", "block");
                        $('.reject_remark').text(acc_firm.remark);
                    }

                    // if(acc_firm.offline_user == 1){
                    //   $("#firm_payment_btn").css('display','none');
                    // }

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
                            $('#reject_register_btn_audit').css("display", "block");
                            $('.payment-btn').css("display", "none");
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
                            $('#reject_register_btn_non_audit').css("display", "block");
                        }
                    }
                });


            }

        }
    });
}

function updateProfileTeacher() {
    var formData = new FormData($("#teacher_update_form")[0]);

    var teacher_id = $('#teacher_id').val();
    formData.append('membership', 'teacher');
    formData.append('old_image', $('#old_profile_photo').val());
    formData.append('phone', $('#teacher_update_phone').val());
    formData.append('address', $("#teacher_update_address").val());
    formData.append('eng_address', $("#teacher_update_eng_address").val());
    formData.append('_method', 'PATCH');
    show_loader();
    $.ajax({
        url: BACKEND_URL + "/update_profile/" + teacher_id,
        type: 'POST',
        contentType: false,
        processData: false,
        data: formData,
        success: function (data) {
            EasyLoading.hide();
            successMessage(data.message);
            $('#profileModelTeacher').modal('toggle');
            location.reload();
        }
    });
}
function updateProfileSchool() {
    var formData = new FormData($("#school_update_form")[0]);

    var school_id = $('#school_id').val();
    formData.append('membership', 'school');
    formData.append('old_image', $('#old_school_profile_photo').val());
    formData.append('phone', $('#sch_update_phone').val());
    formData.append('address', $("#sch_update_address").val());
    formData.append('eng_address', $("#sch_update_eng_address").val());
    formData.append('_method', 'PATCH');
    show_loader();
    $.ajax({
        url: BACKEND_URL + "/update_profile/" + school_id,
        type: 'POST',
        contentType: false,
        processData: false,
        data: formData,
        success: function (data) {
            EasyLoading.hide();
            successMessage(data.message);
            $('#profileModelSchool').modal('toggle');
            location.reload();
        }
    });
}
function changePasswordTeacher() {
    show_loader();
    if ($("input[id=teacher_password]").val() != $("input[id=teacher_confirm_password]").val()) {
        EasyLoading.hide();
        $("input[id=teacher_password]").val('');
        $("input[id=teacher_confirm_password]").val('');
        $("input[id=teacher_password]").addClass('is-invalid');
        $("input[id=teacher_confirm_password]").addClass('is-invalid');
        $('#teacher_err_message').text("Your password and confirm password do not match!");
    } else {
        var formData = new FormData($("#school_teacher_form")[0]);
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
                $('#pwModalTeacher').modal('toggle');
                location.reload();
            },
            error: function (err) {
                EasyLoading.hide();
                if (err.status == 401) {
                    $('#teacher_old_pwd').addClass('is-invalid');
                    $('#teacher_old_err_meg').text(err.responseJSON.error);
                }
            }
        });
    }
}
function updateProfileAudit() {
    var formData = new FormData($("#audit_update_form")[0]);

    var audit_id = $('#audit_id').val();
    formData.append('membership', 'audit');
    formData.append('old_image', $('#audit_old_profile_photo').val());
    formData.append('audit_phone', $('#audit_phone').val());
    formData.append('audit_address_mm', $("#audit_address_mm").val());
    formData.append('audit_address_eng', $("#audit_address_eng").val());
    formData.append('_method', 'PATCH');
    show_loader();
    $.ajax({
        url: BACKEND_URL + "/update_profile/" + audit_id,
        type: 'POST',
        contentType: false,
        processData: false,
        data: formData,
        success: function (data) {
            EasyLoading.hide();
            successMessage(data.message);
            $('#profileModelAudit').modal('toggle');
            location.reload();
        }
    });
}
function changePasswordAudit() {
    show_loader();
    if ($("input[id=password_audit]").val() != $("input[id=confirm_password_audit]").val()) {
        EasyLoading.hide();
        $("input[id=password_audit]").val('');
        $("input[id=confirm_password_audit]").val('');
        $("input[id=password_audit]").addClass('is-invalid');
        $("input[id=confirm_password_audit]").addClass('is-invalid');
        $('#err_message').text("Your password and confirm password do not match!");
    } else {
        var formData = new FormData($("#audit_chagne_pw_form")[0]);
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
                $('#pwModalAudit').modal('toggle');
                location.reload();
            },
            error: function (err) {
                EasyLoading.hide();
                if (err.status == 401) {
                    $('#old_pwd_audit').addClass('is-invalid');
                    $('#old_err_msg_audit').text(err.responseJSON.error);
                }
            }
        });
    }
}

function updateProfileMentor() {
    var formData = new FormData($("#mentor_update_form")[0]);

    var mentor_id = $('#mentor_id').val();
    formData.append('membership', 'mentor');
    formData.append('old_image', $('#old_mentor_profile_photo').val());
    formData.append('phone', $('#mentor_update_phone').val());
    formData.append('address', $("#mentor_update_address").val());
    formData.append('_method', 'PATCH');
    show_loader();
    $.ajax({
        url: BACKEND_URL + "/update_profile/" + mentor_id,
        type: 'POST',
        contentType: false,
        processData: false,
        data: formData,
        success: function (data) {
            EasyLoading.hide();
            successMessage(data.message);
            $('#profileModelMentor').modal('toggle');
            location.reload();
        }
    });
}

function allowToRenew() {
    var student = JSON.parse(localStorage.getItem("studentinfo"));
    var student_id = student.id;
    var firm_id = student.accountancy_firm_info_id;
    if(student!=null){
      $.ajax({
        type: "GET",
        url: BACKEND_URL+"/checkVerify/"+student_id+"/"+firm_id,
        success: function (data){
          console.log("allow to renew",data[0]);

          var acc_firm_data = data[0].acc_firm;
          var today = new Date();
          var current_month = today.getMonth()+1;

          if(current_month >= 10 || current_month <= 4){
            acc_firm_data.forEach(function(acc_firm){
              if(acc_firm.audit_firm_type_id == 1){
                // audit firm
                var audit_invoice_status = data[0].audit_invoice_status[0].status;
                if(acc_firm.status == 1 && acc_firm.is_renew == 0 && acc_firm.offline_user == 1){
                  // to renew approved offline users
                  console.log("1");
                  $('#check_renew').css('display','block');
                  $('#check_renew_nonaudit').css('display','none');
                  $("#renew_btn").css('display','block'); // renew btn in information page
                  $(".register-btn").css('display','none'); // register btn in information page
                }
                else if(acc_firm.status == 1  && acc_firm.offline_user != 1 && audit_invoice_status == "AP" ){
                  // to renew normal users who are expired
                  console.log("2");
                  $('#check_renew').css('display','block');
                  $('#check_renew_nonaudit').css('display','none');
                  $("#renew_btn").css('display','block'); // renew btn in information page
                  $(".register-btn").css('display','none'); // register btn in information page
                }
              }
              else{
                console.log("3");
                // non-audit firm
                var nonaudit_invoice_status = data[0].nonaudit_invoice_status[0].status;
                if(acc_firm.status == 1 && acc_firm.is_renew == 0 && acc_firm.offline_user == 1){
                  // to renew approved offline users
                  $('#check_renew').css('display','none');
                  $('#check_renew_nonaudit').css('display','block');
                  $("#renew_btn_nonaudit").css('display','block'); // renew btn in information page
                  $(".register-btn").css('display','none'); // register btn in information page
                }

                else if(acc_firm.status == 1  && acc_firm.offline_user != 1 && nonaudit_invoice_status == "AP"){
                  // to renew normal users who are expired
                  console.log("4");
                  $('#check_renew').css('display','none');
                  $('#check_renew_nonaudit').css('display','block');
                  $("#renew_btn_nonaudit").css('display','block'); // renew btn in information page
                  $(".register-btn").css('display','none'); // register btn in information page
                }
              }
            });
          }
        }
      })
    }
}

function checkRenewForInitial(){
  var student =JSON.parse(localStorage.getItem("studentinfo"));
  var student_id = student.id;
  if(student!=null){
    $.ajax({
      type: "GET",
      url: BACKEND_URL+"/getDateRange/"+student_id,
      success: function (data){
        console.log("date_query >>>",data);
        if(data.status == 1){ // verify status will shown if form is approved
          if(data.type == 'renew'){
            $("#message").append("<span class='text-warning'>"+data.message+"</span>");
          }
          else if(data.type == 'next'){
            $("#message").append("<span class='text-success'>"+data.message+"</span>");
            //$("#check_renew").css('display','block');
          }
          else{
            $("#message").append("<span class='text-success'>"+data.message+"</span>");

          }
        }
      }
    })
  }
}
