<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Subject;
use App\Models\Department;
use App\Models\Teaching_plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //

  
    public function register(){
        return view('auth.register');
    }

    public function registration(Request $request){
            $formfields = $request->validate([
            'name'=> 'max:225',
            'username' => ['max:225'], 
            'contact_number' => 'min:11',
            'role_id' => 'required',
            'email' => ['required', 'unique:users', 'email'],
            'password' => [ 'min:6', 'required'],
        ]);
        $formfields['password']= bcrypt($formfields['password']);
        
        $user = User::create($formfields);
        $subjects = Subject::all();
        $dept = Department::all();

        if($user->role_id == 'admin')
      {
        auth()->login($user);
     return view('dashboard.admin')->with('message', 'Registration Successful');
      }elseif($user->role_id == 'staff'){
        auth()->login($user);
        return view('dashboard.staff')->with('message', 'Registration successful');
    }else{
        auth()->login($user);
        return view('dashboard.teacher', ['subjects' =>  $subjects, 'dept' => $dept])->with('message', 'Registration Successful');
    }
        
    }
  

    public function login(){
        return view('auth.login');
    }

    public function auth(Request $request){
        $user = $request->validate([
            'email' =>['required', 'email'],
            'password' => 'required',
        ]);  
        $checkuser = User::where('email', $request->email)->first();
        $admin = User::where('role_id', 'admin')->first();
       
        
        // dd($hodlang);
        $subjects = Subject::all();
        $dept = Department::all();
        $teacher= User::where('role_id', 'teacher')->get();
        $tplans = Teaching_plan::get();
        // $stplan = Teaching_plan::where('department_id', '1')->get();
        // $htplan = Teaching_plan::where('department_id', '2')->get();
        // $ltplan = Teaching_plan::where('department_id', '3')->get();
        // dd($admin);

        if(Auth::attempt($user) and $admin){ 
            // dd(auth()->user()->role_id == 'teacher' and auth()->user()->is_hod == '0');
            if(auth()->user()->role_id == 'admin'){
            return view('management.admin.teacher', ['teachers'=> $teacher])->with('message', 'Login Successful');
            }elseif(auth()->user()->role_id == 'staff'){
                return view('dashboard.staff');
            }
            // elseif(auth()->user()->role_id == 'teacher' and auth()->user()->is_hod == '1'){
            //     return view('management.hod.scihod', ['subjects' =>  $subjects, 'dept' => $dept]);
            // }elseif(auth()->user()->role_id == 'teacher' and auth()->user()->is_hod == '3'){
            //     return view('management.hod.langhod', ['subjects' =>  $subjects, 'dept' => $dept]);
            // }elseif(auth()->user()->role_id == 'teacher' and auth()->user()->is_hod == '2'){
            //     return view('management.hod.humhod', ['subjects' =>  $subjects, 'dept' => $dept]);
            // }
            elseif(auth()->user()->role_id == 'teacher'){
                return view('dashboard.teacher', ['subjects' =>  $subjects, 'dept' => $dept]);
            } elseif(auth()->user()->role_id == 'principal'){
                return view('management.principal.principal',['tplans' => $tplans]);
            }
        }elseif(!$checkuser){
           return redirect('/')->with('message', 'User does not exist');
         }else {
             return back()->with('message', 'incorrect credentials');
            }
   
    }
     

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
    
}
