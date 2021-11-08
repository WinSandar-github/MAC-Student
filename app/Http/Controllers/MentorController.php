<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MentorController extends Controller
{
  public function index(){
    return view('pages.mentor.mentor_registration');
  }

  public function updateMentor(){
    return view('pages.mentor.update_mentor');
  }
}
