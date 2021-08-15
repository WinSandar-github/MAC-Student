<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\StudentInfo;
use Hash;
use App\Http\Controllers\CustomClass\Helper;

class LoginController extends Controller
{
    public function loginValidate(Request $request)
    {
         
       if (Auth::attempt(array('email' => $request->email, 'password' => $request->password)))
        {
            // $client = new \GuzzleHttp\Client();
     
            // $res = json_decode($client->request('POST', Helper::$domain.'/loginValidate',['email' =>$request->email,'password' => $request->password])->getBody(),true);
            //  dd($res);                        
            $student=StudentInfo::where(['email' => auth::user()->email, 'password' =>auth::user()->password])->first();
            
            return response()->json($student,200);
        }else{
            

        }
                            
        
            
    }

    public function login()
    {
        return view('auth.login');
    }
}
