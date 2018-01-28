<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//登录

Route::get('/admin/login', 'Admin\LoginController@login');        //登录
Route::post('/admin/login', 'Admin\LoginController@loginPost');   //post登录请求
Route::get('/admin/logout', 'Admin\LoginController@logout');  //注销

Route::group(['prefix' => 'admin', 'middleware' => ['admin.login']], function () {

    //首页
    Route::get('/', 'Admin\IndexController@index');       //首页
    Route::get('/index', 'Admin\IndexController@index');  //首页

    //概览页面
    Route::get('/overview/index', 'Admin\OverViewController@index');       //首页

    //错误页面
    Route::get('/error/500', 'Admin\IndexController@error');  //错误页面

    //管理员管理
    Route::get('/admin/index', 'Admin\AdminController@index');  //管理员管理首页
    Route::get('/admin/setStatus/{id}', 'Admin\AdminController@setStatus');  //设置管理员状态
    Route::get('/admin/del/{id}', 'Admin\AdminController@del');  //删除管理员
    Route::get('/admin/edit', 'Admin\AdminController@edit');  //新建或编辑管理员
    Route::post('/admin/edit', 'Admin\AdminController@editPost');  //新建或编辑管理员
    Route::post('/admin/search', 'Admin\AdminController@search');  //新建或编辑管理员

//    日志管理
    Route::get('/log/index', 'Admin\LogController@index');  //下载错误日志页面

//    版本管理
    Route::get('/version/index', 'Admin\VersionController@index');  //发布版本通知

//   用户账户管理
    Route::get('/user/index', 'Admin\UserController@index');  //查询用户信息
    Route::get('/user/edit', 'Admin\UserController@edit');  //重置密码

//    公司管理
    Route::get('/company/index', 'Admin\CompanyController@index');  //公司管理
    Route::get('/company/create', 'Admin\CompanyController@create');  //创建公司

//    公司模板管理
    Route::get('/template/comTemplate', 'Admin\TemplateController@comTemplate');  //公司模板管理
    Route::get('/template/temExport', 'Admin\TemplateController@temExport');  //公司模板导出
    Route::get('/template/processTem', 'Admin\TemplateController@processTem');  //流程模板管理
    Route::get('/template/temEdit', 'Admin\TemplateController@temEdit');  //流程模板预置控件编辑
    Route::get('/template/upTem', 'Admin\TemplateController@upTem');  //流程模板预置控件升级
    Route::get('/template/orgStructure', 'Admin\TemplateController@orgStructure');  //组织架构管理
    Route::get('/template/processConfigur', 'Admin\TemplateController@processConfigur');  //流程审批配置管理
    Route::get('/template/processGroup', 'Admin\TemplateController@processGroup');  //流程分组管理

//    组织架构管理移动部门2
    Route::get('/orgStructure/moveDepartment', 'Admin\orgStructureController@moveDepartment');  //组织架构管理移动部门2
    Route::get('/orgStructure/departMove', 'Admin\orgStructureController@departMove');  //组织架构部门移动
    Route::get('/orgStructure/addJuniorDepartment', 'Admin\orgStructureController@addJuniorDepartment');  //添加下级部门
    Route::get('/orgStructure/personnelMove', 'Admin\orgStructureController@personnelMove');  //人员移动
    Route::get('/orgStructure/role', 'Admin\orgStructureController@role');  //人员移动
    Route::get('/orgStructure/addOnePerson', 'Admin\orgStructureController@addOnePerson');  //添加单个人员
    Route::get('/orgStructure/addBatchPerson', 'Admin\orgStructureController@addBatchPerson');  //添加批量人员





});

















