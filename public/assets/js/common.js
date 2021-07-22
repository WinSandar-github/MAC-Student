var BACKEND_URL="http://localhost:8000/api";
// var BACKEND_URL="https://demo.aggademo.me/MAC/public/index.php/api";
var toastOptions = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": false,
    "progressBar": false,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "1000",
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