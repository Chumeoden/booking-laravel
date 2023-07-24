<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            // Đăng nhập thành công, chuyển hướng đến trang sau khi đăng nhập thành công
            return redirect('/')->with('success', 'Đăng nhập thành công.');
        } else {
            // Đăng nhập thất bại, chuyển hướng đến trang đăng nhập và thông báo lỗi
            return redirect('/login')->with('error', 'Đăng nhập không thành công. Vui lòng kiểm tra lại thông tin đăng nhập.');
        }
    }

    public function logout()
    {
        Auth::logout();
        // Đăng xuất thành công, chuyển hướng người dùng về trang chủ
        return redirect('/')->with('success', 'Đăng xuất thành công.');
    }
}
