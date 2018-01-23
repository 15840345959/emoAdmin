@extends('admin.layouts.app')

@section('content')

    <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 版本管理 <span
                class="c-gray en">&gt;</span> 发布版本通知 <a class="btn btn-success radius r btn-refresh"
                                                        style="line-height:1.6em;margin-top:3px"
                                                        href="javascript:location.replace(location.href);" title="刷新"
                                                        onclick="location.replace('{{URL::asset('/admin/version/index')}}');"><i
                    class="Hui-iconfont">&#xe68f;</i></a></nav>
    <div class="page-container">
        <form class="form form-horizontal" id="form-admin-add">
            {{csrf_field()}}
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>平台：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <select id="" name="" class="select">
                        <option value="">平台一</option>
                        <option value="" >平台二</option>
                        <option value="" >平台三</option>
                    </select>
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>版本号：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input id="" name="" type="text" class="input-text" placeholder="请输入版本号">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>下载链接：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input id="" name="" type="text" class="input-text" placeholder="请输入下载链接">
                </div>
            </div>

            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2">升级说明：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <textarea class="textarea valid" placeholder="输入升级说明"></textarea>
                    {{--<p class="textarea-numberbar"><em class="textarea-length">0</em>/500</p> name="beizhu" onkeyup="$.Huitextarealength(this,500)"--}}
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"></label>
                <div class="check-box col-xs-4 col-sm-2" style="padding-left: 15px;">
                    <input type="checkbox" id="checkbox-1">
                    <label for="checkbox-1">复选框</label>
                </div>
            </div>

            <div class="row cl">
                <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
                    <input class="btn btn-primary radius" type="submit" value="发布">
                </div>
            </div>
        </form>
    </div>

@endsection

@section('script')
    <script type="text/javascript">

        $(function () {

        });


    </script>
    <style>
        .row{
            margin-left: -2rem;
        }
    </style>
@endsection