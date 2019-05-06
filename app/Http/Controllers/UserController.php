<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getLoginAdmin()
    {
        if (Auth::check() && (Auth::user()->role == 1 || Auth::user()->role == 0))
        {
            return redirect('admin/tour/index');
        }
        elseif (Auth::check() && (Auth::user()->role == 2))
        {
           return redirect('home');
        }

        return view('page_admin.login');
    }

    public function postLoginAdmin(Request $request)
    {
       /* $request->validated();*/
       $request->validate([
            'email'  =>  'required',
            'password' => 'required',
        ],
        [
            'email.required'             =>  'Bạn chưa nhập tên người dùng',
            'password.required'                  =>  'Tên người dùng tối đa là 100 kí tự',
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect('admin/tour/index');
        } else {
            $request->session()->flash('failed', __('message.failed'));

            return redirect('admin/login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

    public function getLogout()
    {
        Auth::logout();
        return view('admin.login');
    }
}
