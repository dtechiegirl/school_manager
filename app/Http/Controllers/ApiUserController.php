<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ApiUserController extends Controller
{
    //
    public function login(Request $request){
        $email = User::where('email', $request->email)->first();
        // dd($email->password);
        if($email){
            if(Hash::check($request->password, $email->password)){
                $token = Str::random(60);
                $email->activation_token = $token;
                $result = $email->save();
                if($result){
                return [
                    'message'=> "Logged in Successful",
                     "Authorization Token" => $token,
                    'user'=> $email,
                ];

            }
            return [
                'message' =>"Token could not be updated to Database" 
            ];
        }

        else {
            return [
                "message" => 'Password is incorrect'
            ];
        }   
    }else{
        return [
            "message" => "user not found"
        ];
    }
}
}