function showAppList(course_code) {
    // destroyDatatable("#tbl_application", "#tbl_app_list_body"); 
    var send_data = new FormData();
    // send_data.append('name',$("input[name=filter_by_name]").val());
    // send_data.append('course_code',course_code)



    // show_loader();
    // $.ajax({
    //     url: BACKEND_URL + "/get_attendes_student",
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
    //             return v.course.code == course_code
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

    $('#tbl_application').DataTable({
        scrollX: true,
        processing: true,
        serverSide: true,
        searching: false,
        paging: true,
        ajax: {
            url: BACKEND_URL + "/get_attendes_student",
            type: "POST",
            data: function (d) {
                d.course_code = course_code

            }
        },
        columns: [

            { data: "sr_no", name: 'No' },
            { data: 'student_info.name_mm', name: 'student_info.name_mm' },
            { data: 'nrc', name: 'nrc' },
            { data: 'cpersonal_no', name: 'cpersonal_no' },


        ],
        sort: function (row, type, set, meta) {
            return row[meta.col][1];
        }
    });


    // $("#search").click(function(){

    //     table.draw();
    // });
}

function showExamList(course_code) {


    $('#tbl_approve_exam').DataTable({
        scrollX: true,
        processing: true,
        serverSide: true,
        searching: false,
        paging: true,
        ajax: {
            url: BACKEND_URL + "/approve_exam_list",
            type: "POST",
            data: function (d) {
                d.course_code = course_code;


            }
        },
        columns: [

            { data: "sr_no", name: 'No' },
            { data: 'student_info.name_mm', name: 'student_info.name_mm' },
            { data: 'nrc', name: 'nrc' },
            { data: 'student_info.personal_no', name: 'personal_no' },


        ],

    });
}

function showExamResultList(course_code) {
    $('#tbl_exam_result').DataTable({
        scrollX: true,
        processing: true,
        serverSide: true,
        searching: false,
        paging: true,
        ajax: {
            url: BACKEND_URL + "/approve_exam_list",
            type: "POST",
            data: function (d) {
                d.course_code = course_code;
                d.grade = 1;

            }
        },
        columns: [

            {
                data: null, render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            { data: 'student_info.name_mm', name: 'student_info.name_mm' },
            { data: 'nrc', name: 'nrc' },
            { data: 'student_info.personal_no', name: 'personal_no' },


        ],

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

