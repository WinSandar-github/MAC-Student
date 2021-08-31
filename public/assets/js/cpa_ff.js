function ConfirmSubmit(){
    var radio = document.getElementById("submit_confirm");
    if (radio.checked == true){
        document.getElementById("submit_btn").disabled= false;
    }
    else{
    document.getElementById("submit_btn").disabled = true;
    }
}

function CheckPartTwo(){
    var radio = document.getElementById("cpa_part_2_check");
    if(radio.checked == true){
        $('.pass_batch_two').css('display','block');  
        $('.qt_pass').css('display','none');      
    }
    else{
        $('.pass_batch_two').css('display','none');  
        $('.qt_pass').css('display','none');  
    }
}

function CheckQTPass(){
    var radio = document.getElementById("qt_pass_check");
    if(radio.checked == true){
        $('.pass_batch_two').css('display','none');  
        $('.qt_pass').css('display','block');        
    }
    else{
        $('.pass_batch_two').css('display','none');  
        $('.qt_pass').css('display','none');  
    }
}

function getCPAEducation(){
    var checkedValue = $("input[name='education']:checked").val();
    if(checkedValue==1){
        $('#cpa').css('display','block');
        $('#ra').css('display','none');
        $('#edu').css('display','none');
    }
    else if(checkedValue==2){
        $('#cpa').css('display','none');
        $('#ra').css('display','block');
        $('#edu').css('display','none');
    }
    else if(checkedValue==3){
        $('#cpa').css('display','none');
        $('#ra').css('display','none');
        $('#edu').css('display','block');
    }
    else{
        $('#cpa').css('display','none');
        $('#ra').css('display','none');
        $('#edu').css('display','none');
    }
}

function addInputFile(divname,diventry){
    var controlForm = $('.'+divname+':first'),
            currentEntry = $('.btn-add').parents('.'+diventry+':first'),
            newEntry = $(currentEntry.clone()).appendTo(controlForm);
        newEntry.find('input').val('');
        controlForm.find('.'+diventry+':not(:last) .btn-add')
            .removeClass('btn-add').addClass('btn-remove')
            .removeClass('btn-primary').addClass('btn-danger')
            .attr("onclick","delInputFile('"+diventry+"')")
            .html('<span class="fa fa-trash"></span>');

}

var count=1;
function AddCPAFFDegree(){
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

function delInputFile(diventry){
    $('.btn-remove').parents('.'+diventry+':first').remove();
}

// var  studentID;
// function SearchStudentID(){
//     var nrc_state_region    =   $("#nrc_state_region").val();
//     var nrc_township        =   $("#nrc_township").val();
//     var nrc_citizen         =   $("#nrc_citizen").val();
//     var nrc_number          =   $("input[name=nrc_number]").val();
//     // var nrc                 =   nrc_state_region+nrc_township+nrc_citizen+nrc_number;
//     var nrc = new FormData();
//     nrc.append('nrc_state_region', nrc_state_region);
//     nrc.append('nrc_township', nrc_township);
//     nrc.append('nrc_citizen', nrc_citizen);
//     nrc.append('nrc_number', nrc_number);

//     console.log('nrc',nrc);

//     $.ajax({
//         url:BACKEND_URL+"/student_info_by_nrc",
//         type: 'post',
//         data: nrc,
//         contentType: false,
//         processData: false,
//         success: function(result){
//             // console.log('result',result.data)
//                 if(result.data!=null){
//                     studentID=result.data.id;
//                     document.getElementById("fieldset").disabled = false;
//                 }
//                 else{
//                     document.getElementById("fieldset").disabled = true;
//                 }
//             }
//         });


// }

function createCPAFFRegister(){
    var student = JSON.parse(localStorage.getItem('studentinfo'));
    var cpa             =   $("input[name=cpa]")[0].files[0];
    var ra              =   $("input[name=ra]")[0].files[0];

    // var foreign_degree  =   $("input[name=foreign_degree[]]")[0].files[0];
    var foreign_degree  =   $('input[name="foreign_degree[]"]');

    var cpa_certificate =   $("input[name=cpa_certificate]")[0].files[0];
    var mpa_mem_card    =   $("input[name=mpa_mem_card]")[0].files[0];
    var nrc_front       =   $("input[name=nrc_front]")[0].files[0];
    var nrc_back        =   $("input[name=nrc_back]")[0].files[0];
    var cpd_record      =   $("input[name=cpd_record]")[0].files[0];
    var passport_image  =   $("input[name=passport_image]")[0].files[0];

    var cpa_part_2      = document.getElementById("cpa_part_2_check");
    var qt_pass         = document.getElementById("qt_pass_check");

    var send_data = new FormData();
    send_data.append('student_info_id', student.id);
    send_data.append('cpa', cpa);
    send_data.append('ra', ra);
    // send_data.append('foreign_degree', foreign_degree);

    // for (var i = 0; i < count; i++) {
    //     send_data.append('foreign_degree[]',$('input[name=foreign_degree]'+i)[0].files[0]);
    // }

    foreign_degree.map(function(){
        for (var i = 0; i < $(this).get(0).files.length; ++i) {
          send_data.append('foreign_degree[]',$(this).get(0).files[i]);
        }

    });

    if(cpa_part_2.checked==true){
        send_data.append('cpa_part_2',1);
        send_data.append('qt_pass',0);
    }
    else if(qt_pass.checked==true){
        send_data.append('cpa_part_2',0);
        send_data.append('qt_pass',1);
    }else{
        send_data.append('cpa_part_2',0);
        send_data.append('qt_pass',0);
    }

    send_data.append('cpa_certificate', cpa_certificate);
    send_data.append('mpa_mem_card', mpa_mem_card);
    send_data.append('nrc_front', nrc_front);
    send_data.append('nrc_back', nrc_back);
    send_data.append('mpa_mem_card', mpa_mem_card);
    send_data.append('cpd_record', cpd_record);
    send_data.append('passport_image', passport_image);

    $.ajax({
        url: BACKEND_URL+"/cpa_ff",
        type: 'post',
        data:send_data,
        contentType: false,
        processData: false,
        success: function(result){
            successMessage("You have successfully registerd!");
            location.reload();
        },
        error:function (message){
            console.log(message);
        }
    });

}


function selectEntry(){
    var radioValue = $("input[name='selected_name']:checked").val();

    if(radioValue==1){
        $('#direct').css('display','block');
        $('#entry_pass').css('display','none');
        $("#direct").find('input').prop('required',true);
     }else
     {
        $('#entry_pass').css('display','block');
        $('#direct').css('display','none');
        $("#direct").find('input').prop('required',false);
     }
}

function isLoginCPAFF(){
    var student = JSON.parse(localStorage.getItem('studentinfo'));
    if(student == null){
        location.href = FRONTEND_URL + '/login';
    }
    else{
        $.ajax({
            url: BACKEND_URL+"/get_exam_student/"+student.id,
            type: 'get',
            data:"",
            success: function(result){
                var exam=result.data;
                console.log(exam,"exam");
                if(exam!=null) {
                    exam.every(function(element){
                        if(element.course.code=="cpa_2" && element.grade=="1"){
                            var a=new Date(student.date_of_birth);
                            var diff_ms = Date.now() - a.getTime();
                            var age_dt = new Date(diff_ms);
                            var age=Math.abs(age_dt.getUTCFullYear() - 1970);
                            if(age>=21){
                                $("#age").append(age+" years");
                                document.getElementById('fieldset').disabled=false;
                                document.getElementById('pass_cpa_two').style.display='none';
                            }
                            else{
                                $("#age").append(age+" years");
                                document.getElementById('fieldset').disabled=true;
                                document.getElementById('check_age').style.display='block';
                                document.getElementById('pass_cpa_two').style.display='none';
                            }
                            return false;
                        }
                        else{
                            document.getElementById('fieldset').disabled=true;
                            document.getElementById('pass_cpa_two').style.display='block';
                            return true;
                        }


                    });
                }
            },
            error:function (message){
                console.log(message);
                }
            });

    }
}

function form_feedback(){
    var student = JSON.parse(localStorage.getItem('studentinfo'));
    $.ajax({
        url: BACKEND_URL+"/cpaff_by_stuId/"+student.id,
        type: 'GET',
        contentType: false,
        processData: false,
        success: function(cData){
            var data=cData.data;
            if(data!=null){
                if(data.status==0 || data.renew_status==0)
                {
                    document.getElementById('pending').style.display='block';
                }
                else if(data.status==1 || data.renew_status==1)
                {
                    var accept=new Date(data.renew_accepted_date);
                    var month=accept.getMonth();
                    var year=accept.getFullYear();
                    var y=year+1;
                    console.log(year);
                    console.log(month);
                    if(month>8){
                        document.getElementById('expiry_card').style.display='block';
                        $("#expire").append("Your information will be expired at "+"<b> 31 December "+y+"</b>.");
                        var now=new Date(Date.now());
                        if(now.getFullYear()==y && now.getMonth()==11){
                            document.getElementById('approved').style.display='none';
                            document.getElementById('cpaff_renew_form').style.display='block';
                        }
                        else{
                            document.getElementById('approved').style.display='block';
                        }
                    }
                    else{
                        document.getElementById('expiry_card').style.display='block';
                        $("#expire").append("Your information will be expired at "+"<b> 31 December "+year+"</b>.");
                        var now=new Date(Date.now());
                        // if(now.getFullYear()==year){
                            document.getElementById('approved').style.display='none';
                            document.getElementById('cpaff_renew_form').style.display='block';
                        // }
                        // else{
                        //     document.getElementById('approved').style.display='block';
                        // }
                    }
                }
                else if(data.status==2 || data.renew_status==2)
                {
                    document.getElementById('rejected').style.display='block';
                }
            }
            else{
                document.getElementById('cpaff_from').style.display='block';
            }
        }
    });
}

function RenewCPAFF(){
    var student = JSON.parse(localStorage.getItem('studentinfo'));

    $.ajax({
        url: BACKEND_URL+"/cpaff_by_stuId/"+student.id,
        type: 'get',
        data:"",
        success: function(result){
            // successMessage("Insert Successfully");
            // location.reload();
            if(result.data!=null){
                var renew_file =   $("input[name=renew_file]")[0].files[0];
                var renew_micpa    =   $("input[name=renew_micpa]")[0].files[0];
                var renew_cpd       =   $("input[name=renew_cpd]")[0].files[0];
                var renew_cpaff_reg        =   $("input[name=renew_cpaff_reg]")[0].files[0];
                var data = new FormData();
                data.append('renew_file', renew_file);
                data.append('renew_micpa', renew_micpa);
                data.append('renew_cpd', renew_cpd);
                data.append('renew_cpaff_reg', renew_cpaff_reg);
                data.append('_method', 'PUT');
                $.ajax({
                    url: BACKEND_URL+"/cpa_ff/"+result.data.id,
                    type: 'post',
                    data:data,
                    contentType: false,
                    processData: false,
                    success: function(result){
                        successMessage("Insert Successfully");
                        location.reload();
                        document.getElementById('approved').style.display='none';
                        document.getElementById('rejected').style.display='none';
                        document.getElementById('pending').style.display='none';
                        document.getElementById('cpaff_form').style.display='none';
                        document.getElementById('cpaff_renew_form').style.display='none';
                        document.getElementById('expiry_card').style.display='none';
                    },
                    error:function (message){
                        console.log(message);
                    }
                });
            }
        },
        error:function (message){
            console.log(message);
        }
    });
}
