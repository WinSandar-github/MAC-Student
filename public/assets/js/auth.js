if (typeof (localStorage) != "undefined") {

    if (localStorage.getItem("studentinfo") == null) {
        $('.non_login').show();
    } else {

        $('.login').show();
        localStorage.removeItem('course_type');
        var student = JSON.parse(localStorage.getItem("studentinfo"));

        let user = (student.accountancy_firm) ? student.accountancy_firm : (student.school)
            ? student.school : (student.mentor) ? student.mentor : (student.teacher) ? student.teacher : student
            
        var student_name = (student.accountancy_firm) ? user[0].accountancy_firm_name : user.name_eng;
        var approve_reject_status = localStorage.getItem("approve_reject");
        var student_id = student.id;
        var student_regno = student.registration_no;
        var course_type_id = student.course_type_id;

    }
} else {
    alert('Your browser does not support local storage');
}
