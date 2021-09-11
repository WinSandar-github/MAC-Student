let url = location.pathname;
$("input[name='date_of_birth']").flatpickr({
    enableTime: false,
    dateFormat: "d-m-Y",
});
var boo=localStorage.getItem("isPrivateSchool");
if(boo=="true" ){
    console.log(boo,"true");
    if(document.getElementById('is_private_school'))
    {document.getElementById('is_private_school').style.display='block';}
}
else{
    console.log(boo,"false");
    if(document.getElementById('is_private_school'))
    {document.getElementById('is_private_school').style.display='none';}
}
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

function ConfirmSubmit(){
    var radio = document.getElementById("submit_confirm");
    if (radio.checked == true){
        document.getElementById("submit_btn").disabled= false;
    } 
    else{
    document.getElementById("submit_btn").disabled = true;
    }
}

var count=1;
function AddCPAEdu(){
    $("#edu").append(        

        '<div class="row mb-4" id="edu'+count+'">'+
            '<div class="col-md-4"></div>'+            
            '<div class="col-md-7">'+
                '<input type="file"  class="form-control"  id="certificate'+count+'"  name="certificate[]">'+
            '</div>'+
            '<div class="col-md-1 text-center"  id="edu'+count+'_remove">'+
                '<button class="btn btn-danger" id="myLink" onclick="remove(edu'+count+')">'+
                    '<i class="fa fa-trash "></i>'+
                '</button>'+
            '</div>'+
        '</div>');
        
    count++;

}

// var studentID=null;
// async function SearchStudentByNRC(){
//     var nrc_state_region = $("#nrc_state_region").val();
//     var nrc_township = $("#nrc_township").val();
//     var nrc_citizen = $("#nrc_citizen").val();
//     var nrc_number=$("input[name=nrc_number]").val();

//     var photo = $('#photo')[0].files[0];
   
//     var name_mm=document.getElementById("name_mm");
//     var name_eng=document.getElementById("name_eng");
//     //var photo=document.getElementById("photo");
//     var father_name_mm=document.getElementById("father_name_mm");
//     var father_name_eng=document.getElementById("father_name_eng");
//     var race=document.getElementById("race");
//     var religion=document.getElementById("religion");
//     var date_of_birth=document.getElementById("date_of_birth");
//     var education=document.getElementById("education");
//     var position=document.getElementById("position");
//     var department=document.getElementById("department");
//     var office_area=document.getElementById("office_area");
//     var civil_servant=document.getElementById("civil_servant");
//     var address=document.getElementById("address");
//     var current_address=document.getElementById("current_address");
//     var phone=document.getElementById("phone");
//     var email=document.getElementById("email");
//     var nrc = new FormData();
    
//     nrc.append('nrc_state_region', nrc_state_region);
//     nrc.append('nrc_township', nrc_township);
//     nrc.append('nrc_citizen', nrc_citizen);
//     nrc.append('nrc_number', nrc_number);
//     await $.ajax({
//     url:BACKEND_URL+"/student_info_by_nrc",
//     type: 'post',
//     data: nrc,
//     contentType: false,
//     processData: false,
//     success: function(result){
//         console.log("result",result);
//             if(result.data!=null){
//                 studentID=result.data.id;
//                 console.log(result.data);
//                 name_mm.value=result.data.name_mm;
//                 name_eng.value=result.data.name_eng;
//                 //photo.value=result.data.image;
//                 //$('#photo')[0].files[0]=result.data.image;
//                 father_name_mm.value=result.data.father_name_mm;
//                 father_name_eng.value=result.data.father_name_eng;
//                 race.value=result.data.race;
//                 religion.value=result.data.religion;
//                 date_of_birth.value=result.data.date_of_birth;
//                 education.value=result.data.student_education_histroy.degree_name;
//                 position.value=result.data.student_job.position;
//                 department.value=result.data.student_job.department;
//                 office_area.value=result.data.student_job.office_address;
//                 if(result.data.gov_staff==1){
//                     var yes=document.getElementById("yes");
//                     yes.checked=true;
//                 }
//                 else{
//                     var no=document.getElementById("no");
//                     no.checked=true;
//                 }
//                 address.value=result.data.address;
//                 current_address.value=result.data.current_address;
//                 phone.value=result.data.phone;
//                 if(email){
//                     email.value=result.data.email;
//                 }
//             }
//             else{
//             }
//         }
//     });
// }

function Private_School_Submit(){
    localStorage.setItem("isPrivateSchool",true);
    var student = JSON.parse(localStorage.getItem('studentinfo'));
    var data = new FormData();
    data.append('student_id',student.id)
    data.append('private_school_name',  $("#selected_school_id option:selected").text());
    data.append('academic_year', $("#academic_year_private").val());
    data.append('direct_access_no', $("#direct_access_no_private").val());
    data.append('entry_success_no', $("#entry_success_no_private").val());
    data.append('batch_no_private',$("input[id='batch_no_private']").val());
    data.append('part_no_private',$("input[id='part_no_private']").val());
    data.append('personal_no_private',$("input[id='personal_no_private']").val());
    data.append('form_type',localStorage.getItem('course_id'));
    data.append('type', 1);
    show_loader();

    $.ajax({
        url: BACKEND_URL+"/student_register",
        type: 'post',
        data:data,
        contentType: false,
        processData: false,
        success: function(result){
            console.log(result);  
            EasyLoading.hide();
            if(result.message==undefined){
                successMessage(result);
                location.href = FRONTEND_URL+'/';
            }   
            else{       
                successMessage(result.message);
                // location.reload();
                location.href = FRONTEND_URL+'/';
            }
        },
        error:function (message){
            console.log(message);
            EasyLoading.hide();
            }
        });
}

function Self_Study_Submit(){
    localStorage.setItem("isPrivateSchool",false);
    var student = JSON.parse(localStorage.getItem('studentinfo'));
    var data = new FormData();
    data.append('student_id',student.id);
    data.append('academic_year', $("#academic_year_self").val());
    data.append('direct_access_no', $("#direct_access_no_self").val());
    data.append('entry_success_no', $("#entry_success_no_self").val());
    $(':checkbox:checked').map(function(){data.append('reg_reason[]',$(this).val())});
    data.append('module', $("input[type='radio'][name='module']:checked").val());
    data.append('batch_part_no', $("#batch_part_no").val());
    data.append('batch_no_self',$("input[id='batch_no_self']").val());
    data.append('part_no_self',$("input[id='part_no_self']").val());
    data.append('personal_no_self',$("input[id='personal_no_self']").val());
    data.append('type', 0);
    data.append('form_type',localStorage.getItem('course_id'));
    show_loader();
    $.ajax({
        url: BACKEND_URL+"/student_register",
        type: 'post',
        data:data,
        contentType: false,
        processData: false,
        success: function(result){
            EasyLoading.hide();
            if(result.message==undefined){

                successMessage(result);
                location.href = FRONTEND_URL+'/';
            }   
            else{       
                successMessage(result.message);
                location.href = FRONTEND_URL+'/';
            }
        },
        error:function (message){
            console.log(message);
            EasyLoading.hide();
            }
        });
}

function Mac_Submit(){
    localStorage.setItem("isPrivateSchool",false);
    var student = JSON.parse(localStorage.getItem('studentinfo'));
    var good_morale_file = $('#good_morale_file')[0].files[0];
    var no_crime_file = $('#no_crime_file')[0].files[0];
    var data = new FormData();
    data.append('student_id',student.id);
    data.append('academic_year', $("#academic_year_mac").val());
    data.append('direct_access_no', $("#direct_access_no_mac").val());
    data.append('entry_success_no', $("#entry_success_no_mac").val());
    data.append('internship', $("input[type='radio'][name='internship']:checked").val());
    data.append('good_behavior', good_morale_file);
    data.append('no_crime', no_crime_file);
    data.append('module', $("input[type='radio'][name='module']:checked").val());
    data.append('type', 2);
    data.append('form_type',localStorage.getItem('course_id'));
    data.append('batch_no_mac',$("input[id='batch_no_mac']").val());
    data.append('part_no_mac',$("input[id='part_no_mac']").val());
    data.append('personal_no_mac',$("input[id='personal_no_mac']").val());
    show_loader();
    $.ajax({
        url: BACKEND_URL+"/student_register",
        type: 'post',
        data:data,
        contentType: false,
        processData: false,
        success: function(result){
             EasyLoading.hide();
            if(result.message==undefined){
                successMessage(result);
                location.href = FRONTEND_URL+'/';
            }   
            else{  
                 successMessage(result.message);
                location.href = FRONTEND_URL+'/';
            }
        },
        error:function (message){
            EasyLoading.hide();
            console.log(message);
            }
        });
}



//store cpa  app form
$('#cpa_register').submit(function(e){
    if($("input[name=password]").val()!=$("input[name=confirm_password]").val())
    {
        alert("Your password and confirm password do not match!");
        return;
    }
    e.preventDefault();

    var certificate  =   $('input[name="certificate[]"]');
  
    let batch_id = url.substring(url.lastIndexOf('/')+1);

    //var formData = new FormData(this);

    var send_data = new FormData();

    var image = $("input[name=image]")[0].files[0];
    var nrc_front = $("input[name=nrc_front]")[0].files[0];
    var nrc_back = $("input[name=nrc_back]")[0].files[0];
    var recommend_letter = $("input[name=recommend_letter]")[0].files[0];

    
    // var certificate = $('#certificate0')[0].files[0];
    var nrc_state_region = $("#nrc_state_region").val();
    var nrc_township = $("#nrc_township").val();
    var nrc_citizen = $("#nrc_citizen").val();

    send_data.append('name_mm', $("input[name=name_mm]").val());
    send_data.append('name_eng', $("input[name=name_eng]").val());
    send_data.append('nrc_state_region', nrc_state_region);
    send_data.append('nrc_township', nrc_township);
    send_data.append('nrc_citizen', nrc_citizen);
    send_data.append('nrc_number', $("input[name=nrc_number]").val());
    send_data.append('nrc_front', nrc_front);
    send_data.append('nrc_back', nrc_back);
    send_data.append('recommend_letter', recommend_letter);

    send_data.append('father_name_mm', $("input[name=father_name_mm]").val());
    send_data.append('father_name_eng', $("input[name=father_name_eng]").val());
    send_data.append('race', $("input[name=race]").val());
    send_data.append('religion', $("input[name=religion]").val());
    send_data.append('date_of_birth', $("input[name=date_of_birth]").val());
    send_data.append('address', $("input[name=address]").val());
    send_data.append('current_address', $("input[name=current_address]").val());
    send_data.append('phone', $("input[name=phone]").val());
    $(':radio:checked').map(function(){send_data.append('gov_staff',$(this).val())});
    send_data.append('image', image);
    send_data.append('registration_no', $("input[name=registration_no]").val());
    // send_data.append('date', $("input[name=date]").val());
    send_data.append('email', $("input[name=email]").val());
    send_data.append('password', $("input[name=password]").val());

    send_data.append('job_name', $("input[name=name]").val());
    send_data.append('position', $("input[name=position]").val());
    send_data.append('department', $("input[name=department]").val());
    send_data.append('organization', $("input[name=organization]").val());
    send_data.append('company_name', $("input[name=company_name]").val());
    send_data.append('salary', $("input[name=salary]").val());
    send_data.append('office_address', $("input[name=office_address]").val());

    send_data.append('university_name', $("input[name=university_name]").val());
    send_data.append('degree_name', $("input[name=degree_name]").val());
    certificate.map(function(){
        for (var i = 0; i < $(this).get(0).files.length; ++i) {
            send_data.append('certificate[]',$(this).get(0).files[i]);
        }
    });
    send_data.append('qualified_date', $("input[name=qualified_date]").val());
    send_data.append('roll_number', $("input[name=roll_number]").val());


    send_data.append('verify_status', $("input[name=verify_status]").val());
    send_data.append('payment_method', $("input[name=payment_method]").val());
    send_data.append('verify_code', $("input[name=verify_code]").val());
    
    send_data.append('batch_id',batch_id)
    //show_loader(); 

        $.ajax({
            type: "POST",
            url: BACKEND_URL+"/cpa_register",
            contentType: false,
            processData: false,
            data: send_data,
            success: function (data) {
                console.log("cpaonedata",data);
                //EasyLoading.hide();
              console.log("response",data);
                successMessage("You have successfully registerd!");
               
              
                // localStorage.setItem('studentinfo', JSON.stringify(data));
                // localStorage.setItem('approve_reject', data.approve_reject_status);
                // location.href = "/student_course/2";
                if(data.name_mm != null){
                    localStorage.setItem('studentinfo', JSON.stringify(data));
                    localStorage.setItem('approve_reject', data.approve_reject_status);
                    location.href = FRONTEND_URL + "/";
                }else{
                    // location.reload();
                    location.href = FRONTEND_URL + "/";
                }
            },
            error:function (message){
                //EasyLoading.hide();
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
            //  var cpone_dir = result.data.cpa_one_direct;
            $('#stu_id').val(data.id);
            $('#name_mm').val(data.name_mm);
            $('#name_eng').val(data.name_eng);
            $('#nrc_state_region').val(data.nrc_state_region);
            $('#nrc_township').val(data.nrc_township);
            $('#nrc_citizen').val(data.nrc_citizen);
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
            $('#batch_id').val(data.student_course.batch_id);

            $('#direct_degree').val(data.direct_degree);
            $('#degree_date').val(data.degree_date);
            $('#degree_rank').val(data.degree_rank);
            $('#old_certificate').val(education.certificate);
            $('#old_deg_certi').val(data.degree_certificate_image);
            console.log(data.image,"Image")
            $('#old_image').val(data.image);


            // $('#acca_cima_reg_no').val(cpone_dir.acca_cima_reg_no);
          
          
            // $('#da_pass_year').val(cpone_dir.da_pass_year);
            // $('#da_pass_month').val(cpone_dir.da_pass_month);
            // $('#da_pass_roll_number').val(cpone_dir.da_pass_roll_number);

            
            // (cpone_dir.da_pass_year) ? $('#da').prop("checked",true) : $('#non_da').prop("checked",true) 
            // selectEntry();



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
                location.href = FRONTEND_URL + "/";
            },
            error:function (message){
            }
        })

})

// Entry pass in Cpa One Register
function check_entry_pass(){
    let batch_id = url.substring(url.lastIndexOf('/')+1);
    $.ajax({
        type: "get",
        url: BACKEND_URL+"/batch/"+batch_id,
        contentType: false,
        processData: false,
        success: function (res) {
             let date = new Date();
              
            // let current_date = date.getFullYear()+'-'+(date.getMonth()+1)+'-'+date.getDate();
            var start_date = new Date(res.data.entrance_pass_start_date);
            var end_date = new Date(res.data.entrance_pass_end_date);
             if(start_date <= date && end_date >= date){
                 $('#active_entrance').show();
            }else{
                $('#non_active').show();
            }
          
        },
        error:function (message){
        }
    })

    
    
}


// function updateStudentInfo(){
//     console.log(studentID);
//     var photo = $('#photo')[0].files[0];
//     var update_data = new FormData();
//     update_data.append('image', photo);
//     update_data.append('name_mm', $("#name_mm").val());
//     update_data.append('name_eng', $("#name_eng").val());
//     update_data.append('nrc_state_region', $("#nrc_state_region").val());
//     update_data.append('nrc_township', $("#nrc_township").val());
//     update_data.append('nrc_citizen', $("#nrc_citizen").val());
//     update_data.append('nrc_number', $("input[name=nrc_number]").val());
//     update_data.append('father_name_mm', $("#father_name_mm").val());
//     update_data.append('father_name_eng', $("#father_name_eng").val());
//     update_data.append('race', $("#race").val());
//     update_data.append('religion', $("#religion").val());
//     update_data.append('birth_date', $("#birth_date").val());
//     // update_data.append('education', $("#education").val());
//     // update_data.append('position', $("#position").val());
//     // update_data.append('department', $("#department").val());
//     // update_data.append('office_area', $("#office_area").val());
//     if(yes.checked){
//         update_data.append('civil_servant',1);
//     }
//     else{
//         update_data.append('civil_servant',0);
//     }
//     update_data.append('address', $("#address").val());
//     update_data.append('current_address', $("#current_address").val());
//     update_data.append('phone', $("#phone").val());
//     // update_data.append('email', $("#email").val());
//     if(studentID==null)
//     {
//         $.ajax({
//             url: BACKEND_URL+"/da_register",
//             type: 'post',
//             data:update_data,
//             contentType: false,
//             processData: false,
//             success: function(result){
//                 console.log(result.message);
//                 successMessage(result.message);
//                 location.reload();
//             },
//             error:function (message){
//                 console.log(message);
//             }
//         });
//     }
//     else{
//         update_data.append('_method', 'PUT');
//         $.ajax({
//             url: BACKEND_URL+"/da_register/"+studentID,
//             type: 'post',
//             data:update_data,
//             contentType: false,
//             processData: false,
//             success: function(result){
//                 console.log(result.message);
//                 successMessage(result.message);
//                 //location.reload();
//             },
//             error:function (message){
//                 console.log(message);
//             }
//         });
//     }
// }

function direct_or_da(){
    let student = JSON.parse(localStorage.getItem("studentinfo"));
    if(student){
        let batch_id = url.substring(url.lastIndexOf('/')+1);
        $.ajax({
            type: "get",
            url: BACKEND_URL+"/batch/"+batch_id,
            contentType: false,
            processData: false,
            success: function (res) {
                console.log(res)
                $('#batch_id').val(res.data.id);
                $('#batch_name').text(res.data.name);
            }
        })        
        $('.da_to_cpa').show();
    }else{
        $('.dir_cpa_app_form').show();

    }

}

$( "#cpa_one_submit" ).click(function() {
    if(allFilled('#cpa_one_form')){
        $('#cpaEmailModal').modal('show');
        send_email();
    }
});
function allFilled(form_id) {
    var filled = true;
    $(form_id+' input').each(function() {
        console.log($(this).attr('id'));
        if($("#email").val() == ''){
            filled = false;
        }
        if($("#password").val() == ''){
            filled = false;
        }
        if($("#confirm_password").val() == ''){
            filled = false;
        }
        if($("#profile_photo").val() == ''){
            filled = false;
        }
        if($("#name_mm").val() == ''){
            filled = false;
        }
        if($("#name_eng").val() == ''){
            filled = false;
        }
        if($("#nrc_state_region").val() == ''){
            filled = false;
        }
        if($("#nrc_township").val() == ''){
            filled = false;
        }
        if($("#nrc_citizen").val() == ''){
            filled = false;
        }
        if($("#nrc_number").val() == ''){
            filled = false;
        }
        if($("#nrc_front").val() == ''){
            filled = false;
        }
        if($("#nrc_back").val() == ''){
            filled = false;
        }
        if($("#father_name_mm").val() == ''){
            filled = false;
        }
        if($("#father_name_eng").val() == ''){
            filled = false;
        }
        if($("#race").val() == ''){
            filled = false;
        }
        if($("#religion").val() == ''){
            filled = false;
        }
        if($("#date_of_birth").val() == ''){
            filled = false;
        }
        if($("#phone").val() == ''){
            filled = false;
        }
        if($("#address").val() == ''){
            filled = false;
        }
        if($("#current_address").val() == ''){
            filled = false;
        }
        if($("#image").val() == ''){
            filled = false;
        }
        if($("#name").val() == ''){
            filled = false;
        }
        if($("#position").val() == ''){
            filled = false;
        }
        if($("#department").val() == ''){
            filled = false;
        }
        if($("#organization").val() == ''){
            filled = false;
        }
        if($("#company_name").val() == ''){
            filled = false;
        }
        if($("#salary").val() == ''){
            filled = false;
        }
        if($("#office_address").val() == ''){
            filled = false;
        }
        if($("#degree_name").val() == ''){
            filled = false;
        }
        if($("#university_name").val() == ''){
            filled = false;
        }
        if($("#roll_number").val() == ''){
            filled = false;
        }
        if($("#qualified_date").val() == ''){
            filled = false;
        }
        if($("#certificate0").val() == ''){
            filled = false;
        }
        
       
    });
    return filled;        
}
function check_email_cpa()
{
    var text = localStorage.getItem('verify_code');
    var obj = JSON.parse(text);
    var verify_code = obj.data.verify_code;
    var code = $("input[name=verify_code]").val();
    if(verify_code != code){
        successMessage("Your code is not correct.Please check your email inbox again!");
        // $('#exampleModal').modal('show');
        // $('#exampleModal1').modal('hide');
        // $('#exampleModal').modal('show');
    }else{
        $('#cpaPaymentModal').modal('show');
        $('#cpaEmailModal').modal('hide');
    }
}