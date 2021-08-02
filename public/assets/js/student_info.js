function getStudentInfo(){
    var student = JSON.parse(localStorage.getItem('studentinfo'));


     
    if(student != null){
      
        $('#logined').attr('style','display:block !important');
        
        if(approve_reject_status == 0){
           
            $('.check_registration').css('display','block');
            $('.course_detail').css('display','none');

        }else if(approve_reject_status == 1){
            location.href = '/student_study';
        }else{
            if(course_type_id == 2){
                $('.status-reject').css('display','block');
                $('.course_detail').css('display','none');
                $('.reject').append(`<a href="/cpa_edit" class="btn btn-primary btn-sm xl-auto" > Update </a>`)



            }else{
            $('.status-reject').css('display','block');
            $('.course_detail').css('display','none');
            $('.reject').append(`<a href="/da_edit" class="btn btn-primary btn-sm xl-auto" > Update </a>`)
                }
        }
    }else
    {
             $('.login').attr('style','display:block !important')
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