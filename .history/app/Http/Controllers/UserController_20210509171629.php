<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getSignup(){
        return View('user.signup');
    }
    public function postsignup(Reuqest $request){
        // バリデーション
        $ßthis->validate($request,[
        'name' => 'required',

        ])
    }
}
