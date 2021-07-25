$("input[name='date_of_birth']").flatpickr({
    enableTime: false,
    dateFormat: "d-m-Y",
});
async function SearchStudentByNRC(){
    var nrc_state_region = $("#nrc_state_region").val();
    var nrc_township = $("#nrc_township").val();
    var nrc_citizen = $("#nrc_citizen").val();
    var nrc_number=$("input[name=nrc_number]").val();

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
                console.log(result.data);
                name_mm.value=result.data.name_mm;
                name_eng.value=result.data.name_eng;
                //photo.value=result.data.image;
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

function Private_School_Submit(){
    var photo = $('#photo')[0].files[0];

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
    $(':radio:checked').map(function(){data.append('civil_servant',$(this).val())});
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
            console.log(result.message);
            successMessage(result.message);
            location.reload();
        },
        error:function (message){
            console.log(message);
            }
        });
}

function Self_Study_Submit(){
    var photo = $('#photo')[0].files[0];
    var resigned = document.getElementById("resigned");
    var fail_exam = document.getElementById("fail_exam");
    var attendance = document.getElementById("attendance");
    var enrol_no_exam = document.getElementById("enrol_no_exam");
    var module1=document.getElementById("module1");
    var module2=document.getElementById("module2");
    var allmodule=document.getElementById("allmodule");

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
    $(':radio:checked').map(function(){data.append('civil_servant',$(this).val())});
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

    $.ajax({
        url: BACKEND_URL+"/cpa_one_registration",
        type: 'post',
        data:data,
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

function Mac_Submit(){
    var photo = $('#photo')[0].files[0];
    var good_morale_file = $('#good_morale_file')[0].files[0];
    var no_crime_file = $('#no_crime_file')[0].files[0];
    var module1=document.getElementById("module1");
    var module2=document.getElementById("module2");
    var allmodule=document.getElementById("allmodule");
    var gov_department=document.getElementById("gov_department");
    var personal_acc_training=document.getElementById("personal_acc_training");
    var after_second_exam=document.getElementById("after_second_exam");

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
    $(':radio:checked').map(function(){data.append('civil_servant',$(this).val())});
    data.append('address', $("#address").val());
    data.append('current_address', $("#current_address").val());
    data.append('phone', $("#phone").val());
    data.append('email', null);
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
            console.log(result.message);
            successMessage(result.message);
            location.reload();
        },
        error:function (message){
            console.log(message);
            }
        });
}
