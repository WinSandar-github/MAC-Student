function ConfirmSubmitSS(){
    var radio = document.getElementById("submit_confirm_ss");
    if (radio.checked == true){
        document.getElementById("submit_btn_ss").disabled= false;
        document.getElementById("submit_confirm_pp").checked= false;
        document.getElementById("submit_confirm_mac").checked= false;
    } 
    else{
    document.getElementById("submit_btn_ss").disabled = true;
    }
}
function ConfirmSubmitPP(){
    var radio = document.getElementById("submit_confirm_pp");
    if (radio.checked == true){
        document.getElementById("submit_btn_pp").disabled= false;
        document.getElementById("submit_confirm_ss").checked= false;
        document.getElementById("submit_confirm_mac").checked= false;
    } 
    else{
    document.getElementById("submit_btn_pp").disabled = true;
    }
}
function ConfirmSubmitMac(){
    var radio = document.getElementById("submit_confirm_mac");
    if (radio.checked == true){
        document.getElementById("submit_btn_mac").disabled= false;
        document.getElementById("submit_confirm_pp").checked= false;
        document.getElementById("submit_confirm_ss").checked= false;
    } 
    else{
    document.getElementById("submit_btn_mac").disabled = true;
    }
}

function app_form_feedback(){
    var student = JSON.parse(localStorage.getItem('studentinfo'));
    let url = location.pathname;
    let course_type = url.substring(url.lastIndexOf('/')+1);
    // let batch_id = [$('#batch_id1').val(),$('#batch_id2').val()];
    let count = 0;
                let course_length = $('#course_length').val();


    
    //show data depend login or no
    if(student != null){
 
        $.ajax({
            type:"get",
            url: BACKEND_URL+"/student_info/"+student.id,
            contentType: false,
            processData: false,
            success: function (result) {
                console.log(result.data)
                let student_status = result.data.approve_reject_status;
                let exam_count ;
                let previous_exam = result.data.exam_registers.slice(-1);
                console.log(previous_exam)
                
                 
                for(var i = 1; i <= course_length ; ++i ) {
                    let code = $(`.code${i}`).val();
                    let batch_id = $(`.batch_id${i}`).val();
                    console.log(batch_id,"Batchhh")
                    exam_count = i - 1; 

                    if(student_status == 0){
                        $('.application').show();
                         
                    
                        // $('.check_registration').css('display','block');
                        // $('.course_detail').css('display','none');

                        
                    $(`.check_login${i}`).append(`<a href="javascript:successMessage('Your Application Form is checking')"  class="btn btn-primary btn-hover-dark  " >Enroll Now </a>`) 
                    
                    }else if(student_status == 1){

                    
                        $.ajax({
                            url: BACKEND_URL+"/getStatus/"+student.id,
                            type: 'GET',
                            contentType: false,
                            processData: false,
                            async:false,
                            success: function(reg_status){
                               console.log(reg_status,"Status");
                    
                                             
                               
                                    if(reg_status == 0){
                                     $('.registration').show();

                                        $(`.check_login${i}`).append(`<a href="javascript:successMessage('Your Registration Form is checking')"  class="btn btn-primary btn-hover-dark  " >Registration Form</a>`) 

                                    }else if(reg_status == 1){
                                        

                                       
                                    
                    
                                        $.ajax({
                                            url: BACKEND_URL+"/get_exam_status/"+student_id,
                                            type: 'GET',
                                            contentType: false,
                                            processData: false,
                                            async:false,
                                            success: function(exam_status){
                                                $('.exam').show();
 
                                            
                                             
                                                if(exam_status === 0){

                                                    $(`.check_login${i}`).append(`<a href="javascript:successMessage('Your Exam Form is checking')"  class="btn btn-primary btn-hover-dark  " >Enroll Now </a>`) 

                                                    // $('.exam_feedback').css('display','block');
                                                    // $('.exam_text').append(`Your Exam Form is checking.`)
                                                    
                                                }else if(exam_status == 1){
                                                    $(`.check_login${i}`).append(`<a href="javascript:successMessage('Your Exam Form is Approved')"  class="btn btn-primary btn-hover-dark  " >Enroll Now </a>`) 

                                                
                                                    // $('.exam_feedback').css('display','block');
                                                    // $('.exam_text').append(`Your Exam Form is approved.`)
                                                }else if(exam_status == 2){
                                                    $('.exam_feedback').css('display','block');
                                                    $('.exam_text').append(`Your Exam Form is reject.`)
                                                } 
                                                else{
                                    
                                                    // $('.approve').css('display','block');
                                                    // $('#aa_form').css('display','block');
                                                    // console.log(student_id);
                                                    var student_mentor
                                                    $.ajax({
                                                        url: BACKEND_URL+"/get_type/"+student_id,
                                                        type: 'GET',
                                                        async:false,
                                                        success: function(data){
                                                            var student_data = data.data;
                                                            student_data.forEach(function(element){
                                                            var course_data = element.course.code;
                                                            var self_url = FRONTEND_URL+"/aa_self_form/"+ student_id;
                                                            var private_url = FRONTEND_URL+"/aa_private_form/"+ student_id;
                                                            var mac_url = FRONTEND_URL+"/aa_mac_form/"+ student_id;
                                                            // console.log(course_data)
                                                            // console.log(element.type);
                                                                if(element.type == 0 && course_data == 'cpa_1'){
                                                                    
                                                                    student_mentor = element.mentor_id;
                                                                    $('#aa').append(`<a href=${self_url} class="btn btn-success btn-sm xl-auto" >AA Register Form(Self Study)</a>`)
                                                                    // createAASelfStudy();
                                                                }else if(element.type == 1 && course_data == 'cpa_1'){
                                                                    
                                                                    student_mentor = element.mentor_id;
                    
                                                                    $('#aa').append(`<a href=${private_url} class="btn btn-success btn-sm xl-auto" >AA Register Form(Private)</a>`)
                                                                    // createAAPrivate();
                                                                }else if(element.type == 2 && course_data == 'cpa_1'){
                                                                    
                    
                                                                    student_mentor = element.mentor_id;
                    
                                                                    $('#aa').append(`<a href=${mac_url} class="btn btn-success btn-sm xl-auto" pl-auto>AA Register Form(MAC)</a>`)
                                                                    // createAAMac();
                                                                }
                                                                else{
                                                                    //
                                                                }
                                                        })
                                                        }
                                                    }); 
                    
                                                    
                                                    $.ajax({
                                                        type: "get",
                                                        url: BACKEND_URL+"/get_exam/"+student.id,
                                                        contentType: false,
                                                        processData: false,
                                                        async:false,
                                                        success: function (result) {
                                                            var exam_url;
                                                            console.log(result,"Result Exam")
                        
                                                            
                                                        
                                                    
                                                            if(result){
                                                             
                                    
                                                                switch(result.course.code){
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
                                                                
                                                                console.log(code,result.course.code)
                                                                if(result.course.code == code){
                                                                    console.log(i)
                                                                    
                                                                    $(`.check_login${i}`).append(`<a href="${FRONTEND_URL+exam_url}"  class=" mb-3 btn btn-sm btn-primary btn-hover-dark  " >Exam Registration Form </a>`) 
                                                                    
                                                                }else{
                                                                    $(`.check_login${i}`).append(`<a href="javascript:successMessage('You are still in the ${result.course.name} process') "  class="btn btn-primary btn-hover-dark  " >Enroll Now </a>`) 
                                                                    

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
                                    
                                                                
                                                            }else{
                                                                $('.add_exam').append(`<div>
                                                                    <p>The exam schedule will be announced soon</p>
                                                                </div>`)
                                                            }
                                                        
                                                        },
                                                        error:function (message){
                                                        }
                                                    })
                    
                                                }
                                            }
                                        });    
                                        
                    
                                
                                    }else if(reg_status == 2){
                                        $('.status-reject').css('display','block');
                                        // $('.reject').append(`<a href="/da_edit" class="btn btn-primary btn-sm xl-auto" > Update </a>`)
                                            
                                    }else{
                                    $('.registration').show();
                                        
                                        $.ajax({
                                            type: "get",
                                            url: BACKEND_URL+"/get_current_batch_studentId/"+student.id,
                                            contentType: false,
                                            processData: false,
                                            async:false,
                                            success: function (result) {
                                                
                                                var register_url;
                                                let batch = result.data;
                                                console.log(result.data,"Batch")
                                                localStorage.setItem('course_id',batch.course_id);
                                            
                                                if(batch){
                
                                                    switch(batch.course.code){
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
                                                    console.log(code,batch.course.code)
                
                                                    if(batch.course.code == code ){
                                                        let date = new Date();
                              
                                                    
                              
                                                        // let current_date = date.getFullYear()+'-'+(date.getMonth()+1)+'-'+date.getDate();
                                                        var mac_start_date  = new Date(batch.mac_reg_start_date );
                                                        var mac_end_date    = new Date(batch.mac_reg_end_date);
                                                        var self_start_date  = new Date(batch.self_reg_start_date );
                                                        var self_end_date    = new Date(batch.self_reg_end_date);
                                                        var private_start_date  = new Date(batch.private_reg_start_date );
                                                        var private_end_date    = new Date(batch.private_reg_end_date);
                                                        if(mac_start_date <= date && mac_end_date >= date){
                                                            if(course_type == 2){
                                                                register_url = "/cpa_one_mac"
                                                            }
                                                             $(`.check_login${i}`).append(`<a href="${FRONTEND_URL+register_url}?study_type=3"  class=" mb-3 btn btn-sm btn-primary btn-hover-dark  " >Mac Registration Form </a>`) 
                                                        } 
                
                                                        if(self_start_date <= date && self_end_date >= date){
                                                            if(course_type == 2){

                                                            register_url = "/cpa_one_self_study"
                                                            }
                                                            
                                                            $(`.check_login${i}`).append(`<a href="${FRONTEND_URL+register_url}?study_type=1"  class=" mb-3 btn btn-sm btn-primary btn-hover-dark  " >Selfstudy  Registration Form </a>`) 
                                                        } 
                
                                                        if(private_start_date <= date && private_end_date >= date){
                                                            if(course_type == 2){

                                                            register_url = "/cpa_one_private_school"
                                                            }
                                          
                                                            $(`.check_login${i}`).append(`<a href="${FRONTEND_URL+register_url}?study_type=2"  class=" mb-3 btn btn-sm btn-primary btn-hover-dark  " >Private School Registration Form </a>`) 
                                                        } 
                                                        
                                                        
                
                
                
                                                    }else{
                                                        $(`.check_login${i}`).append(`<a href="javascript:successMessage('You are still in the ${batch.course.name} process') "  class="btn btn-primary btn-hover-dark  " >Enroll Now </a>`) 


                                                        
                                                    }
                                                    // location.href = FRONTEND_URL+register_url;
                                                    }
                                                }
                                            })  ;

                                
                                        
                                    }
                    
                          
                                
                          }
                        });

                       
                        
                          
                    }else if(student_status == 2){
                        if(course_type_id == 2)
                        {
                            $('.status-reject').css('display','block');
                            $('.course_detail').css('display','none');
                            $('.reject').append(`<a href="/cpa_edit" class="btn btn-primary btn-sm xl-auto" > Update </a>`)
                        } 
                        else
                        {
                            $('.status-reject').css('display','block');
                            $('.course_detail').css('display','none');
                            $('.reject').append(`<a href="/da_edit" class="btn btn-primary btn-sm xl-auto" > Update </a>`)
                        }
                    }else{
                        
                        // if(code == da)
                        $('.application').show();
                         
                        $('.course_detail').css('display','block');
                        $.ajax({
                            url: BACKEND_URL+"/get_exam_student/"+student_id,
                            type: 'get',
                            contentType: false,
                            processData: false,
                            async:false,
                            success: function(result){  
                                console.log(result.data)
                                 
                                
                                
                            
                                let course_id = $(`#course_id${i}`).val();
                                console.log(course_id)
                                
                                $('.course_detail').css('display','block') 
                                let data  = result.data;
                                
                                
                                console.log(course_type,"Course Type");

                                var data_course = data.filter( function(v){
                                    return v.course.course_type_id == course_type});
                                    console.log(data_course,"DATACCCCC")
                                    console.log(data_course,i)
                                if(data)

                                var course_url;

                                switch(code){
                                    case 'da_1':
                                        course_url =  '/da_one_form/'+batch_id
                                         
                                    break;
                                    case 'da_2':
                                        course_url = '/da_two_register/'+batch_id
                                     break;
                                    case 'cpa_1':
                                        course_url    = '/cpa_one_form/'+batch_id
 
                                    break;
                                    case 'cpa_2':
                                        course_url = "/cpa_two_register/"+batch_id
                                    break;
                                    default:
                                        course_url =  '/da_one_form'+batch_id
            
                                    break;
            
                                }
 

                                
                                    

                                 
                                    console.log(exam_count)
                                    if(data_course[exam_count])
                                    {
                                         if(data_course[exam_count].grade == 1  && data_course[exam_count].form_type == course_id)
                                        {
                                             $(`.check_login${i}`).append(`<a href="javascript:successMessage('Your have been pass ${data_course[exam_count].course.name}')"  class="btn btn-primary btn-hover-dark  " >Enroll Now </a>`) 

                                        }else{

                                            if(code == "da_2" || code == "cpa_2")
                                            {
                                                $.ajax({
                                                    url: BACKEND_URL+"/batch/"+batch_id,
                                                    type: 'get',
                                                    contentType: false,
                                                    processData: false,
                                                    async:false,
                                                    success: function(result){  
                                                        let batch = result.data;
                                                        let date = new Date();
                              
                                                    
                              
                                                        // let current_date = date.getFullYear()+'-'+(date.getMonth()+1)+'-'+date.getDate();
                                                        var mac_start_date  = new Date(batch.mac_reg_start_date );
                                                        var mac_end_date    = new Date(batch.mac_reg_end_date);
                                                        var self_start_date  = new Date(batch.self_reg_start_date );
                                                        var self_end_date    = new Date(batch.self_reg_end_date);
                                                        var private_start_date  = new Date(batch.private_reg_start_date );
                                                        var private_end_date    = new Date(batch.private_reg_end_date);
                                                        if(mac_start_date <= date && mac_end_date >= date){
                                                            
                                                              $(`.check_login${i}`).append(`<a href="${course_url}?study_type=3"  class=" mb-3 btn btn-sm btn-primary btn-hover-dark  " >Mac Registration Form </a>`) 
                                                        } 
                
                                                        if(self_start_date <= date && self_end_date >= date){
                                                            
                                                            $(`.check_login${i}`).append(`<a href="${course_url}?study_type=1"  class=" mb-3 btn btn-sm btn-primary btn-hover-dark  " >Selfstudy  Registration Form </a>`) 
                                                        } 
                
                                                        if(private_start_date <= date && private_end_date >= date){
                                                            
                                          
                                                            $(`.check_login${i}`).append(`<a href="${course_url}?study_type=2"  class=" mb-3 btn btn-sm btn-primary btn-hover-dark  " >Private School Registration Form </a>`) 
                                                        } 
                                                     }

                                                    })
                                        
                                            }else{
                                                $(`.check_login${i}`).append(`<a href="${course_url}"  class=" mb-3 btn btn-sm btn-primary btn-hover-dark  " >Private School Registration Form </a>`) 

                                            }
                                           
                                           
                                        }
                                        
                                    }else
                                    {  
                                        
                                        if(code == "da_2" || code == "cpa_2")
                                        {
                                            if(course_type == 1){
                                                if(previous_exam[0].course.code == "da_1" ){
                                                     $.ajax({
                                                       url: BACKEND_URL+"/batch/"+batch_id,
                                                       type: 'get',
                                                       contentType: false,
                                                       processData: false,
                                                       async:false,
                                                       success: function(result){  
                                                           let batch = result.data;
                                                           let date = new Date();
                                 
                                                       
                                 
                                                           // let current_date = date.getFullYear()+'-'+(date.getMonth()+1)+'-'+date.getDate();
                                                           var mac_start_date  = new Date(batch.mac_reg_start_date );
                                                           var mac_end_date    = new Date(batch.mac_reg_end_date);
                                                           var self_start_date  = new Date(batch.self_reg_start_date );
                                                           var self_end_date    = new Date(batch.self_reg_end_date);
                                                           var private_start_date  = new Date(batch.private_reg_start_date );
                                                           var private_end_date    = new Date(batch.private_reg_end_date);
                                                           if(mac_start_date <= date && mac_end_date >= date){
                                                               if(course_type == 2){
    
                                                                   course_url = "/cpa_two_mac/"+batch.id
                                                                   }
                                                                $(`.check_login${i}`).append(`<a href="${course_url}?study_type=3"  class=" mb-3 btn btn-sm btn-primary btn-hover-dark  " >Mac Registration Form </a>`) 
                                                           } 
                   
                                                           if(self_start_date <= date && self_end_date >= date){
                                                               if(course_type == 2){
   
                                                                   course_url = "/cpa_two_self_study/"+batch.id
                                                                   }
                                                               
                                                               
                                                               $(`.check_login${i}`).append(`<a href="${course_url}?study_type=1"  class=" mb-3 btn btn-sm btn-primary btn-hover-dark  " >Selfstudy  Registration Form </a>`) 
                                                           } 
                   
                                                           if(private_start_date <= date && private_end_date >= date){
                                                               if(course_type == 2){
   
                                                                   course_url = "/cpa_two_private_school/"+batch.id
                                                                   }
                                             
                                                               $(`.check_login${i}`).append(`<a href="${course_url}?study_type=2"  class=" mb-3 btn btn-sm btn-primary btn-hover-dark  " >Private School Registration Form </a>`) 
                                                           } 
                                                        }
   
                                                       })
   
                                               }else{
                                                   $(`.check_login${i}`).append(`<a href="javascript:successMessage('You need to pass ${course_type == 1 ? "Da One" : "Cpa One"} ')"  class="btn btn-primary btn-hover-dark  " >Enroll Now </a>`) 
   
                                                   
                                               }

                                            }else{
                                                if( previous_exam[0].course.code == "cpa_1"){
                                                
                                                    $.ajax({
                                                       url: BACKEND_URL+"/batch/"+batch_id,
                                                       type: 'get',
                                                       contentType: false,
                                                       processData: false,
                                                       async:false,
                                                       success: function(result){  
                                                           let batch = result.data;
                                                           let date = new Date();
                                 
                                                       
                                 
                                                           // let current_date = date.getFullYear()+'-'+(date.getMonth()+1)+'-'+date.getDate();
                                                           var mac_start_date  = new Date(batch.mac_reg_start_date );
                                                           var mac_end_date    = new Date(batch.mac_reg_end_date);
                                                           var self_start_date  = new Date(batch.self_reg_start_date );
                                                           var self_end_date    = new Date(batch.self_reg_end_date);
                                                           var private_start_date  = new Date(batch.private_reg_start_date );
                                                           var private_end_date    = new Date(batch.private_reg_end_date);
                                                           if(mac_start_date <= date && mac_end_date >= date){
                                                               if(course_type == 2){
    
                                                                   course_url = "/cpa_two_mac/"+batch.id
                                                                   }
                                                                $(`.check_login${i}`).append(`<a href="${course_url}?study_type=3"  class=" mb-3 btn btn-sm btn-primary btn-hover-dark  " >Mac Registration Form </a>`) 
                                                           } 
                   
                                                           if(self_start_date <= date && self_end_date >= date){
                                                               if(course_type == 2){
   
                                                                   course_url = "/cpa_two_self_study/"+batch.id
                                                                   }
                                                               
                                                               
                                                               $(`.check_login${i}`).append(`<a href="${course_url}?study_type=1"  class=" mb-3 btn btn-sm btn-primary btn-hover-dark  " >Selfstudy  Registration Form </a>`) 
                                                           } 
                   
                                                           if(private_start_date <= date && private_end_date >= date){
                                                               if(course_type == 2){
   
                                                                   course_url = "/cpa_two_private_school/"+batch.id
                                                                   }
                                             
                                                               $(`.check_login${i}`).append(`<a href="${course_url}?study_type=2"  class=" mb-3 btn btn-sm btn-primary btn-hover-dark  " >Private School Registration Form </a>`) 
                                                           } 
                                                        }
   
                                                       })
   
                                               }else{
                                                   $(`.check_login${i}`).append(`<a href="javascript:successMessage('You need to pass ${course_type == 1 ? "Da One" : "Cpa One"} ')"  class="btn btn-primary btn-hover-dark  " >Enroll Now </a>`) 
   
                                                   
                                               }

                                            }
                                            
                                         
                                        }else{
                                            if(previous_exam[0].course.code == "da_2"){
                                              
                                            $(`.check_login${i}`).append(`<a href="${course_url}"  class=" mb-3 btn btn-sm btn-primary btn-hover-dark  " >Enroll now </a>`) 
                                            }else{
                                                $(`.check_login${i}`).append(`<a href="javascript:successMessage('You need to pass  Da Two')"  class="btn btn-primary btn-hover-dark  " >Enroll Now </a>`) 

                                            }
                                        }

                 
                                    } 
                                
                                
                            }
                        });
            
                    }   
        



                }    


            }

        })
       
    }
    else
    {
        $('.application').show();
         
        
        for(var i = 1; i <= course_length ; ++i ) {
            let batch_id = $(`.batch_id${i}`).val();

             $(`.check_login${i}`).append(`<a href="javascript:login_page(${batch_id},${i},${course_type})" class="btn btn-primary btn-hover-dark    " >Enroll Now </a>`)
        }
            // $('.logined').css('display','block')
        // $('.check_login2').append(`<a href="/login" class="btn btn-primary btn-hover-dark   " >Enroll Now </a>`)

    }
    
    
    }
function getCourse()
{
    $.ajax({
        url: BACKEND_URL+"/student_course",
        type: 'get',
        data:"",
        success: function(data){
            var course_data=data.data;
             course_data.forEach(function(element){
                var course="<div class='dropend'><a href='#' data-bs-toggle='dropdown' aria-expanded='false' id='dropdownMenuButton' aria-haspopup='true'><u>"+element.name+"</u></a><div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>";
                
                var batch_data=element.batch;
                if(batch_data.length!=0){
                    batch_data.forEach(function(item){
                        console.log(item.name);
                        course+="<button type='button' class='dropdown-item' onclick=addCourseBatch(\"" + encodeURIComponent(element.name) + "\"," + element.id + ",\""+encodeURIComponent(item.name) + "\"," + item.id +")>"+item.name+'</button>';
                        
                    })
                }else{
                    course+="<span class='dropdown-item disabled'>no batch</span>";
                }
                
                course+="</div></div>";
                $('.course-list').append(course);
            })
    
                 
        },
        error:function (message){
                 
        }
    });
}

function addCourseBatch(courseName,courseId,batchName,batchId){
    localStorage.setItem("courseName",decodeURIComponent(courseName));
    localStorage.setItem("courseId",decodeURIComponent(courseId));
    localStorage.setItem("batchName",decodeURIComponent(batchName));
    localStorage.setItem("batchId",decodeURIComponent(batchId));
    location.href=FRONTEND_URL+"student_study";
}

function loadCourse(){
    $('.coursename').html("");
    $('.batchname').html("");
    var courseName=localStorage.getItem("courseName");
    var courseId=localStorage.getItem("courseId");
    var batchName=localStorage.getItem("batchName");
    var batchId=localStorage.getItem("batchId");
    $('.coursename').append(courseName);
    $('.batchname').append(batchName);
    $("input[name='student_regno']").val(student_regno);
    
}

function selectedRegistration(radioValue){
     if(radioValue==3){
        $('#mac_container').css('display','block');
        $('#self_study_container').css('display','none');
        $('#private_school_container').css('display','none');        
        $('#mac_card').addClass("text-success border-success");
        $("#private_card").removeClass("text-success border-success");
        $('#self_study_card').removeClass("text-success border-success");
    }else if(radioValue==2){
        $('#private_school_container').css('display','block');
        $('#self_study_container').css('display','none');
        $('#mac_container').css('display','none');
        $('#self_study_card').removeClass("text-success border-success");
        $("#private_card").addClass("text-success border-success");
        $('#mac_card').removeClass("text-success border-success");
    }else if(radioValue==1){
        $('#self_study_container').css('display','block');
        $('#private_school_container').css('display','none');
        $('#mac_container').css('display','none');
        $('#self_study_card').addClass("text-success border-success");
        $('#private_card').removeClass("text-success border-success");
        $("#mac_card").removeClass("text-success border-success");
    }else{
        $('#mac_container').css('display','block');
        $('#self_study_container').css('display','none');
        $('#private_school_container').css('display','none'); 
    }
}

function createSelfStudy()
{
    localStorage.setItem("isPrivateSchool",false);
    var send_data = new FormData();
    send_data.append('student_id',student_id);
    send_data.append('type', 0);
    send_data.append('batch_no_self', $("input[name='batch_no_self']").val());
    send_data.append('part_no_self', $("input[name='part_no_self']").val());
    send_data.append('personal_no_self', $("input[name='personal_no_self']").val());
    $(':checkbox:checked').map(function(){send_data.append('reg_reason[]',$(this).val())});
    send_data.append('form_type', $("input[name='form_type']").val());
    show_loader();
    $.ajax({
        url: BACKEND_URL+"/student_register",
        type: 'post',
        data:send_data,
        contentType: false,
        processData: false,
        success: function(result){
            EasyLoading.hide();
            successMessage(result);
            // location.reload();
            location.href = FRONTEND_URL+"/";
      }
    });
}

function createPrivateSchool()
{
    localStorage.setItem("isPrivateSchool",true);
    var send_data = new FormData();
    send_data.append('student_id',student_id);
    send_data.append('type', 1);
    send_data.append('batch_no_private', $("input[name='batch_no_private']").val());
    send_data.append('part_no_private', $("input[name='part_no_private']").val());
    send_data.append('personal_no_private', $("input[name='personal_no_private']").val());
    send_data.append('form_type', $("input[name='form_type']").val());
    // if($("input[name='form_type']").val()=="da two"){
    //     send_data.append('date', formatDate($("input[name='exam_date']").val()));
    // }
    show_loader();
    
    $.ajax({
        url: BACKEND_URL+"/student_register",
        type: 'post',
        data:send_data,
        contentType: false,
        processData: false,
        success: function(result){    
            EasyLoading.hide();        
            successMessage(result);
            // location.reload();
            location.href = FRONTEND_URL+"/";
      }
    });
}

function createMac()
{
    localStorage.setItem("isPrivateSchool",false);
    var send_data = new FormData();
    send_data.append('student_id',student_id);
    send_data.append('type', 2);
    send_data.append('batch_no_mac', $("input[name='batch_no_mac']").val());
    send_data.append('part_no_mac', $("input[name='part_no_mac']").val());
    send_data.append('personal_no_mac', $("input[name='personal_no_mac']").val());
    send_data.append('form_type', $("input[name='form_type']").val());
    show_loader();
    $.ajax({
        url: BACKEND_URL+"/student_register",
        type: 'post',
        data:send_data,
        contentType: false,
        processData: false,
        success: function(result){
            EasyLoading.hide();
            successMessage(result);
            // location.reload();
            location.href = FRONTEND_URL+"/";
      }
    });
}

// show Register Form Feedback after approve application form in student study page
function reg_feedback(){
    var student =JSON.parse(localStorage.getItem("studentinfo"));
    
    // console.log(student);
    
    $.ajax({
        url: BACKEND_URL+"/getStatus/"+student.id,
        type: 'GET',
        contentType: false,
        processData: false,
        success: function(status){
           console.log(status,"Status");
 
           let exam_grade = localStorage.getItem('exam_grade');
                        
           if(exam_grade == 1){
                $('#form_type').val(localStorage.getItem('course_id'));
                // selectedRegistration();
                $('.study').css('display','block');
    
           }else{
                if(status == 0){
                    $('.check_registration').css('display','block');
                }else if(status == 1){
                
                

                    $.ajax({
                        url: BACKEND_URL+"/get_exam_status/"+student_id,
                        type: 'GET',
                        contentType: false,
                        processData: false,
                        success: function(exam_status){
                        
                            if(exam_status)
                            if(exam_status === 0){
                                $('.exam_feedback').css('display','block');
                                $('.exam_text').append(`Your Exam Form is checking.`)
                                console.log("Exam Register form Checking ")
                            }else if(exam_status == 1){
                            
                                $('.exam_feedback').css('display','block');
                                $('.exam_text').append(`Your Exam Form is approved.`)
                            }else if(exam_status == 2){
                                $('.exam_feedback').css('display','block');
                                $('.exam_text').append(`Your Exam Form is reject.`)
                            } 
                            else{
                                $('.approve').css('display','block');
                                $('#aa_form').css('display','block');
                                // console.log(student_id);
                                var student_mentor
                                $.ajax({
                                    url: BACKEND_URL+"/get_type/"+student_id,
                                    type: 'GET',
                                    success: function(data){
                                        var student_data = data.data;
                                        student_data.forEach(function(element){
                                        var course_data = element.course.code;
                                        var self_url = FRONTEND_URL+"/aa_self_form/"+ student_id;
                                        var private_url = FRONTEND_URL+"/aa_private_form/"+ student_id;
                                        var mac_url = FRONTEND_URL+"/aa_mac_form/"+ student_id;
                                        // console.log(course_data)
                                        // console.log(element.type);
                                            if(element.type == 0 && course_data == 'cpa_1'){
                                                
                                                student_mentor = element.mentor_id;
                                                $('#aa').append(`<a href=${self_url} class="btn btn-success btn-sm xl-auto" >AA Register Form(Self Study)</a>`)
                                                // createAASelfStudy();
                                            }else if(element.type == 1 && course_data == 'cpa_1'){
                                                
                                                student_mentor = element.mentor_id;

                                                $('#aa').append(`<a href=${private_url} class="btn btn-success btn-sm xl-auto" >AA Register Form(Private)</a>`)
                                                // createAAPrivate();
                                            }else if(element.type == 2 && course_data == 'cpa_1'){
                                                

                                                student_mentor = element.mentor_id;

                                                $('#aa').append(`<a href=${mac_url} class="btn btn-success btn-sm xl-auto" pl-auto>AA Register Form(MAC)</a>`)
                                                // createAAMac();
                                            }
                                            else{
                                                //
                                            }
                                    })
                                    }
                                }); 

                                
                                $.ajax({
                                    type: "get",
                                    url: BACKEND_URL+"/get_exam/"+student.id,
                                    contentType: false,
                                    processData: false,
                                    success: function (result) {
                                        var exam_url;
                                        console.log(result)
    
                                        
                                    
                                
                                        if(result){
                
                                            switch(result.course.code){
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
                                            
                                            $('.add_exam').append(
                                            `<div>
                                            <p>${result.name} </p>
                                            <p>Exam Start Date - ${result.exam_start_date}</p>
                                            <p>Exam End Date - ${result.exam_end_date}</p>
                                            
                                            </div>`)
                                            console.log(student_mentor);

                                            if(student_mentor !== null){
                                                $('.add_exam').append(`
                                                <p> Go to Exam Registration Form
                                                <a href=${exam_url} class="btn btn-sm btn-dark text-light">Exam Form</a>
                                                </p>
                                                `)
                                            }
                
                                            
                                        }else{
                                            $('.add_exam').append(`<div>
                                                <p>The exam schedule will be announced soon</p>
                                            </div>`)
                                        }
                                    
                                    },
                                    error:function (message){
                                    }
                                })

                            }
                        }
                    });    
                    

            
                }else if(status == 2){
                    $('.status-reject').css('display','block');
                    // $('.reject').append(`<a href="/da_edit" class="btn btn-primary btn-sm xl-auto" > Update </a>`)
                        
                }else{
                    
                    $('#form_type').val(localStorage.getItem('course_id'));
                    const queryString = location.search;
                    const urlParams = new URLSearchParams(queryString);
                    selectedRegistration(urlParams.get("study_type"))
                    
                  
                    $('.study').css('display','block');
            
                    
                }

           }
 
            
      }
    });



    
    

    
}

function loadExam()
{
    var id=student_id;
    $.ajax({
        type: "GET",
        url: BACKEND_URL+ "/get_exam_student/"+id,
        success: function (data) {
            var exam_data=data.data;
            if(exam_data.length==0){
                $("input[name='form_type']").val("da one");
            }else{
                exam_data.forEach(function(element){
                    if(element.status==1){
                        localStorage.setItem("exam_date",element.date);
                        location.href = FRONTEND_URL+'/da_two_register';
                    }
                })
                
            }
            
        }
    })
}

function updateCode()
{
    var code = $("input[name='verify_code']").val();
    // console.log(code);
    var verify_code =JSON.parse(localStorage.getItem("code"));
    var id =JSON.parse(localStorage.getItem("id"));
    if(verify_code == code)
    {
        $.ajax({
        url: BACKEND_URL+"/check_code/"+id,
        type: 'patch',
        success: function (data) {
            // console.log(data)
            successMessage("You are verified!");
            location.href = FRONTEND_URL+'/login';
        }
    });
    }
    else{
        alert("You code is not correct.Please check your email inbox again!");
    }
}