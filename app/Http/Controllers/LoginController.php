<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;


class LoginController extends Controller
{
    public function login(Request $req){
        if($req->input('submit')){
            $e =$req->input('e');   
            $p = $req->input('p');

            $data = login::where('email',$e)->where('password',$p)->get();

            $data=json_decode(json_encode($data),true);
            $x=sizeof($data);
            if ($x > 0)
            return redirect ("/database");
             else {
                return view('login',['msg'=>"Invalid Name or Password"]);
             }
        }
        else {
            return view('login',["msg"=>""]);
        }
    }

    public function register(Request $req)
{
    if($req->input('submit')) {
        $n = $req->input('n');
        $e = $req->input('e');
        $p = $req->input('p');

        // Check if email already exists
        $existingUser = login::where('email', $e)->first();

        if ($existingUser) {
            // Email already exists, return error message or handle accordingly
            return view('register', ["msg" => "Email address already exists"]);
        }

        // Email doesn't exist, proceed with registration
        $ob = new login();
        $ob->name = $n;
        $ob->email = $e;
        $ob->password = $p;

        $ob->save();
        return view('login', ["msg" => "Register successfully"]);
    } else {
        return view('register', ["msg" => ""]);
    }
}

    // public function registerUser(Request $request){
        
    //     $request->validate([
    //         'name'=>'required',
    //         'email'=>'required|email|unique:users',
    //         'password'=>'required|min:5|max:12'
    //     ]);
    //     $user = new User();
    //     $user->name = $request->name;
    //     $user->email = $request->email;
    //     $user->password = $request->password;
    //     $res = $user->save();
        
    //     if($res){
    //         return back()->with('success','You have register successfully');
    //     }else {
    //         return back()->with('fail','Something Wrong');
    //     }
    // }
}
