<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuditFirmController extends Controller
{
    public function auditFirm()
    {
        return view('pages.firm.audit_firm');
    }

    // public function auditFirmEdit()
    // {
    //     return view('pages.audit_firm_edit');
    // }

    public function auditFirmReSubmit()
    {
        return view('pages.firm.audit_firm_resubmit');
    }

    public function auditFirmRenew()
    {
        return view('pages.firm.audit_firm_renew');
    }
}
