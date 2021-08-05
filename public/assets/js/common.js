// var BACKEND_URL="http://localhost:8000/api";
var BACKEND_URL="https://demo.aggademo.me/MAC/public/index.php/api";
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
                var course = `<li><a href='/student_course/${v.id}'>${v.name}</a></li>`;

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

    cols += '<td><input type="text" name="bo_branch_name[]" class="form-control" autocomplete="off"/></td>';
    cols += '<td><input type="text" name="bo_township[]" class="form-control" autocomplete="off"/></td>';
    cols += '<td><input type="text" name="bo_post_code[]" class="form-control" autocomplete="off"/></td>';
    cols += '<td><input type="text" name="bo_city[]" class="form-control" autocomplete="off"/></td>';
    cols += '<td><input type="text" name="bo_state_region[]" class="form-control"  autocomplete="off"/></td>';
    cols += '<td><input type="text" name="bo_phone[]" class="form-control" autocomplete="off"/></td>';
    cols += '<td><button class="btn btn-primary btn-sm" type="button" onclick=addInputTele("'+tbody+'")><i class="fa fa-plus"></i></button></td>';
    cols += '<td><input type="text" name="bo_email[]" class="form-control" autocomplete="off" /></td>';
    cols += '<td><input type="text" name="bo_website[]" class="form-control" autocomplete="off" /></td>';
    cols += '<td><button class="delete btn btn-danger btn-sm" type="button" onclick=delRowBranch("'+tbody+'")><i class="fa fa-trash"></i></button></td>';
    newRow.append(cols);
    $("table."+tbody).append(newRow);
    counter++;
}

function addRowPartnerByNonAudit(tbody){
    var newRow = $("<tr>");
    var cols = "";
    var row=$('.'+tbody+' tr').length;
    cols += '<td>'+ (row)+'</td>';
    cols += '<td><input type="text" value="" name="fona_name[]" class="form-control" autocomplete="off"></td>';
    cols += '<td><input type="text" value="" name="fona_pass_csc_inco[]" class="form-control" autocomplete="off"></td>';
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
        $(this).closest("tr").remove();
        counter -= 1;

    });
}

function addRowDirectorByNonAudit(tbody){
    var newRow = $("<tr>");
    var cols = "";
    var row=$('.'+tbody+' tr').length;
    cols += '<td>'+ (row)+'</td>';
    cols += '<td><input type="text" value="" name="dona_name[]" class="form-control" autocomplete="off"></td>';
    cols += '<td><input type="text" value="" name="dona_position[]" class="form-control" autocomplete="off"></td>';
    cols += '<td><input type="text" value="" name="dona_passport[]" class="form-control" autocomplete="off"></td>';
    cols += '<td><input type="text" value="" name="dona_csc_no[]" class="form-control" autocomplete="off"></td>';
    cols += '<td><button class="delete btn btn-danger btn-sm" type="button" onclick=delRowDirectorByNonAudit("'+tbody+'")><i class="fa fa-trash"></i></button></td>';
    newRow.append(cols);
    $("table."+tbody).append(newRow);
    counter++;
}

function delRowDirectorByNonAudit(tbody){
    $("table."+tbody).on("click", ".delete", function (event) {
        $(this).closest("tr").remove();
        counter -= 1
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

function delRowDirector(tbody){
    $("table."+tbody).on("click", ".delete", function (event) {
        $(this).closest("tr").remove();
        counter -= 1
    });
}

function delRowDirectorCPA(tbody){
    $("table."+tbody).on("click", ".delete", function (event) {
        $(this).closest("tr").remove();
        counter -= 1
    });
}

function getOrganization(){
    var radioValue = $("input[name='org_stru_id']:checked").val();
    if(radioValue==1){
        $('#sole-proprietorship').css('display','block');
        $('#partnership').css('display','none');
        $('#company').css('display','none');
    }
    else if(radioValue==2){
        $('#sole-proprietorship').css('display','none');
        $('#partnership').css('display','block');
        $('#company').css('display','none');
    }
    else if(radioValue==3){
        $('#sole-proprietorship').css('display','none');
        $('#partnership').css('display','none');
        $('#company').css('display','block');
    }
    else{
        $('#sole-proprietorship').css('display','none');
        $('#partnership').css('display','none');
        $('#company').css('display','none');
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
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
