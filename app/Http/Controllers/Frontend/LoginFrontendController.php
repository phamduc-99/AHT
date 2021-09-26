<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestAddUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RequestLogin;

class LoginFrontendController extends Controller
{
    public function index(){
        if(Auth::check()){
            $user = User::where('email',Auth::user()->email)->first();
            $orders = $user->order()->orderBy('id','desc')->get();

            return view('frontend.my-account',compact('orders','user'));

        }

        return view('frontend.login');
    }
    public function login(RequestLogin $request){
        $email = $request->email;
        $password = $request->password;
        if(Auth::attempt(['email' => $email, 'password' => $password]))
        {

            return redirect()->back();

        }else{

            return redirect()->back()->with('error', 'Tài khoản hoặc mật khẩu không chính xác');
        }
    }
    public function logout(){
        
        Auth::logout();

        return redirect()->back();

    }
    public function register(RequestAddUser $request){

        User::insert(['email' => $request->email, 'password'=>Hash::make($request->password), 'fullname' => $request->fullname,'address' => $request->address, 'phone' => $request->phone]);

        $email = $request->email;
        $password = $request->password;
        Auth::attempt(['email' => $email, 'password' => $password]);

        return redirect()->back();
    }
}
