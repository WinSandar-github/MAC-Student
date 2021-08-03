// var BACKEND_URL="http://localhost:8080/api";
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

function resetForm(form){
    var form = $(form)[0];
    $(form).removeClass('was-validated');
    form.reset();
}

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
