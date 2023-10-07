<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class authController extends Controller
{
    function register(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'confirm_password' => 'required|same:password'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Some Error Occured!',
                'data' => $validator->errors()
            ]);
        } else {
            //email exist
            $exist = User::where('email', '=', $request->email)->count();
            if ($exist != 1) {
                $user = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => $request->password
                ]);

                return response()->json([
                    'status' => true,
                    'message' => 'USER REGISTERED SUCCESSFULLY!',
                    'token' => $user->createToken("API TOKEN")->plainTextToken
                ], 200);
            } else {
                return response()->json(['message' => 'EMAIL ADDRESS ALREADY EXIST!']);
            }

        }
    }

    function login(Request $request){
       $validator = Validator::make($request->all(),[
            'email'=>'required|email',
            'password'=>'required'
        ]);
        if($validator->fails()){
            return response()->json([
                'status'=>false,
                'message'=>'Some Error Occurs!',
                'data'=>$validator->errors()
            ]);
        }else{
            if (Auth::attempt(['email'=>$request->email,'password'=>$request->password])) {
              $user = User::where('email','=',$request->email)->first();
                return response()->json([
                    'status'=>true,
                    'message'=>'Your Credentials Match!',
                    'token'=>$user->createToken("API TOKEN")->plainTextToken
                ]);
            }else{
                return response()->json([
                    'status'=>false,
                    'message'=>'Your Credentials Not Match!'
                ]);
            }
        }
    }

}