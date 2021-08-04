<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CpaExamRegisterController extends Controller
{
  public function registerForm()
  {
      return view('pages.cpa_exam_register');
  }
}
