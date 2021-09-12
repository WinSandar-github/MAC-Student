var FRONTEND_URL="http://localhost:8081";
var BASE_URL = "http://localhost:8000";
var BACKEND_URL="http://localhost:8000/api";

//  var BACKEND_URL="https://demo.aggademo.me/MAC/public/index.php/api";
// var FRONTEND_URL = "https://demo.aggademo.me/MAC_Student/public/index.php";
// var BASE_URL = "https://demo.aggademo.me/MAC/public/";

var counter = 0;

var toastOptions = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": false,
    "progressBar": false,
    "positionClass": "toast-top-center",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "2500",
    "timeOut": "2500",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
}

function successMessage(message) {
    toastr.options = toastOptions;
    toastr.success(message);
}

$('document').ready(function(){


    //getCourseType for Nav bar
    $.ajax({
        url:BACKEND_URL+'/get_course_type',
        type:'GET',
        success:function(response){
            $.each(response.data,function(i,v){
                var course = `<li><a href='${FRONTEND_URL}/student_course/${v.id}'>${v.course_name}</a></li>`;

                $('.course_type').append(course);

            })
        }
    })

})

function formatDate(date){
    var income_date=date.split('-');
    var date=income_date[2]+'-'+income_date[1]+'-'+income_date[0];
    return date;
}

function ConfirmSubmit(){
    
    var radio = document.getElementById("submit_confirm");
    if (radio.checked == true){
        document.getElementById("submit_btn").disabled= false;
    }
    else{
    document.getElementById("submit_btn").disabled = true;
    }
}



function addRowEducation(tbody){
    $(".degree").hide();
    var newRow = $("<tr>");
    var cols = "";
    var row=$('.'+tbody+' tr').length;
    cols += '<td>'+ (row)+'</td>';
    cols += '<td><input type="text" name="degrees[]" class="form-control" placeholder="ပညာအရည်အချင်း" required/></td>';
    cols += '<td class="text-center"><button type="button" class="delete btn btn-sm btn-danger m-2" onclick=delRowEducation("'+tbody+'")><li class="fa fa-times"></li></button></td>';
    newRow.append(cols);
    $("table."+tbody).append(newRow);
    counter++;
}
function delRowEducation(tbody){
    $("table."+tbody).on("click", ".delete", function (event) {
        $(this).closest("tr").remove();
        counter -= 1
    });
}

function addRowSubject(tbody){

    var newRow = $("<tr>");
    var cols = "";
    var row=$('.'+tbody+' tr').length;
    cols += '<td>'+ (row)+'</td>';
    cols += '<td><input type="text" class="form-control" name="certificates[]" placeholder="လက်မှတ်ရ ပြည်သူ့စာရင်းကိုင်သင်တန်း" required/></td>';
    cols += '<td class="text-center"><button type="button" class="delete btn btn-sm btn-danger m-2" onclick=delRowSubject("'+tbody+'")><li class="fa fa-times"></li></button></td>';
    newRow.append(cols);
    $("table."+tbody).append(newRow);
    counter++;
    var certificate = $('.tbl_certificate_body tr').length;
    var diploma = $('.tbl_diploma_body tr').length;
    if(certificate && diploma){
        $(".certificate").hide();
    }
}
function addRowDipSubject(tbody){

    var newRow = $("<tr>");
    var cols = "";
    var row=$('.'+tbody+' tr').length;
    cols += '<td>'+ (row)+'</td>';
    cols += '<td><input type="text" class="form-control" name="diplomas[]" placeholder="လက်မှတ်ရ ပြည်သူ့စာရင်းကိုင်သင်တန်း" required/></td>';
    cols += '<td class="text-center"><button type="button" class="delete btn btn-sm btn-danger m-2" onclick=delRowSubject("'+tbody+'")><li class="fa fa-times"></li></button></td>';
    newRow.append(cols);
    $("table."+tbody).append(newRow);
    counter++;
    var certificate = $('.tbl_certificate_body tr').length;
    var diploma = $('.tbl_diploma_body tr').length;
    if(certificate && diploma){
        $(".certificate").hide();
    }
}

function delRowSubject(tbody){
    $("table."+tbody).on("click", ".delete", function (event) {
        $(this).closest("tr").remove();
        counter -= 1
    });
}

function addInputTele(tbody){
    var newRow = $("<tr>");
    var cols = "";

    cols += '<td></td>';
    cols += '<td></td>';
    cols += '<td></td>';
    cols += '<td></td>';
    cols += '<td></td>';
    cols += '<td><input type="text" name="branch_telephone[]" class="form-control" /></td>';
    cols += '<td><button class="delete btn btn-danger btn-sm" type="button" onclick=delInputTele("'+tbody+'")><i class="fa fa-trash"></i></button></td>';
    cols += '<td></td>';
    cols += '<td></td>';
    cols += '<td></td>';
    newRow.append(cols);
    $("table."+tbody).append(newRow);
    counter++;
}

function delInputTele(tbody){
    $("table."+tbody).on("click", ".delete", function (event) {
        $(this).closest("tr").remove();
        counter -= 1
    });
}

function addRowBranch(tbody){
    var newRow = $("<tr>");
    var cols = "";

    cols += '<td><input type="text" name="bo_branch_name[]" class="form-control" autocomplete="off" required/></td>';
    cols += '<td><input type="text" name="bo_township[]" class="form-control" autocomplete="off" required/></td>';
    cols += '<td><input type="text" name="bo_post_code[]" class="form-control" autocomplete="off" required/></td>';
    cols += '<td><input type="text" name="bo_city[]" class="form-control" autocomplete="off" required/></td>';
    cols += '<td><input type="text" name="bo_state_region[]" class="form-control"  autocomplete="off" required/></td>';
    cols += '<td><input type="text" name="bo_phone[]" class="form-control" autocomplete="off" required/></td>';
    //cols += '<td><button class="btn btn-primary btn-sm" type="button" onclick=addInputTele("'+tbody+'")><i class="fa fa-plus"></i></button></td>';
    cols += '<td><input type="text" name="bo_email[]" class="form-control" autocomplete="off" required/></td>';
    cols += '<td><input type="text" name="bo_website[]" class="form-control" autocomplete="off" required /></td>';
    cols += '<td><button class="delete btn btn-danger btn-sm" type="button" onclick=delRowBranch("'+tbody+'")><i class="fa fa-trash"></i></button></td>';
    newRow.append(cols);
    $("table."+tbody).append(newRow);
    counter++;
}

function addRowPartner(tbody){

    var newRow = $("<tr>");
    var cols = "";
    var row=$('.'+tbody+' tr').length;
    cols += '<td>'+ (row)+'</td>';
    cols += '<td><input type="text" name="foa_name[]" class="form-control" autocomplete="off" required/></td>';
    cols += '<td><input type="text" name="foa_pub_pri_reg_no[]"  id="foa_pub_pri_reg_no'+row+'" onchange="checkPAPPExist(this.value,this.id)" class="form-control"  class="form-control" autocomplete="off" required /></td>';
    cols += '<td><input type="radio" name="foa_authority_to_sign'+row+'" id="report_yes" value="1" required> Yes</td>';
    // cols += '<td>';
    // cols += '<div class="form-check pt-2">';
    // cols += '<input type="radio" class="form-check-input" id="report_yes" value="1" name="foa_authority_to_sign" required>';
    // cols += '<label class="form-check-label" for="">Yes</label>';
    // cols += '</div>';
    // cols += '</td>'
    cols += '<td><input type="radio" name="foa_authority_to_sign'+row+'" id="report_yes" value="2" required> No</td>';
    cols += '<td><button class="delete btn btn-danger btn-sm" type="button" onclick=delRowPartner("'+tbody+'")><i class="fa fa-trash"></i></button></td>';
    newRow.append(cols);
    $("table."+tbody).append(newRow);
    counter++;
}

function delRowPartner(tbody){
    $("table."+tbody).on("click", ".delete", function (event) {
      var deleted_row = $(this).closest("tr");
      var siblings = $(deleted_row).siblings();
      $(deleted_row).remove();
      counter -= 1
      // order numer to be serial
      $(siblings).each(function(index,row){
        $(row).find("td:first-child").text(index + 1);
      });
    });
}

function addRowDirector(tbody){
    var newRow = $("<tr>");
    var cols = "";
    var row=$('.'+tbody+' tr').length;
    cols += '<td>'+ (row)+'</td>';
    cols += '<td><input type="text" name="do_name[]" class="form-control" autocomplete="off" required /></td>';
    cols += '<td><input type="text" name="do_position[]" class="form-control" autocomplete="off" required /></td>';
    cols += '<td><input type="text" name="do_cpa_reg_no[]" class="form-control" autocomplete="off" required /> </td>';
    cols += '<td><input type="text" name="do_pub_pri_reg_no[]" class="form-control" autocomplete="off" required /></td>';
    cols += '<td><button class="delete btn btn-danger btn-sm" type="button" onclick=delRowDirector("'+tbody+'")><i class="fa fa-trash"></i></button></td>';
    newRow.append(cols);
    $("table."+tbody).append(newRow);
    counter++;
}
function delRowDirector(tbody){
    $("table."+tbody).on("click", ".delete", function (event) {
      var deleted_row = $(this).closest("tr");
      var siblings = $(deleted_row).siblings();
      $(deleted_row).remove();
      counter -= 1
      // order numer to be serial
      $(siblings).each(function(index,row){
        $(row).find("td:first-child").text(index + 1);
      });
    });
}

function addRowPartnerByNonAudit(tbody){
    var newRow = $("<tr>");
    var cols = "";
    var row=$('.'+tbody+' tr').length;
    cols += '<td>'+ (row)+'</td>';
    cols += '<td><input type="text" value="" name="fona_name[]" class="form-control" autocomplete="off" required></td>';
    cols += '<td><input type="text" value="" name="fona_pass_csc_inco[]" class="form-control" autocomplete="off" required></td>';
    cols += '<td><button class="delete btn btn-danger btn-sm" type="button" onclick=delRowPartnerByNonAudit("'+tbody+'")><i class="fa fa-trash"></i></button></td>';
    newRow.append(cols);
    $("table."+tbody).append(newRow);
    counter++;
}

function delRowBranch(tbody){
    $("table."+tbody).on("click", ".delete", function (event) {
        $(this).closest("tr").remove();
        counter -= 1
    });
}

function delRowPartnerByNonAudit(tbody){
    $("table."+tbody).on("click", ".delete", function (event) {
      var deleted_row = $(this).closest("tr");
      var siblings = $(deleted_row).siblings();
      $(deleted_row).remove();
      counter -= 1
      // order numer to be serial
      $(siblings).each(function(index,row){
        $(row).find("td:first-child").text(index + 1);
      });

    });
}

function addRowDirectorByNonAudit(tbody){
    var newRow = $("<tr>");
    var cols = "";
    var row=$('.'+tbody+' tr').length;
    cols += '<td>'+ (row)+'</td>';
    cols += '<td><input type="text" value="" name="dona_name[]" class="form-control" autocomplete="off" required></td>';
    cols += '<td><input type="text" value="" name="dona_position[]" class="form-control" autocomplete="off" required></td>';
    cols += '<td><input type="text" value="" name="dona_passport[]" class="form-control" autocomplete="off" required></td>';
    // cols += '<td><input type="text" value="" name="dona_csc_no[]" class="form-control" autocomplete="off" required></td>';
    cols += '<td><button class="delete btn btn-danger btn-sm" type="button" onclick=delRowDirectorByNonAudit("'+tbody+'")><i class="fa fa-trash"></i></button></td>';
    newRow.append(cols);
    $("table."+tbody).append(newRow);
    counter++;
}

function delRowDirectorByNonAudit(tbody){
    $("table."+tbody).on("click", ".delete", function (event) {
      var deleted_row = $(this).closest("tr");
      var siblings = $(deleted_row).siblings();
      $(deleted_row).remove();
      counter -= 1
      // order numer to be serial
      $(siblings).each(function(index,row){
        $(row).find("td:first-child").text(index + 1);
      });
    });
}

function addRowDirectorCPA(tbody){
    var newRow = $("<tr>");
    var cols = "";
    var row=$('.'+tbody+' tr').length;
    cols += '<td>'+ (row)+'</td>';
    cols += '<td><input type="text" value="" name="mf_name[]" class="form-control" autocomplete="off"></td>';
    cols += '<td><input type="text" name="mf_position[]" class="form-control" autocomplete="off"/></td>';
    cols += '<td><input type="text" name="mf_cpa_passed_reg_no[]" class="form-control" autocomplete="off"/> </td>';
    cols += '<td><input type="text" name="mf_cpa_full_reg_no[]" class="form-control" autocomplete="off"/> </td>';
    cols += '<td><input type="text" name="mf_pub_pra_reg_no[]" class="form-control" autocomplete="off"/> </td>';
    cols += '<td><button class="delete btn btn-danger btn-sm" type="button" onclick=delRowDirectorCPA("'+tbody+'")><i class="fa fa-trash"></i></button></td>';
    newRow.append(cols);
    $("table."+tbody).append(newRow);
    counter++;
}

// function delRowDirector(tbody){
//     $("table."+tbody).on("click", ".delete", function (event) {
//         $(this).closest("tr").remove();
//         counter -= 1
//     });
// }

function delRowDirectorCPA(tbody){
    $("table."+tbody).on("click", ".delete", function (event) {
      var deleted_row = $(this).closest("tr");
      var siblings = $(deleted_row).siblings();
      $(deleted_row).remove();
      counter -= 1
      // order numer to be serial
      $(siblings).each(function(index,row){
        $(row).find("td:first-child").text(index + 1);
      });
    });
}

function getOrganization(){
    var radioValue = $("input[name='org_stru_id']:checked").val();
    if(radioValue==1){
        $('#sole-proprietorship').css('display','block');
        $('#partnership').css('display','none');
        $('#company').css('display','none');
        $('#org_validate').css('display','none');
        $('#audit_org_validate').css('display','none');
        /// non-audit file upload fields
        $('#sole_proprietorship_box').find("input").prop('required',true);
        $('#partnership_box').find("input").prop('required',false);
        $('#company_box').find("input").prop('required',false);
        /// audit file upload fields
        $('#audit_sole_proprietorship').find("input").prop('required',true);
        $('#audit_partnership').find("input").prop('required',false);
        $('#audit_company').find("input").prop('required',false);

    }
    else if(radioValue==2){
        $('#sole-proprietorship').css('display','none');
        $('#partnership').css('display','block');
        $('#company').css('display','none');
        $('#org_validate').css('display','none');
        $('#audit_org_validate').css('display','none');
        /// non-audit file upload fields
        $('#audit_sole_proprietorship').find("input").prop('required',false);
        $('#audit_partnership').find("input").prop('required',true);
        $('#audit_company').find("input").prop('required',false);

    }
    else if(radioValue==3){
        $('#sole-proprietorship').css('display','none');
        $('#partnership').css('display','none');
        $('#company').css('display','block');
        $('#org_validate').css('display','none');
        $('#audit_org_validate').css('display','none');
        /// non-audit file upload fields
        $('#audit_sole_proprietorship').find("input").prop('required',false);
        $('#audit_partnership').find("input").prop('required',false);
        $('#audit_company').find("input").prop('required',true);
    }
    else{
        $('#sole-proprietorship').css('display','none');
        $('#partnership').css('display','none');
        $('#company').css('display','none');
        $('#org_validate').css('display','none');
        $('#audit_org_validate').css('display','none');
        //// non-audit file upload fields
        $('#sole_proprietorship_box').find("input").prop('required',false);
        $('#partnership_box').find("input").prop('required',false);
        $('#company_box').find("input").prop('required',false);

    }
}

function destroyDatatable(table, tableBody) {
    if ($.fn.DataTable.isDataTable(table)) {
        $(table).DataTable().destroy();
    }
    $(tableBody).empty();
}

$('table tbody').on('click', 'tr', function () {
    if ($(this).hasClass('selected')) {
        $(this).removeClass('selected');
    }
    else {
        $('table tbody tr.selected').removeClass('selected');
        $(this).addClass('selected');
    }
});

function resetForm(form){
    var form = $(form)[0];
    $(form).removeClass('was-validated');
    form.reset();
}
// form validation
(function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      console.log("forms >>>",forms);
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          console.log("event >>",event);
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          console.log("classlist >>>",form.classList);
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();


async function get_course_by_code(course_code){
    let response = await fetch(BACKEND_URL+"/course_by_course_code/"+course_code)
    let data = await response.json()
    return data;
}

function createDataTable(table) {

    $(table).DataTable({
        'destroy': true,
        'paging': true,
        'lengthChange': false,
        "pageLength": 5,
        'searching': false,
        'ordering': true,
        'info': false,
        'autoWidth': false,
        "scrollX": true,
        'select': false,
        "order": [[0, "desc"]],

    });
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
           .columns.adjust();
     });
}
function createDataTableWithAsc(table) {

    $(table).DataTable({
        'destroy': true,
        'paging': true,
        'lengthChange': false,
        "pageLength": 5,
        'searching': false,
        'ordering': true,
        'info': false,
        'autoWidth': false,
        "scrollX": true,
        'select': false,
        "order": [[0, "asc"]],

    });
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
           .columns.adjust();
     });
}
function destroyDatatable(table, tableBody) {
    if ($.fn.DataTable.isDataTable(table)) {
        $(table).DataTable().destroy();
    }
    $(tableBody).empty();
}


function dataMessage(message, table, tableBody) {
    var dataMsg = message.responseText;
    var noOfColumn = countColumn(table);
    var tr = "<tr>";
    tr += "<td class='text-center' colspan='" + noOfColumn + "'>"+dataMsg+"</td>";
    tr += "</tr>";
    $(tableBody).append(tr);
    if(noOfColumn>=11){
      $(table).addClass('table-responsive');
    }

}
function getIndexNumber(table){
    $(table).each(function(){
        $( this ).find( "td" ).first().html( $(this).index() + 1 );
      });
}
function numberRows() {
    $('table tbody tr').each(function (idx) {
        $(this).children(":eq(0)").html(idx + 1);
    });
}
