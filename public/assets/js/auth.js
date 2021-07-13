if (typeof (localStorage) != "undefined")
{
    if (localStorage.getItem("studentinfo") == null) {
        
    }
    else {
        var student = JSON.parse(localStorage.getItem("studentinfo"));
        var student_name=student[0].name_eng;
        var approve_reject_status=student[0].approve_reject_status;
        var student_id=student[0].id;
        var student_regno=student[0].	registration_no;
      }
}
else {
    alert('Your browser does not support local storage');
   
  }