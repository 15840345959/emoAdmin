<?php
/**
 * Created by PhpStorm.
 * User: mtt17
 * Date: 2018/1/27
 * Time: 15:26
 */

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;

class orgStructureController
{
    //   组织架构管理移动部门2
    public function moveDepartment(Request $request)
    {
        $admin = $request->session()->get('admin');
        return view('admin.orgStructure.moveDepartment', ['admin' => $admin]);
    }

    //   组织架构部门移动
    public function departMove(Request $request)
    {
        $admin = $request->session()->get('admin');
        return view('admin.orgStructure.departMove', ['admin' => $admin]);
    }

    //   添加下级部门
    public function addJuniorDepartment(Request $request)
    {
        $admin = $request->session()->get('admin');
        return view('admin.orgStructure.addJuniorDepartment', ['admin' => $admin]);
    }

    //   人员移动
    public function personnelMove(Request $request)
    {
        $admin = $request->session()->get('admin');
        return view('admin.orgStructure.personnelMove', ['admin' => $admin]);
    }

    //   添加角色
    public function role(Request $request)
    {
        $admin = $request->session()->get('admin');
        return view('admin.orgStructure.role', ['admin' => $admin]);
    }

    //   添加单个成员
    public function addOnePerson(Request $request)
    {
        $admin = $request->session()->get('admin');
        return view('admin.orgStructure.addOnePerson', ['admin' => $admin]);
    }

    //   添加批量成员
    public function addBatchPerson(Request $request)
    {
        $admin = $request->session()->get('admin');
        return view('admin.orgStructure.addBatchPerson', ['admin' => $admin]);
    }







}









