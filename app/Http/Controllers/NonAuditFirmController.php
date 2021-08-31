<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NonAuditFirmController extends Controller
{
  public function index(){
      return view('pages.firm.non_audit_firm_register');
  }
  public function edit(){
    return view('pages.firm.non_audit_firm_register_edit');
  }

  public function nonAuditFirmRenew()
    {
        return view('pages.firm.non_audit_firm_renew');
    }

  public function nonAuditFirmReSubmit()
    {
        return view('pages.firm.non_audit_firm_resubmit');
    }

    
}
