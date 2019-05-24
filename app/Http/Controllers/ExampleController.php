<?php

namespace App\Http\Controllers;
use \Illuminate\Http\Request;
class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      $this->middleware('age',['only'=>['foo']]);
    }

    public function foo()
    {
        return 'example request post';
    }
    public function login(Request $request)
    {
        // $user['username'] = $request->username;
        // $user['password'] = $request->password;
        // return $request->input('name','audy');
        if($request->has(['username','password'])){
            return 'success';
        }else{
            return 'fail';
        }
    }
}
