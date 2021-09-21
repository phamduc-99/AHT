<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RequestLogin;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('backend\login');
    }
    public function login(RequestLogin $request){
        $email = $request->email;
        $password = $request->password;
        if(Auth::attempt(['email' => $email, 'password' => $password])){
            return redirect()->route('backend.index');
        }else{
            return redirect()->back()->with('error', 'Tài khoản hoặc mật khẩu không chính xác');
        }
    }
}
