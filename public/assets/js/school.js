function createSchoolRegister(){
    if($("input[name=password]").val()!=$("input[name=confirm_password]").val())
    {
        alert("Your password and confirm password do not match!");
        return;
    }
    var formData = new FormData($( "#school_register_form" )[0]); 
    //formData.append('nrc_township',$("#nrc_township + .nice-select span").text());
    show_loader();
    $.ajax({
        type: "POST",
        data: formData,
        url: BACKEND_URL + "/school",
        // async: false,  
        cache: false,  
        contentType: false,  
        processData: false, 
        success: function (data) {
            setTimeout(() => {
                Easyloading.hide()
                
            }, 2000);
            
            successMessage(data.message);
            location.href=FRONTEND_URL+'/';
            //resetForm("#school_register_form");
        },
        error: function (result) {
        },
    });
    
}

function school_reg_feedback(){
    var student =JSON.parse(localStorage.getItem("studentinfo"));
    // console.log(student)
    $.ajax({
        url: BACKEND_URL+"/getSchoolStatus/"+student.id,
        type: 'GET',
        success: function(data){
            // console.log(data);
          var form_data = data;
          form_data.forEach(function(element){
            // console.log(element.approve_reject_status);
                if(element.approve_reject_status == 0){
                    // showPending();
                    $('#school_pending').css('display','block');
                    $('#school_form').css('display','none');

                }else if(element.approve_reject_status == 1){
                    loadRenewSchool(localStorage.getItem("school_id"));
                    $('#school_approve').css('display','block');
                    $('#school_form').css('display','none');
                    $('#school_pending').css('display','none');
                }
                else{
                    //
                }
          })
        }
    }); 
} 

function loadSchoolList(){ 
    var select = document.getElementById("selected_school_id");  
    $.ajax({
        url: BACKEND_URL+"/school",
        type: 'get',
        data:"",
        success: function(data){

            var school_data=data.data; 
            console.log('school_data',school_data)           
            school_data.forEach(function (element) {
                console.log('element',element)
                var option = document.createElement('option');
                option.text = element.name_mm+"/"+element.name_eng;
                option.value = element.id;
                select.add(option, 1);
                

            });              
        },
        error:function (message){
                   
        }
    
    });
}
function loadRenewSchool(id){
    $.ajax({
      type : 'GET',
      url : BACKEND_URL+"/school/"+id,
      success: function (result) {
          var school=result.data;
          if(school.approve_reject_status==1){
                document.getElementById('school').style.display='none';
                document.getElementById('school_renew_form').style.display='block';
                var accept=new Date(school.renew_date);
                var month=accept.getMonth()+1;
                var year=accept.getFullYear();
                var y=year+1;
                var now=new Date();
                $('#regno').val(school.id);
                $('#register_date').val(school.renew_date);
                if((now.getFullYear()==y && (now.getMonth()+1)==month) || now.getFullYear() >year){
                    $("#message").val("Your registeration is expired! You need to submit new registeration form again.");
                    $('.renew_submit').prop('disabled', false);
                    
                }else if((now.getFullYear()==accept.getFullYear() && month=='10') || (now.getFullYear()==accept.getFullYear() && month=='11') || (now.getFullYear()==accept.getFullYear() && month=='12')){
                    $("#message").val("Your registeration will start in "+now.getFullYear()+" year!");
                    $('.renew_submit').prop('disabled', true);
                }else{
                    $('#message').val("You are verified!");
                    $('.renew_submit').prop('disabled', true);
                }
          }else{
            document.getElementById('school_renew_form').style.display='none';
            document.getElementById('school').style.display='block';
          }
          
      },
      error: function (result) {
      },
  });
  }
  function renewSchool(){
    var send_data=new FormData();
    var id=localStorage.getItem("school_id");
    send_data.append('_method', 'PATCH');
    show_loader();
      $.ajax({
          url: BACKEND_URL+'/school/'+id,
          type: 'post',
          data:send_data,
          contentType: false,
          processData: false,
          success: function (data) {
              EasyLoading.hide();
              successMessage(data.message);
              location.href=FRONTEND_URL+'/';
              
          },
          error: function (result) {
          },
      });
  }