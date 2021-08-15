function user_profile(){
    console.log(student_id);
 
    $.ajax({
        url:   BACKEND_URL + "/user_profile/"+student_id,
        type: 'get',
      
        success: function(result){
            
            
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
                    $('#status').text('Your Audit Firm Form is checking');
                }else if(acc_firm.status == 1 ){
                    $('#status').text('Your Audit Firm Form is Approve');

                }else{
                    $('#status').text('Your Audit Firm Form is Reject');

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
                    $('#status').text('School Registration is checking');
                }else if(school.approve_reject_status == 1 ){
                    $('#status').text('School Registration is Approve');

                }else{
                    $('#status').text('Your Audit Firm Form is Reject');

                }

            }else if(data.mentor){
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
                //     $('#status').text('School Registration is checking');
                // }else if(mentor.approve_reject_status == 1 ){
                //     $('#status').text('School Registration is Approve');

                // }else{
                //     $('#status').text('Your Audit Firm Form is Reject');

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
                let current_class = data.student_course_regs.pop();
                let current_reg = data.student_register.pop();
    
                document.getElementById('image').src=BASE_URL+data.image;
                var course_html;
                 let exam = exam_register.filter(exam => exam.grade == 1)
             
                                    console.log(exam)
                
                exam.map(e => {
                    course_html += `<tr>
                                        <td>${e.course.name}</td>
                                        <td>${e.batch.name}</td>
                                        <td>${e.date}</td>
                                    </tr>`
                })
             $('.course').html(course_html)
                      
             
    
               
                let current_exam = exam_register.pop();
                //Current Batch Information
                $('#batch_name').text(current_class.batch.name);
                $('#course_name').text(current_class.batch.course.name);
                if(current_class.batch.exam_start_date != null){
                    $('#exam_date').text(`${current_class.batch.exam_start_date} to ${current_class.batch.exam_end_date}`);
                }else{
                    $('#exam_date').text("မရှိသေးပါ")
                }

                let next_course;
                console.log(current_class.batch.course.code)

                switch(current_class.batch.course.code){
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


                
    
    
                if(current_class.approve_reject_status == 0 )
                {
                    $('#status').text('Your Application Form is checking')
                }else if(current_class.approve_reject_status == 1)
                {
                    //show data depend on Student Register status
                    if(current_reg.status == 0)
                    {
                        $('#status').text('Your Registration Form is checking')
                        
                    }else if(current_reg.status == 1)
                    {
    
                        if(current_exam.status == 0)
                        {
                            $('#status').text('Your Exam Form is checking')
                        }
                        else if(current_exam.status == 1)
                        {
                            if(current_exam.grade == 1)
                            {
                                $('#status').text(`You have been pass ${current_exam.course.name} and Join Next Class `)
                                $('#status').append(`<a href='javascript:void()' onClick="alert('Course coming soon')">go to Course</a>`);
                            }else
                            {
                                $('#status').text('Your Exam Form is Approve')
                            }
                        }
                        else if(current_exam.status == 2)
                        {
                            $('#status').text('Your Exam Form is checking')
    
                        }else{
                            $('#status').text('Your Registration Form is Approve')
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
                                 
                                $('#status').append(
                                ` 
                                    <a href=${exam_url} class="btn btn-sm btn-dark text-light"> Go to Exam Registration Form</a>
                                `)
    
                                
                            }else{
                                $('#status').append(`<div>
                                    <p>The exam schedule will be announced soon</p>
                                </div>`)
                            }
                            
    
                        
    
                        }
                    }else  if(current_reg.status == 2)
                    {
                        $('#status').text('Your Registration Form is checking')
                        
                    }else{
                        $('#status').text('Your Application Form is Approve.')
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
                        
                        $('#status').append(`
                        
                        <a href="${FRONTEND_URL+register_url}" class="btn btn-sm btn-primary">go to Registration Form</a>`);
    
                    }
                    
    
                }else {
                    $('#status').text('Your Application Form is Reject')
                }
    

            }

            

         
           


            
      }

    });
}
