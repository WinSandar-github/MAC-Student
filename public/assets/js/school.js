var counter = 0;
function createSchoolRegister(){
    if($("input[name=password]").val()!=$("input[name=confirm_password]").val())
    {
        alert("Your password and confirm password do not match!");
        return;
    }

    //var formData = new FormData($( "#school_register_form" )[0]);
    var send_data = new FormData();
    send_data.append('email',$("input[name=email]").val());
    send_data.append('password',$("input[name=password]").val());
    send_data.append('name_mm',$("input[name=name_mm]").val());
    send_data.append('name_eng',$("input[name=name_eng]").val());

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

function getCourses(){
  var select = document.getElementsByClassName("attend_course");
  // $.ajax({
  //     url: BACKEND_URL+"/get_courses",
  //     type: 'get',
  //     data:"",
  //     success: function(data){
  //         //EasyLoading.hide();
  //         var courses = data.data;
  //         courses.forEach(function (element) {
  //             var option = document.createElement('option');
  //             option.text = element.name;
  //             option.value = element.id;
  //             select.add(option, 1);
  //             $(".attend_course").css('display','inline');
  //             $(".attend_course").siblings(".nice-select").css('display','none');
  //             //$("#attend_course").siblings(".check-service-other").css('display','inline-table');
  //         });
  //     },
  //     error:function (message){
  //
  //     }
  // });

  $.ajax({
      url:BACKEND_URL+'/get_courses',
      type:'get',
      success:function(response){
           var opt = '<option value="" >Select</option>';
          $.each(response.data,function(i,v){
              opt += `<option value=${v.id}  >${v.name}</option>`;
          })
          $(".attend_course").append(opt);
          $(".attend_course").siblings(".nice-select").css('display','none');
      }
  });
}

function addRowSchEstablishPerson(tbody){
  $("#sch_establish_error").hide();
  var newRow = $("<tr>");
  var cols = "";
  //var row=$('.'+tbody+' tr').length;
  cols += '<td><input type="text" class="form-control" value="" /></td>';
  cols += '<td><input type="text" name="name[]" class="form-control" placeholder="" required/></td>';
  cols += '<td><input type="text" name="nrc[]" class="form-control" placeholder="" required/></td>';
  cols += '<td><input type="text" name="cpa_papp_no[]" class="form-control" placeholder="" required/></td>';
  cols += '<td><input type="text" name="education[]" class="form-control" placeholder="" required/></td>';
  cols += '<td><input type="text" name="address[]" class="form-control" placeholder="" required/></td>';
  cols += '<td><input type="text" name="ph_number[]" class="form-control" placeholder="" required/></td>';
  cols += '<td><input type="text" name="email[]" class="form-control" placeholder="" required/></td>';
  cols += '<td class="text-center"><button type="button" class="delete btn btn-sm btn-danger m-2" onclick=delRow("'+tbody+'")><li class="fa fa-times"></li></button></td>';
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

function delRow(tbody){
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

function addRowSchGoverns(tbody){
  $("#sch_governs_error").hide();
  var newRow = $("<tr>");
  var cols = "";
  //var row=$('.'+tbody+' tr').length;
  cols += '<td><input type="text" class="form-control" value="" /></td>';
  cols += '<td><input type="text" name="name[]" class="form-control" placeholder="" required/></td>';
  cols += '<td><input type="text" name="nrc[]" class="form-control" placeholder="" required/></td>';
  cols += '<td><input type="text" name="cpa_papp_no[]" class="form-control" placeholder="" required/></td>';
  cols += '<td><input type="text" name="education[]" class="form-control" placeholder="" required/></td>';
  cols += '<td><input type="text" name="responsibility[]" class="form-control" placeholder="" required/></td>';
  cols += '<td><input type="text" name="ph_number[]" class="form-control" placeholder="" required/></td>';
  cols += '<td><input type="text" name="email[]" class="form-control" placeholder="" required/></td>';
  cols += '<td class="text-center"><button type="button" class="delete btn btn-sm btn-danger m-2" onclick=delRow("'+tbody+'")><li class="fa fa-times"></li></button></td>';
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

function addRowMembershipBio(tbody){
  $("#member_list_biography_error").hide();
  var newRow = $("<tr>");
  var cols = "";
  //var row=$('.'+tbody+' tr').length;
  cols += '<td><input type="text" class="form-control" value="" /></td>';
  cols += '<td><input type="text" name="name[]" class="form-control" placeholder="" required/></td>';
  cols += '<td><input type="text" name="nrc[]" class="form-control" placeholder="" required/></td>';
  cols += '<td><input type="text" name="cpa_papp_no[]" class="form-control" placeholder="" required/></td>';
  cols += '<td><input type="text" name="education[]" class="form-control" placeholder="" required/></td>';
  cols += '<td><input type="text" name="responsibility[]" class="form-control" placeholder="" required/></td>';
  cols += '<td><input type="text" name="ph_number[]" class="form-control" placeholder="" required/></td>';
  cols += '<td><input type="text" name="email[]" class="form-control" placeholder="" required/></td>';
  cols += '<td class="text-center"><button type="button" class="delete btn btn-sm btn-danger m-2" onclick=delRow("'+tbody+'")><li class="fa fa-times"></li></button></td>';
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

function addRowTeacherBio(tbody){
  $("#teacher_list_bio_error").hide();
  var newRow = $("<tr>");
  var cols = "";
  //var row=$('.'+tbody+' tr').length;
  cols += '<td><input type="text" class="form-control" value="" /></td>';
  cols += '<td><input type="text" name="name[]" class="form-control" placeholder="" required/></td>';
  cols += '<td><input type="text" name="nrc[]" class="form-control" placeholder="" required/></td>';
  cols += '<td><input type="text" name="teacher_nrc[]" class="form-control" placeholder="" required/></td>';
  cols += '<td><input type="text" name="education[]" class="form-control" placeholder="" required/></td>';
  cols += '<td><input type="text" name="teaching_subject[]" class="form-control" placeholder="" required/></td>';
  cols += '<td><input type="text" name="ph_number[]" class="form-control" placeholder="" required/></td>';
  cols += '<td><input type="text" name="email[]" class="form-control" placeholder="" required/></td>';
  cols += '<td class="text-center"><button type="button" class="delete btn btn-sm btn-danger m-2" onclick=delRow("'+tbody+'")><li class="fa fa-times"></li></button></td>';
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
                $("#selected_school_id").css('display','inline');
                $("#selected_school_id").siblings(".nice-select").css('display','none');
                $("#selected_school_id").siblings(".check-service-other").css('display','inline-table');



            });
        },
        error:function (message){

        }

    });
}
