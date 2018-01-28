@extends('admin.layouts.app')

@section('content')

    <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 组织架构管理-部门移动2
        <span
                class="c-gray en">&gt;</span> 组织架构管理-部门移动2 <a class="btn btn-success radius r btn-refresh"
                                                              style="line-height:1.6em;margin-top:3px"
                                                              href="javascript:location.replace(location.href);"
                                                              title="刷新"
                                                              onclick="location.replace('{{URL::asset('/admin/orgStructure/moveDepartment')}}');"><i
                    class="Hui-iconfont">&#xe68f;</i></a></nav>
    <div class="page-container">

        <aside class="Hui-aside">
            <div class="menu_dropdown bk_2">
                <dl id="menu-article">
                    <dt>
                        <span class="margin-left-10">组织架构</span>
                    </dt>
                </dl>
                <dl id="menu-picture">
                    <dt><span class="margin-left-10">家庭医疗展示平台</span>
                        <i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i>
                    </dt>
                </dl>
                <dl id="menu-product">
                    <dt>
                        <span class="margin-left-10">财务科</span>
                        <i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i>
                    </dt>
                </dl>
                <dl id="menu-comments">
                    <dt>
                        <span class="margin-left-10">拓展部</span>
                        <i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i>
                    </dt>
                </dl>
                <dl id="menu-member">
                    <dt>
                        <span class="margin-left-10">业务部</span>
                        <i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i>
                    </dt>
                </dl>
                <dl id="menu-member">
                    <dt>
                        <span class="margin-left-10">行政部</span>
                        <i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i>
                    </dt>
                    <dd>
                        <ul>
                            <li><a data-href="javascript:;" data-title="院务部" href="javascript:;">院务部</a></li>
                        </ul>
                    </dd>
                </dl>
                <dl id="menu-member">
                    <dt>
                        <span class="margin-left-3">[无部门人员]</span>
                        <i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i>
                    </dt>
                </dl>
            </div>
        </aside>
        <section class="Hui-article-box">
            <div class="cl pd-5 mt-20">
                <span class="l">
                    院务部 <span>>></span>
                </span>

                <span class="l">
                    部门设置
                </span>
            </div>
            <div class="text-c">
                {{--<form action="" method="post" class="form-horizontal">--}}
                {{--{{csrf_field()}}--}}
                <input id="search_word" name="search_word" type="text" class="input-text" style="width:450px"
                       placeholder="号码，姓名，成员，部门">
                <button type="submit" class="btn btn-success" id="" name="">
                    <i class="Hui-iconfont">&#xe665;</i> 搜索
                </button>
                {{--</form>--}}
            </div>
            <div class="cl pd-5 mt-20">
                {{--添加人员--}}
                <ul class="nav">
                    <li class="drop-down"><a href="#">添加人员</a>
                        <ul class="drop-down-content">
                            <li><a href="{{URL::asset('/admin/orgStructure/addOnePerson')}}">单个添加</a></li>
                            <li><a href="{{URL::asset('/admin/orgStructure/addBatchPerson')}}">批量添加</a></li>
                        </ul>
                    </li>
                </ul>
                <style>
                    ul {
                        list-style: none;
                    }

                    .nav > li {
                        float: left;
                    }

                    ul a {
                        display: block;
                        text-decoration: none;
                        width: 100px;
                        height: 33px;
                        text-align: center;
                        line-height: 33px;
                        color: white;
                        background-color: #5a98de;
                    }

                    .nav > li:first-child a {
                        border-radius: 5px;
                    }

                    .nav > li:last-child a {
                        border-radius: 5px ;
                    }

                    .drop-down {
                        position: relative;
                    }

                    .drop-down-content {
                        padding: 0;
                        position: absolute;
                        left: -999px;
                    }

                    h3 {
                        font-size: 30px;
                        clear: both;
                    }

                    .drop-down-content li:hover a {
                        background-color: #0a6999;
                    }

                    .nav .drop-down:hover .drop-down-content {
                        left: 0;
                    }
                </style>

                <span class="l" style="margin-left: 16px;">
                    <button type="button" class="btn btn-primary radius" title="" data-container="body"
                            data-toggle="popover" data-placement="bottom" data-content="负责人"
                            aria-describedby="popover67501">设为主管</button>
                </span>
                <span class="l" style="margin-left: 16px;">
                    <a href="{{URL::asset('/admin/orgStructure/role')}}" onclick="" class="btn btn-primary radius">
                     角色
                    </a>
                </span>
                <span class="l" style="margin-left: 16px;">
                    <a href="{{URL::asset('/admin/orgStructure/personnelMove')}}" onclick=""
                       class="btn btn-primary radius">
                     人员移动
                    </a>
                </span>
                <span class="l" style="margin-left: 16px;">
                    <a href="javascript:;" onclick="depart_quit()" class="btn btn-primary radius">
                     离职
                    </a>
                </span>
                <span class="l" style="margin-left: 400px;">
                    <a href="javascript:;" onclick="" class="btn btn-primary radius">
                      <i class="icon iconfont">&#xe697;</i>
                    </a>
                </span>
                <span class="l" style="margin-left: 16px;">
                    <a href="javascript:;" onclick="" class="btn btn-primary radius">
                     <i class="icon iconfont">&#xe623;</i>
                    </a>
                </span>
            </div>
            <form class="form form-horizontal" id="form-admin-add"
                  style="margin-top: 2rem;margin-left: 2rem;margin-right: 6rem;">
                <table class="table table-border table-bordered table-bg" style="margin-top: 3rem;">
                    <thead>
                    <tr class="text-c">
                        <th width="50"><input type="radio" id="radio-1" name="demo-radio1"
                                              style="margin-right: 2.8rem;">成员<span>（1）</span></th>
                        <th width="50">职位</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="text-c">
                        <td>
                            {{--<div class="radio-box">--}}
                            <input type="radio" id="radio-1" name="demo-radio1" style="margin-right: 1.5rem;">
                            {{--<label for="radio-1">单选按钮</label>--}}
                            {{--</div>--}}
                            <img src="{{URL::asset('/img/default_headicon.png')}}" class="img-rect-30 radius-5"
                                 style="border-radius: 15px;">
                            <span style="margin-left: 1rem;">姓名</span><br>
                            <span style="position: fixed;margin-top: -0.5rem;margin-left: 1rem;">18312345678 <span>未登录</span></span>
                        </td>
                        <td>部长</td>
                    </tr>
                    </tbody>
                </table>
            </form>
            <div class="cl pd-5 mt-20">
                <span class="l" style="margin-left: 16px;">
                    <a href="{{URL::asset('/admin/orgStructure/addJuniorDepartment')}}" onclick=""
                       class="btn btn-primary radius">
                     添加下级部门
                    </a>
                </span>
                <span class="l" style="margin-left: 16px;">
                    <a href="{{URL::asset('/admin/orgStructure/departMove')}}" onclick=""
                       class="btn btn-primary radius">
                     部门移动
                    </a>
                </span>
                <span class="l" style="margin-left: 16px;">
                    <a href="javascript:;" onclick="depart_del()" class="btn btn-primary radius">
                     删除
                    </a>
                </span>
                <span class="l" style="margin-left: 545px;">
                    <a href="javascript:;" onclick="" class="btn btn-primary radius">
                     <i class="icon iconfont">&#xe623;</i>
                    </a>
                </span>
            </div>
            <form class="form form-horizontal" id="form-admin-add"
                  style="margin-top: 2rem;margin-left: 2rem;margin-right: 6rem;">
                <table class="table table-border table-bordered table-bg" style="margin-top: 3rem;">
                    <thead>
                    <tr class="text-c">
                        <th width="40"><input type="radio" id="radio-1" name="demo-radio1" style="margin-right: 1rem;">下级部门<span>（1）</span>
                        </th>
                        <th width="50">人数</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="text-c">
                        <td>
                            <input type="radio" id="radio-1" name="demo-radio1" style="margin-left: -4rem;">
                            {{--<img src="{{URL::asset('/img/default_headicon.png')}}" class="img-rect-30 radius-5" style="border-radius: 15px;">--}}
                            <span>行政</span><br>
                        </td>
                        <td>5</td>
                    </tr>
                    </tbody>
                </table>
            </form>
        </section>
    </div>

@endsection

@section('script')
    <script type="text/javascript">
        /*管理员-删除*/
        function depart_del() {
            layer.confirm('部门中还有人员，确认要删除吗？' + '<br/>' + '删除该部门后人员将统一移到未分配人员类别，请谨慎操作！', function (index) {
            });
        }
        /*离职*/
        function depart_quit() {
            layer.confirm('确定所选人员离职吗？' + '<br/>' + '人员离职后将永久性失去所有职务和权限，请谨慎操作！', function (index) {
            });
        }
        function showsub(li) {
            var submenu = li.getElementsByTagName("ul")[0];
            submenu.style.display = "block";
        }
        function hidesub(li) {
            var submenu = li.getElementsByTagName("ul")[0];
            submenu.style.display = "none";
        }

    </script>
@endsection

{{--@section('css')--}}
{{--<style type="text/css">--}}
{{--ul li:hover ul{--}}
{{--display:block;//使用hover，当鼠标移动到对应的一级菜单上是显示二级菜单--}}
{{--}--}}
{{--</style>--}}
{{--@endsection--}}












