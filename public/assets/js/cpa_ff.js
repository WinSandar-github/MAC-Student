function getCPAEducation(){
    var checkedValue = $("input[name='education']:checked").val();
    if(checkedValue==1){
        $('#cpa').css('display','block');
        $('#ra').css('display','none');
        $('#accredited_foreign_degree').css('display','none');
    }
    else if(checkedValue==2){
        $('#cpa').css('display','none');
        $('#ra').css('display','block');
        $('#accredited_foreign_degree').css('display','none');         
    }
    else if(checkedValue==3){
        $('#cpa').css('display','none');
        $('#ra').css('display','none');
        $('#accredited_foreign_degree').css('display','block');
    }
    else{
        $('#cpa').css('display','none');
        $('#ra').css('display','none');
        $('#foreign_degree').css('display','none');
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
            successMessage("Insert Successfully");
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
     }else
     {
        $('#entry_pass').css('display','block');
        $('#direct').css('display','none');
     }
}

function isLogin(){
    var student = JSON.parse(localStorage.getItem('studentinfo'));
    if(student == null){
        location.href = '/login';
    }
    else{
        var a=new Date(student.date_of_birth);
        var diff_ms = Date.now() - a.getTime();
        var age_dt = new Date(diff_ms); 
        var age=Math.abs(age_dt.getUTCFullYear() - 1970);
        if(age>=21){
            $("#age").append(age+" years");
            document.getElementById('fieldset').disabled=false;
        }
        else{
            $("#age").append(age+" years");
            document.getElementById('fieldset').disabled=true;
            document.getElementById('check_age').style.display='block';
        }
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
            console.log(cData.data);
            if(cData.data!=null){
                if(cData.data.status==0)
                {
                    document.getElementById('pending').style.display='block';
                }
                else if(cData.data.status==1)
                {
                    document.getElementById('approved').style.display='block';
                }
                else if(cData.data.status==2)
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
