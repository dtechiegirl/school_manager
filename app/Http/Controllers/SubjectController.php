<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Subject;
class SubjectController extends Controller
{
    //
    public function subject(){
        $department = Department::all();
        return view('management.admin.add-subject', ['departments'=> $department]);
    }

    public function subjectsubmit(Request $request){
   
        $formfields = $request->validate([
            'subject_name' => 'required|unique:subjects',
             'subject_description' => 'required|max:225',
             'department_id' => 'required',

        ]);
        
        Subject::create($formfields);
        return back()->with('message', 'Subject Added Successfully');
    }
}
