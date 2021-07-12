<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\StudentInfo;
use Hash;
use Alert;

class LoginController extends Controller
{
    public function loginValidate(Request $request)
    {
        
       if (Auth::attempt(array('email' => $request->email, 'password' => $request->password)))
        {
                                
            $student=StudentInfo::where(['email' => auth::user()->email, 'password' =>auth::user()->password])->get();
            return response()->json(
                ['data' => $student],200);
        }else{

        }
                            
        
            
    }
}
