<?php
/**
 * 首页控制器
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/20 0020
 * Time: 20:15
 */

namespace App\Http\Controllers\Admin;

use App\Components\ADManager;
use App\Components\QNManager;
use App\Libs\CommonUtils;
use App\Models\AD;
use Illuminate\Http\Request;
use App\Libs\ServerUtils;
use App\Components\RequestValidator;
use Illuminate\Support\Facades\Redirect;


class OverViewController
{

    //首页
    public function index(Request $request)
    {
        $admin = $request->session()->get('admin');
        return view('admin.overview.index', ['admin' => $admin]);
    }

}