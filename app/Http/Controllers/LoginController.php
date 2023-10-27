<?php

namespace APP\HTTP\Controllers;

use illuminate\http\request;
use illuminate\support\facades\auth;



class LoginController extends controller{
    function index(Request $request){
        return view("login");
    }
    function Login(Request $request){
        $dataLogin = $request->only("username","password");
        if(Auth::attempt($dataLogin)){
            echo "berhasil Login";
        }
        else{
            echo "gagal login";
        }
        function Logout(){
            Auth::Logout();

            return redirect(\home);
        }
    }

}