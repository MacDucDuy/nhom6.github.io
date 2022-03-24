<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Validator;


class usersController extends Controller
{
    //
    public function store(Request $request){
        if ($request->method('post')) {
            # code...
            $validator =  Validator::make($request->all(),[
                'username'=> 'require|min:6|max:30|alpha',
                'email'=> 'require|email',
                'password'=> 'require|confirmed|min:6|max:16'



            ]);
            if($validator->failed()){
                return redirect()->back()
                ->withErrors($validator)
                ->withInput();
            }
    }
    $user = DB::table('users')->where('email',$request->email)->first();
    if(!$user){
        $newUser = new User();
        $newUser->name = $request->name;
        $newUser->name = $request->email;
        $newUser->name = $request->pasword;
        $newUser -> save();
        return redirect()->route('auth.show')->with('message','bạn đã tạo tài khoản thành công');
      
    }
    else{
        return redirect()->route('auth.showLogin')->with('message','tài khoản đã tồn tại ');
    }

    }
}
