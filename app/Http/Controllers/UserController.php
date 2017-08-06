<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\User;
class UserController extends Controller
{
    /*
     * 用户列表
     */
     public function index()
     {
         $users = \App\User::orderBy('created_at')->paginate(6);;
         $idd=\Auth::guard("web")->user()->id;

         return view('/admin/user/index', compact('users'))->with('id', $idd);
     }
    /*
     * 创建用户
     */
    public function create()
    {
        return view('/admin/user/add');
    }
    /*
     * 创建用户
     */
    public function store(Request $request,User $user)
    {
        $this->validate($request, [
            'name' => 'required|min:2',
            'password' => 'required|min:6|max:30',
        ]);
        $name = request('name');
        $password = bcrypt(request('password'));
        if ($name != $user->name) {
            if(\App\User::where('name', $name)->count() > 0) {
                return "<script >alert('用户名存在')</script>".back();
            }
        }
        \App\User::create(compact('name', 'password'));
        return back();
    }
    public function del($id)
    {
        $user=user()->find($id);
        return $user->delete()?redirect('/admin/users'):back();
    }
}
