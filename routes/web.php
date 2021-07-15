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
Auth::routes();
Route::get('/', function () {
    return view('pages.home');
});
//Frontend DA Register Form
 Route::get('da', 'DAController@daform');
Route::post('dasubmit', 'DAController@daSubmit');
//Frontend RegisterationExam Form
Route::get('reg_exam', 'RegisterationExamController@regform');
Route::post('reg_submit', 'RegisterationExamController@regSubmit');

//PAPP Register Form
Route::get('student_papp','PAPPController@info');

Route::get('student_index', 'StudentController@index');
Route::get('student_da', 'StudentController@info');

//CPA_FF Register Form
Route::get('cpa_ff_register', 'CPAFFController@info');

Route::get('student_course', 'StudentController@info');
Route::get('student_study', 'StudentController@study');

