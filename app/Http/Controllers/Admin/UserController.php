<?php
/**
 * Created by PhpStorm.
 * User: mtt17
 * Date: 2018/1/22
 * Time: 21:55
 */

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;

class UserController
{
//首页
    public function index(Request $request)
    {
        $admin = $request->session()->get('admin');
        return view('admin.user.index', ['admin' => $admin]);
    }
//重置密码
    public function edit(Request $request)
    {
        $admin = $request->session()->get('admin');
        return view('admin.user.edit', ['admin' => $admin]);
    }



}