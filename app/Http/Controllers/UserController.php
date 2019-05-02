<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getLoginAdmin()
    {
        if (Auth::check() && (Auth::user()->role == config('role.user.admin') || Auth::user()->role == config('role.user.superadmin')))
        {

            return redirect('admin/category/list');
        }
        elseif (Auth::check() && (Auth::user()->role == config('role.user.customer')))
        {
           return redirect('home');
        }

        return view('admin.login');
    }

    public function postLoginAdmin(Request $request)
    {
        $request->validated();
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect('admin/slide/list');
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

     public function getList()
    {
        $list_user = User::where('role', '<>', config('role.user.superadmin'))->get();

        return view('admin.user.list', ['list_user' => $list_user]);
    }

    public function getEdit($id)
    {
        $user = User::findOrFail($id);

        return view('admin.user.edit', ['user' => $user]);
    }

    public function postEdit(Request $request, $id)
    {
        $request->validate([
            'name'  =>  'required|max:100',
        ],
        [
            'name.required'             =>  'Bạn chưa nhập tên người dùng',
            'name.max'                  =>  'Tên người dùng tối đa là 100 kí tự',
        ]);

        $user = User::find($id);
        $user->name             = $request->name;
        $user->email            = $request->email;
        if ($request->checkbox == 'on') {
            $request->validate([
                'password'  =>  'required|min:3|max:32',
                'passwordAgain' =>  'required|same:password',
            ],
            [
                'password'                  =>  'Bạn chưa nhập mật khẩu',
                'password.min'              =>  'Mật khẩu tối thiểu là 3 kí tự',
                'password.max'              =>  'Mật khẩu tối đa là 32 kí tự',
                'passwordAgain.required'    =>  'Bạn chưa nhập lại mật khẩu',
                'passwordAgain.same'        =>  'Mật khẩu không khớp',
            ]);
        $user->password         = bcrypt($request->password);                       
        }
        $user->role            = $request->role;
        $user->save();      

        $request->session()->flash('thanhcong','Sửa User thành công !!');
        return redirect('admin/user/edit/'.$id);
    }
    
    public function getDelete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        $list_user = User::all();

        return view('admin.user.list', ['list_user' => $list_user])->with('message', __('delete'));
    }

    public function getLogout()
    {
        Auth::logout();
        return view('admin.login');
    }
}
