<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NonAuditFirmController extends Controller
{
  public function index(){
      return view('pages.non_audit_firm_register');
  }
  public function edit(){
    return view('pages.non_audit_firm_register_edit');
  }
}
