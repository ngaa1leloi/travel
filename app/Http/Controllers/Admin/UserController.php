<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('role', '<>', 0)->get();

        return view('page_admin.user.index', compact('users'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('page_admin.user.edit', ['user' => $user]);
    }

    public function update(Request $request, $id)
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
    
    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        $users = User::all();

        return view('admin.user.list', ['users' => $users])->with('message', __('delete'));
    }
}
