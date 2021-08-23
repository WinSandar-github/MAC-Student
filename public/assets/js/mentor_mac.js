function loadCheckServiceMAC(){
    var select = document.getElementById("selected_service_id");
    $.ajax({
        url: BACKEND_URL+"/check_service",
        type: 'get',
        data:"",
        success: function(data){
            var service_data = data.data;
            service_data.forEach(function (element) {
                var option = document.createElement('option');
                option.text = element.name;
                option.value = element.id;
                select.add(option, 1);
                $("#selected_service_id").css('display','inline');
                $("#selected_service_id").siblings(".nice-select").css('display','none');
                $("#selected_service_id").siblings(".check-service-other").css('display','inline-table');
            });
        },
        error:function (message){
            //
        }
    });
}

$("#selected_service_id").change(function(){
    checkOtherService($(this));
});

function checkOtherService(option)
{
    var selected_service_id = $(option).val();
    if(selected_service_id == 9){
        $(".check-service-other").css('visibility','visible');
    }
    else{
        $(".check-service-other").css('visibility','hidden');
    }
}

function loadCheckServicePrivate(){
    var select = document.getElementById("selected_service_id");
    $.ajax({
        url: BACKEND_URL+"/check_service_private",
        type: 'get',
        data:"",
        success: function(data){
            var service_data = data.data;
            // console.log(service_data.type == 1)
            service_data.forEach(function (element) {
                // console.log(element)
                var option = document.createElement('option');
                option.text = element.name;
                option.value = element.id;
                select.add(option, 1);
                $("#selected_service_id").css('display','inline');
                $("#selected_service_id").siblings(".nice-select").css('display','none');
                $("#selected_service_id").siblings(".check-service-other").css('display','inline-table');
            });
        },
        error:function (message){
            //
        }
    });
}

function loadCheckServicePrivate(){
    var select = document.getElementById("selected_service_id");
    $.ajax({
        url: BACKEND_URL+"/check_service_private",
        type: 'get',
        data:"",
        success: function(data){
            var service_data = data.data;
            // console.log(service_data.type == 1)
            service_data.forEach(function (element) {
                // console.log(element)
                var option = document.createElement('option');
                option.text = element.name;
                option.value = element.id;
                select.add(option, 1);
                $("#selected_service_id").css('display','inline');
                $("#selected_service_id").siblings(".nice-select").css('display','none');
                $("#selected_service_id").siblings(".check-service-other").css('display','inline-table');
            });
        },
        error:function (message){
            //
        }
    });
}

function loadCheckServiceSelf(){
    var select = document.getElementById("selected_service_id");
    $.ajax({
        url: BACKEND_URL+"/check_service_self",
        type: 'get',
        data:"",
        success: function(data){
            var service_data = data.data;
            // console.log(service_data.type == 1)
            service_data.forEach(function (element) {
                // console.log(element)
                var option = document.createElement('option');
                option.text = element.name;
                option.value = element.id;
                select.add(option, 1);
                $("#selected_service_id").css('display','inline');
                $("#selected_service_id").siblings(".nice-select").css('display','none');
                $("#selected_service_id").siblings(".check-service-other").css('display','inline-table');
            });
        },
        error:function (message){
            //
        }
    });
}

function loadMentorMAC(){
    var select = document.getElementById("selected_mentor_id");
    $.ajax({
        url: BACKEND_URL+"/check_mentor_mac",
        type: 'get',
        data:"",
        success: function(data){
            var mentor_data = data.data;
            // console.log(mentor_data)
            mentor_data.forEach(function (element) {
                var option = document.createElement('option');
                option.text = element.name_mm;
                option.value = element.id;
                select.add(option, 1);
                $("#selected_mentor_id").css('display','inline');
                $("#selected_mentor_id").siblings(".nice-select").css('display','none');
                $("#selected_mentor_id").siblings(".check-service-other").css('display','inline-table');
            });
        },
        error:function (message){
            //
        }
    });
}

function loadMentorSelfandPrivate(){
    var select = document.getElementById("selected_mentor_id");
    $.ajax({
        url: BACKEND_URL+"/check_mentor_self_private",
        type: 'get',
        data:"",
        success: function(data){
            var mentor_data = data.data;
            console.log(mentor_data)
            mentor_data.forEach(function (element) {
                var option = document.createElement('option');
                option.text = element.name_mm;
                option.value = element.id;
                select.add(option, 1);
                $("#selected_mentor_id").css('display','inline');
                $("#selected_mentor_id").siblings(".nice-select").css('display','none');
                $("#selected_mentor_id").siblings(".check-service-other").css('display','inline-table');
            });
        },
        error:function (message){
            //
        }
    });
}

function createAAMacRegister()
{
    var student =JSON.parse(localStorage.getItem("studentinfo"));
    var send_data = new FormData();
    send_data.append('student_id',student_id);
  
    send_data.append('mentor_id',$('#selected_mentor_id').val());
    send_data.append('current_check_service_id',$('#selected_service_id').val());
    send_data.append('current_check_services_other', $("input[name=current_check_services_other]").val());
    var recommend_file = $('#recommend_file')[0].files[0];
    send_data.append('recommend_file', recommend_file);
    show_loader();
    
    
    // send_data.append('form_type', $("input[name='form_type']").val());
    $.ajax({
        url: BACKEND_URL+"/update_mentor",
        type: 'post',
        data:send_data,
        contentType: false,
        processData: false,
        success: function(result){
            EasyLoading.hide();
            successMessage(result.message);
            location.reload();
            location.href = FRONTEND_URL+"/";
      }
    });
}

function createAASelfRegister()
{
    var student =JSON.parse(localStorage.getItem("studentinfo"));
    var send_data = new FormData();
    send_data.append('student_id',student.id);
    send_data.append('type', 0);
    send_data.append('mentor_id',$('#selected_mentor_id').val());
    send_data.append('current_check_service_id',$('#selected_service_id').val());
    send_data.append('current_check_services_other', $("input[name=current_check_services_other]").val());
    var recommend_file = $('#recommend_file')[0].files[0];
    send_data.append('recommend_file', recommend_file);
    show_loader();
    // send_data.append('form_type', $("input[name='form_type']").val());
    $.ajax({
        url: BACKEND_URL+"/update_mentor",
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

function createAAPrivateRegister()
{
    var student =JSON.parse(localStorage.getItem("studentinfo"));
    var send_data = new FormData();
    send_data.append('student_id',student.id);
    send_data.append('type', 1);
    send_data.append('mentor_id',$('#selected_mentor_id').val());
    send_data.append('',$('#selected_service_id').val());
    send_data.append('current_check_services_other', $("input[name=current_check_services_other]").val());
    var recommend_file = $('#recommend_file')[0].files[0];
    send_data.current_check_service_idappend('recommend_file', recommend_file);
    // send_data.append('form_type', $("input[name='form_type']").val());
    show_loader();
    $.ajax({
        url: BACKEND_URL+"/update_mentor",
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