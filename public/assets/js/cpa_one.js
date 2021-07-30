$("input[name='date_of_birth']").flatpickr({
    enableTime: false,
    dateFormat: "d-m-Y",
});
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#img_preview').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#photo").change(function(){
    readURL(this);
});
var studentID=null;
async function SearchStudentByNRC(){
    var nrc_state_region = $("#nrc_state_region").val();
    var nrc_township = $("#nrc_township").val();
    var nrc_citizen = $("#nrc_citizen").val();
    var nrc_number=$("input[name=nrc_number]").val();

    var photo = $('#photo')[0].files[0];
   
    var name_mm=document.getElementById("name_mm");
    var name_eng=document.getElementById("name_eng");
    //var photo=document.getElementById("photo");
    var father_name_mm=document.getElementById("father_name_mm");
    var father_name_eng=document.getElementById("father_name_eng");
    var race=document.getElementById("race");
    var religion=document.getElementById("religion");
    var date_of_birth=document.getElementById("date_of_birth");
    var education=document.getElementById("education");
    var position=document.getElementById("position");
    var department=document.getElementById("department");
    var office_area=document.getElementById("office_area");
    var civil_servant=document.getElementById("civil_servant");
    var address=document.getElementById("address");
    var current_address=document.getElementById("current_address");
    var phone=document.getElementById("phone");
    var email=document.getElementById("email");
    var nrc = new FormData();
    
    nrc.append('nrc_state_region', nrc_state_region);
    nrc.append('nrc_township', nrc_township);
    nrc.append('nrc_citizen', nrc_citizen);
    nrc.append('nrc_number', nrc_number);
    await $.ajax({
    url:BACKEND_URL+"/student_info_by_nrc",
    type: 'post',
    data: nrc,
    contentType: false,
    processData: false,
    success: function(result){
        console.log("result",result);
            if(result.data!=null){
                studentID=result.data.id;
                console.log(result.data);
                name_mm.value=result.data.name_mm;
                name_eng.value=result.data.name_eng;
                //photo.value=result.data.image;
                //$('#photo')[0].files[0]=result.data.image;
                father_name_mm.value=result.data.father_name_mm;
                father_name_eng.value=result.data.father_name_eng;
                race.value=result.data.race;
                religion.value=result.data.religion;
                date_of_birth.value=result.data.date_of_birth;
                education.value=result.data.student_education_histroy.degree_name;
                position.value=result.data.student_job.position;
                department.value=result.data.student_job.department;
                office_area.value=result.data.student_job.office_address;
                if(result.data.gov_staff==1){
                    var yes=document.getElementById("yes");
                    yes.checked=true;
                }
                else{
                    var no=document.getElementById("no");
                    no.checked=true;
                }
                address.value=result.data.address;
                current_address.value=result.data.current_address;
                phone.value=result.data.phone;
                if(email){
                    email.value=result.data.email;
                }
            }
            else{
            }
        }
    });
}
//type==> private school->0, self study->1, Mac->2
function Private_School_Submit(){
    var photo = $('#photo')[0].files[0];
    console.log(photo);
    if(photo==null){
        alert("Please select photo!");
        return;
    }
    if( $("#academic_year").val()==""){
        alert("Please enter academic year!");
        return;
    }
    if( $("#private_school_name").val()==""){
        alert("Please enter private school name!");
        return;
    }
    var yes=document.getElementById("yes");

    var data = new FormData();
    data.append('private_school_name', $("#private_school_name").val());
    data.append('academic_year', $("#academic_year").val());
    data.append('photo', photo);
    data.append('name_mm', $("#name_mm").val());
    data.append('name_en', $("#name_eng").val());
    data.append('nrc_state_region', $("#nrc_state_region").val());
    data.append('nrc_township', $("#nrc_township").val());
    data.append('nrc_citizen', $("#nrc_citizen").val());
    data.append('nrc_number', $("input[name=nrc_number]").val());
    data.append('father_name_mm', $("#father_name_mm").val());
    data.append('father_name_en', $("#father_name_eng").val());
    data.append('race', $("#race").val());
    data.append('religion', $("#religion").val());
    data.append('birth_date', $("#birth_date").val());
    data.append('education', $("#education").val());
    data.append('position', $("#position").val());
    data.append('department', $("#department").val());
    data.append('office_area', $("#office_area").val());
    if(yes.checked){
        data.append('civil_servant',1);
    }
    else{
        data.append('civil_servant',0);
    }
    data.append('address', $("#address").val());
    data.append('current_address', $("#current_address").val());
    data.append('phone', $("#phone").val());
    data.append('email', $("#email").val());
    data.append('direct_access_no', $("#direct_access_no").val());
    data.append('entry_success_no', $("#entry_success_no").val());
    data.append('gov_department', 0);
    data.append('personal_acc_training', 0);
    data.append('after_second_exam', 0);
    data.append('good_morale', null);
    data.append('no_crime', null);
    data.append('enrol_no_exam', 0);
    data.append('attendance', 0);
    data.append('fail_exam', 0);
    data.append('resigned', 0);
    data.append('module_id', 1);
    data.append('batch_session_no', null);
    data.append('entrance_part', null);
    data.append('entrance_exam_no', null);
    data.append('cpa_one_type', 0);

    $.ajax({
        url: BACKEND_URL+"/cpa_one_registration",
        type: 'post',
        data:data,
        contentType: false,
        processData: false,
        success: function(result){
            console.log(result);  
            if(result.message==undefined){
                successMessage(result);
            }   
            else{       
                updateStudentInfo();
                successMessage(result.message);
                location.reload();
            }
        },
        error:function (message){
            console.log(message);
            }
        });
}

function Self_Study_Submit(){
    var photo = $('#photo')[0].files[0];
    console.log(photo);
    if(photo==null){
        alert("Please select photo!");
        return;
    }
    if( $("#academic_year").val()==""){
        alert("Please enter academic year!");
        return;
    }
    var resigned = document.getElementById("resigned");
    var fail_exam = document.getElementById("fail_exam");
    var attendance = document.getElementById("attendance");
    var enrol_no_exam = document.getElementById("enrol_no_exam");
    var module1=document.getElementById("module1");
    var module2=document.getElementById("module2");
    var allmodule=document.getElementById("allmodule");
    var yes=document.getElementById("yes");
    var data = new FormData();
    data.append('private_school_name',null);
    data.append('academic_year', $("#academic_year").val());
    data.append('photo', photo);
    data.append('name_mm', $("#name_mm").val());
    data.append('name_en', $("#name_eng").val());
    data.append('nrc_state_region', $("#nrc_state_region").val());
    data.append('nrc_township', $("#nrc_township").val());
    data.append('nrc_citizen', $("#nrc_citizen").val());
    data.append('nrc_number', $("input[name=nrc_number]").val());
    data.append('father_name_mm', $("#father_name_mm").val());
    data.append('father_name_en', $("#father_name_eng").val());
    data.append('race', $("#race").val());
    data.append('religion', $("#religion").val());
    data.append('birth_date', $("#birth_date").val());
    data.append('education', $("#education").val());
    data.append('position', $("#position").val());
    data.append('department', $("#department").val());
    data.append('office_area', $("#office_area").val());
    if(yes.checked){
        data.append('civil_servant',1);
    }
    else{
        data.append('civil_servant',0);
    }
    data.append('address', $("#address").val());
    data.append('current_address', $("#current_address").val());
    data.append('phone', $("#phone").val());
    data.append('email', $("#email").val());
    data.append('direct_access_no', $("#direct_access_no").val());
    data.append('entry_success_no', $("#entry_success_no").val());
    data.append('gov_department', 0);
    data.append('personal_acc_training', 0);
    data.append('after_second_exam', 0);
    data.append('good_morale', null);
    data.append('no_crime', null);
    if(enrol_no_exam.checked==true){
        data.append('enrol_no_exam', 1);
    }
    else{
        data.append('enrol_no_exam', 0);
    }
    if(attendance.checked==true){
        data.append('attendance', 1);
    }
    else{
        data.append('attendance', 0);
    }
    if(fail_exam.checked==true){
        data.append('fail_exam', 1);
    }
    else{
        data.append('fail_exam', 0);
    }
    if(resigned.checked==true)
    {
        data.append('resigned', 1);
    }
    else{
        data.append('resigned', 0);
    }
    if(module1.checked==true){
        data.append('module_id', 1);
    }
    else if(module2.checked==true)
    {
        data.append('module_id', 2);
    }
    else if(allmodule.checked==true)
    {
        data.append('module_id', 3);
    }
    else{
        data.append('module_id', 1);
    }
    data.append('batch_session_no', $("#office_area").val());
    data.append('entrance_part', $("#office_area").val());
    data.append('entrance_exam_no', $("#office_area").val());
    data.append('cpa_one_type', 1);
console.log('data',data);
    $.ajax({
        url: BACKEND_URL+"/cpa_one_registration",
        type: 'post',
        data:data,
        contentType: false,
        processData: false,
        success: function(result){
            console.log(result);  
            if(result.message==undefined){
                successMessage(result);
            }   
            else{       
                updateStudentInfo();
                successMessage(result.message);
                location.reload();
            }
        },
        error:function (message){
            console.log(message);
            }
        });
}

function Mac_Submit(){
    var photo = $('#photo')[0].files[0];
    if(photo==null){
        alert("Please select photo!");
        return;
    }
    if( $("#academic_year").val()==""){
        alert("Please enter academic year!");
        return;
    }
    var good_morale_file = $('#good_morale_file')[0].files[0];
    var no_crime_file = $('#no_crime_file')[0].files[0];
    var module1=document.getElementById("module1");
    var module2=document.getElementById("module2");
    var allmodule=document.getElementById("allmodule");
    var gov_department=document.getElementById("gov_department");
    var personal_acc_training=document.getElementById("personal_acc_training");
    var after_second_exam=document.getElementById("after_second_exam");
    var yes=document.getElementById("yes");
    var data = new FormData();
    data.append('private_school_name', null);
    data.append('academic_year', $("#academic_year").val());
    data.append('photo', photo);
    data.append('name_mm', $("#name_mm").val());
    data.append('name_en', $("#name_eng").val());
    data.append('nrc_state_region', $("#nrc_state_region").val());
    data.append('nrc_township', $("#nrc_township").val());
    data.append('nrc_citizen', $("#nrc_citizen").val());
    data.append('nrc_number', $("input[name=nrc_number]").val());
    data.append('father_name_mm', $("#father_name_mm").val());
    data.append('father_name_en', $("#father_name_eng").val());
    data.append('race', $("#race").val());
    data.append('religion', $("#religion").val());
    data.append('birth_date', $("#birth_date").val());
    data.append('education', $("#education").val());
    data.append('position', $("#position").val());
    data.append('department', $("#department").val());
    data.append('office_area', $("#office_area").val());
    //$(':radio:checked').map(function(){data.append('civil_servant',$(this).val())});
    if(yes.checked){
        data.append('civil_servant',1);
    }
    else{
        data.append('civil_servant',0);
    }
    data.append('address', $("#address").val());
    data.append('current_address', $("#current_address").val());
    data.append('phone', $("#phone").val());
    data.append('email', $("#email").val());
    data.append('direct_access_no', $("#direct_access_no").val());
    data.append('entry_success_no', $("#entry_success_no").val());
    if(gov_department.checked==true){
        data.append('gov_department', 1);
    }
    else{
        data.append('gov_department', 0);
    }
    if(personal_acc_training.checked==true){
        data.append('personal_acc_training', 1);
    }
    else{
        data.append('personal_acc_training', 0);
    }
    if(after_second_exam.checked==true){
        data.append('after_second_exam', 1);
    }
    else{
        data.append('after_second_exam', 0);
    }
    data.append('good_morale', good_morale_file);
    data.append('no_crime', no_crime_file);
    data.append('enrol_no_exam', 0);
    data.append('attendance', 0);
    data.append('fail_exam', 0);
    data.append('resigned', 0);
    if(module1.checked==true){
        data.append('module_id', 1);
    }
    else if(module2.checked==true)
    {
        data.append('module_id', 2);
    }
    else if(allmodule.checked==true)
    {
        data.append('module_id', 3);
    }
    else{
        data.append('module_id', 1);
    }
    data.append('batch_session_no', null);
    data.append('entrance_part', null);
    data.append('entrance_exam_no', null);
    data.append('cpa_one_type', 2);

    $.ajax({
        url: BACKEND_URL+"/cpa_one_registration",
        type: 'post',
        data:data,
        contentType: false,
        processData: false,
        success: function(result){
            //alert(studentID);
            console.log(result);  
            if(result.message==undefined){
                successMessage(result);
            }   
            else{       
                updateStudentInfo();
                successMessage(result.message);
                //location.reload();
            }
        },
        error:function (message){
            console.log(message);
            }
        });
}



//store cpa  app form
$('#cpa_register').submit(function(e){
    e.preventDefault();
    var url = location.pathname;
    var batch_id = url.substring(url.lastIndexOf('/')+1);
    
     var formData = new FormData(this);
     formData.append('batch_id',batch_id)
     
        $.ajax({
            type: "POST",
            url: BACKEND_URL+"/cpa_register",
            contentType: false,
            processData: false,
            data: formData,
            success: function (data) {
                localStorage.setItem('studentinfo', JSON.stringify(result));
                localStorage.setItem('approve_reject', data.approve_reject_status);
                location.href = "/student_course/2";
            },
            error:function (message){
            }
        })

})


function cpa_edit(){
    var student = JSON.parse(localStorage.getItem('studentinfo'));
   
     $.ajax({
        type:'GET',
        url: BACKEND_URL+'/student_info/'+student.id,
        success:function(result){
            console.log(result.data)
             var data = result.data;
             var education = result.data.student_education_histroy;
             var cpone_dir = result.data.cpa_one_direct;
            $('#stu_id').val(data.id);
            $('#name_mm').val(data.name_mm);
            $('#name_eng').val(data.name_eng);
            $('#nrc_state_region').val(data.nrc_state_region);
            $('#nrc_number').val(data.nrc_number)
            $('#father_name_mm').val(data.father_name_mm);
            $('#father_name_eng').val(data.father_name_eng);
            $('#race').val(data.race);
            $('#religion').val(data.religion);
            $('#date_of_birth').val(data.date_of_birth);
            $('#phone').val(data.phone);
            $('#address').val(data.address);
            $('#office_address').val(data.office_address);
            $('#current_address').val(data.current_address);
            $('#name').val(data.student_job.name);
            $('#position').val(data.student_job.position);
            $('#department').val(data.student_job.department);
            $('#organization').val(data.student_job.organization);
            $('#company_name').val(data.student_job.company_name);
            $('#salary').val(data.student_job.salary);
            $('#office_address').val(data.student_job.office_address);
            data.gov_staff == 0 
            ?  $("#no").prop("checked", true)
            : $("#yes").prop("checked", true)  ; 
            $('#uni_name').val(education.university_name);
            $('#degree_name').val(education.degree_name);
            $('#qualified_date').val(education.qualified_date);
            $('#roll_number').val(education.roll_number);
            $('#batch_id').val(education.batch_id);

            $('#direct_degree').val(data.direct_degree);
            $('#degree_date').val(data.degree_date);
            $('#degree_rank').val(data.degree_rank);
            // $('#acca_cima_reg_no').val(cpone_dir.acca_cima_reg_no);
          
          
            $('#da_pass_year').val(cpone_dir.da_pass_year);
            $('#da_pass_month').val(cpone_dir.da_pass_month);
            $('#da_pass_roll_number').val(cpone_dir.da_pass_roll_number);

            
            (cpone_dir.da_pass_year) ? $('#da').prop("checked",true) : $('#non_da').prop("checked",true) 
            selectEntry();



        }
    })

}


$('#cpa_update').submit(function(e){
    e.preventDefault();
    var formData = new FormData(this);
    formData.append('_method', 'PUT');
    var student_id = $('#stu_id').val();
 
     
        $.ajax({
            type: "POST",
            url: BACKEND_URL+"/cpa_register/"+student_id,
            
            contentType: false,
            processData: false,
            data: formData,
            success: function (data) {
                localStorage.setItem('approve_reject', data.approve_reject_status);
                location.href = "/student_course/"+data.course_type_id;
            },
            error:function (message){
            }
        })

})


function updateStudentInfo(){
    console.log(studentID);
    var photo = $('#photo')[0].files[0];
    var update_data = new FormData();
    update_data.append('image', photo);
    update_data.append('name_mm', $("#name_mm").val());
    update_data.append('name_eng', $("#name_eng").val());
    update_data.append('nrc_state_region', $("#nrc_state_region").val());
    update_data.append('nrc_township', $("#nrc_township").val());
    update_data.append('nrc_citizen', $("#nrc_citizen").val());
    update_data.append('nrc_number', $("input[name=nrc_number]").val());
    update_data.append('father_name_mm', $("#father_name_mm").val());
    update_data.append('father_name_eng', $("#father_name_eng").val());
    update_data.append('race', $("#race").val());
    update_data.append('religion', $("#religion").val());
    update_data.append('birth_date', $("#birth_date").val());
    // update_data.append('education', $("#education").val());
    // update_data.append('position', $("#position").val());
    // update_data.append('department', $("#department").val());
    // update_data.append('office_area', $("#office_area").val());
    if(yes.checked){
        update_data.append('civil_servant',1);
    }
    else{
        update_data.append('civil_servant',0);
    }
    update_data.append('address', $("#address").val());
    update_data.append('current_address', $("#current_address").val());
    update_data.append('phone', $("#phone").val());
    // update_data.append('email', $("#email").val());
    if(studentID==null)
    {
        $.ajax({
            url: BACKEND_URL+"/da_register",
            type: 'post',
            data:update_data,
            contentType: false,
            processData: false,
            success: function(result){
                console.log(result.message);
                successMessage(result.message);
                location.reload();
            },
            error:function (message){
                console.log(message);
            }
        });
    }
    else{
        update_data.append('_method', 'PUT');
        $.ajax({
            url: BACKEND_URL+"/da_register/"+studentID,
            type: 'post',
            data:update_data,
            contentType: false,
            processData: false,
            success: function(result){
                console.log(result.message);
                successMessage(result.message);
                //location.reload();
            },
            error:function (message){
                console.log(message);
            }
        });
    }
}
