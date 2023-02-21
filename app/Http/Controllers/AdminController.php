<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // to add teachers
    public function teachers(){
     
        return view('management.admin.add-teacher');
    }

    
    // to add staff
    public function staffs(){
        $staff=User::where('role_id','staff')->get();
        // dd($staff);
        return view('management.admin.view-staff',['staff'=> $staff]);
    }

    //to make teachers hod
    public function teacher(){
       $teacher= User::where('role_id', 'teacher')->get();
    //    $staff = User::where('role_id', 'staff')->get();
       
       return view('management.admin.teacher', ['teachers'=> $teacher] );
    }


     //to view staff on admin page
     public function staff(){
        // $teacher= User::where('role_id', 'teacher')->get();
        $staff = User::where('role_id', 'staff')->get();
        
        return view('management.admin.staff', [ 'staff' => $staff] );
     }

     public function role(User $user){
        if($user->is_hod == "0"){
            $user->is_hod = '1';
            $user->save();
            return redirect()->route('teachers', ['user' => $user])->with('message', 'Teacher is Sceince HOD');

        }elseif($user->is_hod == "1"){
            $user->is_hod = '2';
            $user->save();
            return redirect()->route('teachers', ['user' => $user])->with('message', 'Teacher is Humanity HOD');
        }
        elseif( $user->is_hod == "2"){
            $user->is_hod = "3";
            $user->save();
            return redirect()->route('teachers', ['user' => $user])->with('message', 'Teacher is Languages HOD');
        }
        elseif( $user->is_hod == "3"){
            $user->is_hod = "0";
            $user->save();
            return redirect()->route('teachers', ['user' => $user])->with('message', 'HOD Status Removed');
        }
     }
     public function return(){
        return back();
     }
}

