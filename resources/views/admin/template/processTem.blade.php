@extends('admin.layouts.app')

@section('content')

    <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 公司模板管理 <span
                class="c-gray en">&gt;</span> 流程模板管理 <a class="btn btn-success radius r btn-refresh"
                                                        style="line-height:1.6em;margin-top:3px"
                                                        href="javascript:location.replace(location.href);" title="刷新"
                                                        onclick="location.replace('{{URL::asset('/admin/template/processTem')}}');"><i
                    class="Hui-iconfont">&#xe68f;</i></a></nav>
    <div class="page-container">

        <div class="cl pd-5 mt-20">
            <span class="l">
                 <a href="javascript:;" onclick=""
                    class="btn btn-primary radius">
                     流程
                 </a>
            </span>
        </div>
        <table class="table table-border table-bordered table-bg" style="margin-top: 3rem;">
            <thead>
            <tr class="text-c">
                <th width="40">流程 class id</th>
                <th width="50">流程名称</th>
                <th width="150">最新id</th>
                <th width="90">流程类别</th>
                <th width="100">是否推送更新</th>
            </tr>
            </thead>
            <tbody>
            <tr class="text-c">
                <td>1</td>
                <td>111111</td>
                <td>4444444</td>
                <td>烦烦烦方法</td>
                <td class="td-manage">
                    {{--<div class="skin-minimal">--}}
                        <div class="check-box">
                            <input type="checkbox" id="checkbox-2">
                        </div>
                    {{--</div>--}}
                </td>
            </tr>
            </tbody>
        </table>
        <div class="cl pd-5 mt-20">
            <span class="l">
                 <a href="javascript:;" onclick=""
                    class="btn btn-primary radius">
                     公司筛选
                 </a>
            </span>
        </div>
        <form class="form form-horizontal" id="form-admin-add" style="margin-top: 2rem;">
        <div class="row">
            <label class="form-label col-xs-4 col-sm-1"><span class="c-red"></span>行业：</label>
            <div class="formControls col-xs-8 col-sm-2">
                <select id="" name="" class="select">
                    <option value="">条目一</option>
                    <option value="">条目二</option>
                </select>
            </div>
        </div>
        </form>
        <div class="text-c">
            {{--<form action="" method="post" class="form-horizontal">--}}
            {{--{{csrf_field()}}--}}
            <input id="search_word" name="search_word" type="text" class="input-text" style="width:450px"
                   placeholder="公司名称">
            <button type="submit" class="btn btn-success" id="" name="">
                <i class="Hui-iconfont">&#xe665;</i> 搜索
            </button>
            {{--</form>--}}
        </div>
        <form class="form form-horizontal" id="form-admin-add" style="margin-top: 2rem;">
            {{--<div class="row cl">--}}
                {{--<label class="form-label col-xs-4 col-sm-1"><span class="c-red"></span>行业：</label>--}}
                {{--<div class="formControls col-xs-8 col-sm-2">--}}
                    {{--<select id="" name="" class="select">--}}
                        {{--<option value="">条目一</option>--}}
                        {{--<option value="">条目二</option>--}}
                    {{--</select>--}}
                {{--</div>--}}
            {{--</div>--}}
            <table class="table table-border table-bordered table-bg" style="margin-top: 3rem;">
                <thead>
                <tr class="text-c">
                    <th width="40">公司ID</th>
                    <th width="50">公司名称</th>
                    <th width="150">创建时间</th>
                    <th width="90">公司人数</th>
                    <th width="100">是否升级</th>
                </tr>
                </thead>
                <tbody>
                <tr class="text-c">
                    <td>1</td>
                    <td>111111</td>
                    <td>4444444</td>
                    <td>烦烦烦方法</td>
                    <td class="td-manage">
                        {{--<div class="skin-minimal">--}}
                            <div class="check-box">
                                <input type="checkbox" id="checkbox-2">
                            </div>
                        {{--</div>--}}
                    </td>

                </tr>
                </tbody>
            </table>
        </form>
        <div class="skin-minimal" style="margin-top: 1.5rem;">
            <div class="check-box">
                <input type="checkbox" id="checkbox-1">
                <label for="checkbox-1">全部升级</label>
            </div>
        </div>
        <div class="cl pd-5 mt-20">
            <span class="l">
                 <a href="javascript:;" onclick=""
                    class="btn btn-primary radius">
                     升级
                 </a>
            </span>
        </div>
    </div>

@endsection

@section('script')
    <script type="text/javascript">

        $(function () {
            $('.skin-minimal input').iCheck({
                checkboxClass: 'icheckbox-blue',
                radioClass: 'iradio-blue',
                increaseArea: '20%'
            })
        });


    </script>
@endsection