@extends('admin.layouts.app')

@section('content')

    <header class="navbar-wrapper">
        <div class="navbar navbar-fixed-top">
            <div class="container-fluid cl"><a class="logo navbar-logo f-l mr-10 hidden-xs"
                                               href="/aboutHui.shtml">方形企业信息管理平台</a>
                <a class="logo navbar-logo-m f-l mr-10 visible-xs" href="#"></a>
                <span class="logo navbar-slogan f-l mr-10 hidden-xs">v1.0</span>
                <a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>
                <nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
                    <ul class="cl">
                        <li>超级管理员</li>
                        <li class="dropDown dropDown_hover">
                            <a href="#" class="dropDown_A">{{$admin->name}} <i class="Hui-iconfont">&#xe6d5;</i></a>
                            <ul class="dropDown-menu menu radius box-shadow">
                                <li><a href="javascript:;" onClick="">个人信息</a></li>
                                <li><a href="#">切换账户</a></li>
                                <li><a href="{{url('/admin/logout')}}">退出</a></li>
                            </ul>
                        </li>
                        <li id="Hui-msg">
                            <a href="#" title="消息">
                                <span class="badge badge-danger">1</span>
                                <i class="Hui-iconfont" style="font-size:18px">&#xe68a;</i>
                            </a>
                        </li>
                        <li id="Hui-skin" class="dropDown right dropDown_hover">
                            <a href="javascript:;" class="dropDown_A" title="换肤">
                                <i class="Hui-iconfont" style="font-size:18px">&#xe62a;</i>
                            </a>
                            <ul class="dropDown-menu menu radius box-shadow">
                                <li><a href="javascript:;" data-val="default" title="默认（黑色）">默认（黑色）</a></li>
                                <li><a href="javascript:;" data-val="blue" title="蓝色">蓝色</a></li>
                                <li><a href="javascript:;" data-val="green" title="绿色">绿色</a></li>
                                <li><a href="javascript:;" data-val="red" title="红色">红色</a></li>
                                <li><a href="javascript:;" data-val="yellow" title="黄色">黄色</a></li>
                                <li><a href="javascript:;" data-val="orange" title="橙色">橙色</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <aside class="Hui-aside">
        <div class="menu_dropdown bk_2">
            <dl id="menu-article">
                <dt><i class="icon iconfont icon-erji-guanliyuanshouye"></i><span class="margin-left-10">管理员管理</span>
                    <i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i>
                </dt>
                <dd>
                    <ul>
                        <li><a data-href="{{ URL::asset('/admin/admin/index') }}" data-title="管理员管理"
                               href="javascript:void(0)">管理员管理</a></li>
                    </ul>
                </dd>
            </dl>
            <dl id="menu-picture">
                <dt><i class="icon iconfont icon-biaoshilei_rizhichaxun"></i><span class="margin-left-10">日志管理</span>
                    <i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i>
                </dt>
                <dd>
                    <ul>
                        <li><a data-href="{{ URL::asset('/admin/log/index') }}" data-title="下载错误日志" href="javascript:void(0)">下载错误日志</a>
                        </li>
                    </ul>
                </dd>
            </dl>
            <dl id="menu-product">
                <dt><i class="icon iconfont icon-banbengengxin"></i>
                    <span class="margin-left-10">版本管理</span>
                    <i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i>
                </dt>
                <dd>
                    <ul>
                        <li><a data-href="{{ URL::asset('/admin/version/index') }}" data-title="发布版本通知" href="javascript:void(0)">发布版本通知</a>
                        </li>
                    </ul>
                </dd>
            </dl>
            <dl id="menu-comments">
                <dt><i class="icon iconfont icon-yonhu"></i>
                    <span class="margin-left-10">用户账户管理</span>
                    <i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i>
                </dt>
                <dd>
                    <ul>
                        <li><a data-href="{{ URL::asset('/admin/user/index') }}" data-title="查询用户信息"
                               href="javascript:;">查询用户信息</a></li>
                    </ul>
                </dd>
            </dl>
            <dl id="menu-member">
                <dt>
                    <i class="icon iconfont icon-gongsimingcheng"></i>
                    <span class="margin-left-10">公司管理</span>
                    <i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i>
                </dt>
                <dd>
                    <ul>
                        <li><a data-href="{{ URL::asset('/admin/company/index') }}" data-title="公司管理" href="javascript:;">公司管理</a></li>
                        <li><a data-href="{{ URL::asset('/admin/company/create') }}" data-title="创建公司" href="javascript:;">创建公司</a></li>
                    </ul>
                </dd>
            </dl>
            <dl id="menu-member">
                <dt>
                    <i class="icon iconfont icon-moban"></i>
                    <span class="margin-left-10">公司模板管理</span>
                    <i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i>
                </dt>
                <dd>
                    <ul>
                        <li><a data-href="{{ URL::asset('/admin/template/comTemplate') }}" data-title="公司模板管理" href="javascript:;">公司模板管理</a></li>
                        <li><a data-href="{{ URL::asset('/admin/template/temExport') }}" data-title="公司模板导出" href="javascript:;">公司模板导出</a></li>
                        <li><a data-href="{{ URL::asset('/admin/template/processTem') }}" data-title="流程模板管理" href="javascript:;">流程模板管理</a></li>
                        <li><a data-href="{{ URL::asset('/admin/template/temEdit') }}" data-title="流程模板预设控件编辑" href="javascript:;">流程模板预设控件编辑</a>
                        </li>
                        <li><a data-href="{{ URL::asset('/admin/template/upTem') }}" data-title="流程模板预设控件升级" href="javascript:;">流程模板预设控件升级</a>
                        </li>
                        <li><a data-href="member-scoreoperation.html" data-title="流程分组管理" href="javascript:;">流程分组管理</a>
                        </li>
                        <li><a data-href="member-scoreoperation.html" data-title="流程审批配置管理"
                               href="javascript:;">流程审批配置管理</a>
                        </li>
                    </ul>
                </dd>
            </dl>
        </div>
    </aside>
    <div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a>
    </div>
    <section class="Hui-article-box">
        <div id="Hui-tabNav" class="Hui-tabNav hidden-xs">
            <div class="Hui-tabNav-wp">
                <ul id="min_title_list" class="acrossTab cl">
                    <li class="active">
                        <span title="业务概览" data-href="welcome.html">业务概览</span>
                        <em></em></li>
                </ul>
            </div>
            <div class="Hui-tabNav-more btn-group"><a id="js-tabNav-prev" class="btn radius btn-default size-S"
                                                      href="javascript:;"><i class="Hui-iconfont">&#xe6d4;</i></a><a
                        id="js-tabNav-next" class="btn radius btn-default size-S" href="javascript:;"><i
                            class="Hui-iconfont">
                        &#xe6d7;</i></a></div>
        </div>
        <div id="iframe_box" class="Hui-article">
            <div class="show_iframe">
                <div style="display:none" class="loading"></div>
                <iframe scrolling="yes" frameborder="0" src="{{ URL::asset('/admin/overview/index') }}"></iframe>
            </div>
        </div>
    </section>

    <div class="contextMenu" id="Huiadminmenu">
        <ul>
            <li id="closethis">关闭当前</li>
            <li id="closeall">关闭全部</li>
        </ul>
    </div>

@endsection

@section('script')
    <script type="text/javascript">
        $(function () {

        });

    </script>
@endsection