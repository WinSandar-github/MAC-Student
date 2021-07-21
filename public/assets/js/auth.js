if (typeof (localStorage) != "undefined")
{
    if (localStorage.getItem("studentinfo") == null) {
       
        
    }
    else {
        var student = JSON.parse(localStorage.getItem("studentinfo"));
        var student_name=student.name_eng;
        var approve_reject_status=localStorage.getItem("approve_reject");
        var student_id=student.id;
        var student_regno=student.registration_no;
       }
}
else {
    alert('Your browser does not support local storage');
   
  }