$(document).ready(function () {

    var student = JSON.parse(localStorage.getItem('studentinfo'));

    // var dataTemplate = _.template($("#nav-template").html());
    //
    // $("#navbar").append(dataTemplate(student));

    if (student) {
        var navbar = `<li><a href="${FRONTEND_URL}">Dashboard</a></li>`;

        if (student.accountancy_firm_info_id != null) {
            navbar += `<li>
                            <a href="#">Firm</a>
                            <ul class="sub-menu">
                                <li><a href="${FRONTEND_URL}/audit_firm_information">Audit Firm</a></li>
                                <li><a href="${FRONTEND_URL}/non_audit_firm_information">Non Audit Firm</a></li>
                            </ul>
                        </li>`;
        } else if (student.school_id != null) {
            //navbar += `<li><a href="${FRONTEND_URL}/school_information">School</a></li>`;
        } else if (student.teacher_id) {
            // navbar += `<li><a href="${FRONTEND_URL}/teacher_information">Teacher</a></li>`;
        } else if (student.cpaff_id != null) {
            navbar += `<li><a href="${FRONTEND_URL}/cpa_ff_information">CPA Full-Fledged</a></li>`;
            navbar += `<li><a href="${FRONTEND_URL}/student_papp_information">PAPP</a></li>`;
        } else if (student.mentor_id != null) {
            navbar += `<li><a href="${FRONTEND_URL}/mentor_information">Mentor</a></li>`;
        } else if (student.article_id != null) {
            navbar += `<li><a href="${FRONTEND_URL}/article_information">Article</a></li>`;
        } else {
            navbar += `<li>
                            <a href="#">Courses</a>
                            <ul class="sub-menu course_type">
                            </ul>
                        </li>
                        <li>
                            <a href="#">Membership</a>
                            <ul class="sub-menu">
                                <li><a href="${FRONTEND_URL}/cpa_ff_information">CPA(Full-Fledged)</a></li>
                                <li><a href="${FRONTEND_URL}/student_papp_information">PAPP</a></li>
                                <li><a href="${FRONTEND_URL}/school_information">School</a></li>
                                <li><a href="${FRONTEND_URL}/teacher_information">Teacher</a></li>
                            </ul>
                        </li>                       
                        <li>
                            <a href="${FRONTEND_URL}/mentor_information">Mentor</a>
                        </li>
                        <li>
                            <a href="${FRONTEND_URL}/article_information">Article</a>
                        </li>
                        <li>
                            <a href="#">Firm</a>
                            <ul class="sub-menu">
                              <li><a href="${FRONTEND_URL}/audit_firm_information">Audit Firm</a></li>
                              <li><a href="${FRONTEND_URL}/non_audit_firm_information">Non Audit Firm</a></li>
                            </ul>
                        </li>                       

                        <li><a href="${FRONTEND_URL}/contact">Contact</a></li>`
        }
    } else {
        navbar = `<li><a href="${FRONTEND_URL}">Home</a></li>
                    <li>
                        <a href="#">Courses</a>
                        <ul class="sub-menu course_type">
                        </ul>
                    </li>

                    <li>
                        <a href="#">Membership</a>
                        <ul class="sub-menu">
                            <li><a href="${FRONTEND_URL}/cpa_ff_information">CPA(Full-Fledged)</a></li>
                            <li><a href="${FRONTEND_URL}/student_papp_information">PAPP</a></li>
                            <li><a href="${FRONTEND_URL}/school_information">School</a></li>
                            <li><a href="${FRONTEND_URL}/teacher_information">Teacher</a></li>
                        </ul>
                    </li>

                    <li><a href="${FRONTEND_URL}/mentor_information">Mentor</a></li>
                    <li><a href="${FRONTEND_URL}/article_information">Article</a></li>
                    <li>
                        <a href="#">Firm</a>
                        <ul class="sub-menu">
                            <li><a href="${FRONTEND_URL}/audit_firm_information">Audit Firm</a></li>
                            <li><a href="${FRONTEND_URL}/non_audit_firm_information">Non Audit Firm</a></li>
                        </ul>
                    </li>
                    <li><a href="${FRONTEND_URL}/contact">Contact</a></li>`
    }
    $('#navbar').append(navbar);

    if (student) {
        var mnavbar = `<li><a href="${FRONTEND_URL}">Dashboard</a></li>`;

        if (student.accountancy_firm_info_id != null) {
            navbar += `<li>
                            <a href="#">Firm</a>
                            <ul class="sub-menu">
                                <li><a href="${FRONTEND_URL}/audit_firm_information">Audit Firm</a></li>
                                <li><a href="${FRONTEND_URL}/non_audit_firm_information">Non Audit Firm</a></li>
                            </ul>
                        </li>`;
        } else if (student.school_id != null) {
            mnavbar += `<li><a href="${FRONTEND_URL}/school_information">School</a></li>`;
        } else if (student.teacher_id) {
            // mnavbar += `<li><a href="${FRONTEND_URL}/teacher_information">Teacher</a></li>`;
        } else if (student.mentor_id != null) {
            mnavbar += `<li><a href="${FRONTEND_URL}/mentor_information">Mentor</a></li>`;
        } else if (student.article_id != null) {
            mnavbar += `<li><a href="${FRONTEND_URL}/article_information">Article</a></li>`;
        } else {
            mnavbar += `<li class="menu-item-has-children"><span class="mobile-menu-expand"></span>

                                <a href="#">Courses</a>

                                <ul class="sub-menu course_type" style="display: none;">
                                </ul>
                            </li>

                        <li>
                          <li class="menu-item-has-children"><span class="mobile-menu-expand"></span>

                            <a href="#">Membership</a>
                            <ul class="sub-menu"  style="display: none;">
                                <li><a href="${FRONTEND_URL}/cpa_ff_information">CPA(Full-Fledged)</a></li>
                                <li><a href="${FRONTEND_URL}/student_papp_information">PAPP</a></li>
                            </ul>
                        </li>
                            <a href="${FRONTEND_URL}/school_information">School</a>
                        </li>
                        <li>
                            <a href="${FRONTEND_URL}/teacher_information">Teacher</a>
                        </li>
                        <li>
                            <a href="${FRONTEND_URL}/mentor_information">Mentor</a>
                        </li>
                        <li>
                            <a href="${FRONTEND_URL}/article_information">Article</a>
                        </li>
                        <li><a href="${FRONTEND_URL}/contact">Contact</a></li>`
        }
    } else {
        mnavbar = `<li><a href="${FRONTEND_URL}">Home</a></li>
                    <li class="menu-item-has-children"><span class="mobile-menu-expand"></span>

                        <a href="#">Courses</a>

                        <ul class="sub-menu course_type" style="display: none;">
                        </ul>
                    </li>
                     <li class="menu-item-has-children"><span class="mobile-menu-expand"></span>


                        <a href="#">Firm</a>
                        <ul class="sub-menu" style="display: none;">
                            <li><a href="${FRONTEND_URL}/audit_firm_information">Audit Firm</a></li>
                            <li><a href="${FRONTEND_URL}/non_audit_firm_information">Non Audit Firm</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><span class="mobile-menu-expand"></span>

                        <a href="#">Membership</a>
                        <ul class="sub-menu" style="display: none;">
                            <li><a href="${FRONTEND_URL}/cpa_ff_information">CPA Full Fleged</a></li>
                            <li><a href="${FRONTEND_URL}/student_papp_information">PAPP</a></li>
                        </ul>
                    </li>
                    <li><a href="${FRONTEND_URL}/school_information">School</a></li>
                    <li><a href="${FRONTEND_URL}/teacher_information">Teacher</a></li>
                    <li><a href="${FRONTEND_URL}/mentor_information">Mentor</a></li>
                    <li><a href="${FRONTEND_URL}/article_information">Article</a></li>
                    <li><a href="${FRONTEND_URL}/contact">Contact</a></li>`
    }
    $('#mnavbar').append(mnavbar);
});
