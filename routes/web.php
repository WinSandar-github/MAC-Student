<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
/*
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
});

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

//PAPP Register Form
Route::get('student_papp','PAPPController@info');

Route::get('student_index', 'StudentController@index');
// Route::get('student_da/{id}', 'StudentController@course_detail');

//CPA_FF Register Form
Route::get('cpa_ff_register', 'CPAFFController@info');
Route::get('cpa_one_self_study', 'CPAOneRegisterController@self_study');
Route::get('cpa_one_register', 'CPAOneRegisterController@register');
Route::get('cpa_one_mac', 'CPAOneRegisterController@mac');
Route::get('cpa_one_private_school', 'CPAOneRegisterController@private_school');

Route::get('student_course/{course_type_id}', 'StudentController@course');
Route::get('student_study', 'StudentController@study');
Route::get('da_register', 'DARegisterController@registerForm');
//Cpa One
Route::get('cpa_register', 'CPAOneRegisterController@cpaRegister');
Route::get('cpa_edit', 'CPAOneRegisterController@cpaEdit');
//Cpa One Exam Register
Route::get('cpa_exam_register','CPAOneRegisterController@cpaExamRegister');

//User login
Route::post('/loginValidate', 'LoginController@loginValidate');
Route::get('login','LoginController@login')->name('login');



