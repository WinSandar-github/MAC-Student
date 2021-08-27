$(document).ready(function(){
    var student = JSON.parse(localStorage.getItem('studentinfo'));
    if(student){
        var navbar  = `<li><a href="${FRONTEND_URL}">Dashboard</a></li>`;
        if(student.accountancy_firm_info_id != null ){
            navbar +=   `<li>
                            <a href="#">Firm</a>
                            <ul class="sub-menu">
                                <li><a href="${FRONTEND_URL}/audit_firm">Audit Firm</a></li>
                                <li><a href="${FRONTEND_URL}/non_audit_firm_register">Non Audit Firm</a></li>
                            </ul>
                        </li>`

        }else if(student.school_id != null){
            navbar += `<li><a href="${FRONTEND_URL}/school_register">School</a></li>`;
        }else if(student.teacher_id){
            navbar += `<li><a href="${FRONTEND_URL}/teacher_register">Teacher</a></li>`;

        }else if(student.mentor_id != null){
            navbar += `<li><a href="${FRONTEND_URL}/mentor_register">Mentor</a></li>`;

        }else{

            navbar += `  <li>
                            <a href="#">Courses</a>
                            <ul class="sub-menu course_type">

                            </ul>
                        </li>
                        <li><a href="${FRONTEND_URL}/school_register">School</a></li>

                        <li><a href="${FRONTEND_URL}/teacher_register">Teacher</a></li>
                        <li><a href="${FRONTEND_URL}/mentor_register">Mentor</a></li>
                        <li>
                            <a href="#">Membership</a>
                            <ul class="sub-menu">
                                <li><a href="${FRONTEND_URL}/cpa_ff_register">CPA Full Fleged</a></li>
                                <li><a href="${FRONTEND_URL}/student_papp">PAPP</a></li>
                            </ul>
                        </li>

                        <li><a href="${FRONTEND_URL}/contact">Contact</a></li>`
        }
    }else{
        navbar = `   <li class="navbar"><a href="${FRONTEND_URL}">Home</a></li>
                    <li>
                        <a href="#">Courses</a>
                        <ul class="sub-menu course_type">

                        </ul>
                    </li>
                    <li>
                        <a href="#">Firm</a>
                        <ul class="sub-menu">
                            <li><a href="${FRONTEND_URL}/audit_firm">Audit Firm</a></li>
                            <li><a href="${FRONTEND_URL}/non_audit_firm_register">Non Audit Firm</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Membership</a>
                        <ul class="sub-menu">
                            <li><a href="${FRONTEND_URL}/cpa_ff_register">CPA Full Fleged</a></li>
                            <li><a href="${FRONTEND_URL}/student_papp">PAPP</a></li>
                        </ul>
                    </li>
                    <li><a href="${FRONTEND_URL}/school_register">School</a></li>
                    <li><a href="${FRONTEND_URL}/teacher_register">Teacher</a></li>
                    <li><a href="${FRONTEND_URL}/mentor_register">Mentor</a></li>
                     <li><a href="${FRONTEND_URL}/contact">Contact</a></li>`

    }
     $('#navbar').append(navbar);

})
