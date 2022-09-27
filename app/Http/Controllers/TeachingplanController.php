<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Subject;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Models\Teaching_plan;
use Illuminate\Support\Facades\Auth;

class TeachingplanController extends Controller
{
    //
    public function tplan(){
        $subjects = Subject::all();
        $dept = Department::all();
    
        return view('dashboard.teacher', ['subjects' =>  $subjects, 'dept' => $dept]);
    }
  
    public function save(Request $request){
        // dd('eee');
        $formfields = $request->validate([
           
            'subject_id' => 'required',
            'term' => 'required',
            'week' => 'required',
            'day' => 'required',
            'week_end_date' => 'required',
            'general_topic' => 'required|max:225',
            'period' => 'required',
            'time' => 'required',
            'specific_topics' => 'max:225',
            'duration' =>'max:225',
            'plan_references' => 'max:1000',
            'introduction' => 'max:1000',
            'presentation' => 'max:1000',   
            'student_activities' => 'max:1000',
            'board_summary' => 'max:1000',
            'evaluation'=> 'max:1000'    ,
            'assignment' => 'max:1000',
            'department_id' => 'required',
         ]);
        
         $tplan = User::where('id', auth()->id())->first();

         $tplan->teachingplan()->create($formfields);
        //  return view('dashboard.teacher' )->with('message', 'Teaching Plan Added Successfully!');
        return redirect()->route('tplan')->with('message', 'Teaching Plan Added successfully');

         
    }
    public function view(){
       
        $tplans = Teaching_plan::get();
        $stplan = Teaching_plan::where('department_id', '1')->get();
        $htplan = Teaching_plan::where('department_id', '2')->get();
        $ltplan = Teaching_plan::where('department_id', '3')->get();
        // dd($stplan);

       
        return view('management.hod.viewtplan', ['tplans' => $tplans, 'stplan' => $stplan, 'htplan'=> $htplan, 'ltplan' =>$ltplan]);
    }


    public function activate(Teaching_plan $tplan){
      
        if($tplan->approved_by == "0"){
            $tplan->approved_by = '1';
            $tplan->save();
            return redirect()->route('viewtplans', ['tplans' => $tplan])->with('message', 'Teaching Plan Approved');
        }else{
            $tplan->approved_by = '0';
            $tplan->save();
            return redirect()->route('viewtplans', ['tplans' => $tplan])->with('message', 'Teaching Plan DIsapproved');
        }
        
    }
    

    public function viewtplan(User $user){
        
        return view('dashboard.teachersplan', ['users' => $user]);
    }

    public function edit($id){
        $subjects = Subject::all();
        $tplan = Teaching_plan::find($id);
        $dept = Department::all();
        return view('dashboard.edit', ['tplan' => $tplan, 'subjects' =>$subjects, 'dept' => $dept]);
    }
    public function update(Request $request ,Teaching_plan $tplan){
        $formfields = $request->validate([
           
            'subject_id' => 'nullable',
            'term' => 'nullable',
            'week' => 'nullable',
            'day' => 'nullable',
            'week_end_date' => 'nullable',
            'general_topic' => 'nullable|max:225',
            'period' => 'nullable',
            'time' => 'nullable',
            'specific_topics' => 'max:225',
            'duration' =>'max:225',
            'plan_references' => 'max:1000',
            'introduction' => 'max:1000',
            'presentation' => 'max:1000',   
            'student_activities' => 'max:1000',
            'board_summary' => 'max:1000',
            'evaluation'=> 'max:1000'    ,
            'assignment' => 'max:1000',
            'department_id' => 'nullable',
         ]);
         $tplan->update($formfields);
         return back()->with('message', 'Teaching Plan Edited Successfully!');
        //  return redirect()->route('edit', ['tplan'=> $tplan])->with('message', 'Teaching Plan Added successfully');

    }

    //principal controller
    public function principal(){
        $tplans = Teaching_plan::get();
        return view('management.principal.principal',['tplans' => $tplans]);
    }

    public function comment(Request $request, Teaching_plan $tplan){
        $formfield = $request->validate([
            'hod_comments' => 'max:500',
        ]);
        // dd($formfield);
        $tplan->hod_comments = $formfield;
        $tplan->save();
        return redirect()->route('principal', ['tplans' => $tplan])->with('message', 'Comment Sent Successfully');
    }
    
    // temi@gmail.com
    // samuel@gmail.com
    // damib@gmail.com
    // ooo@gmail.com

    // login, tplan, tplan approval, 

    // viwetplan, approve with comment

    // hod comment

    // Director interface

    
}
