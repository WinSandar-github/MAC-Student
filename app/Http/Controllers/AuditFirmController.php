<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuditFirmController extends Controller
{
    public function auditFirm()
    {
        return view('pages.audit_firm');
    }
}
