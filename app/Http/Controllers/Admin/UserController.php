<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $this->authorize('user');
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
        $user = User::find($id);
       
        $user->role = $request->role;
        $user->save();      

        return redirect('admin/user/index')->with('message', __('message.edit'));
    }
    
    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

       return redirect('admin/user/index')->with('message', __('message.delete'));
    }
}
