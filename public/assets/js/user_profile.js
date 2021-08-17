function user_profile(){
  
    $.ajax({
        url:   BACKEND_URL + "/user_profile/"+student_id,
        type: 'get',
      
        success: function(result){
            
            
            let data = result.data;
            console.log(data)
          
            

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
                    $('.status').append('Your Audit Firm Form is checking');
                }else if(acc_firm.status == 1 ){
                    $('.status').append('Your Audit Firm Form is Approve');

                }else{
                    $('.status').append('Your Audit Firm Form is Reject');

                }

            }else if(data.school){
                $('.title').text('School Information')
                $('.school').show();
                let school = data.school;
                console.log(school)
 
                $('#sch_name_mm').text(school.name_mm);
                $('#sch_name_eng').text(school.name_eng);
                $("#sch_nrc").text(school.nrc_state_region+"/" +school.nrc_township+ "("+school.nrc_citizen+")"+school.nrc_number );
                $("#sch_date_of_birth").text(school.date_of_birth);
                $("#sch_email").text(school.email);
                $('#sch_phone').text(school.phone);    
                
                if(school.approve_reject_status == 0)
                {
                    $('.status').append('School Registration is checking');
                }else if(school.approve_reject_status == 1 ){
                    $('.status').append('School Registration is Approve');

                }else{
                    $('.status').append('School Registration is Reject');

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
                    $('.status').append('Teacher Registration is checking');
                }else if(teacher.approve_reject_status == 1 ){
                    $('.status').append('Teacher Registration is Approve');

                }else{
                    $('.status').append('Teacher Registration is Reject');

                }

            }
            else if(data.mentor){
                $('.title').text('Mentor Information')
                $('.school').show();
                let mentor = data.mentor;
                console.log(mentor)
 
                $('#sch_name_mm').text(mentor.name_mm);
                $('#sch_name_eng').text(mentor.name_eng);
                $("#sch_nrc").text(mentor.nrc_state_region+"/" +mentor.nrc_township+ "("+mentor.nrc_citizen+")"+mentor.nrc_number );
                $("#sch_date_of_birth").text(mentor.date_of_birth);
                $("#sch_email").text(mentor.m_email);
                $('#sch_phone').text(mentor.phone_no);    
                
                // if(mentor.approve_reject_status == 0)
                // {
                //     $('.status').append('School Registration is checking');
                // }else if(mentor.approve_reject_status == 1 ){
                //     $('.status').append('School Registration is Approve');

                // }else{
                //     $('.status').append('Your Audit Firm Form is Reject');

                // }

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
               
                let current_class_reg = data.student_course_regs.slice(-1)
                let current_reg =  data.student_register.slice(-1);
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
                      
             
    
               
                //Current Batch Information
                $('#batch_name').text(current_class_reg[0].batch.name);
                $('#course_name').text(current_class_reg[0].batch.course.name);
                if(current_class_reg[0].batch.exam_start_date != null){
                    $('#exam_date').text(`${current_class_reg[0].batch.exam_start_date} to ${current_class_reg[0].batch.exam_end_date}`);
                }else{
                    $('#exam_date').text("မရှိသေးပါ")
                }

                let next_course;
 
                switch(current_class_reg[0].batch.course.code){
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
                        next_course = "Membership"
                    break;
                    default:
                        next_course = "DA II"

                    break;

                }

                $('#next_course').text(next_course)


                
    
                console.log(data.student_course_regs,"Student ")
              
                $.each(data.student_course_regs,function(i,current_class){

                    $('.status').append(`<h6 class="my-2">${current_class.batch.course.name}</h6><hr>`);
                    

                    if(current_class.approve_reject_status == 0 )
                    {
                        $('.status').append('Your Application Form is checking')
                    }else if(current_class.approve_reject_status == 1)
                    {

                        
                        $('.status').append(`<p>Your ${current_class.batch.course.name}  Application Form is Approve.</p>`)
                        //show data depend on Student Register status
                        if(data.student_register[i]){
                            if(data.student_register[i].status == 0 || data.student_register[i] == null)
                            {
                                $('.status').append('<p>Your Registration Form is checking</p>')
                                
                            }else if(data.student_register[i].status == 1)
                            {
                                $('.status').append('<p>Your Registration Form is Approve</p>')
                                 
                                if(data.exam_registers[i]){
                                    if(data.exam_registers[i].status == 0)
                                    {
                                        $('.status').append('<p>Your Exam Form is checking</p>')
                                    }
                                    else if(data.exam_registers[i].status == 1)
                                    {
                                        $('.status').append('Your Exam Form is Approve')
                                      
                                        if(data.exam_registers[i].grade == 1){
                                            $('.status').append(`<p>You have been pass ${data.exam_registers[i].course.name} </p>`)

                                        }
                                           
                                           
                                        
                                    }
                                    else 
                                    {
                                        $('.status').append('<p>Your Exam Form is checking</p>')
                
                                    }
                                }else{
                                   
                                    var date = new Date();
                                    let previous_month = date.setDate(date.getDate() - 6);
                                    var end_date = new Date(current_class.batch.exam_start_date);
            
                                    
                                    if(previous_month <= date && end_date >= date){
                                    
                                        let exam_url ;
                                        switch(current_class.batch.course.code){
                                            case 'da_1':
                                            exam_url = 'exam_register';
                                            break;
                                            case 'da_2':
                                            exam_url = 'da_two_exam_register';
                                            break;
                                            case 'cpa_1':
                                            exam_url = 'cpa_exam_register';
                                            break;
                                            case 'cpa_2':
                                            exam_url = 'cpa_two_exam_register';
                                            break;
                                            default:
                                            exam_url = 'exam_register';
                                            break;
                
                                        }
                                        
                                        $('.status').append(
                                        ` 
                                            <a href=${exam_url} class="btn btn-sm btn-success text-light"> Go to Exam Registration Form</a>
                                        `)
            
                                        
                                    }else{
                                        $('.status').append(`<div>
                                            <p>The exam schedule will be announced soon</p>
                                        </div>`)
                                    }
                                    
            
                                
            
                                }
                            }else                    {
                                $('.status').append('Your Registration Form is checking')
                            }    
                                
                        }else{
                            $('.status').append('Your Application Form is Approve.')

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
                            
                            $('.status').append(`
                            
                            <a href="${FRONTEND_URL+register_url}" class="btn btn-sm btn-primary">go to Registration Form</a>`);
        
                        }
                        
        
                    }else {
                        $('.status').append('Your Application Form is Reject')
                    }

                   

                    
                        
                })

                 //redirect application form depend on last exam success
                if(last_exam[0].grade == 1 && 
                    current_class_reg[0].approve_reject_status == 1 &&
                    current_class_reg[0].batch.course.id == current_reg[0].form_type &&
                    current_class_reg[0].batch.course.id == last_exam[0].course.id &&
                    current_reg[0].status == 1 &&
                    last_exam[0].status == 1 ){
                    let course_code;
                    let form_url;
                    switch(last_exam[0].course.code){
                        case 'da_1':
                            course_code = "da_2",
                            form_url =  '/da_two_form/'
                        break;
                        case 'da_2':
                            course_code = "cpa_1",
                            form_url = '/cpa_one_form/'
                        break;
                        case 'cpa_1':
                            course_code = "cpa_2",
                            form_url    = '/cpa_two_form/'
                        break;
                        case 'cpa_2':
                            course_code = "Membership"
                        break;
                        default:
                            course_code = "da_1",
                            form_url =  '/da_one_form/'
    
                        break;
    
                    }
                    console.log(course_code,FRONTEND_URL)
                    

                    get_course_by_code(course_code).then( data => {
                        
                        // let batch = data.data[0].active_batch[0];
                        console.log(FRONTEND_URL)
                        
                        console.log(form_url)
                        if(data){
                             
                            let batch = data.data[0].active_batch[0];
                            if(batch != undefined){
                                $('.status').append(`<p>and Join ${data.data[0].name} Class  <a href='${FRONTEND_URL}${form_url}${batch.id}' class="btn btn-sm btn-primary" >go to Course</a></p>`);
                            }else{
                                $('.status').append(`<a href='javascript:void(0)' onclick='alert("The class is not currently ‌available")">go to Course</a>`);
                            }
                        }
                    })
                }
    

            }

            

         
           


            
      }

    });
}
