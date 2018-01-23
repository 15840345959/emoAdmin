<?php
/**
 * Created by PhpStorm.
 * User: mtt17
 * Date: 2018/1/23
 * Time: 15:03
 */

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;

class CompanyController
{
    //首页
    public function index(Request $request)
    {
        $admin = $request->session()->get('admin');
        return view('admin.company.index', ['admin' => $admin]);
    }
//    创建公司
    public function create(Request $request)
    {
        $admin = $request->session()->get('admin');
        return view('admin.company.create', ['admin' => $admin]);
    }




}