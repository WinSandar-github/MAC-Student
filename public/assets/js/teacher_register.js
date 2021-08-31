var counter = 0;
function ConfirmSubmit(){
  var radio = document.getElementById("submit_confirm");
  if (radio.checked == true){
      document.getElementById("submit_btn").disabled= false;
  } 
  else{
  document.getElementById("submit_btn").disabled = true;
  }
}

function addRowEducation(tbody){
    $(".degree").hide();
    var newRow = $("<tr>");
    var cols = "";
    //var row=$('.'+tbody+' tr').length;
    cols += '<td><input type="text" class="form-control" value="" /></td>';
    cols += '<td><input type="text" name="degrees[]" class="form-control" placeholder="ပညာအရည်အချင်း" required/></td>';
    cols += '<td class="text-center"><button type="button" class="delete btn btn-sm btn-danger m-2" onclick=delRowEducation("'+tbody+'")><li class="fa fa-times"></li></button></td>';
    newRow.append(cols);
    $("table."+tbody).append(newRow);
    // order numer to be serial
    $("."+tbody+" tbody tr").each(function(index,row){
      $(row).find("td:first-child input").val(index + 1);
        $(row).find("td:first-child input").css('text-align','center');
        $(row).find("td:first-child input").css('border','none');
    });
    counter++;
}

function delRowEducation(tbody){
    $("table."+tbody).on("click", ".delete", function (event) {
      var deleted_row = $(this).closest("tr");
      var siblings = $(deleted_row).siblings();
      $(deleted_row).remove();
        counter -= 1
        // order numer to be serial
        $(siblings).each(function(index,row){
          $(row).find("td:first-child input").val(index + 1);
        });
    });
}

function addRowSubject(tbody){

    var newRow = $("<tr>");
    var cols = "";
    //var row=$('.'+tbody+' tr').length;
    cols += '<td><input type="text" class="form-control" value="" /></td>';
    cols += '<td><input type="text" class="form-control" name="certificates[]" placeholder="လက်မှတ်ရ ပြည်သူ့စာရင်းကိုင်သင်တန်း" required/></td>';
    cols += '<td class="text-center"><button type="button" class="delete btn btn-sm btn-danger m-2" onclick=delRowSubject("'+tbody+'")><li class="fa fa-times"></li></button></td>';
    newRow.append(cols);
    $("table."+tbody).append(newRow);
    // order numer to be serial
    $("."+tbody+" tbody tr").each(function(index,row){
      $(row).find("td:first-child input").val(index + 1);
        $(row).find("td:first-child input").css('text-align','center');
        $(row).find("td:first-child input").css('border','none');
    });
    counter++;
    var certificate = $('.tbl_certificate_body tr').length;
    var diploma = $('.tbl_diploma_body tr').length;
    if(certificate && diploma){
        $(".certificate").hide();
    }
}

function addRowDipSubject(tbody){

    var newRow = $("<tr>");
    var cols = "";
    //var row=$('.'+tbody+' tr').length;
    cols += '<td><input type="text" class="form-control" value="" /></td>';
    cols += '<td><input type="text" class="form-control" name="diplomas[]" placeholder="လက်မှတ်ရ ပြည်သူ့စာရင်းကိုင်သင်တန်း" required/></td>';
    cols += '<td class="text-center"><button type="button" class="delete btn btn-sm btn-danger m-2" onclick=delRowSubject("'+tbody+'")><li class="fa fa-times"></li></button></td>';
    newRow.append(cols);
    $("table."+tbody).append(newRow);
    // order numer to be serial
    $("."+tbody+" tbody tr").each(function(index,row){
      $(row).find("td:first-child input").val(index + 1);
        $(row).find("td:first-child input").css('text-align','center');
        $(row).find("td:first-child input").css('border','none');
    });
    counter++;
    var certificate = $('.tbl_certificate_body tr').length;
    var diploma = $('.tbl_diploma_body tr').length;
    if(certificate && diploma){
        $(".certificate").hide();
    }
}

function delRowSubject(tbody){
    $("table."+tbody).on("click", ".delete", function (event) {
      var deleted_row = $(this).closest("tr");
      var siblings = $(deleted_row).siblings();
      $(deleted_row).remove();
        counter -= 1
        // order numer to be serial
        $(siblings).each(function(index,row){
          $(row).find("td:first-child input").val(index + 1);
        });
    });
}

function createTeacherRegister(){
    if($("input[name=password]").val()!=$("input[name=confirm_password]").val())
    {
        alert("Your password and confirm password do not match!");
        return;
    }
    let formData = new FormData($( "#teacher_register_form" )[0]);
    formData.append('nrc_township',$("#nrc_township + .nice-select span").text());
     
      show_loader()
    


    $.ajax({
        type: "POST",
        data: formData,
        url: BACKEND_URL + "/teacher",
        // async: false,
        // cache: false,
        contentType: false,
        processData: false,
        success: function (data) {
            EasyLoading.hide();
            successMessage(data.message);
            location.href=FRONTEND_URL+'/';
            //resetForm("#teacher_register_form");
            //$(".tbl_degree_body").empty();
            //$(".tbl_certificate_body").empty();
            //$(".tbl_diploma_body").empty();
        },
        error: function (result) {
        },
    });

}

function teacher_reg_feedback(){
    var student =JSON.parse(localStorage.getItem("studentinfo"));
    // console.log(student)
    $.ajax({
        url: BACKEND_URL+"/getTeacherStatus/"+student.id,
        type: 'GET',
        success: function(data){
             //console.log(data);
          var form_data = data;
          form_data.forEach(function(element){
            // console.log(element.approve_reject_status);
                if(element.approve_reject_status == 0){
                    // showPending();
                    $('#teacher_pending').css('display','block');
                    $('#teacher_form').css('display','none');

                }else if(element.approve_reject_status == 1){
                    
                    
                    $('#teacher_approve').css('display','none');
                    $('#teacher_form').css('display','none');
                    $('#teacher_pending').css('display','none');
                }
                else{
                    //
                }
          })
        }
    }); 
} 
function loadRenewTeacher(id){
  $.ajax({
    type : 'GET',
    url : BACKEND_URL+"/teacher/"+id,
    success: function (result) {
        var teacher=result.data;
        if(teacher.approve_reject_status==1){
          $('#teacher_initial').css('display','none');
          $('#teacher_renew').css('display','block');
                var accept=new Date(teacher.renew_date);
                var month=accept.getMonth()+1;
                var year=accept.getFullYear();
                var y=year+1;
                var now=new Date();
                $('#regno').val(teacher.id);
                $('#register_date').val(teacher.renew_date);
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
          $('#teacher_initial').css('display','block');
          $('#teacher_renew').css('display','none');
        }
        
    },
    error: function (result) {
    },
});
}
function renewTeacher(){
  var send_data=new FormData();
  var id=localStorage.getItem("teacher_id");
  send_data.append('_method', 'PATCH');
  show_loader();
    $.ajax({
        url: BACKEND_URL+'/teacher/'+id,
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