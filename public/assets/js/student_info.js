function getStudentInfo(){
    var student = JSON.parse(localStorage.getItem('studentinfo'));
    approve_reject_status = 2;
    if(student != null){
        
        if(approve_reject_status == 0){
           
            $('.check_registration').css('display','block');
            $('.course_detail').css('display','none');

        }else if(approve_reject_status == 1){
            location.href = 'http://localhost:8001/student_study'
        }else{
            $('.status-reject').css('display','block');
            $('.course_detail').css('display','none');
            $('.reject').append(`<a href="/da_edit" class="btn btn-primary btn-sm xl-auto" > Update </a>`)
                
        }
    }
    
}
function getCourse(){
    $.ajax({
        url: "/api/course",
        type: 'get',
        data:"",
        success: function(data){
            var course_data=data.data;
            console.log(course_data);
            course_data.forEach(function(element){
                var course="<div class='dropend'><a href='#' data-bs-toggle='dropdown' aria-expanded='false' id='dropdownMenuButton' aria-haspopup='true'><u>"+element.name+"</u></a><div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>";
                
                var batch_data=element.batch;
                if(batch_data.length!=0){
                    batch_data.forEach(function(item){
                        console.log(item.name);
                        course+=`<a type='button' class='dropdown-item' href='/student_da/${item.id}'>${item.name}</a>`;
                        
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