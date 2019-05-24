<?php

namespace App\Http\Controllers;
use \Illuminate\Http\Request;
use \Illuminate\Support\Facades\Hash;

use App\User;
class AuthController extends Controller
{
   public function register(Request $request)
   {
        $username = $request->input('username');
        $name = $request->input('name');
        $email = $request->input('email');
        $password = Hash::make($request->input('password'));
        $register = User::create([
            'name' => $name,
            'username' => $username,
            'email' => $email,
            'password' => $password,
        ]);
        if($register){
            return response()->json([
                'success' => true,
                'message' => 'Register Success',
                'data' =>$register
            ],201);
        }
   }
   public function login(Request $request)
   {
      
   }
}
