<?php
/**
 * Created by PhpStorm.
 * User: mtt17
 * Date: 2018/1/22
 * Time: 16:23
 */

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;

class LogController
{
//首页
    public function index(Request $request)
    {
        $admin = $request->session()->get('admin');
        return view('admin.log.index', ['admin' => $admin]);
    }
}