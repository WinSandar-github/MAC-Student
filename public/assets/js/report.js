function showRegList(course_code) {


    var reg_table = $('.tbl_reg_list').DataTable({
        scrollX: true,
        processing: true,
        serverSide: true,
        searching: false,
        paging: false,
        "order": [[1, 'asc']],
        ajax: {
            url: BACKEND_URL + "/get_attendes_student",
            type: "POST",
            data: function (d) {
                d.course_code = course_code,
                    d.module = $('#selected_module').val()

            }
        },
        columns: [

            { data: "sr_no", name: 'No' },
            { data: 'student_info.name_mm', name: 'student_info.name_mm' },
            { data: 'student_info.father_name_mm', name: 'student_info.father_name_mm' },
            { data: 'nrc', name: 'nrc' },
            { data: 'cpersonal_no', name: 'cpersonal_no' },



        ],
        sort: function (row, type, set, meta) {
            return row[meta.col][1];
        }
    });

    $("#selected_module").change(function () {

        reg_table.draw();

    });




}

function showAppList(course_code) {


    $('#tbl_application').DataTable({
        scrollX: true,
        processing: true,
        serverSide: true,
        searching: false,
        paging: true,
        "order": [[1, 'asc']],
        ajax: {
            url: BACKEND_URL + "/get_student_app_list",
            type: "POST",
            data: function (d) {
                d.course_code = course_code

            }
        },
        columns: [

            { data: "sr_no", name: 'No' },
            { data: 'student_info.name_mm', name: 'student_info.name_mm' },
            { data: 'student_info.father_name_mm', name: 'student_info.father_name_mm' },
            { data: 'nrc', name: 'nrc' },


        ],
        sort: function (row, type, set, meta) {
            return row[meta.col][1];
        }
    });



}


function showExamList(course_code) {


    var exam_table = $('#tbl_approve_exam').DataTable({
        scrollX: true,
        processing: true,
        serverSide: true,
        searching: false,
        paging: false,
        "order": [[1, 'asc']],
        ajax: {
            url: BACKEND_URL + "/approve_exam_list",
            type: "POST",
            data: function (d) {
                d.course_code = course_code,
                    d.module = $('#selected_module').val()



            }
        },
        columns: [

            { data: "sr_no", name: 'No' },
            { data: 'student_info.name_mm', name: 'student_info.name_mm' },
            { data: 'student_info.father_name_mm', name: 'student_info.father_name_mm' },
            { data: 'nrc', name: 'nrc' },
            { data: 'student_info.personal_no', name: 'personal_no' },


        ],
        "dom": '<"float-left"l><"float-right"f>rt<"bottom float-left"i><"bottom float-right"p><"clear">',


    });

    $("#selected_module").change(function () {

        exam_table.draw();

    });

}

function showExamResultList(course_code) {
    let exam_result_table = $('#tbl_exam_result_list').DataTable({
        scrollX: true,
        processing: true,
        serverSide: true,
        searching: false,
        paging: false,
        "order": [[1, 'asc']],
        ajax: {
            url: BACKEND_URL + "/approve_exam_list",
            type: "POST",
            data: function (d) {
                d.course_code = course_code;
                d.grade = 1;
                d.module = $('#selected_module').val()


            }
        },
        columns: [

            {
                data: null, render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            { data: 'student_info.name_mm', name: 'student_info.name_mm' },
            { data: 'student_info.father_name_mm', name: 'student_info.father_name_mm' },
            { data: 'nrc', name: 'nrc' },
            { data: 'module', name: 'Module' },
            { data: 'student_info.personal_no', name: 'personal_no' }

        ],
        "dom": '<"float-left"l><"float-right"f>rt<"bottom float-left"i><"bottom float-right"p><"clear">',


    });

    $("#selected_module").change(function () {

        exam_result_table.draw();

    });


    // show_loader();
    // $.ajax({
    //     url: BACKEND_URL + "/approve_exam_list",
    //     type: 'post',
    //     data: send_data,
    //     contentType: false,
    //     processData: false,

    //     success: function (data) {
    //         EasyLoading.hide();
    //         console.log(data)
    //          var da_data = data.data;
    //         console.log(
    //             da_data,"Data"
    //         );
    //         let da_one_list = da_data.filter(function (v) {
    //             return v.course.code == course_code && v.grade == 1
    //         })
    //          da_one_list.forEach(function (element) {


    //                 var tr = "<tr>";
    //                 tr += "<td>" + +"</td>";

    //                 tr += "<td>" + element.student_info.name_mm + "</td>";

    //                 tr += "<td>" + element.student_info.nrc_state_region + "/" + element.student_info.nrc_township + "(" + element.student_info.nrc_citizen + ")" + element.student_info.nrc_number + "</td>";
    //                 tr += "<td>" + element.student_info.registration_no + "</td>";

    //                 tr += "</tr>";
    //                 $("#tbl_app_list_body").append(tr);

    //         });
    //         getIndexNumber('#tbl_application tr');
    //         createDataTable("#tbl_application");

    //     },
    //     error: function (message) {
    //         dataMessage(message, "#tbl_application", "#tbl_app_list_body");

    //     }
    // });
}

