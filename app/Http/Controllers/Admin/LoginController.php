<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view ('login.index');
    }

    public function password_check(LoginRequest $request)
    {
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect('admin/user');
        }else{
            return redirect()->back()->with('error_message','Email Or Password Incorrect!');
        }

    }

    public function logout(Request $request){
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

}
