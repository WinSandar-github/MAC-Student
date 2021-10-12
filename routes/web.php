<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\FileUploadController;
use PhpParser\Node\Name\FullyQualified;

/*e
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Auth::routes();
Route::get('/', function () {
    return view('pages.home');
})->name("home");
Route::post('/loginValidate', 'LoginController@loginValidate');
//Frontend DA Register Form
Route::get('da', 'DAController@daform');
Route::get('da_edit', 'DAController@da_edit');

Route::post('dasubmit', 'DAController@daSubmit');
//Frontend RegisterationExam Form
// Route::get('reg_exam', 'RegisterationExamController@regform');
// Route::post('reg_submit', 'RegisterationExamController@regSubmit');
// DA Register Form
Route::get('da_register', 'DARegisterController@registerForm');

//Exam Register Form
Route::get('/exam_register', 'ExamRegisterController@registerForm');
// Route::get('/cpa_exam_register', 'CpaExamRegisterController@registerForm');

//DAII Exam Register Form
Route::get('/da_two_exam_register', 'DATwoExamRegisterController@daTwoExamRegisterForm');

//PAPP Register Form
Route::get('student_papp','PAPPController@info');
Route::get('update_papp_initial','PAPPController@reject_initial');
Route::get('update_papp_renewal','PAPPController@reject_renewal');

//PAPP Information Page
Route::get('student_papp_information','PAPPInfoController@info');

Route::get('student_index', 'StudentController@index');
// Route::get('student_da/{id}', 'StudentController@course_detail');

//CPA_FF Register Form
Route::get('cpa_ff_register', 'CPAFFController@info');
// Route::get('cpa_ff_reject', 'CPAFFController@reject');
Route::get('cpaff_other', 'CPAFFController@other');
Route::get('update_cpaff_initial','CPAFFController@reject_initial');
Route::get('update_cpaff_renewal','CPAFFController@reject_renewal');

// CPA_FF Information Page
Route::get('cpa_ff_information', 'CPAFFInfoController@info');

//Contact Page
Route::get('contact', 'ContactController@info');

//Non_Audit firm
Route::get('non_audit_firm_register', 'NonAuditFirmController@index');
Route::get('non_audit_firm_renew', 'NonAuditFirmController@nonAuditFirmRenew');
Route::get('non_audit_firm_resubmit', 'NonAuditFirmController@nonAuditFirmReSubmit');
Route::get('non_audit_firm_register_edit', 'NonAuditFirmController@edit');

// Non Audit Firm Information
Route::get('non_audit_firm_information', 'NonAuditFirmInfoController@info');

//CPA One
Route::get('cpa_one_self_study', 'CPAOneRegisterController@self_study');
Route::get('cpa_one_register', 'CPAOneRegisterController@register');
// Route::get('cpa_one_register', 'CPAOneRegisterController@register');

//AA Registeration Form
Route::get('aa_mac_form/{id}', 'CPAOneRegisterController@aaMacRegister');
Route::get('aa_self_form/{id}', 'CPAOneRegisterController@aaSelfRegister');
Route::get('aa_private_form/{id}', 'CPAOneRegisterController@aaPrivateRegister');


Route::get('cpa_one_mac', 'CPAOneRegisterController@mac');
Route::get('cpa_one_private_school', 'CPAOneRegisterController@private_school');

//CPA Two
Route::get('cpa_two_self_study/{id}', 'CPATwoRegisterController@self_study');
Route::get('cpa_two_mac/{id}', 'CPATwoRegisterController@mac');
Route::get('cpa_two_private_school/{id}', 'CPATwoRegisterController@private_school');
Route::get('cpa_two_register/{id}', 'CPATwoRegisterController@register');


Route::get('student_course/{course_type_id}', 'StudentController@course');
Route::get('da_one_register', 'StudentController@daOneRegister');
//Cpa
Route::get('cpa_one_form/{id}', 'CPAOneRegisterController@cpaOneForm');
Route::get('cpa_one_entry_form/{id}', 'CPAOneRegisterController@cpaOneEntryForm');
Route::get('cpa_one_dapass_form/{id}', 'CPAOneRegisterController@cpaOneDaPassForm');
Route::get('cpa_one_entry_app_form/{id}', 'CPAOneRegisterController@cpaOneEntryAppForm');

Route::get('cpa_edit', 'CPAOneRegisterController@cpaEdit');
//Cpa One Exam Register
Route::get('cpa_exam_register','CPAOneRegisterController@cpaExamRegister');
//Cpa two exam register
Route::get('cpa_two_exam_register','CPATwoRegisterController@cpaTwoExamRegister');

//User login
Route::post('/loginValidate', 'LoginController@loginValidate');
Route::get('login','LoginController@login')->name('login');

// Route::get('cpa_register', 'CPAFFController@cpaRegister');

// show application form of da one
Route::get('da_one_form/{id}', 'DARegisterController@registerForm');

Route::get('da_two_register/{id}', 'DAController@da_two_register');

//Da Two application form
Route::get('da_two_form/{id}','DAController@daTwoAppForm')->name('da_two_form');
Route::get('cpa_two_form/{id}','CPATwoRegisterController@cpaTwoAppForm')->name('cpa_two_form');

//Eamil Validation
Route::get('verify_email', 'LoginController@verifyEmail');

// Audit Firm
Route::get('audit_firm', 'AuditFirmController@auditFirm');

// Audit Firm Information
Route::get('audit_firm_information', 'AuditFirmInfoController@info');

// Audit Firm Reject Register
Route::get('audit_firm_reject_register', 'AuditFirmInfoController@updateRejectedRegister');

// Route::get('audit_firm_edit', 'AuditFirmController@auditFirmEdit');
Route::get('audit_firm_resubmit', 'AuditFirmController@auditFirmReSubmit');
Route::get('audit_firm_renew', 'AuditFirmController@auditFirmRenew');

//School Register Form
Route::get('school_register', 'SchoolController@info');

// School Information Page
Route::get('school_information', 'SchoolInfoController@info');

//School edit Form
Route::get('school_edit', 'SchoolController@edit');

//School renewedit Form
Route::get('renew_school_edit', 'SchoolController@renew_edit');

//Teacher Register Form
Route::get('teacher_register', 'TeacherController@info');

// Teacher Information Page
Route::get('teacher_information', 'TeacherInfoController@info');

// Mentor Register Form
Route::get('mentor_register', 'MentorController@index');

// Mentor Information Page
Route::get('mentor_information', 'MentorInfoController@info');

// Article Register Form
Route::get('article_gov_registration', 'ArticleController@articleGov');
Route::get('article_firm_registration', 'ArticleController@articleFirm');
Route::get('article_renew_firm_registration', 'ArticleController@articleRenewFirm');
Route::get('article_qt_firm_registration', 'ArticleController@articleQTFirm');
Route::get('article_resign_registration', 'ArticleController@articleResign');

// Article Information Page
Route::get('article_information', 'ArticleInfoController@info');

//list of all result
Route::get('attend_registration_list/{course_id}','ReportController@attendRegistrationList');
Route::get('application_list/{course_id}','ReportController@appList');


Route::get('exam_registration_list/{course_id}','ReportController@exam_list');
Route::get('exam_result_list/{course_id}','ReportController@exam_result_list');
Route::get('entry_exam_list','ReportController@entryExamList');
Route::get('qualified_test_list','ReportController@qualifiedTestList');




//Payment Page
// Route::get('payment', 'PaymentController@payment');
// Route::get('cash', 'PaymentController@cash');
// Route::get('da_verify_email', 'PaymentController@verifyEmail');
Route::get('payment_method/{id}', 'PaymentController@paymentMethod');
Route::get('/setPayment', 'PaymentController@setPayment');
Route::post('payment_method/{id}', 'PaymentController@postPayment');
Route::post('post_payment/{type}', 'PaymentController@postPayment');
Route::post('/payment_status', 'PaymentController@paymentStatus'); // response route
Route::get('/cbpay_qr', 'PaymentController@cbpayQR');
Route::get('/cbpay_pin', 'PaymentController@cbpayPin');
// Qualified Test
Route::get('qt_register', 'QtController\QtController@index')->name('qt_register');
