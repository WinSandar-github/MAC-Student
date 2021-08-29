function user_profile(){
     
    show_loader();
   
    $.ajax({
        url:   BACKEND_URL + "/user_profile/"+student_id,
        type: 'get',
        success: function(result){
           EasyLoading.hide();


            let data = result.data;
 


            if(data.accountancy_firm_info_id){

                $('.title').text('Accountancy Firm')
                $('.acc_firm').show();
                let acc_firm = data.accountancy_firm;
                console.log(acc_firm.h_email)

                $('#acc_firm_reg_no').text(acc_firm.accountancy_firm_reg_no);
                $('#acc_firm_name').text(acc_firm.accountancy_firm_name);
                $("#head_office").text(acc_firm.township+" Township," +acc_firm.city
                + " City, "+acc_firm.state_region+" State,");

                $(".email").text(acc_firm.h_email);
                $('.phone').text(acc_firm.telephones);

                if(acc_firm.status == 0)
                {
                    $('.status_history').append('Your Audit Firm Form is checking.');
                }else if(acc_firm.status == 1 ){
                    $('.status_history').append('Your Audit Firm Form is Approved.');

                }else{
                    $('.status_history').append('Your Audit Firm Form is Rejected.');

                }

            }else if(data.school){
                $('.title').text('School Information')
                $('.school').show();
                let school = data.school;

                $('#sch_name_mm').text(school.name_mm);
                $('#sch_name_eng').text(school.name_eng);
                $("#sch_nrc").text(school.nrc_state_region+"/" +school.nrc_township+ "("+school.nrc_citizen+")"+school.nrc_number );
                $("#sch_date_of_birth").text(school.date_of_birth);
                $("#sch_email").text(school.email);
                $('#sch_phone').text(school.phone);

                if(school.approve_reject_status == 0)
                {
                    $('.status_history').append('School Registration is checking.');
                }else if(school.approve_reject_status == 1 ){
                    $('.status_history').append('School Registration is Approved.');

                }else{
                    $('.status_history').append('School Registration is Rejected.');

                }

            }else if(data.teacher){
                $('.title').text('Teacher Information')
                $('.teacher').show();
                let teacher = data.teacher;
                console.log(teacher)

                $('#teacher_name_mm').text(teacher.name_mm);
                $('#teacher_name_eng').text(teacher.name_eng);
                $("#teacher_nrc").text(teacher.nrc_state_region+"/" +teacher.nrc_township+ "("+teacher.nrc_citizen+")"+teacher.nrc_number );
                // $("#sch_date_of_birth").text(teacher.date_of_birth);
                // $("#sch_date_of_birth").hide();

                $("#teacher_email").text(teacher.email);
                $('#teacher_phone').text(teacher.phone);

                if(teacher.approve_reject_status == 0)
                {
                    $('.status_history').append('Teacher Registration is checking.');
                }else if(teacher.approve_reject_status == 1 ){
                    $('.status_history').append('Teacher Registration is Approved.');

                }else{
                    $('.status_history').append('Teacher Registration is Rejected.');

                }

            }
            else if(data.mentor){
                $('.title').text('Mentor Information')
                $('.school').show();
                let mentor = data.mentor;

                $('#sch_name_mm').text(mentor.name_mm);
                $('#sch_name_eng').text(mentor.name_eng);
                $("#sch_nrc").text(mentor.nrc_state_region+"/" +mentor.nrc_township+ "("+mentor.nrc_citizen+")"+mentor.nrc_number );
                $("#sch_date_of_birth").text(mentor.date_of_birth);
                $("#sch_email").text(mentor.m_email);
                $('#sch_phone').text(mentor.phone_no);

                if(mentor.status == 0)
                {
                    $('.status_history').append('Mentor Registration is checking.');
                }else if(mentor.status == 1 ){
                    $('.status_history').append('Mentor Registration is Approved.');

                }else{
                    $('.status_history').append('Mentor Registration is Rejected.');

                }

            }
            else{
                $('.da_cpa').show();
                $('.title').text("Student Information")

                let exam_register = data.exam_registers;
                $('#name_mm').text(data.name_mm);
                $('#name_eng').text(data.name_eng);
                $("#nrc").text(data.nrc_state_region+"/" +data.nrc_township+ "("+data.nrc_citizen+")"+data.nrc_number );
                $("#date_of_birth").text(data.date_of_birth);
                $("#email").text(data.email);
                $('#phone').text(data.phone);

                let latest_course_reg = data.student_course_regs.slice(-1)
                let latest_stu_reg =  data.student_register.slice(-1);
                let last_exam =  data.exam_registers.slice(-1);

                document.getElementById('image').src=BASE_URL+data.image;
                var course_html;
                 let exam = exam_register.filter(exam => exam.grade == 1)


                exam.map(e => {
                    course_html += `<tr>
                                        <td>${e.course.name}</td>
                                        <td>${e.batch.name}</td>
                                        <td>${e.date}</td>
                                    </tr>`
                })
                $('.course').html(course_html)




                let next_course;

                switch(latest_course_reg[0].batch.course.code){
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
                        next_course = "CPA Full Fleged"
                    break;
                    default:
                        next_course = "DA II"

                    break;

                }
                $('#next_course').text(next_course)

                console.log(data)

                

              


                //show status annoumance
                if(latest_course_reg[0]){

                    $('#batch_name').text(latest_course_reg[0].batch.name) ;
                    $('#course_name').text(latest_course_reg[0].batch.course.name);
                    $('.regi_fee_txt').text('Mac Registration Fees')
                    $('.self_study').show();
                    $('.private_school').show();
                    $('#registration_fee').text(latest_course_reg[0].batch.course.mac_registration_fee);
                    $('#selfstudy_fee').text(latest_course_reg[0].batch.course.selfstudy_registration_fee);
                     $('#pschool_fee').text(latest_course_reg[0].batch.course.privateschool_registration_fee);


                    if(latest_course_reg[0].batch.exam_start_date != null){
                        $('#exam_date').text(`${latest_course_reg[0].batch.exam_start_date} to ${latest_course_reg[0].batch.exam_end_date}`);
                    }else{
                        $('#exam_date').text("မရှိသေးပါ")
                    }
                    

                    let status_course ;
 
                    if(latest_course_reg[0].approve_reject_status == 0 )
                    {
                        $('.status').append(`
                        <tr>
                            <td>${latest_course_reg[0].batch.course.name} Application Form</td>
                            <td>${formatDate(latest_course_reg[0].created_at)}</td>
                            <td>-</td>
                            <td>Checking</td>
                        </tr>
                        `);
                      
                    }else if(latest_course_reg[0].approve_reject_status == 1)
                    {
                        $('.status').append(`
                        <tr>
                            <td>${latest_course_reg[0].batch.course.name} Application Form</td>
                            <td>${formatDate(latest_course_reg[0].created_at)}</td>
                            <td>${formatDate(latest_course_reg[0].updated_at)}</td>
                            <td>Approve</td>
                        </tr>
                        `);

                    
                        // $('.status').append(`<p >Your ${latest_course_reg[0].batch.course.name}  Your Application Form is approved  on the   .</p>`)
                        //show data depend on Student Register status
                        
                        if(latest_stu_reg[0] && latest_course_reg[0].batch.course.code == latest_stu_reg[0].course.code )

                        {
                            $('.regi_fee_txt').text('Exam Registration Fees')
                            $('.self_study').hide();
                            $('.private_school').hide();
                            $('#registration_fee').text(latest_course_reg[0].batch.course.exam_fee);
                            if(latest_stu_reg[0].status == 0 || latest_stu_reg[0] == null)
                            {
                                $('.status').append(`
                                        <tr>
                                            <td>${latest_course_reg[0].batch.course.name} Registraion Form</td>
                                            <td>${formatDate(latest_stu_reg[0].created_at)}</td>
                                            <td>-</td>
                                            <td>checking</td>
                                        </tr>
                                        `);
                                // $('.status').append('<p>Your Registration Form is checking.</p>')

                            }else if(latest_stu_reg[0].status == 1)
                            {
                              
                                // $('.status').append(`<p>Your Registration Form is Approved  on the  ${formatDate(latest_course_reg[0].updated_at)}.</p>`)
                                $('.status').append(`
                                <tr>
                                    <td>${latest_course_reg[0].batch.course.name} Registration Form</td>
                                    <td>${formatDate(latest_stu_reg[0].created_at)}</td>
                                    <td>${formatDate(latest_stu_reg[0].updated_at)}</td>
                                    <td>Approve</td>
                                </tr>
                                `);
                                if(last_exam[0] && last_exam[0].course.code == latest_course_reg[0].batch.course.code){
                                    if(last_exam[0].status == 0)
                                    {
                                        $('.status').append(`
                                                        <tr>
                                                            <td>${latest_course_reg[0].batch.course.name} Exam Form</td>
                                                            <td>${formatDate(last_exam[0].created_at)}</td>
                                                            <td>-</td>
                                                            <td>Checking</td>
                                                        </tr>
                                                        `);
                                        
                                    }
                                    else if(last_exam[0].status == 1)
                                    {
                                        // $('.status').append(`<p>Your Exam Form is Approved  on the  ${formatDate(latest_course_reg[0].updated_at)}.</p>   `)
                                       
                                        if(last_exam[0].grade == 1){
                                                $('.regi_fee_txt').text('Application Form Fees')
                                                $('#batch_name').text('-');
                                                $('#course_name').text('-');
                                                $('#exam_date').text('-');

                                                
                                                // $('.status').append(`<p>You have been pass ${last_exam[0].course.name} </p>`)
                                                $('.status').append(`
                                                <tr>
                                                    <td>${latest_course_reg[0].batch.course.name} Exam Form</td>
                                                    <td>${formatDate(last_exam[0].created_at)}</td>
                                                    <td>${formatDate(last_exam[0].updated_at)}</td>
                                                    <td>Pass</td>
                                                </tr>
                                                `);

                                                let course_code;
                                                let form_url;
                                                let show_text;
                                                switch(last_exam[0].course.code){
                                                    case 'da_1':
                                                        course_code = "da_2",
                                                        form_url =  '/da_two_register/',
                                                        show_text = "Registration Form"
                                                        
                                                    break;
                                                    case 'da_2':
                                                        course_code = "cpa_1",
                                                        form_url = '/cpa_one_form/',
                                                        show_text = "Application form"
                                                    break;
                                                    case 'cpa_1':
                                                        course_code = "cpa_2",
                                                        form_url    = '/cpa_two_register/',
                                                        show_text = "Registration Form"

                                                    break;
                                                    case 'cpa_2':
                                                        course_code = "Membership"
                                                        form_url = "/cpa_ff_register"
                                                    break;
                                                    default:
                                                        course_code = "da_1",
                                                        form_url =  '/da_one_form/'
                            
                                                    break;
                            
                                                }
                                                localStorage.setItem('exam_grade',last_exam[0].grade)

                            
                                                console.log(course_code,FRONTEND_URL)
                            
                            
                                                get_course_by_code(course_code).then( data => {
                                                   
                            
                                                    // let batch = data.data[0].active_batch[0];
                                                    console.log(data.data)
                            
                                                    if(Object.keys(data.data).length === 0){
                            
                                                        $('.status').append(`<tr><td colspan=2></td><td>Action</td><td> <a href='${FRONTEND_URL}${form_url}' class="btn btn-sm btn-success" > CPA Full Flaged Form</a></td></tr>`);
                            
                                                    
                                                    }else{
                                                    if(data){
                            
                                                        $('#registration_fee').text(data.data[0].active_batch[0].course.form_fee)

                                                        
                            
                                                        let batch = data.data[0].active_batch[0];
                                                        console.log(batch,"Batchhhhh")
                                                        if(batch != undefined){
                                                            
                                                            localStorage.setItem('course_id',batch.course.id);
                                                            if(last_exam[0].course.code == "da_1" ||  last_exam[0].course.code == "cpa_1")
                                                            {
                                                                $('.status').append( `
                                                                <tr><td colspan=2></td><td>Action</td>
                                                                <td>
                                
                                                               
                                                                    <span class="nav-item dropdown ">
                                                                    <a href="#" class="nav-link dropdown-toggle " data-toggle="dropdown">${show_text} </a>
                                                                    <div class="dropdown-menu">
                                                                        <a href="${FRONTEND_URL+form_url}${batch.id}?study_type=3" class="dropdown-item">Mac</a>
                                                                        <a href="${FRONTEND_URL+form_url}${batch.id}?study_type=1" class="dropdown-item">Selfstudy</a>
                                                                        <a href="${FRONTEND_URL+form_url}${batch.id}?study_type=2" class="dropdown-item">Private School</a>
                                                                    </div>
                                                                </span>
                                                                <td>
                                                                </td>
                                                                </tr>
                                
                                                            `);
                                                            }else{

                                                                $('.status').append(`<tr><td colspan=2></td><td>Action</td><td><a href='${FRONTEND_URL}${form_url}${batch.id}' class="btn btn-sm btn-success" > ${data.data[0].name} ${show_text}</a></td></tr>`);
                                                            }
                                                            
                                                           
                                                        }else{
                                                            $('.status').append(`<tr><td colspan=2></td><td>Action</td><td></td><a href='javascript:void(0)' onclick='alert("The class is not currently ‌available")"> Course</a></td></tr>`);
                                                        }

                                                       
                              
                                                        
                                                    } }
                                                })

                                        }else{
                                            $('.status').append(`
                                            <tr>
                                                <td>${latest_course_reg[0].batch.course.name} Exam Form</td>
                                                <td>${formatDate(last_exam[0].created_at)}</td>
                                                <td>${formatDate(last_exam[0].updated_at)}</td>
                                                <td>Approve</td>
                                            </tr>
                                            `);

                                        }



                                    }
                                    else
                                    {
                                        $('.status').append(`
                                        <tr>
                                            <td>${latest_course_reg[0].batch.course.name} Registration Form</td>
                                            <td>${formatDate(last_exam[0].created_at)}</td>
                                            <td>${formatDate(last_exam[0].updated_at)}</td>
                                            <td>Reject</td>
                                        </tr>
                                        `);

                                    }
                                }else{
                                
                                    var date = new Date();
                                    var current_month = date.getMonth();
 
                                    let previous_month = current_month - 1;
                                     var end_date = new Date(latest_course_reg[0].batch.exam_start_date).getMonth();
                                     // console.log(data.student_register[i],"Student Register")


                                    if(previous_month <= current_month && end_date >= current_month){

                                        let exam_url ;
                                        let exam_text = " Exam Registration Form";
                                        switch(latest_course_reg[0].batch.course.code){
                                            case 'da_1':
                                            exam_url = '/exam_register';
                                            break;
                                            case 'da_2':
                                            exam_url = '/da_two_exam_register';
                                            break;
                                            case 'cpa_1':
                                                if(latest_stu_reg[0].mentor_id === null){
                                                    if(latest_stu_reg[0].type == 0){
                                                        exam_url = "/aa_self_form/"+student_id
                                                        exam_text = "AA Register Form(Self Study)"
                                                    }else if(latest_stu_reg[0].type == 1){
                                                        exam_url = "/aa_private_form/"+student_id
                                                        exam_text = "AA Register Form(Private)"
                                                    }else{
                                                        exam_url = "/aa_mac_form/"+student_id
                                                        exam_text = "AA Register Form(MAC)"
                                                    }
                                                }else{

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
                                        
                                        $('.status').append(`<tr><td colspan=2></td><td>Action</td>
                                            <td>
                                                <a href="${FRONTEND_URL}${exam_url}" class="btn btn-sm btn-success text-light"> ${exam_text}</a>                                            
                                            </td>
                                        </tr>
            
                                        `);

                                    }else{
                                         $('.status').append(`<tr><td colspan=2></td><td>Action</td>
                                            <td>
                                            <p>The exam schedule will be announced soon</p>
                                            </td>
                                            </tr>
                                            `);
                                    }




                                }
                            }else                    
                            {
                                // $('.status').append('<P>Your Registration Form is checking</P>')
                                $('.status').append(`
                                <tr>
                                    <td>${latest_course_reg[0].batch.course.name} Exam Form</td>
                                    <td>${formatDate(latest_stu_reg[0].created_at)}</td>
                                    <td>${formatDate(latest_stu_reg[0].updated_at)}</td>
                                    <td>Reject</td>
                                </tr>
                                `);
                            }

                        }else{


                            switch(latest_course_reg[0].batch.course.code){
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
                            localStorage.setItem('course_id',latest_course_reg[0].batch.course.id);
                            let action_url;
                             $('.status').append( `
                                <tr><td colspan=2></td><td>Action</td>
                                <td>

                               
                                    <span class="nav-item dropdown ">
                                    <a href="#" class="nav-link dropdown-toggle " data-toggle="dropdown">Registration Form</a>
                                    <div class="dropdown-menu">
                                        <a href="${FRONTEND_URL+register_url}?study_type=3" class="dropdown-item">Mac</a>
                                        <a href="${FRONTEND_URL+register_url}?study_type=1" class="dropdown-item">Selfstudy</a>
                                        <a href="${FRONTEND_URL+register_url}?study_type=2" class="dropdown-item">Private School</a>
                                    </div>
                                </span>
                                <td>
                                </td>
                                </tr>

                            `);

                        }


                    }else {
                        status_course = (`
                        <tr>
                            <td>${latest_course_reg[0].batch.course.name}</td>
                            <td>${formatDate(latest_course_reg[0].created_at)}</td>
                            <td>${formatDate(latest_course_reg[0].updated_at)}</td>
                            <td>Reject</td>
                        </tr>
                        `);
                        // $('.status').append('Your Application Form is Reject')
                    }

                    // if(latest_course_reg[0] || las[0] || last_exam[0])
                    // {
                    //     $('.status').append(status_course);
                    // }

                    // $('.status').append(status_course)
                   
                }



                

               
                //show History of Student record
                $.each(data.student_course_regs,function(i,current_class){
                    
                 
                    if(i < (data.student_course_regs.length - 1) ){
                       
                        
                      

                        // $('.status_history').append(`<h6 class=" text-center"">${current_class.batch.course.name}</h6><hr>`);


                        if(current_class.approve_reject_status == 0 )
                        {
                            $('.status_history').append(`<tr>
                                <td>${current_class.batch.course.name} Application Form</td>
                                <td>${formatDate(current_class.created_at)}</td>
                                <td>-</td>
                                <td>Checking</td>
                            </tr>
                            `);
                        }else if(current_class.approve_reject_status == 1)
                        {
                                               


                             $('.status_history').append(`<tr>
                                <td>${current_class.batch.course.name} Application Form</td>
                                <td>${formatDate(current_class.created_at)}</td>
                                <td>${formatDate(current_class.updated_at)}</td>
                                <td>Approve</td>
                            </tr>
                            `);
                            //show data depend on Student Register status
                            if(data.student_register[i]){
                                if(data.student_register[i].status == 0 || data.student_register[i] == null)
                                {
                                    // $('.status_history').append('<p>Your Registration Form is checking.</p>')
                                    $('.status_history').append(`<tr>
                                        <td>${current_class.batch.course.name} Registration Form</td>
                                        <td>${formatDate(data.student_register[i].created_at)}</td>
                                        <td>-</td>
                                        <td>Checking</td>
                                    </tr>
                                    `);
                                    

                                }else if(data.student_register[i].status == 1)
                                {
                                    // $('.status_history').append(`<p>Your Registration Form is Approved  on the  ${formatDate(current_class.updated_at)}.</p>`)
                                    $('.status_history').append(`<tr>
                                        <td>${current_class.batch.course.name} Registration Form</td>
                                        <td>${formatDate(data.student_register[i].created_at)}</td>
                                        <td>${formatDate(data.student_register[i].updated_at)}</td>
                                        <td>Approve</td>
                                    </tr>
                                    `);
                                    if(data.exam_registers[i]){
                                        if(data.exam_registers[i].status == 0)
                                        {
                                            // $('.status_history').append('<p>Your Exam Form is checking.</p>')
                                            $('.status_history').append(`<tr>
                                                <td>${current_class.batch.course.name} Exam Form</td>
                                                <td>${formatDate(data.exam_registers[i].created_at)}</td>
                                                <td>-</td>
                                                <td>Checking</td>
                                            </tr>
                                        `);
                                        }
                                        else if(data.exam_registers[i].status == 1)
                                        {
                                            // $('.status_history').append(`<p>Your Exam Form is Approved  on the  ${formatDate(current_class.updated_at)}.</p>`)
                                           
                                            if(data.exam_registers[i].grade == 1){
                                                // $('.status_history').append(`<p>You have been pass ${data.exam_registers[i].course.name} </p>`)
                                                $('.status_history').append(`<tr>
                                                <td>${current_class.batch.course.name} Exam Form</td>
                                                <td>${formatDate(data.exam_registers[i].created_at)}</td>
                                                <td>${formatDate(data.exam_registers[i].updated_at)}</td>
                                                <td>Pass</td>
                                            </tr>
                                            `);

                                            }else{
                                                $('.status_history').append(`<tr>
                                                <td>${current_class.batch.course.name} Exam Form</td>
                                                <td>${formatDate(data.exam_registers[i].created_at)}</td>
                                                <td>${formatDate(data.exam_registers[i].updated_at)}</td>
                                                <td>Approve</td>
                                            </tr>
                                            `);
                                            }



                                        }
                                        else
                                        {
                                            // $('.status_history').append('<p>Your Exam Form is checking</p>')
                                            $('.status_history').append(`<tr>
                                                <td>${current_class.batch.course.name} Exam Form</td>
                                                <td>${formatDate(data.exam_registers[i].created_at)}</td>
                                                <td>-</td>
                                                <td>Approve</td>
                                            </tr>
                                            `);

                                        }
                                    }else{

                                        var date = new Date();
                                        let previous_month = date.setDate(date.getDate() - 6);
                                        var end_date = new Date(current_class.batch.exam_start_date);
                                        console.log(data.student_register[i],"Student Register")


                                        if(previous_month <= date && end_date >= date){

                                            let exam_url ;
                                            let exam_text = " Exam Registration Form";
                                            switch(current_class.batch.course.code){
                                                case 'da_1':
                                                exam_url = '/exam_register';
                                                break;
                                                case 'da_2':
                                                exam_url = '/da_two_exam_register';
                                                break;
                                                case 'cpa_1':
                                                    if(data.student_register[i].mentor_id === null){
                                                        if(data.student_register[i].type == 0){
                                                            exam_url = "/aa_self_form/"+student_id
                                                            exam_text = "AA Register Form(Self Study)"
                                                        }else if(data.student_register[i].type == 1){
                                                            exam_url = "/aa_private_form/"+student_id
                                                            exam_text = "AA Register Form(Private)"
                                                        }else{
                                                            exam_url = "/aa_mac_form/"+student_id
                                                            exam_text = "AA Register Form(MAC)"
                                                        }
                                                    }else{

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
                                            


                                        }else{
                                            // $('.status_history').append(`<div>
                                            //     <p>The exam schedule will be announced soon</p>
                                            // </div>`)
                                        }




                                    }
                                }else                    {
                                    // $('.status_history').append('<P>Your Registration Form is checking</P>')
                                    $('.status_history').append(`<tr>
                                        <td>${current_class.batch.course.name} Registration Form</td>
                                        <td>${formatDate(current_class.created_at)}</td>
                                        <td>${formatDate(current_class.updated_at)}</td>
                                        <td>Approve</td>
                                    </tr>
                                    `);
                                }

                            }else{


                                switch(current_class.batch.course.code){
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
                                localStorage.setItem('course_id',current_class.batch.course.id);

                                $('.status_history').append(`

                                <a href="${FRONTEND_URL+register_url}" class="btn btn-sm btn-success"> Registration Form</a>`);

                            }


                        }else {
                            // $('.status_history').append('Your Application Form is Reject')
                            $('.status_history').append(`<tr>
                                <td>${current_class.batch.course.name} Application Form</td>
                                <td>${formatDate(current_class.created_at)}</td>
                                <td>${formatDate(current_class.updated_at)}</td>
                                <td>Reject</td>
                            </tr>
                            `);
                        }
                    }
                    console.log()

                })

                // if(last_exam[0].grade == 1 &&
                //     latest_course_reg[0].approve_reject_status == 1 &&
                //     latest_course_reg[0].batch.course.id == latest_stu_reg[0].form_type &&
                //     latest_course_reg[0].batch.course.id == last_exam[0].course.id &&
                //     latest_stu_reg[0].status == 1 &&
                //     last_exam[0].status == 1 ){
                  
                  
                // }


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
