<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\StudentInfo;

class LoginController extends Controller
{
    public function loginValidate(Request $request)
    {
        
        $student=StudentInfo::where(['email' => $request->email, 'password' => $request->password])
                            ->get();
        if(sizeof($student)){
            return response()->json(
                ['data' => $student],200);
        }else{

        }
            
    }
}
