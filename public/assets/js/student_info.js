function getStudentInfo()
{
    if(approve_reject_status==0){
        $('.status-reject').css('display','block');
        $('.status-approve').css('display','block');
    }else{
        $('.status-approve').css('display','block');
    }
}

function getCourse()
{
    $.ajax({
        url: BACKEND_URL+"/api/student_course",
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
function selectedRegistration(){
    var radioValue = $("input[name='register_name']:checked").val();
    if(radioValue==1){
        $('#self_study_container').css('display','block');
        $('#private_school_container').css('display','none');
        $('#mac_container').css('display','none');
    }else if(radioValue==2){
        $('#private_school_container').css('display','block');
        $('#self_study_container').css('display','none');
        $('#mac_container').css('display','none');
    }else{
        $('#self_study_container').css('display','none');
        $('#private_school_container').css('display','none');
        $('#mac_container').css('display','block');
    }
}

function createSelfStudy()
{
    var send_data = new FormData();
    send_data.append('student_id',student_id);
    send_data.append('type', 0);
    $(':checkbox:checked').map(function(){send_data.append('reg_reason[]',$(this).val())});
    $.ajax({
        url: BACKEND_URL+"/api/student_register",
        type: 'post',
        data:send_data,
        contentType: false,
        processData: false,
        success: function(result){
            successMessage(result);
      }
    });
}

function createPrivateSchool()
{
    var send_data = new FormData();
    send_data.append('student_id',student_id);
    send_data.append('type', 1);
    $.ajax({
        url: BACKEND_URL+"/api/student_register",
        type: 'post',
        data:send_data,
        contentType: false,
        processData: false,
        success: function(result){
            successMessage(result);
      }
    });
}

function createMac()
{
    var send_data = new FormData();
    send_data.append('student_id',student_id);
    send_data.append('type', 2);
    $.ajax({
        url: BACKEND_URL+"/api/student_register",
        type: 'post',
        data:send_data,
        contentType: false,
        processData: false,
        success: function(result){
            successMessage(result);
      }
    });
}