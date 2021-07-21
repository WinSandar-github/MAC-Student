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
    $("#edu").append('<div class="row" id="edu'+count+'">'+
    '<div class="col-md-9"><input type="file"  class="form-control"  id="degree_file'+count+'"  name="degree_file'+count+'" required=""></div>'+
    '<div class="col-md-3 text-center" style="padding-top:10px;padding-bottom:10px;" id="edu'+count+'_remove"><a id="myLink" onclick="remove(edu'+count+')">'+
    '<span class="fa fa-trash danger text-danger"></span></a></div></div>');
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
var studentID;
async function SearchStudentID(){
    var nrc_state_region = $("#nrc_state_region").val();
    var nrc_township = $("#nrc_township").val();
    var nrc_citizen = $("#nrc_citizen").val();
    var nrc_number=$("input[name=nrc_number]").val();
    
    var nrc = new FormData();
    nrc.append('nrc_state_region', nrc_state_region);
    nrc.append('nrc_township', nrc_township);
    nrc.append('nrc_citizen', nrc_citizen);
    nrc.append('nrc_number', nrc_number);
    // var nrc=nrc_state_region+nrc_township+nrc_citizen+nrc_number;
    // console.log(nrc);
    //var nrc="1kamatanaing123456";
    await $.ajax({
    url:BACKEND_URL+"/student_info_by_nrc",
    type: 'post',
    data: nrc,
    contentType: false,
    processData: false,
    success: function(result){
        console.log('result',result);
            if(result.data!=null){
                studentID=result.data.id;
                document.getElementById("fieldset").disabled = false;
            }
            else{
                document.getElementById("fieldset").disabled = true;
            }
        }
    });
}

function Papp_Submit(){
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
    data.append('student_id', studentID);
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
        successMessage("Insert Successfully");
            location.reload();
        },
    error:function (message){
        console.log(message);
        }
    });
}