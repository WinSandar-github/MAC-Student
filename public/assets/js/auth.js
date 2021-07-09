if (typeof (localStorage) != "undefined")
{
    if (localStorage.getItem("studentinfo") == null) {
        //location.href = "../../Components/Auth/login.html";
    }
    else {
        var student = JSON.parse(localStorage.getItem("studentinfo"));
        console.log(student);

      }
}
else {
    alert('Your browser does not support local storage');
    //location.href = "../../Components/Auth/login.html";
  }