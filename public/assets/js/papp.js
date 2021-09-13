$("input[name='tax_year']").flatpickr({
    enableTime: false,
    dateFormat: "d-m-Y",
});
$("input[name='papp_date']").flatpickr({
    enableTime: false,
    dateFormat: "d-m-Y",
});

function CPA_Check(){
    var checkBox = document.getElementById("cpa_check");
    if (checkBox.checked == true){
    document.getElementById("cpa_edu").style.display = "block";
    }
    else{
    document.getElementById("cpa_edu").style.display = "none";
    }
}

function RA_Check(){
    var checkBox = document.getElementById("ra_check");
    if (checkBox.checked == true){
    document.getElementById("ra_edu").style.display = "block";
    }
    else{
    document.getElementById("ra_edu").style.display = "none";
    }
}

function Degree_Check(){
    var checkBox = document.getElementById("degree_check");
    if (checkBox.checked == true){
        document.getElementById("edu").style.display="block";
        document.getElementById("add_div").style.display="block";

    }
    else{
    document.getElementById("edu").style.display="none";
    document.getElementById("add_div").style.display="none";
    }
}

var count=1;
function Add(){
    $("#edu").append(
        '<div class="row mb-2" id="degree_name'+count+'">'+
            '<div class="col-md-1"></div>'+
            '<div class="col-md-4 col-auto">'+
                '<label for="" class="col-form-labe"> ဘွဲ့အမည်</label>'+
            '</div>'+
            '<div class="col-md-6 col-auto">'+
                '<input type="text"  class="form-control" name="degree_name'+count+'" placeholder="ဘွဲ့အမည်">'+
            '</div>'+
        '</div>'+
        '<div class="row mb-2" id="degree_year'+count+'">'+
            '<div class="col-md-1"></div>'+
            '<div class="col-md-4 col-auto">'+
                '<label for="" class="col-form-labe"> အောင်မြင်သည့်နှစ်/လ</label>'+
            '</div>'+
            '<div class="col-md-6 col-auto">'+
                '<input type="type"  class="form-control" name="degree_pass_year'+count+'" placeholder="DD-MMM-YYYY">'+
            '</div>'+
        '</div>'+

        '<div class="row mb-4" id="edu'+count+'">'+
            '<div class="col-md-1"></div>'+
            '<div class="col-md-4 col-auto">'+
                '<label for="" class="col-form-labe"> Attached Certificate</label>'+
            '</div>'+
            '<div class="col-md-6">'+
                '<input type="file"  class="form-control"  id="degree_file'+count+'"  name="degree_file'+count+'" required="">'+
            '</div>'+
            '<div class="col-md-1 text-center"  id="edu'+count+'_remove">'+
                '<button class="btn btn-danger" id="myLink" onclick="remove(edu'+count+')">'+
                    '<i class="fa fa-trash "></i>'+
                '</button>'+
            '</div>'+
        '</div>');

        $('input[name="degree_pass_year'+count+'"]').flatpickr({
            enableTime: false,
            dateFormat: "d-M-Y",
            allowInput: true,
    });
    count++;

}
function remove(id){
    id.remove();
    var div_count =  $("#edu div").children().length;
    // alert(div_count);
    if(div_count==4){
    //document.getElementById("edu0_remove").style.display="none";
    }
}

$( "#papp_submit_btn" ).click(function() {
    if(allFilled('#papp_form')){
        $('#pappModal').modal('show');
        send_email();
    }
});

function check_email_papp()
{
    var text = localStorage.getItem('verify_code');
    var obj = JSON.parse(text);
    var verify_code = obj.data.verify_code;
    var code = $("input[name=verify_code]").val();
    if(verify_code != code){
        successMessage("Your code is not correct.Please check your email inbox again!");
        // $('#exampleModal').modal('show');
        // $('#exampleModal1').modal('hide');
        // $('#exampleModal').modal('show');
    }else{
        Papp_Submit();
        $('#pappModal').modal('hide');
    }
}

function checkPaymentPapp(){
    var student =JSON.parse(localStorage.getItem("studentinfo"));
    
    if(student!=null){
        $.ajax({
            url: BACKEND_URL+"/check_payment_papp/"+student.id,
            type: 'GET',
            success: function(data){
               
              var form_data = data;
              form_data.forEach(function(element){
                
                if(element.payment_method == 'PAPP'){
                    $('#papp_modal').prop('disabled', true);
                    loadPAPP();
                }else{
                    $('#papp_modal').prop('disabled', false);
                }
              })
            }
        });
    }
}
// papp
$("#papp_modal").click(function() {
    $('#pappPaymentModal').modal('show');
});

$('#cash_img').click(function() {
    $('#papp_btn').prop('disabled', false);
});

$('#btn_cbpay').prop('disabled', true);
$('#btn_mpu').prop('disabled', true);
$('#papp_btn').prop('disabled', true);

$('#papp_btn').click(function () {
    setTimeout(function () {
        $('#pappPaymentModal').modal('hide');
    }, 1000);
});

function pappPaymentSubmit(){
    var student = JSON.parse(localStorage.getItem('studentinfo'));
    $.ajax({
    url: BACKEND_URL + "/approve_papp/" + student.id,
    type: 'patch',
    success: function (data) {
            successMessage("Your payment is successfully");
            location.href = FRONTEND_URL + "/student_papp_information";
        },
        error:function (message){
        }
    })
}

function Papp_Submit(){
    var student = JSON.parse(localStorage.getItem('studentinfo'));
    var profile_photo       =   $("input[name=profile_photo]")[0].files[0];
    var cpa_check = document.getElementById("cpa_check");
    var ra_check = document.getElementById("ra_check");
    var degree_check = document.getElementById("degree_check");
    var firm_check = document.getElementById("firm_check");
    var used_firm_check = document.getElementById("used_firm_check");
    var staff_firm_check = document.getElementById("staff_firm_check");

    var cpa_file = $('#cpa_file')[0].files[0];
    var ra_file = $('#ra_file')[0].files[0];
    var degree_file = $('#degree_file0')[0].files[0];
    var cpa_ff_file=$('#cpa_ff_file')[0].files[0];
    var file_183=$('#file_183')[0].files[0];
    var not_fulltime_file=$('#not_fulltime_file')[0].files[0];
    var work_in_mm_file=$('#work_in_mm_file')[0].files[0];
    var rule_conf_file=$('#rule_conf_file')[0].files[0];
    var cpd_record_file=$('#cpd_record_file')[0].files[0];
    var tax_free_file=$('#tax_free_file')[0].files[0];
    var data = new FormData();
    data.append('student_id', student.id);
    data.append('profile_photo', profile_photo);
    data.append('cpa', cpa_file);
    data.append('ra', ra_file);
        for (var i = 0; i < count; i++) {
        data.append('foreign_degree[]',$('#degree_file'+i)[0].files[0]);
        }
    data.append('papp_date', $("input[name=papp_date]").val());
    if(firm_check.checked==true){
    data.append('use_firm',0);
    }
    else{
    data.append('use_firm',1);
    }
    if(used_firm_check.checked==true){
    data.append('firm_name', $("input[name=used_firm_name]").val());
    data.append('firm_type', $("input[name=used_firm_type]").val());
    data.append('firm_step', $("input[name=used_firm_level]").val());
    }
    else{
    data.append('firm_name', "");
    data.append('firm_type', "");
    data.append('firm_step', "");
    }
    if(staff_firm_check.checked==true){
        data.append('staff_firm_name', $("input[name=staff_firm_name]").val());
    }
    else{
        data.append('staff_firm_name', "");
    }
    data.append('cpa_ff_recommendation', cpa_ff_file);
    data.append('recommendation_183', file_183);
    data.append('not_fulltime_recommendation', not_fulltime_file);
    data.append('work_in_myanmar_confession', work_in_mm_file);
    data.append('rule_confession', rule_conf_file);
    data.append('cpd_record', cpd_record_file);
    data.append('tax_year', $("input[name=tax_year]").val());
    data.append('tax_free_recommendation', tax_free_file);

    $.ajax({
    url: BACKEND_URL+"/papp",
    type: 'post',
    data:data,
    contentType: false,
    processData: false,
    success: function(result){
        successMessage("You have successfully registerd!");
            // location.reload();
            location.href = FRONTEND_URL+'/';
        },
    error:function (message){
        }
    });
}

function isLoginPAPP(){
    var student = JSON.parse(localStorage.getItem('studentinfo'));
    if(student == null){
        location.href = FRONTEND_URL + '/login';
    }
    else{
        $.ajax({
            url: BACKEND_URL+"/cpaff_by_stuId/"+student.id,
            type: 'get',
            data:"",
            success: function(result){
                var data=result.data;
                if(data!=null){
                    var a=new Date(data.accepted_date);
                    var diff_ms = Date.now() - a.getTime();
                    var age_dt = new Date(diff_ms);
                    var age=Math.abs(age_dt.getUTCFullYear() - 1970);
                    if(age>=1){
                        $("#cpa_age").append(age+" years");
                        document.getElementById('fieldset').disabled=false;
                    }
                    else{
                        $("#cpa_age").append(age+" years");
                        document.getElementById('fieldset').disabled=true;
                        document.getElementById('check_cpa_age').style.display='block';
                    }
                }
                else{
                    $("#cpa_age").append("0 years");
                    document.getElementById('check_cpa_age').style.display='block';
                }
            },
            error:function (message){
            }
        });
    }
}

function Papp_feedback(){
    var student = JSON.parse(localStorage.getItem('studentinfo'));
    if(student!=null){
        $.ajax({
            url: BACKEND_URL+"/papp_by_stuId/"+student.id,
            type: 'GET',
            contentType: false,
            processData: false,
            success: function(cData){
                var data=cData.data;
                if(data!=null){
                    if(data.status==0 || data.renew_status==0)
                    {
                        document.getElementById('pending').style.display='block';
                        document.getElementById('approved').style.display='none';
                        $('.register-btn').css('display','none');
                        $('.payment-btn').css('display','none');
                    }
                    else if(data.status==1 || data.renew_status==1)
                    {
                        document.getElementById('approved').style.display='block';
                        document.getElementById('pending').style.display='none';
                        $('.payment-btn').css('display','block');
                        $('.register-btn').css({'display':'none'});
                        $('.register-btn').removeClass('mt-4');
                        // var accept=new Date(data.renew_accepted_date);
                        // var month=accept.getMonth()+1;
                        // var year=accept.getFullYear();
                        // var y=year+1;
                        // var now=new Date();
                        // $('#regno').val(data.id);
                        // $('#register_date').val(data.renew_accepted_date);
                        // if((now.getFullYear()==y && (now.getMonth()+1)==month) || now.getFullYear() >year){
                        //     $("#message").val("Your registeration is expired! You need to submit new registeration form again.");
                        //     $('.renew_submit').prop('disabled', false);
    
                        // }else if((now.getFullYear()==accept.getFullYear() && month=='10') || (now.getFullYear()==accept.getFullYear() && month=='11') || (now.getFullYear()==accept.getFullYear() && month=='12')){
                        //     $("#message").val("Your registeration will start in "+y+" year!");
                        //     $('.renew_submit').prop('disabled', true);
                        // }else{
                        //     $('#message').val("You are verified!");
                        //     $('.renew_submit').prop('disabled', true);
                        // }
    
                    }
                    else if(data.status==2 || data.renew_status==2)
                    {
                        document.getElementById('rejected').style.display='block';
                    }
                }
                else{
                    document.getElementById('papp_from').style.display='block';
                }
            }
        });
    }
}
function loadCPAFFAge(id){
    $.ajax({
        url: BACKEND_URL+"/cpaff_by_stuId/"+id,
        type: 'get',
        data:"",
        success: function(result){
            var data=result.data;
            var a=new Date(data.accepted_date);
            var diff_ms = Date.now() - a.getTime();
            var age_dt = new Date(diff_ms);
            var age=Math.abs(age_dt.getUTCFullYear() - 1970);
            $("#cpa_age").append(age+" years");
            
        },
        error:function (message){
        }
    });
}
function loadPAPP(){
    var student = JSON.parse(localStorage.getItem('studentinfo'));
    loadCPAFFAge(student.id);
    if(student!=null){
        $.ajax({
            url: BACKEND_URL+"/papp_by_stuId/"+student.id,
            type: 'GET',
            contentType: false,
            processData: false,
            success: function(cData){
                var data=cData.data;
                if(data!=null){
                    if(data.status==1 || data.renew_status==1)
                    {
                        document.getElementById('papp_initial').style.display='none';
                        document.getElementById('approved').style.display='none';
                        document.getElementById('papp_renew_form').style.display='block';
                        var accept=new Date(data.renew_accepted_date);
                        var month=accept.getMonth()+1;
                        var year=accept.getFullYear();
                        var y=year+1;
                        var now=new Date();
                        $('#previewImg').attr("src",BASE_URL+data.profile_photo);
                        $('#hidden_degree_file0').val(data.degree_file0);
                        $('#hidden_cpa_ff_file').val(data.cpa_ff_recommendation);
                        $('#hidden_file_183').val(data.recommendation_183);
                        $('#hidden_not_fulltime_file').val(data.not_fulltime_recommendation);
                        $('#hidden_work_in_mm_file').val(data.work_in_myanmar_confession);
                        $('#hidden_rule_conf_file').val(data.rule_confession);
                        $('#hidden_cpd_record_file').val(data.cpd_record);
                        $('#hidden_tax_free_file').val(data.tax_free_recommendation);
                        $('input[name=papp_date]').val(data.papp_date);
                        $('input[name=tax_year]').val(data.tax_year);
                        $('input[name=degree_pass_year0]').val(data.degree_pass_year0);
                        $('input[name=degree_name0]').val(data.degree_name0);
                        $('input[name=total_hours]').val(data.total_hours);
                        loadFile(data.degree_file0,"view_degree_file0");
                        loadFile(data.cpa_ff_recommendation,"view_cpa_ff_file");
                        loadFile(data.recommendation_183,"view_file_183");
                        loadFile(data.not_fulltime_recommendation,"view_not_fulltime_file");
                        loadFile(data.work_in_myanmar_confession,"view_work_in_mm_file");
                        loadFile(data.rule_confession,"view_rule_conf_file");
                        loadFile(data.cpd_record,"view_cpd_record_file");
                        loadFile(data.tax_free_recommendation,"view_tax_free_file");
                        if(data.use_firm==0){
                            $('#firm_check').prop("checked", true);
                        }
                        if(data.firm_name!=null || data.firm_type!=null || data.firm_step!=null){
                            $('#used_firm_check').prop("checked", true);
                            $('input[name=used_firm_name]').val(data.firm_name);
                            $('input[name=used_firm_type]').val(data.firm_type);
                            $('input[name=used_firm_level]').val(data.firm_step);
                        }
                        if(data.staff_firm_name!=null ){
                            $('#staff_firm_check').prop("checked", true);
                            $('input[name=staff_firm_name]').val(data.staff_firm_name);
                            
                        }
                        
                        // if(data.cpa!=""){
                        //     $('#cpa_check').prop("checked", true);
                        //     $('#cpa_edu').css('display','block');
                        //     $('.view_cpa_file').css('display','block');
                        //     loadFile(data.cpa,"view_cpa_file");
                        // }
                        // if(data.ra!=""){
                        //     $('#ra_check').prop("checked", true);
                        //     $('#ra_edu').css('display','block');
                        //     $('.view_ra_file').css('display','block');
                        //     loadFile(data.ra,"view_ra_file");
                        // }
                        
                        $('#regno').val(data.id);
                        $('#register_date').val(data.renew_accepted_date);
                        if((now.getFullYear()==y && (now.getMonth()+1)==month) || now.getFullYear() >year){
                            $("#message").val("Your registeration is expired! You need to submit new registeration form again.");
                            $('.renew_submit').prop('disabled', false);
    
                        }else if((now.getFullYear()==accept.getFullYear() && month=='10') || (now.getFullYear()==accept.getFullYear() && month=='11') || (now.getFullYear()==accept.getFullYear() && month=='12')){
                            $("#message").val("Your registeration will start in "+y+" year!");
                            $('.renew_submit').prop('disabled', true);
                        }else{
                            $('#message').val("You are verified!");
                            $('.renew_submit').prop('disabled', true);
                        }
                        $('#previewImg').attr("src",BASE_URL+data.profile_photo);
    
                    }else{
                        document.getElementById('papp_initial').style.display='block';
                        document.getElementById('papp_renew_form').style.display='none';
                    }
    
                }
                else{
                    document.getElementById('papp_initial').style.display='block';
                    document.getElementById('papp_renew_form').style.display='none';
                }
            }
        });
    }
}
function RenewPAPP(){
    var student = JSON.parse(localStorage.getItem('studentinfo'));
    show_loader()
    $.ajax({
        url: BACKEND_URL+"/papp_by_stuId/"+student.id,
        type: 'get',
        data:"",
        success: function(result){
            
            if(result.data!=null){
                var send_data = new FormData($("#papp_renew_form_submit")[0]);
                send_data.append('cpa_ff_file', $('#hidden_cpa_ff_file').val());
                send_data.append('file_183', $('#hidden_file_183').val());
                send_data.append('not_fulltime_file', $('#hidden_not_fulltime_file').val());
                send_data.append('work_in_mm_file', $('#hidden_work_in_mm_file').val());
                send_data.append('rule_conf_file', $('#hidden_rule_conf_file').val());
                send_data.append('cpd_record_file', $('#hidden_cpd_record_file').val());
                send_data.append('tax_free_file', $('#hidden_tax_free_file').val());
                
                    var firm_check = document.getElementById("firm_check");
                    var used_firm_check = document.getElementById("used_firm_check");
                    var staff_firm_check = document.getElementById("staff_firm_check");
                    if(firm_check.checked==true){
                        send_data.append('use_firm',1);
                    }
                    else{
                        send_data.append('use_firm',0);
                    }
                    if(used_firm_check.checked==true){
                        send_data.append('firm_name', $("input[name=used_firm_name]").val());
                        send_data.append('firm_type', $("input[name=used_firm_type]").val());
                        send_data.append('firm_step', $("input[name=used_firm_level]").val());
                    }
                    else{
                        send_data.append('firm_name', "");
                        send_data.append('firm_type', "");
                        send_data.append('firm_step', "");
                    }
                    if(staff_firm_check.checked==true){
                        send_data.append('staff_firm_name', $("input[name=staff_firm_name]").val());
                    }
                    else{
                        send_data.append('staff_firm_name', "");
                    }
                  send_data.append('_method', 'PUT');
                $.ajax({
                    url: BACKEND_URL+"/papp/"+result.data.id,
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
        },
        error:function (message){
        }
    });
}
