<?php
/**
 * Created by PhpStorm.
 * User: mtt17
 * Date: 2018/1/22
 * Time: 18:03
 */

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;

class VersionController
{
//首页
    public function index(Request $request)
    {
        $admin = $request->session()->get('admin');
        return view('admin.version.index', ['admin' => $admin]);
    }


}