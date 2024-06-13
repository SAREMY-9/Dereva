<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Admins;

class AdminController extends Controller
{


    public function admRegister(Request $request){




//        dd($request);

        $request->validate([

            'name'=>['required','min:6','max:45'],  
            'idNo'=>['required','min:8','max:10'],
            'email'=>['required'],
            'password'=>['required','min:8','max:45'],
            
        ]);

        $admin = Admins::create([

            'name'=>$request->name,
            'idNo'=>$request->idNo,
            'email'=>$request->email,
            'password'=>$request->password,
            
        ]);

     if($admin){

        session()->flash('success','Account registration succesful!');

        return redirect()->route('admin.home');
        
     }

     else{

        return view('admRegister');

     }

        
    }
    
    public function loginHandler(Request $request ){

        $fieldType= filter_var($request->login_id, FILTER_VALIDATE_EMAIL) ? 'email' : 'name';

        if($fieldType=='email'){

        $request->validate([
        'login_id'=>'required|email|exists:admins,email',
        'password'=>'required|min:8|max:45'

        ],
    [

         'login_id.required'=>'Email or name is required',
         'login_id.email'=>'Invalid email address',
         'login_id.exists'=>'Email does not exist in our system',
         'password.required'=>'Password is required'
 
    ]);
        }

        else{


            $request->validate([
                'login_id'=>'required|exists:admins,name',
                'password'=>'required|min:8|max:45'

            ],[


                'login_id.required'=>'Email or name is required',
                'login_id.exists'=>'Name does not exist in our system',
                'password.required'=>'Password is required'
            ]);
        }


        $creds= array(

            $fieldType=>$request->login_id,
            'password'=>$request->password
        );

        if(Auth::guard('admin')->attempt($creds)){        

            return redirect()->route('admin.home');    
        }   
        
        else {

            session()->flash('fail','Incorect credentials');
            return redirect()->route('admin.login');
        }
    }
    

    public function logoutHandler(Request $request){
        Auth::guard('admin')->logout(); 
        session()->flash('fail','You are Logged out'); 
        return redirect()->route('admin.login');


    }

  
    public function sendPasswordResetLink(Request $request){
         $request->validate([
            'email'=>'required|email|exists:admins,email'
         ],[

            'email.required'=>'The :attribute is required',
            'email.email'=>'Invalid email address',
            'email.exixts'=>'Email does not exist in our system'
         ]);
    }
}
 