function ConfirmSubmit() {
    var radio = document.getElementById("submit_confirm");
    if (radio.checked == true) {
        document.getElementById("submit_btn").disabled = false;
    }
    else {
        document.getElementById("submit_btn").disabled = true;
    }
}

function CheckPartTwo() {
    var cpa_part_2 = document.getElementById("cpa_part_2_check");//qt_pass_check
    var qt_pass = document.getElementById("qt_pass_check");
    if (cpa_part_2.checked == true) {
        $("input[name=cpa2_pass_date]").prop('disabled', false);
        $("input[name=cpa2_reg_no]").prop('disabled', false);
        // $("input[name=cpa_batch_no]").prop('disabled', false);
        $("input[name=country]").prop('disabled', true);
        $("input[name=government]").prop('disabled', true);
        $("input[name=roll_no]").prop('disabled', true);
        $("input[name=exam_year]").prop('disabled', true);
        $("input[name=exam_month]").prop('disabled', true);
        $("input[name=country]").val('');
        $("input[name=government]").val('');
        $("input[name=roll_no]").val('');
        $("input[name=exam_year]").val('');
        $("input[name=exam_month]").val('');
    }
    else if (qt_pass.checked == true) {
        $("input[name=cpa2_pass_date]").prop('disabled', true);
        $("input[name=cpa2_reg_no]").prop('disabled', true);
        // $("input[name=cpa_batch_no]").prop('disabled', true);
        $("input[name=country]").prop('disabled', false);
        $("input[name=government]").prop('disabled', false);
        $("input[name=roll_no]").prop('disabled', false);
        // $("input[name=roll_no]").prop('disabled', false);
        $("input[name=exam_year]").prop('disabled', false);
        $("input[name=exam_month]").prop('disabled', false);
        $("input[name=cpa2_pass_date]").val('');
        $("input[name=cpa2_reg_no]").val('');
    }
    else {
        $("input[name=cpa2_pass_date]").prop('disabled', true);
        $("input[name=cpa_batch_no]").prop('disabled', true);
        $("input[name=country]").prop('disabled', true);
        $("input[name=government]").prop('disabled', true);
        $("input[name=roll_no]").prop('disabled', true);
        $("input[name=cpa2_pass_date]").val('');
        $("input[name=cpa_batch_no]").val('');
        $("input[name=country]").val('');
        $("input[name=government]").val('');
        $("input[name=roll_no]").val('');
    }
}

function CheckQTPass() {
    // var radio = document.getElementById("qt_pass_check");
    // if (radio.checked == true) {
    //     $('.pass_batch_two').css('display', 'none');
    //     $('.qt_pass').css('display', 'block');
    // }
    // else {
    //     $('.pass_batch_two').css('display', 'none');
    //     $('.qt_pass').css('display', 'none');
    // }
}

function getCPAEducation() {
    var checkedValue = $("input[name='education']:checked").val();
    if (checkedValue == 1) {
        $('#cpa').css('display', 'block');
        $('#ra').css('display', 'none');
        $('#edu').css('display', 'none');
    }
    else if (checkedValue == 2) {
        $('#cpa').css('display', 'none');
        $('#ra').css('display', 'block');
        $('#edu').css('display', 'none');
    }
    else if (checkedValue == 3) {
        $('#cpa').css('display', 'none');
        $('#ra').css('display', 'none');
        $('#edu').css('display', 'block');
    }
    else {
        $('#cpa').css('display', 'none');
        $('#ra').css('display', 'none');
        $('#edu').css('display', 'none');
    }
}

function addInputFile(divname, diventry) {
    var controlForm = $('.' + divname + ':first'),
        currentEntry = $('.btn-add').parents('.' + diventry + ':first'),
        newEntry = $(currentEntry.clone()).appendTo(controlForm);
    newEntry.find('input').val('');
    controlForm.find('.' + diventry + ':not(:last) .btn-add')
        .removeClass('btn-add').addClass('btn-remove')
        .removeClass('btn-primary').addClass('btn-danger')
        .attr("onclick", "delInputFile('" + diventry + "')")
        .html('<span class="fa fa-trash"></span>');

}

var count = 1;
function AddCPAFFDegree() {
    $("#edu").append(
        '<div class="row mb-2" id="degree' + count + '">' +
        '<div class="col-md-1"></div>' +
        '<div class="col-md-3 col-auto">' +
        '<label for="" class="col-form-labe"> ဘွဲ့အမည်</label>' +
        '</div>' +
        '<div class="col-md-7 col-auto">' +
        '<input type="text"  class="form-control" name="degree_name[]" placeholder="ဘွဲ့အမည်" readonly>' +
        '</div>' +
        '</div>' +
        '<div class="row mb-2" id="degree_year' + count + '">' +
        '<div class="col-md-1"></div>' +
        '<div class="col-md-3 col-auto">' +
        '<label for="" class="col-form-labe"> အောင်မြင်သည့်နှစ်/လ</label>' +
        '</div>' +
        '<div class="col-md-7 col-auto">' +
        '<input type="text"  class="form-control degree_pass_year" name="degree_pass_year[]" placeholder="လ၊နှစ်(MMM-YYYY)" readonly>' +
        '</div>' +
        '</div>' +

        '<div class="row mb-4" id="edu' + count + '">' +
        '<div class="col-md-1"></div>' +
        '<div class="col-md-3 col-auto">' +
        '<label for="" class="col-form-labe"> Attached Certificate</label>' +
        '</div>' + '<div class="col-md-2 foreign_degree_file"></div>' +
        '</div>'
    );

    $('.degree_pass_year').flatpickr({
        enableTime: false,
        dateFormat: "M-Y",
        allowInput: true,
    });
    count++;

}
function AddCPAFFInitialDegree() {
    $("#edu").append(
        '<div class="row mb-2" id="degree' + count + '">' +
        '<div class="col-md-1"></div>' +
        '<div class="col-md-4 col-auto">' +
        '<label for="" class="col-form-labe"> ဘွဲ့အမည်</label>' +
        '</div>' +
        '<div class="col-md-6 col-auto">' +
        '<input type="text"  class="form-control" name="degree_name[]" placeholder="ဘွဲ့အမည်">' +
        '</div>' +
        '</div>' +
        '<div class="row mb-2" id="degree_year' + count + '">' +
        '<div class="col-md-1"></div>' +
        '<div class="col-md-4 col-auto">' +
        '<label for="" class="col-form-labe"> အောင်မြင်သည့်နှစ်/လ</label>' +
        '</div>' +
        '<div class="col-md-6 col-auto">' +
        '<input type="text"  class="form-control degree_pass_year" name="degree_pass_year[]" placeholder="လ၊နှစ်(MMM-YYYY)">' +
        '</div>' +
        '</div>' +

        '<div class="row mb-4" id="edu' + count + '">' +
        '<div class="col-md-1"></div>' +
        '<div class="col-md-4 col-auto">' +
        '<label for="" class="col-form-labe"> Attached Certificate</label>' +
        '</div>' + 
        '<div class="col-md-6">' +
        '<input type="file"  class="form-control"  id="degree_file' + count + '"  name="degree_file[]">' +
        '</div>' +
        '<div class="col-md-1 text-center"  id="edu' + count + '_remove">' +
        '<button class="btn btn-danger" id="myLink"  style="padding-left:5px;" onclick="remove(degree' + count + ',degree_year' + count + ',edu' + count + ')">' +
        '<i class="fa fa-trash "></i>' +
        '</button>' +
        '</div>' +
        '</div>'
    );

    $('.degree_pass_year').flatpickr({
        enableTime: false,
        dateFormat: "M-Y",
        allowInput: true,
    });
    count++;

}

function AddPAPPReconnectDegree() {
    $("#edu").append(
        '<div class="row mb-2" id="degree' + count + '">' +
        '<div class="col-md-1"></div>' +
        '<div class="col-md-3 col-auto">' +
        '<label for="" class="col-form-labe"> ဘွဲ့အမည်</label>' +
        '</div>' +
        '<div class="col-md-7 col-auto">' +
        '<input type="text"  class="form-control" name="degree_name[]" placeholder="ဘွဲ့အမည်">' +
        '</div>' +
        '</div>' +
        '<div class="row mb-2" id="degree_year' + count + '">' +
        '<div class="col-md-1"></div>' +
        '<div class="col-md-3 col-auto">' +
        '<label for="" class="col-form-labe"> အောင်မြင်သည့်နှစ်/လ</label>' +
        '</div>' +
        '<div class="col-md-7 col-auto">' +
        '<input type="text"  class="form-control degree_pass_year" name="degree_pass_year[]" placeholder="လ၊နှစ်(MMM-YYYY)">' +
        '</div>' +
        '</div>' +

        '<div class="row mb-4" id="edu' + count + '">' +
        '<div class="col-md-1"></div>' +
        '<div class="col-md-3 col-auto">' +
        '<label for="" class="col-form-labe"> Attached Certificate</label>' +
        '</div>' + '<div class="col-md-2 foreign_degree_file"></div>' +
        '<div class="col-md-5">' +
        '<input type="file"  class="form-control"  id="degree_file' + count + '"  name="degree_file[]">' +
        '</div>' +
        '<div class="col-md-1 text-center"  id="edu' + count + '_remove">' +
        '<button class="btn btn-danger" id="myLink"  style="padding-left:5px;" onclick="remove(degree' + count + ',degree_year' + count + ',edu' + count + ')">' +
        '<i class="fa fa-trash "></i>' +
        '</button>' +
        '</div>' +
        '</div>'
    );

    $('.degree_pass_year').flatpickr({
        enableTime: false,
        dateFormat: "M-Y",
        allowInput: true,
    });
    count++;

}
function remove(id1, id2, id3) {

    id1.remove();
    id2.remove();
    id3.remove();

}



function delInputFile(diventry) {
    $('.btn-remove').parents('.' + diventry + ':first').remove();
}

//cpaff validation

$().ready(function () {
    $("#cpaff_form").validate({
        rules: {
            profile_photo: "required",
            name_mm: "required",
            nrc_state_region: "required",
            nrc_township: "required",
            nrc_citizen: "required",
            nrc_number: {
                required: true,
            },
            cpa:{
                required : "#cpa_edu:checked"
            },
            ra:{
                required : "#ra_edu:checked"
            },
            education:"required",
            nrc_front: "required",
            nrc_back: "required",
            father_name_mm: "required",
            cpa_batch_no: "required",
            address: "required",
            phone: "required",
            contact_mail: "required",
            cpa_certificate: "required",
            mpa_mem_card: "required",
            mpa_mem_card_back: "required",
            cpd_record: "required",
            total_hours: "required",
            three_years_full: "required",
            letter: "required",
        },
        messages: {
            profile_photo: "Upload photo",
            name_mm: "Please enter your name",
            nrc_state_region: "Please select one",
            nrc_township: "Please select one",
            nrc_citizen: "Please select one",
            nrc_number: {
                required: "Please enter your nrc number",
            },
            nrc_front: "Please upload nrc photo (front)",
            nrc_back: "Please upload nrc photo (back)",
            education:"Please select one",
            cpa:"Please upload CPA file",
            ra:"Please upload RA file",
            father_name_mm: "Please enter your father name in english",
            cpa_batch_no: "Please enter cpa batch number",
            address: "Please enter your address",
            phone: "Please enter your phone number",
            contact_mail: "Please enter your contact mail",
            cpa_certificate: "Please upload CPA certificate",
            mpa_mem_card: "Please upload MPA member card(front)",
            mpa_mem_card_back: "Please upload MPA member card(back)",
            cpd_record: "Please upload CPD record",
            total_hours: "Please enter total ours",
            three_years_full: "Please upload file",
            letter: "Please enter your letter",

        },
        submitHandler: function (form) {
            $('#cpa_ff_modal').modal('show');
            send_email();
        }

    });
});

// $( "#cpaff_submit_btn" ).click(function() {
//         if(allFilled('#cpaff_form')){
//             $('#cpaffModal').modal('show');
//             send_email();
//         }
//     });

// cpaff
$("#cpaff_modal").click(function () {
    $('#cpaffpaymentModal').modal('show');
});

$('#cash_img').click(function () {
    $('#cpaff_btn').prop('disabled', false);
});

$('#cb_img').click(function () {
    $('#cpaff_btn').prop('disabled', true);
});

$('#mpu_img').click(function () {
    $('#cpaff_btn').prop('disabled', true);
});
$('#cpaff_btn').prop('disabled', true);

$('#cpaff_btn').click(function () {
    setTimeout(function () {
        $('#cpaffpaymentModal').modal('hide');
    }, 1000);
});

function check_email_cpaff() {
    var text = localStorage.getItem('verify_code');
    var obj = JSON.parse(text);
    var verify_code = obj.data.verify_code;
    var code = $("input[name=verify_code]").val();
    if (verify_code != code) {
        successMessage("Your code is not correct.Please check your email inbox again!");
    } else {
        createCPAFFRegister();
        $('#cpaffModal').modal('hide');
    }
}

function cpaffPaymentSubmit() {
    var student = JSON.parse(localStorage.getItem('studentinfo'));
    $.ajax({
        url: BACKEND_URL + "/approve_cpaff_payment/" + student.id,
        type: 'patch',
        success: function (data) {
            successMessage("Your payment is successfully");
            location.href = FRONTEND_URL + "/";
        },
        error: function (message) {
        }
    })
}

function checkPaymentCpaff() {
    var student = JSON.parse(localStorage.getItem("studentinfo"));
    if (student != null) {
        $.ajax({
            url: BACKEND_URL + "/check_payment_cpaff/" + student.id,
            type: 'GET',
            success: function (data) {
                var form_data = data;
                form_data.forEach(function (element) {
                    if (element.payment_method == 'CPAFF') {
                        $('#cpaff_modal').prop('disabled', true);
                        loadCPAFF();
                    } else {
                        $('#cpaff_modal').prop('disabled', false);
                    }
                })
            }
        });
    }
}

function loadCpaffData() {
    var student = JSON.parse(localStorage.getItem('studentinfo'));
    $.ajax({
        url: BACKEND_URL + "/cpaff_by_stuId/" + student.id,
        type: 'get',
        data: "",
        success: function (data) {
            var cpaff_data = data.data;
            console.log(cpaff_data)
            if (cpaff_data == null) {
                $.ajax({
                    url: BACKEND_URL + "/get_cpaff/" + student.id,
                    // url: BACKEND_URL + "/cpaff_by_stuId/" + student.id,
                    type: 'get',
                    data: "",
                    success: function (data) {
                        console.log(data,"aa");
                        var cpaff_data = data.data;
                        if(document.getElementById('cpersonal_no')){
                            $('#cpersonal_no').val(cpaff_data.cpersonal_no);
                        }
                        $('#name_mm').val(cpaff_data.name_mm);
                        $('#name_eng').val(cpaff_data.name_eng);
                        $('#nrc_state_region').val(cpaff_data.nrc_state_region);
                        $('#nrc_township').val(cpaff_data.nrc_township);
                        $('#nrc_citizen').val(cpaff_data.nrc_citizen);
                        $('#nrc_number').val(cpaff_data.nrc_number);
                        $('#nrc_state_region').val(cpaff_data.nrc_state_region);
                        $('#father_name_mm').val(cpaff_data.father_name_mm);
                        $('#father_name_eng').val(cpaff_data.father_name_eng); 
                        // cpaff_data.gender=="Male"? $('#male').attr('checked',true):$('#female').attr('checked',true);
                        if(cpaff_data.gender == "Male"){
                            $('#male').attr('checked',true);
                            $('#female').attr('disabled', true);
                        }else{
                            $('#female').attr('checked',true);
                            $('#male').attr('disabled', true);
                        } 
                    }
                });
            }
            else {
                if (cpaff_data.status == 2) {
                    $.ajax({
                        url: BACKEND_URL + "/get_cpaff/" + student.id,
                        type: 'get',
                        data: "",
                        success: function (data) {
                            var student = data.data;
                            // console.log(cpaff_data);
                            $('#name_mm').val(student.name_mm);
                            $('#name_eng').val(student.name_eng);
                            $('#nrc_state_region').val(student.nrc_state_region);
                            $('#nrc_township').val(student.nrc_township);
                            $('#nrc_citizen').val(student.nrc_citizen);
                            $('#nrc_number').val(student.nrc_number);
                            $('#nrc_state_region').val(student.nrc_state_region);
                            $('#father_name_mm').val(student.father_name_mm);
                            $('#father_name_eng').val(student.father_name_eng);
                            // student.gender=="Male"? $('#male').attr('checked',true):$('#female').attr('checked',true);
                            // $('#remark').css('display', 'block');
                            // $('#remark_description').text(cpaff_data.reject_description);
                            // $('#cpaff_submit').html('Update');
                            // $("#cpaff_submit").addClass("update-profile");
                            if(student.gender == "Male"){
                                $('#male').attr('checked',true);
                                $('#female').attr('disabled', true);
                            }else{
                                $('#female').attr('checked',true);
                                $('#male').attr('disabled', true);
                            } 

                        }
                    });
                }
                else {
                    $.ajax({
                        url: BACKEND_URL + "/get_cpaff/" + student.id,
                        type: 'get',
                        data: "",
                        success: function (data) {

                            // console.log(data,"ddata")
                            var cpaff_data = data.data;
                            // console.log('cpaff_data',cpaff_data)
                            $('#name_mm').val(cpaff_data.name_mm);
                            $('#name_eng').val(cpaff_data.name_eng);
                            $('#nrc_state_region').val(cpaff_data.nrc_state_region);
                            $('#nrc_township').val(cpaff_data.nrc_township);
                            $('#nrc_citizen').val(cpaff_data.nrc_citizen);
                            $('#nrc_number').val(cpaff_data.nrc_number);
                            $('#nrc_state_region').val(cpaff_data.nrc_state_region);
                            $('#father_name_mm').val(cpaff_data.father_name_mm);
                            $('#father_name_eng').val(cpaff_data.father_name_eng);
                            $('#address').val(cpaff_data.address);
                            $('#phone').val(cpaff_data.phone);
                            // cpaff_data.gender=="Male"? $('#male').attr('checked',true):$('#female').attr('checked',true);
                            if(cpaff_data.gender == "Male"){
                                $('#male').attr('checked',true);
                                $('#female').attr('disabled', true);
                            }else{
                                $('#female').attr('checked',true);
                                $('#male').attr('disabled', true);
                            }
                        }
                    });
                }
            }
        }
    });
}

function getCPAFFRegNo(){
    var student = JSON.parse(localStorage.getItem('studentinfo'));
    $.ajax({
        url: BACKEND_URL + "/get_cpaff_reg_no/" + student.id,
        type: 'get',
        data: "",
        success: function (data) {
            var cpaff_data = data.data;
            console.log(cpaff_data,'aaaa')
            $('#cpaff_reg_no').val(cpaff_data[0].cpaff_reg_no);
        }
    });
}

function getPAPPRegNo(){
    var student = JSON.parse(localStorage.getItem('studentinfo'));
    $.ajax({
        url: BACKEND_URL + "/get_papp_reg_no/" + student.id,
        type: 'get',
        data: "",
        success: function (data) {
            var papp_data = data.data;
            console.log(papp_data[0])
            $('#papp_reg_no').val(papp_data[0].papp_reg_no);
            $('#papp_reg_number').val(papp_data[0].papp_reg_no);
        }
    });
}

function loadCpaffInitialData() {
    var student = JSON.parse(localStorage.getItem('studentinfo'));
    $.ajax({
        url: BACKEND_URL + "/cpaff_by_stuId/" + student.id,
        type: 'get',
        data: "",
        success: function (data) {
            console.log(data)
            var cpaff_data = data.data;
            // console.log('cpaff_data11',cpaff_data)
            // $('#cpa_batch_no').val(cpaff_data.cpa_batch_no);
            // $('#contact_mail').val(cpaff_data.contact_mail);
            // $('#last_paid_year').val(cpaff_data.last_paid_year);
            // $('#resign_date').val(cpaff_data.resign_date);
            // $('#cpa_batch_no').val(cpaff_data.cpa_batch_no);
            // $('#address').val(cpaff_data.address);
            // $('#phone').val(cpaff_data.phone);
            // $('#contact_mail').val(cpaff_data.contact_mail);
            // $('#last_paid_year').val(cpaff_data.last_paid_year);
            // $('#resign_date').val(cpaff_data.resign_date);
            // $('#total_hours').val(cpaff_data.total_hours);
            // $('#reg_no').val(cpaff_data.reg_no);
            // $('#cpaff_reg_no').val(cpaff_data.reg_no);
            // console.log(cpaff_data.ra != null || cpaff_data.ra != "null");
            if (cpaff_data.ra != null && cpaff_data.ra != "null") {
                $('#ra_edu').attr('checked', true);
                $('#cpa_edu').attr('disabled', true);   
                $('#education').attr('disabled', true); 
                getCPAEducation();        
                $(".ra_file").append("<a href='"+BASE_URL+cpaff_data.ra+"'  target='_blank'>View File</a><br/>");
            }
            else {
                getCPAEducation();
                $(".ra_file").append("");
            }
            if(cpaff_data.cpa!=null && cpaff_data.cpa!="null"){
                $('#cpa_edu').attr('checked', true);   
                $('#education').attr('disabled', true); 
                $('#ra_edu').attr('disabled', true);            
                getCPAEducation();
                $(".cpa_file").show();
                $(".cpa_file").append("<a href='" + BASE_URL + cpaff_data.cpa + "'  target='_blank'>View File</a><br/>");
            }
            else {
                getCPAEducation();
                $(".cpa_file").append("");
            }
            if (cpaff_data.foreign_degree != null && cpaff_data.foreign_degree != "null") {
                $('#education').attr('checked', true);
                $('#cpa_edu').attr('disabled', true); 
                $('#ra_edu').attr('disabled', true);
                getCPAEducation();
                let foreign_degree = JSON.parse(cpaff_data.foreign_degree);
                let degree_name = JSON.parse(cpaff_data.degree_name);
                let degree_pass_year = JSON.parse(cpaff_data.degree_pass_year);
                for (let j = 0; j < degree_name.length - 1; j++) {
                    AddCPAFFDegree();
                }
                for (let i = 0; i < degree_name.length; i++) {
                    $('input[name="degree_name[]"]').eq(i).val(degree_name[i]);
                    $('input[name="degree_pass_year[]"]').eq(i).val(degree_pass_year[i]);
                    $($(".foreign_degree_file")[i]).append(jQuery("<a href='" + BASE_URL + foreign_degree[i] + "'  target='_blank'>View File</a><br/>"));
                }
            }
        }
    });
}

function loadCpaffInfo() {
    var student = JSON.parse(localStorage.getItem('studentinfo'));
    $.ajax({
        url: BACKEND_URL + "/cpaff_by_stuId/" + student.id,
        type: 'get',
        data: "",
        success: function (data) {
            // console.log(data,"aa");
            var cpaff_data = data.data;
            $('#cpa_batch_no').val(cpaff_data.cpa_batch_no);
            $('#contact_mail').val(cpaff_data.contact_mail);
            $('#last_paid_year').val(cpaff_data.last_paid_year==null? '-':cpaff_data.last_paid_year);
            $('#resign_date').val(cpaff_data.resign_date);
            $('#cpaff_reg_no').val(cpaff_data.cpaff_reg_no);  
        }
    });
}

function loadCpaffOfflineInitialData() {
    var student = JSON.parse(localStorage.getItem('studentinfo'));
    $.ajax({
        url: BACKEND_URL + "/cpaff_by_stuId/" + student.id,
        type: 'get',
        data: "",
        success: function (data) {
            // console.log(data)
            var cpaff_data = data.data;

            // document.getElementById('cpaff_img').src=BASE_URL + cpaff.profile_photo;
            $('#cpaff_img').src = BASE_URL + cpaff_data.profile_photo;
            // console.log('cpaff_data11',cpaff_data)
            $('#cpa_batch_no').val(cpaff_data.cpa_batch_no);
            $('#address').val(cpaff_data.address);
            $('#phone').val(cpaff_data.phone);
            $('#contact_mail').val(cpaff_data.contact_mail);
            // $('#reg_no').val(cpaff_data.reg_no);
            $('#cpaff_reg_no').val(cpaff_data.cpaff_reg_no);
            $('#cpaff_pass_date').val(cpaff_data.cpaff_pass_date);
            $('#cpaff_renew_date').val(cpaff_data.cpaff_renew_date);
            $('#papp_reg_no').val(cpaff_data.papp_reg_no);
            $('#papp_reg_year').val(cpaff_data.papp_reg_year);
            $('#fine_person').val(cpaff_data.fine_person);
            $('#total_hours').val(cpaff_data.total_hours);
            $('#last_paid_year').val(cpaff_data.last_paid_year);
            $('#resign_date').val(cpaff_data.resign_date);
            // console.log(cpaff_data.papp_reg_year)
            // console.log(cpaff_data)
            if(cpaff_data.renew_file !=null || cpaff_data.renew_file != "null")
            {
                $(".renew_file").append("<a href='" + BASE_URL + cpaff_data.renew_file + "'  target='_blank'>View File</a><br/>");
            }
            $(".cpa_certificate").append("<a href='" + BASE_URL + cpaff_data.cpa_certificate + "'  target='_blank'>View File</a><br/>");
            $(".mpa_mem_card").append("<a href='" + BASE_URL + cpaff_data.mpa_mem_card + "'  target='_blank'>View File</a><br/>");
            $(".mpa_mem_card_back").append("<a href='" + BASE_URL + cpaff_data.mpa_mem_card_back + "'  target='_blank'>View File</a><br/>");
            $(".cpd_record").append("<a href='" + BASE_URL + cpaff_data.cpd_record + "'  target='_blank'>View File</a><br/>");
            // console.log(cpaff_data.renew_file)
            // console.log(cpaff_data.ra != null || cpaff_data.ra != "null");
            if (cpaff_data.ra != null && cpaff_data.ra != "null") {
                $('#ra_edu').attr('checked', true);
                $('#cpa_edu').attr('disabled', true);   
                $('#education').attr('disabled', true); 
                getCPAEducation();        
                $(".ra_file").append("<a href='"+BASE_URL+cpaff_data.ra+"'  target='_blank'>View File</a><br/>");
            }
            else {
                getCPAEducation();
                $(".ra_file").append("");
            }
            if(cpaff_data.cpa!=null && cpaff_data.cpa!="null"){
                $('#cpa_edu').attr('checked', true);   
                $('#education').attr('disabled', true); 
                $('#ra_edu').attr('disabled', true);            
                getCPAEducation();
                $(".cpa_file").show();
                $(".cpa_file").append("<a href='" + BASE_URL + cpaff_data.cpa + "'  target='_blank'>View File</a><br/>");
            }
            else {
                getCPAEducation();
                $(".cpa_file").append("");
            }
            if (cpaff_data.foreign_degree != null && cpaff_data.foreign_degree != "null") {
                $('#education').attr('checked', true);
                $('#cpa_edu').attr('disabled', true); 
                $('#ra_edu').attr('disabled', true);
                getCPAEducation();
                let foreign_degree = JSON.parse(cpaff_data.foreign_degree);
                let degree_name = JSON.parse(cpaff_data.degree_name);
                let degree_pass_year = JSON.parse(cpaff_data.degree_pass_year);
                for (let j = 0; j < degree_name.length - 1; j++) {
                    AddCPAFFDegree();
                }
                for (let i = 0; i < degree_name.length; i++) {
                    $('input[name="degree_name[]"]').eq(i).val(degree_name[i]);
                    $('input[name="degree_pass_year[]"]').eq(i).val(degree_pass_year[i]);
                    $($(".foreign_degree_file")[i]).append(jQuery("<a href='" + BASE_URL + foreign_degree[i] + "'  target='_blank'>View File</a><br/>"));
                }
            }
        }
    });
}

function createCPAFFRegister() {
    var student = JSON.parse(localStorage.getItem('studentinfo'));
    var profile_photo = $("input[name=profile_photo]")[0].files[0];
    var cpa = $("input[name=cpa]")[0].files[0];
    var ra = $("input[name=ra]")[0].files[0];

    // var foreign_degree  =   $("input[name=foreign_degree[]]")[0].files[0];
    var foreign_degree = $('input[name="foreign_degree[]"]');

    var cpa_certificate = $("input[name=cpa_certificate]")[0].files[0];
    // var cpa_certificate_back = $("input[name=cpa_certificate_back]")[0].files[0];
    var mpa_mem_card = $("input[name=mpa_mem_card]")[0].files[0];
    var mpa_mem_card_back = $("input[name=mpa_mem_card_back]")[0].files[0];
    var nrc_front = $("input[name=nrc_front]")[0].files[0];
    var nrc_back = $("input[name=nrc_back]")[0].files[0];
    var cpd_record = $("input[name=cpd_record]")[0].files[0];
    // var passport_image = $("input[name=passport_image]")[0].files[0];
    var three_years_full = $("input[name=three_years_full]")[0].files[0];
    // var letter = $("input[name=letter]")[0].files[0];

    var cpa_edu = document.getElementById("cpa_edu");
    var ra_edu = document.getElementById("ra_edu");
    var education = document.getElementById("education");

    var cpa_part_2 = document.getElementById("cpa_part_2_check");
    var qt_pass = document.getElementById("qt_pass_check");

    var send_data = new FormData();
    send_data.append('student_info_id', student.id);
    send_data.append('profile_photo', profile_photo);
    send_data.append('gender', $("input[type='radio'][name='gender']:checked").val());
    if (cpa_edu.checked == true) {
        send_data.append('cpa', cpa);
    }
    else if (ra_edu.checked == true) {
        send_data.append('ra', ra);
    } else {
        $('input[name="degree_name[]"]').map(function () {
            send_data.append('degree_name[]', $(this).val());
        });
        $('input[name="degree_pass_year[]"]').map(function () {
            send_data.append('degree_pass_year[]', $(this).val());
        });
        $('input[name="degree_file[]"]').map(function () {
            for (var i = 0; i < $(this).get(0).files.length; ++i) {
                send_data.append('degree_file[]', $(this).get(0).files[i]);
            }
        });
    }
    // send_data.append('foreign_degree', foreign_degree);

    // for (var i = 0; i < count; i++) {
    //     send_data.append('foreign_degree[]',$('input[name=foreign_degree]'+i)[0].files[0]);
    // }

    foreign_degree.map(function () {
        for (var i = 0; i < $(this).get(0).files.length; ++i) {
            send_data.append('foreign_degree[]', $(this).get(0).files[i]);
        }

    });

    if (cpa_part_2.checked == true) {
        send_data.append('cpa2_pass_date', $('input[name="cpa2_pass_date"]').val());
        send_data.append('cpa2_reg_no', $('input[name="cpa2_reg_no"]').val());
    }
    else if (qt_pass.checked == true) {
        send_data.append('country', $('input[name="country"]').val());
        send_data.append('government', $('input[name="government"]').val());
        send_data.append('exam_year', $('input[name="exam_year"]').val());
        send_data.append('exam_month', $('input[name="exam_month"]').val());
        send_data.append('roll_no', $('input[name="roll_no"]').val());
    }

    // if(cpa_part_2.checked==true){
    //     send_data.append('cpa_part_2',1);
    //     send_data.append('qt_pass',0);
    // }
    // else if(qt_pass.checked==true){
    //     send_data.append('cpa_part_2',0);
    //     send_data.append('qt_pass',1);
    // }else{
    //     send_data.append('cpa_part_2',0);
    //     send_data.append('qt_pass',0);
    // }

    send_data.append('name_mm', $("input[name=name_mm]").val());
    send_data.append('name_eng', $("input[name=name_eng]").val());
    var nrc_state_region = $("#nrc_state_region").val();
    var nrc_township = $("#nrc_township").val();
    var nrc_citizen = $("#nrc_citizen").val();
    send_data.append('nrc_state_region', nrc_state_region);
    send_data.append('nrc_township', nrc_township);
    send_data.append('nrc_citizen', nrc_citizen);
    send_data.append('nrc_number', $("input[name=nrc_number]").val());
    send_data.append('father_name_mm', $("input[name=father_name_mm]").val());
    send_data.append('father_name_eng', $("input[name=father_name_eng]").val());

    send_data.append('cpa_certificate', cpa_certificate);
    // send_data.append('mpa_mem_card', mpa_mem_card);
    send_data.append('nrc_front', nrc_front);
    send_data.append('nrc_back', nrc_back);
    send_data.append('mpa_mem_card', mpa_mem_card);
    send_data.append('mpa_mem_card_back', mpa_mem_card_back);
    send_data.append('cpd_record', cpd_record);
    send_data.append('total_hours', $("input[name=total_hours]").val());
    send_data.append('three_years_full', three_years_full);
    // send_data.append('letter', letter);

    send_data.append('self_confession',$("input[type='radio'][name='self_confession']:checked").val());
    //save to cpaff
    send_data.append('cpa_batch_no', $("input[name=cpa_batch_no]").val());
    send_data.append('address', $("input[name=address]").val());
    send_data.append('phone', $("input[name=phone]").val());
    send_data.append('contact_mail', $("input[name=contact_mail]").val());
    send_data.append('is_renew', 0);
    send_data.append('form_type', $("input[name=form_type]").val());
    // send_data.append('cpa_certificate_back', cpa_certificate_back);
    send_data.append('cpa2_pass_date', $("input[name=cpa2_pass_date]").val());
    send_data.append('cpa2_reg_no', $("input[name=cpa2_reg_no]").val());
    // send_data.append('reg_no', $("input[name=reg_no]").val());
    send_data.append('country', $("input[name=country]").val());
    send_data.append('government', $("input[name=government]").val());
    send_data.append('exam_year', $("input[name=exam_year]").val());
    send_data.append('exam_month', $("input[name=exam_month]").val());
    send_data.append('roll_no', $("input[name=roll_no]").val());
    send_data.append('type', 0);
    var self_confession_accept = document.getElementById("accept_cpaffRenew");
    var self_confession_not_accept = document.getElementById("not-accept_cpaffRenew");
    if(self_confession_accept.checked == true || self_confession_not_accept.checked == true){
    show_loader();
    if($('#cpaff_id').val())
    {
        var id=$('#cpaff_id').val();
        send_data.append('cpaff_id',id);   
        $.ajax({
            url: BACKEND_URL+"/update_cpaff_initial",
            type: 'post',
            data:send_data,
            contentType: false,
            processData: false,
            success: function(result){
                EasyLoading.hide();
                successMessage("You have successfully updated!");
                    // location.reload();
                    location.href = FRONTEND_URL+'/';
                },
            error:function (message){
                EasyLoading.hide();
                }
            });
    }
    else
    {
        $.ajax({
            url: BACKEND_URL + "/cpa_ff",
            type: 'post',
            data: send_data,
            contentType: false,
            processData: false,
            success: function (result) {
                EasyLoading.hide();
                successMessage("You have successfully registerd!");
                // location.reload();
                location.href = FRONTEND_URL + "/";
            },
            error: function (message) {
            }
        });
    }
}
else{
    $('#valid_self_confession').text("Please choose Yes Or No");
    $('#valid_self_confession').css('display','block');
    errorMessage("Please choose Yes or No");
}
}


function selectEntry() {
    var radioValue = $("input[name='selected_name']:checked").val();

    if (radioValue == 1) {
        $('#direct').css('display', 'block');
        $('#entry_pass').css('display', 'none');
        $("#direct").find('input').prop('required', true);
    } else {
        $('#entry_pass').css('display', 'block');
        $('#direct').css('display', 'none');
        $("#direct").find('input').prop('required', false);
    }
}

function isLoginCPAFF() {
    var student = JSON.parse(localStorage.getItem('studentinfo'));
    // console.log(student)
    if (student == null) {
        // location.href = FRONTEND_URL + '/login';
        location.href = FRONTEND_URL + '/cpaff_other';
    }
    else {
        $.ajax({
            url: BACKEND_URL + "/get_exam_student/" + student.id,
            type: 'get',
            data: "",
            success: function (result) {
                var exam = result.data;
                if (exam != null) {
                    exam.every(function (element) {
                        if (element.course.code == "cpa_2" && element.grade == "1") {
                            var a = new Date(student.date_of_birth);
                            var diff_ms = Date.now() - a.getTime();
                            var age_dt = new Date(diff_ms);
                            var age = Math.abs(age_dt.getUTCFullYear() - 1970);
                            if (age >= 21) {
                                $("#age").append(age + " years");
                                // document.getElementById('fieldset').disabled=false;
                                document.getElementById('pass_cpa_two').style.display = 'none';
                            }
                            else {
                                $("#age").append(age + " years");
                                // document.getElementById('fieldset').disabled=true;
                                document.getElementById('check_age').style.display = 'block';
                                document.getElementById('pass_cpa_two').style.display = 'none';
                            }
                            return false;
                        }
                        else {
                            // document.getElementById('fieldset').disabled=true;
                            document.getElementById('pass_cpa_two').style.display = 'block';
                            return true;
                        }


                    });
                }
                loadCpaffData();
            },
            error: function (message) {
            }
        });

    }
}

function getCpersonalNo()
{
    var student = JSON.parse(localStorage.getItem('studentinfo'));
    // console.log(student.cpersonal_no)
    $('#cpa_batch_no').val(student.cpersonal_no);
}

function form_feedback() {
    var student = JSON.parse(localStorage.getItem('studentinfo'));
    if (student != null) {
        $.ajax({
            url: BACKEND_URL + "/cpaff_by_stuId/" + student.id,
            type: 'GET',
            contentType: false,
            processData: false,
            success: function (cData) {
                var data = cData.data;
                if (data != null) {
                    if (data.status == 0 || data.renew_status == 0) {
                        document.getElementById('pending').style.display = 'block';
                        document.getElementById('approved').style.display = 'none';
                        $('.register-btn').css('display', 'none');
                        $('.payment-btn').css('display', 'none');
                    }
                    else if (data.status == 1 || data.renew_status == 1) {
                        //document.getElementById('approved').style.display = 'block';
                        document.getElementById('pending').style.display = 'none';
                        //$('.payment-btn').css('display', 'block');
                        $('.register-btn').css({ 'display': 'none' });
                        $('.register-btn').removeClass('mt-4');
                    }
                    else if (data.status == 2 || data.renew_status == 2) {
                        document.getElementById('rejected').style.display = 'block';
                    }
                }
                else {
                    document.getElementById('cpaff_from').style.display = 'block';
                }
            }
        });
    }
    else {
        $('.payment-btn').css('display', 'none');
        $('.register-btn').css('display', 'block');
    }
}
function loadCPAFF() {
    var student = JSON.parse(localStorage.getItem('studentinfo'));
    if (student != null) {

        var a = new Date(student.date_of_birth);
        var diff_ms = Date.now() - a.getTime();
        var age_dt = new Date(diff_ms);
        var age = Math.abs(age_dt.getUTCFullYear() - 1970);
        $("#age").append(age + " years");
        $.ajax({
            url: BACKEND_URL + "/cpaff_by_stuId/" + student.id,
            type: 'GET',
            contentType: false,
            processData: false,
            success: function (cData) {
                var data = cData.data;
                if (data != null) {
                    if (data.status == 1 || data.renew_status == 1) {
                        document.getElementById('approved').style.display = 'none';
                        document.getElementById('cpa_initial').style.display = 'none';
                        document.getElementById('cpaff_renew_form').style.display = 'block';
                        $('.cpaff_initial').css('display', 'none');
                        $('.cpaff_renew').css('display', 'block');
                        var accept = new Date(data.renew_accepted_date);
                        var month = accept.getMonth() + 1;
                        var year = accept.getFullYear();
                        var y = year + 1;
                        var now = new Date();
                        $('#previewImg').attr("src", BASE_URL + data.image);
                        $('#previewNRCFrontImg').attr("src", BASE_URL + data.nrc_front);
                        $('#previewNRCBackImg').attr("src", BASE_URL + data.nrc_back);
                        $('#hidden_nrc_front').val(data.nrc_front);
                        $('#hidden_nrc_back').val(data.nrc_back);
                        $('#hidden_degree_file0').val(data.degree_file0);
                        $('#hidden_cpa_certificate').val(data.cpa_certificate);
                        $('#hidden_mpa_mem_card').val(data.mpa_mem_card);
                        $('#hidden_cpd_record').val(data.cpd_record);
                        $('#hidden_passport_image').val(data.passport_image);
                        if (data.cpa_part_2 == 1) {
                            $('#cpa_part_2_check').prop("checked", true);

                        } else {
                            $('#qt_pass_check').prop("checked", true);
                            $('input[name=qt_pass_date]').val(data.qt_pass_date);
                            $('input[name=qt_pass_seat_no]').val(data.qt_pass_seat_no);
                        }

                        $('input[name=pass_batch_no]').val(data.pass_batch_no);
                        $('input[name=pass_personal_no]').val(data.pass_personal_no);
                        // $('input[name=total_hours]').val(data.total_hours);
                        $('input[name=degree_pass_year0]').val(data.degree_pass_year0);
                        $('input[name=degree_name0]').val(data.degree_name0);
                        loadFile(data.cpa_certificate, "view_cpa_certificate");
                        loadFile(data.degree_file0, "view_degree_file0");
                        loadFile(data.mpa_mem_card, "view_mpa_mem_card");
                        loadFile(data.cpd_record, "view_cpd_record");
                        loadFile(data.passport_image, "view_passport_image");
                        $('#regno').val(data.id);
                        $('#register_date').val(data.renew_accepted_date);
                        if ((now.getFullYear() == y && (now.getMonth() + 1) == month) || now.getFullYear() > year) {
                            $("#message").val("Your registration is expired! You need to submit new registeration form again.");
                            $('.renew_submit').prop('disabled', false);

                        } else if ((now.getFullYear() == accept.getFullYear() && month == '10') || (now.getFullYear() == accept.getFullYear() && month == '11') || (now.getFullYear() == accept.getFullYear() && month == '12')) {
                            $("#message").val("Your registration will start in " + now.getFullYear() + " year!");
                            // $('.renew_submit').prop('disabled', true);
                            $('.renew_submit').prop('disabled', false);
                        } else {
                            $('#message').val("You are verified!");
                            $('.renew_submit').prop('disabled', true);
                        }
                        $('#previewImg').attr("src", BASE_URL + data.profile_photo);

                    }
                    else {
                        document.getElementById('cpa_initial').style.display = 'blocknone';
                        document.getElementById('cpaff_renew_form').style.display = 'none';
                    }
                }
                else {
                    document.getElementById('cpa_initial').style.display = 'block';
                    document.getElementById('cpaff_renew_form').style.display = 'none';
                }
            }
        });
    }


}

// $().ready(function (){
//     $("#cpaff_renew_form_submit").validate({
//         rules:{
//             profile_photo : "required",
//             name_mm : "required",
//             // nrc_front : "required",
//             // nrc_back : "required",
//             father_name_mm : "required",
//             cpa_batch_no : "required",
//             address : "required",
//             phone : "required",
//             contact_mail : "required",
//             cpa2_pass_date : "required",
//             renew_accepted_date : "required",
//             cpa2_pass_date : "required",
//             // renew_file : "required",
//             // reg_no : "required",
//             degree_pass_year : "required",
//             // fine_person : "required",
//             cpa_certificate : "required",
//             cpd_record : "required",
//             passport_image : "required",
//         },
//         messages:{
//             profile_photo : "Please replace your photo with current photo",
//             name_mm : "Please enter your name",
//             nrc_state_region : "Please select one",
//             nrc_township : "Please select one",
//             nrc_citizen : "Please select one",
//             nrc_number : {
//                 required : "Please enter your nrc number",
//             },
//             // nrc_front : "Please upload nrc photo (front)",
//             // nrc_back : "Please upload nrc photo (back)",
//             father_name_mm : "Please enter your father name in english",
//             cpa_batch_no : "Please enter cpa batch number",
//             address : "Please enter your address",
//             phone : "Please enter your phone number",
//             contact_mail : "Please enter your contact mail",
//             cpa2_pass_date : "Please fill CPA 2 passed date",
//             renew_accepted_date : "Please renew accepted date",
//             // renew_file : "Please upload renew file",
//             // reg_no : "Please fill registeration No.",
//             degree_pass_year : "Please fill degree passed year",
//             // fine_person : "Please fill this field",
//             cpa_certificate : "Please upload CPA certificate",
//             cpd_record : "Please upload CPA record",
//             passport_image : "Please upload passport image",

//         },
//         submitHandler: function(form) {
//             $('#renewModal').modal('show');
//         }
//     });
// });

// function RenewCPAFF() {
//     var student = JSON.parse(localStorage.getItem('studentinfo'));

//     show_loader()

//     $.ajax({
//         url: BACKEND_URL + "/cpaff_by_stuId/" + student.id,
//         type: 'get',
//         data: "",
//         success: function (result) {
//             if (result.data != null) {
//                 var send_data = new FormData($("#cpaff_renew_form_submit")[0]);
//                 if ($("input[name=nrc_front]")[0].files[0]) {
//                     send_data.append('nrc_front', $("input[name=nrc_front]")[0].files[0]);
//                 } else {
//                     send_data.append('nrc_front', $('#hidden_nrc_front').val());
//                 }
//                 if ($("input[name=nrc_back]")[0].files[0]) {
//                     send_data.append('nrc_back', $("input[name=nrc_back]")[0].files[0]);
//                 } else {
//                     send_data.append('nrc_back', $('#hidden_nrc_back').val());
//                 }
//                 //if(!$("input[name=cpa_certificate]")[0].files[0]){
//                 // send_data.append('cpa_certificate', $('#hidden_cpa_certificate').val());
//                 send_data.append('cpa_certificate', $("input[name=cpa_certificate]")[0].files[0]);
//                 // }
//                 //if(!$("input[name=mpa_mem_card]")[0].files[0]){
//                 // send_data.append('mpa_mem_card', $('#hidden_mpa_mem_card').val());
//                 send_data.append('mpa_mem_card', $("input[name=mpa_mem_card]")[0].files[0]);
//                 send_data.append('mpa_mem_card_back', $("input[name=mpa_mem_card_back]")[0].files[0]);
//                 //}
//                 //if(!$("input[name=cpd_record]")[0].files[0]){
//                 // send_data.append('cpd_record', $('#hidden_cpd_record').val());
//                 send_data.append('cpd_record', $("input[name=cpd_record]")[0].files[0]);
//                 //}
//                 //if(!$("input[name=passport_image]")[0].files[0]){
//                 // send_data.append('passport_image', $('#hidden_passport_image').val());
//                 // send_data.append('passport_image', $("input[name=passport_image]")[0].files[0]);
//                 //}

//                 // var cpa_part_2      = document.getElementById("cpa_part_2_check");
//                 // var qt_pass         = document.getElementById("qt_pass_check");
//                 // if(cpa_part_2.checked==true){
//                 //   send_data.append('cpa_part_2',1);
//                 //   send_data.append('qt_pass',0);
//                 //   }
//                 //   else if(qt_pass.checked==true){
//                 //       send_data.append('cpa_part_2',0);
//                 //       send_data.append('qt_pass',1);
//                 //   }else{
//                 //       send_data.append('cpa_part_2',0);
//                 //       send_data.append('qt_pass',0);
//                 //   }
//                 if ($("#cpa_edu").prop("checked")) {
//                     send_data.append('cpa', $("input[name=cpa]")[0].files[0]);
//                 }
//                 else if($("#ra_edu").prop("checked")){
//                     send_data.append('ra', $("input[name=ra]")[0].files[0]);
//                 }
//                 else if($("#education").prop("checked")){

//                 }
//                 send_data.append('_method', 'PUT');
//                 $.ajax({
//                     url: BACKEND_URL + "/cpa_ff/" + result.data.id,
//                     type: 'post',
//                     data: send_data,
//                     contentType: false,
//                     processData: false,
//                     success: function (result) {
//                         EasyLoading.hide();
//                         successMessage(result.message);
//                         // location.reload();
//                         location.href = FRONTEND_URL + "/";
//                         document.getElementById('approved').style.display = 'none';
//                         document.getElementById('rejected').style.display = 'none';
//                         document.getElementById('pending').style.display = 'none';
//                         document.getElementById('cpaff_form').style.display = 'none';
//                         document.getElementById('cpaff_renew_form').style.display = 'none';
//                         document.getElementById('expiry_card').style.display = 'none';
//                     },
//                     error: function (message) {
//                     }
//                 });
//             }
//         },
//         error: function (message) {
//         }
//     });
// }


function selectStaff() {
    var radioValue = $("input[name='gov_staff']:checked").val();


    if (radioValue == 1) {
        $('#rec_letter').css('display', 'block');

    } else {
        $('#rec_letter').css('display', 'none');

    }
}

function RenewCPAFF() {
    var student = JSON.parse(localStorage.getItem('studentinfo'));
    var profile_photo = $("input[name=profile_photo]")[0].files[0];
    var cpa = $("input[name=cpa]")[0].files[0];
    var ra = $("input[name=ra]")[0].files[0];
    show_loader();
    var send_data = new FormData($("#cpaff_renew_form_submit")[0]);
    send_data.append('student_info_id', student.id);
    // send_data.append('student_info_id', student.id);
    if ($("input[name=nrc_front]")[0].files[0]) {
        send_data.append('nrc_front', $("input[name=nrc_front]")[0].files[0]);
    } else {
        send_data.append('nrc_front', $('#hidden_nrc_front').val());
    }
    if ($("input[name=nrc_back]")[0].files[0]) {
        send_data.append('nrc_back', $("input[name=nrc_back]")[0].files[0]);
    } else {
        send_data.append('nrc_back', $('#hidden_nrc_back').val());
    }
    send_data.append('cpa_certificate', $("input[name=cpa_certificate]")[0].files[0]);
    send_data.append('mpa_mem_card', $("input[name=mpa_mem_card]")[0].files[0]);
    send_data.append('mpa_mem_card_back', $("input[name=mpa_mem_card_back]")[0].files[0]);
    send_data.append('cpd_record', $("input[name=cpd_record]")[0].files[0]);
    if ($("#cpa_edu").prop("checked")) {
        send_data.append('cpa', cpa);
    }
    else if ($("#ra_edu").prop("checked")) {
        send_data.append('ra', ra);
    }
    else if ($("#education").prop("checked")) {
        $('input[name="degree_name[]"]').map(function () {
            send_data.append('degree_name[]', $(this).val());
        });
        $('input[name="degree_pass_year[]"]').map(function () {
            send_data.append('degree_pass_year[]', $(this).val());
        });
        $('input[name="degree_file[]"]').map(function () {
            for (var i = 0; i < $(this).get(0).files.length; ++i) {
                send_data.append('degree_file[]', $(this).get(0).files[i]);
            }
        });
    }
    send_data.append('cpaff_pass_date', $("input[name=cpaff_pass_date]").val());
    send_data.append('cpaff_renew_date', $("input[name=cpaff_renew_date]").val());
    send_data.append('cpa_batch_no', $("input[name=cpa_batch_no]").val());
    send_data.append('papp_reg_no', $("input[name=papp_reg_no]").val());
    send_data.append('papp_reg_year', $("input[name=papp_reg_year]").val());
    send_data.append('renew_file', $("input[name=renew_file]")[0].files[0]);
    send_data.append('address', $("input[name=address]").val());
    send_data.append('phone', $("input[name=phone]").val());
    send_data.append('contact_mail', $("input[name=contact_mail]").val());
    send_data.append('total_hours', $("input[name=total_hours]").val());
    send_data.append('fine_person', $("input[name=fine_person]").val());
    send_data.append('is_renew', 1);
    send_data.append('self_confession_renew', $("input[type='radio'][name='self_confession_renew']:checked").val());
    send_data.append('last_paid_year', $("input[name=last_paid_year]").val());
    send_data.append('resign_date', $("input[name=resign_date]").val());
    // send_data.append('offline_user', $("input[name=offline_user]").val());
    send_data.append('type',1);
    var self_confession_accept = document.getElementById("accept_cpaffRenew");
    var self_confession_not_accept = document.getElementById("not-accept_cpaffRenew");
    if(self_confession_accept.checked == true || self_confession_not_accept.checked == true){
        // if($('#cpaff_id').val()){
        //             send_data.append('cpaff_id',$('#cpaff_id').val());
        //             $.ajax({
        //                 url: BACKEND_URL+"/update_cpaff_renewal",
        //                 type: 'post',
        //                 data:send_data,
        //                 contentType: false,
        //                 processData: false,
        //                 success: function(result){
        //                     EasyLoading.hide();
        //                     successMessage(result.message);
        //                     // location.reload();
        //                     location.href = FRONTEND_URL+'/';
        //                     document.getElementById('approved').style.display='none';
        //                     document.getElementById('rejected').style.display='none';
        //                     document.getElementById('pending').style.display='none';
        //                     document.getElementById('papp_form').style.display='none';
        //                     document.getElementById('papp_renew_form').style.display='none';
        //                     document.getElementById('expiry_card').style.display='none';
        //                 },
        //                 error:function (message){
        //                 }
        //             });
        //         }
        //         else
        //         {
                     $.ajax({
                        url: BACKEND_URL + "/renew_cpaff",
                        type: 'post',
                        data: send_data,
                        contentType: false,
                        processData: false,
                        success: function (result) {
                            EasyLoading.hide();
                            console.log(result);
                            successMessage(result.message);
                            // location.reload();
                            location.href = FRONTEND_URL + "/";
                            document.getElementById('approved').style.display = 'none';
                            document.getElementById('rejected').style.display = 'none';
                            document.getElementById('pending').style.display = 'none';
                            document.getElementById('cpaff_form').style.display = 'none';
                            document.getElementById('cpaff_renew_form').style.display = 'none';
                            document.getElementById('expiry_card').style.display = 'none';
                        },
                        error: function (message) {
                            EasyLoading.hide();
                        }
                    });
                // }
         
    }
    else{
        $('#valid_self_confession').text("Please choose Yes Or No");
        $('#valid_self_confession').css('display','block');
        errorMessage("Please choose Yes or No");
    }
}

function renewRejectCpaff() {
    var student = JSON.parse(localStorage.getItem('studentinfo'));
    var profile_photo = $("input[name=profile_photo]")[0].files[0];
    var cpa = $("input[name=cpa]")[0].files[0];
    var ra = $("input[name=ra]")[0].files[0];
    show_loader();
    var send_data = new FormData($("#cpaff_renew_form_submit")[0]);
    send_data.append('student_info_id', student.id);
    // send_data.append('student_info_id', student.id);
    if ($("input[name=nrc_front]")[0].files[0]) {
        send_data.append('nrc_front', $("input[name=nrc_front]")[0].files[0]);
    } else {
        send_data.append('nrc_front', $('#hidden_nrc_front').val());
    }
    if ($("input[name=nrc_back]")[0].files[0]) {
        send_data.append('nrc_back', $("input[name=nrc_back]")[0].files[0]);
    } else {
        send_data.append('nrc_back', $('#hidden_nrc_back').val());
    }
    send_data.append('cpa_certificate', $("input[name=cpa_certificate]")[0].files[0]);
    send_data.append('mpa_mem_card', $("input[name=mpa_mem_card]")[0].files[0]);
    send_data.append('mpa_mem_card_back', $("input[name=mpa_mem_card_back]")[0].files[0]);
    send_data.append('cpd_record', $("input[name=cpd_record]")[0].files[0]);
    if ($("#cpa_edu").prop("checked")) {
        send_data.append('cpa', cpa);
    }
    else if ($("#ra_edu").prop("checked")) {
        send_data.append('ra', ra);
    }
    else if ($("#education").prop("checked")) {
        $('input[name="degree_name[]"]').map(function () {
            send_data.append('degree_name[]', $(this).val());
        });
        $('input[name="degree_pass_year[]"]').map(function () {
            send_data.append('degree_pass_year[]', $(this).val());
        });
        $('input[name="degree_file[]"]').map(function () {
            for (var i = 0; i < $(this).get(0).files.length; ++i) {
                send_data.append('degree_file[]', $(this).get(0).files[i]);
            }
        });
    }
    // send_data.append('old_card_year', $("input[name=cpa2_pass_date]").val());
    send_data.append('cpaff_pass_date', $("input[name=cpaff_pass_date]").val());
    send_data.append('cpaff_renew_date', $("input[name=cpaff_renew_date]").val());
    // send_data.append('renew_card_year', $("input[name=renew_accepted_date]").val());
    send_data.append('papp_reg_no', $("input[name=papp_reg_no]").val());
    send_data.append('papp_reg_year', $("input[name=papp_reg_year]").val());
    send_data.append('renew_file', $("input[name=renew_file]")[0].files[0]);
    // send_data.append('is_convicted', $("input[name=fine_person]").val());
    send_data.append('address', $("input[name=address]").val());
    send_data.append('phone', $("input[name=phone]").val());
    send_data.append('contact_mail', $("input[name=contact_mail]").val());
    send_data.append('total_hours', $("input[name=total_hours]").val());
    send_data.append('fine_person', $("input[name=fine_person]").val());
    // send_data.append('offline_user', $("input[name=offline_user]").val());
    send_data.append('is_renew', 1);
    send_data.append('self_confession_renew',$("input[type='radio'][name='self_confession_renew']:checked").val());
    send_data.append('type',1);
    var self_confession_accept = document.getElementById("accept_cpaffRenew");
    var self_confession_not_accept = document.getElementById("not-accept_cpaffRenew");
    if(self_confession_accept.checked == true || self_confession_not_accept.checked == true){
        
        send_data.append('cpaff_id',$('#cpaff_id').val());
        $.ajax({
            url: BACKEND_URL+"/update_cpaff_renewal",
            type: 'post',
            data:send_data,
            contentType: false,
            processData: false,
            success: function(result){
                EasyLoading.hide();
                successMessage(result.message);
                // location.reload();
                location.href = FRONTEND_URL+'/';
                document.getElementById('approved').style.display='none';
                document.getElementById('rejected').style.display='none';
                document.getElementById('pending').style.display='none';
                document.getElementById('papp_form').style.display='none';
                document.getElementById('papp_renew_form').style.display='none';
                document.getElementById('expiry_card').style.display='none';
            },
            error:function (message){
            }
        });
         
                
         
    }
    else{
        $('#valid_self_confession').text("Please choose Yes Or No");
        $('#valid_self_confession').css('display','block');
        errorMessage("Please choose Yes or No");
    }
}