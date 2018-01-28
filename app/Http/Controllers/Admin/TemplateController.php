<?php
/**
 * Created by PhpStorm.
 * User: mtt17
 * Date: 2018/1/24
 * Time: 22:06
 */

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;

class TemplateController
{
//    公司模板管理
    public function comTemplate(Request $request)
    {
        $admin = $request->session()->get('admin');
        return view('admin.template.comTemplate', ['admin' => $admin]);
    }

//    公司模板导出
    public function temExport(Request $request)
    {
        $admin = $request->session()->get('admin');
        return view('admin.template.temExport', ['admin' => $admin]);
    }

//    流程模板管理
    public function processTem(Request $request)
    {
        $admin = $request->session()->get('admin');
        return view('admin.template.processTem', ['admin' => $admin]);
    }

//    流程模板预置控件编辑
    public function temEdit(Request $request)
    {
        $admin = $request->session()->get('admin');
        return view('admin.template.temEdit', ['admin' => $admin]);
    }

//    流程模板预置控件升级
    public function upTem(Request $request)
    {
        $admin = $request->session()->get('admin');
        return view('admin.template.upTem', ['admin' => $admin]);
    }

//    组织架构管理
    public function orgStructure(Request $request)
    {
        $admin = $request->session()->get('admin');
        return view('admin.template.orgStructure', ['admin' => $admin]);
    }

//    流程审批配置管理
    public function processConfigur(Request $request)
    {
        $admin = $request->session()->get('admin');
        return view('admin.template.processConfigur', ['admin' => $admin]);
    }

//    流程分组管理
    public function processGroup(Request $request)
    {
        $admin = $request->session()->get('admin');
        return view('admin.template.processGroup', ['admin' => $admin]);
    }




}
















