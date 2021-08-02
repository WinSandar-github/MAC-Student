function app_form_feedback(){
    var student = JSON.parse(localStorage.getItem('studentinfo'));
    let url = location.pathname;
    let course_type = url.substring(url.lastIndexOf('/')+1);
    let batch_id = [$('#batch_id1').val(),$('#batch_id2').val()];
    let count = 0;

    
    //show data depend login or no
    if(student != null){
       
            if(approve_reject_status == 0){
            
                $('.check_registration').css('display','block');
                $('.course_detail').css('display','none');

            }else if(approve_reject_status == 1){
                location.href = '/student_study';
            }else if(approve_reject_status == 2){
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
            
                $('.course_detail').css('display','block');
                $.ajax({
                    url: BACKEND_URL+"/get_exam_student/"+student_id,
                    type: 'get',
                    contentType: false,
                    processData: false,
                    success: function(result){  
                         
                     
                        let course_id = [$('#course_id1').val(),$('#course_id2').val()];
                          
                        $('.course_detail').css('display','block') 
                         let data  = result.data;
                        
                        
                        
                        var data_course = data.filter( function(v){
                            return v.course.course_type_id == course_type});

                           var course_url;
                            
                            for(let i=0 ;i<2; i++){
                                // console.log(i)
                                ++count;

                                if(course_type == 1){
                                    course_url = count == 1 ? '/da_register/'+batch_id[i] : '/da_two_register/'+batch_id[i];

                                }else{
                                    course_url = count == 1 ? '/cpa_register/'+batch_id[i] : '/cpa_two_register/'+batch_id[i];
                                }
                                
                             
                           
                            if(data_course[i])
                            {
                                if(data_course[i].grade == 1  && data_course[i].exam_type_id == course_id[i])
                                {
                                $(`.check_login${count}`).append(`<p class=" text-success">You have been Sucessfully</p>`)
                                }else{
                                   
                                        $(`.check_login${count}`).append(`<a href=${course_url} class="btn btn-primary btn-hover-dark  " >Enroll Now </a>`) 

                                }
                                
                            }else
                            {  
                                $(`.check_login${count}`).append(`<a href=${course_url} class="btn btn-primary btn-hover-dark  " >Enroll Now </a>`) 
         
                            } 
                        }
                        
                    }
                });
    
            }   
       
        }
    else
    {
         
         
        for(let i=0 ; i<2;i++){
            ++count;
            $(`.check_login${count}`).append(`<a href="javascript:login_page(${batch_id[i]},${count},${course_type})" class="btn btn-primary btn-hover-dark    " >Enroll Now </a>`)
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
    location.href="student_study";
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
    if(radioValue==1){
        $('#self_study_container').css('display','block');
        $('#private_school_container').css('display','none');
        $('#mac_container').css('display','none');
        $('#self_study_card').addClass("text-success border-success");
        $("#private_card").removeClass("text-success border-success");
        $('#mac_card').removeClass("text-success border-success");
    }else if(radioValue==2){
        $('#private_school_container').css('display','block');
        $('#self_study_container').css('display','none');
        $('#mac_container').css('display','none');
        $('#self_study_card').removeClass("text-success border-success");
        $("#private_card").addClass("text-success border-success");
        $('#mac_card').removeClass("text-success border-success");
    }else if(radioValue==3){
        $('#self_study_container').css('display','none');
        $('#private_school_container').css('display','none');
        $('#mac_container').css('display','block');
        $('#self_study_card').removeClass("text-success border-success");
        $('#private_card').removeClass("text-success border-success");
        $("#mac_card").addClass("text-success border-success");
    }
}

function createSelfStudy()
{
    var send_data = new FormData();
    send_data.append('student_id',student_id);
    send_data.append('type', 0);
    $(':checkbox:checked').map(function(){send_data.append('reg_reason[]',$(this).val())});
    send_data.append('form_type', $("input[name='form_type']").val());
    $.ajax({
        url: BACKEND_URL+"/student_register",
        type: 'post',
        data:send_data,
        contentType: false,
        processData: false,
        success: function(result){
            successMessage(result);
            location.reload();
      }
    });
}

function createPrivateSchool()
{
    
    var send_data = new FormData();
    send_data.append('student_id',student_id);
    send_data.append('type', 1);
    send_data.append('form_type', $("input[name='form_type']").val());
    if($("input[name='form_type']").val()=="da two"){
        send_data.append('date', formatDate($("input[name='exam_date']").val()));
    }
    
    $.ajax({
        url: BACKEND_URL+"/student_register",
        type: 'post',
        data:send_data,
        contentType: false,
        processData: false,
        success: function(result){            
            successMessage(result);
            location.reload();
      }
    });
}

function createMac()
{
    var send_data = new FormData();
    send_data.append('student_id',student_id);
    send_data.append('type', 2);
    send_data.append('form_type', $("input[name='form_type']").val());
    $.ajax({
        url: BACKEND_URL+"/student_register",
        type: 'post',
        data:send_data,
        contentType: false,
        processData: false,
        success: function(result){
            successMessage(result);
            location.reload();
      }
    });
}

function reg_feedback(){
    var student =JSON.parse(localStorage.getItem("studentinfo"));
    
 
    $.ajax({
        url: BACKEND_URL+"/getStatus/"+student.id,
        type: 'GET',
        contentType: false,
        processData: false,
        success: function(status){
            if(status == 0){
           
                $('.check_registration').css('display','block');
                
        
            }else if(status == 1){
                $('.approve').css('display','block');
        
            }else if(status == 2){
                $('.status-reject').css('display','block');
                 // $('.reject').append(`<a href="/da_edit" class="btn btn-primary btn-sm xl-auto" > Update </a>`)
                    
            }else{
                selectedRegistration();
                $('.study').css('display','block');
        
                
            }
      }
    });



    
    

    
}

function loadExam()
{
    var id=student_id;
    $.ajax({
        type: "GET",
        url: BACKEND_URL+ "/exam_status/"+id,
        success: function (data) {
            var exam_data=data.data;
            if(exam_data.length==0){
                $("input[name='form_type']").val("da one");
            }else{
                exam_data.forEach(function(element){
                    if(element.status==1){
                        localStorage.setItem("exam_date",element.date);
                        location.href = '/da_two_register';
                    }
                })
                
            }
            
        }
    })
}
