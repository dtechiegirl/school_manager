<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teaching_plan;

class ApiTeachingPlanController extends Controller
{
    //
    public function view(){
        $tplans = Teaching_plan::get();
        return  [
            "message"=>$tplans,
        ];
    }

    public function update(Request $request){
        $tplan = Teaching_plan::find($request->id);
        if( $tplan->approved_by == "0"){
            $tplan->approved_by = "1";
            $result =  $tplan->save();
        }else{
            $tplan->approved_by = "0";
            $result =  $tplan->save();
        }
         return [
            'message'=> $result,
         ];
    }
     
    

}
