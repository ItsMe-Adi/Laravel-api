<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    function index(Request $request)
    {
        $user= User::where('email', $request->email)->first();
        // print_r($data);
            if (!$user || !Hash::check($request->password, $user->password)) {
                return response([
                    'message' => ['These credentials do not match our records.']
                ], 401);
            }
        
             $token = $user->createToken('my-app-token')->plainTextToken;
            //  $data=User::all();
            $response = [
                // 'data' => $data,
                'token' => $token
            ];
        
             return response($response, 200);
    }

    function getData()
    {
        return ["data"=>User::all()];
    }
}
