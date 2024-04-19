<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
        // [[GET]] : /admin/login
        public function login() {
            if(Auth::id() > 0) {
                return redirect()->route('admin.index')->with('success', 'Đăng nhập thành công');
            }
            return view('backend.auth.login');
        }

        // [[POST]] : /admin/do-login 
        public function doLogin(AuthRequest $request) {
            $credentials = [
                'email' => $request->email,
                'password' =>$request->password
            ];
            if (Auth::attempt($credentials)) {
                return redirect()->route('admin.index')->with('success', 'Đăng nhập thành công');
            }
            return redirect()->route('admin.login')->with('error', 'Email hoặc mật khẩu không chính xác');
        }

        public function doLogout(Request $request) {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect() -> route('admin.login') -> with('success', 'Đăng xuất thành công');
        }
}